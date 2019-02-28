<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_eeaea8aa064d282f80f24e8116501796066cc0e45ea6a85fd9ae67c917c388f6 extends Twig_Template
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
        $__internal_0fececd1da1231a5a42dd51b09b9d1b070c741cc6d490db2e77829de37a9b8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fececd1da1231a5a42dd51b09b9d1b070c741cc6d490db2e77829de37a9b8fe->enter($__internal_0fececd1da1231a5a42dd51b09b9d1b070c741cc6d490db2e77829de37a9b8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_38b94dc4ff4e6cfad0888b7c3df5ec6b71e2dd0ec8d30a7eda30e4dffe0e414e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b94dc4ff4e6cfad0888b7c3df5ec6b71e2dd0ec8d30a7eda30e4dffe0e414e->enter($__internal_38b94dc4ff4e6cfad0888b7c3df5ec6b71e2dd0ec8d30a7eda30e4dffe0e414e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0fececd1da1231a5a42dd51b09b9d1b070c741cc6d490db2e77829de37a9b8fe->leave($__internal_0fececd1da1231a5a42dd51b09b9d1b070c741cc6d490db2e77829de37a9b8fe_prof);

        
        $__internal_38b94dc4ff4e6cfad0888b7c3df5ec6b71e2dd0ec8d30a7eda30e4dffe0e414e->leave($__internal_38b94dc4ff4e6cfad0888b7c3df5ec6b71e2dd0ec8d30a7eda30e4dffe0e414e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
