<?php

/* @Fix/Frontend/Default/How.html.twig */
class __TwigTemplate_151a3fa65a4dd552b8595ae72b581cd5e7fa76d03982e1324ed55f2e422f34cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/How.html.twig", 1);
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
        $__internal_39c343654335d97e10c931849b2d6d11898b0a028a56d1f6acc7d02b21f9cee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c343654335d97e10c931849b2d6d11898b0a028a56d1f6acc7d02b21f9cee9->enter($__internal_39c343654335d97e10c931849b2d6d11898b0a028a56d1f6acc7d02b21f9cee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/How.html.twig"));

        $__internal_1a65bea1b27fddd1d228052f2801bd936de77aa636a066bc0fd573504c0797cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a65bea1b27fddd1d228052f2801bd936de77aa636a066bc0fd573504c0797cd->enter($__internal_1a65bea1b27fddd1d228052f2801bd936de77aa636a066bc0fd573504c0797cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/How.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c343654335d97e10c931849b2d6d11898b0a028a56d1f6acc7d02b21f9cee9->leave($__internal_39c343654335d97e10c931849b2d6d11898b0a028a56d1f6acc7d02b21f9cee9_prof);

        
        $__internal_1a65bea1b27fddd1d228052f2801bd936de77aa636a066bc0fd573504c0797cd->leave($__internal_1a65bea1b27fddd1d228052f2801bd936de77aa636a066bc0fd573504c0797cd_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_5ab2bbf3e668c81030f82c65ca0e9a508f5e14056c8909262596b36e39b3c8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab2bbf3e668c81030f82c65ca0e9a508f5e14056c8909262596b36e39b3c8c2->enter($__internal_5ab2bbf3e668c81030f82c65ca0e9a508f5e14056c8909262596b36e39b3c8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_30709d8eee49814be95a33f810816229e680e5c00aaa85ab1fbc37ef9bd03206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30709d8eee49814be95a33f810816229e680e5c00aaa85ab1fbc37ef9bd03206->enter($__internal_30709d8eee49814be95a33f810816229e680e5c00aaa85ab1fbc37ef9bd03206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_30709d8eee49814be95a33f810816229e680e5c00aaa85ab1fbc37ef9bd03206->leave($__internal_30709d8eee49814be95a33f810816229e680e5c00aaa85ab1fbc37ef9bd03206_prof);

        
        $__internal_5ab2bbf3e668c81030f82c65ca0e9a508f5e14056c8909262596b36e39b3c8c2->leave($__internal_5ab2bbf3e668c81030f82c65ca0e9a508f5e14056c8909262596b36e39b3c8c2_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_4b57c48125c5e53fe60535172839d3fb03291eab38663deff13c5c8da2685da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b57c48125c5e53fe60535172839d3fb03291eab38663deff13c5c8da2685da8->enter($__internal_4b57c48125c5e53fe60535172839d3fb03291eab38663deff13c5c8da2685da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_dfeb9339993ef941a9561b967208045b756b03b48ea48bf9af6d155bbd1e76de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfeb9339993ef941a9561b967208045b756b03b48ea48bf9af6d155bbd1e76de->enter($__internal_dfeb9339993ef941a9561b967208045b756b03b48ea48bf9af6d155bbd1e76de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
<body>



<section class=\"how-banner\">
    <div class=\"container\">
        <h4>How it works</h4>
    </div><!-- /.container -->
</section>

<!-- ==============================================
How Section
=============================================== -->
<section class=\"how\">
    <div class=\"container\">
        <div class=\"col-lg-3 text-center\">
            <i class=\"fa fa-file fa-5x\"></i>
            <h4>Post projects to tell us what you need done.</h4>
        </div>
        <div class=\"col-lg-3 text-center\">
            <i class=\"fa fa-users fa-5x\"></i>
            <h4>Browse profiles, reviews, then hire your most favorite and start project.</h4>
        </div>
        <div class=\"col-lg-3 text-center\">
            <i class=\"fa fa-briefcase fa-5x\"></i>
            <h4>Use The Kafe platform to chat and share files</h4>
        </div>
        <div class=\"col-lg-3 text-center\">
            <i class=\"fa fa-usd fa-5x\"></i>
            <h4>With our protection, money is only paid for work you authorize.</h4>
        </div>
    </div><!-- /.container -->
</section>

<!-- ==============================================
Category Section
=============================================== -->

<div class=\"tr-category section-padding\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h1>Browse Freelancers By Category</h1>
        </div>
        <div class=\"row\">
            <div class=\"category-list tr-list\">

                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-code fa-2x\"></i></span>
                            <span class=\"category-title\">Web & Mobile Development</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-eye fa-2x\"></i></span>
                            <span class=\"category-title\">Design, Arts & Multimedia</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-edit fa-2x\"></i></span>
                            <span class=\"category-title\">Writing & Translation</span>
                            <span class=\"category-quantity\">(212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-edit fa-2x\"></i></span>
                            <span class=\"category-title\">Admin Support</span>
                            <span class=\"category-quantity\">(972)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->

            </div><!-- category-list -->
            <div class=\"category-list tr-list\">

                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-table fa-2x\"></i></span>
                            <span class=\"category-title\">Management & Finance</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-bullhorn fa-2x\"></i></span>
                            <span class=\"category-title\">Sales & Marketing</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-wrench fa-2x\"></i></span>
                            <span class=\"category-title\">Engineering & Architecture</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_Hire");
        echo "\">
                            <span class=\"icon\"><i class=\"fa fa-legal fa-2x\"></i></span>
                            <span class=\"category-title\">Legal</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->

            </div><!-- category-list -->

        </div><!-- row -->
    </div><!-- /.container -->
</div><!-- tr-category -->

";
        
        $__internal_dfeb9339993ef941a9561b967208045b756b03b48ea48bf9af6d155bbd1e76de->leave($__internal_dfeb9339993ef941a9561b967208045b756b03b48ea48bf9af6d155bbd1e76de_prof);

        
        $__internal_4b57c48125c5e53fe60535172839d3fb03291eab38663deff13c5c8da2685da8->leave($__internal_4b57c48125c5e53fe60535172839d3fb03291eab38663deff13c5c8da2685da8_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/How.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 122,  201 => 113,  189 => 104,  177 => 95,  161 => 82,  149 => 73,  137 => 64,  125 => 55,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
  {% block container %}
      {{ parent() }}
<body>



<section class=\"how-banner\">
    <div class=\"container\">
        <h4>How it works</h4>
    </div><!-- /.container -->
</section>

<!-- ==============================================
How Section
=============================================== -->
<section class=\"how\">
    <div class=\"container\">
        <div class=\"col-lg-3 text-center\">
            <i class=\"fa fa-file fa-5x\"></i>
            <h4>Post projects to tell us what you need done.</h4>
        </div>
        <div class=\"col-lg-3 text-center\">
            <i class=\"fa fa-users fa-5x\"></i>
            <h4>Browse profiles, reviews, then hire your most favorite and start project.</h4>
        </div>
        <div class=\"col-lg-3 text-center\">
            <i class=\"fa fa-briefcase fa-5x\"></i>
            <h4>Use The Kafe platform to chat and share files</h4>
        </div>
        <div class=\"col-lg-3 text-center\">
            <i class=\"fa fa-usd fa-5x\"></i>
            <h4>With our protection, money is only paid for work you authorize.</h4>
        </div>
    </div><!-- /.container -->
</section>

<!-- ==============================================
Category Section
=============================================== -->

<div class=\"tr-category section-padding\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h1>Browse Freelancers By Category</h1>
        </div>
        <div class=\"row\">
            <div class=\"category-list tr-list\">

                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-code fa-2x\"></i></span>
                            <span class=\"category-title\">Web & Mobile Development</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-eye fa-2x\"></i></span>
                            <span class=\"category-title\">Design, Arts & Multimedia</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-edit fa-2x\"></i></span>
                            <span class=\"category-title\">Writing & Translation</span>
                            <span class=\"category-quantity\">(212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-edit fa-2x\"></i></span>
                            <span class=\"category-title\">Admin Support</span>
                            <span class=\"category-quantity\">(972)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->

            </div><!-- category-list -->
            <div class=\"category-list tr-list\">

                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-table fa-2x\"></i></span>
                            <span class=\"category-title\">Management & Finance</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-bullhorn fa-2x\"></i></span>
                            <span class=\"category-title\">Sales & Marketing</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-wrench fa-2x\"></i></span>
                            <span class=\"category-title\">Engineering & Architecture</span>
                            <span class=\"category-quantity\">(1298)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->
                <div class=\"col-lg-3\">
                    <div class=\"category-box\">
                        <a href=\"{{ path('template_Hire') }}\">
                            <span class=\"icon\"><i class=\"fa fa-legal fa-2x\"></i></span>
                            <span class=\"category-title\">Legal</span>
                            <span class=\"category-quantity\">(76212)</span>
                        </a>
                    </div><!-- category-box -->
                </div><!-- col-lg-3 -->

            </div><!-- category-list -->

        </div><!-- row -->
    </div><!-- /.container -->
</div><!-- tr-category -->

{% endblock %}
", "@Fix/Frontend/Default/How.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\How.html.twig");
    }
}
