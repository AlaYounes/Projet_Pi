<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a35762aa3f51fa25a7a5fae843220629e49cbbe57c41cacf1f15db353359a5fc extends Twig_Template
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
        $__internal_a7edb2a58662d407c5090d530304286bc98dc32ac669a5f7cd94480f6f7f0b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7edb2a58662d407c5090d530304286bc98dc32ac669a5f7cd94480f6f7f0b0f->enter($__internal_a7edb2a58662d407c5090d530304286bc98dc32ac669a5f7cd94480f6f7f0b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_2674c03a26674fab163f401a22f3ba2a8d68e404d63e578d474e951c415a7bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2674c03a26674fab163f401a22f3ba2a8d68e404d63e578d474e951c415a7bcd->enter($__internal_2674c03a26674fab163f401a22f3ba2a8d68e404d63e578d474e951c415a7bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a7edb2a58662d407c5090d530304286bc98dc32ac669a5f7cd94480f6f7f0b0f->leave($__internal_a7edb2a58662d407c5090d530304286bc98dc32ac669a5f7cd94480f6f7f0b0f_prof);

        
        $__internal_2674c03a26674fab163f401a22f3ba2a8d68e404d63e578d474e951c415a7bcd->leave($__internal_2674c03a26674fab163f401a22f3ba2a8d68e404d63e578d474e951c415a7bcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
