<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_d35ee2ac07d0efbe9053129652f31b55581483bfaaf0a7a2bf1cafb1a46d361d extends Twig_Template
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
        $__internal_998513f39d9f7bdc8baadef4d78e0b1166274f0b6bfb7768510258e5d01ea485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998513f39d9f7bdc8baadef4d78e0b1166274f0b6bfb7768510258e5d01ea485->enter($__internal_998513f39d9f7bdc8baadef4d78e0b1166274f0b6bfb7768510258e5d01ea485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_87e97dfc9bd6ceeb0226d97ef142898ad8a07b50f042ae08dfae3e8da4a71076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e97dfc9bd6ceeb0226d97ef142898ad8a07b50f042ae08dfae3e8da4a71076->enter($__internal_87e97dfc9bd6ceeb0226d97ef142898ad8a07b50f042ae08dfae3e8da4a71076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_998513f39d9f7bdc8baadef4d78e0b1166274f0b6bfb7768510258e5d01ea485->leave($__internal_998513f39d9f7bdc8baadef4d78e0b1166274f0b6bfb7768510258e5d01ea485_prof);

        
        $__internal_87e97dfc9bd6ceeb0226d97ef142898ad8a07b50f042ae08dfae3e8da4a71076->leave($__internal_87e97dfc9bd6ceeb0226d97ef142898ad8a07b50f042ae08dfae3e8da4a71076_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b353ae1b47fd32db9641f219de266669c16bad93c8f0c3c988d04a8da4a2ec2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b353ae1b47fd32db9641f219de266669c16bad93c8f0c3c988d04a8da4a2ec2a->enter($__internal_b353ae1b47fd32db9641f219de266669c16bad93c8f0c3c988d04a8da4a2ec2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b31e8847cdfcdebbe4ea947ec15bed3eb5ced92411095739c8b6c4b1e893b3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31e8847cdfcdebbe4ea947ec15bed3eb5ced92411095739c8b6c4b1e893b3a4->enter($__internal_b31e8847cdfcdebbe4ea947ec15bed3eb5ced92411095739c8b6c4b1e893b3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b31e8847cdfcdebbe4ea947ec15bed3eb5ced92411095739c8b6c4b1e893b3a4->leave($__internal_b31e8847cdfcdebbe4ea947ec15bed3eb5ced92411095739c8b6c4b1e893b3a4_prof);

        
        $__internal_b353ae1b47fd32db9641f219de266669c16bad93c8f0c3c988d04a8da4a2ec2a->leave($__internal_b353ae1b47fd32db9641f219de266669c16bad93c8f0c3c988d04a8da4a2ec2a_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_114e40fdf9a00467d0b511a5772372ed3e19d16b2d4c4b21cb5ba5319112a6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114e40fdf9a00467d0b511a5772372ed3e19d16b2d4c4b21cb5ba5319112a6aa->enter($__internal_114e40fdf9a00467d0b511a5772372ed3e19d16b2d4c4b21cb5ba5319112a6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_fa1ee18445d6b113ff9d64e85b4fe0ed732d39d95cbd66482fe09b06b3d125b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1ee18445d6b113ff9d64e85b4fe0ed732d39d95cbd66482fe09b06b3d125b3->enter($__internal_fa1ee18445d6b113ff9d64e85b4fe0ed732d39d95cbd66482fe09b06b3d125b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_fa1ee18445d6b113ff9d64e85b4fe0ed732d39d95cbd66482fe09b06b3d125b3->leave($__internal_fa1ee18445d6b113ff9d64e85b4fe0ed732d39d95cbd66482fe09b06b3d125b3_prof);

        
        $__internal_114e40fdf9a00467d0b511a5772372ed3e19d16b2d4c4b21cb5ba5319112a6aa->leave($__internal_114e40fdf9a00467d0b511a5772372ed3e19d16b2d4c4b21cb5ba5319112a6aa_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e0681549c23584f88f73a4df44929a3031d55442d04b9f62ed8444f89a4f3fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0681549c23584f88f73a4df44929a3031d55442d04b9f62ed8444f89a4f3fe8->enter($__internal_e0681549c23584f88f73a4df44929a3031d55442d04b9f62ed8444f89a4f3fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6e2162aec44bbe2c8cf477ba341b3b8c5e7072dc3a110637690e55178ccbb0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2162aec44bbe2c8cf477ba341b3b8c5e7072dc3a110637690e55178ccbb0e3->enter($__internal_6e2162aec44bbe2c8cf477ba341b3b8c5e7072dc3a110637690e55178ccbb0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6e2162aec44bbe2c8cf477ba341b3b8c5e7072dc3a110637690e55178ccbb0e3->leave($__internal_6e2162aec44bbe2c8cf477ba341b3b8c5e7072dc3a110637690e55178ccbb0e3_prof);

        
        $__internal_e0681549c23584f88f73a4df44929a3031d55442d04b9f62ed8444f89a4f3fe8->leave($__internal_e0681549c23584f88f73a4df44929a3031d55442d04b9f62ed8444f89a4f3fe8_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f95b71f771a5db9ed1b8b6ae11d8174ed2de870adb8a68ed8632d7289dcfa88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95b71f771a5db9ed1b8b6ae11d8174ed2de870adb8a68ed8632d7289dcfa88b->enter($__internal_f95b71f771a5db9ed1b8b6ae11d8174ed2de870adb8a68ed8632d7289dcfa88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ae87c9c9b00d5a888c9bcc28661c08b675f242f6f4a7046a09f90eb45cecedd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae87c9c9b00d5a888c9bcc28661c08b675f242f6f4a7046a09f90eb45cecedd1->enter($__internal_ae87c9c9b00d5a888c9bcc28661c08b675f242f6f4a7046a09f90eb45cecedd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_e40f716f8dfb9fa4e2f094cc645910d7441a61d94cd125daa52804c7012e3d02 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_2be05f2d51ed81a665765088862c9870e3fa43c2de5bd1408b49ed01e925e323 = "{{") && ('' === $__internal_2be05f2d51ed81a665765088862c9870e3fa43c2de5bd1408b49ed01e925e323 || 0 === strpos($__internal_e40f716f8dfb9fa4e2f094cc645910d7441a61d94cd125daa52804c7012e3d02, $__internal_2be05f2d51ed81a665765088862c9870e3fa43c2de5bd1408b49ed01e925e323)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_432a9583becb8cf3c8cc30683d9f7b3911b70ade79e8449cc47f9f77869c9a96 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_98f2e80f0985688951f08c14825e0b8767b7d4b8076625af7559e8e8b93c67d3 = "}}") && ('' === $__internal_98f2e80f0985688951f08c14825e0b8767b7d4b8076625af7559e8e8b93c67d3 || $__internal_98f2e80f0985688951f08c14825e0b8767b7d4b8076625af7559e8e8b93c67d3 === substr($__internal_432a9583becb8cf3c8cc30683d9f7b3911b70ade79e8449cc47f9f77869c9a96, -strlen($__internal_98f2e80f0985688951f08c14825e0b8767b7d4b8076625af7559e8e8b93c67d3))));
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
        
        $__internal_ae87c9c9b00d5a888c9bcc28661c08b675f242f6f4a7046a09f90eb45cecedd1->leave($__internal_ae87c9c9b00d5a888c9bcc28661c08b675f242f6f4a7046a09f90eb45cecedd1_prof);

        
        $__internal_f95b71f771a5db9ed1b8b6ae11d8174ed2de870adb8a68ed8632d7289dcfa88b->leave($__internal_f95b71f771a5db9ed1b8b6ae11d8174ed2de870adb8a68ed8632d7289dcfa88b_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_59b73dbf11a9b8e9abdebe69cc53e191ce620820f738543e2f3267b3c01c584b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b73dbf11a9b8e9abdebe69cc53e191ce620820f738543e2f3267b3c01c584b->enter($__internal_59b73dbf11a9b8e9abdebe69cc53e191ce620820f738543e2f3267b3c01c584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c98e848495cf144aa6b0b25063dd783651f95a97a775453c19ece34226ba3767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98e848495cf144aa6b0b25063dd783651f95a97a775453c19ece34226ba3767->enter($__internal_c98e848495cf144aa6b0b25063dd783651f95a97a775453c19ece34226ba3767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c98e848495cf144aa6b0b25063dd783651f95a97a775453c19ece34226ba3767->leave($__internal_c98e848495cf144aa6b0b25063dd783651f95a97a775453c19ece34226ba3767_prof);

        
        $__internal_59b73dbf11a9b8e9abdebe69cc53e191ce620820f738543e2f3267b3c01c584b->leave($__internal_59b73dbf11a9b8e9abdebe69cc53e191ce620820f738543e2f3267b3c01c584b_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_205fdb1f761c4d8da133afb3d0e3c4953ab641eee679e1e60988512714f9b1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205fdb1f761c4d8da133afb3d0e3c4953ab641eee679e1e60988512714f9b1d8->enter($__internal_205fdb1f761c4d8da133afb3d0e3c4953ab641eee679e1e60988512714f9b1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_158aec9e20c3d3fe3032e58cdbe668b4e84656eec12bad7cc77a445fc8e9e8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158aec9e20c3d3fe3032e58cdbe668b4e84656eec12bad7cc77a445fc8e9e8b8->enter($__internal_158aec9e20c3d3fe3032e58cdbe668b4e84656eec12bad7cc77a445fc8e9e8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_158aec9e20c3d3fe3032e58cdbe668b4e84656eec12bad7cc77a445fc8e9e8b8->leave($__internal_158aec9e20c3d3fe3032e58cdbe668b4e84656eec12bad7cc77a445fc8e9e8b8_prof);

        
        $__internal_205fdb1f761c4d8da133afb3d0e3c4953ab641eee679e1e60988512714f9b1d8->leave($__internal_205fdb1f761c4d8da133afb3d0e3c4953ab641eee679e1e60988512714f9b1d8_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_38c6a7fb4cb900fcff7e0bc549f3c278a4f33b8726c8bb0b7536ca673004ee77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c6a7fb4cb900fcff7e0bc549f3c278a4f33b8726c8bb0b7536ca673004ee77->enter($__internal_38c6a7fb4cb900fcff7e0bc549f3c278a4f33b8726c8bb0b7536ca673004ee77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ab48ce58fcb745002deb231f545f439e2b3204717370625605d881667c140cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab48ce58fcb745002deb231f545f439e2b3204717370625605d881667c140cf8->enter($__internal_ab48ce58fcb745002deb231f545f439e2b3204717370625605d881667c140cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_ab48ce58fcb745002deb231f545f439e2b3204717370625605d881667c140cf8->leave($__internal_ab48ce58fcb745002deb231f545f439e2b3204717370625605d881667c140cf8_prof);

        
        $__internal_38c6a7fb4cb900fcff7e0bc549f3c278a4f33b8726c8bb0b7536ca673004ee77->leave($__internal_38c6a7fb4cb900fcff7e0bc549f3c278a4f33b8726c8bb0b7536ca673004ee77_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7badc9dfca4566793fc9edf7d6eb768712ecd4687a7a9e1095abb899ddd354d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7badc9dfca4566793fc9edf7d6eb768712ecd4687a7a9e1095abb899ddd354d9->enter($__internal_7badc9dfca4566793fc9edf7d6eb768712ecd4687a7a9e1095abb899ddd354d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_29f7366dd1ab086499609b5c971929f96aaeac7c75eb5742e92f2a7bfad30de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f7366dd1ab086499609b5c971929f96aaeac7c75eb5742e92f2a7bfad30de5->enter($__internal_29f7366dd1ab086499609b5c971929f96aaeac7c75eb5742e92f2a7bfad30de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_29f7366dd1ab086499609b5c971929f96aaeac7c75eb5742e92f2a7bfad30de5->leave($__internal_29f7366dd1ab086499609b5c971929f96aaeac7c75eb5742e92f2a7bfad30de5_prof);

        
        $__internal_7badc9dfca4566793fc9edf7d6eb768712ecd4687a7a9e1095abb899ddd354d9->leave($__internal_7badc9dfca4566793fc9edf7d6eb768712ecd4687a7a9e1095abb899ddd354d9_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_ce852ab130d71c50e98e0d1bd64ae7585895f4784e93f558bb50a9debd69a37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce852ab130d71c50e98e0d1bd64ae7585895f4784e93f558bb50a9debd69a37b->enter($__internal_ce852ab130d71c50e98e0d1bd64ae7585895f4784e93f558bb50a9debd69a37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_a1fe24c7ccb26a46fff4e0bbfd6b2375c5b1008a066fe20aedb5f470a128b920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fe24c7ccb26a46fff4e0bbfd6b2375c5b1008a066fe20aedb5f470a128b920->enter($__internal_a1fe24c7ccb26a46fff4e0bbfd6b2375c5b1008a066fe20aedb5f470a128b920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_a1fe24c7ccb26a46fff4e0bbfd6b2375c5b1008a066fe20aedb5f470a128b920->leave($__internal_a1fe24c7ccb26a46fff4e0bbfd6b2375c5b1008a066fe20aedb5f470a128b920_prof);

        
        $__internal_ce852ab130d71c50e98e0d1bd64ae7585895f4784e93f558bb50a9debd69a37b->leave($__internal_ce852ab130d71c50e98e0d1bd64ae7585895f4784e93f558bb50a9debd69a37b_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_cbf759b552ff4953fad4a963047af064e6a1ef7dca9317a83a17622fd8fba297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf759b552ff4953fad4a963047af064e6a1ef7dca9317a83a17622fd8fba297->enter($__internal_cbf759b552ff4953fad4a963047af064e6a1ef7dca9317a83a17622fd8fba297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f2811f0e15635de6b0d16294a1cd5034030801d7e590cd4f11164a2fdccaeb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2811f0e15635de6b0d16294a1cd5034030801d7e590cd4f11164a2fdccaeb36->enter($__internal_f2811f0e15635de6b0d16294a1cd5034030801d7e590cd4f11164a2fdccaeb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_f2811f0e15635de6b0d16294a1cd5034030801d7e590cd4f11164a2fdccaeb36->leave($__internal_f2811f0e15635de6b0d16294a1cd5034030801d7e590cd4f11164a2fdccaeb36_prof);

        
        $__internal_cbf759b552ff4953fad4a963047af064e6a1ef7dca9317a83a17622fd8fba297->leave($__internal_cbf759b552ff4953fad4a963047af064e6a1ef7dca9317a83a17622fd8fba297_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_638a80d1cb81c12c8bd8a3aad38c28b6441c0726cfcea6fd4f7e15b334bd94da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638a80d1cb81c12c8bd8a3aad38c28b6441c0726cfcea6fd4f7e15b334bd94da->enter($__internal_638a80d1cb81c12c8bd8a3aad38c28b6441c0726cfcea6fd4f7e15b334bd94da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_8df2fdcb3c0b8d7083cabd1893a9ab1068e79101ca5b1e761eb0aeb891e38728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df2fdcb3c0b8d7083cabd1893a9ab1068e79101ca5b1e761eb0aeb891e38728->enter($__internal_8df2fdcb3c0b8d7083cabd1893a9ab1068e79101ca5b1e761eb0aeb891e38728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_8df2fdcb3c0b8d7083cabd1893a9ab1068e79101ca5b1e761eb0aeb891e38728->leave($__internal_8df2fdcb3c0b8d7083cabd1893a9ab1068e79101ca5b1e761eb0aeb891e38728_prof);

        
        $__internal_638a80d1cb81c12c8bd8a3aad38c28b6441c0726cfcea6fd4f7e15b334bd94da->leave($__internal_638a80d1cb81c12c8bd8a3aad38c28b6441c0726cfcea6fd4f7e15b334bd94da_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_30ae4d0d682dda76d24bccdaeb3bb27a66a85606e69f9073c81c34e8a8d4e12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ae4d0d682dda76d24bccdaeb3bb27a66a85606e69f9073c81c34e8a8d4e12c->enter($__internal_30ae4d0d682dda76d24bccdaeb3bb27a66a85606e69f9073c81c34e8a8d4e12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_68e16a78c659db404349e8fe69e6d3d4bc51fbd2e166b1d7efdb6fa796b4e7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e16a78c659db404349e8fe69e6d3d4bc51fbd2e166b1d7efdb6fa796b4e7da->enter($__internal_68e16a78c659db404349e8fe69e6d3d4bc51fbd2e166b1d7efdb6fa796b4e7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_68e16a78c659db404349e8fe69e6d3d4bc51fbd2e166b1d7efdb6fa796b4e7da->leave($__internal_68e16a78c659db404349e8fe69e6d3d4bc51fbd2e166b1d7efdb6fa796b4e7da_prof);

        
        $__internal_30ae4d0d682dda76d24bccdaeb3bb27a66a85606e69f9073c81c34e8a8d4e12c->leave($__internal_30ae4d0d682dda76d24bccdaeb3bb27a66a85606e69f9073c81c34e8a8d4e12c_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b0c21151e56828ea1ac7f9c0f2bfa639f2ad8524c578a82a9a39714642463b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c21151e56828ea1ac7f9c0f2bfa639f2ad8524c578a82a9a39714642463b6a->enter($__internal_b0c21151e56828ea1ac7f9c0f2bfa639f2ad8524c578a82a9a39714642463b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e99a7f21b578c21fe8c1c33cdd437279be48d54c73b236c211c7e2cd33c0ee2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99a7f21b578c21fe8c1c33cdd437279be48d54c73b236c211c7e2cd33c0ee2b->enter($__internal_e99a7f21b578c21fe8c1c33cdd437279be48d54c73b236c211c7e2cd33c0ee2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_e99a7f21b578c21fe8c1c33cdd437279be48d54c73b236c211c7e2cd33c0ee2b->leave($__internal_e99a7f21b578c21fe8c1c33cdd437279be48d54c73b236c211c7e2cd33c0ee2b_prof);

        
        $__internal_b0c21151e56828ea1ac7f9c0f2bfa639f2ad8524c578a82a9a39714642463b6a->leave($__internal_b0c21151e56828ea1ac7f9c0f2bfa639f2ad8524c578a82a9a39714642463b6a_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7131de323c4c30f01a44befa59a5b52e3d62b3b16b3b749c1a3f09cd8cae83c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7131de323c4c30f01a44befa59a5b52e3d62b3b16b3b749c1a3f09cd8cae83c1->enter($__internal_7131de323c4c30f01a44befa59a5b52e3d62b3b16b3b749c1a3f09cd8cae83c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e30fd7cbc6a83866dfde8e0002591b8fb95c0328640e5f849817f4dd3efbefaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30fd7cbc6a83866dfde8e0002591b8fb95c0328640e5f849817f4dd3efbefaa->enter($__internal_e30fd7cbc6a83866dfde8e0002591b8fb95c0328640e5f849817f4dd3efbefaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e30fd7cbc6a83866dfde8e0002591b8fb95c0328640e5f849817f4dd3efbefaa->leave($__internal_e30fd7cbc6a83866dfde8e0002591b8fb95c0328640e5f849817f4dd3efbefaa_prof);

        
        $__internal_7131de323c4c30f01a44befa59a5b52e3d62b3b16b3b749c1a3f09cd8cae83c1->leave($__internal_7131de323c4c30f01a44befa59a5b52e3d62b3b16b3b749c1a3f09cd8cae83c1_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_74b20555032a1ed3a7ef9b98ca859d66db4fe7cddbd598c27da195b074ccae63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b20555032a1ed3a7ef9b98ca859d66db4fe7cddbd598c27da195b074ccae63->enter($__internal_74b20555032a1ed3a7ef9b98ca859d66db4fe7cddbd598c27da195b074ccae63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_62c6fd8bfdedef5b055f656d9a65a44c4c982001b6348634fa0668f04ec836ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c6fd8bfdedef5b055f656d9a65a44c4c982001b6348634fa0668f04ec836ce->enter($__internal_62c6fd8bfdedef5b055f656d9a65a44c4c982001b6348634fa0668f04ec836ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_62c6fd8bfdedef5b055f656d9a65a44c4c982001b6348634fa0668f04ec836ce->leave($__internal_62c6fd8bfdedef5b055f656d9a65a44c4c982001b6348634fa0668f04ec836ce_prof);

        
        $__internal_74b20555032a1ed3a7ef9b98ca859d66db4fe7cddbd598c27da195b074ccae63->leave($__internal_74b20555032a1ed3a7ef9b98ca859d66db4fe7cddbd598c27da195b074ccae63_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2647f1544d2cb0c598a5d685be642bfb8d1a44007546ebf6b7e8a6f3f87f87f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2647f1544d2cb0c598a5d685be642bfb8d1a44007546ebf6b7e8a6f3f87f87f9->enter($__internal_2647f1544d2cb0c598a5d685be642bfb8d1a44007546ebf6b7e8a6f3f87f87f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b8b95df1bbd14c71914d0a6f6410b05b51666766de6b2511a0c153f5e440a6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b95df1bbd14c71914d0a6f6410b05b51666766de6b2511a0c153f5e440a6aa->enter($__internal_b8b95df1bbd14c71914d0a6f6410b05b51666766de6b2511a0c153f5e440a6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b8b95df1bbd14c71914d0a6f6410b05b51666766de6b2511a0c153f5e440a6aa->leave($__internal_b8b95df1bbd14c71914d0a6f6410b05b51666766de6b2511a0c153f5e440a6aa_prof);

        
        $__internal_2647f1544d2cb0c598a5d685be642bfb8d1a44007546ebf6b7e8a6f3f87f87f9->leave($__internal_2647f1544d2cb0c598a5d685be642bfb8d1a44007546ebf6b7e8a6f3f87f87f9_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_98ca53dfa923b215f571b82a56ce6d79e8e03fd795f3ae979c9f7a9158c2e0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ca53dfa923b215f571b82a56ce6d79e8e03fd795f3ae979c9f7a9158c2e0ef->enter($__internal_98ca53dfa923b215f571b82a56ce6d79e8e03fd795f3ae979c9f7a9158c2e0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6014aca4292bc8e220f148ef4d1660517793c8b021878488ddc90d444afdaf5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6014aca4292bc8e220f148ef4d1660517793c8b021878488ddc90d444afdaf5c->enter($__internal_6014aca4292bc8e220f148ef4d1660517793c8b021878488ddc90d444afdaf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6014aca4292bc8e220f148ef4d1660517793c8b021878488ddc90d444afdaf5c->leave($__internal_6014aca4292bc8e220f148ef4d1660517793c8b021878488ddc90d444afdaf5c_prof);

        
        $__internal_98ca53dfa923b215f571b82a56ce6d79e8e03fd795f3ae979c9f7a9158c2e0ef->leave($__internal_98ca53dfa923b215f571b82a56ce6d79e8e03fd795f3ae979c9f7a9158c2e0ef_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f4d732e7836ad38e9e8682ed6eba19be9835348e7ff72a0ae772c04a9d595ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d732e7836ad38e9e8682ed6eba19be9835348e7ff72a0ae772c04a9d595ad0->enter($__internal_f4d732e7836ad38e9e8682ed6eba19be9835348e7ff72a0ae772c04a9d595ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f393864f803b039c34e0f77e5ac7f7f7f8261fe51d62044d1ff0e897a57a69d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f393864f803b039c34e0f77e5ac7f7f7f8261fe51d62044d1ff0e897a57a69d9->enter($__internal_f393864f803b039c34e0f77e5ac7f7f7f8261fe51d62044d1ff0e897a57a69d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f393864f803b039c34e0f77e5ac7f7f7f8261fe51d62044d1ff0e897a57a69d9->leave($__internal_f393864f803b039c34e0f77e5ac7f7f7f8261fe51d62044d1ff0e897a57a69d9_prof);

        
        $__internal_f4d732e7836ad38e9e8682ed6eba19be9835348e7ff72a0ae772c04a9d595ad0->leave($__internal_f4d732e7836ad38e9e8682ed6eba19be9835348e7ff72a0ae772c04a9d595ad0_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ea584a3f97de2d0315d738ecea1368d53c1a5bb27102e9caf10494700f36da62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea584a3f97de2d0315d738ecea1368d53c1a5bb27102e9caf10494700f36da62->enter($__internal_ea584a3f97de2d0315d738ecea1368d53c1a5bb27102e9caf10494700f36da62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1b541cb11acea78f3e778e48087487dac90fae94026113f4bb5940b67b2c7b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b541cb11acea78f3e778e48087487dac90fae94026113f4bb5940b67b2c7b28->enter($__internal_1b541cb11acea78f3e778e48087487dac90fae94026113f4bb5940b67b2c7b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1b541cb11acea78f3e778e48087487dac90fae94026113f4bb5940b67b2c7b28->leave($__internal_1b541cb11acea78f3e778e48087487dac90fae94026113f4bb5940b67b2c7b28_prof);

        
        $__internal_ea584a3f97de2d0315d738ecea1368d53c1a5bb27102e9caf10494700f36da62->leave($__internal_ea584a3f97de2d0315d738ecea1368d53c1a5bb27102e9caf10494700f36da62_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_73ce0b0a326933fedb4a4491c702843e3252c726b69b81a3129452e615ed960d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ce0b0a326933fedb4a4491c702843e3252c726b69b81a3129452e615ed960d->enter($__internal_73ce0b0a326933fedb4a4491c702843e3252c726b69b81a3129452e615ed960d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c80fcde6a65fb66d649106500e8f4b4fe25a31e4edf2dc825443fa2b9cfbdab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80fcde6a65fb66d649106500e8f4b4fe25a31e4edf2dc825443fa2b9cfbdab6->enter($__internal_c80fcde6a65fb66d649106500e8f4b4fe25a31e4edf2dc825443fa2b9cfbdab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_c80fcde6a65fb66d649106500e8f4b4fe25a31e4edf2dc825443fa2b9cfbdab6->leave($__internal_c80fcde6a65fb66d649106500e8f4b4fe25a31e4edf2dc825443fa2b9cfbdab6_prof);

        
        $__internal_73ce0b0a326933fedb4a4491c702843e3252c726b69b81a3129452e615ed960d->leave($__internal_73ce0b0a326933fedb4a4491c702843e3252c726b69b81a3129452e615ed960d_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ff9ad78266da923373b60481399ec0a951742bc8d8bb5f2a1567c499371070ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9ad78266da923373b60481399ec0a951742bc8d8bb5f2a1567c499371070ea->enter($__internal_ff9ad78266da923373b60481399ec0a951742bc8d8bb5f2a1567c499371070ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_de23594b3d9c6944f68acca6f2118864090b7f5f164db0bee1883d874bdc0bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de23594b3d9c6944f68acca6f2118864090b7f5f164db0bee1883d874bdc0bf9->enter($__internal_de23594b3d9c6944f68acca6f2118864090b7f5f164db0bee1883d874bdc0bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_de23594b3d9c6944f68acca6f2118864090b7f5f164db0bee1883d874bdc0bf9->leave($__internal_de23594b3d9c6944f68acca6f2118864090b7f5f164db0bee1883d874bdc0bf9_prof);

        
        $__internal_ff9ad78266da923373b60481399ec0a951742bc8d8bb5f2a1567c499371070ea->leave($__internal_ff9ad78266da923373b60481399ec0a951742bc8d8bb5f2a1567c499371070ea_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a9b806ce2c9eb1efcecdda0c994684d70128a410244807be1d353100c9bb880e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b806ce2c9eb1efcecdda0c994684d70128a410244807be1d353100c9bb880e->enter($__internal_a9b806ce2c9eb1efcecdda0c994684d70128a410244807be1d353100c9bb880e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d5afdf4af30cbd991151ba44d82ed84fb993a96186b027028c148578aa52bff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5afdf4af30cbd991151ba44d82ed84fb993a96186b027028c148578aa52bff5->enter($__internal_d5afdf4af30cbd991151ba44d82ed84fb993a96186b027028c148578aa52bff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d5afdf4af30cbd991151ba44d82ed84fb993a96186b027028c148578aa52bff5->leave($__internal_d5afdf4af30cbd991151ba44d82ed84fb993a96186b027028c148578aa52bff5_prof);

        
        $__internal_a9b806ce2c9eb1efcecdda0c994684d70128a410244807be1d353100c9bb880e->leave($__internal_a9b806ce2c9eb1efcecdda0c994684d70128a410244807be1d353100c9bb880e_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_40fdd0a0210069609b930f8403557b407e736964838a7c24e90756ab12f42327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40fdd0a0210069609b930f8403557b407e736964838a7c24e90756ab12f42327->enter($__internal_40fdd0a0210069609b930f8403557b407e736964838a7c24e90756ab12f42327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_c1e2b48bf88c0fb3bdaead854d8b82261dfa0611be0e8053e84d9ac8d80abe12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e2b48bf88c0fb3bdaead854d8b82261dfa0611be0e8053e84d9ac8d80abe12->enter($__internal_c1e2b48bf88c0fb3bdaead854d8b82261dfa0611be0e8053e84d9ac8d80abe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c1e2b48bf88c0fb3bdaead854d8b82261dfa0611be0e8053e84d9ac8d80abe12->leave($__internal_c1e2b48bf88c0fb3bdaead854d8b82261dfa0611be0e8053e84d9ac8d80abe12_prof);

        
        $__internal_40fdd0a0210069609b930f8403557b407e736964838a7c24e90756ab12f42327->leave($__internal_40fdd0a0210069609b930f8403557b407e736964838a7c24e90756ab12f42327_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4672ca45fb0d5f977adcf71e5bb7cf82fa824caeee1cceaa5b7f2940aefddefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4672ca45fb0d5f977adcf71e5bb7cf82fa824caeee1cceaa5b7f2940aefddefb->enter($__internal_4672ca45fb0d5f977adcf71e5bb7cf82fa824caeee1cceaa5b7f2940aefddefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_f7663f8478b6c2a0c3ebd7fce363137df7bb9dcdfae3c5f0627a1534c9e60881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7663f8478b6c2a0c3ebd7fce363137df7bb9dcdfae3c5f0627a1534c9e60881->enter($__internal_f7663f8478b6c2a0c3ebd7fce363137df7bb9dcdfae3c5f0627a1534c9e60881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f7663f8478b6c2a0c3ebd7fce363137df7bb9dcdfae3c5f0627a1534c9e60881->leave($__internal_f7663f8478b6c2a0c3ebd7fce363137df7bb9dcdfae3c5f0627a1534c9e60881_prof);

        
        $__internal_4672ca45fb0d5f977adcf71e5bb7cf82fa824caeee1cceaa5b7f2940aefddefb->leave($__internal_4672ca45fb0d5f977adcf71e5bb7cf82fa824caeee1cceaa5b7f2940aefddefb_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3bc83275d3d5120c4878daf01998e0a93e0e14ba426f01b0bf6697b80bd81746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc83275d3d5120c4878daf01998e0a93e0e14ba426f01b0bf6697b80bd81746->enter($__internal_3bc83275d3d5120c4878daf01998e0a93e0e14ba426f01b0bf6697b80bd81746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f89f6e188fd258a28bce09059cc100b323d13331a45f9e59aae422929d261a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89f6e188fd258a28bce09059cc100b323d13331a45f9e59aae422929d261a03->enter($__internal_f89f6e188fd258a28bce09059cc100b323d13331a45f9e59aae422929d261a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_f89f6e188fd258a28bce09059cc100b323d13331a45f9e59aae422929d261a03->leave($__internal_f89f6e188fd258a28bce09059cc100b323d13331a45f9e59aae422929d261a03_prof);

        
        $__internal_3bc83275d3d5120c4878daf01998e0a93e0e14ba426f01b0bf6697b80bd81746->leave($__internal_3bc83275d3d5120c4878daf01998e0a93e0e14ba426f01b0bf6697b80bd81746_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3720eb305d3de9aa516a8691a457c32b75283af70684704b76029c36dc0b0233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3720eb305d3de9aa516a8691a457c32b75283af70684704b76029c36dc0b0233->enter($__internal_3720eb305d3de9aa516a8691a457c32b75283af70684704b76029c36dc0b0233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_72f756d78f967125774f4dea089aaf5a8abc318c9baba7811184058a3f7bc29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f756d78f967125774f4dea089aaf5a8abc318c9baba7811184058a3f7bc29c->enter($__internal_72f756d78f967125774f4dea089aaf5a8abc318c9baba7811184058a3f7bc29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_72f756d78f967125774f4dea089aaf5a8abc318c9baba7811184058a3f7bc29c->leave($__internal_72f756d78f967125774f4dea089aaf5a8abc318c9baba7811184058a3f7bc29c_prof);

        
        $__internal_3720eb305d3de9aa516a8691a457c32b75283af70684704b76029c36dc0b0233->leave($__internal_3720eb305d3de9aa516a8691a457c32b75283af70684704b76029c36dc0b0233_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3bfe621f374268e7052715201a406f0ec534cdb3062f188ee0326da2085d6d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfe621f374268e7052715201a406f0ec534cdb3062f188ee0326da2085d6d92->enter($__internal_3bfe621f374268e7052715201a406f0ec534cdb3062f188ee0326da2085d6d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_f2a0d58f1129532dd830f9418833ad0e042238404ae52c44b54cec5898301ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a0d58f1129532dd830f9418833ad0e042238404ae52c44b54cec5898301ab3->enter($__internal_f2a0d58f1129532dd830f9418833ad0e042238404ae52c44b54cec5898301ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_f2a0d58f1129532dd830f9418833ad0e042238404ae52c44b54cec5898301ab3->leave($__internal_f2a0d58f1129532dd830f9418833ad0e042238404ae52c44b54cec5898301ab3_prof);

        
        $__internal_3bfe621f374268e7052715201a406f0ec534cdb3062f188ee0326da2085d6d92->leave($__internal_3bfe621f374268e7052715201a406f0ec534cdb3062f188ee0326da2085d6d92_prof);

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
