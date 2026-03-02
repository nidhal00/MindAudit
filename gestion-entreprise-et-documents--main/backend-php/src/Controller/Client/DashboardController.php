<?php

namespace App\Controller\Client;

use App\Entity\Document;
use App\Entity\Entreprise;
use App\Form\DocumentType;
use App\Repository\EntrepriseRepository;
use App\Service\AIService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/employee')]
class DashboardController extends AbstractController
{
    /**
     * Vérifie que l'utilisateur est connecté et que son code d'accès correspond
     */
    private function getAuthenticatedEntreprise(Request $request, EntrepriseRepository $entrepriseRepository): ?Entreprise
    {
        $entrepriseId = $request->getSession()->get('employee_entreprise_id');
        $accessCode = $request->getSession()->get('employee_access_code');
        
        if (!$entrepriseId || !$accessCode) {
            return null;
        }

        $entreprise = $entrepriseRepository->find($entrepriseId);

        // Vérification de sécurité : le code d'accès doit correspondre
        if (!$entreprise || $entreprise->getAccessCode() !== $accessCode) {
            $request->getSession()->remove('employee_entreprise_id');
            $request->getSession()->remove('employee_access_code');
            return null;
        }

        return $entreprise;
    }

    #[Route('/login', name: 'app_employee_login')]
    public function login(Request $request, EntrepriseRepository $entrepriseRepository): Response
    {
        // If already logged in with valid session, redirect to dashboard
        $authenticatedEntreprise = $this->getAuthenticatedEntreprise($request, $entrepriseRepository);
        if ($authenticatedEntreprise) {
            return $this->redirectToRoute('app_employee_dashboard');
        }

        $error = null;
        $code = $request->query->get('code');

        // 1. Auto-Login via Magic Link (GET)
        if ($code && $request->isMethod('GET')) {
            $entreprise = $entrepriseRepository->findOneBy(['accessCode' => $code]);
            if ($entreprise && $entreprise->getStatut() === Entreprise::STATUT_VALIDE) {
                $request->getSession()->set('employee_entreprise_id', $entreprise->getId());
                $request->getSession()->set('employee_access_code', $code);
                $this->addFlash('success', 'Bienvenue ! Connexion automatique réussie.');
                return $this->redirectToRoute('app_employee_dashboard');
            }
        }

        // 2. Manual Login (POST)
        if ($request->isMethod('POST')) {
            $code = $request->request->get('access_code');
            $entreprise = $entrepriseRepository->findOneBy(['accessCode' => $code]);

            if ($entreprise && $entreprise->getStatut() === Entreprise::STATUT_VALIDE) {
                $request->getSession()->set('employee_entreprise_id', $entreprise->getId());
                $request->getSession()->set('employee_access_code', $code);
                return $this->redirectToRoute('app_employee_dashboard');
            } else {
                $error = 'Code d\'accès invalide ou entreprise non validée.';
            }
        }

        return $this->render('client/login.html.twig', [
            'code' => $code,
            'error' => $error
        ]);
    }

    #[Route('/logout', name: 'app_employee_logout')]
    public function logout(Request $request): Response
    {
        $request->getSession()->remove('employee_entreprise_id');
        $request->getSession()->remove('employee_access_code');
        return $this->redirectToRoute('app_employee_login');
    }

    #[Route('/dashboard', name: 'app_employee_dashboard')]
    public function dashboard(Request $request, EntrepriseRepository $entrepriseRepository): Response
    {
        $entreprise = $this->getAuthenticatedEntreprise($request, $entrepriseRepository);
        
        if (!$entreprise) {
            $this->addFlash('error', 'Session invalide. Veuillez vous reconnecter.');
            return $this->redirectToRoute('app_employee_login');
        }

        // Génération du QR Code pour l'affichage
        $qrCodeDataUri = null;
        try {
            $result = \Endroid\QrCode\Builder\Builder::create()
                ->writer(new \Endroid\QrCode\Writer\SvgWriter())
                ->writerOptions([])
                ->data('https://mindaudit.tn/verify/' . $entreprise->getAccessCode())
                ->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'))
                ->errorCorrectionLevel(\Endroid\QrCode\ErrorCorrectionLevel::High)
                ->size(150)
                ->margin(0)
                ->validateResult(false)
                ->build();

            $qrCodeDataUri = $result->getDataUri();
        } catch (\Exception $e) {
            // Ignorer l'erreur si le QR code ne peut pas être généré
        }

        return $this->render('client/dashboard.html.twig', [
            'entreprise' => $entreprise,
            'documents' => $entreprise->getDocuments(),
            'qrCode' => $qrCodeDataUri
        ]);
    }

    #[Route('/download-pdf', name: 'app_employee_download_pdf')]
    public function downloadPdf(Request $request, EntrepriseRepository $entrepriseRepository): Response
    {
        $entreprise = $this->getAuthenticatedEntreprise($request, $entrepriseRepository);

        if (!$entreprise) {
            $this->addFlash('error', 'Session invalide.');
            return $this->redirectToRoute('app_employee_login');
        }

        // 1. Génération du QR Code (SVG)
        $qrCodeDataUri = null;
        try {
            $result = \Endroid\QrCode\Builder\Builder::create()
                ->writer(new \Endroid\QrCode\Writer\SvgWriter())
                ->writerOptions([])
                ->data('https://mindaudit.tn/verify/' . $entreprise->getAccessCode())
                ->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'))
                ->errorCorrectionLevel(\Endroid\QrCode\ErrorCorrectionLevel::High)
                ->size(300)
                ->margin(10)
                ->validateResult(false)
                ->build();

            $qrCodeDataUri = $result->getDataUri();
        } catch (\Exception $e) {
            // Ignorer
        }

        // 2. Configuration DomPDF
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($pdfOptions);

        $html = $this->renderView('admin/entreprise/pdf.html.twig', [
            'entreprise' => $entreprise,
            'qrCode' => $qrCodeDataUri,
            'documents' => $entreprise->getDocuments()
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Fiche_Complete_' . $entreprise->getMatriculeFiscale() . '.pdf"',
        ]);
    }

    #[Route('/upload', name: 'app_employee_upload')]
    public function upload(Request $request, EntrepriseRepository $entrepriseRepository, EntityManagerInterface $entityManager, AIService $aiService): Response
    {
        $entreprise = $this->getAuthenticatedEntreprise($request, $entrepriseRepository);
        
        if (!$entreprise) {
            $this->addFlash('error', 'Session invalide. Veuillez vous reconnecter.');
            return $this->redirectToRoute('app_employee_login');
        }
        
        $document = new Document();
        $document->setEntreprise($entreprise);
        
        $form = $this->createForm(\App\Form\EmployeeDocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set default values for employee upload
            $document->setStatut(Document::STATUT_EN_ATTENTE);
            // On peut mettre 0 ou un ID conventionnel pour "Entreprise"
            $document->setUploadedBy(0); 

            // AI Analysis
            // Note: Le fichier est déjà uploadé par VichUploader à ce stade (pre-persist)
            // Mais pour l'analyser, on doit s'assurer qu'il est accessible.
            // AIService attend l'entité Document mais utilise $document->getImageFile()
            
            try {
                $analysis = $aiService->analyzeDocument($document);
                $document->setNoteIA($analysis['score']);
                $document->setAnalysisReport($analysis);
            } catch (\Exception $e) {
                // Fallback si l'IA échoue
                $document->setNoteIA(0);
                $document->setAnalysisReport(['error' => $e->getMessage()]);
            }
            
            $entityManager->persist($document);
            $entityManager->flush();

            $this->addFlash('success', 'Document ajouté avec succès ! Score IA : ' . ($analysis['score'] ?? 0) . '%');

            return $this->redirectToRoute('app_employee_dashboard');
        }

        return $this->render('client/upload.html.twig', [
            'form' => $form->createView(),
            'entreprise' => $entreprise
        ]);
    }

    #[Route('/entreprise/edit', name: 'app_employee_edit_entreprise', methods: ['POST'])]
    public function editEntreprise(Request $request, EntrepriseRepository $entrepriseRepository, EntityManagerInterface $entityManager, \App\Service\HistoryService $historyService): Response
    {
        $entreprise = $this->getAuthenticatedEntreprise($request, $entrepriseRepository);
        
        if (!$entreprise) {
            $this->addFlash('error', 'Session invalide. Veuillez vous reconnecter.');
            return $this->redirectToRoute('app_employee_login');
        }

        // Only allow editing email, telephone, and adresse
        $email = $request->request->get('email');
        $telephone = $request->request->get('telephone');
        $adresse = $request->request->get('adresse');

        if ($email) {
            $entreprise->setEmail($email);
        }
        if ($telephone !== null) {
            $entreprise->setTelephone($telephone);
        }
        if ($adresse !== null) {
            $entreprise->setAdresse($adresse);
        }

        $entityManager->flush();

        // Log History
        $historyService->log('UPDATE', "Modification des informations de l'entreprise (Email/Tel/Adresse).", $entreprise);

        $this->addFlash('success', 'Informations mises à jour avec succès.');
        return $this->redirectToRoute('app_employee_dashboard');

    }

    #[Route('/entreprise/delete', name: 'app_employee_delete_entreprise', methods: ['POST'])]
    public function deleteEntreprise(Request $request, EntrepriseRepository $entrepriseRepository, EntityManagerInterface $entityManager): Response
    {
        $entreprise = $this->getAuthenticatedEntreprise($request, $entrepriseRepository);
        
        if (!$entreprise) {
            $this->addFlash('error', 'Session invalide. Veuillez vous reconnecter.');
            return $this->redirectToRoute('app_employee_login');
        }

        // Delete all documents first
        foreach ($entreprise->getDocuments() as $document) {
            $entityManager->remove($document);
        }

        // Delete the enterprise
        $entityManager->remove($entreprise);
        $entityManager->flush();

        // Clear session
        $request->getSession()->remove('employee_entreprise_id');
        $request->getSession()->remove('employee_access_code');

        $this->addFlash('success', 'Votre compte entreprise a été supprimé avec succès.');
        return $this->redirectToRoute('app_front_home');
    }
}
