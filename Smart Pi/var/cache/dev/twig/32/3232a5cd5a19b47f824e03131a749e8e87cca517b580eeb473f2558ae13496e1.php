<?php

/* @SgDatatables/datatable/features.html.twig */
class __TwigTemplate_7be303ef34db02de0a6cefb181903ef8670a8cb2c5354785af7f6d031e21ca4c extends Twig_Template
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
        $__internal_2738727cb980d26443498cc4ed1be7980f0903a72e4646fad797ccca3ff7e5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2738727cb980d26443498cc4ed1be7980f0903a72e4646fad797ccca3ff7e5da->enter($__internal_2738727cb980d26443498cc4ed1be7980f0903a72e4646fad797ccca3ff7e5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/features.html.twig"));

        $__internal_81db23d1e769a718136b5c9ddee2accb04890eb953ec0b233d9f5cf973f7dff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81db23d1e769a718136b5c9ddee2accb04890eb953ec0b233d9f5cf973f7dff1->enter($__internal_81db23d1e769a718136b5c9ddee2accb04890eb953ec0b233d9f5cf973f7dff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/features.html.twig"));

        // line 9
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "autoWidth", array()) === null)) {
            // line 10
            echo "    \"autoWidth\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "autoWidth", array())), "html", null, true);
            echo ",
";
        }
        // line 12
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "deferRender", array()) === null)) {
            // line 13
            echo "    \"deferRender\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "deferRender", array())), "html", null, true);
            echo ",
";
        }
        // line 15
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "info", array()) === null)) {
            // line 16
            echo "    \"info\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "info", array())), "html", null, true);
            echo ",
";
        }
        // line 18
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "lengthChange", array()) === null)) {
            // line 19
            echo "    \"lengthChange\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "lengthChange", array())), "html", null, true);
            echo ",
";
        }
        // line 21
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "ordering", array()) === null)) {
            // line 22
            echo "    \"ordering\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "ordering", array())), "html", null, true);
            echo ",
";
        }
        // line 24
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "paging", array()) === null)) {
            // line 25
            echo "    \"paging\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "paging", array())), "html", null, true);
            echo ",
";
        }
        // line 27
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "processing", array()) === null)) {
            // line 28
            echo "    \"processing\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "processing", array())), "html", null, true);
            echo ",
";
        }
        // line 30
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "scrollX", array()) === null)) {
            // line 31
            echo "    \"scrollX\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "scrollX", array())), "html", null, true);
            echo ",
";
        }
        // line 33
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "scrollY", array()) === null)) {
            // line 34
            echo "    \"scrollY\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "scrollY", array()), "html", null, true);
            echo "\",
";
        }
        // line 36
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "searching", array()) === null)) {
            // line 37
            echo "    \"searching\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "searching", array())), "html", null, true);
            echo ",
";
        }
        // line 39
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "stateSave", array()) === null)) {
            // line 40
            echo "    \"stateSave\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "stateSave", array())), "html", null, true);
            echo ",
";
        }
        
        $__internal_2738727cb980d26443498cc4ed1be7980f0903a72e4646fad797ccca3ff7e5da->leave($__internal_2738727cb980d26443498cc4ed1be7980f0903a72e4646fad797ccca3ff7e5da_prof);

        
        $__internal_81db23d1e769a718136b5c9ddee2accb04890eb953ec0b233d9f5cf973f7dff1->leave($__internal_81db23d1e769a718136b5c9ddee2accb04890eb953ec0b233d9f5cf973f7dff1_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  105 => 39,  99 => 37,  97 => 36,  91 => 34,  89 => 33,  83 => 31,  81 => 30,  75 => 28,  73 => 27,  67 => 25,  65 => 24,  59 => 22,  57 => 21,  51 => 19,  49 => 18,  43 => 16,  41 => 15,  35 => 13,  33 => 12,  27 => 10,  25 => 9,);
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
{% if sg_datatables_view.features.autoWidth is not same as(null) %}
    \"autoWidth\": {{ sg_datatables_view.features.autoWidth|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.deferRender is not same as(null) %}
    \"deferRender\": {{ sg_datatables_view.features.deferRender|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.info is not same as(null) %}
    \"info\": {{ sg_datatables_view.features.info|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.lengthChange is not same as(null) %}
    \"lengthChange\": {{ sg_datatables_view.features.lengthChange|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.ordering is not same as(null) %}
    \"ordering\": {{ sg_datatables_view.features.ordering|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.paging is not same as(null) %}
    \"paging\": {{ sg_datatables_view.features.paging|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.processing is not same as(null) %}
    \"processing\": {{ sg_datatables_view.features.processing|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.scrollX is not same as(null) %}
    \"scrollX\": {{ sg_datatables_view.features.scrollX|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.scrollY is not same as(null) %}
    \"scrollY\": \"{{ sg_datatables_view.features.scrollY }}\",
{% endif %}
{% if sg_datatables_view.features.searching is not same as(null) %}
    \"searching\": {{ sg_datatables_view.features.searching|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.stateSave is not same as(null) %}
    \"stateSave\": {{ sg_datatables_view.features.stateSave|sg_datatables_bool_var }},
{% endif %}
", "@SgDatatables/datatable/features.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\features.html.twig");
    }
}
