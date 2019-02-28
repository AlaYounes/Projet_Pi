<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3ec1f95f6f49ac974d13a0bd9f7801d06559bf33aa54202f51535ea4307814c4 extends Twig_Template
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
        $__internal_ff1d5d57e0e028f0badd231a7eddf1b0647cec94eeb16b78736996cd110cd142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1d5d57e0e028f0badd231a7eddf1b0647cec94eeb16b78736996cd110cd142->enter($__internal_ff1d5d57e0e028f0badd231a7eddf1b0647cec94eeb16b78736996cd110cd142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_8a0a850f3f1fb7dc2606dcd90b548645812ec1ea84020da00a0ec35c297ac29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0a850f3f1fb7dc2606dcd90b548645812ec1ea84020da00a0ec35c297ac29e->enter($__internal_8a0a850f3f1fb7dc2606dcd90b548645812ec1ea84020da00a0ec35c297ac29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ff1d5d57e0e028f0badd231a7eddf1b0647cec94eeb16b78736996cd110cd142->leave($__internal_ff1d5d57e0e028f0badd231a7eddf1b0647cec94eeb16b78736996cd110cd142_prof);

        
        $__internal_8a0a850f3f1fb7dc2606dcd90b548645812ec1ea84020da00a0ec35c297ac29e->leave($__internal_8a0a850f3f1fb7dc2606dcd90b548645812ec1ea84020da00a0ec35c297ac29e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
