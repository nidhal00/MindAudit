<?php

namespace App\Event;

use App\Entity\Document;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Dispatché quand un document est validé par l'admin.
 */
class DocumentValidatedEvent extends Event
{
    public const NAME = 'document.validated';

    public function __construct(private Document $document) {}

    public function getDocument(): Document
    {
        return $this->document;
    }
}
