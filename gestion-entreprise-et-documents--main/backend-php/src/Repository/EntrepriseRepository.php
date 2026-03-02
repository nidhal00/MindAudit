<?php

namespace App\Repository;

use App\Entity\Entreprise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EntrepriseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entreprise::class);
    }

    public function findAllOrderedByName(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByMatriculeFiscale(string $matricule, ?int $excludeId = null): ?Entreprise
    {
        $qb = $this->createQueryBuilder('e')
            ->andWhere('e.matriculeFiscale = :matricule')
            ->setParameter('matricule', $matricule);
        if ($excludeId !== null) {
            $qb->andWhere('e.id != :id')->setParameter('id', $excludeId);
        }
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function searchByCriteria(array $criteria, string $sortBy = 'nom', string $sortOrder = 'ASC'): \Doctrine\ORM\QueryBuilder
    {
        // Colonnes autorisées pour le tri
        $allowedSortColumns = ['nom', 'secteur', 'taille', 'pays', 'statut', 'dateCreation'];
        
        // Validation du champ de tri
        if (!in_array($sortBy, $allowedSortColumns)) {
            $sortBy = 'nom';
        }
        
        // Validation de l'ordre de tri
        $sortOrder = strtoupper($sortOrder);
        if (!in_array($sortOrder, ['ASC', 'DESC'])) {
            $sortOrder = 'ASC';
        }

        $qb = $this->createQueryBuilder('e')
            ->orderBy('e.' . $sortBy, $sortOrder);

        if (!empty($criteria['nom'])) {
            $qb->andWhere('e.nom LIKE :nom')
               ->setParameter('nom', '%' . $criteria['nom'] . '%');
        }

        if (!empty($criteria['secteur'])) {
            $qb->andWhere('e.secteur LIKE :secteur')
               ->setParameter('secteur', '%' . $criteria['secteur'] . '%');
        }

        if (!empty($criteria['taille'])) {
            $qb->andWhere('e.taille = :taille')
               ->setParameter('taille', $criteria['taille']);
        }

        if (!empty($criteria['pays'])) {
            $qb->andWhere('e.pays LIKE :pays')
               ->setParameter('pays', '%' . $criteria['pays'] . '%');
        }

        if (!empty($criteria['statut'])) {
            $qb->andWhere('e.statut = :statut')
               ->setParameter('statut', $criteria['statut']);
        }

        return $qb;
    }
    public function getAverageCompliance(int $entrepriseId): ?float
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->select('AVG(d.noteIA)')
            ->from('App\Entity\Document', 'd')
            ->where('d.entreprise = :id')
            ->setParameter('id', $entrepriseId)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
