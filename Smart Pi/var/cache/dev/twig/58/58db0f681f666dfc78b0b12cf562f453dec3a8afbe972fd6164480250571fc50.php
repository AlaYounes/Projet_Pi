<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_31633467992607e5f6e94a9e5b11b15c043dc942df8cc36d33dfe136c4477099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32cc263301829a2bd18d50f9b7ddabd3def3fb59be5233e42025f346d33e1267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cc263301829a2bd18d50f9b7ddabd3def3fb59be5233e42025f346d33e1267->enter($__internal_32cc263301829a2bd18d50f9b7ddabd3def3fb59be5233e42025f346d33e1267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_3903e2c1cd1ea0759dd519c2c16704f70352fce9e8493dbd4224252e831ea237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3903e2c1cd1ea0759dd519c2c16704f70352fce9e8493dbd4224252e831ea237->enter($__internal_3903e2c1cd1ea0759dd519c2c16704f70352fce9e8493dbd4224252e831ea237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32cc263301829a2bd18d50f9b7ddabd3def3fb59be5233e42025f346d33e1267->leave($__internal_32cc263301829a2bd18d50f9b7ddabd3def3fb59be5233e42025f346d33e1267_prof);

        
        $__internal_3903e2c1cd1ea0759dd519c2c16704f70352fce9e8493dbd4224252e831ea237->leave($__internal_3903e2c1cd1ea0759dd519c2c16704f70352fce9e8493dbd4224252e831ea237_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebae0ecaa97bddd422ffdd29ad2c6cfa84f2845989a9c78bd3326e1dd17536ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebae0ecaa97bddd422ffdd29ad2c6cfa84f2845989a9c78bd3326e1dd17536ec->enter($__internal_ebae0ecaa97bddd422ffdd29ad2c6cfa84f2845989a9c78bd3326e1dd17536ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc05f9564719f1a1f2e3619d107c69e468aeef2f5472f1e32e29952eee8f9623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc05f9564719f1a1f2e3619d107c69e468aeef2f5472f1e32e29952eee8f9623->enter($__internal_cc05f9564719f1a1f2e3619d107c69e468aeef2f5472f1e32e29952eee8f9623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_cc05f9564719f1a1f2e3619d107c69e468aeef2f5472f1e32e29952eee8f9623->leave($__internal_cc05f9564719f1a1f2e3619d107c69e468aeef2f5472f1e32e29952eee8f9623_prof);

        
        $__internal_ebae0ecaa97bddd422ffdd29ad2c6cfa84f2845989a9c78bd3326e1dd17536ec->leave($__internal_ebae0ecaa97bddd422ffdd29ad2c6cfa84f2845989a9c78bd3326e1dd17536ec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
