<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4b42774d4e3e319be6ff6fc14cbd1c0563b9e2765bf184f28d13965317a6402e extends Twig_Template
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
        $__internal_0605e2ba89700230d9ad96ca72ebd2770ea640bd23e7775e56b536e4d8aa7f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0605e2ba89700230d9ad96ca72ebd2770ea640bd23e7775e56b536e4d8aa7f59->enter($__internal_0605e2ba89700230d9ad96ca72ebd2770ea640bd23e7775e56b536e4d8aa7f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ce7c194fc57b8c7c0a52cbb418dd6854d086224cdef8bbd4bc27064a415910ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7c194fc57b8c7c0a52cbb418dd6854d086224cdef8bbd4bc27064a415910ff->enter($__internal_ce7c194fc57b8c7c0a52cbb418dd6854d086224cdef8bbd4bc27064a415910ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0605e2ba89700230d9ad96ca72ebd2770ea640bd23e7775e56b536e4d8aa7f59->leave($__internal_0605e2ba89700230d9ad96ca72ebd2770ea640bd23e7775e56b536e4d8aa7f59_prof);

        
        $__internal_ce7c194fc57b8c7c0a52cbb418dd6854d086224cdef8bbd4bc27064a415910ff->leave($__internal_ce7c194fc57b8c7c0a52cbb418dd6854d086224cdef8bbd4bc27064a415910ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
