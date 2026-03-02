<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AccessTest extends WebTestCase
{
    public function testAdminRedirectsToLogin(): void
    {
        $client = static::createClient();
        $client->request('GET', '/admin/entreprise');

        $this->assertResponseRedirects('/login');
    }

    public function testLoginPageLoads(): void
    {
        $client = static::createClient();
        $client->request('GET', '/login');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('form');
    }
}
