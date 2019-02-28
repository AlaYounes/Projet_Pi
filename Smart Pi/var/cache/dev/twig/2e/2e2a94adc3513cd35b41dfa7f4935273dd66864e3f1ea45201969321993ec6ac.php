<?php

/* :article/Search:Simple_Search01.html.twig */
class __TwigTemplate_e79e567ab168d8cfe6a3382fff0ea5394f7dcee8d5d99109cc4df40758bce386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article/Search:Simple_Search01.html.twig", 1);
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
        $__internal_17a2c8bc76b3b646555e653021c1715b23316553b3f471919f4eedfff69a2b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a2c8bc76b3b646555e653021c1715b23316553b3f471919f4eedfff69a2b28->enter($__internal_17a2c8bc76b3b646555e653021c1715b23316553b3f471919f4eedfff69a2b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article/Search:Simple_Search01.html.twig"));

        $__internal_58f0b67a7209d9f5c3f54d2d3f9f5a8a16d806158c11a3f11a39c5c5669ab895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f0b67a7209d9f5c3f54d2d3f9f5a8a16d806158c11a3f11a39c5c5669ab895->enter($__internal_58f0b67a7209d9f5c3f54d2d3f9f5a8a16d806158c11a3f11a39c5c5669ab895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article/Search:Simple_Search01.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a2c8bc76b3b646555e653021c1715b23316553b3f471919f4eedfff69a2b28->leave($__internal_17a2c8bc76b3b646555e653021c1715b23316553b3f471919f4eedfff69a2b28_prof);

        
        $__internal_58f0b67a7209d9f5c3f54d2d3f9f5a8a16d806158c11a3f11a39c5c5669ab895->leave($__internal_58f0b67a7209d9f5c3f54d2d3f9f5a8a16d806158c11a3f11a39c5c5669ab895_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_a61b6ea56909340d728c67a633a132d5e80a656f22e6daab457fd9e4f9a6a6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61b6ea56909340d728c67a633a132d5e80a656f22e6daab457fd9e4f9a6a6c6->enter($__internal_a61b6ea56909340d728c67a633a132d5e80a656f22e6daab457fd9e4f9a6a6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_47cc3854973437f940612dcea25d2e8f6c85859591c643f491ebaa6b4b773774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cc3854973437f940612dcea25d2e8f6c85859591c643f491ebaa6b4b773774->enter($__internal_47cc3854973437f940612dcea25d2e8f6c85859591c643f491ebaa6b4b773774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
";
        
        $__internal_47cc3854973437f940612dcea25d2e8f6c85859591c643f491ebaa6b4b773774->leave($__internal_47cc3854973437f940612dcea25d2e8f6c85859591c643f491ebaa6b4b773774_prof);

        
        $__internal_a61b6ea56909340d728c67a633a132d5e80a656f22e6daab457fd9e4f9a6a6c6->leave($__internal_a61b6ea56909340d728c67a633a132d5e80a656f22e6daab457fd9e4f9a6a6c6_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_232c40dc6bf116b2e02fce1728b44176e4da5c7efaf0d55a10d66b23d7f1c002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232c40dc6bf116b2e02fce1728b44176e4da5c7efaf0d55a10d66b23d7f1c002->enter($__internal_232c40dc6bf116b2e02fce1728b44176e4da5c7efaf0d55a10d66b23d7f1c002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_3f65a7c329b62e7b1fac3541f7548fa8601141c7d7360803a0cf12065834d657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f65a7c329b62e7b1fac3541f7548fa8601141c7d7360803a0cf12065834d657->enter($__internal_3f65a7c329b62e7b1fac3541f7548fa8601141c7d7360803a0cf12065834d657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    <table class=\"table table-bordered table-hover\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Description</th>
            <th>DateCreation</th>
            <th>DateEdition</th>
            <th>Image</th>
            <th>Catégorie_Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["article"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["article"], "dateEdition", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateEdition", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                ";
            // line 31
            echo "                <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute($context["article"], "image", array()))), "html", null, true);
            echo "\" height=\"200px\"
                             alt=\"image description\"></a></td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "categorie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul class=\"sidebar-menu\">
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"
                               class=\"kafe-btn kafe-btn-mint-small\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo " \"
                               class=\"kafe-btn kafe-btn-mint-small\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Create a new article</a>
        </li>
    </ul>

";
        
        $__internal_3f65a7c329b62e7b1fac3541f7548fa8601141c7d7360803a0cf12065834d657->leave($__internal_3f65a7c329b62e7b1fac3541f7548fa8601141c7d7360803a0cf12065834d657_prof);

        
        $__internal_232c40dc6bf116b2e02fce1728b44176e4da5c7efaf0d55a10d66b23d7f1c002->leave($__internal_232c40dc6bf116b2e02fce1728b44176e4da5c7efaf0d55a10d66b23d7f1c002_prof);

    }

    public function getTemplateName()
    {
        return ":article/Search:Simple_Search01.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 54,  166 => 49,  153 => 42,  146 => 38,  139 => 34,  134 => 32,  129 => 31,  123 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  99 => 24,  96 => 23,  92 => 22,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
{% endblock %}
{% block container %}
    {{ form(form) }}
    <table class=\"table table-bordered table-hover\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Description</th>
            <th>DateCreation</th>
            <th>DateEdition</th>
            <th>Image</th>
            <th>Catégorie_Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td><a href=\"{{ path('article_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                <td>{{ article.titre }}</td>
                <td>{{ article.auteur }}</td>
                <td>{{ article.description }}</td>
                <td>{% if article.dateCreation %}{{ article.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if article.dateEdition %}{{ article.dateEdition|date('Y-m-d H:i:s') }}{% endif %}</td>
                {#Rendre le lien dynamique en cliquant sur l'image#}
                <td><a href=\"{{ path('blog_homepage', {'id': article.id}) }}\">
                        <img src=\"{{ asset('uploads/images/article/'~article.image ) }}\" height=\"200px\"
                             alt=\"image description\"></a></td>
                <td>{{ article.categorie.nom }}</td>
                <td>
                    <ul class=\"sidebar-menu\">
                        <li>
                            <a href=\"{{ path('article_show', { 'id': article.id }) }}\"
                               class=\"kafe-btn kafe-btn-mint-small\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('article_edit', { 'id': article.id }) }} \"
                               class=\"kafe-btn kafe-btn-mint-small\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('article_new') }}\">Create a new article</a>
        </li>
    </ul>

{% endblock %}
", ":article/Search:Simple_Search01.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/article/Search/Simple_Search01.html.twig");
    }
}
