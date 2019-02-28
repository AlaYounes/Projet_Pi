<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7ae8c5774a39ac7f7eb14d60c0d7481b773feacf537c5c4710e3dc7b60d07af6 extends Twig_Template
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
        $__internal_0d2e4effc1d3a68803a5784415be867be171c29269e1d4e906c90a85aad3fe91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2e4effc1d3a68803a5784415be867be171c29269e1d4e906c90a85aad3fe91->enter($__internal_0d2e4effc1d3a68803a5784415be867be171c29269e1d4e906c90a85aad3fe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6a9067293f8620242793c5f4a170df8dfbc78c43ab332cc0b2fddd4ff3c77d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9067293f8620242793c5f4a170df8dfbc78c43ab332cc0b2fddd4ff3c77d62->enter($__internal_6a9067293f8620242793c5f4a170df8dfbc78c43ab332cc0b2fddd4ff3c77d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0d2e4effc1d3a68803a5784415be867be171c29269e1d4e906c90a85aad3fe91->leave($__internal_0d2e4effc1d3a68803a5784415be867be171c29269e1d4e906c90a85aad3fe91_prof);

        
        $__internal_6a9067293f8620242793c5f4a170df8dfbc78c43ab332cc0b2fddd4ff3c77d62->leave($__internal_6a9067293f8620242793c5f4a170df8dfbc78c43ab332cc0b2fddd4ff3c77d62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
