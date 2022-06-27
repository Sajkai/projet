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

/* user/rents.html.twig */
class __TwigTemplate_e19b82355dabef6b36ff29efd4f7e802 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sidebard' => [$this, 'block_sidebard'],
            'dashboard_current' => [$this, 'block_dashboard_current'],
            'dashboard_body' => [$this, 'block_dashboard_body'],
            'panel_scripts' => [$this, 'block_panel_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/rents.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/rents.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "user/rents.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_sidebard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebard"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebard"));

        // line 4
        echo "    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_panel");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Accueil</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rents");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg>
            <span class=\"ml-2\">Mes Locations</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
            <i class=\"fas fa-sign-out-alt\"></i>
            <span class=\"ml-2\">Déconnexion</span>
        </a>
    </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_dashboard_current($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        // line 24
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_panel");
        echo "\">Panel</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Mes Locations</li>
        </ol>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_dashboard_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        // line 32
        echo "    <h1 class=\"h2\">Mes Locations</h1>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            echo "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 39
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
        // line 45
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            echo "                        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 47
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
        // line 53
        echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Modèle</th> <!-- Idées : https://bootsnipp.com/snippets/Veob -->
                                <th scope=\"col\">Loueur</th>
                                <th scope=\"col\">Dates</th>
                                <th scope=\"col\">Prix</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rentals"]) || array_key_exists("rentals", $context) ? $context["rentals"] : (function () { throw new RuntimeError('Variable "rentals" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 68
            echo "                                <tr class='clickable-row' data-href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rent_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "' style=\"cursor: pointer;\">
                                    <th scope=\"row\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
            echo "</th>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 70), "car", [], "any", false, false, false, 70), "type", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 71), "car", [], "any", false, false, false, 71), "renter", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 72), "startDate", [], "any", false, false, false, 72), "d/m/Y"), "html", null, true);
            echo "
                                        ";
            // line 73
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 73), "isMonthlyRecurring", [], "any", false, false, false, 73)) {
                // line 74
                echo "                                            - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 74), "endDate", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 74), "duration", [], "any", false, false, false, 74), "html", null, true);
                echo " jours
                                        ";
            }
            // line 75
            echo "</td>
                                    <td>
                                    ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 77), "isMonthlyRecurring", [], "any", false, false, false, 77)) {
                // line 78
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 78), "price", [], "any", false, false, false, 78), "html", null, true);
                echo " €/Mois <span class=\"badge badge-success\">Paiement mensuel</span>
                                    ";
            } else {
                // line 80
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 80), "price", [], "any", false, false, false, 80), "html", null, true);
                echo " €
                                        ";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 81), "duration", [], "any", false, false, false, 81) > 29)) {
                    // line 82
                    echo "                                             (";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 82), "price", [], "any", false, false, false, 82) * 0.9) * 30), "html", null, true);
                    echo " €/Mois)
                                        ";
                }
                // line 84
                echo "                                    ";
            }
            // line 85
            echo "                                    </td>
                                    <td>
                                    ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 87), "isMonthlyRecurring", [], "any", false, false, false, 87)) {
                // line 88
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["r"], "nbPaidMonths", [], "any", false, false, false, 88) == 0)) {
                    // line 89
                    echo "                                            <span class=\"badge badge-success\">Payée ce mois</span>
                                            <br>Prochain paiement le <strong>";
                    // line 90
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "nextMonth", [], "any", false, false, false, 90), "d/m/Y"), "html", null, true);
                    echo "</strong>
                                            <br><span><a href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_stopMonthlyRent", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-danger\">Stopper la location <i class=\"fas fa-plus-square\"></i></a></span>
                                        ";
                } else {
                    // line 93
                    echo "                                            <h4>
                                                <a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_RecurringBilling", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\" class=\"badge badge-warning\">
                                                    Payer ce mois<i class=\"far fa-credit-card\"></i>
                                                </a>
                                            </h4>
                                        ";
                }
                // line 99
                echo "                                    ";
            } else {
                // line 100
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 100), "isPaid", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "                                            <span class=\"badge badge-success\">Payée</span>
                                        ";
                } else {
                    // line 103
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 103), "duration", [], "any", false, false, false, 103) > 29)) {
                        // line 104
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["r"], "nbPaidMonths", [], "any", false, false, false, 104) == 0)) {
                            // line 105
                            echo "                                                    <span class=\"badge badge-success\">Payée ce mois</span>
                                                    <h4>
                                                        <a href=\"";
                            // line 107
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_billing", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107)]), "html", null, true);
                            echo "\" class=\"badge badge-warning\">
                                                            Payer intégralement<i class=\"far fa-credit-card\"></i>
                                                        </a>
                                                    </h4>
                                                ";
                        } else {
                            // line 112
                            echo "                                                    <h4>
                                                        <a href=\"";
                            // line 113
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_RecurringBilling", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113)]), "html", null, true);
                            echo "\" class=\"badge badge-warning\">
                                                            Payer ce mois<i class=\"far fa-credit-card\"></i>
                                                        </a>
                                                    </h4>
                                                    <h4>
                                                        <a href=\"";
                            // line 118
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_billing", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118)]), "html", null, true);
                            echo "\" class=\"badge badge-warning\">
                                                            Payer intégralement<i class=\"far fa-credit-card\"></i>
                                                        </a>
                                                    </h4>
                                                ";
                        }
                        // line 123
                        echo "                                            ";
                    } else {
                        // line 124
                        echo "                                                <h4>
                                                    <a href=\"";
                        // line 125
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_billing", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)]), "html", null, true);
                        echo "\" class=\"badge badge-warning\">
                                                        Payer<i class=\"far fa-credit-card\"></i>
                                                    </a>
                                                </h4>
                                            ";
                    }
                    // line 130
                    echo "                                        ";
                }
                // line 131
                echo "                                    ";
            }
            // line 132
            echo "                                    </td>
                                    <td>
                                        <a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rent_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134)]), "html", null, true);
            echo "\">
                                            Détails <i class=\"fas fa-plus-square\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 149
    public function block_panel_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        // line 150
        echo "<script>
    jQuery(document).ready(function(\$) {
        \$(\".clickable-row\").click(function() {
            window.location = \$(this).data(\"href\");
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/rents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 150,  404 => 149,  387 => 140,  375 => 134,  371 => 132,  368 => 131,  365 => 130,  357 => 125,  354 => 124,  351 => 123,  343 => 118,  335 => 113,  332 => 112,  324 => 107,  320 => 105,  317 => 104,  314 => 103,  310 => 101,  307 => 100,  304 => 99,  296 => 94,  293 => 93,  288 => 91,  284 => 90,  281 => 89,  278 => 88,  276 => 87,  272 => 85,  269 => 84,  263 => 82,  261 => 81,  256 => 80,  250 => 78,  248 => 77,  244 => 75,  236 => 74,  234 => 73,  230 => 72,  226 => 71,  222 => 70,  218 => 69,  213 => 68,  209 => 67,  193 => 53,  181 => 47,  178 => 46,  173 => 45,  161 => 39,  158 => 38,  154 => 37,  147 => 32,  137 => 31,  122 => 26,  118 => 24,  108 => 23,  92 => 17,  83 => 11,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block sidebard %}
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path(\"user_panel\") }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Accueil</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('user_rents') }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg>
            <span class=\"ml-2\">Mes Locations</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
            <i class=\"fas fa-sign-out-alt\"></i>
            <span class=\"ml-2\">Déconnexion</span>
        </a>
    </li>
{% endblock %}
{% block dashboard_current %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('user_panel') }}\">Panel</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Mes Locations</li>
        </ol>
    </nav>
{% endblock %}
{% block dashboard_body %}
    <h1 class=\"h2\">Mes Locations</h1>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
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
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Modèle</th> <!-- Idées : https://bootsnipp.com/snippets/Veob -->
                                <th scope=\"col\">Loueur</th>
                                <th scope=\"col\">Dates</th>
                                <th scope=\"col\">Prix</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for r in rentals %}
                                <tr class='clickable-row' data-href='{{ path('user_rent_detail', { 'id': r.getRent.id }) }}' style=\"cursor: pointer;\">
                                    <th scope=\"row\">{{ r.getRent.id }}</th>
                                    <td>{{ r.getRent.car.type.name }}</td>
                                    <td>{{ r.getRent.car.renter.name }}</td>
                                    <td>{{ r.getRent.startDate|date(\"d/m/Y\") }}
                                        {% if not r.getRent.isMonthlyRecurring %}
                                            - {{ r.getRent.endDate|date(\"d/m/Y\") }}<br>{{ r.getRent.duration }} jours
                                        {% endif %}</td>
                                    <td>
                                    {% if r.getRent.isMonthlyRecurring %}
                                        {{ r.getRent.price }} €/Mois <span class=\"badge badge-success\">Paiement mensuel</span>
                                    {% else %}
                                        {{ r.getRent.price }} €
                                        {% if r.getRent.duration > 29 %}
                                             ({{ r.getRent.price * 0.9 * 30 }} €/Mois)
                                        {% endif %}
                                    {% endif %}
                                    </td>
                                    <td>
                                    {% if r.getRent.isMonthlyRecurring %}
                                        {% if r.nbPaidMonths == 0 %}
                                            <span class=\"badge badge-success\">Payée ce mois</span>
                                            <br>Prochain paiement le <strong>{{ r.nextMonth|date(\"d/m/Y\") }}</strong>
                                            <br><span><a href=\"{{ path('user_stopMonthlyRent', { 'id': r.getRent.id }) }}\" class=\"btn btn-sm btn-danger\">Stopper la location <i class=\"fas fa-plus-square\"></i></a></span>
                                        {% else %}
                                            <h4>
                                                <a href=\"{{ path('user_RecurringBilling', {'id': r.getRent.id }) }}\" class=\"badge badge-warning\">
                                                    Payer ce mois<i class=\"far fa-credit-card\"></i>
                                                </a>
                                            </h4>
                                        {% endif %}
                                    {% else %}
                                        {% if r.getRent.isPaid %}
                                            <span class=\"badge badge-success\">Payée</span>
                                        {% else %}
                                            {% if r.getRent.duration > 29 %}
                                                {% if r.nbPaidMonths == 0 %}
                                                    <span class=\"badge badge-success\">Payée ce mois</span>
                                                    <h4>
                                                        <a href=\"{{ path('user_billing', {'id': r.getRent.id }) }}\" class=\"badge badge-warning\">
                                                            Payer intégralement<i class=\"far fa-credit-card\"></i>
                                                        </a>
                                                    </h4>
                                                {% else %}
                                                    <h4>
                                                        <a href=\"{{ path('user_RecurringBilling', {'id': r.getRent.id }) }}\" class=\"badge badge-warning\">
                                                            Payer ce mois<i class=\"far fa-credit-card\"></i>
                                                        </a>
                                                    </h4>
                                                    <h4>
                                                        <a href=\"{{ path('user_billing', {'id': r.getRent.id }) }}\" class=\"badge badge-warning\">
                                                            Payer intégralement<i class=\"far fa-credit-card\"></i>
                                                        </a>
                                                    </h4>
                                                {% endif %}
                                            {% else %}
                                                <h4>
                                                    <a href=\"{{ path('user_billing', {'id': r.getRent.id }) }}\" class=\"badge badge-warning\">
                                                        Payer<i class=\"far fa-credit-card\"></i>
                                                    </a>
                                                </h4>
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('user_rent_detail', { 'id': r.getRent.id }) }}\">
                                            Détails <i class=\"fas fa-plus-square\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block panel_scripts %}
<script>
    jQuery(document).ready(function(\$) {
        \$(\".clickable-row\").click(function() {
            window.location = \$(this).data(\"href\");
        });
    });
</script>
{% endblock %}", "user/rents.html.twig", "/Users/user/SITE/CarApp/templates/user/rents.html.twig");
    }
}
