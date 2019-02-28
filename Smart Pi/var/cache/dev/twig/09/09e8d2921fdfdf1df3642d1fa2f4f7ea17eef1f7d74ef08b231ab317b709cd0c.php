<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a7b3be634dd51bfbbd1b85f52a950b0dfa9aed1a82c64d06f810fccf279c92c4 extends Twig_Template
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
        $__internal_50f80b93f2673cd455fc7486842c81fa01a0ca1b842baf8216e9cee953be89e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f80b93f2673cd455fc7486842c81fa01a0ca1b842baf8216e9cee953be89e1->enter($__internal_50f80b93f2673cd455fc7486842c81fa01a0ca1b842baf8216e9cee953be89e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_fbe90d05d45d05a97dd1da636a43a21919e10857669c8cfb377692b861bbb5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe90d05d45d05a97dd1da636a43a21919e10857669c8cfb377692b861bbb5ee->enter($__internal_fbe90d05d45d05a97dd1da636a43a21919e10857669c8cfb377692b861bbb5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_50f80b93f2673cd455fc7486842c81fa01a0ca1b842baf8216e9cee953be89e1->leave($__internal_50f80b93f2673cd455fc7486842c81fa01a0ca1b842baf8216e9cee953be89e1_prof);

        
        $__internal_fbe90d05d45d05a97dd1da636a43a21919e10857669c8cfb377692b861bbb5ee->leave($__internal_fbe90d05d45d05a97dd1da636a43a21919e10857669c8cfb377692b861bbb5ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\PI_DEV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
