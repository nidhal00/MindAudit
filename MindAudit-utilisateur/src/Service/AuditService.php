<?php

namespace App\Service;

use App\Entity\AuditLog;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class AuditService
{
    public function __construct(private EntityManagerInterface $em, private RequestStack $requestStack) {}

    public function log(?Utilisateur $user, string $action, ?string $entity = null, ?string $entityId = null, ?array $details = null, bool $flush = false): AuditLog
    {
        $log = new AuditLog();
        $log->setUtilisateur($user)
            ->setAction($action)
            ->setEntity($entity)
            ->setEntityId($entityId)
            ->setDetails($details);

        $req = $this->requestStack->getCurrentRequest();
        if ($req) {
            $log->setIpAddress($req->getClientIp());
            $log->setUserAgent($req->headers->get('User-Agent'));
        }

        $this->em->persist($log);
        
        // Flush seulement si demandé explicitement
        if ($flush) {
            $this->em->flush();
        }
        
        return $log;
    }
}
