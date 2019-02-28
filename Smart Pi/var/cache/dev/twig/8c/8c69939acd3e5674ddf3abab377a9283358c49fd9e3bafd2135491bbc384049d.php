<?php

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_72451e01904a17020611055f7cf166e3807fc37b2acecd201c86dab323f64621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35e22f644518fa67f3d71fb2c4450ab48bc004bf5bd6d15efd4ba1373b1f1972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e22f644518fa67f3d71fb2c4450ab48bc004bf5bd6d15efd4ba1373b1f1972->enter($__internal_35e22f644518fa67f3d71fb2c4450ab48bc004bf5bd6d15efd4ba1373b1f1972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        $__internal_bdb59ddd5fcc770717fdbe36640ea947115a3eb54cd01dd7c8b6749f810836b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb59ddd5fcc770717fdbe36640ea947115a3eb54cd01dd7c8b6749f810836b6->enter($__internal_bdb59ddd5fcc770717fdbe36640ea947115a3eb54cd01dd7c8b6749f810836b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_35e22f644518fa67f3d71fb2c4450ab48bc004bf5bd6d15efd4ba1373b1f1972->leave($__internal_35e22f644518fa67f3d71fb2c4450ab48bc004bf5bd6d15efd4ba1373b1f1972_prof);

        
        $__internal_bdb59ddd5fcc770717fdbe36640ea947115a3eb54cd01dd7c8b6749f810836b6->leave($__internal_bdb59ddd5fcc770717fdbe36640ea947115a3eb54cd01dd7c8b6749f810836b6_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_3ae95e6acdb004ce7c4169897094d0bb3e170f86e73cc0877c5879f54958a9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae95e6acdb004ce7c4169897094d0bb3e170f86e73cc0877c5879f54958a9d2->enter($__internal_3ae95e6acdb004ce7c4169897094d0bb3e170f86e73cc0877c5879f54958a9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_413936b7e249badd397ba9529a24fcc5436506c249846f6a9c257033b29f19c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413936b7e249badd397ba9529a24fcc5436506c249846f6a9c257033b29f19c5->enter($__internal_413936b7e249badd397ba9529a24fcc5436506c249846f6a9c257033b29f19c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_413936b7e249badd397ba9529a24fcc5436506c249846f6a9c257033b29f19c5->leave($__internal_413936b7e249badd397ba9529a24fcc5436506c249846f6a9c257033b29f19c5_prof);

        
        $__internal_3ae95e6acdb004ce7c4169897094d0bb3e170f86e73cc0877c5879f54958a9d2->leave($__internal_3ae95e6acdb004ce7c4169897094d0bb3e170f86e73cc0877c5879f54958a9d2_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_9f88b20ae6b7932d5aefa20c6b26f507bf68055237afabcd84f872f98f440340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f88b20ae6b7932d5aefa20c6b26f507bf68055237afabcd84f872f98f440340->enter($__internal_9f88b20ae6b7932d5aefa20c6b26f507bf68055237afabcd84f872f98f440340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_24692477a1b915d8876e433947a5aeb406ed07ac7e21faa766126611717c5b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24692477a1b915d8876e433947a5aeb406ed07ac7e21faa766126611717c5b0e->enter($__internal_24692477a1b915d8876e433947a5aeb406ed07ac7e21faa766126611717c5b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_24692477a1b915d8876e433947a5aeb406ed07ac7e21faa766126611717c5b0e->leave($__internal_24692477a1b915d8876e433947a5aeb406ed07ac7e21faa766126611717c5b0e_prof);

        
        $__internal_9f88b20ae6b7932d5aefa20c6b26f507bf68055237afabcd84f872f98f440340->leave($__internal_9f88b20ae6b7932d5aefa20c6b26f507bf68055237afabcd84f872f98f440340_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_326e92dbda6559736e14bb8c9942c1b5cd609006a7a0226980a96acfebb86fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326e92dbda6559736e14bb8c9942c1b5cd609006a7a0226980a96acfebb86fd2->enter($__internal_326e92dbda6559736e14bb8c9942c1b5cd609006a7a0226980a96acfebb86fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_5b305832ee5e3b2cf890e8b126effedbb619957ab676f25066d0c20e1e4d32d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b305832ee5e3b2cf890e8b126effedbb619957ab676f25066d0c20e1e4d32d2->enter($__internal_5b305832ee5e3b2cf890e8b126effedbb619957ab676f25066d0c20e1e4d32d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5b305832ee5e3b2cf890e8b126effedbb619957ab676f25066d0c20e1e4d32d2->leave($__internal_5b305832ee5e3b2cf890e8b126effedbb619957ab676f25066d0c20e1e4d32d2_prof);

        
        $__internal_326e92dbda6559736e14bb8c9942c1b5cd609006a7a0226980a96acfebb86fd2->leave($__internal_326e92dbda6559736e14bb8c9942c1b5cd609006a7a0226980a96acfebb86fd2_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_b89ed18bb7b39c439e11e71aee54c992092bbe397b6104ac2046559bb5c3c078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89ed18bb7b39c439e11e71aee54c992092bbe397b6104ac2046559bb5c3c078->enter($__internal_b89ed18bb7b39c439e11e71aee54c992092bbe397b6104ac2046559bb5c3c078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_2b8f6f66aee470065adecc07d9763d09fe9895018c3c1991610c8595b4fad50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8f6f66aee470065adecc07d9763d09fe9895018c3c1991610c8595b4fad50c->enter($__internal_2b8f6f66aee470065adecc07d9763d09fe9895018c3c1991610c8595b4fad50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2b8f6f66aee470065adecc07d9763d09fe9895018c3c1991610c8595b4fad50c->leave($__internal_2b8f6f66aee470065adecc07d9763d09fe9895018c3c1991610c8595b4fad50c_prof);

        
        $__internal_b89ed18bb7b39c439e11e71aee54c992092bbe397b6104ac2046559bb5c3c078->leave($__internal_b89ed18bb7b39c439e11e71aee54c992092bbe397b6104ac2046559bb5c3c078_prof);

    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "@VichUploader/Form/fields.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
