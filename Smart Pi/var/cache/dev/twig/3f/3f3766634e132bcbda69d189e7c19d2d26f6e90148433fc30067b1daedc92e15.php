<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0976c8993777d22865da0fee0767f54dbc1a05beeb2b41879a4e6d0de7325b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_3f76a2194d69eba2a27658479996e82467eb9a79eda1b1d9a09be98cadf601e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f76a2194d69eba2a27658479996e82467eb9a79eda1b1d9a09be98cadf601e1->enter($__internal_3f76a2194d69eba2a27658479996e82467eb9a79eda1b1d9a09be98cadf601e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_595043aa9673f80c5e1a7adce064f128ab3e3d2c5540f1955c0077170d7bf260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595043aa9673f80c5e1a7adce064f128ab3e3d2c5540f1955c0077170d7bf260->enter($__internal_595043aa9673f80c5e1a7adce064f128ab3e3d2c5540f1955c0077170d7bf260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f76a2194d69eba2a27658479996e82467eb9a79eda1b1d9a09be98cadf601e1->leave($__internal_3f76a2194d69eba2a27658479996e82467eb9a79eda1b1d9a09be98cadf601e1_prof);

        
        $__internal_595043aa9673f80c5e1a7adce064f128ab3e3d2c5540f1955c0077170d7bf260->leave($__internal_595043aa9673f80c5e1a7adce064f128ab3e3d2c5540f1955c0077170d7bf260_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_335a100fc3ea8fcdc0bc44eb1afeab43d29fcd0d1e080f7c3f9d71d17a775f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335a100fc3ea8fcdc0bc44eb1afeab43d29fcd0d1e080f7c3f9d71d17a775f2f->enter($__internal_335a100fc3ea8fcdc0bc44eb1afeab43d29fcd0d1e080f7c3f9d71d17a775f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_60adb242036becd2e0543377bd483db99a7f63c0eb509a17e5fba47df92e4c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60adb242036becd2e0543377bd483db99a7f63c0eb509a17e5fba47df92e4c96->enter($__internal_60adb242036becd2e0543377bd483db99a7f63c0eb509a17e5fba47df92e4c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_60adb242036becd2e0543377bd483db99a7f63c0eb509a17e5fba47df92e4c96->leave($__internal_60adb242036becd2e0543377bd483db99a7f63c0eb509a17e5fba47df92e4c96_prof);

        
        $__internal_335a100fc3ea8fcdc0bc44eb1afeab43d29fcd0d1e080f7c3f9d71d17a775f2f->leave($__internal_335a100fc3ea8fcdc0bc44eb1afeab43d29fcd0d1e080f7c3f9d71d17a775f2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
