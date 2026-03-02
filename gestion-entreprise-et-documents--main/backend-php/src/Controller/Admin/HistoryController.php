<?php

namespace App\Controller\Admin;

use App\Repository\HistoriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/history')]
class HistoryController extends AbstractController
{
    #[Route('/', name: 'app_admin_history_index', methods: ['GET'])]
    public function index(HistoriqueRepository $historiqueRepository): Response
    {
        return $this->render('admin/history/index.html.twig', [
            'historiques' => $historiqueRepository->findBy([], ['dateAction' => 'DESC']),
        ]);
    }
}
