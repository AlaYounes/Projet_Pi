<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_21ee75892baadec72f875390882293433f88119c5ef341de1fa4915a2092fecc extends Twig_Template
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
        $__internal_f38d8652a4cb1168aef62e6de0af54c93d6f084f5ebcec92662a927366101369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38d8652a4cb1168aef62e6de0af54c93d6f084f5ebcec92662a927366101369->enter($__internal_f38d8652a4cb1168aef62e6de0af54c93d6f084f5ebcec92662a927366101369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_05ce4fa0fce14f47d95b8fbe8c4d61d131195a879a471a7e3a031346dc16cb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ce4fa0fce14f47d95b8fbe8c4d61d131195a879a471a7e3a031346dc16cb1b->enter($__internal_05ce4fa0fce14f47d95b8fbe8c4d61d131195a879a471a7e3a031346dc16cb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f38d8652a4cb1168aef62e6de0af54c93d6f084f5ebcec92662a927366101369->leave($__internal_f38d8652a4cb1168aef62e6de0af54c93d6f084f5ebcec92662a927366101369_prof);

        
        $__internal_05ce4fa0fce14f47d95b8fbe8c4d61d131195a879a471a7e3a031346dc16cb1b->leave($__internal_05ce4fa0fce14f47d95b8fbe8c4d61d131195a879a471a7e3a031346dc16cb1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
