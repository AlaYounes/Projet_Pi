<?php

/* @Fix/Frontend/Default/offers.html.twig */
class __TwigTemplate_8ee5efcc239387e0ca56d0977bfb871fc07be85b9a67f3df1d26f2f248a1305a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/offers.html.twig", 1);
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
        $__internal_9c12e8ad66aae5cdfdd9626c1c928c69eead7b4c39add9e33635e03b4281d608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c12e8ad66aae5cdfdd9626c1c928c69eead7b4c39add9e33635e03b4281d608->enter($__internal_9c12e8ad66aae5cdfdd9626c1c928c69eead7b4c39add9e33635e03b4281d608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/offers.html.twig"));

        $__internal_3538d694cbdd17a95bf38b3a9f02489fdace3d002ff9713a33be5099e231c6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3538d694cbdd17a95bf38b3a9f02489fdace3d002ff9713a33be5099e231c6c9->enter($__internal_3538d694cbdd17a95bf38b3a9f02489fdace3d002ff9713a33be5099e231c6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/offers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c12e8ad66aae5cdfdd9626c1c928c69eead7b4c39add9e33635e03b4281d608->leave($__internal_9c12e8ad66aae5cdfdd9626c1c928c69eead7b4c39add9e33635e03b4281d608_prof);

        
        $__internal_3538d694cbdd17a95bf38b3a9f02489fdace3d002ff9713a33be5099e231c6c9->leave($__internal_3538d694cbdd17a95bf38b3a9f02489fdace3d002ff9713a33be5099e231c6c9_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_1555e3796f42e22a959b70d3bb7a13b5e38fb9addc5608f6ed91a6f6d57d87fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1555e3796f42e22a959b70d3bb7a13b5e38fb9addc5608f6ed91a6f6d57d87fd->enter($__internal_1555e3796f42e22a959b70d3bb7a13b5e38fb9addc5608f6ed91a6f6d57d87fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6a0c304036fe28470da2362cdb55a1b1b2c8ecc3798e4211bb3bc2beb0a46599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0c304036fe28470da2362cdb55a1b1b2c8ecc3798e4211bb3bc2beb0a46599->enter($__internal_6a0c304036fe28470da2362cdb55a1b1b2c8ecc3798e4211bb3bc2beb0a46599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_6a0c304036fe28470da2362cdb55a1b1b2c8ecc3798e4211bb3bc2beb0a46599->leave($__internal_6a0c304036fe28470da2362cdb55a1b1b2c8ecc3798e4211bb3bc2beb0a46599_prof);

        
        $__internal_1555e3796f42e22a959b70d3bb7a13b5e38fb9addc5608f6ed91a6f6d57d87fd->leave($__internal_1555e3796f42e22a959b70d3bb7a13b5e38fb9addc5608f6ed91a6f6d57d87fd_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_84fe58da2bc9621e38b95c7a57f4380dbdab583aec9dd1a2266276364d022e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fe58da2bc9621e38b95c7a57f4380dbdab583aec9dd1a2266276364d022e83->enter($__internal_84fe58da2bc9621e38b95c7a57f4380dbdab583aec9dd1a2266276364d022e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_68a1542a8fef520924816db1f02c2ee23df3b6fcbe7b99554ad9d47689c4f433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a1542a8fef520924816db1f02c2ee23df3b6fcbe7b99554ad9d47689c4f433->enter($__internal_68a1542a8fef520924816db1f02c2ee23df3b6fcbe7b99554ad9d47689c4f433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                    <li class=\"active\">
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

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Offers from Clients</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Job Title</th>
                                    <th>Assigned</th>
                                    <th>Offer</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Benjamin Robinson</a>
                                    </td>
                                    <td><a href=\"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">I need a designer to design a logo & questionnaire for a Nutrition Company</a></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Viewoffer");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> View Offer</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Accept the Job\"><span class=\"fa fa-check\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Anna Morgan</a>
                                    </td>
                                    <td><a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Professional writer required</a></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Viewoffer");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> View Offer</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Accept the Job\"><span class=\"fa fa-check\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/10.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Sean Coleman</a>
                                    </td>
                                    <td><a href=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Content Writers Needed</a></td>
                                    <td><span class=\"label label-mint\">Assigned</span></td>
                                    <td><a href=\"";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Viewoffer");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> View Offer</a></td>
                                    <td><a href=\"";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/9.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Vanessa Wells</a>
                                    </td>
                                    <td><a href=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\">Website Design</a></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Viewoffer");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> View Offer</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Accept the Job\"><span class=\"fa fa-check\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Freelancer</th>
                                    <th>Job Title</th>
                                    <th>Assigned</th>
                                    <th>Proposal</th>
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
        
        $__internal_68a1542a8fef520924816db1f02c2ee23df3b6fcbe7b99554ad9d47689c4f433->leave($__internal_68a1542a8fef520924816db1f02c2ee23df3b6fcbe7b99554ad9d47689c4f433_prof);

        
        $__internal_84fe58da2bc9621e38b95c7a57f4380dbdab583aec9dd1a2266276364d022e83->leave($__internal_84fe58da2bc9621e38b95c7a57f4380dbdab583aec9dd1a2266276364d022e83_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/offers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 221,  403 => 219,  398 => 217,  394 => 216,  387 => 212,  383 => 211,  378 => 209,  373 => 207,  369 => 206,  359 => 199,  354 => 197,  349 => 195,  345 => 194,  335 => 187,  330 => 185,  325 => 183,  321 => 182,  289 => 153,  281 => 148,  273 => 143,  263 => 136,  259 => 135,  245 => 124,  241 => 123,  227 => 112,  223 => 111,  205 => 96,  197 => 91,  190 => 87,  186 => 86,  165 => 68,  158 => 64,  154 => 63,  139 => 51,  132 => 47,  128 => 46,  114 => 35,  110 => 34,  95 => 22,  87 => 17,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Offers from Clients</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Job Title</th>
                                    <th>Assigned</th>
                                    <th>Offer</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src=\"{{ asset('img/users/12.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Profile') }}\">Benjamin Robinson</a>
                                    </td>
                                    <td><a href=\"{{ path('template_Jobpost') }}\">I need a designer to design a logo & questionnaire for a Nutrition Company</a></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"{{ path('template_Viewoffer') }}\" class=\"kafe-btn kafe-btn-mint-small\"> View Offer</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Accept the Job\"><span class=\"fa fa-check\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"{{ asset('img/users/11.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Profile') }}\">Anna Morgan</a>
                                    </td>
                                    <td><a href=\"{{ path('template_Jobpost') }}\">Professional writer required</a></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"{{ path('template_Viewoffer') }}\" class=\"kafe-btn kafe-btn-mint-small\"> View Offer</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Accept the Job\"><span class=\"fa fa-check\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"{{ asset('img/users/10.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Profile') }}\">Sean Coleman</a>
                                    </td>
                                    <td><a href=\"{{ path('template_Jobpost') }}\">Content Writers Needed</a></td>
                                    <td><span class=\"label label-mint\">Assigned</span></td>
                                    <td><a href=\"{{ path('template_Viewoffer') }}\" class=\"kafe-btn kafe-btn-mint-small\"> View Offer</a></td>
                                    <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"{{ asset('img/users/9.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Profile') }}\">Vanessa Wells</a>
                                    </td>
                                    <td><a href=\"{{ path('template_Jobpost') }}\">Website Design</a></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"{{ path('template_Viewoffer') }}\" class=\"kafe-btn kafe-btn-mint-small\"> View Offer</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Accept the Job\"><span class=\"fa fa-check\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Freelancer</th>
                                    <th>Job Title</th>
                                    <th>Assigned</th>
                                    <th>Proposal</th>
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
  {% endblock %}", "@Fix/Frontend/Default/offers.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\offers.html.twig");
    }
}
