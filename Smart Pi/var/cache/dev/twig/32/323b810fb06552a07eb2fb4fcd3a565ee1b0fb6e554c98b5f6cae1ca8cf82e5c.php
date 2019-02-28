<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_38ae0f0cf91bd8761ed614e978dbed6c5f895c7c30ffff79404d29743b3aefe2 extends Twig_Template
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
        $__internal_a71edf96e3f887c3a4d56c8cb3b4b65da1ab2b053cff23ed551bfb5d6ded2fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71edf96e3f887c3a4d56c8cb3b4b65da1ab2b053cff23ed551bfb5d6ded2fdc->enter($__internal_a71edf96e3f887c3a4d56c8cb3b4b65da1ab2b053cff23ed551bfb5d6ded2fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3580832d0ca78dd084f427646f33fd2b86333983fc106f4dfc2ca341434fe5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3580832d0ca78dd084f427646f33fd2b86333983fc106f4dfc2ca341434fe5ed->enter($__internal_3580832d0ca78dd084f427646f33fd2b86333983fc106f4dfc2ca341434fe5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a71edf96e3f887c3a4d56c8cb3b4b65da1ab2b053cff23ed551bfb5d6ded2fdc->leave($__internal_a71edf96e3f887c3a4d56c8cb3b4b65da1ab2b053cff23ed551bfb5d6ded2fdc_prof);

        
        $__internal_3580832d0ca78dd084f427646f33fd2b86333983fc106f4dfc2ca341434fe5ed->leave($__internal_3580832d0ca78dd084f427646f33fd2b86333983fc106f4dfc2ca341434fe5ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
