<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_44ff25547aa9528619b439e07db7643ff3ced9345e222cee1770afacb90a8bd2 extends Twig_Template
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
        $__internal_54440c7fe60d76fff1827e84cb2a912ddec1c39ad8da2e89c5114109cec01681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54440c7fe60d76fff1827e84cb2a912ddec1c39ad8da2e89c5114109cec01681->enter($__internal_54440c7fe60d76fff1827e84cb2a912ddec1c39ad8da2e89c5114109cec01681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_416bf4b6dc220a6117b8c8a3de80fff738511b1ee493fd23542bfa0bd06cf770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416bf4b6dc220a6117b8c8a3de80fff738511b1ee493fd23542bfa0bd06cf770->enter($__internal_416bf4b6dc220a6117b8c8a3de80fff738511b1ee493fd23542bfa0bd06cf770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_54440c7fe60d76fff1827e84cb2a912ddec1c39ad8da2e89c5114109cec01681->leave($__internal_54440c7fe60d76fff1827e84cb2a912ddec1c39ad8da2e89c5114109cec01681_prof);

        
        $__internal_416bf4b6dc220a6117b8c8a3de80fff738511b1ee493fd23542bfa0bd06cf770->leave($__internal_416bf4b6dc220a6117b8c8a3de80fff738511b1ee493fd23542bfa0bd06cf770_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
