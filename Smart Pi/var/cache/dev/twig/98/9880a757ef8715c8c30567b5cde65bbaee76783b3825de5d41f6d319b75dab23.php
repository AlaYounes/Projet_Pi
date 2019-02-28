<?php

/* article/edit.html.twig */
class __TwigTemplate_c400780ab4acd4bc983d3eeb96214311d5baa5b6c0eaf6bb0a325f4762dd2276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/edit.html.twig", 1);
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
        $__internal_7ca27c2da4259afb9ce1397c5aeee94fca63316d2658d9d0686ff9a0d7ce8cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca27c2da4259afb9ce1397c5aeee94fca63316d2658d9d0686ff9a0d7ce8cd4->enter($__internal_7ca27c2da4259afb9ce1397c5aeee94fca63316d2658d9d0686ff9a0d7ce8cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_33f9f5f72e97971acde18e59f5046dc06a04a47d8ca31e8954cee8414f929003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f9f5f72e97971acde18e59f5046dc06a04a47d8ca31e8954cee8414f929003->enter($__internal_33f9f5f72e97971acde18e59f5046dc06a04a47d8ca31e8954cee8414f929003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca27c2da4259afb9ce1397c5aeee94fca63316d2658d9d0686ff9a0d7ce8cd4->leave($__internal_7ca27c2da4259afb9ce1397c5aeee94fca63316d2658d9d0686ff9a0d7ce8cd4_prof);

        
        $__internal_33f9f5f72e97971acde18e59f5046dc06a04a47d8ca31e8954cee8414f929003->leave($__internal_33f9f5f72e97971acde18e59f5046dc06a04a47d8ca31e8954cee8414f929003_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_74107559726eab1764cd9991d1026c56ad1f51b7f8d178f0a83c01b26f827a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74107559726eab1764cd9991d1026c56ad1f51b7f8d178f0a83c01b26f827a2e->enter($__internal_74107559726eab1764cd9991d1026c56ad1f51b7f8d178f0a83c01b26f827a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_bb7da94b0b99219bd7db36387880b37690b001e7207f6abfe5e6392970513dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7da94b0b99219bd7db36387880b37690b001e7207f6abfe5e6392970513dab->enter($__internal_bb7da94b0b99219bd7db36387880b37690b001e7207f6abfe5e6392970513dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Article edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
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
        
        $__internal_bb7da94b0b99219bd7db36387880b37690b001e7207f6abfe5e6392970513dab->leave($__internal_bb7da94b0b99219bd7db36387880b37690b001e7207f6abfe5e6392970513dab_prof);

        
        $__internal_74107559726eab1764cd9991d1026c56ad1f51b7f8d178f0a83c01b26f827a2e->leave($__internal_74107559726eab1764cd9991d1026c56ad1f51b7f8d178f0a83c01b26f827a2e_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  78 => 16,  72 => 13,  65 => 9,  60 => 7,  56 => 6,  52 => 4,  43 => 3,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme edit_form 'bootstrap_3_layout.html.twig' %}
{% block container %}
    <h1>Article edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/edit.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\article\\edit.html.twig");
    }
}
