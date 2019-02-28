<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_23e6afb5ec60a5524364a8265b8bfba424e1bb2ddecb53ef51490a42b487e323 extends Twig_Template
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
        $__internal_2abf3f10f8c6a677bede7ce5967c18f4efaa33827a50d5a814cca93d768c2726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abf3f10f8c6a677bede7ce5967c18f4efaa33827a50d5a814cca93d768c2726->enter($__internal_2abf3f10f8c6a677bede7ce5967c18f4efaa33827a50d5a814cca93d768c2726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_e4477c2a90f54ea7da72ebf9eb81116bc3a67191eee9595f78f694d8f5ed4d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4477c2a90f54ea7da72ebf9eb81116bc3a67191eee9595f78f694d8f5ed4d79->enter($__internal_e4477c2a90f54ea7da72ebf9eb81116bc3a67191eee9595f78f694d8f5ed4d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2abf3f10f8c6a677bede7ce5967c18f4efaa33827a50d5a814cca93d768c2726->leave($__internal_2abf3f10f8c6a677bede7ce5967c18f4efaa33827a50d5a814cca93d768c2726_prof);

        
        $__internal_e4477c2a90f54ea7da72ebf9eb81116bc3a67191eee9595f78f694d8f5ed4d79->leave($__internal_e4477c2a90f54ea7da72ebf9eb81116bc3a67191eee9595f78f694d8f5ed4d79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a4b410505be0942ac89666b7ddacd7ecbaa6de12af4413272fae499fd1cbb29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4b410505be0942ac89666b7ddacd7ecbaa6de12af4413272fae499fd1cbb29->enter($__internal_5a4b410505be0942ac89666b7ddacd7ecbaa6de12af4413272fae499fd1cbb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_04f647d49f0ebc635696bc4f15ef71b13d1d97d621a9a5bf23d718879d513cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f647d49f0ebc635696bc4f15ef71b13d1d97d621a9a5bf23d718879d513cba->enter($__internal_04f647d49f0ebc635696bc4f15ef71b13d1d97d621a9a5bf23d718879d513cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_04f647d49f0ebc635696bc4f15ef71b13d1d97d621a9a5bf23d718879d513cba->leave($__internal_04f647d49f0ebc635696bc4f15ef71b13d1d97d621a9a5bf23d718879d513cba_prof);

        
        $__internal_5a4b410505be0942ac89666b7ddacd7ecbaa6de12af4413272fae499fd1cbb29->leave($__internal_5a4b410505be0942ac89666b7ddacd7ecbaa6de12af4413272fae499fd1cbb29_prof);

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
