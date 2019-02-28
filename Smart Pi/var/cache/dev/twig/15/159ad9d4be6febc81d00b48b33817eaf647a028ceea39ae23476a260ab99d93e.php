<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4655f882e0145e7b59f517e73ec85a3dfb21d7899b1dbf952e7c66b7cbd2d104 extends Twig_Template
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
        $__internal_3b3514cefc25aded1cf24a5a77279899ab6111ea3155d37c0d9709b443c76fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3514cefc25aded1cf24a5a77279899ab6111ea3155d37c0d9709b443c76fc6->enter($__internal_3b3514cefc25aded1cf24a5a77279899ab6111ea3155d37c0d9709b443c76fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a191b6e793f334cd027c3266bae9ddfa37ad6298bd33e1e58cf2ea6b83bf4280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a191b6e793f334cd027c3266bae9ddfa37ad6298bd33e1e58cf2ea6b83bf4280->enter($__internal_a191b6e793f334cd027c3266bae9ddfa37ad6298bd33e1e58cf2ea6b83bf4280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3b3514cefc25aded1cf24a5a77279899ab6111ea3155d37c0d9709b443c76fc6->leave($__internal_3b3514cefc25aded1cf24a5a77279899ab6111ea3155d37c0d9709b443c76fc6_prof);

        
        $__internal_a191b6e793f334cd027c3266bae9ddfa37ad6298bd33e1e58cf2ea6b83bf4280->leave($__internal_a191b6e793f334cd027c3266bae9ddfa37ad6298bd33e1e58cf2ea6b83bf4280_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
