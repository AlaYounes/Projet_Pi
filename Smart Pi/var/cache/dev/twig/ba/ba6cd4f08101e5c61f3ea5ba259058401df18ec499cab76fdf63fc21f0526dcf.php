<?php

/* FixBundle:Crud:Modifier_Service.html.twig */
class __TwigTemplate_1f387813a36fd13a0cbc58b67d80dd1e5963643829007a0c182ae8abde12abb7 extends Twig_Template
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
        $__internal_6dc6f1990083736f4e11eae8f5e4fc8a697287efdb91badd0a420fc7e4d45fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc6f1990083736f4e11eae8f5e4fc8a697287efdb91badd0a420fc7e4d45fdf->enter($__internal_6dc6f1990083736f4e11eae8f5e4fc8a697287efdb91badd0a420fc7e4d45fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Crud:Modifier_Service.html.twig"));

        $__internal_149590766e66c819d7ca641616e6abc1715ca759ab79271e59cb57ce2d99b8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149590766e66c819d7ca641616e6abc1715ca759ab79271e59cb57ce2d99b8fc->enter($__internal_149590766e66c819d7ca641616e6abc1715ca759ab79271e59cb57ce2d99b8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Crud:Modifier_Service.html.twig"));

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
        
        $__internal_6dc6f1990083736f4e11eae8f5e4fc8a697287efdb91badd0a420fc7e4d45fdf->leave($__internal_6dc6f1990083736f4e11eae8f5e4fc8a697287efdb91badd0a420fc7e4d45fdf_prof);

        
        $__internal_149590766e66c819d7ca641616e6abc1715ca759ab79271e59cb57ce2d99b8fc->leave($__internal_149590766e66c819d7ca641616e6abc1715ca759ab79271e59cb57ce2d99b8fc_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Crud:Modifier_Service.html.twig";
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
</center>", "FixBundle:Crud:Modifier_Service.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Crud/Modifier_Service.html.twig");
    }
}
