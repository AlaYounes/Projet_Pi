<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_993bba3cbfc61b91ecee350f7487af200a2ec4c729c9a646df43ef6f32132ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_14266c1a87eb376108cfe65ae3118258080b966b9d7dc921337cab898802f0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14266c1a87eb376108cfe65ae3118258080b966b9d7dc921337cab898802f0b4->enter($__internal_14266c1a87eb376108cfe65ae3118258080b966b9d7dc921337cab898802f0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_49393ed23a268e48c42e746c96f40f5732ddde22aa9ca74e20ae07f5d83066e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49393ed23a268e48c42e746c96f40f5732ddde22aa9ca74e20ae07f5d83066e5->enter($__internal_49393ed23a268e48c42e746c96f40f5732ddde22aa9ca74e20ae07f5d83066e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14266c1a87eb376108cfe65ae3118258080b966b9d7dc921337cab898802f0b4->leave($__internal_14266c1a87eb376108cfe65ae3118258080b966b9d7dc921337cab898802f0b4_prof);

        
        $__internal_49393ed23a268e48c42e746c96f40f5732ddde22aa9ca74e20ae07f5d83066e5->leave($__internal_49393ed23a268e48c42e746c96f40f5732ddde22aa9ca74e20ae07f5d83066e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47edf57abafdb6b3f71b78efc5e4e0c64485a64073de4e200959459348d8a416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47edf57abafdb6b3f71b78efc5e4e0c64485a64073de4e200959459348d8a416->enter($__internal_47edf57abafdb6b3f71b78efc5e4e0c64485a64073de4e200959459348d8a416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71028b603e08f0bb943c9a5680acb78f81f6702f0585c5a738ff1be82b9821a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71028b603e08f0bb943c9a5680acb78f81f6702f0585c5a738ff1be82b9821a5->enter($__internal_71028b603e08f0bb943c9a5680acb78f81f6702f0585c5a738ff1be82b9821a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_71028b603e08f0bb943c9a5680acb78f81f6702f0585c5a738ff1be82b9821a5->leave($__internal_71028b603e08f0bb943c9a5680acb78f81f6702f0585c5a738ff1be82b9821a5_prof);

        
        $__internal_47edf57abafdb6b3f71b78efc5e4e0c64485a64073de4e200959459348d8a416->leave($__internal_47edf57abafdb6b3f71b78efc5e4e0c64485a64073de4e200959459348d8a416_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
