<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_cb7721fffaee45cdf1b7a72b95b994316834dcf2b7a2a2527973846051bc16d2 extends Twig_Template
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
        $__internal_c116c440dc4d85b2541f291b64a35858869d29b3e7c83d89101c588ebfad01b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c116c440dc4d85b2541f291b64a35858869d29b3e7c83d89101c588ebfad01b7->enter($__internal_c116c440dc4d85b2541f291b64a35858869d29b3e7c83d89101c588ebfad01b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_bed912485634d73657f18527bf723fc89540d0aae3308b2734c497a50ae2865e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed912485634d73657f18527bf723fc89540d0aae3308b2734c497a50ae2865e->enter($__internal_bed912485634d73657f18527bf723fc89540d0aae3308b2734c497a50ae2865e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c116c440dc4d85b2541f291b64a35858869d29b3e7c83d89101c588ebfad01b7->leave($__internal_c116c440dc4d85b2541f291b64a35858869d29b3e7c83d89101c588ebfad01b7_prof);

        
        $__internal_bed912485634d73657f18527bf723fc89540d0aae3308b2734c497a50ae2865e->leave($__internal_bed912485634d73657f18527bf723fc89540d0aae3308b2734c497a50ae2865e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
