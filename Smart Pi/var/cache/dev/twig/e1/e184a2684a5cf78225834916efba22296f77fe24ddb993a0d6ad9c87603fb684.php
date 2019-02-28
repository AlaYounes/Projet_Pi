<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ecae74c45609d50bec35dee73863f31d8db37a7cd7d5426d49ba17423f411817 extends Twig_Template
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
        $__internal_6edd2b8ea9306be31b3a74dbd483c9504b6415a87486a3ef02a09038af13411c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edd2b8ea9306be31b3a74dbd483c9504b6415a87486a3ef02a09038af13411c->enter($__internal_6edd2b8ea9306be31b3a74dbd483c9504b6415a87486a3ef02a09038af13411c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_efe4b162d330ead5909a0f94c3386f7d95d28dab036ccc97c79c26dc66e8aed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe4b162d330ead5909a0f94c3386f7d95d28dab036ccc97c79c26dc66e8aed7->enter($__internal_efe4b162d330ead5909a0f94c3386f7d95d28dab036ccc97c79c26dc66e8aed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6edd2b8ea9306be31b3a74dbd483c9504b6415a87486a3ef02a09038af13411c->leave($__internal_6edd2b8ea9306be31b3a74dbd483c9504b6415a87486a3ef02a09038af13411c_prof);

        
        $__internal_efe4b162d330ead5909a0f94c3386f7d95d28dab036ccc97c79c26dc66e8aed7->leave($__internal_efe4b162d330ead5909a0f94c3386f7d95d28dab036ccc97c79c26dc66e8aed7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
