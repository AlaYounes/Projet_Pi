<?php

/* @Fix/Frontend/Default/Work.html.twig */
class __TwigTemplate_1bd836d3ee8981f2a08f36fa43fda9bfb71e56a5748410e325ed8e0e26de4583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Work.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_486e2b240e2ab1bef48118dc516c98384ea4a88846de4b1a94e5dd9179b67ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486e2b240e2ab1bef48118dc516c98384ea4a88846de4b1a94e5dd9179b67ac3->enter($__internal_486e2b240e2ab1bef48118dc516c98384ea4a88846de4b1a94e5dd9179b67ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Work.html.twig"));

        $__internal_16ad03fa26cfe04df70ffdfe3d6130ffcd5c83ffe903c96c6e4064ebb85ef990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ad03fa26cfe04df70ffdfe3d6130ffcd5c83ffe903c96c6e4064ebb85ef990->enter($__internal_16ad03fa26cfe04df70ffdfe3d6130ffcd5c83ffe903c96c6e4064ebb85ef990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Work.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_486e2b240e2ab1bef48118dc516c98384ea4a88846de4b1a94e5dd9179b67ac3->leave($__internal_486e2b240e2ab1bef48118dc516c98384ea4a88846de4b1a94e5dd9179b67ac3_prof);

        
        $__internal_16ad03fa26cfe04df70ffdfe3d6130ffcd5c83ffe903c96c6e4064ebb85ef990->leave($__internal_16ad03fa26cfe04df70ffdfe3d6130ffcd5c83ffe903c96c6e4064ebb85ef990_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_d3f0103aefdeb9297b89fc284414c89e7f5906e86e451d3c285ccfffaf3ab5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f0103aefdeb9297b89fc284414c89e7f5906e86e451d3c285ccfffaf3ab5d7->enter($__internal_d3f0103aefdeb9297b89fc284414c89e7f5906e86e451d3c285ccfffaf3ab5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_808d3649c8194ad9453cfc7ea6ff46dc95e5ab105a00d3142f325ade24051972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808d3649c8194ad9453cfc7ea6ff46dc95e5ab105a00d3142f325ade24051972->enter($__internal_808d3649c8194ad9453cfc7ea6ff46dc95e5ab105a00d3142f325ade24051972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_808d3649c8194ad9453cfc7ea6ff46dc95e5ab105a00d3142f325ade24051972->leave($__internal_808d3649c8194ad9453cfc7ea6ff46dc95e5ab105a00d3142f325ade24051972_prof);

        
        $__internal_d3f0103aefdeb9297b89fc284414c89e7f5906e86e451d3c285ccfffaf3ab5d7->leave($__internal_d3f0103aefdeb9297b89fc284414c89e7f5906e86e451d3c285ccfffaf3ab5d7_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_95334cf7ae8f27a143330670a0c37fce64078c9a8b121060dc10a50691000624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95334cf7ae8f27a143330670a0c37fce64078c9a8b121060dc10a50691000624->enter($__internal_95334cf7ae8f27a143330670a0c37fce64078c9a8b121060dc10a50691000624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_9c5b538187b0feb66b19c498e67658708e9aaaab03467e795bfe858048445a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5b538187b0feb66b19c498e67658708e9aaaab03467e795bfe858048445a81->enter($__internal_9c5b538187b0feb66b19c498e67658708e9aaaab03467e795bfe858048445a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
<body>





<section class=\"featured-users\">
    <div class=\"container\">
        <div class=\"section-title\" style=\"padding-top: 20px;\">
            <h1>Jobs</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-9\">
                <div class=\"work\">

                    <div class=\"job\">

                        <div class=\"row top-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12 col-xs-12\">
                                    <h4><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Code Ebay store and listing design to be mobile responsive.</a></h4>
                                    <h5>Web Design <small>- Web development</small></h5>
                                    <h6>Hourly \$\$ (intermediate) 40+ hours per week</h6>
                                    <p><small>Posted 14 Hours ago</small></p>
                                </div><!-- /.col-lg-10 -->

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row mid-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                    <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive. Description of requirements/features: Mobile Responsive Ebay store and listing design...</p>
                                    <span class=\"label label-success\">HTML 5</span>
                                    <span class=\"label label-success\">CSS3</span>
                                    <span class=\"label label-success\">PHP 5.4</span>
                                    <span class=\"label label-success\">Mysql</span>
                                    <span class=\"label label-success\">Bootstrap</span>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row bottom-sec\">
                            <div class=\"col-lg-12\">

                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"pull-left\">
                                        <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">
                                            <img class=\"img-responsive\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                        </a>
                                    </div><!-- /.col-lg-2 -->
                                    <h5> Anna Morgan </h5>
                                    <p><i class=\"fa fa-map-marker\"></i> Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                    </p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h4> 5 </h4>
                                        <p> Applicants</p>
                                    </div>
                                </div>

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                    </div><!-- /.job -->

                    <div class=\"job\">

                        <div class=\"row top-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12 col-xs-12\">
                                    <h4><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Professional writer required.</a></h4>
                                    <h5>Writing <small>- Content Writing</small></h5>
                                    <h6>Hourly \$\$ (intermediate) 40+ hours per week</h6>
                                    <p><small>Posted 14 Hours ago</small></p>
                                </div><!-- /.col-lg-10 -->

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row mid-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                    <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive. Description of requirements/features: Mobile Responsive Ebay store and listing design...</p>
                                    <span class=\"label label-success\">HTML 5</span>
                                    <span class=\"label label-success\">CSS3</span>
                                    <span class=\"label label-success\">PHP 5.4</span>
                                    <span class=\"label label-success\">Mysql</span>
                                    <span class=\"label label-success\">Bootstrap</span>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row bottom-sec\">
                            <div class=\"col-lg-12\">

                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"pull-left\">
                                        <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">
                                            <img class=\"img-responsive\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                        </a>
                                    </div><!-- /.col-lg-2 -->
                                    <h5> Benjamin Robinson </h5>
                                    <p><i class=\"fa fa-map-marker\"></i> Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                    </p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h4> 5 </h4>
                                        <p> Applicants</p>
                                    </div>
                                </div>

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                    </div><!-- /.job -->

                    <div class=\"job\">

                        <div class=\"row top-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12 col-xs-12\">
                                    <h4><a href=\"";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Content Writers Needed.</a></h4>
                                    <h5>Writing <small>- Content Writing</small></h5>
                                    <h6>Hourly \$\$ (intermediate) 40+ hours per week</h6>
                                    <p><small>Posted 14 Hours ago</small></p>
                                </div><!-- /.col-lg-10 -->

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row mid-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                    <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive. Description of requirements/features: Mobile Responsive Ebay store and listing design...</p>
                                    <span class=\"label label-success\">HTML 5</span>
                                    <span class=\"label label-success\">CSS3</span>
                                    <span class=\"label label-success\">PHP 5.4</span>
                                    <span class=\"label label-success\">Mysql</span>
                                    <span class=\"label label-success\">Bootstrap</span>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row bottom-sec\">
                            <div class=\"col-lg-12\">

                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"pull-left\">
                                        <a href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">
                                            <img class=\"img-responsive\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/4.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                        </a>
                                    </div><!-- /.col-lg-2 -->
                                    <h5>  Sean Coleman </h5>
                                    <p><i class=\"fa fa-map-marker\"></i> Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                    </p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h4> 5 </h4>
                                        <p> Applicants</p>
                                    </div>
                                </div>

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                    </div><!-- /.job -->

                    <div class=\"job\">

                        <div class=\"row top-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12 col-xs-12\">
                                    <h4><a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Website Design.</a></h4>
                                    <h5>Web Design <small>- Web development</small></h5>
                                    <h6>Hourly \$\$ (intermediate) 40+ hours per week</h6>
                                    <p><small>Posted 14 Hours ago</small></p>
                                </div><!-- /.col-lg-10 -->

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row mid-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                    <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive. Description of requirements/features: Mobile Responsive Ebay store and listing design...</p>
                                    <span class=\"label label-success\">HTML 5</span>
                                    <span class=\"label label-success\">CSS3</span>
                                    <span class=\"label label-success\">PHP 5.4</span>
                                    <span class=\"label label-success\">Mysql</span>
                                    <span class=\"label label-success\">Bootstrap</span>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row bottom-sec\">
                            <div class=\"col-lg-12\">

                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"pull-left\">
                                        <a href=\"";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">
                                            <img class=\"img-responsive\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/5.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                        </a>
                                    </div><!-- /.col-lg-2 -->
                                    <h5> Vanessa Wells </h5>
                                    <p><i class=\"fa fa-map-marker\"></i> Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                    </p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h4> 5 </h4>
                                        <p> Applicants</p>
                                    </div>
                                </div>

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                    </div><!-- /.job -->

                    <div class=\"paginationCommon blogPagination text-center\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\" aria-label=\"Previous\">
                                        <span aria-hidden=\"true\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </li>
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li><a href=\"#\">5</a></li>
                                <li>
                                    <a href=\"#\" aria-label=\"Next\">
                                        <span aria-hidden=\"true\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div><!-- ./work -->



            </div><!-- col-md-9 -->

            <div class=\"col-sm-4 col-md-3\">

                <div class=\"widget\">
                    <h3 class=\"widget_title\">Category</h3>
                    <ul class=\"tr-list\">
                        <li><a href=\"#\" class=\"active\"><i class=\"fa fa-code\"></i> Web & Mobile Development</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-eye\"></i>  Design, Arts & Multimedia</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-edit\"></i>  Writing & Translation</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-cog\"></i>  Admin Support</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-table\"></i>  Management & Finance</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-bullhorn\"></i>  Sales & Marketing</a></li>
                    </ul>
                    <div class=\"margin-space\"></div>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Payment Type</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\" class=\"active\">Any</a></li>
                                <li><a href=\"#\">By Hour</a></li>
                                <li><a href=\"#\">Fixed Cost</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Experience Level</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\">Entry Level</a></li>
                                <li><a href=\"#\">Intermediate</a></li>
                                <li><a href=\"#\">Expert</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"margin-space\"></div>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Job Duration</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\">6+ Months</a></li>
                                <li><a href=\"#\">3 - 6 Months</a></li>
                                <li><a href=\"#\">1 - 3 Months</a></li>
                                <li><a href=\"#\">Below 1 Month</a></li>
                                <li><a href=\"#\">Below 1 Week</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Hours Per Week</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\">30 - 39</a></li>
                                <li><a href=\"#\">20 - 29</a></li>
                                <li><a href=\"#\">10 - 19</a></li>
                                <li><a href=\"#\">1 - 9</a></li>
                            </ul>
                        </div>
                    </div>

                </div><!-- /.widget -->

            </div>
        </div>

    </div>
</section>



  ";
        
        $__internal_9c5b538187b0feb66b19c498e67658708e9aaaab03467e795bfe858048445a81->leave($__internal_9c5b538187b0feb66b19c498e67658708e9aaaab03467e795bfe858048445a81_prof);

        
        $__internal_95334cf7ae8f27a143330670a0c37fce64078c9a8b121060dc10a50691000624->leave($__internal_95334cf7ae8f27a143330670a0c37fce64078c9a8b121060dc10a50691000624_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 250,  349 => 249,  314 => 217,  281 => 187,  277 => 186,  242 => 154,  209 => 124,  205 => 123,  170 => 91,  137 => 61,  133 => 60,  98 => 28,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base.html.twig' %}
{% block header %}
    {{ parent() }}
{% endblock %}
  {% block container%}
      {{ parent() }}
<body>





<section class=\"featured-users\">
    <div class=\"container\">
        <div class=\"section-title\" style=\"padding-top: 20px;\">
            <h1>Jobs</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-9\">
                <div class=\"work\">

                    <div class=\"job\">

                        <div class=\"row top-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12 col-xs-12\">
                                    <h4><a href=\"{{ path('template_Jobpost') }}\">Code Ebay store and listing design to be mobile responsive.</a></h4>
                                    <h5>Web Design <small>- Web development</small></h5>
                                    <h6>Hourly \$\$ (intermediate) 40+ hours per week</h6>
                                    <p><small>Posted 14 Hours ago</small></p>
                                </div><!-- /.col-lg-10 -->

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row mid-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                    <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive. Description of requirements/features: Mobile Responsive Ebay store and listing design...</p>
                                    <span class=\"label label-success\">HTML 5</span>
                                    <span class=\"label label-success\">CSS3</span>
                                    <span class=\"label label-success\">PHP 5.4</span>
                                    <span class=\"label label-success\">Mysql</span>
                                    <span class=\"label label-success\">Bootstrap</span>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row bottom-sec\">
                            <div class=\"col-lg-12\">

                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"pull-left\">
                                        <a href=\"{{ path('template_Profile') }}\">
                                            <img class=\"img-responsive\" src=\"{{ asset('img/users/1.jpg') }}\" alt=\"Image\">
                                        </a>
                                    </div><!-- /.col-lg-2 -->
                                    <h5> Anna Morgan </h5>
                                    <p><i class=\"fa fa-map-marker\"></i> Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                    </p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h4> 5 </h4>
                                        <p> Applicants</p>
                                    </div>
                                </div>

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                    </div><!-- /.job -->

                    <div class=\"job\">

                        <div class=\"row top-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12 col-xs-12\">
                                    <h4><a href=\"{{ path('template_Jobpost') }}\">Professional writer required.</a></h4>
                                    <h5>Writing <small>- Content Writing</small></h5>
                                    <h6>Hourly \$\$ (intermediate) 40+ hours per week</h6>
                                    <p><small>Posted 14 Hours ago</small></p>
                                </div><!-- /.col-lg-10 -->

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row mid-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                    <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive. Description of requirements/features: Mobile Responsive Ebay store and listing design...</p>
                                    <span class=\"label label-success\">HTML 5</span>
                                    <span class=\"label label-success\">CSS3</span>
                                    <span class=\"label label-success\">PHP 5.4</span>
                                    <span class=\"label label-success\">Mysql</span>
                                    <span class=\"label label-success\">Bootstrap</span>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row bottom-sec\">
                            <div class=\"col-lg-12\">

                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"pull-left\">
                                        <a href=\"{{ path('template_Profile') }}\">
                                            <img class=\"img-responsive\" src=\"{{ asset('img/users/3.jpg') }}\" alt=\"Image\">
                                        </a>
                                    </div><!-- /.col-lg-2 -->
                                    <h5> Benjamin Robinson </h5>
                                    <p><i class=\"fa fa-map-marker\"></i> Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                    </p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h4> 5 </h4>
                                        <p> Applicants</p>
                                    </div>
                                </div>

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                    </div><!-- /.job -->

                    <div class=\"job\">

                        <div class=\"row top-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12 col-xs-12\">
                                    <h4><a href=\"{{ path('template_Jobpost') }}\">Content Writers Needed.</a></h4>
                                    <h5>Writing <small>- Content Writing</small></h5>
                                    <h6>Hourly \$\$ (intermediate) 40+ hours per week</h6>
                                    <p><small>Posted 14 Hours ago</small></p>
                                </div><!-- /.col-lg-10 -->

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row mid-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                    <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive. Description of requirements/features: Mobile Responsive Ebay store and listing design...</p>
                                    <span class=\"label label-success\">HTML 5</span>
                                    <span class=\"label label-success\">CSS3</span>
                                    <span class=\"label label-success\">PHP 5.4</span>
                                    <span class=\"label label-success\">Mysql</span>
                                    <span class=\"label label-success\">Bootstrap</span>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row bottom-sec\">
                            <div class=\"col-lg-12\">

                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"pull-left\">
                                        <a href=\"{{ path('template_Profile') }}\">
                                            <img class=\"img-responsive\" src=\"{{ asset('img/users/4.jpg') }}\" alt=\"Image\">
                                        </a>
                                    </div><!-- /.col-lg-2 -->
                                    <h5>  Sean Coleman </h5>
                                    <p><i class=\"fa fa-map-marker\"></i> Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                    </p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h4> 5 </h4>
                                        <p> Applicants</p>
                                    </div>
                                </div>

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                    </div><!-- /.job -->

                    <div class=\"job\">

                        <div class=\"row top-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12 col-xs-12\">
                                    <h4><a href=\"{{ path('template_Jobpost') }}\">Website Design.</a></h4>
                                    <h5>Web Design <small>- Web development</small></h5>
                                    <h6>Hourly \$\$ (intermediate) 40+ hours per week</h6>
                                    <p><small>Posted 14 Hours ago</small></p>
                                </div><!-- /.col-lg-10 -->

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row mid-sec\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                    <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive. Description of requirements/features: Mobile Responsive Ebay store and listing design...</p>
                                    <span class=\"label label-success\">HTML 5</span>
                                    <span class=\"label label-success\">CSS3</span>
                                    <span class=\"label label-success\">PHP 5.4</span>
                                    <span class=\"label label-success\">Mysql</span>
                                    <span class=\"label label-success\">Bootstrap</span>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                        <div class=\"row bottom-sec\">
                            <div class=\"col-lg-12\">

                                <div class=\"col-lg-12\">
                                    <hr class=\"small-hr\">
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"pull-left\">
                                        <a href=\"{{ path('template_Profile') }}\">
                                            <img class=\"img-responsive\" src=\"{{ asset('img/users/5.jpg') }}\" alt=\"Image\">
                                        </a>
                                    </div><!-- /.col-lg-2 -->
                                    <h5> Vanessa Wells </h5>
                                    <p><i class=\"fa fa-map-marker\"></i> Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                    </p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h4> 5 </h4>
                                        <p> Applicants</p>
                                    </div>
                                </div>

                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                    </div><!-- /.job -->

                    <div class=\"paginationCommon blogPagination text-center\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\" aria-label=\"Previous\">
                                        <span aria-hidden=\"true\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </li>
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li><a href=\"#\">5</a></li>
                                <li>
                                    <a href=\"#\" aria-label=\"Next\">
                                        <span aria-hidden=\"true\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div><!-- ./work -->



            </div><!-- col-md-9 -->

            <div class=\"col-sm-4 col-md-3\">

                <div class=\"widget\">
                    <h3 class=\"widget_title\">Category</h3>
                    <ul class=\"tr-list\">
                        <li><a href=\"#\" class=\"active\"><i class=\"fa fa-code\"></i> Web & Mobile Development</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-eye\"></i>  Design, Arts & Multimedia</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-edit\"></i>  Writing & Translation</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-cog\"></i>  Admin Support</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-table\"></i>  Management & Finance</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-bullhorn\"></i>  Sales & Marketing</a></li>
                    </ul>
                    <div class=\"margin-space\"></div>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Payment Type</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\" class=\"active\">Any</a></li>
                                <li><a href=\"#\">By Hour</a></li>
                                <li><a href=\"#\">Fixed Cost</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Experience Level</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\">Entry Level</a></li>
                                <li><a href=\"#\">Intermediate</a></li>
                                <li><a href=\"#\">Expert</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"margin-space\"></div>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Job Duration</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\">6+ Months</a></li>
                                <li><a href=\"#\">3 - 6 Months</a></li>
                                <li><a href=\"#\">1 - 3 Months</a></li>
                                <li><a href=\"#\">Below 1 Month</a></li>
                                <li><a href=\"#\">Below 1 Week</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Hours Per Week</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\">30 - 39</a></li>
                                <li><a href=\"#\">20 - 29</a></li>
                                <li><a href=\"#\">10 - 19</a></li>
                                <li><a href=\"#\">1 - 9</a></li>
                            </ul>
                        </div>
                    </div>

                </div><!-- /.widget -->

            </div>
        </div>

    </div>
</section>



  {% endblock %}
", "@Fix/Frontend/Default/Work.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Work.html.twig");
    }
}
