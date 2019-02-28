<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_79dc8222263349312d5a4dabfb49e35dd2447f16243b950cc0ac9ab30601f251 extends Twig_Template
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
        $__internal_a1c4a9bf077adc2db3df0ff2143f6aa057ffb50ff306af69898168358c43f9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c4a9bf077adc2db3df0ff2143f6aa057ffb50ff306af69898168358c43f9c8->enter($__internal_a1c4a9bf077adc2db3df0ff2143f6aa057ffb50ff306af69898168358c43f9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5bb03df157dc56e27ff01d84eb2455c1f9d5be215dbc2b56c45332017de5d45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb03df157dc56e27ff01d84eb2455c1f9d5be215dbc2b56c45332017de5d45f->enter($__internal_5bb03df157dc56e27ff01d84eb2455c1f9d5be215dbc2b56c45332017de5d45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a1c4a9bf077adc2db3df0ff2143f6aa057ffb50ff306af69898168358c43f9c8->leave($__internal_a1c4a9bf077adc2db3df0ff2143f6aa057ffb50ff306af69898168358c43f9c8_prof);

        
        $__internal_5bb03df157dc56e27ff01d84eb2455c1f9d5be215dbc2b56c45332017de5d45f->leave($__internal_5bb03df157dc56e27ff01d84eb2455c1f9d5be215dbc2b56c45332017de5d45f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
