<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_1705f910f470b2565e8cf1bd6d444c626c1dbc9c536061aa05783e036f930c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_94738b7ecfc3fff15264d497b079babe8588925f8b9118a5d70a536fac8d5ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94738b7ecfc3fff15264d497b079babe8588925f8b9118a5d70a536fac8d5ff6->enter($__internal_94738b7ecfc3fff15264d497b079babe8588925f8b9118a5d70a536fac8d5ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2435ce2d8504a7c83b1cfeae75322ba166a3214293e84cef625daa13fb0d1586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2435ce2d8504a7c83b1cfeae75322ba166a3214293e84cef625daa13fb0d1586->enter($__internal_2435ce2d8504a7c83b1cfeae75322ba166a3214293e84cef625daa13fb0d1586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94738b7ecfc3fff15264d497b079babe8588925f8b9118a5d70a536fac8d5ff6->leave($__internal_94738b7ecfc3fff15264d497b079babe8588925f8b9118a5d70a536fac8d5ff6_prof);

        
        $__internal_2435ce2d8504a7c83b1cfeae75322ba166a3214293e84cef625daa13fb0d1586->leave($__internal_2435ce2d8504a7c83b1cfeae75322ba166a3214293e84cef625daa13fb0d1586_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_470f7931b2e14cfe6d521ef177ea556652852a06c58ebf10a05ca24d1303194f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470f7931b2e14cfe6d521ef177ea556652852a06c58ebf10a05ca24d1303194f->enter($__internal_470f7931b2e14cfe6d521ef177ea556652852a06c58ebf10a05ca24d1303194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bca8a8bd88c3ce04044262b8d52568b5a2f03a67553b5fa197f6350b3e9e0dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca8a8bd88c3ce04044262b8d52568b5a2f03a67553b5fa197f6350b3e9e0dac->enter($__internal_bca8a8bd88c3ce04044262b8d52568b5a2f03a67553b5fa197f6350b3e9e0dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bca8a8bd88c3ce04044262b8d52568b5a2f03a67553b5fa197f6350b3e9e0dac->leave($__internal_bca8a8bd88c3ce04044262b8d52568b5a2f03a67553b5fa197f6350b3e9e0dac_prof);

        
        $__internal_470f7931b2e14cfe6d521ef177ea556652852a06c58ebf10a05ca24d1303194f->leave($__internal_470f7931b2e14cfe6d521ef177ea556652852a06c58ebf10a05ca24d1303194f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
