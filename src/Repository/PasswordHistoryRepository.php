<?php

namespace App\Repository;

use App\Entity\PasswordHistory;
use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PasswordHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PasswordHistory::class);
    }

    /**
     * @return PasswordHistory[]
     */
    public function findRecentForUser(Utilisateur $user, int $limit = 10): array
    {
        return $this->createQueryBuilder('ph')
            ->where('ph.utilisateur = :user')
            ->setParameter('user', $user)
            ->orderBy('ph.changedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findByReason(string $reason): array
    {
        return $this->findBy(['changeReason' => $reason]);
    }
}
