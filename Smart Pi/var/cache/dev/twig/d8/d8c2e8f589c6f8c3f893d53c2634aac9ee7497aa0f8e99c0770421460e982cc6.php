<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_ca72167bbe34ece09189b4c789de7ce4cfbef3cdfe52ba9c6dcb430aa5660397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_021100914117f07a9488c9c23fe1e6d41e60cb5df1ab69cddf8c4d4c8c344754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021100914117f07a9488c9c23fe1e6d41e60cb5df1ab69cddf8c4d4c8c344754->enter($__internal_021100914117f07a9488c9c23fe1e6d41e60cb5df1ab69cddf8c4d4c8c344754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_6a1b0e3ecdf624ebc15ca77a64277bdeef7065a806ad7489d9d831e8f5a40259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1b0e3ecdf624ebc15ca77a64277bdeef7065a806ad7489d9d831e8f5a40259->enter($__internal_6a1b0e3ecdf624ebc15ca77a64277bdeef7065a806ad7489d9d831e8f5a40259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021100914117f07a9488c9c23fe1e6d41e60cb5df1ab69cddf8c4d4c8c344754->leave($__internal_021100914117f07a9488c9c23fe1e6d41e60cb5df1ab69cddf8c4d4c8c344754_prof);

        
        $__internal_6a1b0e3ecdf624ebc15ca77a64277bdeef7065a806ad7489d9d831e8f5a40259->leave($__internal_6a1b0e3ecdf624ebc15ca77a64277bdeef7065a806ad7489d9d831e8f5a40259_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9668221a700fd67789c65f0f2a24cfa2afcc16f643e535c962f29787aba74b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9668221a700fd67789c65f0f2a24cfa2afcc16f643e535c962f29787aba74b4b->enter($__internal_9668221a700fd67789c65f0f2a24cfa2afcc16f643e535c962f29787aba74b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_954291988ec25c0b6611d627bcda3ef0d3fc84a3cf9e991ab7b02d6ea28e109d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954291988ec25c0b6611d627bcda3ef0d3fc84a3cf9e991ab7b02d6ea28e109d->enter($__internal_954291988ec25c0b6611d627bcda3ef0d3fc84a3cf9e991ab7b02d6ea28e109d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_954291988ec25c0b6611d627bcda3ef0d3fc84a3cf9e991ab7b02d6ea28e109d->leave($__internal_954291988ec25c0b6611d627bcda3ef0d3fc84a3cf9e991ab7b02d6ea28e109d_prof);

        
        $__internal_9668221a700fd67789c65f0f2a24cfa2afcc16f643e535c962f29787aba74b4b->leave($__internal_9668221a700fd67789c65f0f2a24cfa2afcc16f643e535c962f29787aba74b4b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
