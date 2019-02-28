<?php

/* FixBundle:Backend:Admin.html.twig */
class __TwigTemplate_84634ea661d68cc5b023ff2cb0501b7bc2e5304bada7a9e46cab058466d4e67f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "FixBundle:Backend:Admin.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a318a5ef74c56dcb22b65fabf0a0848cbea2f90ea6eb0991e52c624aa094c6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a318a5ef74c56dcb22b65fabf0a0848cbea2f90ea6eb0991e52c624aa094c6b7->enter($__internal_a318a5ef74c56dcb22b65fabf0a0848cbea2f90ea6eb0991e52c624aa094c6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Backend:Admin.html.twig"));

        $__internal_dc467dabecd7475dd2a750bfe562094422dc52ea12958b9baf8bae03fa776095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc467dabecd7475dd2a750bfe562094422dc52ea12958b9baf8bae03fa776095->enter($__internal_dc467dabecd7475dd2a750bfe562094422dc52ea12958b9baf8bae03fa776095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Backend:Admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a318a5ef74c56dcb22b65fabf0a0848cbea2f90ea6eb0991e52c624aa094c6b7->leave($__internal_a318a5ef74c56dcb22b65fabf0a0848cbea2f90ea6eb0991e52c624aa094c6b7_prof);

        
        $__internal_dc467dabecd7475dd2a750bfe562094422dc52ea12958b9baf8bae03fa776095->leave($__internal_dc467dabecd7475dd2a750bfe562094422dc52ea12958b9baf8bae03fa776095_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Backend:Admin.html.twig";
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
", "FixBundle:Backend:Admin.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Backend/Admin.html.twig");
    }
}
