<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/article')) {
            // article_index
            if ('/article' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_article_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'article_index');
                }

                return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_index',);
            }
            not_article_index:

            // article_show
            if (preg_match('#^/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_article_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::showAction',));
            }
            not_article_show:

            // article_new
            if ('/article/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_article_new;
                }

                return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
            }
            not_article_new:

            // article_edit
            if (preg_match('#^/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_article_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::editAction',));
            }
            not_article_edit:

            // article_delete
            if (preg_match('#^/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_article_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::deleteAction',));
            }
            not_article_delete:

        }

        // backend_homepage
        if ('/admi' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'backend_homepage');
            }

            return array (  '_controller' => 'FixBundle\\Controller\\BackendController::AdminAction',  '_route' => 'backend_homepage',);
        }

        if (0 === strpos($pathinfo, '/categorie')) {
            // categorie_index
            if ('/categorie' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_categorie_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'categorie_index');
                }

                return array (  '_controller' => 'BlogBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie_index',);
            }
            not_categorie_index:

            // categorie_show
            if (preg_match('#^/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_categorie_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'BlogBundle\\Controller\\CategorieController::showAction',));
            }
            not_categorie_show:

            // categorie_new
            if ('/categorie/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_categorie_new;
                }

                return array (  '_controller' => 'BlogBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
            }
            not_categorie_new:

            // categorie_edit
            if (preg_match('#^/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_categorie_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'BlogBundle\\Controller\\CategorieController::editAction',));
            }
            not_categorie_edit:

            // categorie_delete
            if (preg_match('#^/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_categorie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'BlogBundle\\Controller\\CategorieController::deleteAction',));
            }
            not_categorie_delete:

        }

        // blog_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'blog_homepage');
            }

            return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_homepage',);
        }

        // fix_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'fix_homepage');
            }

            return array (  '_controller' => 'FixBundle\\Controller\\DefaultController::indexAction',  '_route' => 'fix_homepage',);
        }

        if (0 === strpos($pathinfo, '/freelancer')) {
            // frontend_homepage
            if ('/freelancer' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'frontend_homepage');
                }

                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::indexAction',  '_route' => 'frontend_homepage',);
            }

            if (0 === strpos($pathinfo, '/freelancer/a')) {
                // template_AddJob
                if ('/freelancer/addjob' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::AddJobAction',  '_route' => 'template_AddJob',);
                }

                // template_AddCompany
                if ('/freelancer/addcompany' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::AddCompanyAction',  '_route' => 'template_AddCompany',);
                }

                // Service_Ajout
                if ('/freelancer/ajout_service' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Ajout_ServiceAction',  '_route' => 'Service_Ajout',);
                }

            }

            elseif (0 === strpos($pathinfo, '/freelancer/dash')) {
                // template_Dashboard
                if ('/freelancer/dashboard_Home' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::DashboardAction',  '_route' => 'template_Dashboard',);
                }

                // template_dashb
                if ('/freelancer/dash' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::DashboardAction',  '_route' => 'template_dashb',);
                }

            }

            // template_Deposits
            if ('/freelancer/deposits' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::DepositsAction',  '_route' => 'template_Deposits',);
            }

            if (0 === strpos($pathinfo, '/freelancer/p')) {
                if (0 === strpos($pathinfo, '/freelancer/profile')) {
                    // template_Profile
                    if ('/freelancer/profile' === $pathinfo) {
                        return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::ProfileAction',  '_route' => 'template_Profile',);
                    }

                    // template_Profile_Image
                    if ('/freelancer/profile_image' === $pathinfo) {
                        return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Profile_ImageAction',  '_route' => 'template_Profile_Image',);
                    }

                }

                // template_Pricing
                if ('/freelancer/pricing' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::PricingAction',  '_route' => 'template_Pricing',);
                }

                if (0 === strpos($pathinfo, '/freelancer/payement')) {
                    // template_Payementmethod
                    if ('/freelancer/payementmethod' === $pathinfo) {
                        return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::PayementMethodAction',  '_route' => 'template_Payementmethod',);
                    }

                    // template_Payement
                    if ('/freelancer/payement' === $pathinfo) {
                        return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::PayementAction',  '_route' => 'template_Payement',);
                    }

                }

                // template_Password
                if ('/freelancer/password' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::PasswordAction',  '_route' => 'template_Password',);
                }

            }

            // template_EditProfile
            if ('/freelancer/editprofile' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::EditProfileAction',  '_route' => 'template_EditProfile',);
            }

            // template_Login
            if ('/freelancer/login' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::LoginAction',  '_route' => 'template_Login',);
            }

            // template_Link
            if ('/freelancer/link' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::LinkAction',  '_route' => 'template_Link',);
            }

            // template_Register
            if ('/freelancer/register' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::RegisterAction',  '_route' => 'template_Register',);
            }

            // template_Rate
            if ('/freelancer/rate' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::RateAction',  '_route' => 'template_Rate',);
            }

            // template_Hire
            if ('/freelancer/hire' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::HireAction',  '_route' => 'template_Hire',);
            }

            // template_How
            if ('/freelancer/how' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::HowAction',  '_route' => 'template_How',);
            }

            if (0 === strpos($pathinfo, '/freelancer/work')) {
                // template_Work
                if ('/freelancer/work' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::WorkAction',  '_route' => 'template_Work',);
                }

                // template_Workroom
                if ('/freelancer/workroom' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::WorkroomAction',  '_route' => 'template_Workroom',);
                }

            }

            // template_Withdrawals
            if ('/freelancer/withdrawals' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::WithdrawalsAction',  '_route' => 'template_Withdrawals',);
            }

            // template_Contract
            if ('/freelancer/contract' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::ContractAction',  '_route' => 'template_Contract',);
            }

            if (0 === strpos($pathinfo, '/freelancer/company')) {
                // template_CompanyList
                if ('/freelancer/companylist' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::CompanyListAction',  '_route' => 'template_CompanyList',);
                }

                // template_Company
                if ('/freelancer/company' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::CompanyAction',  '_route' => 'template_Company',);
                }

            }

            // template_JobPasted
            if ('/freelancer/jobpasted' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::JobPastedAction',  '_route' => 'template_JobPasted',);
            }

            // template_Jobpost
            if ('/freelancer/jobpost' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::JobpostAction',  '_route' => 'template_Jobpost',);
            }

            // template_YourPorposals
            if ('/freelancer/yourporposals' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::YourPorposalsAction',  '_route' => 'template_YourPorposals',);
            }

            if (0 === strpos($pathinfo, '/freelancer/o')) {
                // template_OtherPorposals
                if ('/freelancer/otherporposals' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::OtherPorposalsAction',  '_route' => 'template_OtherPorposals',);
                }

                // template_Offers
                if ('/freelancer/offers' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::OffersAction',  '_route' => 'template_Offers',);
                }

                // Offre_Afficher
                if ('/freelancer/offre_afficher' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Afficher_OffreAction',  '_route' => 'Offre_Afficher',);
                }

            }

            elseif (0 === strpos($pathinfo, '/freelancer/m')) {
                // template_Message
                if ('/freelancer/message' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::MessageAction',  '_route' => 'template_Message',);
                }

                // template_Milestone
                if ('/freelancer/milestone' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::MilestoneAction',  '_route' => 'template_Milestone',);
                }

                // Service_Modifier
                if (0 === strpos($pathinfo, '/freelancer/modifier_Service') && preg_match('#^/freelancer/modifier_Service/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Service_Modifier')), array (  '_controller' => 'FixBundle\\Controller\\FrontendController::modifier_ServiceAction',));
                }

                // Offre_Modifier
                if (0 === strpos($pathinfo, '/freelancer/modifier_offre') && preg_match('#^/freelancer/modifier_offre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Offre_Modifier')), array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Modifier_OffreAction',));
                }

            }

            // template_Numbership
            if ('/freelancer/numbership' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::NumbershipAction',  '_route' => 'template_Numbership',);
            }

            if (0 === strpos($pathinfo, '/freelancer/featured_')) {
                // template_Featured_Job_List
                if ('/freelancer/featured_job_list' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_Job_ListAction',  '_route' => 'template_Featured_Job_List',);
                }

                // template_Featured_A_Job
                if ('/freelancer/featured_a_list' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_A_JobAction',  '_route' => 'template_Featured_A_Job',);
                }

                // template_Featured_Profiles
                if ('/freelancer/featured_profiles' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_ProfilesAction',  '_route' => 'template_Featured_Profiles',);
                }

                // template_Featured_Your_Profile
                if ('/freelancer/featured_your_profile' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_Your_ProfileAction',  '_route' => 'template_Featured_Your_Profile',);
                }

                // template_Featured_Your_Company
                if ('/freelancer/featured_your_company' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_Your_CompanyAction',  '_route' => 'template_Featured_Your_Company',);
                }

                // template_Featured_Companies
                if ('/freelancer/featured_companies' === $pathinfo) {
                    return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_CompaniesAction',  '_route' => 'template_Featured_Companies',);
                }

            }

            // template_File
            if ('/freelancer/file' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::FileAction',  '_route' => 'template_File',);
            }

            // template_Viewoffer
            if ('/freelancer/viewoffer' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::ViewofferAction',  '_route' => 'template_Viewoffer',);
            }

            // template_Viewporposal
            if ('/freelancer/viewporposal' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::ViewporposalAction',  '_route' => 'template_Viewporposal',);
            }

            // template_Task
            if ('/freelancer/task' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::TaskAction',  '_route' => 'template_Task',);
            }

            // template_Timesheet
            if ('/freelancer/timesheet' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::TimesheetAction',  '_route' => 'template_Timesheet',);
            }

            // template_Bug
            if ('/freelancer/bug' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::BugAction',  '_route' => 'template_Bug',);
            }

            // Offre_Ajout
            if ('/freelancer/Ajout_Offre' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Ajout_OffreAction',  '_route' => 'Offre_Ajout',);
            }

            // Offre_Supprimer
            if (0 === strpos($pathinfo, '/freelancer/Suprimer_Offre') && preg_match('#^/freelancer/Suprimer_Offre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Offre_Supprimer')), array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Suprimer_OffreAction',));
            }

            // Service_Supprimer
            if (0 === strpos($pathinfo, '/freelancer/Suprimer_Service') && preg_match('#^/freelancer/Suprimer_Service/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Service_Supprimer')), array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Suprimer_ServiceAction',));
            }

            // Service_Afficher
            if ('/freelancer/service_afficher' === $pathinfo) {
                return array (  '_controller' => 'FixBundle\\Controller\\FrontendController::Afficher_ServiceAction',  '_route' => 'Service_Afficher',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
