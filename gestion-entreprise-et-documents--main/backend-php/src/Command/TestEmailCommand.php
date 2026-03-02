<?php

namespace App\Command;

use App\Entity\Entreprise;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

#[AsCommand(
    name: 'app:test-email',
    description: 'Test email sending',
)]
class TestEmailCommand extends Command
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('recipient', \Symfony\Component\Console\Input\InputArgument::OPTIONAL, 'Email recipient', 'gouader.nidhal@esprit.tn');
        $this->addArgument('sender', \Symfony\Component\Console\Input\InputArgument::OPTIONAL, 'Email sender', 'gouader.nidhal@esprit.tn');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $recipient = $input->getArgument('recipient');
            $sender = $input->getArgument('sender');

            $output->writeln("🚀 Envoi d'un email de test de <$sender> vers <$recipient>...");

            // Debug: Check last enterprise
            try {
                /** @var \App\Repository\EntrepriseRepository $repo */
                $repo = $this->getApplication()->getKernel()->getContainer()->get('doctrine')->getRepository(Entreprise::class);
                $lastEntreprise = $repo->findOneBy([], ['id' => 'DESC']);
                if ($lastEntreprise) {
                    $output->writeln("ℹ️ Dernière entreprise enregistrée : " . $lastEntreprise->getNom() . " (Email: " . $lastEntreprise->getEmail() . ")");
                } else {
                    $output->writeln("ℹ️ Aucune entreprise trouvée en base de données.");
                }
            } catch (\Throwable $e) {
                // Ignore DB errors specifically for email test
                $output->writeln("⚠️ Info DB non disponible : " . $e->getMessage());
            }

            // Create a real entreprise entity
            $mockEntreprise = new Entreprise();
            $mockEntreprise->setNom('Entreprise Test SA');
            $mockEntreprise->setEmail($recipient);
            $mockEntreprise->setAccessCode('TEST-CODE-123');

            $email = (new TemplatedEmail())
                ->from(new Address($sender, 'MindAudit Test'))
                ->to($recipient)
                ->subject('Test Email from MindAudit')
                ->htmlTemplate('emails/notification.html.twig')
                ->context([
                    'entreprise' => $mockEntreprise,
                    'message_decision' => 'Ceci est un email de test.',
                    'commentaire' => 'Test réussi !',
                    'action_url' => 'http://localhost:8000/admin/entreprise/1',
                    'qr_code_url' => 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=TEST-CODE-123',
                    'access_code' => 'TEST-CODE-123',
                    'register_url' => 'http://localhost:8000/employee/login'
                ]);

            $this->mailer->send($email);

            $output->writeln('✅ Email envoyé avec succès !');
            return Command::SUCCESS;

        } catch (\Throwable $e) {
            $output->writeln('❌ ERREUR CRITIQUE : ' . $e->getMessage());
            $output->writeln($e->getTraceAsString());
            return Command::FAILURE;
        }
    }
}
