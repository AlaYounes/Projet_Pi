<?php

/* :categorie:edit.html.twig */
class __TwigTemplate_ee11695be97ac8100bb6e520d2ffdc16d7cd7ef68d6ec7d3230cab7b722cd2dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":categorie:edit.html.twig", 1);
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
        $__internal_9bbf5825657e97da66e927fd381ab7ae25db1c67c35ac41f845b5e9882b8db1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bbf5825657e97da66e927fd381ab7ae25db1c67c35ac41f845b5e9882b8db1b->enter($__internal_9bbf5825657e97da66e927fd381ab7ae25db1c67c35ac41f845b5e9882b8db1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categorie:edit.html.twig"));

        $__internal_8fe281d0509f0922731824e9395efb55c09c76c226ee8c8b28b72a6447372761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe281d0509f0922731824e9395efb55c09c76c226ee8c8b28b72a6447372761->enter($__internal_8fe281d0509f0922731824e9395efb55c09c76c226ee8c8b28b72a6447372761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bbf5825657e97da66e927fd381ab7ae25db1c67c35ac41f845b5e9882b8db1b->leave($__internal_9bbf5825657e97da66e927fd381ab7ae25db1c67c35ac41f845b5e9882b8db1b_prof);

        
        $__internal_8fe281d0509f0922731824e9395efb55c09c76c226ee8c8b28b72a6447372761->leave($__internal_8fe281d0509f0922731824e9395efb55c09c76c226ee8c8b28b72a6447372761_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_8664292828070e182079cb55c3cb3199cd944a5028ead3bd04b27ffce0fef7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8664292828070e182079cb55c3cb3199cd944a5028ead3bd04b27ffce0fef7f9->enter($__internal_8664292828070e182079cb55c3cb3199cd944a5028ead3bd04b27ffce0fef7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_8369f683f562312819b5896f7f03dcaaa9c8c5c72f82f01df25d249f3ebe54e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8369f683f562312819b5896f7f03dcaaa9c8c5c72f82f01df25d249f3ebe54e0->enter($__internal_8369f683f562312819b5896f7f03dcaaa9c8c5c72f82f01df25d249f3ebe54e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_8369f683f562312819b5896f7f03dcaaa9c8c5c72f82f01df25d249f3ebe54e0->leave($__internal_8369f683f562312819b5896f7f03dcaaa9c8c5c72f82f01df25d249f3ebe54e0_prof);

        
        $__internal_8664292828070e182079cb55c3cb3199cd944a5028ead3bd04b27ffce0fef7f9->leave($__internal_8664292828070e182079cb55c3cb3199cd944a5028ead3bd04b27ffce0fef7f9_prof);

    }

    public function getTemplateName()
    {
        return ":categorie:edit.html.twig";
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
", ":categorie:edit.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/categorie/edit.html.twig");
    }
}
