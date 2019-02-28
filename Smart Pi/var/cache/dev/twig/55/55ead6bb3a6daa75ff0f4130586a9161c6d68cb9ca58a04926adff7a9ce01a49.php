<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_acf0024a084bd939b194fa17a5dd0f403ba5484635aaeb056f4605235b79946d extends Twig_Template
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
        $__internal_a5add1c3e6c64a70add8da796b1e26fd27549859bc8a6008e903b8cd8f249c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5add1c3e6c64a70add8da796b1e26fd27549859bc8a6008e903b8cd8f249c65->enter($__internal_a5add1c3e6c64a70add8da796b1e26fd27549859bc8a6008e903b8cd8f249c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_67c74b08ab97b44c347e0c0fcbad5b09160163920995b7223fe8ca6d3618abfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c74b08ab97b44c347e0c0fcbad5b09160163920995b7223fe8ca6d3618abfb->enter($__internal_67c74b08ab97b44c347e0c0fcbad5b09160163920995b7223fe8ca6d3618abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a5add1c3e6c64a70add8da796b1e26fd27549859bc8a6008e903b8cd8f249c65->leave($__internal_a5add1c3e6c64a70add8da796b1e26fd27549859bc8a6008e903b8cd8f249c65_prof);

        
        $__internal_67c74b08ab97b44c347e0c0fcbad5b09160163920995b7223fe8ca6d3618abfb->leave($__internal_67c74b08ab97b44c347e0c0fcbad5b09160163920995b7223fe8ca6d3618abfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
