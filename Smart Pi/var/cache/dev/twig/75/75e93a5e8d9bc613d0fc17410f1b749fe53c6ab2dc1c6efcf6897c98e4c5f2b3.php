<?php

/* @Fix/Frontend/Default/Register.html.twig */
class __TwigTemplate_7f3071c76416904b995759f6c4b034b1339d7c78c22a77b3286765aba7b62a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Fix/Frontend/Default/Register.html.twig", 1);
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
        $__internal_b5153d87abe8aeb24c70c45a60f57ef7adf82358f18110444e983e4ecdf7c317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5153d87abe8aeb24c70c45a60f57ef7adf82358f18110444e983e4ecdf7c317->enter($__internal_b5153d87abe8aeb24c70c45a60f57ef7adf82358f18110444e983e4ecdf7c317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Register.html.twig"));

        $__internal_5bd33cd4398507a90bdcdefb38849b5f4952eedc0590fefa5618fca25e5a431a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd33cd4398507a90bdcdefb38849b5f4952eedc0590fefa5618fca25e5a431a->enter($__internal_5bd33cd4398507a90bdcdefb38849b5f4952eedc0590fefa5618fca25e5a431a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Fix/Frontend/Default/Register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5153d87abe8aeb24c70c45a60f57ef7adf82358f18110444e983e4ecdf7c317->leave($__internal_b5153d87abe8aeb24c70c45a60f57ef7adf82358f18110444e983e4ecdf7c317_prof);

        
        $__internal_5bd33cd4398507a90bdcdefb38849b5f4952eedc0590fefa5618fca25e5a431a->leave($__internal_5bd33cd4398507a90bdcdefb38849b5f4952eedc0590fefa5618fca25e5a431a_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_3ad08bb6ee36e4b9e78f75e40bb1612c314a601f1c40d70e0373f3ee55d452cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad08bb6ee36e4b9e78f75e40bb1612c314a601f1c40d70e0373f3ee55d452cd->enter($__internal_3ad08bb6ee36e4b9e78f75e40bb1612c314a601f1c40d70e0373f3ee55d452cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7902c927713b827217598be2755a244ca8aaf812ae26aa2e0c4624a8123d747f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7902c927713b827217598be2755a244ca8aaf812ae26aa2e0c4624a8123d747f->enter($__internal_7902c927713b827217598be2755a244ca8aaf812ae26aa2e0c4624a8123d747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_7902c927713b827217598be2755a244ca8aaf812ae26aa2e0c4624a8123d747f->leave($__internal_7902c927713b827217598be2755a244ca8aaf812ae26aa2e0c4624a8123d747f_prof);

        
        $__internal_3ad08bb6ee36e4b9e78f75e40bb1612c314a601f1c40d70e0373f3ee55d452cd->leave($__internal_3ad08bb6ee36e4b9e78f75e40bb1612c314a601f1c40d70e0373f3ee55d452cd_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_c8136711729cb9ea26bf9f6e449a78be93ec810986f7d0409cd9e3eb97edcc46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8136711729cb9ea26bf9f6e449a78be93ec810986f7d0409cd9e3eb97edcc46->enter($__internal_c8136711729cb9ea26bf9f6e449a78be93ec810986f7d0409cd9e3eb97edcc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_509db0ee3e08f30e11884f3e4a152669fde20b3bb7a487b2213a83911cf75f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509db0ee3e08f30e11884f3e4a152669fde20b3bb7a487b2213a83911cf75f9f->enter($__internal_509db0ee3e08f30e11884f3e4a152669fde20b3bb7a487b2213a83911cf75f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_509db0ee3e08f30e11884f3e4a152669fde20b3bb7a487b2213a83911cf75f9f->leave($__internal_509db0ee3e08f30e11884f3e4a152669fde20b3bb7a487b2213a83911cf75f9f_prof);

        
        $__internal_c8136711729cb9ea26bf9f6e449a78be93ec810986f7d0409cd9e3eb97edcc46->leave($__internal_c8136711729cb9ea26bf9f6e449a78be93ec810986f7d0409cd9e3eb97edcc46_prof);

    }

    public function getTemplateName()
    {
        return "@Fix/Frontend/Default/Register.html.twig";
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
  {% endblock %}", "@Fix/Frontend/Default/Register.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\src\\FixBundle\\Resources\\views\\Frontend\\Default\\Register.html.twig");
    }
}
