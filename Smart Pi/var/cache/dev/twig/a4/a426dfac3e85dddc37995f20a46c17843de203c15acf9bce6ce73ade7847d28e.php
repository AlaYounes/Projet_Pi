<?php

/* @SgDatatables/datatable/callbacks.html.twig */
class __TwigTemplate_611d8ae8b7e3e9b397c545726c1100f796d664b26f20f17e62e86c85700defd8 extends Twig_Template
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
        $__internal_a2c5b5bc6e48474cd4eef74e89d4e7d8f0001b90129e320adae22dd375f57e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c5b5bc6e48474cd4eef74e89d4e7d8f0001b90129e320adae22dd375f57e90->enter($__internal_a2c5b5bc6e48474cd4eef74e89d4e7d8f0001b90129e320adae22dd375f57e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/callbacks.html.twig"));

        $__internal_8ef7037499a3081a70e1f49bb0bd18ec3db1a7c754b6fb38e7c61125e6b26b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef7037499a3081a70e1f49bb0bd18ec3db1a7c754b6fb38e7c61125e6b26b0c->enter($__internal_8ef7037499a3081a70e1f49bb0bd18ec3db1a7c754b6fb38e7c61125e6b26b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/callbacks.html.twig"));

        // line 9
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "createdRow", array()) === null)) {
            // line 10
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "createdRow", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 11
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "createdRow", array()), "vars", array(), "array");
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "        ";
                $context["vars"] = array();
                // line 14
                echo "    ";
            }
            // line 15
            echo "    \"createdRow\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "createdRow", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 15)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 17
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "drawCallback", array()) === null)) {
            // line 18
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "drawCallback", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 19
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "drawCallback", array()), "vars", array(), "array");
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["vars"] = array();
                // line 22
                echo "    ";
            }
            // line 23
            echo "    \"drawCallback\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "drawCallback", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 23)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 25
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "footerCallback", array()) === null)) {
            // line 26
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "footerCallback", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 27
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "footerCallback", array()), "vars", array(), "array");
                // line 28
                echo "    ";
            } else {
                // line 29
                echo "        ";
                $context["vars"] = array();
                // line 30
                echo "    ";
            }
            // line 31
            echo "    \"footerCallback\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "footerCallback", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 31)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 33
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "formatNumber", array()) === null)) {
            // line 34
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "formatNumber", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 35
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "formatNumber", array()), "vars", array(), "array");
                // line 36
                echo "    ";
            } else {
                // line 37
                echo "        ";
                $context["vars"] = array();
                // line 38
                echo "    ";
            }
            // line 39
            echo "    \"formatNumber\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "formatNumber", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 39)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 41
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "headerCallback", array()) === null)) {
            // line 42
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "headerCallback", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 43
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "headerCallback", array()), "vars", array(), "array");
                // line 44
                echo "    ";
            } else {
                // line 45
                echo "        ";
                $context["vars"] = array();
                // line 46
                echo "    ";
            }
            // line 47
            echo "    \"headerCallback\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "headerCallback", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 47)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 49
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "infoCallback", array()) === null)) {
            // line 50
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "infoCallback", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 51
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "infoCallback", array()), "vars", array(), "array");
                // line 52
                echo "    ";
            } else {
                // line 53
                echo "        ";
                $context["vars"] = array();
                // line 54
                echo "    ";
            }
            // line 55
            echo "    \"infoCallback\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "infoCallback", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 55)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 57
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "initComplete", array()) === null)) {
            // line 58
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "initComplete", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 59
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "initComplete", array()), "vars", array(), "array");
                // line 60
                echo "    ";
            } else {
                // line 61
                echo "        ";
                $context["vars"] = array();
                // line 62
                echo "    ";
            }
            // line 63
            echo "    \"initComplete\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "initComplete", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 63)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 65
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "preDrawCallback", array()) === null)) {
            // line 66
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "preDrawCallback", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 67
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "preDrawCallback", array()), "vars", array(), "array");
                // line 68
                echo "    ";
            } else {
                // line 69
                echo "        ";
                $context["vars"] = array();
                // line 70
                echo "    ";
            }
            // line 71
            echo "    \"preDrawCallback\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "preDrawCallback", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 71)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 73
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "rowCallback", array()) === null)) {
            // line 74
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "rowCallback", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 75
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "rowCallback", array()), "vars", array(), "array");
                // line 76
                echo "    ";
            } else {
                // line 77
                echo "        ";
                $context["vars"] = array();
                // line 78
                echo "    ";
            }
            // line 79
            echo "    \"rowCallback\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "rowCallback", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 79)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 81
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateLoadCallback", array()) === null)) {
            // line 82
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "stateLoadCallback", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 83
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateLoadCallback", array()), "vars", array(), "array");
                // line 84
                echo "    ";
            } else {
                // line 85
                echo "        ";
                $context["vars"] = array();
                // line 86
                echo "    ";
            }
            // line 87
            echo "    \"stateLoadCallback\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateLoadCallback", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 87)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 89
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateLoaded", array()) === null)) {
            // line 90
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "stateLoaded", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 91
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateLoaded", array()), "vars", array(), "array");
                // line 92
                echo "    ";
            } else {
                // line 93
                echo "        ";
                $context["vars"] = array();
                // line 94
                echo "    ";
            }
            // line 95
            echo "    \"stateLoaded\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateLoaded", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 95)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 97
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateLoadParams", array()) === null)) {
            // line 98
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "stateLoadParams", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 99
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateLoadParams", array()), "vars", array(), "array");
                // line 100
                echo "    ";
            } else {
                // line 101
                echo "        ";
                $context["vars"] = array();
                // line 102
                echo "    ";
            }
            // line 103
            echo "    \"stateLoadParams\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateLoadParams", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 103)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 105
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateSaveCallback", array()) === null)) {
            // line 106
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "stateSaveCallback", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 107
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateSaveCallback", array()), "vars", array(), "array");
                // line 108
                echo "    ";
            } else {
                // line 109
                echo "        ";
                $context["vars"] = array();
                // line 110
                echo "    ";
            }
            // line 111
            echo "    \"stateSaveCallback\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateSaveCallback", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 111)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        // line 113
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateSaveParams", array()) === null)) {
            // line 114
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "callbacks", array(), "any", false, true), "stateSaveParams", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 115
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateSaveParams", array()), "vars", array(), "array");
                // line 116
                echo "    ";
            } else {
                // line 117
                echo "        ";
                $context["vars"] = array();
                // line 118
                echo "    ";
            }
            // line 119
            echo "    \"stateSaveParams\": ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "callbacks", array()), "stateSaveParams", array()), "template", array(), "array"), "@SgDatatables/datatable/callbacks.html.twig", 119)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
";
        }
        
        $__internal_a2c5b5bc6e48474cd4eef74e89d4e7d8f0001b90129e320adae22dd375f57e90->leave($__internal_a2c5b5bc6e48474cd4eef74e89d4e7d8f0001b90129e320adae22dd375f57e90_prof);

        
        $__internal_8ef7037499a3081a70e1f49bb0bd18ec3db1a7c754b6fb38e7c61125e6b26b0c->leave($__internal_8ef7037499a3081a70e1f49bb0bd18ec3db1a7c754b6fb38e7c61125e6b26b0c_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/callbacks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 119,  338 => 118,  335 => 117,  332 => 116,  329 => 115,  326 => 114,  324 => 113,  318 => 111,  315 => 110,  312 => 109,  309 => 108,  306 => 107,  303 => 106,  301 => 105,  295 => 103,  292 => 102,  289 => 101,  286 => 100,  283 => 99,  280 => 98,  278 => 97,  272 => 95,  269 => 94,  266 => 93,  263 => 92,  260 => 91,  257 => 90,  255 => 89,  249 => 87,  246 => 86,  243 => 85,  240 => 84,  237 => 83,  234 => 82,  232 => 81,  226 => 79,  223 => 78,  220 => 77,  217 => 76,  214 => 75,  211 => 74,  209 => 73,  203 => 71,  200 => 70,  197 => 69,  194 => 68,  191 => 67,  188 => 66,  186 => 65,  180 => 63,  177 => 62,  174 => 61,  171 => 60,  168 => 59,  165 => 58,  163 => 57,  157 => 55,  154 => 54,  151 => 53,  148 => 52,  145 => 51,  142 => 50,  140 => 49,  134 => 47,  131 => 46,  128 => 45,  125 => 44,  122 => 43,  119 => 42,  117 => 41,  111 => 39,  108 => 38,  105 => 37,  102 => 36,  99 => 35,  96 => 34,  94 => 33,  88 => 31,  85 => 30,  82 => 29,  79 => 28,  76 => 27,  73 => 26,  71 => 25,  65 => 23,  62 => 22,  59 => 21,  56 => 20,  53 => 19,  50 => 18,  48 => 17,  42 => 15,  39 => 14,  36 => 13,  33 => 12,  30 => 11,  27 => 10,  25 => 9,);
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
{% if sg_datatables_view.callbacks.createdRow is not same as(null) %}
    {% if sg_datatables_view.callbacks.createdRow['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.createdRow['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"createdRow\": {% include sg_datatables_view.callbacks.createdRow['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.drawCallback is not same as(null) %}
    {% if sg_datatables_view.callbacks.drawCallback['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.drawCallback['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"drawCallback\": {% include sg_datatables_view.callbacks.drawCallback['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.footerCallback is not same as(null) %}
    {% if sg_datatables_view.callbacks.footerCallback['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.footerCallback['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"footerCallback\": {% include sg_datatables_view.callbacks.footerCallback['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.formatNumber is not same as(null) %}
    {% if sg_datatables_view.callbacks.formatNumber['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.formatNumber['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"formatNumber\": {% include sg_datatables_view.callbacks.formatNumber['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.headerCallback is not same as(null) %}
    {% if sg_datatables_view.callbacks.headerCallback['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.headerCallback['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"headerCallback\": {% include sg_datatables_view.callbacks.headerCallback['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.infoCallback is not same as(null) %}
    {% if sg_datatables_view.callbacks.infoCallback['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.infoCallback['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"infoCallback\": {% include sg_datatables_view.callbacks.infoCallback['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.initComplete is not same as(null) %}
    {% if sg_datatables_view.callbacks.initComplete['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.initComplete['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"initComplete\": {% include sg_datatables_view.callbacks.initComplete['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.preDrawCallback is not same as(null) %}
    {% if sg_datatables_view.callbacks.preDrawCallback['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.preDrawCallback['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"preDrawCallback\": {% include sg_datatables_view.callbacks.preDrawCallback['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.rowCallback is not same as(null) %}
    {% if sg_datatables_view.callbacks.rowCallback['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.rowCallback['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"rowCallback\": {% include sg_datatables_view.callbacks.rowCallback['template'] with vars%},
{% endif %}
{% if sg_datatables_view.callbacks.stateLoadCallback is not same as(null) %}
    {% if sg_datatables_view.callbacks.stateLoadCallback['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.stateLoadCallback['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"stateLoadCallback\": {% include sg_datatables_view.callbacks.stateLoadCallback['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.stateLoaded is not same as(null) %}
    {% if sg_datatables_view.callbacks.stateLoaded['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.stateLoaded['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"stateLoaded\": {% include sg_datatables_view.callbacks.stateLoaded['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.stateLoadParams is not same as(null) %}
    {% if sg_datatables_view.callbacks.stateLoadParams['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.stateLoadParams['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"stateLoadParams\": {% include sg_datatables_view.callbacks.stateLoadParams['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.stateSaveCallback is not same as(null) %}
    {% if sg_datatables_view.callbacks.stateSaveCallback['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.stateSaveCallback['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"stateSaveCallback\": {% include sg_datatables_view.callbacks.stateSaveCallback['template'] with vars %},
{% endif %}
{% if sg_datatables_view.callbacks.stateSaveParams is not same as(null) %}
    {% if sg_datatables_view.callbacks.stateSaveParams['vars'] is defined %}
        {% set vars = sg_datatables_view.callbacks.stateSaveParams['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    \"stateSaveParams\": {% include sg_datatables_view.callbacks.stateSaveParams['template'] with vars %},
{% endif %}
", "@SgDatatables/datatable/callbacks.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\callbacks.html.twig");
    }
}
