<?php

/* @Fix/Crud/Ajout_Offre.html.twig */
class __TwigTemplate_579ba9b05eeba6514b4e08207ff75c41947e2890a0a9c37946954b2b0cba0382 extends Twig_Template
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
        $__internal_2db3e4caa6696e54981878c3310825b3a166e65e583e484d7aec91b96c398186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db3e4caa6696e54981878c3310825b3a166e65e583e484d7aec91b96c398186->enter($__internal_2db3e4caa6696e54981878c3310825b3a166e65e583e484d7aec91b96c398186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Ajout_Offre.html.twig"));

        $__internal_446535a86fdeb21553af2672a070ac1174bfdf26a773c8a93ce7b6d08dca3df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446535a86fdeb21553af2672a070ac1174bfdf26a773c8a93ce7b6d08dca3df7->enter($__internal_446535a86fdeb21553af2672a070ac1174bfdf26a773c8a93ce7b6d08dca3df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Ajout_Offre.html.twig"));

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
        
        $__internal_2db3e4caa6696e54981878c3310825b3a166e65e583e484d7aec91b96c398186->leave($__internal_2db3e4caa6696e54981878c3310825b3a166e65e583e484d7aec91b96c398186_prof);

        
        $__internal_446535a86fdeb21553af2672a070ac1174bfdf26a773c8a93ce7b6d08dca3df7->leave($__internal_446535a86fdeb21553af2672a070ac1174bfdf26a773c8a93ce7b6d08dca3df7_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Crud/Ajout_Offre.html.twig";
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
</center>", "@Fix/Crud/Ajout_Offre.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Crud\\Ajout_Offre.html.twig");
    }
}
