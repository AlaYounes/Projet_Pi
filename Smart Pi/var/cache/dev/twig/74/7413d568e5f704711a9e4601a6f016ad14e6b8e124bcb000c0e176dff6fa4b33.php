<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0abb07c2852699f51b4decd5a3221ce5bb536e034a819665cf4230234250e022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_a17b32fba2dea34b9fa4f389830f457ef4851eb91cc112e735c9023933f60152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17b32fba2dea34b9fa4f389830f457ef4851eb91cc112e735c9023933f60152->enter($__internal_a17b32fba2dea34b9fa4f389830f457ef4851eb91cc112e735c9023933f60152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_bcd2b89c6b585b7d78c2a7469e7da6873815d791341f8c1083e19b8ea843110b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd2b89c6b585b7d78c2a7469e7da6873815d791341f8c1083e19b8ea843110b->enter($__internal_bcd2b89c6b585b7d78c2a7469e7da6873815d791341f8c1083e19b8ea843110b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a17b32fba2dea34b9fa4f389830f457ef4851eb91cc112e735c9023933f60152->leave($__internal_a17b32fba2dea34b9fa4f389830f457ef4851eb91cc112e735c9023933f60152_prof);

        
        $__internal_bcd2b89c6b585b7d78c2a7469e7da6873815d791341f8c1083e19b8ea843110b->leave($__internal_bcd2b89c6b585b7d78c2a7469e7da6873815d791341f8c1083e19b8ea843110b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ca6b3cc991b985a93ed5d12707e3ac8ef15ca64e74ed44e86ac88f721c17c5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6b3cc991b985a93ed5d12707e3ac8ef15ca64e74ed44e86ac88f721c17c5bc->enter($__internal_ca6b3cc991b985a93ed5d12707e3ac8ef15ca64e74ed44e86ac88f721c17c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_525f6bed5059e3c63533e9184b91ad438c6295fc3f736bea0b86aec1c81d678c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525f6bed5059e3c63533e9184b91ad438c6295fc3f736bea0b86aec1c81d678c->enter($__internal_525f6bed5059e3c63533e9184b91ad438c6295fc3f736bea0b86aec1c81d678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_525f6bed5059e3c63533e9184b91ad438c6295fc3f736bea0b86aec1c81d678c->leave($__internal_525f6bed5059e3c63533e9184b91ad438c6295fc3f736bea0b86aec1c81d678c_prof);

        
        $__internal_ca6b3cc991b985a93ed5d12707e3ac8ef15ca64e74ed44e86ac88f721c17c5bc->leave($__internal_ca6b3cc991b985a93ed5d12707e3ac8ef15ca64e74ed44e86ac88f721c17c5bc_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0879df88d1ad7e076b4c2146127e558aa045b6bba3ae67babb5a6b8aa2984748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0879df88d1ad7e076b4c2146127e558aa045b6bba3ae67babb5a6b8aa2984748->enter($__internal_0879df88d1ad7e076b4c2146127e558aa045b6bba3ae67babb5a6b8aa2984748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e16bb172df946e8240b9e97980f0a8f4c77ca57e087da8071db20a81850e94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e16bb172df946e8240b9e97980f0a8f4c77ca57e087da8071db20a81850e94f->enter($__internal_0e16bb172df946e8240b9e97980f0a8f4c77ca57e087da8071db20a81850e94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0e16bb172df946e8240b9e97980f0a8f4c77ca57e087da8071db20a81850e94f->leave($__internal_0e16bb172df946e8240b9e97980f0a8f4c77ca57e087da8071db20a81850e94f_prof);

        
        $__internal_0879df88d1ad7e076b4c2146127e558aa045b6bba3ae67babb5a6b8aa2984748->leave($__internal_0879df88d1ad7e076b4c2146127e558aa045b6bba3ae67babb5a6b8aa2984748_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
