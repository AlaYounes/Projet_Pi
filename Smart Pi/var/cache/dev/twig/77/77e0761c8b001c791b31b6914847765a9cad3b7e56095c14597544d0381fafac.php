<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8ab0be7dde6d4ada7e524a2550d1602f823fbeaf29d14c4fb5e1fea14d08b38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_487b9ad3038cab58a515301bfdd6fc5f2fd67319ccf1b8eeb95ed0b35bebe8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487b9ad3038cab58a515301bfdd6fc5f2fd67319ccf1b8eeb95ed0b35bebe8f9->enter($__internal_487b9ad3038cab58a515301bfdd6fc5f2fd67319ccf1b8eeb95ed0b35bebe8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8250a4dbeb3e9b137f106d8ea578cfa62a81dc5b108a8b987ee883d301b3e400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8250a4dbeb3e9b137f106d8ea578cfa62a81dc5b108a8b987ee883d301b3e400->enter($__internal_8250a4dbeb3e9b137f106d8ea578cfa62a81dc5b108a8b987ee883d301b3e400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_487b9ad3038cab58a515301bfdd6fc5f2fd67319ccf1b8eeb95ed0b35bebe8f9->leave($__internal_487b9ad3038cab58a515301bfdd6fc5f2fd67319ccf1b8eeb95ed0b35bebe8f9_prof);

        
        $__internal_8250a4dbeb3e9b137f106d8ea578cfa62a81dc5b108a8b987ee883d301b3e400->leave($__internal_8250a4dbeb3e9b137f106d8ea578cfa62a81dc5b108a8b987ee883d301b3e400_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9afe108bf1268fb7afd7aa1cd944e726eda972e0a2d75f657a58513bc33d4f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afe108bf1268fb7afd7aa1cd944e726eda972e0a2d75f657a58513bc33d4f86->enter($__internal_9afe108bf1268fb7afd7aa1cd944e726eda972e0a2d75f657a58513bc33d4f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_111c1aa33bd39c49b9f89c6344357c63d4b42c8e46dd82c8ab7df8f971a7b1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111c1aa33bd39c49b9f89c6344357c63d4b42c8e46dd82c8ab7df8f971a7b1dd->enter($__internal_111c1aa33bd39c49b9f89c6344357c63d4b42c8e46dd82c8ab7df8f971a7b1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_111c1aa33bd39c49b9f89c6344357c63d4b42c8e46dd82c8ab7df8f971a7b1dd->leave($__internal_111c1aa33bd39c49b9f89c6344357c63d4b42c8e46dd82c8ab7df8f971a7b1dd_prof);

        
        $__internal_9afe108bf1268fb7afd7aa1cd944e726eda972e0a2d75f657a58513bc33d4f86->leave($__internal_9afe108bf1268fb7afd7aa1cd944e726eda972e0a2d75f657a58513bc33d4f86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
