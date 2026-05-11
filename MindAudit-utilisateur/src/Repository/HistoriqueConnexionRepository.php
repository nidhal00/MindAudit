<?php

namespace App\Repository;

use App\Entity\HistoriqueConnexion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HistoriqueConnexion>
 */
class HistoriqueConnexionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoriqueConnexion::class);
    }

    public function findLatest(int $limit = 100): array
    {
        return $this->createQueryBuilder('h')
            ->orderBy('h.dateTentative', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
