<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_15e65f49b6573b8d14e51176f9dc8a9ff35b20c4a123b4e0f14fee5cf9b9f8ad extends Twig_Template
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
        $__internal_31e0c5416e221e329e46e8aa6021db81e403170ddbd8cda0575bcf6d1e13e373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e0c5416e221e329e46e8aa6021db81e403170ddbd8cda0575bcf6d1e13e373->enter($__internal_31e0c5416e221e329e46e8aa6021db81e403170ddbd8cda0575bcf6d1e13e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_f52136a66a5eb5f66cff1ca1f2f05077960fb0e6717dd476457a7a4e59e4e738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52136a66a5eb5f66cff1ca1f2f05077960fb0e6717dd476457a7a4e59e4e738->enter($__internal_f52136a66a5eb5f66cff1ca1f2f05077960fb0e6717dd476457a7a4e59e4e738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e0c5416e221e329e46e8aa6021db81e403170ddbd8cda0575bcf6d1e13e373->leave($__internal_31e0c5416e221e329e46e8aa6021db81e403170ddbd8cda0575bcf6d1e13e373_prof);

        
        $__internal_f52136a66a5eb5f66cff1ca1f2f05077960fb0e6717dd476457a7a4e59e4e738->leave($__internal_f52136a66a5eb5f66cff1ca1f2f05077960fb0e6717dd476457a7a4e59e4e738_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_2091ea88ac71017913338fae978fde75ae97217d01ba8f1cae8e32e7429f774b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2091ea88ac71017913338fae978fde75ae97217d01ba8f1cae8e32e7429f774b->enter($__internal_2091ea88ac71017913338fae978fde75ae97217d01ba8f1cae8e32e7429f774b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_d414943c2070c4d1f189a963b8e145d14d202886b595054d85acdeeb2e87301d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d414943c2070c4d1f189a963b8e145d14d202886b595054d85acdeeb2e87301d->enter($__internal_d414943c2070c4d1f189a963b8e145d14d202886b595054d85acdeeb2e87301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_d414943c2070c4d1f189a963b8e145d14d202886b595054d85acdeeb2e87301d->leave($__internal_d414943c2070c4d1f189a963b8e145d14d202886b595054d85acdeeb2e87301d_prof);

        
        $__internal_2091ea88ac71017913338fae978fde75ae97217d01ba8f1cae8e32e7429f774b->leave($__internal_2091ea88ac71017913338fae978fde75ae97217d01ba8f1cae8e32e7429f774b_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd8f39786966287b193f43856fa7c4dee3577b84988c53d4fcf4b367c637fd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8f39786966287b193f43856fa7c4dee3577b84988c53d4fcf4b367c637fd23->enter($__internal_cd8f39786966287b193f43856fa7c4dee3577b84988c53d4fcf4b367c637fd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f490c462c1fccd751a89a0d1e6fd325ca1158fcf074f1c88eae9b1f526c38392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f490c462c1fccd751a89a0d1e6fd325ca1158fcf074f1c88eae9b1f526c38392->enter($__internal_f490c462c1fccd751a89a0d1e6fd325ca1158fcf074f1c88eae9b1f526c38392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "            ";
        
        $__internal_f490c462c1fccd751a89a0d1e6fd325ca1158fcf074f1c88eae9b1f526c38392->leave($__internal_f490c462c1fccd751a89a0d1e6fd325ca1158fcf074f1c88eae9b1f526c38392_prof);

        
        $__internal_cd8f39786966287b193f43856fa7c4dee3577b84988c53d4fcf4b367c637fd23->leave($__internal_cd8f39786966287b193f43856fa7c4dee3577b84988c53d4fcf4b367c637fd23_prof);

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
