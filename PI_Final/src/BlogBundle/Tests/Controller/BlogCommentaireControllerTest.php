<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogCommentaireControllerTest extends WebTestCase
{
    public function testListcommentaires()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListCommentaires');
    }

    public function testViewcommentaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ViewCommentaire');
    }

    public function testCreatecommentaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CreateCommentaire');
    }

}
