<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ae3769363d8bd3841f6c15f35a0cf8a0aabf49d594201fc41296de082ec88c9a extends Twig_Template
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
        $__internal_d78faac755d647ca9db975b3375c1e747eeb929aaae9ccb0a006593ea7a4e86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78faac755d647ca9db975b3375c1e747eeb929aaae9ccb0a006593ea7a4e86c->enter($__internal_d78faac755d647ca9db975b3375c1e747eeb929aaae9ccb0a006593ea7a4e86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_33ed7c291898079936b94deafa550fd3a58dc96f9cb9e2756152a80f1205f15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ed7c291898079936b94deafa550fd3a58dc96f9cb9e2756152a80f1205f15b->enter($__internal_33ed7c291898079936b94deafa550fd3a58dc96f9cb9e2756152a80f1205f15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d78faac755d647ca9db975b3375c1e747eeb929aaae9ccb0a006593ea7a4e86c->leave($__internal_d78faac755d647ca9db975b3375c1e747eeb929aaae9ccb0a006593ea7a4e86c_prof);

        
        $__internal_33ed7c291898079936b94deafa550fd3a58dc96f9cb9e2756152a80f1205f15b->leave($__internal_33ed7c291898079936b94deafa550fd3a58dc96f9cb9e2756152a80f1205f15b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
