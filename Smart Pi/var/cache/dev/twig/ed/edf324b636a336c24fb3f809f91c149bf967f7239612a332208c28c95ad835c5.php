<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_c0f10069e3b269296cd93a6b01a40eb159b11398aae8d1103e514a4157a01710 extends Twig_Template
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
        $__internal_e62692d0765e6a3cfd7be872e51fa600852c718322f683f6728b66bbb9d435e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62692d0765e6a3cfd7be872e51fa600852c718322f683f6728b66bbb9d435e9->enter($__internal_e62692d0765e6a3cfd7be872e51fa600852c718322f683f6728b66bbb9d435e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_507c85f143f5cfa95d1b0b56d9df712034ba639f3e96eeb74ee6ed90f849096e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507c85f143f5cfa95d1b0b56d9df712034ba639f3e96eeb74ee6ed90f849096e->enter($__internal_507c85f143f5cfa95d1b0b56d9df712034ba639f3e96eeb74ee6ed90f849096e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e62692d0765e6a3cfd7be872e51fa600852c718322f683f6728b66bbb9d435e9->leave($__internal_e62692d0765e6a3cfd7be872e51fa600852c718322f683f6728b66bbb9d435e9_prof);

        
        $__internal_507c85f143f5cfa95d1b0b56d9df712034ba639f3e96eeb74ee6ed90f849096e->leave($__internal_507c85f143f5cfa95d1b0b56d9df712034ba639f3e96eeb74ee6ed90f849096e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
