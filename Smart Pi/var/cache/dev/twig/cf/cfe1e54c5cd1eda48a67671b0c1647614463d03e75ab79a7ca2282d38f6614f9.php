<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_f4d0a3e2d95995b59fce9f7bae050b14e9571fb9c5561480b4a1b4f8ff651d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_cd109bfd2221a4b16f01ecbe0f0bd4efe5fb2981ed2aa557313d9e9104b99b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd109bfd2221a4b16f01ecbe0f0bd4efe5fb2981ed2aa557313d9e9104b99b97->enter($__internal_cd109bfd2221a4b16f01ecbe0f0bd4efe5fb2981ed2aa557313d9e9104b99b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_672949a92c6023c769b0adda871eb511de7658237dce0ff940260b89e473de1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672949a92c6023c769b0adda871eb511de7658237dce0ff940260b89e473de1f->enter($__internal_672949a92c6023c769b0adda871eb511de7658237dce0ff940260b89e473de1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd109bfd2221a4b16f01ecbe0f0bd4efe5fb2981ed2aa557313d9e9104b99b97->leave($__internal_cd109bfd2221a4b16f01ecbe0f0bd4efe5fb2981ed2aa557313d9e9104b99b97_prof);

        
        $__internal_672949a92c6023c769b0adda871eb511de7658237dce0ff940260b89e473de1f->leave($__internal_672949a92c6023c769b0adda871eb511de7658237dce0ff940260b89e473de1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2e89b1973ac7c88f3404d04e5385cea165d7973156dc5116729532a68f88d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e89b1973ac7c88f3404d04e5385cea165d7973156dc5116729532a68f88d7a->enter($__internal_d2e89b1973ac7c88f3404d04e5385cea165d7973156dc5116729532a68f88d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0bdd2a856ecf0f51f331b3f134e2df99dab01e49da2511fdc84e1ea27f11011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bdd2a856ecf0f51f331b3f134e2df99dab01e49da2511fdc84e1ea27f11011->enter($__internal_d0bdd2a856ecf0f51f331b3f134e2df99dab01e49da2511fdc84e1ea27f11011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d0bdd2a856ecf0f51f331b3f134e2df99dab01e49da2511fdc84e1ea27f11011->leave($__internal_d0bdd2a856ecf0f51f331b3f134e2df99dab01e49da2511fdc84e1ea27f11011_prof);

        
        $__internal_d2e89b1973ac7c88f3404d04e5385cea165d7973156dc5116729532a68f88d7a->leave($__internal_d2e89b1973ac7c88f3404d04e5385cea165d7973156dc5116729532a68f88d7a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
