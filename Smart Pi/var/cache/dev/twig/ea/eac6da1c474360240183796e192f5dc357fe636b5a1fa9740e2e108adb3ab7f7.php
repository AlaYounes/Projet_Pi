<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_bf60083f22d72e19f7da6d618ba136a2190a293bb01cae064f1fd18da47ee3e3 extends Twig_Template
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
        $__internal_5a92de00e5dd4362050d29da12a38aca92399ef1d7e3126949806786268eec17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a92de00e5dd4362050d29da12a38aca92399ef1d7e3126949806786268eec17->enter($__internal_5a92de00e5dd4362050d29da12a38aca92399ef1d7e3126949806786268eec17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_33306d865704462d3c178dea7b5706a7fe2dcd6cb680f87189cbcde47aaeca7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33306d865704462d3c178dea7b5706a7fe2dcd6cb680f87189cbcde47aaeca7e->enter($__internal_33306d865704462d3c178dea7b5706a7fe2dcd6cb680f87189cbcde47aaeca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_5a92de00e5dd4362050d29da12a38aca92399ef1d7e3126949806786268eec17->leave($__internal_5a92de00e5dd4362050d29da12a38aca92399ef1d7e3126949806786268eec17_prof);

        
        $__internal_33306d865704462d3c178dea7b5706a7fe2dcd6cb680f87189cbcde47aaeca7e->leave($__internal_33306d865704462d3c178dea7b5706a7fe2dcd6cb680f87189cbcde47aaeca7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
