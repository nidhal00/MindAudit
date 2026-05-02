<?php

namespace App\EventSubscriber;

use App\Entity\Notification;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class LoginSubscriber implements EventSubscriberInterface
{
    private EntityManagerInterface $em;
    private MailerInterface $mailer;

    public function __construct(EntityManagerInterface $em, MailerInterface $mailer)
    {
        $this->em = $em;
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LoginSuccessEvent::class => 'onLoginSuccess',
        ];
    }

    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();

        if ($user instanceof Utilisateur) {
            // 1. Envoyer un email via Symfony Mailer
            $email = (new Email())
                ->from('eleammar21@gmail.com') // Il FAUT utiliser l'adresse mail vérifiée sur Brevo
                ->to('eleammar21@gmail.com')
                ->subject('Alerte de sécurité : Nouvelle connexion')
                ->text('L\'utilisateur ' . $user->getEmail() . ' vient de se connecter avec succès au tableau de bord MindAudit.');
            
            $this->mailer->send($email);

            // 2. Créer la notification en base
            $notification = new Notification();
            $notification->setUtilisateur($user);
            $notification->setType('info');
            $notification->setMessage("Un e-mail d'alerte et de sécurité concernant votre connexion a été envoyé avec succès à l'administrateur (eleammar21@gmail.com).");
            
            $this->em->persist($notification);
            $this->em->flush();
        }
    }
}
