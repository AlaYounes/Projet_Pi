<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_3843297f94ab5c9572d04d621e5a2593ab45ce8b0e4c7efb900fab731b5bc1b7 extends Twig_Template
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
        $__internal_41628d11af45feebb3ed5040489022192b29e5c80adaaf6cc2328a953dcc3de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41628d11af45feebb3ed5040489022192b29e5c80adaaf6cc2328a953dcc3de4->enter($__internal_41628d11af45feebb3ed5040489022192b29e5c80adaaf6cc2328a953dcc3de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_0409499a0334b183c55c2a477dcceafcbf94fb2a3d7e0cb1212a43670271afa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0409499a0334b183c55c2a477dcceafcbf94fb2a3d7e0cb1212a43670271afa4->enter($__internal_0409499a0334b183c55c2a477dcceafcbf94fb2a3d7e0cb1212a43670271afa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_41628d11af45feebb3ed5040489022192b29e5c80adaaf6cc2328a953dcc3de4->leave($__internal_41628d11af45feebb3ed5040489022192b29e5c80adaaf6cc2328a953dcc3de4_prof);

        
        $__internal_0409499a0334b183c55c2a477dcceafcbf94fb2a3d7e0cb1212a43670271afa4->leave($__internal_0409499a0334b183c55c2a477dcceafcbf94fb2a3d7e0cb1212a43670271afa4_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_11640959b0faefaaba90278c5876b6ea9bc42ccd242aeda7918de466c1b24d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11640959b0faefaaba90278c5876b6ea9bc42ccd242aeda7918de466c1b24d2e->enter($__internal_11640959b0faefaaba90278c5876b6ea9bc42ccd242aeda7918de466c1b24d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_03c857a8fb6f5e587c589bcab70f35e97d732d4d2fb1f47f3d95ecc66f78cbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c857a8fb6f5e587c589bcab70f35e97d732d4d2fb1f47f3d95ecc66f78cbe3->enter($__internal_03c857a8fb6f5e587c589bcab70f35e97d732d4d2fb1f47f3d95ecc66f78cbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_03c857a8fb6f5e587c589bcab70f35e97d732d4d2fb1f47f3d95ecc66f78cbe3->leave($__internal_03c857a8fb6f5e587c589bcab70f35e97d732d4d2fb1f47f3d95ecc66f78cbe3_prof);

        
        $__internal_11640959b0faefaaba90278c5876b6ea9bc42ccd242aeda7918de466c1b24d2e->leave($__internal_11640959b0faefaaba90278c5876b6ea9bc42ccd242aeda7918de466c1b24d2e_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_25168a0c514d1291e8c20fd9574d1c3337668c4d2346344132a97dac9bc8958c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25168a0c514d1291e8c20fd9574d1c3337668c4d2346344132a97dac9bc8958c->enter($__internal_25168a0c514d1291e8c20fd9574d1c3337668c4d2346344132a97dac9bc8958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_062438fb0531bef94be2a8147b40e1d375cfc3a796d258251bbaa0dae8a41bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062438fb0531bef94be2a8147b40e1d375cfc3a796d258251bbaa0dae8a41bde->enter($__internal_062438fb0531bef94be2a8147b40e1d375cfc3a796d258251bbaa0dae8a41bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_062438fb0531bef94be2a8147b40e1d375cfc3a796d258251bbaa0dae8a41bde->leave($__internal_062438fb0531bef94be2a8147b40e1d375cfc3a796d258251bbaa0dae8a41bde_prof);

        
        $__internal_25168a0c514d1291e8c20fd9574d1c3337668c4d2346344132a97dac9bc8958c->leave($__internal_25168a0c514d1291e8c20fd9574d1c3337668c4d2346344132a97dac9bc8958c_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_1a9426c3ae0072b0224489de04eae7e69e350fdc5fe86a1602b80ca6135708c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9426c3ae0072b0224489de04eae7e69e350fdc5fe86a1602b80ca6135708c5->enter($__internal_1a9426c3ae0072b0224489de04eae7e69e350fdc5fe86a1602b80ca6135708c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_cdc8ca214006aaab1d6373cc700de2a4c78ba9d14b1c2ba460e8a8dd07102a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc8ca214006aaab1d6373cc700de2a4c78ba9d14b1c2ba460e8a8dd07102a66->enter($__internal_cdc8ca214006aaab1d6373cc700de2a4c78ba9d14b1c2ba460e8a8dd07102a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cdc8ca214006aaab1d6373cc700de2a4c78ba9d14b1c2ba460e8a8dd07102a66->leave($__internal_cdc8ca214006aaab1d6373cc700de2a4c78ba9d14b1c2ba460e8a8dd07102a66_prof);

        
        $__internal_1a9426c3ae0072b0224489de04eae7e69e350fdc5fe86a1602b80ca6135708c5->leave($__internal_1a9426c3ae0072b0224489de04eae7e69e350fdc5fe86a1602b80ca6135708c5_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_95457fa2ca0c0c62cff9debdf975eb83fef7148878e165dc5fae3f78bc1575de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95457fa2ca0c0c62cff9debdf975eb83fef7148878e165dc5fae3f78bc1575de->enter($__internal_95457fa2ca0c0c62cff9debdf975eb83fef7148878e165dc5fae3f78bc1575de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_955de3e526c4236abbd722730d99e4dd2c6b4e63b654a1e72f60a3071de04e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955de3e526c4236abbd722730d99e4dd2c6b4e63b654a1e72f60a3071de04e1e->enter($__internal_955de3e526c4236abbd722730d99e4dd2c6b4e63b654a1e72f60a3071de04e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_955de3e526c4236abbd722730d99e4dd2c6b4e63b654a1e72f60a3071de04e1e->leave($__internal_955de3e526c4236abbd722730d99e4dd2c6b4e63b654a1e72f60a3071de04e1e_prof);

        
        $__internal_95457fa2ca0c0c62cff9debdf975eb83fef7148878e165dc5fae3f78bc1575de->leave($__internal_95457fa2ca0c0c62cff9debdf975eb83fef7148878e165dc5fae3f78bc1575de_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
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
", "VichUploaderBundle:Form:fields.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\vich\\uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
