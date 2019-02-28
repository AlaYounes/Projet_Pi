<?php

/* FixBundle:Frontend/Default:comapny.html.twig */
class __TwigTemplate_e4f04e7a6c8a135239254af976a8fb135e93d623c8756cfa29b9e0112b7a4d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:comapny.html.twig", 1);
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
        $__internal_34bd044c9d0909d1574d79e7e0d5c4b5d4ee8f4a28f640f9f9e47a594b585214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bd044c9d0909d1574d79e7e0d5c4b5d4ee8f4a28f640f9f9e47a594b585214->enter($__internal_34bd044c9d0909d1574d79e7e0d5c4b5d4ee8f4a28f640f9f9e47a594b585214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:comapny.html.twig"));

        $__internal_3de0a5443faf7aa1b7ed73357131a168ab661b5122077cc5251eabb75b5d3573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de0a5443faf7aa1b7ed73357131a168ab661b5122077cc5251eabb75b5d3573->enter($__internal_3de0a5443faf7aa1b7ed73357131a168ab661b5122077cc5251eabb75b5d3573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:comapny.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34bd044c9d0909d1574d79e7e0d5c4b5d4ee8f4a28f640f9f9e47a594b585214->leave($__internal_34bd044c9d0909d1574d79e7e0d5c4b5d4ee8f4a28f640f9f9e47a594b585214_prof);

        
        $__internal_3de0a5443faf7aa1b7ed73357131a168ab661b5122077cc5251eabb75b5d3573->leave($__internal_3de0a5443faf7aa1b7ed73357131a168ab661b5122077cc5251eabb75b5d3573_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_6fba163d8f69db4de2e86aabf3bf17f3379eef47e0e7122909548b8b017f05a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fba163d8f69db4de2e86aabf3bf17f3379eef47e0e7122909548b8b017f05a7->enter($__internal_6fba163d8f69db4de2e86aabf3bf17f3379eef47e0e7122909548b8b017f05a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_682f8a3af02fcb7ef81ed6da094819fd6061b2f0ece31b29f062a51b3363c390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682f8a3af02fcb7ef81ed6da094819fd6061b2f0ece31b29f062a51b3363c390->enter($__internal_682f8a3af02fcb7ef81ed6da094819fd6061b2f0ece31b29f062a51b3363c390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_682f8a3af02fcb7ef81ed6da094819fd6061b2f0ece31b29f062a51b3363c390->leave($__internal_682f8a3af02fcb7ef81ed6da094819fd6061b2f0ece31b29f062a51b3363c390_prof);

        
        $__internal_6fba163d8f69db4de2e86aabf3bf17f3379eef47e0e7122909548b8b017f05a7->leave($__internal_6fba163d8f69db4de2e86aabf3bf17f3379eef47e0e7122909548b8b017f05a7_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_0619a949b61e2e1d7c8b63c805225f91e6a307e3bd0e25160a8dd278733ca3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0619a949b61e2e1d7c8b63c805225f91e6a307e3bd0e25160a8dd278733ca3dd->enter($__internal_0619a949b61e2e1d7c8b63c805225f91e6a307e3bd0e25160a8dd278733ca3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_556ee8197984fa79419277f78e14fa35c3106f1acae8e056a5737dc65bf733a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556ee8197984fa79419277f78e14fa35c3106f1acae8e056a5737dc65bf733a4->enter($__internal_556ee8197984fa79419277f78e14fa35c3106f1acae8e056a5737dc65bf733a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
<body>


<section class=\"profile\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\">

                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#sectionA\">Profile</a></li>
                    <li><a data-toggle=\"tab\" href=\"#sectionB\">Feedbacks</a></li>
                    <li><a data-toggle=\"tab\" href=\"#sectionC\">Porfolio (4)</a></li>
                </ul><!-- nav-tabs -->
                <div class=\"tab-content\">
                    <div id=\"sectionA\" class=\"tab-pane fade in active\">

                        <div class=\"card-box-profile\">
                            <div class=\"col-lg-12\">

                                <div class=\"row bottom-sec\">
                                    <div class=\"col-lg-12\">

                                        <div class=\"col-lg-12\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>The Masha Brand <small>(Company)</small></h3>
                                                <h4>We create technology products, for you.</h4>
                                                <p><i class=\"fa fa-map-marker\"></i> Nyayo Highrise, Nairobi</p>
                                                <p class=\"p-star\">
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star-o rating-star\"></i>
                                                    99% (222)
                                                </p>
                                            </div><!-- .col-lg-3 -->
                                            <div class=\"col-lg-3\">
                                                <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Message");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Contact</a>
                                                <div class=\"margin-space\"></div>
                                                <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Offers");
        echo "\" class=\"kafe-btn kafe-btn-danger-small\"> Hire</a>
                                            </div><!-- .col-lg-9 -->
                                        </div>

                                        <div class=\"col-lg-12\">
                                            <hr class=\"small-hr\">
                                        </div>

                                        <div class=\"col-lg-2\">
                                            <h5> Total Spent</h5>
                                            <p> Below \$100 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Posted </h5>
                                            <p> 1 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hourly Rate </h5>
                                            <p> \$55.00 - \$150.00</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Completed </h5>
                                            <p>12</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hours Worked </h5>
                                            <p>1,903</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Reviews </h5>
                                            <p> 4</p>
                                        </div>

                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->

                            </div><!-- .col-lg-12 -->
                        </div><!-- .card-box-profile -->

                        <!-- ==============================================
                        Post Section
                        =============================================== -->
                        <section class=\"profile-details\">
                            <div class=\"container\">
                                <div class=\"row\">

                                    <div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-12\">
                                        <div class=\"card-box-profile-details\">

                                            <div class=\"description-profile\">

                                                <ul class=\"tr-list resume-info\">

                                                    <li>
                                                        <div class=\"icon\">
                                                            <p class=\"tr-title\"><i class=\"fa fa-black-tie\" aria-hidden=\"true\"></i> About</p>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <br>
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni।</p>
                                                        </div>
                                                    </li><!-- /.career-objective-->

                                                    <li>
                                                        <div class=\"icon\">
                                                            <p class=\"tr-title\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Staff <small>(12)</small></p>
                                                        </div>

                                                        <div class=\"staff\">
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/users/6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                            </div><!-- /.row -->
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/8.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/9.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/10.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.staff -->

                                                    </li><!-- /.career-objective-->

                                                </ul><!-- /.ul -->

                                            </div><!-- /.description-profile -->

                                        </div><!-- .card-box-profile-details -->
                                    </div><!-- .col-lg-9 -->

                                    <div class=\"col-lg-5 col-md-5 col-sm-8 col-xs-12\">

                                        <div class=\"stats\">
                                            <div class=\"row\">
                                                <h5>Stats <small>gowork</small></h5>
                                                <div class=\"col-sm-4\">
                                                    <h6>12</h6>
                                                    <p class=\"bottom\">Jobs Completed</p>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <h6>4,345</h6>
                                                    <p class=\"bottom\">Hours Worked</p>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <h6>2</h6>
                                                    <p class=\"bottom\">Active Contract</p>
                                                </div>
                                            </div>
                                        </div><!-- .stats -->

                                        <div class=\"stats\">
                                            <div class=\"row\">
                                                <h5>Stats <small>gohire</small></h5>
                                                <div class=\"col-sm-4\">
                                                    <h6>4</h6>
                                                    <p class=\"bottom\">Jobs Posted</p>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <h6>Below \$100</h6>
                                                    <p class=\"bottom\">Total Spent</p>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <h6>2</h6>
                                                    <p class=\"bottom\">Active Contract</p>
                                                </div>
                                            </div>
                                        </div><!-- .stats -->

                                        <div class=\"stats\">
                                            <div class=\"row\">
                                                <h5>Website </h5>
                                                <h6><a href=\"http://www.themashabrand.com/\">The Masha Brand</a></h6>
                                            </div>
                                        </div><!-- .stats -->



                                    </div><!-- .col-lg-3 -->

                                </div><!-- .row -->
                            </div><!-- .container -->
                        </section>

                    </div>
                    <div id=\"sectionB\" class=\"tab-pane fade\">


                        <div class=\"card-box-profile\">
                            <div class=\"col-lg-12\">

                                <div class=\"row bottom-sec\">
                                    <div class=\"col-lg-12\">

                                        <div class=\"col-lg-12\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>The Masha Brand <small>(Company)</small></h3>
                                                <h4>We create technology products, for you.</h4>
                                                <p><i class=\"fa fa-map-marker\"></i> Nyayo Highrise, Nairobi</p>
                                                <p class=\"p-star\">
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star-o rating-star\"></i>
                                                    99% (222)
                                                </p>
                                            </div><!-- .col-lg-3 -->
                                            <div class=\"col-lg-3\">
                                                <a href=\"";
        // line 355
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Message");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Contact</a>
                                                <div class=\"margin-space\"></div>
                                                <a href=\"";
        // line 357
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Offers");
        echo "\" class=\"kafe-btn kafe-btn-danger-small\"> Hire</a>
                                            </div><!-- .col-lg-9 -->
                                        </div>

                                        <div class=\"col-lg-12\">
                                            <hr class=\"small-hr\">
                                        </div>

                                        <div class=\"col-lg-2\">
                                            <h5> Total Spent</h5>
                                            <p> Below \$100 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Posted </h5>
                                            <p> 1 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hourly Rate </h5>
                                            <p> \$55.00 - \$150.00</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Completed </h5>
                                            <p>12</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hours Worked </h5>
                                            <p>1,903</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Reviews </h5>
                                            <p> 4</p>
                                        </div>

                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->

                            </div><!-- .col-lg-12 -->
                        </div><!-- .card-box-profile -->



                        <div class=\"col-lg-8 col-md-8 col-sm-6 col-xs-12\">
                            <div class=\"feedback\">

                                <div class=\"feedback-description\">
                                    <ul class=\"media-list thread-list\">
                                        <li class=\"single-thread\">

                                            <div class=\"row top-sec\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"col-lg-2 col-xs-12\">
                                                        <a href=\"freelancer.html\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/7.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                                        </a>
                                                    </div><!-- /.col-lg-2 -->
                                                    <div class=\"col-lg-10 col-xs-12\">
                                                        <h4><a href=\"freelancepost.html\">Vanessa Wells</a> <span class=\"label label-success\">gowork</span></h4>
                                                        <h5><small>9 hours ago</small></h5>
                                                    </div><!-- /.col-lg-10 -->

                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->

                                            <div class=\"row mid-sec\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"col-lg-12\">
                                                        <hr class=\"small-hr\">
                                                        <p class=\"p-star\">
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                        </p>
                                                        <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive.
                                                            Description of requirements/features: Mobile Responsive Ebay store and listing design</p>
                                                    </div><!-- /.col-lg-12 -->
                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->
                                        </li>

                                        <li class=\"single-thread\">

                                            <div class=\"row top-sec\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"col-lg-2 col-xs-12\">
                                                        <a href=\"freelancer.html\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/9.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                                        </a>
                                                    </div><!-- /.col-lg-2 -->
                                                    <div class=\"col-lg-10 col-xs-12\">
                                                        <h4><a href=\"freelancepost.html\">Anna Morgan</a> <span class=\"label label-success\">gohire</span></h4>
                                                        <h5><small>9 hours ago</small></h5>
                                                    </div><!-- /.col-lg-10 -->

                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->

                                            <div class=\"row mid-sec\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"col-lg-12\">
                                                        <hr class=\"small-hr\">
                                                        <p class=\"p-star\">
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                        </p>
                                                        <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive.
                                                            Description of requirements/features: Mobile Responsive Ebay store and listing design</p>
                                                    </div><!-- /.col-lg-12 -->
                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->
                                        </li>
                                    </ul><!-- end /.media-list -->

                                </div><!-- /.description-profile -->

                            </div><!-- .card-box-profile-details -->
                        </div><!-- .col-lg-9 -->

                    </div><!-- tab-pane -->
                    <div id=\"sectionC\" class=\"tab-pane fade\">

                        <div class=\"card-box-profile\">
                            <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                <div class=\"row bottom-sec\">
                                    <div class=\"col-lg-12\">

                                        <div class=\"col-lg-12\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>The Masha Brand <small>(Company)</small></h3>
                                                <h4>We create technology products, for you.</h4>
                                                <p><i class=\"fa fa-map-marker\"></i> Nyayo Highrise, Nairobi</p>
                                                <p class=\"p-star\">
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star-o rating-star\"></i>
                                                    99% (222)
                                                </p>
                                            </div><!-- .col-lg-3 -->
                                            <div class=\"col-lg-3\">
                                                <a href=\"";
        // line 504
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Message");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Contact</a>
                                                <div class=\"margin-space\"></div>
                                                <a href=\"";
        // line 506
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Offers");
        echo "\" class=\"kafe-btn kafe-btn-danger-small\"> Hire</a>
                                            </div><!-- .col-lg-9 -->
                                        </div>

                                        <div class=\"col-lg-12\">
                                            <hr class=\"small-hr\">
                                        </div>

                                        <div class=\"col-lg-2\">
                                            <h5> Total Spent</h5>
                                            <p> Below \$100 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Posted </h5>
                                            <p> 1 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hourly Rate </h5>
                                            <p> \$55.00 - \$150.00</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Completed </h5>
                                            <p>12</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hours Worked </h5>
                                            <p>1,903</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Reviews </h5>
                                            <p> 4</p>
                                        </div>

                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->

                            </div><!-- .col-lg-12 -->
                        </div><!-- .card-box-profile -->

                        <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">
                            <div class=\"portfolio\">

                                <div class=\"row\">

                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/1.jpg"), "html", null, true);
        echo "\">
                                                    <img src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/2.jpg"), "html", null, true);
        echo "\">
                                                    <img src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/3.jpg"), "html", null, true);
        echo "\">
                                                    <img src=\"";
        // line 570
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/4.jpg"), "html", null, true);
        echo "\">
                                                    <img src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.row -->

                            </div><!-- .portfolio -->
                        </div><!-- .col-lg-9 -->


                    </div><!-- tab-pane -->
                </div><!-- tab-content -->

            </div><!-- col-md-12 -->
        </div><!-- row -->

    </div><!-- container -->
</section>
  ";
        
        $__internal_556ee8197984fa79419277f78e14fa35c3106f1acae8e056a5737dc65bf733a4->leave($__internal_556ee8197984fa79419277f78e14fa35c3106f1acae8e056a5737dc65bf733a4_prof);

        
        $__internal_0619a949b61e2e1d7c8b63c805225f91e6a307e3bd0e25160a8dd278733ca3dd->leave($__internal_0619a949b61e2e1d7c8b63c805225f91e6a307e3bd0e25160a8dd278733ca3dd_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:comapny.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  738 => 578,  734 => 577,  724 => 570,  720 => 569,  710 => 562,  706 => 561,  696 => 554,  692 => 553,  642 => 506,  637 => 504,  620 => 490,  571 => 444,  533 => 409,  478 => 357,  473 => 355,  456 => 341,  366 => 254,  351 => 242,  336 => 230,  321 => 218,  306 => 206,  291 => 194,  274 => 180,  259 => 168,  244 => 156,  229 => 144,  214 => 132,  199 => 120,  124 => 48,  119 => 46,  102 => 32,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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


<section class=\"profile\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\">

                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#sectionA\">Profile</a></li>
                    <li><a data-toggle=\"tab\" href=\"#sectionB\">Feedbacks</a></li>
                    <li><a data-toggle=\"tab\" href=\"#sectionC\">Porfolio (4)</a></li>
                </ul><!-- nav-tabs -->
                <div class=\"tab-content\">
                    <div id=\"sectionA\" class=\"tab-pane fade in active\">

                        <div class=\"card-box-profile\">
                            <div class=\"col-lg-12\">

                                <div class=\"row bottom-sec\">
                                    <div class=\"col-lg-12\">

                                        <div class=\"col-lg-12\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"{{ asset('img/logo.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>The Masha Brand <small>(Company)</small></h3>
                                                <h4>We create technology products, for you.</h4>
                                                <p><i class=\"fa fa-map-marker\"></i> Nyayo Highrise, Nairobi</p>
                                                <p class=\"p-star\">
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star-o rating-star\"></i>
                                                    99% (222)
                                                </p>
                                            </div><!-- .col-lg-3 -->
                                            <div class=\"col-lg-3\">
                                                <a href=\"{{ path('template_Message') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Contact</a>
                                                <div class=\"margin-space\"></div>
                                                <a href=\"{{ path('template_Offers') }}\" class=\"kafe-btn kafe-btn-danger-small\"> Hire</a>
                                            </div><!-- .col-lg-9 -->
                                        </div>

                                        <div class=\"col-lg-12\">
                                            <hr class=\"small-hr\">
                                        </div>

                                        <div class=\"col-lg-2\">
                                            <h5> Total Spent</h5>
                                            <p> Below \$100 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Posted </h5>
                                            <p> 1 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hourly Rate </h5>
                                            <p> \$55.00 - \$150.00</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Completed </h5>
                                            <p>12</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hours Worked </h5>
                                            <p>1,903</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Reviews </h5>
                                            <p> 4</p>
                                        </div>

                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->

                            </div><!-- .col-lg-12 -->
                        </div><!-- .card-box-profile -->

                        <!-- ==============================================
                        Post Section
                        =============================================== -->
                        <section class=\"profile-details\">
                            <div class=\"container\">
                                <div class=\"row\">

                                    <div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-12\">
                                        <div class=\"card-box-profile-details\">

                                            <div class=\"description-profile\">

                                                <ul class=\"tr-list resume-info\">

                                                    <li>
                                                        <div class=\"icon\">
                                                            <p class=\"tr-title\"><i class=\"fa fa-black-tie\" aria-hidden=\"true\"></i> About</p>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <br>
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni।</p>
                                                        </div>
                                                    </li><!-- /.career-objective-->

                                                    <li>
                                                        <div class=\"icon\">
                                                            <p class=\"tr-title\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Staff <small>(12)</small></p>
                                                        </div>

                                                        <div class=\"staff\">
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/3.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/4.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/5.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('/img/users/6.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                            </div><!-- /.row -->
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/7.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/8.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/9.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/10.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/11.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                                <div class=\"col-lg-2 text-center\">
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('img/users/12.jpg') }}\" class=\"img-responsive img-circle img-thumbnail\" alt=\"Image\">
                                                                        <p class=\"p-star\">
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star rating-star\"></i>
                                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                                        </p>
                                                                    </a>
                                                                </div><!-- /.col-lg-2 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.staff -->

                                                    </li><!-- /.career-objective-->

                                                </ul><!-- /.ul -->

                                            </div><!-- /.description-profile -->

                                        </div><!-- .card-box-profile-details -->
                                    </div><!-- .col-lg-9 -->

                                    <div class=\"col-lg-5 col-md-5 col-sm-8 col-xs-12\">

                                        <div class=\"stats\">
                                            <div class=\"row\">
                                                <h5>Stats <small>gowork</small></h5>
                                                <div class=\"col-sm-4\">
                                                    <h6>12</h6>
                                                    <p class=\"bottom\">Jobs Completed</p>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <h6>4,345</h6>
                                                    <p class=\"bottom\">Hours Worked</p>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <h6>2</h6>
                                                    <p class=\"bottom\">Active Contract</p>
                                                </div>
                                            </div>
                                        </div><!-- .stats -->

                                        <div class=\"stats\">
                                            <div class=\"row\">
                                                <h5>Stats <small>gohire</small></h5>
                                                <div class=\"col-sm-4\">
                                                    <h6>4</h6>
                                                    <p class=\"bottom\">Jobs Posted</p>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <h6>Below \$100</h6>
                                                    <p class=\"bottom\">Total Spent</p>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <h6>2</h6>
                                                    <p class=\"bottom\">Active Contract</p>
                                                </div>
                                            </div>
                                        </div><!-- .stats -->

                                        <div class=\"stats\">
                                            <div class=\"row\">
                                                <h5>Website </h5>
                                                <h6><a href=\"http://www.themashabrand.com/\">The Masha Brand</a></h6>
                                            </div>
                                        </div><!-- .stats -->



                                    </div><!-- .col-lg-3 -->

                                </div><!-- .row -->
                            </div><!-- .container -->
                        </section>

                    </div>
                    <div id=\"sectionB\" class=\"tab-pane fade\">


                        <div class=\"card-box-profile\">
                            <div class=\"col-lg-12\">

                                <div class=\"row bottom-sec\">
                                    <div class=\"col-lg-12\">

                                        <div class=\"col-lg-12\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"{{ asset('img/logo.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>The Masha Brand <small>(Company)</small></h3>
                                                <h4>We create technology products, for you.</h4>
                                                <p><i class=\"fa fa-map-marker\"></i> Nyayo Highrise, Nairobi</p>
                                                <p class=\"p-star\">
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star-o rating-star\"></i>
                                                    99% (222)
                                                </p>
                                            </div><!-- .col-lg-3 -->
                                            <div class=\"col-lg-3\">
                                                <a href=\"{{ path('template_Message') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Contact</a>
                                                <div class=\"margin-space\"></div>
                                                <a href=\"{{ path('template_Offers') }}\" class=\"kafe-btn kafe-btn-danger-small\"> Hire</a>
                                            </div><!-- .col-lg-9 -->
                                        </div>

                                        <div class=\"col-lg-12\">
                                            <hr class=\"small-hr\">
                                        </div>

                                        <div class=\"col-lg-2\">
                                            <h5> Total Spent</h5>
                                            <p> Below \$100 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Posted </h5>
                                            <p> 1 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hourly Rate </h5>
                                            <p> \$55.00 - \$150.00</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Completed </h5>
                                            <p>12</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hours Worked </h5>
                                            <p>1,903</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Reviews </h5>
                                            <p> 4</p>
                                        </div>

                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->

                            </div><!-- .col-lg-12 -->
                        </div><!-- .card-box-profile -->



                        <div class=\"col-lg-8 col-md-8 col-sm-6 col-xs-12\">
                            <div class=\"feedback\">

                                <div class=\"feedback-description\">
                                    <ul class=\"media-list thread-list\">
                                        <li class=\"single-thread\">

                                            <div class=\"row top-sec\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"col-lg-2 col-xs-12\">
                                                        <a href=\"freelancer.html\">
                                                            <img class=\"img-responsive\" src=\"{{ asset('img/users/7.jpg') }}\" alt=\"Image\">
                                                        </a>
                                                    </div><!-- /.col-lg-2 -->
                                                    <div class=\"col-lg-10 col-xs-12\">
                                                        <h4><a href=\"freelancepost.html\">Vanessa Wells</a> <span class=\"label label-success\">gowork</span></h4>
                                                        <h5><small>9 hours ago</small></h5>
                                                    </div><!-- /.col-lg-10 -->

                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->

                                            <div class=\"row mid-sec\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"col-lg-12\">
                                                        <hr class=\"small-hr\">
                                                        <p class=\"p-star\">
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                        </p>
                                                        <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive.
                                                            Description of requirements/features: Mobile Responsive Ebay store and listing design</p>
                                                    </div><!-- /.col-lg-12 -->
                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->
                                        </li>

                                        <li class=\"single-thread\">

                                            <div class=\"row top-sec\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"col-lg-2 col-xs-12\">
                                                        <a href=\"freelancer.html\">
                                                            <img class=\"img-responsive\" src=\"{{ asset('img/users/9.jpg') }}\" alt=\"Image\">
                                                        </a>
                                                    </div><!-- /.col-lg-2 -->
                                                    <div class=\"col-lg-10 col-xs-12\">
                                                        <h4><a href=\"freelancepost.html\">Anna Morgan</a> <span class=\"label label-success\">gohire</span></h4>
                                                        <h5><small>9 hours ago</small></h5>
                                                    </div><!-- /.col-lg-10 -->

                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->

                                            <div class=\"row mid-sec\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"col-lg-12\">
                                                        <hr class=\"small-hr\">
                                                        <p class=\"p-star\">
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star rating-star\"></i>
                                                            <i class=\"fa fa-star-o rating-star\"></i>
                                                        </p>
                                                        <p>Description of every page/module: I have a PSD ebay store and listing design in photoshop that needs to be sliced and coded for eBay to be mobile responsive.
                                                            Description of requirements/features: Mobile Responsive Ebay store and listing design</p>
                                                    </div><!-- /.col-lg-12 -->
                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->
                                        </li>
                                    </ul><!-- end /.media-list -->

                                </div><!-- /.description-profile -->

                            </div><!-- .card-box-profile-details -->
                        </div><!-- .col-lg-9 -->

                    </div><!-- tab-pane -->
                    <div id=\"sectionC\" class=\"tab-pane fade\">

                        <div class=\"card-box-profile\">
                            <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                <div class=\"row bottom-sec\">
                                    <div class=\"col-lg-12\">

                                        <div class=\"col-lg-12\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"{{ asset('img/logo.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>The Masha Brand <small>(Company)</small></h3>
                                                <h4>We create technology products, for you.</h4>
                                                <p><i class=\"fa fa-map-marker\"></i> Nyayo Highrise, Nairobi</p>
                                                <p class=\"p-star\">
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star rating-star\"></i>
                                                    <i class=\"fa fa-star-o rating-star\"></i>
                                                    99% (222)
                                                </p>
                                            </div><!-- .col-lg-3 -->
                                            <div class=\"col-lg-3\">
                                                <a href=\"{{ path('template_Message') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Contact</a>
                                                <div class=\"margin-space\"></div>
                                                <a href=\"{{ path('template_Offers') }}\" class=\"kafe-btn kafe-btn-danger-small\"> Hire</a>
                                            </div><!-- .col-lg-9 -->
                                        </div>

                                        <div class=\"col-lg-12\">
                                            <hr class=\"small-hr\">
                                        </div>

                                        <div class=\"col-lg-2\">
                                            <h5> Total Spent</h5>
                                            <p> Below \$100 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Posted </h5>
                                            <p> 1 </p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hourly Rate </h5>
                                            <p> \$55.00 - \$150.00</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Jobs Completed </h5>
                                            <p>12</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Hours Worked </h5>
                                            <p>1,903</p>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <h5> Reviews </h5>
                                            <p> 4</p>
                                        </div>

                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->

                            </div><!-- .col-lg-12 -->
                        </div><!-- .card-box-profile -->

                        <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">
                            <div class=\"portfolio\">

                                <div class=\"row\">

                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"{{ asset('img/portfolio/1.jpg') }}\">
                                                    <img src=\"{{ asset('img/portfolio/1.jpg') }}\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"{{ asset('img/portfolio/2.jpg') }}\">
                                                    <img src=\"{{ asset('img/portfolio/2.jpg') }}\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"{{ asset('img/portfolio/3.jpg') }}\">
                                                    <img src=\"{{ asset('img/portfolio/3.jpg') }}\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"{{ asset('img/portfolio/4.jpg') }}\">
                                                    <img src=\"{{ asset('img/portfolio/4.jpg') }}\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.row -->

                            </div><!-- .portfolio -->
                        </div><!-- .col-lg-9 -->


                    </div><!-- tab-pane -->
                </div><!-- tab-content -->

            </div><!-- col-md-12 -->
        </div><!-- row -->

    </div><!-- container -->
</section>
  {% endblock %}", "FixBundle:Frontend/Default:comapny.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/comapny.html.twig");
    }
}
