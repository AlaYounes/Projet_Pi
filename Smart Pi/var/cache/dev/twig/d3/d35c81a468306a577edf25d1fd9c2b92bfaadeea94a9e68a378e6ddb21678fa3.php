<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_2196d217d3342025f5de0d8d1da4bf829b398e19e3b0926d5a1839e9d4d490ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83dac2a4ea7b6e5eb8d4bb874e3391c3b9c02a7d107dc51ab958b1a920a3449e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83dac2a4ea7b6e5eb8d4bb874e3391c3b9c02a7d107dc51ab958b1a920a3449e->enter($__internal_83dac2a4ea7b6e5eb8d4bb874e3391c3b9c02a7d107dc51ab958b1a920a3449e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_f10aa50298a310ebe1e7ce2c46b3c4b4e87fa4b99e11f5290846514ed8ec3201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10aa50298a310ebe1e7ce2c46b3c4b4e87fa4b99e11f5290846514ed8ec3201->enter($__internal_f10aa50298a310ebe1e7ce2c46b3c4b4e87fa4b99e11f5290846514ed8ec3201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_83dac2a4ea7b6e5eb8d4bb874e3391c3b9c02a7d107dc51ab958b1a920a3449e->leave($__internal_83dac2a4ea7b6e5eb8d4bb874e3391c3b9c02a7d107dc51ab958b1a920a3449e_prof);

        
        $__internal_f10aa50298a310ebe1e7ce2c46b3c4b4e87fa4b99e11f5290846514ed8ec3201->leave($__internal_f10aa50298a310ebe1e7ce2c46b3c4b4e87fa4b99e11f5290846514ed8ec3201_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
