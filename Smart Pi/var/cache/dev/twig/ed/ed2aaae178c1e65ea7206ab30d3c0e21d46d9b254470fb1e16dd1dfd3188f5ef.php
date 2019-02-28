<?php

/* categorie/show.html.twig */
class __TwigTemplate_67b7fccd693242eb7033f914939c131bb77e228ebc3eae1580ce8299a631e342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/show.html.twig", 1);
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
        $__internal_eb52e2c7fa91c78bbfdd6fb1b69d4f2d018789bca8b2726ad2d852f5923c3e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb52e2c7fa91c78bbfdd6fb1b69d4f2d018789bca8b2726ad2d852f5923c3e8a->enter($__internal_eb52e2c7fa91c78bbfdd6fb1b69d4f2d018789bca8b2726ad2d852f5923c3e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $__internal_a80a75e20f3901320768a02bddf90b38a7c513c2e0a402e94c92be7fb8d263f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80a75e20f3901320768a02bddf90b38a7c513c2e0a402e94c92be7fb8d263f3->enter($__internal_a80a75e20f3901320768a02bddf90b38a7c513c2e0a402e94c92be7fb8d263f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb52e2c7fa91c78bbfdd6fb1b69d4f2d018789bca8b2726ad2d852f5923c3e8a->leave($__internal_eb52e2c7fa91c78bbfdd6fb1b69d4f2d018789bca8b2726ad2d852f5923c3e8a_prof);

        
        $__internal_a80a75e20f3901320768a02bddf90b38a7c513c2e0a402e94c92be7fb8d263f3->leave($__internal_a80a75e20f3901320768a02bddf90b38a7c513c2e0a402e94c92be7fb8d263f3_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_5831a9e36a5efce16617ebf6289aec5796f42310d1f43664388a9327978d3c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5831a9e36a5efce16617ebf6289aec5796f42310d1f43664388a9327978d3c8d->enter($__internal_5831a9e36a5efce16617ebf6289aec5796f42310d1f43664388a9327978d3c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_89bd97438573d5b419588f9eae27381c5a56c63125353ce5c31461b1cb8ab336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bd97438573d5b419588f9eae27381c5a56c63125353ce5c31461b1cb8ab336->enter($__internal_89bd97438573d5b419588f9eae27381c5a56c63125353ce5c31461b1cb8ab336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_89bd97438573d5b419588f9eae27381c5a56c63125353ce5c31461b1cb8ab336->leave($__internal_89bd97438573d5b419588f9eae27381c5a56c63125353ce5c31461b1cb8ab336_prof);

        
        $__internal_5831a9e36a5efce16617ebf6289aec5796f42310d1f43664388a9327978d3c8d->leave($__internal_5831a9e36a5efce16617ebf6289aec5796f42310d1f43664388a9327978d3c8d_prof);

    }

    public function getTemplateName()
    {
        return "categorie/show.html.twig";
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
", "categorie/show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\categorie\\show.html.twig");
    }
}
