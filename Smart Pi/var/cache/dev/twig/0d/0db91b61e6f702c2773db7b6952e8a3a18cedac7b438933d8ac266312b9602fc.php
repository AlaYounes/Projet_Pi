<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_de49c80cf6fb6d461995631a9085c89acc7d15ef51a59f623a1723da30b7ae6e extends Twig_Template
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
        $__internal_52790f464f2532a4644ed133f257d79abce7b8a5b3fac261e689c06fccbe83de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52790f464f2532a4644ed133f257d79abce7b8a5b3fac261e689c06fccbe83de->enter($__internal_52790f464f2532a4644ed133f257d79abce7b8a5b3fac261e689c06fccbe83de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_e98ac068a96b5fd2437fb2d046e89c5b0db08990806c506a98e69fcf8cf607d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98ac068a96b5fd2437fb2d046e89c5b0db08990806c506a98e69fcf8cf607d5->enter($__internal_e98ac068a96b5fd2437fb2d046e89c5b0db08990806c506a98e69fcf8cf607d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_52790f464f2532a4644ed133f257d79abce7b8a5b3fac261e689c06fccbe83de->leave($__internal_52790f464f2532a4644ed133f257d79abce7b8a5b3fac261e689c06fccbe83de_prof);

        
        $__internal_e98ac068a96b5fd2437fb2d046e89c5b0db08990806c506a98e69fcf8cf607d5->leave($__internal_e98ac068a96b5fd2437fb2d046e89c5b0db08990806c506a98e69fcf8cf607d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
