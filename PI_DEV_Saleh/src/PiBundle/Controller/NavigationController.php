<?php

namespace PiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavigationController extends Controller
{
    public function homeAction()
    {
        return $this->render('@Pi/Navigation/home.html.twig', array(
            // ...
        ));
    }

    public function hireAction()
    {
        return $this->render('@Pi/Navigation/hire.html.twig', array(
            // ...
        ));
    }

    public function workAction()
    {
        return $this->render('@Pi/Navigation/work.html.twig', array(
            // ...
        ));
    }

    public function pricingAction()
    {
        return $this->render('@Pi/Navigation/pricing.html.twig', array(
            // ...
        ));
    }

    public function howAction()
    {
        return $this->render('@Pi/Navigation/how.html.twig', array(
            // ...
        ));
    }

    public function loginAction()
    {
        return $this->render('@Pi/Navigation/login.html.twig', array(
            // ...
        ));
    }

    public function dashboardAction()
    {
        return $this->render('@Pi/Navigation/dashboard.html.twig', array(
            // ...
        ));
    }

    public function profileAction()
    {
        return $this->render('@Pi/Navigation/profile.html.twig', array(
            // ...
        ));
    }

    public function edit_ProfileAction()
    {
        return $this->render('@Pi/Navigation/edit.profile.html.twig', array(
            // ...
        ));
    }

    public function add_JobAction()
    {
        return $this->render('@Pi/Navigation/add.job.html.twig', array(
            // ...
        ));
    }

}
