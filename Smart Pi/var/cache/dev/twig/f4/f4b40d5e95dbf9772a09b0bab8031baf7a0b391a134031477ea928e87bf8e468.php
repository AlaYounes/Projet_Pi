<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d55dbffe094c253337ace11f5cfbb9f5402c0e22b83b55db5004485fff5b1d6c extends Twig_Template
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
        $__internal_9ecd171a81b8a77b461c9241b54cba93f1abda37796653c0902414fb058aed00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ecd171a81b8a77b461c9241b54cba93f1abda37796653c0902414fb058aed00->enter($__internal_9ecd171a81b8a77b461c9241b54cba93f1abda37796653c0902414fb058aed00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_222c2efd085a6fc7e3e9c8db62e93e3c8575d4b0273ddcc9f08b625b12f7f1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222c2efd085a6fc7e3e9c8db62e93e3c8575d4b0273ddcc9f08b625b12f7f1dd->enter($__internal_222c2efd085a6fc7e3e9c8db62e93e3c8575d4b0273ddcc9f08b625b12f7f1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_9ecd171a81b8a77b461c9241b54cba93f1abda37796653c0902414fb058aed00->leave($__internal_9ecd171a81b8a77b461c9241b54cba93f1abda37796653c0902414fb058aed00_prof);

        
        $__internal_222c2efd085a6fc7e3e9c8db62e93e3c8575d4b0273ddcc9f08b625b12f7f1dd->leave($__internal_222c2efd085a6fc7e3e9c8db62e93e3c8575d4b0273ddcc9f08b625b12f7f1dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
