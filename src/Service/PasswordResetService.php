<?php

namespace App\Service;

use App\Entity\PasswordHistory;
use App\Entity\PasswordResetToken;
use App\Entity\Utilisateur;
use App\Repository\PasswordResetTokenRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PasswordResetService
{
    public function __construct(
        private EntityManagerInterface $em,
        private PasswordResetTokenRepository $tokenRepository,
        private UserPasswordHasherInterface $passwordHasher,
        private MailerInterface $mailer,
    ) {
    }

    /**
     * Envoie l'email contenant le lien de réinitialisation
     */
    public function sendResetEmail(PasswordResetToken $token, string $resetLink): void
    {
        try {
            $user = $token->getUtilisateur();

            $email = (new TemplatedEmail())
                ->from(new Address('security@mindaudit.local', 'MindAudit Sécurité'))
                ->to($user->getEmail())
                ->subject('🔐 Réinitialisez votre mot de passe')
                ->htmlTemplate('emails/password_reset_link.html.twig')
                ->context([
                    'user' => $user,
                    'resetLink' => $resetLink,
                ]);

            $this->mailer->send($email);
        } catch (\Exception $e) {
            error_log('Erreur envoi email de réinitialisation : ' . $e->getMessage());
        }
    }

    /**
     * Envoie l'email contenant le code/token (au lieu du lien)
     */
    public function sendResetCodeEmail(PasswordResetToken $token): void
    {
        try {
            $user = $token->getUtilisateur();

            $email = (new TemplatedEmail())
                ->from(new Address('security@mindaudit.local', 'MindAudit Sécurité'))
                ->to($user->getEmail())
                ->subject('🔢 Votre code de réinitialisation')
                ->htmlTemplate('emails/password_reset_code.html.twig')
                ->context([
                    'user' => $user,
                    'token' => $token->getToken(),
                ]);

            $this->mailer->send($email);
        } catch (\Exception $e) {
            error_log('Erreur envoi email code réinitialisation : ' . $e->getMessage());
        }
    }

    /**
     * Genère un token de réinitialisation sécurisé
     */
    public function generateResetToken(
        Utilisateur $user,
        string $ipAddress = '',
        string $userAgent = ''
    ): PasswordResetToken {
        // Invalide tous les tokens précédents
        foreach ($user->getPasswordResetTokens() as $existingToken) {
            if (!$existingToken->isUsed()) {
                $existingToken->setIsUsed(true);
            }
        }

        // Génère un token cryptographiquement sécurisé
        $token = bin2hex(random_bytes(32));

        // Crée un nouvel enregistrement
        $resetToken = new PasswordResetToken();
        $resetToken->setUtilisateur($user);
        $resetToken->setToken($token);
        $resetToken->setIpAddress($ipAddress);
        $resetToken->setUserAgent($userAgent);

        $this->em->persist($resetToken);
        $this->em->flush();

        return $resetToken;
    }

    /**
     * Valide et utilise le token, puis réinitialise le mot de passe
     */
    public function resetPassword(
        string $tokenString,
        string $newPassword,
        string $ipAddress = '',
        string $userAgent = ''
    ): bool {
        // Recupere et valide le token (tokens are valid until used)
        $resetToken = $this->tokenRepository->findValidToken($tokenString);
        if (!$resetToken) {
            return false;
        }

        $user = $resetToken->getUtilisateur();

        // Hache le nouveau mot de passe
        $hashedPassword = $this->passwordHasher->hashPassword($user, $newPassword);
        $user->setPassword($hashedPassword);

        // Marque le token comme utilisé
        $resetToken->setIsUsed(true);
        $resetToken->setUsedAt(new \DateTimeImmutable());

        // Enregistre dans l'historique
        $history = new PasswordHistory();
        $history->setUtilisateur($user);
        $history->setHashedPassword($hashedPassword);
        $history->setChangeReason('forgotten');
        $history->setIpAddress($ipAddress);
        $history->setUserAgent($userAgent);

        $this->em->persist($history);
        $this->em->flush();

        // Envoie une notification de sécurité
        $this->sendSecurityNotification($user, 'reset');

        return true;
    }

    /**
     * Change le mot de passe depuis le profil utilisateur
     */
    public function changePassword(
        Utilisateur $user,
        string $newPassword,
        string $ipAddress = '',
        string $userAgent = ''
    ): void {
        // Hache le nouveau mot de passe
        $hashedPassword = $this->passwordHasher->hashPassword($user, $newPassword);
        $user->setPassword($hashedPassword);

        // Enregistre dans l'historique
        $history = new PasswordHistory();
        $history->setUtilisateur($user);
        $history->setHashedPassword($hashedPassword);
        $history->setChangeReason('manual');
        $history->setIpAddress($ipAddress);
        $history->setUserAgent($userAgent);

        $this->em->persist($history);
        $this->em->flush();

        // Notification de sécurité
        $this->sendSecurityNotification($user, 'changed');
    }

    /**
     * Envoie une notification de sécurité par email
     */
    private function sendSecurityNotification(Utilisateur $user, string $type): void
    {
        try {
            $subject = match($type) {
                'reset' => '🔐 Votre mot de passe a été réinitialisé',
                'changed' => '🔐 Votre mot de passe a été modifié',
                default => '🔐 Notification de sécurité'
            };

            $email = (new TemplatedEmail())
                ->from(new Address('security@mindaudit.local', 'MindAudit Sécurité'))
                ->to($user->getEmail())
                ->subject($subject)
                ->htmlTemplate('emails/password_notification.html.twig')
                ->context([
                    'user' => $user,
                    'type' => $type,
                    'timestamp' => new \DateTime(),
                ]);

            $this->mailer->send($email);
        } catch (\Exception $e) {
            // Log l'erreur mais ne lève pas d'exception
            error_log('Erreur email : ' . $e->getMessage());
        }
    }

    /**
     * Récupère l'historique des 10 derniers changements
     */
    public function getPasswordHistory(Utilisateur $user, int $limit = 10): array
    {
        return $this->em->getRepository(PasswordHistory::class)
            ->findRecentForUser($user, $limit);
    }

    /**
     * Detecte les anomalies (trop de changements rapides, etc.)
     */
    public function detectAnomalies(Utilisateur $user): array
    {
        $anomalies = [];
        $history = $this->getPasswordHistory($user, 5);

        if (count($history) >= 3) {
            $firstChange = $history[0]->getChangedAt();
            $lastChange = $history[count($history) - 1]->getChangedAt();

            $interval = $firstChange->diff($lastChange);

            // Alerte si 3 changements en moins d'une heure
            if ($interval->h == 0 && $interval->i < 60) {
                $anomalies[] = [
                    'type' => 'rapid_changes',
                    'message' => '⚠️ Plusieurs changements détectés rapidement',
                    'severity' => 'warning'
                ];
            }
        }

        return $anomalies;
    }
}
