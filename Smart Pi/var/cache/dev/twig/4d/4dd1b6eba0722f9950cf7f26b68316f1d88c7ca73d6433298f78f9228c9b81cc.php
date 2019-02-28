<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_54a46c5fdcb86f05b5b51de20942cc2790bb9af9dfcc0c073f68bdd8c4f53314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bcc4c48e4c9f632f3455157951915a96bbb5dd134a95af8d300b5a82b096854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bcc4c48e4c9f632f3455157951915a96bbb5dd134a95af8d300b5a82b096854->enter($__internal_5bcc4c48e4c9f632f3455157951915a96bbb5dd134a95af8d300b5a82b096854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_776f5fa07adaad0c305350edb8e478580f2bf1de35cbe13563ddf7844c89b6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776f5fa07adaad0c305350edb8e478580f2bf1de35cbe13563ddf7844c89b6e5->enter($__internal_776f5fa07adaad0c305350edb8e478580f2bf1de35cbe13563ddf7844c89b6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bcc4c48e4c9f632f3455157951915a96bbb5dd134a95af8d300b5a82b096854->leave($__internal_5bcc4c48e4c9f632f3455157951915a96bbb5dd134a95af8d300b5a82b096854_prof);

        
        $__internal_776f5fa07adaad0c305350edb8e478580f2bf1de35cbe13563ddf7844c89b6e5->leave($__internal_776f5fa07adaad0c305350edb8e478580f2bf1de35cbe13563ddf7844c89b6e5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b5f6628505cdfa8c190a6f5cbcdb74929ce575f029db1a6692602fcfeb83ea00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f6628505cdfa8c190a6f5cbcdb74929ce575f029db1a6692602fcfeb83ea00->enter($__internal_b5f6628505cdfa8c190a6f5cbcdb74929ce575f029db1a6692602fcfeb83ea00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9fee2833529f4ca3c7b38d02321dccc3c116b218ca93fe127ba666971cb07684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fee2833529f4ca3c7b38d02321dccc3c116b218ca93fe127ba666971cb07684->enter($__internal_9fee2833529f4ca3c7b38d02321dccc3c116b218ca93fe127ba666971cb07684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9fee2833529f4ca3c7b38d02321dccc3c116b218ca93fe127ba666971cb07684->leave($__internal_9fee2833529f4ca3c7b38d02321dccc3c116b218ca93fe127ba666971cb07684_prof);

        
        $__internal_b5f6628505cdfa8c190a6f5cbcdb74929ce575f029db1a6692602fcfeb83ea00->leave($__internal_b5f6628505cdfa8c190a6f5cbcdb74929ce575f029db1a6692602fcfeb83ea00_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_420310da542108a92d55aedf2e0f6bb4d87bccb507082f6cfe3e39ce223fef8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420310da542108a92d55aedf2e0f6bb4d87bccb507082f6cfe3e39ce223fef8e->enter($__internal_420310da542108a92d55aedf2e0f6bb4d87bccb507082f6cfe3e39ce223fef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_707348c205321c7cc8fce2efcfc1f27286349026af70b63f45d74850e5b52d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707348c205321c7cc8fce2efcfc1f27286349026af70b63f45d74850e5b52d5d->enter($__internal_707348c205321c7cc8fce2efcfc1f27286349026af70b63f45d74850e5b52d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_707348c205321c7cc8fce2efcfc1f27286349026af70b63f45d74850e5b52d5d->leave($__internal_707348c205321c7cc8fce2efcfc1f27286349026af70b63f45d74850e5b52d5d_prof);

        
        $__internal_420310da542108a92d55aedf2e0f6bb4d87bccb507082f6cfe3e39ce223fef8e->leave($__internal_420310da542108a92d55aedf2e0f6bb4d87bccb507082f6cfe3e39ce223fef8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
