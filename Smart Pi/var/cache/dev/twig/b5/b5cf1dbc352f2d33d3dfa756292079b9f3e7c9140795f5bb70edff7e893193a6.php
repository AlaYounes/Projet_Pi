<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d5564902dbdb1dd748426247c3fa3861d6ab09e53bbbf8ad184fd0fbdae8f38e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bf53fa442e939da7d0d558b818d7ad2d27605ce20ff854d561466fa24edf278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf53fa442e939da7d0d558b818d7ad2d27605ce20ff854d561466fa24edf278->enter($__internal_1bf53fa442e939da7d0d558b818d7ad2d27605ce20ff854d561466fa24edf278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4d6420357e62bdf93e59c8b817447b605b0874a18c22ede58beab353f8f42db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6420357e62bdf93e59c8b817447b605b0874a18c22ede58beab353f8f42db1->enter($__internal_4d6420357e62bdf93e59c8b817447b605b0874a18c22ede58beab353f8f42db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bf53fa442e939da7d0d558b818d7ad2d27605ce20ff854d561466fa24edf278->leave($__internal_1bf53fa442e939da7d0d558b818d7ad2d27605ce20ff854d561466fa24edf278_prof);

        
        $__internal_4d6420357e62bdf93e59c8b817447b605b0874a18c22ede58beab353f8f42db1->leave($__internal_4d6420357e62bdf93e59c8b817447b605b0874a18c22ede58beab353f8f42db1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82293781635fd2a332352757abdc3b4c7aa17d2bece18917ef06f13559bbd7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82293781635fd2a332352757abdc3b4c7aa17d2bece18917ef06f13559bbd7e7->enter($__internal_82293781635fd2a332352757abdc3b4c7aa17d2bece18917ef06f13559bbd7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37b85939762ec553a973ad094e2632c3867838ef76953958054ca40dedc4d4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b85939762ec553a973ad094e2632c3867838ef76953958054ca40dedc4d4f4->enter($__internal_37b85939762ec553a973ad094e2632c3867838ef76953958054ca40dedc4d4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_37b85939762ec553a973ad094e2632c3867838ef76953958054ca40dedc4d4f4->leave($__internal_37b85939762ec553a973ad094e2632c3867838ef76953958054ca40dedc4d4f4_prof);

        
        $__internal_82293781635fd2a332352757abdc3b4c7aa17d2bece18917ef06f13559bbd7e7->leave($__internal_82293781635fd2a332352757abdc3b4c7aa17d2bece18917ef06f13559bbd7e7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd6eb76a71cf4838812b15d12037155d9e1a5f03c6d4a609613b7ee8269bda0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6eb76a71cf4838812b15d12037155d9e1a5f03c6d4a609613b7ee8269bda0b->enter($__internal_dd6eb76a71cf4838812b15d12037155d9e1a5f03c6d4a609613b7ee8269bda0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b996b8d47d8b45ae19f962b766b480fc083a0a3450db584c014e331aa20b81c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b996b8d47d8b45ae19f962b766b480fc083a0a3450db584c014e331aa20b81c4->enter($__internal_b996b8d47d8b45ae19f962b766b480fc083a0a3450db584c014e331aa20b81c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b996b8d47d8b45ae19f962b766b480fc083a0a3450db584c014e331aa20b81c4->leave($__internal_b996b8d47d8b45ae19f962b766b480fc083a0a3450db584c014e331aa20b81c4_prof);

        
        $__internal_dd6eb76a71cf4838812b15d12037155d9e1a5f03c6d4a609613b7ee8269bda0b->leave($__internal_dd6eb76a71cf4838812b15d12037155d9e1a5f03c6d4a609613b7ee8269bda0b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
