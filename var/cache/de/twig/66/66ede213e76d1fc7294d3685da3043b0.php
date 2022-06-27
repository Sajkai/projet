<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/index.html.twig */
class __TwigTemplate_53b07b68a0e337d374bea0ce61b5a188 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    ";
        if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("date");
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dates");
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"container py-5\">
        <div class=\"text-center mb-5\">
            <h1 class=\"display-4 font-weight-bold\">Location Voiture</h1>
            ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 15, $this->source); })())) > 1)) {
            // line 16
            echo "            <p class=\"font-italic text-muted mb-0\">Choisissez parmis nos <strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 16, $this->source); })())), "html", null, true);
            echo "</strong>
                modèles</p>
            ";
        }
        // line 19
        echo "            <br />
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
            <div class=\"my-custom-class-for-errors\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'errors');
        echo "
            </div>
            <div class=\"row justify-content-md-center\">
                <div class=\"col-6\">
                    ";
        // line 26
        if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), 'row', ["label" => "Choisissez la date de début de location :"]);
            echo "
                    ";
        } else {
            // line 29
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "date", [], "any", false, false, false, 29), 'row', ["label" => "Choisissez vos dates de location :"]);
            echo "
                    ";
        }
        // line 31
        echo "                </div>
            </div>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'rest');
        echo "
            <div class=\"row justify-content-md-center my-3\">
                <div class=\"col-3\">
                    ";
        // line 36
        if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_date_init");
            echo "\" class=\"btn btn-warning\">Location à des dates précises</a>
                    ";
        } else {
            // line 39
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_date_reset");
            echo "\" class=\"btn btn-info\">Location mensuelle</a>
                    ";
        }
        // line 41
        echo "                </div>
                <div class=\"col-3\">
                    <button class=\"btn btn-primary\" type=\"submit\">
                        Valider ";
        // line 44
        if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 44, $this->source); })())) {
            echo "la date";
        } else {
            echo "les dates";
        }
        echo " <span class='fa fa-calendar-alt'></span>
                    </button>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-6\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            echo "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 52
            echo $context["message"];
            echo "
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            echo "                        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 60
            echo $context["message"];
            echo "
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 67
            echo "                        <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 68
            echo $context["message"];
            echo "
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 75
            echo "                        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 76
            echo $context["message"];
            echo "
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </div>
            </div>
            ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
        </div>

        <div class=\"row pb-5 mb-4\" id=\"grid-types\">

            ";
        // line 89
        if ((twig_length_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 89, $this->source); })())) > 0)) {
            // line 90
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 90, $this->source); })()), (0 + (8 * ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()) - 1))), (8 + (8 * ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()) - 1)))));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 91
                echo "                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <!-- Card-->
                    <div class=\"card rounded shadow-sm border-0\">
                        <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_type", ["id" => twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\" class=\"text-dark\">
                            <div class=\"card-body p-4\">
                                <img src=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["type"], "imageFile", "App\\Entity\\CarType")), "html", null, true);
                echo "\"
                                     alt=\"";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["type"], "image", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
                echo "\" class=\"img-fluid d-block mx-auto mb-3\">
                                <h3>
                                    ";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 99), "html", null, true);
                echo "
                                </h3>
                                ";
                // line 101
                $context["minimalPrice"] = 10000;
                // line 102
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["type"], "Cars", [], "any", false, false, false, 102));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 103
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["v"], "price", [], "any", false, false, false, 103) < (isset($context["minimalPrice"]) || array_key_exists("minimalPrice", $context) ? $context["minimalPrice"] : (function () { throw new RuntimeError('Variable "minimalPrice" does not exist.', 103, $this->source); })()))) {
                        // line 104
                        echo "                                        ";
                        $context["minimalPrice"] = twig_get_attribute($this->env, $this->source, $context["v"], "price", [], "any", false, false, false, 104);
                        // line 105
                        echo "                                    ";
                    }
                    // line 106
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                                <p class=\"small font-bold float-right\">À partir de
                                    ";
                // line 108
                if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 108, $this->source); })())) {
                    echo twig_escape_filter($this->env, (((isset($context["minimalPrice"]) || array_key_exists("minimalPrice", $context) ? $context["minimalPrice"] : (function () { throw new RuntimeError('Variable "minimalPrice" does not exist.', 108, $this->source); })()) * 0.9) * 30), "html", null, true);
                    echo " €/mois";
                } else {
                    echo twig_escape_filter($this->env, (isset($context["minimalPrice"]) || array_key_exists("minimalPrice", $context) ? $context["minimalPrice"] : (function () { throw new RuntimeError('Variable "minimalPrice" does not exist.', 108, $this->source); })()), "html", null, true);
                    echo " €/jour";
                }
                echo "</p>
                            </div>
                        </a>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "            ";
        } else {
            // line 115
            echo "            <div class=\"jumbotron jumbotron-fluid w-100\">
                <div class=\"container\">
                    <h1 class=\"display-4\">Oops !</h1>
                    <p class=\"lead\">Aucune voiture disponible ! Des dates différentes peuvent donner de nouveaux résultats!</p>
                </div>
            </div>
            ";
        }
        // line 122
        echo "
            ";
        // line 123
        if ((twig_length_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 123, $this->source); })())) > 8)) {
            // line 124
            echo "            <nav class=\"col-12\">
                <ul class=\"pagination justify-content-center\">
                    ";
            // line 126
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 126, $this->source); })()) != 1)) {
                // line 127
                echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_home", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 128, $this->source); })()) - 1)]), "html", null, true);
                echo "\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Précédent</span>
                        </a>
                    </li>
                    ";
            }
            // line 134
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 134, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 135
                echo "                        ";
                if (($context["i"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 135, $this->source); })()))) {
                    // line 136
                    echo "                            <li class=\"page-item disabled\"><a class=\"page-link disabled\" href=\"#\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a></li>
                        ";
                } else {
                    // line 138
                    echo "                            <li class=\"page-item\"><a class=\"page-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_home", ["page" => $context["i"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 140
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                    ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 141, $this->source); })()) != (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 141, $this->source); })()))) {
                // line 142
                echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_home", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 143, $this->source); })()) + 1)]), "html", null, true);
                echo "\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Suivant</span>
                        </a>
                    </li>
                    ";
            }
            // line 149
            echo "                </ul>
            </nav>
            ";
        }
        // line 152
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "    ";
        if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 156, $this->source); })())) {
            // line 157
            echo "        ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("date");
            echo "
    ";
        } else {
            // line 159
            echo "        ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dates");
            echo "
    ";
        }
        // line 161
        echo "<script>
    \$(document).ready(function () {
        ";
        // line 163
        if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 163, $this->source); })())) {
            // line 164
            echo "
        picker.setDate(\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 165, $this->source); })()), "Start", [], "any", false, false, false, 165), "html", null, true);
            echo "\");

        ";
        } else {
            // line 168
            echo "
            ";
            // line 169
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 169, $this->source); })()), "Start", [], "any", false, false, false, 169)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 169, $this->source); })()), "End", [], "any", false, false, false, 169)))) {
                // line 170
                echo "            picker.setDateRange(\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 170, $this->source); })()), "Start", [], "any", false, false, false, 170), "html", null, true);
                echo "\", \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 170, $this->source); })()), "End", [], "any", false, false, false, 170), "html", null, true);
                echo "\");
            ";
            }
            // line 172
            echo "
        ";
        }
        // line 174
        echo "    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 174,  480 => 172,  472 => 170,  470 => 169,  467 => 168,  461 => 165,  458 => 164,  456 => 163,  452 => 161,  446 => 159,  440 => 157,  437 => 156,  430 => 155,  421 => 152,  416 => 149,  407 => 143,  404 => 142,  401 => 141,  395 => 140,  387 => 138,  381 => 136,  378 => 135,  373 => 134,  364 => 128,  361 => 127,  359 => 126,  355 => 124,  353 => 123,  350 => 122,  341 => 115,  338 => 114,  320 => 108,  317 => 107,  311 => 106,  308 => 105,  305 => 104,  302 => 103,  297 => 102,  295 => 101,  290 => 99,  285 => 97,  281 => 96,  276 => 94,  271 => 91,  266 => 90,  264 => 89,  256 => 84,  252 => 82,  240 => 76,  237 => 75,  232 => 74,  220 => 68,  217 => 67,  212 => 66,  200 => 60,  197 => 59,  192 => 58,  180 => 52,  177 => 51,  173 => 50,  160 => 44,  155 => 41,  149 => 39,  143 => 37,  141 => 36,  135 => 33,  131 => 31,  125 => 29,  119 => 27,  117 => 26,  110 => 22,  105 => 20,  102 => 19,  95 => 16,  93 => 15,  88 => 12,  81 => 11,  70 => 7,  64 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block style %}
    {% if isMonthlyRecurring %}
        {{ encore_entry_link_tags('date') }}
    {% else %}
        {{ encore_entry_link_tags('dates') }}
    {% endif %}
{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <div class=\"text-center mb-5\">
            <h1 class=\"display-4 font-weight-bold\">Location Voiture</h1>
            {% if types|length > 1 %}
            <p class=\"font-italic text-muted mb-0\">Choisissez parmis nos <strong>{{ types|length }}</strong>
                modèles</p>
            {% endif %}
            <br />
            {{ form_start(form) }}
            <div class=\"my-custom-class-for-errors\">
                {{ form_errors(form) }}
            </div>
            <div class=\"row justify-content-md-center\">
                <div class=\"col-6\">
                    {% if isMonthlyRecurring %}
                        {{ form_row(form.date, {'label': 'Choisissez la date de début de location :'}) }}
                    {% else %}
                        {{ form_row(form.date, {'label': 'Choisissez vos dates de location :'}) }}
                    {% endif %}
                </div>
            </div>
            {{ form_rest(form) }}
            <div class=\"row justify-content-md-center my-3\">
                <div class=\"col-3\">
                    {% if isMonthlyRecurring %}
                        <a href=\"{{ path('index_date_init') }}\" class=\"btn btn-warning\">Location à des dates précises</a>
                    {% else %}
                        <a href=\"{{ path('index_date_reset') }}\" class=\"btn btn-info\">Location mensuelle</a>
                    {% endif %}
                </div>
                <div class=\"col-3\">
                    <button class=\"btn btn-primary\" type=\"submit\">
                        Valider {% if isMonthlyRecurring %}la date{% else %}les dates{% endif %} <span class='fa fa-calendar-alt'></span>
                    </button>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-6\">
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            {{ message|raw }}
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('danger') %}
                        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            {{ message|raw }}
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('info') %}
                        <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
                            {{ message|raw }}
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('warning') %}
                        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            {{ message|raw }}
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    {% endfor %}
                </div>
            </div>
            {{ form_end(form) }}
        </div>

        <div class=\"row pb-5 mb-4\" id=\"grid-types\">

            {% if types|length > 0 %}
                {% for type in types|slice(0+(8*(page-1)),8+(8*(page-1))) %}
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <!-- Card-->
                    <div class=\"card rounded shadow-sm border-0\">
                        <a href=\"{{ path('index_type', {id: type.id})}}\" class=\"text-dark\">
                            <div class=\"card-body p-4\">
                                <img src=\"{{ asset(vich_uploader_asset(type, 'imageFile', 'App\\\\Entity\\\\CarType')) }}\"
                                     alt=\"{{ type.image.name }}\" class=\"img-fluid d-block mx-auto mb-3\">
                                <h3>
                                    {{ type.name }}
                                </h3>
                                {% set minimalPrice = 10000 %}
                                {% for v in type.Cars %}
                                    {% if v.price < minimalPrice%}
                                        {% set minimalPrice = v.price %}
                                    {% endif %}
                                {% endfor %}
                                <p class=\"small font-bold float-right\">À partir de
                                    {% if isMonthlyRecurring %}{{ minimalPrice * 0.9 * 30 }} €/mois{% else %}{{ minimalPrice }} €/jour{% endif %}</p>
                            </div>
                        </a>
                    </div>
                </div>
                {% endfor %}
            {% else %}
            <div class=\"jumbotron jumbotron-fluid w-100\">
                <div class=\"container\">
                    <h1 class=\"display-4\">Oops !</h1>
                    <p class=\"lead\">Aucune voiture disponible ! Des dates différentes peuvent donner de nouveaux résultats!</p>
                </div>
            </div>
            {% endif %}

            {% if types|length > 8 %}
            <nav class=\"col-12\">
                <ul class=\"pagination justify-content-center\">
                    {% if page != 1 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('index_home', {'page': page-1}) }}\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Précédent</span>
                        </a>
                    </li>
                    {% endif %}
                    {% for i in 1..nbPages %}
                        {% if i == page %}
                            <li class=\"page-item disabled\"><a class=\"page-link disabled\" href=\"#\">{{ i }}</a></li>
                        {% else %}
                            <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('index_home', {'page': i}) }}\">{{ i }}</a></li>
                        {% endif %}
                    {% endfor %}
                    {% if page != nbPages %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('index_home', {'page': page+1}) }}\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Suivant</span>
                        </a>
                    </li>
                    {% endif %}
                </ul>
            </nav>
            {% endif %}
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {% if isMonthlyRecurring %}
        {{ encore_entry_script_tags('date') }}
    {% else %}
        {{ encore_entry_script_tags('dates') }}
    {% endif %}
<script>
    \$(document).ready(function () {
        {% if isMonthlyRecurring %}

        picker.setDate(\"{{ savedDates.Start }}\");

        {% else %}

            {% if savedDates.Start is not empty and savedDates.End is not empty%}
            picker.setDateRange(\"{{ savedDates.Start }}\", \"{{ savedDates.End }}\");
            {% endif %}

        {% endif %}
    });
</script>
{% endblock %}", "index/index.html.twig", "/Users/user/SITE/PROJET/templates/index/index.html.twig");
    }
}
