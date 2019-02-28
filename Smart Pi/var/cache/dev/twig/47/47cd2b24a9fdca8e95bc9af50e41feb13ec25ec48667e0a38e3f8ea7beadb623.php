<?php

/* @Fix/Crud/Afficher_Offre.html.twig */
class __TwigTemplate_3661e30b8cce8099939e2d2152bbc2b1d2f53e692745eb7bfbfacb704d81c5a1 extends Twig_Template
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
        $__internal_9a9c14ec74b1006e5e2b5bd30a02bb27fd0d6b351c3255c9e466c96b8fbfc55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9c14ec74b1006e5e2b5bd30a02bb27fd0d6b351c3255c9e466c96b8fbfc55b->enter($__internal_9a9c14ec74b1006e5e2b5bd30a02bb27fd0d6b351c3255c9e466c96b8fbfc55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Afficher_Offre.html.twig"));

        $__internal_4e936156c12b7f092bad352d378a4b69f264e5a8e4be90fd85a138f2525876bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e936156c12b7f092bad352d378a4b69f264e5a8e4be90fd85a138f2525876bc->enter($__internal_4e936156c12b7f092bad352d378a4b69f264e5a8e4be90fd85a138f2525876bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Afficher_Offre.html.twig"));

        // line 1
        echo "<center>

    <h2 >liste des Offre  </h2>
    <table border=\"1\">

        <thead><td><h4>id</h4></td><td><h4>description</h4></td><td><h4>service</h4></td></thead>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["a"] ?? $this->getContext($context, "a")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "            <tr> <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "service", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td><a href=";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Service_Supprimer", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo ">  Supprimer </a></td>
                <td><a href=";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Service_Modifier", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo ">  Modifier </a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    </table>

</center>";
        
        $__internal_9a9c14ec74b1006e5e2b5bd30a02bb27fd0d6b351c3255c9e466c96b8fbfc55b->leave($__internal_9a9c14ec74b1006e5e2b5bd30a02bb27fd0d6b351c3255c9e466c96b8fbfc55b_prof);

        
        $__internal_4e936156c12b7f092bad352d378a4b69f264e5a8e4be90fd85a138f2525876bc->leave($__internal_4e936156c12b7f092bad352d378a4b69f264e5a8e4be90fd85a138f2525876bc_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Crud/Afficher_Offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  37 => 8,  33 => 7,  25 => 1,);
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

    <h2 >liste des Offre  </h2>
    <table border=\"1\">

        <thead><td><h4>id</h4></td><td><h4>description</h4></td><td><h4>service</h4></td></thead>
        {% for i in a %}
            <tr> <td>{{ i.id }}</td>
                <td>{{ i.description }}</td>
                <td>{{ i.service.nom }}</td>
                <td><a href={{ path('Service_Supprimer', {'id': i.id}) }}>  Supprimer </a></td>
                <td><a href={{ path('Service_Modifier', {'id': i.id} ) }}>  Modifier </a></td>
            </tr>
        {% endfor %}

    </table>

</center>", "@Fix/Crud/Afficher_Offre.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Crud\\Afficher_Offre.html.twig");
    }
}
