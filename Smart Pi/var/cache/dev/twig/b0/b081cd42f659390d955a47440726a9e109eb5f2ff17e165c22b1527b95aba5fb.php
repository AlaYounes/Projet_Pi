<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a1e9f37e792ba7c5a50495374d78a6506d25d34f25cfa6e906f93863dfe422a8 extends Twig_Template
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
        $__internal_ac463bcf5abc4adf4452640a94176fb0dfe283551b7e307ef94d17d9c5121739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac463bcf5abc4adf4452640a94176fb0dfe283551b7e307ef94d17d9c5121739->enter($__internal_ac463bcf5abc4adf4452640a94176fb0dfe283551b7e307ef94d17d9c5121739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4b95966027aa8bb8cf8da29b3e54147b322f748f27abe66106459a4bd406bc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b95966027aa8bb8cf8da29b3e54147b322f748f27abe66106459a4bd406bc96->enter($__internal_4b95966027aa8bb8cf8da29b3e54147b322f748f27abe66106459a4bd406bc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ac463bcf5abc4adf4452640a94176fb0dfe283551b7e307ef94d17d9c5121739->leave($__internal_ac463bcf5abc4adf4452640a94176fb0dfe283551b7e307ef94d17d9c5121739_prof);

        
        $__internal_4b95966027aa8bb8cf8da29b3e54147b322f748f27abe66106459a4bd406bc96->leave($__internal_4b95966027aa8bb8cf8da29b3e54147b322f748f27abe66106459a4bd406bc96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
