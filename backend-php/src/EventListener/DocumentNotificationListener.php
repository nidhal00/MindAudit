<?php

namespace App\EventListener;

use App\Event\DocumentValidatedEvent;
use App\Event\DocumentRejectedEvent;
use App\Service\NotificationService;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Écoute les événements du cycle de vie des documents
 * et envoie les notifications appropriées.
 */
class DocumentNotificationListener implements EventSubscriberInterface
{
    public function __construct(
        private NotificationService   $notificationService,
        private UrlGeneratorInterface $urlGenerator,
        private LoggerInterface       $logger
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            DocumentValidatedEvent::NAME => 'onDocumentValidated',
            DocumentRejectedEvent::NAME  => 'onDocumentRejected',
        ];
    }

    public function onDocumentValidated(DocumentValidatedEvent $event): void
    {
        $document   = $event->getDocument();
        $entreprise = $document->getEntreprise();

        if (!$entreprise) {
            return;
        }

        try {
            $actionUrl = $this->urlGenerator->generate(
                'app_client_dashboard',
                [],
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            $this->notificationService->sendNotification(
                $entreprise,
                '✅ Document Validé — ' . $document->getNom(),
                'Votre document "' . $document->getNom() . '" a été validé par notre équipe d\'audit. Vous pouvez maintenant accéder à votre espace client.',
                '',
                $actionUrl
            );

            $this->logger->info('Notification validation envoyée', [
                'document_id'   => $document->getId(),
                'entreprise_id' => $entreprise->getId(),
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur notification validation : ' . $e->getMessage());
        }
    }

    public function onDocumentRejected(DocumentRejectedEvent $event): void
    {
        $document    = $event->getDocument();
        $entreprise  = $document->getEntreprise();
        $commentaire = $event->getCommentaire();

        if (!$entreprise) {
            return;
        }

        try {
            $this->notificationService->sendNotification(
                $entreprise,
                '❌ Document Rejeté — ' . $document->getNom(),
                'Votre document "' . $document->getNom() . '" n\'a pas pu être validé.',
                $commentaire ?: 'Aucun commentaire fourni.',
                ''
            );

            $this->logger->info('Notification rejet envoyée', [
                'document_id'   => $document->getId(),
                'entreprise_id' => $entreprise->getId(),
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur notification rejet : ' . $e->getMessage());
        }
    }
}
