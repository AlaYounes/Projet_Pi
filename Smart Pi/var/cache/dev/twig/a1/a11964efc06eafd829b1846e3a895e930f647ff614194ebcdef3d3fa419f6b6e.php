<?php

/* @Fix/Frontend/Default/Login.html.twig */
class __TwigTemplate_dffe891714e19c32c6bf68a3d555f88ab4ec7f991bfe964995790d3ec73a7cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Login.html.twig", 1);
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
        $__internal_e3127ecd0364bf627a31a2432c8d8681b75b7285c77feaa086e559151da1c559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3127ecd0364bf627a31a2432c8d8681b75b7285c77feaa086e559151da1c559->enter($__internal_e3127ecd0364bf627a31a2432c8d8681b75b7285c77feaa086e559151da1c559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Login.html.twig"));

        $__internal_10b2736964431cdd236d1d2f8867197c567a1ab816823bd1095830482a656b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b2736964431cdd236d1d2f8867197c567a1ab816823bd1095830482a656b8f->enter($__internal_10b2736964431cdd236d1d2f8867197c567a1ab816823bd1095830482a656b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3127ecd0364bf627a31a2432c8d8681b75b7285c77feaa086e559151da1c559->leave($__internal_e3127ecd0364bf627a31a2432c8d8681b75b7285c77feaa086e559151da1c559_prof);

        
        $__internal_10b2736964431cdd236d1d2f8867197c567a1ab816823bd1095830482a656b8f->leave($__internal_10b2736964431cdd236d1d2f8867197c567a1ab816823bd1095830482a656b8f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_2a2b8e4d50ddd723c58eadde064058a6e90c677e17c15dcbb858c938e903c964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2b8e4d50ddd723c58eadde064058a6e90c677e17c15dcbb858c938e903c964->enter($__internal_2a2b8e4d50ddd723c58eadde064058a6e90c677e17c15dcbb858c938e903c964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_07908e275ddc92d81704412bed71e7dc53dc6d24ab8c54d97071d4d6bda76ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07908e275ddc92d81704412bed71e7dc53dc6d24ab8c54d97071d4d6bda76ae7->enter($__internal_07908e275ddc92d81704412bed71e7dc53dc6d24ab8c54d97071d4d6bda76ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_07908e275ddc92d81704412bed71e7dc53dc6d24ab8c54d97071d4d6bda76ae7->leave($__internal_07908e275ddc92d81704412bed71e7dc53dc6d24ab8c54d97071d4d6bda76ae7_prof);

        
        $__internal_2a2b8e4d50ddd723c58eadde064058a6e90c677e17c15dcbb858c938e903c964->leave($__internal_2a2b8e4d50ddd723c58eadde064058a6e90c677e17c15dcbb858c938e903c964_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_45199e6f3acc7f8630cd18e7fb6c8d4bdfbec2c9a3c854e1e640071d2e204d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45199e6f3acc7f8630cd18e7fb6c8d4bdfbec2c9a3c854e1e640071d2e204d59->enter($__internal_45199e6f3acc7f8630cd18e7fb6c8d4bdfbec2c9a3c854e1e640071d2e204d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_687e4b5fd3a225199f701e98d3328de8450966a219c4cd24999b4167ce9f3263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687e4b5fd3a225199f701e98d3328de8450966a219c4cd24999b4167ce9f3263->enter($__internal_687e4b5fd3a225199f701e98d3328de8450966a219c4cd24999b4167ce9f3263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Register");
        echo "\" class=\"kafe-btn btn-facebook full-width\">
                                <i class=\"fa fa-facebook pull-left\"></i> Sign in with Facebook</a>
                            <div class=\"margin-space\"></div>
                            <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Register");
        echo "\" class=\"kafe-btn btn-twitter full-width\">
                                <i class=\"fa fa-twitter pull-left\"></i> Sign in with Twitter</a>
                            <div class=\"margin-space\"></div>
                            <a href=\"";
        // line 66
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
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
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
        
        $__internal_687e4b5fd3a225199f701e98d3328de8450966a219c4cd24999b4167ce9f3263->leave($__internal_687e4b5fd3a225199f701e98d3328de8450966a219c4cd24999b4167ce9f3263_prof);

        
        $__internal_45199e6f3acc7f8630cd18e7fb6c8d4bdfbec2c9a3c854e1e640071d2e204d59->leave($__internal_45199e6f3acc7f8630cd18e7fb6c8d4bdfbec2c9a3c854e1e640071d2e204d59_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 98,  163 => 66,  157 => 63,  151 => 60,  118 => 30,  110 => 25,  106 => 24,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                                    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"kafe-btn kafe-btn-danger full-width\">Register</a>
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



", "@Fix/Frontend/Default/Login.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Login.html.twig");
    }
}
