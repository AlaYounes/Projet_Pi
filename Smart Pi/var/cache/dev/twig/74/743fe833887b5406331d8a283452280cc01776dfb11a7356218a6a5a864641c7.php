<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_53502bdc061a14098717d633ee87689aeae8925ab6ca29f492e9bee594210757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8baebe4f69e1c7f98f103e4dc326ed2f5eb30a69260e9490604cfb2ae5b1c055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8baebe4f69e1c7f98f103e4dc326ed2f5eb30a69260e9490604cfb2ae5b1c055->enter($__internal_8baebe4f69e1c7f98f103e4dc326ed2f5eb30a69260e9490604cfb2ae5b1c055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_3be42e20df3289c9188e68093431007905ba4d91106432f2dd322b93b7c3d861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be42e20df3289c9188e68093431007905ba4d91106432f2dd322b93b7c3d861->enter($__internal_3be42e20df3289c9188e68093431007905ba4d91106432f2dd322b93b7c3d861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8baebe4f69e1c7f98f103e4dc326ed2f5eb30a69260e9490604cfb2ae5b1c055->leave($__internal_8baebe4f69e1c7f98f103e4dc326ed2f5eb30a69260e9490604cfb2ae5b1c055_prof);

        
        $__internal_3be42e20df3289c9188e68093431007905ba4d91106432f2dd322b93b7c3d861->leave($__internal_3be42e20df3289c9188e68093431007905ba4d91106432f2dd322b93b7c3d861_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1811f325affd5cdaf8715e1e8ce36cc2052d30517d7b22351edf9a84d668037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1811f325affd5cdaf8715e1e8ce36cc2052d30517d7b22351edf9a84d668037->enter($__internal_a1811f325affd5cdaf8715e1e8ce36cc2052d30517d7b22351edf9a84d668037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dee2119336462e056c1e7075beec9daf06568f4e57abfed0d7c883c5242686b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee2119336462e056c1e7075beec9daf06568f4e57abfed0d7c883c5242686b4->enter($__internal_dee2119336462e056c1e7075beec9daf06568f4e57abfed0d7c883c5242686b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_dee2119336462e056c1e7075beec9daf06568f4e57abfed0d7c883c5242686b4->leave($__internal_dee2119336462e056c1e7075beec9daf06568f4e57abfed0d7c883c5242686b4_prof);

        
        $__internal_a1811f325affd5cdaf8715e1e8ce36cc2052d30517d7b22351edf9a84d668037->leave($__internal_a1811f325affd5cdaf8715e1e8ce36cc2052d30517d7b22351edf9a84d668037_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
