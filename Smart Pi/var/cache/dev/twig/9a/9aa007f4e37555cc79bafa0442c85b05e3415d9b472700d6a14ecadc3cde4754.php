<?php

/* @SgDatatables/datatable/initial_search.html.twig */
class __TwigTemplate_63bfb71eb5998a05f877662deb785005af8b71eebfb912e0d224d50925cc42b3 extends Twig_Template
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
        $__internal_9fe48dad97f82146d5e2a7af7ed1a3d006f03fb4ecfa98ca1c932013cd8b958d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe48dad97f82146d5e2a7af7ed1a3d006f03fb4ecfa98ca1c932013cd8b958d->enter($__internal_9fe48dad97f82146d5e2a7af7ed1a3d006f03fb4ecfa98ca1c932013cd8b958d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/initial_search.html.twig"));

        $__internal_7b5e4e2c9ebf931cc8f9cb6af685ca191eb3197cfb835fcd93219c2fb2c4e0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5e4e2c9ebf931cc8f9cb6af685ca191eb3197cfb835fcd93219c2fb2c4e0a0->enter($__internal_7b5e4e2c9ebf931cc8f9cb6af685ca191eb3197cfb835fcd93219c2fb2c4e0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/initial_search.html.twig"));

        // line 9
        echo "\"searchCols\": [
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        ";
            if (($this->getAttribute($this->getAttribute($context["column"], "filter", array(), "any", false, true), "initialSearch", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["column"], "filter", array()), "initialSearch", array())) > 0))) {
                echo "{\"search\" : \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["column"], "filter", array()), "initialSearch", array()), "html", null, true);
                echo "\"}";
            } else {
                echo "null";
            }
            echo ",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "]
";
        
        $__internal_9fe48dad97f82146d5e2a7af7ed1a3d006f03fb4ecfa98ca1c932013cd8b958d->leave($__internal_9fe48dad97f82146d5e2a7af7ed1a3d006f03fb4ecfa98ca1c932013cd8b958d_prof);

        
        $__internal_7b5e4e2c9ebf931cc8f9cb6af685ca191eb3197cfb835fcd93219c2fb2c4e0a0->leave($__internal_7b5e4e2c9ebf931cc8f9cb6af685ca191eb3197cfb835fcd93219c2fb2c4e0a0_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/initial_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  32 => 11,  28 => 10,  25 => 9,);
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
\"searchCols\": [
    {% for column in sg_datatables_view.columnBuilder.columns %}
        {% if column.filter.initialSearch is defined and column.filter.initialSearch|length > 0 %}{\"search\" : \"{{ column.filter.initialSearch }}\"}{% else %}null{% endif %},
    {% endfor %}
]
", "@SgDatatables/datatable/initial_search.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\initial_search.html.twig");
    }
}
