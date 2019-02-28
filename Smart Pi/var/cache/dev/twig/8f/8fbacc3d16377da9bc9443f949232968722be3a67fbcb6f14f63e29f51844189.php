<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ae67a544254e7b8942c802107acb69915a5f197e97eeb59e49b7be3d076f7f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3ec89308e6624ce7abd705ec99851cde8a8271f57ffc4070ffe658dc5dcbe06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec89308e6624ce7abd705ec99851cde8a8271f57ffc4070ffe658dc5dcbe06f->enter($__internal_3ec89308e6624ce7abd705ec99851cde8a8271f57ffc4070ffe658dc5dcbe06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c82e02c991efd9a2c30818efc1c6b4f6a08db721492ea074276cbb264c0f2863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82e02c991efd9a2c30818efc1c6b4f6a08db721492ea074276cbb264c0f2863->enter($__internal_c82e02c991efd9a2c30818efc1c6b4f6a08db721492ea074276cbb264c0f2863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec89308e6624ce7abd705ec99851cde8a8271f57ffc4070ffe658dc5dcbe06f->leave($__internal_3ec89308e6624ce7abd705ec99851cde8a8271f57ffc4070ffe658dc5dcbe06f_prof);

        
        $__internal_c82e02c991efd9a2c30818efc1c6b4f6a08db721492ea074276cbb264c0f2863->leave($__internal_c82e02c991efd9a2c30818efc1c6b4f6a08db721492ea074276cbb264c0f2863_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_071d54d61bfd9f5a8e4e1255e8864ce1fa688ce8c22899820e1692a882be738e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071d54d61bfd9f5a8e4e1255e8864ce1fa688ce8c22899820e1692a882be738e->enter($__internal_071d54d61bfd9f5a8e4e1255e8864ce1fa688ce8c22899820e1692a882be738e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4300f555572fa92f042ee88aaf1549faf83844fd1832f7b1d0e505a178b49388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4300f555572fa92f042ee88aaf1549faf83844fd1832f7b1d0e505a178b49388->enter($__internal_4300f555572fa92f042ee88aaf1549faf83844fd1832f7b1d0e505a178b49388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4300f555572fa92f042ee88aaf1549faf83844fd1832f7b1d0e505a178b49388->leave($__internal_4300f555572fa92f042ee88aaf1549faf83844fd1832f7b1d0e505a178b49388_prof);

        
        $__internal_071d54d61bfd9f5a8e4e1255e8864ce1fa688ce8c22899820e1692a882be738e->leave($__internal_071d54d61bfd9f5a8e4e1255e8864ce1fa688ce8c22899820e1692a882be738e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a49086f8878507a05c3827c92b9079a08e15ec5db907de6962dd4b15f5840a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49086f8878507a05c3827c92b9079a08e15ec5db907de6962dd4b15f5840a92->enter($__internal_a49086f8878507a05c3827c92b9079a08e15ec5db907de6962dd4b15f5840a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4acabf580f43035b6173151350ba8fe965b6f12c9f426671235647e44b426fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acabf580f43035b6173151350ba8fe965b6f12c9f426671235647e44b426fd1->enter($__internal_4acabf580f43035b6173151350ba8fe965b6f12c9f426671235647e44b426fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4acabf580f43035b6173151350ba8fe965b6f12c9f426671235647e44b426fd1->leave($__internal_4acabf580f43035b6173151350ba8fe965b6f12c9f426671235647e44b426fd1_prof);

        
        $__internal_a49086f8878507a05c3827c92b9079a08e15ec5db907de6962dd4b15f5840a92->leave($__internal_a49086f8878507a05c3827c92b9079a08e15ec5db907de6962dd4b15f5840a92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4d6a5c07fced3dc0cf59257a940a715c5cdcfd658097a2d6f230167343ddefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d6a5c07fced3dc0cf59257a940a715c5cdcfd658097a2d6f230167343ddefe->enter($__internal_c4d6a5c07fced3dc0cf59257a940a715c5cdcfd658097a2d6f230167343ddefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c1c1bdf61aa5068283359feb85e9458e2742b03233e060226d6dbd6a35a35ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1c1bdf61aa5068283359feb85e9458e2742b03233e060226d6dbd6a35a35ac->enter($__internal_4c1c1bdf61aa5068283359feb85e9458e2742b03233e060226d6dbd6a35a35ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c1c1bdf61aa5068283359feb85e9458e2742b03233e060226d6dbd6a35a35ac->leave($__internal_4c1c1bdf61aa5068283359feb85e9458e2742b03233e060226d6dbd6a35a35ac_prof);

        
        $__internal_c4d6a5c07fced3dc0cf59257a940a715c5cdcfd658097a2d6f230167343ddefe->leave($__internal_c4d6a5c07fced3dc0cf59257a940a715c5cdcfd658097a2d6f230167343ddefe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
