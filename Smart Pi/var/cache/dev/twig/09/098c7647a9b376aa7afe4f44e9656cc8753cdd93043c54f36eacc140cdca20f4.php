<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_c53517f7586a03785de3c0523f99a16b966a561db4901b18e582c50fd0185190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_2be8a290085e66aa81a9ab663d38a7809694de097aee4271af24ab5bd3176ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be8a290085e66aa81a9ab663d38a7809694de097aee4271af24ab5bd3176ef2->enter($__internal_2be8a290085e66aa81a9ab663d38a7809694de097aee4271af24ab5bd3176ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_553cc44b424e643741fc03d7fe3b91ea91891966406b0eb67752c33b112671ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553cc44b424e643741fc03d7fe3b91ea91891966406b0eb67752c33b112671ff->enter($__internal_553cc44b424e643741fc03d7fe3b91ea91891966406b0eb67752c33b112671ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be8a290085e66aa81a9ab663d38a7809694de097aee4271af24ab5bd3176ef2->leave($__internal_2be8a290085e66aa81a9ab663d38a7809694de097aee4271af24ab5bd3176ef2_prof);

        
        $__internal_553cc44b424e643741fc03d7fe3b91ea91891966406b0eb67752c33b112671ff->leave($__internal_553cc44b424e643741fc03d7fe3b91ea91891966406b0eb67752c33b112671ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fe5fa6f88915bb57865bd04d831efbe0ed974659f0a324bc9860970b40ac12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe5fa6f88915bb57865bd04d831efbe0ed974659f0a324bc9860970b40ac12b->enter($__internal_3fe5fa6f88915bb57865bd04d831efbe0ed974659f0a324bc9860970b40ac12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9941275668832d86deca1623e3d51181163a914b2b1b660d82869ef85a23b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9941275668832d86deca1623e3d51181163a914b2b1b660d82869ef85a23b86->enter($__internal_e9941275668832d86deca1623e3d51181163a914b2b1b660d82869ef85a23b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e9941275668832d86deca1623e3d51181163a914b2b1b660d82869ef85a23b86->leave($__internal_e9941275668832d86deca1623e3d51181163a914b2b1b660d82869ef85a23b86_prof);

        
        $__internal_3fe5fa6f88915bb57865bd04d831efbe0ed974659f0a324bc9860970b40ac12b->leave($__internal_3fe5fa6f88915bb57865bd04d831efbe0ed974659f0a324bc9860970b40ac12b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
