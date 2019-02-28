<?php

/* :article:new.html.twig */
class __TwigTemplate_faaf336a0a36b246e394f35985341a72048e55291764d7f289f8711c8a7095c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:new.html.twig", 1);
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
        $__internal_06907852d4f0a38e764169fef45e59c1ccac7788cc8d3bdeb824eb3b691a905c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06907852d4f0a38e764169fef45e59c1ccac7788cc8d3bdeb824eb3b691a905c->enter($__internal_06907852d4f0a38e764169fef45e59c1ccac7788cc8d3bdeb824eb3b691a905c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $__internal_c79ca81085c789d94d4dcd92d11fa06cfffe2e42a5345bedf3f583f217774247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79ca81085c789d94d4dcd92d11fa06cfffe2e42a5345bedf3f583f217774247->enter($__internal_c79ca81085c789d94d4dcd92d11fa06cfffe2e42a5345bedf3f583f217774247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06907852d4f0a38e764169fef45e59c1ccac7788cc8d3bdeb824eb3b691a905c->leave($__internal_06907852d4f0a38e764169fef45e59c1ccac7788cc8d3bdeb824eb3b691a905c_prof);

        
        $__internal_c79ca81085c789d94d4dcd92d11fa06cfffe2e42a5345bedf3f583f217774247->leave($__internal_c79ca81085c789d94d4dcd92d11fa06cfffe2e42a5345bedf3f583f217774247_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_ad55b848693af46deef36d3bc7f4cfd6555ee943ea7379c22e1413ec999d928e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad55b848693af46deef36d3bc7f4cfd6555ee943ea7379c22e1413ec999d928e->enter($__internal_ad55b848693af46deef36d3bc7f4cfd6555ee943ea7379c22e1413ec999d928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_38d3400a3b6c242806e0dd2f5f0d035a8a1f739ad52d6501a4b6fa3b2c1cbf7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d3400a3b6c242806e0dd2f5f0d035a8a1f739ad52d6501a4b6fa3b2c1cbf7f->enter($__internal_38d3400a3b6c242806e0dd2f5f0d035a8a1f739ad52d6501a4b6fa3b2c1cbf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Article creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

    <div>
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Titre de l'article"));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-controls", "placeholder" => "Titre", "rows" => "20")));
        echo "
    </div>

    <div>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-controls", "placeholder" => "Provide a detailed description", "rows" => "5")));
        // line 19
        echo "
    </div>

    <div>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imageFile", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", array()), 'widget');
        echo "
    </div>
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input class=\"kafe-btn kafe-btn-mint-small full-width\" type=\"submit\" value=\"Create\"/>
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


    ";
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
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
        
        $__internal_38d3400a3b6c242806e0dd2f5f0d035a8a1f739ad52d6501a4b6fa3b2c1cbf7f->leave($__internal_38d3400a3b6c242806e0dd2f5f0d035a8a1f739ad52d6501a4b6fa3b2c1cbf7f_prof);

        
        $__internal_ad55b848693af46deef36d3bc7f4cfd6555ee943ea7379c22e1413ec999d928e->leave($__internal_ad55b848693af46deef36d3bc7f4cfd6555ee943ea7379c22e1413ec999d928e_prof);

    }

    public function getTemplateName()
    {
        return ":article:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  145 => 44,  143 => 43,  141 => 42,  139 => 41,  137 => 40,  131 => 36,  126 => 34,  122 => 33,  117 => 31,  112 => 29,  108 => 28,  104 => 27,  97 => 23,  91 => 19,  89 => 18,  85 => 17,  81 => 16,  74 => 12,  70 => 11,  66 => 10,  60 => 7,  56 => 6,  52 => 4,  43 => 3,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme form 'bootstrap_3_layout.html.twig' %}
{% block container %}
    <h1>Article creation</h1>

    {{ form_start(form) }}
    {{ form_errors(form) }}

    <div>
        {{ form_label(form.titre, \"Titre de l'article\") }}
        {{ form_errors(form.titre) }}
        {{ form_widget(form.titre, {'attr': {'class': 'form-controls','placeholder': 'Titre' ,'rows': '20'}}) }}
    </div>

    <div>
        {{ form_label(form.description) }}
        {{ form_errors(form.description)}}
        {{ form_widget(form.description, {'attr': {'class': 'form-controls','placeholder': 'Provide a detailed description'
            ,'rows': '5'}})  }}
    </div>

    <div>
        {{ form_widget(form.imageFile) }}
    </div>

    <div>
        {{ form_label(form.categorie) }}
        {{ form_errors(form.categorie) }}
        {{ form_widget(form.categorie) }}
    </div>
    {{ form_end(form) }}

    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input class=\"kafe-btn kafe-btn-mint-small full-width\" type=\"submit\" value=\"Create\"/>
    {{ form_end(form) }}


    {##}
    {#{{ form_start(form) }}#}
    {#{{ form_widget(form) }}#}
    {#<input type=\"submit\" value=\"Create\"/>#}
    {#{{ form_end(form) }}#}

    <ul class=\"kafe-btn kafe-btn-mint-small full-width\">
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":article:new.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/article/new.html.twig");
    }
}
