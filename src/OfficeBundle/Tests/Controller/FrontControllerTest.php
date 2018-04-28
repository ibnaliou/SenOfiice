<?php

namespace OfficeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerTest extends WebTestCase
{
    public function testAcceuil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/acceuil');
    }

}
