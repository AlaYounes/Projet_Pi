<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9bd1cac660dfde4b4b7051da924b78c4ff78ff1dda357ae3ac97fcd9ba16ea41 extends Twig_Template
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
        $__internal_a7490cef67a66a00357e255606f4af6e89ec1b84f66e3a2d2e58052e4ddc5068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7490cef67a66a00357e255606f4af6e89ec1b84f66e3a2d2e58052e4ddc5068->enter($__internal_a7490cef67a66a00357e255606f4af6e89ec1b84f66e3a2d2e58052e4ddc5068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_1b25830fac7f6c9d6b11664c45400a53d9b8faf0303778aa16b41129d16b1804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b25830fac7f6c9d6b11664c45400a53d9b8faf0303778aa16b41129d16b1804->enter($__internal_1b25830fac7f6c9d6b11664c45400a53d9b8faf0303778aa16b41129d16b1804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a7490cef67a66a00357e255606f4af6e89ec1b84f66e3a2d2e58052e4ddc5068->leave($__internal_a7490cef67a66a00357e255606f4af6e89ec1b84f66e3a2d2e58052e4ddc5068_prof);

        
        $__internal_1b25830fac7f6c9d6b11664c45400a53d9b8faf0303778aa16b41129d16b1804->leave($__internal_1b25830fac7f6c9d6b11664c45400a53d9b8faf0303778aa16b41129d16b1804_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0c13d8e16696e868c0e23e58f46d38386ef0ab89bcc623339907c886001589a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c13d8e16696e868c0e23e58f46d38386ef0ab89bcc623339907c886001589a->enter($__internal_f0c13d8e16696e868c0e23e58f46d38386ef0ab89bcc623339907c886001589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_484f6bde9c0783a26b33bbc0a0d436343901eb1649d857a882446155056101c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484f6bde9c0783a26b33bbc0a0d436343901eb1649d857a882446155056101c2->enter($__internal_484f6bde9c0783a26b33bbc0a0d436343901eb1649d857a882446155056101c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_484f6bde9c0783a26b33bbc0a0d436343901eb1649d857a882446155056101c2->leave($__internal_484f6bde9c0783a26b33bbc0a0d436343901eb1649d857a882446155056101c2_prof);

        
        $__internal_f0c13d8e16696e868c0e23e58f46d38386ef0ab89bcc623339907c886001589a->leave($__internal_f0c13d8e16696e868c0e23e58f46d38386ef0ab89bcc623339907c886001589a_prof);

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
