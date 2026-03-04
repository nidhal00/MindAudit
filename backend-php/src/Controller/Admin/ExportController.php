<?php

namespace App\Controller\Admin;

use App\Repository\EntrepriseRepository;
use App\Repository\DocumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/export')]
class ExportController extends AbstractController
{
    /**
     * Export des entreprises au format CSV (compatible Excel)
     */
    #[Route('/entreprises', name: 'app_export_entreprises', methods: ['GET'])]
    public function exportEntreprises(EntrepriseRepository $repo): StreamedResponse
    {
        $entreprises = $repo->findBy([], ['id' => 'DESC']);

        $response = new StreamedResponse(function () use ($entreprises) {
            $handle = fopen('php://output', 'w+');

            // BOM UTF-8 pour Excel
            fprintf($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // En-tête
            fputcsv($handle, [
                'ID', 'Nom', 'Secteur', 'Taille', 'Pays', 'Email', 'Statut',
                'Score IA Moyen (%)', 'Nb Documents', 'Date Inscription'
            ], ';');

            foreach ($entreprises as $e) {
                $docs  = $e->getDocuments();
                $scores = array_filter(
                    $docs->map(fn($d) => $d->getNoteIA())->toArray(),
                    fn($s) => $s !== null
                );
                $avgScore = count($scores) > 0 ? round(array_sum($scores) / count($scores), 1) : 'N/A';

                fputcsv($handle, [
                    $e->getId(),
                    $e->getNom() ?? '',
                    $e->getSecteur() ?? '',
                    $e->getTaille() ?? '',
                    $e->getPays() ?? '',
                    $e->getEmail() ?? '',
                    $e->getStatut() ?? '',
                    $avgScore,
                    $docs->count(),
                    $e->getCreatedAt() ? $e->getCreatedAt()->format('d/m/Y') : '',
                ], ';');
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="entreprises_mindaudit_' . date('Ymd') . '.csv"');

        return $response;
    }

    /**
     * Export des documents au format CSV (compatible Excel)
     */
    #[Route('/documents', name: 'app_export_documents', methods: ['GET'])]
    public function exportDocuments(DocumentRepository $repo): StreamedResponse
    {
        $documents = $repo->createQueryBuilder('d')
            ->leftJoin('d.entreprise', 'e')
            ->addSelect('e')
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ->getResult();

        $response = new StreamedResponse(function () use ($documents) {
            $handle = fopen('php://output', 'w+');

            // BOM UTF-8 pour Excel
            fprintf($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // En-tête
            fputcsv($handle, [
                'ID', 'Nom Document', 'Entreprise', 'Type', 'Statut',
                'Score IA (%)', 'Date Creation'
            ], ';');

            foreach ($documents as $doc) {
                fputcsv($handle, [
                    $doc->getId(),
                    $doc->getNom() ?? '',
                    $doc->getEntreprise()?->getNom() ?? 'N/A',
                    $doc->getType() ?? '',
                    $doc->getStatut() ?? '',
                    $doc->getNoteIA() !== null ? $doc->getNoteIA() : 'N/A',
                    $doc->getCreatedAt() ? $doc->getCreatedAt()->format('d/m/Y') : '',
                ], ';');
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="documents_mindaudit_' . date('Ymd') . '.csv"');

        return $response;
    }
}
