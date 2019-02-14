<?php

namespace TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkroomController extends Controller
{
    public function workroomAction()
    {
        return $this->render('@Template/Workroom/workroom.html.twig', array(
            // ...
        ));
    }

    public function milestoneAction()
    {
        return $this->render('@Template/Workroom/milestone.html.twig', array(
            // ...
        ));
    }

    public function taskAction()
    {
        return $this->render('@Template/Workroom/task.html.twig', array(
            // ...
        ));
    }

    public function timesheatAction()
    {
        return $this->render('@Template/Workroom/timesheat.html.twig', array(
            // ...
        ));
    }

    public function fileAction()
    {
        return $this->render('@Template/Workroom/file.html.twig', array(
            // ...
        ));
    }

    public function linkAction()
    {
        return $this->render('@Template/Workroom/link.html.twig', array(
            // ...
        ));
    }

    public function bugAction()
    {
        return $this->render('@Template/Workroom/bug.html.twig', array(
            // ...
        ));
    }

    public function paymentAction()
    {
        return $this->render('@Template/Workroom/payment.html.twig', array(
            // ...
        ));
    }

    public function rateAction()
    {
        return $this->render('@Template/Workroom/rate.html.twig', array(
            // ...
        ));
    }

    public function job_PostAction()
    {
        return $this->render('@Template/Workroom/job.post.html.twig', array(
            // ...
        ));
    }

    public function send_MessageAction()
    {
        return $this->render('@Template/Workroom/send.message.html.twig', array(
            // ...
        ));
    }

    public function rate_FreelancerAction()
    {
        return $this->render('@Template/Workroom/rate.freelancer.html.twig', array(
            // ...
        ));
    }

    public function view_ProposalsAction()
    {
        return $this->render('@Template/Workroom/view_Proposal.html.twig', array(
            // ...
        ));
    }

}
