<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_6bdb1f9e2623e51f3e61aafa1228c81190ca58953096be7c226f4b74578c4c07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3ed501247949a11c1c7d3124dd664b0d3641537bfe17b338d3e1806c8bd54bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed501247949a11c1c7d3124dd664b0d3641537bfe17b338d3e1806c8bd54bdc->enter($__internal_3ed501247949a11c1c7d3124dd664b0d3641537bfe17b338d3e1806c8bd54bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_2ea7313dffcae43d086d2b0790b4557450c9df5d61973bd876d9b0f9664bd68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea7313dffcae43d086d2b0790b4557450c9df5d61973bd876d9b0f9664bd68e->enter($__internal_2ea7313dffcae43d086d2b0790b4557450c9df5d61973bd876d9b0f9664bd68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ed501247949a11c1c7d3124dd664b0d3641537bfe17b338d3e1806c8bd54bdc->leave($__internal_3ed501247949a11c1c7d3124dd664b0d3641537bfe17b338d3e1806c8bd54bdc_prof);

        
        $__internal_2ea7313dffcae43d086d2b0790b4557450c9df5d61973bd876d9b0f9664bd68e->leave($__internal_2ea7313dffcae43d086d2b0790b4557450c9df5d61973bd876d9b0f9664bd68e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c71ba479e3845a8423d3220f94b223a1e345c4125b3dfae566b3d53a7562a86b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71ba479e3845a8423d3220f94b223a1e345c4125b3dfae566b3d53a7562a86b->enter($__internal_c71ba479e3845a8423d3220f94b223a1e345c4125b3dfae566b3d53a7562a86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50482c8895db8f8f9560d6508f9552c8ebbd395887725ae53aea4825537af525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50482c8895db8f8f9560d6508f9552c8ebbd395887725ae53aea4825537af525->enter($__internal_50482c8895db8f8f9560d6508f9552c8ebbd395887725ae53aea4825537af525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_50482c8895db8f8f9560d6508f9552c8ebbd395887725ae53aea4825537af525->leave($__internal_50482c8895db8f8f9560d6508f9552c8ebbd395887725ae53aea4825537af525_prof);

        
        $__internal_c71ba479e3845a8423d3220f94b223a1e345c4125b3dfae566b3d53a7562a86b->leave($__internal_c71ba479e3845a8423d3220f94b223a1e345c4125b3dfae566b3d53a7562a86b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
