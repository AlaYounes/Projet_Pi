<?php

/* article/show.html.twig */
class __TwigTemplate_b28cd876083672cd2f517aaf56ffa816cfc102a1075fb0838c7bba5901826009 extends Twig_Template
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
        $__internal_d48529a884cf73cabd0eab373c3c6f83509d5784658e05bb8323d87f48c0f179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48529a884cf73cabd0eab373c3c6f83509d5784658e05bb8323d87f48c0f179->enter($__internal_d48529a884cf73cabd0eab373c3c6f83509d5784658e05bb8323d87f48c0f179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_3eb78ac820f357edc9c8ec34ae65cc2a18347d44b5827aedfa4a1c7cf4859410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb78ac820f357edc9c8ec34ae65cc2a18347d44b5827aedfa4a1c7cf4859410->enter($__internal_3eb78ac820f357edc9c8ec34ae65cc2a18347d44b5827aedfa4a1c7cf4859410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48529a884cf73cabd0eab373c3c6f83509d5784658e05bb8323d87f48c0f179->leave($__internal_d48529a884cf73cabd0eab373c3c6f83509d5784658e05bb8323d87f48c0f179_prof);

        
        $__internal_3eb78ac820f357edc9c8ec34ae65cc2a18347d44b5827aedfa4a1c7cf4859410->leave($__internal_3eb78ac820f357edc9c8ec34ae65cc2a18347d44b5827aedfa4a1c7cf4859410_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_d9643d42486d3b6ca70584b16a535ea58bdca953f50c7e26edd8c1ab36680995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9643d42486d3b6ca70584b16a535ea58bdca953f50c7e26edd8c1ab36680995->enter($__internal_d9643d42486d3b6ca70584b16a535ea58bdca953f50c7e26edd8c1ab36680995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_d8a7452bfacb44ddfcef5e8d782148346cd61d6f71c3c53d889c7b8b2db1158e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a7452bfacb44ddfcef5e8d782148346cd61d6f71c3c53d889c7b8b2db1158e->enter($__internal_d8a7452bfacb44ddfcef5e8d782148346cd61d6f71c3c53d889c7b8b2db1158e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
    ";
        
        $__internal_d8a7452bfacb44ddfcef5e8d782148346cd61d6f71c3c53d889c7b8b2db1158e->leave($__internal_d8a7452bfacb44ddfcef5e8d782148346cd61d6f71c3c53d889c7b8b2db1158e_prof);

        
        $__internal_d9643d42486d3b6ca70584b16a535ea58bdca953f50c7e26edd8c1ab36680995->leave($__internal_d9643d42486d3b6ca70584b16a535ea58bdca953f50c7e26edd8c1ab36680995_prof);

    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        $__internal_cbdb709caff8c05fbe5d0c9a216037cf1ec00ab46d8b61f713e01cdc3f7f5c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdb709caff8c05fbe5d0c9a216037cf1ec00ab46d8b61f713e01cdc3f7f5c79->enter($__internal_cbdb709caff8c05fbe5d0c9a216037cf1ec00ab46d8b61f713e01cdc3f7f5c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_181b98ce77f65cc5a07f37e8460388824d1cd20d18db98df398a889157b3e994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181b98ce77f65cc5a07f37e8460388824d1cd20d18db98df398a889157b3e994->enter($__internal_181b98ce77f65cc5a07f37e8460388824d1cd20d18db98df398a889157b3e994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 8
        echo "    <h1>Article <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</a></h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
        ";
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "        <tr>
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
        echo "\" height=\"200px\" alt=\"aaaaa\"> </a>
            </td>
        </tr>
        <tr>
            <th>Categorie_name</th>
            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "categorie", array()), "nom", array()), "html", null, true);
        echo " <h4>son id est</h4> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "categorie", array()), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
    <section class=\"form-group\">
        <div>
            <ul class=\"sidebar\">
                <li>

                    <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">
                        <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Back to the list\"></a>
                </li>

                <li>
                    <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">
                        <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Edit\"></a>
                </li>

                <li>
                    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    ";
        // line 66
        echo "                    <input type=\"submit\" value=\"Delete\" class=\"btn btn-block btn-danger\">
                    ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </li>
            </ul>
        </div>
    </section>

";
        
        $__internal_181b98ce77f65cc5a07f37e8460388824d1cd20d18db98df398a889157b3e994->leave($__internal_181b98ce77f65cc5a07f37e8460388824d1cd20d18db98df398a889157b3e994_prof);

        
        $__internal_cbdb709caff8c05fbe5d0c9a216037cf1ec00ab46d8b61f713e01cdc3f7f5c79->leave($__internal_cbdb709caff8c05fbe5d0c9a216037cf1ec00ab46d8b61f713e01cdc3f7f5c79_prof);

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
        return array (  181 => 67,  178 => 66,  174 => 64,  166 => 59,  158 => 54,  144 => 45,  136 => 40,  132 => 39,  122 => 34,  113 => 30,  106 => 26,  99 => 22,  92 => 18,  88 => 16,  86 => 15,  84 => 14,  82 => 13,  72 => 8,  63 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
    <h1>Article <a href=\"{{ path('blog_homepage', {'id': article.id}) }}\"> {{ article.titre }}</a></h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
        {#<tr>#}
        {#<th>Id</th>#}
        {#<td>{{ article.id }}</td>#}
        {#</tr>#}
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
                    <img src=\"{{ asset('uploads/images/article/'~article.image ) }}\" height=\"200px\" alt=\"aaaaa\"> </a>
            </td>
        </tr>
        <tr>
            <th>Categorie_name</th>
            <td>{{ article.categorie.nom }} <h4>son id est</h4> {{ article.categorie.id }}</td>
        </tr>
        </tbody>
    </table>
    <section class=\"form-group\">
        <div>
            <ul class=\"sidebar\">
                <li>

                    <a href=\"{{ path('article_index') }}\">
                        <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Back to the list\"></a>
                </li>

                <li>
                    <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">
                        <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Edit\"></a>
                </li>

                <li>
                    {{ form_start(delete_form) }}
                    {#{{ form_widget(delete_form,{'attr': {'class': 'field validate-input'}}) }}#}
                    <input type=\"submit\" value=\"Delete\" class=\"btn btn-block btn-danger\">
                    {{ form_end(delete_form) }}
                </li>
            </ul>
        </div>
    </section>

{% endblock %}
", "article/show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\article\\show.html.twig");
    }
}
