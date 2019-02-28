<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d2358a98c52ab8dd708325776640eb8a894c220d6113ceb071b1cf96f2a90e9b extends Twig_Template
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
        $__internal_9c952a706b64b2e6473c761abc5685d70099492f2381e8fa1c7de9fa258f0065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c952a706b64b2e6473c761abc5685d70099492f2381e8fa1c7de9fa258f0065->enter($__internal_9c952a706b64b2e6473c761abc5685d70099492f2381e8fa1c7de9fa258f0065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_23fd0f30009a2e8727c0ebf18ea15794b1ac03ef0e70966daaa4bda92bc480f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fd0f30009a2e8727c0ebf18ea15794b1ac03ef0e70966daaa4bda92bc480f4->enter($__internal_23fd0f30009a2e8727c0ebf18ea15794b1ac03ef0e70966daaa4bda92bc480f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9c952a706b64b2e6473c761abc5685d70099492f2381e8fa1c7de9fa258f0065->leave($__internal_9c952a706b64b2e6473c761abc5685d70099492f2381e8fa1c7de9fa258f0065_prof);

        
        $__internal_23fd0f30009a2e8727c0ebf18ea15794b1ac03ef0e70966daaa4bda92bc480f4->leave($__internal_23fd0f30009a2e8727c0ebf18ea15794b1ac03ef0e70966daaa4bda92bc480f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
