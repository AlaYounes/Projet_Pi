<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_dddf7044d6e0d9c7a96a8f87893b83fbd4070ab08f42d8c2d34a05a13cebca90 extends Twig_Template
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
        $__internal_aadf3603aa2c6393d1d03c547645d41b556c4405e3241227b83bd469a1a337de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aadf3603aa2c6393d1d03c547645d41b556c4405e3241227b83bd469a1a337de->enter($__internal_aadf3603aa2c6393d1d03c547645d41b556c4405e3241227b83bd469a1a337de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_220c0c980a7984e777b91658f5d0638cefbfd780699115f9474951e162859239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220c0c980a7984e777b91658f5d0638cefbfd780699115f9474951e162859239->enter($__internal_220c0c980a7984e777b91658f5d0638cefbfd780699115f9474951e162859239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_aadf3603aa2c6393d1d03c547645d41b556c4405e3241227b83bd469a1a337de->leave($__internal_aadf3603aa2c6393d1d03c547645d41b556c4405e3241227b83bd469a1a337de_prof);

        
        $__internal_220c0c980a7984e777b91658f5d0638cefbfd780699115f9474951e162859239->leave($__internal_220c0c980a7984e777b91658f5d0638cefbfd780699115f9474951e162859239_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
