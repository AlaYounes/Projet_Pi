<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_8b4fc42c5cd580c5a28dd8c790dbabdf503806b90390c15eb075844de0ff419e extends Twig_Template
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
        $__internal_95416655dbe024d423c3b8bc7f4f4ad1a1c747009b996cd156e9a7b932fd6bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95416655dbe024d423c3b8bc7f4f4ad1a1c747009b996cd156e9a7b932fd6bbf->enter($__internal_95416655dbe024d423c3b8bc7f4f4ad1a1c747009b996cd156e9a7b932fd6bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6ec9d4bf0962d6a1a8170642eac279eed95c313a99cd74fef13d2b0a16592852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec9d4bf0962d6a1a8170642eac279eed95c313a99cd74fef13d2b0a16592852->enter($__internal_6ec9d4bf0962d6a1a8170642eac279eed95c313a99cd74fef13d2b0a16592852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95416655dbe024d423c3b8bc7f4f4ad1a1c747009b996cd156e9a7b932fd6bbf->leave($__internal_95416655dbe024d423c3b8bc7f4f4ad1a1c747009b996cd156e9a7b932fd6bbf_prof);

        
        $__internal_6ec9d4bf0962d6a1a8170642eac279eed95c313a99cd74fef13d2b0a16592852->leave($__internal_6ec9d4bf0962d6a1a8170642eac279eed95c313a99cd74fef13d2b0a16592852_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f174f1ff1f0e3d545caf31038b58294db4a181d0ea22a15894b7e4504d875039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f174f1ff1f0e3d545caf31038b58294db4a181d0ea22a15894b7e4504d875039->enter($__internal_f174f1ff1f0e3d545caf31038b58294db4a181d0ea22a15894b7e4504d875039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a55bcb1d7f3fa64aabdf54612c998bee9dfdb97cdbefd49c49325bbb5cfbcf21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55bcb1d7f3fa64aabdf54612c998bee9dfdb97cdbefd49c49325bbb5cfbcf21->enter($__internal_a55bcb1d7f3fa64aabdf54612c998bee9dfdb97cdbefd49c49325bbb5cfbcf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a55bcb1d7f3fa64aabdf54612c998bee9dfdb97cdbefd49c49325bbb5cfbcf21->leave($__internal_a55bcb1d7f3fa64aabdf54612c998bee9dfdb97cdbefd49c49325bbb5cfbcf21_prof);

        
        $__internal_f174f1ff1f0e3d545caf31038b58294db4a181d0ea22a15894b7e4504d875039->leave($__internal_f174f1ff1f0e3d545caf31038b58294db4a181d0ea22a15894b7e4504d875039_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef255ef7f4f5f2e5f3a8d806968c2e06fcefa0bf87b178a9a2b9058b0c826884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef255ef7f4f5f2e5f3a8d806968c2e06fcefa0bf87b178a9a2b9058b0c826884->enter($__internal_ef255ef7f4f5f2e5f3a8d806968c2e06fcefa0bf87b178a9a2b9058b0c826884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_928b0bc86a7ec9cc8e7b57be60453a3df17c9960c0549b6262e5598935bfdbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928b0bc86a7ec9cc8e7b57be60453a3df17c9960c0549b6262e5598935bfdbba->enter($__internal_928b0bc86a7ec9cc8e7b57be60453a3df17c9960c0549b6262e5598935bfdbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_928b0bc86a7ec9cc8e7b57be60453a3df17c9960c0549b6262e5598935bfdbba->leave($__internal_928b0bc86a7ec9cc8e7b57be60453a3df17c9960c0549b6262e5598935bfdbba_prof);

        
        $__internal_ef255ef7f4f5f2e5f3a8d806968c2e06fcefa0bf87b178a9a2b9058b0c826884->leave($__internal_ef255ef7f4f5f2e5f3a8d806968c2e06fcefa0bf87b178a9a2b9058b0c826884_prof);

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
