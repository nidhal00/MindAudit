<?php

namespace App\Event;

use App\Entity\Document;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Dispatché quand un document est rejeté par l'admin.
 */
class DocumentRejectedEvent extends Event
{
    public const NAME = 'document.rejected';

    public function __construct(
        private Document $document,
        private string $commentaire = ''
    ) {}

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function getCommentaire(): string
    {
        return $this->commentaire;
    }
}
