<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_2b1aba9f52e8c9aed8c73cc63d72d5156a4f32ab14045c446331f124c22870fc extends Twig_Template
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
        $__internal_b2e96b6e7e995429859ca2107c20f90cfedd166a782b2c92228dbf8394b73432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e96b6e7e995429859ca2107c20f90cfedd166a782b2c92228dbf8394b73432->enter($__internal_b2e96b6e7e995429859ca2107c20f90cfedd166a782b2c92228dbf8394b73432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_e572c43ceb611d2feed17b70f116fe2d12e901723a686bc25cdba7c64109587c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e572c43ceb611d2feed17b70f116fe2d12e901723a686bc25cdba7c64109587c->enter($__internal_e572c43ceb611d2feed17b70f116fe2d12e901723a686bc25cdba7c64109587c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<section class=\"banner-login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"main main-signup col-lg-12\">
                <div class=\"col-lg-6 col-lg-offset-3 text-center\">
                    <div class=\"form-sign\">
                            <div class=\"form-head\">
                                <h3>Register</h3>
                            </div><!-- /.form-head -->

                            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

                            <div class=\"form-row validate-input\"
                                 data-validate=\"Valid email is required: ex@abc.xyz\">
                                <div class=\"form-controls\">
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "field validate-input", "placeholder" => "Full Name")));
        echo "
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"form-row validate-input\"
                                 data-validate=\"Valid email is required: ex@abc.xyz\">
                                <div class=\"form-controls\">
                                    ";
        // line 26
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "field validate-input", "placeholder" => "Email")));
        echo "
                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"form-row validate-input\"
                                 data-validate=\"Valid email is required: ex@abc.xyz\">
                                <div class=\"form-controls\">
                                    ";
        // line 35
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "field validate-input", "placeholder" => "Username")));
        echo "
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"form-row validate-input\" data-validate=\"Password is required\"
                                 for=\"password\">
                                <div class=\"form-controls\">
                                    ";
        // line 44
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "field validate-input", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.password", array(), "FOSUserBundle"))));
        echo "
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"form-row validate-input\" data-validate=\"Password is required\"
                                 for=\"password\">
                                <div class=\"form-controls\">
                                    ";
        // line 53
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "field validate-input", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.password_confirmation", array(), "FOSUserBundle"))));
        echo "
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 58
        echo "                            <div class=\"checkbox\">
                            </div>
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "conditions", array()), 'label', array("label" => " Agree to the terms and policy"));
        echo "
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "conditions", array()), 'widget', array("attr" => array("input" => "checkbox validate-input")));
        echo "
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "conditions", array()), 'errors');
        echo "
                    </div>

                    <div>
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'rest');
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

                        <div class=\"container-login100-form-btn\">
                            <input type=\"submit\" name=\"register\"
                                   value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                                   class=\"kafe-btn kafe-btn-default full-width\"/>
                        </div>
                    </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</section>

";
        
        $__internal_b2e96b6e7e995429859ca2107c20f90cfedd166a782b2c92228dbf8394b73432->leave($__internal_b2e96b6e7e995429859ca2107c20f90cfedd166a782b2c92228dbf8394b73432_prof);

        
        $__internal_e572c43ceb611d2feed17b70f116fe2d12e901723a686bc25cdba7c64109587c->leave($__internal_e572c43ceb611d2feed17b70f116fe2d12e901723a686bc25cdba7c64109587c_prof);

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
        return array (  160 => 83,  145 => 71,  138 => 67,  134 => 66,  127 => 62,  123 => 61,  119 => 60,  115 => 58,  109 => 54,  104 => 53,  94 => 45,  89 => 44,  79 => 36,  74 => 35,  64 => 27,  59 => 26,  49 => 18,  45 => 17,  37 => 12,  25 => 2,);
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
<section class=\"banner-login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"main main-signup col-lg-12\">
                <div class=\"col-lg-6 col-lg-offset-3 text-center\">
                    <div class=\"form-sign\">
                            <div class=\"form-head\">
                                <h3>Register</h3>
                            </div><!-- /.form-head -->

                            {{ form_start(form,{'method': 'post', 'action': path('fos_user_registration_register'),'attr': {'class': 'fos_user_registration_register'}}) }}

                            <div class=\"form-row validate-input\"
                                 data-validate=\"Valid email is required: ex@abc.xyz\">
                                <div class=\"form-controls\">
                                    {{ form_widget(form.username, { 'attr': {'class': 'field validate-input', 'placeholder': 'Full Name' } }) }}
                                    {{ form_errors(form.username) }}
                                </div>
                            </div>

                            <div class=\"form-row validate-input\"
                                 data-validate=\"Valid email is required: ex@abc.xyz\">
                                <div class=\"form-controls\">
                                    {#{{ form_label(form.email,'Votre email est') }}#}
                                    {{ form_widget(form.email, { 'attr': {'class': 'field validate-input', 'placeholder': 'Email' } }) }}
                                    {{ form_errors(form.email) }}
                                </div>
                            </div>

                            <div class=\"form-row validate-input\"
                                 data-validate=\"Valid email is required: ex@abc.xyz\">
                                <div class=\"form-controls\">
                                    {#{{ form_label(form.email,'Votre email est') }}#}
                                    {{ form_widget(form.name, { 'attr': {'class': 'field validate-input', 'placeholder': 'Username' } }) }}
                                    {{ form_errors(form.name) }}
                                </div>
                            </div>

                            <div class=\"form-row validate-input\" data-validate=\"Password is required\"
                                 for=\"password\">
                                <div class=\"form-controls\">
                                    {#{{ form_label(form.email,'Votre email est') }}#}
                                    {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'field validate-input', 'placeholder': 'form.password'|trans } }) }}
                                    {{ form_errors(form.plainPassword.first) }}
                                </div>
                            </div>

                            <div class=\"form-row validate-input\" data-validate=\"Password is required\"
                                 for=\"password\">
                                <div class=\"form-controls\">
                                    {#{{ form_label(form.email,'Votre email est') }}#}
                                    {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'field validate-input', 'placeholder': 'form.password_confirmation'|trans } }) }}
                                    {{ form_errors(form.plainPassword.second) }}
                                </div>
                            </div>
                            {#<div class=\"checkbox validate-input\">#}
                            <div class=\"checkbox\">
                            </div>
                            {{ form_label(form.conditions,' Agree to the terms and policy') }}
                            {{ form_widget(form.conditions, { 'attr': {'input': 'checkbox validate-input' } }) }}
                            {{ form_errors(form.conditions ) }}
                    </div>

                    <div>
                        {{ form_rest(form.name) }}
                        {{ form_widget(form) }}

                        <div class=\"container-login100-form-btn\">
                            <input type=\"submit\" name=\"register\"
                                   value=\"{{ 'registration.submit'|trans }}\"
                                   class=\"kafe-btn kafe-btn-default full-width\"/>
                        </div>
                    </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{ form_end(form) }}
</section>

", "@FOSUser/Registration/register_content.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
