<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_bc0535b2c742939514df613d44799c29f6e9e460acec2e3dd56cfeb8dfc61fce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_748a573599458acdb8ec0c29b2a87890eb3ca15d439bc6d0faadcc6c81e5df3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748a573599458acdb8ec0c29b2a87890eb3ca15d439bc6d0faadcc6c81e5df3a->enter($__internal_748a573599458acdb8ec0c29b2a87890eb3ca15d439bc6d0faadcc6c81e5df3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_0f741fad705227da298e3487e8403b94df9d5aef2dee60ff322cd4546aef0775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f741fad705227da298e3487e8403b94df9d5aef2dee60ff322cd4546aef0775->enter($__internal_0f741fad705227da298e3487e8403b94df9d5aef2dee60ff322cd4546aef0775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_748a573599458acdb8ec0c29b2a87890eb3ca15d439bc6d0faadcc6c81e5df3a->leave($__internal_748a573599458acdb8ec0c29b2a87890eb3ca15d439bc6d0faadcc6c81e5df3a_prof);

        
        $__internal_0f741fad705227da298e3487e8403b94df9d5aef2dee60ff322cd4546aef0775->leave($__internal_0f741fad705227da298e3487e8403b94df9d5aef2dee60ff322cd4546aef0775_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25c5957e59bcb9be5d9cd35557181ec0162c3f112c55d85ea25edb05138a0537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c5957e59bcb9be5d9cd35557181ec0162c3f112c55d85ea25edb05138a0537->enter($__internal_25c5957e59bcb9be5d9cd35557181ec0162c3f112c55d85ea25edb05138a0537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9002e07c24119989a3cf76496858ef3275bf025fecf6ee7538dfd894d187c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9002e07c24119989a3cf76496858ef3275bf025fecf6ee7538dfd894d187c5d->enter($__internal_b9002e07c24119989a3cf76496858ef3275bf025fecf6ee7538dfd894d187c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b9002e07c24119989a3cf76496858ef3275bf025fecf6ee7538dfd894d187c5d->leave($__internal_b9002e07c24119989a3cf76496858ef3275bf025fecf6ee7538dfd894d187c5d_prof);

        
        $__internal_25c5957e59bcb9be5d9cd35557181ec0162c3f112c55d85ea25edb05138a0537->leave($__internal_25c5957e59bcb9be5d9cd35557181ec0162c3f112c55d85ea25edb05138a0537_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
