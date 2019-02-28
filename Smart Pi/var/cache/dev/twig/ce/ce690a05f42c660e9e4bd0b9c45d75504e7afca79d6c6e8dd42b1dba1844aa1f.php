<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_378d4ee4837cfd4292be98242f57ffde5a3b6839ef641061a84afec980079132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_c3fdf831e8f49dd689d75a1354506495262e2ef33007248d463ae2a68760f075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3fdf831e8f49dd689d75a1354506495262e2ef33007248d463ae2a68760f075->enter($__internal_c3fdf831e8f49dd689d75a1354506495262e2ef33007248d463ae2a68760f075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_9bc4386083aaaff4f3c90bd0e744fa99ef21da2102931eeae1af8aa7bd6e49e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc4386083aaaff4f3c90bd0e744fa99ef21da2102931eeae1af8aa7bd6e49e6->enter($__internal_9bc4386083aaaff4f3c90bd0e744fa99ef21da2102931eeae1af8aa7bd6e49e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3fdf831e8f49dd689d75a1354506495262e2ef33007248d463ae2a68760f075->leave($__internal_c3fdf831e8f49dd689d75a1354506495262e2ef33007248d463ae2a68760f075_prof);

        
        $__internal_9bc4386083aaaff4f3c90bd0e744fa99ef21da2102931eeae1af8aa7bd6e49e6->leave($__internal_9bc4386083aaaff4f3c90bd0e744fa99ef21da2102931eeae1af8aa7bd6e49e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93b35dd3a2723ac1cd2009543766bc3505670717524af7ef0862d765af0e20b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b35dd3a2723ac1cd2009543766bc3505670717524af7ef0862d765af0e20b0->enter($__internal_93b35dd3a2723ac1cd2009543766bc3505670717524af7ef0862d765af0e20b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_77402a612398866526f0ee738b70e617d5c9ed7afb33a7966db6fbb809974388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77402a612398866526f0ee738b70e617d5c9ed7afb33a7966db6fbb809974388->enter($__internal_77402a612398866526f0ee738b70e617d5c9ed7afb33a7966db6fbb809974388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_77402a612398866526f0ee738b70e617d5c9ed7afb33a7966db6fbb809974388->leave($__internal_77402a612398866526f0ee738b70e617d5c9ed7afb33a7966db6fbb809974388_prof);

        
        $__internal_93b35dd3a2723ac1cd2009543766bc3505670717524af7ef0862d765af0e20b0->leave($__internal_93b35dd3a2723ac1cd2009543766bc3505670717524af7ef0862d765af0e20b0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
