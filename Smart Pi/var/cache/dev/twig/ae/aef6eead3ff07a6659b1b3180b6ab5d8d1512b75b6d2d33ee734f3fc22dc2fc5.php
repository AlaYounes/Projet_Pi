<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8972a2205b7eb4c6e4982a0d73d18bdd9c4ce7aa96016806c1eb53193126f8f0 extends Twig_Template
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
        $__internal_c988d94355ffec12f6e7e3fe8f9ab40f1082468357ba98bd40e696a91b3dad7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c988d94355ffec12f6e7e3fe8f9ab40f1082468357ba98bd40e696a91b3dad7e->enter($__internal_c988d94355ffec12f6e7e3fe8f9ab40f1082468357ba98bd40e696a91b3dad7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_00ebc8e38044b0c34807d18475aee2add2db679220f81df45106b32d5d76aa94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ebc8e38044b0c34807d18475aee2add2db679220f81df45106b32d5d76aa94->enter($__internal_00ebc8e38044b0c34807d18475aee2add2db679220f81df45106b32d5d76aa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c988d94355ffec12f6e7e3fe8f9ab40f1082468357ba98bd40e696a91b3dad7e->leave($__internal_c988d94355ffec12f6e7e3fe8f9ab40f1082468357ba98bd40e696a91b3dad7e_prof);

        
        $__internal_00ebc8e38044b0c34807d18475aee2add2db679220f81df45106b32d5d76aa94->leave($__internal_00ebc8e38044b0c34807d18475aee2add2db679220f81df45106b32d5d76aa94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
