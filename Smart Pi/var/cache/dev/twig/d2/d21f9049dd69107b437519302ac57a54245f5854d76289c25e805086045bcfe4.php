<?php

/* base1.html.twig */
class __TwigTemplate_1f761047650898b315e6239b6f20c6b98f953ecd569cc477a6034e00dafbb7c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'aside' => array($this, 'block_aside'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3d26559f13633a03a3dc62e03ff96c4a2e73cd2f5d05ce5fa7e2268eb200b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d26559f13633a03a3dc62e03ff96c4a2e73cd2f5d05ce5fa7e2268eb200b38->enter($__internal_d3d26559f13633a03a3dc62e03ff96c4a2e73cd2f5d05ce5fa7e2268eb200b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_e5dbc21e540e3a436a574b031efda3cedcd16f01514517fa2c6f8b9d44b0a141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dbc21e540e3a436a574b031efda3cedcd16f01514517fa2c6f8b9d44b0a141->enter($__internal_e5dbc21e540e3a436a574b031efda3cedcd16f01514517fa2c6f8b9d44b0a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">


<div class=\"wrapper\">

    ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 307
        echo "
    ";
        // line 308
        $this->displayBlock('aside', $context, $blocks);
        // line 437
        echo "

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">


        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 445
        $this->displayBlock('container', $context, $blocks);
        // line 447
        echo "

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2018-2019 <a href=\"https://adminlte.io\">Little Ones</a>.</strong> All rights
        reserved.
    </footer>

</div>

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
<div class=\"control-sidebar-bg\"></div>

</div>

";
        // line 468
        $this->displayBlock('javascripts', $context, $blocks);
        // line 490
        echo "
</body>
</html>
";
        
        $__internal_d3d26559f13633a03a3dc62e03ff96c4a2e73cd2f5d05ce5fa7e2268eb200b38->leave($__internal_d3d26559f13633a03a3dc62e03ff96c4a2e73cd2f5d05ce5fa7e2268eb200b38_prof);

        
        $__internal_e5dbc21e540e3a436a574b031efda3cedcd16f01514517fa2c6f8b9d44b0a141->leave($__internal_e5dbc21e540e3a436a574b031efda3cedcd16f01514517fa2c6f8b9d44b0a141_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b146898887c97ce0729601c37bfeaf070d195ac98221882abe7e1f94f04ab36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b146898887c97ce0729601c37bfeaf070d195ac98221882abe7e1f94f04ab36->enter($__internal_7b146898887c97ce0729601c37bfeaf070d195ac98221882abe7e1f94f04ab36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6806cafd856342ef45d6e334b64b38f13770b2665501d793f10a0287e53f0d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6806cafd856342ef45d6e334b64b38f13770b2665501d793f10a0287e53f0d49->enter($__internal_6806cafd856342ef45d6e334b64b38f13770b2665501d793f10a0287e53f0d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to AdminPanel!";
        
        $__internal_6806cafd856342ef45d6e334b64b38f13770b2665501d793f10a0287e53f0d49->leave($__internal_6806cafd856342ef45d6e334b64b38f13770b2665501d793f10a0287e53f0d49_prof);

        
        $__internal_7b146898887c97ce0729601c37bfeaf070d195ac98221882abe7e1f94f04ab36->leave($__internal_7b146898887c97ce0729601c37bfeaf070d195ac98221882abe7e1f94f04ab36_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bef63d7edd3b693391def96088d6cf8fd086c5098b114ebaf9ef44d1396d1c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef63d7edd3b693391def96088d6cf8fd086c5098b114ebaf9ef44d1396d1c3b->enter($__internal_bef63d7edd3b693391def96088d6cf8fd086c5098b114ebaf9ef44d1396d1c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e75794244f6d3e55365f4d38617570c1a68a45b049ccd75d6a631a8bfa284e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e75794244f6d3e55365f4d38617570c1a68a45b049ccd75d6a631a8bfa284e9->enter($__internal_0e75794244f6d3e55365f4d38617570c1a68a45b049ccd75d6a631a8bfa284e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <!-- Bootstrap 3.3.7 -->
        <link rel=\"stylesheet\" href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo ">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo ">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo ">
        <!-- jvectormap -->
        <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo ">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo ">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo ">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel=\"stylesheet\"
              href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

    ";
        
        $__internal_0e75794244f6d3e55365f4d38617570c1a68a45b049ccd75d6a631a8bfa284e9->leave($__internal_0e75794244f6d3e55365f4d38617570c1a68a45b049ccd75d6a631a8bfa284e9_prof);

        
        $__internal_bef63d7edd3b693391def96088d6cf8fd086c5098b114ebaf9ef44d1396d1c3b->leave($__internal_bef63d7edd3b693391def96088d6cf8fd086c5098b114ebaf9ef44d1396d1c3b_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_d5f906bf32d12c16438564869c217cb89f8436ff95facac1f314d346e8cf8071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f906bf32d12c16438564869c217cb89f8436ff95facac1f314d346e8cf8071->enter($__internal_d5f906bf32d12c16438564869c217cb89f8436ff95facac1f314d346e8cf8071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8382650aab0a588cf030fda6dca8172926cb7c02308733d998194aa15daf88b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8382650aab0a588cf030fda6dca8172926cb7c02308733d998194aa15daf88b7->enter($__internal_8382650aab0a588cf030fda6dca8172926cb7c02308733d998194aa15daf88b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "        <header class=\"main-header\">

            <!-- Logo -->
            <a href=\"#\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class=\"logo-mini\"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class=\"logo-lg\"><b>Admin</b>LTE</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class=\"dropdown messages-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"label label-success\">4</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- start message -->
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img alt=\"User Image\" class=\"img-circle\"
                                                         src=";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo ">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img class=\"img-circle\" alt=\"User Image\"
                                                         src=";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo ">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img class=\"img-circle\" alt=\"User Image\"
                                                         src=";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user4-128x128.jpg"), "html", null, true);
        echo ">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img class=\"img-circle\" alt=\"User Image\"
                                                         src=";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo ">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img class=\"img-circle\" alt=\"User Image\"
                                                         src=";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user4-128x128.jpg"), "html", null, true);
        echo ">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class=\"dropdown notifications-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell-o\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-warning text-yellow\"></i> Very long description here
                                                that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-user text-red\"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class=\"dropdown tasks-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-flag-o\"></i>
                                <span class=\"label label-danger\">9</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Design some buttons
                                                    <small class=\"pull-right\">20%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\"
                                                         role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Create a nice theme
                                                    <small class=\"pull-right\">40%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\"
                                                         role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Some task I need to do
                                                    <small class=\"pull-right\">60%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\"
                                                         role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class=\"pull-right\">80%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\"
                                                         role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class=\"footer\">
                                    <a href=\"#\">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <img class=\"user-image\" alt=\"User Image\" src=";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo ">
                                <span class=\"hidden-xs\">Alexander Pierce</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header\">
                                    <img class=\"img-circle\" alt=\"User Image\"
                                         src=";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo ">

                                    <p>
                                        Little Admin
                                        <small>Member since Nov. 2019</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href=\"#\"><i class=\"fa \"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
    ";
        
        $__internal_8382650aab0a588cf030fda6dca8172926cb7c02308733d998194aa15daf88b7->leave($__internal_8382650aab0a588cf030fda6dca8172926cb7c02308733d998194aa15daf88b7_prof);

        
        $__internal_d5f906bf32d12c16438564869c217cb89f8436ff95facac1f314d346e8cf8071->leave($__internal_d5f906bf32d12c16438564869c217cb89f8436ff95facac1f314d346e8cf8071_prof);

    }

    // line 308
    public function block_aside($context, array $blocks = array())
    {
        $__internal_0f3d9d3d54e5d7dc6449470a380ef60c8d8db703510bef43efb7b64d3e364a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3d9d3d54e5d7dc6449470a380ef60c8d8db703510bef43efb7b64d3e364a09->enter($__internal_0f3d9d3d54e5d7dc6449470a380ef60c8d8db703510bef43efb7b64d3e364a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_c3c7f83fa51033c71a533a044df644fef83b3a86c4e7a6f633946e8106ae1f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c7f83fa51033c71a533a044df644fef83b3a86c4e7a6f633946e8106ae1f6d->enter($__internal_c3c7f83fa51033c71a533a044df644fef83b3a86c4e7a6f633946e8106ae1f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 309
        echo "        <aside class=\"main-sidebar\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                <!-- Sidebar user panel -->
                <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                        <img src=";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo " class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>Little Admin</p>
                        FixIt's Admin !
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"header\">MAIN NAVIGATION</li>
                    <li class=\"active treeview menu-open\">
                        <a href=\"#\">
                            <i class=\"fa fa-home\"></i> <span>Home</span>
                        </a>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-user-times\"></i>
                            <span>Clients Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 336
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href=";
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "><i class=\"fa fa-circle-o\"></i>Add new</a></li>
                            <li><a href=";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> Edit </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-users\"></i>
                            <span>Handymans Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href=";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href=";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-institution\"></i>
                            <span>Training cabinets Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href=";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href=";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"\">
                            <i class=\"fa fa-male\"></i>
                            <span>Gestion de blog</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 378
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href=";
        // line 379
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "><i class=\"fa fa-circle-o\"></i>Add new</a></li>
                            ";
        // line 381
        echo "                            ";
        // line 382
        echo "                            </li>
                            <li><a href=";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-warning\"></i>
                            <span>Claims Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href=";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href=";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-bullhorn\"></i>
                            <span>Customer requests Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href=";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href=";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-building\"></i>
                            <span>Store Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href=";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href=";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
    ";
        
        $__internal_c3c7f83fa51033c71a533a044df644fef83b3a86c4e7a6f633946e8106ae1f6d->leave($__internal_c3c7f83fa51033c71a533a044df644fef83b3a86c4e7a6f633946e8106ae1f6d_prof);

        
        $__internal_0f3d9d3d54e5d7dc6449470a380ef60c8d8db703510bef43efb7b64d3e364a09->leave($__internal_0f3d9d3d54e5d7dc6449470a380ef60c8d8db703510bef43efb7b64d3e364a09_prof);

    }

    // line 445
    public function block_container($context, array $blocks = array())
    {
        $__internal_ef417bb02673d89431dcc8fc8afe7668d86fa6a57b6dbde0b53fefebe83947d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef417bb02673d89431dcc8fc8afe7668d86fa6a57b6dbde0b53fefebe83947d6->enter($__internal_ef417bb02673d89431dcc8fc8afe7668d86fa6a57b6dbde0b53fefebe83947d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_8a500647183d2393fd44dff00bf5a00c69a1c720fcbce2f7c474e6b489b67729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a500647183d2393fd44dff00bf5a00c69a1c720fcbce2f7c474e6b489b67729->enter($__internal_8a500647183d2393fd44dff00bf5a00c69a1c720fcbce2f7c474e6b489b67729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 446
        echo "            ";
        
        $__internal_8a500647183d2393fd44dff00bf5a00c69a1c720fcbce2f7c474e6b489b67729->leave($__internal_8a500647183d2393fd44dff00bf5a00c69a1c720fcbce2f7c474e6b489b67729_prof);

        
        $__internal_ef417bb02673d89431dcc8fc8afe7668d86fa6a57b6dbde0b53fefebe83947d6->leave($__internal_ef417bb02673d89431dcc8fc8afe7668d86fa6a57b6dbde0b53fefebe83947d6_prof);

    }

    // line 468
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74f78ace10519068d7abe572d7eb256c88009cbf0bef6c740baf626b4ce74baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f78ace10519068d7abe572d7eb256c88009cbf0bef6c740baf626b4ce74baa->enter($__internal_74f78ace10519068d7abe572d7eb256c88009cbf0bef6c740baf626b4ce74baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f8f9f2e8518ae36a2e83b8fcf78399a19a52b8f6a42677b9016e99ed7e873697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f9f2e8518ae36a2e83b8fcf78399a19a52b8f6a42677b9016e99ed7e873697->enter($__internal_f8f9f2e8518ae36a2e83b8fcf78399a19a52b8f6a42677b9016e99ed7e873697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 469
        echo "    <!-- jQuery 3 -->
    <script src=";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "></script>
    <!-- Bootstrap 3.3.7 -->
    <script src=";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <!-- FastClick -->
    <script src=";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "></script>
    <!-- AdminLTE App -->
    <script src=";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/adminlte.min.js"), "html", null, true);
        echo "></script>
    <!-- jvectormap  -->
    <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>

    <script src=";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "></script>
    <!-- Sparkline -->
    <script src=";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "></script>
    <!-- SlimScroll -->
    <script src=";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "></script>
    <!-- ChartJS -->
    <script src=";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/chart.js/Chart.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_f8f9f2e8518ae36a2e83b8fcf78399a19a52b8f6a42677b9016e99ed7e873697->leave($__internal_f8f9f2e8518ae36a2e83b8fcf78399a19a52b8f6a42677b9016e99ed7e873697_prof);

        
        $__internal_74f78ace10519068d7abe572d7eb256c88009cbf0bef6c740baf626b4ce74baa->leave($__internal_74f78ace10519068d7abe572d7eb256c88009cbf0bef6c740baf626b4ce74baa_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  801 => 488,  796 => 486,  791 => 484,  786 => 482,  781 => 480,  776 => 478,  771 => 476,  766 => 474,  761 => 472,  756 => 470,  753 => 469,  744 => 468,  734 => 446,  725 => 445,  706 => 428,  701 => 426,  697 => 425,  692 => 423,  679 => 413,  674 => 411,  670 => 410,  665 => 408,  652 => 398,  647 => 396,  643 => 395,  638 => 393,  625 => 383,  622 => 382,  620 => 381,  616 => 379,  612 => 378,  599 => 368,  594 => 366,  590 => 365,  585 => 363,  572 => 353,  567 => 351,  563 => 350,  558 => 348,  545 => 338,  541 => 337,  537 => 336,  513 => 315,  505 => 309,  496 => 308,  458 => 279,  448 => 272,  303 => 130,  287 => 117,  271 => 104,  255 => 91,  238 => 77,  202 => 43,  193 => 42,  169 => 21,  163 => 18,  158 => 16,  153 => 14,  148 => 12,  143 => 10,  140 => 9,  131 => 8,  113 => 5,  100 => 490,  98 => 468,  75 => 447,  73 => 445,  63 => 437,  61 => 308,  58 => 307,  56 => 42,  45 => 35,  43 => 8,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome to AdminPanel!{% endblock %}</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    {% block stylesheets %}
        <!-- Bootstrap 3.3.7 -->
        <link rel=\"stylesheet\" href={{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}>
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href={{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}>
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href={{ asset('bower_components/Ionicons/css/ionicons.min.css') }}>
        <!-- jvectormap -->
        <link rel=\"stylesheet\" href={{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}>
        <!-- Theme style -->
        <link rel=\"stylesheet\" href={{ asset('dist/css/AdminLTE.min.css') }}>
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href={{ asset('dist/css/skins/_all-skins.min.css') }}>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel=\"stylesheet\"
              href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">


<div class=\"wrapper\">

    {% block header %}
        <header class=\"main-header\">

            <!-- Logo -->
            <a href=\"#\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class=\"logo-mini\"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class=\"logo-lg\"><b>Admin</b>LTE</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class=\"dropdown messages-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"label label-success\">4</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- start message -->
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img alt=\"User Image\" class=\"img-circle\"
                                                         src={{ asset('dist/img/user2-160x160.jpg') }}>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img class=\"img-circle\" alt=\"User Image\"
                                                         src={{ asset('dist/img/user3-128x128.jpg') }}>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img class=\"img-circle\" alt=\"User Image\"
                                                         src={{ asset('dist/img/user4-128x128.jpg') }}>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img class=\"img-circle\" alt=\"User Image\"
                                                         src={{ asset('dist/img/user3-128x128.jpg') }}>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img class=\"img-circle\" alt=\"User Image\"
                                                         src={{ asset('dist/img/user4-128x128.jpg') }}>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class=\"dropdown notifications-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell-o\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-warning text-yellow\"></i> Very long description here
                                                that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-user text-red\"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class=\"dropdown tasks-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-flag-o\"></i>
                                <span class=\"label label-danger\">9</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Design some buttons
                                                    <small class=\"pull-right\">20%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\"
                                                         role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Create a nice theme
                                                    <small class=\"pull-right\">40%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\"
                                                         role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Some task I need to do
                                                    <small class=\"pull-right\">60%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\"
                                                         role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class=\"pull-right\">80%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\"
                                                         role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class=\"footer\">
                                    <a href=\"#\">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <img class=\"user-image\" alt=\"User Image\" src={{ asset('dist/img/user2-160x160.jpg') }}>
                                <span class=\"hidden-xs\">Alexander Pierce</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header\">
                                    <img class=\"img-circle\" alt=\"User Image\"
                                         src={{ asset('dist/img/user2-160x160.jpg') }}>

                                    <p>
                                        Little Admin
                                        <small>Member since Nov. 2019</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href=\"#\"><i class=\"fa \"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
    {% endblock %}

    {% block aside %}
        <aside class=\"main-sidebar\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                <!-- Sidebar user panel -->
                <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                        <img src={{ asset('dist/img/user2-160x160.jpg') }} class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>Little Admin</p>
                        FixIt's Admin !
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"header\">MAIN NAVIGATION</li>
                    <li class=\"active treeview menu-open\">
                        <a href=\"#\">
                            <i class=\"fa fa-home\"></i> <span>Home</span>
                        </a>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-user-times\"></i>
                            <span>Clients Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ path('article_index') }}><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href={{ path('article_new') }}><i class=\"fa fa-circle-o\"></i>Add new</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i> Edit </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-users\"></i>
                            <span>Handymans Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-institution\"></i>
                            <span>Training cabinets Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"\">
                            <i class=\"fa fa-male\"></i>
                            <span>Gestion de blog</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ path('article_index') }}><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href={{ path('article_new') }}><i class=\"fa fa-circle-o\"></i>Add new</a></li>
                            {#{{ dump(app.user) }}#}
                            {#<li><a href={{ path('article_edit', {'id' : app}) }}><i class=\"fa fa-circle-o\"></i>Edit </a>#}
                            </li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-warning\"></i>
                            <span>Claims Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-bullhorn\"></i>
                            <span>Customer requests Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-building\"></i>
                            <span>Store Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all
                                </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a>
                            </li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
    {% endblock %}


    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">


        <!-- Main content -->
        <section class=\"content\">
            {% block container %}
            {% endblock %}


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2018-2019 <a href=\"https://adminlte.io\">Little Ones</a>.</strong> All rights
        reserved.
    </footer>

</div>

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
<div class=\"control-sidebar-bg\"></div>

</div>

{% block javascripts %}
    <!-- jQuery 3 -->
    <script src={{ asset('bower_components/jquery/dist/jquery.min.js') }}></script>
    <!-- Bootstrap 3.3.7 -->
    <script src={{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}></script>
    <!-- FastClick -->
    <script src={{ asset('bower_components/fastclick/lib/fastclick.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('dist/js/adminlte.min.js') }}></script>
    <!-- jvectormap  -->
    <script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>

    <script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>

    <script src={{ asset('bower_components/jquery/dist/jquery.min.js') }}></script>
    <!-- Sparkline -->
    <script src={{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}></script>
    <!-- SlimScroll -->
    <script src={{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}></script>
    <!-- ChartJS -->
    <script src={{ asset('bower_components/chart.js/Chart.js') }}></script>
{% endblock %}

</body>
</html>
", "base1.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\base1.html.twig");
    }
}
