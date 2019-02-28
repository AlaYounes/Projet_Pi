<?php

/* article/edit.html.twig */
class __TwigTemplate_102d36cdc6281d6eba858f4d2c792c4047fc5cf26c348c5cc607528bde7c5956 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "article/edit.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be07ce3137da63bd3e6d74e94f1270a3b276b93bd36cdfa094ca4904ca485336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be07ce3137da63bd3e6d74e94f1270a3b276b93bd36cdfa094ca4904ca485336->enter($__internal_be07ce3137da63bd3e6d74e94f1270a3b276b93bd36cdfa094ca4904ca485336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_afee98905defd525e0b219b2cd2388d5c658d723a8636c13e29653c80a9dc1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afee98905defd525e0b219b2cd2388d5c658d723a8636c13e29653c80a9dc1f6->enter($__internal_afee98905defd525e0b219b2cd2388d5c658d723a8636c13e29653c80a9dc1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be07ce3137da63bd3e6d74e94f1270a3b276b93bd36cdfa094ca4904ca485336->leave($__internal_be07ce3137da63bd3e6d74e94f1270a3b276b93bd36cdfa094ca4904ca485336_prof);

        
        $__internal_afee98905defd525e0b219b2cd2388d5c658d723a8636c13e29653c80a9dc1f6->leave($__internal_afee98905defd525e0b219b2cd2388d5c658d723a8636c13e29653c80a9dc1f6_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_aadb037066a78a2d043368f1baeb8b43810f10003e0c947cdf36558a9ad8cad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aadb037066a78a2d043368f1baeb8b43810f10003e0c947cdf36558a9ad8cad7->enter($__internal_aadb037066a78a2d043368f1baeb8b43810f10003e0c947cdf36558a9ad8cad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_3462af83458d67162ccac600ee98d3cf7826f020a5ba824d0e227aa76aef1cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3462af83458d67162ccac600ee98d3cf7826f020a5ba824d0e227aa76aef1cbe->enter($__internal_3462af83458d67162ccac600ee98d3cf7826f020a5ba824d0e227aa76aef1cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "
    <h1 align=\"center\">Article edit Home Page</h1>
    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "    <ul>

    ";
        // line 29
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "auteur", array()))) {
            // line 30
            echo "
        ";
            // line 31
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
            echo "
        ";
            // line 32
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
            echo "

        <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Edit\"/>
        ";
            // line 35
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
            echo "


        ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
            echo "
        <input class=\"btn btn-block btn-danger\" type=\"submit\" value=\"Delete\">
        ";
            // line 40
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
            echo "

        <div>
            <strong><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
            echo "\">Back to the list</a></strong>
        </div>


        </ul>
    ";
        } else {
            // line 49
            echo "

        <!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"robots\" content=\"noindex, nofollow\">
            <title>Simple 404 Not Found Page - Bootsnipp.com</title>
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\"
                  id=\"bootstrap-css\">
            <style type=\"text/css\">
                body {
                    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);
                }

                .error-template {
                    padding: 40px 15px;
                    text-align: center;
                }

                .error-actions {
                    margin-top: 15px;
                    margin-bottom: 15px;
                }

                .error-actions .btn {
                    margin-right: 10px;
                }    </style>
            <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
            <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
            <script type=\"text/javascript\">
                window.alert = function () {
                };
                var defaultCSS = document.getElementById('bootstrap-css');

                function changeCSS(css) {
                    if (css) \$('head > link').filter(':first').replaceWith('<link rel=\"stylesheet\" href=\"' + css + '\" type=\"text/css\" />');
                    else \$('head > link').filter(':first').replaceWith(defaultCSS);
                }

                \$(document).ready(function () {
                    var iframe_height = parseInt(\$('html').height());
                    window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
                });
            </script>
        </head>
        <body>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"error-template\">
                        <h1>
                            Oops!</h1>
                        <h2>
                            404 Not Found</h2>
                        <div class=\"error-details\">
                            Sorry <strong><font color=\"red\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</font></strong> , an error has
                            occured, Actions Not Allowed !!!
                        </div>
                        <div class=\"error-actions\">
                            <a href=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
            echo "\" class=\"btn btn-primary btn-lg\"><span
                                        class=\"glyphicon glyphicon-home\"></span>
                                Take Me Home </a><a href=\"http://www.jquery2dotnet.com\"
                                                    class=\"btn btn-default btn-lg\"><span
                                        class=\"glyphicon glyphicon-envelope\"></span> Contact Support </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type=\"text/javascript\">
        </script>
        </body>
        </html>




    ";
        }
        
        $__internal_3462af83458d67162ccac600ee98d3cf7826f020a5ba824d0e227aa76aef1cbe->leave($__internal_3462af83458d67162ccac600ee98d3cf7826f020a5ba824d0e227aa76aef1cbe_prof);

        
        $__internal_aadb037066a78a2d043368f1baeb8b43810f10003e0c947cdf36558a9ad8cad7->leave($__internal_aadb037066a78a2d043368f1baeb8b43810f10003e0c947cdf36558a9ad8cad7_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 110,  199 => 106,  140 => 49,  131 => 43,  125 => 40,  120 => 38,  114 => 35,  108 => 32,  104 => 31,  101 => 30,  99 => 29,  95 => 27,  93 => 26,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  83 => 21,  81 => 20,  79 => 19,  77 => 18,  75 => 17,  73 => 16,  71 => 15,  69 => 14,  66 => 12,  64 => 11,  62 => 10,  60 => 9,  58 => 8,  56 => 7,  52 => 4,  43 => 3,  33 => 1,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base1.html.twig' %}
{% form_theme edit_form 'bootstrap_3_layout.html.twig' %}
{% block container %}

    <h1 align=\"center\">Article edit Home Page</h1>
    {#{% if is_granted('ROLE_ADMIN') %}#}
    {#<b>admin</b>#}
    {#{% endif %}#}
    {#{% if is_granted('ROLE_USER') %}#}
    {#<b>client</b>#}
    {#{% endif %}#}

    {#<p>INFOS </p>#}
    {#<ul>#}
    {#\$id=: {{ app.user.username }}#}
    {#\$auteur=: {{ article.auteur }}#}
    {#</ul>#}
    {#{% if app.user.username == article.auteur %}#}
    {#<h3>Hello </h3>#}
    {#{% else %}#}
    {#<h3>No</h3>#}
    {#{% endif %}#}
    {#{{ dump(app.user.username) }}#}
    {#{{ dump(article.auteur) }}#}
    {#{{ dump(count) }}#}
    {#{{ dump(app.user) }}#}
    <ul>

    {% if app.user.username == article.auteur %}

        {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}

        <input class=\"btn btn-block btn-info\" type=\"submit\" value=\"Edit\"/>
        {{ form_end(edit_form) }}


        {{ form_start(delete_form) }}
        <input class=\"btn btn-block btn-danger\" type=\"submit\" value=\"Delete\">
        {{ form_end(delete_form) }}

        <div>
            <strong><a href=\"{{ path('article_index') }}\">Back to the list</a></strong>
        </div>


        </ul>
    {% else %}


        <!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"robots\" content=\"noindex, nofollow\">
            <title>Simple 404 Not Found Page - Bootsnipp.com</title>
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\"
                  id=\"bootstrap-css\">
            <style type=\"text/css\">
                body {
                    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);
                }

                .error-template {
                    padding: 40px 15px;
                    text-align: center;
                }

                .error-actions {
                    margin-top: 15px;
                    margin-bottom: 15px;
                }

                .error-actions .btn {
                    margin-right: 10px;
                }    </style>
            <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
            <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
            <script type=\"text/javascript\">
                window.alert = function () {
                };
                var defaultCSS = document.getElementById('bootstrap-css');

                function changeCSS(css) {
                    if (css) \$('head > link').filter(':first').replaceWith('<link rel=\"stylesheet\" href=\"' + css + '\" type=\"text/css\" />');
                    else \$('head > link').filter(':first').replaceWith(defaultCSS);
                }

                \$(document).ready(function () {
                    var iframe_height = parseInt(\$('html').height());
                    window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
                });
            </script>
        </head>
        <body>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"error-template\">
                        <h1>
                            Oops!</h1>
                        <h2>
                            404 Not Found</h2>
                        <div class=\"error-details\">
                            Sorry <strong><font color=\"red\">{{ app.user.username }}</font></strong> , an error has
                            occured, Actions Not Allowed !!!
                        </div>
                        <div class=\"error-actions\">
                            <a href=\"{{ path('article_index') }}\" class=\"btn btn-primary btn-lg\"><span
                                        class=\"glyphicon glyphicon-home\"></span>
                                Take Me Home </a><a href=\"http://www.jquery2dotnet.com\"
                                                    class=\"btn btn-default btn-lg\"><span
                                        class=\"glyphicon glyphicon-envelope\"></span> Contact Support </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type=\"text/javascript\">
        </script>
        </body>
        </html>




    {% endif %}
{% endblock %}
", "article/edit.html.twig", "C:\\xampp\\htdocs\\PI_DEV\\app\\Resources\\views\\article\\edit.html.twig");
    }
}
