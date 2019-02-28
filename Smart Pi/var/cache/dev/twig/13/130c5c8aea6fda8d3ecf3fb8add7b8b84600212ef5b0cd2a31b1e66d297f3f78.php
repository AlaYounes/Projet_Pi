<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d26ae725af88d5d12b18d22032d755ec8d2e8748a4064b8b01ad1774720880d8 extends Twig_Template
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
        $__internal_e59b54d1e5ca6eda0a3a29234f29c4a7eb2b9a0862320d8da53bd0d58f10bde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59b54d1e5ca6eda0a3a29234f29c4a7eb2b9a0862320d8da53bd0d58f10bde2->enter($__internal_e59b54d1e5ca6eda0a3a29234f29c4a7eb2b9a0862320d8da53bd0d58f10bde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_9941dae1c2e1d7acf97583fedf08760b8e170d3bf57da6c09b7fc03e33058c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9941dae1c2e1d7acf97583fedf08760b8e170d3bf57da6c09b7fc03e33058c97->enter($__internal_9941dae1c2e1d7acf97583fedf08760b8e170d3bf57da6c09b7fc03e33058c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e59b54d1e5ca6eda0a3a29234f29c4a7eb2b9a0862320d8da53bd0d58f10bde2->leave($__internal_e59b54d1e5ca6eda0a3a29234f29c4a7eb2b9a0862320d8da53bd0d58f10bde2_prof);

        
        $__internal_9941dae1c2e1d7acf97583fedf08760b8e170d3bf57da6c09b7fc03e33058c97->leave($__internal_9941dae1c2e1d7acf97583fedf08760b8e170d3bf57da6c09b7fc03e33058c97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
