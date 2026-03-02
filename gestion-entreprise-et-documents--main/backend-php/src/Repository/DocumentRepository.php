<?php

namespace App\Repository;

use App\Entity\Document;
use App\Entity\Entreprise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Document::class);
    }

    public function findByEntreprise(Entreprise $entreprise): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.entreprise = :entreprise')
            ->setParameter('entreprise', $entreprise)
            ->orderBy('d.dateUpload', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findAllWithEntreprise(): array
    {
        return $this->createQueryBuilder('d')
            ->innerJoin('d.entreprise', 'e')
            ->addSelect('e')
            ->orderBy('d.dateUpload', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function searchByCriteria(array $criteria): array
    {
        $qb = $this->createQueryBuilder('d')
            ->innerJoin('d.entreprise', 'e')
            ->addSelect('e')
            ->orderBy('d.dateUpload', 'DESC');

        if (!empty($criteria['nom'])) {
            $qb->andWhere('d.nom LIKE :nom')
               ->setParameter('nom', '%' . $criteria['nom'] . '%');
        }

        if (!empty($criteria['type'])) {
            $qb->andWhere('d.type = :type')
               ->setParameter('type', $criteria['type']);
        }

        if (!empty($criteria['statut'])) {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $criteria['statut']);
        }

        if (!empty($criteria['entreprise'])) {
            $qb->andWhere('e.nom LIKE :entreprise')
               ->setParameter('entreprise', '%' . $criteria['entreprise'] . '%');
        }

        return $qb->getQuery()->getResult();
    }
}
