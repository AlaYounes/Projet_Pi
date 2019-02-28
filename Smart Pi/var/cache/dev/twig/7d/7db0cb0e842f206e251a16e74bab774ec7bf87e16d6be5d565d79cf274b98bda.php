<?php

/* :categorie:show.html.twig */
class __TwigTemplate_c8f04af871641d5b2c6f87a96c8d7f368ab12e9ea4a0d387dfba12889cc4a6e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":categorie:show.html.twig", 1);
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
        $__internal_201239cab4347234278ffedb070dd88bb56bdac77bab621060f2cc6e5ee3beb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201239cab4347234278ffedb070dd88bb56bdac77bab621060f2cc6e5ee3beb0->enter($__internal_201239cab4347234278ffedb070dd88bb56bdac77bab621060f2cc6e5ee3beb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categorie:show.html.twig"));

        $__internal_047d0244aebe14ace4432c091bc32911bca9c7728883b28df9faac467373f00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047d0244aebe14ace4432c091bc32911bca9c7728883b28df9faac467373f00b->enter($__internal_047d0244aebe14ace4432c091bc32911bca9c7728883b28df9faac467373f00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categorie:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201239cab4347234278ffedb070dd88bb56bdac77bab621060f2cc6e5ee3beb0->leave($__internal_201239cab4347234278ffedb070dd88bb56bdac77bab621060f2cc6e5ee3beb0_prof);

        
        $__internal_047d0244aebe14ace4432c091bc32911bca9c7728883b28df9faac467373f00b->leave($__internal_047d0244aebe14ace4432c091bc32911bca9c7728883b28df9faac467373f00b_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_a903ebcd73b6a42d1e55f8ccc3b0993e67225d402bff04bd2caf7228671a67e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a903ebcd73b6a42d1e55f8ccc3b0993e67225d402bff04bd2caf7228671a67e0->enter($__internal_a903ebcd73b6a42d1e55f8ccc3b0993e67225d402bff04bd2caf7228671a67e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_bb61ab4069a0dc2893f060e4e67cd8ede1fcdef4e75da6e65bd5ade393e66d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb61ab4069a0dc2893f060e4e67cd8ede1fcdef4e75da6e65bd5ade393e66d5e->enter($__internal_bb61ab4069a0dc2893f060e4e67cd8ede1fcdef4e75da6e65bd5ade393e66d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Categorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["categorie"] ?? $this->getContext($context, "categorie")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["categorie"] ?? $this->getContext($context, "categorie")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_edit", array("id" => $this->getAttribute(($context["categorie"] ?? $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bb61ab4069a0dc2893f060e4e67cd8ede1fcdef4e75da6e65bd5ade393e66d5e->leave($__internal_bb61ab4069a0dc2893f060e4e67cd8ede1fcdef4e75da6e65bd5ade393e66d5e_prof);

        
        $__internal_a903ebcd73b6a42d1e55f8ccc3b0993e67225d402bff04bd2caf7228671a67e0->leave($__internal_a903ebcd73b6a42d1e55f8ccc3b0993e67225d402bff04bd2caf7228671a67e0_prof);

    }

    public function getTemplateName()
    {
        return ":categorie:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Categorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ categorie.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ categorie.nom }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('categorie_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('categorie_edit', { 'id': categorie.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":categorie:show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/categorie/show.html.twig");
    }
}
