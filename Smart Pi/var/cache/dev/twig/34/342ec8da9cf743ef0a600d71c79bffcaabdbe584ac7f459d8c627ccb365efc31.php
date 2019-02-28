<?php

/* BlogBundle:Default:Blog_index.html.twig */
class __TwigTemplate_d521e7b2493e137196983862201c445787e2e5f720963940629e26a81dbbfa6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Default:Blog_index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_614948c7e73886810af301152c8749d9f6b35fa9f6f347c15eeb04fe6fef1ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614948c7e73886810af301152c8749d9f6b35fa9f6f347c15eeb04fe6fef1ad1->enter($__internal_614948c7e73886810af301152c8749d9f6b35fa9f6f347c15eeb04fe6fef1ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:Blog_index.html.twig"));

        $__internal_e937cc0ee10635b4a1cd86d0994adc3a0d44adc0ae0b0d424eecbc1cace5d4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e937cc0ee10635b4a1cd86d0994adc3a0d44adc0ae0b0d424eecbc1cace5d4c6->enter($__internal_e937cc0ee10635b4a1cd86d0994adc3a0d44adc0ae0b0d424eecbc1cace5d4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:Blog_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_614948c7e73886810af301152c8749d9f6b35fa9f6f347c15eeb04fe6fef1ad1->leave($__internal_614948c7e73886810af301152c8749d9f6b35fa9f6f347c15eeb04fe6fef1ad1_prof);

        
        $__internal_e937cc0ee10635b4a1cd86d0994adc3a0d44adc0ae0b0d424eecbc1cace5d4c6->leave($__internal_e937cc0ee10635b4a1cd86d0994adc3a0d44adc0ae0b0d424eecbc1cace5d4c6_prof);

    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        $__internal_41c5852ceb930a0350a8125707e6fae08c16279b71f6fb5d9c0b8a04c4b40c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c5852ceb930a0350a8125707e6fae08c16279b71f6fb5d9c0b8a04c4b40c6a->enter($__internal_41c5852ceb930a0350a8125707e6fae08c16279b71f6fb5d9c0b8a04c4b40c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_93019fcb7b8018af79921f860ffcde4b976823afb6e6df70070002e33f62247b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93019fcb7b8018af79921f860ffcde4b976823afb6e6df70070002e33f62247b->enter($__internal_93019fcb7b8018af79921f860ffcde4b976823afb6e6df70070002e33f62247b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 5
        echo "        <!-- ==============================================
        Blog Page Section
        =============================================== -->
        <section class=\"blogpage jobpost\" id=\"blogpage\">
            <div class=\"container text-left\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 white-blogpage\">

                        <h4>Designing for the reader experience.</h4>
                        <hr class=\"small-hr\">

                        <div class=\"row post-top-sec animations fade-down d2\">
                            <div class=\"col-lg-3\">
                                <h5> Posted </h5>
                                <p>";
        // line 19
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
        // line 28
        echo "                                <p>
                                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_rechercher_Auteur", array("auteur" => $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()))), "html", null, true);
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
                                <h2>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "titre", array()), "html", null, true);
        echo "</h2>
                                <div class=\"metadata\">Ecrit par ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()), "html", null, true);
        echo " ,le
                                    ";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "dateCreation", array()), "d/m/y"), "html", null, true);
        echo "
                                    à ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "dateCreation", array()), "H:m"), "html", null, true);
        echo "
                                    dans la catégorie ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "categorie", array()), "html", null, true);
        echo "
                                </div>
                                <div class=\"content\">
                                    ";
        // line 70
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "image", array()))), "html", null, true);
        echo "\" alt=\"aa\">

                                </div>
                                <div>
                                    ";
        // line 74
        echo $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "description", array());
        echo "
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

        <section class=\"articles\" id=\"articles\">
            <div class=\"container-fluid\">

                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <a href=\"#\">
                        <div class=\"tint\">
                            <div class=\"featured-thumbnail\">
                                <img class=\"img-responsive\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </a>
                    <div class=\"col-md-12 featured-titles\">
                        <h6>
                            ";
        // line 126
        echo "                            a changer pour tirer tous les articles selon categorie pour
                        </h6>
                    </div><!-- /.col-md-4 -->
                </div><!-- /.container -->
            </div>
        </section>
        <section class=\"blogauthor\" id=\"blogauthor\">
            <div class=\"container animations fade-in d3\">
                <h3 class=\"text-center title\"><span>Author</span></h3>
                <div class=\"row text-center\">
                    <div class=\"col-lg-12\">
                        ";
        // line 138
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_rechercher_Auteur", array("auteur" => $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()))), "html", null, true);
        echo "\"> <img
                                    class=\"img-circle\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                        <h5>
                            <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_rechercher_Auteur", array("auteur" => $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()))), "html", null, true);
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


    ";
        
        $__internal_93019fcb7b8018af79921f860ffcde4b976823afb6e6df70070002e33f62247b->leave($__internal_93019fcb7b8018af79921f860ffcde4b976823afb6e6df70070002e33f62247b_prof);

        
        $__internal_41c5852ceb930a0350a8125707e6fae08c16279b71f6fb5d9c0b8a04c4b40c6a->leave($__internal_41c5852ceb930a0350a8125707e6fae08c16279b71f6fb5d9c0b8a04c4b40c6a_prof);

    }

    // line 155
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf61af5aad3a1267c4de1d2deba72e08e9e46b80169773e69a59b472c0775dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf61af5aad3a1267c4de1d2deba72e08e9e46b80169773e69a59b472c0775dd0->enter($__internal_cf61af5aad3a1267c4de1d2deba72e08e9e46b80169773e69a59b472c0775dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8400f26a726ddbb52cfa081f22e152084164a5285bf0b6c8169ab4a2db0bb938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8400f26a726ddbb52cfa081f22e152084164a5285bf0b6c8169ab4a2db0bb938->enter($__internal_8400f26a726ddbb52cfa081f22e152084164a5285bf0b6c8169ab4a2db0bb938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 156
        echo "    ";
        
        $__internal_8400f26a726ddbb52cfa081f22e152084164a5285bf0b6c8169ab4a2db0bb938->leave($__internal_8400f26a726ddbb52cfa081f22e152084164a5285bf0b6c8169ab4a2db0bb938_prof);

        
        $__internal_cf61af5aad3a1267c4de1d2deba72e08e9e46b80169773e69a59b472c0775dd0->leave($__internal_cf61af5aad3a1267c4de1d2deba72e08e9e46b80169773e69a59b472c0775dd0_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:Blog_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 156,  252 => 155,  228 => 141,  223 => 139,  218 => 138,  205 => 126,  196 => 119,  148 => 74,  140 => 70,  134 => 66,  130 => 65,  126 => 64,  122 => 63,  118 => 62,  80 => 29,  77 => 28,  66 => 19,  50 => 5,  41 => 4,  11 => 1,);
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


    {% block container %}
        <!-- ==============================================
        Blog Page Section
        =============================================== -->
        <section class=\"blogpage jobpost\" id=\"blogpage\">
            <div class=\"container text-left\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 white-blogpage\">

                        <h4>Designing for the reader experience.</h4>
                        <hr class=\"small-hr\">

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
                                    <a href=\"{{ path('article_rechercher_Auteur', { 'auteur': articles.auteur }) }}\"> {{ articles.auteur }} </a>
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
                                <h2>{{ articles.titre }}</h2>
                                <div class=\"metadata\">Ecrit par {{ articles.auteur }} ,le
                                    {{ articles.dateCreation|date('d/m/y') }}
                                    à {{ articles.dateCreation|date('H:m') }}
                                    dans la catégorie {{ articles.categorie }}
                                </div>
                                <div class=\"content\">
                                    {#Une methode pour concatiner  :p :p#}
                                    <img src=\"{{ asset('uploads/images/article/'~articles.image ) }}\" alt=\"aa\">

                                </div>
                                <div>
                                    {{ articles.description|raw }}
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

        <section class=\"articles\" id=\"articles\">
            <div class=\"container-fluid\">

                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <a href=\"#\">
                        <div class=\"tint\">
                            <div class=\"featured-thumbnail\">
                                <img class=\"img-responsive\" src=\"{{ asset('img/users/10.jpg') }}\" alt=\"\">
                            </div>
                        </div>
                    </a>
                    <div class=\"col-md-12 featured-titles\">
                        <h6>
                            {#<a href=\"{{ path('article_search_Politique') }}\">Politique</a>#}
                            a changer pour tirer tous les articles selon categorie pour
                        </h6>
                    </div><!-- /.col-md-4 -->
                </div><!-- /.container -->
            </div>
        </section>
        <section class=\"blogauthor\" id=\"blogauthor\">
            <div class=\"container animations fade-in d3\">
                <h3 class=\"text-center title\"><span>Author</span></h3>
                <div class=\"row text-center\">
                    <div class=\"col-lg-12\">
                        {# Il faut choisir entre l'image et le nom de l'auteur #}
                        <a href=\"{{ path('article_rechercher_Auteur', { 'auteur': articles.auteur }) }}\"> <img
                                    class=\"img-circle\" src=\"{{ asset('img/users/1.jpg') }}\" alt=\"\"></a>
                        <h5>
                            <a href=\"{{ path('article_rechercher_Auteur', { 'auteur': articles.auteur }) }}\">{{ articles.auteur }}</a>
                        </h5>
                        <p class=\"desc\">Pro munere assueverit id, debitis scaevola omittantur vim ex, qui meis tantas
                            et. Vivendo ponderum id pro. Vidit offendit quaerendum est et, no eos prima tamquam, eu duo
                            ludus noster praesent.</p>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>


    {% endblock %}


    {% block title %}
    {% endblock %}

", "BlogBundle:Default:Blog_index.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\BlogBundle\\Resources\\views\\Default\\Blog_index.html.twig");
    }
}
