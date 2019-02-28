<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b32857dbd22bed52ca8e56619392ca6d699bd9522e5e632d2a89ecf7910c6368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1f654ce3ccfcdd8355762c919bbca8bd45e72cbbffab322fccac2dcb0cd1a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f654ce3ccfcdd8355762c919bbca8bd45e72cbbffab322fccac2dcb0cd1a3f->enter($__internal_e1f654ce3ccfcdd8355762c919bbca8bd45e72cbbffab322fccac2dcb0cd1a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d133af4c70948a77ee9769c3e22160ca703c397bfb32b03a7347900afd6855cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d133af4c70948a77ee9769c3e22160ca703c397bfb32b03a7347900afd6855cd->enter($__internal_d133af4c70948a77ee9769c3e22160ca703c397bfb32b03a7347900afd6855cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e1f654ce3ccfcdd8355762c919bbca8bd45e72cbbffab322fccac2dcb0cd1a3f->leave($__internal_e1f654ce3ccfcdd8355762c919bbca8bd45e72cbbffab322fccac2dcb0cd1a3f_prof);

        
        $__internal_d133af4c70948a77ee9769c3e22160ca703c397bfb32b03a7347900afd6855cd->leave($__internal_d133af4c70948a77ee9769c3e22160ca703c397bfb32b03a7347900afd6855cd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea27e1cbe36438c8e9a2d83e80d9ee99ce361b3032b58b924e554b05f99a972b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea27e1cbe36438c8e9a2d83e80d9ee99ce361b3032b58b924e554b05f99a972b->enter($__internal_ea27e1cbe36438c8e9a2d83e80d9ee99ce361b3032b58b924e554b05f99a972b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_176863e70a3db2055dc48cfa0fa3cbee2f51dd2b81300aaa001f3de333bc03f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176863e70a3db2055dc48cfa0fa3cbee2f51dd2b81300aaa001f3de333bc03f0->enter($__internal_176863e70a3db2055dc48cfa0fa3cbee2f51dd2b81300aaa001f3de333bc03f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_176863e70a3db2055dc48cfa0fa3cbee2f51dd2b81300aaa001f3de333bc03f0->leave($__internal_176863e70a3db2055dc48cfa0fa3cbee2f51dd2b81300aaa001f3de333bc03f0_prof);

        
        $__internal_ea27e1cbe36438c8e9a2d83e80d9ee99ce361b3032b58b924e554b05f99a972b->leave($__internal_ea27e1cbe36438c8e9a2d83e80d9ee99ce361b3032b58b924e554b05f99a972b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7937f1168e522136d3a0b934af1d5115586f1041fad18fae06b60b220cce4c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7937f1168e522136d3a0b934af1d5115586f1041fad18fae06b60b220cce4c4a->enter($__internal_7937f1168e522136d3a0b934af1d5115586f1041fad18fae06b60b220cce4c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5377a87f621bf9eb0903cd67c45fe9a5949f5129fcc62408c3d98cc8160de2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5377a87f621bf9eb0903cd67c45fe9a5949f5129fcc62408c3d98cc8160de2b9->enter($__internal_5377a87f621bf9eb0903cd67c45fe9a5949f5129fcc62408c3d98cc8160de2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5377a87f621bf9eb0903cd67c45fe9a5949f5129fcc62408c3d98cc8160de2b9->leave($__internal_5377a87f621bf9eb0903cd67c45fe9a5949f5129fcc62408c3d98cc8160de2b9_prof);

        
        $__internal_7937f1168e522136d3a0b934af1d5115586f1041fad18fae06b60b220cce4c4a->leave($__internal_7937f1168e522136d3a0b934af1d5115586f1041fad18fae06b60b220cce4c4a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6283979ccd148217eb0e1383e04e780a88a3d51a5c8439f0e4451cc382ac4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6283979ccd148217eb0e1383e04e780a88a3d51a5c8439f0e4451cc382ac4bc->enter($__internal_a6283979ccd148217eb0e1383e04e780a88a3d51a5c8439f0e4451cc382ac4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a26ae5d91923eb481ffc40e59394f013bde3fe1239c20e2abb22154f3a4c4c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26ae5d91923eb481ffc40e59394f013bde3fe1239c20e2abb22154f3a4c4c4e->enter($__internal_a26ae5d91923eb481ffc40e59394f013bde3fe1239c20e2abb22154f3a4c4c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a26ae5d91923eb481ffc40e59394f013bde3fe1239c20e2abb22154f3a4c4c4e->leave($__internal_a26ae5d91923eb481ffc40e59394f013bde3fe1239c20e2abb22154f3a4c4c4e_prof);

        
        $__internal_a6283979ccd148217eb0e1383e04e780a88a3d51a5c8439f0e4451cc382ac4bc->leave($__internal_a6283979ccd148217eb0e1383e04e780a88a3d51a5c8439f0e4451cc382ac4bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
