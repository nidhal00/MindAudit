<?php

namespace App\Controller;

use App\Repository\AuditLogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/audit')]
#[IsGranted('ROLE_ADMINISTRATEUR')]
class AuditController extends AbstractController
{
    #[Route('', name: 'app_audit_index')]
    public function index(AuditLogRepository $repo, Request $request): Response
    {
        $logs = $repo->findBy([], ['createdAt' => 'DESC'], 200);
        return $this->render('audit/index.html.twig', [
            'logs' => $logs,
        ]);
    }
}
