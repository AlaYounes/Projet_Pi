<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1793f589fa7993dbf419847e54a5572b9a39bd3994339062f2b4459adec27fe2 extends Twig_Template
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
        $__internal_7f84b56cc749f11db19a8ac822a8d6a3dbb37aef56d102273614a1da3bf0473b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f84b56cc749f11db19a8ac822a8d6a3dbb37aef56d102273614a1da3bf0473b->enter($__internal_7f84b56cc749f11db19a8ac822a8d6a3dbb37aef56d102273614a1da3bf0473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b7e7624dddc0e4454fac57015a09cfc6e7e4a8b7cb0b3307336891cc787c12df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e7624dddc0e4454fac57015a09cfc6e7e4a8b7cb0b3307336891cc787c12df->enter($__internal_b7e7624dddc0e4454fac57015a09cfc6e7e4a8b7cb0b3307336891cc787c12df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7f84b56cc749f11db19a8ac822a8d6a3dbb37aef56d102273614a1da3bf0473b->leave($__internal_7f84b56cc749f11db19a8ac822a8d6a3dbb37aef56d102273614a1da3bf0473b_prof);

        
        $__internal_b7e7624dddc0e4454fac57015a09cfc6e7e4a8b7cb0b3307336891cc787c12df->leave($__internal_b7e7624dddc0e4454fac57015a09cfc6e7e4a8b7cb0b3307336891cc787c12df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
