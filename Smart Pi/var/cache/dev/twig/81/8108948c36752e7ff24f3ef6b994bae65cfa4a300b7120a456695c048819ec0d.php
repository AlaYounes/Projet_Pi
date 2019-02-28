<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ca120a1103329c45ec7e73f1038ecd94985334c81f6caf33e9c304674b7acd2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e24a66e853684e971bce86115fe5f990f59714ce28100625e7ff45cbf620180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e24a66e853684e971bce86115fe5f990f59714ce28100625e7ff45cbf620180->enter($__internal_2e24a66e853684e971bce86115fe5f990f59714ce28100625e7ff45cbf620180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_8cd130553a199351c2d7f38238646d2ea80b5d009e3148d09ba753a4ca00f2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd130553a199351c2d7f38238646d2ea80b5d009e3148d09ba753a4ca00f2d4->enter($__internal_8cd130553a199351c2d7f38238646d2ea80b5d009e3148d09ba753a4ca00f2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2e24a66e853684e971bce86115fe5f990f59714ce28100625e7ff45cbf620180->leave($__internal_2e24a66e853684e971bce86115fe5f990f59714ce28100625e7ff45cbf620180_prof);

        
        $__internal_8cd130553a199351c2d7f38238646d2ea80b5d009e3148d09ba753a4ca00f2d4->leave($__internal_8cd130553a199351c2d7f38238646d2ea80b5d009e3148d09ba753a4ca00f2d4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b238aefded173e443a43d5d7637fdef1f84ab747d334bbffeed832794cabd3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b238aefded173e443a43d5d7637fdef1f84ab747d334bbffeed832794cabd3c4->enter($__internal_b238aefded173e443a43d5d7637fdef1f84ab747d334bbffeed832794cabd3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6830f4f9ec48ed3fafc6dedcbfe688b9be2e77a740f2d86cd57c5292cd633887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6830f4f9ec48ed3fafc6dedcbfe688b9be2e77a740f2d86cd57c5292cd633887->enter($__internal_6830f4f9ec48ed3fafc6dedcbfe688b9be2e77a740f2d86cd57c5292cd633887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6830f4f9ec48ed3fafc6dedcbfe688b9be2e77a740f2d86cd57c5292cd633887->leave($__internal_6830f4f9ec48ed3fafc6dedcbfe688b9be2e77a740f2d86cd57c5292cd633887_prof);

        
        $__internal_b238aefded173e443a43d5d7637fdef1f84ab747d334bbffeed832794cabd3c4->leave($__internal_b238aefded173e443a43d5d7637fdef1f84ab747d334bbffeed832794cabd3c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
