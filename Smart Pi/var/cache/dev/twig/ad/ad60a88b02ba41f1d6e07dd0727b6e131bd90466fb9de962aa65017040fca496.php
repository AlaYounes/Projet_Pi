<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a9bb74d2806af29507fad2b8a8ac84c8b93a610a5346c969dbfa4bad2665f86f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56d6b0d6d950893d6ac073e8dc1063b6368217f0317d30eeceda1234889b0121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d6b0d6d950893d6ac073e8dc1063b6368217f0317d30eeceda1234889b0121->enter($__internal_56d6b0d6d950893d6ac073e8dc1063b6368217f0317d30eeceda1234889b0121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a1323729fc2a775584b395823d7fb05a76c1658d9f724eda2821f0ad1321cc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1323729fc2a775584b395823d7fb05a76c1658d9f724eda2821f0ad1321cc66->enter($__internal_a1323729fc2a775584b395823d7fb05a76c1658d9f724eda2821f0ad1321cc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d6b0d6d950893d6ac073e8dc1063b6368217f0317d30eeceda1234889b0121->leave($__internal_56d6b0d6d950893d6ac073e8dc1063b6368217f0317d30eeceda1234889b0121_prof);

        
        $__internal_a1323729fc2a775584b395823d7fb05a76c1658d9f724eda2821f0ad1321cc66->leave($__internal_a1323729fc2a775584b395823d7fb05a76c1658d9f724eda2821f0ad1321cc66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c482594f5881c0c28d5e4752019b6d1a7192937255b8c333a262cdcea671af6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c482594f5881c0c28d5e4752019b6d1a7192937255b8c333a262cdcea671af6c->enter($__internal_c482594f5881c0c28d5e4752019b6d1a7192937255b8c333a262cdcea671af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2074713fb42ef402705505d3f228ec4e8372e6bf50b8ddbad98f552a56e10c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2074713fb42ef402705505d3f228ec4e8372e6bf50b8ddbad98f552a56e10c1->enter($__internal_a2074713fb42ef402705505d3f228ec4e8372e6bf50b8ddbad98f552a56e10c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2074713fb42ef402705505d3f228ec4e8372e6bf50b8ddbad98f552a56e10c1->leave($__internal_a2074713fb42ef402705505d3f228ec4e8372e6bf50b8ddbad98f552a56e10c1_prof);

        
        $__internal_c482594f5881c0c28d5e4752019b6d1a7192937255b8c333a262cdcea671af6c->leave($__internal_c482594f5881c0c28d5e4752019b6d1a7192937255b8c333a262cdcea671af6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30d430c6068bfa263472d7f9e66e34a76103e733f051a2b19838f7e1e5d256e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d430c6068bfa263472d7f9e66e34a76103e733f051a2b19838f7e1e5d256e6->enter($__internal_30d430c6068bfa263472d7f9e66e34a76103e733f051a2b19838f7e1e5d256e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca65681755c95416657dfd47300c3b2c4d3d0b9d16fe5bb678b8b7de1fa83452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca65681755c95416657dfd47300c3b2c4d3d0b9d16fe5bb678b8b7de1fa83452->enter($__internal_ca65681755c95416657dfd47300c3b2c4d3d0b9d16fe5bb678b8b7de1fa83452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca65681755c95416657dfd47300c3b2c4d3d0b9d16fe5bb678b8b7de1fa83452->leave($__internal_ca65681755c95416657dfd47300c3b2c4d3d0b9d16fe5bb678b8b7de1fa83452_prof);

        
        $__internal_30d430c6068bfa263472d7f9e66e34a76103e733f051a2b19838f7e1e5d256e6->leave($__internal_30d430c6068bfa263472d7f9e66e34a76103e733f051a2b19838f7e1e5d256e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7630282f5093dffbb893e1f21cab68975f7d3bfe665b61aa11d9bbb2909e200b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7630282f5093dffbb893e1f21cab68975f7d3bfe665b61aa11d9bbb2909e200b->enter($__internal_7630282f5093dffbb893e1f21cab68975f7d3bfe665b61aa11d9bbb2909e200b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0ff6d4ca0337c055edfcc5fc17f7d23e384be0d51d0342324f6962bfceb792b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ff6d4ca0337c055edfcc5fc17f7d23e384be0d51d0342324f6962bfceb792b->enter($__internal_d0ff6d4ca0337c055edfcc5fc17f7d23e384be0d51d0342324f6962bfceb792b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0ff6d4ca0337c055edfcc5fc17f7d23e384be0d51d0342324f6962bfceb792b->leave($__internal_d0ff6d4ca0337c055edfcc5fc17f7d23e384be0d51d0342324f6962bfceb792b_prof);

        
        $__internal_7630282f5093dffbb893e1f21cab68975f7d3bfe665b61aa11d9bbb2909e200b->leave($__internal_7630282f5093dffbb893e1f21cab68975f7d3bfe665b61aa11d9bbb2909e200b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
