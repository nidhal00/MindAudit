<?php

namespace App\EventListener;

use App\Entity\AuditLog;
use App\Entity\Utilisateur;
use App\Service\AuditService;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;

// Listeners désactivés temporairement pour améliorer les performances
// Décommentez les lignes ci-dessous pour réactiver l'audit automatique
// #[AsDoctrineListener(event: Events::postPersist)]
// #[AsDoctrineListener(event: Events::postUpdate)]
// #[AsDoctrineListener(event: Events::postRemove)]
class DoctrineEntitySubscriber
{
    public function __construct(private AuditService $audit) {}

    public function postPersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();
        if ($entity instanceof Utilisateur) {
            $this->audit->log(null, 'user_created', 'Utilisateur', (string)$entity->getId(), null);
        }
    }

    public function postUpdate(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();
        if ($entity instanceof Utilisateur) {
            $this->audit->log(null, 'user_updated', 'Utilisateur', (string)$entity->getId(), null);
        }
    }

    public function postRemove(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();
        if ($entity instanceof Utilisateur) {
            $this->audit->log(null, 'user_deleted', 'Utilisateur', null, null);
        }
    }
}
