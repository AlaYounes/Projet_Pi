<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_4ef87c4033ef5d5e868b70a6a5547eaa9bdcb5cdf5704d3f30b2106a5e24169a extends Twig_Template
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
        $__internal_e43061e97ed95dd3e5769b8235fd678cd70817655a40c3f977e65574bacd15b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43061e97ed95dd3e5769b8235fd678cd70817655a40c3f977e65574bacd15b8->enter($__internal_e43061e97ed95dd3e5769b8235fd678cd70817655a40c3f977e65574bacd15b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_d95908df31092fdb42bef2b1b5a80061803f1cfffb0e9fc75eea0aad7134f1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95908df31092fdb42bef2b1b5a80061803f1cfffb0e9fc75eea0aad7134f1f6->enter($__internal_d95908df31092fdb42bef2b1b5a80061803f1cfffb0e9fc75eea0aad7134f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e43061e97ed95dd3e5769b8235fd678cd70817655a40c3f977e65574bacd15b8->leave($__internal_e43061e97ed95dd3e5769b8235fd678cd70817655a40c3f977e65574bacd15b8_prof);

        
        $__internal_d95908df31092fdb42bef2b1b5a80061803f1cfffb0e9fc75eea0aad7134f1f6->leave($__internal_d95908df31092fdb42bef2b1b5a80061803f1cfffb0e9fc75eea0aad7134f1f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
