<?php

/* @Fix/Frontend/Default/nembership.html.twig */
class __TwigTemplate_99a2d42235516a3e6df0564573ac9b71385b361392d6bc8024eb9a5746958606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/nembership.html.twig", 1);
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
        $__internal_4576f02039e4ddd9031ec70f69ddb08b70a737d267509a34273f52a081a438bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4576f02039e4ddd9031ec70f69ddb08b70a737d267509a34273f52a081a438bd->enter($__internal_4576f02039e4ddd9031ec70f69ddb08b70a737d267509a34273f52a081a438bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/nembership.html.twig"));

        $__internal_a8591280d66b4c9f0f60a0527ec5acbe7093f372255eff4ddf22b8fc687ed37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8591280d66b4c9f0f60a0527ec5acbe7093f372255eff4ddf22b8fc687ed37b->enter($__internal_a8591280d66b4c9f0f60a0527ec5acbe7093f372255eff4ddf22b8fc687ed37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/nembership.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4576f02039e4ddd9031ec70f69ddb08b70a737d267509a34273f52a081a438bd->leave($__internal_4576f02039e4ddd9031ec70f69ddb08b70a737d267509a34273f52a081a438bd_prof);

        
        $__internal_a8591280d66b4c9f0f60a0527ec5acbe7093f372255eff4ddf22b8fc687ed37b->leave($__internal_a8591280d66b4c9f0f60a0527ec5acbe7093f372255eff4ddf22b8fc687ed37b_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_48e8748dbd91d22a83c0340b65eaab7da9d9a59f4a08cba889759d69fdefea56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e8748dbd91d22a83c0340b65eaab7da9d9a59f4a08cba889759d69fdefea56->enter($__internal_48e8748dbd91d22a83c0340b65eaab7da9d9a59f4a08cba889759d69fdefea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_bcc193bba522d993b36b050d34fb15d2bd1235e840aa9f4c465c6aebdf192f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc193bba522d993b36b050d34fb15d2bd1235e840aa9f4c465c6aebdf192f9e->enter($__internal_bcc193bba522d993b36b050d34fb15d2bd1235e840aa9f4c465c6aebdf192f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_bcc193bba522d993b36b050d34fb15d2bd1235e840aa9f4c465c6aebdf192f9e->leave($__internal_bcc193bba522d993b36b050d34fb15d2bd1235e840aa9f4c465c6aebdf192f9e_prof);

        
        $__internal_48e8748dbd91d22a83c0340b65eaab7da9d9a59f4a08cba889759d69fdefea56->leave($__internal_48e8748dbd91d22a83c0340b65eaab7da9d9a59f4a08cba889759d69fdefea56_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_f9a3d7eea322da41b8bca38e3272ab965c5740d879cd03097f2268f7f0060335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a3d7eea322da41b8bca38e3272ab965c5740d879cd03097f2268f7f0060335->enter($__internal_f9a3d7eea322da41b8bca38e3272ab965c5740d879cd03097f2268f7f0060335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_24320046486cc5432636681ea3ab7421b0b966de64f81b3aae47ccdd187efc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24320046486cc5432636681ea3ab7421b0b966de64f81b3aae47ccdd187efc0b->enter($__internal_24320046486cc5432636681ea3ab7421b0b966de64f81b3aae47ccdd187efc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      <body>

      <section class=\"dashboard section-padding\">
          <div class=\"container\">
              <div class=\"row\">

                  <div class=\"col-sm-4 col-md-3\">

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li>
                              <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\">
                                  <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 21
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
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                                  <li><a href=\"";
        // line 34
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
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_YourPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
                                  <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_OtherPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 50
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
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_CompanyList");
        echo "\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                                  <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddCompany");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 67
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
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Deposits");
        echo "\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                                  <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Withdrawals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payementmethod");
        echo "\">
                                  <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                              </a>
                          </li>
                          <li class=\"active\">
                              <a href=\"";
        // line 95
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
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Job_List");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a></li>
                                  <li><a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_A_Job");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature a Job</a></li>
                              </ul>
                          </li>
                          <li class=\"treeview\">
                              <a href=\"#\">
                                  <i class=\"fa fa-external-link-square\"></i> <span>Feature a Profile</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Profiles");
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a></li>
                                  <li><a href=\"";
        // line 123
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
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Companies");
        echo "\"><i class=\"fa fa-circle-o\"></i> Companies Featured List</a></li>
                                  <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your Companies </a></li>
                              </ul>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li>
                              <a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\">
                                  <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile_Image");
        echo "\">
                                  <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Password");
        echo "\">
                                  <i class=\"fa fa-lock\"></i> <span>Change Password</span>
                              </a>
                          </li>
                      </ul>

                  </div>

                  <div class=\"col-sm-8 col-md-9 pricing-plan\">

                      <div class=\"col-lg-6\">
                          <div class=\"pricing-box\">
                              <h6>Basic Package</h6>
                              <div class=\"price\">
                                  <sup>\$</sup>0
                                  <span>per month</span>
                              </div>
                              <hr>
                              <p>Bids - <strong>10</strong></p>
                              <p>Job Fee - <strong>8.95%</strong></p>
                              <br>
                              <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                          </div>
                      </div>

                      <div class=\"col-lg-6\">
                          <div class=\"pricing-box\">
                              <h6>Medium Package</h6>
                              <div class=\"price\">
                                  <sup>\$</sup>10
                                  <span>per month</span>
                              </div>
                              <hr>
                              <p>Bids - <strong>50</strong></p>
                              <p>Job Fee - <strong>8.20%</strong></p>
                              <br>
                              <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                          </div>
                      </div>

                      <div class=\"col-lg-6\">
                          <div class=\"pricing-box\">
                              <h6>Ultimate Package</h6>
                              <div class=\"price\">
                                  <sup>\$</sup>20
                                  <span>per month</span>
                              </div>
                              <hr>
                              <p>Bids - <strong>100</strong></p>
                              <p>Job Fee - <strong>7.20%</strong></p>
                              <br>
                              <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                          </div>
                      </div>

                      <div class=\"col-lg-6\">
                          <div class=\"pricing-box\">
                              <h6>Yearly Package</h6>
                              <div class=\"price\">
                                  <sup>\$</sup>2000
                                  <span>per Year</span>
                              </div>
                              <hr>
                              <p>Bids - <strong>4000</strong></p>
                              <p>Job Fee - <strong>5.20%</strong></p>
                              <br>
                              <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                          </div>
                      </div>

                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  ";
        
        $__internal_24320046486cc5432636681ea3ab7421b0b966de64f81b3aae47ccdd187efc0b->leave($__internal_24320046486cc5432636681ea3ab7421b0b966de64f81b3aae47ccdd187efc0b_prof);

        
        $__internal_f9a3d7eea322da41b8bca38e3272ab965c5740d879cd03097f2268f7f0060335->leave($__internal_f9a3d7eea322da41b8bca38e3272ab965c5740d879cd03097f2268f7f0060335_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/nembership.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 152,  278 => 147,  270 => 142,  260 => 135,  256 => 134,  242 => 123,  238 => 122,  224 => 111,  220 => 110,  202 => 95,  194 => 90,  187 => 86,  183 => 85,  162 => 67,  155 => 63,  151 => 62,  136 => 50,  129 => 46,  125 => 45,  111 => 34,  107 => 33,  92 => 21,  84 => 16,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                          <li class=\"active\">
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
                          <li class=\"treeview\">
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

                  <div class=\"col-sm-8 col-md-9 pricing-plan\">

                      <div class=\"col-lg-6\">
                          <div class=\"pricing-box\">
                              <h6>Basic Package</h6>
                              <div class=\"price\">
                                  <sup>\$</sup>0
                                  <span>per month</span>
                              </div>
                              <hr>
                              <p>Bids - <strong>10</strong></p>
                              <p>Job Fee - <strong>8.95%</strong></p>
                              <br>
                              <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                          </div>
                      </div>

                      <div class=\"col-lg-6\">
                          <div class=\"pricing-box\">
                              <h6>Medium Package</h6>
                              <div class=\"price\">
                                  <sup>\$</sup>10
                                  <span>per month</span>
                              </div>
                              <hr>
                              <p>Bids - <strong>50</strong></p>
                              <p>Job Fee - <strong>8.20%</strong></p>
                              <br>
                              <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                          </div>
                      </div>

                      <div class=\"col-lg-6\">
                          <div class=\"pricing-box\">
                              <h6>Ultimate Package</h6>
                              <div class=\"price\">
                                  <sup>\$</sup>20
                                  <span>per month</span>
                              </div>
                              <hr>
                              <p>Bids - <strong>100</strong></p>
                              <p>Job Fee - <strong>7.20%</strong></p>
                              <br>
                              <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                          </div>
                      </div>

                      <div class=\"col-lg-6\">
                          <div class=\"pricing-box\">
                              <h6>Yearly Package</h6>
                              <div class=\"price\">
                                  <sup>\$</sup>2000
                                  <span>per Year</span>
                              </div>
                              <hr>
                              <p>Bids - <strong>4000</strong></p>
                              <p>Job Fee - <strong>5.20%</strong></p>
                              <br>
                              <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                          </div>
                      </div>

                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  {% endblock %}", "@Fix/Frontend/Default/nembership.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\nembership.html.twig");
    }
}
