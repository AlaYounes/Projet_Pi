<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_0e8b305bc8050c4d820e65b02bc099a5bb294f914c8cef1638c353c8c704c486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_342cd6a2bce2c9a6c2e714a5f4e862a45093d9dffd1aa7d58905874fbbe4e340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342cd6a2bce2c9a6c2e714a5f4e862a45093d9dffd1aa7d58905874fbbe4e340->enter($__internal_342cd6a2bce2c9a6c2e714a5f4e862a45093d9dffd1aa7d58905874fbbe4e340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_1a8b622cd01fd9e2404bc8ebe4a21897ad43d5fd4f975e65995ba19b5976036d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8b622cd01fd9e2404bc8ebe4a21897ad43d5fd4f975e65995ba19b5976036d->enter($__internal_1a8b622cd01fd9e2404bc8ebe4a21897ad43d5fd4f975e65995ba19b5976036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_342cd6a2bce2c9a6c2e714a5f4e862a45093d9dffd1aa7d58905874fbbe4e340->leave($__internal_342cd6a2bce2c9a6c2e714a5f4e862a45093d9dffd1aa7d58905874fbbe4e340_prof);

        
        $__internal_1a8b622cd01fd9e2404bc8ebe4a21897ad43d5fd4f975e65995ba19b5976036d->leave($__internal_1a8b622cd01fd9e2404bc8ebe4a21897ad43d5fd4f975e65995ba19b5976036d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67dbf07bd87ed862deef231ec2474e8dbfe18211a7f5232eb5d976ae5196be45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67dbf07bd87ed862deef231ec2474e8dbfe18211a7f5232eb5d976ae5196be45->enter($__internal_67dbf07bd87ed862deef231ec2474e8dbfe18211a7f5232eb5d976ae5196be45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf18c8f5a87b073ee235d443c66243bb16c15f6bb1f84384aa0a93169b78d238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf18c8f5a87b073ee235d443c66243bb16c15f6bb1f84384aa0a93169b78d238->enter($__internal_cf18c8f5a87b073ee235d443c66243bb16c15f6bb1f84384aa0a93169b78d238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_cf18c8f5a87b073ee235d443c66243bb16c15f6bb1f84384aa0a93169b78d238->leave($__internal_cf18c8f5a87b073ee235d443c66243bb16c15f6bb1f84384aa0a93169b78d238_prof);

        
        $__internal_67dbf07bd87ed862deef231ec2474e8dbfe18211a7f5232eb5d976ae5196be45->leave($__internal_67dbf07bd87ed862deef231ec2474e8dbfe18211a7f5232eb5d976ae5196be45_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
