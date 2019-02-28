<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_81f5f5d8e69c058f7c4823f435801f1575e294828ae1de89454aaa06b8fb9295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_896ba0fd852ea4d891176b73f262e1660eebdb30f56d6787eb626dc7a7171488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896ba0fd852ea4d891176b73f262e1660eebdb30f56d6787eb626dc7a7171488->enter($__internal_896ba0fd852ea4d891176b73f262e1660eebdb30f56d6787eb626dc7a7171488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e6c9bcda1b5b1bea2f6df90bf0490ab0ec4c898404c2a81a804504df95e4a91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c9bcda1b5b1bea2f6df90bf0490ab0ec4c898404c2a81a804504df95e4a91d->enter($__internal_e6c9bcda1b5b1bea2f6df90bf0490ab0ec4c898404c2a81a804504df95e4a91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_896ba0fd852ea4d891176b73f262e1660eebdb30f56d6787eb626dc7a7171488->leave($__internal_896ba0fd852ea4d891176b73f262e1660eebdb30f56d6787eb626dc7a7171488_prof);

        
        $__internal_e6c9bcda1b5b1bea2f6df90bf0490ab0ec4c898404c2a81a804504df95e4a91d->leave($__internal_e6c9bcda1b5b1bea2f6df90bf0490ab0ec4c898404c2a81a804504df95e4a91d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e3da515b9ff6fdc3e506d3e27cfe114d8a5c63e5678647357cc4d4ad989063e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3da515b9ff6fdc3e506d3e27cfe114d8a5c63e5678647357cc4d4ad989063e9->enter($__internal_e3da515b9ff6fdc3e506d3e27cfe114d8a5c63e5678647357cc4d4ad989063e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_cb9aef2da8f9ad0377ed997a2702b9499f1fe7c862e524003c43cbcb9c82ed59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9aef2da8f9ad0377ed997a2702b9499f1fe7c862e524003c43cbcb9c82ed59->enter($__internal_cb9aef2da8f9ad0377ed997a2702b9499f1fe7c862e524003c43cbcb9c82ed59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_cb9aef2da8f9ad0377ed997a2702b9499f1fe7c862e524003c43cbcb9c82ed59->leave($__internal_cb9aef2da8f9ad0377ed997a2702b9499f1fe7c862e524003c43cbcb9c82ed59_prof);

        
        $__internal_e3da515b9ff6fdc3e506d3e27cfe114d8a5c63e5678647357cc4d4ad989063e9->leave($__internal_e3da515b9ff6fdc3e506d3e27cfe114d8a5c63e5678647357cc4d4ad989063e9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_86874a31b6523b1d89ba5363c03dc371c02690ac08b50e5d087746fcd0975cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86874a31b6523b1d89ba5363c03dc371c02690ac08b50e5d087746fcd0975cb1->enter($__internal_86874a31b6523b1d89ba5363c03dc371c02690ac08b50e5d087746fcd0975cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8f669b5eae4b8b3bec78a1919d869b37876461fe6d638bf940dbccb47c7e0906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f669b5eae4b8b3bec78a1919d869b37876461fe6d638bf940dbccb47c7e0906->enter($__internal_8f669b5eae4b8b3bec78a1919d869b37876461fe6d638bf940dbccb47c7e0906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8f669b5eae4b8b3bec78a1919d869b37876461fe6d638bf940dbccb47c7e0906->leave($__internal_8f669b5eae4b8b3bec78a1919d869b37876461fe6d638bf940dbccb47c7e0906_prof);

        
        $__internal_86874a31b6523b1d89ba5363c03dc371c02690ac08b50e5d087746fcd0975cb1->leave($__internal_86874a31b6523b1d89ba5363c03dc371c02690ac08b50e5d087746fcd0975cb1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e7381d77eb7b2445297422ca6f11742618a0b17e6b23f17088925748919751a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7381d77eb7b2445297422ca6f11742618a0b17e6b23f17088925748919751a8->enter($__internal_e7381d77eb7b2445297422ca6f11742618a0b17e6b23f17088925748919751a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_661c5714ee45da86f2452b06e6642fc53b3f2612f20c1a78092d81aa45e2e28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661c5714ee45da86f2452b06e6642fc53b3f2612f20c1a78092d81aa45e2e28d->enter($__internal_661c5714ee45da86f2452b06e6642fc53b3f2612f20c1a78092d81aa45e2e28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_661c5714ee45da86f2452b06e6642fc53b3f2612f20c1a78092d81aa45e2e28d->leave($__internal_661c5714ee45da86f2452b06e6642fc53b3f2612f20c1a78092d81aa45e2e28d_prof);

        
        $__internal_e7381d77eb7b2445297422ca6f11742618a0b17e6b23f17088925748919751a8->leave($__internal_e7381d77eb7b2445297422ca6f11742618a0b17e6b23f17088925748919751a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
