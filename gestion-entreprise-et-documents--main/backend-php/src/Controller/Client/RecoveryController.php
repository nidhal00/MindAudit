<?php

namespace App\Controller\Client;

use App\Repository\EntrepriseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class RecoveryController extends AbstractController
{
    #[Route('/employee/recover', name: 'app_employee_recover')]
    public function recover(Request $request, EntrepriseRepository $entrepriseRepository, MailerInterface $mailer): Response
    {
        $success = null;
        $error = null;

        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $entreprise = $entrepriseRepository->findOneBy(['email' => $email]);

            if ($entreprise && $entreprise->getAccessCode()) {
                // Send Email
                $emailMessage = (new Email())
                    ->from(new Address('gouader.nidhal@esprit.tn', 'MindAudit AI'))
                    ->to($entreprise->getEmail())
                    ->subject('Récupération de votre Code d\'accès')
                    ->html('<p>Bonjour,</p><p>Votre code d\'accès est : <strong>'.$entreprise->getAccessCode().'</strong></p>');

                $mailer->send($emailMessage);
                $success = 'Un email avec votre code a été envoyé !';
            } else {
                $error = 'Cet email ne correspond à aucune entreprise active.';
            }
        }

        return $this->render('client/recover.html.twig', [
            'success' => $success,
            'error' => $error
        ]);
    }
}
