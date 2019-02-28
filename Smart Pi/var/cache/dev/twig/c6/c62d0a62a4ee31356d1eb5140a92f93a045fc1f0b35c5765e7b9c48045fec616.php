<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8cddb364b609df9df1df33907b3623ffdb145a63cab8152fd481cabade7fe8e0 extends Twig_Template
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
        $__internal_4cc8dfa7deb3ebac9e8eb52e9047038eb4e6516123fbf92a984db27cb64e0906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc8dfa7deb3ebac9e8eb52e9047038eb4e6516123fbf92a984db27cb64e0906->enter($__internal_4cc8dfa7deb3ebac9e8eb52e9047038eb4e6516123fbf92a984db27cb64e0906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ab2a457be93b11e18a1e9a6b8ec44e4197ff211f401bc80c5c66d59531f61510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2a457be93b11e18a1e9a6b8ec44e4197ff211f401bc80c5c66d59531f61510->enter($__internal_ab2a457be93b11e18a1e9a6b8ec44e4197ff211f401bc80c5c66d59531f61510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4cc8dfa7deb3ebac9e8eb52e9047038eb4e6516123fbf92a984db27cb64e0906->leave($__internal_4cc8dfa7deb3ebac9e8eb52e9047038eb4e6516123fbf92a984db27cb64e0906_prof);

        
        $__internal_ab2a457be93b11e18a1e9a6b8ec44e4197ff211f401bc80c5c66d59531f61510->leave($__internal_ab2a457be93b11e18a1e9a6b8ec44e4197ff211f401bc80c5c66d59531f61510_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
