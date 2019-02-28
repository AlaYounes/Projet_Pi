<?php

/* FixBundle:Frontend:index.html.twig */
class __TwigTemplate_85512bc2c83a5410adce0dde23028715a1ea89657392bf54b4c2374a61204a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend:index.html.twig", 1);
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
        $__internal_631559133e31c89f131f5cbb08df1da387d046bd32311fcd966b4a494b3a636f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631559133e31c89f131f5cbb08df1da387d046bd32311fcd966b4a494b3a636f->enter($__internal_631559133e31c89f131f5cbb08df1da387d046bd32311fcd966b4a494b3a636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend:index.html.twig"));

        $__internal_f6d5d1655086babd87f6484a005de7d70c812cfd26854e41fc6526ff535e2d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d5d1655086babd87f6484a005de7d70c812cfd26854e41fc6526ff535e2d2c->enter($__internal_f6d5d1655086babd87f6484a005de7d70c812cfd26854e41fc6526ff535e2d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_631559133e31c89f131f5cbb08df1da387d046bd32311fcd966b4a494b3a636f->leave($__internal_631559133e31c89f131f5cbb08df1da387d046bd32311fcd966b4a494b3a636f_prof);

        
        $__internal_f6d5d1655086babd87f6484a005de7d70c812cfd26854e41fc6526ff535e2d2c->leave($__internal_f6d5d1655086babd87f6484a005de7d70c812cfd26854e41fc6526ff535e2d2c_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_6d3bdcb5c0c8c4c307a140facd215d254401f9e608acb726dd347cb626a41729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3bdcb5c0c8c4c307a140facd215d254401f9e608acb726dd347cb626a41729->enter($__internal_6d3bdcb5c0c8c4c307a140facd215d254401f9e608acb726dd347cb626a41729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_47f78ca0c5f11f7fd3de1c52c9fb1f32193942d30b968622ecab8f6728703927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f78ca0c5f11f7fd3de1c52c9fb1f32193942d30b968622ecab8f6728703927->enter($__internal_47f78ca0c5f11f7fd3de1c52c9fb1f32193942d30b968622ecab8f6728703927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_47f78ca0c5f11f7fd3de1c52c9fb1f32193942d30b968622ecab8f6728703927->leave($__internal_47f78ca0c5f11f7fd3de1c52c9fb1f32193942d30b968622ecab8f6728703927_prof);

        
        $__internal_6d3bdcb5c0c8c4c307a140facd215d254401f9e608acb726dd347cb626a41729->leave($__internal_6d3bdcb5c0c8c4c307a140facd215d254401f9e608acb726dd347cb626a41729_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_d542112b2c142dbf518686dc0e50ef18826c9905f041a80a5c1b1feea967d384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d542112b2c142dbf518686dc0e50ef18826c9905f041a80a5c1b1feea967d384->enter($__internal_d542112b2c142dbf518686dc0e50ef18826c9905f041a80a5c1b1feea967d384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_80f93ab69a57f750b5b8fc95f353b506d6eb08d94c1ecbce1b5bcb5b07cb30c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f93ab69a57f750b5b8fc95f353b506d6eb08d94c1ecbce1b5bcb5b07cb30c6->enter($__internal_80f93ab69a57f750b5b8fc95f353b506d6eb08d94c1ecbce1b5bcb5b07cb30c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_80f93ab69a57f750b5b8fc95f353b506d6eb08d94c1ecbce1b5bcb5b07cb30c6->leave($__internal_80f93ab69a57f750b5b8fc95f353b506d6eb08d94c1ecbce1b5bcb5b07cb30c6_prof);

        
        $__internal_d542112b2c142dbf518686dc0e50ef18826c9905f041a80a5c1b1feea967d384->leave($__internal_d542112b2c142dbf518686dc0e50ef18826c9905f041a80a5c1b1feea967d384_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend:index.html.twig";
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

", "FixBundle:Frontend:index.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\index.html.twig");
    }
}
