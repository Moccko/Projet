<?php

namespace RieunierZeferino\CatalogueBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CompositionControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Composition/');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Composition/{id}');
    }

}
