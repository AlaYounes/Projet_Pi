<?php

/* :article:show.html.twig */
class __TwigTemplate_58ee68c520b886fc34d32a44456c886baf8d382fa4c54908289d43efc29357a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:show.html.twig", 1);
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
        $__internal_d936d87dcf94923dc5a04f71272d543cb5ebb760725050545a6735fb9305d9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d936d87dcf94923dc5a04f71272d543cb5ebb760725050545a6735fb9305d9eb->enter($__internal_d936d87dcf94923dc5a04f71272d543cb5ebb760725050545a6735fb9305d9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $__internal_1fccbbf8cc71ca679fb81216a64d3843a2d024b641b8665958f01d018c320ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fccbbf8cc71ca679fb81216a64d3843a2d024b641b8665958f01d018c320ceb->enter($__internal_1fccbbf8cc71ca679fb81216a64d3843a2d024b641b8665958f01d018c320ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d936d87dcf94923dc5a04f71272d543cb5ebb760725050545a6735fb9305d9eb->leave($__internal_d936d87dcf94923dc5a04f71272d543cb5ebb760725050545a6735fb9305d9eb_prof);

        
        $__internal_1fccbbf8cc71ca679fb81216a64d3843a2d024b641b8665958f01d018c320ceb->leave($__internal_1fccbbf8cc71ca679fb81216a64d3843a2d024b641b8665958f01d018c320ceb_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_9b078243b8e191ae9b6ba327172bdab36d3e124dc6aefe7bb8076920fc81e7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b078243b8e191ae9b6ba327172bdab36d3e124dc6aefe7bb8076920fc81e7d8->enter($__internal_9b078243b8e191ae9b6ba327172bdab36d3e124dc6aefe7bb8076920fc81e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_76dbbcd68171ee5a5b8532b88fb04366bffd65245f8857151908330f3c8c4285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76dbbcd68171ee5a5b8532b88fb04366bffd65245f8857151908330f3c8c4285->enter($__internal_76dbbcd68171ee5a5b8532b88fb04366bffd65245f8857151908330f3c8c4285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
    ";
        
        $__internal_76dbbcd68171ee5a5b8532b88fb04366bffd65245f8857151908330f3c8c4285->leave($__internal_76dbbcd68171ee5a5b8532b88fb04366bffd65245f8857151908330f3c8c4285_prof);

        
        $__internal_9b078243b8e191ae9b6ba327172bdab36d3e124dc6aefe7bb8076920fc81e7d8->leave($__internal_9b078243b8e191ae9b6ba327172bdab36d3e124dc6aefe7bb8076920fc81e7d8_prof);

    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        $__internal_8593e6d3a0eb7bc77570b30c5494298785d288c9e69d44a865e198a848efe7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8593e6d3a0eb7bc77570b30c5494298785d288c9e69d44a865e198a848efe7d7->enter($__internal_8593e6d3a0eb7bc77570b30c5494298785d288c9e69d44a865e198a848efe7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_ca3d4c77ec91c5bf2000e922789428f35f98298b4fe50d813e760dac69b6ee40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3d4c77ec91c5bf2000e922789428f35f98298b4fe50d813e760dac69b6ee40->enter($__internal_ca3d4c77ec91c5bf2000e922789428f35f98298b4fe50d813e760dac69b6ee40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_ca3d4c77ec91c5bf2000e922789428f35f98298b4fe50d813e760dac69b6ee40->leave($__internal_ca3d4c77ec91c5bf2000e922789428f35f98298b4fe50d813e760dac69b6ee40_prof);

        
        $__internal_8593e6d3a0eb7bc77570b30c5494298785d288c9e69d44a865e198a848efe7d7->leave($__internal_8593e6d3a0eb7bc77570b30c5494298785d288c9e69d44a865e198a848efe7d7_prof);

    }

    public function getTemplateName()
    {
        return ":article:show.html.twig";
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
", ":article:show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/article/show.html.twig");
    }
}
