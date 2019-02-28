<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_43e8767649e0c01b6ff70b6b2e8eac481b80ea27c2cd413707b3041f5bce14f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4cbda772f03d44b5ba60b0cbd075cab04bcb0fe5f04e9ab28ac9ba0566cdd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4cbda772f03d44b5ba60b0cbd075cab04bcb0fe5f04e9ab28ac9ba0566cdd66->enter($__internal_d4cbda772f03d44b5ba60b0cbd075cab04bcb0fe5f04e9ab28ac9ba0566cdd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_f7c973ea89b7096aa0a89fc0405f031a65fcd47d5bb11c7a5da993a37f57bc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c973ea89b7096aa0a89fc0405f031a65fcd47d5bb11c7a5da993a37f57bc50->enter($__internal_f7c973ea89b7096aa0a89fc0405f031a65fcd47d5bb11c7a5da993a37f57bc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4cbda772f03d44b5ba60b0cbd075cab04bcb0fe5f04e9ab28ac9ba0566cdd66->leave($__internal_d4cbda772f03d44b5ba60b0cbd075cab04bcb0fe5f04e9ab28ac9ba0566cdd66_prof);

        
        $__internal_f7c973ea89b7096aa0a89fc0405f031a65fcd47d5bb11c7a5da993a37f57bc50->leave($__internal_f7c973ea89b7096aa0a89fc0405f031a65fcd47d5bb11c7a5da993a37f57bc50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0404aad410289ae0d7e793d3cdd200561f6866d5a9d071430314838e4a9e9818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0404aad410289ae0d7e793d3cdd200561f6866d5a9d071430314838e4a9e9818->enter($__internal_0404aad410289ae0d7e793d3cdd200561f6866d5a9d071430314838e4a9e9818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e1a1d0e1123801a6938e8fd1e651ea152a54e5ccca7876500679d4ae3b395b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1a1d0e1123801a6938e8fd1e651ea152a54e5ccca7876500679d4ae3b395b7->enter($__internal_5e1a1d0e1123801a6938e8fd1e651ea152a54e5ccca7876500679d4ae3b395b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_5e1a1d0e1123801a6938e8fd1e651ea152a54e5ccca7876500679d4ae3b395b7->leave($__internal_5e1a1d0e1123801a6938e8fd1e651ea152a54e5ccca7876500679d4ae3b395b7_prof);

        
        $__internal_0404aad410289ae0d7e793d3cdd200561f6866d5a9d071430314838e4a9e9818->leave($__internal_0404aad410289ae0d7e793d3cdd200561f6866d5a9d071430314838e4a9e9818_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
