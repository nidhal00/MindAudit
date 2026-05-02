<?php

namespace App\EventListener;

use App\Entity\Utilisateur;
use App\Service\LoginRedirectService;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\AuditService;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;
use Symfony\Component\HttpFoundation\RequestStack;

#[AsEventListener(event: LoginSuccessEvent::class)]
class LoginSuccessListener
{
    private LoginRedirectService $loginRedirectService;
    private EntityManagerInterface $em;
    private RequestStack $requestStack;
    private AuditService $audit;

    public function __construct(LoginRedirectService $loginRedirectService, EntityManagerInterface $em, RequestStack $requestStack, AuditService $audit)
    {
        $this->loginRedirectService = $loginRedirectService;
        $this->em = $em;
        $this->requestStack = $requestStack;
        $this->audit = $audit;
    }

    public function __invoke(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();
        
        if ($user instanceof Utilisateur) {
            // Reset échecs et mise à jour des métadonnées
            $user->resetFailedLoginAttempts();
            $user->setLastLoginAt(new \DateTimeImmutable());
            $user->setLastActivityAt(new \DateTimeImmutable());

            $request = $this->requestStack->getCurrentRequest();
            if ($request) {
                $ip = $request->getClientIp();
                $ua = $request->headers->get('User-Agent');
                if (method_exists($user, 'setLastLoginIp')) {
                    $user->setLastLoginIp($ip);
                }
                if (method_exists($user, 'setLastUserAgent')) {
                    $user->setLastUserAgent($ua);
                }
            }

            $this->em->flush();

            // Audit login success
            $this->audit->log($user, 'login_success', 'Utilisateur', (string)$user->getId(), null);

            $redirectUrl = $this->loginRedirectService->getRedirectUrl($user);
            $response = new RedirectResponse($redirectUrl);
            $event->setResponse($response);
        }
    }
}