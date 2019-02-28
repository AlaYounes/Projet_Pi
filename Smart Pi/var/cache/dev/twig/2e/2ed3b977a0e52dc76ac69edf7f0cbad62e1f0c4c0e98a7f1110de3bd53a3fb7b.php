<?php

/* :categorie:new.html.twig */
class __TwigTemplate_0b66fc7c6d825a152ac3b538512fa0b4e8b885636ad9ab7a7f6e93d1b19848e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":categorie:new.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a56f92a6930b0d0c8b752ffefded1652057b736e042c37e2222b6b7b86d2f6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56f92a6930b0d0c8b752ffefded1652057b736e042c37e2222b6b7b86d2f6ba->enter($__internal_a56f92a6930b0d0c8b752ffefded1652057b736e042c37e2222b6b7b86d2f6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categorie:new.html.twig"));

        $__internal_2d0195b2f771e55a9ade775c5c72952f245a1dd6179624670a39b87168652f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0195b2f771e55a9ade775c5c72952f245a1dd6179624670a39b87168652f5c->enter($__internal_2d0195b2f771e55a9ade775c5c72952f245a1dd6179624670a39b87168652f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categorie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a56f92a6930b0d0c8b752ffefded1652057b736e042c37e2222b6b7b86d2f6ba->leave($__internal_a56f92a6930b0d0c8b752ffefded1652057b736e042c37e2222b6b7b86d2f6ba_prof);

        
        $__internal_2d0195b2f771e55a9ade775c5c72952f245a1dd6179624670a39b87168652f5c->leave($__internal_2d0195b2f771e55a9ade775c5c72952f245a1dd6179624670a39b87168652f5c_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_f7218018a3462d529ac9b1a9e8477912be04ac860f9689f11c5348bcd5db156c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7218018a3462d529ac9b1a9e8477912be04ac860f9689f11c5348bcd5db156c->enter($__internal_f7218018a3462d529ac9b1a9e8477912be04ac860f9689f11c5348bcd5db156c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_0a57aab351e7bfaa99f3277bf0e9b57147a1f383d30295a5b3255882d7f3b523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a57aab351e7bfaa99f3277bf0e9b57147a1f383d30295a5b3255882d7f3b523->enter($__internal_0a57aab351e7bfaa99f3277bf0e9b57147a1f383d30295a5b3255882d7f3b523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Categorie creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0a57aab351e7bfaa99f3277bf0e9b57147a1f383d30295a5b3255882d7f3b523->leave($__internal_0a57aab351e7bfaa99f3277bf0e9b57147a1f383d30295a5b3255882d7f3b523_prof);

        
        $__internal_f7218018a3462d529ac9b1a9e8477912be04ac860f9689f11c5348bcd5db156c->leave($__internal_f7218018a3462d529ac9b1a9e8477912be04ac860f9689f11c5348bcd5db156c_prof);

    }

    public function getTemplateName()
    {
        return ":categorie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block container %}
    <h1>Categorie creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('categorie_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":categorie:new.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/categorie/new.html.twig");
    }
}
