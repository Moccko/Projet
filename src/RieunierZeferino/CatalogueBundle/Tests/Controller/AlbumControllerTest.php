<?php

namespace RieunierZeferino\CatalogueBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AlbumControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Album/');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Album/{id}');
    }

    public function testAddtocart()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addToCart');
    }

}
