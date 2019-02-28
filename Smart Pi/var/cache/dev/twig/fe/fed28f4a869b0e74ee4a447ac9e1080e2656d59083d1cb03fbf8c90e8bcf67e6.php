<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_2a7c8767e4b02dbd01c2e9b8bf3786ca9125d0eba58fdafce473be94a4333296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_37ca98ea1d8b6bcc896885588994a435831635994e9374e2c7cfc24355e0ceb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ca98ea1d8b6bcc896885588994a435831635994e9374e2c7cfc24355e0ceb6->enter($__internal_37ca98ea1d8b6bcc896885588994a435831635994e9374e2c7cfc24355e0ceb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_18c5ddb2c2f9825d7fe0181b17b478d7adee70eb2bed4e3eb86803b0558bc821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c5ddb2c2f9825d7fe0181b17b478d7adee70eb2bed4e3eb86803b0558bc821->enter($__internal_18c5ddb2c2f9825d7fe0181b17b478d7adee70eb2bed4e3eb86803b0558bc821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ca98ea1d8b6bcc896885588994a435831635994e9374e2c7cfc24355e0ceb6->leave($__internal_37ca98ea1d8b6bcc896885588994a435831635994e9374e2c7cfc24355e0ceb6_prof);

        
        $__internal_18c5ddb2c2f9825d7fe0181b17b478d7adee70eb2bed4e3eb86803b0558bc821->leave($__internal_18c5ddb2c2f9825d7fe0181b17b478d7adee70eb2bed4e3eb86803b0558bc821_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5c15d3124c4ac9e0b98404675091e8c8a591dcd5f1f67085061d7669a0f244b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c15d3124c4ac9e0b98404675091e8c8a591dcd5f1f67085061d7669a0f244b->enter($__internal_e5c15d3124c4ac9e0b98404675091e8c8a591dcd5f1f67085061d7669a0f244b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_90bc2dd5e9378c2839b7baaede3c201793d56ca95e17669179758311ae675fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bc2dd5e9378c2839b7baaede3c201793d56ca95e17669179758311ae675fa7->enter($__internal_90bc2dd5e9378c2839b7baaede3c201793d56ca95e17669179758311ae675fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_90bc2dd5e9378c2839b7baaede3c201793d56ca95e17669179758311ae675fa7->leave($__internal_90bc2dd5e9378c2839b7baaede3c201793d56ca95e17669179758311ae675fa7_prof);

        
        $__internal_e5c15d3124c4ac9e0b98404675091e8c8a591dcd5f1f67085061d7669a0f244b->leave($__internal_e5c15d3124c4ac9e0b98404675091e8c8a591dcd5f1f67085061d7669a0f244b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
