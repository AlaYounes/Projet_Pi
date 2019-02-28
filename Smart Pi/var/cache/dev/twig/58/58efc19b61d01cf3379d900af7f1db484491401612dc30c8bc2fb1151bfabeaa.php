<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_26dfa85202bd4ea89d74c467271c840675b78e0a1f798d72d2f8dd9b597dc007 extends Twig_Template
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
        $__internal_d19fea64cc672c667f996de6a89697d61ae3d57dbb3345a8aea737382a0e9afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19fea64cc672c667f996de6a89697d61ae3d57dbb3345a8aea737382a0e9afe->enter($__internal_d19fea64cc672c667f996de6a89697d61ae3d57dbb3345a8aea737382a0e9afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_61300f44236643c77449e07f3e6131c34944d62a2f8dfc7fc895241e8d4c12d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61300f44236643c77449e07f3e6131c34944d62a2f8dfc7fc895241e8d4c12d7->enter($__internal_61300f44236643c77449e07f3e6131c34944d62a2f8dfc7fc895241e8d4c12d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d19fea64cc672c667f996de6a89697d61ae3d57dbb3345a8aea737382a0e9afe->leave($__internal_d19fea64cc672c667f996de6a89697d61ae3d57dbb3345a8aea737382a0e9afe_prof);

        
        $__internal_61300f44236643c77449e07f3e6131c34944d62a2f8dfc7fc895241e8d4c12d7->leave($__internal_61300f44236643c77449e07f3e6131c34944d62a2f8dfc7fc895241e8d4c12d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
