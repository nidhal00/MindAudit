<?php

namespace App\Controller\Api;

use App\Entity\Entreprise;
use App\Repository\EntrepriseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/calendar')]
class CalendarController extends AbstractController
{
    #[Route('/events', name: 'api_calendar_events', methods: ['GET'])]
    public function getEvents(EntrepriseRepository $repository): JsonResponse
    {
        // Get entreprises that have audit dates
        $entreprises = $repository->createQueryBuilder('e')
            ->where('e.dateAuditDebut IS NOT NULL')
            ->getQuery()
            ->getResult();

        $events = [];
        foreach ($entreprises as $entreprise) {
            $events[] = [
                'id' => $entreprise->getId(),
                'title' => 'Audit: ' . $entreprise->getNom(),
                'start' => $entreprise->getDateAuditDebut()->format('Y-m-d\TH:i:s'),
                'end' => $entreprise->getDateAuditFin() ? $entreprise->getDateAuditFin()->format('Y-m-d\TH:i:s') : null,
                'color' => '#4e73df', // Bootstrap primary
                'url' => $this->generateUrl('app_entreprise_show', ['id' => $entreprise->getId()])
            ];
        }

        return $this->json($events);
    }

    #[Route('/resize/{id}', name: 'api_calendar_resize', methods: ['PUT'])]
    public function resize(Request $request, Entreprise $entreprise, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (isset($data['start'])) {
            $entreprise->setDateAuditDebut(new \DateTime($data['start']));
        }
        if (isset($data['end'])) {
            $entreprise->setDateAuditFin(new \DateTime($data['end']));
        }

        $em->flush();

        return $this->json(['status' => 'success']);
    }
}
