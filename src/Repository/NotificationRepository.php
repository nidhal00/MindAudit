<?php

namespace App\Repository;

use App\Entity\Notification;
use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Notification>
 */
class NotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notification::class);
    }

    /** @return Notification[] */
    public function findLatestForUser(Utilisateur $user, int $limit = 10): array
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.utilisateur = :u')
            ->setParameter('u', $user)
            ->orderBy('n.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function countUnread(Utilisateur $user): int
    {
        return (int) $this->createQueryBuilder('n')
            ->select('COUNT(n.id)')
            ->andWhere('n.utilisateur = :u')
            ->andWhere('n.isRead = false')
            ->setParameter('u', $user)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
