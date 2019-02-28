<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_486b3b1fd43f3f6ca2eda9e28620b7d1cde17755710ba06d1e7b4f19ae5d030c extends Twig_Template
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
        $__internal_5f36044bbf6d29cda6231515f3fd3955b8e7399f91d8492584069f2253f02692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f36044bbf6d29cda6231515f3fd3955b8e7399f91d8492584069f2253f02692->enter($__internal_5f36044bbf6d29cda6231515f3fd3955b8e7399f91d8492584069f2253f02692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ae504018cfc76cdafd2f664daa71ceba0b8f1bba68aab00fad039dfeb189ec04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae504018cfc76cdafd2f664daa71ceba0b8f1bba68aab00fad039dfeb189ec04->enter($__internal_ae504018cfc76cdafd2f664daa71ceba0b8f1bba68aab00fad039dfeb189ec04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_5f36044bbf6d29cda6231515f3fd3955b8e7399f91d8492584069f2253f02692->leave($__internal_5f36044bbf6d29cda6231515f3fd3955b8e7399f91d8492584069f2253f02692_prof);

        
        $__internal_ae504018cfc76cdafd2f664daa71ceba0b8f1bba68aab00fad039dfeb189ec04->leave($__internal_ae504018cfc76cdafd2f664daa71ceba0b8f1bba68aab00fad039dfeb189ec04_prof);

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
