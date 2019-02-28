<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_93115d3a757dac019f732b62b0de48a7680c0d93fdc3daca75f7457a665ba85a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dc44a758b08fe78882addc697cb87c4b6050430163f80067edb3089f27aa1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc44a758b08fe78882addc697cb87c4b6050430163f80067edb3089f27aa1bc->enter($__internal_3dc44a758b08fe78882addc697cb87c4b6050430163f80067edb3089f27aa1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_eaa5e372fbcd0979bf8676b8e45829c76aa083794ee31922a9f1bd6505f56631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa5e372fbcd0979bf8676b8e45829c76aa083794ee31922a9f1bd6505f56631->enter($__internal_eaa5e372fbcd0979bf8676b8e45829c76aa083794ee31922a9f1bd6505f56631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_3dc44a758b08fe78882addc697cb87c4b6050430163f80067edb3089f27aa1bc->leave($__internal_3dc44a758b08fe78882addc697cb87c4b6050430163f80067edb3089f27aa1bc_prof);

        
        $__internal_eaa5e372fbcd0979bf8676b8e45829c76aa083794ee31922a9f1bd6505f56631->leave($__internal_eaa5e372fbcd0979bf8676b8e45829c76aa083794ee31922a9f1bd6505f56631_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2dbda0c3c4ebb0a29bba90ed326b4478fe75ae82cc0d75e382b9ee541c4ca2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dbda0c3c4ebb0a29bba90ed326b4478fe75ae82cc0d75e382b9ee541c4ca2c4->enter($__internal_2dbda0c3c4ebb0a29bba90ed326b4478fe75ae82cc0d75e382b9ee541c4ca2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0fa2a65ebaada62f986b7039e62ba9f26cf501b8adf92b0a728d13a2ee2becf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa2a65ebaada62f986b7039e62ba9f26cf501b8adf92b0a728d13a2ee2becf3->enter($__internal_0fa2a65ebaada62f986b7039e62ba9f26cf501b8adf92b0a728d13a2ee2becf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0fa2a65ebaada62f986b7039e62ba9f26cf501b8adf92b0a728d13a2ee2becf3->leave($__internal_0fa2a65ebaada62f986b7039e62ba9f26cf501b8adf92b0a728d13a2ee2becf3_prof);

        
        $__internal_2dbda0c3c4ebb0a29bba90ed326b4478fe75ae82cc0d75e382b9ee541c4ca2c4->leave($__internal_2dbda0c3c4ebb0a29bba90ed326b4478fe75ae82cc0d75e382b9ee541c4ca2c4_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c47beafea07cce4c6788ca8379cfeb1902e57ada70fd0a2e503a460ba6d61e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47beafea07cce4c6788ca8379cfeb1902e57ada70fd0a2e503a460ba6d61e2c->enter($__internal_c47beafea07cce4c6788ca8379cfeb1902e57ada70fd0a2e503a460ba6d61e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e725389df9955aa1033d258411a500706cbcc8b2502f67150a6ebd2a265bcaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e725389df9955aa1033d258411a500706cbcc8b2502f67150a6ebd2a265bcaef->enter($__internal_e725389df9955aa1033d258411a500706cbcc8b2502f67150a6ebd2a265bcaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e725389df9955aa1033d258411a500706cbcc8b2502f67150a6ebd2a265bcaef->leave($__internal_e725389df9955aa1033d258411a500706cbcc8b2502f67150a6ebd2a265bcaef_prof);

        
        $__internal_c47beafea07cce4c6788ca8379cfeb1902e57ada70fd0a2e503a460ba6d61e2c->leave($__internal_c47beafea07cce4c6788ca8379cfeb1902e57ada70fd0a2e503a460ba6d61e2c_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8b5c208294a20ae0907195e9b4cf6635d0f0c3cc8100d40c2c37d68547da3b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5c208294a20ae0907195e9b4cf6635d0f0c3cc8100d40c2c37d68547da3b4c->enter($__internal_8b5c208294a20ae0907195e9b4cf6635d0f0c3cc8100d40c2c37d68547da3b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_bce0c0deb9fdd41113ea554026661d57e6a9836efe63281c030ed091b3a2d57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce0c0deb9fdd41113ea554026661d57e6a9836efe63281c030ed091b3a2d57c->enter($__internal_bce0c0deb9fdd41113ea554026661d57e6a9836efe63281c030ed091b3a2d57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_bce0c0deb9fdd41113ea554026661d57e6a9836efe63281c030ed091b3a2d57c->leave($__internal_bce0c0deb9fdd41113ea554026661d57e6a9836efe63281c030ed091b3a2d57c_prof);

        
        $__internal_8b5c208294a20ae0907195e9b4cf6635d0f0c3cc8100d40c2c37d68547da3b4c->leave($__internal_8b5c208294a20ae0907195e9b4cf6635d0f0c3cc8100d40c2c37d68547da3b4c_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7dc25b2a41880dc8a8e54d6a0c56acd84ca1d68a83394e4ff9b35b46b631b615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc25b2a41880dc8a8e54d6a0c56acd84ca1d68a83394e4ff9b35b46b631b615->enter($__internal_7dc25b2a41880dc8a8e54d6a0c56acd84ca1d68a83394e4ff9b35b46b631b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_88d48408fc453e84d1d8c688f50c8b042fcf641bfc3c72ac9e730f3c1577d0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d48408fc453e84d1d8c688f50c8b042fcf641bfc3c72ac9e730f3c1577d0a2->enter($__internal_88d48408fc453e84d1d8c688f50c8b042fcf641bfc3c72ac9e730f3c1577d0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_bad54d39df1139fcfc63d0befd4f353cbe6f3cfbd9ef71caebea96e64947753b = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_2df89d56208e2d9840dd419d47dfdc51a1f7013d10aa1c320f2d1cfe0de85382 = "{{") && ('' === $__internal_2df89d56208e2d9840dd419d47dfdc51a1f7013d10aa1c320f2d1cfe0de85382 || 0 === strpos($__internal_bad54d39df1139fcfc63d0befd4f353cbe6f3cfbd9ef71caebea96e64947753b, $__internal_2df89d56208e2d9840dd419d47dfdc51a1f7013d10aa1c320f2d1cfe0de85382)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_6081964796999d17cd1cd76dfc97628981d377ae9c1bb9f7de623cca7242c5be = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_bb9ba5690f58f5557986aff0a99a7f5ccce2f6611cc807b0fcef408bcf346c10 = "}}") && ('' === $__internal_bb9ba5690f58f5557986aff0a99a7f5ccce2f6611cc807b0fcef408bcf346c10 || $__internal_bb9ba5690f58f5557986aff0a99a7f5ccce2f6611cc807b0fcef408bcf346c10 === substr($__internal_6081964796999d17cd1cd76dfc97628981d377ae9c1bb9f7de623cca7242c5be, -strlen($__internal_bb9ba5690f58f5557986aff0a99a7f5ccce2f6611cc807b0fcef408bcf346c10))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_88d48408fc453e84d1d8c688f50c8b042fcf641bfc3c72ac9e730f3c1577d0a2->leave($__internal_88d48408fc453e84d1d8c688f50c8b042fcf641bfc3c72ac9e730f3c1577d0a2_prof);

        
        $__internal_7dc25b2a41880dc8a8e54d6a0c56acd84ca1d68a83394e4ff9b35b46b631b615->leave($__internal_7dc25b2a41880dc8a8e54d6a0c56acd84ca1d68a83394e4ff9b35b46b631b615_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8b2826db79dafa94a84fabff1bcce32249fac9b8c6a2961a28ca20be31de6d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2826db79dafa94a84fabff1bcce32249fac9b8c6a2961a28ca20be31de6d79->enter($__internal_8b2826db79dafa94a84fabff1bcce32249fac9b8c6a2961a28ca20be31de6d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f17e22d720978797fe5a8ff276efba7563c1199597da0c275f8c13934ae075bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17e22d720978797fe5a8ff276efba7563c1199597da0c275f8c13934ae075bd->enter($__internal_f17e22d720978797fe5a8ff276efba7563c1199597da0c275f8c13934ae075bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f17e22d720978797fe5a8ff276efba7563c1199597da0c275f8c13934ae075bd->leave($__internal_f17e22d720978797fe5a8ff276efba7563c1199597da0c275f8c13934ae075bd_prof);

        
        $__internal_8b2826db79dafa94a84fabff1bcce32249fac9b8c6a2961a28ca20be31de6d79->leave($__internal_8b2826db79dafa94a84fabff1bcce32249fac9b8c6a2961a28ca20be31de6d79_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2e8404c2d28e2a7b5fc42eccdb40e8e86221cae233b0ae956a1c6c98ff8cc950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8404c2d28e2a7b5fc42eccdb40e8e86221cae233b0ae956a1c6c98ff8cc950->enter($__internal_2e8404c2d28e2a7b5fc42eccdb40e8e86221cae233b0ae956a1c6c98ff8cc950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9ae8402dd090421f4f03d1539b10b1df9f8e3bdb9fb1be05b86d3272105e03b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae8402dd090421f4f03d1539b10b1df9f8e3bdb9fb1be05b86d3272105e03b5->enter($__internal_9ae8402dd090421f4f03d1539b10b1df9f8e3bdb9fb1be05b86d3272105e03b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_9ae8402dd090421f4f03d1539b10b1df9f8e3bdb9fb1be05b86d3272105e03b5->leave($__internal_9ae8402dd090421f4f03d1539b10b1df9f8e3bdb9fb1be05b86d3272105e03b5_prof);

        
        $__internal_2e8404c2d28e2a7b5fc42eccdb40e8e86221cae233b0ae956a1c6c98ff8cc950->leave($__internal_2e8404c2d28e2a7b5fc42eccdb40e8e86221cae233b0ae956a1c6c98ff8cc950_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_07b341c0cd4febd3c0728076e4f7645984dbd42a86ebbbaf617a187df732ff30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b341c0cd4febd3c0728076e4f7645984dbd42a86ebbbaf617a187df732ff30->enter($__internal_07b341c0cd4febd3c0728076e4f7645984dbd42a86ebbbaf617a187df732ff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ce8027f7493363724b0deb23fd7bd08fcd1cf7b1da3f96e51556e4b2165e509e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8027f7493363724b0deb23fd7bd08fcd1cf7b1da3f96e51556e4b2165e509e->enter($__internal_ce8027f7493363724b0deb23fd7bd08fcd1cf7b1da3f96e51556e4b2165e509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_ce8027f7493363724b0deb23fd7bd08fcd1cf7b1da3f96e51556e4b2165e509e->leave($__internal_ce8027f7493363724b0deb23fd7bd08fcd1cf7b1da3f96e51556e4b2165e509e_prof);

        
        $__internal_07b341c0cd4febd3c0728076e4f7645984dbd42a86ebbbaf617a187df732ff30->leave($__internal_07b341c0cd4febd3c0728076e4f7645984dbd42a86ebbbaf617a187df732ff30_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_399a015502dc78f480abcac2ccd6efda4a4a03ddfea72835d9b78b4ced6a1251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399a015502dc78f480abcac2ccd6efda4a4a03ddfea72835d9b78b4ced6a1251->enter($__internal_399a015502dc78f480abcac2ccd6efda4a4a03ddfea72835d9b78b4ced6a1251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4540ccfdf95c6de831e43b6f8a209506c5f374faaf36921624ffc69569e6a8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4540ccfdf95c6de831e43b6f8a209506c5f374faaf36921624ffc69569e6a8a9->enter($__internal_4540ccfdf95c6de831e43b6f8a209506c5f374faaf36921624ffc69569e6a8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_4540ccfdf95c6de831e43b6f8a209506c5f374faaf36921624ffc69569e6a8a9->leave($__internal_4540ccfdf95c6de831e43b6f8a209506c5f374faaf36921624ffc69569e6a8a9_prof);

        
        $__internal_399a015502dc78f480abcac2ccd6efda4a4a03ddfea72835d9b78b4ced6a1251->leave($__internal_399a015502dc78f480abcac2ccd6efda4a4a03ddfea72835d9b78b4ced6a1251_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_cb2169e328308c8bd0b557d6a6860e45fecf8a2be230ba6b84a67d9f734412ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2169e328308c8bd0b557d6a6860e45fecf8a2be230ba6b84a67d9f734412ce->enter($__internal_cb2169e328308c8bd0b557d6a6860e45fecf8a2be230ba6b84a67d9f734412ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_f8159ea33e00b749feeb29e7fe4376598f31880a7744e9bd687f72d86e8ad38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8159ea33e00b749feeb29e7fe4376598f31880a7744e9bd687f72d86e8ad38b->enter($__internal_f8159ea33e00b749feeb29e7fe4376598f31880a7744e9bd687f72d86e8ad38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_f8159ea33e00b749feeb29e7fe4376598f31880a7744e9bd687f72d86e8ad38b->leave($__internal_f8159ea33e00b749feeb29e7fe4376598f31880a7744e9bd687f72d86e8ad38b_prof);

        
        $__internal_cb2169e328308c8bd0b557d6a6860e45fecf8a2be230ba6b84a67d9f734412ce->leave($__internal_cb2169e328308c8bd0b557d6a6860e45fecf8a2be230ba6b84a67d9f734412ce_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1d6d3ace45c767c30416a39fb90b7c5e77b372a04c2e2e34eab047e36be53813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6d3ace45c767c30416a39fb90b7c5e77b372a04c2e2e34eab047e36be53813->enter($__internal_1d6d3ace45c767c30416a39fb90b7c5e77b372a04c2e2e34eab047e36be53813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0a32b491106ff6c8a7cd9575d919dbd244c6bb76e2a4d147df8313b4f601ee89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a32b491106ff6c8a7cd9575d919dbd244c6bb76e2a4d147df8313b4f601ee89->enter($__internal_0a32b491106ff6c8a7cd9575d919dbd244c6bb76e2a4d147df8313b4f601ee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_0a32b491106ff6c8a7cd9575d919dbd244c6bb76e2a4d147df8313b4f601ee89->leave($__internal_0a32b491106ff6c8a7cd9575d919dbd244c6bb76e2a4d147df8313b4f601ee89_prof);

        
        $__internal_1d6d3ace45c767c30416a39fb90b7c5e77b372a04c2e2e34eab047e36be53813->leave($__internal_1d6d3ace45c767c30416a39fb90b7c5e77b372a04c2e2e34eab047e36be53813_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d13e7a38716c0d116666f8f111cf1254ded75ebbf382979fe94dfc89bd7385c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13e7a38716c0d116666f8f111cf1254ded75ebbf382979fe94dfc89bd7385c9->enter($__internal_d13e7a38716c0d116666f8f111cf1254ded75ebbf382979fe94dfc89bd7385c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_e878e0dc42142833afac7101c3f17f4a15c393c906c635eabbeeb9f397a9abcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e878e0dc42142833afac7101c3f17f4a15c393c906c635eabbeeb9f397a9abcd->enter($__internal_e878e0dc42142833afac7101c3f17f4a15c393c906c635eabbeeb9f397a9abcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_e878e0dc42142833afac7101c3f17f4a15c393c906c635eabbeeb9f397a9abcd->leave($__internal_e878e0dc42142833afac7101c3f17f4a15c393c906c635eabbeeb9f397a9abcd_prof);

        
        $__internal_d13e7a38716c0d116666f8f111cf1254ded75ebbf382979fe94dfc89bd7385c9->leave($__internal_d13e7a38716c0d116666f8f111cf1254ded75ebbf382979fe94dfc89bd7385c9_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8043f959e0c578f59719d19c595f5ceb9f8d938a6fbe63e42b61bac4713b9fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8043f959e0c578f59719d19c595f5ceb9f8d938a6fbe63e42b61bac4713b9fec->enter($__internal_8043f959e0c578f59719d19c595f5ceb9f8d938a6fbe63e42b61bac4713b9fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_97b66dfc7f73a4dfd761d366e7f0ce2de787a3d2a607821d05b22e6cf0d245b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b66dfc7f73a4dfd761d366e7f0ce2de787a3d2a607821d05b22e6cf0d245b1->enter($__internal_97b66dfc7f73a4dfd761d366e7f0ce2de787a3d2a607821d05b22e6cf0d245b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_97b66dfc7f73a4dfd761d366e7f0ce2de787a3d2a607821d05b22e6cf0d245b1->leave($__internal_97b66dfc7f73a4dfd761d366e7f0ce2de787a3d2a607821d05b22e6cf0d245b1_prof);

        
        $__internal_8043f959e0c578f59719d19c595f5ceb9f8d938a6fbe63e42b61bac4713b9fec->leave($__internal_8043f959e0c578f59719d19c595f5ceb9f8d938a6fbe63e42b61bac4713b9fec_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_30b3c60811457712d2f8ae8a84176313b08d85343ec0ad21a6236cf8be0e6d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b3c60811457712d2f8ae8a84176313b08d85343ec0ad21a6236cf8be0e6d6f->enter($__internal_30b3c60811457712d2f8ae8a84176313b08d85343ec0ad21a6236cf8be0e6d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_aa130fdaf65c25fc180967a4717149f8c397de802ec67440cfa81da5c3d12843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa130fdaf65c25fc180967a4717149f8c397de802ec67440cfa81da5c3d12843->enter($__internal_aa130fdaf65c25fc180967a4717149f8c397de802ec67440cfa81da5c3d12843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_aa130fdaf65c25fc180967a4717149f8c397de802ec67440cfa81da5c3d12843->leave($__internal_aa130fdaf65c25fc180967a4717149f8c397de802ec67440cfa81da5c3d12843_prof);

        
        $__internal_30b3c60811457712d2f8ae8a84176313b08d85343ec0ad21a6236cf8be0e6d6f->leave($__internal_30b3c60811457712d2f8ae8a84176313b08d85343ec0ad21a6236cf8be0e6d6f_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_43d24402705553021e0a961df49b366f1ea83f0c8a3b02786c413c058b497693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d24402705553021e0a961df49b366f1ea83f0c8a3b02786c413c058b497693->enter($__internal_43d24402705553021e0a961df49b366f1ea83f0c8a3b02786c413c058b497693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d15fdc4f97b867afe961765bb8a20b4994e019f775ac1c3e1bbde606001c0712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15fdc4f97b867afe961765bb8a20b4994e019f775ac1c3e1bbde606001c0712->enter($__internal_d15fdc4f97b867afe961765bb8a20b4994e019f775ac1c3e1bbde606001c0712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d15fdc4f97b867afe961765bb8a20b4994e019f775ac1c3e1bbde606001c0712->leave($__internal_d15fdc4f97b867afe961765bb8a20b4994e019f775ac1c3e1bbde606001c0712_prof);

        
        $__internal_43d24402705553021e0a961df49b366f1ea83f0c8a3b02786c413c058b497693->leave($__internal_43d24402705553021e0a961df49b366f1ea83f0c8a3b02786c413c058b497693_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_e77171fe4af6ec46aadd95eb051e8f902af0b270f8fd03422dcda328fafe7fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77171fe4af6ec46aadd95eb051e8f902af0b270f8fd03422dcda328fafe7fd8->enter($__internal_e77171fe4af6ec46aadd95eb051e8f902af0b270f8fd03422dcda328fafe7fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_75eaf259c30003a939a710a0df47bb89f21dd320633f0dd2c309c9254e460b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75eaf259c30003a939a710a0df47bb89f21dd320633f0dd2c309c9254e460b3c->enter($__internal_75eaf259c30003a939a710a0df47bb89f21dd320633f0dd2c309c9254e460b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_75eaf259c30003a939a710a0df47bb89f21dd320633f0dd2c309c9254e460b3c->leave($__internal_75eaf259c30003a939a710a0df47bb89f21dd320633f0dd2c309c9254e460b3c_prof);

        
        $__internal_e77171fe4af6ec46aadd95eb051e8f902af0b270f8fd03422dcda328fafe7fd8->leave($__internal_e77171fe4af6ec46aadd95eb051e8f902af0b270f8fd03422dcda328fafe7fd8_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2c73eb07a4574c9617b8baed5bb793c0f7bfeb76bbd1a9f3eebef28a774542f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c73eb07a4574c9617b8baed5bb793c0f7bfeb76bbd1a9f3eebef28a774542f9->enter($__internal_2c73eb07a4574c9617b8baed5bb793c0f7bfeb76bbd1a9f3eebef28a774542f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_40ad05cc6c771edb1066ac706448f5ce48a402303bc2262f604138330b8cec7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ad05cc6c771edb1066ac706448f5ce48a402303bc2262f604138330b8cec7f->enter($__internal_40ad05cc6c771edb1066ac706448f5ce48a402303bc2262f604138330b8cec7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_40ad05cc6c771edb1066ac706448f5ce48a402303bc2262f604138330b8cec7f->leave($__internal_40ad05cc6c771edb1066ac706448f5ce48a402303bc2262f604138330b8cec7f_prof);

        
        $__internal_2c73eb07a4574c9617b8baed5bb793c0f7bfeb76bbd1a9f3eebef28a774542f9->leave($__internal_2c73eb07a4574c9617b8baed5bb793c0f7bfeb76bbd1a9f3eebef28a774542f9_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_77edba85f513f5cf83c1fe97ec3e3c06e536015189de291fb0e0083e69f8341a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77edba85f513f5cf83c1fe97ec3e3c06e536015189de291fb0e0083e69f8341a->enter($__internal_77edba85f513f5cf83c1fe97ec3e3c06e536015189de291fb0e0083e69f8341a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_66fb90dd4aeda672582fa7a777003847d53e47dccc38cd0d58f4e058e99e5d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fb90dd4aeda672582fa7a777003847d53e47dccc38cd0d58f4e058e99e5d46->enter($__internal_66fb90dd4aeda672582fa7a777003847d53e47dccc38cd0d58f4e058e99e5d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_66fb90dd4aeda672582fa7a777003847d53e47dccc38cd0d58f4e058e99e5d46->leave($__internal_66fb90dd4aeda672582fa7a777003847d53e47dccc38cd0d58f4e058e99e5d46_prof);

        
        $__internal_77edba85f513f5cf83c1fe97ec3e3c06e536015189de291fb0e0083e69f8341a->leave($__internal_77edba85f513f5cf83c1fe97ec3e3c06e536015189de291fb0e0083e69f8341a_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_71c2bec4de6c03c6a0a1fb289d7b06d11b801208975a8415317f42e883e6cbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c2bec4de6c03c6a0a1fb289d7b06d11b801208975a8415317f42e883e6cbfb->enter($__internal_71c2bec4de6c03c6a0a1fb289d7b06d11b801208975a8415317f42e883e6cbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3c19ef7ec3aa146b49b5b18b03e9af534b0301970a9f915b8c70368ecea7e96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c19ef7ec3aa146b49b5b18b03e9af534b0301970a9f915b8c70368ecea7e96c->enter($__internal_3c19ef7ec3aa146b49b5b18b03e9af534b0301970a9f915b8c70368ecea7e96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_3c19ef7ec3aa146b49b5b18b03e9af534b0301970a9f915b8c70368ecea7e96c->leave($__internal_3c19ef7ec3aa146b49b5b18b03e9af534b0301970a9f915b8c70368ecea7e96c_prof);

        
        $__internal_71c2bec4de6c03c6a0a1fb289d7b06d11b801208975a8415317f42e883e6cbfb->leave($__internal_71c2bec4de6c03c6a0a1fb289d7b06d11b801208975a8415317f42e883e6cbfb_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_71232da4d246c3cc6abf2099f9b80ff618b750aa9586a2f76c92af2f43e8f6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71232da4d246c3cc6abf2099f9b80ff618b750aa9586a2f76c92af2f43e8f6cb->enter($__internal_71232da4d246c3cc6abf2099f9b80ff618b750aa9586a2f76c92af2f43e8f6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6acb503a36502dd12ff8ece92f3bd5f81485a9858cf555943884d9a67510609b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acb503a36502dd12ff8ece92f3bd5f81485a9858cf555943884d9a67510609b->enter($__internal_6acb503a36502dd12ff8ece92f3bd5f81485a9858cf555943884d9a67510609b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_6acb503a36502dd12ff8ece92f3bd5f81485a9858cf555943884d9a67510609b->leave($__internal_6acb503a36502dd12ff8ece92f3bd5f81485a9858cf555943884d9a67510609b_prof);

        
        $__internal_71232da4d246c3cc6abf2099f9b80ff618b750aa9586a2f76c92af2f43e8f6cb->leave($__internal_71232da4d246c3cc6abf2099f9b80ff618b750aa9586a2f76c92af2f43e8f6cb_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b9341ae9d2424e9a02ee58a4c90cf6cafd248f277ff28c58d2399902255a9363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9341ae9d2424e9a02ee58a4c90cf6cafd248f277ff28c58d2399902255a9363->enter($__internal_b9341ae9d2424e9a02ee58a4c90cf6cafd248f277ff28c58d2399902255a9363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c6462d9ebca19cbc4c57679f2ee9e5d58b315680864bdbe03b7344d120aa4901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6462d9ebca19cbc4c57679f2ee9e5d58b315680864bdbe03b7344d120aa4901->enter($__internal_c6462d9ebca19cbc4c57679f2ee9e5d58b315680864bdbe03b7344d120aa4901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_c6462d9ebca19cbc4c57679f2ee9e5d58b315680864bdbe03b7344d120aa4901->leave($__internal_c6462d9ebca19cbc4c57679f2ee9e5d58b315680864bdbe03b7344d120aa4901_prof);

        
        $__internal_b9341ae9d2424e9a02ee58a4c90cf6cafd248f277ff28c58d2399902255a9363->leave($__internal_b9341ae9d2424e9a02ee58a4c90cf6cafd248f277ff28c58d2399902255a9363_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f448f0b8813e46eaff3b61393eaec6e404f7478df1278f3d0a31bb737c07c28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f448f0b8813e46eaff3b61393eaec6e404f7478df1278f3d0a31bb737c07c28a->enter($__internal_f448f0b8813e46eaff3b61393eaec6e404f7478df1278f3d0a31bb737c07c28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_6fd4b3552591fd31246fc9f45d9cefcbcd9ec5f01acc508954fdafb544b88a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd4b3552591fd31246fc9f45d9cefcbcd9ec5f01acc508954fdafb544b88a42->enter($__internal_6fd4b3552591fd31246fc9f45d9cefcbcd9ec5f01acc508954fdafb544b88a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6fd4b3552591fd31246fc9f45d9cefcbcd9ec5f01acc508954fdafb544b88a42->leave($__internal_6fd4b3552591fd31246fc9f45d9cefcbcd9ec5f01acc508954fdafb544b88a42_prof);

        
        $__internal_f448f0b8813e46eaff3b61393eaec6e404f7478df1278f3d0a31bb737c07c28a->leave($__internal_f448f0b8813e46eaff3b61393eaec6e404f7478df1278f3d0a31bb737c07c28a_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4ecf91a2a48a9b89e365e53de8e6d5ef20366a1d8115269b49ccd6108c33bde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ecf91a2a48a9b89e365e53de8e6d5ef20366a1d8115269b49ccd6108c33bde2->enter($__internal_4ecf91a2a48a9b89e365e53de8e6d5ef20366a1d8115269b49ccd6108c33bde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_cd25dd549750392b0701cce51a45ce40ffdf7eb0b2ccc7fdb4ef947c839e8419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd25dd549750392b0701cce51a45ce40ffdf7eb0b2ccc7fdb4ef947c839e8419->enter($__internal_cd25dd549750392b0701cce51a45ce40ffdf7eb0b2ccc7fdb4ef947c839e8419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cd25dd549750392b0701cce51a45ce40ffdf7eb0b2ccc7fdb4ef947c839e8419->leave($__internal_cd25dd549750392b0701cce51a45ce40ffdf7eb0b2ccc7fdb4ef947c839e8419_prof);

        
        $__internal_4ecf91a2a48a9b89e365e53de8e6d5ef20366a1d8115269b49ccd6108c33bde2->leave($__internal_4ecf91a2a48a9b89e365e53de8e6d5ef20366a1d8115269b49ccd6108c33bde2_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0dbd207d70c99af85ca7dc49549bf0a2136ea6c5e712de2eea7498703840b7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbd207d70c99af85ca7dc49549bf0a2136ea6c5e712de2eea7498703840b7ee->enter($__internal_0dbd207d70c99af85ca7dc49549bf0a2136ea6c5e712de2eea7498703840b7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_c9b0c8a9b558b0258efe7c0cd1bf3358898cf8a99b6e0028dcfbaba85f92370b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b0c8a9b558b0258efe7c0cd1bf3358898cf8a99b6e0028dcfbaba85f92370b->enter($__internal_c9b0c8a9b558b0258efe7c0cd1bf3358898cf8a99b6e0028dcfbaba85f92370b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c9b0c8a9b558b0258efe7c0cd1bf3358898cf8a99b6e0028dcfbaba85f92370b->leave($__internal_c9b0c8a9b558b0258efe7c0cd1bf3358898cf8a99b6e0028dcfbaba85f92370b_prof);

        
        $__internal_0dbd207d70c99af85ca7dc49549bf0a2136ea6c5e712de2eea7498703840b7ee->leave($__internal_0dbd207d70c99af85ca7dc49549bf0a2136ea6c5e712de2eea7498703840b7ee_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_3cabe057132a205d7b2597e3064f7aac3db6de6aa922f79ee298011cf7a45257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cabe057132a205d7b2597e3064f7aac3db6de6aa922f79ee298011cf7a45257->enter($__internal_3cabe057132a205d7b2597e3064f7aac3db6de6aa922f79ee298011cf7a45257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_49584b6afc617953e4d9ec9065aba9e148ac6ada5dda021bf8039168de1a5c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49584b6afc617953e4d9ec9065aba9e148ac6ada5dda021bf8039168de1a5c74->enter($__internal_49584b6afc617953e4d9ec9065aba9e148ac6ada5dda021bf8039168de1a5c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_49584b6afc617953e4d9ec9065aba9e148ac6ada5dda021bf8039168de1a5c74->leave($__internal_49584b6afc617953e4d9ec9065aba9e148ac6ada5dda021bf8039168de1a5c74_prof);

        
        $__internal_3cabe057132a205d7b2597e3064f7aac3db6de6aa922f79ee298011cf7a45257->leave($__internal_3cabe057132a205d7b2597e3064f7aac3db6de6aa922f79ee298011cf7a45257_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a450da5bf70881257ecdb4357d791bc1be5d6f525b2c1a9028384f48c18cce32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a450da5bf70881257ecdb4357d791bc1be5d6f525b2c1a9028384f48c18cce32->enter($__internal_a450da5bf70881257ecdb4357d791bc1be5d6f525b2c1a9028384f48c18cce32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_126e072f11530088267d5a8de886b554765f3bb8f28fdcec5017b30a0c1a6eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126e072f11530088267d5a8de886b554765f3bb8f28fdcec5017b30a0c1a6eca->enter($__internal_126e072f11530088267d5a8de886b554765f3bb8f28fdcec5017b30a0c1a6eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_126e072f11530088267d5a8de886b554765f3bb8f28fdcec5017b30a0c1a6eca->leave($__internal_126e072f11530088267d5a8de886b554765f3bb8f28fdcec5017b30a0c1a6eca_prof);

        
        $__internal_a450da5bf70881257ecdb4357d791bc1be5d6f525b2c1a9028384f48c18cce32->leave($__internal_a450da5bf70881257ecdb4357d791bc1be5d6f525b2c1a9028384f48c18cce32_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_309cfe95703041fe01e77da4194e8c0eddc4ed8e2d27736333cfece6d218f662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309cfe95703041fe01e77da4194e8c0eddc4ed8e2d27736333cfece6d218f662->enter($__internal_309cfe95703041fe01e77da4194e8c0eddc4ed8e2d27736333cfece6d218f662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_81aac88ce0e60662861db2031d45b442a9dbc1bd6c98073c12b00c8be47ae96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81aac88ce0e60662861db2031d45b442a9dbc1bd6c98073c12b00c8be47ae96f->enter($__internal_81aac88ce0e60662861db2031d45b442a9dbc1bd6c98073c12b00c8be47ae96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_81aac88ce0e60662861db2031d45b442a9dbc1bd6c98073c12b00c8be47ae96f->leave($__internal_81aac88ce0e60662861db2031d45b442a9dbc1bd6c98073c12b00c8be47ae96f_prof);

        
        $__internal_309cfe95703041fe01e77da4194e8c0eddc4ed8e2d27736333cfece6d218f662->leave($__internal_309cfe95703041fe01e77da4194e8c0eddc4ed8e2d27736333cfece6d218f662_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3090858c4ba177228e2ad1eec037fb54b953a91e424de827a5647dcfdf2ae1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3090858c4ba177228e2ad1eec037fb54b953a91e424de827a5647dcfdf2ae1e6->enter($__internal_3090858c4ba177228e2ad1eec037fb54b953a91e424de827a5647dcfdf2ae1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c55cd4ee4dc026b38573116fc185bc90b0c059ba05e86a4c5f41549f9e57c43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55cd4ee4dc026b38573116fc185bc90b0c059ba05e86a4c5f41549f9e57c43c->enter($__internal_c55cd4ee4dc026b38573116fc185bc90b0c059ba05e86a4c5f41549f9e57c43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c55cd4ee4dc026b38573116fc185bc90b0c059ba05e86a4c5f41549f9e57c43c->leave($__internal_c55cd4ee4dc026b38573116fc185bc90b0c059ba05e86a4c5f41549f9e57c43c_prof);

        
        $__internal_3090858c4ba177228e2ad1eec037fb54b953a91e424de827a5647dcfdf2ae1e6->leave($__internal_3090858c4ba177228e2ad1eec037fb54b953a91e424de827a5647dcfdf2ae1e6_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
