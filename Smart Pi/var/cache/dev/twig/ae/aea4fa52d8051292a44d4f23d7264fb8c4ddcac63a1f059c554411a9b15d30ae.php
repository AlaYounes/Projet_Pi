<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9e54ace28ec6d431ef3f174710fb57f976af8f698c1a903b05dac43317c8441e extends Twig_Template
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
        $__internal_0f08cb5cbf5836da72ce08000531cfc57a29839cc43fadd5449290b8107fb5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f08cb5cbf5836da72ce08000531cfc57a29839cc43fadd5449290b8107fb5be->enter($__internal_0f08cb5cbf5836da72ce08000531cfc57a29839cc43fadd5449290b8107fb5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_9b4a100d5f5c76d5a77a05c1c45c9a7c308a82585203679e6d4aa4ef75c3796e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4a100d5f5c76d5a77a05c1c45c9a7c308a82585203679e6d4aa4ef75c3796e->enter($__internal_9b4a100d5f5c76d5a77a05c1c45c9a7c308a82585203679e6d4aa4ef75c3796e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0f08cb5cbf5836da72ce08000531cfc57a29839cc43fadd5449290b8107fb5be->leave($__internal_0f08cb5cbf5836da72ce08000531cfc57a29839cc43fadd5449290b8107fb5be_prof);

        
        $__internal_9b4a100d5f5c76d5a77a05c1c45c9a7c308a82585203679e6d4aa4ef75c3796e->leave($__internal_9b4a100d5f5c76d5a77a05c1c45c9a7c308a82585203679e6d4aa4ef75c3796e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_71045f80925ce026042cba5a20c38529a5955b57eb20c59ec0f0421add9b6824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71045f80925ce026042cba5a20c38529a5955b57eb20c59ec0f0421add9b6824->enter($__internal_71045f80925ce026042cba5a20c38529a5955b57eb20c59ec0f0421add9b6824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c72fe6f2ee2af2c10d2d7b73b525c6140153e3536a2ae6a61b049651c7c69156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72fe6f2ee2af2c10d2d7b73b525c6140153e3536a2ae6a61b049651c7c69156->enter($__internal_c72fe6f2ee2af2c10d2d7b73b525c6140153e3536a2ae6a61b049651c7c69156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c72fe6f2ee2af2c10d2d7b73b525c6140153e3536a2ae6a61b049651c7c69156->leave($__internal_c72fe6f2ee2af2c10d2d7b73b525c6140153e3536a2ae6a61b049651c7c69156_prof);

        
        $__internal_71045f80925ce026042cba5a20c38529a5955b57eb20c59ec0f0421add9b6824->leave($__internal_71045f80925ce026042cba5a20c38529a5955b57eb20c59ec0f0421add9b6824_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_008f59b546474c2fe760c78a0dc0ce5a4fc4142d3a2510ec9f29076dabc64fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008f59b546474c2fe760c78a0dc0ce5a4fc4142d3a2510ec9f29076dabc64fb7->enter($__internal_008f59b546474c2fe760c78a0dc0ce5a4fc4142d3a2510ec9f29076dabc64fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a4413b424b84b4bc21f89f8f500dafe4c87b84caac0149a5ab5da0c8d82de1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4413b424b84b4bc21f89f8f500dafe4c87b84caac0149a5ab5da0c8d82de1d6->enter($__internal_a4413b424b84b4bc21f89f8f500dafe4c87b84caac0149a5ab5da0c8d82de1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a4413b424b84b4bc21f89f8f500dafe4c87b84caac0149a5ab5da0c8d82de1d6->leave($__internal_a4413b424b84b4bc21f89f8f500dafe4c87b84caac0149a5ab5da0c8d82de1d6_prof);

        
        $__internal_008f59b546474c2fe760c78a0dc0ce5a4fc4142d3a2510ec9f29076dabc64fb7->leave($__internal_008f59b546474c2fe760c78a0dc0ce5a4fc4142d3a2510ec9f29076dabc64fb7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a076d61889c2421919ee4745b5edf85e7789222352cecc360a6b1af60f638fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a076d61889c2421919ee4745b5edf85e7789222352cecc360a6b1af60f638fe6->enter($__internal_a076d61889c2421919ee4745b5edf85e7789222352cecc360a6b1af60f638fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f7c7e5c2a228b6ee08c154775af0e931ed4c5d145cd0fb0b93058c4479713371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c7e5c2a228b6ee08c154775af0e931ed4c5d145cd0fb0b93058c4479713371->enter($__internal_f7c7e5c2a228b6ee08c154775af0e931ed4c5d145cd0fb0b93058c4479713371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f7c7e5c2a228b6ee08c154775af0e931ed4c5d145cd0fb0b93058c4479713371->leave($__internal_f7c7e5c2a228b6ee08c154775af0e931ed4c5d145cd0fb0b93058c4479713371_prof);

        
        $__internal_a076d61889c2421919ee4745b5edf85e7789222352cecc360a6b1af60f638fe6->leave($__internal_a076d61889c2421919ee4745b5edf85e7789222352cecc360a6b1af60f638fe6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
