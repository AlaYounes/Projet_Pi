<?php

/* FixBundle:Frontend/Default:Register.html.twig */
class __TwigTemplate_acaf08103f0ad724525cd9cc5c7b5a56315bf2665dee361714a6d70c393d902c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FixBundle:Frontend/Default:Register.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5d60192818791ddf9e4447d4e53720d4fad12f035695f4951b71f367c129931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d60192818791ddf9e4447d4e53720d4fad12f035695f4951b71f367c129931->enter($__internal_d5d60192818791ddf9e4447d4e53720d4fad12f035695f4951b71f367c129931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Register.html.twig"));

        $__internal_cbed87f27a35aadedd5e52a8188b9725cffb34acdc8c9aa0e212efe8154da12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbed87f27a35aadedd5e52a8188b9725cffb34acdc8c9aa0e212efe8154da12b->enter($__internal_cbed87f27a35aadedd5e52a8188b9725cffb34acdc8c9aa0e212efe8154da12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FixBundle:Frontend/Default:Register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5d60192818791ddf9e4447d4e53720d4fad12f035695f4951b71f367c129931->leave($__internal_d5d60192818791ddf9e4447d4e53720d4fad12f035695f4951b71f367c129931_prof);

        
        $__internal_cbed87f27a35aadedd5e52a8188b9725cffb34acdc8c9aa0e212efe8154da12b->leave($__internal_cbed87f27a35aadedd5e52a8188b9725cffb34acdc8c9aa0e212efe8154da12b_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_78945e1b8c05157f991ffd1681d686ebd16888778bb30a602cae64681231953d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78945e1b8c05157f991ffd1681d686ebd16888778bb30a602cae64681231953d->enter($__internal_78945e1b8c05157f991ffd1681d686ebd16888778bb30a602cae64681231953d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a311e902056823ba07d4e10e330c11cd3970ae7d259ad17ffa8d9a89ac4e27fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a311e902056823ba07d4e10e330c11cd3970ae7d259ad17ffa8d9a89ac4e27fe->enter($__internal_a311e902056823ba07d4e10e330c11cd3970ae7d259ad17ffa8d9a89ac4e27fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_a311e902056823ba07d4e10e330c11cd3970ae7d259ad17ffa8d9a89ac4e27fe->leave($__internal_a311e902056823ba07d4e10e330c11cd3970ae7d259ad17ffa8d9a89ac4e27fe_prof);

        
        $__internal_78945e1b8c05157f991ffd1681d686ebd16888778bb30a602cae64681231953d->leave($__internal_78945e1b8c05157f991ffd1681d686ebd16888778bb30a602cae64681231953d_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_9bab36369c13780c02d8196f683ab320acfd793ba1d00d40bcafd9e3bafd3257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bab36369c13780c02d8196f683ab320acfd793ba1d00d40bcafd9e3bafd3257->enter($__internal_9bab36369c13780c02d8196f683ab320acfd793ba1d00d40bcafd9e3bafd3257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_c4435926c7c36d5ffb2c353e9e0d77e55912a0e16f486497c20be9c202766a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4435926c7c36d5ffb2c353e9e0d77e55912a0e16f486497c20be9c202766a15->enter($__internal_c4435926c7c36d5ffb2c353e9e0d77e55912a0e16f486497c20be9c202766a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "      ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "



      <header class=\"header-login top-page\">
          <div class=\"container\">
              <div class=\"content\">
                  <div class=\"row\">
                      <h1 class=\"revealOnScroll\" data-animation=\"fadeInDown\"> The Kafe</h1>
                  </div><!-- /.row -->
              </div><!-- /.content -->
          </div><!-- /.container -->
      </header><!-- /header -->

      <!-- ==============================================
      Banner Login Section
      =============================================== -->
      <section class=\"banner-login\">
          <div class=\"container\">

              <div class=\"row\">

                  <div class=\"main main-signup col-lg-12\">
                      <div class=\"col-lg-6 col-lg-offset-3 text-center\">

                          <div class=\"form-sign\">
                              <form method=\"post\">
                                  <div class=\"form-head\">
                                      <h3>Register</h3>
                                  </div><!-- /.form-head -->
                                  <div class=\"form-body\">


                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"text\" name=\"name\" class=\"field\" placeholder=\"Full Name\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"text\" name=\"email\" class=\"field\" placeholder=\"Email\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"text\" name=\"username\" class=\"field\" placeholder=\"Username\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"password\" name=\"password\" class=\"field\" placeholder=\"Password\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"password\" name=\"confirmPassword\" class=\"field\" placeholder=\"Confirm Password\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"checkbox\">
                                          <label> <input type=\"checkbox\"> Agree to the <a href=\"#\">terms and policy</a> </label>
                                      </div>

                                  </div><!-- /.form-body -->

                                  <div class=\"form-foot\">
                                      <div class=\"form-actions\">
                                          <input type=\"hidden\" name=\"token\" value=\"<?php echo Token::generate(); ?>\" />
                                          <input type=\"submit\" name=\"register\" value=\"Register\" class=\"kafe-btn kafe-btn-default full-width\">
                                      </div><!-- /.form-actions -->
                                  </div><!-- /.form-foot -->
                              </form>

                          </div><!-- /.form-sign -->
                      </div><!-- /.col-lg-6 -->
                  </div>

              </div><!-- /.row -->
          </div><!-- /.container -->
      </section><!-- /section -->


      <!-- ==============================================
      Footer Section
      =============================================== -->
      <footer class=\"footerWhite\">

          <!-- COPY RIGHT -->
          <div class=\"clearfix copyRight\">
              <div class=\"container\">
                  <div class=\"row\">

                      <div class=\"col-xs-12\">
                          <div class=\"copyRightWrapper\">
                              <div class=\"row\">

                                  <div class=\"col-sm-5 col-sm-push-7 col-xs-12\">
                                      <ul class=\"list-inline socialLink\">
                                          <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                          <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                          <li><a href=\"#\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                                          <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                      </ul>
                                  </div><!-- /col-sm-5 -->

                                  <div class=\"col-sm-7 col-sm-pull-5 col-xs-12\">
                                      <div class=\"copyRightText\">
                                          <p>Copyright © 2018. All Rights Reserved</p>
                                      </div>
                                  </div><!-- /col-sm-7 -->

                              </div><!-- /row -->
                          </div><!-- /copyRightWrapper -->
                      </div><!-- /col-xs-2 -->

                  </div><!-- /row -->
              </div><!-- /container -->
          </div><!-- /copyRight -->
  ";
        
        $__internal_c4435926c7c36d5ffb2c353e9e0d77e55912a0e16f486497c20be9c202766a15->leave($__internal_c4435926c7c36d5ffb2c353e9e0d77e55912a0e16f486497c20be9c202766a15_prof);

        
        $__internal_9bab36369c13780c02d8196f683ab320acfd793ba1d00d40bcafd9e3bafd3257->leave($__internal_9bab36369c13780c02d8196f683ab320acfd793ba1d00d40bcafd9e3bafd3257_prof);

    }

    public function getTemplateName()
    {
        return "FixBundle:Frontend/Default:Register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base.html.twig' %}
{% block header %}
    {{ parent() }}
{% endblock %}
  {% block container%}
      {{ parent() }}



      <header class=\"header-login top-page\">
          <div class=\"container\">
              <div class=\"content\">
                  <div class=\"row\">
                      <h1 class=\"revealOnScroll\" data-animation=\"fadeInDown\"> The Kafe</h1>
                  </div><!-- /.row -->
              </div><!-- /.content -->
          </div><!-- /.container -->
      </header><!-- /header -->

      <!-- ==============================================
      Banner Login Section
      =============================================== -->
      <section class=\"banner-login\">
          <div class=\"container\">

              <div class=\"row\">

                  <div class=\"main main-signup col-lg-12\">
                      <div class=\"col-lg-6 col-lg-offset-3 text-center\">

                          <div class=\"form-sign\">
                              <form method=\"post\">
                                  <div class=\"form-head\">
                                      <h3>Register</h3>
                                  </div><!-- /.form-head -->
                                  <div class=\"form-body\">


                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"text\" name=\"name\" class=\"field\" placeholder=\"Full Name\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"text\" name=\"email\" class=\"field\" placeholder=\"Email\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"text\" name=\"username\" class=\"field\" placeholder=\"Username\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"password\" name=\"password\" class=\"field\" placeholder=\"Password\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"form-row\">
                                          <div class=\"form-controls\">
                                              <input type=\"password\" name=\"confirmPassword\" class=\"field\" placeholder=\"Confirm Password\">
                                          </div><!-- /.form-controls -->
                                      </div><!-- /.form-row -->

                                      <div class=\"checkbox\">
                                          <label> <input type=\"checkbox\"> Agree to the <a href=\"#\">terms and policy</a> </label>
                                      </div>

                                  </div><!-- /.form-body -->

                                  <div class=\"form-foot\">
                                      <div class=\"form-actions\">
                                          <input type=\"hidden\" name=\"token\" value=\"<?php echo Token::generate(); ?>\" />
                                          <input type=\"submit\" name=\"register\" value=\"Register\" class=\"kafe-btn kafe-btn-default full-width\">
                                      </div><!-- /.form-actions -->
                                  </div><!-- /.form-foot -->
                              </form>

                          </div><!-- /.form-sign -->
                      </div><!-- /.col-lg-6 -->
                  </div>

              </div><!-- /.row -->
          </div><!-- /.container -->
      </section><!-- /section -->


      <!-- ==============================================
      Footer Section
      =============================================== -->
      <footer class=\"footerWhite\">

          <!-- COPY RIGHT -->
          <div class=\"clearfix copyRight\">
              <div class=\"container\">
                  <div class=\"row\">

                      <div class=\"col-xs-12\">
                          <div class=\"copyRightWrapper\">
                              <div class=\"row\">

                                  <div class=\"col-sm-5 col-sm-push-7 col-xs-12\">
                                      <ul class=\"list-inline socialLink\">
                                          <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                          <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                          <li><a href=\"#\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                                          <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                      </ul>
                                  </div><!-- /col-sm-5 -->

                                  <div class=\"col-sm-7 col-sm-pull-5 col-xs-12\">
                                      <div class=\"copyRightText\">
                                          <p>Copyright © 2018. All Rights Reserved</p>
                                      </div>
                                  </div><!-- /col-sm-7 -->

                              </div><!-- /row -->
                          </div><!-- /copyRightWrapper -->
                      </div><!-- /col-xs-2 -->

                  </div><!-- /row -->
              </div><!-- /container -->
          </div><!-- /copyRight -->
  {% endblock %}", "FixBundle:Frontend/Default:Register.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle/Resources/views/Frontend/Default/Register.html.twig");
    }
}
