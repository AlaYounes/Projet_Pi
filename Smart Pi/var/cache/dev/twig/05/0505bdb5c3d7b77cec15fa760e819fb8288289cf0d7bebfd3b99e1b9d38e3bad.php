<?php

/* ::base.html.twig */
class __TwigTemplate_4ff9da7f31a806170c92f2638a45392926aff8da70b199db233757b6f17b70c9 extends Twig_Template
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
        $__internal_5b7c4a15656755261775a0b1bfa9b1684f015459fb6f8d6e7b5bc7b688b677f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7c4a15656755261775a0b1bfa9b1684f015459fb6f8d6e7b5bc7b688b677f3->enter($__internal_5b7c4a15656755261775a0b1bfa9b1684f015459fb6f8d6e7b5bc7b688b677f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f89635be762c2337c90a4fa06162ee61f9ce2081b2fa6d5a5a4d5014e5b40ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89635be762c2337c90a4fa06162ee61f9ce2081b2fa6d5a5a4d5014e5b40ce7->enter($__internal_f89635be762c2337c90a4fa06162ee61f9ce2081b2fa6d5a5a4d5014e5b40ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        $this->displayBlock('stylesheat', $context, $blocks);
        // line 41
        echo "</head>
<body>
";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 98
        echo "


";
        // line 101
        $this->displayBlock('container', $context, $blocks);
        // line 106
        echo "

";
        // line 108
        $this->displayBlock('footer', $context, $blocks);
        // line 149
        $this->displayBlock('javascripts', $context, $blocks);
        // line 167
        echo "



";
        
        $__internal_5b7c4a15656755261775a0b1bfa9b1684f015459fb6f8d6e7b5bc7b688b677f3->leave($__internal_5b7c4a15656755261775a0b1bfa9b1684f015459fb6f8d6e7b5bc7b688b677f3_prof);

        
        $__internal_f89635be762c2337c90a4fa06162ee61f9ce2081b2fa6d5a5a4d5014e5b40ce7->leave($__internal_f89635be762c2337c90a4fa06162ee61f9ce2081b2fa6d5a5a4d5014e5b40ce7_prof);

    }

    // line 1
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_1e82741924d9eadce3f9c269c96d8c838521f2f558bb75d0578258af09fb8f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e82741924d9eadce3f9c269c96d8c838521f2f558bb75d0578258af09fb8f10->enter($__internal_1e82741924d9eadce3f9c269c96d8c838521f2f558bb75d0578258af09fb8f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_fe6a6ce3bcbefa3ef59ad035dd9114919b5f9b5c41b756e2bab829deb877a378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6a6ce3bcbefa3ef59ad035dd9114919b5f9b5c41b756e2bab829deb877a378->enter($__internal_fe6a6ce3bcbefa3ef59ad035dd9114919b5f9b5c41b756e2bab829deb877a378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 2
        echo "<!DOCTYPE html>
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

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel=\"icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-72x72.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-114x114.html"), "html", null, true);
        echo "\">

    <!-- ==============================================
    CSS
    =============================================== -->
    <!-- Style-->
    <link type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- ==============================================
    Feauture Detection
    =============================================== -->
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-custom.html"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js\">


    ";
        
        $__internal_fe6a6ce3bcbefa3ef59ad035dd9114919b5f9b5c41b756e2bab829deb877a378->leave($__internal_fe6a6ce3bcbefa3ef59ad035dd9114919b5f9b5c41b756e2bab829deb877a378_prof);

        
        $__internal_1e82741924d9eadce3f9c269c96d8c838521f2f558bb75d0578258af09fb8f10->leave($__internal_1e82741924d9eadce3f9c269c96d8c838521f2f558bb75d0578258af09fb8f10_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_974fe1307603430044d3f6e4fd3dc7523b90533be07dd4e829f5919a1599a373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974fe1307603430044d3f6e4fd3dc7523b90533be07dd4e829f5919a1599a373->enter($__internal_974fe1307603430044d3f6e4fd3dc7523b90533be07dd4e829f5919a1599a373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_aabd561610c3986d1f71334186c1c323b0ee9224a5b6154b3b86e6e6053fcce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabd561610c3986d1f71334186c1c323b0ee9224a5b6154b3b86e6e6053fcce3->enter($__internal_aabd561610c3986d1f71334186c1c323b0ee9224a5b6154b3b86e6e6053fcce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
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
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frontend_homepage");
        echo "\"><img alt=\"Image\"
                                                                                         src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\">The
                        Kafe</a>
                </div><!-- /.navbar-header -->
                <div class=\"navbar-left\">
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">GoHire</a></li>
                            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Work");
        echo "\">GoWork</a></li>
                            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Pricing");
        echo "\">Pricing</a></li>
                            <li><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_How");
        echo "\">How it works</a></li>
                        </ul>
                    </div>
                </div><!-- /.navbar-left -->
                <div class=\"navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li><i class=\"fa fa-user\"></i></li>
                        <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Login");
        echo "\">Sign In/ Register </a></li>

                        <li class=\"dropdown mega-avatar\">
                            <a class=\"dropdown-toggle\" aria-expanded=\"true\" href=\"#\" data-toggle=\"dropdown\">
                                <span class=\"avatar w-32\"><img width=\"25\" height=\"25\" class=\"img-resonsive img-circle\"
                                                               alt=\"...\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\"></span>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span>
\t\t\tAlex Grantte
\t\t   </span>
                            </a>
                            <div class=\"dropdown-menu w dropdown-menu-scale pull-right\">
                                <a class=\"dropdown-item\" href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\"><span>Dashboard</span></a>
                                <a class=\"dropdown-item\" href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><span>Profile</span></a>
                                <a class=\"dropdown-item\" href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\"><span>Settings</span></a>
                                <a class=\"dropdown-item\" href=\"#\">Sign out</a>
                            </div>
                        </li><!-- /navbar-item -->

                    </ul><!-- /.sign-in -->
                    <a class=\"kafe-btn kafe-btn-mint-small\" href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddJob");
        echo "\">Post a Job</a>
                </div><!-- /.nav-right -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
    </header>
";
        
        $__internal_aabd561610c3986d1f71334186c1c323b0ee9224a5b6154b3b86e6e6053fcce3->leave($__internal_aabd561610c3986d1f71334186c1c323b0ee9224a5b6154b3b86e6e6053fcce3_prof);

        
        $__internal_974fe1307603430044d3f6e4fd3dc7523b90533be07dd4e829f5919a1599a373->leave($__internal_974fe1307603430044d3f6e4fd3dc7523b90533be07dd4e829f5919a1599a373_prof);

    }

    // line 101
    public function block_container($context, array $blocks = array())
    {
        $__internal_4a2bb883c28599c8f622c9757fe7e17fba62231cd85085ce48e265f05a56f4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2bb883c28599c8f622c9757fe7e17fba62231cd85085ce48e265f05a56f4b1->enter($__internal_4a2bb883c28599c8f622c9757fe7e17fba62231cd85085ce48e265f05a56f4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_7a0a2d4e8c9041eb9395b4b89868832ee21f557be0e616143a30cf0a5eaf7ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0a2d4e8c9041eb9395b4b89868832ee21f557be0e616143a30cf0a5eaf7ed8->enter($__internal_7a0a2d4e8c9041eb9395b4b89868832ee21f557be0e616143a30cf0a5eaf7ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 102
        echo "


";
        
        $__internal_7a0a2d4e8c9041eb9395b4b89868832ee21f557be0e616143a30cf0a5eaf7ed8->leave($__internal_7a0a2d4e8c9041eb9395b4b89868832ee21f557be0e616143a30cf0a5eaf7ed8_prof);

        
        $__internal_4a2bb883c28599c8f622c9757fe7e17fba62231cd85085ce48e265f05a56f4b1->leave($__internal_4a2bb883c28599c8f622c9757fe7e17fba62231cd85085ce48e265f05a56f4b1_prof);

    }

    // line 108
    public function block_footer($context, array $blocks = array())
    {
        $__internal_841bf47bbea9a94303140e04a9e8b14e0bc71267673d3ec63ad95552fe1aab7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841bf47bbea9a94303140e04a9e8b14e0bc71267673d3ec63ad95552fe1aab7f->enter($__internal_841bf47bbea9a94303140e04a9e8b14e0bc71267673d3ec63ad95552fe1aab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_cb8a79a13d3a40f1b01671906b7c1659a230c748d6c93cd817ca602f5ebb0374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8a79a13d3a40f1b01671906b7c1659a230c748d6c93cd817ca602f5ebb0374->enter($__internal_cb8a79a13d3a40f1b01671906b7c1659a230c748d6c93cd817ca602f5ebb0374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 109
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
        
        $__internal_cb8a79a13d3a40f1b01671906b7c1659a230c748d6c93cd817ca602f5ebb0374->leave($__internal_cb8a79a13d3a40f1b01671906b7c1659a230c748d6c93cd817ca602f5ebb0374_prof);

        
        $__internal_841bf47bbea9a94303140e04a9e8b14e0bc71267673d3ec63ad95552fe1aab7f->leave($__internal_841bf47bbea9a94303140e04a9e8b14e0bc71267673d3ec63ad95552fe1aab7f_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de265eea8fb542f6d78b7e6fedef5895dee158c48137fb2042eb35986511f7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de265eea8fb542f6d78b7e6fedef5895dee158c48137fb2042eb35986511f7c9->enter($__internal_de265eea8fb542f6d78b7e6fedef5895dee158c48137fb2042eb35986511f7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a5b09e36cdde8d59d73f3ad460891a7dbad43ae0ba5a2ad75388e9f875fcacba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b09e36cdde8d59d73f3ad460891a7dbad43ae0ba5a2ad75388e9f875fcacba->enter($__internal_a5b09e36cdde8d59d73f3ad460891a7dbad43ae0ba5a2ad75388e9f875fcacba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        echo "    <!-- ==============================================
        Scripts
        =============================================== -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/kafe.js"), "html", null, true);
        echo "\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$(\"#example1\").dataTable();
        });
    </script>


";
        
        $__internal_a5b09e36cdde8d59d73f3ad460891a7dbad43ae0ba5a2ad75388e9f875fcacba->leave($__internal_a5b09e36cdde8d59d73f3ad460891a7dbad43ae0ba5a2ad75388e9f875fcacba_prof);

        
        $__internal_de265eea8fb542f6d78b7e6fedef5895dee158c48137fb2042eb35986511f7c9->leave($__internal_de265eea8fb542f6d78b7e6fedef5895dee158c48137fb2042eb35986511f7c9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  367 => 158,  363 => 157,  358 => 155,  354 => 154,  350 => 153,  345 => 150,  336 => 149,  287 => 109,  278 => 108,  265 => 102,  256 => 101,  240 => 92,  231 => 86,  227 => 85,  223 => 84,  213 => 77,  205 => 72,  195 => 65,  191 => 64,  187 => 63,  183 => 62,  174 => 56,  170 => 55,  157 => 44,  148 => 43,  133 => 36,  129 => 35,  122 => 31,  118 => 30,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  76 => 2,  67 => 1,  53 => 167,  51 => 149,  49 => 108,  45 => 106,  43 => 101,  38 => 98,  36 => 43,  32 => 41,  30 => 1,);
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
    <link href=\"{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- ==============================================
    Feauture Detection
    =============================================== -->
    <script src=\"{{ asset('js/modernizr-custom.html') }}\"></script>
    <script src=\"{{ asset('js/modernizr.custom.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js\">


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
                                <span class=\"avatar w-32\"><img width=\"25\" height=\"25\" class=\"img-resonsive img-circle\"
                                                               alt=\"...\" src=\"{{ asset('img/users/2.jpg') }}\"></span>
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
    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/kafe.js') }}\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}\"></script>
    <script>
        \$(function () {
            \$(\"#example1\").dataTable();
        });
    </script>


{% endblock %}




", "::base.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/base.html.twig");
    }
}
