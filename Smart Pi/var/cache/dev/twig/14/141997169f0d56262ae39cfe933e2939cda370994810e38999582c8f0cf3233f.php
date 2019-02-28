<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2de1a24621ed3171227a4ab67caba714d49071c19400e821ed7fa4fd8fd2d439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e8c7cee25f396c856ea60997d2843c34ace82225744df81dacc020253919c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8c7cee25f396c856ea60997d2843c34ace82225744df81dacc020253919c57->enter($__internal_2e8c7cee25f396c856ea60997d2843c34ace82225744df81dacc020253919c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_81e0f4daaa3f3bdfc7004f46e58e234803669b2bef718b9993e2fccee2722b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e0f4daaa3f3bdfc7004f46e58e234803669b2bef718b9993e2fccee2722b73->enter($__internal_81e0f4daaa3f3bdfc7004f46e58e234803669b2bef718b9993e2fccee2722b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e8c7cee25f396c856ea60997d2843c34ace82225744df81dacc020253919c57->leave($__internal_2e8c7cee25f396c856ea60997d2843c34ace82225744df81dacc020253919c57_prof);

        
        $__internal_81e0f4daaa3f3bdfc7004f46e58e234803669b2bef718b9993e2fccee2722b73->leave($__internal_81e0f4daaa3f3bdfc7004f46e58e234803669b2bef718b9993e2fccee2722b73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ed105ae8e43752bed3e0d9acb49b6a35e8eeaf5ef8b7151eee08e47f871b3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed105ae8e43752bed3e0d9acb49b6a35e8eeaf5ef8b7151eee08e47f871b3c4->enter($__internal_4ed105ae8e43752bed3e0d9acb49b6a35e8eeaf5ef8b7151eee08e47f871b3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_80b0452be8397cc8292e52733dba1b3c72940b1c362feba38ba8586ad3afa6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b0452be8397cc8292e52733dba1b3c72940b1c362feba38ba8586ad3afa6e9->enter($__internal_80b0452be8397cc8292e52733dba1b3c72940b1c362feba38ba8586ad3afa6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80b0452be8397cc8292e52733dba1b3c72940b1c362feba38ba8586ad3afa6e9->leave($__internal_80b0452be8397cc8292e52733dba1b3c72940b1c362feba38ba8586ad3afa6e9_prof);

        
        $__internal_4ed105ae8e43752bed3e0d9acb49b6a35e8eeaf5ef8b7151eee08e47f871b3c4->leave($__internal_4ed105ae8e43752bed3e0d9acb49b6a35e8eeaf5ef8b7151eee08e47f871b3c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8858eb4955c749c676c74b3187d8306fd57f01874a9eb3a7cf3702e2f298ed6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8858eb4955c749c676c74b3187d8306fd57f01874a9eb3a7cf3702e2f298ed6e->enter($__internal_8858eb4955c749c676c74b3187d8306fd57f01874a9eb3a7cf3702e2f298ed6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa0355f4109bf333d57607c91fd9de282a0c8afb954ca629ad217eb9716d5e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0355f4109bf333d57607c91fd9de282a0c8afb954ca629ad217eb9716d5e33->enter($__internal_fa0355f4109bf333d57607c91fd9de282a0c8afb954ca629ad217eb9716d5e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa0355f4109bf333d57607c91fd9de282a0c8afb954ca629ad217eb9716d5e33->leave($__internal_fa0355f4109bf333d57607c91fd9de282a0c8afb954ca629ad217eb9716d5e33_prof);

        
        $__internal_8858eb4955c749c676c74b3187d8306fd57f01874a9eb3a7cf3702e2f298ed6e->leave($__internal_8858eb4955c749c676c74b3187d8306fd57f01874a9eb3a7cf3702e2f298ed6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_134fd25ccc09accfc1fe6a41bdc0bf439f140bf6e04c377b9ec13c51e3b1a5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134fd25ccc09accfc1fe6a41bdc0bf439f140bf6e04c377b9ec13c51e3b1a5aa->enter($__internal_134fd25ccc09accfc1fe6a41bdc0bf439f140bf6e04c377b9ec13c51e3b1a5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0dde8f7760d064f30413bc962ac1da50a1c3052080ce1a86d2e4b84dd120fba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dde8f7760d064f30413bc962ac1da50a1c3052080ce1a86d2e4b84dd120fba6->enter($__internal_0dde8f7760d064f30413bc962ac1da50a1c3052080ce1a86d2e4b84dd120fba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0dde8f7760d064f30413bc962ac1da50a1c3052080ce1a86d2e4b84dd120fba6->leave($__internal_0dde8f7760d064f30413bc962ac1da50a1c3052080ce1a86d2e4b84dd120fba6_prof);

        
        $__internal_134fd25ccc09accfc1fe6a41bdc0bf439f140bf6e04c377b9ec13c51e3b1a5aa->leave($__internal_134fd25ccc09accfc1fe6a41bdc0bf439f140bf6e04c377b9ec13c51e3b1a5aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
