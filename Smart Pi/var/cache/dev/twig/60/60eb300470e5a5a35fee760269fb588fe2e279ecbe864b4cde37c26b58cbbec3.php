<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6ea077aecc377b60537ce4fd59df1c84bbd64503be46dc83003ec3dc62e6398d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_2b23767a1eb96321afdd0ae3439a7d6e020c9d390b4418a89e62c4fc573eb72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b23767a1eb96321afdd0ae3439a7d6e020c9d390b4418a89e62c4fc573eb72c->enter($__internal_2b23767a1eb96321afdd0ae3439a7d6e020c9d390b4418a89e62c4fc573eb72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_13e1834826105fca8c376e91b159908caf71b9037ee0831a00281acef6dee4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e1834826105fca8c376e91b159908caf71b9037ee0831a00281acef6dee4eb->enter($__internal_13e1834826105fca8c376e91b159908caf71b9037ee0831a00281acef6dee4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b23767a1eb96321afdd0ae3439a7d6e020c9d390b4418a89e62c4fc573eb72c->leave($__internal_2b23767a1eb96321afdd0ae3439a7d6e020c9d390b4418a89e62c4fc573eb72c_prof);

        
        $__internal_13e1834826105fca8c376e91b159908caf71b9037ee0831a00281acef6dee4eb->leave($__internal_13e1834826105fca8c376e91b159908caf71b9037ee0831a00281acef6dee4eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11087d7831c481612676ac4fdb7d1068523823b77c03dd13639d9afe918d2ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11087d7831c481612676ac4fdb7d1068523823b77c03dd13639d9afe918d2ee5->enter($__internal_11087d7831c481612676ac4fdb7d1068523823b77c03dd13639d9afe918d2ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a51398693361471fc4cab04f36b29cdc6065e36cdcd95c9d65458c3bd845bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a51398693361471fc4cab04f36b29cdc6065e36cdcd95c9d65458c3bd845bce->enter($__internal_2a51398693361471fc4cab04f36b29cdc6065e36cdcd95c9d65458c3bd845bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2a51398693361471fc4cab04f36b29cdc6065e36cdcd95c9d65458c3bd845bce->leave($__internal_2a51398693361471fc4cab04f36b29cdc6065e36cdcd95c9d65458c3bd845bce_prof);

        
        $__internal_11087d7831c481612676ac4fdb7d1068523823b77c03dd13639d9afe918d2ee5->leave($__internal_11087d7831c481612676ac4fdb7d1068523823b77c03dd13639d9afe918d2ee5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
