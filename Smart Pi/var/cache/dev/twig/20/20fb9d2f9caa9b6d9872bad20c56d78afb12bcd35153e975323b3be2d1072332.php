<?php

/* FixBundle:Frontend/Default:jobpasted.html.twig */
class __TwigTemplate_fc3a3840b16e3a8b49ec1ee37d5e20368db7875675798754c08bbf15a299cfa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:jobpasted.html.twig", 1);
        $this->blocks = array(
            'stylesheat' => array($this, 'block_stylesheat'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_147dc04d1c4f77946c94b35fefe5056ed588d7b029c29fd5a97a114f892a2561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147dc04d1c4f77946c94b35fefe5056ed588d7b029c29fd5a97a114f892a2561->enter($__internal_147dc04d1c4f77946c94b35fefe5056ed588d7b029c29fd5a97a114f892a2561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:jobpasted.html.twig"));

        $__internal_e8f88ca4afca1f18d2936dc2652c3725a1c41db9b976a34ee41342cc4ac0045e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f88ca4afca1f18d2936dc2652c3725a1c41db9b976a34ee41342cc4ac0045e->enter($__internal_e8f88ca4afca1f18d2936dc2652c3725a1c41db9b976a34ee41342cc4ac0045e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:jobpasted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_147dc04d1c4f77946c94b35fefe5056ed588d7b029c29fd5a97a114f892a2561->leave($__internal_147dc04d1c4f77946c94b35fefe5056ed588d7b029c29fd5a97a114f892a2561_prof);

        
        $__internal_e8f88ca4afca1f18d2936dc2652c3725a1c41db9b976a34ee41342cc4ac0045e->leave($__internal_e8f88ca4afca1f18d2936dc2652c3725a1c41db9b976a34ee41342cc4ac0045e_prof);

    }

    // line 2
    public function block_stylesheat($context, array $blocks = array())
    {
        $__internal_e3a68f6496b4ccbde181305e882135926265917c87f1539bf12ff4a72f64d2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a68f6496b4ccbde181305e882135926265917c87f1539bf12ff4a72f64d2a6->enter($__internal_e3a68f6496b4ccbde181305e882135926265917c87f1539bf12ff4a72f64d2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        $__internal_2300a7d55af97ad198bf9861f79d05155e12a8123e5726ec5c4f58e05bafe511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2300a7d55af97ad198bf9861f79d05155e12a8123e5726ec5c4f58e05bafe511->enter($__internal_2300a7d55af97ad198bf9861f79d05155e12a8123e5726ec5c4f58e05bafe511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheat"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheat", $context, $blocks);
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2300a7d55af97ad198bf9861f79d05155e12a8123e5726ec5c4f58e05bafe511->leave($__internal_2300a7d55af97ad198bf9861f79d05155e12a8123e5726ec5c4f58e05bafe511_prof);

        
        $__internal_e3a68f6496b4ccbde181305e882135926265917c87f1539bf12ff4a72f64d2a6->leave($__internal_e3a68f6496b4ccbde181305e882135926265917c87f1539bf12ff4a72f64d2a6_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_29133325819b8ba0b059c5a289d1df4d664c01b16ea9692b099fec3c4f7e0ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29133325819b8ba0b059c5a289d1df4d664c01b16ea9692b099fec3c4f7e0ed4->enter($__internal_29133325819b8ba0b059c5a289d1df4d664c01b16ea9692b099fec3c4f7e0ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c3a9e9aa78dfadb69f9dd5c9316d018a5ca365bd893e86fe8fde1f498d937793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a9e9aa78dfadb69f9dd5c9316d018a5ca365bd893e86fe8fde1f498d937793->enter($__internal_c3a9e9aa78dfadb69f9dd5c9316d018a5ca365bd893e86fe8fde1f498d937793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_c3a9e9aa78dfadb69f9dd5c9316d018a5ca365bd893e86fe8fde1f498d937793->leave($__internal_c3a9e9aa78dfadb69f9dd5c9316d018a5ca365bd893e86fe8fde1f498d937793_prof);

        
        $__internal_29133325819b8ba0b059c5a289d1df4d664c01b16ea9692b099fec3c4f7e0ed4->leave($__internal_29133325819b8ba0b059c5a289d1df4d664c01b16ea9692b099fec3c4f7e0ed4_prof);

    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        $__internal_ff3b35483efe9653b70a8aa0e55dd0cbb977e4c8b2ba8d25b37c020bcd821f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3b35483efe9653b70a8aa0e55dd0cbb977e4c8b2ba8d25b37c020bcd821f72->enter($__internal_ff3b35483efe9653b70a8aa0e55dd0cbb977e4c8b2ba8d25b37c020bcd821f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_9da55d1f2d98cc54726f4c06553efe239500d32baf95667829a8d1eb22953721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da55d1f2d98cc54726f4c06553efe239500d32baf95667829a8d1eb22953721->enter($__internal_9da55d1f2d98cc54726f4c06553efe239500d32baf95667829a8d1eb22953721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "<body>
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
                    <li class=\"treeview active\">
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
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                            <li><a href=\"";
        // line 37
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
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_YourPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
                            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_OtherPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 53
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
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_CompanyList");
        echo "\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddCompany");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 70
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
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Deposits");
        echo "\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                            <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Withdrawals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payementmethod");
        echo "\">
                            <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 98
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
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Job_List");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a></li>
                            <li><a href=\"";
        // line 114
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
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Profiles");
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a></li>
                            <li><a href=\"";
        // line 126
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
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Companies");
        echo "\"><i class=\"fa fa-circle-o\"></i> Companies Featured List</a></li>
                            <li><a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your Companies </a></li>
                        </ul>
                    </li>
                </ul>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li>
                        <a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\">
                            <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile_Image");
        echo "\">
                            <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 155
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
                        <h3 class=\"box-title\">Jobs Posted</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Public</th>
                                    <th>Freelancer</th>
                                    <th>Proposals</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\">I need a designer to design a logo & questionnaire for a Nutrition Company</a></td>
                                    <td><span class=\"label label-mint\">Not Public</span></td>
                                    <td>
                                        <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Anna Morgan</a>
                                    </td>
                                    <td><a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> View Proposals</a></td>
                                    <td><a href=\"";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\">Professional writer required</a></td>
                                    <td><span class=\"label label-mint\">Public</span></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> View Proposals</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Hide from Public\"><span class=\"fa fa-lock\"></span></a></td>
                                </tr>

                                <tr>
                                    <td><a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\">Content Writers Needed</a></td>
                                    <td><span class=\"label label-mint\">Not Public</span></td>
                                    <td>
                                        <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile");
        echo "\">Vanessa Wells</a>
                                    </td>
                                    <td><a href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> View Proposals</a></td>
                                    <td><a href=\"";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\">Website Design</a></td>
                                    <td><span class=\"label label-mint\">Public</span></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> View Proposals</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Hide from Public\"><span class=\"fa fa-lock\"></span></a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Public</th>
                                    <th>Freelancer</th>
                                    <th>Proposals</th>
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
        
        $__internal_9da55d1f2d98cc54726f4c06553efe239500d32baf95667829a8d1eb22953721->leave($__internal_9da55d1f2d98cc54726f4c06553efe239500d32baf95667829a8d1eb22953721_prof);

        
        $__internal_ff3b35483efe9653b70a8aa0e55dd0cbb977e4c8b2ba8d25b37c020bcd821f72->leave($__internal_ff3b35483efe9653b70a8aa0e55dd0cbb977e4c8b2ba8d25b37c020bcd821f72_prof);

    }

    // line 246
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3418a30d9b087225fd99f6e625722548ffd4f198d0d28d6ad919af76d632160b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3418a30d9b087225fd99f6e625722548ffd4f198d0d28d6ad919af76d632160b->enter($__internal_3418a30d9b087225fd99f6e625722548ffd4f198d0d28d6ad919af76d632160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_210c8a2c7c3626baf0f88db86ee9d295a943d10b757753f28af5857c34febcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210c8a2c7c3626baf0f88db86ee9d295a943d10b757753f28af5857c34febcb4->enter($__internal_210c8a2c7c3626baf0f88db86ee9d295a943d10b757753f28af5857c34febcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 247
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DATA TABES SCRIPT -->
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function () {
        \$(\"#example1\").dataTable();
    });
</script>
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/kafe.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_210c8a2c7c3626baf0f88db86ee9d295a943d10b757753f28af5857c34febcb4->leave($__internal_210c8a2c7c3626baf0f88db86ee9d295a943d10b757753f28af5857c34febcb4_prof);

        
        $__internal_3418a30d9b087225fd99f6e625722548ffd4f198d0d28d6ad919af76d632160b->leave($__internal_3418a30d9b087225fd99f6e625722548ffd4f198d0d28d6ad919af76d632160b_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:jobpasted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 256,  474 => 250,  470 => 249,  464 => 247,  455 => 246,  417 => 217,  411 => 214,  405 => 211,  401 => 210,  396 => 208,  392 => 207,  386 => 204,  375 => 196,  369 => 193,  363 => 190,  359 => 189,  354 => 187,  350 => 186,  344 => 183,  313 => 155,  305 => 150,  297 => 145,  287 => 138,  283 => 137,  269 => 126,  265 => 125,  251 => 114,  247 => 113,  229 => 98,  221 => 93,  214 => 89,  210 => 88,  189 => 70,  182 => 66,  178 => 65,  163 => 53,  156 => 49,  152 => 48,  138 => 37,  134 => 36,  119 => 24,  111 => 19,  100 => 10,  91 => 9,  78 => 7,  69 => 6,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
{% block stylesheat %}
    {{ parent() }}
    <script src=\"{{ asset('js/modernizr.custom.js') }}\"></script>
{% endblock %}
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
                    <li>
                        <a href=\"{{ path('template_Contract') }}\">
                            <i class=\"fa fa-align-left\"></i> <span>Contracts</span>
                        </a>
                    </li>
                    <li class=\"treeview active\">
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

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Jobs Posted</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Public</th>
                                    <th>Freelancer</th>
                                    <th>Proposals</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href=\"{{ path('template_JobPasted') }}\">I need a designer to design a logo & questionnaire for a Nutrition Company</a></td>
                                    <td><span class=\"label label-mint\">Not Public</span></td>
                                    <td>
                                        <img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Profile') }}\">Anna Morgan</a>
                                    </td>
                                    <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> View Proposals</a></td>
                                    <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"{{ path('template_JobPasted') }}\">Professional writer required</a></td>
                                    <td><span class=\"label label-mint\">Public</span></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> View Proposals</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Hide from Public\"><span class=\"fa fa-lock\"></span></a></td>
                                </tr>

                                <tr>
                                    <td><a href=\"{{ path('template_JobPasted') }}\">Content Writers Needed</a></td>
                                    <td><span class=\"label label-mint\">Not Public</span></td>
                                    <td>
                                        <img src=\"{{ asset('img/users/6.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Profile') }}\">Vanessa Wells</a>
                                    </td>
                                    <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> View Proposals</a></td>
                                    <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Go to Workroom</a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"{{ path('template_JobPasted') }}\">Website Design</a></td>
                                    <td><span class=\"label label-mint\">Public</span></td>
                                    <td><span class=\"label label-mint\">Not Assigned</span></td>
                                    <td><a href=\"{{ path('template_Workroom') }}\" class=\"kafe-btn kafe-btn-mint-small\"> View Proposals</a></td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Hide from Public\"><span class=\"fa fa-lock\"></span></a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Public</th>
                                    <th>Freelancer</th>
                                    <th>Proposals</th>
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
  {% endblock %}

    {% block javascripts %}
    {{ parent() }}
    <!-- DATA TABES SCRIPT -->
<script src=\"{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}\"></script>
<script>
    \$(function () {
        \$(\"#example1\").dataTable();
    });
</script>
<script src=\"{{ asset('/js/kafe.js') }}\"></script>
    {% endblock %}", "FixBundle:Frontend/Default:jobpasted.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/jobpasted.html.twig");
    }
}
