<?php

/* FixBundle:Frontend/Default:Pricing.html.twig */
class __TwigTemplate_5cdfbb006993e7745d652e40be522db558c99364befe617fbc0e2ce734577ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:Pricing.html.twig", 1);
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
        $__internal_8d57791823de575f927cbdbb8547295ac39128c0ed4906994ce1bd3d8251e01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d57791823de575f927cbdbb8547295ac39128c0ed4906994ce1bd3d8251e01c->enter($__internal_8d57791823de575f927cbdbb8547295ac39128c0ed4906994ce1bd3d8251e01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Pricing.html.twig"));

        $__internal_7e778ef7f352ced26d898d28b2159e9c6ab8bebdd265176d0c597a266e28b122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e778ef7f352ced26d898d28b2159e9c6ab8bebdd265176d0c597a266e28b122->enter($__internal_7e778ef7f352ced26d898d28b2159e9c6ab8bebdd265176d0c597a266e28b122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Pricing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d57791823de575f927cbdbb8547295ac39128c0ed4906994ce1bd3d8251e01c->leave($__internal_8d57791823de575f927cbdbb8547295ac39128c0ed4906994ce1bd3d8251e01c_prof);

        
        $__internal_7e778ef7f352ced26d898d28b2159e9c6ab8bebdd265176d0c597a266e28b122->leave($__internal_7e778ef7f352ced26d898d28b2159e9c6ab8bebdd265176d0c597a266e28b122_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_c816cf036aecd3ad4b83738f633c1ca227918dade0dd75901fae5be65098d23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c816cf036aecd3ad4b83738f633c1ca227918dade0dd75901fae5be65098d23b->enter($__internal_c816cf036aecd3ad4b83738f633c1ca227918dade0dd75901fae5be65098d23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3c9e4d6c268227d1ce4d3d8830764df3d83cc39ee900c24f2a1db6528fb5afa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9e4d6c268227d1ce4d3d8830764df3d83cc39ee900c24f2a1db6528fb5afa2->enter($__internal_3c9e4d6c268227d1ce4d3d8830764df3d83cc39ee900c24f2a1db6528fb5afa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_3c9e4d6c268227d1ce4d3d8830764df3d83cc39ee900c24f2a1db6528fb5afa2->leave($__internal_3c9e4d6c268227d1ce4d3d8830764df3d83cc39ee900c24f2a1db6528fb5afa2_prof);

        
        $__internal_c816cf036aecd3ad4b83738f633c1ca227918dade0dd75901fae5be65098d23b->leave($__internal_c816cf036aecd3ad4b83738f633c1ca227918dade0dd75901fae5be65098d23b_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_72317f024dda1e8905a7065cb77ab53af3923583b8819e3701f796da4b3aedf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72317f024dda1e8905a7065cb77ab53af3923583b8819e3701f796da4b3aedf7->enter($__internal_72317f024dda1e8905a7065cb77ab53af3923583b8819e3701f796da4b3aedf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_d59abd8447cb9554fd2a8b7ed12a94578d3f5242b11e6ef11cfe0222e060d6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59abd8447cb9554fd2a8b7ed12a94578d3f5242b11e6ef11cfe0222e060d6fa->enter($__internal_d59abd8447cb9554fd2a8b7ed12a94578d3f5242b11e6ef11cfe0222e060d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_d59abd8447cb9554fd2a8b7ed12a94578d3f5242b11e6ef11cfe0222e060d6fa->leave($__internal_d59abd8447cb9554fd2a8b7ed12a94578d3f5242b11e6ef11cfe0222e060d6fa_prof);

        
        $__internal_72317f024dda1e8905a7065cb77ab53af3923583b8819e3701f796da4b3aedf7->leave($__internal_72317f024dda1e8905a7065cb77ab53af3923583b8819e3701f796da4b3aedf7_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:Pricing.html.twig";
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

", "FixBundle:Frontend/Default:Pricing.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/Pricing.html.twig");
    }
}
