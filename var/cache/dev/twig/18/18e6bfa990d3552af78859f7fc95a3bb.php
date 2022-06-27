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

/* renter/index.html.twig */
class __TwigTemplate_2d8dac8e281241c8e238f953d1ae247a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'panel_style' => [$this, 'block_panel_style'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "renter/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_panel_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_style"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_style"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_sidebard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebard"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebard"));

        // line 7
        echo "    <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_panel");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Accueil</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_cars");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg>
            <span class=\"ml-2\">Véhicules</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_rents");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg>
            <span class=\"ml-2\">Locations</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_customers");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
            <span class=\"ml-2\">Clients</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 32
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

    // line 38
    public function block_dashboard_current($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_dashboard_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        // line 41
        echo "    <h1 class=\"h2\">Panel</h1>

    <!-- résumé cards-->
    <div class=\"row equal my-4\">

        ";
        // line 46
        $context["totalRevenus"] = 0;
        // line 47
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rentals"]) || array_key_exists("rentals", $context) ? $context["rentals"] : (function () { throw new RuntimeError('Variable "rentals" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 48
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 48), "isMonthlyRecurring", [], "any", false, false, false, 48)) {
                // line 49
                echo "                ";
                $context["totalRevenus"] = ((isset($context["totalRevenus"]) || array_key_exists("totalRevenus", $context) ? $context["totalRevenus"] : (function () { throw new RuntimeError('Variable "totalRevenus" does not exist.', 49, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 49), "price", [], "any", false, false, false, 49) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 49), "paidMonths", [], "any", false, false, false, 49)));
                // line 50
                echo "            ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 50), "isPaid", [], "any", false, false, false, 50)) {
                // line 51
                echo "                ";
                $context["totalRevenus"] = ((isset($context["totalRevenus"]) || array_key_exists("totalRevenus", $context) ? $context["totalRevenus"] : (function () { throw new RuntimeError('Variable "totalRevenus" does not exist.', 51, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRent", [], "any", false, false, false, 51), "price", [], "any", false, false, false, 51));
                // line 52
                echo "            ";
            }
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        <div class=\"col-12 col-md-6 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Revenus</p>
                    <h2 class=\"card-text\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["totalRevenus"]) || array_key_exists("totalRevenus", $context) ? $context["totalRevenus"] : (function () { throw new RuntimeError('Variable "totalRevenus" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " €</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-4 mb-4 mb-lg-0\">
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

        <div class=\"col-12 col-md-12 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Clients</p>
                    <h2 class=\"card-text\">";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["nbCustomers"]) || array_key_exists("nbCustomers", $context) ? $context["nbCustomers"] : (function () { throw new RuntimeError('Variable "nbCustomers" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "</h2>
                </div>
            </div>
        </div>

    </div>

    <div class=\"row\">
        <!-- Dernières réservations-->
        <div class=\"col-12 col-xl-12 mb-12 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Dernières réservations</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Modèle</th>
                                <th scope=\"col\">Client</th>
                                <th scope=\"col\">Montant</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["rentals"]) || array_key_exists("rentals", $context) ? $context["rentals"] : (function () { throw new RuntimeError('Variable "rentals" does not exist.', 102, $this->source); })()), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["rent"]) {
            // line 103
            echo "                            <tr class='clickable-row' data-href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_rent_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rent"], "getRent", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103)]), "html", null, true);
            echo "' style=\"cursor: pointer;\">
                                <th scope=\"row\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rent"], "getRent", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104), "html", null, true);
            echo "</th>
                                <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rent"], "getRent", [], "any", false, false, false, 105), "car", [], "any", false, false, false, 105), "type", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rent"], "getRent", [], "any", false, false, false, 106), "user", [], "any", false, false, false, 106), "email", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                                <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rent"], "getRent", [], "any", false, false, false, 107), "price", [], "any", false, false, false, 107), "html", null, true);
            echo " €</td>
                                <td>
                                    <span><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_rent_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rent"], "getRent", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Détails <i class=\"fas fa-plus-square\"></i></a></span>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                            </tbody>
                        </table>
                    </div>
                    <a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_rents");
        echo "\" class=\"btn btn-block btn-light\">Afficher toutes les locations</a>
                </div>
            </div>
        </div>
";
        // line 121
        echo "
";
        // line 128
        echo "
";
        // line 135
        echo "
";
        // line 137
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 140
    public function block_panel_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        // line 141
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("diagram");
        echo "
    <script>
        // var MOIS = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet']
        // var revData = {
        //     labels: MOIS,
        //     datasets: [{
        //         label: 'Revenues',
        //         borderColor: window.chartColors.green,
        //         backgroundColor: window.chartColors.green,
        //         fill: false,
        //         data: [
        //             0,
        //             10,
        //             20,
        //             35,
        //             60,
        //             78,
        //             99
        //         ],
        //         yAxisID: 'y-axis-1',
        //     }
        //     ]
        // };
        // var resData = {
        //     labels: MOIS,
        //     datasets: [{
        //         label: 'Revenues',
        //         borderColor: window.chartColors.blue,
        //         backgroundColor: window.chartColors.blue,
        //         fill: false,
        //         data: [
        //             14,
        //             18,
        //             20,
        //             14,
        //             25,
        //             46,
        //             54
        //         ],
        //         yAxisID: 'y-axis-1',
        //     }
        //     ]
        // };

        // window.onload = function() {
        //     var ctx = document.getElementById('revChart').getContext('2d');
        //     window.revChart = Chart.Line(ctx, {
        //         data: revData,
        //         options: {
        //             responsive: true,
        //             hoverMode: 'index',
        //             stacked: false,
        //             scales: {
        //                 yAxes: [{
        //                     type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        //                     display: true,
        //                     position: 'left',
        //                     id: 'y-axis-1',
        //                     scaleLabel: {
        //                         display: true,
        //                         labelString: 'Revenues'
        //                     },
        //                     ticks: {
        //                         beginAtZero: true,
        //                         callback: function(value, index, values) {
        //                             return value + ' €';
        //                         }
        //                     }
        //                 }, {
        //                     type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        //                     display: true,
        //                     position: 'right',
        //                     id: 'y-axis-2',
        //
        //                     // grid line settings
        //                     gridLines: {
        //                         drawOnChartArea: false, // only want the grid lines for one axis to show up
        //                     },
        //                 }],
        //             }
        //         }
        //     });
        //
        //     var ctx2 = document.getElementById('resChart').getContext('2d');
        //     window.resChart = Chart.Line(ctx2, {
        //         data: resData,
        //         options: {
        //             responsive: true,
        //             hoverMode: 'index',
        //             stacked: false,
        //             scales: {
        //                 yAxes: [{
        //                     type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        //                     display: true,
        //                     position: 'left',
        //                     id: 'y-axis-1',
        //                     scaleLabel: {
        //                         display: true,
        //                         labelString: 'Réservations'
        //                     },
        //                     ticks: {
        //                         beginAtZero: true,
        //                     }
        //                 }, {
        //                     type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        //                     display: true,
        //                     position: 'right',
        //                     id: 'y-axis-2',
        //
        //                     // grid line settings
        //                     gridLines: {
        //                         drawOnChartArea: false, // only want the grid lines for one axis to show up
        //                     },
        //                 }],
        //             }
        //         }
        //     });
        // };

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
        return "renter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 141,  335 => 140,  324 => 137,  321 => 135,  318 => 128,  315 => 121,  308 => 116,  303 => 113,  293 => 109,  288 => 107,  284 => 106,  280 => 105,  276 => 104,  271 => 103,  267 => 102,  239 => 77,  227 => 68,  215 => 59,  208 => 54,  202 => 53,  199 => 52,  196 => 51,  193 => 50,  190 => 49,  187 => 48,  182 => 47,  180 => 46,  173 => 41,  163 => 40,  145 => 38,  129 => 32,  120 => 26,  111 => 20,  102 => 14,  93 => 8,  90 => 7,  80 => 6,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block panel_style %}
{% endblock %}

{% block sidebard %}
    <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path(\"renter_panel\") }}\">
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
        <a class=\"nav-link\" href=\"{{ path('renter_customers') }}\">
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
{% endblock %}
{% block dashboard_body %}
    <h1 class=\"h2\">Panel</h1>

    <!-- résumé cards-->
    <div class=\"row equal my-4\">

        {% set totalRevenus = 0 %}
        {% for r in rentals %}
            {% if r.getRent.isMonthlyRecurring %}
                {% set totalRevenus = totalRevenus + (r.getRent.price * r.getRent.paidMonths) %}
            {% elseif r.getRent.isPaid %}
                {% set totalRevenus = totalRevenus + r.getRent.price %}
            {% endif %}
        {% endfor %}

        <div class=\"col-12 col-md-6 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Revenus</p>
                    <h2 class=\"card-text\">{{ totalRevenus }} €</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Réservations</p>
                    <h2 class=\"card-text\">{{ rentals|length }}</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-12 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Clients</p>
                    <h2 class=\"card-text\">{{ nbCustomers }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class=\"row\">
        <!-- Dernières réservations-->
        <div class=\"col-12 col-xl-12 mb-12 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Dernières réservations</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Modèle</th>
                                <th scope=\"col\">Client</th>
                                <th scope=\"col\">Montant</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for rent in rentals|slice(0,10) %}
                            <tr class='clickable-row' data-href='{{ path('renter_rent_details', { 'id': rent.getRent.id }) }}' style=\"cursor: pointer;\">
                                <th scope=\"row\">{{ rent.getRent.id }}</th>
                                <td>{{ rent.getRent.car.type.name }}</td>
                                <td>{{ rent.getRent.user.email }}</td>
                                <td>{{ rent.getRent.price }} €</td>
                                <td>
                                    <span><a href=\"{{ path('renter_rent_details', { 'id': rent.getRent.id }) }}\" class=\"btn btn-sm btn-primary\">Détails <i class=\"fas fa-plus-square\"></i></a></span>
                                </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <a href=\"{{ path('renter_rents') }}\" class=\"btn btn-block btn-light\">Afficher toutes les locations</a>
                </div>
            </div>
        </div>
{#        <div class=\"col-12 col-xl-4\">#}

{#            <div class=\"card rounded shadow-sm border-0 mb-4\">#}
{#                <div class=\"card-body\">#}
{#                    <h5 class=\"card-title\">Revenus sur 6 mois</h5>#}
{#                    <canvas id=\"revChart\"></canvas>#}
{#                </div>#}
{#            </div>#}

{#            <div class=\"card rounded shadow-sm border-0\">#}
{#                <div class=\"card-body\">#}
{#                    <h5 class=\"card-title\">Réservations sur 6 mois</h5>#}
{#                    <canvas id=\"resChart\"></canvas>#}
{#                </div>#}
{#            </div>#}

{#        </div>#}
    </div>
{% endblock %}

{% block panel_scripts %}
    {{ encore_entry_script_tags('diagram') }}
    <script>
        // var MOIS = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet']
        // var revData = {
        //     labels: MOIS,
        //     datasets: [{
        //         label: 'Revenues',
        //         borderColor: window.chartColors.green,
        //         backgroundColor: window.chartColors.green,
        //         fill: false,
        //         data: [
        //             0,
        //             10,
        //             20,
        //             35,
        //             60,
        //             78,
        //             99
        //         ],
        //         yAxisID: 'y-axis-1',
        //     }
        //     ]
        // };
        // var resData = {
        //     labels: MOIS,
        //     datasets: [{
        //         label: 'Revenues',
        //         borderColor: window.chartColors.blue,
        //         backgroundColor: window.chartColors.blue,
        //         fill: false,
        //         data: [
        //             14,
        //             18,
        //             20,
        //             14,
        //             25,
        //             46,
        //             54
        //         ],
        //         yAxisID: 'y-axis-1',
        //     }
        //     ]
        // };

        // window.onload = function() {
        //     var ctx = document.getElementById('revChart').getContext('2d');
        //     window.revChart = Chart.Line(ctx, {
        //         data: revData,
        //         options: {
        //             responsive: true,
        //             hoverMode: 'index',
        //             stacked: false,
        //             scales: {
        //                 yAxes: [{
        //                     type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        //                     display: true,
        //                     position: 'left',
        //                     id: 'y-axis-1',
        //                     scaleLabel: {
        //                         display: true,
        //                         labelString: 'Revenues'
        //                     },
        //                     ticks: {
        //                         beginAtZero: true,
        //                         callback: function(value, index, values) {
        //                             return value + ' €';
        //                         }
        //                     }
        //                 }, {
        //                     type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        //                     display: true,
        //                     position: 'right',
        //                     id: 'y-axis-2',
        //
        //                     // grid line settings
        //                     gridLines: {
        //                         drawOnChartArea: false, // only want the grid lines for one axis to show up
        //                     },
        //                 }],
        //             }
        //         }
        //     });
        //
        //     var ctx2 = document.getElementById('resChart').getContext('2d');
        //     window.resChart = Chart.Line(ctx2, {
        //         data: resData,
        //         options: {
        //             responsive: true,
        //             hoverMode: 'index',
        //             stacked: false,
        //             scales: {
        //                 yAxes: [{
        //                     type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        //                     display: true,
        //                     position: 'left',
        //                     id: 'y-axis-1',
        //                     scaleLabel: {
        //                         display: true,
        //                         labelString: 'Réservations'
        //                     },
        //                     ticks: {
        //                         beginAtZero: true,
        //                     }
        //                 }, {
        //                     type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        //                     display: true,
        //                     position: 'right',
        //                     id: 'y-axis-2',
        //
        //                     // grid line settings
        //                     gridLines: {
        //                         drawOnChartArea: false, // only want the grid lines for one axis to show up
        //                     },
        //                 }],
        //             }
        //         }
        //     });
        // };

        jQuery(document).ready(function(\$) {
            \$(\".clickable-row\").click(function() {
                window.location = \$(this).data(\"href\");
            });
        });
    </script>
{% endblock %}", "renter/index.html.twig", "/Users/user/SITE/CarApp/templates/renter/index.html.twig");
    }
}
