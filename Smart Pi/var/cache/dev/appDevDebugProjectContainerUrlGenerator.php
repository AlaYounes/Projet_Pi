<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/article/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Blog/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/article/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Blog/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Blog/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_Order' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::OrderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/article/orderBy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_search_Categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::findByCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Blog/article/articleByCategorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_rechercher_Auteur' => array (  0 =>   array (    0 => 'auteur',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::findAuteurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'auteur',    ),    1 =>     array (      0 => 'text',      1 => '/Blog/article/rechercher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_searchtest' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::SearchArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/article/searchtest',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RechercheDQL' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::rechercheIdDQLAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/article/RechercheDQL',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RechercheAjax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\ArticleController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/article/RechercheAjax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CategorieController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/categorie/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CategorieController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Blog/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CategorieController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/categorie/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CategorieController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Blog/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CategorieController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Blog/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficher_blog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogController::afficherBlogAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/blog/afficherBlog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_categories_homePage' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogController::blogCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Blog/blog/articleAfficheByCategorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_OrderBy_homePage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogController::OrderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Blog/blog/OrderByDate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_Show_homePage' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogController::afficherContenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Blog/blog/BlogShow',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_afficherPar_Auteur' => array (  0 =>   array (    0 => 'auteur',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogController::afficherBlogParAuteurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'auteur',    ),    1 =>     array (      0 => 'text',      1 => '/Blog/blog/afficherPar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_homepage' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fix_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frontend_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_AddJob' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::AddJobAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/addjob',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::DashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/dashboard_Home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::ProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_EditProfile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::EditProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/editprofile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::LoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::RegisterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Hire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::HireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/hire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Work' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::WorkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/work',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Pricing' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::PricingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/pricing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_How' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::HowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/how',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_dashb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::DashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/dash',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Contract' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::ContractAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/contract',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_JobPasted' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::JobPastedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/jobpasted',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_YourPorposals' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::YourPorposalsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/yourporposals',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_OtherPorposals' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::OtherPorposalsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/otherporposals',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Offers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::OffersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/offers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_CompanyList' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::CompanyListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/companylist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_AddCompany' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::AddCompanyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/addcompany',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Message' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::MessageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/message',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Deposits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::DepositsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/deposits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Withdrawals' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::WithdrawalsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/withdrawals',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Payementmethod' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::PayementMethodAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/payementmethod',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Numbership' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::NumbershipAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/numbership',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Featured_Job_List' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_Job_ListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/featured_job_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Featured_A_Job' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_A_JobAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/featured_a_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Featured_Profiles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_ProfilesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/featured_profiles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Featured_Your_Profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_Your_ProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/featured_your_profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Featured_Companies' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_CompaniesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/featured_companies',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Featured_Your_Company' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Featured_Your_CompanyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/featured_your_company',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Profile_Image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Profile_ImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/profile_image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::PasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Company' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::CompanyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/company',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Workroom' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::WorkroomAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/workroom',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Jobpost' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::JobpostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/jobpost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Viewoffer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::ViewofferAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/viewoffer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Viewporposal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::ViewporposalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/viewporposal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Milestone' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::MilestoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/milestone',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Task' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::TaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Timesheet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::TimesheetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/timesheet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_File' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::FileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/file',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Link' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::LinkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/link',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Bug' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::BugAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/bug',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Payement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::PayementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/payement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'template_Rate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::RateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/rate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Service_Ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Ajout_ServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/ajout_service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Offre_Ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Ajout_OffreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/Ajout_Offre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Offre_Supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Suprimer_OffreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/freelancer/Suprimer_Offre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Service_Supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Suprimer_ServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/freelancer/Suprimer_Service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Service_Modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::modifier_ServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/freelancer/modifier_Service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Offre_Modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Modifier_OffreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/freelancer/modifier_offre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Offre_Afficher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Afficher_OffreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/offre_afficher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Service_Afficher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\FrontendController::Afficher_ServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/freelancer/service_afficher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'backend_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FixBundle\\Controller\\BackendController::AdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admi/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sg_datatables_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sg\\DatatablesBundle\\Controller\\DatatableController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sg/datatables/edit/field',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}