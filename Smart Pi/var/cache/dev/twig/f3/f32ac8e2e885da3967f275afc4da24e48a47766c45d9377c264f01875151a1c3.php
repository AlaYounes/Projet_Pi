<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_c50619fedb78edc11ac301736d129dbe597d93e89bce2985fe6d180833d350c4 extends Twig_Template
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
        $__internal_ad0e84b70e7baa959b4b76b2732d03ac7fa68495a0bf1f02697edcb4ba70c922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0e84b70e7baa959b4b76b2732d03ac7fa68495a0bf1f02697edcb4ba70c922->enter($__internal_ad0e84b70e7baa959b4b76b2732d03ac7fa68495a0bf1f02697edcb4ba70c922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_7d4cf20116f8c9f31e01ccaf34c5235056fe83846dd2459752e4c95a837ea682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4cf20116f8c9f31e01ccaf34c5235056fe83846dd2459752e4c95a837ea682->enter($__internal_7d4cf20116f8c9f31e01ccaf34c5235056fe83846dd2459752e4c95a837ea682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ad0e84b70e7baa959b4b76b2732d03ac7fa68495a0bf1f02697edcb4ba70c922->leave($__internal_ad0e84b70e7baa959b4b76b2732d03ac7fa68495a0bf1f02697edcb4ba70c922_prof);

        
        $__internal_7d4cf20116f8c9f31e01ccaf34c5235056fe83846dd2459752e4c95a837ea682->leave($__internal_7d4cf20116f8c9f31e01ccaf34c5235056fe83846dd2459752e4c95a837ea682_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
