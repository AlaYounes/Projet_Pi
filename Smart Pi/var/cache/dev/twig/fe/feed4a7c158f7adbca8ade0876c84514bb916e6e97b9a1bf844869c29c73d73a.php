<?php

/* BlogBundle:Default:Blog_index.html.twig */
class __TwigTemplate_533e56876bba99b0517cd2304e6995e3aa07b4e5405a3443bf5ba47b3c4a061f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Default:Blog_index.html.twig", 1);
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
        $__internal_c860be5f5a51ce1b5d191faed1840f8a2ee225b9a999eb41cdea772ba7e260a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c860be5f5a51ce1b5d191faed1840f8a2ee225b9a999eb41cdea772ba7e260a8->enter($__internal_c860be5f5a51ce1b5d191faed1840f8a2ee225b9a999eb41cdea772ba7e260a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:Blog_index.html.twig"));

        $__internal_49e68e7eb5fbc261a6a871228132b412ab63241a8f8052b56e38534c4fa9d932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e68e7eb5fbc261a6a871228132b412ab63241a8f8052b56e38534c4fa9d932->enter($__internal_49e68e7eb5fbc261a6a871228132b412ab63241a8f8052b56e38534c4fa9d932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:Blog_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c860be5f5a51ce1b5d191faed1840f8a2ee225b9a999eb41cdea772ba7e260a8->leave($__internal_c860be5f5a51ce1b5d191faed1840f8a2ee225b9a999eb41cdea772ba7e260a8_prof);

        
        $__internal_49e68e7eb5fbc261a6a871228132b412ab63241a8f8052b56e38534c4fa9d932->leave($__internal_49e68e7eb5fbc261a6a871228132b412ab63241a8f8052b56e38534c4fa9d932_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_30c1dcab38315792fb1f8b65818617d416258ee84dd02b422faf52d773b5af64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c1dcab38315792fb1f8b65818617d416258ee84dd02b422faf52d773b5af64->enter($__internal_30c1dcab38315792fb1f8b65818617d416258ee84dd02b422faf52d773b5af64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_e92a53c0b86d51c62f1f24c20faf91c6e5a2c285b152c74794a1c015cf895b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92a53c0b86d51c62f1f24c20faf91c6e5a2c285b152c74794a1c015cf895b21->enter($__internal_e92a53c0b86d51c62f1f24c20faf91c6e5a2c285b152c74794a1c015cf895b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

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
        
        $__internal_e92a53c0b86d51c62f1f24c20faf91c6e5a2c285b152c74794a1c015cf895b21->leave($__internal_e92a53c0b86d51c62f1f24c20faf91c6e5a2c285b152c74794a1c015cf895b21_prof);

        
        $__internal_30c1dcab38315792fb1f8b65818617d416258ee84dd02b422faf52d773b5af64->leave($__internal_30c1dcab38315792fb1f8b65818617d416258ee84dd02b422faf52d773b5af64_prof);

    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        $__internal_127a7fdaf999102fed9d6d5ac526af444250376674113428da49610cad4eed74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127a7fdaf999102fed9d6d5ac526af444250376674113428da49610cad4eed74->enter($__internal_127a7fdaf999102fed9d6d5ac526af444250376674113428da49610cad4eed74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_b1c016aa9f6f6471469b0db31870a0894205d1bcca56d12b04b3b1ffed2bf621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c016aa9f6f6471469b0db31870a0894205d1bcca56d12b04b3b1ffed2bf621->enter($__internal_b1c016aa9f6f6471469b0db31870a0894205d1bcca56d12b04b3b1ffed2bf621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "        ";
        // line 11
        echo "            ";
        // line 12
        echo "
                ";
        // line 14
        echo "                ";
        // line 15
        echo "            ";
        // line 16
        echo "        ";
        // line 17
        echo "
        ";
        // line 19
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
        // line 33
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
        // line 42
        echo "                                <p>
                                    <a href=\"";
        // line 43
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

                        ";
        // line 57
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
        // line 78
        echo "                                <div class=\"metadata\"> <h3>Ecrit par ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "auteur", array()), "html", null, true);
        echo " ,le
                                    ";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "dateCreation", array()), "d/m/y"), "html", null, true);
        echo "
                                    à ";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "dateCreation", array()), "H:m"), "html", null, true);
        echo "
                                    dans la catégorie
                                        <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_rechercher_Auteur", array("auteur" => $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "categorie", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "categorie", array()), "html", null, true);
        echo "</a>
                                    </h3>
                                </div>
                                <h4>";
        // line 85
        echo $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "description", array());
        echo "</h4>
                                <div class=\"content\">
                                    ";
        // line 88
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/article/" . $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "image", array()))), "html", null, true);
        echo "\" alt=\"aa\">

                                </div>
                                <div>
                                    ";
        // line 92
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




        <section class=\"blogauthor\" id=\"blogauthor\">
            <div class=\"container animations fade-in d3\">
                <h3 class=\"text-center title\"><span>Author</span></h3>
                <div class=\"row text-center\">
                    <div class=\"col-lg-12\">
                        <a href=\"";
        // line 138
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
        
        $__internal_b1c016aa9f6f6471469b0db31870a0894205d1bcca56d12b04b3b1ffed2bf621->leave($__internal_b1c016aa9f6f6471469b0db31870a0894205d1bcca56d12b04b3b1ffed2bf621_prof);

        
        $__internal_127a7fdaf999102fed9d6d5ac526af444250376674113428da49610cad4eed74->leave($__internal_127a7fdaf999102fed9d6d5ac526af444250376674113428da49610cad4eed74_prof);

    }

    // line 154
    public function block_title($context, array $blocks = array())
    {
        $__internal_144796f7c7c0cc277b0f6a4147fb6eedaad3b699127ac16ce1243f685e2023a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144796f7c7c0cc277b0f6a4147fb6eedaad3b699127ac16ce1243f685e2023a5->enter($__internal_144796f7c7c0cc277b0f6a4147fb6eedaad3b699127ac16ce1243f685e2023a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a0d590aa4f07542564255d5f3c07ccc7459998e783678602a01f28c42210090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0d590aa4f07542564255d5f3c07ccc7459998e783678602a01f28c42210090->enter($__internal_8a0d590aa4f07542564255d5f3c07ccc7459998e783678602a01f28c42210090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 155
        echo "    ";
        
        $__internal_8a0d590aa4f07542564255d5f3c07ccc7459998e783678602a01f28c42210090->leave($__internal_8a0d590aa4f07542564255d5f3c07ccc7459998e783678602a01f28c42210090_prof);

        
        $__internal_144796f7c7c0cc277b0f6a4147fb6eedaad3b699127ac16ce1243f685e2023a5->leave($__internal_144796f7c7c0cc277b0f6a4147fb6eedaad3b699127ac16ce1243f685e2023a5_prof);

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
        return array (  293 => 155,  284 => 154,  261 => 141,  256 => 139,  252 => 138,  203 => 92,  195 => 88,  190 => 85,  182 => 82,  177 => 80,  173 => 79,  168 => 78,  146 => 57,  128 => 43,  125 => 42,  114 => 33,  98 => 19,  95 => 17,  93 => 16,  91 => 15,  89 => 14,  86 => 12,  84 => 11,  82 => 10,  73 => 9,  60 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
    <link href=\"{{ asset('css/blogcategories.html') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('css/style1.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

{% endblock %}

    {% block container %}
        {#{% for categorie in categories %}#}
            {#<li class=\"header\">#}

                {#<a href=\"{{ path('article_affichage_Categorie',{'id': categorie.id}) }}\">{{ categorie.nom }}</a>#}
                {#<a href=\"{{ path('article_search_Politique') }}\">Politique</a>#}
            {#</li>#}
        {#{% endfor %}#}

        {#{{ dump(articless) }}#}
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
                                <div class=\"metadata\"> <h3>Ecrit par {{ articles.auteur }} ,le
                                    {{ articles.dateCreation|date('d/m/y') }}
                                    à {{ articles.dateCreation|date('H:m') }}
                                    dans la catégorie
                                        <a href=\"{{ path('article_rechercher_Auteur', { 'auteur': articles.categorie }) }}\"> {{ articles.categorie }}</a>
                                    </h3>
                                </div>
                                <h4>{{ articles.description|raw }}</h4>
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




        <section class=\"blogauthor\" id=\"blogauthor\">
            <div class=\"container animations fade-in d3\">
                <h3 class=\"text-center title\"><span>Author</span></h3>
                <div class=\"row text-center\">
                    <div class=\"col-lg-12\">
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
