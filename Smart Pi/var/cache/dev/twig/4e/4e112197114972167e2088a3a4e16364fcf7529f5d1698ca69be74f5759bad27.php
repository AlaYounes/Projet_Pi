<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_866f12e76481e6f17b6e14125254ca2614e13d191267ca6cecd598c8cd627bc3 extends Twig_Template
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
        $__internal_1d8c606ea95f4ae0227edef5ae718a938c257eb2a8e54b05b4c9d8035d9b8690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8c606ea95f4ae0227edef5ae718a938c257eb2a8e54b05b4c9d8035d9b8690->enter($__internal_1d8c606ea95f4ae0227edef5ae718a938c257eb2a8e54b05b4c9d8035d9b8690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4f258b7bc59f23fb2ec4ca0346dd104e6c191cafb33155fdaceac7e6de266941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f258b7bc59f23fb2ec4ca0346dd104e6c191cafb33155fdaceac7e6de266941->enter($__internal_4f258b7bc59f23fb2ec4ca0346dd104e6c191cafb33155fdaceac7e6de266941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1d8c606ea95f4ae0227edef5ae718a938c257eb2a8e54b05b4c9d8035d9b8690->leave($__internal_1d8c606ea95f4ae0227edef5ae718a938c257eb2a8e54b05b4c9d8035d9b8690_prof);

        
        $__internal_4f258b7bc59f23fb2ec4ca0346dd104e6c191cafb33155fdaceac7e6de266941->leave($__internal_4f258b7bc59f23fb2ec4ca0346dd104e6c191cafb33155fdaceac7e6de266941_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
