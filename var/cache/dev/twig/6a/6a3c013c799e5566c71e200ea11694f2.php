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

/* index/car.html.twig */
class __TwigTemplate_9867b686e744133fdbf7d899eab38bb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/car.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/car.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/car.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dates");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container py-5\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"row pb-5 mb-4\">
            <div class=\"col\">
                <!-- Card-->
                <div class=\"card rounded shadow-sm border-0\">
                    <div class=\"card-body p-4\">
                        <a class=\"fa_icon\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_home");
        echo "\">
                            <span class=\"fa fa-angle-left\"></span>
                        </a>
                        <div class='row align-items-center'>
                            <div class=\"col-8\">
                                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 19, $this->source); })()), "imageFile", "App\\Entity\\CarType")), "html", null, true);
        echo "\" class=\"img-fluid d-block mx-auto mb-3\" alt=\"\">
                            </div>
                            <div class=\"col-4\">
                                <h5>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</h5>
                                ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["Cars"]) || array_key_exists("Cars", $context) ? $context["Cars"] : (function () { throw new RuntimeError('Variable "Cars" does not exist.', 23, $this->source); })())) > 1)) {
            // line 24
            echo "                                    <p class=\"small text-muted font-italic\"><strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Cars"]) || array_key_exists("Cars", $context) ? $context["Cars"] : (function () { throw new RuntimeError('Variable "Cars" does not exist.', 24, $this->source); })())), "html", null, true);
            echo "</strong> disponibles</p>
                                ";
        } else {
            // line 26
            echo "                                    <p class=\"small text-muted font-italic\"><strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Cars"]) || array_key_exists("Cars", $context) ? $context["Cars"] : (function () { throw new RuntimeError('Variable "Cars" does not exist.', 26, $this->source); })())), "html", null, true);
            echo "</strong> disponible</p>
                                ";
        }
        // line 28
        echo "                            </div>
                        </div>

                            <div class=\"row align-items-center\">
                                    ";
        // line 32
        if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "                                        <div class=\"jumbotron w-100\">
                                            <div class=\"container\">
                                                <h1 class=\"display-4\">Location mensuelle</h1>
                                                <p class=\"lead\">Un paiement chaque mois, réservé pour vous pour une durée indéterminé, annulable à partir du premier mois! </p>
                                                ";
            // line 37
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 37, $this->source); })()), "Start", [], "any", false, false, false, 37))) {
                // line 38
                echo "                                                    <span>A partir du ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 38, $this->source); })()), "Start", [], "any", false, false, false, 38), "html", null, true);
                echo "</span>
                                                ";
            }
            // line 40
            echo "                                            </div>
                                        </div>
                                    ";
        } else {
            // line 43
            echo "                                        <div class=\"jumbotron w-100\">
                                            <div class=\"container\">
                                                <h1 class=\"display-5\">Location personalisée</h1>
                                                <p class=\"lead\">Profiter d'une location à des dates précises, qui convient à tous, à partir d'un jour!</p>
                                                <span>Location du <strong>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 47, $this->source); })()), "Start", [], "any", false, false, false, 47), "html", null, true);
            echo "</strong> au <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 47, $this->source); })()), "End", [], "any", false, false, false, 47), "html", null, true);
            echo "</strong></span>
                                            </div>
                                        </div>
                                    ";
        }
        // line 51
        echo "                            </div>

                        <div class=\"container-fluid py-5\">

                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            echo "                                <div class=\"alert alert-success\">
                                    ";
            // line 57
            echo $context["message"];
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 61
            echo "                                <div class=\"alert alert-danger\">
                                    ";
            // line 62
            echo $context["message"];
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Cars"]) || array_key_exists("Cars", $context) ? $context["Cars"] : (function () { throw new RuntimeError('Variable "Cars" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 67
            echo "                            <hr>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <form id=\"vehicule_";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_louer", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" method=\"post\">

                                        <label for=\"date_";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\" hidden></label>
                                        <input id=\"date_";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" name=\"date\" class=\"inputDate\" hidden>
                                        <h3>
                                            ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
            echo "
                                        </h3>

";
            // line 79
            echo "                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <img class=\"img-fluid d-block rounded\" alt=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "image", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
            echo "\"
                                                     src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["car"], "imageFile", "App\\Entity\\Car")), "html", null, true);
            echo "\" />
                                            </div>
                                            <div class=\"col-md-4\">
                                                <dl>
                                                    ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["car"], "features", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["key"] => $context["descr"]) {
                // line 87
                echo "                                                        <dt>
                                                            ";
                // line 88
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "
                                                        </dt>
                                                        <dd>
                                                            ";
                // line 91
                echo twig_escape_filter($this->env, $context["descr"], "html", null, true);
                echo "
                                                        </dd>
                                                        <br />
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['descr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                                                </dl>
                                            </div>
                                            <div class=\"col-md-4\">
                                                ";
            // line 98
            if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 98, $this->source); })())) {
                // line 99
                echo "                                                    <h3 class=\"text-center\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 99) * 0.9) * 30), "html", null, true);
                echo " €/mois</h3>
                                                    <small class=\"float-right\" style=\"color:orangered\"><small style=\"color:black;text-decoration: line-through;\">";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 100), "html", null, true);
                echo "</small> <strong>";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 100) * 0.9), "html", null, true);
                echo "</strong> €/jours -10%</small>
                                                ";
            } elseif ((            // line 101
(isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 101, $this->source); })()) >= 30)) {
                // line 102
                echo "                                                    <h3 class=\"text-center\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 102) * 0.9) * (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 102, $this->source); })())), "html", null, true);
                echo " €</h3>
                                                    <small class=\"float-right\" style=\"color:orangered\"><small style=\"color:black;text-decoration: line-through;\">";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 103), "html", null, true);
                echo "</small> <strong>";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 103) * 0.9), "html", null, true);
                echo "</strong> €/jours -10%</small>
                                                ";
            } else {
                // line 105
                echo "                                                    <h3 class=\"text-center\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 105) * (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 105, $this->source); })())), "html", null, true);
                echo " €</h3>
                                                    <small class=\"float-right\">";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 106), "html", null, true);
                echo " €/jours</small>
                                                ";
            }
            // line 108
            echo "
                                                ";
            // line 109
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 110
                echo "                                                    <button type=\"button\" class=\"validateLocation btn btn-main btn-outline-primary m-2 px-2\" data-toggle=\"modal\" data-target=\"#M_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 110), "html", null, true);
                echo "\">
                                                        Réserver Maintenant
                                                    </button>
                                                ";
            } else {
                // line 114
                echo "                                                    <button type=\"button\" class=\"validateLocation btn btn-main btn-outline-primary m-2 px-2\" data-toggle=\"modal\" data-target=\"#needLogin\">
                                                        Réserver Maintenant
                                                    </button>
                                                ";
            }
            // line 118
            echo "
                                                <!-- Confirmation -->
                                                <div class=\"modal fade\" id=\"M_";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 120), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"BuyM_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 120), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title\" id=\"BuyM_";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\">Confirmation de location</h5>
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                Ce véhicule vous sera facturé
                                                                ";
            // line 131
            if ((isset($context["isMonthlyRecurring"]) || array_key_exists("isMonthlyRecurring", $context) ? $context["isMonthlyRecurring"] : (function () { throw new RuntimeError('Variable "isMonthlyRecurring" does not exist.', 131, $this->source); })())) {
                // line 132
                echo "                                                                    <strong>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 132) * 0.9) * 30), "html", null, true);
                echo "€/mois</strong>
                                                                     à partir
                                                                    ";
                // line 134
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 134, $this->source); })()), "Start", [], "any", false, false, false, 134))) {
                    // line 135
                    echo "                                                                        d'aujourd'hui
                                                                    ";
                } else {
                    // line 137
                    echo "                                                                        du ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 137, $this->source); })()), "Start", [], "any", false, false, false, 137), "html", null, true);
                    echo "

                                                                    ";
                }
                // line 140
                echo "                                                                ";
            } elseif (((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 140, $this->source); })()) >= 30)) {
                // line 141
                echo "                                                                    <strong>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 141) * 0.9) * (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 141, $this->source); })())), "html", null, true);
                echo " €</strong> du
                                                                    ";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 142, $this->source); })()), "Start", [], "any", false, false, false, 142), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 142, $this->source); })()), "End", [], "any", false, false, false, 142), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 144
                echo "                                                                    <strong>";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 144) * (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 144, $this->source); })())), "html", null, true);
                echo " €</strong> du
                                                                    ";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 145, $this->source); })()), "Start", [], "any", false, false, false, 145), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 145, $this->source); })()), "End", [], "any", false, false, false, 145), "html", null, true);
                echo "
                                                                ";
            }
            // line 147
            echo "                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                                <input type=\"submit\" class=\"btn btn-primary validateLocation\" value=\"Confirmer\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                            <div class=\"modal fade\" id=\"needLogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"NeedLoginLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"NeedLoginLabel\">Veuillez vous connecter</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            La réservation d'un véhicule nécessite un compte utilisateur.
                                        </div>
                                        <input name=\"hiddenDate\" class=\"currentDate\" type=\"hidden\" hidden>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">Annuler</button>
                                            <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary\">Connexion/Inscription</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 189
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 190
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dates");
        echo "
        <script>
            \$(document).ready(function () {

                ";
        // line 194
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 194, $this->source); })()), "Start", [], "any", false, false, false, 194)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 194, $this->source); })()), "End", [], "any", false, false, false, 194)))) {
            // line 195
            echo "                    \$('.currentDate').val(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 195, $this->source); })()), "Start", [], "any", false, false, false, 195), "html", null, true);
            echo "\" + \" - \" + \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedDates"]) || array_key_exists("savedDates", $context) ? $context["savedDates"] : (function () { throw new RuntimeError('Variable "savedDates" does not exist.', 195, $this->source); })()), "End", [], "any", false, false, false, 195), "html", null, true);
            echo "\");
                ";
        }
        // line 197
        echo "
                //permet de mettre à jour les dates pour les envoyer automatiquement
                \$(document).ready(function () {
                    \$('.validateLocation').on('mouseover', function () {
                        var textDate = \$('.currentDate').val();
                        \$('.inputDate').each(function (index) {
                            \$(this).val(textDate);
                        });
                    });
                });

            });
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index/car.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 197,  499 => 195,  497 => 194,  489 => 190,  470 => 189,  454 => 176,  437 => 161,  418 => 147,  411 => 145,  406 => 144,  399 => 142,  394 => 141,  391 => 140,  384 => 137,  380 => 135,  378 => 134,  372 => 132,  370 => 131,  360 => 124,  351 => 120,  347 => 118,  341 => 114,  333 => 110,  331 => 109,  328 => 108,  323 => 106,  318 => 105,  311 => 103,  306 => 102,  304 => 101,  298 => 100,  293 => 99,  291 => 98,  286 => 95,  276 => 91,  270 => 88,  267 => 87,  263 => 86,  256 => 82,  252 => 81,  248 => 79,  242 => 75,  237 => 73,  233 => 72,  226 => 70,  221 => 67,  217 => 66,  214 => 65,  205 => 62,  202 => 61,  197 => 60,  188 => 57,  185 => 56,  181 => 55,  175 => 51,  166 => 47,  160 => 43,  155 => 40,  149 => 38,  147 => 37,  141 => 33,  139 => 32,  133 => 28,  127 => 26,  121 => 24,  119 => 23,  115 => 22,  109 => 19,  101 => 14,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block style %}
    {{ encore_entry_link_tags('dates') }}
{% endblock %}

{% block body %}
    <div class=\"container py-5\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"row pb-5 mb-4\">
            <div class=\"col\">
                <!-- Card-->
                <div class=\"card rounded shadow-sm border-0\">
                    <div class=\"card-body p-4\">
                        <a class=\"fa_icon\" href=\"{{ path('index_home') }}\">
                            <span class=\"fa fa-angle-left\"></span>
                        </a>
                        <div class='row align-items-center'>
                            <div class=\"col-8\">
                                <img src=\"{{ asset(vich_uploader_asset(type, 'imageFile', 'App\\\\Entity\\\\CarType')) }}\" class=\"img-fluid d-block mx-auto mb-3\" alt=\"\">
                            </div>
                            <div class=\"col-4\">
                                <h5>{{ type.name }}</h5>
                                {% if Cars|length > 1 %}
                                    <p class=\"small text-muted font-italic\"><strong>{{ Cars|length }}</strong> disponibles</p>
                                {% else %}
                                    <p class=\"small text-muted font-italic\"><strong>{{ Cars|length }}</strong> disponible</p>
                                {% endif %}
                            </div>
                        </div>

                            <div class=\"row align-items-center\">
                                    {% if isMonthlyRecurring %}
                                        <div class=\"jumbotron w-100\">
                                            <div class=\"container\">
                                                <h1 class=\"display-4\">Location mensuelle</h1>
                                                <p class=\"lead\">Un paiement chaque mois, réservé pour vous pour une durée indéterminé, annulable à partir du premier mois! </p>
                                                {% if savedDates.Start is not empty %}
                                                    <span>A partir du {{ savedDates.Start }}</span>
                                                {% endif %}
                                            </div>
                                        </div>
                                    {% else %}
                                        <div class=\"jumbotron w-100\">
                                            <div class=\"container\">
                                                <h1 class=\"display-5\">Location personalisée</h1>
                                                <p class=\"lead\">Profiter d'une location à des dates précises, qui convient à tous, à partir d'un jour!</p>
                                                <span>Location du <strong>{{ savedDates.Start }}</strong> au <strong>{{ savedDates.End }}</strong></span>
                                            </div>
                                        </div>
                                    {% endif %}
                            </div>

                        <div class=\"container-fluid py-5\">

                            {% for message in app.flashes('success') %}
                                <div class=\"alert alert-success\">
                                    {{ message|raw }}
                                </div>
                            {% endfor %}
                            {% for message in app.flashes('danger') %}
                                <div class=\"alert alert-danger\">
                                    {{ message|raw }}
                                </div>
                            {% endfor %}

                            {% for car in Cars %}
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <form id=\"vehicule_{{ car.id }}\" action=\"{{ path('location_louer', {'id': car.id} ) }}\" method=\"post\">

                                        <label for=\"date_{{ car.id }}\" hidden></label>
                                        <input id=\"date_{{ car.id }}\" name=\"date\" class=\"inputDate\" hidden>
                                        <h3>
                                            {{ type.name }}
                                        </h3>

{#                                        <p class=\"small text-muted\">Loueur: <a href=\"renter.html\">{{ car.renter.name }}</a></p>#}
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <img class=\"img-fluid d-block rounded\" alt=\"{{car.image.name}}\"
                                                     src=\"{{ asset(vich_uploader_asset(car, 'imageFile', 'App\\\\Entity\\\\Car')) }}\" />
                                            </div>
                                            <div class=\"col-md-4\">
                                                <dl>
                                                    {% for key, descr in car.features %}
                                                        <dt>
                                                            {{ key }}
                                                        </dt>
                                                        <dd>
                                                            {{ descr }}
                                                        </dd>
                                                        <br />
                                                    {% endfor %}
                                                </dl>
                                            </div>
                                            <div class=\"col-md-4\">
                                                {% if isMonthlyRecurring %}
                                                    <h3 class=\"text-center\">{{ car.price * 0.9 * 30}} €/mois</h3>
                                                    <small class=\"float-right\" style=\"color:orangered\"><small style=\"color:black;text-decoration: line-through;\">{{ car.price }}</small> <strong>{{ car.price * 0.9 }}</strong> €/jours -10%</small>
                                                {% elseif days >= 30 %}
                                                    <h3 class=\"text-center\">{{ car.price * 0.9 * days }} €</h3>
                                                    <small class=\"float-right\" style=\"color:orangered\"><small style=\"color:black;text-decoration: line-through;\">{{ car.price }}</small> <strong>{{ car.price * 0.9 }}</strong> €/jours -10%</small>
                                                {% else %}
                                                    <h3 class=\"text-center\">{{ car.price * days }} €</h3>
                                                    <small class=\"float-right\">{{ car.price }} €/jours</small>
                                                {% endif %}

                                                {% if is_granted('ROLE_USER') %}
                                                    <button type=\"button\" class=\"validateLocation btn btn-main btn-outline-primary m-2 px-2\" data-toggle=\"modal\" data-target=\"#M_{{ car.id }}\">
                                                        Réserver Maintenant
                                                    </button>
                                                {% else %}
                                                    <button type=\"button\" class=\"validateLocation btn btn-main btn-outline-primary m-2 px-2\" data-toggle=\"modal\" data-target=\"#needLogin\">
                                                        Réserver Maintenant
                                                    </button>
                                                {% endif %}

                                                <!-- Confirmation -->
                                                <div class=\"modal fade\" id=\"M_{{ car.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"BuyM_{{ car.id }}\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title\" id=\"BuyM_{{ car.id }}\">Confirmation de location</h5>
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                Ce véhicule vous sera facturé
                                                                {% if isMonthlyRecurring %}
                                                                    <strong>{{ car.price * 0.9 * 30}}€/mois</strong>
                                                                     à partir
                                                                    {% if savedDates.Start is empty %}
                                                                        d'aujourd'hui
                                                                    {% else %}
                                                                        du {{ savedDates.Start }}

                                                                    {% endif %}
                                                                {% elseif days >= 30 %}
                                                                    <strong>{{ car.price * 0.9 * days }} €</strong> du
                                                                    {{ savedDates.Start }} au {{ savedDates.End }}
                                                                {% else %}
                                                                    <strong>{{ car.price * days }} €</strong> du
                                                                    {{ savedDates.Start }} au {{ savedDates.End }}
                                                                {% endif %}
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                                <input type=\"submit\" class=\"btn btn-primary validateLocation\" value=\"Confirmer\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {% endfor %}
                            <div class=\"modal fade\" id=\"needLogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"NeedLoginLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"NeedLoginLabel\">Veuillez vous connecter</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            La réservation d'un véhicule nécessite un compte utilisateur.
                                        </div>
                                        <input name=\"hiddenDate\" class=\"currentDate\" type=\"hidden\" hidden>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">Annuler</button>
                                            <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\">Connexion/Inscription</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% block javascripts %}
        {{ encore_entry_script_tags('dates') }}
        <script>
            \$(document).ready(function () {

                {% if savedDates.Start is not empty and savedDates.End is not empty%}
                    \$('.currentDate').val(\"{{ savedDates.Start }}\" + \" - \" + \"{{ savedDates.End }}\");
                {% endif %}

                //permet de mettre à jour les dates pour les envoyer automatiquement
                \$(document).ready(function () {
                    \$('.validateLocation').on('mouseover', function () {
                        var textDate = \$('.currentDate').val();
                        \$('.inputDate').each(function (index) {
                            \$(this).val(textDate);
                        });
                    });
                });

            });
        </script>
    {% endblock %}
{% endblock %}", "index/car.html.twig", "/Users/user/SITE/CarApp/templates/index/car.html.twig");
    }
}
