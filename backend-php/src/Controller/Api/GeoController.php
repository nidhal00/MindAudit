<?php

namespace App\Controller\Api;

use App\Repository\EntrepriseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/api/geo')]
class GeoController extends AbstractController
{
    public function __construct(private HttpClientInterface $httpClient) {}

    /**
     * Retourne toutes les entreprises avec leurs coordonnées GPS (si disponibles).
     */
    #[Route('/entreprises', name: 'api_geo_entreprises', methods: ['GET'])]
    public function entreprises(EntrepriseRepository $repo): JsonResponse
    {
        $entreprises = $repo->findAll();
        $data = [];

        foreach ($entreprises as $e) {
            $data[] = [
                'id'      => $e->getId(),
                'nom'     => $e->getNom(),
                'secteur' => $e->getSecteur(),
                'statut'  => $e->getStatut(),
                'pays'    => $e->getPays(),
                'adresse' => trim(($e->getAdresse() ?? '') . ', ' . ($e->getPays() ?? '')),
                'lat'     => null, // géocodage côté client via Nominatim
                'lng'     => null,
            ];
        }

        return $this->json($data);
    }

    /**
     * Proxy Nominatim pour géocoder une adresse (évite les restrictions CORS).
     * GET /api/geo/geocode?adresse=Paris, France
     */
    #[Route('/geocode', name: 'api_geo_geocode', methods: ['GET'])]
    public function geocode(Request $request): JsonResponse
    {
        $adresse = trim($request->query->get('adresse', ''));

        if (empty($adresse)) {
            return $this->json(['error' => 'Adresse manquante'], Response::HTTP_BAD_REQUEST);
        }

        try {
            $response = $this->httpClient->request('GET', 'https://nominatim.openstreetmap.org/search', [
                'query' => [
                    'q'      => $adresse,
                    'format' => 'json',
                    'limit'  => 1,
                ],
                'headers' => [
                    'User-Agent' => 'MindAudit/1.0 (audit.app@esprit.tn)',
                ],
            ]);

            $results = $response->toArray();

            if (empty($results)) {
                return $this->json(['lat' => null, 'lng' => null, 'display_name' => null]);
            }

            return $this->json([
                'lat'          => (float) $results[0]['lat'],
                'lng'          => (float) $results[0]['lon'],
                'display_name' => $results[0]['display_name'],
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Erreur géocodage : ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
