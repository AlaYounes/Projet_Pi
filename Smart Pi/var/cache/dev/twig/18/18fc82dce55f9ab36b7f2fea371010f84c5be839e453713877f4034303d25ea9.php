<?php

/* :article:index.html.twig */
class __TwigTemplate_13205920acc1a114dacce17c6866983cf21d5ee9ad832f7bbc4ef5ff9db15887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:index.html.twig", 1);
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
        $__internal_6613269099b4b4ad156b33f109bdf74e93d9358a82532505385444359adb0153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6613269099b4b4ad156b33f109bdf74e93d9358a82532505385444359adb0153->enter($__internal_6613269099b4b4ad156b33f109bdf74e93d9358a82532505385444359adb0153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:index.html.twig"));

        $__internal_d3eb47fb9e003f67c081c379c4f167524f170fa0946a0f42948047b5abfa2ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3eb47fb9e003f67c081c379c4f167524f170fa0946a0f42948047b5abfa2ddb->enter($__internal_d3eb47fb9e003f67c081c379c4f167524f170fa0946a0f42948047b5abfa2ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6613269099b4b4ad156b33f109bdf74e93d9358a82532505385444359adb0153->leave($__internal_6613269099b4b4ad156b33f109bdf74e93d9358a82532505385444359adb0153_prof);

        
        $__internal_d3eb47fb9e003f67c081c379c4f167524f170fa0946a0f42948047b5abfa2ddb->leave($__internal_d3eb47fb9e003f67c081c379c4f167524f170fa0946a0f42948047b5abfa2ddb_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_b626cfc96f7eff18ed79d5e3ade7da21ed9f3a96e1bdc8cf702a26bc207c6c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b626cfc96f7eff18ed79d5e3ade7da21ed9f3a96e1bdc8cf702a26bc207c6c1e->enter($__internal_b626cfc96f7eff18ed79d5e3ade7da21ed9f3a96e1bdc8cf702a26bc207c6c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_7b53cfafe8e9b5ee088613e5e2aa0856c350f832b85cd97d1507acedd8cfb3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b53cfafe8e9b5ee088613e5e2aa0856c350f832b85cd97d1507acedd8cfb3e5->enter($__internal_7b53cfafe8e9b5ee088613e5e2aa0856c350f832b85cd97d1507acedd8cfb3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
";
        
        $__internal_7b53cfafe8e9b5ee088613e5e2aa0856c350f832b85cd97d1507acedd8cfb3e5->leave($__internal_7b53cfafe8e9b5ee088613e5e2aa0856c350f832b85cd97d1507acedd8cfb3e5_prof);

        
        $__internal_b626cfc96f7eff18ed79d5e3ade7da21ed9f3a96e1bdc8cf702a26bc207c6c1e->leave($__internal_b626cfc96f7eff18ed79d5e3ade7da21ed9f3a96e1bdc8cf702a26bc207c6c1e_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_73ff1ef1f500cf03a20fcfc9066e042c2b7ff914e4efdc9bf18a644fff2465f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ff1ef1f500cf03a20fcfc9066e042c2b7ff914e4efdc9bf18a644fff2465f1->enter($__internal_73ff1ef1f500cf03a20fcfc9066e042c2b7ff914e4efdc9bf18a644fff2465f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_e554ebc9f9c7d42ad7bba68c252c1921931d39710c35aa20d1a7770d09f2e5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e554ebc9f9c7d42ad7bba68c252c1921931d39710c35aa20d1a7770d09f2e5c7->enter($__internal_e554ebc9f9c7d42ad7bba68c252c1921931d39710c35aa20d1a7770d09f2e5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "
    ";
        // line 13
        echo "    <div class=\"form-group\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Rechercher Par Titre"));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
    </div>

    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <div class=\"blog-categories\">
        <div class=\"container\">
            <label for=\"drop\" class=\"drop\"></label>
            <ul class=\"nav navbar-nav\">
                <li class=\"cat-item current-cat\">
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_Order");
        echo "\">Latest</a>
                </li>
                <li class=\"cat-item\">
                    ";
        // line 29
        echo "                    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_search_Politique");
        echo "\">Politique</a>
                    ";
        // line 31
        echo "
                </li>
                <li class=\"cat-item\">
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_search_Politique");
        echo "\">Nature</a>
                </li>
                <li class=\"cat-item\">
                    <a href=\"#\">Startups</a>
                </li>
                <li class=\"cat-item\">
                    <a href=\"#\">Marketing</a>
                </li>
                <li class=\"cat-item\">
                    <a href=\"#\">Press</a>
                </li>
                <li class=\"cat-item\">
                    <a href=\"#\">Updates</a>
                </li>
            </ul><!-- /ul.cat -->

        </div><!-- /.container -->
    </div>
    ";
        // line 53
        echo "    <h1><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Articles list</a></h1>

    ";
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        // line 58
        echo "    ";
        // line 59
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 76
            echo "            <tr>
                <td><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            if ($this->getAttribute($context["article"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 82
            if ($this->getAttribute($context["article"], "dateEdition", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateEdition", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                ";
            // line 84
            echo "                <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute($context["article"], "image", array()))), "html", null, true);
            echo "\" height=\"200px\"
                             alt=\"image description\"></a></td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "categorie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul class=\"sidebar-menu\">
                        <li>
                            <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"
                               class=\"kafe-btn kafe-btn-mint-small\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 95
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
        // line 102
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Create a new article</a>
        </li>
    </ul>

";
        
        $__internal_e554ebc9f9c7d42ad7bba68c252c1921931d39710c35aa20d1a7770d09f2e5c7->leave($__internal_e554ebc9f9c7d42ad7bba68c252c1921931d39710c35aa20d1a7770d09f2e5c7_prof);

        
        $__internal_73ff1ef1f500cf03a20fcfc9066e042c2b7ff914e4efdc9bf18a644fff2465f1->leave($__internal_73ff1ef1f500cf03a20fcfc9066e042c2b7ff914e4efdc9bf18a644fff2465f1_prof);

    }

    public function getTemplateName()
    {
        return ":article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 107,  252 => 102,  239 => 95,  232 => 91,  225 => 87,  220 => 85,  215 => 84,  209 => 82,  203 => 81,  199 => 80,  195 => 79,  191 => 78,  185 => 77,  182 => 76,  178 => 75,  160 => 59,  158 => 58,  156 => 57,  154 => 56,  148 => 53,  127 => 34,  122 => 31,  117 => 29,  111 => 25,  102 => 19,  96 => 16,  92 => 15,  88 => 14,  85 => 13,  82 => 11,  80 => 10,  78 => 9,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
    {{ form_start(form,{'attr':{'novalidate':'novalidate' }}) }}

    {#<div class=\"form-group\">#}
    {#{{ form_row(form.titre,{'attr':{'class':'form-control'}}) }}#}
    {#</div>#}

    {#Test du modification du Formulaire#}
    <div class=\"form-group\">
        {{ form_label(form.titre,'Rechercher Par Titre') }}
        {{ form_widget(form.titre,{'attr':{'class':'form-control'}}) }}
        {{ form_errors(form.titre) }}
    </div>

    {{ form_end(form) }}
    <div class=\"blog-categories\">
        <div class=\"container\">
            <label for=\"drop\" class=\"drop\"></label>
            <ul class=\"nav navbar-nav\">
                <li class=\"cat-item current-cat\">
                    <a href=\"{{ path('article_Order') }}\">Latest</a>
                </li>
                <li class=\"cat-item\">
                    {#{% for entity in articles %}#}
                    <a href=\"{{ path('article_search_Politique')}}\">Politique</a>
                    {#{% endfor %}#}

                </li>
                <li class=\"cat-item\">
                    <a href=\"{{ path('article_search_Politique')}}\">Nature</a>
                </li>
                <li class=\"cat-item\">
                    <a href=\"#\">Startups</a>
                </li>
                <li class=\"cat-item\">
                    <a href=\"#\">Marketing</a>
                </li>
                <li class=\"cat-item\">
                    <a href=\"#\">Press</a>
                </li>
                <li class=\"cat-item\">
                    <a href=\"#\">Updates</a>
                </li>
            </ul><!-- /ul.cat -->

        </div><!-- /.container -->
    </div>
    {#method=\"post\" id=\"addform\" action=\"{{ path('article_rechercher', { 'auteur': articles.test }) }}\"#}
    <h1><a href=\"{{ path('article_index') }}\">Articles list</a></h1>

    {#<form class=\"navbar-form navbar-right\" method=\"post\" action=\"{{ path('article_search',{'motcle': articles.nom}) }}\">#}
    {#<input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"motcle\">#}
    {#</form>#}
    {#{{ form(form_search) }}#}

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
", ":article:index.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/article/index.html.twig");
    }
}
