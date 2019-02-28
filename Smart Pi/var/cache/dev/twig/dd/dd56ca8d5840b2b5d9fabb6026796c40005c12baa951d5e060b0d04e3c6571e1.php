<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_d0dcfd5748ddf701c86503f300765f7f01c69f3fadb61b1898f4294934d32abe extends Twig_Template
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
        $__internal_403abee1202882ed5c12bf0489e66a7413d281c3e70ec9cf9e5b3b218aa8047a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403abee1202882ed5c12bf0489e66a7413d281c3e70ec9cf9e5b3b218aa8047a->enter($__internal_403abee1202882ed5c12bf0489e66a7413d281c3e70ec9cf9e5b3b218aa8047a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_c7b8f8bfc2b22c777a42be87a8b0046d7f63b3e85e4177b90f40c74414364667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b8f8bfc2b22c777a42be87a8b0046d7f63b3e85e4177b90f40c74414364667->enter($__internal_c7b8f8bfc2b22c777a42be87a8b0046d7f63b3e85e4177b90f40c74414364667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_403abee1202882ed5c12bf0489e66a7413d281c3e70ec9cf9e5b3b218aa8047a->leave($__internal_403abee1202882ed5c12bf0489e66a7413d281c3e70ec9cf9e5b3b218aa8047a_prof);

        
        $__internal_c7b8f8bfc2b22c777a42be87a8b0046d7f63b3e85e4177b90f40c74414364667->leave($__internal_c7b8f8bfc2b22c777a42be87a8b0046d7f63b3e85e4177b90f40c74414364667_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
