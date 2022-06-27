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

/* renter/cars.html.twig */
class __TwigTemplate_7afa43f75148ce285a737b7800161a96 extends Template
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
        return "renter/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/cars.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/cars.html.twig"));

        $this->parent = $this->loadTemplate("renter/index.html.twig", "renter/cars.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_panel");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Accueil</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_cars");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg>
            <span class=\"ml-2\">Véhicules</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_rents");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg>
            <span class=\"ml-2\">Locations</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_customers");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
            <span class=\"ml-2\">Clients</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 29
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

    // line 35
    public function block_dashboard_current($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        // line 36
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_panel");
        echo "\">Panel</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Véhicules</li>
        </ol>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_dashboard_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        // line 44
        echo "    <h1 class=\"h2\">Véhicules</h1>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Listes des véhicules du parc de location <a class=\"btn btn-primary\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_addCar");
        echo "\" role=\"button\">Ajouter +</a></h5>
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
        echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Modèle</th>
                                <th scope=\"col\">Caractéristiques</th> <!-- Idées : https://bootsnipp.com/snippets/Veob -->
                                <th scope=\"col\">Prix/Jour</th>
                                <th scope=\"col\">Disponibilité</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Cars"]) || array_key_exists("Cars", $context) ? $context["Cars"] : (function () { throw new RuntimeError('Variable "Cars" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 80
            echo "                                <tr ";
            if ( !twig_get_attribute($this->env, $this->source, $context["c"], "isRented", [], "any", false, false, false, 80)) {
                echo "class='clickable-row' data-href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_editCar", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "getCar", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "' style=\"cursor: pointer;\"";
            }
            echo ">
                                    <th scope=\"row\">#";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "getCar", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81), "html", null, true);
            echo "</th>
                                    <th scope=\"row\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "getCar", [], "any", false, false, false, 82), "type", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            echo "</th>
                                    <td>
                                        <ul>
                                        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "getCar", [], "any", false, false, false, 85), "features", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["key"] => $context["descr"]) {
                // line 86
                echo "                                            <li>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["descr"], "html", null, true);
                echo "</li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['descr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                        </ul>
                                    </td>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "getCar", [], "any", false, false, false, 90), "price", [], "any", false, false, false, 90), "html", null, true);
            echo " €</td>
                                    <td>
                                    ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, $context["c"], "isRented", [], "any", false, false, false, 92)) {
                // line 93
                echo "                                        <span class=\"badge badge-success\">Louée</span>
                                    ";
            } else {
                // line 95
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "getCar", [], "any", false, false, false, 95), "available", [], "any", false, false, false, 95)) {
                    // line 96
                    echo "                                            <span class=\"badge badge-primary\">Disponible</span>
                                        ";
                } else {
                    // line 98
                    echo "                                            <span class=\"badge badge-secondary\">Non disponible</span>
                                        ";
                }
                // line 100
                echo "                                    ";
            }
            // line 101
            echo "                                    </td>
                                    ";
            // line 102
            if (twig_get_attribute($this->env, $this->source, $context["c"], "isRented", [], "any", false, false, false, 102)) {
                // line 103
                echo "                                        <td><a href=\"#\" class=\"btn btn-sm btn-secondary disabled\">En location</a></td>
                                    ";
            } else {
                // line 105
                echo "                                        <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_editCar", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "getCar", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">Modifier <i class=\"fas fa-edit\"></i></a></td>
                                    ";
            }
            // line 107
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
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

    // line 118
    public function block_panel_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        // line 119
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
        return "renter/cars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 119,  336 => 118,  319 => 109,  312 => 107,  306 => 105,  302 => 103,  300 => 102,  297 => 101,  294 => 100,  290 => 98,  286 => 96,  283 => 95,  279 => 93,  277 => 92,  272 => 90,  268 => 88,  257 => 86,  253 => 85,  247 => 82,  243 => 81,  234 => 80,  230 => 79,  215 => 66,  203 => 60,  200 => 59,  195 => 58,  183 => 52,  180 => 51,  176 => 50,  172 => 49,  165 => 44,  155 => 43,  140 => 38,  136 => 36,  126 => 35,  110 => 29,  101 => 23,  92 => 17,  83 => 11,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
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
        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('renter_cars') }}\">
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
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('renter_panel') }}\">Panel</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Véhicules</li>
        </ol>
    </nav>
{% endblock %}
{% block dashboard_body %}
    <h1 class=\"h2\">Véhicules</h1>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Listes des véhicules du parc de location <a class=\"btn btn-primary\" href=\"{{ path('renter_addCar') }}\" role=\"button\">Ajouter +</a></h5>
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
                                <th scope=\"col\">Modèle</th>
                                <th scope=\"col\">Caractéristiques</th> <!-- Idées : https://bootsnipp.com/snippets/Veob -->
                                <th scope=\"col\">Prix/Jour</th>
                                <th scope=\"col\">Disponibilité</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for c in Cars %}
                                <tr {% if not c.isRented %}class='clickable-row' data-href='{{ path('renter_editCar', { 'id': c.getCar.id }) }}' style=\"cursor: pointer;\"{% endif %}>
                                    <th scope=\"row\">#{{ c.getCar.id }}</th>
                                    <th scope=\"row\">{{ c.getCar.type.name }}</th>
                                    <td>
                                        <ul>
                                        {% for key, descr in c.getCar.features %}
                                            <li>{{ key }} : {{ descr }}</li>
                                        {% endfor %}
                                        </ul>
                                    </td>
                                    <td>{{ c.getCar.price }} €</td>
                                    <td>
                                    {% if c.isRented %}
                                        <span class=\"badge badge-success\">Louée</span>
                                    {% else %}
                                        {% if c.getCar.available %}
                                            <span class=\"badge badge-primary\">Disponible</span>
                                        {% else  %}
                                            <span class=\"badge badge-secondary\">Non disponible</span>
                                        {% endif %}
                                    {% endif %}
                                    </td>
                                    {% if c.isRented %}
                                        <td><a href=\"#\" class=\"btn btn-sm btn-secondary disabled\">En location</a></td>
                                    {% else %}
                                        <td><a href=\"{{ path('renter_editCar', { 'id': c.getCar.id }) }}\" class=\"btn btn-sm btn-primary\">Modifier <i class=\"fas fa-edit\"></i></a></td>
                                    {% endif %}
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
{% endblock %}", "renter/cars.html.twig", "/Users/user/SITE/CarApp/templates/renter/cars.html.twig");
    }
}
