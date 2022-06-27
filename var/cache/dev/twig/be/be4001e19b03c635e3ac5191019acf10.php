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

/* renter/billing.html.twig */
class __TwigTemplate_59453519a639bb1bd39ff5ad0c7df931 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "renter/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/billing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/billing.html.twig"));

        $this->parent = $this->loadTemplate("renter/index.html.twig", "renter/billing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_sidebard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebard"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebard"));

        // line 6
        echo "    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_panel");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Accueil</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_cars");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg>
            <span class=\"ml-2\">Véhicules</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_rents");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg>
            <span class=\"ml-2\">Locations</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_customers");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
            <span class=\"ml-2\">Clients</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 31
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

    // line 37
    public function block_dashboard_current($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        // line 38
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_panel");
        echo "\">Panel</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_customers");
        echo "\">Clients</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Facturation #";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "</li>
        </ol>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_dashboard_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        // line 47
        echo "    <h1 class=\"h2\">Facturation client \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "\" pour le mois courant</h1>

    <div class=\"row equal my-4\">

        ";
        // line 51
        $context["finalTotalCurrentMonth"] = 0;
        // line 52
        echo "        ";
        $context["totalToPay"] = 0;
        // line 53
        echo "        ";
        $context["onGoing"] = 0;
        // line 54
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rentals"]) || array_key_exists("rentals", $context) ? $context["rentals"] : (function () { throw new RuntimeError('Variable "rentals" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 55
            echo "
            ";
            // line 56
            $context["finalTotalCurrentMonth"] = ((isset($context["finalTotalCurrentMonth"]) || array_key_exists("finalTotalCurrentMonth", $context) ? $context["finalTotalCurrentMonth"] : (function () { throw new RuntimeError('Variable "finalTotalCurrentMonth" does not exist.', 56, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["r"], "totalCurrentMonth", [], "any", false, false, false, 56));
            // line 57
            echo "            ";
            $context["totalToPay"] = ((isset($context["totalToPay"]) || array_key_exists("totalToPay", $context) ? $context["totalToPay"] : (function () { throw new RuntimeError('Variable "totalToPay" does not exist.', 57, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["r"], "toPay", [], "any", false, false, false, 57));
            // line 58
            echo "
            ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["r"], "ongoing", [], "any", false, false, false, 59)) {
                // line 60
                echo "                ";
                $context["onGoing"] = ((isset($context["onGoing"]) || array_key_exists("onGoing", $context) ? $context["onGoing"] : (function () { throw new RuntimeError('Variable "onGoing" does not exist.', 60, $this->source); })()) + 1);
                // line 61
                echo "            ";
            }
            // line 62
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Réservations</p>
                    <h2 class=\"card-text\">";
        // line 68
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["rentals"]) || array_key_exists("rentals", $context) ? $context["rentals"] : (function () { throw new RuntimeError('Variable "rentals" does not exist.', 68, $this->source); })())), "html", null, true);
        echo "</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">En cours</p>
                    <h2 class=\"card-text\">";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["onGoing"]) || array_key_exists("onGoing", $context) ? $context["onGoing"] : (function () { throw new RuntimeError('Variable "onGoing" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Total payé</p>
                    <h2 class=\"card-text\">";
        // line 86
        echo twig_escape_filter($this->env, ((isset($context["finalTotalCurrentMonth"]) || array_key_exists("finalTotalCurrentMonth", $context) ? $context["finalTotalCurrentMonth"] : (function () { throw new RuntimeError('Variable "finalTotalCurrentMonth" does not exist.', 86, $this->source); })()) - (isset($context["totalToPay"]) || array_key_exists("totalToPay", $context) ? $context["totalToPay"] : (function () { throw new RuntimeError('Variable "totalToPay" does not exist.', 86, $this->source); })())), "html", null, true);
        echo " €</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Restant à payer</p>
                    <h2 class=\"card-text\">";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["totalToPay"]) || array_key_exists("totalToPay", $context) ? $context["totalToPay"] : (function () { throw new RuntimeError('Variable "totalToPay" does not exist.', 95, $this->source); })()), "html", null, true);
        echo " €</h2>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Modèle</th> <!-- Idées : https://bootsnipp.com/snippets/Veob -->
                                <th scope=\"col\">Dates</th>
                                <th scope=\"col\">Montant</th>
                                <th scope=\"col\">Paiement</th>
                                <th scope=\"col\">Statut</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rentals"]) || array_key_exists("rentals", $context) ? $context["rentals"] : (function () { throw new RuntimeError('Variable "rentals" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 120
            echo "                                <tr class='clickable-row' data-href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_rent_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120)]), "html", null, true);
            echo "' style=\"cursor: pointer;\">
                                    <th scope=\"row\">";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
            echo "</th>
                                    <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 122), "car", [], "any", false, false, false, 122), "type", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122), "html", null, true);
            echo "</td>
                                    <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 123), "startDate", [], "any", false, false, false, 123), "m/d/Y"), "html", null, true);
            echo "
                                        ";
            // line 124
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 124), "isMonthlyRecurring", [], "any", false, false, false, 124)) {
                // line 125
                echo "                                            - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 125), "endDate", [], "any", false, false, false, 125), "m/d/Y"), "html", null, true);
                echo "
                                        ";
            } else {
                // line 127
                echo "                                            <span class=\"badge badge-warning\">Mensuel</span>
                                        ";
            }
            // line 128
            echo "</td>
                                    <td>
                                        ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 130), "price", [], "any", false, false, false, 130), "html", null, true);
            echo " €
                                        ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 131), "isMonthlyRecurring", [], "any", false, false, false, 131)) {
                // line 132
                echo "                                            /mois
                                        ";
            }
            // line 134
            echo "                                    </td>
                                    <td>

                                        ";
            // line 137
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 137), "isMonthlyRecurring", [], "any", false, false, false, 137)) {
                // line 138
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["r"], "toPay", [], "any", false, false, false, 138) > 0)) {
                    // line 139
                    echo "                                                <span class=\"badge badge-danger\">En attente du paiement de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "toPay", [], "any", false, false, false, 139), "html", null, true);
                    echo " €</span>
                                            ";
                } else {
                    // line 141
                    echo "                                                <span class=\"badge badge-success\">Payée ce mois</span>
                                            ";
                }
                // line 143
                echo "                                        ";
            } else {
                // line 144
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 144), "isPaid", [], "any", false, false, false, 144)) {
                    // line 145
                    echo "                                                <span class=\"badge badge-success\">Payée</span>
                                            ";
                } else {
                    // line 147
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["r"], "toPay", [], "any", false, false, false, 147) > 0)) {
                        // line 148
                        echo "                                                    <span class=\"badge badge-danger\">En attente du paiement de ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "toPay", [], "any", false, false, false, 148), "html", null, true);
                        echo " €</span>
                                                ";
                    } else {
                        // line 150
                        echo "                                                    <span class=\"badge badge-success\">Payée</span>
                                                ";
                    }
                    // line 152
                    echo "                                            ";
                }
                // line 153
                echo "                                        ";
            }
            // line 154
            echo "                                    </td>
                                    <td>
                                        ";
            // line 156
            if (twig_get_attribute($this->env, $this->source, $context["r"], "ongoing", [], "any", false, false, false, 156)) {
                // line 157
                echo "                                            <span class=\"badge badge-primary\">En cours</span>
                                        ";
            } else {
                // line 159
                echo "                                            <span class=\"badge badge-secondary\">Terminée</span>
                                        ";
            }
            // line 161
            echo "                                    </td>
                                    <td>
                                        ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, $context["r"], "ongoing", [], "any", false, false, false, 163)) {
                // line 164
                echo "                                            <span><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_rent_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 164), "id", [], "any", false, false, false, 164)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">Détails <i class=\"fas fa-plus-square\"></i></a></span>
                                        ";
            }
            // line 166
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
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

    public function getTemplateName()
    {
        return "renter/billing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 169,  409 => 166,  403 => 164,  401 => 163,  397 => 161,  393 => 159,  389 => 157,  387 => 156,  383 => 154,  380 => 153,  377 => 152,  373 => 150,  367 => 148,  364 => 147,  360 => 145,  357 => 144,  354 => 143,  350 => 141,  344 => 139,  341 => 138,  339 => 137,  334 => 134,  330 => 132,  328 => 131,  324 => 130,  320 => 128,  316 => 127,  310 => 125,  308 => 124,  304 => 123,  300 => 122,  296 => 121,  291 => 120,  287 => 119,  260 => 95,  248 => 86,  236 => 77,  224 => 68,  217 => 63,  211 => 62,  208 => 61,  205 => 60,  203 => 59,  200 => 58,  197 => 57,  195 => 56,  192 => 55,  187 => 54,  184 => 53,  181 => 52,  179 => 51,  171 => 47,  161 => 46,  147 => 42,  143 => 41,  139 => 40,  135 => 38,  125 => 37,  109 => 31,  100 => 25,  91 => 19,  82 => 13,  73 => 7,  70 => 6,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'renter/index.html.twig' %}



{% block sidebard %}
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path(\"renter_panel\") }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Accueil</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('renter_cars') }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg>
            <span class=\"ml-2\">Véhicules</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('renter_rents') }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg>
            <span class=\"ml-2\">Locations</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('renter_customers') }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
            <span class=\"ml-2\">Clients</span>
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
            <li class=\"breadcrumb-item\"><a href=\"{{ path('renter_panel') }}\">Panel</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('renter_customers') }}\">Clients</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Facturation #{{ customer.id }}</li>
        </ol>
    </nav>
{% endblock %}
{% block dashboard_body %}
    <h1 class=\"h2\">Facturation client \"{{ customer.name }}\" pour le mois courant</h1>

    <div class=\"row equal my-4\">

        {% set finalTotalCurrentMonth = 0 %}
        {% set totalToPay = 0 %}
        {% set onGoing = 0 %}
        {% for r in rentals %}

            {% set finalTotalCurrentMonth = finalTotalCurrentMonth + r.totalCurrentMonth %}
            {% set totalToPay = totalToPay + r.toPay %}

            {% if r.ongoing %}
                {% set onGoing = onGoing + 1 %}
            {% endif %}
        {% endfor %}

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Réservations</p>
                    <h2 class=\"card-text\">{{ rentals|length }}</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">En cours</p>
                    <h2 class=\"card-text\">{{ onGoing }}</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Total payé</p>
                    <h2 class=\"card-text\">{{ finalTotalCurrentMonth - totalToPay }} €</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Restant à payer</p>
                    <h2 class=\"card-text\">{{ totalToPay }} €</h2>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Modèle</th> <!-- Idées : https://bootsnipp.com/snippets/Veob -->
                                <th scope=\"col\">Dates</th>
                                <th scope=\"col\">Montant</th>
                                <th scope=\"col\">Paiement</th>
                                <th scope=\"col\">Statut</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for r in rentals %}
                                <tr class='clickable-row' data-href='{{ path('renter_rent_details', { 'id': r.getRent.id }) }}' style=\"cursor: pointer;\">
                                    <th scope=\"row\">{{ r.getRent.id }}</th>
                                    <td>{{ r.getRent.car.type.name }}</td>
                                    <td>{{ r.getRent.startDate|date(\"m/d/Y\") }}
                                        {% if not r.getRent.isMonthlyRecurring %}
                                            - {{ r.getRent.endDate|date(\"m/d/Y\") }}
                                        {% else %}
                                            <span class=\"badge badge-warning\">Mensuel</span>
                                        {% endif %}</td>
                                    <td>
                                        {{ r.getRent.price }} €
                                        {% if r.getRent.isMonthlyRecurring %}
                                            /mois
                                        {% endif %}
                                    </td>
                                    <td>

                                        {% if r.getRent.isMonthlyRecurring %}
                                            {% if r.toPay > 0 %}
                                                <span class=\"badge badge-danger\">En attente du paiement de {{ r.toPay }} €</span>
                                            {% else %}
                                                <span class=\"badge badge-success\">Payée ce mois</span>
                                            {% endif %}
                                        {% else %}
                                            {% if r.getRent.isPaid %}
                                                <span class=\"badge badge-success\">Payée</span>
                                            {% else %}
                                                {% if r.toPay > 0 %}
                                                    <span class=\"badge badge-danger\">En attente du paiement de {{ r.toPay }} €</span>
                                                {% else %}
                                                    <span class=\"badge badge-success\">Payée</span>
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if r.ongoing%}
                                            <span class=\"badge badge-primary\">En cours</span>
                                        {% else %}
                                            <span class=\"badge badge-secondary\">Terminée</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if r.ongoing%}
                                            <span><a href=\"{{ path('renter_rent_details', { 'id': r.getRent.id }) }}\" class=\"btn btn-sm btn-primary\">Détails <i class=\"fas fa-plus-square\"></i></a></span>
                                        {% endif %}
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
", "renter/billing.html.twig", "/Users/user/SITE/CarApp/templates/renter/billing.html.twig");
    }
}
