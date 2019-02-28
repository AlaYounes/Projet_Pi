<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_47290ff778b531a7eb9822ab947bc077b19b2992a13407108fd5ecb44886edcf extends Twig_Template
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
        $__internal_35ce57c58230d299fe17d582f9f76593f3653d9007849c3cc118ae3665f42d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ce57c58230d299fe17d582f9f76593f3653d9007849c3cc118ae3665f42d80->enter($__internal_35ce57c58230d299fe17d582f9f76593f3653d9007849c3cc118ae3665f42d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ee1788043f3de62412a5e99d0ba5ce23857436ae9d7608517ed691da1768f2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1788043f3de62412a5e99d0ba5ce23857436ae9d7608517ed691da1768f2ff->enter($__internal_ee1788043f3de62412a5e99d0ba5ce23857436ae9d7608517ed691da1768f2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_35ce57c58230d299fe17d582f9f76593f3653d9007849c3cc118ae3665f42d80->leave($__internal_35ce57c58230d299fe17d582f9f76593f3653d9007849c3cc118ae3665f42d80_prof);

        
        $__internal_ee1788043f3de62412a5e99d0ba5ce23857436ae9d7608517ed691da1768f2ff->leave($__internal_ee1788043f3de62412a5e99d0ba5ce23857436ae9d7608517ed691da1768f2ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
