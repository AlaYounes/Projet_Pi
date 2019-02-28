<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cfdfd30ad11b122cdb1d828eb491ec582794bfd8016df1529c6d98406a2ddcd2 extends Twig_Template
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
        $__internal_daad9b4370f66c5ee17c28602864908d6548217b2f35daac7976f21c64af278c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daad9b4370f66c5ee17c28602864908d6548217b2f35daac7976f21c64af278c->enter($__internal_daad9b4370f66c5ee17c28602864908d6548217b2f35daac7976f21c64af278c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0217ed0e5f022f76be92fd5405928ab8d40636969d9a488f142c00cd26394565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0217ed0e5f022f76be92fd5405928ab8d40636969d9a488f142c00cd26394565->enter($__internal_0217ed0e5f022f76be92fd5405928ab8d40636969d9a488f142c00cd26394565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_daad9b4370f66c5ee17c28602864908d6548217b2f35daac7976f21c64af278c->leave($__internal_daad9b4370f66c5ee17c28602864908d6548217b2f35daac7976f21c64af278c_prof);

        
        $__internal_0217ed0e5f022f76be92fd5405928ab8d40636969d9a488f142c00cd26394565->leave($__internal_0217ed0e5f022f76be92fd5405928ab8d40636969d9a488f142c00cd26394565_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
