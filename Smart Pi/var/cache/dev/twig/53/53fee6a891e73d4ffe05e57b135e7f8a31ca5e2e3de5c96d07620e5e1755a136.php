<?php

/* article/Search/Simple_Search.html.twig */
class __TwigTemplate_0ce7e16422b599b01e0322ca2033b38c2e8fb1a87e8abd117e8ffdbc24f878a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/Search/Simple_Search.html.twig", 1);
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
        $__internal_326fea3d6b4f063b04cc8992e6e65d8a5cfe9378c652fc54b6187b5b1e200727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326fea3d6b4f063b04cc8992e6e65d8a5cfe9378c652fc54b6187b5b1e200727->enter($__internal_326fea3d6b4f063b04cc8992e6e65d8a5cfe9378c652fc54b6187b5b1e200727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/Search/Simple_Search.html.twig"));

        $__internal_c2db557b9891b29a841c5ebc2c4d2fe9e1ca9a179c8bb89bdcb9e8690b91184e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2db557b9891b29a841c5ebc2c4d2fe9e1ca9a179c8bb89bdcb9e8690b91184e->enter($__internal_c2db557b9891b29a841c5ebc2c4d2fe9e1ca9a179c8bb89bdcb9e8690b91184e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/Search/Simple_Search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326fea3d6b4f063b04cc8992e6e65d8a5cfe9378c652fc54b6187b5b1e200727->leave($__internal_326fea3d6b4f063b04cc8992e6e65d8a5cfe9378c652fc54b6187b5b1e200727_prof);

        
        $__internal_c2db557b9891b29a841c5ebc2c4d2fe9e1ca9a179c8bb89bdcb9e8690b91184e->leave($__internal_c2db557b9891b29a841c5ebc2c4d2fe9e1ca9a179c8bb89bdcb9e8690b91184e_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_23af7522871f361fe9f5a95994ae4f400189d3433e078933036850cf86677fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23af7522871f361fe9f5a95994ae4f400189d3433e078933036850cf86677fed->enter($__internal_23af7522871f361fe9f5a95994ae4f400189d3433e078933036850cf86677fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_53579e7d507927fff3f6859d27c3df0a70797b37418ecdef9c423b86b0b9d537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53579e7d507927fff3f6859d27c3df0a70797b37418ecdef9c423b86b0b9d537->enter($__internal_53579e7d507927fff3f6859d27c3df0a70797b37418ecdef9c423b86b0b9d537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
";
        
        $__internal_53579e7d507927fff3f6859d27c3df0a70797b37418ecdef9c423b86b0b9d537->leave($__internal_53579e7d507927fff3f6859d27c3df0a70797b37418ecdef9c423b86b0b9d537_prof);

        
        $__internal_23af7522871f361fe9f5a95994ae4f400189d3433e078933036850cf86677fed->leave($__internal_23af7522871f361fe9f5a95994ae4f400189d3433e078933036850cf86677fed_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_63485218449598ba04cee35e3863124bb8605cdad469451c6b5eb305e52657e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63485218449598ba04cee35e3863124bb8605cdad469451c6b5eb305e52657e3->enter($__internal_63485218449598ba04cee35e3863124bb8605cdad469451c6b5eb305e52657e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_8adca33e5cde2ef79de4906352546be1543e844353e854da659dbfacc9e5bd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adca33e5cde2ef79de4906352546be1543e844353e854da659dbfacc9e5bd2a->enter($__internal_8adca33e5cde2ef79de4906352546be1543e844353e854da659dbfacc9e5bd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        $context['_seq'] = twig_ensure_traversable(($context["articles01"] ?? $this->getContext($context, "articles01")));
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
        
        $__internal_8adca33e5cde2ef79de4906352546be1543e844353e854da659dbfacc9e5bd2a->leave($__internal_8adca33e5cde2ef79de4906352546be1543e844353e854da659dbfacc9e5bd2a_prof);

        
        $__internal_63485218449598ba04cee35e3863124bb8605cdad469451c6b5eb305e52657e3->leave($__internal_63485218449598ba04cee35e3863124bb8605cdad469451c6b5eb305e52657e3_prof);

    }

    public function getTemplateName()
    {
        return "article/Search/Simple_Search.html.twig";
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
        {% for article in articles01 %}
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
", "article/Search/Simple_Search.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\article\\Search\\Simple_Search.html.twig");
    }
}
