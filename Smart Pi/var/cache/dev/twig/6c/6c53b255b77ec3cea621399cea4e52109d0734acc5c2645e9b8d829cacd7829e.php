<?php

/* @SgDatatables/datatable/language.html.twig */
class __TwigTemplate_b6e4ce163b9287dbe4acd48882460496428e07e94db2a0ea9c4edf9091827f79 extends Twig_Template
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
        $__internal_4cc72d38dd05f234779bc57dfb528c3d5fc305ff7d5700a76052d81bd1dbba25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc72d38dd05f234779bc57dfb528c3d5fc305ff7d5700a76052d81bd1dbba25->enter($__internal_4cc72d38dd05f234779bc57dfb528c3d5fc305ff7d5700a76052d81bd1dbba25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/language.html.twig"));

        $__internal_a12c4f22daf731994dcf138a543b7d30b392a54aa59e92db1efb511f78e514a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12c4f22daf731994dcf138a543b7d30b392a54aa59e92db1efb511f78e514a9->enter($__internal_a12c4f22daf731994dcf138a543b7d30b392a54aa59e92db1efb511f78e514a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/language.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "language", array()) === null)) {
            // line 2
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "cdnLanguageByLocale", array()) === true)) {
                // line 3
                echo "        \"language\": {
            \"url\": \"";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "languageCDNFile", array()), twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), 0, 2), array(), "array"), "datatables_cdn"), "html", null, true);
                echo "\"
        }
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "languageByLocale", array()) === true)) {
                // line 9
                echo "        \"language\":
            ";
                // line 10
                $this->loadTemplate((("@SgDatatables/i18n/" . twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), 0, 2)) . ".json.twig"), "@SgDatatables/datatable/language.html.twig", 10)->display($context);
                // line 11
                echo "    ";
            }
        } else {
            // line 13
            echo "    \"language\":
        ";
            // line 14
            $this->loadTemplate((("@SgDatatables/i18n/" . twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "language", array()), 0, 2)) . ".json.twig"), "@SgDatatables/datatable/language.html.twig", 14)->display($context);
        }
        
        $__internal_4cc72d38dd05f234779bc57dfb528c3d5fc305ff7d5700a76052d81bd1dbba25->leave($__internal_4cc72d38dd05f234779bc57dfb528c3d5fc305ff7d5700a76052d81bd1dbba25_prof);

        
        $__internal_a12c4f22daf731994dcf138a543b7d30b392a54aa59e92db1efb511f78e514a9->leave($__internal_a12c4f22daf731994dcf138a543b7d30b392a54aa59e92db1efb511f78e514a9_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  53 => 13,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sg_datatables_view.language.language is same as(null) %}
    {% if sg_datatables_view.language.cdnLanguageByLocale is same as(true) %}
        \"language\": {
            \"url\": \"{{ asset(sg_datatables_view.language.languageCDNFile[app.request.locale|slice(0, 2)], 'datatables_cdn') }}\"
        }
    {% endif %}

    {% if sg_datatables_view.language.languageByLocale is same as(true) %}
        \"language\":
            {% include '@SgDatatables/i18n/' ~ app.request.locale|slice(0, 2) ~ '.json.twig' %}
    {% endif %}
{% else %}
    \"language\":
        {% include '@SgDatatables/i18n/' ~ sg_datatables_view.language.language|slice(0, 2) ~ '.json.twig' %}
{% endif %}
", "@SgDatatables/datatable/language.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\language.html.twig");
    }
}
