<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\DocumentRepository;
use App\Repository\EntrepriseRepository;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('', name: 'app_admin_dashboard')]
    public function index(EntrepriseRepository $entrepriseRepo, DocumentRepository $documentRepo): Response
    {
        // Stats Entreprises par Secteur
        $entreprisesBySector = $entrepriseRepo->createQueryBuilder('e')
            ->select('e.secteur, COUNT(e.id) as count')
            ->groupBy('e.secteur')
            ->getQuery()
            ->getResult();

        // Stats Documents par Statut
        $documentsByStatus = $documentRepo->createQueryBuilder('d')
            ->select('d.statut, COUNT(d.id) as count')
            ->groupBy('d.statut')
            ->getQuery()
            ->getResult();

        // Moyenne Note IA par Secteur
        $avgIABySector = $entrepriseRepo->createQueryBuilder('e')
            ->select('e.secteur, AVG(d.noteIA) as avg_score')
            ->innerJoin('e.documents', 'd')
            ->groupBy('e.secteur')
            ->getQuery()
            ->getResult();

        // Totaux pour les cartes
        $totalEntreprises = $entrepriseRepo->count([]);
        $totalDocuments = $documentRepo->count([]);

        // Activités Récentes (Dernières inscriptions et derniers documents)
        $recentEntreprises = $entrepriseRepo->findBy([], ['id' => 'DESC'], 5);
        $recentDocuments = $documentRepo->findBy([], ['id' => 'DESC'], 5);

        return $this->render('admin/index.html.twig', [
            'total_entreprises' => $totalEntreprises,
            'total_documents' => $totalDocuments,
            'sector_stats' => $entreprisesBySector,
            'status_stats' => $documentsByStatus,
            'avg_ia_stats' => $avgIABySector,
            'recent_entreprises' => $recentEntreprises,
            'recent_documents' => $recentDocuments,
        ]);
    }

    #[Route('/calendar', name: 'app_admin_calendar')]
    public function calendar(): Response
    {
        return $this->render('admin/calendar.html.twig');
    }

    #[Route('/export/pdf', name: 'app_admin_export_pdf')]
    public function exportReport(EntrepriseRepository $entrepriseRepo, DocumentRepository $documentRepo): Response
    {
        // Récupération des données pour le rapport
        $totalEntreprises = $entrepriseRepo->count([]);
        $totalDocuments = $documentRepo->count([]);
        $recentEntreprises = $entrepriseRepo->findBy([], ['id' => 'DESC'], 10);
        $documentsByStatus = $documentRepo->createQueryBuilder('d')
            ->select('d.statut, COUNT(d.id) as count')
            ->groupBy('d.statut')
            ->getQuery()
            ->getResult();

        // Configuration DomPDF
        $pdfOptions = new \Dompdf\Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);

        $dompdf = new \Dompdf\Dompdf($pdfOptions);

        $html = $this->renderView('admin/report.html.twig', [
            'total_entreprises' => $totalEntreprises,
            'total_documents' => $totalDocuments,
            'recent_entreprises' => $recentEntreprises,
            'status_stats' => $documentsByStatus,
            'date' => new \DateTime(),
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="rapport_activite_mindaudit.pdf"',
        ]);
    }
}
