<?php

namespace App\Controller\Api;

use App\Repository\DocumentRepository;
use App\Repository\EntrepriseRepository;
use App\Service\AIService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/chatbot')]
class ChatbotController extends AbstractController
{
    #[Route('/ask', name: 'api_chatbot_ask', methods: ['POST'])]
    public function ask(
        Request $request,
        AIService $aiService,
        EntrepriseRepository $entrepriseRepo,
        DocumentRepository $documentRepo
    ): JsonResponse {
        $data     = json_decode($request->getContent(), true);
        $question = trim($data['question'] ?? '');

        if (empty($question)) {
            return $this->json(['error' => 'Question vide'], 400);
        }

        // Build global context
        $context = [
            'total_entreprises' => $entrepriseRepo->count([]),
            'total_documents'   => $documentRepo->count([]),
            'total_pending'     => $entrepriseRepo->count(['statut' => 'en_attente']),
        ];

        // === AUTO-DETECT: enterprise by ID (explicit) OR by name (from question) ===
        $entrepriseId = $data['entreprise_id'] ?? null;
        $entreprise   = null;

        if ($entrepriseId) {
            $entreprise = $entrepriseRepo->find($entrepriseId);
        }

        // If no explicit ID, try to find enterprise name mentioned in the question
        if (!$entreprise) {
            $entreprise = $this->detectEntrepriseInQuestion($question, $entrepriseRepo);
        }

        // Build enterprise-specific context if found
        if ($entreprise) {
            $docs = $entreprise->getDocuments();
            $avgScore = 0;
            $docList  = [];
            $validated = $pending = $rejected = 0;

            foreach ($docs as $doc) {
                $docList[] = '[' . $doc->getType() . '] ' . $doc->getNom() . ' — Score: ' . ($doc->getNoteIA() ?? 'N/A') . '%';
                if ($doc->getNoteIA()) { $avgScore += $doc->getNoteIA(); }
                match ($doc->getStatut()) {
                    'valide'     => $validated++,
                    'rejete'     => $rejected++,
                    default      => $pending++,
                };
            }

            $context['entreprise'] = [
                'nom'              => $entreprise->getNom(),
                'secteur'          => $entreprise->getSecteur() ?? 'Non renseigne',
                'taille'           => $entreprise->getTaille() ?? 'Non renseignee',
                'statut'           => $entreprise->getStatut(),
                'pays'             => $entreprise->getPays() ?? 'Non renseigne',
                'email'            => $entreprise->getEmail() ?? 'N/A',
                'telephone'        => $entreprise->getTelephone() ?? 'N/A',
                'nb_documents'     => count($docs),
                'docs_valides'     => $validated,
                'docs_en_attente'  => $pending,
                'docs_rejetes'     => $rejected,
                'score_moyen'      => count($docs) > 0 ? round($avgScore / count($docs)) : 0,
                'date_audit_debut' => $entreprise->getDateAuditDebut()?->format('d/m/Y') ?? 'N/A',
                'date_audit_fin'   => $entreprise->getDateAuditFin()?->format('d/m/Y') ?? 'N/A',
                'documents'        => $docList,
            ];
        }

        // Build a summary of ALL enterprises for Gemini context (for questions about any enterprise)
        $allEntreprises = $entrepriseRepo->findAll();
        $entreprisesSummary = [];
        foreach ($allEntreprises as $ent) {
            $entreprisesSummary[] = $ent->getNom() . ' (' . $ent->getStatut() . ', ' . ($ent->getSecteur() ?? '?') . ')';
        }
        $context['all_entreprises_names'] = $entreprisesSummary;

        $response = $aiService->askChatbot($question, $context);

        return $this->json(['response' => $response]);
    }

    /**
     * Tries to detect an enterprise name mentioned in the user question.
     * Searches all enterprises and checks if any name appears in the question text.
     */
    private function detectEntrepriseInQuestion(string $question, EntrepriseRepository $repo): ?\App\Entity\Entreprise
    {
        $q = mb_strtolower($question, 'UTF-8');

        // Get all enterprises and check if any name is mentioned in the question
        $allEntreprises = $repo->findAll();
        $bestMatch = null;
        $bestLen   = 0;

        foreach ($allEntreprises as $ent) {
            $nom = mb_strtolower($ent->getNom(), 'UTF-8');
            // Check if the enterprise name (or a significant part of it) appears in the question
            if (mb_strlen($nom) >= 3 && str_contains($q, $nom)) {
                // Prefer longer name matches (more specific)
                if (mb_strlen($nom) > $bestLen) {
                    $bestMatch = $ent;
                    $bestLen   = mb_strlen($nom);
                }
            }
            // Also try matching individual words of the enterprise name (minimum 4 chars)
            $words = preg_split('/\s+/', $nom);
            foreach ($words as $word) {
                if (mb_strlen($word) >= 4 && str_contains($q, $word) && mb_strlen($word) > $bestLen) {
                    $bestMatch = $ent;
                    $bestLen   = mb_strlen($word);
                }
            }
        }

        return $bestMatch;
    }
}
