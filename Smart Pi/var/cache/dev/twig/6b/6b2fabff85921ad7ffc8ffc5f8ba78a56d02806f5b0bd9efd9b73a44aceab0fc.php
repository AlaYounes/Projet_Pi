<?php

/* BlogBundle:Blog:afficher_blog.html.twig */
class __TwigTemplate_b9b3fd1d6518fd38141ae9709267bf89151389f194a02aeca5e2ba6ed82b8a10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Blog:afficher_blog.html.twig", 1);
        $this->blocks = array(
            'stylesheat' => array($this, 'block_stylesheat'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e83aa366d1e56d13b673af45554548d16927b0e5f6e562db54cb9a0c66bd987a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83aa366d1e56d13b673af45554548d16927b0e5f6e562db54cb9a0c66bd987a->enter($__internal_e83aa366d1e56d13b673af45554548d16927b0e5f6e562db54cb9a0c66bd987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:afficher_blog.html.twig"));

        $__internal_aa57b74139668e32c5f4fc9427a822665424632a23ed392a9dd69ded41e1bf6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa57b74139668e32c5f4fc9427a822665424632a23ed392a9dd69ded41e1bf6d->enter($__internal_aa57b74139668e32c5f4fc9427a822665424632a23ed392a9dd69ded41e1bf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:afficher_blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e83aa366d1e56d13b673af45554548d16927b0e5f6e562db54cb9a0c66bd987a->leave($__internal_e83aa366d1e56d13b673af45554548d16927b0e5f6e562db54cb9a0c66bd987a_prof);

        
        $__internal_aa57b74139668e32c5f4fc9427a822665424632a23ed392a9dd69ded41e1bf6d->leave($__internal_aa57b74139668e32c5f4fc9427a822665424632a23ed392a9dd69ded41e1bf6d_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_173c6cecb029c60a207c1ead1da310594d0f68e4985556249f7267a787f65476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_173c6cecb029c60a207c1ead1da310594d0f68e4985556249f7267a787f65476->enter($__internal_173c6cecb029c60a207c1ead1da310594d0f68e4985556249f7267a787f65476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_70a23989e7df9850142b1cc4474d91cc6e887389d7b8a7d76e95b7463e2781f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a23989e7df9850142b1cc4474d91cc6e887389d7b8a7d76e95b7463e2781f6->enter($__internal_70a23989e7df9850142b1cc4474d91cc6e887389d7b8a7d76e95b7463e2781f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

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
        
        $__internal_70a23989e7df9850142b1cc4474d91cc6e887389d7b8a7d76e95b7463e2781f6->leave($__internal_70a23989e7df9850142b1cc4474d91cc6e887389d7b8a7d76e95b7463e2781f6_prof);

        
        $__internal_173c6cecb029c60a207c1ead1da310594d0f68e4985556249f7267a787f65476->leave($__internal_173c6cecb029c60a207c1ead1da310594d0f68e4985556249f7267a787f65476_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_96ac3657d3f2ac38d1c7ed3e570bbec90f6f261450ba23fd9c93287160c8f192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ac3657d3f2ac38d1c7ed3e570bbec90f6f261450ba23fd9c93287160c8f192->enter($__internal_96ac3657d3f2ac38d1c7ed3e570bbec90f6f261450ba23fd9c93287160c8f192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6eeb344bf6f79bb720555ce2a239016aaa13432d69a7708160686982b9dc5fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eeb344bf6f79bb720555ce2a239016aaa13432d69a7708160686982b9dc5fd1->enter($__internal_6eeb344bf6f79bb720555ce2a239016aaa13432d69a7708160686982b9dc5fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    <!-- ==============================================
\t Header
\t =============================================== -->
    <header class=\"header-blog\">
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"row\">
                    <h1 class=\"revealOnScroll\" data-animation=\"fadeInDown\"><i class=\"fa fa-coffee\"></i> Blog</h1>
                    <p>Keep up to date with the latest news.</p>
                </div><!-- /.row -->
            </div><!-- /.content -->
        </div><!-- /.container -->
    </header><!-- /header -->
";
        
        $__internal_6eeb344bf6f79bb720555ce2a239016aaa13432d69a7708160686982b9dc5fd1->leave($__internal_6eeb344bf6f79bb720555ce2a239016aaa13432d69a7708160686982b9dc5fd1_prof);

        
        $__internal_96ac3657d3f2ac38d1c7ed3e570bbec90f6f261450ba23fd9c93287160c8f192->leave($__internal_96ac3657d3f2ac38d1c7ed3e570bbec90f6f261450ba23fd9c93287160c8f192_prof);

    }

    // line 26
    public function block_container($context, array $blocks = array())
    {
        $__internal_3ccd4e3df37c0bc9ca01131ded872d90a88d835d955b51f98342c91669d2ec77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccd4e3df37c0bc9ca01131ded872d90a88d835d955b51f98342c91669d2ec77->enter($__internal_3ccd4e3df37c0bc9ca01131ded872d90a88d835d955b51f98342c91669d2ec77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_0b4b5e30e9b2df0c0c10da6fb8ff0ce8594c6104e583076143ebd6f3f96298e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4b5e30e9b2df0c0c10da6fb8ff0ce8594c6104e583076143ebd6f3f96298e8->enter($__internal_0b4b5e30e9b2df0c0c10da6fb8ff0ce8594c6104e583076143ebd6f3f96298e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 27
        echo "
    <ul class=\"nav navbar-nav\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 30
            echo "            <li class=\"header\">

                <a href=\"";
            // line 32
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
        // line 35
        echo "    </ul>
    <section class=\"blog\">
        <div class=\"container text-left\">
            <div class=\"row mt\">
                <div class=\"col-lg-12\">
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_OrderBy_homePage");
        echo "\"><h3>Recent Posts</h3></a>
                </div><!-- col-lg-12 -->
                <div class=\"col-lg-8\">
                    <span>Our latests thoughts about things that only matters to us.</span>
                </div><!-- col-lg-8-->
                <div class=\"col-lg-4\">
                    <span class=\"pull-right-sm\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_blog");
        echo "\"><i class=\"fa fa-angle-right\"></i> See All Posts</a></span>
                </div>
            </div><!-- row -->

            <div class=\"row\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["articles"]);
        foreach ($context['_seq'] as $context["_key"] => $context["articles"]) {
            // line 52
            echo "
                        <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 bb\">

                            <div class=\"panel\">
                                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Show_homePage", array("id" => $this->getAttribute($context["articles"], "id", array()))), "html", null, true);
            echo "\" class=\"caption-link\">
                                    <div class=\"caption\">
                                        <div class=\"caption-content\">
                                            <i class=\"fa fa-angle-right fa-3x\"></i></div><!-- /.caption -->
                                    </div><!-- /.caption-content -->

                                    <img class=\"img-responsive panel-img\"
                                         src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute($context["articles"], "image", array()))), "html", null, true);
            echo "\"
                                         alt=\"\"> </a></div>
                            <!-- /.panel -->

                            <a href=\" ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Show_homePage", array("id" => $this->getAttribute($context["articles"], "id", array()))), "html", null, true);
            echo "\" class=\"a-body\">

                                <div class=\"panel-body\">
                                    <h4>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["articles"], "titre", array()), "html", null, true);
            echo "</h4>
                                    <div class=\"date\">";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articles"], "DateCreation", array())), "html", null, true);
            echo "</div>
                                    <p>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["articles"], "Description", array()), "html", null, true);
            echo ".</p>
                                    <hr>
                                    <ul class=\"bottom_data\">
                                        <li>By ";
            // line 75
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
        // line 87
        echo "


            </div><!-- row -->

        </div><!-- container -->
    </section>

";
        
        $__internal_0b4b5e30e9b2df0c0c10da6fb8ff0ce8594c6104e583076143ebd6f3f96298e8->leave($__internal_0b4b5e30e9b2df0c0c10da6fb8ff0ce8594c6104e583076143ebd6f3f96298e8_prof);

        
        $__internal_3ccd4e3df37c0bc9ca01131ded872d90a88d835d955b51f98342c91669d2ec77->leave($__internal_3ccd4e3df37c0bc9ca01131ded872d90a88d835d955b51f98342c91669d2ec77_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bd10e5ed77de0fc7d8babdffd782a505245856d39c7179f9ac83a9582df6c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd10e5ed77de0fc7d8babdffd782a505245856d39c7179f9ac83a9582df6c8d->enter($__internal_7bd10e5ed77de0fc7d8babdffd782a505245856d39c7179f9ac83a9582df6c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cd2b9a84fe7fc6f5bc55c950cd5534493f089f6792e9adf9342202bdcbc661b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2b9a84fe7fc6f5bc55c950cd5534493f089f6792e9adf9342202bdcbc661b4->enter($__internal_cd2b9a84fe7fc6f5bc55c950cd5534493f089f6792e9adf9342202bdcbc661b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Waypoints JS -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-79656468-2', 'auto');
        ga('send', 'pageview');

    </script>
";
        
        $__internal_cd2b9a84fe7fc6f5bc55c950cd5534493f089f6792e9adf9342202bdcbc661b4->leave($__internal_cd2b9a84fe7fc6f5bc55c950cd5534493f089f6792e9adf9342202bdcbc661b4_prof);

        
        $__internal_7bd10e5ed77de0fc7d8babdffd782a505245856d39c7179f9ac83a9582df6c8d->leave($__internal_7bd10e5ed77de0fc7d8babdffd782a505245856d39c7179f9ac83a9582df6c8d_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:afficher_blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 100,  255 => 98,  246 => 97,  228 => 87,  210 => 75,  204 => 72,  200 => 71,  196 => 70,  190 => 67,  183 => 63,  173 => 56,  167 => 52,  163 => 51,  155 => 46,  146 => 40,  139 => 35,  128 => 32,  124 => 30,  120 => 29,  116 => 27,  107 => 26,  82 => 10,  73 => 9,  61 => 5,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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


{% block header %}
{{ parent() }}
    <!-- ==============================================
\t Header
\t =============================================== -->
    <header class=\"header-blog\">
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"row\">
                    <h1 class=\"revealOnScroll\" data-animation=\"fadeInDown\"><i class=\"fa fa-coffee\"></i> Blog</h1>
                    <p>Keep up to date with the latest news.</p>
                </div><!-- /.row -->
            </div><!-- /.content -->
        </div><!-- /.container -->
    </header><!-- /header -->
{% endblock %}

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



            </div><!-- row -->

        </div><!-- container -->
    </section>

{% endblock %}

{% block javascripts %}
{{ parent() }}
    <!-- Waypoints JS -->
    <script src=\"{{ asset('js/waypoints.min.js') }}\" type=\"text/javascript\"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-79656468-2', 'auto');
        ga('send', 'pageview');

    </script>
{% endblock %}", "BlogBundle:Blog:afficher_blog.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\BlogBundle/Resources/views/Blog/afficher_blog.html.twig");
    }
}
