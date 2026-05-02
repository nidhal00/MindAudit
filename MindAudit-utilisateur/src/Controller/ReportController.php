<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;
use App\Repository\RoleRepository;
use App\Service\PdfService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/reports')]
#[IsGranted('IS_AUTHENTICATED_FULLY')]
class ReportController extends AbstractController
{
    #[Route('/utilisateurs/pdf', name: 'app_report_utilisateurs_pdf')]
    public function utilisateurs(UtilisateurRepository $repo, RoleRepository $roleRepo, PdfService $pdf): Response
    {
        $users = $repo->findAll();
        $totalRoles = $roleRepo->count([]);
        
        return $pdf->renderTwigToPdf('reports/utilisateurs.html.twig', [
            'users' => $users,
            'totalRoles' => $totalRoles,
        ], 'rapport-utilisateurs-mindaudit.pdf');
    }
}
