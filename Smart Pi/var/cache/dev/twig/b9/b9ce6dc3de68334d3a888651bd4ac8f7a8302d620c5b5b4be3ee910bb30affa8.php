<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fef3cb1f540a8735a097268590789260ecbdef7590e46ea08e478800b14b6b1f extends Twig_Template
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
        $__internal_ec2b5fcf9f35e61acbb0d6e9dde5564ca73b8ca48f8e9bbc066d69e5c45c4eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2b5fcf9f35e61acbb0d6e9dde5564ca73b8ca48f8e9bbc066d69e5c45c4eb0->enter($__internal_ec2b5fcf9f35e61acbb0d6e9dde5564ca73b8ca48f8e9bbc066d69e5c45c4eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_19477e3045de12b85ad0b51064515a47d9a83451b6b265604e192a3745a1b845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19477e3045de12b85ad0b51064515a47d9a83451b6b265604e192a3745a1b845->enter($__internal_19477e3045de12b85ad0b51064515a47d9a83451b6b265604e192a3745a1b845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ec2b5fcf9f35e61acbb0d6e9dde5564ca73b8ca48f8e9bbc066d69e5c45c4eb0->leave($__internal_ec2b5fcf9f35e61acbb0d6e9dde5564ca73b8ca48f8e9bbc066d69e5c45c4eb0_prof);

        
        $__internal_19477e3045de12b85ad0b51064515a47d9a83451b6b265604e192a3745a1b845->leave($__internal_19477e3045de12b85ad0b51064515a47d9a83451b6b265604e192a3745a1b845_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
