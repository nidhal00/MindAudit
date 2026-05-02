<?php
namespace App\Command;

use App\Entity\Notification;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:add-notifs')]
class AddNotifCommand extends Command
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $utilisateurs = $this->em->getRepository(Utilisateur::class)->findAll();

        foreach ($utilisateurs as $user) {
            $notif = new Notification();
            $notif->setUtilisateur($user);
            $notif->setType('success');
            $notif->setMessage('Bienvenue sur le nouveau tableau de bord MindAudit ! Le système de notifications est actif.');
            $this->em->persist($notif);

            $notif2 = new Notification();
            $notif2->setUtilisateur($user);
            $notif2->setType('info');
            $notif2->setMessage('Une nouvelle fonctionnalité "Métier Avancé" a été ajoutée.');
            $this->em->persist($notif2);
        }

        $this->em->flush();
        $output->writeln('Notifications ajoutées.');
        return Command::SUCCESS;
    }
}
