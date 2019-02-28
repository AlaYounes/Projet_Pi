<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_87efdcd8380c4e431a35f8062c0a70ee8c176889e2560dbf1dfebcd6c077cc06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2515b107bf7f60bf423b5ff8dc9e295a17a72f1017e70101cfc5de7f767bb65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2515b107bf7f60bf423b5ff8dc9e295a17a72f1017e70101cfc5de7f767bb65->enter($__internal_e2515b107bf7f60bf423b5ff8dc9e295a17a72f1017e70101cfc5de7f767bb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_12dcc5569cddb6e973760b1a0ea36336e9fe7815b232514da7097c0cbd285e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12dcc5569cddb6e973760b1a0ea36336e9fe7815b232514da7097c0cbd285e3c->enter($__internal_12dcc5569cddb6e973760b1a0ea36336e9fe7815b232514da7097c0cbd285e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2515b107bf7f60bf423b5ff8dc9e295a17a72f1017e70101cfc5de7f767bb65->leave($__internal_e2515b107bf7f60bf423b5ff8dc9e295a17a72f1017e70101cfc5de7f767bb65_prof);

        
        $__internal_12dcc5569cddb6e973760b1a0ea36336e9fe7815b232514da7097c0cbd285e3c->leave($__internal_12dcc5569cddb6e973760b1a0ea36336e9fe7815b232514da7097c0cbd285e3c_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_13704191909595705d65ab66a26b343ca99203b9d707c020263d161d6915336c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13704191909595705d65ab66a26b343ca99203b9d707c020263d161d6915336c->enter($__internal_13704191909595705d65ab66a26b343ca99203b9d707c020263d161d6915336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e03d1f158521e6b0f857eaa44047a7ff8597c8a00c036bba468eacc816782812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03d1f158521e6b0f857eaa44047a7ff8597c8a00c036bba468eacc816782812->enter($__internal_e03d1f158521e6b0f857eaa44047a7ff8597c8a00c036bba468eacc816782812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e03d1f158521e6b0f857eaa44047a7ff8597c8a00c036bba468eacc816782812->leave($__internal_e03d1f158521e6b0f857eaa44047a7ff8597c8a00c036bba468eacc816782812_prof);

        
        $__internal_13704191909595705d65ab66a26b343ca99203b9d707c020263d161d6915336c->leave($__internal_13704191909595705d65ab66a26b343ca99203b9d707c020263d161d6915336c_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c6913e60ae35108df035708183bd1530c7b7ba7cc40fa627aa90cd0c35c131b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6913e60ae35108df035708183bd1530c7b7ba7cc40fa627aa90cd0c35c131b2->enter($__internal_c6913e60ae35108df035708183bd1530c7b7ba7cc40fa627aa90cd0c35c131b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_0ccf7ef8bf7fbb25d2203209c20fe0958f8f152b54d1cf3e2884f64ddf655f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccf7ef8bf7fbb25d2203209c20fe0958f8f152b54d1cf3e2884f64ddf655f6b->enter($__internal_0ccf7ef8bf7fbb25d2203209c20fe0958f8f152b54d1cf3e2884f64ddf655f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_0ccf7ef8bf7fbb25d2203209c20fe0958f8f152b54d1cf3e2884f64ddf655f6b->leave($__internal_0ccf7ef8bf7fbb25d2203209c20fe0958f8f152b54d1cf3e2884f64ddf655f6b_prof);

        
        $__internal_c6913e60ae35108df035708183bd1530c7b7ba7cc40fa627aa90cd0c35c131b2->leave($__internal_c6913e60ae35108df035708183bd1530c7b7ba7cc40fa627aa90cd0c35c131b2_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_47bf6f56c4863c861d3d7c948282e7a6ed7a604c6139d387ee7d2984692fd5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bf6f56c4863c861d3d7c948282e7a6ed7a604c6139d387ee7d2984692fd5c1->enter($__internal_47bf6f56c4863c861d3d7c948282e7a6ed7a604c6139d387ee7d2984692fd5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_4627b0ec83eadcd209e4b950e6016925aecc92f5e0055fba43946754511bb962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4627b0ec83eadcd209e4b950e6016925aecc92f5e0055fba43946754511bb962->enter($__internal_4627b0ec83eadcd209e4b950e6016925aecc92f5e0055fba43946754511bb962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_4627b0ec83eadcd209e4b950e6016925aecc92f5e0055fba43946754511bb962->leave($__internal_4627b0ec83eadcd209e4b950e6016925aecc92f5e0055fba43946754511bb962_prof);

        
        $__internal_47bf6f56c4863c861d3d7c948282e7a6ed7a604c6139d387ee7d2984692fd5c1->leave($__internal_47bf6f56c4863c861d3d7c948282e7a6ed7a604c6139d387ee7d2984692fd5c1_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_5155b464488a28c6957dd335eea993e359fd7c94ae093f25ff9f8bb8097d1cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5155b464488a28c6957dd335eea993e359fd7c94ae093f25ff9f8bb8097d1cfa->enter($__internal_5155b464488a28c6957dd335eea993e359fd7c94ae093f25ff9f8bb8097d1cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a6148917b80f00d098a32a7cfb54017c610340809a73b87b9050fc5541c10dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6148917b80f00d098a32a7cfb54017c610340809a73b87b9050fc5541c10dc4->enter($__internal_a6148917b80f00d098a32a7cfb54017c610340809a73b87b9050fc5541c10dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_a6148917b80f00d098a32a7cfb54017c610340809a73b87b9050fc5541c10dc4->leave($__internal_a6148917b80f00d098a32a7cfb54017c610340809a73b87b9050fc5541c10dc4_prof);

        
        $__internal_5155b464488a28c6957dd335eea993e359fd7c94ae093f25ff9f8bb8097d1cfa->leave($__internal_5155b464488a28c6957dd335eea993e359fd7c94ae093f25ff9f8bb8097d1cfa_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ea89b42e6886acf7f8749e3db2b02395b623b5bc7b5d56fcc5f1263ebd3e571d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea89b42e6886acf7f8749e3db2b02395b623b5bc7b5d56fcc5f1263ebd3e571d->enter($__internal_ea89b42e6886acf7f8749e3db2b02395b623b5bc7b5d56fcc5f1263ebd3e571d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a022f888677ce3ec12c8d4aae015c3e62797ef16d0680b41dc49298125b49bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a022f888677ce3ec12c8d4aae015c3e62797ef16d0680b41dc49298125b49bb5->enter($__internal_a022f888677ce3ec12c8d4aae015c3e62797ef16d0680b41dc49298125b49bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_a022f888677ce3ec12c8d4aae015c3e62797ef16d0680b41dc49298125b49bb5->leave($__internal_a022f888677ce3ec12c8d4aae015c3e62797ef16d0680b41dc49298125b49bb5_prof);

        
        $__internal_ea89b42e6886acf7f8749e3db2b02395b623b5bc7b5d56fcc5f1263ebd3e571d->leave($__internal_ea89b42e6886acf7f8749e3db2b02395b623b5bc7b5d56fcc5f1263ebd3e571d_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_c166a4f9320769ad45a3f2123b4aaf8b911f2e190bfc419de75fe5a12479aa89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c166a4f9320769ad45a3f2123b4aaf8b911f2e190bfc419de75fe5a12479aa89->enter($__internal_c166a4f9320769ad45a3f2123b4aaf8b911f2e190bfc419de75fe5a12479aa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_bb0e79f98c3fb26817cc1ae109991e0d3fb2004854d00f9817ad2f65e08d2d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0e79f98c3fb26817cc1ae109991e0d3fb2004854d00f9817ad2f65e08d2d2d->enter($__internal_bb0e79f98c3fb26817cc1ae109991e0d3fb2004854d00f9817ad2f65e08d2d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_bb0e79f98c3fb26817cc1ae109991e0d3fb2004854d00f9817ad2f65e08d2d2d->leave($__internal_bb0e79f98c3fb26817cc1ae109991e0d3fb2004854d00f9817ad2f65e08d2d2d_prof);

        
        $__internal_c166a4f9320769ad45a3f2123b4aaf8b911f2e190bfc419de75fe5a12479aa89->leave($__internal_c166a4f9320769ad45a3f2123b4aaf8b911f2e190bfc419de75fe5a12479aa89_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e32865da321d25cc3fb84ba3fc312f1fed046efd18cebc9918034fc2d1ecefbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32865da321d25cc3fb84ba3fc312f1fed046efd18cebc9918034fc2d1ecefbb->enter($__internal_e32865da321d25cc3fb84ba3fc312f1fed046efd18cebc9918034fc2d1ecefbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_e2597585e187ddc43d43ed6ed6240ec46a2ea4ad6b869c078d83e83413479095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2597585e187ddc43d43ed6ed6240ec46a2ea4ad6b869c078d83e83413479095->enter($__internal_e2597585e187ddc43d43ed6ed6240ec46a2ea4ad6b869c078d83e83413479095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_e2597585e187ddc43d43ed6ed6240ec46a2ea4ad6b869c078d83e83413479095->leave($__internal_e2597585e187ddc43d43ed6ed6240ec46a2ea4ad6b869c078d83e83413479095_prof);

        
        $__internal_e32865da321d25cc3fb84ba3fc312f1fed046efd18cebc9918034fc2d1ecefbb->leave($__internal_e32865da321d25cc3fb84ba3fc312f1fed046efd18cebc9918034fc2d1ecefbb_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3c466118f8a1a490aedc15a2d6106577d2f71b60f13e63f49e8e1a86cbcd80a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c466118f8a1a490aedc15a2d6106577d2f71b60f13e63f49e8e1a86cbcd80a0->enter($__internal_3c466118f8a1a490aedc15a2d6106577d2f71b60f13e63f49e8e1a86cbcd80a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_b3075cf14009ecbf3fec13842110833650806baf856f4b3a39310ccedeabb385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3075cf14009ecbf3fec13842110833650806baf856f4b3a39310ccedeabb385->enter($__internal_b3075cf14009ecbf3fec13842110833650806baf856f4b3a39310ccedeabb385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_b3075cf14009ecbf3fec13842110833650806baf856f4b3a39310ccedeabb385->leave($__internal_b3075cf14009ecbf3fec13842110833650806baf856f4b3a39310ccedeabb385_prof);

        
        $__internal_3c466118f8a1a490aedc15a2d6106577d2f71b60f13e63f49e8e1a86cbcd80a0->leave($__internal_3c466118f8a1a490aedc15a2d6106577d2f71b60f13e63f49e8e1a86cbcd80a0_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f9a79143c7bf6076f8c8215cc212a598fff765f3552858218bf6981741b7ca4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a79143c7bf6076f8c8215cc212a598fff765f3552858218bf6981741b7ca4d->enter($__internal_f9a79143c7bf6076f8c8215cc212a598fff765f3552858218bf6981741b7ca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f8bb8654f146a18478d5524ef86b79d2b0554b4f4f0c9a92dcaa517fc77f9fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bb8654f146a18478d5524ef86b79d2b0554b4f4f0c9a92dcaa517fc77f9fd8->enter($__internal_f8bb8654f146a18478d5524ef86b79d2b0554b4f4f0c9a92dcaa517fc77f9fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_f8bb8654f146a18478d5524ef86b79d2b0554b4f4f0c9a92dcaa517fc77f9fd8->leave($__internal_f8bb8654f146a18478d5524ef86b79d2b0554b4f4f0c9a92dcaa517fc77f9fd8_prof);

        
        $__internal_f9a79143c7bf6076f8c8215cc212a598fff765f3552858218bf6981741b7ca4d->leave($__internal_f9a79143c7bf6076f8c8215cc212a598fff765f3552858218bf6981741b7ca4d_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ff110c0ee12a85a6cec10d7794f8f6f78f2aeece385b7ede0f19cc2335469aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff110c0ee12a85a6cec10d7794f8f6f78f2aeece385b7ede0f19cc2335469aa0->enter($__internal_ff110c0ee12a85a6cec10d7794f8f6f78f2aeece385b7ede0f19cc2335469aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_0baa42a0578f6c24eeee0def35f4db63261dcf7a9a2f30c08a6b302602f81007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0baa42a0578f6c24eeee0def35f4db63261dcf7a9a2f30c08a6b302602f81007->enter($__internal_0baa42a0578f6c24eeee0def35f4db63261dcf7a9a2f30c08a6b302602f81007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_0baa42a0578f6c24eeee0def35f4db63261dcf7a9a2f30c08a6b302602f81007->leave($__internal_0baa42a0578f6c24eeee0def35f4db63261dcf7a9a2f30c08a6b302602f81007_prof);

        
        $__internal_ff110c0ee12a85a6cec10d7794f8f6f78f2aeece385b7ede0f19cc2335469aa0->leave($__internal_ff110c0ee12a85a6cec10d7794f8f6f78f2aeece385b7ede0f19cc2335469aa0_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cef8a110850e2cd39a12fa4e572052cfcaf20db84422db276817ede3cbe5e1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef8a110850e2cd39a12fa4e572052cfcaf20db84422db276817ede3cbe5e1f2->enter($__internal_cef8a110850e2cd39a12fa4e572052cfcaf20db84422db276817ede3cbe5e1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_742c4c979ec1800bb6959973ee000379baccba78684d6c8b92b7425461079ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742c4c979ec1800bb6959973ee000379baccba78684d6c8b92b7425461079ab2->enter($__internal_742c4c979ec1800bb6959973ee000379baccba78684d6c8b92b7425461079ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_742c4c979ec1800bb6959973ee000379baccba78684d6c8b92b7425461079ab2->leave($__internal_742c4c979ec1800bb6959973ee000379baccba78684d6c8b92b7425461079ab2_prof);

        
        $__internal_cef8a110850e2cd39a12fa4e572052cfcaf20db84422db276817ede3cbe5e1f2->leave($__internal_cef8a110850e2cd39a12fa4e572052cfcaf20db84422db276817ede3cbe5e1f2_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_478397b7e9949808692acb0aca2fb6698a505317ed51cc19390f00f6a5e51d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478397b7e9949808692acb0aca2fb6698a505317ed51cc19390f00f6a5e51d34->enter($__internal_478397b7e9949808692acb0aca2fb6698a505317ed51cc19390f00f6a5e51d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6ec6dea87233ce28dd92e353ec95e2cf001b5c287396daac57913b7f4ff9c480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec6dea87233ce28dd92e353ec95e2cf001b5c287396daac57913b7f4ff9c480->enter($__internal_6ec6dea87233ce28dd92e353ec95e2cf001b5c287396daac57913b7f4ff9c480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_6ec6dea87233ce28dd92e353ec95e2cf001b5c287396daac57913b7f4ff9c480->leave($__internal_6ec6dea87233ce28dd92e353ec95e2cf001b5c287396daac57913b7f4ff9c480_prof);

        
        $__internal_478397b7e9949808692acb0aca2fb6698a505317ed51cc19390f00f6a5e51d34->leave($__internal_478397b7e9949808692acb0aca2fb6698a505317ed51cc19390f00f6a5e51d34_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cd94b496400b6948a2fbdab86b24cb13eefdd70b1413f9c319a7c7c7b3717f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd94b496400b6948a2fbdab86b24cb13eefdd70b1413f9c319a7c7c7b3717f24->enter($__internal_cd94b496400b6948a2fbdab86b24cb13eefdd70b1413f9c319a7c7c7b3717f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f08bdb500fcd6d1c89bf34fa22775eb53f87be142f3fd7e9ab1745b407216b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08bdb500fcd6d1c89bf34fa22775eb53f87be142f3fd7e9ab1745b407216b36->enter($__internal_f08bdb500fcd6d1c89bf34fa22775eb53f87be142f3fd7e9ab1745b407216b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_f08bdb500fcd6d1c89bf34fa22775eb53f87be142f3fd7e9ab1745b407216b36->leave($__internal_f08bdb500fcd6d1c89bf34fa22775eb53f87be142f3fd7e9ab1745b407216b36_prof);

        
        $__internal_cd94b496400b6948a2fbdab86b24cb13eefdd70b1413f9c319a7c7c7b3717f24->leave($__internal_cd94b496400b6948a2fbdab86b24cb13eefdd70b1413f9c319a7c7c7b3717f24_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_9b1a047f918e434176bb7ef13305f52bc9bf3403e9ded129c7b7bbcbe0c3150c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1a047f918e434176bb7ef13305f52bc9bf3403e9ded129c7b7bbcbe0c3150c->enter($__internal_9b1a047f918e434176bb7ef13305f52bc9bf3403e9ded129c7b7bbcbe0c3150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9b8e897875cc424b4c0d3c9328750cc41665723f7c2e163cf0bd954c6a489e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8e897875cc424b4c0d3c9328750cc41665723f7c2e163cf0bd954c6a489e09->enter($__internal_9b8e897875cc424b4c0d3c9328750cc41665723f7c2e163cf0bd954c6a489e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9b8e897875cc424b4c0d3c9328750cc41665723f7c2e163cf0bd954c6a489e09->leave($__internal_9b8e897875cc424b4c0d3c9328750cc41665723f7c2e163cf0bd954c6a489e09_prof);

        
        $__internal_9b1a047f918e434176bb7ef13305f52bc9bf3403e9ded129c7b7bbcbe0c3150c->leave($__internal_9b1a047f918e434176bb7ef13305f52bc9bf3403e9ded129c7b7bbcbe0c3150c_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_d256306fe479da3f216f87113022dad78613beac845ec8a07520690b5c0c8d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d256306fe479da3f216f87113022dad78613beac845ec8a07520690b5c0c8d1f->enter($__internal_d256306fe479da3f216f87113022dad78613beac845ec8a07520690b5c0c8d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_caef91c8418cd4a70157795a397547836c9dc45698850d205447ba3883051c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caef91c8418cd4a70157795a397547836c9dc45698850d205447ba3883051c77->enter($__internal_caef91c8418cd4a70157795a397547836c9dc45698850d205447ba3883051c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_caef91c8418cd4a70157795a397547836c9dc45698850d205447ba3883051c77->leave($__internal_caef91c8418cd4a70157795a397547836c9dc45698850d205447ba3883051c77_prof);

        
        $__internal_d256306fe479da3f216f87113022dad78613beac845ec8a07520690b5c0c8d1f->leave($__internal_d256306fe479da3f216f87113022dad78613beac845ec8a07520690b5c0c8d1f_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_be20351313a1ac03f0270aaebb594254a11e205fff7a7d60e5fa14344b6a02d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be20351313a1ac03f0270aaebb594254a11e205fff7a7d60e5fa14344b6a02d1->enter($__internal_be20351313a1ac03f0270aaebb594254a11e205fff7a7d60e5fa14344b6a02d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e17e448ffb0cfa499d756f3f59e4bec171f0e5a097ee32b6268a541e2597782a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17e448ffb0cfa499d756f3f59e4bec171f0e5a097ee32b6268a541e2597782a->enter($__internal_e17e448ffb0cfa499d756f3f59e4bec171f0e5a097ee32b6268a541e2597782a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e17e448ffb0cfa499d756f3f59e4bec171f0e5a097ee32b6268a541e2597782a->leave($__internal_e17e448ffb0cfa499d756f3f59e4bec171f0e5a097ee32b6268a541e2597782a_prof);

        
        $__internal_be20351313a1ac03f0270aaebb594254a11e205fff7a7d60e5fa14344b6a02d1->leave($__internal_be20351313a1ac03f0270aaebb594254a11e205fff7a7d60e5fa14344b6a02d1_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2bb32b1abb74290bf5cf7ad05b07dc7f0cd875174e5b01bdaf68569d0615d60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb32b1abb74290bf5cf7ad05b07dc7f0cd875174e5b01bdaf68569d0615d60f->enter($__internal_2bb32b1abb74290bf5cf7ad05b07dc7f0cd875174e5b01bdaf68569d0615d60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_618ad287f5402bc493ef0190a265bb653b252dc587a0ebd973a4b64a3d275be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618ad287f5402bc493ef0190a265bb653b252dc587a0ebd973a4b64a3d275be0->enter($__internal_618ad287f5402bc493ef0190a265bb653b252dc587a0ebd973a4b64a3d275be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_618ad287f5402bc493ef0190a265bb653b252dc587a0ebd973a4b64a3d275be0->leave($__internal_618ad287f5402bc493ef0190a265bb653b252dc587a0ebd973a4b64a3d275be0_prof);

        
        $__internal_2bb32b1abb74290bf5cf7ad05b07dc7f0cd875174e5b01bdaf68569d0615d60f->leave($__internal_2bb32b1abb74290bf5cf7ad05b07dc7f0cd875174e5b01bdaf68569d0615d60f_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_806f9b74f0f4d385233661c5230cf6614ab8fddb2f0119c63bc6bae9d2e622be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806f9b74f0f4d385233661c5230cf6614ab8fddb2f0119c63bc6bae9d2e622be->enter($__internal_806f9b74f0f4d385233661c5230cf6614ab8fddb2f0119c63bc6bae9d2e622be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_938c22de01e63efedd36ca9561b6142369619449587143d4b7ee1a5cda1a4295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938c22de01e63efedd36ca9561b6142369619449587143d4b7ee1a5cda1a4295->enter($__internal_938c22de01e63efedd36ca9561b6142369619449587143d4b7ee1a5cda1a4295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_938c22de01e63efedd36ca9561b6142369619449587143d4b7ee1a5cda1a4295->leave($__internal_938c22de01e63efedd36ca9561b6142369619449587143d4b7ee1a5cda1a4295_prof);

        
        $__internal_806f9b74f0f4d385233661c5230cf6614ab8fddb2f0119c63bc6bae9d2e622be->leave($__internal_806f9b74f0f4d385233661c5230cf6614ab8fddb2f0119c63bc6bae9d2e622be_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f50c4a3e4cd78c95437d030fea584f12677ce59943aa2c4807a12cf0204396ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50c4a3e4cd78c95437d030fea584f12677ce59943aa2c4807a12cf0204396ae->enter($__internal_f50c4a3e4cd78c95437d030fea584f12677ce59943aa2c4807a12cf0204396ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_a74056d378054ff3a268b8a197a392ea923936e4540b0cab7c060ffa000ed16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74056d378054ff3a268b8a197a392ea923936e4540b0cab7c060ffa000ed16a->enter($__internal_a74056d378054ff3a268b8a197a392ea923936e4540b0cab7c060ffa000ed16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a74056d378054ff3a268b8a197a392ea923936e4540b0cab7c060ffa000ed16a->leave($__internal_a74056d378054ff3a268b8a197a392ea923936e4540b0cab7c060ffa000ed16a_prof);

        
        $__internal_f50c4a3e4cd78c95437d030fea584f12677ce59943aa2c4807a12cf0204396ae->leave($__internal_f50c4a3e4cd78c95437d030fea584f12677ce59943aa2c4807a12cf0204396ae_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_fffa977a14854406aee205b59ad289d8147b5f129ad69d2142bfb14bd13e637d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fffa977a14854406aee205b59ad289d8147b5f129ad69d2142bfb14bd13e637d->enter($__internal_fffa977a14854406aee205b59ad289d8147b5f129ad69d2142bfb14bd13e637d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e8080560cbf45aae878f855bb2b0d9404facd02b7d56ec914af8a238fefcf104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8080560cbf45aae878f855bb2b0d9404facd02b7d56ec914af8a238fefcf104->enter($__internal_e8080560cbf45aae878f855bb2b0d9404facd02b7d56ec914af8a238fefcf104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e8080560cbf45aae878f855bb2b0d9404facd02b7d56ec914af8a238fefcf104->leave($__internal_e8080560cbf45aae878f855bb2b0d9404facd02b7d56ec914af8a238fefcf104_prof);

        
        $__internal_fffa977a14854406aee205b59ad289d8147b5f129ad69d2142bfb14bd13e637d->leave($__internal_fffa977a14854406aee205b59ad289d8147b5f129ad69d2142bfb14bd13e637d_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_faf10bb76af25a79ddac13ec87d3105e405e3706eac7d0aebd5dc018ce32b26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf10bb76af25a79ddac13ec87d3105e405e3706eac7d0aebd5dc018ce32b26b->enter($__internal_faf10bb76af25a79ddac13ec87d3105e405e3706eac7d0aebd5dc018ce32b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_652171091c08ede57b56e32852452b6563eac3f7f7e1fbb9aea3504b1b2116d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652171091c08ede57b56e32852452b6563eac3f7f7e1fbb9aea3504b1b2116d7->enter($__internal_652171091c08ede57b56e32852452b6563eac3f7f7e1fbb9aea3504b1b2116d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_652171091c08ede57b56e32852452b6563eac3f7f7e1fbb9aea3504b1b2116d7->leave($__internal_652171091c08ede57b56e32852452b6563eac3f7f7e1fbb9aea3504b1b2116d7_prof);

        
        $__internal_faf10bb76af25a79ddac13ec87d3105e405e3706eac7d0aebd5dc018ce32b26b->leave($__internal_faf10bb76af25a79ddac13ec87d3105e405e3706eac7d0aebd5dc018ce32b26b_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5d131d494f0936600657c237811c4ed04346da5ece01dd81fcf0a37378a0a5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d131d494f0936600657c237811c4ed04346da5ece01dd81fcf0a37378a0a5b5->enter($__internal_5d131d494f0936600657c237811c4ed04346da5ece01dd81fcf0a37378a0a5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_31e4395f474b150c78b8592b120f312382f93b34327b3efeda55ecccd4aafa13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e4395f474b150c78b8592b120f312382f93b34327b3efeda55ecccd4aafa13->enter($__internal_31e4395f474b150c78b8592b120f312382f93b34327b3efeda55ecccd4aafa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_31e4395f474b150c78b8592b120f312382f93b34327b3efeda55ecccd4aafa13->leave($__internal_31e4395f474b150c78b8592b120f312382f93b34327b3efeda55ecccd4aafa13_prof);

        
        $__internal_5d131d494f0936600657c237811c4ed04346da5ece01dd81fcf0a37378a0a5b5->leave($__internal_5d131d494f0936600657c237811c4ed04346da5ece01dd81fcf0a37378a0a5b5_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4b159c40b19efa741aff9621d49d3dc83cb904de873c42a7ad9e2749963a971a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b159c40b19efa741aff9621d49d3dc83cb904de873c42a7ad9e2749963a971a->enter($__internal_4b159c40b19efa741aff9621d49d3dc83cb904de873c42a7ad9e2749963a971a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_975da81396d23f470dbec02bae00ef3e16d895b44d6b683ea8228cbfbf6985dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975da81396d23f470dbec02bae00ef3e16d895b44d6b683ea8228cbfbf6985dc->enter($__internal_975da81396d23f470dbec02bae00ef3e16d895b44d6b683ea8228cbfbf6985dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_975da81396d23f470dbec02bae00ef3e16d895b44d6b683ea8228cbfbf6985dc->leave($__internal_975da81396d23f470dbec02bae00ef3e16d895b44d6b683ea8228cbfbf6985dc_prof);

        
        $__internal_4b159c40b19efa741aff9621d49d3dc83cb904de873c42a7ad9e2749963a971a->leave($__internal_4b159c40b19efa741aff9621d49d3dc83cb904de873c42a7ad9e2749963a971a_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ce3db81f9f7010280ed1b0de4371871b79b23a5ba0e0e4b5b79dbf019f184661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3db81f9f7010280ed1b0de4371871b79b23a5ba0e0e4b5b79dbf019f184661->enter($__internal_ce3db81f9f7010280ed1b0de4371871b79b23a5ba0e0e4b5b79dbf019f184661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9b886b2bdb587e1bc74ab451df7b38874fa63055bfaf5352eb7d41925bd0734f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b886b2bdb587e1bc74ab451df7b38874fa63055bfaf5352eb7d41925bd0734f->enter($__internal_9b886b2bdb587e1bc74ab451df7b38874fa63055bfaf5352eb7d41925bd0734f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_9b886b2bdb587e1bc74ab451df7b38874fa63055bfaf5352eb7d41925bd0734f->leave($__internal_9b886b2bdb587e1bc74ab451df7b38874fa63055bfaf5352eb7d41925bd0734f_prof);

        
        $__internal_ce3db81f9f7010280ed1b0de4371871b79b23a5ba0e0e4b5b79dbf019f184661->leave($__internal_ce3db81f9f7010280ed1b0de4371871b79b23a5ba0e0e4b5b79dbf019f184661_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fb8f2b6824759f514be583f12bf40b5f5056687bc7fc1de2be5ac1294f1b5eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8f2b6824759f514be583f12bf40b5f5056687bc7fc1de2be5ac1294f1b5eab->enter($__internal_fb8f2b6824759f514be583f12bf40b5f5056687bc7fc1de2be5ac1294f1b5eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6fcc2dbf2dc97974f2d805106fd497f3b8271bfcaba996831a961db17e122570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcc2dbf2dc97974f2d805106fd497f3b8271bfcaba996831a961db17e122570->enter($__internal_6fcc2dbf2dc97974f2d805106fd497f3b8271bfcaba996831a961db17e122570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_6fcc2dbf2dc97974f2d805106fd497f3b8271bfcaba996831a961db17e122570->leave($__internal_6fcc2dbf2dc97974f2d805106fd497f3b8271bfcaba996831a961db17e122570_prof);

        
        $__internal_fb8f2b6824759f514be583f12bf40b5f5056687bc7fc1de2be5ac1294f1b5eab->leave($__internal_fb8f2b6824759f514be583f12bf40b5f5056687bc7fc1de2be5ac1294f1b5eab_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
