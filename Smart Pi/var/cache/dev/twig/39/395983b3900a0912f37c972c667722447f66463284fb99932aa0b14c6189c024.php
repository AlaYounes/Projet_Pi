<?php

/* @SgDatatables/filter/select.html.twig */
class __TwigTemplate_95d82b445f0770350bdf82159bd9ff77ec83cba91a940ce32e4463bd5d2ef17c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37ae1868b877b6ee02a3f87fb26f8e2af41b2f995cf829a900306cfdfd051386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ae1868b877b6ee02a3f87fb26f8e2af41b2f995cf829a900306cfdfd051386->enter($__internal_37ae1868b877b6ee02a3f87fb26f8e2af41b2f995cf829a900306cfdfd051386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/filter/select.html.twig"));

        $__internal_d78d63719a1909185ffb172feaee7f820ddb9ff1f5a2ea90bd151995c5362f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78d63719a1909185ffb172feaee7f820ddb9ff1f5a2ea90bd151995c5362f83->enter($__internal_d78d63719a1909185ffb172feaee7f820ddb9ff1f5a2ea90bd151995c5362f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/filter/select.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "multiple", array()) === true)) {
            // line 11
            echo "        multiple=\"multiple\"
    ";
        }
        $context["filter_select_multiple"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        ob_start();
        // line 16
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "-filter-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "index", array()), "html", null, true);
        $context["filter_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        ob_start();
        // line 20
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
        echo "\"";
        $context["filter_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        ob_start();
        // line 24
        echo "    class=\"sg-datatables-individual-filtering";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "classes", array()) === null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "classes", array()), "html", null, true);
        }
        echo "\"
";
        $context["filter_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
";
        // line 27
        ob_start();
        // line 28
        echo "    ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()) === null)) {
            echo "style=\"width:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo ";\"";
        }
        $context["filter_width"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
";
        // line 31
        ob_start();
        // line 32
        echo "    data-search-column-index=\"";
        echo twig_escape_filter($this->env, ($context["search_column_index"] ?? $this->getContext($context, "search_column_index")), "html", null, true);
        echo "\"
";
        $context["filter_search_column_index"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        ob_start();
        // line 36
        echo "    ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()) === null)) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        $context["filter_column_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
";
        // line 39
        ob_start();
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "selectOptions", array()));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 41
            echo "        ";
            if (( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "initialSearch", array()) === null) && ($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "initialSearch", array()) === $context["key"]))) {
                // line 42
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
        ";
            } else {
                // line 44
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
        ";
            }
            // line 46
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["filter_select_select_options"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        ob_start();
        // line 50
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "-filter-cancel-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "index", array()), "html", null, true);
        $context["cancel_button_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        ob_start();
        // line 54
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cancelButton", array()) === true)) {
            // line 55
            echo "        <button type=\"button\"
                id=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? $this->getContext($context, "cancel_button_id_selector")), "html", null, true);
            echo "\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    ";
        }
        $context["cancel_button_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
";
        // line 62
        ob_start();
        // line 63
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cancelButton", array()) === true)) {
            // line 64
            echo "        <script type=\"text/javascript\">
            \$(\"#";
            // line 65
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? $this->getContext($context, "cancel_button_id_selector")), "html", null, true);
            echo "\").click(function() {
                if ('' != \$(\"#";
            // line 66
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\").val()) {
                    \$(\"#";
            // line 67
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\")
                        .val('')
                        .change();
                }
            });
        </script>
    ";
        }
        $context["cancel_button_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('html', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_37ae1868b877b6ee02a3f87fb26f8e2af41b2f995cf829a900306cfdfd051386->leave($__internal_37ae1868b877b6ee02a3f87fb26f8e2af41b2f995cf829a900306cfdfd051386_prof);

        
        $__internal_d78d63719a1909185ffb172feaee7f820ddb9ff1f5a2ea90bd151995c5362f83->leave($__internal_d78d63719a1909185ffb172feaee7f820ddb9ff1f5a2ea90bd151995c5362f83_prof);

    }

    // line 76
    public function block_html($context, array $blocks = array())
    {
        $__internal_711699f1c09c1f049f98f0e4c2bbdaffa153d07304f80a70e0ff9ebb52dc0e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711699f1c09c1f049f98f0e4c2bbdaffa153d07304f80a70e0ff9ebb52dc0e0d->enter($__internal_711699f1c09c1f049f98f0e4c2bbdaffa153d07304f80a70e0ff9ebb52dc0e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_07ae9c4f1db8739cce6517a8b69eb78529376237eb75600fde8ea711027318b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ae9c4f1db8739cce6517a8b69eb78529376237eb75600fde8ea711027318b5->enter($__internal_07ae9c4f1db8739cce6517a8b69eb78529376237eb75600fde8ea711027318b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 77
        echo "    <select
            ";
        // line 78
        echo twig_escape_filter($this->env, ($context["filter_select_multiple"] ?? $this->getContext($context, "filter_select_multiple")), "html", null, true);
        echo "     ";
        // line 79
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_selector"] ?? $this->getContext($context, "filter_selector")), "html", null, true);
        echo "            ";
        // line 80
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_classes"] ?? $this->getContext($context, "filter_classes")), "html", null, true);
        echo "             ";
        // line 81
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_width"] ?? $this->getContext($context, "filter_width")), "html", null, true);
        echo "               ";
        // line 82
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_search_column_index"] ?? $this->getContext($context, "filter_search_column_index")), "html", null, true);
        echo " ";
        // line 83
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "         ";
        // line 84
        echo "    >
        ";
        // line 85
        echo twig_escape_filter($this->env, ($context["filter_select_select_options"] ?? $this->getContext($context, "filter_select_select_options")), "html", null, true);
        echo "
    </select>
    ";
        // line 87
        echo twig_escape_filter($this->env, ($context["cancel_button_html"] ?? $this->getContext($context, "cancel_button_html")), "html", null, true);
        echo "
";
        
        $__internal_07ae9c4f1db8739cce6517a8b69eb78529376237eb75600fde8ea711027318b5->leave($__internal_07ae9c4f1db8739cce6517a8b69eb78529376237eb75600fde8ea711027318b5_prof);

        
        $__internal_711699f1c09c1f049f98f0e4c2bbdaffa153d07304f80a70e0ff9ebb52dc0e0d->leave($__internal_711699f1c09c1f049f98f0e4c2bbdaffa153d07304f80a70e0ff9ebb52dc0e0d_prof);

    }

    // line 90
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_68291f1fa434261757e0a918cd37e1c51f1dbf823fb07cb38d6aceb5805294e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68291f1fa434261757e0a918cd37e1c51f1dbf823fb07cb38d6aceb5805294e9->enter($__internal_68291f1fa434261757e0a918cd37e1c51f1dbf823fb07cb38d6aceb5805294e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_e7ef8c8f82e3f4e074c24a765f990ec7fcd61fdf7a4f5c3d633135dcc6b089fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ef8c8f82e3f4e074c24a765f990ec7fcd61fdf7a4f5c3d633135dcc6b089fb->enter($__internal_e7ef8c8f82e3f4e074c24a765f990ec7fcd61fdf7a4f5c3d633135dcc6b089fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 91
        echo "    ";
        echo twig_escape_filter($this->env, ($context["cancel_button_js"] ?? $this->getContext($context, "cancel_button_js")), "html", null, true);
        echo "
";
        
        $__internal_e7ef8c8f82e3f4e074c24a765f990ec7fcd61fdf7a4f5c3d633135dcc6b089fb->leave($__internal_e7ef8c8f82e3f4e074c24a765f990ec7fcd61fdf7a4f5c3d633135dcc6b089fb_prof);

        
        $__internal_68291f1fa434261757e0a918cd37e1c51f1dbf823fb07cb38d6aceb5805294e9->leave($__internal_68291f1fa434261757e0a918cd37e1c51f1dbf823fb07cb38d6aceb5805294e9_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/filter/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 91,  267 => 90,  255 => 87,  250 => 85,  247 => 84,  243 => 83,  239 => 82,  235 => 81,  231 => 80,  227 => 79,  224 => 78,  221 => 77,  212 => 76,  202 => 90,  199 => 89,  197 => 76,  194 => 75,  183 => 67,  179 => 66,  175 => 65,  172 => 64,  169 => 63,  167 => 62,  164 => 61,  156 => 56,  153 => 55,  150 => 54,  148 => 53,  140 => 50,  138 => 49,  131 => 46,  123 => 44,  115 => 42,  112 => 41,  107 => 40,  105 => 39,  102 => 38,  94 => 36,  92 => 35,  89 => 34,  83 => 32,  81 => 31,  78 => 30,  70 => 28,  68 => 27,  65 => 26,  56 => 24,  54 => 23,  49 => 20,  47 => 19,  39 => 16,  37 => 15,  32 => 11,  29 => 10,  27 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% set filter_select_multiple %}
    {% if column.filter.multiple is same as(true) %}
        multiple=\"multiple\"
    {% endif %}
{% endset %}

{%- set filter_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-{{ column.index }}
{%- endset -%}

{%- set filter_selector -%}
    id=\"{{ filter_id_selector }}\"
{%- endset -%}

{% set filter_classes %}
    class=\"sg-datatables-individual-filtering{% if column.filter.classes is not same as(null) %} {{ column.filter.classes }}{% endif %}\"
{% endset %}

{% set filter_width %}
    {% if column.width is not same as(null) %}style=\"width:{{ column.width }};\"{% endif %}
{% endset %}

{% set filter_search_column_index %}
    data-search-column-index=\"{{ search_column_index }}\"
{% endset %}

{% set filter_column_name %}
    {% if column.name is not same as(null) %}name=\"{{ column.name }}\"{% endif %}
{% endset %}

{% set filter_select_select_options %}
    {% for key, name in column.filter.selectOptions %}
        {% if column.filter.initialSearch is not same as(null) and column.filter.initialSearch is same as(key) %}
            <option value=\"{{ key }}\" selected=\"selected\">{{ name }}</option>
        {% else %}
            <option value=\"{{ key }}\">{{ name }}</option>
        {% endif %}
    {% endfor %}
{% endset %}

{%- set cancel_button_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-cancel-{{ column.index }}
{%- endset -%}

{% set cancel_button_html %}
    {% if column.filter.cancelButton is same as(true) %}
        <button type=\"button\"
                id=\"{{ cancel_button_id_selector }}\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    {% endif %}
{% endset %}

{% set cancel_button_js %}
    {% if column.filter.cancelButton is same as(true) %}
        <script type=\"text/javascript\">
            \$(\"#{{ cancel_button_id_selector }}\").click(function() {
                if ('' != \$(\"#{{ filter_id_selector }}\").val()) {
                    \$(\"#{{ filter_id_selector }}\")
                        .val('')
                        .change();
                }
            });
        </script>
    {% endif %}
{% endset %}

{% block html %}
    <select
            {{ filter_select_multiple }}     {# multiple=\"multiple\" #}
            {{ filter_selector }}            {# id=\"\" #}
            {{ filter_classes }}             {# class=\"\" #}
            {{ filter_width }}               {# style = \"width:\" #}
            {{ filter_search_column_index }} {# data-search-column-index = \"\" #}
            {{ filter_column_name }}         {# name = \"\" #}
    >
        {{ filter_select_select_options }}
    </select>
    {{ cancel_button_html }}
{% endblock %}

{% block javascript %}
    {{ cancel_button_js }}
{% endblock %}
", "@SgDatatables/filter/select.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\filter\\select.html.twig");
    }
}
