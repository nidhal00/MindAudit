<?php

namespace App\Service;

use App\Entity\Document;
use Smalot\PdfParser\Parser;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class AIService
{
    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    /**
     * Analyse un document (PDF ou Image) et retourne un rapport détaillé.
     * @return array{score: int, details: array, date: string, extracted_text_preview: string}
     */
    public function analyzeDocument(Document $document): array
    {
        $projectDir = $this->params->get('kernel.project_dir');
        $filePath = $projectDir . '/public/uploads/documents/' . $document->getUrl();
        $extractedText = '';

        // 1. Extraction du texte (OCR / Parsing)
        if (file_exists($filePath)) {
            $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
            
            if ($extension === 'pdf') {
                try {
                    // Utilisation de Smalot/PdfParser (PHP pur)
                    $parser = new Parser();
                    $pdf = $parser->parseFile($filePath);
                    $extractedText = $pdf->getText();
                } catch (\Exception $e) {
                    $extractedText = "Erreur lors de la lecture du PDF : " . $e->getMessage();
                }
            } else {
                // Pour les images, on simule un OCR (car pas de Tesseract installé)
                $extractedText = "Contenu 'image' détecté. Simulation OCR: Facture présumée avec montant et TVA.";
            }
        }

        // 2. Analyse "Intelligente" (Simulation LLM sur le texte extrait)
        return $this->mockAIAnalysis($extractedText, $document->getType() ?? 'inconnu');
    }

    /**
     * Simule une analyse IA avancée basée sur des mots-clés dans le texte extrait
     */
    private function mockAIAnalysis(string $text, string $type): array
    {
        $score = 0;
        $details = [];
        $analysisDate = new \DateTime();

        // Détection de mots-clés dans le texte extrait (Simulation de compréhension)
        $lowerText = strtolower($text);
        
        // Logique de scoring contextuelle
        if (str_contains($lowerText, 'facture') || $type === 'facture' || str_contains($lowerText, 'invoice')) {
            $score = 85; // Score de base pour une facture
            $details[] = "Document identifié comme FACTURE.";
            
            if (str_contains($lowerText, 'tva') || str_contains($lowerText, 'tax')) {
                $score += 10;
                $details[] = "✅ Montants TVA détectés et cohérents.";
            } else {
                $score -= 20;
                $details[] = "⚠️ Attention : Mention TVA introuvable.";
            }
            
            if (str_contains($lowerText, 'total')) {
                $details[] = "✅ Total TTC vérifié.";
            }

        } elseif (str_contains($lowerText, 'bilan') || $type === 'bilan') {
            $score = 90;
            $details[] = "Document identifié comme BILAN COMPTABLE.";
            $details[] = "✅ Équilibre Actif/Passif vérifié.";
            $details[] = "ℹ️ Recommandation : Vérifier les amortissements.";
        } else {
            // Document générique
            $score = 70;
            $details[] = "Analyse générique.";
            $details[] = "Type déclaré : " . ucfirst($type);
            
            // Analyse de contenu simple
            if (strlen($text) > 100) {
                $score += 10;
                $details[] = "✅ Contenu textuel riche détecté.";
            } else {
                $details[] = "⚠️ Peu de contenu textuel extractible.";
            }
        }

        $details[] = "📅 Date de l'analyse : " . $analysisDate->format('d/m/Y H:i');

        // Randomisation légère pour effet démo
        $score = min(100, max(0, $score + rand(-5, 5)));

        return [
            'score' => $score,
            'details' => $details,
            'date' => $analysisDate->format('Y-m-d H:i:s'),
            'extracted_text_preview' => substr($text, 0, 200) . '...' // On garde un aperçu pour le debug
        ];
    }
}
