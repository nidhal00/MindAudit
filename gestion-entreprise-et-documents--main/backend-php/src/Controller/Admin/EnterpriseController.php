<?php

namespace App\Controller\Admin;

use App\Entity\Entreprise;
use App\Form\EntrepriseType;
use App\Repository\EntrepriseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/admin/entreprise')]
class EnterpriseController extends AbstractController
{
    #[Route('/', name: 'app_entreprise_index', methods: ['GET'])]
    public function index(Request $request, EntrepriseRepository $entrepriseRepository): Response
    {
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        
        $query = $entrepriseRepository->createQueryBuilder('e')
            ->orderBy('e.id', 'DESC')
            ->getQuery();
        
        $paginator = new \Doctrine\ORM\Tools\Pagination\Paginator($query);
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);
        
        $paginator
            ->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);
        
        return $this->render('admin/entreprise/index.html.twig', [
            'entreprises' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);
    }

    #[Route('/search', name: 'app_entreprise_search', methods: ['GET'])]
    public function search(Request $request, EntrepriseRepository $entrepriseRepository): Response
    {
        $nom = $request->query->get('nom');
        $secteur = $request->query->get('secteur');
        $taille = $request->query->get('taille');
        $pays = $request->query->get('pays');
        $statut = $request->query->get('statut');

        $queryBuilder = $entrepriseRepository->createQueryBuilder('e');

        if ($nom) {
            $queryBuilder->andWhere('e.nom LIKE :nom')->setParameter('nom', '%' . $nom . '%');
        }
        if ($secteur) {
            $queryBuilder->andWhere('e.secteur LIKE :secteur')->setParameter('secteur', '%' . $secteur . '%');
        }
        if ($taille) {
            $queryBuilder->andWhere('e.taille = :taille')->setParameter('taille', $taille);
        }
        if ($pays) {
            $queryBuilder->andWhere('e.pays LIKE :pays')->setParameter('pays', '%' . $pays . '%');
        }
        if ($statut) {
            $queryBuilder->andWhere('e.statut = :statut')->setParameter('statut', $statut);
        }

        // Gestion du tri
        $sort = $request->query->get('sort', 'nom');
        $order = $request->query->get('order', 'ASC');
        
        // Sécurisation du tri pour éviter les injections
        $allowedSorts = ['nom', 'secteur', 'taille', 'pays', 'statut'];
        if (in_array($sort, $allowedSorts)) {
            $queryBuilder->orderBy('e.' . $sort, $order);
        } else {
            $queryBuilder->orderBy('e.nom', 'ASC');
        }

        // Pagination
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        
        $paginator = new \Doctrine\ORM\Tools\Pagination\Paginator($queryBuilder);
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);
        
        $paginator
            ->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        if ($request->isXmlHttpRequest()) {
            return $this->render('admin/entreprise/_table.html.twig', [
                'entreprises' => $paginator,
                'currentPage' => $page,
                'totalPages' => $totalPages,
                'totalItems' => $totalItems,
            ]);
        }

        return $this->render('admin/entreprise/index.html.twig', [
            'entreprises' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);
    }

    #[Route('/new', name: 'app_entreprise_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $entreprise = new Entreprise();
        $form = $this->createForm(EntrepriseType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($entreprise);
            $entityManager->flush();

            return $this->redirectToRoute('app_entreprise_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/entreprise/new.html.twig', [
            'entreprise' => $entreprise,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_entreprise_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Entreprise $entreprise, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EntrepriseType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_entreprise_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/entreprise/edit.html.twig', [
            'entreprise' => $entreprise,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_entreprise_show', methods: ['GET'])]
    public function show(Entreprise $entreprise): Response
    {
        $documents = $entreprise->getDocuments();
        
        // Calculer la conformité moyenne (IA score)
        $totalScore = 0;
        $count = 0;
        foreach ($documents as $doc) {
            if ($doc->getNoteIA() !== null) {
                $totalScore += $doc->getNoteIA();
                $count++;
            }
        }
        $avgCompliance = $count > 0 ? $totalScore / $count : 0;

        return $this->render('admin/entreprise/show.html.twig', [
            'entreprise' => $entreprise,
            'documents' => $documents,
            'avg_compliance' => $avgCompliance
        ]);
    }

    #[Route('/{id}/validate', name: 'app_entreprise_validate', methods: ['POST'])]
    public function validate(Entreprise $entreprise, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        // Générer un code d'accès si l'entreprise n'en a pas
        if (!$entreprise->getAccessCode()) {
            $accessCode = 'ENT-' . strtoupper(substr(md5(uniqid()), 0, 8));
            $entreprise->setAccessCode($accessCode);
        }

        $entreprise->setStatut('valide');
        $entityManager->flush();

        // Envoi de l'email de validation avec le template dédié
        try {
            $email = (new TemplatedEmail())
                ->from(new Address('gouader.nidhal@esprit.tn', 'MindAudit Admin'))
                ->to($entreprise->getEmail())
                ->subject('🎉 Votre entreprise a été validée - MindAudit')
                ->htmlTemplate('emails/validation.html.twig')
                ->context([
                    'entreprise' => $entreprise,
                ]);

            $mailer->send($email);
            $this->addFlash('success', 'L\'entreprise ' . $entreprise->getNom() . ' a été validée avec succès et un email avec le code d\'accès a été envoyé.');
        } catch (\Exception $e) {
            $this->addFlash('warning', 'L\'entreprise a été validée mais l\'email n\'a pas pu être envoyé : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_entreprise_show', ['id' => $entreprise->getId()]);
    }

    #[Route('/{id}/reject', name: 'app_entreprise_reject', methods: ['POST'])]
    public function reject(Request $request, Entreprise $entreprise, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $commentaire = $request->request->get('commentaire');
        $entreprise->setStatut('rejete');
        $entityManager->flush();

        // Envoi de l'email de rejet avec le template dédié
        try {
            $email = (new TemplatedEmail())
                ->from(new Address('gouader.nidhal@esprit.tn', 'MindAudit Admin'))
                ->to($entreprise->getEmail())
                ->subject('⚠️ Votre demande a été rejetée - MindAudit')
                ->htmlTemplate('emails/rejection.html.twig')
                ->context([
                    'entreprise' => $entreprise,
                    'raison' => $commentaire,
                ]);

            $mailer->send($email);
            $this->addFlash('error', 'L\'entreprise ' . $entreprise->getNom() . ' a été rejetée et un email a été envoyé.');
        } catch (\Exception $e) {
            $this->addFlash('warning', 'L\'entreprise a été rejetée mais l\'email n\'a pas pu être envoyé : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_entreprise_show', ['id' => $entreprise->getId()]);
    }

    #[Route('/{id}/pdf', name: 'app_entreprise_pdf', methods: ['GET'])]
    public function exportPdf(Entreprise $entreprise): Response
    {
        // 1. Configuration DomPDF
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($pdfOptions);

        $html = $this->renderView('admin/entreprise/pdf.html.twig', [
            'entreprise' => $entreprise,
            'qrCode' => null // Le QR code n'est plus affiché dans le PDF
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="entreprise_' . $entreprise->getId() . '.pdf"',
        ]);
    }

    #[Route('/{id}', name: 'app_entreprise_delete', methods: ['POST'])]
    public function delete(Request $request, Entreprise $entreprise, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entreprise->getId(), $request->request->get('_token'))) {
            $entityManager->remove($entreprise);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_entreprise_index', [], Response::HTTP_SEE_OTHER);
    }
}
