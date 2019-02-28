<?php

/* ::dashboard_home.html.twig */
class __TwigTemplate_1b31ef6c707329996e933a73e811ff0cec558203ab535457510cd80421a9f6ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheats' => array($this, 'block_stylesheats'),
            'Navigation' => array($this, 'block_Navigation'),
            'dashboard' => array($this, 'block_dashboard'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcab9195f5796676028dbc6f6b5278914f76d9771c990295481abd5608a99c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcab9195f5796676028dbc6f6b5278914f76d9771c990295481abd5608a99c7d->enter($__internal_dcab9195f5796676028dbc6f6b5278914f76d9771c990295481abd5608a99c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::dashboard_home.html.twig"));

        $__internal_fb4cb1c3085d6bc75ea7b0099854547df2c704d73db920db4556de76c0ae0734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4cb1c3085d6bc75ea7b0099854547df2c704d73db920db4556de76c0ae0734->enter($__internal_fb4cb1c3085d6bc75ea7b0099854547df2c704d73db920db4556de76c0ae0734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::dashboard_home.html.twig"));

        // line 1
        $this->displayBlock('stylesheats', $context, $blocks);
        // line 99
        $this->displayBlock('dashboard', $context, $blocks);
        
        $__internal_dcab9195f5796676028dbc6f6b5278914f76d9771c990295481abd5608a99c7d->leave($__internal_dcab9195f5796676028dbc6f6b5278914f76d9771c990295481abd5608a99c7d_prof);

        
        $__internal_fb4cb1c3085d6bc75ea7b0099854547df2c704d73db920db4556de76c0ae0734->leave($__internal_fb4cb1c3085d6bc75ea7b0099854547df2c704d73db920db4556de76c0ae0734_prof);

    }

    // line 1
    public function block_stylesheats($context, array $blocks = array())
    {
        $__internal_47344e72ee73b1b2e8730b7bce1e6471205d543fc02ca188b086a75c3182683f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47344e72ee73b1b2e8730b7bce1e6471205d543fc02ca188b086a75c3182683f->enter($__internal_47344e72ee73b1b2e8730b7bce1e6471205d543fc02ca188b086a75c3182683f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheats"));

        $__internal_ed9d72aa87ee1a83b7208415b5cd0a865c838a1960faf3f8334ba57c05e5bcdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9d72aa87ee1a83b7208415b5cd0a865c838a1960faf3f8334ba57c05e5bcdf->enter($__internal_ed9d72aa87ee1a83b7208415b5cd0a865c838a1960faf3f8334ba57c05e5bcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheats"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from themashabrand.com/templates/Kafe/Kafe-v4/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 09:06:50 GMT -->
<head>

    <!-- ==============================================
    Title and Meta Tags
    =============================================== -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>The Kafe - Ultimate Freelance Marketplace Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Add your business website description here\">
    <meta name=\"keywords\" content=\"Add your, business, website, keywords, here\">
    <meta name=\"author\" content=\"Add your business, website, author here\">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel=\"icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-72x72.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-114x114.html"), "html", null, true);
        echo "\">

    <!-- ==============================================
    CSS
    =============================================== -->
    <!-- Style-->
    <link type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

    <!-- ==============================================
    Feauture Detection
    =============================================== -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-custom.html"), "html", null, true);
        echo "\"></script>
    ";
        // line 39
        $this->displayBlock('Navigation', $context, $blocks);
        // line 97
        echo "</head>
";
        
        $__internal_ed9d72aa87ee1a83b7208415b5cd0a865c838a1960faf3f8334ba57c05e5bcdf->leave($__internal_ed9d72aa87ee1a83b7208415b5cd0a865c838a1960faf3f8334ba57c05e5bcdf_prof);

        
        $__internal_47344e72ee73b1b2e8730b7bce1e6471205d543fc02ca188b086a75c3182683f->leave($__internal_47344e72ee73b1b2e8730b7bce1e6471205d543fc02ca188b086a75c3182683f_prof);

    }

    // line 39
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_fa5fc170498aaf955df36e09953437baafd86a3d2f10f72bb3311787e4956678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5fc170498aaf955df36e09953437baafd86a3d2f10f72bb3311787e4956678->enter($__internal_fa5fc170498aaf955df36e09953437baafd86a3d2f10f72bb3311787e4956678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_d174aaabbe9f54f1da1d6a9ec454b8bc716352c39823e084f997bf2db85d2996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d174aaabbe9f54f1da1d6a9ec454b8bc716352c39823e084f997bf2db85d2996->enter($__internal_d174aaabbe9f54f1da1d6a9ec454b8bc716352c39823e084f997bf2db85d2996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        // line 40
        echo "        <header class=\"tr-header\">
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button class=\"navbar-toggle collapsed\" type=\"button\" data-toggle=\"collapse\"
                                data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Home");
        echo "\"><img alt=\"Image\"
                                                                                         src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\">The
                            Kafe</a>
                    </div><!-- /.navbar-header -->
                    <div class=\"navbar-left\">
                        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">GoHire</a></li>
                                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Work");
        echo "\">GoWork</a></li>
                                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Pricing");
        echo "\">Pricing</a></li>
                                <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_How");
        echo "\">How it works</a></li>
                            </ul>
                        </div>
                    </div><!-- /.navbar-left -->
                    <div class=\"navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><i class=\"fa fa-user\"></i></li>
                            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Login");
        echo "\">Sign In/ Register </a></li>

                            <li class=\"dropdown mega-avatar\">
                                <a class=\"dropdown-toggle\" aria-expanded=\"true\" href=\"#\" data-toggle=\"dropdown\">
                                    <span class=\"avatar w-32\"><img width=\"25\" height=\"25\"
                                                                   class=\"img-resonsive img-circle\" alt=\"...\"
                                                                   src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\"></span>
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span>
\t\t\tAlex Grantte
\t\t   </span>
                                </a>
                                <div class=\"dropdown-menu w dropdown-menu-scale pull-right\">
                                    <a class=\"dropdown-item\"
                                       href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\"><span>Dashboard</span></a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><span>Profile</span></a>
                                    <a class=\"dropdown-item\"
                                       href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\"><span>Settings</span></a>
                                    <a class=\"dropdown-item\" href=\"#\">Sign out</a>
                                </div>
                            </li><!-- /navbar-item -->

                        </ul><!-- /.sign-in -->
                        <a class=\"kafe-btn kafe-btn-mint-small\" href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddJob");
        echo "\">Post a Job</a>
                    </div><!-- /.nav-right -->
                </div><!-- /.container -->
            </nav><!-- /.navbar -->
        </header>
    ";
        
        $__internal_d174aaabbe9f54f1da1d6a9ec454b8bc716352c39823e084f997bf2db85d2996->leave($__internal_d174aaabbe9f54f1da1d6a9ec454b8bc716352c39823e084f997bf2db85d2996_prof);

        
        $__internal_fa5fc170498aaf955df36e09953437baafd86a3d2f10f72bb3311787e4956678->leave($__internal_fa5fc170498aaf955df36e09953437baafd86a3d2f10f72bb3311787e4956678_prof);

    }

    // line 99
    public function block_dashboard($context, array $blocks = array())
    {
        $__internal_0fb280a1fdd09d0b2ab6c0eb194e62361545186a2aa8e892bde2810b1e084481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb280a1fdd09d0b2ab6c0eb194e62361545186a2aa8e892bde2810b1e084481->enter($__internal_0fb280a1fdd09d0b2ab6c0eb194e62361545186a2aa8e892bde2810b1e084481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dashboard"));

        $__internal_5bc914820b9a1fd676110d5bcfbabaefef14914f13c42b4a1c8d38c94dc36d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc914820b9a1fd676110d5bcfbabaefef14914f13c42b4a1c8d38c94dc36d23->enter($__internal_5bc914820b9a1fd676110d5bcfbabaefef14914f13c42b4a1c8d38c94dc36d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dashboard"));

        // line 100
        echo "<!-- ==============================================
  Dashboard Section
  =============================================== -->
<section class=\"dashboard section-padding\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-4 col-md-3\">

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"active\">
                        <a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_dashb");
        echo "\">
                            <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Contract");
        echo "\">
                            <i class=\"fa fa-align-left\"></i> <span>Contracts</span>
                        </a>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i> <span>Jobs</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                            <li><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddJob");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Job</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-clone\"></i> <span>Proposals</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_YourPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Your
                                    Proposals</a></li>
                            <li><a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_OtherPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Offers");
        echo "\">
                            <i class=\"fa fa-file\"></i> <span>Offers</span>
                        </a>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-copyright\"></i> <span>Companies</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                            <li><a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddCompany");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Company</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Message");
        echo "\">
                            <i class=\"fa fa-envelope\"></i> <span>Messages</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <small class=\"label pull-right bg-green\">4</small>
\t\t\t\t</span>
                        </a>
                    </li>
                </ul>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-exchange\"></i> <span>Wallet</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Deposits");
        echo "\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                            <li><a href=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Withdrawals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payementmethod");
        echo "\">
                            <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Numbership");
        echo "\">
                            <i class=\"fa fa-credit-card\"></i> <span>Membership</span>
                        </a>
                    </li>
                </ul>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-external-link-square\"></i> <span>Feature a Job</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Job_List");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Featured
                                    List</a></li>
                            <li><a href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_A_Job");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature a Job</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-external-link-square\"></i> <span>Feature a Profile</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Profiles");
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile
                                    Featured List</a></li>
                            <li><a href=\"";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Profile");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature
                                    your Profile </a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-external-link-square\"></i> <span>Feature a Company</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Companies");
        echo "\"><i class=\"fa fa-circle-o\"></i> Companies
                                    Featured List</a></li>
                            <li><a href=\"";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature
                                    your Companies </a></li>
                        </ul>
                    </li>
                </ul>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li>
                        <a href=\"";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\">
                            <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile_Image");
        echo "\">
                            <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Password");
        echo "\">
                            <i class=\"fa fa-lock\"></i> <span>Change Password</span>
                        </a>
                    </li>
                </ul>

            </div>

            ";
        
        $__internal_5bc914820b9a1fd676110d5bcfbabaefef14914f13c42b4a1c8d38c94dc36d23->leave($__internal_5bc914820b9a1fd676110d5bcfbabaefef14914f13c42b4a1c8d38c94dc36d23_prof);

        
        $__internal_0fb280a1fdd09d0b2ab6c0eb194e62361545186a2aa8e892bde2810b1e084481->leave($__internal_0fb280a1fdd09d0b2ab6c0eb194e62361545186a2aa8e892bde2810b1e084481_prof);

    }

    public function getTemplateName()
    {
        return "::dashboard_home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  466 => 256,  458 => 251,  450 => 246,  439 => 238,  434 => 236,  419 => 224,  414 => 222,  399 => 210,  394 => 208,  376 => 193,  368 => 188,  361 => 184,  357 => 183,  336 => 165,  328 => 160,  324 => 159,  309 => 147,  301 => 142,  296 => 140,  282 => 129,  278 => 128,  263 => 116,  255 => 111,  242 => 100,  233 => 99,  217 => 91,  208 => 85,  203 => 83,  199 => 82,  188 => 74,  179 => 68,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  148 => 52,  144 => 51,  131 => 40,  122 => 39,  111 => 97,  109 => 39,  105 => 38,  97 => 33,  93 => 32,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  49 => 2,  40 => 1,  30 => 99,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheats %}
<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from themashabrand.com/templates/Kafe/Kafe-v4/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 09:06:50 GMT -->
<head>

    <!-- ==============================================
    Title and Meta Tags
    =============================================== -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>The Kafe - Ultimate Freelance Marketplace Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Add your business website description here\">
    <meta name=\"keywords\" content=\"Add your, business, website, keywords, here\">
    <meta name=\"author\" content=\"Add your business, website, author here\">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel=\"icon\" href=\"{{ asset('img/logo.jpg') }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('img/favicons/apple-touch-icon.html') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('img/favicons/apple-touch-icon-72x72.html') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('img/favicons/apple-touch-icon-114x114.html') }}\">

    <!-- ==============================================
    CSS
    =============================================== -->
    <!-- Style-->
    <link type=\"text/css\" href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('plugins/datatables/dataTables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

    <!-- ==============================================
    Feauture Detection
    =============================================== -->
    <script src=\"{{ asset('js/modernizr-custom.html') }}\"></script>
    {% block Navigation %}
        <header class=\"tr-header\">
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button class=\"navbar-toggle collapsed\" type=\"button\" data-toggle=\"collapse\"
                                data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ path ('template_Home') }}\"><img alt=\"Image\"
                                                                                         src=\"{{ asset('img/logo.jpg') }}\">The
                            Kafe</a>
                    </div><!-- /.navbar-header -->
                    <div class=\"navbar-left\">
                        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"{{ path('template_Hire') }}\">GoHire</a></li>
                                <li><a href=\"{{ path('template_Work') }}\">GoWork</a></li>
                                <li><a href=\"{{ path('template_Pricing') }}\">Pricing</a></li>
                                <li><a href=\"{{ path('template_How') }}\">How it works</a></li>
                            </ul>
                        </div>
                    </div><!-- /.navbar-left -->
                    <div class=\"navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><i class=\"fa fa-user\"></i></li>
                            <li><a href=\"{{ path('template_Login') }}\">Sign In/ Register </a></li>

                            <li class=\"dropdown mega-avatar\">
                                <a class=\"dropdown-toggle\" aria-expanded=\"true\" href=\"#\" data-toggle=\"dropdown\">
                                    <span class=\"avatar w-32\"><img width=\"25\" height=\"25\"
                                                                   class=\"img-resonsive img-circle\" alt=\"...\"
                                                                   src=\"{{ asset('img/users/2.jpg') }}\"></span>
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span>
\t\t\tAlex Grantte
\t\t   </span>
                                </a>
                                <div class=\"dropdown-menu w dropdown-menu-scale pull-right\">
                                    <a class=\"dropdown-item\"
                                       href=\"{{ path('template_Dashboard') }}\"><span>Dashboard</span></a>
                                    <a class=\"dropdown-item\" href=\"{{ path('template_Profile') }}\"><span>Profile</span></a>
                                    <a class=\"dropdown-item\"
                                       href=\"{{ path('template_EditProfile') }}\"><span>Settings</span></a>
                                    <a class=\"dropdown-item\" href=\"#\">Sign out</a>
                                </div>
                            </li><!-- /navbar-item -->

                        </ul><!-- /.sign-in -->
                        <a class=\"kafe-btn kafe-btn-mint-small\" href=\"{{ path('template_AddJob') }}\">Post a Job</a>
                    </div><!-- /.nav-right -->
                </div><!-- /.container -->
            </nav><!-- /.navbar -->
        </header>
    {% endblock %}
</head>
{% endblock %}
{% block dashboard %}
<!-- ==============================================
  Dashboard Section
  =============================================== -->
<section class=\"dashboard section-padding\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-4 col-md-3\">

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"active\">
                        <a href=\"{{ path('template_dashb') }}\">
                            <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('template_Contract') }}\">
                            <i class=\"fa fa-align-left\"></i> <span>Contracts</span>
                        </a>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i> <span>Jobs</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path('template_JobPasted') }}\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                            <li><a href=\"{{ path('template_AddJob') }}\"><i class=\"fa fa-circle-o\"></i> Add a Job</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-clone\"></i> <span>Proposals</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path('template_YourPorposals') }}\"><i class=\"fa fa-circle-o\"></i> Your
                                    Proposals</a></li>
                            <li><a href=\"{{ path('template_OtherPorposals') }}\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ path('template_Offers') }}\">
                            <i class=\"fa fa-file\"></i> <span>Offers</span>
                        </a>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-copyright\"></i> <span>Companies</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path('template_Company') }}\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                            <li><a href=\"{{ path('template_AddCompany') }}\"><i class=\"fa fa-circle-o\"></i> Add a Company</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ path('template_Message') }}\">
                            <i class=\"fa fa-envelope\"></i> <span>Messages</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <small class=\"label pull-right bg-green\">4</small>
\t\t\t\t</span>
                        </a>
                    </li>
                </ul>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-exchange\"></i> <span>Wallet</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path('template_Deposits') }}\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                            <li><a href=\"{{ path('template_Withdrawals') }}\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ path('template_Payementmethod') }}\">
                            <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('template_Numbership') }}\">
                            <i class=\"fa fa-credit-card\"></i> <span>Membership</span>
                        </a>
                    </li>
                </ul>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-external-link-square\"></i> <span>Feature a Job</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path('template_Featured_Job_List') }}\"><i class=\"fa fa-circle-o\"></i> Jobs Featured
                                    List</a></li>
                            <li><a href=\"{{ path('template_Featured_A_Job') }}\"><i class=\"fa fa-circle-o\"></i> Feature a Job</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-external-link-square\"></i> <span>Feature a Profile</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path('template_Featured_Profiles') }}\"><i class=\"fa fa-circle-o\"></i> Profile
                                    Featured List</a></li>
                            <li><a href=\"{{ path('template_Featured_Your_Profile') }}\"><i class=\"fa fa-circle-o\"></i> Feature
                                    your Profile </a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-external-link-square\"></i> <span>Feature a Company</span>
                            <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path('template_Featured_Companies') }}\"><i class=\"fa fa-circle-o\"></i> Companies
                                    Featured List</a></li>
                            <li><a href=\"{{ path('template_Featured_Your_Company') }}\"><i class=\"fa fa-circle-o\"></i> Feature
                                    your Companies </a></li>
                        </ul>
                    </li>
                </ul>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li>
                        <a href=\"{{ path('template_EditProfile') }}\">
                            <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('template_Profile_Image') }}\">
                            <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('template_Password') }}\">
                            <i class=\"fa fa-lock\"></i> <span>Change Password</span>
                        </a>
                    </li>
                </ul>

            </div>

            {% endblock %}
", "::dashboard_home.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/dashboard_home.html.twig");
    }
}
