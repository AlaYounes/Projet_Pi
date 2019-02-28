<?php

/* FixBundle:Frontend/Default:How.html.twig */
class __TwigTemplate_8e3282b164f2a1596ba591bbf6a83a580fff6a6bd00d8d2c91929736eb299c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:How.html.twig", 1);
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
        $__internal_6d076eb983166a3344d0c2f4762919d1e94ab9f23ee9842215045983795c7cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d076eb983166a3344d0c2f4762919d1e94ab9f23ee9842215045983795c7cb4->enter($__internal_6d076eb983166a3344d0c2f4762919d1e94ab9f23ee9842215045983795c7cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:How.html.twig"));

        $__internal_fe59928ddaa4dc01057ab7060d69a8836f4e28ada2240c35fd803773d6d60d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe59928ddaa4dc01057ab7060d69a8836f4e28ada2240c35fd803773d6d60d06->enter($__internal_fe59928ddaa4dc01057ab7060d69a8836f4e28ada2240c35fd803773d6d60d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:How.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d076eb983166a3344d0c2f4762919d1e94ab9f23ee9842215045983795c7cb4->leave($__internal_6d076eb983166a3344d0c2f4762919d1e94ab9f23ee9842215045983795c7cb4_prof);

        
        $__internal_fe59928ddaa4dc01057ab7060d69a8836f4e28ada2240c35fd803773d6d60d06->leave($__internal_fe59928ddaa4dc01057ab7060d69a8836f4e28ada2240c35fd803773d6d60d06_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_ec525cff3a41cf5fe012c4d0c2ff03979c3debb777e17da0e65e28feab050878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec525cff3a41cf5fe012c4d0c2ff03979c3debb777e17da0e65e28feab050878->enter($__internal_ec525cff3a41cf5fe012c4d0c2ff03979c3debb777e17da0e65e28feab050878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3feb2c7488b76aae41979fd9f08bb5269e4a9e40e227bd9f64799bc8df308eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3feb2c7488b76aae41979fd9f08bb5269e4a9e40e227bd9f64799bc8df308eb6->enter($__internal_3feb2c7488b76aae41979fd9f08bb5269e4a9e40e227bd9f64799bc8df308eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_3feb2c7488b76aae41979fd9f08bb5269e4a9e40e227bd9f64799bc8df308eb6->leave($__internal_3feb2c7488b76aae41979fd9f08bb5269e4a9e40e227bd9f64799bc8df308eb6_prof);

        
        $__internal_ec525cff3a41cf5fe012c4d0c2ff03979c3debb777e17da0e65e28feab050878->leave($__internal_ec525cff3a41cf5fe012c4d0c2ff03979c3debb777e17da0e65e28feab050878_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_0b166c5682cd45b964c7ca4acd271cb6dca3498f543fcbe6723c578608d695ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b166c5682cd45b964c7ca4acd271cb6dca3498f543fcbe6723c578608d695ce->enter($__internal_0b166c5682cd45b964c7ca4acd271cb6dca3498f543fcbe6723c578608d695ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_47c9c476f2eddfbbc1fc7ce11d2293c1aef25188113c6fcdcba228c471b8c20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c9c476f2eddfbbc1fc7ce11d2293c1aef25188113c6fcdcba228c471b8c20f->enter($__internal_47c9c476f2eddfbbc1fc7ce11d2293c1aef25188113c6fcdcba228c471b8c20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_47c9c476f2eddfbbc1fc7ce11d2293c1aef25188113c6fcdcba228c471b8c20f->leave($__internal_47c9c476f2eddfbbc1fc7ce11d2293c1aef25188113c6fcdcba228c471b8c20f_prof);

        
        $__internal_0b166c5682cd45b964c7ca4acd271cb6dca3498f543fcbe6723c578608d695ce->leave($__internal_0b166c5682cd45b964c7ca4acd271cb6dca3498f543fcbe6723c578608d695ce_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:How.html.twig";
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
", "FixBundle:Frontend/Default:How.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/How.html.twig");
    }
}
