<?php

/* :article:edit.html.twig */
class __TwigTemplate_95b5076e0b22c3b585148834903e79be13b093d0e834528279d55befe5f12718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:edit.html.twig", 1);
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
        $__internal_d9a477b67e9ad39d740087aabe16416eb6cd112a9a5736823460a907f90efe12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a477b67e9ad39d740087aabe16416eb6cd112a9a5736823460a907f90efe12->enter($__internal_d9a477b67e9ad39d740087aabe16416eb6cd112a9a5736823460a907f90efe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $__internal_be6f9ef7019baaa1a4a6b22620f0c8310e9d2c629fd7f13cd21d56c392a6a648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6f9ef7019baaa1a4a6b22620f0c8310e9d2c629fd7f13cd21d56c392a6a648->enter($__internal_be6f9ef7019baaa1a4a6b22620f0c8310e9d2c629fd7f13cd21d56c392a6a648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a477b67e9ad39d740087aabe16416eb6cd112a9a5736823460a907f90efe12->leave($__internal_d9a477b67e9ad39d740087aabe16416eb6cd112a9a5736823460a907f90efe12_prof);

        
        $__internal_be6f9ef7019baaa1a4a6b22620f0c8310e9d2c629fd7f13cd21d56c392a6a648->leave($__internal_be6f9ef7019baaa1a4a6b22620f0c8310e9d2c629fd7f13cd21d56c392a6a648_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_cd656ef056625bd31dc0b6a2ef93c7078dda6dfb0937ecf3f524f953eadf4d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd656ef056625bd31dc0b6a2ef93c7078dda6dfb0937ecf3f524f953eadf4d3d->enter($__internal_cd656ef056625bd31dc0b6a2ef93c7078dda6dfb0937ecf3f524f953eadf4d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_c5fa216846fa56af74ddc00161d12e0d555bbf2dda611d2d117cd0883a97babf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fa216846fa56af74ddc00161d12e0d555bbf2dda611d2d117cd0883a97babf->enter($__internal_c5fa216846fa56af74ddc00161d12e0d555bbf2dda611d2d117cd0883a97babf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_c5fa216846fa56af74ddc00161d12e0d555bbf2dda611d2d117cd0883a97babf->leave($__internal_c5fa216846fa56af74ddc00161d12e0d555bbf2dda611d2d117cd0883a97babf_prof);

        
        $__internal_cd656ef056625bd31dc0b6a2ef93c7078dda6dfb0937ecf3f524f953eadf4d3d->leave($__internal_cd656ef056625bd31dc0b6a2ef93c7078dda6dfb0937ecf3f524f953eadf4d3d_prof);

    }

    public function getTemplateName()
    {
        return ":article:edit.html.twig";
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
", ":article:edit.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/article/edit.html.twig");
    }
}
