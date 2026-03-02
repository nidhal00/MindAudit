<?php

namespace App\DataFixtures;

use App\Entity\Document;
use App\Entity\Entreprise;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Quelques entreprises de test
        $entreprises = [];

        $dataEntreprises = [
            [
                'nom' => 'MindAudit Consulting',
                'matricule' => 'MA-001',
                'secteur' => 'Conseil',
                'taille' => Entreprise::TAILLE_MEDIUM,
                'pays' => 'Tunisie',
                'email' => 'contact@mindaudit.tn',
                'telephone' => '+216 71 000 000',
                'adresse' => 'Centre Urbain Nord, Tunis',
            ],
            [
                'nom' => 'Esprit Industries',
                'matricule' => 'ES-002',
                'secteur' => 'Industrie',
                'taille' => Entreprise::TAILLE_LARGE,
                'pays' => 'Tunisie',
                'email' => 'info@esprit-industries.tn',
                'telephone' => '+216 71 100 200',
                'adresse' => 'Z.I. Charguia 2, Tunis',
            ],
        ];

        foreach ($dataEntreprises as $row) {
            $entreprise = (new Entreprise())
                ->setNom($row['nom'])
                ->setMatriculeFiscale($row['matricule'])
                ->setSecteur($row['secteur'])
                ->setTaille($row['taille'])
                ->setPays($row['pays'])
                ->setEmail($row['email'])
                ->setTelephone($row['telephone'])
                ->setAdresse($row['adresse']);

            $manager->persist($entreprise);
            $entreprises[] = $entreprise;
        }

        // Quelques documents de test liés aux entreprises
        $types = Document::TYPES;
        $statuts = Document::STATUTS;

        foreach ($entreprises as $index => $entreprise) {
            for ($i = 1; $i <= 3; $i++) {
                $type = $types[array_rand($types)];
                $statut = $statuts[array_rand($statuts)];

                $document = (new Document())
                    ->setEntreprise($entreprise)
                    ->setNom(sprintf('Document %d - %s', $i, $entreprise->getNom()))
                    ->setType($type)
                    ->setUrl(sprintf('https://example.com/%s/%s-%d.pdf', strtolower($type), $entreprise->getId() ?? ($index + 1), $i))
                    ->setStatut($statut);

                $manager->persist($document);
            }
        }

        $manager->flush();
    }
}

