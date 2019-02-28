<?php

/* :article/Search:Simple_Search01.html.twig */
class __TwigTemplate_f9f91cfc23f8e1b66361d8cfeb3f1f6e1c8d4dcc97b50ca610a61d0e4abfeaaf extends Twig_Template
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
        $__internal_2fb5ebab74de160bf8914b2098ce322345a55f65a6ad190ae394e2f98e8f0cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb5ebab74de160bf8914b2098ce322345a55f65a6ad190ae394e2f98e8f0cc2->enter($__internal_2fb5ebab74de160bf8914b2098ce322345a55f65a6ad190ae394e2f98e8f0cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article/Search:Simple_Search01.html.twig"));

        $__internal_66ab63f7d6cc9a4a724464e0e927f62e6f8d2621a264853729972d0e332da6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ab63f7d6cc9a4a724464e0e927f62e6f8d2621a264853729972d0e332da6fd->enter($__internal_66ab63f7d6cc9a4a724464e0e927f62e6f8d2621a264853729972d0e332da6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article/Search:Simple_Search01.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fb5ebab74de160bf8914b2098ce322345a55f65a6ad190ae394e2f98e8f0cc2->leave($__internal_2fb5ebab74de160bf8914b2098ce322345a55f65a6ad190ae394e2f98e8f0cc2_prof);

        
        $__internal_66ab63f7d6cc9a4a724464e0e927f62e6f8d2621a264853729972d0e332da6fd->leave($__internal_66ab63f7d6cc9a4a724464e0e927f62e6f8d2621a264853729972d0e332da6fd_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_4753aaa7f5c345eca637100a743fee0a2deb02a447ae8cc7d6101395b6d6a567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4753aaa7f5c345eca637100a743fee0a2deb02a447ae8cc7d6101395b6d6a567->enter($__internal_4753aaa7f5c345eca637100a743fee0a2deb02a447ae8cc7d6101395b6d6a567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_66457a3b2f9be18893ee5e88af86d103b29ff2c3cd7fa0452374af649213c2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66457a3b2f9be18893ee5e88af86d103b29ff2c3cd7fa0452374af649213c2c3->enter($__internal_66457a3b2f9be18893ee5e88af86d103b29ff2c3cd7fa0452374af649213c2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
";
        
        $__internal_66457a3b2f9be18893ee5e88af86d103b29ff2c3cd7fa0452374af649213c2c3->leave($__internal_66457a3b2f9be18893ee5e88af86d103b29ff2c3cd7fa0452374af649213c2c3_prof);

        
        $__internal_4753aaa7f5c345eca637100a743fee0a2deb02a447ae8cc7d6101395b6d6a567->leave($__internal_4753aaa7f5c345eca637100a743fee0a2deb02a447ae8cc7d6101395b6d6a567_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_01436c18afb378d9938a66e1d788389ce70791fb62de66293e88f090ed5d3d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01436c18afb378d9938a66e1d788389ce70791fb62de66293e88f090ed5d3d6e->enter($__internal_01436c18afb378d9938a66e1d788389ce70791fb62de66293e88f090ed5d3d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_87935412edbcf8ebc99c2b4e7a842fc37d47cf989563a40caf4261c4afe16101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87935412edbcf8ebc99c2b4e7a842fc37d47cf989563a40caf4261c4afe16101->enter($__internal_87935412edbcf8ebc99c2b4e7a842fc37d47cf989563a40caf4261c4afe16101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["articles"] ?? $this->getContext($context, "articles")));
        echo "

        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["article"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["article"], "dateEdition", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateEdition", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                ";
            // line 34
            echo "                <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute($context["article"], "image", array()))), "html", null, true);
            echo "\" height=\"200px\"
                             alt=\"image description\"></a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "categorie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul class=\"sidebar-menu\">
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"
                               class=\"kafe-btn kafe-btn-mint-small\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 45
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
        // line 52
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Create a new article</a>
        </li>
    </ul>

";
        
        $__internal_87935412edbcf8ebc99c2b4e7a842fc37d47cf989563a40caf4261c4afe16101->leave($__internal_87935412edbcf8ebc99c2b4e7a842fc37d47cf989563a40caf4261c4afe16101_prof);

        
        $__internal_01436c18afb378d9938a66e1d788389ce70791fb62de66293e88f090ed5d3d6e->leave($__internal_01436c18afb378d9938a66e1d788389ce70791fb62de66293e88f090ed5d3d6e_prof);

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
        return array (  179 => 57,  172 => 52,  159 => 45,  152 => 41,  145 => 37,  140 => 35,  135 => 34,  129 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  105 => 27,  102 => 26,  98 => 25,  93 => 23,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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

        {{ dump(articles) }}

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
