<?php

/* @SgDatatables/datatable/search.js.twig */
class __TwigTemplate_18eae68f4ac36fb56c4cc943b4bd88afffaebdca0cf4ce981891c0cfda7aea89 extends Twig_Template
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
        $__internal_3bf5999eb46d4ef6a62be426b534e8590c74ab5987963a8bbf9c65094436ff7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf5999eb46d4ef6a62be426b534e8590c74ab5987963a8bbf9c65094436ff7d->enter($__internal_3bf5999eb46d4ef6a62be426b534e8590c74ab5987963a8bbf9c65094436ff7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/search.js.twig"));

        $__internal_8861adeb8c0a97c42a2ba612f6db0e905c20c1782a2d0ae24c7964beaa628cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8861adeb8c0a97c42a2ba612f6db0e905c20c1782a2d0ae24c7964beaa628cf6->enter($__internal_8861adeb8c0a97c42a2ba612f6db0e905c20c1782a2d0ae24c7964beaa628cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/search.js.twig"));

        // line 9
        echo "function drawTable() {
    ";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "pipeline", array()) > 0)) {
            // line 11
            echo "        oTable.clearPipeline().draw();
    ";
        } else {
            // line 13
            echo "        oTable.draw();
    ";
        }
        // line 15
        echo "}

var search = \$.fn.dataTable.util.throttle(
        function(event) {
            if (event.type == \"keyup\") {
                if (
                        event.keyCode == 37 ||
                        event.keyCode == 38 ||
                        event.keyCode == 39 ||
                        event.keyCode == 40 ||
                        event.keyCode == 16 ||
                        event.keyCode == 17 ||
                        event.keyCode == 18
                )
                    return;
            }

            oTable
                    .column(\$(event.currentTarget).data(\"search-column-index\"))
                    .search(\$(this).val());
            drawTable();
        },
        options.searchDelay
);

\$(selector).find(\"tr input.sg-datatables-individual-filtering\").on(\"keyup change\", search);

\$(selector).find(\"tr select.sg-datatables-individual-filtering\").on(\"keyup change\", function(event) {
    var searchValue = \$(this).val();
    searchValue = searchValue ? searchValue.toString() : '';
    oTable
            .column(\$(event.currentTarget).data(\"search-column-index\"))
            .search(searchValue);
    drawTable();
});
";
        
        $__internal_3bf5999eb46d4ef6a62be426b534e8590c74ab5987963a8bbf9c65094436ff7d->leave($__internal_3bf5999eb46d4ef6a62be426b534e8590c74ab5987963a8bbf9c65094436ff7d_prof);

        
        $__internal_8861adeb8c0a97c42a2ba612f6db0e905c20c1782a2d0ae24c7964beaa628cf6->leave($__internal_8861adeb8c0a97c42a2ba612f6db0e905c20c1782a2d0ae24c7964beaa628cf6_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/search.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  34 => 13,  30 => 11,  28 => 10,  25 => 9,);
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
function drawTable() {
    {% if sg_datatables_view.ajax.pipeline > 0 %}
        oTable.clearPipeline().draw();
    {% else %}
        oTable.draw();
    {% endif %}
}

var search = \$.fn.dataTable.util.throttle(
        function(event) {
            if (event.type == \"keyup\") {
                if (
                        event.keyCode == 37 ||
                        event.keyCode == 38 ||
                        event.keyCode == 39 ||
                        event.keyCode == 40 ||
                        event.keyCode == 16 ||
                        event.keyCode == 17 ||
                        event.keyCode == 18
                )
                    return;
            }

            oTable
                    .column(\$(event.currentTarget).data(\"search-column-index\"))
                    .search(\$(this).val());
            drawTable();
        },
        options.searchDelay
);

\$(selector).find(\"tr input.sg-datatables-individual-filtering\").on(\"keyup change\", search);

\$(selector).find(\"tr select.sg-datatables-individual-filtering\").on(\"keyup change\", function(event) {
    var searchValue = \$(this).val();
    searchValue = searchValue ? searchValue.toString() : '';
    oTable
            .column(\$(event.currentTarget).data(\"search-column-index\"))
            .search(searchValue);
    drawTable();
});
", "@SgDatatables/datatable/search.js.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\search.js.twig");
    }
}
