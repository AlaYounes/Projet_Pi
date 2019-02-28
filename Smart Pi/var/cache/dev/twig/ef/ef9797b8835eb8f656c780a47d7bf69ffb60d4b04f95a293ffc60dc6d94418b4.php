<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f5a1fb3735d24aeb35f59862073e4a531c3d5806c42963119026afdf72e3dc82 extends Twig_Template
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
        $__internal_cef2c34be7595d0171b373c89fc92b8a8b84c921d04aa4abead40594bf913c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef2c34be7595d0171b373c89fc92b8a8b84c921d04aa4abead40594bf913c3d->enter($__internal_cef2c34be7595d0171b373c89fc92b8a8b84c921d04aa4abead40594bf913c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_347654b6961a91b873bc6538be3de19441a2f4fbcea68dc9124e3c8915197f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347654b6961a91b873bc6538be3de19441a2f4fbcea68dc9124e3c8915197f5a->enter($__internal_347654b6961a91b873bc6538be3de19441a2f4fbcea68dc9124e3c8915197f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cef2c34be7595d0171b373c89fc92b8a8b84c921d04aa4abead40594bf913c3d->leave($__internal_cef2c34be7595d0171b373c89fc92b8a8b84c921d04aa4abead40594bf913c3d_prof);

        
        $__internal_347654b6961a91b873bc6538be3de19441a2f4fbcea68dc9124e3c8915197f5a->leave($__internal_347654b6961a91b873bc6538be3de19441a2f4fbcea68dc9124e3c8915197f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
