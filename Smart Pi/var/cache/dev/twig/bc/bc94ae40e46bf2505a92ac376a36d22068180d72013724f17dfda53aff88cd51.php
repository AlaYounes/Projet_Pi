<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_6fe016b384d946536db9977a2379b3e8695f70767918b802af508b01f4f18c42 extends Twig_Template
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
        $__internal_eabb2f8b9df5079ad487be664efd187d5e2ef1d253a573e3d18f01a89f52efeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eabb2f8b9df5079ad487be664efd187d5e2ef1d253a573e3d18f01a89f52efeb->enter($__internal_eabb2f8b9df5079ad487be664efd187d5e2ef1d253a573e3d18f01a89f52efeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_090714f0b2b370ed93c39d9e7da7056eb3a2cc8c363449cbca78d4e6e0c4c3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090714f0b2b370ed93c39d9e7da7056eb3a2cc8c363449cbca78d4e6e0c4c3f3->enter($__internal_090714f0b2b370ed93c39d9e7da7056eb3a2cc8c363449cbca78d4e6e0c4c3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_eabb2f8b9df5079ad487be664efd187d5e2ef1d253a573e3d18f01a89f52efeb->leave($__internal_eabb2f8b9df5079ad487be664efd187d5e2ef1d253a573e3d18f01a89f52efeb_prof);

        
        $__internal_090714f0b2b370ed93c39d9e7da7056eb3a2cc8c363449cbca78d4e6e0c4c3f3->leave($__internal_090714f0b2b370ed93c39d9e7da7056eb3a2cc8c363449cbca78d4e6e0c4c3f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
