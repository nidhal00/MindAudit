<?php

namespace App\Controller\Api;

use App\Repository\DocumentRepository;
use App\Repository\EntrepriseRepository;
use App\Service\AIService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/rapport')]
class ReportController extends AbstractController
{
    /**
     * Génère un rapport IA global basé sur les données réelles du système.
     */
    #[Route('/generer', name: 'api_rapport_generer', methods: ['GET'])]
    public function generate(
        EntrepriseRepository $entrepriseRepo,
        DocumentRepository $documentRepo,
        AIService $aiService
    ): JsonResponse {
        // Collecte des données de manière systématique
        $totalEntreprises = $entrepriseRepo->count([]);
        $totalDocuments   = $documentRepo->count([]);
        $totalPending     = $entrepriseRepo->count(['statut' => 'en_attente']);
        $totalValidees    = $entrepriseRepo->count(['statut' => 'valide']);
        $totalRejetees    = $entrepriseRepo->count(['statut' => 'rejete']);

        $avgScore = $documentRepo->createQueryBuilder('d')
            ->select('AVG(d.noteIA) as avg')
            ->getQuery()->getSingleScalarResult();
        $avgScore = round($avgScore ?? 0);

        $atRisk = $documentRepo->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->where('d.noteIA IS NOT NULL')
            ->andWhere('d.noteIA < 50')
            ->getQuery()->getSingleScalarResult();

        $sectorStats = $entrepriseRepo->createQueryBuilder('e')
            ->select('e.secteur, COUNT(e.id) as count')
            ->groupBy('e.secteur')
            ->getQuery()->getResult();

        $sectorsText = implode(', ', array_map(fn($s) => $s['secteur'] . ' (' . $s['count'] . ')', $sectorStats));

        // Demande à Gemini de générer un rapport professionnel
        $report = $aiService->generateGlobalReport([
            'total_entreprises' => $totalEntreprises,
            'total_documents'   => $totalDocuments,
            'total_pending'     => $totalPending,
            'total_validees'    => $totalValidees,
            'total_rejetees'    => $totalRejetees,
            'avg_ia_score'      => $avgScore,
            'at_risk_count'     => $atRisk,
            'sectors'           => $sectorsText,
        ]);

        return $this->json(['report' => $report, 'date' => date('d/m/Y H:i')]);
    }

    /**
     * Endpoint JSON pour les statistiques globales (API externe).
     */
    #[Route('/stats/summary', name: 'api_stats_summary', methods: ['GET'])]
    public function statsSummary(
        EntrepriseRepository $entrepriseRepo,
        DocumentRepository $documentRepo
    ): JsonResponse {
        return $this->json([
            'entreprises' => [
                'total'      => $entrepriseRepo->count([]),
                'en_attente' => $entrepriseRepo->count(['statut' => 'en_attente']),
                'valides'    => $entrepriseRepo->count(['statut' => 'valide']),
                'rejetes'    => $entrepriseRepo->count(['statut' => 'rejete']),
            ],
            'documents' => [
                'total'    => $documentRepo->count([]),
                'analyses' => $documentRepo->createQueryBuilder('d')
                    ->select('COUNT(d.id)')->where('d.noteIA IS NOT NULL')
                    ->getQuery()->getSingleScalarResult(),
                'avg_score' => round($documentRepo->createQueryBuilder('d')
                    ->select('AVG(d.noteIA)')->getQuery()->getSingleScalarResult() ?? 0),
            ],
            'generated_at' => (new \DateTime())->format(\DateTime::ATOM),
        ]);
    }
}
