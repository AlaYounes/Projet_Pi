<?php

/* @Fix/Frontend/Default/Timesheet.html.twig */
class __TwigTemplate_903d352dd3b343f1aae8f6698ba857b203d5554db17463c02c23f59e29a4da9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Timesheet.html.twig", 1);
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
        $__internal_18156580b77391e58a0c501ea6691b301d477c45b465f6316d1819ce7ffd78bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18156580b77391e58a0c501ea6691b301d477c45b465f6316d1819ce7ffd78bf->enter($__internal_18156580b77391e58a0c501ea6691b301d477c45b465f6316d1819ce7ffd78bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Timesheet.html.twig"));

        $__internal_91e37854834ac557ac120d4a818e8e261800b2b9f67e0aa012ff3f7143720471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e37854834ac557ac120d4a818e8e261800b2b9f67e0aa012ff3f7143720471->enter($__internal_91e37854834ac557ac120d4a818e8e261800b2b9f67e0aa012ff3f7143720471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Timesheet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18156580b77391e58a0c501ea6691b301d477c45b465f6316d1819ce7ffd78bf->leave($__internal_18156580b77391e58a0c501ea6691b301d477c45b465f6316d1819ce7ffd78bf_prof);

        
        $__internal_91e37854834ac557ac120d4a818e8e261800b2b9f67e0aa012ff3f7143720471->leave($__internal_91e37854834ac557ac120d4a818e8e261800b2b9f67e0aa012ff3f7143720471_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_b9f5363a0c94c8c565f55a1dede5f322d9d1f454b886506edb11bc3718bf91f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f5363a0c94c8c565f55a1dede5f322d9d1f454b886506edb11bc3718bf91f9->enter($__internal_b9f5363a0c94c8c565f55a1dede5f322d9d1f454b886506edb11bc3718bf91f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_17f372988eb03a451978989c5fe2216a148a5df65b285e9b4175dfd30453eb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f372988eb03a451978989c5fe2216a148a5df65b285e9b4175dfd30453eb3f->enter($__internal_17f372988eb03a451978989c5fe2216a148a5df65b285e9b4175dfd30453eb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_17f372988eb03a451978989c5fe2216a148a5df65b285e9b4175dfd30453eb3f->leave($__internal_17f372988eb03a451978989c5fe2216a148a5df65b285e9b4175dfd30453eb3f_prof);

        
        $__internal_b9f5363a0c94c8c565f55a1dede5f322d9d1f454b886506edb11bc3718bf91f9->leave($__internal_b9f5363a0c94c8c565f55a1dede5f322d9d1f454b886506edb11bc3718bf91f9_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_b9b78eb3546aa09fa30bd0ba0b29487b45511c0d3a242c7d487d7c56331306e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b78eb3546aa09fa30bd0ba0b29487b45511c0d3a242c7d487d7c56331306e7->enter($__internal_b9b78eb3546aa09fa30bd0ba0b29487b45511c0d3a242c7d487d7c56331306e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_ea10dc4401fc8a18fd762d86f84890b243ce3186f5756198cbe2b1b8a9f0d22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea10dc4401fc8a18fd762d86f84890b243ce3186f5756198cbe2b1b8a9f0d22e->enter($__internal_ea10dc4401fc8a18fd762d86f84890b243ce3186f5756198cbe2b1b8a9f0d22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                          <li class=\"active\">
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
                          <li>
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

                  <div class=\"col-sm-8 col-md-9\">

                      <div class=\"pro-nav text-center\">
                          <ul class=\"nav pro-nav-tabs nav-tabs-dashed\">
                              <li><a href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Overview & Discussions</a></li>
                              <li><a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Milestone");
        echo "\">Milestones</a></li>
                              <li><a href=\"";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Task");
        echo "\">Tasks</a></li>
                              <li class=\"active\"><a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Timesheet");
        echo "\">Timesheets</a></li>
                              <li><a href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_File");
        echo "\">Files</a></li>
                              <li><a href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Link");
        echo "\">Links</a></li>
                              <li><a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Bug");
        echo "\">Bugs</a></li>
                              <li><a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payement");
        echo "\">Payments</a></li>
                              <li><a href=\"";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Rate");
        echo "\">Rate the Freelancer</a></li>

                          </ul>
                      </div><!-- /.pro-nav -->

                      <div class=\"button-box\">
                          <a href=\"#\" class=\"kafe-btn kafe-btn-mint-small\" data-toggle=\"modal\">Start Timer</a>
                      </div><!-- /.prop-info -->
                      <div class=\"work-box\">
                          <div class=\"row\">
                              <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                  <div class=\"col-lg-12 middle-sec\" style=\"padding-top: 10px; padding-bottom:5px;\">
                                      <div class=\"col-lg-12\">
                                          <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                          <h3><a href=\"#\">Alex Grantte</a></h3>
                                          <h4><span class=\"label label-mint\">00:47:24</span></h4>
                                      </div><!-- .col-lg-3 -->
                                  </div>

                              </div><!-- .col-lg-12 -->
                          </div><!-- /.row -->
                      </div><!-- .work-box -->


                      <div class=\"box\">
                          <div class=\"box-header\">
                              <h3 class=\"box-title\">Tasks</h3>
                          </div><!-- /.box-header -->
                          <div class=\"box-body\">
                              <div class=\"table-responsive\">
                                  <table id=\"example1\" class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>User</th>
                                          <th>Time Spent</th>
                                          <th>Date Saved</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"#\">Alex Grantte</a>
                                          </td>
                                          <td><span class=\"label label-mint\">On</span></td>
                                          <td>23rd July 2018</td>
                                          <td>
                                              <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"#\">Alex Grantte</a>
                                          </td>
                                          <td><span class=\"label label-mint\">00:23:10</span></td>
                                          <td>14rd July 2018</td>
                                          <td>
                                              <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"#\">Alex Grantte</a>
                                          </td>
                                          <td><span class=\"label label-mint\">00:50:21</span></td>
                                          <td>7th July 2018</td>
                                          <td>
                                              <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"#\">Alex Grantte</a>
                                          </td>
                                          <td><span class=\"label label-mint\">1:45:00</span></td>
                                          <td>1st July 2018</td>
                                          <td>
                                              <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          </td>
                                      </tr>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>User</th>
                                          <th>Time Spent</th>
                                          <th>Date Saved</th>
                                          <th>Action</th>
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
        
        $__internal_ea10dc4401fc8a18fd762d86f84890b243ce3186f5756198cbe2b1b8a9f0d22e->leave($__internal_ea10dc4401fc8a18fd762d86f84890b243ce3186f5756198cbe2b1b8a9f0d22e_prof);

        
        $__internal_b9b78eb3546aa09fa30bd0ba0b29487b45511c0d3a242c7d487d7c56331306e7->leave($__internal_b9b78eb3546aa09fa30bd0ba0b29487b45511c0d3a242c7d487d7c56331306e7_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Timesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 248,  410 => 237,  396 => 226,  382 => 215,  350 => 186,  333 => 172,  329 => 171,  325 => 170,  321 => 169,  317 => 168,  313 => 167,  309 => 166,  305 => 165,  301 => 164,  286 => 152,  278 => 147,  270 => 142,  260 => 135,  256 => 134,  242 => 123,  238 => 122,  224 => 111,  220 => 110,  202 => 95,  194 => 90,  187 => 86,  183 => 85,  162 => 67,  155 => 63,  151 => 62,  136 => 50,  129 => 46,  125 => 45,  111 => 34,  107 => 33,  92 => 21,  84 => 16,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                          <li class=\"active\">
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

                      <div class=\"pro-nav text-center\">
                          <ul class=\"nav pro-nav-tabs nav-tabs-dashed\">
                              <li><a href=\"{{ path('template_Workroom') }}\">Overview & Discussions</a></li>
                              <li><a href=\"{{ path('template_Milestone') }}\">Milestones</a></li>
                              <li><a href=\"{{ path('template_Task') }}\">Tasks</a></li>
                              <li class=\"active\"><a href=\"{{ path('template_Timesheet') }}\">Timesheets</a></li>
                              <li><a href=\"{{ path('template_File') }}\">Files</a></li>
                              <li><a href=\"{{ path('template_Link') }}\">Links</a></li>
                              <li><a href=\"{{ path('template_Bug') }}\">Bugs</a></li>
                              <li><a href=\"{{ path('template_Payement') }}\">Payments</a></li>
                              <li><a href=\"{{ path('template_Rate') }}\">Rate the Freelancer</a></li>

                          </ul>
                      </div><!-- /.pro-nav -->

                      <div class=\"button-box\">
                          <a href=\"#\" class=\"kafe-btn kafe-btn-mint-small\" data-toggle=\"modal\">Start Timer</a>
                      </div><!-- /.prop-info -->
                      <div class=\"work-box\">
                          <div class=\"row\">
                              <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                  <div class=\"col-lg-12 middle-sec\" style=\"padding-top: 10px; padding-bottom:5px;\">
                                      <div class=\"col-lg-12\">
                                          <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                          <h3><a href=\"#\">Alex Grantte</a></h3>
                                          <h4><span class=\"label label-mint\">00:47:24</span></h4>
                                      </div><!-- .col-lg-3 -->
                                  </div>

                              </div><!-- .col-lg-12 -->
                          </div><!-- /.row -->
                      </div><!-- .work-box -->


                      <div class=\"box\">
                          <div class=\"box-header\">
                              <h3 class=\"box-title\">Tasks</h3>
                          </div><!-- /.box-header -->
                          <div class=\"box-body\">
                              <div class=\"table-responsive\">
                                  <table id=\"example1\" class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>User</th>
                                          <th>Time Spent</th>
                                          <th>Date Saved</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"#\">Alex Grantte</a>
                                          </td>
                                          <td><span class=\"label label-mint\">On</span></td>
                                          <td>23rd July 2018</td>
                                          <td>
                                              <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"#\">Alex Grantte</a>
                                          </td>
                                          <td><span class=\"label label-mint\">00:23:10</span></td>
                                          <td>14rd July 2018</td>
                                          <td>
                                              <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"#\">Alex Grantte</a>
                                          </td>
                                          <td><span class=\"label label-mint\">00:50:21</span></td>
                                          <td>7th July 2018</td>
                                          <td>
                                              <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"#\">Alex Grantte</a>
                                          </td>
                                          <td><span class=\"label label-mint\">1:45:00</span></td>
                                          <td>1st July 2018</td>
                                          <td>
                                              <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                          </td>
                                      </tr>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>User</th>
                                          <th>Time Spent</th>
                                          <th>Date Saved</th>
                                          <th>Action</th>
                                      </tr>
                                      </tfoot>
                                  </table>
                              </div><!-- /.table-responsive -->
                          </div><!-- /.box-body -->
                      </div><!-- /.box -->



                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  {% endblock %}", "@Fix/Frontend/Default/Timesheet.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Timesheet.html.twig");
    }
}
