<?php

/* article/new.html.twig */
class __TwigTemplate_5834a2036e35a91f2110204c163af6ca19ab7364e59f28504253091817058e29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c47e182e223689c462ef13bb0d2e8bece00bde477dc3f3bf159af10c53e3024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c47e182e223689c462ef13bb0d2e8bece00bde477dc3f3bf159af10c53e3024->enter($__internal_8c47e182e223689c462ef13bb0d2e8bece00bde477dc3f3bf159af10c53e3024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_e9c8afdf87cc94d4acc2d391c93d56b417f9d4ef4b4593f5848fb121130556cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c8afdf87cc94d4acc2d391c93d56b417f9d4ef4b4593f5848fb121130556cd->enter($__internal_e9c8afdf87cc94d4acc2d391c93d56b417f9d4ef4b4593f5848fb121130556cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c47e182e223689c462ef13bb0d2e8bece00bde477dc3f3bf159af10c53e3024->leave($__internal_8c47e182e223689c462ef13bb0d2e8bece00bde477dc3f3bf159af10c53e3024_prof);

        
        $__internal_e9c8afdf87cc94d4acc2d391c93d56b417f9d4ef4b4593f5848fb121130556cd->leave($__internal_e9c8afdf87cc94d4acc2d391c93d56b417f9d4ef4b4593f5848fb121130556cd_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_ba7008174d6f61aceebdc96ed8d80164d5c3d7b85e1884cf0cf6e885b0392e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7008174d6f61aceebdc96ed8d80164d5c3d7b85e1884cf0cf6e885b0392e92->enter($__internal_ba7008174d6f61aceebdc96ed8d80164d5c3d7b85e1884cf0cf6e885b0392e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_dc7cfb7b3d9d14bd69997239b6d2ec20612bf3df3fed10026a66168cc05c22cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7cfb7b3d9d14bd69997239b6d2ec20612bf3df3fed10026a66168cc05c22cb->enter($__internal_dc7cfb7b3d9d14bd69997239b6d2ec20612bf3df3fed10026a66168cc05c22cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Article creation</h1>

    ";
        // line 7
        echo "    ";
        // line 8
        echo "
    ";
        // line 10
        echo "        ";
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        // line 13
        echo "    ";
        // line 14
        echo "
    ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        // line 19
        echo "            ";
        // line 20
        echo "    ";
        // line 21
        echo "
    ";
        // line 23
        echo "        ";
        // line 24
        echo "    ";
        // line 25
        echo "
    ";
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        // line 30
        echo "    ";
        // line 31
        echo "    ";
        // line 32
        echo "
    ";
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        // line 37
        echo "


    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Create\"/>
    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"kafe-btn kafe-btn-mint-small full-width\">
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_dc7cfb7b3d9d14bd69997239b6d2ec20612bf3df3fed10026a66168cc05c22cb->leave($__internal_dc7cfb7b3d9d14bd69997239b6d2ec20612bf3df3fed10026a66168cc05c22cb_prof);

        
        $__internal_ba7008174d6f61aceebdc96ed8d80164d5c3d7b85e1884cf0cf6e885b0392e92->leave($__internal_ba7008174d6f61aceebdc96ed8d80164d5c3d7b85e1884cf0cf6e885b0392e92_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  122 => 43,  117 => 41,  113 => 40,  108 => 37,  106 => 36,  104 => 35,  102 => 34,  99 => 32,  97 => 31,  95 => 30,  93 => 29,  91 => 28,  89 => 27,  86 => 25,  84 => 24,  82 => 23,  79 => 21,  77 => 20,  75 => 19,  73 => 18,  71 => 17,  69 => 16,  66 => 14,  64 => 13,  62 => 12,  60 => 11,  58 => 10,  55 => 8,  53 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{#{% form_theme form 'bootstrap_3_layout.html.twig' %}#}
{% block container %}
    <h1>Article creation</h1>

    {#{{ form_start(form) }}#}
    {#{{ form_errors(form) }}#}

    {#<div>#}
        {#{{ form_label(form.titre, \"Titre de l'article\") }}#}
        {#{{ form_errors(form.titre) }}#}
        {#{{ form_widget(form.titre, {'attr': {'class': 'form-controls','placeholder': 'Titre' ,'rows': '20'}}) }}#}
    {#</div>#}

    {#<div>#}
        {#{{ form_label(form.description) }}#}
        {#{{ form_errors(form.description)}}#}
        {#{{ form_widget(form.description, {'attr': {'class': 'form-controls','placeholder': 'Provide a detailed description'#}
            {#,'rows': '5'}})  }}#}
    {#</div>#}

    {#<div>#}
        {#{{ form_widget(form.imageFile) }}#}
    {#</div>#}

    {#<div>#}
        {#{{ form_label(form.categorie) }}#}
        {#{{ form_errors(form.categorie) }}#}
        {#{{ form_widget(form.categorie) }}#}
    {#</div>#}
    {#{{ form_end(form) }}#}

    {#{{ form_start(form) }}#}
    {#{{ form_widget(form) }}#}
    {#<input class=\"kafe-btn kafe-btn-mint-small full-width\" type=\"submit\" value=\"Create\"/>#}
    {#{{ form_end(form) }}#}



    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\"/>
    {{ form_end(form) }}

    <ul class=\"kafe-btn kafe-btn-mint-small full-width\">
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\article\\new.html.twig");
    }
}
