<?php

/* @Fix/Frontend/Default/Dashboard.html.twig */
class __TwigTemplate_681cc5352e241cd3118ef0622c64f290de0a41e89deca34fed3e35590f6d208d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Dashboard.html.twig", 1);
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
        $__internal_4cffda037397b0594ed87281065707d7dd9418f76ce32ac63cd50a334a92fb7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cffda037397b0594ed87281065707d7dd9418f76ce32ac63cd50a334a92fb7d->enter($__internal_4cffda037397b0594ed87281065707d7dd9418f76ce32ac63cd50a334a92fb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Dashboard.html.twig"));

        $__internal_4e009d74ff618b033640ada75e50b8547bda4769ea59bc6af623eb9b6f4c4ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e009d74ff618b033640ada75e50b8547bda4769ea59bc6af623eb9b6f4c4ff4->enter($__internal_4e009d74ff618b033640ada75e50b8547bda4769ea59bc6af623eb9b6f4c4ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cffda037397b0594ed87281065707d7dd9418f76ce32ac63cd50a334a92fb7d->leave($__internal_4cffda037397b0594ed87281065707d7dd9418f76ce32ac63cd50a334a92fb7d_prof);

        
        $__internal_4e009d74ff618b033640ada75e50b8547bda4769ea59bc6af623eb9b6f4c4ff4->leave($__internal_4e009d74ff618b033640ada75e50b8547bda4769ea59bc6af623eb9b6f4c4ff4_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_3c848e2980ff7b77237a6c7c615aba889a243dbb8fb30be635b101e45d17fa52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c848e2980ff7b77237a6c7c615aba889a243dbb8fb30be635b101e45d17fa52->enter($__internal_3c848e2980ff7b77237a6c7c615aba889a243dbb8fb30be635b101e45d17fa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4c59584b16168a073e5f7d08d14dc928fbddfb70b6cfc6a7145699d13a36deda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c59584b16168a073e5f7d08d14dc928fbddfb70b6cfc6a7145699d13a36deda->enter($__internal_4c59584b16168a073e5f7d08d14dc928fbddfb70b6cfc6a7145699d13a36deda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_4c59584b16168a073e5f7d08d14dc928fbddfb70b6cfc6a7145699d13a36deda->leave($__internal_4c59584b16168a073e5f7d08d14dc928fbddfb70b6cfc6a7145699d13a36deda_prof);

        
        $__internal_3c848e2980ff7b77237a6c7c615aba889a243dbb8fb30be635b101e45d17fa52->leave($__internal_3c848e2980ff7b77237a6c7c615aba889a243dbb8fb30be635b101e45d17fa52_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_c986532d5efd6fc387b5c3094e4172d1df85720bea2e974d6a2bff46d33c7325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c986532d5efd6fc387b5c3094e4172d1df85720bea2e974d6a2bff46d33c7325->enter($__internal_c986532d5efd6fc387b5c3094e4172d1df85720bea2e974d6a2bff46d33c7325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_2fdfe08e593a2ffd27aea2ac906f22979e4fa3e7b848b33d4d213e21e8631212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdfe08e593a2ffd27aea2ac906f22979e4fa3e7b848b33d4d213e21e8631212->enter($__internal_2fdfe08e593a2ffd27aea2ac906f22979e4fa3e7b848b33d4d213e21e8631212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "


      <section class=\"dashboard section-padding\">
          <div class=\"container\">
              <div class=\"row\">

                  <div class=\"col-sm-4 col-md-3\">

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li class=\"active\">
                              <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_dashb");
        echo "\">
                                  <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 22
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
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                                  <li><a href=\"PostAjob.html.twig\"><i class=\"fa fa-circle-o\"></i> Add a Job</a></li>
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
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_YourPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
                                  <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_OtherPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 51
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
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_CompanyList");
        echo "\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                                  <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddCompany");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 68
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
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Deposits");
        echo "\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                                  <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Withdrawals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payementmethod");
        echo "\">
                                  <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 96
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
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Job_List");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a></li>
                                  <li><a href=\"";
        // line 112
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
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Profiles");
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a></li>
                                  <li><a href=\"";
        // line 124
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
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Companies");
        echo "\"><i class=\"fa fa-circle-o\"></i> Companies Featured List</a></li>
                                  <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your Companies </a></li>
                              </ul>
                          </li>
                      </ul>

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li>
                              <a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\">
                                  <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile_Image");
        echo "\">
                                  <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                              </a>
                          </li>
                          <li>
                              <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Password");
        echo "\">
                                  <i class=\"fa fa-lock\"></i> <span>Change Password</span>
                              </a>
                          </li>
                      </ul>

                  </div>

                  <div class=\"col-sm-8 col-md-9\">

                      <div class=\"dashboard-info\">

                          <div class=\"row\">

                              <div class=\"col-sm-3\">
                                  <div class=\"fun-fact\">
                                      <div class=\"media-body\">
                                          <h1>\$0.00</h1>
                                          <span>Total Amount</span>
                                      </div>
                                  </div><!-- /.fun-fact -->
                              </div><!-- /.col-sm-4 -->

                              <div class=\"col-sm-3\">
                                  <div class=\"fun-fact\">
                                      <div class=\"media-body\">
                                          <h1>0</h1>
                                          <span>Contracts</span>
                                      </div>
                                  </div><!-- /.fun-fact -->
                              </div><!-- /.col-sm-4 -->

                              <div class=\"col-sm-3\">
                                  <div class=\"fun-fact\">
                                      <div class=\"media-body\">
                                          <h1>0:00:00</h1>
                                          <span>Total Logged</span>
                                      </div>
                                  </div><!-- /.fun-fact -->
                              </div><!-- /.col-sm-4 -->

                              <div class=\"col-sm-3\">
                                  <div class=\"fun-fact\">
                                      <div class=\"media-body\">
                                          <h1>0</h1>
                                          <span>Total Milestones</span>
                                      </div>
                                  </div><!-- /.fun-fact -->
                              </div><!-- /.col-sm-4 -->

                          </div><!-- ./row -->


                      </div><!-- /.dashboard-info -->

                      <div class=\"prop-info text-center\">
                          <i class=\"fa fa-align-left fa-5x\"></i>
                          <h3>You have no recent contracts.</h3>
                          <p>Look for work here <a href=\"#\">Home</a></p>
                      </div><!-- /.prop-info -->

                      <div class=\"box\">
                          <div class=\"box-header\">
                              <h3 class=\"box-title\">Contracts</h3>
                          </div><!-- /.box-header -->
                          <div class=\"box-body\">
                              <div class=\"table-responsive\">
                                  <table id=\"example1\" class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>Freelancer</th>
                                          <th>Job Title</th>
                                          <th>Workroom</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\">Anna Morgan</a>
                                          </td>
                                          <td><a href=\"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">I need a designer to design a logo & questionnaire for a Nutrition Company</a></td>
                                          <td><a href=\"";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\">Benjamin Robinson</a>
                                          </td>
                                          <td><a href=\"";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Professional writer required</a></td>
                                          <td><a href=\"";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\">Sean Coleman</a>
                                          </td>
                                          <td><a href=\"";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Content Writers Needed</a></td>
                                          <td><a href=\"";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"";
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "d\">Vanessa Wells</a>
                                          </td>
                                          <td><a href=\"";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Website Design</a></td>
                                          <td><a href=\"";
        // line 259
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                      </tr>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>Client</th>
                                          <th>Job Title</th>
                                          <th>Freelancer</th>
                                      </tr>
                                      </tfoot>
                                  </table>
                              </div><!-- /.table-responsive -->
                          </div><!-- /.box-body -->
                      </div><!-- /.box -->




                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
      </section>



      </body>


  ";
        
        $__internal_2fdfe08e593a2ffd27aea2ac906f22979e4fa3e7b848b33d4d213e21e8631212->leave($__internal_2fdfe08e593a2ffd27aea2ac906f22979e4fa3e7b848b33d4d213e21e8631212_prof);

        
        $__internal_c986532d5efd6fc387b5c3094e4172d1df85720bea2e974d6a2bff46d33c7325->leave($__internal_c986532d5efd6fc387b5c3094e4172d1df85720bea2e974d6a2bff46d33c7325_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 259,  436 => 258,  431 => 256,  427 => 255,  420 => 251,  416 => 250,  411 => 248,  407 => 247,  400 => 243,  396 => 242,  391 => 240,  387 => 239,  380 => 235,  376 => 234,  371 => 232,  367 => 231,  286 => 153,  278 => 148,  270 => 143,  260 => 136,  256 => 135,  242 => 124,  238 => 123,  224 => 112,  220 => 111,  202 => 96,  194 => 91,  187 => 87,  183 => 86,  162 => 68,  155 => 64,  151 => 63,  136 => 51,  129 => 47,  125 => 46,  110 => 34,  95 => 22,  87 => 17,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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


      <section class=\"dashboard section-padding\">
          <div class=\"container\">
              <div class=\"row\">

                  <div class=\"col-sm-4 col-md-3\">

                      <ul class=\"sidebar-menu\" data-widget=\"tree\">
                          <li class=\"active\">
                              <a href=\"{{ path('template_dashb') }}\">
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
                                  <li><a href=\"PostAjob.html.twig\"><i class=\"fa fa-circle-o\"></i> Add a Job</a></li>
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

                      <div class=\"dashboard-info\">

                          <div class=\"row\">

                              <div class=\"col-sm-3\">
                                  <div class=\"fun-fact\">
                                      <div class=\"media-body\">
                                          <h1>\$0.00</h1>
                                          <span>Total Amount</span>
                                      </div>
                                  </div><!-- /.fun-fact -->
                              </div><!-- /.col-sm-4 -->

                              <div class=\"col-sm-3\">
                                  <div class=\"fun-fact\">
                                      <div class=\"media-body\">
                                          <h1>0</h1>
                                          <span>Contracts</span>
                                      </div>
                                  </div><!-- /.fun-fact -->
                              </div><!-- /.col-sm-4 -->

                              <div class=\"col-sm-3\">
                                  <div class=\"fun-fact\">
                                      <div class=\"media-body\">
                                          <h1>0:00:00</h1>
                                          <span>Total Logged</span>
                                      </div>
                                  </div><!-- /.fun-fact -->
                              </div><!-- /.col-sm-4 -->

                              <div class=\"col-sm-3\">
                                  <div class=\"fun-fact\">
                                      <div class=\"media-body\">
                                          <h1>0</h1>
                                          <span>Total Milestones</span>
                                      </div>
                                  </div><!-- /.fun-fact -->
                              </div><!-- /.col-sm-4 -->

                          </div><!-- ./row -->


                      </div><!-- /.dashboard-info -->

                      <div class=\"prop-info text-center\">
                          <i class=\"fa fa-align-left fa-5x\"></i>
                          <h3>You have no recent contracts.</h3>
                          <p>Look for work here <a href=\"#\">Home</a></p>
                      </div><!-- /.prop-info -->

                      <div class=\"box\">
                          <div class=\"box-header\">
                              <h3 class=\"box-title\">Contracts</h3>
                          </div><!-- /.box-header -->
                          <div class=\"box-body\">
                              <div class=\"table-responsive\">
                                  <table id=\"example1\" class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>Freelancer</th>
                                          <th>Job Title</th>
                                          <th>Workroom</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"{{ path('template_Company') }}\">Anna Morgan</a>
                                          </td>
                                          <td><a href=\"{{ path('template_Workroom') }}\">I need a designer to design a logo & questionnaire for a Nutrition Company</a></td>
                                          <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/3.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"{{ path('template_Company') }}\">Benjamin Robinson</a>
                                          </td>
                                          <td><a href=\"{{ path('template_Workroom') }}\">Professional writer required</a></td>
                                          <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/4.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"{{ path('template_Company') }}\">Sean Coleman</a>
                                          </td>
                                          <td><a href=\"{{ path('template_Workroom') }}\">Content Writers Needed</a></td>
                                          <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/5.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"{{ path('template_Company') }}d\">Vanessa Wells</a>
                                          </td>
                                          <td><a href=\"{{ path('template_Workroom') }}\">Website Design</a></td>
                                          <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                      </tr>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>Client</th>
                                          <th>Job Title</th>
                                          <th>Freelancer</th>
                                      </tr>
                                      </tfoot>
                                  </table>
                              </div><!-- /.table-responsive -->
                          </div><!-- /.box-body -->
                      </div><!-- /.box -->




                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
      </section>



      </body>


  {% endblock %}



", "@Fix/Frontend/Default/Dashboard.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Dashboard.html.twig");
    }
}
