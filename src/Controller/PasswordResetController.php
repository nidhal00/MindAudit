<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\ForgottenPasswordType;
use App\Form\ResetPasswordType;
use App\Repository\UtilisateurRepository;
use App\Repository\PasswordResetTokenRepository;
use App\Service\PasswordResetService;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/auth')]
class PasswordResetController extends AbstractController
{
    #[Route('/oubli-mot-de-passe', name: 'app_forgotten_password')]
    public function forgottenPassword(
        Request $request,
        UtilisateurRepository $userRepository,
        PasswordResetService $resetService
    ): Response {
        $form = $this->createForm(ForgottenPasswordType::class);
        $form->handleRequest($request);

        $message = null;
        $messageType = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $email = $data['email'] ?? null;

            if ($email) {
                $user = $userRepository->findOneBy(['email' => $email]);

                // Pour des raisons de sécurité, on ne révèle pas l'existence de l'email
                $message = "✅ Un email a été envoyé (si l'adresse existe)";
                $messageType = 'success';

                if ($user instanceof Utilisateur) {
                    // Génère un token
                    $ipAddress = $request->getClientIp() ?? '';
                    $userAgent = $request->headers->get('User-Agent') ?? '';
                    $resetToken = $resetService->generateResetToken($user, $ipAddress, $userAgent);

                    // Bouton pressé: lien ou code
                    $clicked = $form->get('send_code')->isClicked() ? 'code' : 'link';

                    if ($clicked === 'link') {
                        // Générer le lien absolu + envoyer
                        $resetLink = $this->generateUrl('app_reset_password', [
                            'token' => $resetToken->getToken()
                        ], UrlGeneratorInterface::ABSOLUTE_URL);
                        $resetService->sendResetEmail($resetToken, $resetLink);

                        // Optionnel: message spécifique
                        $message = '✅ Un email a été envoyé avec un lien de réinitialisation (valide 15 minutes)';
                    } else {
                        // Envoyer juste le code et rediriger vers la page de saisie du code
                        $resetService->sendResetCodeEmail($resetToken);
                        return $this->redirectToRoute('app_reset_password_with_code');
                    }
                }
            }
        }

        return $this->render('security/forgotten_password.html.twig', [
            'form' => $form,
            'message' => $message,
            'messageType' => $messageType,
        ]);
    }

    #[Route('/reset-mot-de-passe/{token}', name: 'app_reset_password')]
    public function resetPassword(
        string $token,
        Request $request,
        PasswordResetService $resetService,
        PasswordResetTokenRepository $tokenRepository,
        Security $security
    ): Response {
        // Vérifie le token
        $resetToken = $tokenRepository->findValidToken($token);

        if (!$resetToken) {
            $this->addFlash('error', '❌ Le lien est invalide ou a expiré');
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $newPassword = $data['password'] ?? null;

            if ($newPassword) {
                $ipAddress = $request->getClientIp() ?? '';
                $userAgent = $request->headers->get('User-Agent') ?? '';

                if ($resetService->resetPassword($token, $newPassword, $ipAddress, $userAgent)) {
                    // Auto-login the user after successful reset
                    $resetToken = $tokenRepository->findValidToken($token);
                    if ($resetToken) {
                        $user = $resetToken->getUtilisateur();
                        $security->login($user, 'main');
                    }

                    $this->addFlash('success', '✅ Votre mot de passe a été réinitialisé et vous êtes connecté.');
                    return $this->redirectToRoute('app_dashboard');
                } else {
                    $this->addFlash('error', '❌ Erreur lors de la réinitialisation');
                }
            }
        }

        return $this->render('security/reset_password.html.twig', [
            'form' => $form,
            'token' => $token,
        ]);
    }

    #[Route('/reset-mot-de-passe/code', name: 'app_reset_password_with_code')]
    public function resetPasswordWithCode(
        Request $request,
        PasswordResetService $resetService,
        PasswordResetTokenRepository $tokenRepository,
        Security $security
    ): Response {
        $form = $this->createForm(\App\Form\ResetPasswordWithTokenType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $token = $data['token'] ?? null;
            $newPassword = $data['password'] ?? null;

            if ($token && $newPassword) {
                $ipAddress = $request->getClientIp() ?? '';
                $userAgent = $request->headers->get('User-Agent') ?? '';

                if ($resetService->resetPassword($token, $newPassword, $ipAddress, $userAgent)) {
                    // Auto-login
                    $resetToken = $tokenRepository->findValidToken($token);
                    if ($resetToken) {
                        $user = $resetToken->getUtilisateur();
                        $security->login($user, 'main');
                    }

                    $this->addFlash('success', '✅ Votre mot de passe a été réinitialisé et vous êtes connecté.');
                    return $this->redirectToRoute('app_dashboard');
                } else {
                    $this->addFlash('error', '❌ Le code est invalide ou a expiré');
                }
            }
        }

        return $this->render('security/reset_password_with_code.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/my-password-history', name: 'app_password_history')]
    public function passwordHistory(
        PasswordResetService $resetService
    ): Response {
        /** @var Utilisateur $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $history = $resetService->getPasswordHistory($user);
        $anomalies = $resetService->detectAnomalies($user);

        return $this->render('security/password_history.html.twig', [
            'history' => $history,
            'anomalies' => $anomalies,
        ]);
    }
}
