<?php

/* base.html.twig */
class __TwigTemplate_838f18ba97785d1393ee73f775cb0e35ed43e310a98ccd47b5d419ded4fe4275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheat' => array($this, 'block_stylesheat'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e24ddc980d1270427c6c1418ad9d05c47a3add3b355d404ebf13cb9c7ce0d125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24ddc980d1270427c6c1418ad9d05c47a3add3b355d404ebf13cb9c7ce0d125->enter($__internal_e24ddc980d1270427c6c1418ad9d05c47a3add3b355d404ebf13cb9c7ce0d125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_519c8eb1b8572666e9e6bad8b509243af4b77c20cb9eef20ece75fb8ab8caaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519c8eb1b8572666e9e6bad8b509243af4b77c20cb9eef20ece75fb8ab8caaae->enter($__internal_519c8eb1b8572666e9e6bad8b509243af4b77c20cb9eef20ece75fb8ab8caaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('stylesheat', $context, $blocks);
        // line 50
        echo "</head>
<body>
";
        // line 52
        $this->displayBlock('header', $context, $blocks);
        // line 129
        echo "


";
        // line 132
        $this->displayBlock('container', $context, $blocks);
        // line 137
        echo "

";
        // line 139
        $this->displayBlock('footer', $context, $blocks);
        // line 180
        $this->displayBlock('javascripts', $context, $blocks);
        // line 223
        echo "



";
        
        $__internal_e24ddc980d1270427c6c1418ad9d05c47a3add3b355d404ebf13cb9c7ce0d125->leave($__internal_e24ddc980d1270427c6c1418ad9d05c47a3add3b355d404ebf13cb9c7ce0d125_prof);

        
        $__internal_519c8eb1b8572666e9e6bad8b509243af4b77c20cb9eef20ece75fb8ab8caaae->leave($__internal_519c8eb1b8572666e9e6bad8b509243af4b77c20cb9eef20ece75fb8ab8caaae_prof);

    }

    // line 1
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_6cb7e2262788b89758b307c40745c9ba23f8b5896e196344dccd851f266cbb5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb7e2262788b89758b307c40745c9ba23f8b5896e196344dccd851f266cbb5d->enter($__internal_6cb7e2262788b89758b307c40745c9ba23f8b5896e196344dccd851f266cbb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_c9ecf630afdf913ac422c79bfa2345181a544660ca640f1276bba5fddc863fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ecf630afdf913ac422c79bfa2345181a544660ca640f1276bba5fddc863fbc->enter($__internal_c9ecf630afdf913ac422c79bfa2345181a544660ca640f1276bba5fddc863fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 2
        echo "    <!DOCTYPE html>
<html>
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
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sgdatatables/js/pipeline.js"), "html", null, true);
        echo "\"></script>

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel=\"icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-72x72.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-114x114.html"), "html", null, true);
        echo "\">
    ";
        // line 27
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon0.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon0.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-72x720.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-114x1140.html"), "html", null, true);
        echo "\">


    <!-- ==============================================
    CSS
    =============================================== -->
    <!-- Style-->
    <link type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- ==============================================
    Feauture Detection
    =============================================== -->
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-custom.html"), "html", null, true);
        echo "\"></script>
    ";
        // line 46
        echo "    ";
        // line 47
        echo "

    ";
        
        $__internal_c9ecf630afdf913ac422c79bfa2345181a544660ca640f1276bba5fddc863fbc->leave($__internal_c9ecf630afdf913ac422c79bfa2345181a544660ca640f1276bba5fddc863fbc_prof);

        
        $__internal_6cb7e2262788b89758b307c40745c9ba23f8b5896e196344dccd851f266cbb5d->leave($__internal_6cb7e2262788b89758b307c40745c9ba23f8b5896e196344dccd851f266cbb5d_prof);

    }

    // line 52
    public function block_header($context, array $blocks = array())
    {
        $__internal_cbc07b57c57f8363d3ebe8e82e88963308b194caa195733ff7ebd371c7c16c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc07b57c57f8363d3ebe8e82e88963308b194caa195733ff7ebd371c7c16c26->enter($__internal_cbc07b57c57f8363d3ebe8e82e88963308b194caa195733ff7ebd371c7c16c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_bdcc929aaf9210fc996200ab963ac05d22a2f6f6e3603af5ebd6375141542751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcc929aaf9210fc996200ab963ac05d22a2f6f6e3603af5ebd6375141542751->enter($__internal_bdcc929aaf9210fc996200ab963ac05d22a2f6f6e3603af5ebd6375141542751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 53
        echo "    <header class=\"tr-header\">
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
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frontend_homepage");
        echo "\"><img alt=\"Image\"
                                                                                         src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\">The
                        Kafe</a>
                    ";
        // line 67
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 68
            echo "
                    ";
        }
        // line 70
        echo "                </div><!-- /.navbar-header -->
                <div class=\"navbar-left\">
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">GoHire</a></li>
                            <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Work");
        echo "\">GoWork</a></li>
                            ";
        // line 77
        echo "                            ";
        // line 78
        echo "                                ";
        // line 79
        echo "                            ";
        // line 80
        echo "                            ";
        // line 81
        echo "                                ";
        // line 82
        echo "                            ";
        // line 83
        echo "                                ";
        // line 84
        echo "                            ";
        // line 85
        echo "                                ";
        // line 86
        echo "                            ";
        // line 87
        echo "                            ";
        // line 88
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 89
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
            echo "\">Blog</a></li>
                            ";
        } else {
            // line 91
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_blog");
            echo "\">Blog</a></li>
                            ";
        }
        // line 93
        echo "                            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_How");
        echo "\">How it works</a></li>
                        </ul>
                    </div>
                </div><!-- /.navbar-left -->
                <div class=\"navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li><i class=\"fa fa-user\"></i></li>
                        <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Sign In/ Register </a></li>

                        <li class=\"dropdown mega-avatar\">

                            <a class=\"dropdown-toggle\" aria-expanded=\"true\" href=\"#\" data-toggle=\"dropdown\">
                                <span class=\"avatar w-32\"><img width=\"25\" height=\"25\" class=\"img-resonsive img-circle\"
                                                               alt=\"...\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\">
                                </span>

                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span>
\t\t\tAlex Grantte
\t\t   </span>
                            </a>
                            <div class=\"dropdown-menu w dropdown-menu-scale pull-right\">
                                <a class=\"dropdown-item\" href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\"><span>Dashboard</span></a>
                                <a class=\"dropdown-item\" href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><span>Profile</span></a>
                                <a class=\"dropdown-item\" href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\"><span>Settings</span></a>
                                <a class=\"dropdown-item\" href=\"#\">Sign out</a>
                            </div>
                        </li><!-- /navbar-item -->

                    </ul><!-- /.sign-in -->
                    <a class=\"kafe-btn kafe-btn-mint-small\" href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddJob");
        echo "\">Post a Job</a>
                </div><!-- /.nav-right -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
    </header>
";
        
        $__internal_bdcc929aaf9210fc996200ab963ac05d22a2f6f6e3603af5ebd6375141542751->leave($__internal_bdcc929aaf9210fc996200ab963ac05d22a2f6f6e3603af5ebd6375141542751_prof);

        
        $__internal_cbc07b57c57f8363d3ebe8e82e88963308b194caa195733ff7ebd371c7c16c26->leave($__internal_cbc07b57c57f8363d3ebe8e82e88963308b194caa195733ff7ebd371c7c16c26_prof);

    }

    // line 132
    public function block_container($context, array $blocks = array())
    {
        $__internal_337a1bbc395003e7a1823f58aea5fa2812571abbdeb82b6fb76da8ca70ff0d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337a1bbc395003e7a1823f58aea5fa2812571abbdeb82b6fb76da8ca70ff0d20->enter($__internal_337a1bbc395003e7a1823f58aea5fa2812571abbdeb82b6fb76da8ca70ff0d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_5196762c422200f7ca13594d7b2b7b28a97d89f1ee2395e22de14e1edb454b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5196762c422200f7ca13594d7b2b7b28a97d89f1ee2395e22de14e1edb454b7d->enter($__internal_5196762c422200f7ca13594d7b2b7b28a97d89f1ee2395e22de14e1edb454b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 133
        echo "


";
        
        $__internal_5196762c422200f7ca13594d7b2b7b28a97d89f1ee2395e22de14e1edb454b7d->leave($__internal_5196762c422200f7ca13594d7b2b7b28a97d89f1ee2395e22de14e1edb454b7d_prof);

        
        $__internal_337a1bbc395003e7a1823f58aea5fa2812571abbdeb82b6fb76da8ca70ff0d20->leave($__internal_337a1bbc395003e7a1823f58aea5fa2812571abbdeb82b6fb76da8ca70ff0d20_prof);

    }

    // line 139
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c8494f9ca5e67bc521f5c71a2fb0abd94db5b800e9a5fd7fd101ca299af2cc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8494f9ca5e67bc521f5c71a2fb0abd94db5b800e9a5fd7fd101ca299af2cc15->enter($__internal_c8494f9ca5e67bc521f5c71a2fb0abd94db5b800e9a5fd7fd101ca299af2cc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_16a96839449a8fdf1c9deb1a174c6b6f24898af0fbac4f46bc96c88d328ffa3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a96839449a8fdf1c9deb1a174c6b6f24898af0fbac4f46bc96c88d328ffa3e->enter($__internal_16a96839449a8fdf1c9deb1a174c6b6f24898af0fbac4f46bc96c88d328ffa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 140
        echo "<footer class=\"footerWhite\">

    <!-- COPY RIGHT -->
    <div class=\"clearfix copyRight\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-xs-12\">
                    <div class=\"copyRightWrapper\">
                        <div class=\"row\">

                            <div class=\"col-sm-5 col-sm-push-7 col-xs-12\">
                                <ul class=\"list-inline socialLink\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div><!-- /col-sm-5 -->

                            <div class=\"col-sm-7 col-sm-pull-5 col-xs-12\">
                                <div class=\"copyRightText\">
                                    <p>Copyright © 2018. All Rights Reserved</p>
                                </div>
                            </div><!-- /col-sm-7 -->

                        </div><!-- /row -->
                    </div><!-- /copyRightWrapper -->
                </div><!-- /col-xs-2 -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /copyRight -->

</footer>
<a id=\"scrollup\">Scroll</a>

</body>
</html>
";
        
        $__internal_16a96839449a8fdf1c9deb1a174c6b6f24898af0fbac4f46bc96c88d328ffa3e->leave($__internal_16a96839449a8fdf1c9deb1a174c6b6f24898af0fbac4f46bc96c88d328ffa3e_prof);

        
        $__internal_c8494f9ca5e67bc521f5c71a2fb0abd94db5b800e9a5fd7fd101ca299af2cc15->leave($__internal_c8494f9ca5e67bc521f5c71a2fb0abd94db5b800e9a5fd7fd101ca299af2cc15_prof);

    }

    // line 180
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43bd6f222167207d889c5ec1a6d25ba854be108666e4cd3c89fb9f05b8c8144e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43bd6f222167207d889c5ec1a6d25ba854be108666e4cd3c89fb9f05b8c8144e->enter($__internal_43bd6f222167207d889c5ec1a6d25ba854be108666e4cd3c89fb9f05b8c8144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e1816e45660d99a3786f5e933700bc08774f6d94c0481acd1e94f81a51f5a51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1816e45660d99a3786f5e933700bc08774f6d94c0481acd1e94f81a51f5a51c->enter($__internal_e1816e45660d99a3786f5e933700bc08774f6d94c0481acd1e94f81a51f5a51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 181
        echo "    <!-- ==============================================
        Scripts
        =============================================== -->
    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/k02/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap 3.3.6 JS -->
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/k02/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Waypoints JS -->
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Jquery Animate Numbers -->
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/k02/jquery.animateNumbers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Jquery Flexslider -->
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/k02/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Kafe Flexslider -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/k02/kafe.flexslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Jquery Appear -->
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/k02/jquery.appear.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Kafe JS -->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/kafe.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$(\"#example1\").dataTable();
        });
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment-with-locales.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js\"
            charset=\"UTF-8\"></script>
    <script src=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/fc-3.2.2/fh-3.1.2/r-2.1.0/datatables.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js\"></script>
    <script src=\"https://cdn.rawgit.com/noelboss/featherlight/1.7.1/release/featherlight.min.js\"></script>

    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sgdatatables/js/pipeline.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

";
        
        $__internal_e1816e45660d99a3786f5e933700bc08774f6d94c0481acd1e94f81a51f5a51c->leave($__internal_e1816e45660d99a3786f5e933700bc08774f6d94c0481acd1e94f81a51f5a51c_prof);

        
        $__internal_43bd6f222167207d889c5ec1a6d25ba854be108666e4cd3c89fb9f05b8c8144e->leave($__internal_43bd6f222167207d889c5ec1a6d25ba854be108666e4cd3c89fb9f05b8c8144e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  493 => 220,  489 => 219,  484 => 217,  466 => 202,  462 => 201,  457 => 199,  452 => 197,  447 => 195,  442 => 193,  437 => 191,  432 => 189,  427 => 187,  422 => 185,  416 => 181,  407 => 180,  358 => 140,  349 => 139,  336 => 133,  327 => 132,  311 => 123,  302 => 117,  298 => 116,  294 => 115,  282 => 106,  273 => 100,  262 => 93,  256 => 91,  250 => 89,  247 => 88,  245 => 87,  243 => 86,  241 => 85,  239 => 84,  237 => 83,  235 => 82,  233 => 81,  231 => 80,  229 => 79,  227 => 78,  225 => 77,  221 => 75,  217 => 74,  211 => 70,  207 => 68,  205 => 67,  200 => 65,  196 => 64,  183 => 53,  174 => 52,  162 => 47,  160 => 46,  156 => 44,  149 => 40,  144 => 38,  140 => 37,  130 => 30,  126 => 29,  122 => 28,  117 => 27,  113 => 25,  109 => 24,  105 => 23,  101 => 22,  93 => 17,  76 => 2,  67 => 1,  53 => 223,  51 => 180,  49 => 139,  45 => 137,  43 => 132,  38 => 129,  36 => 52,  32 => 50,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheat %}
    <!DOCTYPE html>
<html>
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
    <script src=\"{{ asset('bundles/sgdatatables/js/pipeline.js') }}\"></script>

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel=\"icon\" href=\"{{ asset('img/logo.jpg') }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('img/favicons/apple-touch-icon.html') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('img/favicons/apple-touch-icon-72x72.html') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('img/favicons/apple-touch-icon-114x114.html') }}\">
    {#BLOG FAVIQKLDQMLDQML DLMµQ%MLDµS%QDMµS QDSQ#}
    <link rel=\"shortcut icon\" href=\"{{ asset('img/favicons/apple-touch-icon0.html') }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('img/favicons/apple-touch-icon0.html') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('img/favicons/apple-touch-icon-72x720.html') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('img/favicons/apple-touch-icon-114x1140.html') }}\">


    <!-- ==============================================
    CSS
    =============================================== -->
    <!-- Style-->
    <link type=\"text/css\" href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\"/>
    <link type=\"text/css\" href=\"{{ asset('css/login.css') }}\" rel=\"stylesheet\"/>

    <link href=\"{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- ==============================================
    Feauture Detection
    =============================================== -->
    <script src=\"{{ asset('js/modernizr-custom.html') }}\"></script>
    {#<script src=\"{{ asset('js/modernizr-custom.js') }}\"></script>#}
    {#<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js\">#}


    {% endblock %}
</head>
<body>
{% block header %}
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
                    <a class=\"navbar-brand\" href=\"{{ path ('frontend_homepage') }}\"><img alt=\"Image\"
                                                                                         src=\"{{ asset('img/logo.jpg') }}\">The
                        Kafe</a>
                    {% if app.user !=null %}

                    {% endif %}
                </div><!-- /.navbar-header -->
                <div class=\"navbar-left\">
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"{{ path('template_Hire') }}\">GoHire</a></li>
                            <li><a href=\"{{ path('template_Work') }}\">GoWork</a></li>
                            {#<p>INFOS </p>#}
                            {#<ul>#}
                                {#\$id=: {{ app.user.username }}#}
                            {#</ul>#}
                            {#{% if is_granted('ROLE_ADMIN') %}#}
                                {#Administrator#}
                            {#{% elseif is_granted('ROLE_USER') %}#}
                                {#User#}
                            {#{% else %}#}
                                {#Anonymous#}
                            {#{% endif %}#}
                            {#{{ dump(app.user) }}#}
                            {% if is_granted('ROLE_ADMIN') %}
                            <li><a href=\"{{ path('article_index') }}\">Blog</a></li>
                            {% else %}
                            <li><a href=\"{{ path('afficher_blog') }}\">Blog</a></li>
                            {% endif %}
                            <li><a href=\"{{ path('template_How') }}\">How it works</a></li>
                        </ul>
                    </div>
                </div><!-- /.navbar-left -->
                <div class=\"navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li><i class=\"fa fa-user\"></i></li>
                        <li><a href=\"{{ path('fos_user_security_login') }}\">Sign In/ Register </a></li>

                        <li class=\"dropdown mega-avatar\">

                            <a class=\"dropdown-toggle\" aria-expanded=\"true\" href=\"#\" data-toggle=\"dropdown\">
                                <span class=\"avatar w-32\"><img width=\"25\" height=\"25\" class=\"img-resonsive img-circle\"
                                                               alt=\"...\" src=\"{{ asset('img/users/2.jpg') }}\">
                                </span>

                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span>
\t\t\tAlex Grantte
\t\t   </span>
                            </a>
                            <div class=\"dropdown-menu w dropdown-menu-scale pull-right\">
                                <a class=\"dropdown-item\" href=\"{{ path('template_Dashboard') }}\"><span>Dashboard</span></a>
                                <a class=\"dropdown-item\" href=\"{{ path('template_Profile') }}\"><span>Profile</span></a>
                                <a class=\"dropdown-item\" href=\"{{ path('template_EditProfile') }}\"><span>Settings</span></a>
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



{% block container %}



{% endblock %}


{% block footer %}
<footer class=\"footerWhite\">

    <!-- COPY RIGHT -->
    <div class=\"clearfix copyRight\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-xs-12\">
                    <div class=\"copyRightWrapper\">
                        <div class=\"row\">

                            <div class=\"col-sm-5 col-sm-push-7 col-xs-12\">
                                <ul class=\"list-inline socialLink\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div><!-- /col-sm-5 -->

                            <div class=\"col-sm-7 col-sm-pull-5 col-xs-12\">
                                <div class=\"copyRightText\">
                                    <p>Copyright © 2018. All Rights Reserved</p>
                                </div>
                            </div><!-- /col-sm-7 -->

                        </div><!-- /row -->
                    </div><!-- /copyRightWrapper -->
                </div><!-- /col-xs-2 -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /copyRight -->

</footer>
<a id=\"scrollup\">Scroll</a>

</body>
</html>
{% endblock %}
{% block javascripts %}
    <!-- ==============================================
        Scripts
        =============================================== -->
    <!-- jQuery 2.1.4 -->
    <script src=\"{{ asset('js/k02/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <!-- Bootstrap 3.3.6 JS -->
    <script src=\"{{ asset('js/k02/jQuery-2.1.4.min.js') }}\" type=\"text/javascript\"></script>
    <!-- Waypoints JS -->
    <script src=\"{{ asset('js/waypoints.min.js') }}\" type=\"text/javascript\"></script>
    <!-- Jquery Animate Numbers -->
    <script src=\"{{ asset('js/k02/jquery.animateNumbers.js') }}\" type=\"text/javascript\"></script>
    <!-- Jquery Flexslider -->
    <script src=\"{{ asset('js/k02/jquery.flexslider-min.js') }}\" type=\"text/javascript\"></script>
    <!-- Kafe Flexslider -->
    <script src=\"{{ asset('js/k02/kafe.flexslider.js') }}\" type=\"text/javascript\"></script>
    <!-- Jquery Appear -->
    <script src=\"{{ asset('js/k02/jquery.appear.js') }}\" type=\"text/javascript\"></script>
    <!-- Kafe JS -->
    <script src=\"{{ asset('js/kafe.js') }}\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}\"></script>
    <script>
        \$(function () {
            \$(\"#example1\").dataTable();
        });
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment-with-locales.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js\"
            charset=\"UTF-8\"></script>
    <script src=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/fc-3.2.2/fh-3.1.2/r-2.1.0/datatables.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js\"></script>
    <script src=\"https://cdn.rawgit.com/noelboss/featherlight/1.7.1/release/featherlight.min.js\"></script>

    <script src=\"{{ asset('bundles/sgdatatables/js/pipeline.js') }}\"></script>

    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>

{% endblock %}




", "base.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\base.html.twig");
    }
}
