<?php

/* @Fix/Frontend/Default/featured-profiles.html.twig */
class __TwigTemplate_9725e295c1eeb4aec1110a56a61d148f06cfb58199485feaf940395f8512886d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/featured-profiles.html.twig", 1);
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
        $__internal_fd417b9948a41860d40ef7ed4b6c5bdb66eae45c7f0602a758cee23da79d57d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd417b9948a41860d40ef7ed4b6c5bdb66eae45c7f0602a758cee23da79d57d6->enter($__internal_fd417b9948a41860d40ef7ed4b6c5bdb66eae45c7f0602a758cee23da79d57d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/featured-profiles.html.twig"));

        $__internal_6b2a56d2f98e65884b7cb7634c2241c9d1d7a00158fef1fdf1672d569db7652e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2a56d2f98e65884b7cb7634c2241c9d1d7a00158fef1fdf1672d569db7652e->enter($__internal_6b2a56d2f98e65884b7cb7634c2241c9d1d7a00158fef1fdf1672d569db7652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/featured-profiles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd417b9948a41860d40ef7ed4b6c5bdb66eae45c7f0602a758cee23da79d57d6->leave($__internal_fd417b9948a41860d40ef7ed4b6c5bdb66eae45c7f0602a758cee23da79d57d6_prof);

        
        $__internal_6b2a56d2f98e65884b7cb7634c2241c9d1d7a00158fef1fdf1672d569db7652e->leave($__internal_6b2a56d2f98e65884b7cb7634c2241c9d1d7a00158fef1fdf1672d569db7652e_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_200a1ef44a93bfc115888b80e5faa3eca2a382bd0b6d8e189296243a6bf512a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200a1ef44a93bfc115888b80e5faa3eca2a382bd0b6d8e189296243a6bf512a3->enter($__internal_200a1ef44a93bfc115888b80e5faa3eca2a382bd0b6d8e189296243a6bf512a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_185d4335bae2251e292080fdc31047d9658d60f91a2c6e9a038cae65afb4fa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185d4335bae2251e292080fdc31047d9658d60f91a2c6e9a038cae65afb4fa1f->enter($__internal_185d4335bae2251e292080fdc31047d9658d60f91a2c6e9a038cae65afb4fa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_185d4335bae2251e292080fdc31047d9658d60f91a2c6e9a038cae65afb4fa1f->leave($__internal_185d4335bae2251e292080fdc31047d9658d60f91a2c6e9a038cae65afb4fa1f_prof);

        
        $__internal_200a1ef44a93bfc115888b80e5faa3eca2a382bd0b6d8e189296243a6bf512a3->leave($__internal_200a1ef44a93bfc115888b80e5faa3eca2a382bd0b6d8e189296243a6bf512a3_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_8a1083b6ae23f760c2832e4d3b1dddeb6e5d7bb08890c70265b9c502d1795fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1083b6ae23f760c2832e4d3b1dddeb6e5d7bb08890c70265b9c502d1795fa2->enter($__internal_8a1083b6ae23f760c2832e4d3b1dddeb6e5d7bb08890c70265b9c502d1795fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_08e1035a0f914e62253e42e52e6f9a55da36e34c508117f5d4434641d503e69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e1035a0f914e62253e42e52e6f9a55da36e34c508117f5d4434641d503e69e->enter($__internal_08e1035a0f914e62253e42e52e6f9a55da36e34c508117f5d4434641d503e69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        echo "l\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
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

                      <div class=\"box\">
                          <div class=\"box-header\">
                              <h3 class=\"box-title\">Your Profiles Featured</h3>
                          </div><!-- /.box-header -->
                          <div class=\"box-body\">
                              <div class=\"table-responsive\">
                                  <table id=\"example1\" class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>Profile</th>
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
                                          <td>
                                              <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Alex Grantte</a>
                                          </td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Still Active</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Alex Grantte</a>
                                          </td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Still Active</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Alex Grantte</a>
                                          </td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Ended</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Alex Grantte</a>
                                          </td>
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
                                          <th>Profile</th>
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
        
        $__internal_08e1035a0f914e62253e42e52e6f9a55da36e34c508117f5d4434641d503e69e->leave($__internal_08e1035a0f914e62253e42e52e6f9a55da36e34c508117f5d4434641d503e69e_prof);

        
        $__internal_8a1083b6ae23f760c2832e4d3b1dddeb6e5d7bb08890c70265b9c502d1795fa2->leave($__internal_8a1083b6ae23f760c2832e4d3b1dddeb6e5d7bb08890c70265b9c502d1795fa2_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/featured-profiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 226,  382 => 225,  367 => 213,  363 => 212,  348 => 200,  344 => 199,  329 => 187,  325 => 186,  290 => 154,  282 => 149,  274 => 144,  264 => 137,  260 => 136,  246 => 125,  242 => 124,  228 => 113,  224 => 112,  206 => 97,  198 => 92,  191 => 88,  187 => 87,  166 => 69,  159 => 65,  155 => 64,  140 => 52,  133 => 48,  129 => 47,  115 => 36,  111 => 35,  96 => 23,  88 => 18,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                                  <li><a href=\"{{ path('template_YourPorposals') }}l\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
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

                      <div class=\"box\">
                          <div class=\"box-header\">
                              <h3 class=\"box-title\">Your Profiles Featured</h3>
                          </div><!-- /.box-header -->
                          <div class=\"box-body\">
                              <div class=\"table-responsive\">
                                  <table id=\"example1\" class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>Profile</th>
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
                                          <td>
                                              <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"{{ path('template_Profile') }}\">Alex Grantte</a>
                                          </td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Still Active</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"{{ path('template_Profile') }}\">Alex Grantte</a>
                                          </td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Still Active</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"{{ path('template_Profile') }}\">Alex Grantte</a>
                                          </td>
                                          <td>5 days</td>
                                          <td>\$15</td>
                                          <td><span class=\"label label-mint\">1000</span></td>
                                          <td><span class=\"label label-mint\">879</span></td>
                                          <td><span class=\"label label-danger\">Ended</span></td>
                                          <td>20th July 2018</td>
                                          <td>25th July 2018</td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <img src=\"{{ asset('img/users/2.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                              <a href=\"{{ path('template_Profile') }}\">Alex Grantte</a>
                                          </td>
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
                                          <th>Profile</th>
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
  {% endblock %}", "@Fix/Frontend/Default/featured-profiles.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\featured-profiles.html.twig");
    }
}
