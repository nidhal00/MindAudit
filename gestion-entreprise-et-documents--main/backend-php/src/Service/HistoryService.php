<?php

namespace App\Service;

use App\Entity\Entreprise;
use App\Entity\Historique;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\SecurityBundle\Security;

class HistoryService
{
    private EntityManagerInterface $entityManager;
    private RequestStack $requestStack;
    private Security $security;

    public function __construct(
        EntityManagerInterface $entityManager,
        RequestStack $requestStack,
        Security $security
    ) {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack;
        $this->security = $security;
    }

    public function log(string $action, string $description, ?Entreprise $entreprise = null): void
    {
        $historique = new Historique();
        $historique->setTypeAction($action);
        $historique->setDescription($description);
        $historique->setEntreprise($entreprise);

        // Capture IP
        $request = $this->requestStack->getCurrentRequest();
        if ($request) {
            $historique->setIpAddress($request->getClientIp());
        }

        // Capture User
        $user = $this->security->getUser();
        if ($user) {
            $historique->setAuteur($user->getUserIdentifier());
        } else {
            $historique->setAuteur('Système / Anonyme');
        }

        $this->entityManager->persist($historique);
        $this->entityManager->flush();
    }
}
