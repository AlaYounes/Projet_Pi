<?php

/* @Fix/Crud/Afficher_Service.html.twig */
class __TwigTemplate_968db1dbbb136ba4edfcab7c51e79a02ba5feea8d32748435a4762df1cd00a23 extends Twig_Template
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
        $__internal_af19b2e6c5dc2d0fcd49ce5f9c8d277836c12c48ae0d830b6692d77977371011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af19b2e6c5dc2d0fcd49ce5f9c8d277836c12c48ae0d830b6692d77977371011->enter($__internal_af19b2e6c5dc2d0fcd49ce5f9c8d277836c12c48ae0d830b6692d77977371011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Afficher_Service.html.twig"));

        $__internal_947bfbf7c9566a06fcd79d7d00a4b44508796b948576439916be69724cb1da46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947bfbf7c9566a06fcd79d7d00a4b44508796b948576439916be69724cb1da46->enter($__internal_947bfbf7c9566a06fcd79d7d00a4b44508796b948576439916be69724cb1da46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Crud/Afficher_Service.html.twig"));

        // line 1
        echo "<center>

    <h2 >liste des services  </h2>
    <table border=\"1\">

        <thead><td><h4>id</h4></td><td><h4>nom</h4></td><td><h4>description</h4></td></thead>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
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
        
        $__internal_af19b2e6c5dc2d0fcd49ce5f9c8d277836c12c48ae0d830b6692d77977371011->leave($__internal_af19b2e6c5dc2d0fcd49ce5f9c8d277836c12c48ae0d830b6692d77977371011_prof);

        
        $__internal_947bfbf7c9566a06fcd79d7d00a4b44508796b948576439916be69724cb1da46->leave($__internal_947bfbf7c9566a06fcd79d7d00a4b44508796b948576439916be69724cb1da46_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Crud/Afficher_Service.html.twig";
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

    <h2 >liste des services  </h2>
    <table border=\"1\">

        <thead><td><h4>id</h4></td><td><h4>nom</h4></td><td><h4>description</h4></td></thead>
        {% for i in a %}
            <tr> <td>{{ i.id }}</td>
                <td>{{ i.nom }}</td>
                <td>{{ i.description }}</td>
                <td><a href={{ path('Service_Supprimer', {'id': i.id}) }}>  Supprimer </a></td>
                <td><a href={{ path('Service_Modifier', {'id': i.id} ) }}>  Modifier </a></td>
            </tr>
        {% endfor %}

    </table>

</center>", "@Fix/Crud/Afficher_Service.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Crud\\Afficher_Service.html.twig");
    }
}
