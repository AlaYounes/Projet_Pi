<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_42a670980f4c5af90b869542137c7356ec29f1af3c01ddfe949ec6775e8d31e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_a913ca02a86bae391f417b643f311b3e2db4ed9fd2f87bf1984a55cb2b683e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a913ca02a86bae391f417b643f311b3e2db4ed9fd2f87bf1984a55cb2b683e6e->enter($__internal_a913ca02a86bae391f417b643f311b3e2db4ed9fd2f87bf1984a55cb2b683e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_94b667bcde1b0a360c8f155abb71e3431e5636c625c3dbf1fa2494260e8666fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b667bcde1b0a360c8f155abb71e3431e5636c625c3dbf1fa2494260e8666fe->enter($__internal_94b667bcde1b0a360c8f155abb71e3431e5636c625c3dbf1fa2494260e8666fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a913ca02a86bae391f417b643f311b3e2db4ed9fd2f87bf1984a55cb2b683e6e->leave($__internal_a913ca02a86bae391f417b643f311b3e2db4ed9fd2f87bf1984a55cb2b683e6e_prof);

        
        $__internal_94b667bcde1b0a360c8f155abb71e3431e5636c625c3dbf1fa2494260e8666fe->leave($__internal_94b667bcde1b0a360c8f155abb71e3431e5636c625c3dbf1fa2494260e8666fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24d41c31c094bfa92157cc35b4717eef8dacab62d226226fc20a613c5a975a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d41c31c094bfa92157cc35b4717eef8dacab62d226226fc20a613c5a975a6b->enter($__internal_24d41c31c094bfa92157cc35b4717eef8dacab62d226226fc20a613c5a975a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b1b7ec087f228135d63ee3241229b49f4dfe3bf83afcde9294d05ac473ae44ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b7ec087f228135d63ee3241229b49f4dfe3bf83afcde9294d05ac473ae44ea->enter($__internal_b1b7ec087f228135d63ee3241229b49f4dfe3bf83afcde9294d05ac473ae44ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b1b7ec087f228135d63ee3241229b49f4dfe3bf83afcde9294d05ac473ae44ea->leave($__internal_b1b7ec087f228135d63ee3241229b49f4dfe3bf83afcde9294d05ac473ae44ea_prof);

        
        $__internal_24d41c31c094bfa92157cc35b4717eef8dacab62d226226fc20a613c5a975a6b->leave($__internal_24d41c31c094bfa92157cc35b4717eef8dacab62d226226fc20a613c5a975a6b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e28121b6050e26094cd272e4312b3c09b206ccb06315526cf14cc6dd9acaba21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28121b6050e26094cd272e4312b3c09b206ccb06315526cf14cc6dd9acaba21->enter($__internal_e28121b6050e26094cd272e4312b3c09b206ccb06315526cf14cc6dd9acaba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77e2fc6c176fbd94a164ec9d7940ed7e0233f4ae1ec9eb7c2747212a413c2f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e2fc6c176fbd94a164ec9d7940ed7e0233f4ae1ec9eb7c2747212a413c2f1e->enter($__internal_77e2fc6c176fbd94a164ec9d7940ed7e0233f4ae1ec9eb7c2747212a413c2f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_77e2fc6c176fbd94a164ec9d7940ed7e0233f4ae1ec9eb7c2747212a413c2f1e->leave($__internal_77e2fc6c176fbd94a164ec9d7940ed7e0233f4ae1ec9eb7c2747212a413c2f1e_prof);

        
        $__internal_e28121b6050e26094cd272e4312b3c09b206ccb06315526cf14cc6dd9acaba21->leave($__internal_e28121b6050e26094cd272e4312b3c09b206ccb06315526cf14cc6dd9acaba21_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bcbd8a41132c93c40c804c7eeea037cf3e97c6f8fb5fa5de1820ed9573c3f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcbd8a41132c93c40c804c7eeea037cf3e97c6f8fb5fa5de1820ed9573c3f62->enter($__internal_2bcbd8a41132c93c40c804c7eeea037cf3e97c6f8fb5fa5de1820ed9573c3f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aeea5ed6783a46ebaf080f1b870bcad30612ed86ae7e06b88380fdaec0dff195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeea5ed6783a46ebaf080f1b870bcad30612ed86ae7e06b88380fdaec0dff195->enter($__internal_aeea5ed6783a46ebaf080f1b870bcad30612ed86ae7e06b88380fdaec0dff195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_aeea5ed6783a46ebaf080f1b870bcad30612ed86ae7e06b88380fdaec0dff195->leave($__internal_aeea5ed6783a46ebaf080f1b870bcad30612ed86ae7e06b88380fdaec0dff195_prof);

        
        $__internal_2bcbd8a41132c93c40c804c7eeea037cf3e97c6f8fb5fa5de1820ed9573c3f62->leave($__internal_2bcbd8a41132c93c40c804c7eeea037cf3e97c6f8fb5fa5de1820ed9573c3f62_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
