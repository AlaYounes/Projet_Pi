<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ddf8f22cb8690532af66eb7ba0f6744aa4f2e01d8e3bc89392b7d0675680fe7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01f6dad9e74946e6f53a24ff807c8dfe0054fd84cf0dc8559ed61af1bbb55270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f6dad9e74946e6f53a24ff807c8dfe0054fd84cf0dc8559ed61af1bbb55270->enter($__internal_01f6dad9e74946e6f53a24ff807c8dfe0054fd84cf0dc8559ed61af1bbb55270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a03d8cfd726c9820372bad1173f9f0a6c68cd97976b3817103b33bd88e649dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03d8cfd726c9820372bad1173f9f0a6c68cd97976b3817103b33bd88e649dfd->enter($__internal_a03d8cfd726c9820372bad1173f9f0a6c68cd97976b3817103b33bd88e649dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f6dad9e74946e6f53a24ff807c8dfe0054fd84cf0dc8559ed61af1bbb55270->leave($__internal_01f6dad9e74946e6f53a24ff807c8dfe0054fd84cf0dc8559ed61af1bbb55270_prof);

        
        $__internal_a03d8cfd726c9820372bad1173f9f0a6c68cd97976b3817103b33bd88e649dfd->leave($__internal_a03d8cfd726c9820372bad1173f9f0a6c68cd97976b3817103b33bd88e649dfd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8989b718d0d1b122dfbae8973ca1fb901c0d7d2b56af2ac499cf69cb5c4fc22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8989b718d0d1b122dfbae8973ca1fb901c0d7d2b56af2ac499cf69cb5c4fc22f->enter($__internal_8989b718d0d1b122dfbae8973ca1fb901c0d7d2b56af2ac499cf69cb5c4fc22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0cdeb4e3fc47005416aed8e83677fea4229557313d8c13e3f066268311b07a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdeb4e3fc47005416aed8e83677fea4229557313d8c13e3f066268311b07a4d->enter($__internal_0cdeb4e3fc47005416aed8e83677fea4229557313d8c13e3f066268311b07a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0cdeb4e3fc47005416aed8e83677fea4229557313d8c13e3f066268311b07a4d->leave($__internal_0cdeb4e3fc47005416aed8e83677fea4229557313d8c13e3f066268311b07a4d_prof);

        
        $__internal_8989b718d0d1b122dfbae8973ca1fb901c0d7d2b56af2ac499cf69cb5c4fc22f->leave($__internal_8989b718d0d1b122dfbae8973ca1fb901c0d7d2b56af2ac499cf69cb5c4fc22f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a418bddbebb918f361c6f4587d1c4281665defd7b0df6a381f04d012a69f68b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a418bddbebb918f361c6f4587d1c4281665defd7b0df6a381f04d012a69f68b6->enter($__internal_a418bddbebb918f361c6f4587d1c4281665defd7b0df6a381f04d012a69f68b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb85563369db20d0140e6a6df5ac8fe9bab44cba5e9d4412b26e1543773849f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb85563369db20d0140e6a6df5ac8fe9bab44cba5e9d4412b26e1543773849f0->enter($__internal_cb85563369db20d0140e6a6df5ac8fe9bab44cba5e9d4412b26e1543773849f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cb85563369db20d0140e6a6df5ac8fe9bab44cba5e9d4412b26e1543773849f0->leave($__internal_cb85563369db20d0140e6a6df5ac8fe9bab44cba5e9d4412b26e1543773849f0_prof);

        
        $__internal_a418bddbebb918f361c6f4587d1c4281665defd7b0df6a381f04d012a69f68b6->leave($__internal_a418bddbebb918f361c6f4587d1c4281665defd7b0df6a381f04d012a69f68b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
