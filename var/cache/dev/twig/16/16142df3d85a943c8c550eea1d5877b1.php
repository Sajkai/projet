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

/* user/index.html.twig */
class __TwigTemplate_62f2a477bd3f0426997d7bdf751a2b52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "user/index.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_panel");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Accueil</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rents");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg>
            <span class=\"ml-2\">Mes Locations</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 20
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

    // line 26
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

    // line 28
    public function block_dashboard_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        // line 29
        echo "    <h1 class=\"h2\">Panel</h1>

    <!-- résumé cards-->
    <div class=\"row equal my-4\">
        <div class=\"col-12 col-md-6 col-lg-6 mb-6 mb-lg-6\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Véhicules louées</p>
                    <h2 class=\"card-text\">";
        // line 37
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["rentals"]) || array_key_exists("rentals", $context) ? $context["rentals"] : (function () { throw new RuntimeError('Variable "rentals" does not exist.', 37, $this->source); })())), "html", null, true);
        echo "</h2>
                </div>
            </div>
        </div>
        ";
        // line 41
        $context["totalPrice"] = 0;
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rentals"]) || array_key_exists("rentals", $context) ? $context["rentals"] : (function () { throw new RuntimeError('Variable "rentals" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 43
            echo "            ";
            $context["totalPrice"] = ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 43, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["r"], "price", [], "any", false, false, false, 43));
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        <div class=\"col-12 col-md-6 col-lg-6 mb-6 mb-lg-6\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Facture ce mois</p>
                    <h2 class=\"card-text\">";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 49, $this->source); })()), 2), "html", null, true);
        echo " €</h2>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Dernières réservations-->
        <div class=\"col-12 col-xl-12 mb-12 mb-lg-12\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Dernières réservations</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Modèle</th> <!-- Idées : https://bootsnipp.com/snippets/Veob -->
                                <th scope=\"col\">Loueur</th>
                                <th scope=\"col\">Dates</th>
                                <th scope=\"col\">Prix</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- seulement les 10 dernières réservations -->
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["rentals"]) || array_key_exists("rentals", $context) ? $context["rentals"] : (function () { throw new RuntimeError('Variable "rentals" does not exist.', 75, $this->source); })()), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 76
            echo "                                <tr class='clickable-row' data-href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rent_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "' style=\"cursor: pointer;\">
                                    <th scope=\"row\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "</th>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "car", [], "any", false, false, false, 78), "type", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "car", [], "any", false, false, false, 79), "renter", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "startDate", [], "any", false, false, false, 80), "m/d/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "endDate", [], "any", false, false, false, 80), "m/d/Y"), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 82
            if (twig_get_attribute($this->env, $this->source, $context["r"], "isMonthlyRecurring", [], "any", false, false, false, 82)) {
                // line 83
                echo "                                            <span class=\"badge badge-success\">Paiement mensuel</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "price", [], "any", false, false, false, 83), "html", null, true);
                echo " €/Mois
                                        ";
            } else {
                // line 85
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "price", [], "any", false, false, false, 85), "html", null, true);
                echo " €
                                        ";
            }
            // line 87
            echo "                                    </td>
                                    <td><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rent_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">Détails</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                            </tbody>
                        </table>
                    </div>
                    <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rents");
        echo "\" class=\"btn btn-block btn-light\">Afficher toutes les locations</a>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-xl-4\">



        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_panel_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        // line 107
        echo "    <script>
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
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 107,  303 => 106,  282 => 94,  277 => 91,  268 => 88,  265 => 87,  259 => 85,  253 => 83,  251 => 82,  244 => 80,  240 => 79,  236 => 78,  232 => 77,  227 => 76,  223 => 75,  194 => 49,  188 => 45,  182 => 44,  179 => 43,  174 => 42,  172 => 41,  165 => 37,  155 => 29,  145 => 28,  127 => 26,  111 => 20,  102 => 14,  93 => 8,  90 => 7,  80 => 6,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block panel_style %}
{% endblock %}

{% block sidebard %}
    <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path(\"user_panel\") }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Accueil</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('user_rents') }}\">
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
{% endblock %}
{% block dashboard_body %}
    <h1 class=\"h2\">Panel</h1>

    <!-- résumé cards-->
    <div class=\"row equal my-4\">
        <div class=\"col-12 col-md-6 col-lg-6 mb-6 mb-lg-6\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Véhicules louées</p>
                    <h2 class=\"card-text\">{{ rentals|length }}</h2>
                </div>
            </div>
        </div>
        {% set totalPrice = 0 %}
        {% for r in rentals %}
            {% set totalPrice = totalPrice + r.price %}
        {% endfor %}
        <div class=\"col-12 col-md-6 col-lg-6 mb-6 mb-lg-6\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Facture ce mois</p>
                    <h2 class=\"card-text\">{{ totalPrice|number_format(2) }} €</h2>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Dernières réservations-->
        <div class=\"col-12 col-xl-12 mb-12 mb-lg-12\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Dernières réservations</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Modèle</th> <!-- Idées : https://bootsnipp.com/snippets/Veob -->
                                <th scope=\"col\">Loueur</th>
                                <th scope=\"col\">Dates</th>
                                <th scope=\"col\">Prix</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- seulement les 10 dernières réservations -->
                            {% for r in rentals|slice(0,10) %}
                                <tr class='clickable-row' data-href='{{ path('user_rent_detail', { 'id': r.id }) }}' style=\"cursor: pointer;\">
                                    <th scope=\"row\">{{ r.id }}</th>
                                    <td>{{ r.car.type.name }}</td>
                                    <td>{{ r.car.renter.name }}</td>
                                    <td>{{ r.startDate|date(\"m/d/Y\") }} - {{ r.endDate|date(\"m/d/Y\") }}</td>
                                    <td>
                                        {% if r.isMonthlyRecurring %}
                                            <span class=\"badge badge-success\">Paiement mensuel</span> {{ r.price }} €/Mois
                                        {% else %}
                                            {{ r.price }} €
                                        {% endif %}
                                    </td>
                                    <td><a href=\"{{ path('user_rent_detail', { 'id': r.id }) }}\">Détails</a></td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <a href=\"{{ path('user_rents') }}\" class=\"btn btn-block btn-light\">Afficher toutes les locations</a>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-xl-4\">



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
{% endblock %}", "user/index.html.twig", "/Users/user/SITE/CarApp/templates/user/index.html.twig");
    }
}
