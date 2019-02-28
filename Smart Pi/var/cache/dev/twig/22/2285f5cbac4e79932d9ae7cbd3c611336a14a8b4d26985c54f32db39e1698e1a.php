<?php

/* article/DataTable/index.html.twig */
class __TwigTemplate_510570674edee8d622c41060a7d4d2865f95bb3c80fe433f7d83ff68000fe5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/DataTable/index.html.twig", 1);
        $this->blocks = array(
            'stylesheat' => array($this, 'block_stylesheat'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c0c32015c57ef40685dd285d841bd83801e876fb67a43c28bf5dca99009f1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0c32015c57ef40685dd285d841bd83801e876fb67a43c28bf5dca99009f1a2->enter($__internal_0c0c32015c57ef40685dd285d841bd83801e876fb67a43c28bf5dca99009f1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/DataTable/index.html.twig"));

        $__internal_b3509d3147ae51c823a3c711bb2ec3ecbe332cd7a43521cc8da5ea2d38dfa759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3509d3147ae51c823a3c711bb2ec3ecbe332cd7a43521cc8da5ea2d38dfa759->enter($__internal_b3509d3147ae51c823a3c711bb2ec3ecbe332cd7a43521cc8da5ea2d38dfa759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/DataTable/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0c32015c57ef40685dd285d841bd83801e876fb67a43c28bf5dca99009f1a2->leave($__internal_0c0c32015c57ef40685dd285d841bd83801e876fb67a43c28bf5dca99009f1a2_prof);

        
        $__internal_b3509d3147ae51c823a3c711bb2ec3ecbe332cd7a43521cc8da5ea2d38dfa759->leave($__internal_b3509d3147ae51c823a3c711bb2ec3ecbe332cd7a43521cc8da5ea2d38dfa759_prof);

    }

    // line 4
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_6d5fbdfe8924e5b55e64d65fe424572130564705fb6d78534467bd5863c94383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5fbdfe8924e5b55e64d65fe424572130564705fb6d78534467bd5863c94383->enter($__internal_6d5fbdfe8924e5b55e64d65fe424572130564705fb6d78534467bd5863c94383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_b18d805c4295442ece29dcb0609c9af75aae966c354c78a4623e6e702413e3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18d805c4295442ece29dcb0609c9af75aae966c354c78a4623e6e702413e3ce->enter($__internal_b18d805c4295442ece29dcb0609c9af75aae966c354c78a4623e6e702413e3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
";
        
        $__internal_b18d805c4295442ece29dcb0609c9af75aae966c354c78a4623e6e702413e3ce->leave($__internal_b18d805c4295442ece29dcb0609c9af75aae966c354c78a4623e6e702413e3ce_prof);

        
        $__internal_6d5fbdfe8924e5b55e64d65fe424572130564705fb6d78534467bd5863c94383->leave($__internal_6d5fbdfe8924e5b55e64d65fe424572130564705fb6d78534467bd5863c94383_prof);

    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        $__internal_3284c0c86c1e1bcfacf88d31f9081da1f95c0cae12d9c75934073122b87e6789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3284c0c86c1e1bcfacf88d31f9081da1f95c0cae12d9c75934073122b87e6789->enter($__internal_3284c0c86c1e1bcfacf88d31f9081da1f95c0cae12d9c75934073122b87e6789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_ac908384ecfe6c08c28107af763f62e3c5fae43254c86018440519215d78662e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac908384ecfe6c08c28107af763f62e3c5fae43254c86018440519215d78662e->enter($__internal_ac908384ecfe6c08c28107af763f62e3c5fae43254c86018440519215d78662e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 8
        echo "    <h2>Articles</h2>
    ";
        // line 9
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "


";
        
        $__internal_ac908384ecfe6c08c28107af763f62e3c5fae43254c86018440519215d78662e->leave($__internal_ac908384ecfe6c08c28107af763f62e3c5fae43254c86018440519215d78662e_prof);

        
        $__internal_3284c0c86c1e1bcfacf88d31f9081da1f95c0cae12d9c75934073122b87e6789->leave($__internal_3284c0c86c1e1bcfacf88d31f9081da1f95c0cae12d9c75934073122b87e6789_prof);

    }

    public function getTemplateName()
    {
        return "article/DataTable/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  72 => 8,  63 => 7,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block stylesheat %}
    {{ parent() }}
{% endblock %}
{% block container %}
    <h2>Articles</h2>
    {{ sg_datatables_render(datatable) }}


{% endblock %}
", "article/DataTable/index.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\article\\DataTable\\index.html.twig");
    }
}
