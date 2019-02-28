<?php

/* @Fix/Backend/Admin.html.twig */
class __TwigTemplate_3839dc6e4224a3cc2259f6a110b0be05c0eef54be5f95839f36b038708ca165e extends Twig_Template
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
        $__internal_e5e8facf28ba58e78382dd7befa8c8f2860359b1926225a6b2c9b0ed80325815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e8facf28ba58e78382dd7befa8c8f2860359b1926225a6b2c9b0ed80325815->enter($__internal_e5e8facf28ba58e78382dd7befa8c8f2860359b1926225a6b2c9b0ed80325815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Backend/Admin.html.twig"));

        $__internal_9806d7073a1ab55304c053f4ae5f7323477e0164fd2474b2d465d8d5b5061d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9806d7073a1ab55304c053f4ae5f7323477e0164fd2474b2d465d8d5b5061d50->enter($__internal_9806d7073a1ab55304c053f4ae5f7323477e0164fd2474b2d465d8d5b5061d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Backend/Admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e8facf28ba58e78382dd7befa8c8f2860359b1926225a6b2c9b0ed80325815->leave($__internal_e5e8facf28ba58e78382dd7befa8c8f2860359b1926225a6b2c9b0ed80325815_prof);

        
        $__internal_9806d7073a1ab55304c053f4ae5f7323477e0164fd2474b2d465d8d5b5061d50->leave($__internal_9806d7073a1ab55304c053f4ae5f7323477e0164fd2474b2d465d8d5b5061d50_prof);

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
