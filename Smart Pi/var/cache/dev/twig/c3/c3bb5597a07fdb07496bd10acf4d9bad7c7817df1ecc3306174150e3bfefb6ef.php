<?php

/* @SgDatatables/datatable/ajax.html.twig */
class __TwigTemplate_17ff2617cd90e600f8658c30448a0f5fd7e9415c64e4da044eb5ab5cbb398a78 extends Twig_Template
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
        $__internal_c54fcfca3582904419d28ca0766d8bb62794e7f5463f94c1035292c91912c93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54fcfca3582904419d28ca0766d8bb62794e7f5463f94c1035292c91912c93d->enter($__internal_c54fcfca3582904419d28ca0766d8bb62794e7f5463f94c1035292c91912c93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/ajax.html.twig"));

        $__internal_4efa19da172fdf90f18b3b7d0ccf1961ded5aba7be32458adad6f23988df3b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efa19da172fdf90f18b3b7d0ccf1961ded5aba7be32458adad6f23988df3b7c->enter($__internal_4efa19da172fdf90f18b3b7d0ccf1961ded5aba7be32458adad6f23988df3b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/ajax.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    ";
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "url", array()) === null)) {
            // line 11
            echo "        \"url\": \"";
            echo $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "url", array());
            echo "\",
    ";
        }
        // line 13
        echo "    \"type\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "type", array()), "html", null, true);
        echo "\",
    ";
        // line 14
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "data", array()) === null)) {
            // line 15
            echo "        \"data\": ";
            echo $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "data", array());
            echo ",
    ";
        }
        $context["ajax_vars"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
\"serverSide\": true,
";
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "pipeline", array()) > 0)) {
            // line 21
            echo "    \"ajax\": \$.fn.dataTable.pipeline({
        ";
            // line 22
            echo twig_escape_filter($this->env, ($context["ajax_vars"] ?? $this->getContext($context, "ajax_vars")), "html", null, true);
            echo "
        \"pages\": ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "pipeline", array()), "html", null, true);
            echo "
    }),
";
        } else {
            // line 26
            echo "    \"ajax\": {
        ";
            // line 27
            echo twig_escape_filter($this->env, ($context["ajax_vars"] ?? $this->getContext($context, "ajax_vars")), "html", null, true);
            echo "
    },
";
        }
        // line 30
        echo "


";
        
        $__internal_c54fcfca3582904419d28ca0766d8bb62794e7f5463f94c1035292c91912c93d->leave($__internal_c54fcfca3582904419d28ca0766d8bb62794e7f5463f94c1035292c91912c93d_prof);

        
        $__internal_4efa19da172fdf90f18b3b7d0ccf1961ded5aba7be32458adad6f23988df3b7c->leave($__internal_4efa19da172fdf90f18b3b7d0ccf1961ded5aba7be32458adad6f23988df3b7c_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  72 => 27,  69 => 26,  63 => 23,  59 => 22,  56 => 21,  54 => 20,  50 => 18,  43 => 15,  41 => 14,  36 => 13,  30 => 11,  27 => 10,  25 => 9,);
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
{% set ajax_vars %}
    {% if sg_datatables_view.ajax.url is not same as(null) %}
        \"url\": \"{{ sg_datatables_view.ajax.url|raw }}\",
    {% endif %}
    \"type\": \"{{ sg_datatables_view.ajax.type }}\",
    {% if sg_datatables_view.ajax.data is not same as(null) %}
        \"data\": {{ sg_datatables_view.ajax.data|raw }},
    {% endif %}
{% endset %}

\"serverSide\": true,
{% if sg_datatables_view.ajax.pipeline > 0 %}
    \"ajax\": \$.fn.dataTable.pipeline({
        {{ ajax_vars }}
        \"pages\": {{ sg_datatables_view.ajax.pipeline }}
    }),
{% else %}
    \"ajax\": {
        {{ ajax_vars }}
    },
{% endif %}



", "@SgDatatables/datatable/ajax.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\ajax.html.twig");
    }
}
