<?php

namespace App\Controller;

use App\Repository\AuditLogRepository;
use App\Repository\UtilisateurRepository;
use App\Service\PdfService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/reports')]
#[IsGranted('ROLE_ADMINISTRATEUR')]
class ReportController extends AbstractController
{
    #[Route('/utilisateurs', name: 'app_report_utilisateurs_pdf')]
    public function utilisateurs(UtilisateurRepository $repo, PdfService $pdf): Response
    {
        $users = $repo->findAll();
        return $pdf->renderTwigToPdf('reports/utilisateurs.html.twig', [
            'users' => $users,
        ], 'utilisateurs.pdf');
    }

    #[Route('/audit', name: 'app_report_audit_pdf')]
    public function audit(AuditLogRepository $repo, PdfService $pdf): Response
    {
        $logs = $repo->findBy([], ['createdAt' => 'DESC'], 500);
        return $pdf->renderTwigToPdf('reports/audit.html.twig', [
            'logs' => $logs,
        ], 'audit.pdf');
    }
}
