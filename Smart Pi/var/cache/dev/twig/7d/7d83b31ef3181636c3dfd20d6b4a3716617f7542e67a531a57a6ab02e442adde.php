<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_b0cc491f8ba6fcece71ae704e85ab11818c7a340f0c2519a8ec0564f8b7fc513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fff2052ecad95abc132125efac8957eca657bc6d08e967f101e2921626f28250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff2052ecad95abc132125efac8957eca657bc6d08e967f101e2921626f28250->enter($__internal_fff2052ecad95abc132125efac8957eca657bc6d08e967f101e2921626f28250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_802530f8749bb67bcff8551695dbf15e82873d0d81ddcd8df4e68e631253793d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802530f8749bb67bcff8551695dbf15e82873d0d81ddcd8df4e68e631253793d->enter($__internal_802530f8749bb67bcff8551695dbf15e82873d0d81ddcd8df4e68e631253793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fff2052ecad95abc132125efac8957eca657bc6d08e967f101e2921626f28250->leave($__internal_fff2052ecad95abc132125efac8957eca657bc6d08e967f101e2921626f28250_prof);

        
        $__internal_802530f8749bb67bcff8551695dbf15e82873d0d81ddcd8df4e68e631253793d->leave($__internal_802530f8749bb67bcff8551695dbf15e82873d0d81ddcd8df4e68e631253793d_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_b7caa897f7011093beedeae05e1b68cccdb381d2bb18ceb354db5ca1a784f53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7caa897f7011093beedeae05e1b68cccdb381d2bb18ceb354db5ca1a784f53d->enter($__internal_b7caa897f7011093beedeae05e1b68cccdb381d2bb18ceb354db5ca1a784f53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_df9b19d01784136a1a4686939eb787d5fa1750aae641daa177fa23f1a001a6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9b19d01784136a1a4686939eb787d5fa1750aae641daa177fa23f1a001a6e0->enter($__internal_df9b19d01784136a1a4686939eb787d5fa1750aae641daa177fa23f1a001a6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 16
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 18
        echo "        </div>

        ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 22
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 24
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        <div>
            ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "        </div>
    </body>
</html>
";
        
        $__internal_df9b19d01784136a1a4686939eb787d5fa1750aae641daa177fa23f1a001a6e0->leave($__internal_df9b19d01784136a1a4686939eb787d5fa1750aae641daa177fa23f1a001a6e0_prof);

        
        $__internal_b7caa897f7011093beedeae05e1b68cccdb381d2bb18ceb354db5ca1a784f53d->leave($__internal_b7caa897f7011093beedeae05e1b68cccdb381d2bb18ceb354db5ca1a784f53d_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_962582068ddea243901b01882ba392f5f149a63d8e8f9c29f2800d9d0eda3ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962582068ddea243901b01882ba392f5f149a63d8e8f9c29f2800d9d0eda3ba7->enter($__internal_962582068ddea243901b01882ba392f5f149a63d8e8f9c29f2800d9d0eda3ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61bca5c5ab7cec9ddba8de49f7eed90795d6611ad5f08a6e97e516801bd3d109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bca5c5ab7cec9ddba8de49f7eed90795d6611ad5f08a6e97e516801bd3d109->enter($__internal_61bca5c5ab7cec9ddba8de49f7eed90795d6611ad5f08a6e97e516801bd3d109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "            ";
        
        $__internal_61bca5c5ab7cec9ddba8de49f7eed90795d6611ad5f08a6e97e516801bd3d109->leave($__internal_61bca5c5ab7cec9ddba8de49f7eed90795d6611ad5f08a6e97e516801bd3d109_prof);

        
        $__internal_962582068ddea243901b01882ba392f5f149a63d8e8f9c29f2800d9d0eda3ba7->leave($__internal_962582068ddea243901b01882ba392f5f149a63d8e8f9c29f2800d9d0eda3ba7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 32,  142 => 31,  129 => 33,  127 => 31,  123 => 29,  120 => 28,  114 => 27,  105 => 24,  100 => 23,  95 => 22,  90 => 21,  88 => 20,  84 => 18,  76 => 16,  70 => 13,  66 => 12,  61 => 11,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
