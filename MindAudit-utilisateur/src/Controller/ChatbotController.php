<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ChatbotController extends AbstractController
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    #[Route('/api/chatbot', name: 'api_chatbot', methods: ['POST'])]
    public function chat(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $message = $data['message'] ?? '';

        if (empty($message)) {
            return new JsonResponse(['error' => 'Message vide'], 400);
        }

        $groqApiKey = isset($_ENV['GROQ_API_KEY']) ? trim($_ENV['GROQ_API_KEY']) : null;

        if ($groqApiKey) {
            try {
                $response = $this->httpClient->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
                    'verify_peer' => false,
                    'verify_host' => false,
                    'headers' => [
                        'Authorization' => 'Bearer ' . $groqApiKey,
                        'Content-Type' => 'application/json',
                    ],
                    'json' => [
                        'model' => 'llama-3.1-8b-instant',
                        'messages' => [
                            [
                                'role' => 'system',
                                'content' => "Vous êtes l'assistant officiel de MindAudit, une plateforme avancée de gestion d'audit d'entreprise. Vous agissez et parlez comme un véritable être humain, très chaleureux, professionnel et expert de MindAudit. Répondez naturellement à n'importe quelle question de l'utilisateur en français. Vous aidez les utilisateurs sur la page de connexion."
                            ],
                            [
                                'role' => 'user',
                                'content' => $message
                            ]
                        ]
                    ]
                ]);

                $data = $response->toArray();
                $reply = $data['choices'][0]['message']['content'] ?? "Je suis désolé, je n'ai pas compris votre question.";
                
                return new JsonResponse(['reply' => $reply]);

            } catch (\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e) {
                return new JsonResponse(['reply' => "Erreur de l'API Groq: " . $e->getResponse()->getContent(false)]);
            } catch (\Exception $e) {
                return new JsonResponse(['reply' => "Erreur technique détaillée: " . $e->getMessage()]);
            }
        }

        // --- FALLBACK LOCAL ULTRA-RAPIDE (Si pas de clé API Groq) ---
        $lowerMsg = strtolower($message);
        
        if (str_contains($lowerMsg, 'audit') || str_contains($lowerMsg, 'gérer les audits')) {
            $reply = "MindAudit permet de planifier, exécuter et suivre vos audits d'entreprise de manière centralisée et intelligente.";
        } elseif (str_contains($lowerMsg, 'document') || str_contains($lowerMsg, 'fichier') || str_contains($lowerMsg, 'rapport')) {
            $reply = "L'application intègre une gestion électronique de documents (GED) sécurisée. Vous pouvez générer des rapports PDF en un clic.";
        } elseif (str_contains($lowerMsg, 'role') || str_contains($lowerMsg, 'rôle') || str_contains($lowerMsg, 'permission') || str_contains($lowerMsg, 'utilisateur')) {
            $reply = "Le système dispose d'une gestion avancée des utilisateurs avec des rôles sur mesure (Auditeur, Manager, Admin) pour sécuriser chaque action.";
        } elseif (str_contains($lowerMsg, 'mot de passe') || str_contains($lowerMsg, 'oublie') || str_contains($lowerMsg, 'oublié')) {
            $reply = "Si vous avez oublié votre mot de passe, cliquez sur 'Mot de passe oublié ?' sous le bouton de connexion pour le réinitialiser.";
        } elseif (str_contains($lowerMsg, 'bonjour') || str_contains($lowerMsg, 'salut')) {
            $reply = "Bonjour ! Bienvenue sur MindAudit. Que puis-je vous expliquer concernant les fonctionnalités de notre plateforme ?";
        } else {
            $reply = "Je suis actuellement en mode de démonstration locale (ultra-rapide mais limité). ⚠️ Pour que je devienne une VRAIE Intelligence Artificielle qui comprend tout, l'administrateur doit rajouter la clé 'GROQ_API_KEY' dans le fichier .env !";
        }

        return new JsonResponse(['reply' => $reply]);
    }
}
