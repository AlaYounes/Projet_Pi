<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_77eb9f910e11cf1d2c87878dd037f09168ef8d7f7e8f71e9ceda00beb48ed3ee extends Twig_Template
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
        $__internal_7192bb5a033560554ab02b352791da42ae34595f7b5852f2312646c6c684da18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7192bb5a033560554ab02b352791da42ae34595f7b5852f2312646c6c684da18->enter($__internal_7192bb5a033560554ab02b352791da42ae34595f7b5852f2312646c6c684da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_ae322ff7918cdb16bfc5967351b1d1720e256ba12c368f959dfcfec07a2fdcde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae322ff7918cdb16bfc5967351b1d1720e256ba12c368f959dfcfec07a2fdcde->enter($__internal_ae322ff7918cdb16bfc5967351b1d1720e256ba12c368f959dfcfec07a2fdcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_7192bb5a033560554ab02b352791da42ae34595f7b5852f2312646c6c684da18->leave($__internal_7192bb5a033560554ab02b352791da42ae34595f7b5852f2312646c6c684da18_prof);

        
        $__internal_ae322ff7918cdb16bfc5967351b1d1720e256ba12c368f959dfcfec07a2fdcde->leave($__internal_ae322ff7918cdb16bfc5967351b1d1720e256ba12c368f959dfcfec07a2fdcde_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
