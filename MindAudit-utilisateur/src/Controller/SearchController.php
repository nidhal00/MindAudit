<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class SearchController extends AbstractController
{
    #[Route('/api/search', name: 'api_global_search', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function search(Request $request, UtilisateurRepository $userRepo): JsonResponse
    {
        // Libérer le verrou sur la session pour ne pas bloquer les autres requêtes
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }

        $query = $request->query->get('q', '');
        
        if (strlen($query) < 2) {
            return new JsonResponse([]);
        }

        // Recherche avancée sur le nom, prénom et email
        $qb = $userRepo->createQueryBuilder('u')
            ->where('u.nom LIKE :query OR u.prenom LIKE :query OR u.email LIKE :query')
            ->setParameter('query', '%' . $query . '%');

        // Métier Avancé : Si la personne qui cherche n'est PAS admin, on filtre
        // Elle ne peut voir que les autres utilisateurs (pas les admins) et seulement ceux qui sont vérifiés/actifs
        if (!$this->isGranted('ROLE_ADMIN')) {
            $qb->join('u.role', 'r')
               ->andWhere('r.nom != :adminRole')
               ->setParameter('adminRole', 'Administrateur')
               ->andWhere('u.actif = 1');
        }

        $users = $qb->setMaxResults(5)->getQuery()->getResult();

        $results = [];
        foreach ($users as $user) {
            $results[] = [
                'id' => $user->getId(),
                'nomComplet' => $user->getNomComplet(),
                'email' => $user->getEmail(),
                'role' => $user->getRole() ? $user->getRole()->getNom() : 'Utilisateur',
                // Lien pour afficher la carte complète de cet utilisateur
                'url' => $this->generateUrl('app_search_page', ['q' => $user->getEmail()])
            ];
        }

        return new JsonResponse($results);
    }

    #[Route('/search', name: 'app_search_page', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function searchPage(Request $request, UtilisateurRepository $userRepo): \Symfony\Component\HttpFoundation\Response
    {
        $query = $request->query->get('q', '');
        $users = [];

        if (strlen($query) >= 2) {
            $qb = $userRepo->createQueryBuilder('u')
                ->where('u.nom LIKE :query OR u.prenom LIKE :query OR u.email LIKE :query')
                ->setParameter('query', '%' . $query . '%');

            if (!$this->isGranted('ROLE_ADMIN')) {
                $qb->join('u.role', 'r')
                   ->andWhere('r.nom != :adminRole')
                   ->setParameter('adminRole', 'Administrateur')
                   ->andWhere('u.actif = 1');
            }

            $users = $qb->setMaxResults(20)->getQuery()->getResult();
        }

        return $this->render('search/results.html.twig', [
            'query' => $query,
            'users' => $users
        ]);
    }
}
