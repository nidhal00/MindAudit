<?php

namespace App\Controller\Api;

use App\Entity\Document;
use App\Entity\Entreprise;
use App\Repository\EntrepriseRepository;
use App\Service\AIService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/document')]
class DocumentUploadController extends AbstractController
{
    #[Route('/upload', name: 'api_document_upload', methods: ['POST'])]
    public function upload(
        Request $request,
        EntrepriseRepository $entrepriseRepository,
        EntityManagerInterface $entityManager,
        AIService $aiService,
        \App\Service\HistoryService $historyService
    ): JsonResponse {
        $entrepriseId = $request->getSession()->get('employee_entreprise_id');
        
        if (!$entrepriseId) {
            return $this->json(['error' => 'Non authentifié'], 401);
        }

        $entreprise = $entrepriseRepository->find($entrepriseId);
        if (!$entreprise) {
            return $this->json(['error' => 'Entreprise introuvable'], 404);
        }

        // Gestion de la compatibilité avec le formulaire Symfony 'EmployeeDocumentType'
        $formData = $request->request->all('employee_document');
        $filesData = $request->files->all('employee_document');

        $file = null;
        if (isset($filesData['imageFile']['file'])) {
            $file = $filesData['imageFile']['file'];
        } else {
            // Fallback pour les requêtes API directes
            $file = $request->files->get('fichier');
        }

        if (!$file) {
            return $this->json(['error' => 'Aucun fichier reçu. Vérifiez les champs du formulaire.'], 400);
        }

        $nom = $formData['nom'] ?? $request->request->get('nom') ?? $file->getClientOriginalName();
        $type = $formData['type'] ?? $request->request->get('type') ?? Document::TYPE_RH;

        // Création du document
        $document = new Document();
        $document->setEntreprise($entreprise);
        $document->setNom($nom);
        $document->setType($type);
        $document->setImageFile($file); // VichUploader gérera l'upload
        $document->setStatut(Document::STATUT_EN_ATTENTE);
        $document->setUploadedBy(0); 

        // 1. Sauvegarde initiale pour déclencher l'upload Vich
        $entityManager->persist($document);
        $entityManager->flush();

        // 2. Analyse IA (Maintenant que le fichier est sur le disque)
        try {
            $analysis = $aiService->analyzeDocument($document);
            
            $document->setNoteIA($analysis['score']);
            $document->setAnalysisReport($analysis);
            
            // Mise à jour finale
            $entityManager->flush();
        } catch (\Exception $e) {
            // On ne bloque pas l'upload si l'IA échoue
            $analysis = ['score' => 0, 'details' => ['Erreur IA: ' . $e->getMessage()]];
        }

        // Log History
        $historyService->log('UPLOAD', "Document téléversé : " . $document->getNom() . " (" . $document->getType() . ")", $entreprise);

        return $this->json([
            'success' => true,
            'message' => 'Document analysé et enregistré avec succès !',
            'score' => $document->getNoteIA(),
            'details' => $analysis['details'] ?? [],
            'filename' => $document->getNom(),
            'date' => $document->getDateUpload()->format('d/m/Y H:i')
        ]);
    }
}
