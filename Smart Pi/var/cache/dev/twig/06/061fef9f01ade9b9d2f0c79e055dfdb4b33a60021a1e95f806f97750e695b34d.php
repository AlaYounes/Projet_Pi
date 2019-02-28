<?php

/* FixBundle:Frontend/Default:companyList.html.twig */
class __TwigTemplate_97904ad903c38df99eb7a91ebef69c742299aeebd6d8cee1c73abb616a166e16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:companyList.html.twig", 1);
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
        $__internal_3077ce340847845873880f2692cd5b214daf32ebe2d71a0c5e43a9ff43728da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3077ce340847845873880f2692cd5b214daf32ebe2d71a0c5e43a9ff43728da3->enter($__internal_3077ce340847845873880f2692cd5b214daf32ebe2d71a0c5e43a9ff43728da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:companyList.html.twig"));

        $__internal_4cffc5adda95e827c19ad38918311e57bd39b06ce012be72822ba5b7955c0184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cffc5adda95e827c19ad38918311e57bd39b06ce012be72822ba5b7955c0184->enter($__internal_4cffc5adda95e827c19ad38918311e57bd39b06ce012be72822ba5b7955c0184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:companyList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3077ce340847845873880f2692cd5b214daf32ebe2d71a0c5e43a9ff43728da3->leave($__internal_3077ce340847845873880f2692cd5b214daf32ebe2d71a0c5e43a9ff43728da3_prof);

        
        $__internal_4cffc5adda95e827c19ad38918311e57bd39b06ce012be72822ba5b7955c0184->leave($__internal_4cffc5adda95e827c19ad38918311e57bd39b06ce012be72822ba5b7955c0184_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_cee2b68a5e83775cad6bf17ca007449f8ac0d08df80fc53da956fac260970bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee2b68a5e83775cad6bf17ca007449f8ac0d08df80fc53da956fac260970bfd->enter($__internal_cee2b68a5e83775cad6bf17ca007449f8ac0d08df80fc53da956fac260970bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_27f44722aeb78691171b3e065ec555fc3da4ad1480d9e7dd443487ec207e7896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f44722aeb78691171b3e065ec555fc3da4ad1480d9e7dd443487ec207e7896->enter($__internal_27f44722aeb78691171b3e065ec555fc3da4ad1480d9e7dd443487ec207e7896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_27f44722aeb78691171b3e065ec555fc3da4ad1480d9e7dd443487ec207e7896->leave($__internal_27f44722aeb78691171b3e065ec555fc3da4ad1480d9e7dd443487ec207e7896_prof);

        
        $__internal_cee2b68a5e83775cad6bf17ca007449f8ac0d08df80fc53da956fac260970bfd->leave($__internal_cee2b68a5e83775cad6bf17ca007449f8ac0d08df80fc53da956fac260970bfd_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_6ad7127c21709030f30ece17b54e4c9f30e4f22a4ec48a941fa1f984dff2d898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad7127c21709030f30ece17b54e4c9f30e4f22a4ec48a941fa1f984dff2d898->enter($__internal_6ad7127c21709030f30ece17b54e4c9f30e4f22a4ec48a941fa1f984dff2d898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_b1c228ae3729d88aaadea09f4897562fced747bbb7ef4c434234eb7fecfa7a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c228ae3729d88aaadea09f4897562fced747bbb7ef4c434234eb7fecfa7a43->enter($__internal_b1c228ae3729d88aaadea09f4897562fced747bbb7ef4c434234eb7fecfa7a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_b1c228ae3729d88aaadea09f4897562fced747bbb7ef4c434234eb7fecfa7a43->leave($__internal_b1c228ae3729d88aaadea09f4897562fced747bbb7ef4c434234eb7fecfa7a43_prof);

        
        $__internal_6ad7127c21709030f30ece17b54e4c9f30e4f22a4ec48a941fa1f984dff2d898->leave($__internal_6ad7127c21709030f30ece17b54e4c9f30e4f22a4ec48a941fa1f984dff2d898_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:companyList.html.twig";
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
  {% endblock %}", "FixBundle:Frontend/Default:companyList.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/companyList.html.twig");
    }
}
