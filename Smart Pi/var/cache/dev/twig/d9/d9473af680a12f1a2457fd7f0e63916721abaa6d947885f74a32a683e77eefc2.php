<?php

/* base.html.twig */
class __TwigTemplate_e5c542f96cde465b11ae95fd474e0d4d104b69e74454778f33018b3e2b561848 extends Twig_Template
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
        $__internal_9712bc131dbf1573870febce5bb9d5e144fe40913b5fb5fd10cdc3fee85adc0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9712bc131dbf1573870febce5bb9d5e144fe40913b5fb5fd10cdc3fee85adc0f->enter($__internal_9712bc131dbf1573870febce5bb9d5e144fe40913b5fb5fd10cdc3fee85adc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a2b2a424b73f737a487fd1cceaecd54285e58c391cd01cc6e2c6c99eff1801fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b2a424b73f737a487fd1cceaecd54285e58c391cd01cc6e2c6c99eff1801fe->enter($__internal_a2b2a424b73f737a487fd1cceaecd54285e58c391cd01cc6e2c6c99eff1801fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('stylesheat', $context, $blocks);
        // line 43
        echo "</head>
<body>
";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 106
        echo "


";
        // line 109
        $this->displayBlock('container', $context, $blocks);
        // line 114
        echo "

";
        // line 116
        $this->displayBlock('footer', $context, $blocks);
        // line 157
        $this->displayBlock('javascripts', $context, $blocks);
        // line 175
        echo "



";
        
        $__internal_9712bc131dbf1573870febce5bb9d5e144fe40913b5fb5fd10cdc3fee85adc0f->leave($__internal_9712bc131dbf1573870febce5bb9d5e144fe40913b5fb5fd10cdc3fee85adc0f_prof);

        
        $__internal_a2b2a424b73f737a487fd1cceaecd54285e58c391cd01cc6e2c6c99eff1801fe->leave($__internal_a2b2a424b73f737a487fd1cceaecd54285e58c391cd01cc6e2c6c99eff1801fe_prof);

    }

    // line 1
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_26efc174025337440b10518f184b0fd37735a1c592d91308f0d1aed9cbaf334d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26efc174025337440b10518f184b0fd37735a1c592d91308f0d1aed9cbaf334d->enter($__internal_26efc174025337440b10518f184b0fd37735a1c592d91308f0d1aed9cbaf334d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_61ffce3a2aa6033b6cc4850c6dd48a9313700452da95da8180165fdba1711cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ffce3a2aa6033b6cc4850c6dd48a9313700452da95da8180165fdba1711cbc->enter($__internal_61ffce3a2aa6033b6cc4850c6dd48a9313700452da95da8180165fdba1711cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

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
    <link type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- ==============================================
    Feauture Detection
    =============================================== -->
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-custom.html"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js\">


    ";
        
        $__internal_61ffce3a2aa6033b6cc4850c6dd48a9313700452da95da8180165fdba1711cbc->leave($__internal_61ffce3a2aa6033b6cc4850c6dd48a9313700452da95da8180165fdba1711cbc_prof);

        
        $__internal_26efc174025337440b10518f184b0fd37735a1c592d91308f0d1aed9cbaf334d->leave($__internal_26efc174025337440b10518f184b0fd37735a1c592d91308f0d1aed9cbaf334d_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_06f6a50da28c1e238a26a4971427f694300b9c4383f19177978f65572874e2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f6a50da28c1e238a26a4971427f694300b9c4383f19177978f65572874e2df->enter($__internal_06f6a50da28c1e238a26a4971427f694300b9c4383f19177978f65572874e2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d9b2fc7b0bc278ea5ea3b4c843be81f8c1eb5b534cd83c386d7e46961dc2dc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b2fc7b0bc278ea5ea3b4c843be81f8c1eb5b534cd83c386d7e46961dc2dc65->enter($__internal_d9b2fc7b0bc278ea5ea3b4c843be81f8c1eb5b534cd83c386d7e46961dc2dc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
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
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frontend_homepage");
        echo "\"><img alt=\"Image\"
                                                                                         src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\">The
                        Kafe</a>
                    ";
        // line 60
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 61
            echo "
                    ";
        }
        // line 63
        echo "                </div><!-- /.navbar-header -->
                <div class=\"navbar-left\">
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">GoHire</a></li>
                            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Work");
        echo "\">GoWork</a></li>
                            <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Blog</a></li>
                            <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_How");
        echo "\">How it works</a></li>
                        </ul>
                    </div>
                </div><!-- /.navbar-left -->
                <div class=\"navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li><i class=\"fa fa-user\"></i></li>
                        <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Sign In/ Register </a></li>

                        <li class=\"dropdown mega-avatar\">

                            <a class=\"dropdown-toggle\" aria-expanded=\"true\" href=\"#\" data-toggle=\"dropdown\">
                                <span class=\"avatar w-32\"><img width=\"25\" height=\"25\" class=\"img-resonsive img-circle\"
                                                               alt=\"...\" src=\"";
        // line 83
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
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\"><span>Dashboard</span></a>
                                <a class=\"dropdown-item\" href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><span>Profile</span></a>
                                <a class=\"dropdown-item\" href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\"><span>Settings</span></a>
                                <a class=\"dropdown-item\" href=\"#\">Sign out</a>
                            </div>
                        </li><!-- /navbar-item -->

                    </ul><!-- /.sign-in -->
                    <a class=\"kafe-btn kafe-btn-mint-small\" href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddJob");
        echo "\">Post a Job</a>
                </div><!-- /.nav-right -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
    </header>
";
        
        $__internal_d9b2fc7b0bc278ea5ea3b4c843be81f8c1eb5b534cd83c386d7e46961dc2dc65->leave($__internal_d9b2fc7b0bc278ea5ea3b4c843be81f8c1eb5b534cd83c386d7e46961dc2dc65_prof);

        
        $__internal_06f6a50da28c1e238a26a4971427f694300b9c4383f19177978f65572874e2df->leave($__internal_06f6a50da28c1e238a26a4971427f694300b9c4383f19177978f65572874e2df_prof);

    }

    // line 109
    public function block_container($context, array $blocks = array())
    {
        $__internal_6aebc9cddaaba9ef283aa5032557a24d8728daf19f647fa420015de7dfb7a3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aebc9cddaaba9ef283aa5032557a24d8728daf19f647fa420015de7dfb7a3d3->enter($__internal_6aebc9cddaaba9ef283aa5032557a24d8728daf19f647fa420015de7dfb7a3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_8c2cf16bd0240702f73b535f720606bb6e8f799807dab8745dce3cba41cad562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2cf16bd0240702f73b535f720606bb6e8f799807dab8745dce3cba41cad562->enter($__internal_8c2cf16bd0240702f73b535f720606bb6e8f799807dab8745dce3cba41cad562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 110
        echo "


";
        
        $__internal_8c2cf16bd0240702f73b535f720606bb6e8f799807dab8745dce3cba41cad562->leave($__internal_8c2cf16bd0240702f73b535f720606bb6e8f799807dab8745dce3cba41cad562_prof);

        
        $__internal_6aebc9cddaaba9ef283aa5032557a24d8728daf19f647fa420015de7dfb7a3d3->leave($__internal_6aebc9cddaaba9ef283aa5032557a24d8728daf19f647fa420015de7dfb7a3d3_prof);

    }

    // line 116
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5f403710a0a315982d1b17dd7658ca92e34c3def9518388643093b61fb6ba633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f403710a0a315982d1b17dd7658ca92e34c3def9518388643093b61fb6ba633->enter($__internal_5f403710a0a315982d1b17dd7658ca92e34c3def9518388643093b61fb6ba633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_af35c3dec33cca1406fa13e0a6673f98ac10ff60b548941e31cf0bce4e773c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af35c3dec33cca1406fa13e0a6673f98ac10ff60b548941e31cf0bce4e773c7e->enter($__internal_af35c3dec33cca1406fa13e0a6673f98ac10ff60b548941e31cf0bce4e773c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 117
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
        
        $__internal_af35c3dec33cca1406fa13e0a6673f98ac10ff60b548941e31cf0bce4e773c7e->leave($__internal_af35c3dec33cca1406fa13e0a6673f98ac10ff60b548941e31cf0bce4e773c7e_prof);

        
        $__internal_5f403710a0a315982d1b17dd7658ca92e34c3def9518388643093b61fb6ba633->leave($__internal_5f403710a0a315982d1b17dd7658ca92e34c3def9518388643093b61fb6ba633_prof);

    }

    // line 157
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c053b5f2d8063636d4043d6a714c2d41044e7cd62c1260f9e010d757d9b348aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c053b5f2d8063636d4043d6a714c2d41044e7cd62c1260f9e010d757d9b348aa->enter($__internal_c053b5f2d8063636d4043d6a714c2d41044e7cd62c1260f9e010d757d9b348aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_111e81813b976a516fe9e75ef914665cd6161dd8e8c069319f372172807b93ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111e81813b976a516fe9e75ef914665cd6161dd8e8c069319f372172807b93ee->enter($__internal_111e81813b976a516fe9e75ef914665cd6161dd8e8c069319f372172807b93ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 158
        echo "    <!-- ==============================================
        Scripts
        =============================================== -->
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/kafe.js"), "html", null, true);
        echo "\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$(\"#example1\").dataTable();
        });
    </script>


";
        
        $__internal_111e81813b976a516fe9e75ef914665cd6161dd8e8c069319f372172807b93ee->leave($__internal_111e81813b976a516fe9e75ef914665cd6161dd8e8c069319f372172807b93ee_prof);

        
        $__internal_c053b5f2d8063636d4043d6a714c2d41044e7cd62c1260f9e010d757d9b348aa->leave($__internal_c053b5f2d8063636d4043d6a714c2d41044e7cd62c1260f9e010d757d9b348aa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  383 => 166,  379 => 165,  374 => 163,  370 => 162,  366 => 161,  361 => 158,  352 => 157,  303 => 117,  294 => 116,  281 => 110,  272 => 109,  256 => 100,  247 => 94,  243 => 93,  239 => 92,  227 => 83,  218 => 77,  208 => 70,  204 => 69,  200 => 68,  196 => 67,  190 => 63,  186 => 61,  184 => 60,  179 => 58,  175 => 57,  162 => 46,  153 => 45,  138 => 38,  134 => 37,  127 => 33,  122 => 31,  118 => 30,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  76 => 2,  67 => 1,  53 => 175,  51 => 157,  49 => 116,  45 => 114,  43 => 109,  38 => 106,  36 => 45,  32 => 43,  30 => 1,);
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
    <link type=\"text/css\" href=\"{{ asset('css/login.css') }}\" rel=\"stylesheet\"/>

    <link href=\"{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
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
                    {% if app.user !=null %}

                    {% endif %}
                </div><!-- /.navbar-header -->
                <div class=\"navbar-left\">
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"{{ path('template_Hire') }}\">GoHire</a></li>
                            <li><a href=\"{{ path('template_Work') }}\">GoWork</a></li>
                            <li><a href=\"{{ path('article_index') }}\">Blog</a></li>
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




", "base.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\base.html.twig");
    }
}
