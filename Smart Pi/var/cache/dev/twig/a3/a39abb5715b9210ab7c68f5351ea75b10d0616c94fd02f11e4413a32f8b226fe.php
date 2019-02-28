<?php

/* @Fix/Frontend/Default/Hire.html.twig */
class __TwigTemplate_ef1ae2973d5675d7f001ed65afb8cf3d3a63b5c3560539d52c0c8b4becad553d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Hire.html.twig", 1);
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
        $__internal_72a32b2da71249ee8fd8925c9312b64a0454f3e07a94958db370477cabccc7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a32b2da71249ee8fd8925c9312b64a0454f3e07a94958db370477cabccc7e6->enter($__internal_72a32b2da71249ee8fd8925c9312b64a0454f3e07a94958db370477cabccc7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Hire.html.twig"));

        $__internal_42f1fe4f778c59a7d668c65d31cae42581723b9af97b883171db9e04762b6741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f1fe4f778c59a7d668c65d31cae42581723b9af97b883171db9e04762b6741->enter($__internal_42f1fe4f778c59a7d668c65d31cae42581723b9af97b883171db9e04762b6741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Hire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a32b2da71249ee8fd8925c9312b64a0454f3e07a94958db370477cabccc7e6->leave($__internal_72a32b2da71249ee8fd8925c9312b64a0454f3e07a94958db370477cabccc7e6_prof);

        
        $__internal_42f1fe4f778c59a7d668c65d31cae42581723b9af97b883171db9e04762b6741->leave($__internal_42f1fe4f778c59a7d668c65d31cae42581723b9af97b883171db9e04762b6741_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_386179f5966a87d9c9ed8e23948174b5ba3463510ecb9f6d703ed85d4eacc5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386179f5966a87d9c9ed8e23948174b5ba3463510ecb9f6d703ed85d4eacc5c2->enter($__internal_386179f5966a87d9c9ed8e23948174b5ba3463510ecb9f6d703ed85d4eacc5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_dd47bf985f7de92a0593d25cb824c555a32132abccee8b3298827d7119c9d417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd47bf985f7de92a0593d25cb824c555a32132abccee8b3298827d7119c9d417->enter($__internal_dd47bf985f7de92a0593d25cb824c555a32132abccee8b3298827d7119c9d417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_dd47bf985f7de92a0593d25cb824c555a32132abccee8b3298827d7119c9d417->leave($__internal_dd47bf985f7de92a0593d25cb824c555a32132abccee8b3298827d7119c9d417_prof);

        
        $__internal_386179f5966a87d9c9ed8e23948174b5ba3463510ecb9f6d703ed85d4eacc5c2->leave($__internal_386179f5966a87d9c9ed8e23948174b5ba3463510ecb9f6d703ed85d4eacc5c2_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_7b1c62ba175abbf7e6afa37751e3508c7536f583b18d57f7a934018198a1d123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1c62ba175abbf7e6afa37751e3508c7536f583b18d57f7a934018198a1d123->enter($__internal_7b1c62ba175abbf7e6afa37751e3508c7536f583b18d57f7a934018198a1d123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_120cbb0dee5800377de9dc3716a32d26779628a56e47ddc711333030cac1c632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120cbb0dee5800377de9dc3716a32d26779628a56e47ddc711333030cac1c632->enter($__internal_120cbb0dee5800377de9dc3716a32d26779628a56e47ddc711333030cac1c632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "




<section class=\"featured-users\">
    <div class=\"container\">
        <div class=\"section-title\" style=\"padding-top: 20px;\">
            <h1>Freelancers</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-9\">
                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"most-popular\">
                                <span>Feautured</span>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                    <i class=\"fa fa-star member-star text-success\" title=\"verified user\"></i>
                                </div>

                                <div class=\"small-line-height\">
                                    <h4><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <h6>Company</h6>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"most-popular\">
                                <span>Feautured</span>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                    <i class=\"fa fa-star member-star text-success\" title=\"verified user\"></i>
                                </div>

                                <div>
                                    <h4><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <h6>Individual</h6>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"most-popular\">
                                <span>Feautured</span>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                    <i class=\"fa fa-star member-star text-success\" title=\"verified user\"></i>
                                </div>

                                <div>
                                    <h4><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <h6>Company</h6>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                </div><!-- row -->
                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/4.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/5.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/6.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                </div><!-- row -->
                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/7.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 369
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/8.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 415
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/9.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                </div><!-- row -->
                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 464
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/10.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 510
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/11.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"";
        // line 556
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/12.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

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

                </div><!-- row -->
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
                            <h3 class=\"widget_title_small\">Feedback Rating</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\" class=\"active\">Any</a></li>
                                <li><a href=\"#\">5 Stars</a></li>
                                <li><a href=\"#\">4.5+ Stars</a></li>
                                <li><a href=\"#\">4+ Stars</a></li>
                                <li><a href=\"#\">3+ Stars</a></li>
                                <li><a href=\"#\">No feedback yet</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Hours Worked</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\" class=\"active\">Any</a></li>
                                <li><a href=\"#\">800+ Hours</a></li>
                                <li><a href=\"#\">500+ Hours</a></li>
                                <li><a href=\"#\">300+ Hours</a></li>
                                <li><a href=\"#\">100+ Hours</a></li>
                                <li><a href=\"#\">No Hours</a></li>
                            </ul>
                        </div>
                    </div>

                </div><!-- /.widget -->

            </div>
        </div>

    </div>
</section>






";
        
        $__internal_120cbb0dee5800377de9dc3716a32d26779628a56e47ddc711333030cac1c632->leave($__internal_120cbb0dee5800377de9dc3716a32d26779628a56e47ddc711333030cac1c632_prof);

        
        $__internal_7b1c62ba175abbf7e6afa37751e3508c7536f583b18d57f7a934018198a1d123->leave($__internal_7b1c62ba175abbf7e6afa37751e3508c7536f583b18d57f7a934018198a1d123_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Hire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 556,  639 => 510,  588 => 464,  534 => 415,  483 => 369,  432 => 323,  378 => 274,  327 => 228,  276 => 182,  227 => 136,  217 => 131,  168 => 85,  158 => 80,  109 => 34,  99 => 29,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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




<section class=\"featured-users\">
    <div class=\"container\">
        <div class=\"section-title\" style=\"padding-top: 20px;\">
            <h1>Freelancers</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-9\">
                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"most-popular\">
                                <span>Feautured</span>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Company') }}\"><img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                    <i class=\"fa fa-star member-star text-success\" title=\"verified user\"></i>
                                </div>

                                <div class=\"small-line-height\">
                                    <h4><a href=\"{{ path('template_Company') }}\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <h6>Company</h6>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"most-popular\">
                                <span>Feautured</span>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                    <i class=\"fa fa-star member-star text-success\" title=\"verified user\"></i>
                                </div>

                                <div>
                                    <h4><a href=\"{{ path('template_Profile') }}\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        <i class=\"fa fa-star-o rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <h6>Individual</h6>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"most-popular\">
                                <span>Feautured</span>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Company') }}\"><img src=\"{{ asset('img/users/3.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                    <i class=\"fa fa-star member-star text-success\" title=\"verified user\"></i>
                                </div>

                                <div>
                                    <h4><a href=\"{{ path('template_Company') }}\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <h6>Company</h6>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                </div><!-- row -->
                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/4.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/5.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/6.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                </div><!-- row -->
                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/7.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/8.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/9.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                </div><!-- row -->
                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/10.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/11.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

                    <div class=\"col-md-4\">
                        <div class=\"card-box text-center\">
                            <div class=\"clearfix\"></div>
                            <div class=\"member-card\">
                                <div class=\"member-thumb\">
                                    <a href=\"{{ path('template_Profile') }}\"><img src=\"{{ asset('img/users/12.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"profile-image\"></a>
                                </div>

                                <div>
                                    <h4><a href=\"#\">Julie L. Arsenault</a></h4>
                                    <p class=\"text-muted p-location\"><i class=\"fa fa-map-marker\"></i> Nairobi, Kenya</p>
                                    <p class=\"p-star\">
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        <i class=\"fa fa-star rating-star\"></i>
                                        99% (222)
                                    </p>
                                </div>

                                <h5>ISTQB certified Expert QA Engineer, QA Lead</h5>
                                <p class=\"text-muted font-16\">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s.
                                </p>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h6>1</h6>
                                    <p class=\"bottom\">Jobs Done</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>4,345</h6>
                                    <p class=\"bottom\">Hours Worked</p>
                                </div>
                                <div class=\"col-sm-4\">
                                    <h6>\$15.00/hr</h6>
                                    <p class=\"bottom\">Hourly Rate</p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- col-md-4 -->

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

                </div><!-- row -->
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
                            <h3 class=\"widget_title_small\">Feedback Rating</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\" class=\"active\">Any</a></li>
                                <li><a href=\"#\">5 Stars</a></li>
                                <li><a href=\"#\">4.5+ Stars</a></li>
                                <li><a href=\"#\">4+ Stars</a></li>
                                <li><a href=\"#\">3+ Stars</a></li>
                                <li><a href=\"#\">No feedback yet</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <h3 class=\"widget_title_small\">Hours Worked</h3>
                            <ul class=\"tr-list\">
                                <li><a href=\"#\" class=\"active\">Any</a></li>
                                <li><a href=\"#\">800+ Hours</a></li>
                                <li><a href=\"#\">500+ Hours</a></li>
                                <li><a href=\"#\">300+ Hours</a></li>
                                <li><a href=\"#\">100+ Hours</a></li>
                                <li><a href=\"#\">No Hours</a></li>
                            </ul>
                        </div>
                    </div>

                </div><!-- /.widget -->

            </div>
        </div>

    </div>
</section>






{% endblock %}
", "@Fix/Frontend/Default/Hire.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Hire.html.twig");
    }
}
