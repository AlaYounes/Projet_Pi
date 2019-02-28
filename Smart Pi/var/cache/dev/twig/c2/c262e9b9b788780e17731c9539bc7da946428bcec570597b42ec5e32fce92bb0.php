<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_85a6c235f4c1a61557782dc1342fd888712a1abaaca348652a0bf4a2a3ee48c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_c06df37a974c354ef7c7de346b6da45fbbeecef811e949b727c2fac76fbc07dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06df37a974c354ef7c7de346b6da45fbbeecef811e949b727c2fac76fbc07dc->enter($__internal_c06df37a974c354ef7c7de346b6da45fbbeecef811e949b727c2fac76fbc07dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_99bb93c6e60f56db7e04e24fa7b26291d9f89753811af208c40a9274f6154ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bb93c6e60f56db7e04e24fa7b26291d9f89753811af208c40a9274f6154ed4->enter($__internal_99bb93c6e60f56db7e04e24fa7b26291d9f89753811af208c40a9274f6154ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06df37a974c354ef7c7de346b6da45fbbeecef811e949b727c2fac76fbc07dc->leave($__internal_c06df37a974c354ef7c7de346b6da45fbbeecef811e949b727c2fac76fbc07dc_prof);

        
        $__internal_99bb93c6e60f56db7e04e24fa7b26291d9f89753811af208c40a9274f6154ed4->leave($__internal_99bb93c6e60f56db7e04e24fa7b26291d9f89753811af208c40a9274f6154ed4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61438eadb891ae652e70af2b569c4197ef7e98eba7b9dca67880c16b56f86ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61438eadb891ae652e70af2b569c4197ef7e98eba7b9dca67880c16b56f86ab8->enter($__internal_61438eadb891ae652e70af2b569c4197ef7e98eba7b9dca67880c16b56f86ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ccbee7216e294d74da51a0d6a10e2973ffc40d8b5aebb17f15cef95a76be797d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbee7216e294d74da51a0d6a10e2973ffc40d8b5aebb17f15cef95a76be797d->enter($__internal_ccbee7216e294d74da51a0d6a10e2973ffc40d8b5aebb17f15cef95a76be797d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_ccbee7216e294d74da51a0d6a10e2973ffc40d8b5aebb17f15cef95a76be797d->leave($__internal_ccbee7216e294d74da51a0d6a10e2973ffc40d8b5aebb17f15cef95a76be797d_prof);

        
        $__internal_61438eadb891ae652e70af2b569c4197ef7e98eba7b9dca67880c16b56f86ab8->leave($__internal_61438eadb891ae652e70af2b569c4197ef7e98eba7b9dca67880c16b56f86ab8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
