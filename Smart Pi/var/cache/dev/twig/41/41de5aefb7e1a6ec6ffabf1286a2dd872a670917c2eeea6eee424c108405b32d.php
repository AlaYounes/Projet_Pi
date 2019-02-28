<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_71c3917741d7f77d9e8495446f8db1908b77a888935310f5930f5519cb44e63d extends Twig_Template
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
        $__internal_4a81e8627254ce0f4e7020fba75af7b5e71b6009313ad8f241cb209ea7802f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a81e8627254ce0f4e7020fba75af7b5e71b6009313ad8f241cb209ea7802f55->enter($__internal_4a81e8627254ce0f4e7020fba75af7b5e71b6009313ad8f241cb209ea7802f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ef4ebce57572b17e56c6015d42c20d10aa9ef35bad484059b2b341530ad81abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4ebce57572b17e56c6015d42c20d10aa9ef35bad484059b2b341530ad81abe->enter($__internal_ef4ebce57572b17e56c6015d42c20d10aa9ef35bad484059b2b341530ad81abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4a81e8627254ce0f4e7020fba75af7b5e71b6009313ad8f241cb209ea7802f55->leave($__internal_4a81e8627254ce0f4e7020fba75af7b5e71b6009313ad8f241cb209ea7802f55_prof);

        
        $__internal_ef4ebce57572b17e56c6015d42c20d10aa9ef35bad484059b2b341530ad81abe->leave($__internal_ef4ebce57572b17e56c6015d42c20d10aa9ef35bad484059b2b341530ad81abe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
