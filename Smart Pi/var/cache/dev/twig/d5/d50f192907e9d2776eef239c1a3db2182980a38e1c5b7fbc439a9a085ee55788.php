<?php

/* FixBundle:Frontend/Default:password.html.twig */
class __TwigTemplate_81ef9d581825bf954d940234cbf5ed42063772cb3e0de40a3215020983131e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:password.html.twig", 1);
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
        $__internal_841a907b2426e1f3b881f730cc59a725d0c57a24e050df77fee34c3f4cc04217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841a907b2426e1f3b881f730cc59a725d0c57a24e050df77fee34c3f4cc04217->enter($__internal_841a907b2426e1f3b881f730cc59a725d0c57a24e050df77fee34c3f4cc04217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:password.html.twig"));

        $__internal_13f4a9297f7e917cdc87fc0dc2b0404d8b57af56b379097e41dad9643bc91ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f4a9297f7e917cdc87fc0dc2b0404d8b57af56b379097e41dad9643bc91ced->enter($__internal_13f4a9297f7e917cdc87fc0dc2b0404d8b57af56b379097e41dad9643bc91ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_841a907b2426e1f3b881f730cc59a725d0c57a24e050df77fee34c3f4cc04217->leave($__internal_841a907b2426e1f3b881f730cc59a725d0c57a24e050df77fee34c3f4cc04217_prof);

        
        $__internal_13f4a9297f7e917cdc87fc0dc2b0404d8b57af56b379097e41dad9643bc91ced->leave($__internal_13f4a9297f7e917cdc87fc0dc2b0404d8b57af56b379097e41dad9643bc91ced_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_5453e3cc019740f1298d2abb8a15682e7c757ecfeafcb359e2d5a9a972758056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5453e3cc019740f1298d2abb8a15682e7c757ecfeafcb359e2d5a9a972758056->enter($__internal_5453e3cc019740f1298d2abb8a15682e7c757ecfeafcb359e2d5a9a972758056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_15805d9b3b3d567c85540d1a6421b4e77bc7dd1c62d7010a8fc627cd98609b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15805d9b3b3d567c85540d1a6421b4e77bc7dd1c62d7010a8fc627cd98609b49->enter($__internal_15805d9b3b3d567c85540d1a6421b4e77bc7dd1c62d7010a8fc627cd98609b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_15805d9b3b3d567c85540d1a6421b4e77bc7dd1c62d7010a8fc627cd98609b49->leave($__internal_15805d9b3b3d567c85540d1a6421b4e77bc7dd1c62d7010a8fc627cd98609b49_prof);

        
        $__internal_5453e3cc019740f1298d2abb8a15682e7c757ecfeafcb359e2d5a9a972758056->leave($__internal_5453e3cc019740f1298d2abb8a15682e7c757ecfeafcb359e2d5a9a972758056_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_47528e00e37f3fc52220df10ce023a096f9734f50b64703e65b586fe56d7f1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47528e00e37f3fc52220df10ce023a096f9734f50b64703e65b586fe56d7f1e1->enter($__internal_47528e00e37f3fc52220df10ce023a096f9734f50b64703e65b586fe56d7f1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_1c6589f5a4b4d41a9a29c38968aaa091db20159450d038335ea58f507ec86039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6589f5a4b4d41a9a29c38968aaa091db20159450d038335ea58f507ec86039->enter($__internal_1c6589f5a4b4d41a9a29c38968aaa091db20159450d038335ea58f507ec86039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "<body>


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
                    <li class=\"active\">
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

                <div class=\"job-box\">
                    <div class=\"job-header\">
                        <h4>Change your Password</h4>
                    </div>
                    <form method=\"post\" id=\"addform\">

                        <div class=\"form-group\">
                            <label>Current Password</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Current Password\" value=\"\"/>
                        </div>

                        <div class=\"form-group\">
                            <label>New Password</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"New Password\" value=\"\"/>
                        </div>

                        <div class=\"form-group\">
                            <label>Confirm Password</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Confirm Password\" value=\"\"/>
                        </div>

                        <button class=\"kafe-btn kafe-btn-mint-small full-width\">Submit</button>
                    </form>
                </div><!-- /.job-box -->

            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
  ";
        
        $__internal_1c6589f5a4b4d41a9a29c38968aaa091db20159450d038335ea58f507ec86039->leave($__internal_1c6589f5a4b4d41a9a29c38968aaa091db20159450d038335ea58f507ec86039_prof);

        
        $__internal_47528e00e37f3fc52220df10ce023a096f9734f50b64703e65b586fe56d7f1e1->leave($__internal_47528e00e37f3fc52220df10ce023a096f9734f50b64703e65b586fe56d7f1e1_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 153,  279 => 148,  271 => 143,  261 => 136,  257 => 135,  243 => 124,  239 => 123,  225 => 112,  221 => 111,  203 => 96,  195 => 91,  188 => 87,  184 => 86,  163 => 68,  156 => 64,  152 => 63,  137 => 51,  130 => 47,  126 => 46,  112 => 35,  108 => 34,  93 => 22,  85 => 17,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                    <li class=\"active\">
                        <a href=\"{{ path('template_Password') }}\">
                            <i class=\"fa fa-lock\"></i> <span>Change Password</span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class=\"col-sm-8 col-md-9\">

                <div class=\"job-box\">
                    <div class=\"job-header\">
                        <h4>Change your Password</h4>
                    </div>
                    <form method=\"post\" id=\"addform\">

                        <div class=\"form-group\">
                            <label>Current Password</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Current Password\" value=\"\"/>
                        </div>

                        <div class=\"form-group\">
                            <label>New Password</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"New Password\" value=\"\"/>
                        </div>

                        <div class=\"form-group\">
                            <label>Confirm Password</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Confirm Password\" value=\"\"/>
                        </div>

                        <button class=\"kafe-btn kafe-btn-mint-small full-width\">Submit</button>
                    </form>
                </div><!-- /.job-box -->

            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
  {% endblock %}", "FixBundle:Frontend/Default:password.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/password.html.twig");
    }
}
