<?php

/* FixBundle:Crud:Modifier_Offre.html.twig */
class __TwigTemplate_abe5830840f6b3f76177a19802f48794f7d9ea2143d1c3a0a0027f475787adfc extends Twig_Template
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
        $__internal_40bf1f85453848ff1a5d3df4eea9807d51b3dfdf7e0aff7ede69f9eba6165681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40bf1f85453848ff1a5d3df4eea9807d51b3dfdf7e0aff7ede69f9eba6165681->enter($__internal_40bf1f85453848ff1a5d3df4eea9807d51b3dfdf7e0aff7ede69f9eba6165681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Crud:Modifier_Offre.html.twig"));

        $__internal_68dc238a1e2b6ebe629ecd8ee93f33d2fa477c147a7d6dab1adbd07d90ec1c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dc238a1e2b6ebe629ecd8ee93f33d2fa477c147a7d6dab1adbd07d90ec1c5d->enter($__internal_68dc238a1e2b6ebe629ecd8ee93f33d2fa477c147a7d6dab1adbd07d90ec1c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Crud:Modifier_Offre.html.twig"));

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
        
        $__internal_40bf1f85453848ff1a5d3df4eea9807d51b3dfdf7e0aff7ede69f9eba6165681->leave($__internal_40bf1f85453848ff1a5d3df4eea9807d51b3dfdf7e0aff7ede69f9eba6165681_prof);

        
        $__internal_68dc238a1e2b6ebe629ecd8ee93f33d2fa477c147a7d6dab1adbd07d90ec1c5d->leave($__internal_68dc238a1e2b6ebe629ecd8ee93f33d2fa477c147a7d6dab1adbd07d90ec1c5d_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Crud:Modifier_Offre.html.twig";
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
</center>", "FixBundle:Crud:Modifier_Offre.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Crud/Modifier_Offre.html.twig");
    }
}
