<?php

/* FixBundle:Frontend/Default:Viewoffer.html.twig */
class __TwigTemplate_0f40e5fa21fcf3f164afb276bd3aef8c9f1d79ddc7fed5b8ab80457083cb45ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:Viewoffer.html.twig", 1);
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
        $__internal_bd53cf31a676b979edc8aedf46909a8e83a11de2c507e5157812899b0a2a3dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd53cf31a676b979edc8aedf46909a8e83a11de2c507e5157812899b0a2a3dcd->enter($__internal_bd53cf31a676b979edc8aedf46909a8e83a11de2c507e5157812899b0a2a3dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Viewoffer.html.twig"));

        $__internal_dbe520ae72923cc975612bf996d5e94aed2618ff89e86add1f80ed5b7573f8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe520ae72923cc975612bf996d5e94aed2618ff89e86add1f80ed5b7573f8ff->enter($__internal_dbe520ae72923cc975612bf996d5e94aed2618ff89e86add1f80ed5b7573f8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Viewoffer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd53cf31a676b979edc8aedf46909a8e83a11de2c507e5157812899b0a2a3dcd->leave($__internal_bd53cf31a676b979edc8aedf46909a8e83a11de2c507e5157812899b0a2a3dcd_prof);

        
        $__internal_dbe520ae72923cc975612bf996d5e94aed2618ff89e86add1f80ed5b7573f8ff->leave($__internal_dbe520ae72923cc975612bf996d5e94aed2618ff89e86add1f80ed5b7573f8ff_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_e799b319ced5d1a71d5fdee585f7f3d81e7141798644a2267b3f42bb33fff391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e799b319ced5d1a71d5fdee585f7f3d81e7141798644a2267b3f42bb33fff391->enter($__internal_e799b319ced5d1a71d5fdee585f7f3d81e7141798644a2267b3f42bb33fff391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_783995447981d4edf5db92b6906dd72777b2c968755db0472d5a472c666c0219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783995447981d4edf5db92b6906dd72777b2c968755db0472d5a472c666c0219->enter($__internal_783995447981d4edf5db92b6906dd72777b2c968755db0472d5a472c666c0219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_783995447981d4edf5db92b6906dd72777b2c968755db0472d5a472c666c0219->leave($__internal_783995447981d4edf5db92b6906dd72777b2c968755db0472d5a472c666c0219_prof);

        
        $__internal_e799b319ced5d1a71d5fdee585f7f3d81e7141798644a2267b3f42bb33fff391->leave($__internal_e799b319ced5d1a71d5fdee585f7f3d81e7141798644a2267b3f42bb33fff391_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_ece50fafc20033ba6d4ac23c9afdfd6ee735c8866e513aa9f76366f0389afed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece50fafc20033ba6d4ac23c9afdfd6ee735c8866e513aa9f76366f0389afed6->enter($__internal_ece50fafc20033ba6d4ac23c9afdfd6ee735c8866e513aa9f76366f0389afed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_864f001427400599465b0aeaef5d6abcd5bdfe17353b3e930c42b8ce9af0451a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864f001427400599465b0aeaef5d6abcd5bdfe17353b3e930c42b8ce9af0451a->enter($__internal_864f001427400599465b0aeaef5d6abcd5bdfe17353b3e930c42b8ce9af0451a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                          <li class=\"active\">
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
                          <li class=\"treeview\">
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

                      <div class=\"button-box\">
                          <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Offers");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\">Back to Offers</a>
                      </div><!-- /.prop-info -->

                      <div class=\"work-box\">
                          <div class=\"row\">
                              <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                  <div class=\"col-lg-12 top-sec\">
                                      <h3>Code Ebay store and listing design to be mobile responsive.</h3>
                                      <h4>Customer Service - Customer Service</h4>
                                  </div>
                                  <div class=\"col-lg-12\">
                                      <hr class=\"small-hr\" />
                                  </div>

                                  <div class=\"col-lg-12 middle-sec\">
                                      <div class=\"col-lg-8\">
                                          <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/8.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                          <h3><a href=\"#\">Kris Magamigi</a></h3>
                                          <h4><span class=\"label label-mint\">Client</span></h4>
                                      </div><!-- .col-lg-3 -->
                                      <div class=\"col-lg-4\">
                                          <a href=\"#\" class=\"kafe-btn kafe-btn-mint-small\"> Click here to Accept the Offer.</a>
                                      </div><!-- .col-lg-9 -->
                                  </div>

                                  <div class=\"col-lg-12\">
                                      <hr class=\"small-hr\" />
                                  </div>

                                  <div class=\"col-lg-12 bottom-sec\">
                                      <div class=\"col-lg-6\">
                                          <h5> Client Proposal </h5>
                                          <p> \$40/hr</p>
                                      </div>
                                      <div class=\"col-lg-6\">
                                          <div class=\"pull-right\">
                                              <h5> Job Type </h5>
                                              <p>Hourly</p>
                                          </div>
                                      </div>
                                  </div><!-- /.col-lg-12 -->

                              </div><!-- .col-lg-12 -->
                          </div><!-- /.row -->
                      </div><!-- .work-box -->

                      <div class=\"work-box\">
                          <div class=\"row\">
                              <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                  <div class=\"col-lg-12 top-sec\">
                                      <h3>Description</h3>
                                      <p>Lorem ipsum dolor sit amet, lorem quaestio similique has at, possit vivendum ne nam.
                                          Unum saepe ea vim, ius sensibus volutpat et, eum legere nostrum explicari ei.
                                          Sed ex legere hendrerit. Ei saperet officiis has, eu usu prompta mandamus.
                                          Vix dicat electram ei, ne sea aeterno ornatus perpetua, ne cum omnis voluptua iracundia.</p>
                                  </div>

                              </div><!-- .col-lg-12 -->
                          </div><!-- /.row -->
                      </div><!-- .work-box -->


                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  ";
        
        $__internal_864f001427400599465b0aeaef5d6abcd5bdfe17353b3e930c42b8ce9af0451a->leave($__internal_864f001427400599465b0aeaef5d6abcd5bdfe17353b3e930c42b8ce9af0451a_prof);

        
        $__internal_ece50fafc20033ba6d4ac23c9afdfd6ee735c8866e513aa9f76366f0389afed6->leave($__internal_ece50fafc20033ba6d4ac23c9afdfd6ee735c8866e513aa9f76366f0389afed6_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:Viewoffer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 182,  304 => 165,  290 => 154,  282 => 149,  274 => 144,  264 => 137,  260 => 136,  246 => 125,  242 => 124,  228 => 113,  224 => 112,  206 => 97,  198 => 92,  191 => 88,  187 => 87,  166 => 69,  159 => 65,  155 => 64,  140 => 52,  133 => 48,  129 => 47,  115 => 36,  111 => 35,  96 => 23,  88 => 18,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                          <li class=\"active\">
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

                      <div class=\"button-box\">
                          <a href=\"{{ path('template_Offers') }}\" class=\"kafe-btn kafe-btn-mint-small\">Back to Offers</a>
                      </div><!-- /.prop-info -->

                      <div class=\"work-box\">
                          <div class=\"row\">
                              <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                  <div class=\"col-lg-12 top-sec\">
                                      <h3>Code Ebay store and listing design to be mobile responsive.</h3>
                                      <h4>Customer Service - Customer Service</h4>
                                  </div>
                                  <div class=\"col-lg-12\">
                                      <hr class=\"small-hr\" />
                                  </div>

                                  <div class=\"col-lg-12 middle-sec\">
                                      <div class=\"col-lg-8\">
                                          <img src=\"{{ asset('img/users/8.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                          <h3><a href=\"#\">Kris Magamigi</a></h3>
                                          <h4><span class=\"label label-mint\">Client</span></h4>
                                      </div><!-- .col-lg-3 -->
                                      <div class=\"col-lg-4\">
                                          <a href=\"#\" class=\"kafe-btn kafe-btn-mint-small\"> Click here to Accept the Offer.</a>
                                      </div><!-- .col-lg-9 -->
                                  </div>

                                  <div class=\"col-lg-12\">
                                      <hr class=\"small-hr\" />
                                  </div>

                                  <div class=\"col-lg-12 bottom-sec\">
                                      <div class=\"col-lg-6\">
                                          <h5> Client Proposal </h5>
                                          <p> \$40/hr</p>
                                      </div>
                                      <div class=\"col-lg-6\">
                                          <div class=\"pull-right\">
                                              <h5> Job Type </h5>
                                              <p>Hourly</p>
                                          </div>
                                      </div>
                                  </div><!-- /.col-lg-12 -->

                              </div><!-- .col-lg-12 -->
                          </div><!-- /.row -->
                      </div><!-- .work-box -->

                      <div class=\"work-box\">
                          <div class=\"row\">
                              <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                                  <div class=\"col-lg-12 top-sec\">
                                      <h3>Description</h3>
                                      <p>Lorem ipsum dolor sit amet, lorem quaestio similique has at, possit vivendum ne nam.
                                          Unum saepe ea vim, ius sensibus volutpat et, eum legere nostrum explicari ei.
                                          Sed ex legere hendrerit. Ei saperet officiis has, eu usu prompta mandamus.
                                          Vix dicat electram ei, ne sea aeterno ornatus perpetua, ne cum omnis voluptua iracundia.</p>
                                  </div>

                              </div><!-- .col-lg-12 -->
                          </div><!-- /.row -->
                      </div><!-- .work-box -->


                  </div><!-- /.col-md-9 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  {% endblock %}", "FixBundle:Frontend/Default:Viewoffer.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/Viewoffer.html.twig");
    }
}
