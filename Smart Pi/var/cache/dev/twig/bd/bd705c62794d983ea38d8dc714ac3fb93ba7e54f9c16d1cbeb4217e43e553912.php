<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f833a03d1450e55e213fc117d35089295ba17d5656faad23a7733cc75c4cdad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afdcd59430b1be74d657c3901ecdaa608815e185002ce34a368f983b749e97b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afdcd59430b1be74d657c3901ecdaa608815e185002ce34a368f983b749e97b6->enter($__internal_afdcd59430b1be74d657c3901ecdaa608815e185002ce34a368f983b749e97b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_dcf574883d3db3198e09a5fd7d0972b8711be264b502bf0fb85bb63598ce0b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf574883d3db3198e09a5fd7d0972b8711be264b502bf0fb85bb63598ce0b92->enter($__internal_dcf574883d3db3198e09a5fd7d0972b8711be264b502bf0fb85bb63598ce0b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdcd59430b1be74d657c3901ecdaa608815e185002ce34a368f983b749e97b6->leave($__internal_afdcd59430b1be74d657c3901ecdaa608815e185002ce34a368f983b749e97b6_prof);

        
        $__internal_dcf574883d3db3198e09a5fd7d0972b8711be264b502bf0fb85bb63598ce0b92->leave($__internal_dcf574883d3db3198e09a5fd7d0972b8711be264b502bf0fb85bb63598ce0b92_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f669d28d03f058c2c2e4d07f3fb7dfb899493ec370dd86f4aec218ec6b8258ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f669d28d03f058c2c2e4d07f3fb7dfb899493ec370dd86f4aec218ec6b8258ac->enter($__internal_f669d28d03f058c2c2e4d07f3fb7dfb899493ec370dd86f4aec218ec6b8258ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2247a1026a12e64fffda770b082a99d23f26666483a7027041426645fa7c3ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2247a1026a12e64fffda770b082a99d23f26666483a7027041426645fa7c3ffc->enter($__internal_2247a1026a12e64fffda770b082a99d23f26666483a7027041426645fa7c3ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2247a1026a12e64fffda770b082a99d23f26666483a7027041426645fa7c3ffc->leave($__internal_2247a1026a12e64fffda770b082a99d23f26666483a7027041426645fa7c3ffc_prof);

        
        $__internal_f669d28d03f058c2c2e4d07f3fb7dfb899493ec370dd86f4aec218ec6b8258ac->leave($__internal_f669d28d03f058c2c2e4d07f3fb7dfb899493ec370dd86f4aec218ec6b8258ac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
