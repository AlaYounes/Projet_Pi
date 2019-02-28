<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9f91ba77bb0dc08ae39c1f12d4adcf194c33ef057fae61fce7bb26fa3765d279 extends Twig_Template
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
        $__internal_45a1584f7eb6d93fbd6a07daffac7d89f0eaa169dc8d4e2dccd5573d915ae615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a1584f7eb6d93fbd6a07daffac7d89f0eaa169dc8d4e2dccd5573d915ae615->enter($__internal_45a1584f7eb6d93fbd6a07daffac7d89f0eaa169dc8d4e2dccd5573d915ae615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_366d16bcf585accbbd81c8231987d45953a329f3dc48b60584c9fd9ac5bd72a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366d16bcf585accbbd81c8231987d45953a329f3dc48b60584c9fd9ac5bd72a9->enter($__internal_366d16bcf585accbbd81c8231987d45953a329f3dc48b60584c9fd9ac5bd72a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_45a1584f7eb6d93fbd6a07daffac7d89f0eaa169dc8d4e2dccd5573d915ae615->leave($__internal_45a1584f7eb6d93fbd6a07daffac7d89f0eaa169dc8d4e2dccd5573d915ae615_prof);

        
        $__internal_366d16bcf585accbbd81c8231987d45953a329f3dc48b60584c9fd9ac5bd72a9->leave($__internal_366d16bcf585accbbd81c8231987d45953a329f3dc48b60584c9fd9ac5bd72a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
