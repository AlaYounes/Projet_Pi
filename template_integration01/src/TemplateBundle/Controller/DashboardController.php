<?php

namespace TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function d_ContractAction()
    {
        return $this->render('@Template/Dashboard/d.contract.html.twig', array(
            // ...
        ));
    }

    public function d_Jobs_PostedAction()
    {
        return $this->render('@Template/Dashboard/d.jobs.posted.html.twig', array(
            // ...
        ));
    }

    public function d_Add_JobAction()
    {
        return $this->render('d.achanger.html.twig', array(
            // ...
        ));
    }

    public function d_Your_ProposalsAction()
    {
        return $this->render('@Template/Dashboard/d.your.proposals.html.twig', array(
            // ...
        ));
    }

    public function d_Others_ProposalsAction()
    {
        return $this->render('@Template/Dashboard/d-others.proposals.html.twig', array(
            // ...
        ));
    }

    public function d_OffersAction()
    {
        return $this->render('@Template/Dashboard/d.offers.html.twig', array(
            // ...
        ));
    }

    public function d_Company_ListAction()
    {
        return $this->render('@Template/Dashboard/d.company.list.html.twig', array(
            // ...
        ));
    }

    public function d_Add_CompanyAction()
    {
        return $this->render('@Template/Dashboard/d.add.company.html.twig', array(
            // ...
        ));
    }

    public function d_MessagesAction()
    {
        return $this->render('@Template/Dashboard/d.messages.html.twig', array(
            // ...
        ));
    }

    public function d_DepositsAction()
    {
        return $this->render('@Template/Dashboard/d.deposits.html.twig', array(
            // ...
        ));
    }

    public function d_WithdrawlsAction()
    {
        return $this->render('@Template/Dashboard/d.withdrawls.html.twig', array(
            // ...
        ));
    }

    public function d_Payment_MethodAction()
    {
        return $this->render('@Template/Dashboard/d.payment.method.html.twig', array(
            // ...
        ));
    }

    public function d_Featured_Job_ListAction()
    {
        return $this->render('@Template/Dashboard/d.featured.job.list.html.twig', array(
            // ...
        ));
    }

    public function d_Feature_a_JobAction()
    {
        return $this->render('@Template/Dashboard/d.feature.a.job.html.twig', array(
            // ...
        ));
    }

    public function d_Featured_ProfilesAction()
    {
        return $this->render('@Template/Dashboard/d.featured.profiles.html.twig', array(
            // ...
        ));
    }

    public function d_Feature_Your_ProfileAction()
    {
        return $this->render('@Template/Dashboard/d.feature.your.profile.html.twig', array(
            // ...
        ));
    }

    public function d_Featured_CompaniesAction()
    {
        return $this->render('@Template/Dashboard/d.featured.companies.html.twig', array(
            // ...
        ));
    }

    public function d_Feature_Your_CompanyAction()
    {
        return $this->render('@Template/Dashboard/d.feature.your.company.html.twig', array(
            // ...
        ));
    }

    public function d_Profile_ImageAction()
    {
        return $this->render('@Template/Dashboard/d.profile.image.html.twig', array(
            // ...
        ));
    }

    public function d_PasswordAction()
    {
        return $this->render('@Template/Dashboard/d.password.html.twig', array(
            // ...
        ));
    }

    public function d_MembershipAction()
    {
        return $this->render('@Template/Dashboard/d.membership.html.twig', array(
            // ...
        ));
    }

}
