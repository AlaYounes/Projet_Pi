<?php

/* BlogBundle:Blog:afficher_Par_Auteur_blog.html.twig */
class __TwigTemplate_4837f6b0a3048b49b49ba98928478f3854f905daa020ce891d5f522665bf04b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Blog:afficher_Par_Auteur_blog.html.twig", 1);
        $this->blocks = array(
            'stylesheat' => array($this, 'block_stylesheat'),
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d1a9bedfd3b00d3faf821a1ffa89c09331fb5e2129ca31ac8bead8cd8fc7780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1a9bedfd3b00d3faf821a1ffa89c09331fb5e2129ca31ac8bead8cd8fc7780->enter($__internal_4d1a9bedfd3b00d3faf821a1ffa89c09331fb5e2129ca31ac8bead8cd8fc7780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:afficher_Par_Auteur_blog.html.twig"));

        $__internal_9c76d6d45e6de6bb897c6fceeb5f5dc5a77d65ebceb3fd8e4bc81d98e5d2652b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c76d6d45e6de6bb897c6fceeb5f5dc5a77d65ebceb3fd8e4bc81d98e5d2652b->enter($__internal_9c76d6d45e6de6bb897c6fceeb5f5dc5a77d65ebceb3fd8e4bc81d98e5d2652b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:afficher_Par_Auteur_blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d1a9bedfd3b00d3faf821a1ffa89c09331fb5e2129ca31ac8bead8cd8fc7780->leave($__internal_4d1a9bedfd3b00d3faf821a1ffa89c09331fb5e2129ca31ac8bead8cd8fc7780_prof);

        
        $__internal_9c76d6d45e6de6bb897c6fceeb5f5dc5a77d65ebceb3fd8e4bc81d98e5d2652b->leave($__internal_9c76d6d45e6de6bb897c6fceeb5f5dc5a77d65ebceb3fd8e4bc81d98e5d2652b_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_284c1011742656860c3bd884dfdb684a2284bd62c5faed2db946168a8c1e7a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284c1011742656860c3bd884dfdb684a2284bd62c5faed2db946168a8c1e7a91->enter($__internal_284c1011742656860c3bd884dfdb684a2284bd62c5faed2db946168a8c1e7a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_eb504d2249db6b2918382c4dafc877905939ffe4b7fddfc990add58d2b4b1159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb504d2249db6b2918382c4dafc877905939ffe4b7fddfc990add58d2b4b1159->enter($__internal_eb504d2249db6b2918382c4dafc877905939ffe4b7fddfc990add58d2b4b1159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blogcategories.html"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

";
        
        $__internal_eb504d2249db6b2918382c4dafc877905939ffe4b7fddfc990add58d2b4b1159->leave($__internal_eb504d2249db6b2918382c4dafc877905939ffe4b7fddfc990add58d2b4b1159_prof);

        
        $__internal_284c1011742656860c3bd884dfdb684a2284bd62c5faed2db946168a8c1e7a91->leave($__internal_284c1011742656860c3bd884dfdb684a2284bd62c5faed2db946168a8c1e7a91_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_64b0f5b649e12686ec004c90748c9a2087d87a8f7d20c21475d13f8423afc64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b0f5b649e12686ec004c90748c9a2087d87a8f7d20c21475d13f8423afc64a->enter($__internal_64b0f5b649e12686ec004c90748c9a2087d87a8f7d20c21475d13f8423afc64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_adb483367037d616a23245911c613354689207f907d49bd21f26a97a2c1455c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb483367037d616a23245911c613354689207f907d49bd21f26a97a2c1455c3->enter($__internal_adb483367037d616a23245911c613354689207f907d49bd21f26a97a2c1455c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BlogBundle:Blog:afficherBlog";
        
        $__internal_adb483367037d616a23245911c613354689207f907d49bd21f26a97a2c1455c3->leave($__internal_adb483367037d616a23245911c613354689207f907d49bd21f26a97a2c1455c3_prof);

        
        $__internal_64b0f5b649e12686ec004c90748c9a2087d87a8f7d20c21475d13f8423afc64a->leave($__internal_64b0f5b649e12686ec004c90748c9a2087d87a8f7d20c21475d13f8423afc64a_prof);

    }

    // line 10
    public function block_container($context, array $blocks = array())
    {
        $__internal_ca4bb49d7f42714043046890fc78b1bef1a406fb40bbabac74829042e335f446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4bb49d7f42714043046890fc78b1bef1a406fb40bbabac74829042e335f446->enter($__internal_ca4bb49d7f42714043046890fc78b1bef1a406fb40bbabac74829042e335f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_dc1fb1ec910783a817f33167092e28bcf290103f1b1d4b2961401aea56d11536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1fb1ec910783a817f33167092e28bcf290103f1b1d4b2961401aea56d11536->enter($__internal_dc1fb1ec910783a817f33167092e28bcf290103f1b1d4b2961401aea56d11536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 11
        echo "
    ";
        // line 13
        echo "    <ul class=\"nav navbar-nav\">
        ";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 16
            echo "            <li class=\"header\">

                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_categories_homePage", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a>
                ";
            // line 20
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </ul>

    <!-- ==============================================
         Blog Section
         =============================================== -->
    <section class=\"blog\">
    <div class=\"container text-left\">
    <div class=\"row mt\">
        <div class=\"col-lg-12\">
            <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_OrderBy_homePage");
        echo "\"><h3>Recent Posts</h3></a>
        </div><!-- col-lg-12 -->

        <div class=\"col-lg-4\">
            <span class=\"pull-right-sm\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_blog");
        echo "\"><i class=\"fa fa-angle-right\"></i> See All Posts</a></span>
        </div>
    </div><!-- row -->
    <div class=\"row\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["articles"]);
        foreach ($context['_seq'] as $context["_key"] => $context["articles"]) {
            // line 40
            echo "
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 bb\">

                <div class=\"panel\">
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Show_homePage", array("id" => $this->getAttribute($context["articles"], "id", array()))), "html", null, true);
            echo "\" class=\"caption-link\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-angle-right fa-3x\"></i></div><!-- /.caption -->
                        </div><!-- /.caption-content -->

                        <img class=\"img-responsive panel-img\"
                             src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute($context["articles"], "image", array()))), "html", null, true);
            echo "\"
                             alt=\"\"> </a></div>
                <!-- /.panel -->

                <a href=\" ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Show_homePage", array("id" => $this->getAttribute($context["articles"], "id", array()))), "html", null, true);
            echo "\" class=\"a-body\">

                    <div class=\"panel-body\">
                        <h4>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["articles"], "titre", array()), "html", null, true);
            echo "</h4>
                        <div class=\"date\">";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articles"], "DateCreation", array())), "html", null, true);
            echo "</div>
                        <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["articles"], "Description", array()), "html", null, true);
            echo ".</p>
                        <hr>
                        <ul class=\"bottom_data\">
                            <li>By ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["articles"], "auteur", array()), "html", null, true);
            echo "</li>
                        </ul><!-- /.bottom_data -->
                        <ul class=\"bottom_data pull-right\">
                            <li><i class=\"fa fa-comment-o\"></i>19</li>
                            <li><i class=\"fa fa-heart-o\"></i>3</li>
                        </ul><!-- /.bottom_data -->
                    </div>
                    <!-- /.panel-body -->
                </a>
            </div><!-- /.col-lg-4 -->

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
    </div></div></section>
";
        
        $__internal_dc1fb1ec910783a817f33167092e28bcf290103f1b1d4b2961401aea56d11536->leave($__internal_dc1fb1ec910783a817f33167092e28bcf290103f1b1d4b2961401aea56d11536_prof);

        
        $__internal_ca4bb49d7f42714043046890fc78b1bef1a406fb40bbabac74829042e335f446->leave($__internal_ca4bb49d7f42714043046890fc78b1bef1a406fb40bbabac74829042e335f446_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:afficher_Par_Auteur_blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 75,  200 => 63,  194 => 60,  190 => 59,  186 => 58,  180 => 55,  173 => 51,  163 => 44,  157 => 40,  153 => 39,  146 => 35,  139 => 31,  128 => 22,  121 => 20,  115 => 18,  111 => 16,  106 => 15,  103 => 13,  100 => 11,  91 => 10,  73 => 8,  60 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block stylesheat %}
    {{ parent() }}
    <link href=\"{{ asset('css/blogcategories.html') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('css/style1.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

{% endblock %}
{% block title %}BlogBundle:Blog:afficherBlog{% endblock %}

{% block container %}

    {#{{ dump(articles) }}#}
    <ul class=\"nav navbar-nav\">
        {#{{ dump(categories) }}#}
        {% for categorie in categories %}
            <li class=\"header\">

                <a href=\"{{ path('blog_categories_homePage',{'id': categorie.id}) }}\">{{ categorie.nom }}</a>
                {#<a href=\"{{ path('article_search_Politique') }}\">Politique</a>#}
            </li>
        {% endfor %}
    </ul>

    <!-- ==============================================
         Blog Section
         =============================================== -->
    <section class=\"blog\">
    <div class=\"container text-left\">
    <div class=\"row mt\">
        <div class=\"col-lg-12\">
            <a href=\"{{ path('blog_OrderBy_homePage') }}\"><h3>Recent Posts</h3></a>
        </div><!-- col-lg-12 -->

        <div class=\"col-lg-4\">
            <span class=\"pull-right-sm\"><a href=\"{{ path('afficher_blog') }}\"><i class=\"fa fa-angle-right\"></i> See All Posts</a></span>
        </div>
    </div><!-- row -->
    <div class=\"row\">
        {% for articles in articles %}

            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 bb\">

                <div class=\"panel\">
                    <a href=\"{{ path('blog_Show_homePage', { 'id': articles.id }) }}\" class=\"caption-link\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-angle-right fa-3x\"></i></div><!-- /.caption -->
                        </div><!-- /.caption-content -->

                        <img class=\"img-responsive panel-img\"
                             src=\"{{ asset('uploads/images/article/'~articles.image ) }}\"
                             alt=\"\"> </a></div>
                <!-- /.panel -->

                <a href=\" {{ path('blog_Show_homePage',{ 'id': articles.id }) }}\" class=\"a-body\">

                    <div class=\"panel-body\">
                        <h4>{{ articles.titre }}</h4>
                        <div class=\"date\">{{ articles.DateCreation|date }}</div>
                        <p>{{ articles.Description }}.</p>
                        <hr>
                        <ul class=\"bottom_data\">
                            <li>By {{ articles.auteur }}</li>
                        </ul><!-- /.bottom_data -->
                        <ul class=\"bottom_data pull-right\">
                            <li><i class=\"fa fa-comment-o\"></i>19</li>
                            <li><i class=\"fa fa-heart-o\"></i>3</li>
                        </ul><!-- /.bottom_data -->
                    </div>
                    <!-- /.panel-body -->
                </a>
            </div><!-- /.col-lg-4 -->

        {% endfor %}

    </div></div></section>
{% endblock %}
", "BlogBundle:Blog:afficher_Par_Auteur_blog.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\BlogBundle/Resources/views/Blog/afficher_Par_Auteur_blog.html.twig");
    }
}
