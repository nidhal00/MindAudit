<?php

namespace App\Controller\Admin;

use App\Entity\Document;
use App\Repository\DocumentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/document')]
class DocumentController extends AbstractController
{
    #[Route('/', name: 'app_document_index', methods: ['GET'])]
    public function index(Request $request, DocumentRepository $documentRepository): Response
    {
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        
        $query = $documentRepository->createQueryBuilder('d')
            ->orderBy('d.id', 'DESC')
            ->getQuery();
        
        $paginator = new \Doctrine\ORM\Tools\Pagination\Paginator($query);
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);
        
        $paginator
            ->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $this->render('admin/document/index.html.twig', [
            'documents' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);
    }

    #[Route('/search', name: 'app_document_search', methods: ['GET'])]
    public function search(Request $request, DocumentRepository $documentRepository): Response
    {
        $nom = $request->query->get('nom');
        $entreprise = $request->query->get('entreprise');
        $type = $request->query->get('type');
        $statut = $request->query->get('statut');

        $queryBuilder = $documentRepository->createQueryBuilder('d')
            ->leftJoin('d.entreprise', 'e');

        if ($nom) {
            $queryBuilder->andWhere('d.nom LIKE :nom')->setParameter('nom', '%' . $nom . '%');
        }
        if ($entreprise) {
            $queryBuilder->andWhere('e.nom LIKE :ent')->setParameter('ent', '%' . $entreprise . '%');
        }
        if ($type) {
            $queryBuilder->andWhere('d.type = :type')->setParameter('type', $type);
        }
        if ($statut) {
            $queryBuilder->andWhere('d.statut = :statut')->setParameter('statut', $statut);
        }

        $queryBuilder->orderBy('d.id', 'DESC');

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
            return $this->render('admin/document/_table.html.twig', [
                'documents' => $paginator,
                'currentPage' => $page,
                'totalPages' => $totalPages,
                'totalItems' => $totalItems,
            ]);
        }

        return $this->render('admin/document/index.html.twig', [
            'documents' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);
    }

    #[Route('/{id}', name: 'app_document_show', methods: ['GET'])]
    public function show(Document $document): Response
    {
        return $this->render('admin/document/show.html.twig', [
            'document' => $document,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_document_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Document $document, EntityManagerInterface $entityManager): Response
    {
        // On peut réutiliser un DocumentType si besoin, ou faire une édition simple de statut
        // Pour l'admin, on veut souvent valider/rejeter
        return $this->render('admin/document/edit.html.twig', [
            'document' => $document,
        ]);
    }

    #[Route('/{id}/validate', name: 'app_document_validate', methods: ['POST'])]
    public function validate(Document $document, EntityManagerInterface $entityManager): Response
    {
        $document->setStatut('valide');
        $entityManager->flush();

        $this->addFlash('success', 'Le document ' . $document->getNom() . ' a été validé.');

        return $this->redirectToRoute('app_document_show', ['id' => $document->getId()]);
    }

    #[Route('/{id}/reject', name: 'app_document_reject', methods: ['POST'])]
    public function reject(Request $request, Document $document, EntityManagerInterface $entityManager): Response
    {
        $commentaire = $request->request->get('commentaire');
        $document->setStatut('rejete');
        $entityManager->flush();

        $this->addFlash('error', 'Le document ' . $document->getNom() . ' a été rejeté.');

        return $this->redirectToRoute('app_document_show', ['id' => $document->getId()]);
    }

    #[Route('/{id}/pdf', name: 'app_document_pdf', methods: ['GET'])]
    public function exportPdf(Document $document): Response
    {
        // Redirection vers AuditController qui gère déjà le PDF
        return $this->redirectToRoute('app_employee_audit_report', ['id' => $document->getId()]);
    }

    #[Route('/{id}', name: 'app_document_delete', methods: ['POST'])]
    public function delete(Request $request, Document $document, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$document->getId(), $request->request->get('_token'))) {
            $entityManager->remove($document);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_document_index', [], Response::HTTP_SEE_OTHER);
    }
}
