<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_305b167bf6c347d6415966739897efb34a27b539fad5059299d380edec1ac7fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_69b0b3b7095f5765f64db9871f744614c29360f4864d853b3afa9300e33aefe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b0b3b7095f5765f64db9871f744614c29360f4864d853b3afa9300e33aefe7->enter($__internal_69b0b3b7095f5765f64db9871f744614c29360f4864d853b3afa9300e33aefe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_2f4cccccd9ba3c554e12969a90205cff1e71e48e85ac16a5d48d7c8f10492e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4cccccd9ba3c554e12969a90205cff1e71e48e85ac16a5d48d7c8f10492e43->enter($__internal_2f4cccccd9ba3c554e12969a90205cff1e71e48e85ac16a5d48d7c8f10492e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b0b3b7095f5765f64db9871f744614c29360f4864d853b3afa9300e33aefe7->leave($__internal_69b0b3b7095f5765f64db9871f744614c29360f4864d853b3afa9300e33aefe7_prof);

        
        $__internal_2f4cccccd9ba3c554e12969a90205cff1e71e48e85ac16a5d48d7c8f10492e43->leave($__internal_2f4cccccd9ba3c554e12969a90205cff1e71e48e85ac16a5d48d7c8f10492e43_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0cae282bd6bf6ab3db1cb70787dc7cb38ef74492147fd1de94f3bbdd053344f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cae282bd6bf6ab3db1cb70787dc7cb38ef74492147fd1de94f3bbdd053344f9->enter($__internal_0cae282bd6bf6ab3db1cb70787dc7cb38ef74492147fd1de94f3bbdd053344f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae51ba388237bc9fa5d8201fcb38e90e8176eedff767a77c7376f8e47ff3ed50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae51ba388237bc9fa5d8201fcb38e90e8176eedff767a77c7376f8e47ff3ed50->enter($__internal_ae51ba388237bc9fa5d8201fcb38e90e8176eedff767a77c7376f8e47ff3ed50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ae51ba388237bc9fa5d8201fcb38e90e8176eedff767a77c7376f8e47ff3ed50->leave($__internal_ae51ba388237bc9fa5d8201fcb38e90e8176eedff767a77c7376f8e47ff3ed50_prof);

        
        $__internal_0cae282bd6bf6ab3db1cb70787dc7cb38ef74492147fd1de94f3bbdd053344f9->leave($__internal_0cae282bd6bf6ab3db1cb70787dc7cb38ef74492147fd1de94f3bbdd053344f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
