<?php

namespace App\Controller;

use App\Repository\HistoriqueConnexionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/historique')]
#[IsGranted('ROLE_ADMINISTRATEUR')]
class HistoriqueController extends AbstractController
{
    #[Route('/', name: 'app_historique_index')]
    public function index(HistoriqueConnexionRepository $historiqueRepository): Response
    {
        // Récupère les 100 dernières tentatives de connexion
        $historiques = $historiqueRepository->findLatest(100);

        return $this->render('historique/index.html.twig', [
            'historiques' => $historiques,
        ]);
    }

    #[Route('/exporter', name: 'app_historique_export')]
    public function export(HistoriqueConnexionRepository $historiqueRepository): Response
    {
        $historiques = $historiqueRepository->findBy([], ['dateTentative' => 'DESC']);

        $csvContent = "Date & Heure;Email tente;Utilisateur;Adresse IP;Statut\n";
        foreach ($historiques as $log) {
            $nom = $log->getUtilisateur() ? $log->getUtilisateur()->getNomComplet() : 'Inconnu';
            $date = $log->getDateTentative()->format('d/m/Y H:i:s');
            $csvContent .= sprintf(
                "%s;%s;%s;%s;%s\n",
                $date,
                $log->getEmailTente(),
                $nom,
                $log->getIpAddress(),
                $log->getStatut()
            );
        }

        $response = new Response($csvContent);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="historique_connexions.csv"');

        return $response;
    }

    #[Route('/supprimer', name: 'app_historique_clear', methods: ['POST'])]
    public function clear(Request $request, HistoriqueConnexionRepository $historiqueRepository, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('clear_historique', $request->request->get('_token'))) {
            $logs = $historiqueRepository->findAll();
            foreach ($logs as $log) {
                $em->remove($log);
            }
            $em->flush();

            $this->addFlash('success', 'Le journal de connexion a été vidé avec succès.');
        }

        return $this->redirectToRoute('app_historique_index');
    }

    #[Route('/supprimer/{id}', name: 'app_historique_delete_row', methods: ['POST'])]
    public function deleteRow(int $id, Request $request, HistoriqueConnexionRepository $historiqueRepository, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete_row_' . $id, $request->request->get('_token'))) {
            $log = $historiqueRepository->find($id);
            if ($log) {
                $em->remove($log);
                $em->flush();
                $this->addFlash('success', 'L\'entrée a été supprimée avec succès.');
            }
        }

        return $this->redirectToRoute('app_historique_index');
    }
}
