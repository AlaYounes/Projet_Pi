<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_60c28a24062da4a4c06830c5d95d68490dbede8613bd228b7b9efb8d61faeadc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1567829795cf1ade59398457e5c03ca1d7b8c0c4737d9ed0751087d40cc5a779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1567829795cf1ade59398457e5c03ca1d7b8c0c4737d9ed0751087d40cc5a779->enter($__internal_1567829795cf1ade59398457e5c03ca1d7b8c0c4737d9ed0751087d40cc5a779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6386242083f39130f3645e2900c69b205d242cf759bbe6a8e43c795cfaf991e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6386242083f39130f3645e2900c69b205d242cf759bbe6a8e43c795cfaf991e3->enter($__internal_6386242083f39130f3645e2900c69b205d242cf759bbe6a8e43c795cfaf991e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1567829795cf1ade59398457e5c03ca1d7b8c0c4737d9ed0751087d40cc5a779->leave($__internal_1567829795cf1ade59398457e5c03ca1d7b8c0c4737d9ed0751087d40cc5a779_prof);

        
        $__internal_6386242083f39130f3645e2900c69b205d242cf759bbe6a8e43c795cfaf991e3->leave($__internal_6386242083f39130f3645e2900c69b205d242cf759bbe6a8e43c795cfaf991e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cfd422de6f9e9b17d5090bb26000df0939ffac3b53a750a30091a97abdd84e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd422de6f9e9b17d5090bb26000df0939ffac3b53a750a30091a97abdd84e95->enter($__internal_cfd422de6f9e9b17d5090bb26000df0939ffac3b53a750a30091a97abdd84e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c414f9f92f604fc19bcd882f6e084b0bad23bc92b783d396877381437f6817b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c414f9f92f604fc19bcd882f6e084b0bad23bc92b783d396877381437f6817b->enter($__internal_0c414f9f92f604fc19bcd882f6e084b0bad23bc92b783d396877381437f6817b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0c414f9f92f604fc19bcd882f6e084b0bad23bc92b783d396877381437f6817b->leave($__internal_0c414f9f92f604fc19bcd882f6e084b0bad23bc92b783d396877381437f6817b_prof);

        
        $__internal_cfd422de6f9e9b17d5090bb26000df0939ffac3b53a750a30091a97abdd84e95->leave($__internal_cfd422de6f9e9b17d5090bb26000df0939ffac3b53a750a30091a97abdd84e95_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0006507e4bc6029a9e2aaca0a53c8d733d9cea044e169037371506bdcc597af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0006507e4bc6029a9e2aaca0a53c8d733d9cea044e169037371506bdcc597af8->enter($__internal_0006507e4bc6029a9e2aaca0a53c8d733d9cea044e169037371506bdcc597af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a7193603df788e9bf8007792a7568a047f8c3b889816a4a66767f715cfd2745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7193603df788e9bf8007792a7568a047f8c3b889816a4a66767f715cfd2745->enter($__internal_4a7193603df788e9bf8007792a7568a047f8c3b889816a4a66767f715cfd2745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4a7193603df788e9bf8007792a7568a047f8c3b889816a4a66767f715cfd2745->leave($__internal_4a7193603df788e9bf8007792a7568a047f8c3b889816a4a66767f715cfd2745_prof);

        
        $__internal_0006507e4bc6029a9e2aaca0a53c8d733d9cea044e169037371506bdcc597af8->leave($__internal_0006507e4bc6029a9e2aaca0a53c8d733d9cea044e169037371506bdcc597af8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5399a22941ca195cf3b57f5e3debbffc296aa32df805053d3d6266d75324a032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5399a22941ca195cf3b57f5e3debbffc296aa32df805053d3d6266d75324a032->enter($__internal_5399a22941ca195cf3b57f5e3debbffc296aa32df805053d3d6266d75324a032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f90081121537579aa8de60a81734811b1649f928d51b276be33e399b916bd3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90081121537579aa8de60a81734811b1649f928d51b276be33e399b916bd3e7->enter($__internal_f90081121537579aa8de60a81734811b1649f928d51b276be33e399b916bd3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f90081121537579aa8de60a81734811b1649f928d51b276be33e399b916bd3e7->leave($__internal_f90081121537579aa8de60a81734811b1649f928d51b276be33e399b916bd3e7_prof);

        
        $__internal_5399a22941ca195cf3b57f5e3debbffc296aa32df805053d3d6266d75324a032->leave($__internal_5399a22941ca195cf3b57f5e3debbffc296aa32df805053d3d6266d75324a032_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
