<?php

/* @SgDatatables/datatable/columns.html.twig */
class __TwigTemplate_de91e1ab25f4c96048f4dc5bdd3bc965173e44956e2cc3d98d0e5b972caf7162 extends Twig_Template
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
        $__internal_f2f54d380d36f47db390ad36ab50a8f5b01e45cf43670d40aabf6e68eb41f053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f54d380d36f47db390ad36ab50a8f5b01e45cf43670d40aabf6e68eb41f053->enter($__internal_f2f54d380d36f47db390ad36ab50a8f5b01e45cf43670d40aabf6e68eb41f053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/columns.html.twig"));

        $__internal_2ce60afcee275b02cb7687490b0906b1ca22184cba5f981aeddc4e832649aa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce60afcee275b02cb7687490b0906b1ca22184cba5f981aeddc4e832649aa09->enter($__internal_2ce60afcee275b02cb7687490b0906b1ca22184cba5f981aeddc4e832649aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/columns.html.twig"));

        // line 9
        echo "\"columns\": [
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "columns", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        ";
            $this->loadTemplate($this->getAttribute($context["column"], "getOptionsTemplate", array()), "@SgDatatables/datatable/columns.html.twig", 11)->display($context);
            // line 12
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "]
";
        
        $__internal_f2f54d380d36f47db390ad36ab50a8f5b01e45cf43670d40aabf6e68eb41f053->leave($__internal_f2f54d380d36f47db390ad36ab50a8f5b01e45cf43670d40aabf6e68eb41f053_prof);

        
        $__internal_2ce60afcee275b02cb7687490b0906b1ca22184cba5f981aeddc4e832649aa09->leave($__internal_2ce60afcee275b02cb7687490b0906b1ca22184cba5f981aeddc4e832649aa09_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  48 => 12,  45 => 11,  28 => 10,  25 => 9,);
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
\"columns\": [
    {% for column in sg_datatables_view.columnBuilder.columns %}
        {% include column.getOptionsTemplate %}
    {% endfor %}
]
", "@SgDatatables/datatable/columns.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\columns.html.twig");
    }
}
