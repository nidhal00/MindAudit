<?php

namespace App\Controller\Client;

use App\Entity\Document;
use App\Repository\DocumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/employee/audit')]
class AuditController extends AbstractController
{
    #[Route('/report/{id}', name: 'app_employee_audit_report')]
    public function generateReport(Document $document): Response
    {
        // Sécurité : Vérifier que le document appartient à l'entreprise du user connecté
        $session = $this->container->get('request_stack')->getSession();
        $entrepriseId = $session->get('employee_entreprise_id');
        
        if (!$entrepriseId || $document->getEntreprise()->getId() !== $entrepriseId) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        // Configuration DomPDF
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true); // Pour charger les images (logo)

        $dompdf = new Dompdf($pdfOptions);

        $html = $this->renderView('client/report_pdf.html.twig', [
            'document' => $document,
            'entreprise' => $document->getEntreprise(),
            'analysis' => $document->getAnalysisReport() ?? []
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="rapport_audit_' . $document->getId() . '.pdf"',
        ]);
    }
}
