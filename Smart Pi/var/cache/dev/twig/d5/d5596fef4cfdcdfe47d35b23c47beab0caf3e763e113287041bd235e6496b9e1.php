<?php

/* FixBundle:Frontend/Default:workroom.html.twig */
class __TwigTemplate_676670c0faf902ccb3b0c8155677c3ad88fda146ae3862f603f457704f6577da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:workroom.html.twig", 1);
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
        $__internal_a97b84fdb2462c6f45a9530f1c197b7cea1ed5afb61accf54323996ba3f65a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97b84fdb2462c6f45a9530f1c197b7cea1ed5afb61accf54323996ba3f65a0c->enter($__internal_a97b84fdb2462c6f45a9530f1c197b7cea1ed5afb61accf54323996ba3f65a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:workroom.html.twig"));

        $__internal_9554d36823155d2397e09e84c007fa63de673e3e02b8590626f2d3640899714a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9554d36823155d2397e09e84c007fa63de673e3e02b8590626f2d3640899714a->enter($__internal_9554d36823155d2397e09e84c007fa63de673e3e02b8590626f2d3640899714a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:workroom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97b84fdb2462c6f45a9530f1c197b7cea1ed5afb61accf54323996ba3f65a0c->leave($__internal_a97b84fdb2462c6f45a9530f1c197b7cea1ed5afb61accf54323996ba3f65a0c_prof);

        
        $__internal_9554d36823155d2397e09e84c007fa63de673e3e02b8590626f2d3640899714a->leave($__internal_9554d36823155d2397e09e84c007fa63de673e3e02b8590626f2d3640899714a_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_189e31dee58e4c54aa569783bd30cdbd3f2b66c665957566e0bf33ee2612339d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189e31dee58e4c54aa569783bd30cdbd3f2b66c665957566e0bf33ee2612339d->enter($__internal_189e31dee58e4c54aa569783bd30cdbd3f2b66c665957566e0bf33ee2612339d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_75b245dcf87259854133ebe2c692533f2df77e232f1de010f4c811ddd6333739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b245dcf87259854133ebe2c692533f2df77e232f1de010f4c811ddd6333739->enter($__internal_75b245dcf87259854133ebe2c692533f2df77e232f1de010f4c811ddd6333739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_75b245dcf87259854133ebe2c692533f2df77e232f1de010f4c811ddd6333739->leave($__internal_75b245dcf87259854133ebe2c692533f2df77e232f1de010f4c811ddd6333739_prof);

        
        $__internal_189e31dee58e4c54aa569783bd30cdbd3f2b66c665957566e0bf33ee2612339d->leave($__internal_189e31dee58e4c54aa569783bd30cdbd3f2b66c665957566e0bf33ee2612339d_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_6b668afe936ccd8748d88c81f772c9143488806c6c5fa618f20b73a7f54112bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b668afe936ccd8748d88c81f772c9143488806c6c5fa618f20b73a7f54112bc->enter($__internal_6b668afe936ccd8748d88c81f772c9143488806c6c5fa618f20b73a7f54112bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_fb08b679f350e39752c55725dd73902f9928d840b43664765d7cde40ed6d501a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb08b679f350e39752c55725dd73902f9928d840b43664765d7cde40ed6d501a->enter($__internal_fb08b679f350e39752c55725dd73902f9928d840b43664765d7cde40ed6d501a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                    <li class=\"active\">
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

                <div class=\"pro-nav text-center\">
                    <ul class=\"nav pro-nav-tabs nav-tabs-dashed\">
                        <li class=\"active\"><a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Workroom");
        echo "\">Overview & Discussions</a></li>
                        <li><a href=\"";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Milestone");
        echo "\">Milestones</a></li>
                        <li><a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Task");
        echo "\">Tasks</a></li>
                        <li><a href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Timesheet");
        echo "\">Timesheets</a></li>
                        <li><a href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_File");
        echo "\">Files</a></li>
                        <li><a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Link");
        echo "\">Links</a></li>
                        <li><a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Bug");
        echo "\">Bugs</a></li>
                        <li><a href=\"";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Payement");
        echo "\">Payments</a></li>
                        <li><a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Rate");
        echo "\">Rate the Freelancer</a></li>

                    </ul>
                </div><!-- /.prop-info -->


                <div class=\"work-box\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                            <div class=\"col-lg-12 top-sec\">
                                <h3>Code Ebay store and listing design to be mobile responsive.</h3>
                                <h4>Customer Service - Customer Service</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <hr class=\"small-hr\" />
                            </div>

                            <div class=\"col-lg-12 middle-sec\">
                                <div class=\"col-lg-8\">
                                    <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                    <h3><a href=\"#\">Anna Morgan</a></h3>
                                    <h4><span class=\"label label-mint\">Freelancer</span></h4>
                                </div><!-- .col-lg-3 -->
                                <div class=\"col-lg-4\">
                                    <a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Jobpost");
        echo "\" class=\"kafe-btn kafe-btn-mint-small\"> Is job completed? Click here.</a>
                                </div><!-- .col-lg-9 -->
                            </div>

                            <div class=\"col-lg-12\">
                                <hr class=\"small-hr\" />
                            </div>

                            <div class=\"col-lg-12 bottom-sec\">
                                <div class=\"col-lg-6\">
                                    <h5> Freelancer Proposal </h5>
                                    <p> \$20/hr</p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h5> Job Type </h5>
                                        <p>Hourly</p>
                                    </div>
                                </div>
                            </div><!-- /.col-lg-12 -->

                        </div><!-- .col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- .work-box -->


                <div class=\"conversation-box\">

                    <div class=\"conversation-header\">
                        <div class=\"user-message-details\">
                            <div class=\"user-message-img\">
                                <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                            </div>
                            <div class=\"user-message-info\">
                                <h4>Anna Morgan</h4>
                                <p>Online</p>
                            </div><!--/ user-message-info -->
                        </div><!--/ user-message-details -->
                    </div><!--/ conversation-header -->

                    <div class=\"conversation-container\">

                        <div class=\"convo-box pull-right\">
                            <div class=\"convo-area\">
                                <div class=\"convo-message\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                </div><!--/ convo-message-->
                                <span>Sat, Aug 23, 1:08 PM</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box convo-left\">
                            <div class=\"convo-area convo-left\">
                                <div class=\"convo-message\">
                                    <p>Cras ultricies ligula.</p>
                                </div><!--/ convo-message-->
                                <span>5 minutes ago</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box pull-right\">
                            <div class=\"convo-area\">
                                <div class=\"convo-message\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                </div><!--/ convo-message-->
                                <span>Sat, Aug 23, 1:08 PM</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box convo-left\">
                            <div class=\"convo-area convo-left\">
                                <div class=\"convo-message\">
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div><!--/ convo-message-->
                                <span>2 minutes ago</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box pull-right\">
                            <div class=\"convo-area\">
                                <div class=\"convo-message\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                </div><!--/ convo-message-->
                                <span>Sat, Aug 23, 1:08 PM</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box convo-left\">
                            <div class=\"convo-area convo-left\">
                                <div class=\"convo-message\">
                                    <p>Typing...</p>
                                </div><!--/ convo-message-->
                                <span>2 minutes ago</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users/1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                    </div><!--/ conversation-container -->
                    <div class=\"type_messages\">
                        <div class=\"input-field\">
                            <textarea placeholder=\"Type something here...\"></textarea>
                            <ul class=\"imoji\">
                                <li><a href=\"#\" class=\"kafe-btn kafe-btn-mint-small\">Send</a></li>
                            </ul><!--/ imoji -->
                        </div><!--/ input-field -->
                    </div><!--/ type_messages -->

                </div><!--main-conversation-box end-->



            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
  ";
        
        $__internal_fb08b679f350e39752c55725dd73902f9928d840b43664765d7cde40ed6d501a->leave($__internal_fb08b679f350e39752c55725dd73902f9928d840b43664765d7cde40ed6d501a_prof);

        
        $__internal_6b668afe936ccd8748d88c81f772c9143488806c6c5fa618f20b73a7f54112bc->leave($__internal_6b668afe936ccd8748d88c81f772c9143488806c6c5fa618f20b73a7f54112bc_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:workroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 308,  483 => 296,  468 => 284,  453 => 272,  438 => 260,  423 => 248,  401 => 229,  367 => 198,  359 => 193,  336 => 173,  332 => 172,  328 => 171,  324 => 170,  320 => 169,  316 => 168,  312 => 167,  308 => 166,  304 => 165,  289 => 153,  281 => 148,  273 => 143,  263 => 136,  259 => 135,  245 => 124,  241 => 123,  227 => 112,  223 => 111,  205 => 96,  197 => 91,  190 => 87,  186 => 86,  165 => 68,  158 => 64,  154 => 63,  139 => 51,  132 => 47,  128 => 46,  114 => 35,  110 => 34,  95 => 22,  87 => 17,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                        <li class=\"active\"><a href=\"{{ path('template_Workroom') }}\">Overview & Discussions</a></li>
                        <li><a href=\"{{ path('template_Milestone') }}\">Milestones</a></li>
                        <li><a href=\"{{ path('template_Task') }}\">Tasks</a></li>
                        <li><a href=\"{{ path('template_Timesheet') }}\">Timesheets</a></li>
                        <li><a href=\"{{ path('template_File') }}\">Files</a></li>
                        <li><a href=\"{{ path('template_Link') }}\">Links</a></li>
                        <li><a href=\"{{ path('template_Bug') }}\">Bugs</a></li>
                        <li><a href=\"{{ path('template_Payement') }}\">Payments</a></li>
                        <li><a href=\"{{ path('template_Rate') }}\">Rate the Freelancer</a></li>

                    </ul>
                </div><!-- /.prop-info -->


                <div class=\"work-box\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-6 col-xs-12\">

                            <div class=\"col-lg-12 top-sec\">
                                <h3>Code Ebay store and listing design to be mobile responsive.</h3>
                                <h4>Customer Service - Customer Service</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <hr class=\"small-hr\" />
                            </div>

                            <div class=\"col-lg-12 middle-sec\">
                                <div class=\"col-lg-8\">
                                    <img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-circle img-thumbnail\" alt=\"Image\"/>
                                    <h3><a href=\"#\">Anna Morgan</a></h3>
                                    <h4><span class=\"label label-mint\">Freelancer</span></h4>
                                </div><!-- .col-lg-3 -->
                                <div class=\"col-lg-4\">
                                    <a href=\"{{ path('template_Jobpost') }}\" class=\"kafe-btn kafe-btn-mint-small\"> Is job completed? Click here.</a>
                                </div><!-- .col-lg-9 -->
                            </div>

                            <div class=\"col-lg-12\">
                                <hr class=\"small-hr\" />
                            </div>

                            <div class=\"col-lg-12 bottom-sec\">
                                <div class=\"col-lg-6\">
                                    <h5> Freelancer Proposal </h5>
                                    <p> \$20/hr</p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"pull-right\">
                                        <h5> Job Type </h5>
                                        <p>Hourly</p>
                                    </div>
                                </div>
                            </div><!-- /.col-lg-12 -->

                        </div><!-- .col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- .work-box -->


                <div class=\"conversation-box\">

                    <div class=\"conversation-header\">
                        <div class=\"user-message-details\">
                            <div class=\"user-message-img\">
                                <img src=\"{{ asset('img/users/1.jpg') }}\" class=\"img-responsive img-circle\" alt=\"\">
                            </div>
                            <div class=\"user-message-info\">
                                <h4>Anna Morgan</h4>
                                <p>Online</p>
                            </div><!--/ user-message-info -->
                        </div><!--/ user-message-details -->
                    </div><!--/ conversation-header -->

                    <div class=\"conversation-container\">

                        <div class=\"convo-box pull-right\">
                            <div class=\"convo-area\">
                                <div class=\"convo-message\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                </div><!--/ convo-message-->
                                <span>Sat, Aug 23, 1:08 PM</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"{{ asset('img/users/2.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box convo-left\">
                            <div class=\"convo-area convo-left\">
                                <div class=\"convo-message\">
                                    <p>Cras ultricies ligula.</p>
                                </div><!--/ convo-message-->
                                <span>5 minutes ago</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"{{ asset('img/users/1.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box pull-right\">
                            <div class=\"convo-area\">
                                <div class=\"convo-message\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                </div><!--/ convo-message-->
                                <span>Sat, Aug 23, 1:08 PM</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"{{ asset('img/users/2.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box convo-left\">
                            <div class=\"convo-area convo-left\">
                                <div class=\"convo-message\">
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div><!--/ convo-message-->
                                <span>2 minutes ago</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"{{ asset('img/users/1.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box pull-right\">
                            <div class=\"convo-area\">
                                <div class=\"convo-message\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                </div><!--/ convo-message-->
                                <span>Sat, Aug 23, 1:08 PM</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"{{ asset('img/users/2.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                        <div class=\"convo-box convo-left\">
                            <div class=\"convo-area convo-left\">
                                <div class=\"convo-message\">
                                    <p>Typing...</p>
                                </div><!--/ convo-message-->
                                <span>2 minutes ago</span>
                            </div><!--/ convo-area -->
                            <div class=\"convo-img\">
                                <img src=\"{{ asset('img/users/1.jpg') }}\" alt=\"\" class=\"img-responsive img-circle\">
                            </div><!--/ convo-img -->
                        </div><!--/ convo-box -->

                    </div><!--/ conversation-container -->
                    <div class=\"type_messages\">
                        <div class=\"input-field\">
                            <textarea placeholder=\"Type something here...\"></textarea>
                            <ul class=\"imoji\">
                                <li><a href=\"#\" class=\"kafe-btn kafe-btn-mint-small\">Send</a></li>
                            </ul><!--/ imoji -->
                        </div><!--/ input-field -->
                    </div><!--/ type_messages -->

                </div><!--main-conversation-box end-->



            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
  {% endblock %}", "FixBundle:Frontend/Default:workroom.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/workroom.html.twig");
    }
}
