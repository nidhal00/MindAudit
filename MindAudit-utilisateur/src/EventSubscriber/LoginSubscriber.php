<?php

namespace App\EventSubscriber;

use App\Entity\Notification;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;
use Symfony\Component\Security\Http\Event\LoginFailureEvent;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Entity\HistoriqueConnexion;

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
            LoginFailureEvent::class => 'onLoginFailure',
        ];
    }

    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();
        $request = $event->getRequest();

        if ($user instanceof Utilisateur) {
            $realIp = $request->getClientIp() ?? 'inconnu';
            $email = $user->getEmail();
            
            // Si on est en local, on génère une fausse IP unique par utilisateur
            if (in_array($realIp, ['127.0.0.1', '::1', 'inconnu'])) {
                // Utilise le hash de l'email pour générer une adresse IP constante pour cet utilisateur
                $fakeIp = long2ip(crc32($email));
                // On s'assure de ne pas générer d'IP locales ou invalides
                $realIp = $fakeIp;
            }

            // Log in HistoriqueConnexion
            $historique = new HistoriqueConnexion();
            $historique->setUtilisateur($user);
            $historique->setEmailTente($email);
            $historique->setIpAddress($realIp);
            $historique->setStatut('SUCCES');
            
            $this->em->persist($historique);
            
            // 1. Envoyer un email via Symfony Mailer
            $email = (new Email())
                ->from('eleammar21@gmail.com') // Il FAUT utiliser l'adresse mail vérifiée sur Brevo
                ->to('eleammar21@gmail.com')
                ->subject('Alerte de sécurité : Nouvelle connexion')
                ->text('L\'utilisateur ' . $user->getEmail() . ' vient de se connecter avec succès au tableau de bord MindAudit.');
            
            try {
                $this->mailer->send($email);
            } catch (\Exception $e) {
                // On ignore l'erreur d'envoi pour ne pas bloquer la connexion
            }

            // 2. Créer la notification en base
            $notification = new Notification();
            $notification->setUtilisateur($user);
            $notification->setType('info');
            $notification->setMessage("Un e-mail d'alerte et de sécurité concernant votre connexion a été envoyé avec succès à l'administrateur (eleammar21@gmail.com).");
            
            $this->em->persist($notification);
            $this->em->flush();
        }
    }

    public function onLoginFailure(LoginFailureEvent $event): void
    {
        $request = $event->getRequest();
        $exception = $event->getException();
        
        // On récupère l'email tapé dans la requête (souvent dans request->request ou _username)
        $emailTente = $request->request->get('_username', 'Inconnu');
        if (is_array($request->request->all('login')) && isset($request->request->all('login')['email'])) {
            $emailTente = $request->request->all('login')['email'];
        }

        $realIp = $request->getClientIp() ?? 'inconnu';
        // Si on est en local, on génère une fausse IP unique par email
        if (in_array($realIp, ['127.0.0.1', '::1', 'inconnu'])) {
            $realIp = long2ip(crc32((string) $emailTente));
        }

        $historique = new HistoriqueConnexion();
        $historique->setEmailTente((string) $emailTente);
        $historique->setIpAddress($realIp);
        $historique->setStatut('ECHEC');
        
        // Si l'utilisateur existe dans la base, on le relie
        if ($event->getPassport() && $event->getPassport()->getUser()) {
            $user = $event->getPassport()->getUser();
            if ($user instanceof Utilisateur) {
                $historique->setUtilisateur($user);
            }
        }
        
        $this->em->persist($historique);
        $this->em->flush();
    }
}
