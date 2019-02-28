<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6f0336efb6cbd31b295932cfa620a88189f4d9ff5317b79682681c2ebe3853ea extends Twig_Template
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
        $__internal_c420e0533a7c99b4588288e3e65eac8e4f684fd581950e4231cf2d7a5e8ce02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c420e0533a7c99b4588288e3e65eac8e4f684fd581950e4231cf2d7a5e8ce02b->enter($__internal_c420e0533a7c99b4588288e3e65eac8e4f684fd581950e4231cf2d7a5e8ce02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c92bff006fce68b6bdcdc39cd2221228236076116269560df1895289b9d95f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92bff006fce68b6bdcdc39cd2221228236076116269560df1895289b9d95f44->enter($__internal_c92bff006fce68b6bdcdc39cd2221228236076116269560df1895289b9d95f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c420e0533a7c99b4588288e3e65eac8e4f684fd581950e4231cf2d7a5e8ce02b->leave($__internal_c420e0533a7c99b4588288e3e65eac8e4f684fd581950e4231cf2d7a5e8ce02b_prof);

        
        $__internal_c92bff006fce68b6bdcdc39cd2221228236076116269560df1895289b9d95f44->leave($__internal_c92bff006fce68b6bdcdc39cd2221228236076116269560df1895289b9d95f44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
