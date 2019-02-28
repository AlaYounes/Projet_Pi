<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e9c86295c05d1175d37453c9a0dcedc39edb513d68dae262c580230afc466f13 extends Twig_Template
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
        $__internal_f181fe7fa3471c6a17de35f69bfee9f669f7b420bf1068beada02667fff2bc9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f181fe7fa3471c6a17de35f69bfee9f669f7b420bf1068beada02667fff2bc9e->enter($__internal_f181fe7fa3471c6a17de35f69bfee9f669f7b420bf1068beada02667fff2bc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_4a26fb4c75b14d323b1b4ab38286410ec672c5bf70b1c374846a8e0ba213cefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a26fb4c75b14d323b1b4ab38286410ec672c5bf70b1c374846a8e0ba213cefc->enter($__internal_4a26fb4c75b14d323b1b4ab38286410ec672c5bf70b1c374846a8e0ba213cefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f181fe7fa3471c6a17de35f69bfee9f669f7b420bf1068beada02667fff2bc9e->leave($__internal_f181fe7fa3471c6a17de35f69bfee9f669f7b420bf1068beada02667fff2bc9e_prof);

        
        $__internal_4a26fb4c75b14d323b1b4ab38286410ec672c5bf70b1c374846a8e0ba213cefc->leave($__internal_4a26fb4c75b14d323b1b4ab38286410ec672c5bf70b1c374846a8e0ba213cefc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
