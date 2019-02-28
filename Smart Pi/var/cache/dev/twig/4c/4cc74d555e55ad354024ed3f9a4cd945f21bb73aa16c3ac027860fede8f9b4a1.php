<?php

/* @SgDatatables/datatable/datatable.html.twig */
class __TwigTemplate_083fecf8833a3c8ef9ad27b655c0a60a81ca7d2b4df3c10b554d0a8f0c804193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sg_datatables' => array($this, 'block_sg_datatables'),
            'sg_datatables_html' => array($this, 'block_sg_datatables_html'),
            'sg_datatables_js' => array($this, 'block_sg_datatables_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d607921e93563be798f863c046c109ea587d0de3935bfb8fecc385e3c8f1e1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d607921e93563be798f863c046c109ea587d0de3935bfb8fecc385e3c8f1e1ee->enter($__internal_d607921e93563be798f863c046c109ea587d0de3935bfb8fecc385e3c8f1e1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/datatable.html.twig"));

        $__internal_ee1fd9c65c07deb5e6bdaa7c5a67de503fe4fcc989f903ad5e12fe21e6c2d5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1fd9c65c07deb5e6bdaa7c5a67de503fe4fcc989f903ad5e12fe21e6c2d5d2->enter($__internal_ee1fd9c65c07deb5e6bdaa7c5a67de503fe4fcc989f903ad5e12fe21e6c2d5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatables', $context, $blocks);
        
        $__internal_d607921e93563be798f863c046c109ea587d0de3935bfb8fecc385e3c8f1e1ee->leave($__internal_d607921e93563be798f863c046c109ea587d0de3935bfb8fecc385e3c8f1e1ee_prof);

        
        $__internal_ee1fd9c65c07deb5e6bdaa7c5a67de503fe4fcc989f903ad5e12fe21e6c2d5d2->leave($__internal_ee1fd9c65c07deb5e6bdaa7c5a67de503fe4fcc989f903ad5e12fe21e6c2d5d2_prof);

    }

    public function block_sg_datatables($context, array $blocks = array())
    {
        $__internal_b6124af04b4394b841855d09e48a2bb714fd1580c107258bb694fb9c335ac478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6124af04b4394b841855d09e48a2bb714fd1580c107258bb694fb9c335ac478->enter($__internal_b6124af04b4394b841855d09e48a2bb714fd1580c107258bb694fb9c335ac478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables"));

        $__internal_15255a892806b5216f1546ccd3a778a2ebaa9df1bff0525614274ff83c9e302d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15255a892806b5216f1546ccd3a778a2ebaa9df1bff0525614274ff83c9e302d->enter($__internal_15255a892806b5216f1546ccd3a778a2ebaa9df1bff0525614274ff83c9e302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables"));

        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('sg_datatables_html', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('sg_datatables_js', $context, $blocks);
        // line 22
        echo "
";
        
        $__internal_15255a892806b5216f1546ccd3a778a2ebaa9df1bff0525614274ff83c9e302d->leave($__internal_15255a892806b5216f1546ccd3a778a2ebaa9df1bff0525614274ff83c9e302d_prof);

        
        $__internal_b6124af04b4394b841855d09e48a2bb714fd1580c107258bb694fb9c335ac478->leave($__internal_b6124af04b4394b841855d09e48a2bb714fd1580c107258bb694fb9c335ac478_prof);

    }

    // line 11
    public function block_sg_datatables_html($context, array $blocks = array())
    {
        $__internal_b19f6e902ba2498ae91566930df69bc59bc2d1c0cf38a6120f018799e6f25d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19f6e902ba2498ae91566930df69bc59bc2d1c0cf38a6120f018799e6f25d1d->enter($__internal_b19f6e902ba2498ae91566930df69bc59bc2d1c0cf38a6120f018799e6f25d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_html"));

        $__internal_bba71b2d90cc53e349edf4e0eba67f832d298d4a547cee957ace03cd66d79be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba71b2d90cc53e349edf4e0eba67f832d298d4a547cee957ace03cd66d79be0->enter($__internal_bba71b2d90cc53e349edf4e0eba67f832d298d4a547cee957ace03cd66d79be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("@SgDatatables/datatable/datatable_html.html.twig", "@SgDatatables/datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_bba71b2d90cc53e349edf4e0eba67f832d298d4a547cee957ace03cd66d79be0->leave($__internal_bba71b2d90cc53e349edf4e0eba67f832d298d4a547cee957ace03cd66d79be0_prof);

        
        $__internal_b19f6e902ba2498ae91566930df69bc59bc2d1c0cf38a6120f018799e6f25d1d->leave($__internal_b19f6e902ba2498ae91566930df69bc59bc2d1c0cf38a6120f018799e6f25d1d_prof);

    }

    // line 17
    public function block_sg_datatables_js($context, array $blocks = array())
    {
        $__internal_4cb541d5da4f44d2dff4c9e2ead615219e91e5c45a44362ed549a8698d39e8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb541d5da4f44d2dff4c9e2ead615219e91e5c45a44362ed549a8698d39e8d9->enter($__internal_4cb541d5da4f44d2dff4c9e2ead615219e91e5c45a44362ed549a8698d39e8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_js"));

        $__internal_b39740fbe15d1af70308a7b9752c694bb1e214d2ff9015b3ea79cca8c654a7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39740fbe15d1af70308a7b9752c694bb1e214d2ff9015b3ea79cca8c654a7e4->enter($__internal_b39740fbe15d1af70308a7b9752c694bb1e214d2ff9015b3ea79cca8c654a7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("@SgDatatables/datatable/datatable_js.html.twig", "@SgDatatables/datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_b39740fbe15d1af70308a7b9752c694bb1e214d2ff9015b3ea79cca8c654a7e4->leave($__internal_b39740fbe15d1af70308a7b9752c694bb1e214d2ff9015b3ea79cca8c654a7e4_prof);

        
        $__internal_4cb541d5da4f44d2dff4c9e2ead615219e91e5c45a44362ed549a8698d39e8d9->leave($__internal_4cb541d5da4f44d2dff4c9e2ead615219e91e5c45a44362ed549a8698d39e8d9_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/datatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  104 => 19,  101 => 18,  92 => 17,  81 => 14,  79 => 13,  76 => 12,  67 => 11,  56 => 22,  54 => 17,  51 => 16,  49 => 11,  46 => 10,  28 => 9,);
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
{% block sg_datatables %}

    {% block sg_datatables_html %}

        {% include '@SgDatatables/datatable/datatable_html.html.twig' %}

    {% endblock %}

    {% block sg_datatables_js %}

        {% include '@SgDatatables/datatable/datatable_js.html.twig' %}

    {% endblock %}

{% endblock  %}
", "@SgDatatables/datatable/datatable.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\datatable.html.twig");
    }
}
