<?php

/* @Fix/Backend/Admin.html.twig */
class __TwigTemplate_69f90e9e250d31199746d3bc4f70634b702cca7d112858a7d2f5522e3e720203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "@Fix/Backend/Admin.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aa87de62e923cf1c8168298c5c7867c18930017c63e7248d54d388914a0abe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa87de62e923cf1c8168298c5c7867c18930017c63e7248d54d388914a0abe1->enter($__internal_7aa87de62e923cf1c8168298c5c7867c18930017c63e7248d54d388914a0abe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Backend/Admin.html.twig"));

        $__internal_b2df08d3405c378c101c26cb12fff605f98ec8dae64e1b22c547b8e237c68dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2df08d3405c378c101c26cb12fff605f98ec8dae64e1b22c547b8e237c68dfe->enter($__internal_b2df08d3405c378c101c26cb12fff605f98ec8dae64e1b22c547b8e237c68dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Backend/Admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa87de62e923cf1c8168298c5c7867c18930017c63e7248d54d388914a0abe1->leave($__internal_7aa87de62e923cf1c8168298c5c7867c18930017c63e7248d54d388914a0abe1_prof);

        
        $__internal_b2df08d3405c378c101c26cb12fff605f98ec8dae64e1b22c547b8e237c68dfe->leave($__internal_b2df08d3405c378c101c26cb12fff605f98ec8dae64e1b22c547b8e237c68dfe_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Backend/Admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base1.html.twig' %}
", "@Fix/Backend/Admin.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Backend\\Admin.html.twig");
    }
}
