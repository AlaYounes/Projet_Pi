<?php

/* @SgDatatables/datatable/extensions.html.twig */
class __TwigTemplate_05a3ae8b449e14f6292ca97acece6f5a3b2ad099b09bb1e4e29c1576180732d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca5af25a72ddb420ae508732632ac10b7284f4a7d0c8839ffb64a76fc4a913db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5af25a72ddb420ae508732632ac10b7284f4a7d0c8839ffb64a76fc4a913db->enter($__internal_ca5af25a72ddb420ae508732632ac10b7284f4a7d0c8839ffb64a76fc4a913db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/extensions.html.twig"));

        $__internal_fc3b1177fb6a8ac9c97de297986292227352f9d0c9419b14ad1d8c1b74685a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3b1177fb6a8ac9c97de297986292227352f9d0c9419b14ad1d8c1b74685a7f->enter($__internal_fc3b1177fb6a8ac9c97de297986292227352f9d0c9419b14ad1d8c1b74685a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/extensions.html.twig"));

        // line 9
        echo "
";
        // line 11
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()) === null)) {
            // line 12
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()) === true)) {
                // line 13
                echo "        ";
                // line 14
                echo "        buttons: true,
    ";
            } else {
                // line 16
                echo "        ";
                // line 17
                echo "        buttons: [
            ";
                // line 18
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "buttons", array(), "any", false, true), "showButtons", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()), "showButtons", array()) === null))) {
                    // line 19
                    echo "                ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()), "showButtons", array());
                    echo ",
            ";
                }
                // line 21
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "buttons", array(), "any", false, true), "createButtons", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()), "createButtons", array()) === null))) {
                    // line 22
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()), "createButtons", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 23
                        echo "                    ";
                        $this->loadTemplate("@SgDatatables/datatable/button.html.twig", "@SgDatatables/datatable/extensions.html.twig", 23)->display($context);
                        // line 24
                        echo "                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "            ";
                }
                // line 26
                echo "        ],
    ";
            }
        }
        // line 29
        echo "
";
        // line 31
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()) === null)) {
            // line 32
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()) === true)) {
                // line 33
                echo "        ";
                // line 34
                echo "        responsive: true,
    ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 35
($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()) === null))) {
                // line 36
                echo "        ";
                // line 37
                echo "        responsive: {
            ";
                // line 38
                if ( !twig_test_iterable($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()))) {
                    // line 39
                    echo "                ";
                    // line 40
                    echo "                details: ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array())), "html", null, true);
                    echo ",
            ";
                } else {
                    // line 42
                    echo "                ";
                    // line 43
                    echo "                details: {
                    ";
                    // line 44
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "type", array(), "any", true, true)) {
                        // line 45
                        echo "                        type: \"sg_datatables_view.extensions.responsive.details.type\",
                    ";
                    }
                    // line 47
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "target", array(), "any", true, true)) {
                        // line 48
                        echo "                        target: \"sg_datatables_view.extensions.responsive.details.target\",
                    ";
                    }
                    // line 50
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "renderer", array(), "any", true, true)) {
                        // line 51
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "renderer", array(), "any", false, true), "vars", array(), "array", true, true)) {
                            // line 52
                            echo "                            ";
                            $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()), "renderer", array()), "vars", array(), "array");
                            // line 53
                            echo "                        ";
                        } else {
                            // line 54
                            echo "                            ";
                            $context["vars"] = array();
                            // line 55
                            echo "                        ";
                        }
                        // line 56
                        echo "                        renderer: ";
                        $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()), "renderer", array()), "template", array(), "array"), "@SgDatatables/datatable/extensions.html.twig", 56)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
                        echo ",
                    ";
                    }
                    // line 58
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "display", array(), "any", true, true)) {
                        // line 59
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "display", array(), "any", false, true), "vars", array(), "array", true, true)) {
                            // line 60
                            echo "                            ";
                            $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()), "display", array()), "vars", array(), "array");
                            // line 61
                            echo "                        ";
                        } else {
                            // line 62
                            echo "                            ";
                            $context["vars"] = array();
                            // line 63
                            echo "                        ";
                        }
                        // line 64
                        echo "                        display: ";
                        $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()), "display", array()), "template", array(), "array"), "@SgDatatables/datatable/extensions.html.twig", 64)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
                        echo ",
                    ";
                    }
                    // line 66
                    echo "                },
            ";
                }
                // line 68
                echo "        },
    ";
            }
        }
        // line 71
        echo "
";
        // line 73
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()) === null)) {
            // line 74
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()) === true)) {
                // line 75
                echo "        ";
                // line 76
                echo "        select: true,
    ";
            } else {
                // line 78
                echo "        ";
                // line 79
                echo "        select: {
            ";
                // line 80
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "select", array(), "any", false, true), "blurable", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "blurable", array()) === null))) {
                    // line 81
                    echo "                blurable: ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "blurable", array())), "html", null, true);
                    echo ",
            ";
                }
                // line 83
                echo "            ";
                if (($this->getAttribute(($context["select"] ?? null), "className", array(), "any", true, true) &&  !($this->getAttribute(($context["select"] ?? $this->getContext($context, "select")), "className", array()) === null))) {
                    // line 84
                    echo "                className: \"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["select"] ?? $this->getContext($context, "select")), "className", array()), "html", null, true);
                    echo "\",
            ";
                }
                // line 86
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "select", array(), "any", false, true), "info", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "info", array()) === null))) {
                    // line 87
                    echo "                info: ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "info", array())), "html", null, true);
                    echo ",
            ";
                }
                // line 89
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "select", array(), "any", false, true), "items", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "items", array()) === null))) {
                    // line 90
                    echo "                items: \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "items", array()), "html", null, true);
                    echo "\",
            ";
                }
                // line 92
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "select", array(), "any", false, true), "selector", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "selector", array()) === null))) {
                    // line 93
                    echo "                selector: \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "selector", array()), "html", null, true);
                    echo "\",
            ";
                }
                // line 95
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "select", array(), "any", false, true), "style", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "style", array()) === null))) {
                    // line 96
                    echo "                style: \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "select", array()), "style", array()), "html", null, true);
                    echo "\",
            ";
                }
                // line 98
                echo "        },
    ";
            }
        }
        
        $__internal_ca5af25a72ddb420ae508732632ac10b7284f4a7d0c8839ffb64a76fc4a913db->leave($__internal_ca5af25a72ddb420ae508732632ac10b7284f4a7d0c8839ffb64a76fc4a913db_prof);

        
        $__internal_fc3b1177fb6a8ac9c97de297986292227352f9d0c9419b14ad1d8c1b74685a7f->leave($__internal_fc3b1177fb6a8ac9c97de297986292227352f9d0c9419b14ad1d8c1b74685a7f_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/extensions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 98,  269 => 96,  266 => 95,  260 => 93,  257 => 92,  251 => 90,  248 => 89,  242 => 87,  239 => 86,  233 => 84,  230 => 83,  224 => 81,  222 => 80,  219 => 79,  217 => 78,  213 => 76,  211 => 75,  208 => 74,  206 => 73,  203 => 71,  198 => 68,  194 => 66,  188 => 64,  185 => 63,  182 => 62,  179 => 61,  176 => 60,  173 => 59,  170 => 58,  164 => 56,  161 => 55,  158 => 54,  155 => 53,  152 => 52,  149 => 51,  146 => 50,  142 => 48,  139 => 47,  135 => 45,  133 => 44,  130 => 43,  128 => 42,  122 => 40,  120 => 39,  118 => 38,  115 => 37,  113 => 36,  111 => 35,  108 => 34,  106 => 33,  103 => 32,  101 => 31,  98 => 29,  93 => 26,  90 => 25,  76 => 24,  73 => 23,  55 => 22,  52 => 21,  46 => 19,  44 => 18,  41 => 17,  39 => 16,  35 => 14,  33 => 13,  30 => 12,  28 => 11,  25 => 9,);
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

{# Buttons Extension #}
{% if sg_datatables_view.extensions.buttons is not same as(null) %}
    {% if sg_datatables_view.extensions.buttons is same as(true) %}
        {# the easiest way to activate the extension - buttons is a boolean value (true) #}
        buttons: true,
    {% else %}
        {# buttons is defined and not boolean, rather given as an object - handle the Buttons class options #}
        buttons: [
            {% if sg_datatables_view.extensions.buttons.showButtons is defined and sg_datatables_view.extensions.buttons.showButtons is not same as(null) %}
                {{ sg_datatables_view.extensions.buttons.showButtons|raw }},
            {% endif %}
            {% if sg_datatables_view.extensions.buttons.createButtons is defined and sg_datatables_view.extensions.buttons.createButtons is not same as(null) %}
                {% for button in sg_datatables_view.extensions.buttons.createButtons %}
                    {% include '@SgDatatables/datatable/button.html.twig' %}
                {% endfor %}
            {% endif %}
        ],
    {% endif %}
{% endif %}

{# Responsive Extension #}
{% if sg_datatables_view.extensions.responsive is not same as(null) %}
    {% if sg_datatables_view.extensions.responsive is same as(true) %}
        {# the easiest way to activate the extension - responsive is a boolean value (true) #}
        responsive: true,
    {% elseif sg_datatables_view.extensions.responsive.details is defined and sg_datatables_view.extensions.responsive.details is not same as(null) %}
        {# responsive is given as an object to handle the 'details' options #}
        responsive: {
            {% if sg_datatables_view.extensions.responsive.details is not iterable %}
                {# details is a simple boolean value #}
                details: {{ sg_datatables_view.extensions.responsive.details|sg_datatables_bool_var }},
            {% else %}
                {# details is an array #}
                details: {
                    {% if sg_datatables_view.extensions.responsive.details.type is defined %}
                        type: \"sg_datatables_view.extensions.responsive.details.type\",
                    {% endif %}
                    {% if sg_datatables_view.extensions.responsive.details.target is defined %}
                        target: \"sg_datatables_view.extensions.responsive.details.target\",
                    {% endif %}
                    {% if sg_datatables_view.extensions.responsive.details.renderer is defined %}
                        {% if sg_datatables_view.extensions.responsive.details.renderer['vars'] is defined %}
                            {% set vars = sg_datatables_view.extensions.responsive.details.renderer['vars'] %}
                        {% else %}
                            {% set vars = {} %}
                        {% endif %}
                        renderer: {% include sg_datatables_view.extensions.responsive.details.renderer['template'] with vars %},
                    {% endif %}
                    {% if sg_datatables_view.extensions.responsive.details.display is defined %}
                        {% if sg_datatables_view.extensions.responsive.details.display['vars'] is defined %}
                            {% set vars = sg_datatables_view.extensions.responsive.details.display['vars'] %}
                        {% else %}
                            {% set vars = {} %}
                        {% endif %}
                        display: {% include sg_datatables_view.extensions.responsive.details.display['template'] with vars %},
                    {% endif %}
                },
            {% endif %}
        },
    {% endif %}
{% endif %}

{# Select Extension #}
{% if sg_datatables_view.extensions.select is not same as(null) %}
    {% if sg_datatables_view.extensions.select is same as(true) %}
        {# the easiest way to activate the extension - select is a boolean value (true) #}
        select: true,
    {% else %}
        {# select is defined and not boolean, rather given as an object - handle the Select class options #}
        select: {
            {% if sg_datatables_view.extensions.select.blurable is defined and sg_datatables_view.extensions.select.blurable is not same as(null) %}
                blurable: {{ sg_datatables_view.extensions.select.blurable|sg_datatables_bool_var }},
            {% endif %}
            {% if select.className is defined and select.className is not same as(null) %}
                className: \"{{ select.className }}\",
            {% endif %}
            {% if sg_datatables_view.extensions.select.info is defined and sg_datatables_view.extensions.select.info is not same as(null) %}
                info: {{ sg_datatables_view.extensions.select.info|sg_datatables_bool_var }},
            {% endif %}
            {% if sg_datatables_view.extensions.select.items is defined and sg_datatables_view.extensions.select.items is not same as(null) %}
                items: \"{{ sg_datatables_view.extensions.select.items }}\",
            {% endif %}
            {% if sg_datatables_view.extensions.select.selector is defined and sg_datatables_view.extensions.select.selector is not same as(null) %}
                selector: \"{{ sg_datatables_view.extensions.select.selector }}\",
            {% endif %}
            {% if sg_datatables_view.extensions.select.style is defined and sg_datatables_view.extensions.select.style is not same as(null) %}
                style: \"{{ sg_datatables_view.extensions.select.style }}\",
            {% endif %}
        },
    {% endif %}
{% endif %}
", "@SgDatatables/datatable/extensions.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\extensions.html.twig");
    }
}
