<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_9d1339d353cce0d6836c40f8b065793a5a0742b556eb9e651a5cf55c34dbd2b3 extends Twig_Template
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
        $__internal_a5fd71b59d7e91da0ddc4585a2e7da56bdf959df66c9dcd32a336290e6ad3e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fd71b59d7e91da0ddc4585a2e7da56bdf959df66c9dcd32a336290e6ad3e8e->enter($__internal_a5fd71b59d7e91da0ddc4585a2e7da56bdf959df66c9dcd32a336290e6ad3e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_2a3ef129d8f96045a679d5903dfa9a8c6a25391996afbb3d7a5b2e17f6e757ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3ef129d8f96045a679d5903dfa9a8c6a25391996afbb3d7a5b2e17f6e757ef->enter($__internal_2a3ef129d8f96045a679d5903dfa9a8c6a25391996afbb3d7a5b2e17f6e757ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a5fd71b59d7e91da0ddc4585a2e7da56bdf959df66c9dcd32a336290e6ad3e8e->leave($__internal_a5fd71b59d7e91da0ddc4585a2e7da56bdf959df66c9dcd32a336290e6ad3e8e_prof);

        
        $__internal_2a3ef129d8f96045a679d5903dfa9a8c6a25391996afbb3d7a5b2e17f6e757ef->leave($__internal_2a3ef129d8f96045a679d5903dfa9a8c6a25391996afbb3d7a5b2e17f6e757ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
