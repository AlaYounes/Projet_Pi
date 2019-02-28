<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3d9cd5f5d8af261403879c11e2ca73cebde650f6d754052f51a2bcc193e580a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16daba2b83839b565d5ae06488abd6b05d6936bc6db86424226d51096bcee0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16daba2b83839b565d5ae06488abd6b05d6936bc6db86424226d51096bcee0f6->enter($__internal_16daba2b83839b565d5ae06488abd6b05d6936bc6db86424226d51096bcee0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_67a86cc6f21fed11aafb5276016387b1c2c7c85fea833c1402f48d96c94502f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a86cc6f21fed11aafb5276016387b1c2c7c85fea833c1402f48d96c94502f2->enter($__internal_67a86cc6f21fed11aafb5276016387b1c2c7c85fea833c1402f48d96c94502f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16daba2b83839b565d5ae06488abd6b05d6936bc6db86424226d51096bcee0f6->leave($__internal_16daba2b83839b565d5ae06488abd6b05d6936bc6db86424226d51096bcee0f6_prof);

        
        $__internal_67a86cc6f21fed11aafb5276016387b1c2c7c85fea833c1402f48d96c94502f2->leave($__internal_67a86cc6f21fed11aafb5276016387b1c2c7c85fea833c1402f48d96c94502f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c77010aacb9757e54093bda4f303a47b992dac4982447fbb9b8e9e25fe8e8333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77010aacb9757e54093bda4f303a47b992dac4982447fbb9b8e9e25fe8e8333->enter($__internal_c77010aacb9757e54093bda4f303a47b992dac4982447fbb9b8e9e25fe8e8333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_263a70b335fa3e6420e2726329453f82a54c7a785b34ffcf6fb58d58844e0322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263a70b335fa3e6420e2726329453f82a54c7a785b34ffcf6fb58d58844e0322->enter($__internal_263a70b335fa3e6420e2726329453f82a54c7a785b34ffcf6fb58d58844e0322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_263a70b335fa3e6420e2726329453f82a54c7a785b34ffcf6fb58d58844e0322->leave($__internal_263a70b335fa3e6420e2726329453f82a54c7a785b34ffcf6fb58d58844e0322_prof);

        
        $__internal_c77010aacb9757e54093bda4f303a47b992dac4982447fbb9b8e9e25fe8e8333->leave($__internal_c77010aacb9757e54093bda4f303a47b992dac4982447fbb9b8e9e25fe8e8333_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
