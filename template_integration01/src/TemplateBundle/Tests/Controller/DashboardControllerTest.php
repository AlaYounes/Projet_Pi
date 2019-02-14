<?php

namespace TemplateBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashboardControllerTest extends WebTestCase
{
    public function testD_contract()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Contract');
    }

    public function testD_jobs_posted()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Jobs_Posted');
    }

    public function testD_add_job()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Add_Job');
    }

    public function testD_your_proposals()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Your_Proposals');
    }

    public function testD-others_proposals()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d-Others_Proposals');
    }

    public function testD_offers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Offers');
    }

    public function testD_company_list()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Company_List');
    }

    public function testD_add_company()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Add_Company');
    }

    public function testD_messages_()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Messages_');
    }

    public function testD_deposits()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Deposits');
    }

    public function testD_withdrawls()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Withdrawls');
    }

    public function testD_payment_method()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Payment_Method');
    }

    public function testD_featured_job_list()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Featured_Job_List');
    }

    public function testD_feature_a_job()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Feature_a_Job');
    }

    public function testD_featured_profiles()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Featured_Profiles');
    }

    public function testD_feature_your_profile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Feature_Your_Profile');
    }

    public function testD_featured_companies()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Featured_Companies');
    }

    public function testD_feature_your_company()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Feature_Your_Company');
    }

    public function testD_profile_image()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Profile_Image');
    }

    public function testD_password()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Password');
    }

    public function testD_membership()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/d_Membership');
    }

}
