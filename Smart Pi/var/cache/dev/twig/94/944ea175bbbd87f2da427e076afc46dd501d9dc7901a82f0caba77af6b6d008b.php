<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_917c110c507c1a19429fa1d6b7422dc80ae0d9113552339d083e7318f8f2ca61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5fbb9a908dcbf1f05fb31de375a4cc8f4cab6df9e22ee6c61a7980ad067733c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbb9a908dcbf1f05fb31de375a4cc8f4cab6df9e22ee6c61a7980ad067733c2->enter($__internal_5fbb9a908dcbf1f05fb31de375a4cc8f4cab6df9e22ee6c61a7980ad067733c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_414f5a9edd9124b3718621a6228b733b6c6853ede794cfc0b0568d7b8c82ebdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414f5a9edd9124b3718621a6228b733b6c6853ede794cfc0b0568d7b8c82ebdf->enter($__internal_414f5a9edd9124b3718621a6228b733b6c6853ede794cfc0b0568d7b8c82ebdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fbb9a908dcbf1f05fb31de375a4cc8f4cab6df9e22ee6c61a7980ad067733c2->leave($__internal_5fbb9a908dcbf1f05fb31de375a4cc8f4cab6df9e22ee6c61a7980ad067733c2_prof);

        
        $__internal_414f5a9edd9124b3718621a6228b733b6c6853ede794cfc0b0568d7b8c82ebdf->leave($__internal_414f5a9edd9124b3718621a6228b733b6c6853ede794cfc0b0568d7b8c82ebdf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bbb0590e0b6cbae93a9f94de0d211cff25a80ff7a9c02b54ca3868be8c8a68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bbb0590e0b6cbae93a9f94de0d211cff25a80ff7a9c02b54ca3868be8c8a68f->enter($__internal_0bbb0590e0b6cbae93a9f94de0d211cff25a80ff7a9c02b54ca3868be8c8a68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9f96cbbe95b79d92934e35245bfadaf1b0e82422606e6d0dccec1c116b82d89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f96cbbe95b79d92934e35245bfadaf1b0e82422606e6d0dccec1c116b82d89a->enter($__internal_9f96cbbe95b79d92934e35245bfadaf1b0e82422606e6d0dccec1c116b82d89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9f96cbbe95b79d92934e35245bfadaf1b0e82422606e6d0dccec1c116b82d89a->leave($__internal_9f96cbbe95b79d92934e35245bfadaf1b0e82422606e6d0dccec1c116b82d89a_prof);

        
        $__internal_0bbb0590e0b6cbae93a9f94de0d211cff25a80ff7a9c02b54ca3868be8c8a68f->leave($__internal_0bbb0590e0b6cbae93a9f94de0d211cff25a80ff7a9c02b54ca3868be8c8a68f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
