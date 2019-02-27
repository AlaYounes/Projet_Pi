<?php

namespace PiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkroomController extends Controller
{
    public function workroomAction()
    {
        return $this->render('@Pi/Workroom/workroom.html.twig', array(
            // ...
        ));
    }

    public function milestoneAction()
    {
        return $this->render('@Pi/Workroom/milestone.html.twig', array(
            // ...
        ));
    }

    public function taskAction()
    {
        return $this->render('@Pi/Workroom/task.html.twig', array(
            // ...
        ));
    }

    public function timesheatAction()
    {
        return $this->render('@Pi/Workroom/timesheat.html.twig', array(
            // ...
        ));
    }

    public function fileAction()
    {
        return $this->render('@Pi/Workroom/file.html.twig', array(
            // ...
        ));
    }

    public function linkAction()
    {
        return $this->render('@Pi/Workroom/link.html.twig', array(
            // ...
        ));
    }

    public function bugAction()
    {
        return $this->render('@Pi/Workroom/bug.html.twig', array(
            // ...
        ));
    }

    public function paymentAction()
    {
        return $this->render('@Pi/Workroom/payment.html.twig', array(
            // ...
        ));
    }

    public function rateAction()
    {
        return $this->render('@Pi/Workroom/rate.html.twig', array(
            // ...
        ));
    }

    public function job_PostAction()
    {
        return $this->render('@Pi/Workroom/job.post.html.twig', array(
            // ...
        ));
    }

    public function send_MessageAction()
    {
        return $this->render('@Pi/Workroom/send.message.html.twig', array(
            // ...
        ));
    }

    public function rate_FreelancerAction()
    {
        return $this->render('@Pi/Workroom/rate.freelancer.html.twig', array(
            // ...
        ));
    }

    public function view_ProposalsAction()
    {
        return $this->render('@Pi/Workroom/view_Proposal.html.twig', array(
            // ...
        ));
    }

}
