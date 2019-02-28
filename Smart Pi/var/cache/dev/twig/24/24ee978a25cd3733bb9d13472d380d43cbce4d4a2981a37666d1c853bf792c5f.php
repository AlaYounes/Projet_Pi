<?php

/* @Fix/Frontend/Default/Profile.html.twig */
class __TwigTemplate_192717e8670e5a2b14c9c5fe70cbb6607343285ea8e11c72f959597851fa840f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Profile.html.twig", 1);
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
        $__internal_5adebc1cb0a7665005e3a52c86c63365bb413cc8f13498f9ec0701d2a20ec2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5adebc1cb0a7665005e3a52c86c63365bb413cc8f13498f9ec0701d2a20ec2a5->enter($__internal_5adebc1cb0a7665005e3a52c86c63365bb413cc8f13498f9ec0701d2a20ec2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Profile.html.twig"));

        $__internal_f0a7025ca9ce081e0803fd8596d830c9ec8961e47bb58901744f7401406cc4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a7025ca9ce081e0803fd8596d830c9ec8961e47bb58901744f7401406cc4e5->enter($__internal_f0a7025ca9ce081e0803fd8596d830c9ec8961e47bb58901744f7401406cc4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5adebc1cb0a7665005e3a52c86c63365bb413cc8f13498f9ec0701d2a20ec2a5->leave($__internal_5adebc1cb0a7665005e3a52c86c63365bb413cc8f13498f9ec0701d2a20ec2a5_prof);

        
        $__internal_f0a7025ca9ce081e0803fd8596d830c9ec8961e47bb58901744f7401406cc4e5->leave($__internal_f0a7025ca9ce081e0803fd8596d830c9ec8961e47bb58901744f7401406cc4e5_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_14d3ef6b49df79ce15326bff157eb1b8b981aa3d731a37055b88c7dac05a75b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d3ef6b49df79ce15326bff157eb1b8b981aa3d731a37055b88c7dac05a75b8->enter($__internal_14d3ef6b49df79ce15326bff157eb1b8b981aa3d731a37055b88c7dac05a75b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_aca6e43e0dd1794cebb83bf0537520eaa1a07351fc9e1eff9a126145853496fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca6e43e0dd1794cebb83bf0537520eaa1a07351fc9e1eff9a126145853496fc->enter($__internal_aca6e43e0dd1794cebb83bf0537520eaa1a07351fc9e1eff9a126145853496fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_aca6e43e0dd1794cebb83bf0537520eaa1a07351fc9e1eff9a126145853496fc->leave($__internal_aca6e43e0dd1794cebb83bf0537520eaa1a07351fc9e1eff9a126145853496fc_prof);

        
        $__internal_14d3ef6b49df79ce15326bff157eb1b8b981aa3d731a37055b88c7dac05a75b8->leave($__internal_14d3ef6b49df79ce15326bff157eb1b8b981aa3d731a37055b88c7dac05a75b8_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_e0be32d9e81940f1ceff98a4a971ed9850add1cce638c78eb9c5c4648f584806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0be32d9e81940f1ceff98a4a971ed9850add1cce638c78eb9c5c4648f584806->enter($__internal_e0be32d9e81940f1ceff98a4a971ed9850add1cce638c78eb9c5c4648f584806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_e8af8fd1f0f4c3646132477035ea1b2eb3b29a8b6b63ff2acc3c12a6ab3505bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8af8fd1f0f4c3646132477035ea1b2eb3b29a8b6b63ff2acc3c12a6ab3505bd->enter($__internal_e8af8fd1f0f4c3646132477035ea1b2eb3b29a8b6b63ff2acc3c12a6ab3505bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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

                                        <div class=\"col-lg-12 top-sec\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>Kris Magamigi</h3>
                                                <h4>MongoDB/CQRS/ES/ASP.NET MVC/Node.JS/AngularJS/BackboneJS</h4>
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
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Message");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Contact</a>
                                                <div class=\"margin-space\"></div>
                                                <a href=\"";
        // line 49
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
                                            <p> \$55.00</p>
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
                                                            <p class=\"tr-title\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> Skills</p>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <span class=\"label label-success\">HTML 5</span>
                                                            <span class=\"label label-success\">CSS3</span>
                                                            <span class=\"label label-success\">PHP 5.4</span>
                                                            <span class=\"label label-success\">Mysql</span>
                                                            <span class=\"label label-success\">Bootstrap</span>
                                                        </div>
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
                                                <h5>Background</h5>
                                                <div class=\"grey\"> Employment history</div>
                                                <div class=\"col-p\">
                                                    <p class=\"top\">Paralect</p>
                                                    <p class=\"middle\">Co-founder</p>
                                                    <p class=\"bottom-t\">9/2009 – Present</p>
                                                </div>
                                                <div class=\"col-p\">
                                                    <p class=\"top\">Paralect</p>
                                                    <p class=\"middle\">Co-founder</p>
                                                    <p class=\"bottom-t\">9/2009 – Present</p>
                                                </div>

                                                <div class=\"grey\"> Education</div>
                                                <div class=\"col-p\">
                                                    <p class=\"top\">Paralect</p>
                                                    <p class=\"middle\">Co-founder</p>
                                                    <p class=\"bottom-t\">9/2009 – Present</p>
                                                </div>
                                                <div class=\"col-p\">
                                                    <p class=\"top\">Paralect</p>
                                                    <p class=\"middle\">Co-founder</p>
                                                    <p class=\"bottom-t\">9/2009 – Present</p>
                                                </div>
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
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>Kris Magamigi</h3>
                                                <h4>MongoDB/CQRS/ES/ASP.NET MVC/Node.JS/AngularJS/BackboneJS</h4>
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
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Message");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Contact</a>
                                                <div class=\"margin-space\"></div>
                                                <a href=\"";
        // line 235
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
                                            <p> \$55.00</p>
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
                                                        <a href=\"#\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/7.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                                        </a>
                                                    </div><!-- /.col-lg-2 -->
                                                    <div class=\"col-lg-10 col-xs-12\">
                                                        <h4><a href=\"#\">Vanessa Wells</a> <span class=\"label label-success\">gowork</span></h4>
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
                                                        <a href=\"#\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 322
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
                            <div class=\"col-lg-12\">

                                <div class=\"row bottom-sec\">
                                    <div class=\"col-lg-12\">

                                        <div class=\"col-lg-12\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>Kris Magamigi</h3>
                                                <h4>MongoDB/CQRS/ES/ASP.NET MVC/Node.JS/AngularJS/BackboneJS</h4>
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
        // line 382
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Message");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Contact</a>
                                                <div class=\"margin-space\"></div>
                                                <a href=\"";
        // line 384
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
                                            <p> \$55.00</p>
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
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/1.jpg"), "html", null, true);
        echo "\">
                                                    <img src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/2.jpg"), "html", null, true);
        echo "\">
                                                    <img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/3.jpg"), "html", null, true);
        echo "\">
                                                    <img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Image\"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <ul class=\"grid-wrapper\">
                                            <li>
                                                <a href=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/4.jpg"), "html", null, true);
        echo "\">
                                                    <img src=\"";
        // line 456
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
        
        $__internal_e8af8fd1f0f4c3646132477035ea1b2eb3b29a8b6b63ff2acc3c12a6ab3505bd->leave($__internal_e8af8fd1f0f4c3646132477035ea1b2eb3b29a8b6b63ff2acc3c12a6ab3505bd_prof);

        
        $__internal_e0be32d9e81940f1ceff98a4a971ed9850add1cce638c78eb9c5c4648f584806->leave($__internal_e0be32d9e81940f1ceff98a4a971ed9850add1cce638c78eb9c5c4648f584806_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 456,  576 => 455,  566 => 448,  562 => 447,  552 => 440,  548 => 439,  538 => 432,  534 => 431,  484 => 384,  479 => 382,  462 => 368,  413 => 322,  375 => 287,  320 => 235,  315 => 233,  298 => 219,  125 => 49,  120 => 47,  103 => 33,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
  {% block container %}
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

                                        <div class=\"col-lg-12 top-sec\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"{{ asset('img/users/3.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>Kris Magamigi</h3>
                                                <h4>MongoDB/CQRS/ES/ASP.NET MVC/Node.JS/AngularJS/BackboneJS</h4>
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
                                            <p> \$55.00</p>
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
                                                            <p class=\"tr-title\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> Skills</p>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <span class=\"label label-success\">HTML 5</span>
                                                            <span class=\"label label-success\">CSS3</span>
                                                            <span class=\"label label-success\">PHP 5.4</span>
                                                            <span class=\"label label-success\">Mysql</span>
                                                            <span class=\"label label-success\">Bootstrap</span>
                                                        </div>
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
                                                <h5>Background</h5>
                                                <div class=\"grey\"> Employment history</div>
                                                <div class=\"col-p\">
                                                    <p class=\"top\">Paralect</p>
                                                    <p class=\"middle\">Co-founder</p>
                                                    <p class=\"bottom-t\">9/2009 – Present</p>
                                                </div>
                                                <div class=\"col-p\">
                                                    <p class=\"top\">Paralect</p>
                                                    <p class=\"middle\">Co-founder</p>
                                                    <p class=\"bottom-t\">9/2009 – Present</p>
                                                </div>

                                                <div class=\"grey\"> Education</div>
                                                <div class=\"col-p\">
                                                    <p class=\"top\">Paralect</p>
                                                    <p class=\"middle\">Co-founder</p>
                                                    <p class=\"bottom-t\">9/2009 – Present</p>
                                                </div>
                                                <div class=\"col-p\">
                                                    <p class=\"top\">Paralect</p>
                                                    <p class=\"middle\">Co-founder</p>
                                                    <p class=\"bottom-t\">9/2009 – Present</p>
                                                </div>
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
                                                <img src=\"{{ asset('img/users/3.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>Kris Magamigi</h3>
                                                <h4>MongoDB/CQRS/ES/ASP.NET MVC/Node.JS/AngularJS/BackboneJS</h4>
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
                                            <p> \$55.00</p>
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
                                                        <a href=\"#\">
                                                            <img class=\"img-responsive\" src=\"{{ asset('img/users/7.jpg') }}\" alt=\"Image\">
                                                        </a>
                                                    </div><!-- /.col-lg-2 -->
                                                    <div class=\"col-lg-10 col-xs-12\">
                                                        <h4><a href=\"#\">Vanessa Wells</a> <span class=\"label label-success\">gowork</span></h4>
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
                                                        <a href=\"#\">
                                                            <img class=\"img-responsive\" src=\"{{ asset ('img/users/9.jpg') }}\" alt=\"Image\">
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
                            <div class=\"col-lg-12\">

                                <div class=\"row bottom-sec\">
                                    <div class=\"col-lg-12\">

                                        <div class=\"col-lg-12\">
                                            <div class=\"col-lg-9\">
                                                <img src=\"{{ asset('img/users/3.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                                <h3>Kris Magamigi</h3>
                                                <h4>MongoDB/CQRS/ES/ASP.NET MVC/Node.JS/AngularJS/BackboneJS</h4>
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
                                            <p> \$55.00</p>
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







{% endblock %}



", "@Fix/Frontend/Default/Profile.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Profile.html.twig");
    }
}
