<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7f3ecfcc2893ff32d04992cf3a27498e51d9e53ad51af0f85a0529c0aa778406 extends Twig_Template
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
        $__internal_c2091744cbb1cdb8354e9654ef4973301693bb26e0b93b5678395187c698e3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2091744cbb1cdb8354e9654ef4973301693bb26e0b93b5678395187c698e3f2->enter($__internal_c2091744cbb1cdb8354e9654ef4973301693bb26e0b93b5678395187c698e3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d1874d386a49478c5f3c4bc4c83c5dd1c7740b66c42bb1048891597bc9309d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1874d386a49478c5f3c4bc4c83c5dd1c7740b66c42bb1048891597bc9309d20->enter($__internal_d1874d386a49478c5f3c4bc4c83c5dd1c7740b66c42bb1048891597bc9309d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c2091744cbb1cdb8354e9654ef4973301693bb26e0b93b5678395187c698e3f2->leave($__internal_c2091744cbb1cdb8354e9654ef4973301693bb26e0b93b5678395187c698e3f2_prof);

        
        $__internal_d1874d386a49478c5f3c4bc4c83c5dd1c7740b66c42bb1048891597bc9309d20->leave($__internal_d1874d386a49478c5f3c4bc4c83c5dd1c7740b66c42bb1048891597bc9309d20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
