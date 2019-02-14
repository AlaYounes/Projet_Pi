<?php

namespace TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavigationController extends Controller
{
    public function homeAction()
    {
        return $this->render('@Template/Navigation/home.html.twig', array(
            // ...
        ));
    }

    public function hireAction()
    {
        return $this->render('@Template/Navigation/hire.html.twig', array(
            // ...
        ));
    }

    public function workAction()
    {
        return $this->render('@Template/Navigation/work.html.twig', array(
            // ...
        ));
    }

    public function pricingAction()
    {
        return $this->render('@Template/Navigation/pricing.html.twig', array(
            // ...
        ));
    }

    public function howAction()
    {
        return $this->render('@Template/Navigation/how.html.twig', array(
            // ...
        ));
    }

    public function loginAction()
    {
        return $this->render('@Template/Navigation/login.html.twig', array(
            // ...
        ));
    }

    public function dashboardAction()
    {
        return $this->render('@Template/Navigation/dashboard.html.twig', array(
            // ...
        ));
    }

    public function profileAction()
    {
        return $this->render('@Template/Navigation/profile.html.twig', array(
            // ...
        ));
    }

    public function edit_ProfileAction()
    {
        return $this->render('@Template/Navigation/edit.profile.html.twig', array(
            // ...
        ));
    }

    public function add_JobAction()
    {
        return $this->render('@Template/Navigation/add.job.html.twig', array(
            // ...
        ));
    }

}
