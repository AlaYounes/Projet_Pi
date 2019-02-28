<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_203d4a283ceb3d0e7fc3834244937e472bace949de6d07ccb06c9f0ab2211778 extends Twig_Template
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
        $__internal_721e7f2222491c2e6b4032dc8a4604fb3818ecf21a706a5866b101cdc6d980be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721e7f2222491c2e6b4032dc8a4604fb3818ecf21a706a5866b101cdc6d980be->enter($__internal_721e7f2222491c2e6b4032dc8a4604fb3818ecf21a706a5866b101cdc6d980be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_01bfebdf9bfbdc496d0675dcf14cb8e0d3ee694b265d7ca3341d58bfa08754ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bfebdf9bfbdc496d0675dcf14cb8e0d3ee694b265d7ca3341d58bfa08754ac->enter($__internal_01bfebdf9bfbdc496d0675dcf14cb8e0d3ee694b265d7ca3341d58bfa08754ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_721e7f2222491c2e6b4032dc8a4604fb3818ecf21a706a5866b101cdc6d980be->leave($__internal_721e7f2222491c2e6b4032dc8a4604fb3818ecf21a706a5866b101cdc6d980be_prof);

        
        $__internal_01bfebdf9bfbdc496d0675dcf14cb8e0d3ee694b265d7ca3341d58bfa08754ac->leave($__internal_01bfebdf9bfbdc496d0675dcf14cb8e0d3ee694b265d7ca3341d58bfa08754ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
