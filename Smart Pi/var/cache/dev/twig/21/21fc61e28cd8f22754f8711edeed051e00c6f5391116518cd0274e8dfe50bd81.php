<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fe245285e848114b35769c3cbf28d00a711f484d55f0b4890ea28b3ecd3ed927 extends Twig_Template
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
        $__internal_32e9ee543302affec113a5e24c70a3fe68dd99d5cff3a9a9c4bab13ca7831694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e9ee543302affec113a5e24c70a3fe68dd99d5cff3a9a9c4bab13ca7831694->enter($__internal_32e9ee543302affec113a5e24c70a3fe68dd99d5cff3a9a9c4bab13ca7831694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_fd8a9872ebf36da9111869b19455fe67e4ace5a4f8d6036c6f2e0420572919ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8a9872ebf36da9111869b19455fe67e4ace5a4f8d6036c6f2e0420572919ff->enter($__internal_fd8a9872ebf36da9111869b19455fe67e4ace5a4f8d6036c6f2e0420572919ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_32e9ee543302affec113a5e24c70a3fe68dd99d5cff3a9a9c4bab13ca7831694->leave($__internal_32e9ee543302affec113a5e24c70a3fe68dd99d5cff3a9a9c4bab13ca7831694_prof);

        
        $__internal_fd8a9872ebf36da9111869b19455fe67e4ace5a4f8d6036c6f2e0420572919ff->leave($__internal_fd8a9872ebf36da9111869b19455fe67e4ace5a4f8d6036c6f2e0420572919ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
