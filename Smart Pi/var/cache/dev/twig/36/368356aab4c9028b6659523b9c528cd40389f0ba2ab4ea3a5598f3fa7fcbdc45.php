<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_6291ff286f2bfc6acdc3ac5b9aa9676edb51ad1327a185791cda36584d592057 extends Twig_Template
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
        $__internal_33f42c157db167f4609d61be477f19a26025238e93bd063105fed838b6ee95b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f42c157db167f4609d61be477f19a26025238e93bd063105fed838b6ee95b8->enter($__internal_33f42c157db167f4609d61be477f19a26025238e93bd063105fed838b6ee95b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_2e4b93b670bd7449fd1eb7efa116722630d36bd482c0be71b7c8a1d624bea28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4b93b670bd7449fd1eb7efa116722630d36bd482c0be71b7c8a1d624bea28e->enter($__internal_2e4b93b670bd7449fd1eb7efa116722630d36bd482c0be71b7c8a1d624bea28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_33f42c157db167f4609d61be477f19a26025238e93bd063105fed838b6ee95b8->leave($__internal_33f42c157db167f4609d61be477f19a26025238e93bd063105fed838b6ee95b8_prof);

        
        $__internal_2e4b93b670bd7449fd1eb7efa116722630d36bd482c0be71b7c8a1d624bea28e->leave($__internal_2e4b93b670bd7449fd1eb7efa116722630d36bd482c0be71b7c8a1d624bea28e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
