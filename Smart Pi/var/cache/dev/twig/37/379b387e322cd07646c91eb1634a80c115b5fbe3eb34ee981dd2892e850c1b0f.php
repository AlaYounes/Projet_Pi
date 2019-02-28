<?php

/* FixBundle:Frontend/Default:messages.html.twig */
class __TwigTemplate_6af9074d3a4efb973ab0a40fb52f34ffe40d840b705e34fe85d40cb1a40cb347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:messages.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c86add7ef4f7a42ac373de356bdbb30da92de7482f97d7a5a0d0f1ef10a740e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c86add7ef4f7a42ac373de356bdbb30da92de7482f97d7a5a0d0f1ef10a740e->enter($__internal_9c86add7ef4f7a42ac373de356bdbb30da92de7482f97d7a5a0d0f1ef10a740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:messages.html.twig"));

        $__internal_64a62836812ecb985f0ee929817998e64a179a94cb47e9d7b45be1ca85b77e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a62836812ecb985f0ee929817998e64a179a94cb47e9d7b45be1ca85b77e99->enter($__internal_64a62836812ecb985f0ee929817998e64a179a94cb47e9d7b45be1ca85b77e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c86add7ef4f7a42ac373de356bdbb30da92de7482f97d7a5a0d0f1ef10a740e->leave($__internal_9c86add7ef4f7a42ac373de356bdbb30da92de7482f97d7a5a0d0f1ef10a740e_prof);

        
        $__internal_64a62836812ecb985f0ee929817998e64a179a94cb47e9d7b45be1ca85b77e99->leave($__internal_64a62836812ecb985f0ee929817998e64a179a94cb47e9d7b45be1ca85b77e99_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_b8a2799eeb00cfbd63b4dd2c0dae489edd520cf5632d288312119ebe0093cacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a2799eeb00cfbd63b4dd2c0dae489edd520cf5632d288312119ebe0093cacc->enter($__internal_b8a2799eeb00cfbd63b4dd2c0dae489edd520cf5632d288312119ebe0093cacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_583e884b8084467dc2619e46ed8bff4216bb066bf5ce5930366ec150e2d30a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583e884b8084467dc2619e46ed8bff4216bb066bf5ce5930366ec150e2d30a7e->enter($__internal_583e884b8084467dc2619e46ed8bff4216bb066bf5ce5930366ec150e2d30a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_583e884b8084467dc2619e46ed8bff4216bb066bf5ce5930366ec150e2d30a7e->leave($__internal_583e884b8084467dc2619e46ed8bff4216bb066bf5ce5930366ec150e2d30a7e_prof);

        
        $__internal_b8a2799eeb00cfbd63b4dd2c0dae489edd520cf5632d288312119ebe0093cacc->leave($__internal_b8a2799eeb00cfbd63b4dd2c0dae489edd520cf5632d288312119ebe0093cacc_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_7ffc726a8ecbea213d263b65ae75a031275b25256ced70dbee2574c181c15b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffc726a8ecbea213d263b65ae75a031275b25256ced70dbee2574c181c15b37->enter($__internal_7ffc726a8ecbea213d263b65ae75a031275b25256ced70dbee2574c181c15b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_32e83c3343d496c713624ed5b0825a02609417608a850ca69e651192112aedc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e83c3343d496c713624ed5b0825a02609417608a850ca69e651192112aedc1->enter($__internal_32e83c3343d496c713624ed5b0825a02609417608a850ca69e651192112aedc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
<body>

<body>


<section class=\"dashboard section-padding\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-4 col-md-3\">

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li>
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\">
                            <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 25
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
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                            <li><a href=\"";
        // line 38
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
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_YourPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_OtherPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 54
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
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_CompanyList");
        echo "\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddCompany");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                        </ul>
                    </li>
                    <li class=\"active\">
                        <a href=\"";
        // line 71
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
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Deposits");
        echo "\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                            <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Withdrawals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payementmethod");
        echo "\">
                            <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 99
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
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Job_List");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a></li>
                            <li><a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_A_Job");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature a Job</a></li>
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
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Profiles");
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a></li>
                            <li><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Profile");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your Profile </a></li>
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
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Companies");
        echo "\"><i class=\"fa fa-circle-o\"></i> Companies Featured List</a></li>
                            <li><a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your Companies </a></li>
                        </ul>
                    </li>
                </ul>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li>
                        <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\">
                            <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile_Image");
        echo "\">
                            <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Password");
        echo "\">
                            <i class=\"fa fa-lock\"></i> <span>Change Password</span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class=\"col-sm-8 col-md-9\">



                <div class=\"messages-box\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-12 no-pdd\">
                            <div class=\"messages-container\">

                                <div class=\"message-header\">
                                    <div class=\"message-title\">
                                        <h4>Messages</h4>
                                    </div><!--/ message-title-->
                                    <div class=\"search-area\">
                                        <div class=\"input-field\">
                                            <input placeholder=\"Search\" type=\"text\">
                                            <i class=\"fa fa-search\"></i>
                                        </div>
                                    </div><!--/ search-area-->
                                </div><!--/ message-header-->

                                <div class=\"messages-list\">
                                    <ul>
                                        <li class=\"active\">
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                                    <span class=\"user-online\"></span>
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Anthony McCartney</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                                <span class=\"message-notification\">1</span>
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Sean Coleman</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Vanessa Wells</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Clifford Graham</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Grace Karen</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/8.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Alex Grantte</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/9.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Anna Morgan</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/10.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Francis Long</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Eleanor Harper</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>

                                    </ul>
                                </div><!--/ messages-list -->

                            </div><!--/ messages-container-->
                        </div><!--/ col-lg-4 -->

                        <div class=\"col-lg-8 col-md-12 pd-right-none pd-left-none\">
                            <div class=\"conversation-box\">

                                <div class=\"conversation-header\">
                                    <div class=\"user-message-details\">
                                        <div class=\"user-message-img\">
                                            <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                                        </div>
                                        <div class=\"user-message-info\">
                                            <h4>Anthony McCartney</h4>
                                            <p>Online</p>
                                        </div><!--/ user-message-info -->
                                    </div><!--/ user-message-details -->
                                </div><!--/ conversation-header -->

                                <div class=\"conversation-container\">

                                    <div class=\"convo-box pull-right\">
                                        <div class=\"convo-area\">
                                            <div class=\"convo-message\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                            </div><!--/ convo-message-->
                                            <span>Sat, Aug 23, 1:08 PM</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box convo-left\">
                                        <div class=\"convo-area convo-left\">
                                            <div class=\"convo-message\">
                                                <p>Cras ultricies ligula.</p>
                                            </div><!--/ convo-message-->
                                            <span>5 minutes ago</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box pull-right\">
                                        <div class=\"convo-area\">
                                            <div class=\"convo-message\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                            </div><!--/ convo-message-->
                                            <span>Sat, Aug 23, 1:08 PM</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box convo-left\">
                                        <div class=\"convo-area convo-left\">
                                            <div class=\"convo-message\">
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div><!--/ convo-message-->
                                            <span>2 minutes ago</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box pull-right\">
                                        <div class=\"convo-area\">
                                            <div class=\"convo-message\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                            </div><!--/ convo-message-->
                                            <span>Sat, Aug 23, 1:08 PM</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box convo-left\">
                                        <div class=\"convo-area convo-left\">
                                            <div class=\"convo-message\">
                                                <p>Typing...</p>
                                            </div><!--/ convo-message-->
                                            <span>2 minutes ago</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                </div><!--/ conversation-container -->
                                <div class=\"type_messages\">
                                    <div class=\"input-field\">
                                        <textarea placeholder=\"Type something &amp; press enter\"></textarea>
                                        <ul class=\"imoji\">
                                            <li><a href=\"#\" class=\"kafe-btn kafe-btn-mint-small\">Send</a></li>
                                        </ul><!--/ imoji -->
                                    </div><!--/ input-field -->
                                </div><!--/ type_messages -->

                            </div><!--main-conversation-box end-->
                        </div><!--/ col-lg-8 -->

                    </div><!--/ row -->
                </div><!--/ messages-box -->

            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

  ";
        
        $__internal_32e83c3343d496c713624ed5b0825a02609417608a850ca69e651192112aedc1->leave($__internal_32e83c3343d496c713624ed5b0825a02609417608a850ca69e651192112aedc1_prof);

        
        $__internal_7ffc726a8ecbea213d263b65ae75a031275b25256ced70dbee2574c181c15b37->leave($__internal_7ffc726a8ecbea213d263b65ae75a031275b25256ced70dbee2574c181c15b37_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  573 => 389,  558 => 377,  543 => 365,  528 => 353,  513 => 341,  498 => 329,  476 => 310,  451 => 288,  436 => 276,  421 => 264,  406 => 252,  391 => 240,  376 => 228,  361 => 216,  346 => 204,  329 => 190,  292 => 156,  284 => 151,  276 => 146,  266 => 139,  262 => 138,  248 => 127,  244 => 126,  230 => 115,  226 => 114,  208 => 99,  200 => 94,  193 => 90,  189 => 89,  168 => 71,  161 => 67,  157 => 66,  142 => 54,  135 => 50,  131 => 49,  117 => 38,  113 => 37,  98 => 25,  90 => 20,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block header %}
    {{ parent() }}
{% endblock %}
  {% block container %}
      {{ parent() }}
<body>

<body>


<section class=\"dashboard section-padding\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-4 col-md-3\">

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li>
                        <a href=\"{{ path('template_Dashboard') }}\">
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
                            <li><a href=\"{{ path('template_YourPorposals') }}\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
                            <li><a href=\"{{ path('template_OtherPorposals') }}\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a></li>
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
                            <li><a href=\"{{ path('template_CompanyList') }}\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                            <li><a href=\"{{ path('template_AddCompany') }}\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                        </ul>
                    </li>
                    <li class=\"active\">
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
                            <li><a href=\"{{ path('template_Featured_Job_List') }}\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a></li>
                            <li><a href=\"{{ path('template_Featured_A_Job') }}\"><i class=\"fa fa-circle-o\"></i> Feature a Job</a></li>
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
                            <li><a href=\"{{ path('template_Featured_Profiles') }}\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a></li>
                            <li><a href=\"{{ path('template_Featured_Your_Profile') }}\"><i class=\"fa fa-circle-o\"></i> Feature your Profile </a></li>
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
                            <li><a href=\"{{ path('template_Featured_Companies') }}\"><i class=\"fa fa-circle-o\"></i> Companies Featured List</a></li>
                            <li><a href=\"{{ path('template_Featured_Your_Company') }}\"><i class=\"fa fa-circle-o\"></i> Feature your Companies </a></li>
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

            <div class=\"col-sm-8 col-md-9\">



                <div class=\"messages-box\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-12 no-pdd\">
                            <div class=\"messages-container\">

                                <div class=\"message-header\">
                                    <div class=\"message-title\">
                                        <h4>Messages</h4>
                                    </div><!--/ message-title-->
                                    <div class=\"search-area\">
                                        <div class=\"input-field\">
                                            <input placeholder=\"Search\" type=\"text\">
                                            <i class=\"fa fa-search\"></i>
                                        </div>
                                    </div><!--/ search-area-->
                                </div><!--/ message-header-->

                                <div class=\"messages-list\">
                                    <ul>
                                        <li class=\"active\">
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"{{ asset('img/users/3.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                                    <span class=\"user-online\"></span>
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Anthony McCartney</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                                <span class=\"message-notification\">1</span>
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"{{ asset('img/users/4.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Sean Coleman</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"{{ asset('img/users/5.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Vanessa Wells</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"{{ asset('img/users/6.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Clifford Graham</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"{{ asset('img/users/7.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Grace Karen</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"{{ asset('img/users/8.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Alex Grantte</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"{{ asset('img/users/9.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Anna Morgan</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"{{ asset('img/users/10.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Francis Long</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>
                                        <li>
                                            <div class=\"user-message-details\">
                                                <div class=\"user-message-img\">
                                                    <img src=\"{{ asset('img/users/11.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                                </div>
                                                <div class=\"user-message-info\">
                                                    <h4>Eleanor Harper</h4>
                                                    <p>Lorem ipsum dolor ...</p>
                                                    <span class=\"time-posted\">1:55 PM</span>
                                                </div><!--/ user-message-info -->
                                            </div><!--/ user-message-details -->
                                        </li>

                                    </ul>
                                </div><!--/ messages-list -->

                            </div><!--/ messages-container-->
                        </div><!--/ col-lg-4 -->

                        <div class=\"col-lg-8 col-md-12 pd-right-none pd-left-none\">
                            <div class=\"conversation-box\">

                                <div class=\"conversation-header\">
                                    <div class=\"user-message-details\">
                                        <div class=\"user-message-img\">
                                            <img src=\"{{ asset('img/users/3.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                                        </div>
                                        <div class=\"user-message-info\">
                                            <h4>Anthony McCartney</h4>
                                            <p>Online</p>
                                        </div><!--/ user-message-info -->
                                    </div><!--/ user-message-details -->
                                </div><!--/ conversation-header -->

                                <div class=\"conversation-container\">

                                    <div class=\"convo-box pull-right\">
                                        <div class=\"convo-area\">
                                            <div class=\"convo-message\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                            </div><!--/ convo-message-->
                                            <span>Sat, Aug 23, 1:08 PM</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"{{ asset('img/users/2.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box convo-left\">
                                        <div class=\"convo-area convo-left\">
                                            <div class=\"convo-message\">
                                                <p>Cras ultricies ligula.</p>
                                            </div><!--/ convo-message-->
                                            <span>5 minutes ago</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"{{ asset('img/users/3.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box pull-right\">
                                        <div class=\"convo-area\">
                                            <div class=\"convo-message\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                            </div><!--/ convo-message-->
                                            <span>Sat, Aug 23, 1:08 PM</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"{{ asset('img/users/2.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box convo-left\">
                                        <div class=\"convo-area convo-left\">
                                            <div class=\"convo-message\">
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div><!--/ convo-message-->
                                            <span>2 minutes ago</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"{{ asset('img/users/3.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box pull-right\">
                                        <div class=\"convo-area\">
                                            <div class=\"convo-message\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                            </div><!--/ convo-message-->
                                            <span>Sat, Aug 23, 1:08 PM</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"{{ asset('img/users/2.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                    <div class=\"convo-box convo-left\">
                                        <div class=\"convo-area convo-left\">
                                            <div class=\"convo-message\">
                                                <p>Typing...</p>
                                            </div><!--/ convo-message-->
                                            <span>2 minutes ago</span>
                                        </div><!--/ convo-area -->
                                        <div class=\"convo-img\">
                                            <img src=\"{{ asset('img/users/3.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                                        </div><!--/ convo-img -->
                                    </div><!--/ convo-box -->

                                </div><!--/ conversation-container -->
                                <div class=\"type_messages\">
                                    <div class=\"input-field\">
                                        <textarea placeholder=\"Type something &amp; press enter\"></textarea>
                                        <ul class=\"imoji\">
                                            <li><a href=\"#\" class=\"kafe-btn kafe-btn-mint-small\">Send</a></li>
                                        </ul><!--/ imoji -->
                                    </div><!--/ input-field -->
                                </div><!--/ type_messages -->

                            </div><!--main-conversation-box end-->
                        </div><!--/ col-lg-8 -->

                    </div><!--/ row -->
                </div><!--/ messages-box -->

            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

  {% endblock %}", "FixBundle:Frontend/Default:messages.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/messages.html.twig");
    }
}
