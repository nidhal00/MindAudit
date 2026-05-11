<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\Utilisateur;
use App\Service\LoginRedirectService;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\SecurityBundle\Security;
use GuzzleHttp\Client;

class OAuthController extends AbstractController
{
    /**
     * Applique les correctifs SSL (XAMPP) et Redirect URI de façon ultra-légère
     */
    private function applyOAuthFix($client, Request $request, string $checkRoute): void
    {
        $provider = $client->getOAuth2Provider();
        
        // On utilise un client Guzzle fixe et léger pour éviter les erreurs SSL sur XAMPP
        $provider->setHttpClient(new Client([
            'verify' => false, 
            'timeout' => 10,
            'curl' => [
                CURLOPT_SSL_VERIFYPEER => false, 
                CURLOPT_SSL_VERIFYHOST => false
            ]
        ]));

        // Forcer les champs pour Facebook et s'assurer que l'email est demandé
        if ($provider instanceof \League\OAuth2\Client\Provider\Facebook) {
            try {
                // S'assurer que la version du graph est correcte (v18.0 est celle dans la config)
                $refl = new \ReflectionObject($provider);
                
                // Forcer les champs du Graph API
                if ($refl->hasProperty('graphApiFields')) {
                    $prop = $refl->getProperty('graphApiFields');
                    $prop->setAccessible(true);
                    $prop->setValue($provider, ['id', 'name', 'email', 'first_name', 'last_name', 'picture']);
                }
            } catch (\Exception $e) {
                // Erreur non bloquante
            }
        }
    }

    #[Route('/connect/google', name: 'connect_google')]
    public function connectGoogle(ClientRegistry $clientRegistry, Request $request): Response
    {
        $client = $clientRegistry->getClient('google');
        $this->applyOAuthFix($client, $request, 'connect_google_check');

        return $client->redirect(['profile', 'email']);
    }

    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectGoogleCheck(
        Request $request,
        ClientRegistry $clientRegistry,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        Security $security,
        LoginRedirectService $loginRedirectService
    ): Response {
        $client = $clientRegistry->getClient('google');
        $this->applyOAuthFix($client, $request, 'connect_google_check');

        try {
            $googleUser = $client->fetchUser();
            $email = $googleUser->getEmail();

            if (!$email) {
                $this->addFlash('error', '❌ Impossible de récupérer votre adresse email depuis Google.');
                return $this->redirectToRoute('app_register');
            }

            $utilisateur = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
            
            if (!$utilisateur) {
                $utilisateur = new Utilisateur();
                $utilisateur->setEmail($email);
                $nameParts = explode(' ', $googleUser->getName() ?? '', 2);
                $utilisateur->setPrenom($nameParts[0] ?? 'Google');
                $utilisateur->setNom($nameParts[1] ?? 'User');
                $utilisateur->setPassword($passwordHasher->hashPassword($utilisateur, bin2hex(random_bytes(20))));
                $utilisateur->setOauthProvider('google');
                $utilisateur->setOauthId($googleUser->getId());
                $utilisateur->setAvatar($googleUser->getAvatar());
                $utilisateur->setActif(true);
                
                $role = $entityManager->getRepository(Role::class)->findOneBy(['nom' => 'Utilisateur']);
                if ($role) $utilisateur->setRole($role);
                
                $entityManager->persist($utilisateur);
                $entityManager->flush();
            }
            
            $security->login($utilisateur, 'form_login', 'main');
            return $this->redirect($loginRedirectService->getRedirectUrl($utilisateur));
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur : ' . $e->getMessage());
            return $this->redirectToRoute('app_register');
        }
    }

    #[Route('/connect/facebook', name: 'connect_facebook')]
    public function connectFacebook(ClientRegistry $clientRegistry): Response
    {
        try {
            /** @var \KnpU\OAuth2ClientBundle\Client\Provider\FacebookClient $client */
            $client = $clientRegistry->getClient('facebook');
            
            // On force les scopes et on s'assure que le client est bien configuré
            return $client->redirect(['email', 'public_profile'], [
                'auth_type' => 'rerequest'
            ]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur d\'initialisation Facebook : ' . $e->getMessage());
            return $this->redirectToRoute('app_login');
        }
    }

    #[Route('/connect/facebook/check', name: 'connect_facebook_check')]
    public function connectFacebookCheck(
        Request $request,
        ClientRegistry $clientRegistry,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        Security $security,
        LoginRedirectService $loginRedirectService
    ): Response {
        $client = $clientRegistry->getClient('facebook');
        $this->applyOAuthFix($client, $request, 'connect_facebook_check');

        try {
            $user = $client->fetchUser();
            $email = $user->getEmail();
            
            // Si Facebook ne donne pas d'email (compte créé par téléphone), on en crée un fictif
            if (!$email) {
                $email = $user->getId() . '@facebook.mindaudit';
            }

            $utilisateur = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
            
            if (!$utilisateur) {
                $utilisateur = new Utilisateur();
                $utilisateur->setEmail($email);
                $nameParts = explode(' ', $user->getName() ?? '', 2);
                $utilisateur->setPrenom($nameParts[0] ?? 'Facebook');
                $utilisateur->setNom($nameParts[1] ?? 'User');
                $utilisateur->setPassword($passwordHasher->hashPassword($utilisateur, bin2hex(random_bytes(20))));
                $utilisateur->setOauthProvider('facebook');
                $utilisateur->setOauthId($user->getId());
                $utilisateur->setAvatar($user->getPictureUrl());
                $utilisateur->setActif(true);
                
                $role = $entityManager->getRepository(Role::class)->findOneBy(['nom' => 'Utilisateur']);
                if ($role) $utilisateur->setRole($role);
                
                $entityManager->persist($utilisateur);
                $entityManager->flush();
            }
            
            $security->login($utilisateur, 'form_login', 'main');
            return $this->redirect($loginRedirectService->getRedirectUrl($utilisateur));
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur : ' . $e->getMessage());
            return $this->redirectToRoute('app_register');
        }
    }
}
