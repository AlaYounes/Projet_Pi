<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_c7b4f8830d23133c679e6e1d5114c83f7dcc9f3a946928deb9c4879274bb6a56 extends Twig_Template
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
        $__internal_9c4d053e2fde06477da10c6df3d1fe1853b935fc7dab5123bed0b1008c8105fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4d053e2fde06477da10c6df3d1fe1853b935fc7dab5123bed0b1008c8105fe->enter($__internal_9c4d053e2fde06477da10c6df3d1fe1853b935fc7dab5123bed0b1008c8105fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_58c29d90ebb2a584d310a276e037255f1d14533b276ab93e8683a50adbb3f956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c29d90ebb2a584d310a276e037255f1d14533b276ab93e8683a50adbb3f956->enter($__internal_58c29d90ebb2a584d310a276e037255f1d14533b276ab93e8683a50adbb3f956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9c4d053e2fde06477da10c6df3d1fe1853b935fc7dab5123bed0b1008c8105fe->leave($__internal_9c4d053e2fde06477da10c6df3d1fe1853b935fc7dab5123bed0b1008c8105fe_prof);

        
        $__internal_58c29d90ebb2a584d310a276e037255f1d14533b276ab93e8683a50adbb3f956->leave($__internal_58c29d90ebb2a584d310a276e037255f1d14533b276ab93e8683a50adbb3f956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
