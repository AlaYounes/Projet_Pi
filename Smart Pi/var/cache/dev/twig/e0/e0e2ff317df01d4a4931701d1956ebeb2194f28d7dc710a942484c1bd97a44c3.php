<?php

/* @Fix/Crud/Modifier_Service.html.twig */
class __TwigTemplate_d9caa0594298dbbd1955cdcdd130cfcfe825ecb52834a84ce93e03b4b29a0d94 extends Twig_Template
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
        $__internal_69dac55f9e007fe13e6201def174c5c60a84518e2b46c26fd348178ff14f834b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69dac55f9e007fe13e6201def174c5c60a84518e2b46c26fd348178ff14f834b->enter($__internal_69dac55f9e007fe13e6201def174c5c60a84518e2b46c26fd348178ff14f834b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Modifier_Service.html.twig"));

        $__internal_8f69b2982925d9017af50c29f283562af677dc99fd4657bfaa96857e8393434c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f69b2982925d9017af50c29f283562af677dc99fd4657bfaa96857e8393434c->enter($__internal_8f69b2982925d9017af50c29f283562af677dc99fd4657bfaa96857e8393434c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Modifier_Service.html.twig"));

        // line 1
        echo "<center>

    <h2 >Modifier_Service </h2>
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</center>";
        
        $__internal_69dac55f9e007fe13e6201def174c5c60a84518e2b46c26fd348178ff14f834b->leave($__internal_69dac55f9e007fe13e6201def174c5c60a84518e2b46c26fd348178ff14f834b_prof);

        
        $__internal_8f69b2982925d9017af50c29f283562af677dc99fd4657bfaa96857e8393434c->leave($__internal_8f69b2982925d9017af50c29f283562af677dc99fd4657bfaa96857e8393434c_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Crud/Modifier_Service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<center>

    <h2 >Modifier_Service </h2>
    {{ form (form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
</center>", "@Fix/Crud/Modifier_Service.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Crud\\Modifier_Service.html.twig");
    }
}
