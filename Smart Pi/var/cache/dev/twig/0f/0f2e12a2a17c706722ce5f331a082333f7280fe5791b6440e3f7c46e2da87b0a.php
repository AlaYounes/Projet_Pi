<?php

/* FixBundle:Frontend/Default:Home.html.twig */
class __TwigTemplate_d76ef64b4c67989088ef256f4d4d87bf6831437461b104453ddf7fb1f1c2f9e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:Home.html.twig", 1);
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
        $__internal_ddb359620e1c0c8b54dea66d722a1defdd3a1ff9709801ea082fb202dce90878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb359620e1c0c8b54dea66d722a1defdd3a1ff9709801ea082fb202dce90878->enter($__internal_ddb359620e1c0c8b54dea66d722a1defdd3a1ff9709801ea082fb202dce90878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Home.html.twig"));

        $__internal_8e65cf7ddbc015cd5d86ad2da4e13112ddcfa7f3f35d86f456532a1b34d07291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e65cf7ddbc015cd5d86ad2da4e13112ddcfa7f3f35d86f456532a1b34d07291->enter($__internal_8e65cf7ddbc015cd5d86ad2da4e13112ddcfa7f3f35d86f456532a1b34d07291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddb359620e1c0c8b54dea66d722a1defdd3a1ff9709801ea082fb202dce90878->leave($__internal_ddb359620e1c0c8b54dea66d722a1defdd3a1ff9709801ea082fb202dce90878_prof);

        
        $__internal_8e65cf7ddbc015cd5d86ad2da4e13112ddcfa7f3f35d86f456532a1b34d07291->leave($__internal_8e65cf7ddbc015cd5d86ad2da4e13112ddcfa7f3f35d86f456532a1b34d07291_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_1fd7cc74d9f6904d7778b4866adb404e5baf2ceded0f2e32e1f694e98f02f299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd7cc74d9f6904d7778b4866adb404e5baf2ceded0f2e32e1f694e98f02f299->enter($__internal_1fd7cc74d9f6904d7778b4866adb404e5baf2ceded0f2e32e1f694e98f02f299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8f5107d24b26c9ff219e9abcdc0dc57de0daa98b2a53e03a1e6b7015b499308f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5107d24b26c9ff219e9abcdc0dc57de0daa98b2a53e03a1e6b7015b499308f->enter($__internal_8f5107d24b26c9ff219e9abcdc0dc57de0daa98b2a53e03a1e6b7015b499308f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_8f5107d24b26c9ff219e9abcdc0dc57de0daa98b2a53e03a1e6b7015b499308f->leave($__internal_8f5107d24b26c9ff219e9abcdc0dc57de0daa98b2a53e03a1e6b7015b499308f_prof);

        
        $__internal_1fd7cc74d9f6904d7778b4866adb404e5baf2ceded0f2e32e1f694e98f02f299->leave($__internal_1fd7cc74d9f6904d7778b4866adb404e5baf2ceded0f2e32e1f694e98f02f299_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_ea6c89324bdf68317384f2fedda6f173cca14018536f6eecd9dc244d972ec55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6c89324bdf68317384f2fedda6f173cca14018536f6eecd9dc244d972ec55c->enter($__internal_ea6c89324bdf68317384f2fedda6f173cca14018536f6eecd9dc244d972ec55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_7c6fba43d77b3d4d58118050d65f6c8be92f873a53bdab8b5ee5f665bf200a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6fba43d77b3d4d58118050d65f6c8be92f873a53bdab8b5ee5f665bf200a1b->enter($__internal_7c6fba43d77b3d4d58118050d65f6c8be92f873a53bdab8b5ee5f665bf200a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "







<section class=\"tr-banner section-before bg-image\">
    <div class=\"container\">
        <div class=\"banner-content text-center\">
            <h2>Find the best Freelancers in their finest hour</h2>
            <h3>Getting a job done has never been easy.</h3>

            <form class=\"form-horizontal\">
                <div class=\"col-md-10 no-padd\">
                    <div class=\"input-group\">
                        <input type=\"text\" placeholder=\"What do you need to get done?\" class=\"form-control\" />
                    </div>
                </div>
                <div class=\"col-md-2 no-padd\">
                    <div class=\"input-group\">
                        <button type=\"submit\" class=\"kafe-btn kafe-btn-mint full-width\">Let's Go!</button>
                    </div>
                </div>
            </form>

            <div class=\"row hidden-xs\">

                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"features\">
\t\t\t<span class=\"fa-stack fa-3x\">
\t\t\t <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t <i class=\"fa fa-clone fa-stack-1x fa-inverse\"></i>
\t\t\t</span><!-- /span -->
                        <p>Post your job for Free</p>
                    </div><!-- /.features -->
                </div><!-- /.col-md-4 -->

                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"features\">
\t\t\t<span class=\"fa-stack fa-3x\">
\t\t\t <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t <i class=\"fa fa-list-alt fa-stack-1x fa-inverse\"></i>
\t\t\t</span><!-- /span -->
                        <p>Get proposals in minutes</p>
                    </div><!-- /.features -->
                </div><!-- /.col-md-4 -->

                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"features\">
\t\t\t<span class=\"fa-stack fa-3x\">
\t\t\t <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t <i class=\"fa fa-users fa-stack-1x fa-inverse\"></i>
\t\t\t</span><!-- /span -->
                        <p>Choose your freelancer</p>
                    </div><!-- /.features -->
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->

        </div><!--/. banner-content -->
    </div><!-- /.container -->
</section>

<!-- ==============================================
Category Section
=============================================== -->

<div class=\"tr-category section-padding\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h1>Browse Freelancers By Category</h1>
        </div>
        <div class=\"row\">
            <div class=\"category-list tr-list\">

                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-code fa-2x\"></i></span>
                            <span class=\"category-title\">Web & Mobile Development</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-eye fa-2x\"></i></span>
                            <span class=\"category-title\">Design, Arts & Multimedia</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-edit fa-2x\"></i></span>
                            <span class=\"category-title\">Writing & Translation</span>
                            <span class=\"category-quantity\">(212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-edit fa-2x\"></i></span>
                            <span class=\"category-title\">Admin Support</span>
                            <span class=\"category-quantity\">(972)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->

            </div><!-- category-list -->
            <div class=\"category-list tr-list\">

                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-table fa-2x\"></i></span>
                            <span class=\"category-title\">Management & Finance</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-bullhorn fa-2x\"></i></span>
                            <span class=\"category-title\">Sales & Marketing</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-wrench fa-2x\"></i></span>
                            <span class=\"category-title\">Engineering & Architecture</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-legal fa-2x\"></i></span>
                            <span class=\"category-title\">Legal</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->

            </div><!-- category-list -->

        </div><!-- row -->
    </div><!-- /.container -->
</div><!-- tr-category -->

<!-- ==============================================
Fun Fact Section
=============================================== -->
<section class=\"tr-fun-fact\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-sm-4\">
                <div class=\"fun-fact\">
                    <i class=\"fa fa-users fa-3x\"></i>
                    <h4 class=\"counter\">5,798,298</h4>
                    <span>Total Users</span>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"fun-fact\">
                    <i class=\"fa fa-file-text-o fa-3x\"></i>
                    <h4 class=\"counter\">12,043</h4>
                    <span>Job Posts</span>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"fun-fact\">
                    <i class=\"fa fa-usd fa-3x\"></i>
                    <h4 class=\"counter\">200,400,000</h4>
                    <span>Paid to Freelancers</span>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section -->

<!-- ==============================================
Footer Section
=============================================== -->
<footer class=\"footerWhite\">

    <!-- COPY RIGHT -->
    <div class=\"clearfix copyRight\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-xs-12\">
                    <div class=\"copyRightWrapper\">
                        <div class=\"row\">

                            <div class=\"col-sm-5 col-sm-push-7 col-xs-12\">
                                <ul class=\"list-inline socialLink\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div><!-- /col-sm-5 -->

                            <div class=\"col-sm-7 col-sm-pull-5 col-xs-12\">
                                <div class=\"copyRightText\">
                                    <p>Copyright © 2018. All Rights Reserved</p>
                                </div>
                            </div><!-- /col-sm-7 -->

                        </div><!-- /row -->
                    </div><!-- /copyRightWrapper -->
                </div><!-- /col-xs-2 -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /copyRight -->








";
        
        $__internal_7c6fba43d77b3d4d58118050d65f6c8be92f873a53bdab8b5ee5f665bf200a1b->leave($__internal_7c6fba43d77b3d4d58118050d65f6c8be92f873a53bdab8b5ee5f665bf200a1b_prof);

        
        $__internal_ea6c89324bdf68317384f2fedda6f173cca14018536f6eecd9dc244d972ec55c->leave($__internal_ea6c89324bdf68317384f2fedda6f173cca14018536f6eecd9dc244d972ec55c_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 152,  231 => 143,  219 => 134,  207 => 125,  191 => 112,  179 => 103,  167 => 94,  155 => 85,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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







<section class=\"tr-banner section-before bg-image\">
    <div class=\"container\">
        <div class=\"banner-content text-center\">
            <h2>Find the best Freelancers in their finest hour</h2>
            <h3>Getting a job done has never been easy.</h3>

            <form class=\"form-horizontal\">
                <div class=\"col-md-10 no-padd\">
                    <div class=\"input-group\">
                        <input type=\"text\" placeholder=\"What do you need to get done?\" class=\"form-control\" />
                    </div>
                </div>
                <div class=\"col-md-2 no-padd\">
                    <div class=\"input-group\">
                        <button type=\"submit\" class=\"kafe-btn kafe-btn-mint full-width\">Let's Go!</button>
                    </div>
                </div>
            </form>

            <div class=\"row hidden-xs\">

                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"features\">
\t\t\t<span class=\"fa-stack fa-3x\">
\t\t\t <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t <i class=\"fa fa-clone fa-stack-1x fa-inverse\"></i>
\t\t\t</span><!-- /span -->
                        <p>Post your job for Free</p>
                    </div><!-- /.features -->
                </div><!-- /.col-md-4 -->

                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"features\">
\t\t\t<span class=\"fa-stack fa-3x\">
\t\t\t <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t <i class=\"fa fa-list-alt fa-stack-1x fa-inverse\"></i>
\t\t\t</span><!-- /span -->
                        <p>Get proposals in minutes</p>
                    </div><!-- /.features -->
                </div><!-- /.col-md-4 -->

                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"features\">
\t\t\t<span class=\"fa-stack fa-3x\">
\t\t\t <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t <i class=\"fa fa-users fa-stack-1x fa-inverse\"></i>
\t\t\t</span><!-- /span -->
                        <p>Choose your freelancer</p>
                    </div><!-- /.features -->
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->

        </div><!--/. banner-content -->
    </div><!-- /.container -->
</section>

<!-- ==============================================
Category Section
=============================================== -->

<div class=\"tr-category section-padding\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h1>Browse Freelancers By Category</h1>
        </div>
        <div class=\"row\">
            <div class=\"category-list tr-list\">

                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-code fa-2x\"></i></span>
                            <span class=\"category-title\">Web & Mobile Development</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-eye fa-2x\"></i></span>
                            <span class=\"category-title\">Design, Arts & Multimedia</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-edit fa-2x\"></i></span>
                            <span class=\"category-title\">Writing & Translation</span>
                            <span class=\"category-quantity\">(212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-edit fa-2x\"></i></span>
                            <span class=\"category-title\">Admin Support</span>
                            <span class=\"category-quantity\">(972)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->

            </div><!-- category-list -->
            <div class=\"category-list tr-list\">

                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-table fa-2x\"></i></span>
                            <span class=\"category-title\">Management & Finance</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-bullhorn fa-2x\"></i></span>
                            <span class=\"category-title\">Sales & Marketing</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-wrench fa-2x\"></i></span>
                            <span class=\"category-title\">Engineering & Architecture</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-legal fa-2x\"></i></span>
                            <span class=\"category-title\">Legal</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->

            </div><!-- category-list -->

        </div><!-- row -->
    </div><!-- /.container -->
</div><!-- tr-category -->

<!-- ==============================================
Fun Fact Section
=============================================== -->
<section class=\"tr-fun-fact\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-sm-4\">
                <div class=\"fun-fact\">
                    <i class=\"fa fa-users fa-3x\"></i>
                    <h4 class=\"counter\">5,798,298</h4>
                    <span>Total Users</span>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"fun-fact\">
                    <i class=\"fa fa-file-text-o fa-3x\"></i>
                    <h4 class=\"counter\">12,043</h4>
                    <span>Job Posts</span>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"fun-fact\">
                    <i class=\"fa fa-usd fa-3x\"></i>
                    <h4 class=\"counter\">200,400,000</h4>
                    <span>Paid to Freelancers</span>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section -->

<!-- ==============================================
Footer Section
=============================================== -->
<footer class=\"footerWhite\">

    <!-- COPY RIGHT -->
    <div class=\"clearfix copyRight\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-xs-12\">
                    <div class=\"copyRightWrapper\">
                        <div class=\"row\">

                            <div class=\"col-sm-5 col-sm-push-7 col-xs-12\">
                                <ul class=\"list-inline socialLink\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div><!-- /col-sm-5 -->

                            <div class=\"col-sm-7 col-sm-pull-5 col-xs-12\">
                                <div class=\"copyRightText\">
                                    <p>Copyright © 2018. All Rights Reserved</p>
                                </div>
                            </div><!-- /col-sm-7 -->

                        </div><!-- /row -->
                    </div><!-- /copyRightWrapper -->
                </div><!-- /col-xs-2 -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /copyRight -->








{% endblock %}



", "FixBundle:Frontend/Default:Home.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/Home.html.twig");
    }
}
