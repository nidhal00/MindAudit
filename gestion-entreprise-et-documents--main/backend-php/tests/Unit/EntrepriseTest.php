<?php

namespace App\Tests\Unit;

use App\Entity\Entreprise;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Validation;

class EntrepriseTest extends TestCase
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
        $entreprise = new Entreprise();
        $entreprise->setNom('Test Corp');
        $errors = $this->validator->validateProperty($entreprise, 'nom');
        $this->assertCount(0, $errors);

        $entreprise->setNom('');
        $errors = $this->validator->validateProperty($entreprise, 'nom');
        $this->assertGreaterThan(0, count($errors));
    }

    public function testEmailIsValid(): void
    {
        $entreprise = new Entreprise();
        $entreprise->setEmail('contact@test.com');
        $errors = $this->validator->validateProperty($entreprise, 'email');
        $this->assertCount(0, $errors);

        $entreprise->setEmail('invalid-email');
        $errors = $this->validator->validateProperty($entreprise, 'email');
        $this->assertGreaterThan(0, count($errors));
    }

    public function testMatriculeIsValid(): void
    {
        $entreprise = new Entreprise();
        $entreprise->setMatriculeFiscale('1234567/A/B/C/001');
        $errors = $this->validator->validateProperty($entreprise, 'matriculeFiscale');
        $this->assertCount(0, $errors);

        $entreprise->setMatriculeFiscale('INVALID');
        $errors = $this->validator->validateProperty($entreprise, 'matriculeFiscale');
        $this->assertGreaterThan(0, count($errors));
    }
}
