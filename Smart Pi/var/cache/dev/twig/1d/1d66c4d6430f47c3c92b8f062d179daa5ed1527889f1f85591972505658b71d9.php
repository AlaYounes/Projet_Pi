<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c5e7beae6d74d9bda86322a7f901e9922d5e84727271395216cd58890be55fda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_6bf36542d671b0cda29a2a50d38ab562326dce251c8393ab389d5fdd3428ab17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf36542d671b0cda29a2a50d38ab562326dce251c8393ab389d5fdd3428ab17->enter($__internal_6bf36542d671b0cda29a2a50d38ab562326dce251c8393ab389d5fdd3428ab17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_4d9b48126adf984aed04a09b929384fe5448875c3927283631396d0995dae8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9b48126adf984aed04a09b929384fe5448875c3927283631396d0995dae8c1->enter($__internal_4d9b48126adf984aed04a09b929384fe5448875c3927283631396d0995dae8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf36542d671b0cda29a2a50d38ab562326dce251c8393ab389d5fdd3428ab17->leave($__internal_6bf36542d671b0cda29a2a50d38ab562326dce251c8393ab389d5fdd3428ab17_prof);

        
        $__internal_4d9b48126adf984aed04a09b929384fe5448875c3927283631396d0995dae8c1->leave($__internal_4d9b48126adf984aed04a09b929384fe5448875c3927283631396d0995dae8c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_276473400e3313b1fcf5a3981814a0c3ac9a0f2193e027e5d86a04a5d349c44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276473400e3313b1fcf5a3981814a0c3ac9a0f2193e027e5d86a04a5d349c44b->enter($__internal_276473400e3313b1fcf5a3981814a0c3ac9a0f2193e027e5d86a04a5d349c44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9551c7881c5b495d811d3fb26a67032b9dd22b2598f3d2057b72c782fd9f2965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9551c7881c5b495d811d3fb26a67032b9dd22b2598f3d2057b72c782fd9f2965->enter($__internal_9551c7881c5b495d811d3fb26a67032b9dd22b2598f3d2057b72c782fd9f2965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9551c7881c5b495d811d3fb26a67032b9dd22b2598f3d2057b72c782fd9f2965->leave($__internal_9551c7881c5b495d811d3fb26a67032b9dd22b2598f3d2057b72c782fd9f2965_prof);

        
        $__internal_276473400e3313b1fcf5a3981814a0c3ac9a0f2193e027e5d86a04a5d349c44b->leave($__internal_276473400e3313b1fcf5a3981814a0c3ac9a0f2193e027e5d86a04a5d349c44b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
