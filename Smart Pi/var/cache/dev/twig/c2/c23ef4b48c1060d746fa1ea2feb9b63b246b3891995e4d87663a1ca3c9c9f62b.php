<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_fd972fe469344045c87b22f25af01702aedadb2b30690614e4c69daec1d2ce40 extends Twig_Template
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
        $__internal_d6830f50920b8a19a6b5bdff6586d3e891270b3c19434d93e7a46215be5ced10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6830f50920b8a19a6b5bdff6586d3e891270b3c19434d93e7a46215be5ced10->enter($__internal_d6830f50920b8a19a6b5bdff6586d3e891270b3c19434d93e7a46215be5ced10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6440bc28a2734e36c009c6f8240fb890689f71083d4bfa84dc2c6a4a316543f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6440bc28a2734e36c009c6f8240fb890689f71083d4bfa84dc2c6a4a316543f7->enter($__internal_6440bc28a2734e36c009c6f8240fb890689f71083d4bfa84dc2c6a4a316543f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d6830f50920b8a19a6b5bdff6586d3e891270b3c19434d93e7a46215be5ced10->leave($__internal_d6830f50920b8a19a6b5bdff6586d3e891270b3c19434d93e7a46215be5ced10_prof);

        
        $__internal_6440bc28a2734e36c009c6f8240fb890689f71083d4bfa84dc2c6a4a316543f7->leave($__internal_6440bc28a2734e36c009c6f8240fb890689f71083d4bfa84dc2c6a4a316543f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
