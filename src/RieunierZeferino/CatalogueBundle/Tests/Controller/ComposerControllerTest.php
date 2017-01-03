<?php

namespace RieunierZeferino\CatalogueBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ComposerControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Compositeur/');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Compositeur/{id}');
    }

}
