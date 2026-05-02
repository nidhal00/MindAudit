<?php

namespace App\Repository;

use App\Entity\AuditLog;
use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AuditLog>
 */
class AuditLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AuditLog::class);
    }

    public function countByActionSince(string $action, \DateTimeImmutable $since): int
    {
        return (int) $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->andWhere('a.action = :action')
            ->andWhere('a.createdAt >= :since')
            ->setParameter('action', $action)
            ->setParameter('since', $since)
            ->getQuery()->getSingleScalarResult();
    }

    /** @return array<array{role:string, total:int}> */
    public function roleDistribution(): array
    {
        // Left join Utilisateur si besoin via requêtes externes; placeholder pour extension
        return [];
    }
}
