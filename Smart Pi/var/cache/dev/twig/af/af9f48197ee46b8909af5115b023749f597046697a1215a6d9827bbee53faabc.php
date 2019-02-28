<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b2e232c0e420f813d01fb0c88b8317005fbdc0eda6503adc28e55ca9f3f84d87 extends Twig_Template
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
        $__internal_3bed1244b3df9d9400dd1751ab7d578aed3067f2274635c76528ceb8a63b2582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bed1244b3df9d9400dd1751ab7d578aed3067f2274635c76528ceb8a63b2582->enter($__internal_3bed1244b3df9d9400dd1751ab7d578aed3067f2274635c76528ceb8a63b2582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_f84db321b99a7779eb99baac1240ba9742515c25513e5914e64565dcaad5031a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84db321b99a7779eb99baac1240ba9742515c25513e5914e64565dcaad5031a->enter($__internal_f84db321b99a7779eb99baac1240ba9742515c25513e5914e64565dcaad5031a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3bed1244b3df9d9400dd1751ab7d578aed3067f2274635c76528ceb8a63b2582->leave($__internal_3bed1244b3df9d9400dd1751ab7d578aed3067f2274635c76528ceb8a63b2582_prof);

        
        $__internal_f84db321b99a7779eb99baac1240ba9742515c25513e5914e64565dcaad5031a->leave($__internal_f84db321b99a7779eb99baac1240ba9742515c25513e5914e64565dcaad5031a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
