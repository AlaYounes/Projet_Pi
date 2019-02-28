<?php

/* @Fix/Crud/Modifier_Offre.html.twig */
class __TwigTemplate_5f186f8c6be4c1ceb2d3343a68d0468395649fb210f4c02d529d02568228f98d extends Twig_Template
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
        $__internal_75d23f9f7a64ebcd17808cef5bae947cc56ebb259569b4454cf2871235be553e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d23f9f7a64ebcd17808cef5bae947cc56ebb259569b4454cf2871235be553e->enter($__internal_75d23f9f7a64ebcd17808cef5bae947cc56ebb259569b4454cf2871235be553e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Modifier_Offre.html.twig"));

        $__internal_909401487b7efedd14ded37dc2f8516b0b948f25a091b40e37bab50b77ec3f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909401487b7efedd14ded37dc2f8516b0b948f25a091b40e37bab50b77ec3f18->enter($__internal_909401487b7efedd14ded37dc2f8516b0b948f25a091b40e37bab50b77ec3f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Modifier_Offre.html.twig"));

        // line 1
        echo "<center>

    <h2 >Modifier_Offre </h2>
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
        
        $__internal_75d23f9f7a64ebcd17808cef5bae947cc56ebb259569b4454cf2871235be553e->leave($__internal_75d23f9f7a64ebcd17808cef5bae947cc56ebb259569b4454cf2871235be553e_prof);

        
        $__internal_909401487b7efedd14ded37dc2f8516b0b948f25a091b40e37bab50b77ec3f18->leave($__internal_909401487b7efedd14ded37dc2f8516b0b948f25a091b40e37bab50b77ec3f18_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Crud/Modifier_Offre.html.twig";
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

    <h2 >Modifier_Offre </h2>
    {{ form (form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
</center>", "@Fix/Crud/Modifier_Offre.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Crud\\Modifier_Offre.html.twig");
    }
}
