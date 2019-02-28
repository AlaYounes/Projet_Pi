<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_64e796ff6428f0b362135473248d17737f5304f813d87ff93f0a989f6cc95a1a extends Twig_Template
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
        $__internal_3ba86b4d95b2549117a97f76e2a4ec3892cfb5e8ec72755a9da61a11f004eb7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba86b4d95b2549117a97f76e2a4ec3892cfb5e8ec72755a9da61a11f004eb7a->enter($__internal_3ba86b4d95b2549117a97f76e2a4ec3892cfb5e8ec72755a9da61a11f004eb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_815bd5b5907e8342fc2186b5dad140fa89b94d56b24df388ccaf369a7a86a0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815bd5b5907e8342fc2186b5dad140fa89b94d56b24df388ccaf369a7a86a0ab->enter($__internal_815bd5b5907e8342fc2186b5dad140fa89b94d56b24df388ccaf369a7a86a0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_3ba86b4d95b2549117a97f76e2a4ec3892cfb5e8ec72755a9da61a11f004eb7a->leave($__internal_3ba86b4d95b2549117a97f76e2a4ec3892cfb5e8ec72755a9da61a11f004eb7a_prof);

        
        $__internal_815bd5b5907e8342fc2186b5dad140fa89b94d56b24df388ccaf369a7a86a0ab->leave($__internal_815bd5b5907e8342fc2186b5dad140fa89b94d56b24df388ccaf369a7a86a0ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
