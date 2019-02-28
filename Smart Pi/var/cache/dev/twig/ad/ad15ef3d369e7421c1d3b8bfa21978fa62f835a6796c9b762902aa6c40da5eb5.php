<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_d959b8d4d132601d19f9408a1a2115a9e57decd27165210a35b96d6ac061a63f extends Twig_Template
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
        $__internal_bc90b369844bd06062823b284772f0584269839601235083873cfaf3dcc693d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc90b369844bd06062823b284772f0584269839601235083873cfaf3dcc693d4->enter($__internal_bc90b369844bd06062823b284772f0584269839601235083873cfaf3dcc693d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_4ffaac19e6216e3025bc51991f849039db1d1b63b3d168bd635aa488a748d7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffaac19e6216e3025bc51991f849039db1d1b63b3d168bd635aa488a748d7d2->enter($__internal_4ffaac19e6216e3025bc51991f849039db1d1b63b3d168bd635aa488a748d7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<section class=\"banner-login\">
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"main main-signup col-lg-12\">
                <div class=\"col-lg-6 col-lg-offset-3 text-center\">
                    <div class=\"form-sign\">
                        <div class=\"form-head\">
                            <h3>Login</h3>

                            ";
        // line 13
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 14
            echo "                                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 16
        echo "
                            <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                ";
        // line 18
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 19
            echo "                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
                                ";
        }
        // line 21
        echo "                                <div class=\"form-body\">
                                    <div class=\"form-row\">
                                        ";
        // line 24
        echo "                                        <input class=\"field\" type=\"text\" id=\"username\" name=\"_username\"
                                               value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                                               required=\"required\"
                                               autocomplete=\"username\" placeholder=\"UserName\"/>
                                    </div>
                                </div>
                                <div class=\"form-body\">
                                    <div class=\"form-row\">
                                        ";
        // line 33
        echo "                                        <input class=\"field\" type=\"password\" id=\"password\" name=\"_password\"
                                               required=\"required\"
                                               autocomplete=\"current-password\" placeholder=\"Password\"/>
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"material-switch pull-left\">
                                        <input class=\"label-success\" type=\"checkbox\" id=\"remember_me\"
                                               name=\"_remember_me\" value=\"on\"/>
                                        <label for=\"remember_me\"></label>
                                        <span>Remember Me</span>
                                    </div>
                                </div>
                                        <div class=\"form-actions\">
                                            <input class=\"kafe-btn kafe-btn-default full-width\" type=\"submit\"
                                                   id=\"_submit\"
                                                   name=\"_submit\"
                                                   value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                        </div>

                                        <div class=\"margin-space\">
                                            <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"
                                               class=\"kafe-btn kafe-btn-danger full-width\">Register</a>
                                        </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        
        $__internal_bc90b369844bd06062823b284772f0584269839601235083873cfaf3dcc693d4->leave($__internal_bc90b369844bd06062823b284772f0584269839601235083873cfaf3dcc693d4_prof);

        
        $__internal_4ffaac19e6216e3025bc51991f849039db1d1b63b3d168bd635aa488a748d7d2->leave($__internal_4ffaac19e6216e3025bc51991f849039db1d1b63b3d168bd635aa488a748d7d2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 55,  98 => 51,  78 => 33,  68 => 25,  65 => 24,  61 => 21,  55 => 19,  53 => 18,  49 => 17,  46 => 16,  40 => 14,  38 => 13,  25 => 2,);
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
                            <h3>Login</h3>

                            {% if error %}
                                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}

                            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                {% if csrf_token %}
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                                {% endif %}
                                <div class=\"form-body\">
                                    <div class=\"form-row\">
                                        {#<label for=\"username\">{{ 'security.login.username'|trans }}</label>#}
                                        <input class=\"field\" type=\"text\" id=\"username\" name=\"_username\"
                                               value=\"{{ last_username }}\"
                                               required=\"required\"
                                               autocomplete=\"username\" placeholder=\"UserName\"/>
                                    </div>
                                </div>
                                <div class=\"form-body\">
                                    <div class=\"form-row\">
                                        {#<label for=\"password\">{{ 'security.login.password'|trans }}</label>#}
                                        <input class=\"field\" type=\"password\" id=\"password\" name=\"_password\"
                                               required=\"required\"
                                               autocomplete=\"current-password\" placeholder=\"Password\"/>
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"material-switch pull-left\">
                                        <input class=\"label-success\" type=\"checkbox\" id=\"remember_me\"
                                               name=\"_remember_me\" value=\"on\"/>
                                        <label for=\"remember_me\"></label>
                                        <span>Remember Me</span>
                                    </div>
                                </div>
                                        <div class=\"form-actions\">
                                            <input class=\"kafe-btn kafe-btn-default full-width\" type=\"submit\"
                                                   id=\"_submit\"
                                                   name=\"_submit\"
                                                   value=\"{{ 'security.login.submit'|trans }}\"/>
                                        </div>

                                        <div class=\"margin-space\">
                                            <a href=\"{{ path('fos_user_registration_register') }}\"
                                               class=\"kafe-btn kafe-btn-danger full-width\">Register</a>
                                        </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
