<?php

/* @Fix/Frontend/Default/companyList.html.twig */
class __TwigTemplate_e4b267fe1c82e213a94d321ce2045693e1a75758c1a04645ec50f40daa0864d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/companyList.html.twig", 1);
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
        $__internal_28fba1162c611b3f97815dffb7170e3634826746a94dcbdf9fe37c76f8b724d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fba1162c611b3f97815dffb7170e3634826746a94dcbdf9fe37c76f8b724d8->enter($__internal_28fba1162c611b3f97815dffb7170e3634826746a94dcbdf9fe37c76f8b724d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/companyList.html.twig"));

        $__internal_0b0eef75d4ad66b8c640716b42da11a4b6eda87e165debde3ac65a13402215f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0eef75d4ad66b8c640716b42da11a4b6eda87e165debde3ac65a13402215f1->enter($__internal_0b0eef75d4ad66b8c640716b42da11a4b6eda87e165debde3ac65a13402215f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/companyList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28fba1162c611b3f97815dffb7170e3634826746a94dcbdf9fe37c76f8b724d8->leave($__internal_28fba1162c611b3f97815dffb7170e3634826746a94dcbdf9fe37c76f8b724d8_prof);

        
        $__internal_0b0eef75d4ad66b8c640716b42da11a4b6eda87e165debde3ac65a13402215f1->leave($__internal_0b0eef75d4ad66b8c640716b42da11a4b6eda87e165debde3ac65a13402215f1_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_2c808544338f847b622c82a81cb0aed764981b97fca7043c6f6137d1cadd0bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c808544338f847b622c82a81cb0aed764981b97fca7043c6f6137d1cadd0bdf->enter($__internal_2c808544338f847b622c82a81cb0aed764981b97fca7043c6f6137d1cadd0bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d8fb9fb8cd4427dc533508da5cd01d6d1917d8f0dc86474825397f9699185918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fb9fb8cd4427dc533508da5cd01d6d1917d8f0dc86474825397f9699185918->enter($__internal_d8fb9fb8cd4427dc533508da5cd01d6d1917d8f0dc86474825397f9699185918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_d8fb9fb8cd4427dc533508da5cd01d6d1917d8f0dc86474825397f9699185918->leave($__internal_d8fb9fb8cd4427dc533508da5cd01d6d1917d8f0dc86474825397f9699185918_prof);

        
        $__internal_2c808544338f847b622c82a81cb0aed764981b97fca7043c6f6137d1cadd0bdf->leave($__internal_2c808544338f847b622c82a81cb0aed764981b97fca7043c6f6137d1cadd0bdf_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_b158ff25f6991ab344763b5afa37c6c3c6122d5f278fa518143f36399a4faf0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b158ff25f6991ab344763b5afa37c6c3c6122d5f278fa518143f36399a4faf0f->enter($__internal_b158ff25f6991ab344763b5afa37c6c3c6122d5f278fa518143f36399a4faf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_f3d5040537a59b01d9308dd38416672d8e36d16420218c3a5263352a78d4ef73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d5040537a59b01d9308dd38416672d8e36d16420218c3a5263352a78d4ef73->enter($__internal_f3d5040537a59b01d9308dd38416672d8e36d16420218c3a5263352a78d4ef73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\">
                              <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                          </a>
                      </li>
                      <li>
                          <a href=\"";
        // line 24
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
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a>
                              </li>
                              <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddJob");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Job</a>
                              </li>
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
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_YourPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Your
                                      Proposals</a></li>
                              <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_OtherPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Other
                                      Proposals</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Offers");
        echo "\">
                              <i class=\"fa fa-file\"></i> <span>Offers</span>
                          </a>
                      </li>
                      <li class=\"treeview active\">
                          <a href=\"#\">
                              <i class=\"fa fa-copyright\"></i> <span>Companies</span>
                              <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                          </a>
                          <ul class=\"treeview-menu\">
                              <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_CompanyList");
        echo "\"><i class=\"fa fa-circle-o\"></i> Company
                                      List</a></li>
                              <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddCompany");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href=\"";
        // line 75
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
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Deposits");
        echo "\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                              <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Withdrawals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payementmethod");
        echo "\">
                              <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                          </a>
                      </li>
                      <li>
                          <a href=\"";
        // line 103
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
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Job_List");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a>
                              </li>
                              <li><a href=\"";
        // line 120
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
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Profiles");
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a>
                              </li>
                              <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Profile");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your
                                      Profile </a></li>
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
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Companies");
        echo "\"><i class=\"fa fa-circle-o\"></i> Companies Featured
                                      List</a></li>
                              <li><a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your
                                      Companies </a></li>
                          </ul>
                      </li>
                  </ul>

                  <ul class=\"sidebar-menu\" data-widget=\"tree\">
                      <li>
                          <a href=\"";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\">
                              <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                          </a>
                      </li>
                      <li>
                          <a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile_Image");
        echo "\">
                              <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                          </a>
                      </li>
                      <li>
                          <a href=\"";
        // line 165
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
                          <h3 class=\"box-title\">Company List</h3>
                      </div><!-- /.box-header -->
                      <div class=\"box-body\">
                          <div class=\"table-responsive\">
                              <div class=\"row\">
                                  <div class=\"col-sm-6\">
                                      <div class=\"dataTables_length\" id=\"example1_length\">
                                          <label class=\"slider-tick-label-container\">
                                              Show
                                              <select
                                                      name=\"example1_length\"
                                                      class=\"form-control input-sm\">
                                                  <option value=\"10\">10</option>
                                                  <option value=\"25\">25</option>
                                                  <option value=\"50\">50</option>
                                                  <option value=\"100\">100</option>
                                              </select>
                                              entries
                                          </label>
                                      </div>
                                  </div>
                                  <div class=\"col-sm-6\">
                                      <div id=\"example1_filter\" class=\"dataTables_filter\"><label>Search:<input
                                                      type=\"search\" class=\"form-control input-sm\" placeholder=\"\"
                                                      aria-controls=\"example1\"></label></div>
                                  </div>
                              </div>
                              <table id=\"example1\" class=\"table table-bordered table-hover\">
                                  <thead>
                                  <tr>
                                      <th>Image & Name</th>
                                      <th>Privacy</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>
                                          <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\"
                                               class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\"
                                               alt=\"Image\"/>
                                          <a href=\"";
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\">The Masha Brand</a>
                                      </td>
                                      <td><span class=\"label label-mint\">Public</span></td>
                                      <td>
                                          <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span
                                                      class=\"fa fa-edit\"></span></a>
                                          <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\"
                                             title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\"
                                             title=\"Make it Private\"><span class=\"fa fa-lock\"></span></a></td>
                                  </tr>
                                  </tbody>
                                  <tfoot>
                                  <tr>
                                      <th>Image & Name</th>
                                      <th>Privacy</th>
                                      <th>Action</th>
                                  </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div><!-- /.box-body -->
                  </div><!-- /.box -->


              </div><!-- /.col-md-9 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  ";
        
        $__internal_f3d5040537a59b01d9308dd38416672d8e36d16420218c3a5263352a78d4ef73->leave($__internal_f3d5040537a59b01d9308dd38416672d8e36d16420218c3a5263352a78d4ef73_prof);

        
        $__internal_b158ff25f6991ab344763b5afa37c6c3c6122d5f278fa518143f36399a4faf0f->leave($__internal_b158ff25f6991ab344763b5afa37c6c3c6122d5f278fa518143f36399a4faf0f_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/companyList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 218,  354 => 215,  301 => 165,  293 => 160,  285 => 155,  274 => 147,  269 => 145,  254 => 133,  249 => 131,  235 => 120,  230 => 118,  212 => 103,  204 => 98,  197 => 94,  193 => 93,  172 => 75,  165 => 71,  160 => 69,  145 => 57,  137 => 52,  132 => 50,  117 => 38,  112 => 36,  97 => 24,  89 => 19,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block header %}
    {{ parent() }}
{% endblock %}
  {% block container %}
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
                              <li><a href=\"{{ path('template_JobPasted') }}\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a>
                              </li>
                              <li><a href=\"{{ path('template_AddJob') }}\"><i class=\"fa fa-circle-o\"></i> Add a Job</a>
                              </li>
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
                              <li><a href=\"{{ path('template_YourPorposals') }}\"><i class=\"fa fa-circle-o\"></i> Your
                                      Proposals</a></li>
                              <li><a href=\"{{ path('template_OtherPorposals') }}\"><i class=\"fa fa-circle-o\"></i> Other
                                      Proposals</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href=\"{{ path('template_Offers') }}\">
                              <i class=\"fa fa-file\"></i> <span>Offers</span>
                          </a>
                      </li>
                      <li class=\"treeview active\">
                          <a href=\"#\">
                              <i class=\"fa fa-copyright\"></i> <span>Companies</span>
                              <span class=\"pull-right-container\">
\t\t\t\t  <i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t</span>
                          </a>
                          <ul class=\"treeview-menu\">
                              <li><a href=\"{{ path('template_CompanyList') }}\"><i class=\"fa fa-circle-o\"></i> Company
                                      List</a></li>
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
                              <li><a href=\"{{ path('template_Featured_Job_List') }}\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a>
                              </li>
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
                              <li><a href=\"{{ path('template_Featured_Profiles') }}\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a>
                              </li>
                              <li><a href=\"{{ path('template_Featured_Your_Profile') }}\"><i class=\"fa fa-circle-o\"></i> Feature your
                                      Profile </a></li>
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
                              <li><a href=\"{{ path('template_Featured_Companies') }}\"><i class=\"fa fa-circle-o\"></i> Companies Featured
                                      List</a></li>
                              <li><a href=\"{{ path('template_Featured_Your_Company') }}\"><i class=\"fa fa-circle-o\"></i> Feature your
                                      Companies </a></li>
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
                          <h3 class=\"box-title\">Company List</h3>
                      </div><!-- /.box-header -->
                      <div class=\"box-body\">
                          <div class=\"table-responsive\">
                              <div class=\"row\">
                                  <div class=\"col-sm-6\">
                                      <div class=\"dataTables_length\" id=\"example1_length\">
                                          <label class=\"slider-tick-label-container\">
                                              Show
                                              <select
                                                      name=\"example1_length\"
                                                      class=\"form-control input-sm\">
                                                  <option value=\"10\">10</option>
                                                  <option value=\"25\">25</option>
                                                  <option value=\"50\">50</option>
                                                  <option value=\"100\">100</option>
                                              </select>
                                              entries
                                          </label>
                                      </div>
                                  </div>
                                  <div class=\"col-sm-6\">
                                      <div id=\"example1_filter\" class=\"dataTables_filter\"><label>Search:<input
                                                      type=\"search\" class=\"form-control input-sm\" placeholder=\"\"
                                                      aria-controls=\"example1\"></label></div>
                                  </div>
                              </div>
                              <table id=\"example1\" class=\"table table-bordered table-hover\">
                                  <thead>
                                  <tr>
                                      <th>Image & Name</th>
                                      <th>Privacy</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>
                                          <img src=\"{{ asset('img/logo.jpg') }}\"
                                               class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\"
                                               alt=\"Image\"/>
                                          <a href=\"{{ path('template_Company') }}\">The Masha Brand</a>
                                      </td>
                                      <td><span class=\"label label-mint\">Public</span></td>
                                      <td>
                                          <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span
                                                      class=\"fa fa-edit\"></span></a>
                                          <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\"
                                             title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\"
                                             title=\"Make it Private\"><span class=\"fa fa-lock\"></span></a></td>
                                  </tr>
                                  </tbody>
                                  <tfoot>
                                  <tr>
                                      <th>Image & Name</th>
                                      <th>Privacy</th>
                                      <th>Action</th>
                                  </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div><!-- /.box-body -->
                  </div><!-- /.box -->


              </div><!-- /.col-md-9 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  {% endblock %}", "@Fix/Frontend/Default/companyList.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\companyList.html.twig");
    }
}
