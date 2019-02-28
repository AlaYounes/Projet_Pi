<?php

/* @Fix/Frontend/index.html.twig */
class __TwigTemplate_38e7e705f3219f60c580b1157c74d8b8b5fcb71f860d3b2619b8ae0a398defdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/index.html.twig", 1);
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
        $__internal_8c1c81d27a0091fe36f8558d5037f8b1b7d7ab9e3859d0327a353eb818f96a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1c81d27a0091fe36f8558d5037f8b1b7d7ab9e3859d0327a353eb818f96a68->enter($__internal_8c1c81d27a0091fe36f8558d5037f8b1b7d7ab9e3859d0327a353eb818f96a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/index.html.twig"));

        $__internal_e9ad826ee08b7cb600a9b2220ffb4706eed954ae55a227b7ce6e10484dfda5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ad826ee08b7cb600a9b2220ffb4706eed954ae55a227b7ce6e10484dfda5af->enter($__internal_e9ad826ee08b7cb600a9b2220ffb4706eed954ae55a227b7ce6e10484dfda5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c1c81d27a0091fe36f8558d5037f8b1b7d7ab9e3859d0327a353eb818f96a68->leave($__internal_8c1c81d27a0091fe36f8558d5037f8b1b7d7ab9e3859d0327a353eb818f96a68_prof);

        
        $__internal_e9ad826ee08b7cb600a9b2220ffb4706eed954ae55a227b7ce6e10484dfda5af->leave($__internal_e9ad826ee08b7cb600a9b2220ffb4706eed954ae55a227b7ce6e10484dfda5af_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_e47502fa47b0f527b39a8f08cba88fa9726bc570c724b865c264897850afe9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47502fa47b0f527b39a8f08cba88fa9726bc570c724b865c264897850afe9e0->enter($__internal_e47502fa47b0f527b39a8f08cba88fa9726bc570c724b865c264897850afe9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_669266be07497728e3ad639d52d1d263378e1548c4a9c493df1c3395e4292d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669266be07497728e3ad639d52d1d263378e1548c4a9c493df1c3395e4292d22->enter($__internal_669266be07497728e3ad639d52d1d263378e1548c4a9c493df1c3395e4292d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_669266be07497728e3ad639d52d1d263378e1548c4a9c493df1c3395e4292d22->leave($__internal_669266be07497728e3ad639d52d1d263378e1548c4a9c493df1c3395e4292d22_prof);

        
        $__internal_e47502fa47b0f527b39a8f08cba88fa9726bc570c724b865c264897850afe9e0->leave($__internal_e47502fa47b0f527b39a8f08cba88fa9726bc570c724b865c264897850afe9e0_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_2ca62732e9bfdefcc346b68616c9be25c69d4104c3844f2ad2964dcff54dfdbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca62732e9bfdefcc346b68616c9be25c69d4104c3844f2ad2964dcff54dfdbd->enter($__internal_2ca62732e9bfdefcc346b68616c9be25c69d4104c3844f2ad2964dcff54dfdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_38f468b063bb517c8b0810e1fc70e0ad4e129f68abc4288349c3ba6968652934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f468b063bb517c8b0810e1fc70e0ad4e129f68abc4288349c3ba6968652934->enter($__internal_38f468b063bb517c8b0810e1fc70e0ad4e129f68abc4288349c3ba6968652934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        // line 78
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
        // line 87
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
        // line 96
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
        // line 105
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
        // line 118
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
        // line 127
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
        // line 136
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
        // line 145
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

  ";
        
        $__internal_38f468b063bb517c8b0810e1fc70e0ad4e129f68abc4288349c3ba6968652934->leave($__internal_38f468b063bb517c8b0810e1fc70e0ad4e129f68abc4288349c3ba6968652934_prof);

        
        $__internal_2ca62732e9bfdefcc346b68616c9be25c69d4104c3844f2ad2964dcff54dfdbd->leave($__internal_2ca62732e9bfdefcc346b68616c9be25c69d4104c3844f2ad2964dcff54dfdbd_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 145,  224 => 136,  212 => 127,  200 => 118,  184 => 105,  172 => 96,  160 => 87,  148 => 78,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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

  {% endblock %}

", "@Fix/Frontend/index.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\index.html.twig");
    }
}
