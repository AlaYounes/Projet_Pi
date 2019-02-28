<?php

/* FixBundle:Crud:Ajout_Offre.html.twig */
class __TwigTemplate_5cf81ab3d90ea10d47e396164d9d5af64948b9323b42a7d0058e2d68d09839e4 extends Twig_Template
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
        $__internal_255973a241ae1f9684cf3b1a537bc1bdc5e68a159890b153ece7508589e86cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255973a241ae1f9684cf3b1a537bc1bdc5e68a159890b153ece7508589e86cdb->enter($__internal_255973a241ae1f9684cf3b1a537bc1bdc5e68a159890b153ece7508589e86cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Crud:Ajout_Offre.html.twig"));

        $__internal_5d252de3c8f5aaeb24f5022df850c48975e9842ed06243fcc863ace8b4176e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d252de3c8f5aaeb24f5022df850c48975e9842ed06243fcc863ace8b4176e1d->enter($__internal_5d252de3c8f5aaeb24f5022df850c48975e9842ed06243fcc863ace8b4176e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Crud:Ajout_Offre.html.twig"));

        // line 1
        echo "<center>

    <h2 >Ajout_Offre </h2>
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
        
        $__internal_255973a241ae1f9684cf3b1a537bc1bdc5e68a159890b153ece7508589e86cdb->leave($__internal_255973a241ae1f9684cf3b1a537bc1bdc5e68a159890b153ece7508589e86cdb_prof);

        
        $__internal_5d252de3c8f5aaeb24f5022df850c48975e9842ed06243fcc863ace8b4176e1d->leave($__internal_5d252de3c8f5aaeb24f5022df850c48975e9842ed06243fcc863ace8b4176e1d_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Crud:Ajout_Offre.html.twig";
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

    <h2 >Ajout_Offre </h2>
    {{ form (form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
</center>", "FixBundle:Crud:Ajout_Offre.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Crud/Ajout_Offre.html.twig");
    }
}
