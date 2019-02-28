<?php

/* base1.html.twig */
class __TwigTemplate_ea6681c22fafcef67fc79dcca73a53382a69ddc5a760e9d21a0a0f98cda5ab84 extends Twig_Template
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
        $__internal_8ed63db04c8727314426070bb5a0f27705fde6e528cab9ad1bb433b22d35a97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed63db04c8727314426070bb5a0f27705fde6e528cab9ad1bb433b22d35a97b->enter($__internal_8ed63db04c8727314426070bb5a0f27705fde6e528cab9ad1bb433b22d35a97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_b010b0a6f633fcc1953a1c382b85ae3113f8365f265b2d5471abd39aa08927b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b010b0a6f633fcc1953a1c382b85ae3113f8365f265b2d5471abd39aa08927b8->enter($__internal_b010b0a6f633fcc1953a1c382b85ae3113f8365f265b2d5471abd39aa08927b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
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
        echo "\" />
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">


<div class=\"wrapper\">

    ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 296
        echo "
    ";
        // line 297
        $this->displayBlock('aside', $context, $blocks);
        // line 408
        echo "

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">


        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 416
        $this->displayBlock('container', $context, $blocks);
        // line 418
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
        // line 439
        $this->displayBlock('javascripts', $context, $blocks);
        // line 461
        echo "
</body>
</html>
";
        
        $__internal_8ed63db04c8727314426070bb5a0f27705fde6e528cab9ad1bb433b22d35a97b->leave($__internal_8ed63db04c8727314426070bb5a0f27705fde6e528cab9ad1bb433b22d35a97b_prof);

        
        $__internal_b010b0a6f633fcc1953a1c382b85ae3113f8365f265b2d5471abd39aa08927b8->leave($__internal_b010b0a6f633fcc1953a1c382b85ae3113f8365f265b2d5471abd39aa08927b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f3d94b3b1f01137297c9d98f7371c3529e301d18658dd81aa9c81bc6de97224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3d94b3b1f01137297c9d98f7371c3529e301d18658dd81aa9c81bc6de97224->enter($__internal_6f3d94b3b1f01137297c9d98f7371c3529e301d18658dd81aa9c81bc6de97224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4ded8c0c026804f1908fab3fb9ca8d4fc978d864d3023f9c03a338f39ceb57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ded8c0c026804f1908fab3fb9ca8d4fc978d864d3023f9c03a338f39ceb57e->enter($__internal_a4ded8c0c026804f1908fab3fb9ca8d4fc978d864d3023f9c03a338f39ceb57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to AdminPanel!";
        
        $__internal_a4ded8c0c026804f1908fab3fb9ca8d4fc978d864d3023f9c03a338f39ceb57e->leave($__internal_a4ded8c0c026804f1908fab3fb9ca8d4fc978d864d3023f9c03a338f39ceb57e_prof);

        
        $__internal_6f3d94b3b1f01137297c9d98f7371c3529e301d18658dd81aa9c81bc6de97224->leave($__internal_6f3d94b3b1f01137297c9d98f7371c3529e301d18658dd81aa9c81bc6de97224_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b7068574e96820ee346ae206754528c9b3371c2caefd1d2445e7489b0a926d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7068574e96820ee346ae206754528c9b3371c2caefd1d2445e7489b0a926d0->enter($__internal_4b7068574e96820ee346ae206754528c9b3371c2caefd1d2445e7489b0a926d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83e6e9c033c34e9ed612387b3ad5d032a9a1dfc5abb4577bf802dd1d3664e731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e6e9c033c34e9ed612387b3ad5d032a9a1dfc5abb4577bf802dd1d3664e731->enter($__internal_83e6e9c033c34e9ed612387b3ad5d032a9a1dfc5abb4577bf802dd1d3664e731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_83e6e9c033c34e9ed612387b3ad5d032a9a1dfc5abb4577bf802dd1d3664e731->leave($__internal_83e6e9c033c34e9ed612387b3ad5d032a9a1dfc5abb4577bf802dd1d3664e731_prof);

        
        $__internal_4b7068574e96820ee346ae206754528c9b3371c2caefd1d2445e7489b0a926d0->leave($__internal_4b7068574e96820ee346ae206754528c9b3371c2caefd1d2445e7489b0a926d0_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_769fbc0ea7c326ea7f1af2f6b619dab98afe369f46ffde9f6b4ea965c440beb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769fbc0ea7c326ea7f1af2f6b619dab98afe369f46ffde9f6b4ea965c440beb5->enter($__internal_769fbc0ea7c326ea7f1af2f6b619dab98afe369f46ffde9f6b4ea965c440beb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0391e70072a9575b327da6a040d342c9705c7dadb6c3ff968db4c9319f7429db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0391e70072a9575b327da6a040d342c9705c7dadb6c3ff968db4c9319f7429db->enter($__internal_0391e70072a9575b327da6a040d342c9705c7dadb6c3ff968db4c9319f7429db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                                                    <img alt=\"User Image\" class=\"img-circle\" src=";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "  >
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
                                                    <img  class=\"img-circle\" alt=\"User Image\" src=";
        // line 89
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
                                                    <img  class=\"img-circle\" alt=\"User Image\" src=";
        // line 101
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
                                                    <img  class=\"img-circle\" alt=\"User Image\" src=";
        // line 113
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
                                                    <img  class=\"img-circle\" alt=\"User Image\" src=";
        // line 125
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
                                                <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
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
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
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
                                                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\"
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
                                                    <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\"
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
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\"
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
                                <img  class=\"user-image\" alt=\"User Image\" src=";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo ">
                                <span class=\"hidden-xs\">Alexander Pierce</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header\">
                                    <img  class=\"img-circle\" alt=\"User Image\" src=";
        // line 268
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
                            <a href=\"#\" ><i class=\"fa \"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
    ";
        
        $__internal_0391e70072a9575b327da6a040d342c9705c7dadb6c3ff968db4c9319f7429db->leave($__internal_0391e70072a9575b327da6a040d342c9705c7dadb6c3ff968db4c9319f7429db_prof);

        
        $__internal_769fbc0ea7c326ea7f1af2f6b619dab98afe369f46ffde9f6b4ea965c440beb5->leave($__internal_769fbc0ea7c326ea7f1af2f6b619dab98afe369f46ffde9f6b4ea965c440beb5_prof);

    }

    // line 297
    public function block_aside($context, array $blocks = array())
    {
        $__internal_f25510b92e5889b29fbadd31f86176e47228c289ea703d7275bd0929bebefd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25510b92e5889b29fbadd31f86176e47228c289ea703d7275bd0929bebefd10->enter($__internal_f25510b92e5889b29fbadd31f86176e47228c289ea703d7275bd0929bebefd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_8e457dcf80572ba8f2a8a455dac032f2957290355444f0547c39890e2a4a6d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e457dcf80572ba8f2a8a455dac032f2957290355444f0547c39890e2a4a6d6b->enter($__internal_8e457dcf80572ba8f2a8a455dac032f2957290355444f0547c39890e2a4a6d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 298
        echo "        <aside class=\"main-sidebar\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                <!-- Sidebar user panel -->
                <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                        <img src=";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo " class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>Little Admin</p>
                        FixIt's  Admin !
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
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href=";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-users\"></i>
                            <span>Handymans Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href=";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href=";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-institution\"></i>
                            <span>Training cabinets Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href=";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href=";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-male\"></i>
                            <span>Sellers Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href=";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href=";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-warning\"></i>
                            <span>Claims Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href=";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href=";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-bullhorn\"></i>
                            <span>Customer requests Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href=";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href=";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-building\"></i>
                            <span>Store Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href=";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href=";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href=";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
    ";
        
        $__internal_8e457dcf80572ba8f2a8a455dac032f2957290355444f0547c39890e2a4a6d6b->leave($__internal_8e457dcf80572ba8f2a8a455dac032f2957290355444f0547c39890e2a4a6d6b_prof);

        
        $__internal_f25510b92e5889b29fbadd31f86176e47228c289ea703d7275bd0929bebefd10->leave($__internal_f25510b92e5889b29fbadd31f86176e47228c289ea703d7275bd0929bebefd10_prof);

    }

    // line 416
    public function block_container($context, array $blocks = array())
    {
        $__internal_bcfcee523549e7e9015f9251cb05d43348e2d153c8ee115107558b9185a514a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcfcee523549e7e9015f9251cb05d43348e2d153c8ee115107558b9185a514a1->enter($__internal_bcfcee523549e7e9015f9251cb05d43348e2d153c8ee115107558b9185a514a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_4bc733a09683699b0a151294cfc7e31f97816f95858452372a13e2db9c77a2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc733a09683699b0a151294cfc7e31f97816f95858452372a13e2db9c77a2a3->enter($__internal_4bc733a09683699b0a151294cfc7e31f97816f95858452372a13e2db9c77a2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 417
        echo "            ";
        
        $__internal_4bc733a09683699b0a151294cfc7e31f97816f95858452372a13e2db9c77a2a3->leave($__internal_4bc733a09683699b0a151294cfc7e31f97816f95858452372a13e2db9c77a2a3_prof);

        
        $__internal_bcfcee523549e7e9015f9251cb05d43348e2d153c8ee115107558b9185a514a1->leave($__internal_bcfcee523549e7e9015f9251cb05d43348e2d153c8ee115107558b9185a514a1_prof);

    }

    // line 439
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e18bf4ee28e4275f4fa0319f32fe028e06eda0deae8046e3d2f7362c3da8e0d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18bf4ee28e4275f4fa0319f32fe028e06eda0deae8046e3d2f7362c3da8e0d3->enter($__internal_e18bf4ee28e4275f4fa0319f32fe028e06eda0deae8046e3d2f7362c3da8e0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d49950e1d59e0562e0c9536274afcc525a56dfe1b4a0360cc2e2288658f62eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49950e1d59e0562e0c9536274afcc525a56dfe1b4a0360cc2e2288658f62eed->enter($__internal_d49950e1d59e0562e0c9536274afcc525a56dfe1b4a0360cc2e2288658f62eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 440
        echo "    <!-- jQuery 3 -->
    <script src=";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "></script>
    <!-- Bootstrap 3.3.7 -->
    <script src=";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <!-- FastClick -->
    <script src=";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "></script>
    <!-- AdminLTE App -->
    <script src=";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/adminlte.min.js"), "html", null, true);
        echo "></script>
    <!-- jvectormap  -->
    <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>

    <script src=";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "></script>
    <!-- Sparkline -->
    <script src=";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "></script>
    <!-- SlimScroll -->
    <script src=";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "></script>
    <!-- ChartJS -->
    <script src=";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/chart.js/Chart.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_d49950e1d59e0562e0c9536274afcc525a56dfe1b4a0360cc2e2288658f62eed->leave($__internal_d49950e1d59e0562e0c9536274afcc525a56dfe1b4a0360cc2e2288658f62eed_prof);

        
        $__internal_e18bf4ee28e4275f4fa0319f32fe028e06eda0deae8046e3d2f7362c3da8e0d3->leave($__internal_e18bf4ee28e4275f4fa0319f32fe028e06eda0deae8046e3d2f7362c3da8e0d3_prof);

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
        return array (  776 => 459,  771 => 457,  766 => 455,  761 => 453,  756 => 451,  751 => 449,  746 => 447,  741 => 445,  736 => 443,  731 => 441,  728 => 440,  719 => 439,  709 => 417,  700 => 416,  682 => 400,  678 => 399,  674 => 398,  670 => 397,  658 => 388,  654 => 387,  650 => 386,  646 => 385,  634 => 376,  630 => 375,  626 => 374,  622 => 373,  610 => 364,  606 => 363,  602 => 362,  598 => 361,  586 => 352,  582 => 351,  578 => 350,  574 => 349,  562 => 340,  558 => 339,  554 => 338,  550 => 337,  538 => 328,  534 => 327,  530 => 326,  526 => 325,  502 => 304,  494 => 298,  485 => 297,  447 => 268,  438 => 262,  298 => 125,  283 => 113,  268 => 101,  253 => 89,  237 => 76,  202 => 43,  193 => 42,  169 => 21,  163 => 18,  158 => 16,  153 => 14,  148 => 12,  143 => 10,  140 => 9,  131 => 8,  113 => 5,  100 => 461,  98 => 439,  75 => 418,  73 => 416,  63 => 408,  61 => 297,  58 => 296,  56 => 42,  45 => 35,  43 => 8,  37 => 5,  31 => 1,);
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
    <meta charset=\"UTF-8\" />
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
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
                                                    <img alt=\"User Image\" class=\"img-circle\" src={{ asset('dist/img/user2-160x160.jpg') }}  >
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
                                                    <img  class=\"img-circle\" alt=\"User Image\" src={{ asset('dist/img/user3-128x128.jpg') }}>
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
                                                    <img  class=\"img-circle\" alt=\"User Image\" src={{ asset('dist/img/user4-128x128.jpg') }}>
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
                                                    <img  class=\"img-circle\" alt=\"User Image\" src={{ asset('dist/img/user3-128x128.jpg') }}>
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
                                                    <img  class=\"img-circle\" alt=\"User Image\" src={{ asset('dist/img/user4-128x128.jpg') }}>
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
                                                <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
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
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
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
                                                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\"
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
                                                    <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\"
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
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\"
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
                                <img  class=\"user-image\" alt=\"User Image\" src={{ asset('dist/img/user2-160x160.jpg') }}>
                                <span class=\"hidden-xs\">Alexander Pierce</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header\">
                                    <img  class=\"img-circle\" alt=\"User Image\" src={{ asset('dist/img/user2-160x160.jpg') }}>

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
                            <a href=\"#\" ><i class=\"fa \"></i></a>
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
                        FixIt's  Admin !
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
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-users\"></i>
                            <span>Handymans Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-institution\"></i>
                            <span>Training cabinets Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-male\"></i>
                            <span>Sellers Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-warning\"></i>
                            <span>Claims Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-bullhorn\"></i>
                            <span>Customer requests Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-building\"></i>
                            <span>Store Managmnt</span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href={{ asset('pages/UI/general.html') }}><i class=\"fa fa-circle-o\"></i> View all </a></li>
                            <li><a href={{ asset('pages/UI/icons.html') }}><i class=\"fa fa-circle-o\"></i>Delete</a></li>
                            <li><a href={{ asset('pages/UI/buttons.html') }}><i class=\"fa fa-circle-o\"></i>Add new </a></li>
                            <li><a href={{ asset('pages/UI/sliders.html') }}><i class=\"fa fa-circle-o\"></i>Update</a></li>
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
            {% block container  %}
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
