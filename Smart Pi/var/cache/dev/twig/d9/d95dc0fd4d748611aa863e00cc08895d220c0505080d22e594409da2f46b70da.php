<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_79a6aa4e71583076f9dd78826f749ca0a981611d640b1d526d99ecd527afac4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aacf0eab2ed7f2207985c598d191f1bebfcc33f71d68f6cf6f49ceb42bbd17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aacf0eab2ed7f2207985c598d191f1bebfcc33f71d68f6cf6f49ceb42bbd17c->enter($__internal_1aacf0eab2ed7f2207985c598d191f1bebfcc33f71d68f6cf6f49ceb42bbd17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_888b22b05848f7f6a18a9e222f5aa624a1c173651a2b3ca2b98f76013f826e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888b22b05848f7f6a18a9e222f5aa624a1c173651a2b3ca2b98f76013f826e3e->enter($__internal_888b22b05848f7f6a18a9e222f5aa624a1c173651a2b3ca2b98f76013f826e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aacf0eab2ed7f2207985c598d191f1bebfcc33f71d68f6cf6f49ceb42bbd17c->leave($__internal_1aacf0eab2ed7f2207985c598d191f1bebfcc33f71d68f6cf6f49ceb42bbd17c_prof);

        
        $__internal_888b22b05848f7f6a18a9e222f5aa624a1c173651a2b3ca2b98f76013f826e3e->leave($__internal_888b22b05848f7f6a18a9e222f5aa624a1c173651a2b3ca2b98f76013f826e3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93589c8813f875e0853160178d0ac04252e94b20fc6f248af436602b0bb55b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93589c8813f875e0853160178d0ac04252e94b20fc6f248af436602b0bb55b80->enter($__internal_93589c8813f875e0853160178d0ac04252e94b20fc6f248af436602b0bb55b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d79ec3f2dabb161ca6b56201af6c3e7bf420dd5274942e131dfc57b27056f181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79ec3f2dabb161ca6b56201af6c3e7bf420dd5274942e131dfc57b27056f181->enter($__internal_d79ec3f2dabb161ca6b56201af6c3e7bf420dd5274942e131dfc57b27056f181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d79ec3f2dabb161ca6b56201af6c3e7bf420dd5274942e131dfc57b27056f181->leave($__internal_d79ec3f2dabb161ca6b56201af6c3e7bf420dd5274942e131dfc57b27056f181_prof);

        
        $__internal_93589c8813f875e0853160178d0ac04252e94b20fc6f248af436602b0bb55b80->leave($__internal_93589c8813f875e0853160178d0ac04252e94b20fc6f248af436602b0bb55b80_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
