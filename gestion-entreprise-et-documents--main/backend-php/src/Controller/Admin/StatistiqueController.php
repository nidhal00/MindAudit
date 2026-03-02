<?php

namespace App\Controller\Admin;

use App\Repository\DocumentRepository;
use App\Repository\EntrepriseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/stats')]
class StatistiqueController extends AbstractController
{
    #[Route('', name: 'app_admin_stats')]
    public function index(EntrepriseRepository $entrepriseRepo, DocumentRepository $documentRepo): Response
    {
        // 1. Répartition par secteur (Pie Chart)
        $sectorStats = $entrepriseRepo->createQueryBuilder('e')
            ->select('e.secteur as label, COUNT(e.id) as value')
            ->groupBy('e.secteur')
            ->getQuery()
            ->getResult();

        // 2. Statuts des documents (Bar Chart)
        $statusStats = $documentRepo->createQueryBuilder('d')
            ->select('d.statut as label, COUNT(d.id) as value')
            ->groupBy('d.statut')
            ->getQuery()
            ->getResult();

        // 3. Performance IA par Secteur (Radar ou Bar détaillé)
        $iaStats = $entrepriseRepo->createQueryBuilder('e')
            ->select('e.secteur as label, AVG(d.noteIA) as value')
            ->innerJoin('App\Entity\Document', 'd', 'WITH', 'd.entreprise = e')
            ->groupBy('e.secteur')
            ->getQuery()
            ->getResult();

        // 4. Inscriptions par mois (Line Chart)
        $monthlyStats = $entrepriseRepo->createQueryBuilder('e')
            ->select('SUBSTRING(e.dateCreation, 1, 7) as month, COUNT(e.id) as count')
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->getQuery()
            ->getResult();

        // 5. Compteurs globaux
        $totalActive = $entrepriseRepo->count(['statut' => 'valide']);
        $totalPending = $entrepriseRepo->count(['statut' => 'en_attente']);

        return $this->render('statistique/index.html.twig', [
            'sector_stats' => $sectorStats,
            'status_stats' => $statusStats,
            'ia_stats' => $iaStats,
            'monthly_stats' => $monthlyStats,
            'total_active' => $totalActive,
            'total_pending' => $totalPending,
        ]);
    }
}
