<?php

/* @Fix/Frontend/Default/Link.html.twig */
class __TwigTemplate_95818836a90eddb101d69c8dd321b4f228d73438bc6b906eae2a1f1e72624b15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Link.html.twig", 1);
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
        $__internal_9cc1a1146b663907cd1b559ed6e062f8aeefead69e460ff1f1266fba01618e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc1a1146b663907cd1b559ed6e062f8aeefead69e460ff1f1266fba01618e5e->enter($__internal_9cc1a1146b663907cd1b559ed6e062f8aeefead69e460ff1f1266fba01618e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Link.html.twig"));

        $__internal_9a1fea7be42003ab3f533eff2b5d2985c7bf8300f57dd86680a536b4bb6fddff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1fea7be42003ab3f533eff2b5d2985c7bf8300f57dd86680a536b4bb6fddff->enter($__internal_9a1fea7be42003ab3f533eff2b5d2985c7bf8300f57dd86680a536b4bb6fddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Link.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc1a1146b663907cd1b559ed6e062f8aeefead69e460ff1f1266fba01618e5e->leave($__internal_9cc1a1146b663907cd1b559ed6e062f8aeefead69e460ff1f1266fba01618e5e_prof);

        
        $__internal_9a1fea7be42003ab3f533eff2b5d2985c7bf8300f57dd86680a536b4bb6fddff->leave($__internal_9a1fea7be42003ab3f533eff2b5d2985c7bf8300f57dd86680a536b4bb6fddff_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_fd8a3364dbd088701d92fe6a03d7bba67fdcbed31e8ef1d8f31a971f7a5c1a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8a3364dbd088701d92fe6a03d7bba67fdcbed31e8ef1d8f31a971f7a5c1a24->enter($__internal_fd8a3364dbd088701d92fe6a03d7bba67fdcbed31e8ef1d8f31a971f7a5c1a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8f8e75fed6a65dffcbc7f343c4dd6ae04f579ae39d4e94766ffed9c196351c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8e75fed6a65dffcbc7f343c4dd6ae04f579ae39d4e94766ffed9c196351c4d->enter($__internal_8f8e75fed6a65dffcbc7f343c4dd6ae04f579ae39d4e94766ffed9c196351c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_8f8e75fed6a65dffcbc7f343c4dd6ae04f579ae39d4e94766ffed9c196351c4d->leave($__internal_8f8e75fed6a65dffcbc7f343c4dd6ae04f579ae39d4e94766ffed9c196351c4d_prof);

        
        $__internal_fd8a3364dbd088701d92fe6a03d7bba67fdcbed31e8ef1d8f31a971f7a5c1a24->leave($__internal_fd8a3364dbd088701d92fe6a03d7bba67fdcbed31e8ef1d8f31a971f7a5c1a24_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_6f7698a2b5003f692beafaaae5e1f169d72cd555e31fc14127cee4f1036d1572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7698a2b5003f692beafaaae5e1f169d72cd555e31fc14127cee4f1036d1572->enter($__internal_6f7698a2b5003f692beafaaae5e1f169d72cd555e31fc14127cee4f1036d1572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_0d07541774f71ce1caba7604d538fa3f89c5526b655fb8015d0a6810f13b5317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d07541774f71ce1caba7604d538fa3f89c5526b655fb8015d0a6810f13b5317->enter($__internal_0d07541774f71ce1caba7604d538fa3f89c5526b655fb8015d0a6810f13b5317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                        <li><a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Timesheet");
        echo "\">Timesheets</a></li>
                        <li><a href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_File");
        echo "\">Files</a></li>
                        <li class=\"active\"><a href=\"";
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
                    <a href=\"#addm\" class=\"kafe-btn kafe-btn-mint-small\" data-toggle=\"modal\">Add Link</a>
                </div><!-- /.prop-info -->


                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Links</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href=\"#\">How to install the project</a></td>
                                    <td>I have provided a link on how to install the project.</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"#\">How to solve the error</a></td>
                                    <td>I have provided a link on how to solve the error.</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"#\">Resources I used.</a></td>
                                    <td>I have provided a link on all the resources I used.</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"#\">My Resume.</a></td>
                                    <td>I have provided a downlable link for my resume.</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
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
</section>


<!-- Modal HTML -->
<div id=\"addm\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Add Link</h4>
            </div>
            <div class=\"modal-body\">
                <form method=\"post\" id=\"addform\">

                    <div class=\"form-group\">
                        <label>Title</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Title\" value=\"\"/>
                    </div>

                    <div class=\"form-group\">
                        <label>Description</label>
                        <textarea class=\"form-control\" rows=\"5\" placeholder=\"Description\"></textarea>
                    </div>

                    <div class=\"form-group\">
                        <label>Link</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"http://\" value=\"\"/>
                    </div>


                    <div class=\"modal-footer\">
                        <input type=\"hidden\" name=\"token\" value=\"d1f6244156c91a1d77d05e263902a827\" />
                        <button type=\"button\" class=\"kafe-btn kafe-btn-default-small\" data-dismiss=\"modal\">Close</button>
                        <button onclick=\"addmilestone()\"  class=\"kafe-btn kafe-btn-mint-small\">Submit</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_0d07541774f71ce1caba7604d538fa3f89c5526b655fb8015d0a6810f13b5317->leave($__internal_0d07541774f71ce1caba7604d538fa3f89c5526b655fb8015d0a6810f13b5317_prof);

        
        $__internal_6f7698a2b5003f692beafaaae5e1f169d72cd555e31fc14127cee4f1036d1572->leave($__internal_6f7698a2b5003f692beafaaae5e1f169d72cd555e31fc14127cee4f1036d1572_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 172,  331 => 171,  327 => 170,  323 => 169,  319 => 168,  315 => 167,  311 => 166,  307 => 165,  303 => 164,  288 => 152,  280 => 147,  272 => 142,  262 => 135,  258 => 134,  244 => 123,  240 => 122,  226 => 111,  222 => 110,  204 => 95,  196 => 90,  189 => 86,  185 => 85,  164 => 67,  157 => 63,  153 => 62,  138 => 50,  131 => 46,  127 => 45,  113 => 34,  109 => 33,  94 => 21,  86 => 16,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                        <li><a href=\"{{ path('template_Timesheet') }}\">Timesheets</a></li>
                        <li><a href=\"{{ path('template_File') }}\">Files</a></li>
                        <li class=\"active\"><a href=\"{{ path('template_Link') }}\">Links</a></li>
                        <li><a href=\"{{ path('template_Bug') }}\">Bugs</a></li>
                        <li><a href=\"{{ path('template_Payement') }}\">Payments</a></li>
                        <li><a href=\"{{ path('template_Rate') }}\">Rate the Freelancer</a></li>

                    </ul>
                </div><!-- /.pro-nav -->

                <div class=\"button-box\">
                    <a href=\"#addm\" class=\"kafe-btn kafe-btn-mint-small\" data-toggle=\"modal\">Add Link</a>
                </div><!-- /.prop-info -->


                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Links</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href=\"#\">How to install the project</a></td>
                                    <td>I have provided a link on how to install the project.</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"#\">How to solve the error</a></td>
                                    <td>I have provided a link on how to solve the error.</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"#\">Resources I used.</a></td>
                                    <td>I have provided a link on all the resources I used.</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"#\">My Resume.</a></td>
                                    <td>I have provided a downlable link for my resume.</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"fa fa-edit\"></span></a>
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" title=\"Delete\"><span class=\"fa fa-trash\"></span></a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
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
</section>


<!-- Modal HTML -->
<div id=\"addm\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Add Link</h4>
            </div>
            <div class=\"modal-body\">
                <form method=\"post\" id=\"addform\">

                    <div class=\"form-group\">
                        <label>Title</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Title\" value=\"\"/>
                    </div>

                    <div class=\"form-group\">
                        <label>Description</label>
                        <textarea class=\"form-control\" rows=\"5\" placeholder=\"Description\"></textarea>
                    </div>

                    <div class=\"form-group\">
                        <label>Link</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"http://\" value=\"\"/>
                    </div>


                    <div class=\"modal-footer\">
                        <input type=\"hidden\" name=\"token\" value=\"d1f6244156c91a1d77d05e263902a827\" />
                        <button type=\"button\" class=\"kafe-btn kafe-btn-default-small\" data-dismiss=\"modal\">Close</button>
                        <button onclick=\"addmilestone()\"  class=\"kafe-btn kafe-btn-mint-small\">Submit</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
{% endblock %}
", "@Fix/Frontend/Default/Link.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Link.html.twig");
    }
}
