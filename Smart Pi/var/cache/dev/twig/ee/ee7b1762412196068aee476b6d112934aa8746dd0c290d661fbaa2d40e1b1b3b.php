<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_05f70c2a8217552dc72941c7ee5dbc4ad29ab5e598d7d3be8e8e899b14ddf109 extends Twig_Template
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
        $__internal_d144e18b8fa5261c48258ec08540f6e5a222e24bb41ed98efe9a93e36b18fb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d144e18b8fa5261c48258ec08540f6e5a222e24bb41ed98efe9a93e36b18fb39->enter($__internal_d144e18b8fa5261c48258ec08540f6e5a222e24bb41ed98efe9a93e36b18fb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_37be49047a03b47dd0b9960774db8d1ac7f7b8a90ea9fa8f3272908ffd60e9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37be49047a03b47dd0b9960774db8d1ac7f7b8a90ea9fa8f3272908ffd60e9d2->enter($__internal_37be49047a03b47dd0b9960774db8d1ac7f7b8a90ea9fa8f3272908ffd60e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d144e18b8fa5261c48258ec08540f6e5a222e24bb41ed98efe9a93e36b18fb39->leave($__internal_d144e18b8fa5261c48258ec08540f6e5a222e24bb41ed98efe9a93e36b18fb39_prof);

        
        $__internal_37be49047a03b47dd0b9960774db8d1ac7f7b8a90ea9fa8f3272908ffd60e9d2->leave($__internal_37be49047a03b47dd0b9960774db8d1ac7f7b8a90ea9fa8f3272908ffd60e9d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
