<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e598bfc6bf69dfa0c8db03527c301640f8dffd99a074fa87caaa9e24a6f9ddfa extends Twig_Template
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
        $__internal_3b4eee008eeb11af35dfb7993b7a6dd386baa24cb0ee27e44b9fa261bee2e97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4eee008eeb11af35dfb7993b7a6dd386baa24cb0ee27e44b9fa261bee2e97c->enter($__internal_3b4eee008eeb11af35dfb7993b7a6dd386baa24cb0ee27e44b9fa261bee2e97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_560c83d3dc47feb486bb7394b1947a26e6684cf41d7289003b36dab064c3c771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560c83d3dc47feb486bb7394b1947a26e6684cf41d7289003b36dab064c3c771->enter($__internal_560c83d3dc47feb486bb7394b1947a26e6684cf41d7289003b36dab064c3c771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3b4eee008eeb11af35dfb7993b7a6dd386baa24cb0ee27e44b9fa261bee2e97c->leave($__internal_3b4eee008eeb11af35dfb7993b7a6dd386baa24cb0ee27e44b9fa261bee2e97c_prof);

        
        $__internal_560c83d3dc47feb486bb7394b1947a26e6684cf41d7289003b36dab064c3c771->leave($__internal_560c83d3dc47feb486bb7394b1947a26e6684cf41d7289003b36dab064c3c771_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
