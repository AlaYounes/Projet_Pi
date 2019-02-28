<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_0b022c84f4742f9fb3d5ab71f84a7baccddff5c780fb4c10f87df786025ea7f8 extends Twig_Template
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
        $__internal_711a5323b8ecb9e6aa500eed64d6b11d498b73e388559b6168a4d162f54ee4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711a5323b8ecb9e6aa500eed64d6b11d498b73e388559b6168a4d162f54ee4cf->enter($__internal_711a5323b8ecb9e6aa500eed64d6b11d498b73e388559b6168a4d162f54ee4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_3970195fb0af7d3415a7b9d01fb15979b6b0e4f99b95fb6581c91bbb7ea76585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3970195fb0af7d3415a7b9d01fb15979b6b0e4f99b95fb6581c91bbb7ea76585->enter($__internal_3970195fb0af7d3415a7b9d01fb15979b6b0e4f99b95fb6581c91bbb7ea76585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_711a5323b8ecb9e6aa500eed64d6b11d498b73e388559b6168a4d162f54ee4cf->leave($__internal_711a5323b8ecb9e6aa500eed64d6b11d498b73e388559b6168a4d162f54ee4cf_prof);

        
        $__internal_3970195fb0af7d3415a7b9d01fb15979b6b0e4f99b95fb6581c91bbb7ea76585->leave($__internal_3970195fb0af7d3415a7b9d01fb15979b6b0e4f99b95fb6581c91bbb7ea76585_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
