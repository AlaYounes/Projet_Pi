<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_0da081f15b6a81718e3d6b4db4eb4566265a89b5684f21adaf2c1801940092cc extends Twig_Template
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
        $__internal_f92284ba689a2047ce244b0f72be01edd611ab21a2bf22cff112b1656599ef46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92284ba689a2047ce244b0f72be01edd611ab21a2bf22cff112b1656599ef46->enter($__internal_f92284ba689a2047ce244b0f72be01edd611ab21a2bf22cff112b1656599ef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_a02295490e89644e09be7ef2e3978ae2761a2d5f6f7f961f652cc0818fef5846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02295490e89644e09be7ef2e3978ae2761a2d5f6f7f961f652cc0818fef5846->enter($__internal_a02295490e89644e09be7ef2e3978ae2761a2d5f6f7f961f652cc0818fef5846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f92284ba689a2047ce244b0f72be01edd611ab21a2bf22cff112b1656599ef46->leave($__internal_f92284ba689a2047ce244b0f72be01edd611ab21a2bf22cff112b1656599ef46_prof);

        
        $__internal_a02295490e89644e09be7ef2e3978ae2761a2d5f6f7f961f652cc0818fef5846->leave($__internal_a02295490e89644e09be7ef2e3978ae2761a2d5f6f7f961f652cc0818fef5846_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_86e2499a6f91b9f8430eb58ab87fe0181027970848b35ab7f5d736db19830daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e2499a6f91b9f8430eb58ab87fe0181027970848b35ab7f5d736db19830daa->enter($__internal_86e2499a6f91b9f8430eb58ab87fe0181027970848b35ab7f5d736db19830daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d17c6af6e1565cb011549f87724166ab08cb2549998983f67df8c1a609b17e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17c6af6e1565cb011549f87724166ab08cb2549998983f67df8c1a609b17e3b->enter($__internal_d17c6af6e1565cb011549f87724166ab08cb2549998983f67df8c1a609b17e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d17c6af6e1565cb011549f87724166ab08cb2549998983f67df8c1a609b17e3b->leave($__internal_d17c6af6e1565cb011549f87724166ab08cb2549998983f67df8c1a609b17e3b_prof);

        
        $__internal_86e2499a6f91b9f8430eb58ab87fe0181027970848b35ab7f5d736db19830daa->leave($__internal_86e2499a6f91b9f8430eb58ab87fe0181027970848b35ab7f5d736db19830daa_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fea67cd20a5c040456f700511e8c0633a82222a8d40222dff9e9fa5d88302f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea67cd20a5c040456f700511e8c0633a82222a8d40222dff9e9fa5d88302f0d->enter($__internal_fea67cd20a5c040456f700511e8c0633a82222a8d40222dff9e9fa5d88302f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_373a4b96d3706100a5e089490b80249dfecd9a09c5a88009c66c5edc58d2aa75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373a4b96d3706100a5e089490b80249dfecd9a09c5a88009c66c5edc58d2aa75->enter($__internal_373a4b96d3706100a5e089490b80249dfecd9a09c5a88009c66c5edc58d2aa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_373a4b96d3706100a5e089490b80249dfecd9a09c5a88009c66c5edc58d2aa75->leave($__internal_373a4b96d3706100a5e089490b80249dfecd9a09c5a88009c66c5edc58d2aa75_prof);

        
        $__internal_fea67cd20a5c040456f700511e8c0633a82222a8d40222dff9e9fa5d88302f0d->leave($__internal_fea67cd20a5c040456f700511e8c0633a82222a8d40222dff9e9fa5d88302f0d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cf9d45eae2f6fd6501a1d405afb7016b3c544e2a19dd48bb2e5acfdcf0c886c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9d45eae2f6fd6501a1d405afb7016b3c544e2a19dd48bb2e5acfdcf0c886c7->enter($__internal_cf9d45eae2f6fd6501a1d405afb7016b3c544e2a19dd48bb2e5acfdcf0c886c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_db6e7653a32abce1256e0669a50caa43a36856fa28349753568a71f22ac58f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6e7653a32abce1256e0669a50caa43a36856fa28349753568a71f22ac58f2f->enter($__internal_db6e7653a32abce1256e0669a50caa43a36856fa28349753568a71f22ac58f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_db6e7653a32abce1256e0669a50caa43a36856fa28349753568a71f22ac58f2f->leave($__internal_db6e7653a32abce1256e0669a50caa43a36856fa28349753568a71f22ac58f2f_prof);

        
        $__internal_cf9d45eae2f6fd6501a1d405afb7016b3c544e2a19dd48bb2e5acfdcf0c886c7->leave($__internal_cf9d45eae2f6fd6501a1d405afb7016b3c544e2a19dd48bb2e5acfdcf0c886c7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
