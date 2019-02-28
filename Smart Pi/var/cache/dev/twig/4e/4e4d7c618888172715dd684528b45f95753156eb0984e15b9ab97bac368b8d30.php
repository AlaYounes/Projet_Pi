<?php

/* FixBundle:Frontend/Default:Login.html.twig */
class __TwigTemplate_126967f54bab7328c6c7a30e0cbdf26fa14c45026b62c084286012b02f1ce920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:Login.html.twig", 1);
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
        $__internal_51d1b99dcf689217b625943967693b96aeb3d86ba19544c05e25163203d8b475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d1b99dcf689217b625943967693b96aeb3d86ba19544c05e25163203d8b475->enter($__internal_51d1b99dcf689217b625943967693b96aeb3d86ba19544c05e25163203d8b475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Login.html.twig"));

        $__internal_f0c7babaf07670ab614e308b9ed04f2e0a9ed51b1eb503ce5ebc7018a3348716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c7babaf07670ab614e308b9ed04f2e0a9ed51b1eb503ce5ebc7018a3348716->enter($__internal_f0c7babaf07670ab614e308b9ed04f2e0a9ed51b1eb503ce5ebc7018a3348716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d1b99dcf689217b625943967693b96aeb3d86ba19544c05e25163203d8b475->leave($__internal_51d1b99dcf689217b625943967693b96aeb3d86ba19544c05e25163203d8b475_prof);

        
        $__internal_f0c7babaf07670ab614e308b9ed04f2e0a9ed51b1eb503ce5ebc7018a3348716->leave($__internal_f0c7babaf07670ab614e308b9ed04f2e0a9ed51b1eb503ce5ebc7018a3348716_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_e9b892582b2ff10e72b723a4f63ae0f5b3ac4aa5f7827f475b53449d89a94e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b892582b2ff10e72b723a4f63ae0f5b3ac4aa5f7827f475b53449d89a94e64->enter($__internal_e9b892582b2ff10e72b723a4f63ae0f5b3ac4aa5f7827f475b53449d89a94e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_cdc0c084f83733baa0bb224746e8a0ea165da98cd536e3852322e3dc70496351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc0c084f83733baa0bb224746e8a0ea165da98cd536e3852322e3dc70496351->enter($__internal_cdc0c084f83733baa0bb224746e8a0ea165da98cd536e3852322e3dc70496351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_cdc0c084f83733baa0bb224746e8a0ea165da98cd536e3852322e3dc70496351->leave($__internal_cdc0c084f83733baa0bb224746e8a0ea165da98cd536e3852322e3dc70496351_prof);

        
        $__internal_e9b892582b2ff10e72b723a4f63ae0f5b3ac4aa5f7827f475b53449d89a94e64->leave($__internal_e9b892582b2ff10e72b723a4f63ae0f5b3ac4aa5f7827f475b53449d89a94e64_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_39bcaa7975215af246f414519def864a88f3f53ca3e0be42bc5592f1413692bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39bcaa7975215af246f414519def864a88f3f53ca3e0be42bc5592f1413692bf->enter($__internal_39bcaa7975215af246f414519def864a88f3f53ca3e0be42bc5592f1413692bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_68dc6a2ed80173e3be0e7db6d180191f8143d47cae4db999f6c834ac1ec29e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dc6a2ed80173e3be0e7db6d180191f8143d47cae4db999f6c834ac1ec29e42->enter($__internal_68dc6a2ed80173e3be0e7db6d180191f8143d47cae4db999f6c834ac1ec29e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "

      <head>



          <!-- ==============================================
          Favicons
          =============================================== -->
          <link rel=\"icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\">
          <link rel=\"apple-touch-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon.html"), "html", null, true);
        echo "\">
          <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-72x72.html"), "html", null, true);
        echo "\">
          <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicons/apple-touch-icon-114x114.html"), "html", null, true);
        echo "\">

          <!-- ==============================================
          CSS
          =============================================== -->
          <!-- Style-->
          <link type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
          <link type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

          <!-- ==============================================
          Feauture Detection
          =============================================== -->
          <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-custom.html"), "html", null, true);
        echo "\"></script>

          <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
          <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
          <![endif]-->

      </head>
      <body>
      <header class=\"header-login top-page\">
    <div class=\"container\">
        <div class=\"content\">
            <div class=\"row\">
                <h1 class=\"revealOnScroll\" data-animation=\"fadeInDown\"> The Kafe</h1>
            </div><!-- /.row -->
        </div><!-- /.content -->
    </div><!-- /.container -->
</header><!-- /header -->


<section class=\"banner-login\">
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"main main-signup col-lg-12\">
                <div class=\"col-lg-6 col-lg-offset-3 text-center\">


                    <div class=\"form-sign\">
                        <form method=\"post\">
                            <div class=\"form-head\">
                                <h3>Login</h3>
                            </div><!-- /.form-head -->
                            <div class=\"margin-space\"></div>
                            <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Register");
        echo "\" class=\"kafe-btn btn-facebook full-width\">
                                <i class=\"fa fa-facebook pull-left\"></i> Sign in with Facebook</a>
                            <div class=\"margin-space\"></div>
                            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Register");
        echo "\" class=\"kafe-btn btn-twitter full-width\">
                                <i class=\"fa fa-twitter pull-left\"></i> Sign in with Twitter</a>
                            <div class=\"margin-space\"></div>
                            <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Register");
        echo "\" class=\"kafe-btn btn-google-plus full-width\">
                                <i class=\"fa fa-google-plus pull-left\"></i> Sign in with Google Plus</a>
                            <div class=\"margin-space\"></div>
                            <div class=\"form-body\">

                                <div class=\"form-row\">
                                    <div class=\"form-controls\">
                                        <input name=\"email\" placeholder=\"Email\" class=\"field\" type=\"text\">
                                    </div><!-- /.form-controls -->
                                </div><!-- /.form-row -->

                                <div class=\"form-row\">
                                    <div class=\"form-controls\">
                                        <input name=\"password\" placeholder=\"Password\" class=\"field\" type=\"password\">
                                    </div><!-- /.form-controls -->
                                </div><!-- /.form-row -->

                                <div class=\"form-row\">
                                    <div class=\"material-switch pull-left\">
                                        <input id=\"someSwitchOptionSuccess\" name=\"remember\" type=\"checkbox\"/>
                                        <label for=\"someSwitchOptionSuccess\" class=\"label-success\"></label>
                                        <span>Remember Me</span>
                                    </div>
                                </div><!-- /.form-row -->

                            </div><!-- /.form-body -->

                            <div class=\"form-foot\">
                                <div class=\"form-actions\">
                                    <input type=\"hidden\" name=\"token\" value=\"<?php echo Token::generate(); ?>\" />
                                    <input value=\"Login\" class=\"kafe-btn kafe-btn-default full-width\" type=\"submit\">
                                    <div class=\"margin-space\"></div>
                                    <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Register");
        echo "\" class=\"kafe-btn kafe-btn-danger full-width\">Register</a>
                                </div><!-- /.form-actions -->
                                <div class=\"form-head\">
                                    <a href=\"#\" class=\"more-link\">Forgot Password?</a>
                                </div>
                            </div><!-- /.form-foot -->
                        </form>

                    </div><!-- /.form-sign -->
                </div><!-- /.col-lg-6 -->
            </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /section -->



</body>









";
        
        $__internal_68dc6a2ed80173e3be0e7db6d180191f8143d47cae4db999f6c834ac1ec29e42->leave($__internal_68dc6a2ed80173e3be0e7db6d180191f8143d47cae4db999f6c834ac1ec29e42_prof);

        
        $__internal_39bcaa7975215af246f414519def864a88f3f53ca3e0be42bc5592f1413692bf->leave($__internal_39bcaa7975215af246f414519def864a88f3f53ca3e0be42bc5592f1413692bf_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 104,  169 => 72,  163 => 69,  157 => 66,  118 => 30,  110 => 25,  106 => 24,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base.html.twig' %}
{% block header %}
    {{ parent() }}
{% endblock %}
  {% block container%}
      {{ parent() }}

      <head>



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
          <link type=\"text/css\" href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
          <link type=\"text/css\" href=\"{{ asset('css/login.css') }}\" rel=\"stylesheet\" />

          <!-- ==============================================
          Feauture Detection
          =============================================== -->
          <script src=\"{{ asset('js/modernizr-custom.html') }}\"></script>

          <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
          <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
          <![endif]-->

      </head>
      <body>
      <header class=\"header-login top-page\">
    <div class=\"container\">
        <div class=\"content\">
            <div class=\"row\">
                <h1 class=\"revealOnScroll\" data-animation=\"fadeInDown\"> The Kafe</h1>
            </div><!-- /.row -->
        </div><!-- /.content -->
    </div><!-- /.container -->
</header><!-- /header -->


<section class=\"banner-login\">
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"main main-signup col-lg-12\">
                <div class=\"col-lg-6 col-lg-offset-3 text-center\">


                    <div class=\"form-sign\">
                        <form method=\"post\">
                            <div class=\"form-head\">
                                <h3>Login</h3>
                            </div><!-- /.form-head -->
                            <div class=\"margin-space\"></div>
                            <a href=\"{{ path('template_Register') }}\" class=\"kafe-btn btn-facebook full-width\">
                                <i class=\"fa fa-facebook pull-left\"></i> Sign in with Facebook</a>
                            <div class=\"margin-space\"></div>
                            <a href=\"{{ path('template_Register') }}\" class=\"kafe-btn btn-twitter full-width\">
                                <i class=\"fa fa-twitter pull-left\"></i> Sign in with Twitter</a>
                            <div class=\"margin-space\"></div>
                            <a href=\"{{ path('template_Register') }}\" class=\"kafe-btn btn-google-plus full-width\">
                                <i class=\"fa fa-google-plus pull-left\"></i> Sign in with Google Plus</a>
                            <div class=\"margin-space\"></div>
                            <div class=\"form-body\">

                                <div class=\"form-row\">
                                    <div class=\"form-controls\">
                                        <input name=\"email\" placeholder=\"Email\" class=\"field\" type=\"text\">
                                    </div><!-- /.form-controls -->
                                </div><!-- /.form-row -->

                                <div class=\"form-row\">
                                    <div class=\"form-controls\">
                                        <input name=\"password\" placeholder=\"Password\" class=\"field\" type=\"password\">
                                    </div><!-- /.form-controls -->
                                </div><!-- /.form-row -->

                                <div class=\"form-row\">
                                    <div class=\"material-switch pull-left\">
                                        <input id=\"someSwitchOptionSuccess\" name=\"remember\" type=\"checkbox\"/>
                                        <label for=\"someSwitchOptionSuccess\" class=\"label-success\"></label>
                                        <span>Remember Me</span>
                                    </div>
                                </div><!-- /.form-row -->

                            </div><!-- /.form-body -->

                            <div class=\"form-foot\">
                                <div class=\"form-actions\">
                                    <input type=\"hidden\" name=\"token\" value=\"<?php echo Token::generate(); ?>\" />
                                    <input value=\"Login\" class=\"kafe-btn kafe-btn-default full-width\" type=\"submit\">
                                    <div class=\"margin-space\"></div>
                                    <a href=\"{{ path('template_Register') }}\" class=\"kafe-btn kafe-btn-danger full-width\">Register</a>
                                </div><!-- /.form-actions -->
                                <div class=\"form-head\">
                                    <a href=\"#\" class=\"more-link\">Forgot Password?</a>
                                </div>
                            </div><!-- /.form-foot -->
                        </form>

                    </div><!-- /.form-sign -->
                </div><!-- /.col-lg-6 -->
            </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /section -->



</body>









{% endblock %}



", "FixBundle:Frontend/Default:Login.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/Login.html.twig");
    }
}
