<?php

namespace App\Service;

use App\Entity\Entreprise;

class RegistrationAnalyzer
{
    /**
     * Analyse une entreprise et retourne un score de confiance (0-100).
     * Décide si l'inscription peut être validée automatiquement par l'IA.
     */
    public function analyze(Entreprise $entreprise): array
    {
        $score = 0; // On part de 0
        $reasons = [];

        // 1. Analyse Email (30 pts)
        $email = $entreprise->getEmail();
        if ($email) {
            $domain = substr(strrchr($email, "@"), 1);
            $publicDomains = ['gmail.com', 'yahoo.fr', 'hotmail.com', 'outlook.com', 'yahoo.com'];
            
            if (!in_array($domain, $publicDomains)) {
                $score += 30;
                $reasons[] = "Email Pro (+30)";
            }
        }

        // 2. Analyse Matricule (20 pts) - Format 7 chiffres / 3 lettres / 3 chiffres
        // Ex: 1234567/A/B/C/000
        if (preg_match('/^[0-9]{7}\/[A-Z]\/[A-Z]\/[A-Z]\/[0-9]{3}$/', $entreprise->getMatriculeFiscale() ?? '')) {
            $score += 20;
            $reasons[] = "Matricule Standard (+20)";
        }

        // 3. Ancienneté > 2 ans (20 pts)
        $dateCreation = $entreprise->getDateCreation();
        if ($dateCreation) {
            $now = new \DateTime();
            $age = $now->diff($dateCreation)->y;
            if ($age >= 2) {
                $score += 20;
                $reasons[] = "Ancienneté > 2 ans (+20)";
            }
        }

        // 4. Secteur Technologie ou Finance (10 pts)
        $secteur = $entreprise->getSecteur();
        if (in_array($secteur, ['Technologie', 'Finance'])) {
            $score += 10;
            $reasons[] = "Secteur Stratégique (+10)";
        }

        // Seuil à 80
        $decision = ($score >= 80) ? Entreprise::STATUT_VALIDE : Entreprise::STATUT_EN_ATTENTE;

        return [
            'score' => $score,
            'details' => $reasons,
            'decision' => $decision
        ];
    }
}
