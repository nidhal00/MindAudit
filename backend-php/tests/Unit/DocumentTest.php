<?php

namespace App\Tests\Unit;

use App\Entity\Document;
use App\Entity\Entreprise;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Validation;

class DocumentTest extends TestCase
{
    private $validator;

    protected function setUp(): void
    {
        $this->validator = Validation::createValidatorBuilder()
            ->enableAttributeMapping()
            ->getValidator();
    }

    public function testNomIsValid(): void
    {
        $document = new Document();
        $document->setNom('Facture Test');
        $errors = $this->validator->validateProperty($document, 'nom');
        $this->assertCount(0, $errors);

        $document->setNom('');
        $errors = $this->validator->validateProperty($document, 'nom');
        $this->assertGreaterThan(0, count($errors));
    }

    public function testTypeIsValid(): void
    {
        $document = new Document();
        $document->setType(Document::TYPE_FISCAL);
        $errors = $this->validator->validateProperty($document, 'type');
        $this->assertCount(0, $errors);

        $document->setType('invalid-type');
        $errors = $this->validator->validateProperty($document, 'type');
        $this->assertGreaterThan(0, count($errors));
    }

    public function testNoteIAIsValid(): void
    {
        $document = new Document();
        $document->setNoteIA(85);
        $errors = $this->validator->validateProperty($document, 'noteIA');
        $this->assertCount(0, $errors);

        $document->setNoteIA(105);
        $errors = $this->validator->validateProperty($document, 'noteIA');
        $this->assertGreaterThan(0, count($errors));

        $document->setNoteIA(-5);
        $errors = $this->validator->validateProperty($document, 'noteIA');
        $this->assertGreaterThan(0, count($errors));
    }

    public function testRatingIsValid(): void
    {
        $document = new Document();
        $document->setRating(4);
        $errors = $this->validator->validateProperty($document, 'rating');
        $this->assertCount(0, $errors);

        $document->setRating(6);
        $errors = $this->validator->validateProperty($document, 'rating');
        $this->assertGreaterThan(0, count($errors));

        $document->setRating(0);
        $errors = $this->validator->validateProperty($document, 'rating');
        $this->assertGreaterThan(0, count($errors));
    }

    public function testStatutIsValid(): void
    {
        $document = new Document();
        $document->setStatut(Document::STATUT_VALIDE);
        $errors = $this->validator->validateProperty($document, 'statut');
        $this->assertCount(0, $errors);

        $document->setStatut('inconnu');
        $errors = $this->validator->validateProperty($document, 'statut');
        $this->assertGreaterThan(0, count($errors));
    }
}
