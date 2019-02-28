<?php

/* @Fix/Frontend/Default/featured_job_list.html.twig */
class __TwigTemplate_f1643be25c31bfd813975d5ec0d0b0c1d84ee18069b4d3b7d8f6a7295f933782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/featured_job_list.html.twig", 1);
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
        $__internal_a49f07b4be618d93f27fd8fe6c837764d6212760e74d2bebc2bf792d11bd23fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49f07b4be618d93f27fd8fe6c837764d6212760e74d2bebc2bf792d11bd23fd->enter($__internal_a49f07b4be618d93f27fd8fe6c837764d6212760e74d2bebc2bf792d11bd23fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/featured_job_list.html.twig"));

        $__internal_3b6aab85f321bff625e871047b2eedb9002688f5f463cce215ffdc95c3b49d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6aab85f321bff625e871047b2eedb9002688f5f463cce215ffdc95c3b49d30->enter($__internal_3b6aab85f321bff625e871047b2eedb9002688f5f463cce215ffdc95c3b49d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/featured_job_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49f07b4be618d93f27fd8fe6c837764d6212760e74d2bebc2bf792d11bd23fd->leave($__internal_a49f07b4be618d93f27fd8fe6c837764d6212760e74d2bebc2bf792d11bd23fd_prof);

        
        $__internal_3b6aab85f321bff625e871047b2eedb9002688f5f463cce215ffdc95c3b49d30->leave($__internal_3b6aab85f321bff625e871047b2eedb9002688f5f463cce215ffdc95c3b49d30_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_4587e11dbcad8d8a1ff59d537b47c22933eff32ed47be3020623d34879d8ff2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4587e11dbcad8d8a1ff59d537b47c22933eff32ed47be3020623d34879d8ff2e->enter($__internal_4587e11dbcad8d8a1ff59d537b47c22933eff32ed47be3020623d34879d8ff2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ba986f93d839911d23569ce339b38805df1842d0900f3e15c0c68191146de92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba986f93d839911d23569ce339b38805df1842d0900f3e15c0c68191146de92e->enter($__internal_ba986f93d839911d23569ce339b38805df1842d0900f3e15c0c68191146de92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_ba986f93d839911d23569ce339b38805df1842d0900f3e15c0c68191146de92e->leave($__internal_ba986f93d839911d23569ce339b38805df1842d0900f3e15c0c68191146de92e_prof);

        
        $__internal_4587e11dbcad8d8a1ff59d537b47c22933eff32ed47be3020623d34879d8ff2e->leave($__internal_4587e11dbcad8d8a1ff59d537b47c22933eff32ed47be3020623d34879d8ff2e_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_b32de9aee8c2dde9ad1195d2c412f84174a698fae816dea999691431151c665c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32de9aee8c2dde9ad1195d2c412f84174a698fae816dea999691431151c665c->enter($__internal_b32de9aee8c2dde9ad1195d2c412f84174a698fae816dea999691431151c665c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_e1ef4a9e8162fafae51b164f88f8011f9fe8f054b99046a498ce8f42d71fd831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ef4a9e8162fafae51b164f88f8011f9fe8f054b99046a498ce8f42d71fd831->enter($__internal_e1ef4a9e8162fafae51b164f88f8011f9fe8f054b99046a498ce8f42d71fd831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\">
                                  <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 25
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
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                                  <li><a href=\"";
        // line 38
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
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_YourPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
                                  <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_OtherPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 54
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
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_CompanyList");
        echo "\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                                  <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddCompany");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 71
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
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Deposits");
        echo "\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                                  <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Withdrawals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payementmethod");
        echo "\">
                                  <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Numbership");
        echo "\">
                                  <i class=\"fa fa-credit-card\"></i> <span>Membership</span>
                              </a>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li class=\"treeview active\">
                              <a href=\"#\">
                                  <i class=\"fa fa-external-link-square\"></i> <span>Feature a Job</span>
                                  <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                              </a>
                              <ul class=\"treeview-menu\">
                                  <li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Job_List");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a></li>
                                  <li><a href=\"";
        // line 115
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
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Profiles");
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a></li>
                                  <li><a href=\"";
        // line 127
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
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Companies");
        echo "\"><i class=\"fa fa-circle-o\"></i> Companies Featured List</a></li>
                                  <li><a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your Companies </a></li>
                              </ul>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li>
                              <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\">
                                  <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile_Image");
        echo "\">
                                  <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Password");
        echo "\">
                                  <i class=\"fa fa-lock\"></i> <span>Change Password</span>
                              </a>
                          </li>
                      </ul>

                  </div>

                  <div class=\"col-sm-8 col-md-9\">

                      <div class=\"box\">
                          <div class=\"box-header\">
                              <h3 class=\"box-title\">Your Jobs Featured</h3>
                          </div><!-- /.box-header -->
                          <div class=\"box-body\">
                              <div class=\"table-responsive\">
                                  <table id=\"example1\" class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>Job Title</th>
                                          <th>Days Featured</th>
                                          <th>Cost</th>
                                          <th>Clicks</th>
                                          <th>Views</th>
                                          <th>Active</th>
                                          <th>Date Started</th>
                                          <th>Date to End</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td><a href=\"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">I need a designer to design a logo & questionnaire for a Nutrition Company</a></td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Still Active</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td><a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Professional writer required</a></td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Still Active</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td><a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Content Writers Needed</a></td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Ended</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td><a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Website Design</a></td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Ended</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>Job Title</th>
                                          <th>Days Featured</th>
                                          <th>Cost</th>
                                          <th>Clicks</th>
                                          <th>Views</th>
                                          <th>Active</th>
                                          <th>Date Started</th>
                                          <th>Date to End</th>
                                      </tr>
                                      </tfoot>
                                  </table>
                              </div><!-- /.table-responsive -->
                          </div><!-- /.box-body -->
                      </div><!-- /.box -->




                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  ";
        
        $__internal_e1ef4a9e8162fafae51b164f88f8011f9fe8f054b99046a498ce8f42d71fd831->leave($__internal_e1ef4a9e8162fafae51b164f88f8011f9fe8f054b99046a498ce8f42d71fd831_prof);

        
        $__internal_b32de9aee8c2dde9ad1195d2c412f84174a698fae816dea999691431151c665c->leave($__internal_b32de9aee8c2dde9ad1195d2c412f84174a698fae816dea999691431151c665c_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/featured_job_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 217,  352 => 207,  339 => 197,  326 => 187,  292 => 156,  284 => 151,  276 => 146,  266 => 139,  262 => 138,  248 => 127,  244 => 126,  230 => 115,  226 => 114,  208 => 99,  200 => 94,  193 => 90,  189 => 89,  168 => 71,  161 => 67,  157 => 66,  142 => 54,  135 => 50,  131 => 49,  117 => 38,  113 => 37,  98 => 25,  90 => 20,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                          <li class=\"treeview active\">
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

                  <div class=\"col-sm-8 col-md-9\">

                      <div class=\"box\">
                          <div class=\"box-header\">
                              <h3 class=\"box-title\">Your Jobs Featured</h3>
                          </div><!-- /.box-header -->
                          <div class=\"box-body\">
                              <div class=\"table-responsive\">
                                  <table id=\"example1\" class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>Job Title</th>
                                          <th>Days Featured</th>
                                          <th>Cost</th>
                                          <th>Clicks</th>
                                          <th>Views</th>
                                          <th>Active</th>
                                          <th>Date Started</th>
                                          <th>Date to End</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td><a href=\"{{ path('template_Jobpost') }}\">I need a designer to design a logo & questionnaire for a Nutrition Company</a></td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Still Active</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td><a href=\"{{ path('template_Jobpost') }}\">Professional writer required</a></td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Still Active</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td><a href=\"{{ path('template_Jobpost') }}\">Content Writers Needed</a></td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Ended</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td><a href=\"{{ path('template_Jobpost') }}\">Website Design</a></td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Ended</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>Job Title</th>
                                          <th>Days Featured</th>
                                          <th>Cost</th>
                                          <th>Clicks</th>
                                          <th>Views</th>
                                          <th>Active</th>
                                          <th>Date Started</th>
                                          <th>Date to End</th>
                                      </tr>
                                      </tfoot>
                                  </table>
                              </div><!-- /.table-responsive -->
                          </div><!-- /.box-body -->
                      </div><!-- /.box -->




                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  {% endblock %}", "@Fix/Frontend/Default/featured_job_list.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\featured_job_list.html.twig");
    }
}
