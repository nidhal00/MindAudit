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
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Bundle\SecurityBundle\Security;

class OAuthController extends AbstractController
{
    #[Route('/connect/google', name: 'connect_google')]
    public function connectGoogle(ClientRegistry $clientRegistry): Response
    {
        return $clientRegistry
            ->getClient('google')
            ->redirect([
                'profile', 'email'
            ]);
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

        try {
            $googleUser = $client->fetchUser();
            
            $email = $googleUser->getEmail();
            $googleId = $googleUser->getId();
            
            // Chercher l'utilisateur existant
            $utilisateur = $entityManager->getRepository(Utilisateur::class)
                ->findOneBy(['email' => $email]);
            
            if (!$utilisateur) {
                // Créer un nouvel utilisateur
                $utilisateur = new Utilisateur();
                $utilisateur->setEmail($email);
                
                // Récupérer le nom complet et le diviser
                $name = $googleUser->getName() ?? '';
                $nameParts = explode(' ', $name, 2);
                $utilisateur->setPrenom($nameParts[0] ?? 'Google');
                $utilisateur->setNom($nameParts[1] ?? 'User');
                
                // Générer un mot de passe aléatoire sécurisé
                $randomPassword = bin2hex(random_bytes(32));
                $hashedPassword = $passwordHasher->hashPassword($utilisateur, $randomPassword);
                $utilisateur->setPassword($hashedPassword);
                
                $utilisateur->setOauthProvider('google');
                $utilisateur->setOauthId($googleId);
                
                // Avatar Google
                $avatar = $googleUser->getAvatar() ?? null;
                if ($avatar) {
                    $utilisateur->setAvatar($avatar);
                }
                
                $utilisateur->setActif(true);
                
                // Assigner le rôle par défaut "Utilisateur"
                $defaultRole = $entityManager->getRepository(Role::class)
                    ->findOneBy(['nom' => 'Utilisateur']);
                
                if (!$defaultRole) {
                    $this->addFlash('error', 'Erreur : Aucun rôle par défaut trouvé. Contactez l\'administrateur.');
                    return $this->redirectToRoute('app_register');
                }
                
                $utilisateur->setRole($defaultRole);
                
                $entityManager->persist($utilisateur);
                $entityManager->flush();
                
                $this->addFlash('success', '✅ Votre compte a été créé avec succès via Google !');
            } else {
                // Mettre à jour les informations OAuth si nécessaire
                if (!$utilisateur->getOauthProvider()) {
                    $utilisateur->setOauthProvider('google');
                    $utilisateur->setOauthId($googleId);
                    
                    $avatar = $googleUser->getAvatar() ?? null;
                    if ($avatar) {
                        $utilisateur->setAvatar($avatar);
                    }
                    
                    $entityManager->flush();
                }
                
                $this->addFlash('success', '✅ Connexion réussie via Google !');
            }
            
            // Connecter l'utilisateur directement
            $security->login($utilisateur, 'form_login', 'main');
            
            // Rediriger selon le rôle
            $redirectUrl = $loginRedirectService->getRedirectUrl($utilisateur);
            return $this->redirect($redirectUrl);
            
        } catch (IdentityProviderException $e) {
            $this->addFlash('error', '❌ Erreur lors de la connexion avec Google : ' . $e->getMessage());
            return $this->redirectToRoute('app_register');
        } catch (\Exception $e) {
            $this->addFlash('error', '❌ Erreur inattendue : ' . $e->getMessage());
            return $this->redirectToRoute('app_register');
        }
    }

    #[Route('/connect/facebook', name: 'connect_facebook')]
    public function connectFacebook(ClientRegistry $clientRegistry): Response
    {
        return $clientRegistry
            ->getClient('facebook')
            ->redirect([
                'public_profile', 'email'
            ]);
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

        try {
            $user = $client->fetchUser();
            
            $email = $user->getEmail();
            $facebookId = $user->getId();
            
            // Chercher l'utilisateur existant
            $utilisateur = $entityManager->getRepository(Utilisateur::class)
                ->findOneBy(['email' => $email]);
            
            if (!$utilisateur) {
                // Créer un nouvel utilisateur
                $utilisateur = new Utilisateur();
                $utilisateur->setEmail($email);
                
                // Facebook retourne le nom complet
                $name = $user->getName();
                $nameParts = explode(' ', $name, 2);
                $utilisateur->setPrenom($nameParts[0] ?? 'Facebook');
                $utilisateur->setNom($nameParts[1] ?? 'User');
                
                // Générer et stocker un mot de passe aléatoire haché (sécurise la colonne password)
                $random = bin2hex(random_bytes(16));
                $hashed = $passwordHasher->hashPassword($utilisateur, $random);
                $utilisateur->setPassword($hashed);
                
                $utilisateur->setOauthProvider('facebook');
                $utilisateur->setOauthId($facebookId);
                $utilisateur->setAvatar($user->getPictureUrl());
                $utilisateur->setActif(true);
                
                // Assigner le rôle par défaut "Utilisateur"
                $defaultRole = $entityManager->getRepository(Role::class)
                    ->findOneBy(['nom' => 'Utilisateur']);
                
                if ($defaultRole) {
                    $utilisateur->setRole($defaultRole);
                }
                
                $entityManager->persist($utilisateur);
                $entityManager->flush();
                
                $this->addFlash('success', 'Votre compte a été créé avec succès via Facebook !');
            } else {
                // Mettre à jour les informations OAuth si nécessaire
                if (!$utilisateur->getOauthProvider()) {
                    $utilisateur->setOauthProvider('facebook');
                    $utilisateur->setOauthId($facebookId);
                    $utilisateur->setAvatar($user->getPictureUrl());
                    $entityManager->flush();
                }
                
                $this->addFlash('success', 'Connexion réussie via Facebook !');
            }
            
            // Connecter l'utilisateur directement
            $security->login($utilisateur, 'form_login', 'main');
            
            // Rediriger selon le rôle
            $redirectUrl = $loginRedirectService->getRedirectUrl($utilisateur);
            return $this->redirect($redirectUrl);
            
        } catch (IdentityProviderException $e) {
            $this->addFlash('error', 'Erreur lors de la connexion avec Facebook : ' . $e->getMessage());
            return $this->redirectToRoute('app_register');
        }
    }
}
