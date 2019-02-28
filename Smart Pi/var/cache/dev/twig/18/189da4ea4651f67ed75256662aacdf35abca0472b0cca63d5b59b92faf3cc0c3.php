<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_08196047f0a234a17158277d6411b2b046194116e58cb788a5a4872d19e11749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_152aca167b33b5745247db08c6715db129286ba4a18a7513c6642ef0d518ef11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152aca167b33b5745247db08c6715db129286ba4a18a7513c6642ef0d518ef11->enter($__internal_152aca167b33b5745247db08c6715db129286ba4a18a7513c6642ef0d518ef11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_cfd247218f620e6f80ddb10e460c7fd776ae1546b92f0bb8ac490be0e4a4fc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd247218f620e6f80ddb10e460c7fd776ae1546b92f0bb8ac490be0e4a4fc84->enter($__internal_cfd247218f620e6f80ddb10e460c7fd776ae1546b92f0bb8ac490be0e4a4fc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_152aca167b33b5745247db08c6715db129286ba4a18a7513c6642ef0d518ef11->leave($__internal_152aca167b33b5745247db08c6715db129286ba4a18a7513c6642ef0d518ef11_prof);

        
        $__internal_cfd247218f620e6f80ddb10e460c7fd776ae1546b92f0bb8ac490be0e4a4fc84->leave($__internal_cfd247218f620e6f80ddb10e460c7fd776ae1546b92f0bb8ac490be0e4a4fc84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
