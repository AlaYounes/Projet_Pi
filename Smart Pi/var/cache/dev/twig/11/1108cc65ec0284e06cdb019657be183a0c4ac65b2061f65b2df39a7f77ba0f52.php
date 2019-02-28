<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_d386247bf1917b0adb7e3e94030eae18d1429bf94596dd7dbce8a59ca0ce03f7 extends Twig_Template
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
        $__internal_02fbee9a60acb3f0a8ea9384085d23f16c4291e50f950b85c38fdb486e9125f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fbee9a60acb3f0a8ea9384085d23f16c4291e50f950b85c38fdb486e9125f4->enter($__internal_02fbee9a60acb3f0a8ea9384085d23f16c4291e50f950b85c38fdb486e9125f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_7fbb51a13c4bcf30ff2f95c957d12a3e0ae49d8fa8d72bf0b178c60fc979cfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbb51a13c4bcf30ff2f95c957d12a3e0ae49d8fa8d72bf0b178c60fc979cfeb->enter($__internal_7fbb51a13c4bcf30ff2f95c957d12a3e0ae49d8fa8d72bf0b178c60fc979cfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_02fbee9a60acb3f0a8ea9384085d23f16c4291e50f950b85c38fdb486e9125f4->leave($__internal_02fbee9a60acb3f0a8ea9384085d23f16c4291e50f950b85c38fdb486e9125f4_prof);

        
        $__internal_7fbb51a13c4bcf30ff2f95c957d12a3e0ae49d8fa8d72bf0b178c60fc979cfeb->leave($__internal_7fbb51a13c4bcf30ff2f95c957d12a3e0ae49d8fa8d72bf0b178c60fc979cfeb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d7f35af4ad0a8bf14f87412ec36efc3d44395f20d533f111691946c4be8889e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f35af4ad0a8bf14f87412ec36efc3d44395f20d533f111691946c4be8889e3->enter($__internal_d7f35af4ad0a8bf14f87412ec36efc3d44395f20d533f111691946c4be8889e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2e7ee23841e35e04e57322c3a735c8b40469f52d556052d004cb0879e6074c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7ee23841e35e04e57322c3a735c8b40469f52d556052d004cb0879e6074c74->enter($__internal_2e7ee23841e35e04e57322c3a735c8b40469f52d556052d004cb0879e6074c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2e7ee23841e35e04e57322c3a735c8b40469f52d556052d004cb0879e6074c74->leave($__internal_2e7ee23841e35e04e57322c3a735c8b40469f52d556052d004cb0879e6074c74_prof);

        
        $__internal_d7f35af4ad0a8bf14f87412ec36efc3d44395f20d533f111691946c4be8889e3->leave($__internal_d7f35af4ad0a8bf14f87412ec36efc3d44395f20d533f111691946c4be8889e3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1ad3a01adf85faa2d04c6efa0ce3cd21ba4076951ad0c34e2fe49adb0b9350d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad3a01adf85faa2d04c6efa0ce3cd21ba4076951ad0c34e2fe49adb0b9350d4->enter($__internal_1ad3a01adf85faa2d04c6efa0ce3cd21ba4076951ad0c34e2fe49adb0b9350d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1379a895ce47f8ef7a0dc3dedb623617f0fa6ddfded162a68cdbb8d2e4ae4c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1379a895ce47f8ef7a0dc3dedb623617f0fa6ddfded162a68cdbb8d2e4ae4c75->enter($__internal_1379a895ce47f8ef7a0dc3dedb623617f0fa6ddfded162a68cdbb8d2e4ae4c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1379a895ce47f8ef7a0dc3dedb623617f0fa6ddfded162a68cdbb8d2e4ae4c75->leave($__internal_1379a895ce47f8ef7a0dc3dedb623617f0fa6ddfded162a68cdbb8d2e4ae4c75_prof);

        
        $__internal_1ad3a01adf85faa2d04c6efa0ce3cd21ba4076951ad0c34e2fe49adb0b9350d4->leave($__internal_1ad3a01adf85faa2d04c6efa0ce3cd21ba4076951ad0c34e2fe49adb0b9350d4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4073b2e5f4dcaf3935a974750baad70be64bde650016b7d3d5e120e5f87b9f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4073b2e5f4dcaf3935a974750baad70be64bde650016b7d3d5e120e5f87b9f98->enter($__internal_4073b2e5f4dcaf3935a974750baad70be64bde650016b7d3d5e120e5f87b9f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_41d11dbb8a83b221795e9dcb3d1f67219f3b31d0d5a27271959f1b1fae463abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d11dbb8a83b221795e9dcb3d1f67219f3b31d0d5a27271959f1b1fae463abf->enter($__internal_41d11dbb8a83b221795e9dcb3d1f67219f3b31d0d5a27271959f1b1fae463abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_41d11dbb8a83b221795e9dcb3d1f67219f3b31d0d5a27271959f1b1fae463abf->leave($__internal_41d11dbb8a83b221795e9dcb3d1f67219f3b31d0d5a27271959f1b1fae463abf_prof);

        
        $__internal_4073b2e5f4dcaf3935a974750baad70be64bde650016b7d3d5e120e5f87b9f98->leave($__internal_4073b2e5f4dcaf3935a974750baad70be64bde650016b7d3d5e120e5f87b9f98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
