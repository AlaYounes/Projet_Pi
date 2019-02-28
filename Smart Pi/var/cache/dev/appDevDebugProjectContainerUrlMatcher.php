<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/Blog')) {
            if (0 === strpos($pathinfo, '/Blog/article')) {
                // article_index
                if ('/Blog/article' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'article_index');
                    }

                    return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_index',);
                }

                // article_show
                if (preg_match('#^/Blog/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_article_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::showAction',));
                }
                not_article_show:

                // article_new
                if ('/Blog/article/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_article_new;
                    }

                    return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
                }
                not_article_new:

                // article_edit
                if (preg_match('#^/Blog/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_article_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::editAction',));
                }
                not_article_edit:

                // article_delete
                if (preg_match('#^/Blog/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_article_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::deleteAction',));
                }
                not_article_delete:

                // article_Order
                if ('/Blog/article/orderBy' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::OrderAction',  '_route' => 'article_Order',);
                }

                // article_search_Categorie
                if (0 === strpos($pathinfo, '/Blog/article/articleByCategorie') && preg_match('#^/Blog/article/articleByCategorie/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'article_search_Categorie');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_search_Categorie')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::findByCategorieAction',));
                }

                // article_rechercher_Auteur
                if (0 === strpos($pathinfo, '/Blog/article/rechercher') && preg_match('#^/Blog/article/rechercher/(?P<auteur>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_rechercher_Auteur')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::findAuteurAction',));
                }

                // article_searchtest
                if ('/Blog/article/searchtest' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::SearchArticleAction',  '_route' => 'article_searchtest',);
                }

                // RechercheDQL
                if ('/Blog/article/RechercheDQL' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::rechercheIdDQLAction',  '_route' => 'RechercheDQL',);
                }

                // RechercheAjax
                if ('/Blog/article/RechercheAjax' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::searchAction',  '_route' => 'RechercheAjax',);
                }

            }

            elseif (0 === strpos($pathinfo, '/Blog/categorie')) {
                // categorie_index
                if ('/Blog/categorie' === $trimmedPathinfo) {
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
                if (preg_match('#^/Blog/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_categorie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'BlogBundle\\Controller\\CategorieController::showAction',));
                }
                not_categorie_show:

                // categorie_new
                if ('/Blog/categorie/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_categorie_new;
                    }

                    return array (  '_controller' => 'BlogBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                }
                not_categorie_new:

                // categorie_edit
                if (preg_match('#^/Blog/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_categorie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'BlogBundle\\Controller\\CategorieController::editAction',));
                }
                not_categorie_edit:

                // categorie_delete
                if (preg_match('#^/Blog/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_categorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'BlogBundle\\Controller\\CategorieController::deleteAction',));
                }
                not_categorie_delete:

            }

            elseif (0 === strpos($pathinfo, '/Blog/blog')) {
                if (0 === strpos($pathinfo, '/Blog/blog/a')) {
                    // afficher_blog
                    if ('/Blog/blog/afficherBlog' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\BlogController::afficherBlogAction',  '_route' => 'afficher_blog',);
                    }

                    // blog_afficherPar_Auteur
                    if (0 === strpos($pathinfo, '/Blog/blog/afficherPar') && preg_match('#^/Blog/blog/afficherPar/(?P<auteur>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_afficherPar_Auteur')), array (  '_controller' => 'BlogBundle\\Controller\\BlogController::afficherBlogParAuteurAction',));
                    }

                    // blog_categories_homePage
                    if (0 === strpos($pathinfo, '/Blog/blog/articleAfficheByCategorie') && preg_match('#^/Blog/blog/articleAfficheByCategorie/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'blog_categories_homePage');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_categories_homePage')), array (  '_controller' => 'BlogBundle\\Controller\\BlogController::blogCategorieAction',));
                    }

                }

                // blog_OrderBy_homePage
                if ('/Blog/blog/OrderByDate' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\BlogController::OrderAction',  '_route' => 'blog_OrderBy_homePage',);
                }

                // blog_Show_homePage
                if (0 === strpos($pathinfo, '/Blog/blog/BlogShow') && preg_match('#^/Blog/blog/BlogShow/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_Show_homePage')), array (  '_controller' => 'BlogBundle\\Controller\\BlogController::afficherContenuAction',));
                }

            }

            // blog_homepage
            if (preg_match('#^/Blog/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_homepage')), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',));
            }

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

        // backend_homepage
        if ('/admi' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'backend_homepage');
            }

            return array (  '_controller' => 'FixBundle\\Controller\\BackendController::AdminAction',  '_route' => 'backend_homepage',);
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

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_js_routing_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }
        not_fos_js_routing_js:

        // sg_datatables_edit
        if ('/sg/datatables/edit/field' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_sg_datatables_edit;
            }

            return array (  '_controller' => 'Sg\\DatatablesBundle\\Controller\\DatatableController::editAction',  '_route' => 'sg_datatables_edit',);
        }
        not_sg_datatables_edit:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
