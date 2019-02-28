<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_37329b404a35697dd08a2c5122c9cf1aba05749b2a82abbc36432f9c10aec9f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f171b2d6242b1ff3c0c1179077870cd818fae614682ee940aed5c792bc6d786f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f171b2d6242b1ff3c0c1179077870cd818fae614682ee940aed5c792bc6d786f->enter($__internal_f171b2d6242b1ff3c0c1179077870cd818fae614682ee940aed5c792bc6d786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_89426d2fecdf902d807ef01e1be3bc45e871f6ce47c603f61865b182649d01e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89426d2fecdf902d807ef01e1be3bc45e871f6ce47c603f61865b182649d01e2->enter($__internal_89426d2fecdf902d807ef01e1be3bc45e871f6ce47c603f61865b182649d01e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f171b2d6242b1ff3c0c1179077870cd818fae614682ee940aed5c792bc6d786f->leave($__internal_f171b2d6242b1ff3c0c1179077870cd818fae614682ee940aed5c792bc6d786f_prof);

        
        $__internal_89426d2fecdf902d807ef01e1be3bc45e871f6ce47c603f61865b182649d01e2->leave($__internal_89426d2fecdf902d807ef01e1be3bc45e871f6ce47c603f61865b182649d01e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb5a332ed9021e147938354d9a8957bd3e0da1baed391af9608e581aa9479d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5a332ed9021e147938354d9a8957bd3e0da1baed391af9608e581aa9479d02->enter($__internal_fb5a332ed9021e147938354d9a8957bd3e0da1baed391af9608e581aa9479d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5494c34a84dc604d50d7ec24f93363f3709ac2ed03a3a02ca59b00ea280c362c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5494c34a84dc604d50d7ec24f93363f3709ac2ed03a3a02ca59b00ea280c362c->enter($__internal_5494c34a84dc604d50d7ec24f93363f3709ac2ed03a3a02ca59b00ea280c362c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5494c34a84dc604d50d7ec24f93363f3709ac2ed03a3a02ca59b00ea280c362c->leave($__internal_5494c34a84dc604d50d7ec24f93363f3709ac2ed03a3a02ca59b00ea280c362c_prof);

        
        $__internal_fb5a332ed9021e147938354d9a8957bd3e0da1baed391af9608e581aa9479d02->leave($__internal_fb5a332ed9021e147938354d9a8957bd3e0da1baed391af9608e581aa9479d02_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_66c5258caa39e23c0df4aa916b940d73b891d73dec1e8d70a423d6184cf9caf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c5258caa39e23c0df4aa916b940d73b891d73dec1e8d70a423d6184cf9caf1->enter($__internal_66c5258caa39e23c0df4aa916b940d73b891d73dec1e8d70a423d6184cf9caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_60bc1ed8d13cc80c3d20dd5f1926628f9904ee9ed500b6040d023aafc2963b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bc1ed8d13cc80c3d20dd5f1926628f9904ee9ed500b6040d023aafc2963b15->enter($__internal_60bc1ed8d13cc80c3d20dd5f1926628f9904ee9ed500b6040d023aafc2963b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_60bc1ed8d13cc80c3d20dd5f1926628f9904ee9ed500b6040d023aafc2963b15->leave($__internal_60bc1ed8d13cc80c3d20dd5f1926628f9904ee9ed500b6040d023aafc2963b15_prof);

        
        $__internal_66c5258caa39e23c0df4aa916b940d73b891d73dec1e8d70a423d6184cf9caf1->leave($__internal_66c5258caa39e23c0df4aa916b940d73b891d73dec1e8d70a423d6184cf9caf1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b527348b787489fe97a2ef4b14fcd797fb5a7c38d09949b5de02db55fc6605c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b527348b787489fe97a2ef4b14fcd797fb5a7c38d09949b5de02db55fc6605c4->enter($__internal_b527348b787489fe97a2ef4b14fcd797fb5a7c38d09949b5de02db55fc6605c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce8a43928a77f329d33beb22705e8cefe252ba7d76779d2155735af100ed3811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8a43928a77f329d33beb22705e8cefe252ba7d76779d2155735af100ed3811->enter($__internal_ce8a43928a77f329d33beb22705e8cefe252ba7d76779d2155735af100ed3811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce8a43928a77f329d33beb22705e8cefe252ba7d76779d2155735af100ed3811->leave($__internal_ce8a43928a77f329d33beb22705e8cefe252ba7d76779d2155735af100ed3811_prof);

        
        $__internal_b527348b787489fe97a2ef4b14fcd797fb5a7c38d09949b5de02db55fc6605c4->leave($__internal_b527348b787489fe97a2ef4b14fcd797fb5a7c38d09949b5de02db55fc6605c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
