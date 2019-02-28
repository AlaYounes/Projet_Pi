<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2dd05f0629ec479f011f88396e0736a5ee88c3956de314022cc43619839ff1ba extends Twig_Template
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
        $__internal_6f4a8a4b8e3237cdc85d25487d898a1e55826ce1b093546e1846b4c20d27a6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4a8a4b8e3237cdc85d25487d898a1e55826ce1b093546e1846b4c20d27a6dd->enter($__internal_6f4a8a4b8e3237cdc85d25487d898a1e55826ce1b093546e1846b4c20d27a6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ac42db781ec2e2ee42eaaaaaef93f1b9942d7b8d2d125ddec56f5b28c40530ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac42db781ec2e2ee42eaaaaaef93f1b9942d7b8d2d125ddec56f5b28c40530ca->enter($__internal_ac42db781ec2e2ee42eaaaaaef93f1b9942d7b8d2d125ddec56f5b28c40530ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6f4a8a4b8e3237cdc85d25487d898a1e55826ce1b093546e1846b4c20d27a6dd->leave($__internal_6f4a8a4b8e3237cdc85d25487d898a1e55826ce1b093546e1846b4c20d27a6dd_prof);

        
        $__internal_ac42db781ec2e2ee42eaaaaaef93f1b9942d7b8d2d125ddec56f5b28c40530ca->leave($__internal_ac42db781ec2e2ee42eaaaaaef93f1b9942d7b8d2d125ddec56f5b28c40530ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
