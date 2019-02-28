<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0cbc353d1d26eb13a1b1136c6f32e0d3e49123cc2a405f84a8029e94bd95f173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_88d1435f167852f2d4e453183bf5f22a847be952ac9af67cc4357095764a1ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d1435f167852f2d4e453183bf5f22a847be952ac9af67cc4357095764a1ef2->enter($__internal_88d1435f167852f2d4e453183bf5f22a847be952ac9af67cc4357095764a1ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_3e849697c582e8d42eabdbbf91d9d7ece005bc57c699b9dcacf13a4d6d5590a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e849697c582e8d42eabdbbf91d9d7ece005bc57c699b9dcacf13a4d6d5590a2->enter($__internal_3e849697c582e8d42eabdbbf91d9d7ece005bc57c699b9dcacf13a4d6d5590a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d1435f167852f2d4e453183bf5f22a847be952ac9af67cc4357095764a1ef2->leave($__internal_88d1435f167852f2d4e453183bf5f22a847be952ac9af67cc4357095764a1ef2_prof);

        
        $__internal_3e849697c582e8d42eabdbbf91d9d7ece005bc57c699b9dcacf13a4d6d5590a2->leave($__internal_3e849697c582e8d42eabdbbf91d9d7ece005bc57c699b9dcacf13a4d6d5590a2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a70ba5ddb9a5439d8c0e356a82c651453d93cc00a4c51c4a762b0bd888020762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70ba5ddb9a5439d8c0e356a82c651453d93cc00a4c51c4a762b0bd888020762->enter($__internal_a70ba5ddb9a5439d8c0e356a82c651453d93cc00a4c51c4a762b0bd888020762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fd7028ab814a0d0a76e9e48ea42808eb96a44b9c8ff5fdacd2e7de113531afb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7028ab814a0d0a76e9e48ea42808eb96a44b9c8ff5fdacd2e7de113531afb7->enter($__internal_fd7028ab814a0d0a76e9e48ea42808eb96a44b9c8ff5fdacd2e7de113531afb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_fd7028ab814a0d0a76e9e48ea42808eb96a44b9c8ff5fdacd2e7de113531afb7->leave($__internal_fd7028ab814a0d0a76e9e48ea42808eb96a44b9c8ff5fdacd2e7de113531afb7_prof);

        
        $__internal_a70ba5ddb9a5439d8c0e356a82c651453d93cc00a4c51c4a762b0bd888020762->leave($__internal_a70ba5ddb9a5439d8c0e356a82c651453d93cc00a4c51c4a762b0bd888020762_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
