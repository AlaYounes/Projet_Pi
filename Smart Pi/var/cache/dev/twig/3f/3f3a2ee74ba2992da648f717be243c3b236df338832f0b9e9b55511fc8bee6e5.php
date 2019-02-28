<?php

/* article/new.html.twig */
class __TwigTemplate_9c33789bea6517db30c1cb86399dbf322f103f20e67cda39606f2cc21ab4f697 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "article/new.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d316f6a8666b1716a3703ea69a19593153519ab120e64445ad28b11c5d952b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d316f6a8666b1716a3703ea69a19593153519ab120e64445ad28b11c5d952b74->enter($__internal_d316f6a8666b1716a3703ea69a19593153519ab120e64445ad28b11c5d952b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_b030d091f29c1a00b35d677cad827ec4d47903cb0a6556eb87689262f22c002b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b030d091f29c1a00b35d677cad827ec4d47903cb0a6556eb87689262f22c002b->enter($__internal_b030d091f29c1a00b35d677cad827ec4d47903cb0a6556eb87689262f22c002b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d316f6a8666b1716a3703ea69a19593153519ab120e64445ad28b11c5d952b74->leave($__internal_d316f6a8666b1716a3703ea69a19593153519ab120e64445ad28b11c5d952b74_prof);

        
        $__internal_b030d091f29c1a00b35d677cad827ec4d47903cb0a6556eb87689262f22c002b->leave($__internal_b030d091f29c1a00b35d677cad827ec4d47903cb0a6556eb87689262f22c002b_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_5f13c9f1cfd22375496643e6eed8fa7a9d91dd48ed6660d2fb0d57ca451214f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f13c9f1cfd22375496643e6eed8fa7a9d91dd48ed6660d2fb0d57ca451214f0->enter($__internal_5f13c9f1cfd22375496643e6eed8fa7a9d91dd48ed6660d2fb0d57ca451214f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_4cf4824188e3cf8e7e9cf37f9debd34335872b6b40709dffeacd52db6434f42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf4824188e3cf8e7e9cf37f9debd34335872b6b40709dffeacd52db6434f42e->enter($__internal_4cf4824188e3cf8e7e9cf37f9debd34335872b6b40709dffeacd52db6434f42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Article creation</h1>

    ";
        // line 7
        echo "    ";
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "
    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "
    ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "
    ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        // line 29
        echo "    ";
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
    <ul>
        <li>
            <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Créer\"/>
        </li>
    </ul>
    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>

            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">
                <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Retourner Vers La Liste\"></a>
        </li>
    </ul>
";
        
        $__internal_4cf4824188e3cf8e7e9cf37f9debd34335872b6b40709dffeacd52db6434f42e->leave($__internal_4cf4824188e3cf8e7e9cf37f9debd34335872b6b40709dffeacd52db6434f42e_prof);

        
        $__internal_5f13c9f1cfd22375496643e6eed8fa7a9d91dd48ed6660d2fb0d57ca451214f0->leave($__internal_5f13c9f1cfd22375496643e6eed8fa7a9d91dd48ed6660d2fb0d57ca451214f0_prof);

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
        return array (  137 => 52,  129 => 47,  120 => 41,  116 => 40,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  102 => 32,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  89 => 25,  87 => 24,  85 => 23,  82 => 21,  80 => 20,  78 => 19,  76 => 18,  74 => 17,  72 => 16,  69 => 14,  67 => 13,  65 => 12,  63 => 11,  61 => 10,  58 => 8,  56 => 7,  52 => 4,  43 => 3,  33 => 1,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base1.html.twig' %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}
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
    <ul>
        <li>
            <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Créer\"/>
        </li>
    </ul>
    {{ form_end(form) }}

    <ul>
        <li>

            <a href=\"{{ path('article_index') }}\">
                <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Retourner Vers La Liste\"></a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\article\\new.html.twig");
    }
}
