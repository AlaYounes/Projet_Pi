<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b9e88f9304e33447209581e54d7b5260e4770e5b16b76ed8131f3f20eea6db7d extends Twig_Template
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
        $__internal_c4277f8bd77aa75175874dd72493671a215637226cf8ce73fa0500200c136cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4277f8bd77aa75175874dd72493671a215637226cf8ce73fa0500200c136cc2->enter($__internal_c4277f8bd77aa75175874dd72493671a215637226cf8ce73fa0500200c136cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c865f4d09669badcf6ef53e3fb770f7b728264ca4e9765d9a308d919a7da13d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c865f4d09669badcf6ef53e3fb770f7b728264ca4e9765d9a308d919a7da13d6->enter($__internal_c865f4d09669badcf6ef53e3fb770f7b728264ca4e9765d9a308d919a7da13d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c4277f8bd77aa75175874dd72493671a215637226cf8ce73fa0500200c136cc2->leave($__internal_c4277f8bd77aa75175874dd72493671a215637226cf8ce73fa0500200c136cc2_prof);

        
        $__internal_c865f4d09669badcf6ef53e3fb770f7b728264ca4e9765d9a308d919a7da13d6->leave($__internal_c865f4d09669badcf6ef53e3fb770f7b728264ca4e9765d9a308d919a7da13d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
