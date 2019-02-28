<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentaireControllerTest extends WebTestCase
{
    public function testList_commentaires()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list_Commentaires');
    }

    public function testShow_commentaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/show_Commentaire');
    }

    public function testAdd_commentaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Add_Commentaire');
    }

}
