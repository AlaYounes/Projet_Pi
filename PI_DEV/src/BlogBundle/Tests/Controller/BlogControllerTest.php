<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testAfficherblog()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/afficherBlog');
    }

    public function testBlogcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/blogCategorie');
    }

}
