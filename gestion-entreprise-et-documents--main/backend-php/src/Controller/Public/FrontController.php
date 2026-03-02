<?php

namespace App\Controller\Public;

use App\Repository\DocumentRepository;
use App\Repository\EntrepriseRepository;
use App\Entity\Entreprise;
use App\Form\RegistrationEntrepriseType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front_home')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig');
    }

    #[Route('/annuaire', name: 'app_front_annuaire')]
    public function annuaire(EntrepriseRepository $entrepriseRepository): Response
    {
        return $this->render('front/annuaire.html.twig', [
            'entreprises' => $entrepriseRepository->findAll(),
        ]);
    }

    #[Route('/espace-entreprise', name: 'app_front_espace_entreprise')]
    public function espaceEntreprise(): Response
    {
        return $this->render('front/espace_entreprise.html.twig');
    }

    #[Route('/register', name: 'app_front_register', methods: ['GET', 'POST'])]
    public function register(Request $request, EntityManagerInterface $entityManager, \App\Service\RegistrationAnalyzer $analyzer, \App\Service\NotificationService $notificationService): Response
    {
        $entreprise = new Entreprise();
        $form = $this->createForm(RegistrationEntrepriseType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Sécurité : Si l'utilisateur était connecté à une autre entreprise, on détruit la session
            $request->getSession()->remove('employee_entreprise_id');

            // Analyse IA
            $analysis = $analyzer->analyze($entreprise);
            $entreprise->setStatut($analysis['decision']);
            
            // Si validé automatiquement (selon score), générer le code d'accès
            if ($analysis['decision'] === Entreprise::STATUT_VALIDE) {
                $maxAttempts = 10;
                $attempt = 0;
                $accessCode = null;

                while ($attempt < $maxAttempts) {
                    $accessCode = 'ENT-' . strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));
                    
                    // Vérifier si le code existe déjà
                    $existing = $entityManager->getRepository(Entreprise::class)->findOneBy(['accessCode' => $accessCode]);
                    
                    if (!$existing) {
                        break; // Code unique trouvé
                    }
                    
                    $attempt++;
                }

                if ($attempt >= $maxAttempts) {
                    $this->addFlash('error', 'Erreur lors de la génération du code d\'accès. Veuillez réessayer.');
                    return $this->redirectToRoute('app_front_register');
                }

                $entreprise->setAccessCode($accessCode);
                
                $msg = 'Félicitations ! Validation IA réussie (Score: '.$analysis['score'].'/100).';
                $msg .= ' Utilisez le code d\'accès généré pour vous connecter.';
                $this->addFlash('success', $msg);
            } else {
                $msg = 'Votre dossier est en attente de validation manuelle (Score IA: '.$analysis['score'].'/100).';
                $this->addFlash('info', $msg);
            }

            $entityManager->persist($entreprise);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_front_registration_success', ['matricule' => $entreprise->getMatriculeFiscale()]);
        }

        return $this->render('front/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/suivi', name: 'app_front_status', methods: ['GET', 'POST'])]
    public function status(Request $request, EntrepriseRepository $entrepriseRepository): Response
    {
        $entreprise = null;
        $error = null;
        $matricule = $request->request->get('matricule') ?? $request->query->get('matricule');

        if ($request->isMethod('POST') || $matricule) {
            if ($matricule) {
                $entreprise = $entrepriseRepository->findOneBy(['matriculeFiscale' => $matricule]);
                if (!$entreprise) {
                    $error = 'Aucune entreprise trouvée avec ce matricule.';
                }
            }
        }

        return $this->render('front/status.html.twig', [
            'entreprise' => $entreprise,
            'matricule' => $matricule,
            'error' => $error
        ]);
    }
    #[Route('/register/success', name: 'app_front_registration_success')]
    public function registrationSuccess(Request $request, EntrepriseRepository $entrepriseRepository): Response
    {
        $matricule = $request->query->get('matricule');
        $entreprise = $entrepriseRepository->findOneBy(['matriculeFiscale' => $matricule]);

        return $this->render('front/registration_success.html.twig', [
            'matricule' => $matricule,
            'entreprise' => $entreprise
        ]);
    }

    /**
     * FUTUR : Endpoint API pour vérifier si l'utilisateur connecté possède une entreprise.
     * Utilisé pour la transition fluide MindAudit User -> Espace Entreprise.
     */
    #[Route('/api/check-owner', name: 'api_check_owner', methods: ['GET'])]
    public function apiCheckOwner(Request $request, EntrepriseRepository $entrepriseRepository): Response
    {
        // Récupération de l'utilisateur connecté via Symfony Security
        $userEmail = $request->getSession()->get('_security.last_username');
        
        if (!$userEmail) {
             return $this->json([
                'has_entreprise' => false,
                'message' => 'Utilisateur non connecté'
            ]);
        }
        
        $entreprise = $entrepriseRepository->findOneBy(['createurEmail' => $userEmail]);

        return $this->json([
            'has_entreprise' => $entreprise !== null,
            'entreprise_nom' => $entreprise ? $entreprise->getNom() : null,
            'redirect_url' => $entreprise ? $this->generateUrl('app_employee_dashboard') : $this->generateUrl('app_front_register')
        ]);
    }
    #[Route('/verify/{accessCode}', name: 'app_front_verify')]
    public function verify(string $accessCode, EntrepriseRepository $entrepriseRepository): Response
    {
        $entreprise = $entrepriseRepository->findOneBy(['accessCode' => $accessCode]);

        if (!$entreprise) {
            throw $this->createNotFoundException('Entreprise non trouvée ou code invalide.');
        }

        return $this->render('front/verify.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }
}
