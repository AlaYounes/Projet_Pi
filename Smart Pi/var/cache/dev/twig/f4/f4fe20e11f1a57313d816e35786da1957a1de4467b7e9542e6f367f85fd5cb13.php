<?php

/* @Fix/Frontend/Default/milestone.html.twig */
class __TwigTemplate_ab70122f5d57d8ebd1c5b321b333dd59229a2a2c4f991a9299ef8c09c7e1c082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/milestone.html.twig", 1);
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
        $__internal_681378a10d4383115796162184216013f0a13b983289290eb4c8cb97e179f27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681378a10d4383115796162184216013f0a13b983289290eb4c8cb97e179f27f->enter($__internal_681378a10d4383115796162184216013f0a13b983289290eb4c8cb97e179f27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/milestone.html.twig"));

        $__internal_4c35690d019acab5df01af0c327adafe39098ea084435f255b73d59301690134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c35690d019acab5df01af0c327adafe39098ea084435f255b73d59301690134->enter($__internal_4c35690d019acab5df01af0c327adafe39098ea084435f255b73d59301690134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/milestone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_681378a10d4383115796162184216013f0a13b983289290eb4c8cb97e179f27f->leave($__internal_681378a10d4383115796162184216013f0a13b983289290eb4c8cb97e179f27f_prof);

        
        $__internal_4c35690d019acab5df01af0c327adafe39098ea084435f255b73d59301690134->leave($__internal_4c35690d019acab5df01af0c327adafe39098ea084435f255b73d59301690134_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_dd26a15df29745fb2bedd6110c1503d7f94a67df2e7b2894423712f57c2405c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd26a15df29745fb2bedd6110c1503d7f94a67df2e7b2894423712f57c2405c3->enter($__internal_dd26a15df29745fb2bedd6110c1503d7f94a67df2e7b2894423712f57c2405c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_862e4f411c68c404ac4fc5af9a3ac77ac938c564b251814b0e5dcf55b0df596c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862e4f411c68c404ac4fc5af9a3ac77ac938c564b251814b0e5dcf55b0df596c->enter($__internal_862e4f411c68c404ac4fc5af9a3ac77ac938c564b251814b0e5dcf55b0df596c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_862e4f411c68c404ac4fc5af9a3ac77ac938c564b251814b0e5dcf55b0df596c->leave($__internal_862e4f411c68c404ac4fc5af9a3ac77ac938c564b251814b0e5dcf55b0df596c_prof);

        
        $__internal_dd26a15df29745fb2bedd6110c1503d7f94a67df2e7b2894423712f57c2405c3->leave($__internal_dd26a15df29745fb2bedd6110c1503d7f94a67df2e7b2894423712f57c2405c3_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_396f33dc78b95c9e2edc8130fe510f2333a844694e2f2b0e16cf666587776adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396f33dc78b95c9e2edc8130fe510f2333a844694e2f2b0e16cf666587776adc->enter($__internal_396f33dc78b95c9e2edc8130fe510f2333a844694e2f2b0e16cf666587776adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_e19ea87268a6995b3fe665392cbbed5fd78ebf148582cb7691c0c502679589b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19ea87268a6995b3fe665392cbbed5fd78ebf148582cb7691c0c502679589b2->enter($__internal_e19ea87268a6995b3fe665392cbbed5fd78ebf148582cb7691c0c502679589b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "<body>

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
                        <li class=\"active\"><a href=\"";
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
                    <a href=\"#addm\" class=\"kafe-btn kafe-btn-mint-small\" data-toggle=\"modal\">Add Milestone</a>
                </div><!-- /.prop-info -->


                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Milestones</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Progress</th>
                                    <th>Name</th>
                                    <th>Budget</th>
                                    <th>Date to start</th>
                                    <th>Date to end</th>
                                    <th>Paid</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input class=\"knob\" data-width=\"75\" data-angleOffset=\"40\" data-linecap=\"round\" data-fgColor=\"#00C4CF\" value=\"90\" style=\"\"/></td>
                                    <td>Research</td>
                                    <td>\$60</td>
                                    <td>20th July 2018</td>
                                    <td>31th July 2018</td>
                                    <td><span class=\"label label-mint\">Paid</span></td>
                                    <td><a href=\"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Milestone");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Pay with PayPal</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"knob\" data-width=\"75\" data-angleOffset=\"40\" data-linecap=\"round\" data-fgColor=\"#00C4CF\" value=\"20\" style=\"\"/></td>
                                    <td>Design</td>
                                    <td>\$200</td>
                                    <td>20th July 2018</td>
                                    <td>31th July 2018</td>
                                    <td><span class=\"label label-mint\">Not Paid</span></td>
                                    <td><a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Milestone");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Pay with PayPal</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"knob\" data-width=\"75\" data-angleOffset=\"40\" data-linecap=\"round\" data-fgColor=\"#00C4CF\" value=\"40\" style=\"\"/></td>
                                    <td>Graphics</td>
                                    <td>\$150</td>
                                    <td>20th July 2018</td>
                                    <td>31th July 2018</td>
                                    <td><span class=\"label label-mint\">Not Paid</span></td>
                                    <td><a href=\"";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Milestone");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Pay with PayPal</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"knob\" data-width=\"75\" data-angleOffset=\"40\" data-linecap=\"round\" data-fgColor=\"#00C4CF\" value=\"10\" style=\"\"/></td>
                                    <td>Development</td>
                                    <td>\$250</td>
                                    <td>20th July 2018</td>
                                    <td>31th July 2018</td>
                                    <td><span class=\"label label-mint\">Not Paid</span></td>
                                    <td><a href=\"";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Milestone");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Pay with PayPal</a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Progress</th>
                                    <th>Name</th>
                                    <th>Budget</th>
                                    <th>Date to start</th>
                                    <th>Date to end</th>
                                    <th>Paid</th>
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
                <h4 class=\"modal-title\">Add Milestone</h4>
            </div>
            <div class=\"modal-body\">
                <form method=\"post\" id=\"addform\">

                    <div class=\"form-group\">
                        <label>Name</label>
                        <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Name\" value=\"\"/>
                    </div>

                    <div class=\"form-group\">
                        <label>Description</label>
                        <textarea id=\"description\" class=\"form-control\" rows=\"5\" placeholder=\"Description\"></textarea>
                    </div>

                    <div class=\"form-group\">
                        <label>Budget</label>
                        <input type=\"text\" id=\"budget\" class=\"form-control\" placeholder=\"Budget\" value=\"\"/>
                    </div>

                    <div class=\"form-group\">
                        <label>Progress</label>
                        <div class=\"slider sliderMin sliderMint\" id=\"progress\"></div>
                        <div class=\"field_notice\">Percent: <span class=\"must sliderMinLabel\">0%</span></div>
                    </div>

                    <div class=\"form-group\">
                        <label>Start Date</label>
                        <div class=\"input-group date start\" data-date-format=\"dd MM yyyy\" data-link-field=\"dtp_input1\">
                            <input id=\"start_date\" class=\"form-control\" type=\"text\" value=\"\" readonly>
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-th\"></i></span>
                        </div>
                        <input type=\"hidden\" id=\"dtp_input1\" value=\"\" /><br/>
                    </div>

                    <div class=\"form-group\">
                        <label>End Date</label>
                        <div class=\"input-group date end\" data-date-format=\"dd MM yyyy\" data-link-field=\"dtp_input2\">
                            <input id=\"end_date\" class=\"form-control\" type=\"text\" value=\"\" readonly>
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-th\"></i></span>
                        </div>
                        <input type=\"hidden\" id=\"dtp_input2\" value=\"\" /><br/>
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
        
        $__internal_e19ea87268a6995b3fe665392cbbed5fd78ebf148582cb7691c0c502679589b2->leave($__internal_e19ea87268a6995b3fe665392cbbed5fd78ebf148582cb7691c0c502679589b2_prof);

        
        $__internal_396f33dc78b95c9e2edc8130fe510f2333a844694e2f2b0e16cf666587776adc->leave($__internal_396f33dc78b95c9e2edc8130fe510f2333a844694e2f2b0e16cf666587776adc_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/milestone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 235,  396 => 226,  384 => 217,  372 => 208,  333 => 172,  329 => 171,  325 => 170,  321 => 169,  317 => 168,  313 => 167,  309 => 166,  305 => 165,  301 => 164,  286 => 152,  278 => 147,  270 => 142,  260 => 135,  256 => 134,  242 => 123,  238 => 122,  224 => 111,  220 => 110,  202 => 95,  194 => 90,  187 => 86,  183 => 85,  162 => 67,  155 => 63,  151 => 62,  136 => 50,  129 => 46,  125 => 45,  111 => 34,  107 => 33,  92 => 21,  84 => 16,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                        <li class=\"active\"><a href=\"{{ path('template_Milestone') }}\">Milestones</a></li>
                        <li><a href=\"{{ path('template_Task') }}\">Tasks</a></li>
                        <li><a href=\"{{ path('template_Timesheet') }}\">Timesheets</a></li>
                        <li><a href=\"{{ path('template_File') }}\">Files</a></li>
                        <li><a href=\"{{ path('template_Link') }}\">Links</a></li>
                        <li><a href=\"{{ path('template_Bug') }}\">Bugs</a></li>
                        <li><a href=\"{{ path('template_Payement') }}\">Payments</a></li>
                        <li><a href=\"{{ path('template_Rate') }}\">Rate the Freelancer</a></li>

                    </ul>
                </div><!-- /.pro-nav -->

                <div class=\"button-box\">
                    <a href=\"#addm\" class=\"kafe-btn kafe-btn-mint-small\" data-toggle=\"modal\">Add Milestone</a>
                </div><!-- /.prop-info -->


                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Milestones</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Progress</th>
                                    <th>Name</th>
                                    <th>Budget</th>
                                    <th>Date to start</th>
                                    <th>Date to end</th>
                                    <th>Paid</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input class=\"knob\" data-width=\"75\" data-angleOffset=\"40\" data-linecap=\"round\" data-fgColor=\"#00C4CF\" value=\"90\" style=\"\"/></td>
                                    <td>Research</td>
                                    <td>\$60</td>
                                    <td>20th July 2018</td>
                                    <td>31th July 2018</td>
                                    <td><span class=\"label label-mint\">Paid</span></td>
                                    <td><a href=\"{{ path('template_Milestone') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Pay with PayPal</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"knob\" data-width=\"75\" data-angleOffset=\"40\" data-linecap=\"round\" data-fgColor=\"#00C4CF\" value=\"20\" style=\"\"/></td>
                                    <td>Design</td>
                                    <td>\$200</td>
                                    <td>20th July 2018</td>
                                    <td>31th July 2018</td>
                                    <td><span class=\"label label-mint\">Not Paid</span></td>
                                    <td><a href=\"{{ path('template_Milestone') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Pay with PayPal</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"knob\" data-width=\"75\" data-angleOffset=\"40\" data-linecap=\"round\" data-fgColor=\"#00C4CF\" value=\"40\" style=\"\"/></td>
                                    <td>Graphics</td>
                                    <td>\$150</td>
                                    <td>20th July 2018</td>
                                    <td>31th July 2018</td>
                                    <td><span class=\"label label-mint\">Not Paid</span></td>
                                    <td><a href=\"{{ path('template_Milestone') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Pay with PayPal</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"knob\" data-width=\"75\" data-angleOffset=\"40\" data-linecap=\"round\" data-fgColor=\"#00C4CF\" value=\"10\" style=\"\"/></td>
                                    <td>Development</td>
                                    <td>\$250</td>
                                    <td>20th July 2018</td>
                                    <td>31th July 2018</td>
                                    <td><span class=\"label label-mint\">Not Paid</span></td>
                                    <td><a href=\"{{ path('template_Milestone') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Pay with PayPal</a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Progress</th>
                                    <th>Name</th>
                                    <th>Budget</th>
                                    <th>Date to start</th>
                                    <th>Date to end</th>
                                    <th>Paid</th>
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
                <h4 class=\"modal-title\">Add Milestone</h4>
            </div>
            <div class=\"modal-body\">
                <form method=\"post\" id=\"addform\">

                    <div class=\"form-group\">
                        <label>Name</label>
                        <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Name\" value=\"\"/>
                    </div>

                    <div class=\"form-group\">
                        <label>Description</label>
                        <textarea id=\"description\" class=\"form-control\" rows=\"5\" placeholder=\"Description\"></textarea>
                    </div>

                    <div class=\"form-group\">
                        <label>Budget</label>
                        <input type=\"text\" id=\"budget\" class=\"form-control\" placeholder=\"Budget\" value=\"\"/>
                    </div>

                    <div class=\"form-group\">
                        <label>Progress</label>
                        <div class=\"slider sliderMin sliderMint\" id=\"progress\"></div>
                        <div class=\"field_notice\">Percent: <span class=\"must sliderMinLabel\">0%</span></div>
                    </div>

                    <div class=\"form-group\">
                        <label>Start Date</label>
                        <div class=\"input-group date start\" data-date-format=\"dd MM yyyy\" data-link-field=\"dtp_input1\">
                            <input id=\"start_date\" class=\"form-control\" type=\"text\" value=\"\" readonly>
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-th\"></i></span>
                        </div>
                        <input type=\"hidden\" id=\"dtp_input1\" value=\"\" /><br/>
                    </div>

                    <div class=\"form-group\">
                        <label>End Date</label>
                        <div class=\"input-group date end\" data-date-format=\"dd MM yyyy\" data-link-field=\"dtp_input2\">
                            <input id=\"end_date\" class=\"form-control\" type=\"text\" value=\"\" readonly>
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-th\"></i></span>
                        </div>
                        <input type=\"hidden\" id=\"dtp_input2\" value=\"\" /><br/>
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
  {% endblock %}", "@Fix/Frontend/Default/milestone.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\milestone.html.twig");
    }
}
