<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_801823071a1b3d7223bdcdefddf0da9606adc32e2940f198163c016e4722bc62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_e4947ed428d8ba8f75cef1a408f80f727a29e81404703f10bdda86fc4380a309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4947ed428d8ba8f75cef1a408f80f727a29e81404703f10bdda86fc4380a309->enter($__internal_e4947ed428d8ba8f75cef1a408f80f727a29e81404703f10bdda86fc4380a309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_f4c1c31f25de21a836392c8eab1d233305f9189d6d714839b4f3aaf250332fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c1c31f25de21a836392c8eab1d233305f9189d6d714839b4f3aaf250332fae->enter($__internal_f4c1c31f25de21a836392c8eab1d233305f9189d6d714839b4f3aaf250332fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4947ed428d8ba8f75cef1a408f80f727a29e81404703f10bdda86fc4380a309->leave($__internal_e4947ed428d8ba8f75cef1a408f80f727a29e81404703f10bdda86fc4380a309_prof);

        
        $__internal_f4c1c31f25de21a836392c8eab1d233305f9189d6d714839b4f3aaf250332fae->leave($__internal_f4c1c31f25de21a836392c8eab1d233305f9189d6d714839b4f3aaf250332fae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95efccf20ddbe2c5aa3b2c1283aeb35878ff770a9bc7520957159bf7e9cecc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95efccf20ddbe2c5aa3b2c1283aeb35878ff770a9bc7520957159bf7e9cecc4f->enter($__internal_95efccf20ddbe2c5aa3b2c1283aeb35878ff770a9bc7520957159bf7e9cecc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5dd81c1e345e8d8172b91969717da0de0a2440bd6d6aa9fab1bdd70595a3e09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd81c1e345e8d8172b91969717da0de0a2440bd6d6aa9fab1bdd70595a3e09f->enter($__internal_5dd81c1e345e8d8172b91969717da0de0a2440bd6d6aa9fab1bdd70595a3e09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5dd81c1e345e8d8172b91969717da0de0a2440bd6d6aa9fab1bdd70595a3e09f->leave($__internal_5dd81c1e345e8d8172b91969717da0de0a2440bd6d6aa9fab1bdd70595a3e09f_prof);

        
        $__internal_95efccf20ddbe2c5aa3b2c1283aeb35878ff770a9bc7520957159bf7e9cecc4f->leave($__internal_95efccf20ddbe2c5aa3b2c1283aeb35878ff770a9bc7520957159bf7e9cecc4f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
