<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_086e8d9475a61947cbf31d5cd54b81bde0635468f1b40e5e59060f5bbd122083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_54afb0783f9a3f1507a9fd6550286f17e7618d4abf39ec8383337460fcf49fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54afb0783f9a3f1507a9fd6550286f17e7618d4abf39ec8383337460fcf49fa2->enter($__internal_54afb0783f9a3f1507a9fd6550286f17e7618d4abf39ec8383337460fcf49fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6024a9af044861151e29950b58511d039a82043a118e66742b73cc144c3d261d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6024a9af044861151e29950b58511d039a82043a118e66742b73cc144c3d261d->enter($__internal_6024a9af044861151e29950b58511d039a82043a118e66742b73cc144c3d261d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54afb0783f9a3f1507a9fd6550286f17e7618d4abf39ec8383337460fcf49fa2->leave($__internal_54afb0783f9a3f1507a9fd6550286f17e7618d4abf39ec8383337460fcf49fa2_prof);

        
        $__internal_6024a9af044861151e29950b58511d039a82043a118e66742b73cc144c3d261d->leave($__internal_6024a9af044861151e29950b58511d039a82043a118e66742b73cc144c3d261d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ccb55ec835c6e831999f4b13a86f3255ab9c82e747d93efe9082a2f79f987435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb55ec835c6e831999f4b13a86f3255ab9c82e747d93efe9082a2f79f987435->enter($__internal_ccb55ec835c6e831999f4b13a86f3255ab9c82e747d93efe9082a2f79f987435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88c94bc00c9605901863e951f4f24e2a40b12af4127aac6d49fa9164edccc658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c94bc00c9605901863e951f4f24e2a40b12af4127aac6d49fa9164edccc658->enter($__internal_88c94bc00c9605901863e951f4f24e2a40b12af4127aac6d49fa9164edccc658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_88c94bc00c9605901863e951f4f24e2a40b12af4127aac6d49fa9164edccc658->leave($__internal_88c94bc00c9605901863e951f4f24e2a40b12af4127aac6d49fa9164edccc658_prof);

        
        $__internal_ccb55ec835c6e831999f4b13a86f3255ab9c82e747d93efe9082a2f79f987435->leave($__internal_ccb55ec835c6e831999f4b13a86f3255ab9c82e747d93efe9082a2f79f987435_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_692e4ea6e88624555d9837d55a8ec390c05394a1fefa0821825e9b23c7cfbfd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692e4ea6e88624555d9837d55a8ec390c05394a1fefa0821825e9b23c7cfbfd7->enter($__internal_692e4ea6e88624555d9837d55a8ec390c05394a1fefa0821825e9b23c7cfbfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_498f708462521ec2638db65c696b9676cfcf49b85936a3136a4b87ef14c22a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498f708462521ec2638db65c696b9676cfcf49b85936a3136a4b87ef14c22a84->enter($__internal_498f708462521ec2638db65c696b9676cfcf49b85936a3136a4b87ef14c22a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_498f708462521ec2638db65c696b9676cfcf49b85936a3136a4b87ef14c22a84->leave($__internal_498f708462521ec2638db65c696b9676cfcf49b85936a3136a4b87ef14c22a84_prof);

        
        $__internal_692e4ea6e88624555d9837d55a8ec390c05394a1fefa0821825e9b23c7cfbfd7->leave($__internal_692e4ea6e88624555d9837d55a8ec390c05394a1fefa0821825e9b23c7cfbfd7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
