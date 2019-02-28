<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_2974673336e0f970070399f3a86702be593388763b4da63916c0d5889c1a9627 extends Twig_Template
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
        $__internal_3b1e39372367b310fcc86be1ba277a0697314f97d884028beb73c3a7396606fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1e39372367b310fcc86be1ba277a0697314f97d884028beb73c3a7396606fa->enter($__internal_3b1e39372367b310fcc86be1ba277a0697314f97d884028beb73c3a7396606fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_51fc5fcc51ebd9a45bc32412a6a1e638a4175e8424cae389d5867507866cdf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fc5fcc51ebd9a45bc32412a6a1e638a4175e8424cae389d5867507866cdf89->enter($__internal_51fc5fcc51ebd9a45bc32412a6a1e638a4175e8424cae389d5867507866cdf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_3b1e39372367b310fcc86be1ba277a0697314f97d884028beb73c3a7396606fa->leave($__internal_3b1e39372367b310fcc86be1ba277a0697314f97d884028beb73c3a7396606fa_prof);

        
        $__internal_51fc5fcc51ebd9a45bc32412a6a1e638a4175e8424cae389d5867507866cdf89->leave($__internal_51fc5fcc51ebd9a45bc32412a6a1e638a4175e8424cae389d5867507866cdf89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
