<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_25f8e93ff7748b3cf85f7d90f22fc4100eced54372ea7e6d8ccb12a531a3f6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_263c92eaa269fef52c6827491222ae53741ddf42e19083c9d40405132cb69635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263c92eaa269fef52c6827491222ae53741ddf42e19083c9d40405132cb69635->enter($__internal_263c92eaa269fef52c6827491222ae53741ddf42e19083c9d40405132cb69635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8bd4b38425fa5a8963b7847a8c6dc680e1ebdea948f76bb47cae831ff74f22b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd4b38425fa5a8963b7847a8c6dc680e1ebdea948f76bb47cae831ff74f22b8->enter($__internal_8bd4b38425fa5a8963b7847a8c6dc680e1ebdea948f76bb47cae831ff74f22b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_263c92eaa269fef52c6827491222ae53741ddf42e19083c9d40405132cb69635->leave($__internal_263c92eaa269fef52c6827491222ae53741ddf42e19083c9d40405132cb69635_prof);

        
        $__internal_8bd4b38425fa5a8963b7847a8c6dc680e1ebdea948f76bb47cae831ff74f22b8->leave($__internal_8bd4b38425fa5a8963b7847a8c6dc680e1ebdea948f76bb47cae831ff74f22b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de58dc3106baad88978c0cf3a7574ee530403f21a3848cc0a05ff38c23e302ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de58dc3106baad88978c0cf3a7574ee530403f21a3848cc0a05ff38c23e302ae->enter($__internal_de58dc3106baad88978c0cf3a7574ee530403f21a3848cc0a05ff38c23e302ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4bff58277ad5ee0e99a0397536128e871122b6ae9de8b68fe7664fd7c7cfd5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bff58277ad5ee0e99a0397536128e871122b6ae9de8b68fe7664fd7c7cfd5b7->enter($__internal_4bff58277ad5ee0e99a0397536128e871122b6ae9de8b68fe7664fd7c7cfd5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4bff58277ad5ee0e99a0397536128e871122b6ae9de8b68fe7664fd7c7cfd5b7->leave($__internal_4bff58277ad5ee0e99a0397536128e871122b6ae9de8b68fe7664fd7c7cfd5b7_prof);

        
        $__internal_de58dc3106baad88978c0cf3a7574ee530403f21a3848cc0a05ff38c23e302ae->leave($__internal_de58dc3106baad88978c0cf3a7574ee530403f21a3848cc0a05ff38c23e302ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
