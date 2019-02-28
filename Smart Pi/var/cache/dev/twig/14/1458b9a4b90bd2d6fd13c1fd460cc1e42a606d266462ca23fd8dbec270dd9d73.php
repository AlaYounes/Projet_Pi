<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a2b39b0e3f9c7ab82680ca729d9925bb91b71f77a10e02d1481946b649f63668 extends Twig_Template
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
        $__internal_9a6ef8d253d9bfaa582aa9a45c24ccb56d1c0d9ed91c77019fa84d81f5dac83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6ef8d253d9bfaa582aa9a45c24ccb56d1c0d9ed91c77019fa84d81f5dac83b->enter($__internal_9a6ef8d253d9bfaa582aa9a45c24ccb56d1c0d9ed91c77019fa84d81f5dac83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_29c9ebf869630b47b7f429af7da046c226e47ad729b6dca5d2f51d742b5255c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c9ebf869630b47b7f429af7da046c226e47ad729b6dca5d2f51d742b5255c8->enter($__internal_29c9ebf869630b47b7f429af7da046c226e47ad729b6dca5d2f51d742b5255c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9a6ef8d253d9bfaa582aa9a45c24ccb56d1c0d9ed91c77019fa84d81f5dac83b->leave($__internal_9a6ef8d253d9bfaa582aa9a45c24ccb56d1c0d9ed91c77019fa84d81f5dac83b_prof);

        
        $__internal_29c9ebf869630b47b7f429af7da046c226e47ad729b6dca5d2f51d742b5255c8->leave($__internal_29c9ebf869630b47b7f429af7da046c226e47ad729b6dca5d2f51d742b5255c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
