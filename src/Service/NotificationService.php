<?php

namespace App\Service;

use App\Entity\Notification;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;

class NotificationService
{
    public function __construct(private EntityManagerInterface $em) {}

    public function notifyUser(Utilisateur $user, string $message, string $type = 'info', ?array $context = null): Notification
    {
        $n = new Notification();
        $n->setUtilisateur($user)
          ->setMessage($message)
          ->setType($type)
          ->setContext($context);
        $this->em->persist($n);
        $this->em->flush();
        return $n;
    }
}
