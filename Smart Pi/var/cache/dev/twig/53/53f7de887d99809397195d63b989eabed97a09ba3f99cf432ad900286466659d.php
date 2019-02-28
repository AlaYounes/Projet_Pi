<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_75ea64f81ef3568ba053a4f4cbe28cdf1221a23688f995302c79e389d33ad204 extends Twig_Template
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
        $__internal_add933444b3084e6b7affd8fac23711c14abb38f5c41fa95ca28755da0c1d401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add933444b3084e6b7affd8fac23711c14abb38f5c41fa95ca28755da0c1d401->enter($__internal_add933444b3084e6b7affd8fac23711c14abb38f5c41fa95ca28755da0c1d401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_047f9e38efda122287d0c39c3e832890d5814d48be24dc0d5003376c1b187179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047f9e38efda122287d0c39c3e832890d5814d48be24dc0d5003376c1b187179->enter($__internal_047f9e38efda122287d0c39c3e832890d5814d48be24dc0d5003376c1b187179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add933444b3084e6b7affd8fac23711c14abb38f5c41fa95ca28755da0c1d401->leave($__internal_add933444b3084e6b7affd8fac23711c14abb38f5c41fa95ca28755da0c1d401_prof);

        
        $__internal_047f9e38efda122287d0c39c3e832890d5814d48be24dc0d5003376c1b187179->leave($__internal_047f9e38efda122287d0c39c3e832890d5814d48be24dc0d5003376c1b187179_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29523a78552fcaaeabdf9a3cb84466b371c3e68ef3832e6559877b74c3ef1828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29523a78552fcaaeabdf9a3cb84466b371c3e68ef3832e6559877b74c3ef1828->enter($__internal_29523a78552fcaaeabdf9a3cb84466b371c3e68ef3832e6559877b74c3ef1828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3258a075043f519ec0f567227174a90b6f6bd1d6af1a5b6f7e5bb803344bbf4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3258a075043f519ec0f567227174a90b6f6bd1d6af1a5b6f7e5bb803344bbf4a->enter($__internal_3258a075043f519ec0f567227174a90b6f6bd1d6af1a5b6f7e5bb803344bbf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3258a075043f519ec0f567227174a90b6f6bd1d6af1a5b6f7e5bb803344bbf4a->leave($__internal_3258a075043f519ec0f567227174a90b6f6bd1d6af1a5b6f7e5bb803344bbf4a_prof);

        
        $__internal_29523a78552fcaaeabdf9a3cb84466b371c3e68ef3832e6559877b74c3ef1828->leave($__internal_29523a78552fcaaeabdf9a3cb84466b371c3e68ef3832e6559877b74c3ef1828_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
