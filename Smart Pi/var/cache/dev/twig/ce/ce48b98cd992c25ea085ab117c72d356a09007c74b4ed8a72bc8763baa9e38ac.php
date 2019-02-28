<?php

/* @Blog/Blog/blog_categorie.html.twig */
class __TwigTemplate_464ede95e4547f9cdfbe1b215dd0635ea3170e904014109bccd5515ac897ded5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/Blog/blog_categorie.html.twig", 1);
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
        $__internal_4705252a5c2811f0daf9edb81b1e4adce33f1ecf4158abfd49dea7da70f954e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4705252a5c2811f0daf9edb81b1e4adce33f1ecf4158abfd49dea7da70f954e1->enter($__internal_4705252a5c2811f0daf9edb81b1e4adce33f1ecf4158abfd49dea7da70f954e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Blog/blog_categorie.html.twig"));

        $__internal_bc68c5182d0f77a5dd350843580216d74617436f83544139e2668a1a18d7eee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc68c5182d0f77a5dd350843580216d74617436f83544139e2668a1a18d7eee0->enter($__internal_bc68c5182d0f77a5dd350843580216d74617436f83544139e2668a1a18d7eee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Blog/blog_categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4705252a5c2811f0daf9edb81b1e4adce33f1ecf4158abfd49dea7da70f954e1->leave($__internal_4705252a5c2811f0daf9edb81b1e4adce33f1ecf4158abfd49dea7da70f954e1_prof);

        
        $__internal_bc68c5182d0f77a5dd350843580216d74617436f83544139e2668a1a18d7eee0->leave($__internal_bc68c5182d0f77a5dd350843580216d74617436f83544139e2668a1a18d7eee0_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_51a6f67a784f8ac029c82d31c69e552df76ed2ce7fc071808b93b75d0d52746a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a6f67a784f8ac029c82d31c69e552df76ed2ce7fc071808b93b75d0d52746a->enter($__internal_51a6f67a784f8ac029c82d31c69e552df76ed2ce7fc071808b93b75d0d52746a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_75feaf3f1d0f316d84699abb2b7bb22e2a084d1617dd994b8a4707070aa65aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75feaf3f1d0f316d84699abb2b7bb22e2a084d1617dd994b8a4707070aa65aa3->enter($__internal_75feaf3f1d0f316d84699abb2b7bb22e2a084d1617dd994b8a4707070aa65aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blogcategories.html"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

";
        
        $__internal_75feaf3f1d0f316d84699abb2b7bb22e2a084d1617dd994b8a4707070aa65aa3->leave($__internal_75feaf3f1d0f316d84699abb2b7bb22e2a084d1617dd994b8a4707070aa65aa3_prof);

        
        $__internal_51a6f67a784f8ac029c82d31c69e552df76ed2ce7fc071808b93b75d0d52746a->leave($__internal_51a6f67a784f8ac029c82d31c69e552df76ed2ce7fc071808b93b75d0d52746a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b3a4c5bfb2bb3a40b23509435ad47cddb102c09f85a14671fba83df4b95a4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3a4c5bfb2bb3a40b23509435ad47cddb102c09f85a14671fba83df4b95a4fc->enter($__internal_8b3a4c5bfb2bb3a40b23509435ad47cddb102c09f85a14671fba83df4b95a4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a32620ebda30be4b0ebd9e69d677bbf037528557bf87ef34df928b80c6724f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32620ebda30be4b0ebd9e69d677bbf037528557bf87ef34df928b80c6724f3a->enter($__internal_a32620ebda30be4b0ebd9e69d677bbf037528557bf87ef34df928b80c6724f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BlogBundle:Blog:afficherBlog";
        
        $__internal_a32620ebda30be4b0ebd9e69d677bbf037528557bf87ef34df928b80c6724f3a->leave($__internal_a32620ebda30be4b0ebd9e69d677bbf037528557bf87ef34df928b80c6724f3a_prof);

        
        $__internal_8b3a4c5bfb2bb3a40b23509435ad47cddb102c09f85a14671fba83df4b95a4fc->leave($__internal_8b3a4c5bfb2bb3a40b23509435ad47cddb102c09f85a14671fba83df4b95a4fc_prof);

    }

    // line 87
    public function block_container($context, array $blocks = array())
    {
        $__internal_79dadaa854d8ce13d5a1c01453ea3ff28f030c1ced0f0f60efa5324a375a5da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79dadaa854d8ce13d5a1c01453ea3ff28f030c1ced0f0f60efa5324a375a5da4->enter($__internal_79dadaa854d8ce13d5a1c01453ea3ff28f030c1ced0f0f60efa5324a375a5da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_57939fd7becc607f1634b7bef615aedfa76ae8bf7ace77d4e9301d5a47001d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57939fd7becc607f1634b7bef615aedfa76ae8bf7ace77d4e9301d5a47001d18->enter($__internal_57939fd7becc607f1634b7bef615aedfa76ae8bf7ace77d4e9301d5a47001d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 88
        echo "

    <ul class=\"nav navbar-nav\">
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 92
            echo "            <li class=\"header\">

                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_categories_homePage", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "    </ul>
    <section class=\"blog\">
        <div class=\"container text-left\">
            <div class=\"row mt\">
                <div class=\"col-lg-12\">
                    <a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_OrderBy_homePage");
        echo "\"><h3>Recent Posts</h3></a>
                </div><!-- col-lg-12 -->
                <div class=\"col-lg-8\">
                    <span>Our latests thoughts about things that only matters to us.</span>
                </div><!-- col-lg-8-->
                <div class=\"col-lg-4\">
                    <span class=\"pull-right-sm\"><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_blog");
        echo "\"><i class=\"fa fa-angle-right\"></i> See All Posts</a></span>
                </div>
            </div><!-- row -->

            <div class=\"row\">
                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["articles"]);
        foreach ($context['_seq'] as $context["_key"] => $context["articles"]) {
            // line 114
            echo "
                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 bb\">

                    <div class=\"panel\">
                        <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Show_homePage", array("id" => $this->getAttribute($context["articles"], "id", array()))), "html", null, true);
            echo "\" class=\"caption-link\">
                            <div class=\"caption\">
                                <div class=\"caption-content\">
                                    <i class=\"fa fa-angle-right fa-3x\"></i></div><!-- /.caption -->
                            </div><!-- /.caption-content -->

                            <img class=\"img-responsive panel-img\" src=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute($context["articles"], "image", array()))), "html", null, true);
            echo "\"
                            alt=\"\"> </a></div>
                    <!-- /.panel -->

                    <a href=\" ";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Show_homePage", array("id" => $this->getAttribute($context["articles"], "id", array()))), "html", null, true);
            echo "\" class=\"a-body\">

                        <div class=\"panel-body\">
                            <h4>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["articles"], "titre", array()), "html", null, true);
            echo "</h4>
                            <div class=\"date\">";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articles"], "DateCreation", array())), "html", null, true);
            echo "</div>
                            <p>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["articles"], "Description", array()), "html", null, true);
            echo ".</p>
                            <hr>
                            <ul class=\"bottom_data\">
                                <li>By ";
            // line 136
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
        // line 148
        echo "
            </div><!-- row -->

        </div><!-- container -->
    </section>
";
        
        $__internal_57939fd7becc607f1634b7bef615aedfa76ae8bf7ace77d4e9301d5a47001d18->leave($__internal_57939fd7becc607f1634b7bef615aedfa76ae8bf7ace77d4e9301d5a47001d18_prof);

        
        $__internal_79dadaa854d8ce13d5a1c01453ea3ff28f030c1ced0f0f60efa5324a375a5da4->leave($__internal_79dadaa854d8ce13d5a1c01453ea3ff28f030c1ced0f0f60efa5324a375a5da4_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Blog/blog_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 148,  194 => 136,  188 => 133,  184 => 132,  180 => 131,  174 => 128,  167 => 124,  158 => 118,  152 => 114,  148 => 113,  140 => 108,  131 => 102,  124 => 97,  113 => 94,  109 => 92,  105 => 91,  100 => 88,  91 => 87,  73 => 8,  60 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
    <link href=\"{{ asset('css/blogcategories.html') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('css/style1.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

{% endblock %}
{% block title %}BlogBundle:Blog:afficherBlog{% endblock %}

{#{% block container %}#}

    {#{{ dump(articles) }}#}
    {#<ul class=\"nav navbar-nav\">#}
        {#{% for categorie in categories %}#}
            {#<li class=\"header\">#}

                {#<a href=\"{{ path('blog_categories_homePage',{'id': categorie.id}) }}\">{{ categorie.nom }}</a>#}
                {#<a href=\"{{ path('article_search_Politique') }}\">Politique</a>#}
            {#</li>#}
        {#{% endfor %}#}
    {#</ul>#}
    {#{{ dump(categories) }}#}

        {#<!-- ==============================================#}
              {#Blog Section#}
              {#=============================================== -->#}
        {#<section class=\"blog\">#}
            {#<div class=\"container text-left\">#}
                {#<div class=\"row mt\">#}
                    {#<div class=\"col-lg-12\">#}
                        {#<a href=\"{{ path('blog_OrderBy_homePage') }}\"><h3>Recent Posts</h3></a>#}
                    {#</div><!-- col-lg-12 -->#}
                    {#<div class=\"col-lg-8\">#}
                        {#<span></span>#}
                    {#</div>#}
                    {#<div class=\"col-lg-4\">#}
                        {#<span class=\"pull-right-sm\"><a href=\"{{ path('afficher_blog') }}\"><i class=\"fa fa-angle-right\"></i> See All Posts</a></span>#}
                    {#</div>#}
                {#</div><!-- row -->#}

                {#<div class=\"row\">#}
                    {#{% for articles in articles %}#}

                    {#<div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 bb\">#}

                        {#<div class=\"panel\">#}
                            {#<a href=\"{{ path('blog_Show_homePage', { 'id': articles.id }) }}\" class=\"caption-link\">#}
                                {#<div class=\"caption\">#}
                                    {#<div class=\"caption-content\">#}
                                        {#<i class=\"fa fa-angle-right fa-3x\"></i>#}
                                    {#</div><!-- /.caption -->#}
                                {#</div><!-- /.caption-content -->#}

                                {#<img src=\"{{ asset('uploads/images/article/'~articles.image ) }}\" height=\"225px\"#}
                                     {#width=\"370px\"#}
                                     {#alt=\"image description\"></a></div>#}

                        {#<!-- /.panel -->#}
                        {#<a href=\" {{ path('blog_Show_homePage',{ 'id': articles.id }) }}\" class=\"a-body\">#}
                            {#<div class=\"panel-body\">#}
                                {#<h4>25 Examples of flat web &amp; application design</h4>#}
                                {#<div class=\"date\">April 22nd 2016</div>#}
                                {#<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>#}
                                {#<hr>#}
                                {#<ul class=\"bottom_data\">#}
                                    {#<li>By John Doe</li>#}
                                {#</ul><!-- /.bottom-data -->#}
                                {#<ul class=\"bottom_data pull-right\">#}
                                    {#<li><i class=\"fa fa-comment-o\"></i>15</li>#}
                                    {#<li><i class=\"fa fa-heart-o\"></i>10</li>#}
                                    {#<li><i class=\"fa fa-align-left\"></i>6 Min Read</li>#}
                                {#</ul><!-- /.bottom-data -->#}
                            {#</div>#}
                            {#<!-- /.panel-body -->#}
                        {#</a>#}
                    {#</div>#}
                {#</div>#}
                {#{% endfor %}#}
            {#</div>#}
    {#</div>#}
    {#</section>#}
        {#</div>#}
        {#</div>#}


{#{% endblock %}#}
{% block container %}


    <ul class=\"nav navbar-nav\">
        {% for categorie in categories %}
            <li class=\"header\">

                <a href=\"{{ path('blog_categories_homePage',{'id': categorie.id}) }}\">{{ categorie.nom }}</a>
            </li>
        {% endfor %}
    </ul>
    <section class=\"blog\">
        <div class=\"container text-left\">
            <div class=\"row mt\">
                <div class=\"col-lg-12\">
                    <a href=\"{{ path('blog_OrderBy_homePage') }}\"><h3>Recent Posts</h3></a>
                </div><!-- col-lg-12 -->
                <div class=\"col-lg-8\">
                    <span>Our latests thoughts about things that only matters to us.</span>
                </div><!-- col-lg-8-->
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

                            <img class=\"img-responsive panel-img\" src=\"{{ asset('uploads/images/article/'~articles.image ) }}\"
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

            </div><!-- row -->

        </div><!-- container -->
    </section>
{% endblock %}", "@Blog/Blog/blog_categorie.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\BlogBundle\\Resources\\views\\Blog\\blog_categorie.html.twig");
    }
}
