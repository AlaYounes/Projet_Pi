<?php

namespace TemplateBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WorkroomControllerTest extends WebTestCase
{
    public function testWorkroom()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/workroom');
    }

    public function testMilestone()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/milestone');
    }

    public function testTask()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/task');
    }

    public function testTimesheat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/timesheat');
    }

    public function testFile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/file');
    }

    public function testLink()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/link');
    }

    public function testBug()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bug');
    }

    public function testPayment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/payment');
    }

    public function testRate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rate');
    }

    public function testJob_post()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/job_Post');
    }

    public function testSend_message()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/send_Message');
    }

    public function testRate_freelancer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rate_Freelancer');
    }

}
