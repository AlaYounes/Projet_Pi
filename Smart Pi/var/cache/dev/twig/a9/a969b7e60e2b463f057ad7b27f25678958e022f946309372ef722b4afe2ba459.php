<?php

/* article/show.html.twig */
class __TwigTemplate_ff7f4fbbf97167958001fcde3d8a1cdade8ad4b83b67b23492bf577ca7ddc6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->blocks = array(
            'stylesheat' => array($this, 'block_stylesheat'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96c6d0ddde9dc65545df32263639670c1fd3ca519570375d17f6dea8f3311b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c6d0ddde9dc65545df32263639670c1fd3ca519570375d17f6dea8f3311b50->enter($__internal_96c6d0ddde9dc65545df32263639670c1fd3ca519570375d17f6dea8f3311b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_d760e1575a7294832a9a7466c8ffe02f1b3e3a30aadd04a1dd9cc47a20e8afbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d760e1575a7294832a9a7466c8ffe02f1b3e3a30aadd04a1dd9cc47a20e8afbc->enter($__internal_d760e1575a7294832a9a7466c8ffe02f1b3e3a30aadd04a1dd9cc47a20e8afbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c6d0ddde9dc65545df32263639670c1fd3ca519570375d17f6dea8f3311b50->leave($__internal_96c6d0ddde9dc65545df32263639670c1fd3ca519570375d17f6dea8f3311b50_prof);

        
        $__internal_d760e1575a7294832a9a7466c8ffe02f1b3e3a30aadd04a1dd9cc47a20e8afbc->leave($__internal_d760e1575a7294832a9a7466c8ffe02f1b3e3a30aadd04a1dd9cc47a20e8afbc_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_6b9277ea4725146024450423f4d3a5e55d58e1a65f413377be0552c5ac932e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9277ea4725146024450423f4d3a5e55d58e1a65f413377be0552c5ac932e29->enter($__internal_6b9277ea4725146024450423f4d3a5e55d58e1a65f413377be0552c5ac932e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_5750b5328ca0231ecacb8d65cfd0a8bb593314dbd47c8b61e04bb3acb34c3c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5750b5328ca0231ecacb8d65cfd0a8bb593314dbd47c8b61e04bb3acb34c3c26->enter($__internal_5750b5328ca0231ecacb8d65cfd0a8bb593314dbd47c8b61e04bb3acb34c3c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
    ";
        
        $__internal_5750b5328ca0231ecacb8d65cfd0a8bb593314dbd47c8b61e04bb3acb34c3c26->leave($__internal_5750b5328ca0231ecacb8d65cfd0a8bb593314dbd47c8b61e04bb3acb34c3c26_prof);

        
        $__internal_6b9277ea4725146024450423f4d3a5e55d58e1a65f413377be0552c5ac932e29->leave($__internal_6b9277ea4725146024450423f4d3a5e55d58e1a65f413377be0552c5ac932e29_prof);

    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        $__internal_fb64a08f510f221439e9a93bc40d0ce71121b1e5dbba456b42b755dfdf761c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb64a08f510f221439e9a93bc40d0ce71121b1e5dbba456b42b755dfdf761c02->enter($__internal_fb64a08f510f221439e9a93bc40d0ce71121b1e5dbba456b42b755dfdf761c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_4dae475cbfffe6dd2fe54cc05a3a207ef6775d4fe582a26a8014b4b026546a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dae475cbfffe6dd2fe54cc05a3a207ef6775d4fe582a26a8014b4b026546a13->enter($__internal_4dae475cbfffe6dd2fe54cc05a3a207ef6775d4fe582a26a8014b4b026546a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 8
        echo "    <h1>Article</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titre</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Auteur</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "auteur", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Datecreation</th>
            <td>";
        // line 30
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th>Dateedition</th>
            <td>";
        // line 34
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "dateEdition", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "dateEdition", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>
                <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()))), "html", null, true);
        echo "\" height=\"200px\" alt=\"aaaaa\"> </a></td>
        </tr>
        <tr>
            <th>Categorie_name</th>
            <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "categorie", array()), "nom", array()), "html", null, true);
        echo " <h4>son id est</h4> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "categorie", array()), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <ul class=\"sidebar-menu\" data-widget=\"tree\">
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"kafe-btn kafe-btn-mint-small\">Edit</a>
        </li>
        <li>
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4dae475cbfffe6dd2fe54cc05a3a207ef6775d4fe582a26a8014b4b026546a13->leave($__internal_4dae475cbfffe6dd2fe54cc05a3a207ef6775d4fe582a26a8014b4b026546a13_prof);

        
        $__internal_fb64a08f510f221439e9a93bc40d0ce71121b1e5dbba456b42b755dfdf761c02->leave($__internal_fb64a08f510f221439e9a93bc40d0ce71121b1e5dbba456b42b755dfdf761c02_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  162 => 57,  156 => 54,  150 => 51,  138 => 44,  131 => 40,  127 => 39,  117 => 34,  108 => 30,  101 => 26,  94 => 22,  87 => 18,  80 => 14,  72 => 8,  63 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
{% block stylesheat %}
    {{ parent() }}
    {#<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">#}
{% endblock %}

{% block container %}
    <h1>Article</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ article.id }}</td>
        </tr>
        <tr>
            <th>Titre</th>
            <td>{{ article.titre }}</td>
        </tr>
        <tr>
            <th>Auteur</th>
            <td>{{ article.auteur }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ article.description }}</td>
        </tr>
        <tr>
            <th>Datecreation</th>
            <td>{% if article.dateCreation %}{{ article.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>
        </tr>
        <tr>
            <th>Dateedition</th>
            <td>{% if article.dateEdition %}{{ article.dateEdition|date('Y-m-d H:i:s') }}{% endif %}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>
                <a href=\"{{ path('blog_homepage', {'id': article.id}) }}\">
                    <img src=\"{{ asset('uploads/images/article/'~article.image ) }}\" height=\"200px\" alt=\"aaaaa\"> </a></td>
        </tr>
        <tr>
            <th>Categorie_name</th>
            <td>{{ article.categorie.nom }} <h4>son id est</h4> {{ article.categorie.id }}</td>
        </tr>
        </tbody>
    </table>

    <ul class=\"sidebar-menu\" data-widget=\"tree\">
        <li>
            <a href=\"{{ path('article_index') }}\" class=\"kafe-btn kafe-btn-mint-small\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('article_edit', { 'id': article.id }) }}\" class=\"kafe-btn kafe-btn-mint-small\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\article\\show.html.twig");
    }
}
