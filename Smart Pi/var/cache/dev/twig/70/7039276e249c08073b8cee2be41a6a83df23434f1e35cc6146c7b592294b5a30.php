<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c12ff83445ef1dbe6643a70f4072f554b090927d3b275633a4af1a89f76a1547 extends Twig_Template
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
        $__internal_73c519fa37b876c3ead87aa386ffa112bf8b518f0c8cefc45de7361be1524f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c519fa37b876c3ead87aa386ffa112bf8b518f0c8cefc45de7361be1524f49->enter($__internal_73c519fa37b876c3ead87aa386ffa112bf8b518f0c8cefc45de7361be1524f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f04f5b33b8cb3db95d0b9a18a3d1b99e011bdd3ac3cf2657095bbcc80fa45851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04f5b33b8cb3db95d0b9a18a3d1b99e011bdd3ac3cf2657095bbcc80fa45851->enter($__internal_f04f5b33b8cb3db95d0b9a18a3d1b99e011bdd3ac3cf2657095bbcc80fa45851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_73c519fa37b876c3ead87aa386ffa112bf8b518f0c8cefc45de7361be1524f49->leave($__internal_73c519fa37b876c3ead87aa386ffa112bf8b518f0c8cefc45de7361be1524f49_prof);

        
        $__internal_f04f5b33b8cb3db95d0b9a18a3d1b99e011bdd3ac3cf2657095bbcc80fa45851->leave($__internal_f04f5b33b8cb3db95d0b9a18a3d1b99e011bdd3ac3cf2657095bbcc80fa45851_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
