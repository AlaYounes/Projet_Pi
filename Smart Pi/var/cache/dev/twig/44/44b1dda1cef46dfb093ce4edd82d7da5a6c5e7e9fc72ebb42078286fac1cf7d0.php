<?php

/* @Fix/Frontend/Default/Rate.html.twig */
class __TwigTemplate_c8504d5c79f58ac3092969733b2cd096d61fcef8662cd08f14f25fc3a658a2e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Rate.html.twig", 1);
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
        $__internal_e360192fd820cb17f2a7e4582b82b6310b26e1ec4798dfc487b7c1baa051ef92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e360192fd820cb17f2a7e4582b82b6310b26e1ec4798dfc487b7c1baa051ef92->enter($__internal_e360192fd820cb17f2a7e4582b82b6310b26e1ec4798dfc487b7c1baa051ef92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Rate.html.twig"));

        $__internal_0893f57917f99cc2a2703f695c2dabad97e4c9b0574af34528ff512f1085f05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0893f57917f99cc2a2703f695c2dabad97e4c9b0574af34528ff512f1085f05e->enter($__internal_0893f57917f99cc2a2703f695c2dabad97e4c9b0574af34528ff512f1085f05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Rate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e360192fd820cb17f2a7e4582b82b6310b26e1ec4798dfc487b7c1baa051ef92->leave($__internal_e360192fd820cb17f2a7e4582b82b6310b26e1ec4798dfc487b7c1baa051ef92_prof);

        
        $__internal_0893f57917f99cc2a2703f695c2dabad97e4c9b0574af34528ff512f1085f05e->leave($__internal_0893f57917f99cc2a2703f695c2dabad97e4c9b0574af34528ff512f1085f05e_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_b5394978e8866020db9f991c4bf1148170d5c7fc2b64b6b1f048eee96cbd8bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5394978e8866020db9f991c4bf1148170d5c7fc2b64b6b1f048eee96cbd8bf6->enter($__internal_b5394978e8866020db9f991c4bf1148170d5c7fc2b64b6b1f048eee96cbd8bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_aa465c6d990db4b8541e614fb5cec2e027184841bb01ed93c28ac46949811b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa465c6d990db4b8541e614fb5cec2e027184841bb01ed93c28ac46949811b37->enter($__internal_aa465c6d990db4b8541e614fb5cec2e027184841bb01ed93c28ac46949811b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_aa465c6d990db4b8541e614fb5cec2e027184841bb01ed93c28ac46949811b37->leave($__internal_aa465c6d990db4b8541e614fb5cec2e027184841bb01ed93c28ac46949811b37_prof);

        
        $__internal_b5394978e8866020db9f991c4bf1148170d5c7fc2b64b6b1f048eee96cbd8bf6->leave($__internal_b5394978e8866020db9f991c4bf1148170d5c7fc2b64b6b1f048eee96cbd8bf6_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_ced9d1424fbe6eff06e862928653227172191f783584396a85ea3827e9ea3a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced9d1424fbe6eff06e862928653227172191f783584396a85ea3827e9ea3a48->enter($__internal_ced9d1424fbe6eff06e862928653227172191f783584396a85ea3827e9ea3a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_25e51fab21c655a88655b5fd6a380eb9841332755f150edbd51d95bc07c1ee5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e51fab21c655a88655b5fd6a380eb9841332755f150edbd51d95bc07c1ee5f->enter($__internal_25e51fab21c655a88655b5fd6a380eb9841332755f150edbd51d95bc07c1ee5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
<section class=\"dashboard section-padding\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-4 col-md-3\">

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Dashboard");
        echo "\">
                            <i class=\"fa fa-life-ring\"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class=\"active\">
                        <a href=\"";
        // line 20
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
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_JobPasted");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Posted</a></li>
                            <li><a href=\"";
        // line 33
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
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_YourPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Your Proposals</a></li>
                            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_OtherPorposals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Other Proposals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 49
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
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_CompanyList");
        echo "\"><i class=\"fa fa-circle-o\"></i> Company List</a></li>
                            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AddCompany");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add a Company</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 66
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
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Deposits");
        echo "\"><i class=\"fa fa-circle-o\"></i> Deposits</a></li>
                            <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Withdrawals");
        echo "\"><i class=\"fa fa-circle-o\"></i> Withdrawals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payementmethod");
        echo "\">
                            <i class=\"fa fa-dot-circle-o\"></i> <span>Payment Method</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 94
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
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Job_List");
        echo "\"><i class=\"fa fa-circle-o\"></i> Jobs Featured List</a></li>
                            <li><a href=\"";
        // line 110
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
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Profiles");
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile Featured List</a></li>
                            <li><a href=\"";
        // line 122
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
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Companies");
        echo "\"><i class=\"fa fa-circle-o\"></i> Companies Featured List</a></li>
                            <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Featured_Your_Company");
        echo "\"><i class=\"fa fa-circle-o\"></i> Feature your Companies </a></li>
                        </ul>
                    </li>
                </ul>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li>
                        <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_EditProfile");
        echo "\">
                            <i class=\"fa fa-user\"></i> <span>Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Profile_Image");
        echo "\">
                            <i class=\"fa fa-image\"></i> <span>Change Profile Image</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 151
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
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Overview & Discussions</a></li>
                        <li><a href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Milestone");
        echo "\">Milestones</a></li>
                        <li><a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Task");
        echo "\">Tasks</a></li>
                        <li><a href=\"";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Timesheet");
        echo "\">Timesheets</a></li>
                        <li><a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_File");
        echo "\">Files</a></li>
                        <li><a href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Link");
        echo "\">Links</a></li>
                        <li><a href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Bug");
        echo "\">Bugs</a></li>
                        <li><a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payement");
        echo "\">Payments</a></li>
                        <li class=\"active\"><a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Rate");
        echo "\">Rate the Freelancer</a></li>

                    </ul>
                </div><!-- /.pro-nav -->

                <div class=\"rate-box\">
                    <form method=\"post\" id=\"addform\">
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Skills
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Quality of Work
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-half-full rating-star\"></i>
                            Availability
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-half-full rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Adherence to Schedule
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-half-full rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Communication
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-half-full rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Co-operation
                        </p>
                        <br/>
                        <h4>Job success score (Click to change the value)</h4>
                        <div style=\"display:inline;width:75px;height:75px;\">
                            <canvas width=\"75\" height=\"75\"></canvas>
                            <input class=\"knob\" data-width=\"75\" data-angleoffset=\"40\" data-linecap=
                            \"round\" data-fgcolor=\"#00C4CF\" value=\"40\" style=\"width: 41px; height
                            : 25px; position: absolute; vertical-align: middle; margin-top: 25px;
                             margin-left: -58px; border: 0px; background: none; font: bold 15px
                              Arial; text-align: center; color: rgb(0, 196, 207); padding: 0px; -
                              webkit-appearance: none;\">
                        </div>
                        <div class=\"margin-space\"></div>
                        <div class=\"form-group\">
                            <label>Share your experience working with this freelancer</label>
                            <textarea class=\"form-control\" rows=\"5\" placeholder=\"Description\"></textarea>
                        </div>

                        <button class=\"kafe-btn kafe-btn-mint-small full-width\">Submit</button>
                    </form>
                </div><!-- /.rate-box -->



            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
  ";
        
        $__internal_25e51fab21c655a88655b5fd6a380eb9841332755f150edbd51d95bc07c1ee5f->leave($__internal_25e51fab21c655a88655b5fd6a380eb9841332755f150edbd51d95bc07c1ee5f_prof);

        
        $__internal_ced9d1424fbe6eff06e862928653227172191f783584396a85ea3827e9ea3a48->leave($__internal_ced9d1424fbe6eff06e862928653227172191f783584396a85ea3827e9ea3a48_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Rate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 171,  330 => 170,  326 => 169,  322 => 168,  318 => 167,  314 => 166,  310 => 165,  306 => 164,  302 => 163,  287 => 151,  279 => 146,  271 => 141,  261 => 134,  257 => 133,  243 => 122,  239 => 121,  225 => 110,  221 => 109,  203 => 94,  195 => 89,  188 => 85,  184 => 84,  163 => 66,  156 => 62,  152 => 61,  137 => 49,  130 => 45,  126 => 44,  112 => 33,  108 => 32,  93 => 20,  85 => 15,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                        <li><a href=\"{{ path('template_Link') }}\">Links</a></li>
                        <li><a href=\"{{ path('template_Bug') }}\">Bugs</a></li>
                        <li><a href=\"{{ path('template_Payement') }}\">Payments</a></li>
                        <li class=\"active\"><a href=\"{{ path('template_Rate') }}\">Rate the Freelancer</a></li>

                    </ul>
                </div><!-- /.pro-nav -->

                <div class=\"rate-box\">
                    <form method=\"post\" id=\"addform\">
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Skills
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Quality of Work
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-half-full rating-star\"></i>
                            Availability
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-half-full rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Adherence to Schedule
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-half-full rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Communication
                        </p>
                        <p class=\"p-star\">
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star rating-star\"></i>
                            <i class=\"fa fa-star-half-full rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            <i class=\"fa fa-star-o rating-star\"></i>
                            Co-operation
                        </p>
                        <br/>
                        <h4>Job success score (Click to change the value)</h4>
                        <div style=\"display:inline;width:75px;height:75px;\">
                            <canvas width=\"75\" height=\"75\"></canvas>
                            <input class=\"knob\" data-width=\"75\" data-angleoffset=\"40\" data-linecap=
                            \"round\" data-fgcolor=\"#00C4CF\" value=\"40\" style=\"width: 41px; height
                            : 25px; position: absolute; vertical-align: middle; margin-top: 25px;
                             margin-left: -58px; border: 0px; background: none; font: bold 15px
                              Arial; text-align: center; color: rgb(0, 196, 207); padding: 0px; -
                              webkit-appearance: none;\">
                        </div>
                        <div class=\"margin-space\"></div>
                        <div class=\"form-group\">
                            <label>Share your experience working with this freelancer</label>
                            <textarea class=\"form-control\" rows=\"5\" placeholder=\"Description\"></textarea>
                        </div>

                        <button class=\"kafe-btn kafe-btn-mint-small full-width\">Submit</button>
                    </form>
                </div><!-- /.rate-box -->



            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
  {% endblock %}", "@Fix/Frontend/Default/Rate.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Rate.html.twig");
    }
}
