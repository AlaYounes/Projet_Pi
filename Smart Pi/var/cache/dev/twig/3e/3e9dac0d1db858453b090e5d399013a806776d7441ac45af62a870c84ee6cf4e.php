<?php

/* FixBundle:Frontend/Default:featured-companies.html.twig */
class __TwigTemplate_58ec4eceb792265c3275a8b32ccab6a5213475f1a562fbdb97220e6b12465128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:featured-companies.html.twig", 1);
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
        $__internal_fbef5237996deef265ab587921bea428d341b3f5cf88e4997295070541ad7cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbef5237996deef265ab587921bea428d341b3f5cf88e4997295070541ad7cb2->enter($__internal_fbef5237996deef265ab587921bea428d341b3f5cf88e4997295070541ad7cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:featured-companies.html.twig"));

        $__internal_6c9367ad5b7a349730d0a12c5b22ca397a051ea9623734c1aa45c5ef4df6716b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9367ad5b7a349730d0a12c5b22ca397a051ea9623734c1aa45c5ef4df6716b->enter($__internal_6c9367ad5b7a349730d0a12c5b22ca397a051ea9623734c1aa45c5ef4df6716b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:featured-companies.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbef5237996deef265ab587921bea428d341b3f5cf88e4997295070541ad7cb2->leave($__internal_fbef5237996deef265ab587921bea428d341b3f5cf88e4997295070541ad7cb2_prof);

        
        $__internal_6c9367ad5b7a349730d0a12c5b22ca397a051ea9623734c1aa45c5ef4df6716b->leave($__internal_6c9367ad5b7a349730d0a12c5b22ca397a051ea9623734c1aa45c5ef4df6716b_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_6a4893b1ae06cc3c37ffa0c025e3f54e9f96d41c0d8b9e82edcb0cf840fbc1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4893b1ae06cc3c37ffa0c025e3f54e9f96d41c0d8b9e82edcb0cf840fbc1b4->enter($__internal_6a4893b1ae06cc3c37ffa0c025e3f54e9f96d41c0d8b9e82edcb0cf840fbc1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9432119e8d534bac8ba9ee2b68b438c5fedb67e8f9a05b4bbfd7701fa8777808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9432119e8d534bac8ba9ee2b68b438c5fedb67e8f9a05b4bbfd7701fa8777808->enter($__internal_9432119e8d534bac8ba9ee2b68b438c5fedb67e8f9a05b4bbfd7701fa8777808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_9432119e8d534bac8ba9ee2b68b438c5fedb67e8f9a05b4bbfd7701fa8777808->leave($__internal_9432119e8d534bac8ba9ee2b68b438c5fedb67e8f9a05b4bbfd7701fa8777808_prof);

        
        $__internal_6a4893b1ae06cc3c37ffa0c025e3f54e9f96d41c0d8b9e82edcb0cf840fbc1b4->leave($__internal_6a4893b1ae06cc3c37ffa0c025e3f54e9f96d41c0d8b9e82edcb0cf840fbc1b4_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_b231b059d40e9137d5114d3931a81d851e435fdc9e2bc7120d13fdd83f5bb389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b231b059d40e9137d5114d3931a81d851e435fdc9e2bc7120d13fdd83f5bb389->enter($__internal_b231b059d40e9137d5114d3931a81d851e435fdc9e2bc7120d13fdd83f5bb389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_1db3fa49fc9b59bdf5d68912d992474b10a3893e1ae3cecc8f176b9e897f88a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db3fa49fc9b59bdf5d68912d992474b10a3893e1ae3cecc8f176b9e897f88a1->enter($__internal_1db3fa49fc9b59bdf5d68912d992474b10a3893e1ae3cecc8f176b9e897f88a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
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
                            <li><a href=\"";
        // line 35
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
                    <li class=\"treeview active\">
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

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Your Companies Featured</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Company</th>
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
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\">The Masha Brand</a>
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
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Company");
        echo "\">Google</a>
                                    </td>
                                    <td>5 days</td>
                                    <td>\$15</td>
                                    <td><span class=\"label label-mint\">1000</span></td>
                                    <td><span class=\"label label-mint\">879</span></td>
                                    <td><span class=\"label label-danger\">Still Active</span></td>
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
        
        $__internal_1db3fa49fc9b59bdf5d68912d992474b10a3893e1ae3cecc8f176b9e897f88a1->leave($__internal_1db3fa49fc9b59bdf5d68912d992474b10a3893e1ae3cecc8f176b9e897f88a1_prof);

        
        $__internal_b231b059d40e9137d5114d3931a81d851e435fdc9e2bc7120d13fdd83f5bb389->leave($__internal_b231b059d40e9137d5114d3931a81d851e435fdc9e2bc7120d13fdd83f5bb389_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:featured-companies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 199,  343 => 198,  328 => 186,  324 => 185,  289 => 153,  281 => 148,  273 => 143,  263 => 136,  259 => 135,  245 => 124,  241 => 123,  227 => 112,  223 => 111,  205 => 96,  197 => 91,  190 => 87,  186 => 86,  165 => 68,  158 => 64,  154 => 63,  139 => 51,  132 => 47,  128 => 46,  114 => 35,  110 => 34,  95 => 22,  87 => 17,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Your Companies Featured</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Company</th>
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
                                        <img src=\"{{ asset('img/logo.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Company') }}\">The Masha Brand</a>
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
                                        <a href=\"{{ path('template_Company') }}\">Google</a>
                                    </td>
                                    <td>5 days</td>
                                    <td>\$15</td>
                                    <td><span class=\"label label-mint\">1000</span></td>
                                    <td><span class=\"label label-mint\">879</span></td>
                                    <td><span class=\"label label-danger\">Still Active</span></td>
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
  {% endblock %}", "FixBundle:Frontend/Default:featured-companies.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/featured-companies.html.twig");
    }
}
