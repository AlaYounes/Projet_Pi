<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_db490f18cc5f74150827920c1dfef5d18a35a2df99e145fc8932a2e8d793f253 extends Twig_Template
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
        $__internal_7a6a1c7e974690d8a10c9fa7414cb7a102c475a5f3e5e7ce7287ab4d536c6a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6a1c7e974690d8a10c9fa7414cb7a102c475a5f3e5e7ce7287ab4d536c6a42->enter($__internal_7a6a1c7e974690d8a10c9fa7414cb7a102c475a5f3e5e7ce7287ab4d536c6a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1e3d8ceea7380a59b8c8df76d72131e1e7ad211c712bf779a35aa218ecbb2251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3d8ceea7380a59b8c8df76d72131e1e7ad211c712bf779a35aa218ecbb2251->enter($__internal_1e3d8ceea7380a59b8c8df76d72131e1e7ad211c712bf779a35aa218ecbb2251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7a6a1c7e974690d8a10c9fa7414cb7a102c475a5f3e5e7ce7287ab4d536c6a42->leave($__internal_7a6a1c7e974690d8a10c9fa7414cb7a102c475a5f3e5e7ce7287ab4d536c6a42_prof);

        
        $__internal_1e3d8ceea7380a59b8c8df76d72131e1e7ad211c712bf779a35aa218ecbb2251->leave($__internal_1e3d8ceea7380a59b8c8df76d72131e1e7ad211c712bf779a35aa218ecbb2251_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
