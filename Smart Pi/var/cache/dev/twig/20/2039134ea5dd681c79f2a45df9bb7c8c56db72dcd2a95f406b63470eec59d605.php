<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_21f4c4fe268376f3de6730636da661f1e8992de3af86e89fb32c66b92f2c96ff extends Twig_Template
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
        $__internal_27bbefa396156780572bfe28db345f0e18f5a6005d0b86c74c273edd7b9cb136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27bbefa396156780572bfe28db345f0e18f5a6005d0b86c74c273edd7b9cb136->enter($__internal_27bbefa396156780572bfe28db345f0e18f5a6005d0b86c74c273edd7b9cb136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_10c6a14df411502972b5a7cc858c9e10f01e99b79a1ca093c0a95983ed926e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c6a14df411502972b5a7cc858c9e10f01e99b79a1ca093c0a95983ed926e43->enter($__internal_10c6a14df411502972b5a7cc858c9e10f01e99b79a1ca093c0a95983ed926e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_27bbefa396156780572bfe28db345f0e18f5a6005d0b86c74c273edd7b9cb136->leave($__internal_27bbefa396156780572bfe28db345f0e18f5a6005d0b86c74c273edd7b9cb136_prof);

        
        $__internal_10c6a14df411502972b5a7cc858c9e10f01e99b79a1ca093c0a95983ed926e43->leave($__internal_10c6a14df411502972b5a7cc858c9e10f01e99b79a1ca093c0a95983ed926e43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
