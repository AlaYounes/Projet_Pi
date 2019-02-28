<?php

/* categorie/edit.html.twig */
class __TwigTemplate_c7619454aa9d3c7f54b146392d68ae9007d4c769ffcd7a87dc9bf7da566331e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/edit.html.twig", 1);
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
        $__internal_2c4ec8050a48f958ecab3920c9ac63cc4c6c5e7b807c9931124442d61feb557d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4ec8050a48f958ecab3920c9ac63cc4c6c5e7b807c9931124442d61feb557d->enter($__internal_2c4ec8050a48f958ecab3920c9ac63cc4c6c5e7b807c9931124442d61feb557d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/edit.html.twig"));

        $__internal_14e1701e98f7bf6398ce9c906dd74e3c9fe3195c098387b1a945c9a6d1167ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e1701e98f7bf6398ce9c906dd74e3c9fe3195c098387b1a945c9a6d1167ee9->enter($__internal_14e1701e98f7bf6398ce9c906dd74e3c9fe3195c098387b1a945c9a6d1167ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c4ec8050a48f958ecab3920c9ac63cc4c6c5e7b807c9931124442d61feb557d->leave($__internal_2c4ec8050a48f958ecab3920c9ac63cc4c6c5e7b807c9931124442d61feb557d_prof);

        
        $__internal_14e1701e98f7bf6398ce9c906dd74e3c9fe3195c098387b1a945c9a6d1167ee9->leave($__internal_14e1701e98f7bf6398ce9c906dd74e3c9fe3195c098387b1a945c9a6d1167ee9_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_406a4e15f1776c4879d97b94885051b5b612b0a0951a22a6ae3d518700910d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406a4e15f1776c4879d97b94885051b5b612b0a0951a22a6ae3d518700910d73->enter($__internal_406a4e15f1776c4879d97b94885051b5b612b0a0951a22a6ae3d518700910d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_ceb184d7618420a05a50949756b50f59d00ae80b8cb11e610acff1663bd00aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb184d7618420a05a50949756b50f59d00ae80b8cb11e610acff1663bd00aa9->enter($__internal_ceb184d7618420a05a50949756b50f59d00ae80b8cb11e610acff1663bd00aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Categorie edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ceb184d7618420a05a50949756b50f59d00ae80b8cb11e610acff1663bd00aa9->leave($__internal_ceb184d7618420a05a50949756b50f59d00ae80b8cb11e610acff1663bd00aa9_prof);

        
        $__internal_406a4e15f1776c4879d97b94885051b5b612b0a0951a22a6ae3d518700910d73->leave($__internal_406a4e15f1776c4879d97b94885051b5b612b0a0951a22a6ae3d518700910d73_prof);

    }

    public function getTemplateName()
    {
        return "categorie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Categorie edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('categorie_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "categorie/edit.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\categorie\\edit.html.twig");
    }
}
