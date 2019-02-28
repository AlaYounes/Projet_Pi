<?php

/* @Fix/Frontend/Default/PostAjob.html.twig */
class __TwigTemplate_8fcb2715a69226f4312a9af238dcd1ee92427e2818753e84a05388fc3ad359e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/PostAjob.html.twig", 1);
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
        $__internal_caf820f65b9c8b37d7e54528a860382fa048a1395df4630a991ef049bdd9dfe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf820f65b9c8b37d7e54528a860382fa048a1395df4630a991ef049bdd9dfe9->enter($__internal_caf820f65b9c8b37d7e54528a860382fa048a1395df4630a991ef049bdd9dfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/PostAjob.html.twig"));

        $__internal_ad20428177e63ec7e5f1ed9e35622e08017a7ebe33320b94c28594346131c93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad20428177e63ec7e5f1ed9e35622e08017a7ebe33320b94c28594346131c93d->enter($__internal_ad20428177e63ec7e5f1ed9e35622e08017a7ebe33320b94c28594346131c93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/PostAjob.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf820f65b9c8b37d7e54528a860382fa048a1395df4630a991ef049bdd9dfe9->leave($__internal_caf820f65b9c8b37d7e54528a860382fa048a1395df4630a991ef049bdd9dfe9_prof);

        
        $__internal_ad20428177e63ec7e5f1ed9e35622e08017a7ebe33320b94c28594346131c93d->leave($__internal_ad20428177e63ec7e5f1ed9e35622e08017a7ebe33320b94c28594346131c93d_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_b6647dc32a6ec27c88ddbbaeeae4ccd4fb60669c0e2dacd060edf5202a6cc81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6647dc32a6ec27c88ddbbaeeae4ccd4fb60669c0e2dacd060edf5202a6cc81b->enter($__internal_b6647dc32a6ec27c88ddbbaeeae4ccd4fb60669c0e2dacd060edf5202a6cc81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_bea85e4ee02b89f7262d008d172ae162ef229a898d399c2d452a3033c61eca78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea85e4ee02b89f7262d008d172ae162ef229a898d399c2d452a3033c61eca78->enter($__internal_bea85e4ee02b89f7262d008d172ae162ef229a898d399c2d452a3033c61eca78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_bea85e4ee02b89f7262d008d172ae162ef229a898d399c2d452a3033c61eca78->leave($__internal_bea85e4ee02b89f7262d008d172ae162ef229a898d399c2d452a3033c61eca78_prof);

        
        $__internal_b6647dc32a6ec27c88ddbbaeeae4ccd4fb60669c0e2dacd060edf5202a6cc81b->leave($__internal_b6647dc32a6ec27c88ddbbaeeae4ccd4fb60669c0e2dacd060edf5202a6cc81b_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_a896c53473ec846401bd90356385f3f23f0b5c5a69ed28927f493e991a8c4c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a896c53473ec846401bd90356385f3f23f0b5c5a69ed28927f493e991a8c4c52->enter($__internal_a896c53473ec846401bd90356385f3f23f0b5c5a69ed28927f493e991a8c4c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_a2e6c8055df90dd50eec7dca215f92d83523377484d941a09adecfb5188e7882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e6c8055df90dd50eec7dca215f92d83523377484d941a09adecfb5188e7882->enter($__internal_a2e6c8055df90dd50eec7dca215f92d83523377484d941a09adecfb5188e7882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                    <li class=\"treeview active\">
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
                            <li><a href=\"PostAjob.html.twig\"><i class=\"fa fa-circle-o\"></i> Add a Job</a></li>
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

                <div class=\"job-box\">
                    <div class=\"job-header\">
                        <h4>Add Job</h4>
                    </div>
                    <form method=\"post\" id=\"addform\">

                        <div class=\"form-group\">
                            <label>Title</label>
                            <input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"Title\" value=\"\"/>
                        </div>

                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label>Category</label>
                                <select name=\"category\" class=\"form-control\">
                                    <option value=\"\">Admin Support</option>
                                    <option value=\"\">Web, Software &amp; IT</option>
                                    <option value=\"\">Design, Art &amp; Multimedia</option>
                                    <option value=\"\">Writing &amp; Translation</option>
                                    <option value=\"\">Management &amp; Finance</option>
                                    <option value=\"\">Sales &amp; Marketing</option>
                                    <option value=\"\">Engineering &amp; Architecture</option>
                                    <option value=\"\">Legal</option>
                                    <option value=\"\">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"col-lg-6 job-sec\">
                            <div class=\"form-group\">
                                <label>Sub Category</label>
                                <select class=\"form-control\">
                                    <option value=\"\">HTML5</option>
                                    <option value=\"\">CSS3</option>
                                    <option value=\"\">Bootstrap</option>
                                    <option value=\"\">PHP</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label>Country</label>
                            <select class=\"form-control\">
                                <option value=\"\">USA</option>
                                <option value=\"\">UK</option>
                                <option value=\"\">Russia</option>
                                <option value=\"\">Kenya</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label>How would you like to pay?</label>
                            <p>
                                <a href=\"#\" class=\"selected\">By Hour</a>
                                <a href=\"#\" class=\"unselected\">Fixed Cost</a>
                            </p>
                        </div>

                        <div class=\"form-group\">
                            <label>Budget</label>
                            <input type=\"text\" name=\"budget\" class=\"form-control\" placeholder=\"Budget\" value=\"\"/>
                        </div>

                        <div class=\"form-group\">
                            <label>Hours per week</label>
                            <p>
                                <a href=\"#\" class=\"unselected\">40+</a>
                                <a href=\"#\" class=\"unselected\">30-39</a>
                                <a href=\"#\" class=\"selected\">20-29</a>
                                <a href=\"#\" class=\"unselected\">10-19</a>
                                <a href=\"#\" class=\"unselected\">1-9</a>
                            </p>
                        </div>

                        <div class=\"form-group\">
                            <label>Desired Experience Level</label>
                            <p>
                                <a href=\"#\" class=\"unselected\">\$ Entry Level</a>
                                <a href=\"#\" class=\"unselected\">\$\$ Intermediate</a>
                                <a href=\"#\" class=\"selected\">\$\$\$ Expert</a>
                            </p>
                        </div>

                        <div class=\"form-group\">
                            <label>Job Duration</label>
                            <p>
                                <a href=\"#\" class=\"unselected\">Not Sure</a>
                                <a href=\"#\" class=\"unselected\">6+ Months</a>
                                <a href=\"#\" class=\"selected\">3 to 6 Months</a>
                                <a href=\"#\" class=\"unselected\">1 to 3 Months</a>
                                <a href=\"#\" class=\"unselected\">Less than 1 Month</a>
                                <a href=\"#\" class=\"unselected\">Less than 1 Week</a>
                            </p>
                        </div>

                        <div class=\"form-group\">
                            <label>Description</label>
                            <textarea class=\"form-control\" rows=\"5\" placeholder=\"Provide a more detailed description of your job to get better proposals.\"></textarea>
                        </div>

                        <button class=\"kafe-btn kafe-btn-mint-small full-width\">Submit</button>
                    </form>
                </div><!-- /.job-box -->

            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

  ";
        
        $__internal_a2e6c8055df90dd50eec7dca215f92d83523377484d941a09adecfb5188e7882->leave($__internal_a2e6c8055df90dd50eec7dca215f92d83523377484d941a09adecfb5188e7882_prof);

        
        $__internal_a896c53473ec846401bd90356385f3f23f0b5c5a69ed28927f493e991a8c4c52->leave($__internal_a896c53473ec846401bd90356385f3f23f0b5c5a69ed28927f493e991a8c4c52_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/PostAjob.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 153,  278 => 148,  270 => 143,  260 => 136,  256 => 135,  242 => 124,  238 => 123,  224 => 112,  220 => 111,  202 => 96,  194 => 91,  187 => 87,  183 => 86,  162 => 68,  155 => 64,  151 => 63,  136 => 51,  129 => 47,  125 => 46,  110 => 34,  95 => 22,  87 => 17,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                            <li><a href=\"PostAjob.html.twig\"><i class=\"fa fa-circle-o\"></i> Add a Job</a></li>
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

                <div class=\"job-box\">
                    <div class=\"job-header\">
                        <h4>Add Job</h4>
                    </div>
                    <form method=\"post\" id=\"addform\">

                        <div class=\"form-group\">
                            <label>Title</label>
                            <input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"Title\" value=\"\"/>
                        </div>

                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label>Category</label>
                                <select name=\"category\" class=\"form-control\">
                                    <option value=\"\">Admin Support</option>
                                    <option value=\"\">Web, Software &amp; IT</option>
                                    <option value=\"\">Design, Art &amp; Multimedia</option>
                                    <option value=\"\">Writing &amp; Translation</option>
                                    <option value=\"\">Management &amp; Finance</option>
                                    <option value=\"\">Sales &amp; Marketing</option>
                                    <option value=\"\">Engineering &amp; Architecture</option>
                                    <option value=\"\">Legal</option>
                                    <option value=\"\">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"col-lg-6 job-sec\">
                            <div class=\"form-group\">
                                <label>Sub Category</label>
                                <select class=\"form-control\">
                                    <option value=\"\">HTML5</option>
                                    <option value=\"\">CSS3</option>
                                    <option value=\"\">Bootstrap</option>
                                    <option value=\"\">PHP</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label>Country</label>
                            <select class=\"form-control\">
                                <option value=\"\">USA</option>
                                <option value=\"\">UK</option>
                                <option value=\"\">Russia</option>
                                <option value=\"\">Kenya</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label>How would you like to pay?</label>
                            <p>
                                <a href=\"#\" class=\"selected\">By Hour</a>
                                <a href=\"#\" class=\"unselected\">Fixed Cost</a>
                            </p>
                        </div>

                        <div class=\"form-group\">
                            <label>Budget</label>
                            <input type=\"text\" name=\"budget\" class=\"form-control\" placeholder=\"Budget\" value=\"\"/>
                        </div>

                        <div class=\"form-group\">
                            <label>Hours per week</label>
                            <p>
                                <a href=\"#\" class=\"unselected\">40+</a>
                                <a href=\"#\" class=\"unselected\">30-39</a>
                                <a href=\"#\" class=\"selected\">20-29</a>
                                <a href=\"#\" class=\"unselected\">10-19</a>
                                <a href=\"#\" class=\"unselected\">1-9</a>
                            </p>
                        </div>

                        <div class=\"form-group\">
                            <label>Desired Experience Level</label>
                            <p>
                                <a href=\"#\" class=\"unselected\">\$ Entry Level</a>
                                <a href=\"#\" class=\"unselected\">\$\$ Intermediate</a>
                                <a href=\"#\" class=\"selected\">\$\$\$ Expert</a>
                            </p>
                        </div>

                        <div class=\"form-group\">
                            <label>Job Duration</label>
                            <p>
                                <a href=\"#\" class=\"unselected\">Not Sure</a>
                                <a href=\"#\" class=\"unselected\">6+ Months</a>
                                <a href=\"#\" class=\"selected\">3 to 6 Months</a>
                                <a href=\"#\" class=\"unselected\">1 to 3 Months</a>
                                <a href=\"#\" class=\"unselected\">Less than 1 Month</a>
                                <a href=\"#\" class=\"unselected\">Less than 1 Week</a>
                            </p>
                        </div>

                        <div class=\"form-group\">
                            <label>Description</label>
                            <textarea class=\"form-control\" rows=\"5\" placeholder=\"Provide a more detailed description of your job to get better proposals.\"></textarea>
                        </div>

                        <button class=\"kafe-btn kafe-btn-mint-small full-width\">Submit</button>
                    </form>
                </div><!-- /.job-box -->

            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

  {% endblock %}



", "@Fix/Frontend/Default/PostAjob.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\PostAjob.html.twig");
    }
}
