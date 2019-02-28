<?php

/* :categorie:index.html.twig */
class __TwigTemplate_2e0644b106ae4e1687910010cda7abb7760dc9fb2cc54c667f0b8fec3c0494b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":categorie:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ef3f89f11d25b3c152913ec2164d8fadd592cdd46c5f408eecffce7ac1c8a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef3f89f11d25b3c152913ec2164d8fadd592cdd46c5f408eecffce7ac1c8a29->enter($__internal_2ef3f89f11d25b3c152913ec2164d8fadd592cdd46c5f408eecffce7ac1c8a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categorie:index.html.twig"));

        $__internal_1f7b9dac253d00ff972f7c0e3e46c0b563bc7d3ae5758d3fd51047af7788c75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7b9dac253d00ff972f7c0e3e46c0b563bc7d3ae5758d3fd51047af7788c75f->enter($__internal_1f7b9dac253d00ff972f7c0e3e46c0b563bc7d3ae5758d3fd51047af7788c75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef3f89f11d25b3c152913ec2164d8fadd592cdd46c5f408eecffce7ac1c8a29->leave($__internal_2ef3f89f11d25b3c152913ec2164d8fadd592cdd46c5f408eecffce7ac1c8a29_prof);

        
        $__internal_1f7b9dac253d00ff972f7c0e3e46c0b563bc7d3ae5758d3fd51047af7788c75f->leave($__internal_1f7b9dac253d00ff972f7c0e3e46c0b563bc7d3ae5758d3fd51047af7788c75f_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_630ea2a79b442faf11f83f110f8ca16de1bdae942d0ae4de2b0541cc45e02ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630ea2a79b442faf11f83f110f8ca16de1bdae942d0ae4de2b0541cc45e02ef5->enter($__internal_630ea2a79b442faf11f83f110f8ca16de1bdae942d0ae4de2b0541cc45e02ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_1b2a64fb20eebb6e4f7fd8160e2a86c677089ce07401445ff37ad659981cae65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2a64fb20eebb6e4f7fd8160e2a86c677089ce07401445ff37ad659981cae65->enter($__internal_1b2a64fb20eebb6e4f7fd8160e2a86c677089ce07401445ff37ad659981cae65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_edit", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
        echo "\">Create a new categorie</a>
        </li>
    </ul>
";
        
        $__internal_1b2a64fb20eebb6e4f7fd8160e2a86c677089ce07401445ff37ad659981cae65->leave($__internal_1b2a64fb20eebb6e4f7fd8160e2a86c677089ce07401445ff37ad659981cae65_prof);

        
        $__internal_630ea2a79b442faf11f83f110f8ca16de1bdae942d0ae4de2b0541cc45e02ef5->leave($__internal_630ea2a79b442faf11f83f110f8ca16de1bdae942d0ae4de2b0541cc45e02ef5_prof);

    }

    public function getTemplateName()
    {
        return ":categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block container %}
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for categorie in categories %}
            <tr>
                <td><a href=\"{{ path('categorie_show', { 'id': categorie.id }) }}\">{{ categorie.id }}</a></td>
                <td>{{ categorie.nom }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('categorie_show', { 'id': categorie.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('categorie_edit', { 'id': categorie.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('categorie_new') }}\">Create a new categorie</a>
        </li>
    </ul>
{% endblock %}
", ":categorie:index.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app/Resources\\views/categorie/index.html.twig");
    }
}
