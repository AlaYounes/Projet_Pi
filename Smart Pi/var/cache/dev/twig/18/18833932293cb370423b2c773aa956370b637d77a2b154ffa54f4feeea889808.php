<?php

/* BlogBundle:Default:Blog_index.html.twig */
class __TwigTemplate_2fe718f62df1008b01cb901fad236f4f5e549d96adbc07b58065c8bb31075360 extends Twig_Template
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
        $__internal_9bc977fb3b92a15e26434bca6a55f3442c5bb7fb8d2026189ec27548ecbe5879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc977fb3b92a15e26434bca6a55f3442c5bb7fb8d2026189ec27548ecbe5879->enter($__internal_9bc977fb3b92a15e26434bca6a55f3442c5bb7fb8d2026189ec27548ecbe5879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:Blog_index.html.twig"));

        $__internal_37c887c38df1dba54dfc0d02f9f193f1b8cbd87a2b5b482b3829f5b0190afcec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c887c38df1dba54dfc0d02f9f193f1b8cbd87a2b5b482b3829f5b0190afcec->enter($__internal_37c887c38df1dba54dfc0d02f9f193f1b8cbd87a2b5b482b3829f5b0190afcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:Blog_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bc977fb3b92a15e26434bca6a55f3442c5bb7fb8d2026189ec27548ecbe5879->leave($__internal_9bc977fb3b92a15e26434bca6a55f3442c5bb7fb8d2026189ec27548ecbe5879_prof);

        
        $__internal_37c887c38df1dba54dfc0d02f9f193f1b8cbd87a2b5b482b3829f5b0190afcec->leave($__internal_37c887c38df1dba54dfc0d02f9f193f1b8cbd87a2b5b482b3829f5b0190afcec_prof);

    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        $__internal_a4a23920338c9d1d54da0a501f83c17f0274d22f580f12f873224e1058b9c7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a23920338c9d1d54da0a501f83c17f0274d22f580f12f873224e1058b9c7e0->enter($__internal_a4a23920338c9d1d54da0a501f83c17f0274d22f580f12f873224e1058b9c7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_7fb7134c32d76c2b83cdb0c3a0ee792263b66e19d4e3f435385b1802e7efb600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb7134c32d76c2b83cdb0c3a0ee792263b66e19d4e3f435385b1802e7efb600->enter($__internal_7fb7134c32d76c2b83cdb0c3a0ee792263b66e19d4e3f435385b1802e7efb600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_7fb7134c32d76c2b83cdb0c3a0ee792263b66e19d4e3f435385b1802e7efb600->leave($__internal_7fb7134c32d76c2b83cdb0c3a0ee792263b66e19d4e3f435385b1802e7efb600_prof);

        
        $__internal_a4a23920338c9d1d54da0a501f83c17f0274d22f580f12f873224e1058b9c7e0->leave($__internal_a4a23920338c9d1d54da0a501f83c17f0274d22f580f12f873224e1058b9c7e0_prof);

    }

    // line 155
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f379bfcbe35b140ac955674093d1f6116da2b9dfd9e12a1d4f13c107b3c024a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f379bfcbe35b140ac955674093d1f6116da2b9dfd9e12a1d4f13c107b3c024a->enter($__internal_7f379bfcbe35b140ac955674093d1f6116da2b9dfd9e12a1d4f13c107b3c024a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fa39e4b0856a5f036f827e0b1cef1860767ff451cebc0c50783d4d9e516f184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa39e4b0856a5f036f827e0b1cef1860767ff451cebc0c50783d4d9e516f184->enter($__internal_1fa39e4b0856a5f036f827e0b1cef1860767ff451cebc0c50783d4d9e516f184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 156
        echo "    ";
        
        $__internal_1fa39e4b0856a5f036f827e0b1cef1860767ff451cebc0c50783d4d9e516f184->leave($__internal_1fa39e4b0856a5f036f827e0b1cef1860767ff451cebc0c50783d4d9e516f184_prof);

        
        $__internal_7f379bfcbe35b140ac955674093d1f6116da2b9dfd9e12a1d4f13c107b3c024a->leave($__internal_7f379bfcbe35b140ac955674093d1f6116da2b9dfd9e12a1d4f13c107b3c024a_prof);

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

", "BlogBundle:Default:Blog_index.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\BlogBundle/Resources/views/Default/Blog_index.html.twig");
    }
}
