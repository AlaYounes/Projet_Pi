<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_24873d4e9ed647616f337c78999c9737c82b4f1b9c08f739506fbf54a6c93cb5 extends Twig_Template
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
        $__internal_5e06a18a9eb26a6c53a075db302ccd14cab6447aafa088317aec9168192a6187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e06a18a9eb26a6c53a075db302ccd14cab6447aafa088317aec9168192a6187->enter($__internal_5e06a18a9eb26a6c53a075db302ccd14cab6447aafa088317aec9168192a6187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_2c3d1843bdf9548e1386144ec31a8784f32c801045a6f489b2f3a2098ef8969e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3d1843bdf9548e1386144ec31a8784f32c801045a6f489b2f3a2098ef8969e->enter($__internal_2c3d1843bdf9548e1386144ec31a8784f32c801045a6f489b2f3a2098ef8969e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5e06a18a9eb26a6c53a075db302ccd14cab6447aafa088317aec9168192a6187->leave($__internal_5e06a18a9eb26a6c53a075db302ccd14cab6447aafa088317aec9168192a6187_prof);

        
        $__internal_2c3d1843bdf9548e1386144ec31a8784f32c801045a6f489b2f3a2098ef8969e->leave($__internal_2c3d1843bdf9548e1386144ec31a8784f32c801045a6f489b2f3a2098ef8969e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
