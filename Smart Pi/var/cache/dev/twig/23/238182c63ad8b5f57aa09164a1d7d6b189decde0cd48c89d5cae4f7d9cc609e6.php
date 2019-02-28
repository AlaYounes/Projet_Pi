<?php

/* @Fix/Frontend/Default/featured-your-profile.html.twig */
class __TwigTemplate_be791c2bfe9787285ff41894667eb854348f95d59edc98c4ed1213be7be21528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/featured-your-profile.html.twig", 1);
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
        $__internal_8ee4742e266d3efaa336444b5e616334ed23661ce967fe8cdd2b44ad106397ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee4742e266d3efaa336444b5e616334ed23661ce967fe8cdd2b44ad106397ac->enter($__internal_8ee4742e266d3efaa336444b5e616334ed23661ce967fe8cdd2b44ad106397ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/featured-your-profile.html.twig"));

        $__internal_8f215f22eb8c1ae7136ff41828979dc01790c63891d89e1f21b7b1d2fe674872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f215f22eb8c1ae7136ff41828979dc01790c63891d89e1f21b7b1d2fe674872->enter($__internal_8f215f22eb8c1ae7136ff41828979dc01790c63891d89e1f21b7b1d2fe674872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/featured-your-profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ee4742e266d3efaa336444b5e616334ed23661ce967fe8cdd2b44ad106397ac->leave($__internal_8ee4742e266d3efaa336444b5e616334ed23661ce967fe8cdd2b44ad106397ac_prof);

        
        $__internal_8f215f22eb8c1ae7136ff41828979dc01790c63891d89e1f21b7b1d2fe674872->leave($__internal_8f215f22eb8c1ae7136ff41828979dc01790c63891d89e1f21b7b1d2fe674872_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_f274ad9ae0fe2a40abb52816f0296c8586296a19d0c7c43318fcfe5f00f0fb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f274ad9ae0fe2a40abb52816f0296c8586296a19d0c7c43318fcfe5f00f0fb77->enter($__internal_f274ad9ae0fe2a40abb52816f0296c8586296a19d0c7c43318fcfe5f00f0fb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7ee7a0f45f438ebd6f6d3b264c1faa45785785b6ca67523a021e11cfd71826f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee7a0f45f438ebd6f6d3b264c1faa45785785b6ca67523a021e11cfd71826f0->enter($__internal_7ee7a0f45f438ebd6f6d3b264c1faa45785785b6ca67523a021e11cfd71826f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_7ee7a0f45f438ebd6f6d3b264c1faa45785785b6ca67523a021e11cfd71826f0->leave($__internal_7ee7a0f45f438ebd6f6d3b264c1faa45785785b6ca67523a021e11cfd71826f0_prof);

        
        $__internal_f274ad9ae0fe2a40abb52816f0296c8586296a19d0c7c43318fcfe5f00f0fb77->leave($__internal_f274ad9ae0fe2a40abb52816f0296c8586296a19d0c7c43318fcfe5f00f0fb77_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_1de1a2038d0898ec8f25cdbb98517d9c553b5d4c62293d0f079004484329b427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de1a2038d0898ec8f25cdbb98517d9c553b5d4c62293d0f079004484329b427->enter($__internal_1de1a2038d0898ec8f25cdbb98517d9c553b5d4c62293d0f079004484329b427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_69466ca23063d71bc5c4a3e6f5bd09ad2937d4deaac0afdf060521d47e9db441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69466ca23063d71bc5c4a3e6f5bd09ad2937d4deaac0afdf060521d47e9db441->enter($__internal_69466ca23063d71bc5c4a3e6f5bd09ad2937d4deaac0afdf060521d47e9db441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "

      <body>

      <section class=\"dashboard section-padding\">
          <div class=\"container\">
              <div class=\"row\">

                  <div class=\"col-sm-4 col-md-3\">

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li>
                              <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\">
                                  <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Contract");
        echo "\">
                                  <i class=\"fa fa-align-left\"></i> <span>Contracts</span>
                              </a>
                          </li>
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-files-o\"></i> <span>Jobs</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                                  <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddJob");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Job</a></li>
                              </ul>
                          </li>
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-clone\"></i> <span>Proposals</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_YourPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
                                  <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_OtherPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Offers");
        echo "\">
                                  <i class=\"fa fa-file\"></i> <span>Offers</span>
                              </a>
                          </li>
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-copyright\"></i> <span>Companies</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_CompanyList");
        echo "\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                                  <li><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddCompany");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Message");
        echo "\">
                                  <i class=\"fa fa-envelope\"></i> <span>Messages</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <small class=\"label pull-right bg-green\">4</small>
\t\t\t\t</span>
                              </a>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-exchange\"></i> <span>Wallet</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Deposits");
        echo "\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                                  <li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Withdrawals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payementmethod");
        echo "\">
                                  <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Numbership");
        echo "\">
                                  <i class=\"fa fa-credit-card\"></i> <span>Membership</span>
                              </a>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-external-link-square\"></i> <span>Feature a Job</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Job_List");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a></li>
                                  <li><a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_A_Job");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature a Job</a></li>
                              </ul>
                          </li>
                          <li class=\"treeview active\">
                              <a href=\"#\">
                                  <i class=\"fa fa-external-link-square\"></i> <span>Feature a Profile</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Profiles");
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a></li>
                                  <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Profile");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your Profile </a></li>
                              </ul>
                          </li>
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-external-link-square\"></i> <span>Feature a Company</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Companies");
        echo "\"><i class=\"fa fa-circle-o\"></i> Companies Featured List</a></li>
                                  <li><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your Companies </a></li>
                              </ul>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li>
                              <a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\">
                                  <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile_Image");
        echo "\">
                                  <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Password");
        echo "\">
                                  <i class=\"fa fa-lock\"></i> <span>Change Password</span>
                              </a>
                          </li>
                      </ul>

                  </div>

                  <div class=\"col-sm-8 col-md-9\">

                      <div class=\"work-box\">
                          <div class=\"row\">
                              <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                  <div class=\"col-lg-12 middle-sec\" style=\"padding-top: 10px; padding-bottom:5px;\">
                                      <div class=\"col-lg-12\">
                                          <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                          <h3><a href=\"#\">Alex Grantte</a></h3>
                                          <h4><span class=\"label label-mint\">Your Profile</span></h4>
                                      </div><!-- .col-lg-3 -->
                                  </div>

                              </div><!-- .col-lg-12 -->
                          </div><!-- /.row -->
                      </div><!-- .work-box -->

                      <div class=\"job-box\">
                          <div class=\"job-header\">
                              <h4>Feature your Profile</h4>
                          </div>
                          <form method=\"post\" id=\"addform\">

                              <div class=\"form-group\">
                                  <label>Days for the ad to run.</label>
                                  <p>
                                      <a href=\"#\" class=\"unselected\">5 days</a>
                                      <a href=\"#\" class=\"unselected\">10 days</a>
                                      <a href=\"#\" class=\"selected\">15 days</a>
                                      <a href=\"#\" class=\"unselected\">1 month</a>
                                  </p>
                              </div>

                              <div class=\"form-group\">
                                  <label>Budget depending on the days you have choosen.</label>
                                  <p>
                                      <a href=\"#\" class=\"unselected\">\$15</a>
                                      <a href=\"#\" class=\"unselected\">\$35</a>
                                      <a href=\"#\" class=\"selected\">\$60</a>
                                      <a href=\"#\" class=\"unselected\">\$100</a>
                                  </p>
                              </div>

                              <button class=\"kafe-btn kafe-btn-mint-small full-width\">Proceed to Checkout</button>
                          </form>
                      </div><!-- /.job-box -->

                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  ";
        
        $__internal_69466ca23063d71bc5c4a3e6f5bd09ad2937d4deaac0afdf060521d47e9db441->leave($__internal_69466ca23063d71bc5c4a3e6f5bd09ad2937d4deaac0afdf060521d47e9db441_prof);

        
        $__internal_1de1a2038d0898ec8f25cdbb98517d9c553b5d4c62293d0f079004484329b427->leave($__internal_1de1a2038d0898ec8f25cdbb98517d9c553b5d4c62293d0f079004484329b427_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/featured-your-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 170,  290 => 154,  282 => 149,  274 => 144,  264 => 137,  260 => 136,  246 => 125,  242 => 124,  228 => 113,  224 => 112,  206 => 97,  198 => 92,  191 => 88,  187 => 87,  166 => 69,  159 => 65,  155 => 64,  140 => 52,  133 => 48,  129 => 47,  115 => 36,  111 => 35,  96 => 23,  88 => 18,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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

      <section class=\"dashboard section-padding\">
          <div class=\"container\">
              <div class=\"row\">

                  <div class=\"col-sm-4 col-md-3\">

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li>
                              <a href=\"{{ path('template_Dashboard') }}\">
                                  <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"{{ path('template_Contract') }}\">
                                  <i class=\"fa fa-align-left\"></i> <span>Contracts</span>
                              </a>
                          </li>
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-files-o\"></i> <span>Jobs</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"{{ path('template_JobPasted') }}\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                                  <li><a href=\"{{ path('template_AddJob') }}\"><i class=\"fa fa-circle-o\"></i> Add a Job</a></li>
                              </ul>
                          </li>
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-clone\"></i> <span>Proposals</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"{{ path('template_YourPorposals') }}\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
                                  <li><a href=\"{{ path('template_OtherPorposals') }}\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"{{ path('template_Offers') }}\">
                                  <i class=\"fa fa-file\"></i> <span>Offers</span>
                              </a>
                          </li>
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-copyright\"></i> <span>Companies</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"{{ path('template_CompanyList') }}\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                                  <li><a href=\"{{ path('template_AddCompany') }}\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"{{ path('template_Message') }}\">
                                  <i class=\"fa fa-envelope\"></i> <span>Messages</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <small class=\"label pull-right bg-green\">4</small>
\t\t\t\t</span>
                              </a>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-exchange\"></i> <span>Wallet</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"{{ path('template_Deposits') }}\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                                  <li><a href=\"{{ path('template_Withdrawals') }}\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"{{ path('template_Payementmethod') }}\">
                                  <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"{{ path('template_Numbership') }}\">
                                  <i class=\"fa fa-credit-card\"></i> <span>Membership</span>
                              </a>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-external-link-square\"></i> <span>Feature a Job</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"{{ path('template_Featured_Job_List') }}\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a></li>
                                  <li><a href=\"{{ path('template_Featured_A_Job') }}\"><i class=\"fa fa-circle-o\"></i> Feature a Job</a></li>
                              </ul>
                          </li>
                          <li class=\"treeview active\">
                              <a href=\"#\">
                                  <i class=\"fa fa-external-link-square\"></i> <span>Feature a Profile</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"{{ path('template_Featured_Profiles') }}\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a></li>
                                  <li><a href=\"{{ path('template_Featured_Your_Profile') }}\"><i class=\"fa fa-circle-o\"></i> Feature your Profile </a></li>
                              </ul>
                          </li>
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-external-link-square\"></i> <span>Feature a Company</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"{{ path('template_Featured_Companies') }}\"><i class=\"fa fa-circle-o\"></i> Companies Featured List</a></li>
                                  <li><a href=\"{{ path('template_Featured_Your_Company') }}\"><i class=\"fa fa-circle-o\"></i> Feature your Companies </a></li>
                              </ul>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li>
                              <a href=\"{{ path('template_EditProfile') }}\">
                                  <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"{{ path('template_Profile_Image') }}\">
                                  <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"{{ path('template_Password') }}\">
                                  <i class=\"fa fa-lock\"></i> <span>Change Password</span>
                              </a>
                          </li>
                      </ul>

                  </div>

                  <div class=\"col-sm-8 col-md-9\">

                      <div class=\"work-box\">
                          <div class=\"row\">
                              <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                  <div class=\"col-lg-12 middle-sec\" style=\"padding-top: 10px; padding-bottom:5px;\">
                                      <div class=\"col-lg-12\">
                                          <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                          <h3><a href=\"#\">Alex Grantte</a></h3>
                                          <h4><span class=\"label label-mint\">Your Profile</span></h4>
                                      </div><!-- .col-lg-3 -->
                                  </div>

                              </div><!-- .col-lg-12 -->
                          </div><!-- /.row -->
                      </div><!-- .work-box -->

                      <div class=\"job-box\">
                          <div class=\"job-header\">
                              <h4>Feature your Profile</h4>
                          </div>
                          <form method=\"post\" id=\"addform\">

                              <div class=\"form-group\">
                                  <label>Days for the ad to run.</label>
                                  <p>
                                      <a href=\"#\" class=\"unselected\">5 days</a>
                                      <a href=\"#\" class=\"unselected\">10 days</a>
                                      <a href=\"#\" class=\"selected\">15 days</a>
                                      <a href=\"#\" class=\"unselected\">1 month</a>
                                  </p>
                              </div>

                              <div class=\"form-group\">
                                  <label>Budget depending on the days you have choosen.</label>
                                  <p>
                                      <a href=\"#\" class=\"unselected\">\$15</a>
                                      <a href=\"#\" class=\"unselected\">\$35</a>
                                      <a href=\"#\" class=\"selected\">\$60</a>
                                      <a href=\"#\" class=\"unselected\">\$100</a>
                                  </p>
                              </div>

                              <button class=\"kafe-btn kafe-btn-mint-small full-width\">Proceed to Checkout</button>
                          </form>
                      </div><!-- /.job-box -->

                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  {% endblock %}", "@Fix/Frontend/Default/featured-your-profile.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\featured-your-profile.html.twig");
    }
}
