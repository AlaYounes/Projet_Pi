<?php

namespace PiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function d_ContractAction()
    {
        return $this->render('@Pi/Dashboard/d.contract.html.twig', array(
            // ...
        ));
    }

    public function d_Jobs_PostedAction()
    {
        return $this->render('@Pi/Dashboard/d.jobs.posted.html.twig', array(
            // ...
        ));
    }

//    public function d_Add_JobAction()
//    {
//        return $this->render('d.achanger.html.twig', array(
//            // ...
//        ));
//    }

    public function d_Your_ProposalsAction()
    {
        return $this->render('@Pi/Dashboard/d.your.proposals.html.twig', array(
            // ...
        ));
    }

    public function d_Others_ProposalsAction()
    {
        return $this->render('@Pi/Dashboard/d-others.proposals.html.twig', array(
            // ...
        ));
    }

    public function d_OffersAction()
    {
        return $this->render('@Pi/Dashboard/d.offers.html.twig', array(
            // ...
        ));
    }

    public function d_Company_ListAction()
    {
        return $this->render('@Pi/Dashboard/d.company.list.html.twig', array(
            // ...
        ));
    }

    public function d_Add_CompanyAction()
    {
        return $this->render('@Pi/Dashboard/d.add.company.html.twig', array(
            // ...
        ));
    }

    public function d_MessagesAction()
    {
        return $this->render('@Pi/Dashboard/d.messages.html.twig', array(
            // ...
        ));
    }

    public function d_DepositsAction()
    {
        return $this->render('@Pi/Dashboard/d.deposits.html.twig', array(
            // ...
        ));
    }

    public function d_WithdrawlsAction()
    {
        return $this->render('@Pi/Dashboard/d.withdrawls.html.twig', array(
            // ...
        ));
    }

    public function d_Payment_MethodAction()
    {
        return $this->render('@Pi/Dashboard/d.payment.method.html.twig', array(
            // ...
        ));
    }

    public function d_Featured_Job_ListAction()
    {
        return $this->render('@Pi/Dashboard/d.featured.job.list.html.twig', array(
            // ...
        ));
    }

    public function d_Feature_a_JobAction()
    {
        return $this->render('@Pi/Dashboard/d.feature.a.job.html.twig', array(
            // ...
        ));
    }

    public function d_Featured_ProfilesAction()
    {
        return $this->render('@Pi/Dashboard/d.featured.profiles.html.twig', array(
            // ...
        ));
    }

    public function d_Feature_Your_ProfileAction()
    {
        return $this->render('@Pi/Dashboard/d.feature.your.profile.html.twig', array(
            // ...
        ));
    }

    public function d_Featured_CompaniesAction()
    {
        return $this->render('@Pi/Dashboard/d.featured.companies.html.twig', array(
            // ...
        ));
    }

    public function d_Feature_Your_CompanyAction()
    {
        return $this->render('@Pi/Dashboard/d.feature.your.company.html.twig', array(
            // ...
        ));
    }

    public function d_Profile_ImageAction()
    {
        return $this->render('@Pi/Dashboard/d.profile.image.html.twig', array(
            // ...
        ));
    }

    public function d_PasswordAction()
    {
        return $this->render('@Pi/Dashboard/d.password.html.twig', array(
            // ...
        ));
    }

    public function d_MembershipAction()
    {
        return $this->render('@Pi/Dashboard/d.membership.html.twig', array(
            // ...
        ));
    }

}
