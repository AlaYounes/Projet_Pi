<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9b4359c9cd026f6e9dcf39ea8b6f0110d87fb83423418a6d60fed627a77d3f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7e623301874e39631ac7e30bdebe3b5a5b6b30dc1623b1a8eec806fa67759fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e623301874e39631ac7e30bdebe3b5a5b6b30dc1623b1a8eec806fa67759fda->enter($__internal_7e623301874e39631ac7e30bdebe3b5a5b6b30dc1623b1a8eec806fa67759fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_31f9b129bfed1006a43020151c071dff67858b6cc088b578c258abf07b44180f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f9b129bfed1006a43020151c071dff67858b6cc088b578c258abf07b44180f->enter($__internal_31f9b129bfed1006a43020151c071dff67858b6cc088b578c258abf07b44180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e623301874e39631ac7e30bdebe3b5a5b6b30dc1623b1a8eec806fa67759fda->leave($__internal_7e623301874e39631ac7e30bdebe3b5a5b6b30dc1623b1a8eec806fa67759fda_prof);

        
        $__internal_31f9b129bfed1006a43020151c071dff67858b6cc088b578c258abf07b44180f->leave($__internal_31f9b129bfed1006a43020151c071dff67858b6cc088b578c258abf07b44180f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3896aad8a6b09c7805318242dc55a45d1eb232984f41ff7f7ef53eee6396d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3896aad8a6b09c7805318242dc55a45d1eb232984f41ff7f7ef53eee6396d0d->enter($__internal_b3896aad8a6b09c7805318242dc55a45d1eb232984f41ff7f7ef53eee6396d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_32acf38f51b75699513e65b67e2742607ed267a828208b2ca93e60f986f1e222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32acf38f51b75699513e65b67e2742607ed267a828208b2ca93e60f986f1e222->enter($__internal_32acf38f51b75699513e65b67e2742607ed267a828208b2ca93e60f986f1e222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_32acf38f51b75699513e65b67e2742607ed267a828208b2ca93e60f986f1e222->leave($__internal_32acf38f51b75699513e65b67e2742607ed267a828208b2ca93e60f986f1e222_prof);

        
        $__internal_b3896aad8a6b09c7805318242dc55a45d1eb232984f41ff7f7ef53eee6396d0d->leave($__internal_b3896aad8a6b09c7805318242dc55a45d1eb232984f41ff7f7ef53eee6396d0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
