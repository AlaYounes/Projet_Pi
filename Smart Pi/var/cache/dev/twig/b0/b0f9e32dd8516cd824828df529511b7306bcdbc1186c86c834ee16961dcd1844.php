<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2f5e9c7b5f2642499250bb7e2e74c4489f4c217f86bc0204709cc79f77f6ce0e extends Twig_Template
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
        $__internal_a4e8b24af4ca7966ebfe80bb9061a460789a95dfdd7fbc55e3d4d41e57c8f493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e8b24af4ca7966ebfe80bb9061a460789a95dfdd7fbc55e3d4d41e57c8f493->enter($__internal_a4e8b24af4ca7966ebfe80bb9061a460789a95dfdd7fbc55e3d4d41e57c8f493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d214cef7548d692569e749fce64c9612ffc897d3b663e81d9118111f51eae568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d214cef7548d692569e749fce64c9612ffc897d3b663e81d9118111f51eae568->enter($__internal_d214cef7548d692569e749fce64c9612ffc897d3b663e81d9118111f51eae568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a4e8b24af4ca7966ebfe80bb9061a460789a95dfdd7fbc55e3d4d41e57c8f493->leave($__internal_a4e8b24af4ca7966ebfe80bb9061a460789a95dfdd7fbc55e3d4d41e57c8f493_prof);

        
        $__internal_d214cef7548d692569e749fce64c9612ffc897d3b663e81d9118111f51eae568->leave($__internal_d214cef7548d692569e749fce64c9612ffc897d3b663e81d9118111f51eae568_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
