<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_696ec3d096edef09f99915179390f97250725f6f6a48083d9856cc3d69b9627b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_88fff631e3606dc9a80148cfe1fcad6a54aff54e8584472261816ff0817ed9d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fff631e3606dc9a80148cfe1fcad6a54aff54e8584472261816ff0817ed9d6->enter($__internal_88fff631e3606dc9a80148cfe1fcad6a54aff54e8584472261816ff0817ed9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_2c7e7c4cddd5e701898030b5a870d9157c641fc4230c46aad1c78da9f77b4ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7e7c4cddd5e701898030b5a870d9157c641fc4230c46aad1c78da9f77b4ba2->enter($__internal_2c7e7c4cddd5e701898030b5a870d9157c641fc4230c46aad1c78da9f77b4ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88fff631e3606dc9a80148cfe1fcad6a54aff54e8584472261816ff0817ed9d6->leave($__internal_88fff631e3606dc9a80148cfe1fcad6a54aff54e8584472261816ff0817ed9d6_prof);

        
        $__internal_2c7e7c4cddd5e701898030b5a870d9157c641fc4230c46aad1c78da9f77b4ba2->leave($__internal_2c7e7c4cddd5e701898030b5a870d9157c641fc4230c46aad1c78da9f77b4ba2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c49240e5b0d86a6f2add7b2e92b3f5fb57e7f96c93db09b1272a3024b9dea798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49240e5b0d86a6f2add7b2e92b3f5fb57e7f96c93db09b1272a3024b9dea798->enter($__internal_c49240e5b0d86a6f2add7b2e92b3f5fb57e7f96c93db09b1272a3024b9dea798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_619dd1ab4bcf1d8306967135a722743490674eb3fe648313ea1bc156fc510838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619dd1ab4bcf1d8306967135a722743490674eb3fe648313ea1bc156fc510838->enter($__internal_619dd1ab4bcf1d8306967135a722743490674eb3fe648313ea1bc156fc510838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_619dd1ab4bcf1d8306967135a722743490674eb3fe648313ea1bc156fc510838->leave($__internal_619dd1ab4bcf1d8306967135a722743490674eb3fe648313ea1bc156fc510838_prof);

        
        $__internal_c49240e5b0d86a6f2add7b2e92b3f5fb57e7f96c93db09b1272a3024b9dea798->leave($__internal_c49240e5b0d86a6f2add7b2e92b3f5fb57e7f96c93db09b1272a3024b9dea798_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
