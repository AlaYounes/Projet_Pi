<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6fbb8a0be2e0d47166f3a52f3e5f0cdcedace151b28d923736d073aef02faaf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_f306896086d31a194f8a60948b3b62bdddf262cf45470375fb22cd4b3338ebba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f306896086d31a194f8a60948b3b62bdddf262cf45470375fb22cd4b3338ebba->enter($__internal_f306896086d31a194f8a60948b3b62bdddf262cf45470375fb22cd4b3338ebba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_9225f06d80efe9b4f68e57ef0385d7b98fb6237fa3b0daaf26e664ad8731d411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9225f06d80efe9b4f68e57ef0385d7b98fb6237fa3b0daaf26e664ad8731d411->enter($__internal_9225f06d80efe9b4f68e57ef0385d7b98fb6237fa3b0daaf26e664ad8731d411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f306896086d31a194f8a60948b3b62bdddf262cf45470375fb22cd4b3338ebba->leave($__internal_f306896086d31a194f8a60948b3b62bdddf262cf45470375fb22cd4b3338ebba_prof);

        
        $__internal_9225f06d80efe9b4f68e57ef0385d7b98fb6237fa3b0daaf26e664ad8731d411->leave($__internal_9225f06d80efe9b4f68e57ef0385d7b98fb6237fa3b0daaf26e664ad8731d411_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90a1fed34829bd784ae413bf519d5fd6a2acf0ce2f3f906c89c4cc70c4a904db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a1fed34829bd784ae413bf519d5fd6a2acf0ce2f3f906c89c4cc70c4a904db->enter($__internal_90a1fed34829bd784ae413bf519d5fd6a2acf0ce2f3f906c89c4cc70c4a904db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab954beee589feca4da46725ef89c5c052c071a59910f8e93e3e63eba92c7005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab954beee589feca4da46725ef89c5c052c071a59910f8e93e3e63eba92c7005->enter($__internal_ab954beee589feca4da46725ef89c5c052c071a59910f8e93e3e63eba92c7005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ab954beee589feca4da46725ef89c5c052c071a59910f8e93e3e63eba92c7005->leave($__internal_ab954beee589feca4da46725ef89c5c052c071a59910f8e93e3e63eba92c7005_prof);

        
        $__internal_90a1fed34829bd784ae413bf519d5fd6a2acf0ce2f3f906c89c4cc70c4a904db->leave($__internal_90a1fed34829bd784ae413bf519d5fd6a2acf0ce2f3f906c89c4cc70c4a904db_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
