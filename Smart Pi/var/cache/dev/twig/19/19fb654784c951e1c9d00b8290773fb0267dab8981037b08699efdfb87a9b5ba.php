<?php

/* form_table_layout.html.twig */
class __TwigTemplate_66abdac18ecc2db194c278b6def7df031a40820813e93117ed8e1372dd228f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5de6d738f436083a1e0aae214c38054a5dd9f5a34b5e242ebc30a41c13ca31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5de6d738f436083a1e0aae214c38054a5dd9f5a34b5e242ebc30a41c13ca31e->enter($__internal_b5de6d738f436083a1e0aae214c38054a5dd9f5a34b5e242ebc30a41c13ca31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_622ed4498e9bab545b52daa9e6339c3a0fecf0013f4bfeb44d802326a708f284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622ed4498e9bab545b52daa9e6339c3a0fecf0013f4bfeb44d802326a708f284->enter($__internal_622ed4498e9bab545b52daa9e6339c3a0fecf0013f4bfeb44d802326a708f284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_b5de6d738f436083a1e0aae214c38054a5dd9f5a34b5e242ebc30a41c13ca31e->leave($__internal_b5de6d738f436083a1e0aae214c38054a5dd9f5a34b5e242ebc30a41c13ca31e_prof);

        
        $__internal_622ed4498e9bab545b52daa9e6339c3a0fecf0013f4bfeb44d802326a708f284->leave($__internal_622ed4498e9bab545b52daa9e6339c3a0fecf0013f4bfeb44d802326a708f284_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9269180821d472d069093bf9b403c3cd80f3ab63c6d10ed00a6f720a84d226f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9269180821d472d069093bf9b403c3cd80f3ab63c6d10ed00a6f720a84d226f4->enter($__internal_9269180821d472d069093bf9b403c3cd80f3ab63c6d10ed00a6f720a84d226f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b810d1e239ca8aa6b08563993de4ef29ddb6931fa7e1ce5df0499a15cf92cd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b810d1e239ca8aa6b08563993de4ef29ddb6931fa7e1ce5df0499a15cf92cd97->enter($__internal_b810d1e239ca8aa6b08563993de4ef29ddb6931fa7e1ce5df0499a15cf92cd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_b810d1e239ca8aa6b08563993de4ef29ddb6931fa7e1ce5df0499a15cf92cd97->leave($__internal_b810d1e239ca8aa6b08563993de4ef29ddb6931fa7e1ce5df0499a15cf92cd97_prof);

        
        $__internal_9269180821d472d069093bf9b403c3cd80f3ab63c6d10ed00a6f720a84d226f4->leave($__internal_9269180821d472d069093bf9b403c3cd80f3ab63c6d10ed00a6f720a84d226f4_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c82c33bbcbed48b57a1182dbc749315f08f89a5682792133d59801a06e04fb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82c33bbcbed48b57a1182dbc749315f08f89a5682792133d59801a06e04fb60->enter($__internal_c82c33bbcbed48b57a1182dbc749315f08f89a5682792133d59801a06e04fb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6ca09daa7e812d989864e3d6b32ec163bf30ae61869c119c3d3c01f50187a2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca09daa7e812d989864e3d6b32ec163bf30ae61869c119c3d3c01f50187a2aa->enter($__internal_6ca09daa7e812d989864e3d6b32ec163bf30ae61869c119c3d3c01f50187a2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_6ca09daa7e812d989864e3d6b32ec163bf30ae61869c119c3d3c01f50187a2aa->leave($__internal_6ca09daa7e812d989864e3d6b32ec163bf30ae61869c119c3d3c01f50187a2aa_prof);

        
        $__internal_c82c33bbcbed48b57a1182dbc749315f08f89a5682792133d59801a06e04fb60->leave($__internal_c82c33bbcbed48b57a1182dbc749315f08f89a5682792133d59801a06e04fb60_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d1c24b4b958c0a961ca0bd74cf28219ede940d4761b1972ed8fa932fd6479c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c24b4b958c0a961ca0bd74cf28219ede940d4761b1972ed8fa932fd6479c0e->enter($__internal_d1c24b4b958c0a961ca0bd74cf28219ede940d4761b1972ed8fa932fd6479c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_54f00b70b19987175d92032e2dbe06318c347308999608f260a504720a21e462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f00b70b19987175d92032e2dbe06318c347308999608f260a504720a21e462->enter($__internal_54f00b70b19987175d92032e2dbe06318c347308999608f260a504720a21e462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_54f00b70b19987175d92032e2dbe06318c347308999608f260a504720a21e462->leave($__internal_54f00b70b19987175d92032e2dbe06318c347308999608f260a504720a21e462_prof);

        
        $__internal_d1c24b4b958c0a961ca0bd74cf28219ede940d4761b1972ed8fa932fd6479c0e->leave($__internal_d1c24b4b958c0a961ca0bd74cf28219ede940d4761b1972ed8fa932fd6479c0e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b1dbf8b70d806de169579a2771193a418fe42d78c11ab740dbd9154c408f2d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1dbf8b70d806de169579a2771193a418fe42d78c11ab740dbd9154c408f2d2e->enter($__internal_b1dbf8b70d806de169579a2771193a418fe42d78c11ab740dbd9154c408f2d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_905b860c6f3da9d4726c722ae3f86bda52213d034b88bb51e096b5f1d93ba2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905b860c6f3da9d4726c722ae3f86bda52213d034b88bb51e096b5f1d93ba2af->enter($__internal_905b860c6f3da9d4726c722ae3f86bda52213d034b88bb51e096b5f1d93ba2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_905b860c6f3da9d4726c722ae3f86bda52213d034b88bb51e096b5f1d93ba2af->leave($__internal_905b860c6f3da9d4726c722ae3f86bda52213d034b88bb51e096b5f1d93ba2af_prof);

        
        $__internal_b1dbf8b70d806de169579a2771193a418fe42d78c11ab740dbd9154c408f2d2e->leave($__internal_b1dbf8b70d806de169579a2771193a418fe42d78c11ab740dbd9154c408f2d2e_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
