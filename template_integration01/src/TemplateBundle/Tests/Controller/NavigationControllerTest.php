<?php

namespace TemplateBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NavigationControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home');
    }

    public function testHire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hire');
    }

    public function testWork()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/work');
    }

    public function testPricing()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pricing');
    }

    public function testHow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/how');
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

    public function testDashboard()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/dashboard');
    }

    public function testProfile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/profile');
    }

    public function testEdit_profile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/edit_Profile');
    }

    public function testAdd_job()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/add_Job');
    }

}
