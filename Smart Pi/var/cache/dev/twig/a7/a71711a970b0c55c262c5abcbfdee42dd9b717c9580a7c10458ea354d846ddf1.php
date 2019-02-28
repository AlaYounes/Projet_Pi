<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b3e8c0ae3f83499bb7de78e7efe5f06332bb78dbe0d8410a43a096665e716726 extends Twig_Template
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
        $__internal_aca3f2b33271737f30a6f6d2d1ac47bd440245232a42ea3e9dd796bfe81c892c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca3f2b33271737f30a6f6d2d1ac47bd440245232a42ea3e9dd796bfe81c892c->enter($__internal_aca3f2b33271737f30a6f6d2d1ac47bd440245232a42ea3e9dd796bfe81c892c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_83ef1a8690df186075a3e7b91c9221cfbdc148f5e19b5126f89e586b63d7e325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ef1a8690df186075a3e7b91c9221cfbdc148f5e19b5126f89e586b63d7e325->enter($__internal_83ef1a8690df186075a3e7b91c9221cfbdc148f5e19b5126f89e586b63d7e325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_aca3f2b33271737f30a6f6d2d1ac47bd440245232a42ea3e9dd796bfe81c892c->leave($__internal_aca3f2b33271737f30a6f6d2d1ac47bd440245232a42ea3e9dd796bfe81c892c_prof);

        
        $__internal_83ef1a8690df186075a3e7b91c9221cfbdc148f5e19b5126f89e586b63d7e325->leave($__internal_83ef1a8690df186075a3e7b91c9221cfbdc148f5e19b5126f89e586b63d7e325_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
