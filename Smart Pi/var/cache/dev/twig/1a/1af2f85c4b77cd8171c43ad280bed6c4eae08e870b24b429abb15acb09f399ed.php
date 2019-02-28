<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1f731e0a3c283976d8b7cdf4c4498607f09061578587d474e8a46348462c7dd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_d91eaff18bf3ac10ea0a926325bb4ebcbec786c7a7c2f6ab0a4168c9c27a035d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91eaff18bf3ac10ea0a926325bb4ebcbec786c7a7c2f6ab0a4168c9c27a035d->enter($__internal_d91eaff18bf3ac10ea0a926325bb4ebcbec786c7a7c2f6ab0a4168c9c27a035d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f4257a19da64e6491ea262e2ec3c5afee1b05399748534eedd1e4e8ffa13e3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4257a19da64e6491ea262e2ec3c5afee1b05399748534eedd1e4e8ffa13e3c2->enter($__internal_f4257a19da64e6491ea262e2ec3c5afee1b05399748534eedd1e4e8ffa13e3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d91eaff18bf3ac10ea0a926325bb4ebcbec786c7a7c2f6ab0a4168c9c27a035d->leave($__internal_d91eaff18bf3ac10ea0a926325bb4ebcbec786c7a7c2f6ab0a4168c9c27a035d_prof);

        
        $__internal_f4257a19da64e6491ea262e2ec3c5afee1b05399748534eedd1e4e8ffa13e3c2->leave($__internal_f4257a19da64e6491ea262e2ec3c5afee1b05399748534eedd1e4e8ffa13e3c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4c46670727395400aed48cb24ef05595ecb993c3130826c81fe07f32e3c2459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c46670727395400aed48cb24ef05595ecb993c3130826c81fe07f32e3c2459->enter($__internal_f4c46670727395400aed48cb24ef05595ecb993c3130826c81fe07f32e3c2459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_217e7daf186dda25fa3f02a802b99c9195bbf745a789acc95ebef60f9c60edce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217e7daf186dda25fa3f02a802b99c9195bbf745a789acc95ebef60f9c60edce->enter($__internal_217e7daf186dda25fa3f02a802b99c9195bbf745a789acc95ebef60f9c60edce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_217e7daf186dda25fa3f02a802b99c9195bbf745a789acc95ebef60f9c60edce->leave($__internal_217e7daf186dda25fa3f02a802b99c9195bbf745a789acc95ebef60f9c60edce_prof);

        
        $__internal_f4c46670727395400aed48cb24ef05595ecb993c3130826c81fe07f32e3c2459->leave($__internal_f4c46670727395400aed48cb24ef05595ecb993c3130826c81fe07f32e3c2459_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b4332fb780e93d33c7eaf4af6c7ea41120be8f7d1ca1da665020ab262fec2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4332fb780e93d33c7eaf4af6c7ea41120be8f7d1ca1da665020ab262fec2f5->enter($__internal_3b4332fb780e93d33c7eaf4af6c7ea41120be8f7d1ca1da665020ab262fec2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44427c5d693d394f3875aab141b029eec580ff3f4e980f496dca7cba299229c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44427c5d693d394f3875aab141b029eec580ff3f4e980f496dca7cba299229c7->enter($__internal_44427c5d693d394f3875aab141b029eec580ff3f4e980f496dca7cba299229c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44427c5d693d394f3875aab141b029eec580ff3f4e980f496dca7cba299229c7->leave($__internal_44427c5d693d394f3875aab141b029eec580ff3f4e980f496dca7cba299229c7_prof);

        
        $__internal_3b4332fb780e93d33c7eaf4af6c7ea41120be8f7d1ca1da665020ab262fec2f5->leave($__internal_3b4332fb780e93d33c7eaf4af6c7ea41120be8f7d1ca1da665020ab262fec2f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
