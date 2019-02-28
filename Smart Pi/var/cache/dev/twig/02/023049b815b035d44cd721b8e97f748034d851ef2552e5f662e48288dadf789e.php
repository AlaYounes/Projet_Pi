<?php

/* @Blog/Blog/blog_show.html.twig */
class __TwigTemplate_84c2ae4f66859ff1d0ee810d872d904fe6d21c7761973a4e99c58545e77162ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/Blog/blog_show.html.twig", 1);
        $this->blocks = array(
            'stylesheat' => array($this, 'block_stylesheat'),
            'container' => array($this, 'block_container'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d999de03b0a14682350eed9aa29a37bd890bb64338789fbd34d92d7c5651390e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d999de03b0a14682350eed9aa29a37bd890bb64338789fbd34d92d7c5651390e->enter($__internal_d999de03b0a14682350eed9aa29a37bd890bb64338789fbd34d92d7c5651390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Blog/blog_show.html.twig"));

        $__internal_71bbe46d776f97b8e29067962718e4b276bbefc946059cb58f0ffd20ade98765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71bbe46d776f97b8e29067962718e4b276bbefc946059cb58f0ffd20ade98765->enter($__internal_71bbe46d776f97b8e29067962718e4b276bbefc946059cb58f0ffd20ade98765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Blog/blog_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d999de03b0a14682350eed9aa29a37bd890bb64338789fbd34d92d7c5651390e->leave($__internal_d999de03b0a14682350eed9aa29a37bd890bb64338789fbd34d92d7c5651390e_prof);

        
        $__internal_71bbe46d776f97b8e29067962718e4b276bbefc946059cb58f0ffd20ade98765->leave($__internal_71bbe46d776f97b8e29067962718e4b276bbefc946059cb58f0ffd20ade98765_prof);

    }

    // line 3
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_13b2c786e78ea3bf184d18514e32c054bd8e6f04754186550abcc3b495735385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b2c786e78ea3bf184d18514e32c054bd8e6f04754186550abcc3b495735385->enter($__internal_13b2c786e78ea3bf184d18514e32c054bd8e6f04754186550abcc3b495735385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_995c6b7c04b94960a2bf0977c25f5aac982f0e5c60d52dad0f794c9fb2d36d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995c6b7c04b94960a2bf0977c25f5aac982f0e5c60d52dad0f794c9fb2d36d1a->enter($__internal_995c6b7c04b94960a2bf0977c25f5aac982f0e5c60d52dad0f794c9fb2d36d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blogcategories.html"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

";
        
        $__internal_995c6b7c04b94960a2bf0977c25f5aac982f0e5c60d52dad0f794c9fb2d36d1a->leave($__internal_995c6b7c04b94960a2bf0977c25f5aac982f0e5c60d52dad0f794c9fb2d36d1a_prof);

        
        $__internal_13b2c786e78ea3bf184d18514e32c054bd8e6f04754186550abcc3b495735385->leave($__internal_13b2c786e78ea3bf184d18514e32c054bd8e6f04754186550abcc3b495735385_prof);

    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        $__internal_f4e13d0c45820edc43be44ba60e67017d7ea7386a05022d65945662434f916e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e13d0c45820edc43be44ba60e67017d7ea7386a05022d65945662434f916e6->enter($__internal_f4e13d0c45820edc43be44ba60e67017d7ea7386a05022d65945662434f916e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_c3a32b6cacdec37b899840604fb13ad5680b04f442fe910050b1e8e4b7830164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a32b6cacdec37b899840604fb13ad5680b04f442fe910050b1e8e4b7830164->enter($__internal_c3a32b6cacdec37b899840604fb13ad5680b04f442fe910050b1e8e4b7830164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "        ";
        // line 11
        echo "        ";
        // line 12
        echo "
        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "
        ";
        // line 19
        echo "        <section>
    <span>
        <div>
            
        </div>
    </span>
        </section>

        <!-- ==============================================
        Blog Page Section
        =============================================== -->
        <section class=\"blogpage jobpost\" id=\"blogpage\">
            <div class=\"container text-left\">
                <div class=\"row\">

                    <div class=\"col-lg-8 col-lg-offset-2 white-blogpage\">
                        <div class=\"row mt\">
                            <div class=\"col-lg-12\">
                                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_OrderBy_homePage");
        echo "\"><h3>Recent Posts</h3></a>
                            </div><!-- col-lg-12 -->
                            <div class=\"col-lg-8\">
                                <span>Our latests thoughts about things that only matters to us.</span>
                            </div><!-- col-lg-8-->
                            <div class=\"col-lg-4\">
                                <span class=\"pull-right-sm\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_blog");
        echo "\"><i
                                                class=\"fa fa-angle-right\"></i> See All Posts</a></span>
                            </div>
                        </div><!-- row -->
                        <h4>Designing for the reader experience.</h4>
                        <hr class=\"small-hr\">
                        ";
        // line 50
        echo "                        ";
        // line 51
        echo "                        ";
        // line 52
        echo "
                        <div class=\"row post-top-sec animations fade-down d2\">
                            <div class=\"col-lg-3\">
                                <h5> Posted </h5>
                                <p>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "dateCreation", array())), "html", null, true);
        echo "</p>
                            </div><!-- /.col-lg-3 -->
                            <div class=\"col-lg-3\">
                                <h5> Comments </h5>
                                <p><i class=\"fa fa-comment-o\"></i> 19</p>
                            </div><!-- /.col-lg-3 -->
                            <div class=\"col-lg-3\">
                                <h5> CeatedBy </h5>
                                ";
        // line 65
        echo "                                <p>
                                    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_afficherPar_Auteur", array("auteur" => $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()), "html", null, true);
        echo " </a>
                                </p>
                            </div><!-- /.col-lg-3 -->
                            <div class=\"col-lg-3\">
                                <h5> Read Time </h5>
                                <p><i class=\"fa fa-align-left\"></i> 2 Min Read</p>
                            </div><!-- /.col-lg-3 -->

                            <div class=\"col-lg-12\">
                                <hr class=\"small-hr\">
                            </div> <!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        ";
        // line 80
        echo "                        <p>Lorem ipsum dolor sit amet, lorem quaestio similique has at, possit vivendum ne nam. Unum
                            saepe ea vim, ius sensibus volutpat et, eum legere nostrum explicari ei. Sed ex legere
                            hendrerit. Ei saperet officiis has, eu usu prompta mandamus. Vix dicat electram ei, ne sea
                            aeterno ornatus perpetua, ne cum omnis voluptua iracundia.</p>
                        <p>Pro munere assueverit id, debitis scaevola omittantur vim ex, qui meis tantas et. Vivendo
                            ponderum id pro. Vidit offendit quaerendum est et, no eos prima tamquam, eu duo ludus noster
                            praesent. Sea cu quod illum. Affert munere ut vis, ponderum gubergren sit ne. Nam at magna
                            homero feugait.</p>
                        <blockquote>
                            Odio laoreet vivendum ex vis. At mentitum assueverit nam, mel ex dolorem tacimates praesent.
                            Saepe nemore duo te, no nec cetero eligendi mnesarchum. Ne congue similique eloquentiam has.
                            Wisi omittantur definitiones vis in. Pro munere assueverit id, debitis scaevola omittantur
                            vim ex, qui meis tantas et. Vivendo ponderum id pro. Vidit offendit quaerendum est et, no
                            eos prima tamquam, eu duo ludus noster praesent. Sea cu quod illum. Affert munere ut vis,
                            ponderum gubergren sit ne. Nam at magna homero feugait.
                        </blockquote>


                        <section class=\"articles\">
                            <article>
                                ";
        // line 101
        echo "                                <div class=\"metadata\"><h3>Ecrit par ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()), "html", null, true);
        echo " ,le
                                        ";
        // line 102
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "dateCreation", array()), "d/m/y"), "html", null, true);
        echo "
                                        à ";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "dateCreation", array()), "H:m"), "html", null, true);
        echo "
                                        dans la catégorie
                                        <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_categories_homePage", array("id" => $this->getAttribute($this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "categorie", array()), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</a>
                                    </h3>
                                </div>
                                <h4>";
        // line 108
        echo $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "description", array());
        echo "</h4>
                                <div class=\"content\">
                                    ";
        // line 111
        echo "                                    <center><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "image", array()))), "html", null, true);
        echo "\" alt=\"aa\"
                                                 width=\"850px\" height=\"450px\"
                                                 align=\"center\"></center>

                                </div>

                            </article>
                        </section>


                        <p>Odio laoreet vivendum ex vis. At mentitum assueverit nam, mel ex dolorem tacimates praesent.
                            Saepe nemore duo te, no nec cetero eligendi mnesarchum. Ne congue similique eloquentiam has.
                            Wisi omittantur definitiones vis in.</p>
                        <p>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid. Eos
                            meliore interesset id. Ne has fabellas elaboraret.</p>
                        <p>Ne iriure reprimique vel. Ex alii pericula pri, idque veritus ius id. Etiam doctus aperiam cu
                            mea, vel cibo dicunt ad, vim luptatum delicatissimi eu. Diam mentitum explicari no vim,
                            tantas nominavi eos in. Ei pri omnis verterem antiopam.</p>

                        <h4>Lorem ipsum</h4>
                        <ul class=\"square\">
                            <li>Lorem ipsum dolor sit amet, lorem quaestio similique has at, possit vivendum ne nam.
                            </li>
                            <li>Pro munere assueverit id, debitis scaevola omittantur vim ex, qui meis tantas et.</li>
                            <li>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid.</li>
                            <li>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid.</li>
                        </ul>

                        <h4>Lorem ipsum</h4>
                        <ul class=\"square\">
                            <li>Lorem ipsum dolor sit amet, lorem quaestio similique has at, possit vivendum ne nam.
                            </li>
                            <li>Pro munere assueverit id, debitis scaevola omittantur vim ex, qui meis tantas et.</li>
                            <li>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid.</li>
                            <li>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid.</li>
                        </ul>
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /section -->


        <section class=\"blogauthor\" id=\"blogauthor\">
            <div class=\"container animations fade-in d3\">
                <h3 class=\"text-center title\"><span>Author</span></h3>
                <div class=\"row text-center\">
                    <div class=\"col-lg-12\">
                        <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_afficherPar_Auteur", array("auteur" => $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()))), "html", null, true);
        echo "\"> <img
                                    class=\"img-responsive\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"300px\"
                                    width=\"300px\"></a>
                        <h5>
                            <a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_afficherPar_Auteur", array("auteur" => $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()), "html", null, true);
        echo "</a>
                        </h5>
                        <p class=\"desc\">Pro munere assueverit id, debitis scaevola omittantur vim ex, qui meis tantas
                            et. Vivendo ponderum id pro. Vidit offendit quaerendum est et, no eos prima tamquam, eu duo
                            ludus noster praesent.</p>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        </section>
    ";
        
        $__internal_c3a32b6cacdec37b899840604fb13ad5680b04f442fe910050b1e8e4b7830164->leave($__internal_c3a32b6cacdec37b899840604fb13ad5680b04f442fe910050b1e8e4b7830164_prof);

        
        $__internal_f4e13d0c45820edc43be44ba60e67017d7ea7386a05022d65945662434f916e6->leave($__internal_f4e13d0c45820edc43be44ba60e67017d7ea7386a05022d65945662434f916e6_prof);

    }

    // line 175
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b7c600ea33137ebe7ee6f9069ad60ab9ead34702179d7a9f605f7a163ddbe66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7c600ea33137ebe7ee6f9069ad60ab9ead34702179d7a9f605f7a163ddbe66->enter($__internal_4b7c600ea33137ebe7ee6f9069ad60ab9ead34702179d7a9f605f7a163ddbe66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4be7ac95ed2be1471d2e144ff8384fe39717075e2bdc9ed1586e3dccfb98e697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be7ac95ed2be1471d2e144ff8384fe39717075e2bdc9ed1586e3dccfb98e697->enter($__internal_4be7ac95ed2be1471d2e144ff8384fe39717075e2bdc9ed1586e3dccfb98e697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 176
        echo "    ";
        
        $__internal_4be7ac95ed2be1471d2e144ff8384fe39717075e2bdc9ed1586e3dccfb98e697->leave($__internal_4be7ac95ed2be1471d2e144ff8384fe39717075e2bdc9ed1586e3dccfb98e697_prof);

        
        $__internal_4b7c600ea33137ebe7ee6f9069ad60ab9ead34702179d7a9f605f7a163ddbe66->leave($__internal_4b7c600ea33137ebe7ee6f9069ad60ab9ead34702179d7a9f605f7a163ddbe66_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Blog/blog_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 176,  311 => 175,  288 => 162,  282 => 159,  278 => 158,  227 => 111,  222 => 108,  214 => 105,  209 => 103,  205 => 102,  200 => 101,  178 => 80,  160 => 66,  157 => 65,  146 => 56,  140 => 52,  138 => 51,  136 => 50,  127 => 43,  118 => 37,  98 => 19,  95 => 17,  93 => 16,  91 => 15,  89 => 14,  86 => 12,  84 => 11,  82 => 10,  73 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    <link href=\"{{ asset('css/blogcategories.html') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('css/style1.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

{% endblock %}
    {% block container %}
        {#{% for categorie in categories %}#}
        {#<li class=\"header\">#}

        {#<a href=\"{{ path('article_affichage_Categorie',{'id': categorie.id}) }}\">{{ categorie.nom }}</a>#}
        {#<a href=\"{{ path('article_search_Politique') }}\">Politique</a>#}
        {#</li>#}
        {#{% endfor %}#}

        {#{{ dump(articless) }}#}
        <section>
    <span>
        <div>
            
        </div>
    </span>
        </section>

        <!-- ==============================================
        Blog Page Section
        =============================================== -->
        <section class=\"blogpage jobpost\" id=\"blogpage\">
            <div class=\"container text-left\">
                <div class=\"row\">

                    <div class=\"col-lg-8 col-lg-offset-2 white-blogpage\">
                        <div class=\"row mt\">
                            <div class=\"col-lg-12\">
                                <a href=\"{{ path('blog_OrderBy_homePage') }}\"><h3>Recent Posts</h3></a>
                            </div><!-- col-lg-12 -->
                            <div class=\"col-lg-8\">
                                <span>Our latests thoughts about things that only matters to us.</span>
                            </div><!-- col-lg-8-->
                            <div class=\"col-lg-4\">
                                <span class=\"pull-right-sm\"><a href=\"{{ path('afficher_blog') }}\"><i
                                                class=\"fa fa-angle-right\"></i> See All Posts</a></span>
                            </div>
                        </div><!-- row -->
                        <h4>Designing for the reader experience.</h4>
                        <hr class=\"small-hr\">
                        {#{{ dump(articles) }}#}
                        {#{{ dump(articles.categorie) }}#}
                        {#{{ dump() }}#}

                        <div class=\"row post-top-sec animations fade-down d2\">
                            <div class=\"col-lg-3\">
                                <h5> Posted </h5>
                                <p>{{ articles.dateCreation|date }}</p>
                            </div><!-- /.col-lg-3 -->
                            <div class=\"col-lg-3\">
                                <h5> Comments </h5>
                                <p><i class=\"fa fa-comment-o\"></i> 19</p>
                            </div><!-- /.col-lg-3 -->
                            <div class=\"col-lg-3\">
                                <h5> CeatedBy </h5>
                                {#Methode pour lister tous les articles d'un certain utilisateur(Auteur) #}
                                <p>
                                    <a href=\"{{ path('blog_afficherPar_Auteur', { 'auteur': articles.auteur }) }}\"> {{ articles.auteur }} </a>
                                </p>
                            </div><!-- /.col-lg-3 -->
                            <div class=\"col-lg-3\">
                                <h5> Read Time </h5>
                                <p><i class=\"fa fa-align-left\"></i> 2 Min Read</p>
                            </div><!-- /.col-lg-3 -->

                            <div class=\"col-lg-12\">
                                <hr class=\"small-hr\">
                            </div> <!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        {#A changer avec un Contenue #}
                        <p>Lorem ipsum dolor sit amet, lorem quaestio similique has at, possit vivendum ne nam. Unum
                            saepe ea vim, ius sensibus volutpat et, eum legere nostrum explicari ei. Sed ex legere
                            hendrerit. Ei saperet officiis has, eu usu prompta mandamus. Vix dicat electram ei, ne sea
                            aeterno ornatus perpetua, ne cum omnis voluptua iracundia.</p>
                        <p>Pro munere assueverit id, debitis scaevola omittantur vim ex, qui meis tantas et. Vivendo
                            ponderum id pro. Vidit offendit quaerendum est et, no eos prima tamquam, eu duo ludus noster
                            praesent. Sea cu quod illum. Affert munere ut vis, ponderum gubergren sit ne. Nam at magna
                            homero feugait.</p>
                        <blockquote>
                            Odio laoreet vivendum ex vis. At mentitum assueverit nam, mel ex dolorem tacimates praesent.
                            Saepe nemore duo te, no nec cetero eligendi mnesarchum. Ne congue similique eloquentiam has.
                            Wisi omittantur definitiones vis in. Pro munere assueverit id, debitis scaevola omittantur
                            vim ex, qui meis tantas et. Vivendo ponderum id pro. Vidit offendit quaerendum est et, no
                            eos prima tamquam, eu duo ludus noster praesent. Sea cu quod illum. Affert munere ut vis,
                            ponderum gubergren sit ne. Nam at magna homero feugait.
                        </blockquote>


                        <section class=\"articles\">
                            <article>
                                {#<h2>{{ articles.titre }}</h2>#}
                                <div class=\"metadata\"><h3>Ecrit par {{ articles.auteur }} ,le
                                        {{ articles.dateCreation|date('d/m/y') }}
                                        à {{ articles.dateCreation|date('H:m') }}
                                        dans la catégorie
                                        <a href=\"{{ path('blog_categories_homePage', { 'id': articles.categorie.id }) }}\"> {{ articles.categorie.nom }}</a>
                                    </h3>
                                </div>
                                <h4>{{ articles.description|raw }}</h4>
                                <div class=\"content\">
                                    {#Une methode pour concatiner  :p :p#}
                                    <center><img src=\"{{ asset('uploads/images/article/'~articles.image ) }}\" alt=\"aa\"
                                                 width=\"850px\" height=\"450px\"
                                                 align=\"center\"></center>

                                </div>

                            </article>
                        </section>


                        <p>Odio laoreet vivendum ex vis. At mentitum assueverit nam, mel ex dolorem tacimates praesent.
                            Saepe nemore duo te, no nec cetero eligendi mnesarchum. Ne congue similique eloquentiam has.
                            Wisi omittantur definitiones vis in.</p>
                        <p>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid. Eos
                            meliore interesset id. Ne has fabellas elaboraret.</p>
                        <p>Ne iriure reprimique vel. Ex alii pericula pri, idque veritus ius id. Etiam doctus aperiam cu
                            mea, vel cibo dicunt ad, vim luptatum delicatissimi eu. Diam mentitum explicari no vim,
                            tantas nominavi eos in. Ei pri omnis verterem antiopam.</p>

                        <h4>Lorem ipsum</h4>
                        <ul class=\"square\">
                            <li>Lorem ipsum dolor sit amet, lorem quaestio similique has at, possit vivendum ne nam.
                            </li>
                            <li>Pro munere assueverit id, debitis scaevola omittantur vim ex, qui meis tantas et.</li>
                            <li>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid.</li>
                            <li>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid.</li>
                        </ul>

                        <h4>Lorem ipsum</h4>
                        <ul class=\"square\">
                            <li>Lorem ipsum dolor sit amet, lorem quaestio similique has at, possit vivendum ne nam.
                            </li>
                            <li>Pro munere assueverit id, debitis scaevola omittantur vim ex, qui meis tantas et.</li>
                            <li>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid.</li>
                            <li>Pertinacia neglegentur vix ne. Illum accusata id quo, vis ex mucius iisque aliquid.</li>
                        </ul>
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /section -->


        <section class=\"blogauthor\" id=\"blogauthor\">
            <div class=\"container animations fade-in d3\">
                <h3 class=\"text-center title\"><span>Author</span></h3>
                <div class=\"row text-center\">
                    <div class=\"col-lg-12\">
                        <a href=\"{{ path('blog_afficherPar_Auteur', { 'auteur': articles.auteur }) }}\"> <img
                                    class=\"img-responsive\" src=\"{{ asset('img/users/1.jpg') }}\" alt=\"\" height=\"300px\"
                                    width=\"300px\"></a>
                        <h5>
                            <a href=\"{{ path('blog_afficherPar_Auteur', { 'auteur': articles.auteur }) }}\">{{ articles.auteur }}</a>
                        </h5>
                        <p class=\"desc\">Pro munere assueverit id, debitis scaevola omittantur vim ex, qui meis tantas
                            et. Vivendo ponderum id pro. Vidit offendit quaerendum est et, no eos prima tamquam, eu duo
                            ludus noster praesent.</p>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        </section>
    {% endblock %}


    {% block title %}
    {% endblock %}

", "@Blog/Blog/blog_show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\BlogBundle\\Resources\\views\\Blog\\blog_show.html.twig");
    }
}
