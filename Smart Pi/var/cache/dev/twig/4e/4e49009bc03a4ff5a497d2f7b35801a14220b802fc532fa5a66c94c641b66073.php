<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_31c36e3683036bad8faf1e8c37a9e63115e76a891a2d45c4ae4dfbc2587d0eb3 extends Twig_Template
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
        $__internal_b3cdb7e3843eb3547183793ee703ddb94880d6acce26b1b2e667da331eaa81b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3cdb7e3843eb3547183793ee703ddb94880d6acce26b1b2e667da331eaa81b6->enter($__internal_b3cdb7e3843eb3547183793ee703ddb94880d6acce26b1b2e667da331eaa81b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d1d87e7bedd12e360a71de4081a1fedf688ea7abe0a9da07a8a845a8e3327b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d87e7bedd12e360a71de4081a1fedf688ea7abe0a9da07a8a845a8e3327b04->enter($__internal_d1d87e7bedd12e360a71de4081a1fedf688ea7abe0a9da07a8a845a8e3327b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b3cdb7e3843eb3547183793ee703ddb94880d6acce26b1b2e667da331eaa81b6->leave($__internal_b3cdb7e3843eb3547183793ee703ddb94880d6acce26b1b2e667da331eaa81b6_prof);

        
        $__internal_d1d87e7bedd12e360a71de4081a1fedf688ea7abe0a9da07a8a845a8e3327b04->leave($__internal_d1d87e7bedd12e360a71de4081a1fedf688ea7abe0a9da07a8a845a8e3327b04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
