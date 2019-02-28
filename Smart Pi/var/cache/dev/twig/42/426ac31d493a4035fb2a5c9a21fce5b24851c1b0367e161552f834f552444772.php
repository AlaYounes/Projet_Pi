<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d0dd9e229ebbeada78ffcf626980abb1eb9382855c9ab3bbe04d18167be3c2d4 extends Twig_Template
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
        $__internal_ac946fdb4eb2a30e765dd03b0afb77d01a94b5277f18b5b429cc64e5bde226a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac946fdb4eb2a30e765dd03b0afb77d01a94b5277f18b5b429cc64e5bde226a2->enter($__internal_ac946fdb4eb2a30e765dd03b0afb77d01a94b5277f18b5b429cc64e5bde226a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_825a65c5e94e79320d2e5aa8dddb219c765ec730c8fd4fc4c4fbe0a89c7c932d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825a65c5e94e79320d2e5aa8dddb219c765ec730c8fd4fc4c4fbe0a89c7c932d->enter($__internal_825a65c5e94e79320d2e5aa8dddb219c765ec730c8fd4fc4c4fbe0a89c7c932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ac946fdb4eb2a30e765dd03b0afb77d01a94b5277f18b5b429cc64e5bde226a2->leave($__internal_ac946fdb4eb2a30e765dd03b0afb77d01a94b5277f18b5b429cc64e5bde226a2_prof);

        
        $__internal_825a65c5e94e79320d2e5aa8dddb219c765ec730c8fd4fc4c4fbe0a89c7c932d->leave($__internal_825a65c5e94e79320d2e5aa8dddb219c765ec730c8fd4fc4c4fbe0a89c7c932d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
