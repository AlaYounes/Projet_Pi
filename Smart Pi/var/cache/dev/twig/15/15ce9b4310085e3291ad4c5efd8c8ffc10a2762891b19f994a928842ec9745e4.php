<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8cfb4eb81e192b430a68817a2511e6eae2333c69fa5d79029f11df7d5e1f9f9c extends Twig_Template
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
        $__internal_64f89eccee49cfa28491d0f2a8e89e35798bed56af43fe2507d6d5935b9f29f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f89eccee49cfa28491d0f2a8e89e35798bed56af43fe2507d6d5935b9f29f8->enter($__internal_64f89eccee49cfa28491d0f2a8e89e35798bed56af43fe2507d6d5935b9f29f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_55f8699bed728d490b27ee263accd95f8cb5ec6f42c2c3587191d2f1165fba78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f8699bed728d490b27ee263accd95f8cb5ec6f42c2c3587191d2f1165fba78->enter($__internal_55f8699bed728d490b27ee263accd95f8cb5ec6f42c2c3587191d2f1165fba78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_64f89eccee49cfa28491d0f2a8e89e35798bed56af43fe2507d6d5935b9f29f8->leave($__internal_64f89eccee49cfa28491d0f2a8e89e35798bed56af43fe2507d6d5935b9f29f8_prof);

        
        $__internal_55f8699bed728d490b27ee263accd95f8cb5ec6f42c2c3587191d2f1165fba78->leave($__internal_55f8699bed728d490b27ee263accd95f8cb5ec6f42c2c3587191d2f1165fba78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
