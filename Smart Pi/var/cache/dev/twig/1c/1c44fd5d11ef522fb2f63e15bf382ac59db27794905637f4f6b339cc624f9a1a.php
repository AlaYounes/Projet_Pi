<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0fd96a72fd3d41bf2fded23c37a6ffded5869fe088d11b3a90847c57ec2a3292 extends Twig_Template
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
        $__internal_1b2df0c61a73148d17312d90beb274ff19d9dd6922f64662fac7bab19e3fb944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2df0c61a73148d17312d90beb274ff19d9dd6922f64662fac7bab19e3fb944->enter($__internal_1b2df0c61a73148d17312d90beb274ff19d9dd6922f64662fac7bab19e3fb944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3c5277128afc96a1ad359999aef3c97188ed5a2efe22e5c41b6d902b4a1159b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5277128afc96a1ad359999aef3c97188ed5a2efe22e5c41b6d902b4a1159b2->enter($__internal_3c5277128afc96a1ad359999aef3c97188ed5a2efe22e5c41b6d902b4a1159b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1b2df0c61a73148d17312d90beb274ff19d9dd6922f64662fac7bab19e3fb944->leave($__internal_1b2df0c61a73148d17312d90beb274ff19d9dd6922f64662fac7bab19e3fb944_prof);

        
        $__internal_3c5277128afc96a1ad359999aef3c97188ed5a2efe22e5c41b6d902b4a1159b2->leave($__internal_3c5277128afc96a1ad359999aef3c97188ed5a2efe22e5c41b6d902b4a1159b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
