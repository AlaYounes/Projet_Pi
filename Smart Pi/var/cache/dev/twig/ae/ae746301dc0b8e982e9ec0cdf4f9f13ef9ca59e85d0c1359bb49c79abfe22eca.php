<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_26deae3a86fe03635ae06635182bd243b3cd069e63e637e852ea6350ac099fac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca3e621adae9450038baf514cf82bced6ad9826deeb447fd008deeb3e9030e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3e621adae9450038baf514cf82bced6ad9826deeb447fd008deeb3e9030e2b->enter($__internal_ca3e621adae9450038baf514cf82bced6ad9826deeb447fd008deeb3e9030e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4effe29e8a699bedba7583f01620f6fae163bcf0aa1abff025d05c8bd65d0664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4effe29e8a699bedba7583f01620f6fae163bcf0aa1abff025d05c8bd65d0664->enter($__internal_4effe29e8a699bedba7583f01620f6fae163bcf0aa1abff025d05c8bd65d0664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ca3e621adae9450038baf514cf82bced6ad9826deeb447fd008deeb3e9030e2b->leave($__internal_ca3e621adae9450038baf514cf82bced6ad9826deeb447fd008deeb3e9030e2b_prof);

        
        $__internal_4effe29e8a699bedba7583f01620f6fae163bcf0aa1abff025d05c8bd65d0664->leave($__internal_4effe29e8a699bedba7583f01620f6fae163bcf0aa1abff025d05c8bd65d0664_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f85279286c1a0c0fe4a16888c0aa02f8d9ebe29d95ed0d3ede1d175bce3eeec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85279286c1a0c0fe4a16888c0aa02f8d9ebe29d95ed0d3ede1d175bce3eeec6->enter($__internal_f85279286c1a0c0fe4a16888c0aa02f8d9ebe29d95ed0d3ede1d175bce3eeec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bfddb0efef3b7eee8d5aced7e2036d7797fc893d0ea2e1810cf1328276b0d497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfddb0efef3b7eee8d5aced7e2036d7797fc893d0ea2e1810cf1328276b0d497->enter($__internal_bfddb0efef3b7eee8d5aced7e2036d7797fc893d0ea2e1810cf1328276b0d497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bfddb0efef3b7eee8d5aced7e2036d7797fc893d0ea2e1810cf1328276b0d497->leave($__internal_bfddb0efef3b7eee8d5aced7e2036d7797fc893d0ea2e1810cf1328276b0d497_prof);

        
        $__internal_f85279286c1a0c0fe4a16888c0aa02f8d9ebe29d95ed0d3ede1d175bce3eeec6->leave($__internal_f85279286c1a0c0fe4a16888c0aa02f8d9ebe29d95ed0d3ede1d175bce3eeec6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
