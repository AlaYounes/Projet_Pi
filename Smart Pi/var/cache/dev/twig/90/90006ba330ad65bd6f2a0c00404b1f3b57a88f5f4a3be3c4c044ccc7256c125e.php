<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c6679d93c9cad060fff51b0ea9ccdf31452fdc7e1220a03165d9b7e2550c0beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caab312b34b6ae9f40e965eed6352f45da7461c308683e95addb2b6ddd4778a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caab312b34b6ae9f40e965eed6352f45da7461c308683e95addb2b6ddd4778a6->enter($__internal_caab312b34b6ae9f40e965eed6352f45da7461c308683e95addb2b6ddd4778a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_348d9f4d22e813532c3ffa9f4df05ffe4c644828759b9abec7138bfa322c87f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348d9f4d22e813532c3ffa9f4df05ffe4c644828759b9abec7138bfa322c87f4->enter($__internal_348d9f4d22e813532c3ffa9f4df05ffe4c644828759b9abec7138bfa322c87f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caab312b34b6ae9f40e965eed6352f45da7461c308683e95addb2b6ddd4778a6->leave($__internal_caab312b34b6ae9f40e965eed6352f45da7461c308683e95addb2b6ddd4778a6_prof);

        
        $__internal_348d9f4d22e813532c3ffa9f4df05ffe4c644828759b9abec7138bfa322c87f4->leave($__internal_348d9f4d22e813532c3ffa9f4df05ffe4c644828759b9abec7138bfa322c87f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6444c498f25eac913cd2cbafde1514caf6d7bbaa51fc08e733bbe2cadb569804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6444c498f25eac913cd2cbafde1514caf6d7bbaa51fc08e733bbe2cadb569804->enter($__internal_6444c498f25eac913cd2cbafde1514caf6d7bbaa51fc08e733bbe2cadb569804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_807cb36b6f862d6019142892b9faf6892f31d688d8c6b551c104d3f788a9861e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807cb36b6f862d6019142892b9faf6892f31d688d8c6b551c104d3f788a9861e->enter($__internal_807cb36b6f862d6019142892b9faf6892f31d688d8c6b551c104d3f788a9861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_807cb36b6f862d6019142892b9faf6892f31d688d8c6b551c104d3f788a9861e->leave($__internal_807cb36b6f862d6019142892b9faf6892f31d688d8c6b551c104d3f788a9861e_prof);

        
        $__internal_6444c498f25eac913cd2cbafde1514caf6d7bbaa51fc08e733bbe2cadb569804->leave($__internal_6444c498f25eac913cd2cbafde1514caf6d7bbaa51fc08e733bbe2cadb569804_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_55228109c9849d5e40ff1b36086e7b8d34996a6bd6f924bbb91d33a6c6e959da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55228109c9849d5e40ff1b36086e7b8d34996a6bd6f924bbb91d33a6c6e959da->enter($__internal_55228109c9849d5e40ff1b36086e7b8d34996a6bd6f924bbb91d33a6c6e959da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_195664963e6e9eb385cc3361c9a9545fd41dd0ba3068516f494599ecbf46776a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195664963e6e9eb385cc3361c9a9545fd41dd0ba3068516f494599ecbf46776a->enter($__internal_195664963e6e9eb385cc3361c9a9545fd41dd0ba3068516f494599ecbf46776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_195664963e6e9eb385cc3361c9a9545fd41dd0ba3068516f494599ecbf46776a->leave($__internal_195664963e6e9eb385cc3361c9a9545fd41dd0ba3068516f494599ecbf46776a_prof);

        
        $__internal_55228109c9849d5e40ff1b36086e7b8d34996a6bd6f924bbb91d33a6c6e959da->leave($__internal_55228109c9849d5e40ff1b36086e7b8d34996a6bd6f924bbb91d33a6c6e959da_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dd443d3514404dd586d10adab165fd53a7c5d9569c8e2aa81f07d41d26c839d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd443d3514404dd586d10adab165fd53a7c5d9569c8e2aa81f07d41d26c839d->enter($__internal_3dd443d3514404dd586d10adab165fd53a7c5d9569c8e2aa81f07d41d26c839d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72e6901efd65e35cd003b52ae7b06685f8940027daa87fcbce03f44f0af8a221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e6901efd65e35cd003b52ae7b06685f8940027daa87fcbce03f44f0af8a221->enter($__internal_72e6901efd65e35cd003b52ae7b06685f8940027daa87fcbce03f44f0af8a221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_72e6901efd65e35cd003b52ae7b06685f8940027daa87fcbce03f44f0af8a221->leave($__internal_72e6901efd65e35cd003b52ae7b06685f8940027daa87fcbce03f44f0af8a221_prof);

        
        $__internal_3dd443d3514404dd586d10adab165fd53a7c5d9569c8e2aa81f07d41d26c839d->leave($__internal_3dd443d3514404dd586d10adab165fd53a7c5d9569c8e2aa81f07d41d26c839d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
