<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e898a4d38f4c99226d2964b2012a48585a236b353dfd717bfadb89f91b8014a5 extends Twig_Template
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
        $__internal_849cf043621e3e27cb2685af1c778da30c5e3c886ddbf832f99b8939876d3e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849cf043621e3e27cb2685af1c778da30c5e3c886ddbf832f99b8939876d3e53->enter($__internal_849cf043621e3e27cb2685af1c778da30c5e3c886ddbf832f99b8939876d3e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f43310773aec063fdab6a7058a8c309335b62f1dfad39996c492e4076cf7bb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43310773aec063fdab6a7058a8c309335b62f1dfad39996c492e4076cf7bb3b->enter($__internal_f43310773aec063fdab6a7058a8c309335b62f1dfad39996c492e4076cf7bb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_849cf043621e3e27cb2685af1c778da30c5e3c886ddbf832f99b8939876d3e53->leave($__internal_849cf043621e3e27cb2685af1c778da30c5e3c886ddbf832f99b8939876d3e53_prof);

        
        $__internal_f43310773aec063fdab6a7058a8c309335b62f1dfad39996c492e4076cf7bb3b->leave($__internal_f43310773aec063fdab6a7058a8c309335b62f1dfad39996c492e4076cf7bb3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
