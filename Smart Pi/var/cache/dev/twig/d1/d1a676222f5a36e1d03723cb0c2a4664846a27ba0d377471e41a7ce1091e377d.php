<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ab38cb72913e55166f1fb47edf474d79f8c3f50568c6fd366dcaf4b55a60a1b8 extends Twig_Template
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
        $__internal_00e2f0e85cbd85411ce7a1a96828a19efa0f7ebe5553b5f5ebe1072450d11009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e2f0e85cbd85411ce7a1a96828a19efa0f7ebe5553b5f5ebe1072450d11009->enter($__internal_00e2f0e85cbd85411ce7a1a96828a19efa0f7ebe5553b5f5ebe1072450d11009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_092f920f1da7471883607c14216eec34e1599a1874eca4a4a609854ce9c836e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092f920f1da7471883607c14216eec34e1599a1874eca4a4a609854ce9c836e6->enter($__internal_092f920f1da7471883607c14216eec34e1599a1874eca4a4a609854ce9c836e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e2f0e85cbd85411ce7a1a96828a19efa0f7ebe5553b5f5ebe1072450d11009->leave($__internal_00e2f0e85cbd85411ce7a1a96828a19efa0f7ebe5553b5f5ebe1072450d11009_prof);

        
        $__internal_092f920f1da7471883607c14216eec34e1599a1874eca4a4a609854ce9c836e6->leave($__internal_092f920f1da7471883607c14216eec34e1599a1874eca4a4a609854ce9c836e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6f1001506ceb9672aac1df897fb307ce34fe7a6ae7e9216e548d16f267bd20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f1001506ceb9672aac1df897fb307ce34fe7a6ae7e9216e548d16f267bd20a->enter($__internal_c6f1001506ceb9672aac1df897fb307ce34fe7a6ae7e9216e548d16f267bd20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e52474c2329290fb3887ab21770b98351191ca486520f58acced7f4d158ac0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e52474c2329290fb3887ab21770b98351191ca486520f58acced7f4d158ac0d->enter($__internal_7e52474c2329290fb3887ab21770b98351191ca486520f58acced7f4d158ac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7e52474c2329290fb3887ab21770b98351191ca486520f58acced7f4d158ac0d->leave($__internal_7e52474c2329290fb3887ab21770b98351191ca486520f58acced7f4d158ac0d_prof);

        
        $__internal_c6f1001506ceb9672aac1df897fb307ce34fe7a6ae7e9216e548d16f267bd20a->leave($__internal_c6f1001506ceb9672aac1df897fb307ce34fe7a6ae7e9216e548d16f267bd20a_prof);

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
