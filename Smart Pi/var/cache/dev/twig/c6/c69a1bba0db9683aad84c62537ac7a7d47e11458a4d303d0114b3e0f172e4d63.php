<?php

/* FixBundle:Frontend/Default:Payement.html.twig */
class __TwigTemplate_120e202c8b7132fc9c536b9cf95964acacb140172b6948b3be73234a0ff4544b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:Payement.html.twig", 1);
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
        $__internal_048a6a015bef8614f9682415d403e37ec699c44eae654d3c691e899efb93fa47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048a6a015bef8614f9682415d403e37ec699c44eae654d3c691e899efb93fa47->enter($__internal_048a6a015bef8614f9682415d403e37ec699c44eae654d3c691e899efb93fa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Payement.html.twig"));

        $__internal_71f60bb1dd68f880a10d0962894bd2e26cf06e0230c9c98d322017b8297b8326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f60bb1dd68f880a10d0962894bd2e26cf06e0230c9c98d322017b8297b8326->enter($__internal_71f60bb1dd68f880a10d0962894bd2e26cf06e0230c9c98d322017b8297b8326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Payement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_048a6a015bef8614f9682415d403e37ec699c44eae654d3c691e899efb93fa47->leave($__internal_048a6a015bef8614f9682415d403e37ec699c44eae654d3c691e899efb93fa47_prof);

        
        $__internal_71f60bb1dd68f880a10d0962894bd2e26cf06e0230c9c98d322017b8297b8326->leave($__internal_71f60bb1dd68f880a10d0962894bd2e26cf06e0230c9c98d322017b8297b8326_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_7aa2bcc88e536886c37cafa9af320af8f7bb5876d9721607d96307a4c1245f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa2bcc88e536886c37cafa9af320af8f7bb5876d9721607d96307a4c1245f6b->enter($__internal_7aa2bcc88e536886c37cafa9af320af8f7bb5876d9721607d96307a4c1245f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a58b69c7e4dc98459c2fa0651ee1f5734b3cf1e610536f80a993b59d173a4c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58b69c7e4dc98459c2fa0651ee1f5734b3cf1e610536f80a993b59d173a4c1b->enter($__internal_a58b69c7e4dc98459c2fa0651ee1f5734b3cf1e610536f80a993b59d173a4c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_a58b69c7e4dc98459c2fa0651ee1f5734b3cf1e610536f80a993b59d173a4c1b->leave($__internal_a58b69c7e4dc98459c2fa0651ee1f5734b3cf1e610536f80a993b59d173a4c1b_prof);

        
        $__internal_7aa2bcc88e536886c37cafa9af320af8f7bb5876d9721607d96307a4c1245f6b->leave($__internal_7aa2bcc88e536886c37cafa9af320af8f7bb5876d9721607d96307a4c1245f6b_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_b01cf5505d8f68c7052cc2ba599a90473af80f56a234e0fc7a49442a50951cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01cf5505d8f68c7052cc2ba599a90473af80f56a234e0fc7a49442a50951cae->enter($__internal_b01cf5505d8f68c7052cc2ba599a90473af80f56a234e0fc7a49442a50951cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_48704e4457ee196e25a8744481caa8ebf19d796c2d9068a2f3fb8272e44be5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48704e4457ee196e25a8744481caa8ebf19d796c2d9068a2f3fb8272e44be5c1->enter($__internal_48704e4457ee196e25a8744481caa8ebf19d796c2d9068a2f3fb8272e44be5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
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
                        <li class=\"active\"><a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payement");
        echo "\">Payments</a></li>
                        <li><a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Rate");
        echo "\">Rate the Freelancer</a></li>

                    </ul>
                </div><!-- /.pro-nav -->


                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Payments paid for this Job</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Freelancer</th>
                                    <th>Name</th>
                                    <th>Type of Payment</th>
                                    <th>Payment</th>
                                    <th>Complete</th>
                                    <th>Date Paid</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Anna Morgan</a>
                                    </td>
                                    <td>Research</td>
                                    <td><span class=\"label label-mint\">Milestones</span></td>
                                    <td>\$60</td>
                                    <td><span class=\"label label-mint\">Complete</span></td>
                                    <td>31th July 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Anna Morgan</a>
                                    </td>
                                    <td>Time 00:47:50</td>
                                    <td><span class=\"label label-mint\">Timesheets</span></td>
                                    <td>\$100</td>
                                    <td><span class=\"label label-mint\">Complete</span></td>
                                    <td>31th July 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Anna Morgan</a>
                                    </td>
                                    <td>Design</td>
                                    <td><span class=\"label label-mint\">Milestones</span></td>
                                    <td>\$250</td>
                                    <td><span class=\"label label-mint\">Complete</span></td>
                                    <td>31th July 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Anna Morgan</a>
                                    </td>
                                    <td>Time 01:50:24</td>
                                    <td><span class=\"label label-mint\">Timesheets</span></td>
                                    <td>\$2000</td>
                                    <td><span class=\"label label-mint\">Complete</span></td>
                                    <td>31th July 2018</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Freelancer</th>
                                    <th>Name</th>
                                    <th>Type of Payment</th>
                                    <th>Payment</th>
                                    <th>Complete</th>
                                    <th>Date Paid</th>
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
        
        $__internal_48704e4457ee196e25a8744481caa8ebf19d796c2d9068a2f3fb8272e44be5c1->leave($__internal_48704e4457ee196e25a8744481caa8ebf19d796c2d9068a2f3fb8272e44be5c1_prof);

        
        $__internal_b01cf5505d8f68c7052cc2ba599a90473af80f56a234e0fc7a49442a50951cae->leave($__internal_b01cf5505d8f68c7052cc2ba599a90473af80f56a234e0fc7a49442a50951cae_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:Payement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 231,  412 => 230,  399 => 220,  395 => 219,  382 => 209,  378 => 208,  365 => 198,  361 => 197,  332 => 171,  328 => 170,  324 => 169,  320 => 168,  316 => 167,  312 => 166,  308 => 165,  304 => 164,  300 => 163,  285 => 151,  277 => 146,  269 => 141,  259 => 134,  255 => 133,  241 => 122,  237 => 121,  223 => 110,  219 => 109,  201 => 94,  193 => 89,  186 => 85,  182 => 84,  161 => 66,  154 => 62,  150 => 61,  135 => 49,  128 => 45,  124 => 44,  110 => 33,  106 => 32,  91 => 20,  83 => 15,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                        <li class=\"active\"><a href=\"{{ path('template_Payement') }}\">Payments</a></li>
                        <li><a href=\"{{ path('template_Rate') }}\">Rate the Freelancer</a></li>

                    </ul>
                </div><!-- /.pro-nav -->


                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Payments paid for this Job</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example1\" class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th>Freelancer</th>
                                    <th>Name</th>
                                    <th>Type of Payment</th>
                                    <th>Payment</th>
                                    <th>Complete</th>
                                    <th>Date Paid</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Workroom') }}\">Anna Morgan</a>
                                    </td>
                                    <td>Research</td>
                                    <td><span class=\"label label-mint\">Milestones</span></td>
                                    <td>\$60</td>
                                    <td><span class=\"label label-mint\">Complete</span></td>
                                    <td>31th July 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Workroom') }}\">Anna Morgan</a>
                                    </td>
                                    <td>Time 00:47:50</td>
                                    <td><span class=\"label label-mint\">Timesheets</span></td>
                                    <td>\$100</td>
                                    <td><span class=\"label label-mint\">Complete</span></td>
                                    <td>31th July 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Workroom') }}\">Anna Morgan</a>
                                    </td>
                                    <td>Design</td>
                                    <td><span class=\"label label-mint\">Milestones</span></td>
                                    <td>\$250</td>
                                    <td><span class=\"label label-mint\">Complete</span></td>
                                    <td>31th July 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-responsive img-circle pull-left\" width=\"50\" height=\"50\" alt=\"Image\"/>
                                        <a href=\"{{ path('template_Workroom') }}\">Anna Morgan</a>
                                    </td>
                                    <td>Time 01:50:24</td>
                                    <td><span class=\"label label-mint\">Timesheets</span></td>
                                    <td>\$2000</td>
                                    <td><span class=\"label label-mint\">Complete</span></td>
                                    <td>31th July 2018</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Freelancer</th>
                                    <th>Name</th>
                                    <th>Type of Payment</th>
                                    <th>Payment</th>
                                    <th>Complete</th>
                                    <th>Date Paid</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                </div><!-- /.box -->



            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
  {% endblock %}", "FixBundle:Frontend/Default:Payement.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/Payement.html.twig");
    }
}
