<?php
require __DIR__.'/vendor/autoload.php';

use App\Kernel;
use App\Entity\Notification;
use App\Entity\Utilisateur;

$kernel = new Kernel('dev', true);
$kernel->boot();

$em = $kernel->getContainer()->get('doctrine')->getManager();
$utilisateurs = $em->getRepository(Utilisateur::class)->findAll();

foreach ($utilisateurs as $user) {
    $notif = new Notification();
    $notif->setUtilisateur($user);
    $notif->setType('success');
    $notif->setMessage('Bienvenue sur le nouveau tableau de bord MindAudit ! Le système de notifications est maintenant actif.');
    $em->persist($notif);

    $notif2 = new Notification();
    $notif2->setUtilisateur($user);
    $notif2->setType('info');
    $notif2->setMessage('Une nouvelle analyse des rôles est disponible dans vos statistiques.');
    $em->persist($notif2);
}

$em->flush();
echo "Notifications ajoutées avec succès pour tous les utilisateurs.\n";
