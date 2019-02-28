<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_cbb042d5a38aff64db620256c69dec9edab1abb306e04e41c0450406db9b73a2 extends Twig_Template
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
        $__internal_cc8bb3d244535d3531c6da5d41c1c324056dec567a59a455b6e8b51558135a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8bb3d244535d3531c6da5d41c1c324056dec567a59a455b6e8b51558135a8e->enter($__internal_cc8bb3d244535d3531c6da5d41c1c324056dec567a59a455b6e8b51558135a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_dd3d0606b599abca7cd18997db98e0764eb54ddf0d343d6f0cc5db0b997bcff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3d0606b599abca7cd18997db98e0764eb54ddf0d343d6f0cc5db0b997bcff3->enter($__internal_dd3d0606b599abca7cd18997db98e0764eb54ddf0d343d6f0cc5db0b997bcff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc8bb3d244535d3531c6da5d41c1c324056dec567a59a455b6e8b51558135a8e->leave($__internal_cc8bb3d244535d3531c6da5d41c1c324056dec567a59a455b6e8b51558135a8e_prof);

        
        $__internal_dd3d0606b599abca7cd18997db98e0764eb54ddf0d343d6f0cc5db0b997bcff3->leave($__internal_dd3d0606b599abca7cd18997db98e0764eb54ddf0d343d6f0cc5db0b997bcff3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0b58319035cd218b403426568f4d2f2ae0f98426d5cc27d5f376c048cd8cd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b58319035cd218b403426568f4d2f2ae0f98426d5cc27d5f376c048cd8cd35->enter($__internal_e0b58319035cd218b403426568f4d2f2ae0f98426d5cc27d5f376c048cd8cd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_38648769922c7c2e28a6eae74b3381d77eed385832f0f46df57de48947f44387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38648769922c7c2e28a6eae74b3381d77eed385832f0f46df57de48947f44387->enter($__internal_38648769922c7c2e28a6eae74b3381d77eed385832f0f46df57de48947f44387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_38648769922c7c2e28a6eae74b3381d77eed385832f0f46df57de48947f44387->leave($__internal_38648769922c7c2e28a6eae74b3381d77eed385832f0f46df57de48947f44387_prof);

        
        $__internal_e0b58319035cd218b403426568f4d2f2ae0f98426d5cc27d5f376c048cd8cd35->leave($__internal_e0b58319035cd218b403426568f4d2f2ae0f98426d5cc27d5f376c048cd8cd35_prof);

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
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
