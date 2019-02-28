<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8c75f869f57b3dffb28ce60b4a8386bf86bb61046a8585cfd06fdb6cd426ea1d extends Twig_Template
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
        $__internal_a925fe3acd6add05633a473bd6b706e1bffa1c91249444398b79d5124001440b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a925fe3acd6add05633a473bd6b706e1bffa1c91249444398b79d5124001440b->enter($__internal_a925fe3acd6add05633a473bd6b706e1bffa1c91249444398b79d5124001440b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_348d2393811b4a930e8bab481820052a604b514912d03a2a49b6c290989f0400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348d2393811b4a930e8bab481820052a604b514912d03a2a49b6c290989f0400->enter($__internal_348d2393811b4a930e8bab481820052a604b514912d03a2a49b6c290989f0400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a925fe3acd6add05633a473bd6b706e1bffa1c91249444398b79d5124001440b->leave($__internal_a925fe3acd6add05633a473bd6b706e1bffa1c91249444398b79d5124001440b_prof);

        
        $__internal_348d2393811b4a930e8bab481820052a604b514912d03a2a49b6c290989f0400->leave($__internal_348d2393811b4a930e8bab481820052a604b514912d03a2a49b6c290989f0400_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
