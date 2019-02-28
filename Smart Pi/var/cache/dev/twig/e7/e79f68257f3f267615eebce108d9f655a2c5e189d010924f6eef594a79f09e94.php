<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4929aab5c4dbd65c48775d27e7cdb8d10bbdc7fd5b9aae050f8b9da954a94a49 extends Twig_Template
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
        $__internal_9120df9fac49faf0a483639be478d4ce890cada6ff20249651a0264f80049017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9120df9fac49faf0a483639be478d4ce890cada6ff20249651a0264f80049017->enter($__internal_9120df9fac49faf0a483639be478d4ce890cada6ff20249651a0264f80049017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c24dd60a33dd5f08fa2c59f759746479745a280ec0306295278cea9f6107849a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24dd60a33dd5f08fa2c59f759746479745a280ec0306295278cea9f6107849a->enter($__internal_c24dd60a33dd5f08fa2c59f759746479745a280ec0306295278cea9f6107849a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9120df9fac49faf0a483639be478d4ce890cada6ff20249651a0264f80049017->leave($__internal_9120df9fac49faf0a483639be478d4ce890cada6ff20249651a0264f80049017_prof);

        
        $__internal_c24dd60a33dd5f08fa2c59f759746479745a280ec0306295278cea9f6107849a->leave($__internal_c24dd60a33dd5f08fa2c59f759746479745a280ec0306295278cea9f6107849a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
