<?php

/* @Fix/Frontend/Default/Pricing.html.twig */
class __TwigTemplate_cda9597fb1def19a437be7a25fd7837bc2bdc44026baca8e4cc14ea602a19624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Pricing.html.twig", 1);
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
        $__internal_758de7a5d16e23abaca5e047f2f63ab8e22e87767d45c6a0760e370cc690f3db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758de7a5d16e23abaca5e047f2f63ab8e22e87767d45c6a0760e370cc690f3db->enter($__internal_758de7a5d16e23abaca5e047f2f63ab8e22e87767d45c6a0760e370cc690f3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Pricing.html.twig"));

        $__internal_7e443fb81655fde6ceecb5bc42f702a5ba76343655c6d76585b63f2f7794bce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e443fb81655fde6ceecb5bc42f702a5ba76343655c6d76585b63f2f7794bce7->enter($__internal_7e443fb81655fde6ceecb5bc42f702a5ba76343655c6d76585b63f2f7794bce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Pricing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758de7a5d16e23abaca5e047f2f63ab8e22e87767d45c6a0760e370cc690f3db->leave($__internal_758de7a5d16e23abaca5e047f2f63ab8e22e87767d45c6a0760e370cc690f3db_prof);

        
        $__internal_7e443fb81655fde6ceecb5bc42f702a5ba76343655c6d76585b63f2f7794bce7->leave($__internal_7e443fb81655fde6ceecb5bc42f702a5ba76343655c6d76585b63f2f7794bce7_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_120b21d359f66de8541f94ecfd348a2e7373451c06c87fd124a4c1c0a2022f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120b21d359f66de8541f94ecfd348a2e7373451c06c87fd124a4c1c0a2022f5a->enter($__internal_120b21d359f66de8541f94ecfd348a2e7373451c06c87fd124a4c1c0a2022f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0fc2bffa96e9a40555c521ad36feb25ff52cd416d9461959c42237aee1b8af9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc2bffa96e9a40555c521ad36feb25ff52cd416d9461959c42237aee1b8af9e->enter($__internal_0fc2bffa96e9a40555c521ad36feb25ff52cd416d9461959c42237aee1b8af9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_0fc2bffa96e9a40555c521ad36feb25ff52cd416d9461959c42237aee1b8af9e->leave($__internal_0fc2bffa96e9a40555c521ad36feb25ff52cd416d9461959c42237aee1b8af9e_prof);

        
        $__internal_120b21d359f66de8541f94ecfd348a2e7373451c06c87fd124a4c1c0a2022f5a->leave($__internal_120b21d359f66de8541f94ecfd348a2e7373451c06c87fd124a4c1c0a2022f5a_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_1fad6cb340fe2fb3871dc19270cd0c318552a42394503d00191e7adb9674e051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fad6cb340fe2fb3871dc19270cd0c318552a42394503d00191e7adb9674e051->enter($__internal_1fad6cb340fe2fb3871dc19270cd0c318552a42394503d00191e7adb9674e051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_aec8f67674a37f3f250350ebc23a0dcf0ab16d3e14cb3a76c247d3b4313740f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec8f67674a37f3f250350ebc23a0dcf0ab16d3e14cb3a76c247d3b4313740f1->enter($__internal_aec8f67674a37f3f250350ebc23a0dcf0ab16d3e14cb3a76c247d3b4313740f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "

<body>
<section class=\"pricing pricing-plan\">
    <div class=\"container\">
        <div class=\"section-title\" style=\"padding-top: 20px;\">
            <h1>Pricing for Freelancers</h1>
        </div>
        <div class=\"row\">

            <div class=\"col-lg-4\">
                <div class=\"pricing-box\">
                    <h6>Basic Package</h6>
                    <div class=\"price\">
                        <sup>\$</sup>0
                        <span>per month</span>
                    </div>
                    <hr>
                    <p>Bids - <strong>10</strong></p>
                    <p>Job Fee - <strong>8.95%</strong></p>
                    <br>
                    <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"pricing-box\">
                    <h6>Medium Package</h6>
                    <div class=\"price\">
                        <sup>\$</sup>10
                        <span>per month</span>
                    </div>
                    <hr>
                    <p>Bids - <strong>50</strong></p>
                    <p>Job Fee - <strong>8.20%</strong></p>
                    <br>
                    <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"pricing-box\">
                    <h6>Ultimate Package</h6>
                    <div class=\"price\">
                        <sup>\$</sup>20
                        <span>per month</span>
                    </div>
                    <hr>
                    <p>Bids - <strong>100</strong></p>
                    <p>Job Fee - <strong>7.20%</strong></p>
                    <br>
                    <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                </div>
            </div>



        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.pricing -->

</body>
  ";
        
        $__internal_aec8f67674a37f3f250350ebc23a0dcf0ab16d3e14cb3a76c247d3b4313740f1->leave($__internal_aec8f67674a37f3f250350ebc23a0dcf0ab16d3e14cb3a76c247d3b4313740f1_prof);

        
        $__internal_1fad6cb340fe2fb3871dc19270cd0c318552a42394503d00191e7adb9674e051->leave($__internal_1fad6cb340fe2fb3871dc19270cd0c318552a42394503d00191e7adb9674e051_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  63 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
<section class=\"pricing pricing-plan\">
    <div class=\"container\">
        <div class=\"section-title\" style=\"padding-top: 20px;\">
            <h1>Pricing for Freelancers</h1>
        </div>
        <div class=\"row\">

            <div class=\"col-lg-4\">
                <div class=\"pricing-box\">
                    <h6>Basic Package</h6>
                    <div class=\"price\">
                        <sup>\$</sup>0
                        <span>per month</span>
                    </div>
                    <hr>
                    <p>Bids - <strong>10</strong></p>
                    <p>Job Fee - <strong>8.95%</strong></p>
                    <br>
                    <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"pricing-box\">
                    <h6>Medium Package</h6>
                    <div class=\"price\">
                        <sup>\$</sup>10
                        <span>per month</span>
                    </div>
                    <hr>
                    <p>Bids - <strong>50</strong></p>
                    <p>Job Fee - <strong>8.20%</strong></p>
                    <br>
                    <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"pricing-box\">
                    <h6>Ultimate Package</h6>
                    <div class=\"price\">
                        <sup>\$</sup>20
                        <span>per month</span>
                    </div>
                    <hr>
                    <p>Bids - <strong>100</strong></p>
                    <p>Job Fee - <strong>7.20%</strong></p>
                    <br>
                    <a class=\"kafe-btn kafe-btn-mint-small full-width\" href=\"#\">Select plan</a>
                </div>
            </div>



        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.pricing -->

</body>
  {% endblock %}

", "@Fix/Frontend/Default/Pricing.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Pricing.html.twig");
    }
}
