<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_d14648353cc3dddf6cbd9d9505921e224d178917e7282d3c53914b6af633db02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_39b76e72a39383700f1c9f6194309e0ffc7bbc711c9efdc28cda8c6e09073ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b76e72a39383700f1c9f6194309e0ffc7bbc711c9efdc28cda8c6e09073ccf->enter($__internal_39b76e72a39383700f1c9f6194309e0ffc7bbc711c9efdc28cda8c6e09073ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_5ba1f45e1f4af7232c323c8e4ba841ac28b3cb1dc9166f6c9e1dd8c85639e6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba1f45e1f4af7232c323c8e4ba841ac28b3cb1dc9166f6c9e1dd8c85639e6c4->enter($__internal_5ba1f45e1f4af7232c323c8e4ba841ac28b3cb1dc9166f6c9e1dd8c85639e6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39b76e72a39383700f1c9f6194309e0ffc7bbc711c9efdc28cda8c6e09073ccf->leave($__internal_39b76e72a39383700f1c9f6194309e0ffc7bbc711c9efdc28cda8c6e09073ccf_prof);

        
        $__internal_5ba1f45e1f4af7232c323c8e4ba841ac28b3cb1dc9166f6c9e1dd8c85639e6c4->leave($__internal_5ba1f45e1f4af7232c323c8e4ba841ac28b3cb1dc9166f6c9e1dd8c85639e6c4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_765dc7aaa0e3af6d04e05b3e4475c4d6675924542d408b394c11ae1dc4402066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765dc7aaa0e3af6d04e05b3e4475c4d6675924542d408b394c11ae1dc4402066->enter($__internal_765dc7aaa0e3af6d04e05b3e4475c4d6675924542d408b394c11ae1dc4402066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b98cdb3823a2d68db03983a80e1b7bc2793c1051aaec2468a6350aa455781f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98cdb3823a2d68db03983a80e1b7bc2793c1051aaec2468a6350aa455781f68->enter($__internal_b98cdb3823a2d68db03983a80e1b7bc2793c1051aaec2468a6350aa455781f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b98cdb3823a2d68db03983a80e1b7bc2793c1051aaec2468a6350aa455781f68->leave($__internal_b98cdb3823a2d68db03983a80e1b7bc2793c1051aaec2468a6350aa455781f68_prof);

        
        $__internal_765dc7aaa0e3af6d04e05b3e4475c4d6675924542d408b394c11ae1dc4402066->leave($__internal_765dc7aaa0e3af6d04e05b3e4475c4d6675924542d408b394c11ae1dc4402066_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
