<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_80e0528788a1e69ccf22479a2a3ead47c547de96b4a4f29e4171c62dcf5df241 extends Twig_Template
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
        $__internal_e8ccf9e81f3ac907dab9c769bac6b6efa1367d4cf5de6241284023373456e25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ccf9e81f3ac907dab9c769bac6b6efa1367d4cf5de6241284023373456e25f->enter($__internal_e8ccf9e81f3ac907dab9c769bac6b6efa1367d4cf5de6241284023373456e25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_9e4206037463e4a0175231b5da0eaa436bb5d17742cf76567d9d9a5a69ce8ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4206037463e4a0175231b5da0eaa436bb5d17742cf76567d9d9a5a69ce8ab5->enter($__internal_9e4206037463e4a0175231b5da0eaa436bb5d17742cf76567d9d9a5a69ce8ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_e8ccf9e81f3ac907dab9c769bac6b6efa1367d4cf5de6241284023373456e25f->leave($__internal_e8ccf9e81f3ac907dab9c769bac6b6efa1367d4cf5de6241284023373456e25f_prof);

        
        $__internal_9e4206037463e4a0175231b5da0eaa436bb5d17742cf76567d9d9a5a69ce8ab5->leave($__internal_9e4206037463e4a0175231b5da0eaa436bb5d17742cf76567d9d9a5a69ce8ab5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
