<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_a9f755ca98a21ad994ed682edced3fe4989b6d9b5100d9f42a76b76848eb5551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_be1821bccb6eb4f9d91943cee63e5d3c867d2b998ca4682328389db0f496327c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1821bccb6eb4f9d91943cee63e5d3c867d2b998ca4682328389db0f496327c->enter($__internal_be1821bccb6eb4f9d91943cee63e5d3c867d2b998ca4682328389db0f496327c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_582019482693421198e4874bda240a899227989977d50db6ad6478578b2237d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582019482693421198e4874bda240a899227989977d50db6ad6478578b2237d1->enter($__internal_582019482693421198e4874bda240a899227989977d50db6ad6478578b2237d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be1821bccb6eb4f9d91943cee63e5d3c867d2b998ca4682328389db0f496327c->leave($__internal_be1821bccb6eb4f9d91943cee63e5d3c867d2b998ca4682328389db0f496327c_prof);

        
        $__internal_582019482693421198e4874bda240a899227989977d50db6ad6478578b2237d1->leave($__internal_582019482693421198e4874bda240a899227989977d50db6ad6478578b2237d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f2ed687245d0af0f852b82cd7e347ed656e235fd5c3069e3221fc8c94d955fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2ed687245d0af0f852b82cd7e347ed656e235fd5c3069e3221fc8c94d955fe->enter($__internal_4f2ed687245d0af0f852b82cd7e347ed656e235fd5c3069e3221fc8c94d955fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d96563d3d1d516cfe4ece493fd9d6a4239e78e310c72afc4ac4cf668e5e6e2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96563d3d1d516cfe4ece493fd9d6a4239e78e310c72afc4ac4cf668e5e6e2db->enter($__internal_d96563d3d1d516cfe4ece493fd9d6a4239e78e310c72afc4ac4cf668e5e6e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        // line 5
        echo "    <h1>aaaaaaaaaaaaa</h1>
";
        
        $__internal_d96563d3d1d516cfe4ece493fd9d6a4239e78e310c72afc4ac4cf668e5e6e2db->leave($__internal_d96563d3d1d516cfe4ece493fd9d6a4239e78e310c72afc4ac4cf668e5e6e2db_prof);

        
        $__internal_4f2ed687245d0af0f852b82cd7e347ed656e235fd5c3069e3221fc8c94d955fe->leave($__internal_4f2ed687245d0af0f852b82cd7e347ed656e235fd5c3069e3221fc8c94d955fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
    <h1>aaaaaaaaaaaaa</h1>
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
