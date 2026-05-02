<?php

namespace App\Repository;

use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Utilisateur>
 */
class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

    public function countActifs(): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->andWhere('u.actif = 1')
            ->getQuery()->getSingleScalarResult();
    }

    public function search(string $search = '', string $roleFilter = '', string $sortBy = 'createdAt', string $order = 'DESC'): array
    {
        $qb = $this->createQueryBuilder('u');

        if ($search) {
            $qb->andWhere('u.nom LIKE :search OR u.prenom LIKE :search OR u.email LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($roleFilter) {
            $qb->andWhere('u.role = :role')
               ->setParameter('role', $roleFilter);
        }

        $qb->orderBy('u.' . $sortBy, $order);

        return $qb->getQuery()->getResult();
    }
}
