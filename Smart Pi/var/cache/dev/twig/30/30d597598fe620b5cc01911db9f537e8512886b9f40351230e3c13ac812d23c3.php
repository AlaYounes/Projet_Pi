<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0ba36969e1d3c06e8c05c7ef176f6ffd403221faa4de4257f31e95bb2b33f685 extends Twig_Template
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
        $__internal_14cec0125d978fa30fa18529525f7fa7d6dddfdd0eef4944e607f1cee2f919d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cec0125d978fa30fa18529525f7fa7d6dddfdd0eef4944e607f1cee2f919d8->enter($__internal_14cec0125d978fa30fa18529525f7fa7d6dddfdd0eef4944e607f1cee2f919d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6bd594f708981daae7067b7b6374b84ddbd30ffd14bdbf493d97236c7445381b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd594f708981daae7067b7b6374b84ddbd30ffd14bdbf493d97236c7445381b->enter($__internal_6bd594f708981daae7067b7b6374b84ddbd30ffd14bdbf493d97236c7445381b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_14cec0125d978fa30fa18529525f7fa7d6dddfdd0eef4944e607f1cee2f919d8->leave($__internal_14cec0125d978fa30fa18529525f7fa7d6dddfdd0eef4944e607f1cee2f919d8_prof);

        
        $__internal_6bd594f708981daae7067b7b6374b84ddbd30ffd14bdbf493d97236c7445381b->leave($__internal_6bd594f708981daae7067b7b6374b84ddbd30ffd14bdbf493d97236c7445381b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
