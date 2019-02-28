<?php

/* categorie/new.html.twig */
class __TwigTemplate_22c7bd52922a55b014ec90c4b26a1c81af6c7d2f047f2d2993d89d33ac524a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/new.html.twig", 1);
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
        $__internal_4bfaed68cde701181d5ebcc8344165cd6a64e3c3f444f6b4858033aae61118a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfaed68cde701181d5ebcc8344165cd6a64e3c3f444f6b4858033aae61118a2->enter($__internal_4bfaed68cde701181d5ebcc8344165cd6a64e3c3f444f6b4858033aae61118a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/new.html.twig"));

        $__internal_8f00fbe47b1aab5682c14995069859f6b89d5bdc02243cbdc113ea8d7b37df51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f00fbe47b1aab5682c14995069859f6b89d5bdc02243cbdc113ea8d7b37df51->enter($__internal_8f00fbe47b1aab5682c14995069859f6b89d5bdc02243cbdc113ea8d7b37df51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bfaed68cde701181d5ebcc8344165cd6a64e3c3f444f6b4858033aae61118a2->leave($__internal_4bfaed68cde701181d5ebcc8344165cd6a64e3c3f444f6b4858033aae61118a2_prof);

        
        $__internal_8f00fbe47b1aab5682c14995069859f6b89d5bdc02243cbdc113ea8d7b37df51->leave($__internal_8f00fbe47b1aab5682c14995069859f6b89d5bdc02243cbdc113ea8d7b37df51_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_711b67e1aa179d3bde370757317179e41afac811f126043df847608e70b6e9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711b67e1aa179d3bde370757317179e41afac811f126043df847608e70b6e9a5->enter($__internal_711b67e1aa179d3bde370757317179e41afac811f126043df847608e70b6e9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_1943a90430cecbd70167a4fd51182d7369afd218c4463593805813971d72d533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1943a90430cecbd70167a4fd51182d7369afd218c4463593805813971d72d533->enter($__internal_1943a90430cecbd70167a4fd51182d7369afd218c4463593805813971d72d533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Categorie creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1943a90430cecbd70167a4fd51182d7369afd218c4463593805813971d72d533->leave($__internal_1943a90430cecbd70167a4fd51182d7369afd218c4463593805813971d72d533_prof);

        
        $__internal_711b67e1aa179d3bde370757317179e41afac811f126043df847608e70b6e9a5->leave($__internal_711b67e1aa179d3bde370757317179e41afac811f126043df847608e70b6e9a5_prof);

    }

    public function getTemplateName()
    {
        return "categorie/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Categorie creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('categorie_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "categorie/new.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\categorie\\new.html.twig");
    }
}
