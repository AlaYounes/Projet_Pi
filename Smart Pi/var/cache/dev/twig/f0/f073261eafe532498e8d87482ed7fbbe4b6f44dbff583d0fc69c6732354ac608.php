<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9ca0754179ac7f4672b83bead831d1662ef4ff68072b3c635106fa328874b43e extends Twig_Template
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
        $__internal_d81142bac46bd2628d7b0d1ca684726f49d2cc3bf3ee52d17a2072f0d22c20dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81142bac46bd2628d7b0d1ca684726f49d2cc3bf3ee52d17a2072f0d22c20dd->enter($__internal_d81142bac46bd2628d7b0d1ca684726f49d2cc3bf3ee52d17a2072f0d22c20dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_18aa925fc0f658e0c43a9ffffdc1147c66ed6867eacc73eea102e275ac41fabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18aa925fc0f658e0c43a9ffffdc1147c66ed6867eacc73eea102e275ac41fabd->enter($__internal_18aa925fc0f658e0c43a9ffffdc1147c66ed6867eacc73eea102e275ac41fabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d81142bac46bd2628d7b0d1ca684726f49d2cc3bf3ee52d17a2072f0d22c20dd->leave($__internal_d81142bac46bd2628d7b0d1ca684726f49d2cc3bf3ee52d17a2072f0d22c20dd_prof);

        
        $__internal_18aa925fc0f658e0c43a9ffffdc1147c66ed6867eacc73eea102e275ac41fabd->leave($__internal_18aa925fc0f658e0c43a9ffffdc1147c66ed6867eacc73eea102e275ac41fabd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f2547f78122194ca59473c19b162bdf6a718cc43dc953ece43f7adc204f693a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2547f78122194ca59473c19b162bdf6a718cc43dc953ece43f7adc204f693a->enter($__internal_3f2547f78122194ca59473c19b162bdf6a718cc43dc953ece43f7adc204f693a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a87aadf06d24f8b18ad8d1cd6145df5ab7abd4c1b4a2b6da697ff7de83b7dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a87aadf06d24f8b18ad8d1cd6145df5ab7abd4c1b4a2b6da697ff7de83b7dce->enter($__internal_5a87aadf06d24f8b18ad8d1cd6145df5ab7abd4c1b4a2b6da697ff7de83b7dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5a87aadf06d24f8b18ad8d1cd6145df5ab7abd4c1b4a2b6da697ff7de83b7dce->leave($__internal_5a87aadf06d24f8b18ad8d1cd6145df5ab7abd4c1b4a2b6da697ff7de83b7dce_prof);

        
        $__internal_3f2547f78122194ca59473c19b162bdf6a718cc43dc953ece43f7adc204f693a->leave($__internal_3f2547f78122194ca59473c19b162bdf6a718cc43dc953ece43f7adc204f693a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37b3c25fd33fce03577a9245d9d705246161ba4e007b8794e564a7b6934d3996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b3c25fd33fce03577a9245d9d705246161ba4e007b8794e564a7b6934d3996->enter($__internal_37b3c25fd33fce03577a9245d9d705246161ba4e007b8794e564a7b6934d3996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_db10780fb8c6aad00ae04989ad57eada14d34d297ddd74ca72b2efe172731234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db10780fb8c6aad00ae04989ad57eada14d34d297ddd74ca72b2efe172731234->enter($__internal_db10780fb8c6aad00ae04989ad57eada14d34d297ddd74ca72b2efe172731234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_db10780fb8c6aad00ae04989ad57eada14d34d297ddd74ca72b2efe172731234->leave($__internal_db10780fb8c6aad00ae04989ad57eada14d34d297ddd74ca72b2efe172731234_prof);

        
        $__internal_37b3c25fd33fce03577a9245d9d705246161ba4e007b8794e564a7b6934d3996->leave($__internal_37b3c25fd33fce03577a9245d9d705246161ba4e007b8794e564a7b6934d3996_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ff2e664d0208d70e88d2c153731b26f1a34a21f295a6734be392cbf99e24378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff2e664d0208d70e88d2c153731b26f1a34a21f295a6734be392cbf99e24378->enter($__internal_9ff2e664d0208d70e88d2c153731b26f1a34a21f295a6734be392cbf99e24378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b42f0925349a60638b014beee5da3ab492d5d02f0a7c9998a94e5fbf6ecf4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b42f0925349a60638b014beee5da3ab492d5d02f0a7c9998a94e5fbf6ecf4d2->enter($__internal_4b42f0925349a60638b014beee5da3ab492d5d02f0a7c9998a94e5fbf6ecf4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4b42f0925349a60638b014beee5da3ab492d5d02f0a7c9998a94e5fbf6ecf4d2->leave($__internal_4b42f0925349a60638b014beee5da3ab492d5d02f0a7c9998a94e5fbf6ecf4d2_prof);

        
        $__internal_9ff2e664d0208d70e88d2c153731b26f1a34a21f295a6734be392cbf99e24378->leave($__internal_9ff2e664d0208d70e88d2c153731b26f1a34a21f295a6734be392cbf99e24378_prof);

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
