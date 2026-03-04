<?php

namespace App\Controller;

use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/notifications')]
#[IsGranted('IS_AUTHENTICATED_FULLY')]
class NotificationController extends AbstractController
{
    #[Route('', name: 'app_notifications_index')]
    public function index(NotificationRepository $repo): Response
    {
        $user = $this->getUser();
        $notifications = $repo->findLatestForUser($user, 50);
        return $this->render('notifications/index.html.twig', [
            'notifications' => $notifications,
        ]);
    }

    #[Route('/unread-count', name: 'app_notifications_unread_count')]
    public function unreadCount(NotificationRepository $repo): JsonResponse
    {
        $user = $this->getUser();
        $count = $repo->countUnread($user);
        return $this->json(['count' => $count]);
    }

    #[Route('/{id}/read', name: 'app_notifications_mark_read', methods: ['POST'])]
    public function markRead(string $id, NotificationRepository $repo, EntityManagerInterface $em): JsonResponse
    {
        $n = $repo->find($id);
        if (!$n || $n->getUtilisateur() !== $this->getUser()) {
            return $this->json(['error' => 'Not found'], 404);
        }
        $n->markRead();
        $em->flush();
        return $this->json(['status' => 'ok']);
    }
}
