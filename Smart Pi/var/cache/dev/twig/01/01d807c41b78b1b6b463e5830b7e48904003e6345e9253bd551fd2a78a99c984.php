<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_465255cb2149074233da1a557156d0ab9efd7c2d577eb74ef9195a6598ffa43c extends Twig_Template
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
        $__internal_51b7b7d9c6716cbe657450e34217583fe6047aee8bd67bb15cdb74ac9679d27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b7b7d9c6716cbe657450e34217583fe6047aee8bd67bb15cdb74ac9679d27f->enter($__internal_51b7b7d9c6716cbe657450e34217583fe6047aee8bd67bb15cdb74ac9679d27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e46723270c1b9db5ec7589c223e41bb6b76c7d58bf8ecc10859d8491b6931cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46723270c1b9db5ec7589c223e41bb6b76c7d58bf8ecc10859d8491b6931cb0->enter($__internal_e46723270c1b9db5ec7589c223e41bb6b76c7d58bf8ecc10859d8491b6931cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_51b7b7d9c6716cbe657450e34217583fe6047aee8bd67bb15cdb74ac9679d27f->leave($__internal_51b7b7d9c6716cbe657450e34217583fe6047aee8bd67bb15cdb74ac9679d27f_prof);

        
        $__internal_e46723270c1b9db5ec7589c223e41bb6b76c7d58bf8ecc10859d8491b6931cb0->leave($__internal_e46723270c1b9db5ec7589c223e41bb6b76c7d58bf8ecc10859d8491b6931cb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
