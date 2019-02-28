<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fa7ccb7b175c5f64410bfde6d96227f78103f37d3c595729f235270975b7fce8 extends Twig_Template
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
        $__internal_6ec40efbf2630797682e97c417bbce037332e13d7ff7e7675ec21ff29272ed4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec40efbf2630797682e97c417bbce037332e13d7ff7e7675ec21ff29272ed4c->enter($__internal_6ec40efbf2630797682e97c417bbce037332e13d7ff7e7675ec21ff29272ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8b7b6c7ccd3b3d95a09393bf7b19af30ef6ca9ea92b13b2de6787695d9c90f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7b6c7ccd3b3d95a09393bf7b19af30ef6ca9ea92b13b2de6787695d9c90f65->enter($__internal_8b7b6c7ccd3b3d95a09393bf7b19af30ef6ca9ea92b13b2de6787695d9c90f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6ec40efbf2630797682e97c417bbce037332e13d7ff7e7675ec21ff29272ed4c->leave($__internal_6ec40efbf2630797682e97c417bbce037332e13d7ff7e7675ec21ff29272ed4c_prof);

        
        $__internal_8b7b6c7ccd3b3d95a09393bf7b19af30ef6ca9ea92b13b2de6787695d9c90f65->leave($__internal_8b7b6c7ccd3b3d95a09393bf7b19af30ef6ca9ea92b13b2de6787695d9c90f65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
