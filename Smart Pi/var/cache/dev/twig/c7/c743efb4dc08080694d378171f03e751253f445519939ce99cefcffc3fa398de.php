<?php

/* FixBundle:Frontend/Default:featured-your-company.html.twig */
class __TwigTemplate_758d57c6101a973f242a98ebd6485686cdec3b1a247192d4694595a9b5cb178f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:featured-your-company.html.twig", 1);
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
        $__internal_aa35ec434a9026e017ef53744cc52c1bdc45ffda4976d3b62419f602802531b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa35ec434a9026e017ef53744cc52c1bdc45ffda4976d3b62419f602802531b9->enter($__internal_aa35ec434a9026e017ef53744cc52c1bdc45ffda4976d3b62419f602802531b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:featured-your-company.html.twig"));

        $__internal_99fe396b0b9aefcf2db6b5aaba6fc6f6b127081d2ae7f0ad8385a6c87130ab7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fe396b0b9aefcf2db6b5aaba6fc6f6b127081d2ae7f0ad8385a6c87130ab7f->enter($__internal_99fe396b0b9aefcf2db6b5aaba6fc6f6b127081d2ae7f0ad8385a6c87130ab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:featured-your-company.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa35ec434a9026e017ef53744cc52c1bdc45ffda4976d3b62419f602802531b9->leave($__internal_aa35ec434a9026e017ef53744cc52c1bdc45ffda4976d3b62419f602802531b9_prof);

        
        $__internal_99fe396b0b9aefcf2db6b5aaba6fc6f6b127081d2ae7f0ad8385a6c87130ab7f->leave($__internal_99fe396b0b9aefcf2db6b5aaba6fc6f6b127081d2ae7f0ad8385a6c87130ab7f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_4cd31d2a4e6495eeb9fdeffaf6c50d63ecd6573b427706355bf19a898d55f478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd31d2a4e6495eeb9fdeffaf6c50d63ecd6573b427706355bf19a898d55f478->enter($__internal_4cd31d2a4e6495eeb9fdeffaf6c50d63ecd6573b427706355bf19a898d55f478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_dd20482b3e6706453b68369c47cd4e101026985f54ea337f8f30d325e05f715f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd20482b3e6706453b68369c47cd4e101026985f54ea337f8f30d325e05f715f->enter($__internal_dd20482b3e6706453b68369c47cd4e101026985f54ea337f8f30d325e05f715f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_dd20482b3e6706453b68369c47cd4e101026985f54ea337f8f30d325e05f715f->leave($__internal_dd20482b3e6706453b68369c47cd4e101026985f54ea337f8f30d325e05f715f_prof);

        
        $__internal_4cd31d2a4e6495eeb9fdeffaf6c50d63ecd6573b427706355bf19a898d55f478->leave($__internal_4cd31d2a4e6495eeb9fdeffaf6c50d63ecd6573b427706355bf19a898d55f478_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_f8a5819f6c43c263036c75ddaf2c1e7d8111752e36b0b9ffb7601554bc6969d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a5819f6c43c263036c75ddaf2c1e7d8111752e36b0b9ffb7601554bc6969d3->enter($__internal_f8a5819f6c43c263036c75ddaf2c1e7d8111752e36b0b9ffb7601554bc6969d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_2ac7837488aa11bfb0317d3c8ea7e10a22bc061f9e5e9fcdf7fa73c7d1aa5ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac7837488aa11bfb0317d3c8ea7e10a22bc061f9e5e9fcdf7fa73c7d1aa5ba9->enter($__internal_2ac7837488aa11bfb0317d3c8ea7e10a22bc061f9e5e9fcdf7fa73c7d1aa5ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                          <li class=\"treeview active\">
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

                      <div class=\"job-box\">
                          <div class=\"job-header\">
                              <h4>Feature your companies</h4>
                          </div>
                          <form method=\"post\" id=\"addform\">

                              <div class=\"form-group\">
                                  <label>Choose a company you want to feature</label>
                                  <select name=\"category\" class=\"form-control\">
                                      <option value=\"\">The Masha Brand</option>
                                      <option value=\"\">Google</option>
                                  </select>
                              </div>

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
        
        $__internal_2ac7837488aa11bfb0317d3c8ea7e10a22bc061f9e5e9fcdf7fa73c7d1aa5ba9->leave($__internal_2ac7837488aa11bfb0317d3c8ea7e10a22bc061f9e5e9fcdf7fa73c7d1aa5ba9_prof);

        
        $__internal_f8a5819f6c43c263036c75ddaf2c1e7d8111752e36b0b9ffb7601554bc6969d3->leave($__internal_f8a5819f6c43c263036c75ddaf2c1e7d8111752e36b0b9ffb7601554bc6969d3_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:featured-your-company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 154,  282 => 149,  274 => 144,  264 => 137,  260 => 136,  246 => 125,  242 => 124,  228 => 113,  224 => 112,  206 => 97,  198 => 92,  191 => 88,  187 => 87,  166 => 69,  159 => 65,  155 => 64,  140 => 52,  133 => 48,  129 => 47,  115 => 36,  111 => 35,  96 => 23,  88 => 18,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                          <li class=\"treeview active\">
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

                      <div class=\"job-box\">
                          <div class=\"job-header\">
                              <h4>Feature your companies</h4>
                          </div>
                          <form method=\"post\" id=\"addform\">

                              <div class=\"form-group\">
                                  <label>Choose a company you want to feature</label>
                                  <select name=\"category\" class=\"form-control\">
                                      <option value=\"\">The Masha Brand</option>
                                      <option value=\"\">Google</option>
                                  </select>
                              </div>

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
  {% endblock %}", "FixBundle:Frontend/Default:featured-your-company.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/featured-your-company.html.twig");
    }
}
