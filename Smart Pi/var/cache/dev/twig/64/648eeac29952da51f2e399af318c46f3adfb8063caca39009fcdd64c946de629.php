<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_648eaa264dc1edf11deeb5fdfa68bec72867f83a41b323ed352b20a014df1397 extends Twig_Template
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
        $__internal_b03247c282266c4d47f360f6f6bb62ace641e8c6955a7d11675aee2ccc76bad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03247c282266c4d47f360f6f6bb62ace641e8c6955a7d11675aee2ccc76bad7->enter($__internal_b03247c282266c4d47f360f6f6bb62ace641e8c6955a7d11675aee2ccc76bad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_78ce730b71846247594a3203b9d27e197942d36c948f234c937653eda0e85a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ce730b71846247594a3203b9d27e197942d36c948f234c937653eda0e85a4b->enter($__internal_78ce730b71846247594a3203b9d27e197942d36c948f234c937653eda0e85a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b03247c282266c4d47f360f6f6bb62ace641e8c6955a7d11675aee2ccc76bad7->leave($__internal_b03247c282266c4d47f360f6f6bb62ace641e8c6955a7d11675aee2ccc76bad7_prof);

        
        $__internal_78ce730b71846247594a3203b9d27e197942d36c948f234c937653eda0e85a4b->leave($__internal_78ce730b71846247594a3203b9d27e197942d36c948f234c937653eda0e85a4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
