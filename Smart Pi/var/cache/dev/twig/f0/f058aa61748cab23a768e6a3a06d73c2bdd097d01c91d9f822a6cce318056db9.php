<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_6d741e7fd21f29d17c9a9734e2f7d316f9528ebe383f0abd64d344a6910aaa13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_c9f9e0f98045d426b5d71eea68047e170590a92825abf5b3f57ed0b3f16e8a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f9e0f98045d426b5d71eea68047e170590a92825abf5b3f57ed0b3f16e8a85->enter($__internal_c9f9e0f98045d426b5d71eea68047e170590a92825abf5b3f57ed0b3f16e8a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_847b08409951eb0788b91a3761c7f6f10f3d250c527aa071aef1170bd6e46e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847b08409951eb0788b91a3761c7f6f10f3d250c527aa071aef1170bd6e46e18->enter($__internal_847b08409951eb0788b91a3761c7f6f10f3d250c527aa071aef1170bd6e46e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f9e0f98045d426b5d71eea68047e170590a92825abf5b3f57ed0b3f16e8a85->leave($__internal_c9f9e0f98045d426b5d71eea68047e170590a92825abf5b3f57ed0b3f16e8a85_prof);

        
        $__internal_847b08409951eb0788b91a3761c7f6f10f3d250c527aa071aef1170bd6e46e18->leave($__internal_847b08409951eb0788b91a3761c7f6f10f3d250c527aa071aef1170bd6e46e18_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a422372ad7c6017c594d5eb6ff94bb6c315ae4dbf4b5ae3d6596323ac545efc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a422372ad7c6017c594d5eb6ff94bb6c315ae4dbf4b5ae3d6596323ac545efc1->enter($__internal_a422372ad7c6017c594d5eb6ff94bb6c315ae4dbf4b5ae3d6596323ac545efc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a3dcb811ddc0699554e6842b9428c268ffb8384e21e152965f264cd532f6b2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3dcb811ddc0699554e6842b9428c268ffb8384e21e152965f264cd532f6b2fd->enter($__internal_a3dcb811ddc0699554e6842b9428c268ffb8384e21e152965f264cd532f6b2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_a3dcb811ddc0699554e6842b9428c268ffb8384e21e152965f264cd532f6b2fd->leave($__internal_a3dcb811ddc0699554e6842b9428c268ffb8384e21e152965f264cd532f6b2fd_prof);

        
        $__internal_a422372ad7c6017c594d5eb6ff94bb6c315ae4dbf4b5ae3d6596323ac545efc1->leave($__internal_a422372ad7c6017c594d5eb6ff94bb6c315ae4dbf4b5ae3d6596323ac545efc1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
