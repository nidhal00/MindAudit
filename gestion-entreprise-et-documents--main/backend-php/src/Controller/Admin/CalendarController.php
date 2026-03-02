<?php

namespace App\Controller\Admin;

use App\Repository\EntrepriseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/api/calendar')]
class CalendarController extends AbstractController
{
    #[Route('/events', name: 'app_admin_calendar_api', methods: ['GET'])]
    public function getEvents(EntrepriseRepository $entrepriseRepo): JsonResponse
    {
        $entreprises = $entrepriseRepo->findAll();
        $events = [];

        foreach ($entreprises as $entreprise) {
            // Date de création
            $events[] = [
                'id' => 'creation_' . $entreprise->getId(),
                'title' => 'Création: ' . $entreprise->getNom(),
                'start' => $entreprise->getDateCreation() ? $entreprise->getDateCreation()->format('Y-m-d') : date('Y-m-d'),
                'url' => $this->generateUrl('app_entreprise_show', ['id' => $entreprise->getId()]),
                'backgroundColor' => '#4e73df',
                'borderColor' => '#4e73df',
                'allDay' => true
            ];

            // Simulation: Prochain Audit (1 an après création)
            if ($entreprise->getDateCreation()) {
                $nextAudit = clone $entreprise->getDateCreation();
                $nextAudit->modify('+1 year');
                
                $events[] = [
                    'id' => 'audit_' . $entreprise->getId(),
                    'title' => 'Audit Annuel: ' . $entreprise->getNom(),
                    'start' => $nextAudit->format('Y-m-d'),
                    'url' => $this->generateUrl('app_entreprise_show', ['id' => $entreprise->getId()]),
                    'backgroundColor' => '#e74a3b',
                    'borderColor' => '#e74a3b',
                    'allDay' => true
                ];
            }
        }

        return new JsonResponse($events);
    }
}
