<?php

namespace App\Service;

use App\Entity\Entreprise;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Psr\Log\LoggerInterface;

class NotificationService
{
    private $mailer;
    private $logger;

    public function __construct(
        MailerInterface $mailer,
        LoggerInterface $logger
    ) {
        $this->mailer = $mailer;
        $this->logger = $logger;
    }

    /**
     * Envoie une notification par email
     */
    public function sendNotification(Entreprise $entreprise, string $subject, string $message, string $commentaire = '', string $actionUrl = '', string $registerUrl = '', string $accessCode = ''): void
    {
        // Envoi Email
        if ($entreprise->getEmail()) {
            $email = (new TemplatedEmail())
                ->from(new Address('gouader.nidhal@esprit.tn', 'MindAudit Admin'))
                ->to($entreprise->getEmail())
                ->subject($subject)
                ->htmlTemplate('emails/notification.html.twig')
                ->context([
                    'entreprise' => $entreprise,
                    'message_decision' => $message,
                    'commentaire' => $commentaire,
                    'action_url' => $actionUrl,
                    'register_url' => $registerUrl,
                    'access_code' => $accessCode,
                    'qr_code_url' => 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . $accessCode
                ]);

            // Envoi (les erreurs remonteront pour debug)
            try {
                $this->mailer->send($email);
            } catch (\Exception $e) {
                $this->logger->error('Erreur SMTP : ' . $e->getMessage());
                throw $e; // On relance pour que le contrôleur puisse l'intercepter
            }
        }
    }
}
