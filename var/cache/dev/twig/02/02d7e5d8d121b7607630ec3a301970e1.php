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

/* admin/index.html.twig */
class __TwigTemplate_e8bf9ceb5dcb201fc09f786b72248619 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sidebard' => [$this, 'block_sidebard'],
            'dashboard_current' => [$this, 'block_dashboard_current'],
            'dashboard_body' => [$this, 'block_dashboard_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panel Administrateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_panel");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Administration</span>
        </a>
    </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
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

    // line 17
    public function block_dashboard_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        // line 18
        echo "    <h1 class=\"h2\">Panel Administrateur</h1>

    <div class=\"row equal my-4\">

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Utilisateurs</p>
                    <h2 class=\"card-text\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nbUsers"]) || array_key_exists("nbUsers", $context) ? $context["nbUsers"] : (function () { throw new RuntimeError('Variable "nbUsers" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Locations</p>
                    <h2 class=\"card-text\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["nbLocations"]) || array_key_exists("nbLocations", $context) ? $context["nbLocations"] : (function () { throw new RuntimeError('Variable "nbLocations" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Total des véhicules</p>
                    <h2 class=\"card-text\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["nbVehicules"]) || array_key_exists("nbVehicules", $context) ? $context["nbVehicules"] : (function () { throw new RuntimeError('Variable "nbVehicules" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "</h2>
                </div>
            </div>
        </div>

        ";
        // line 49
        $context["totalRevenus"] = 0;
        // line 50
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rent"]) || array_key_exists("rent", $context) ? $context["rent"] : (function () { throw new RuntimeError('Variable "rent" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 51
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["r"], "isMonthlyRecurring", [], "any", false, false, false, 51)) {
                // line 52
                echo "                ";
                $context["totalRevenus"] = ((isset($context["totalRevenus"]) || array_key_exists("totalRevenus", $context) ? $context["totalRevenus"] : (function () { throw new RuntimeError('Variable "totalRevenus" does not exist.', 52, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["r"], "price", [], "any", false, false, false, 52) * twig_get_attribute($this->env, $this->source, $context["r"], "paidMonths", [], "any", false, false, false, 52)));
                // line 53
                echo "            ";
            } elseif (twig_get_attribute($this->env, $this->source, $context["r"], "isPaid", [], "any", false, false, false, 53)) {
                // line 54
                echo "                ";
                $context["totalRevenus"] = ((isset($context["totalRevenus"]) || array_key_exists("totalRevenus", $context) ? $context["totalRevenus"] : (function () { throw new RuntimeError('Variable "totalRevenus" does not exist.', 54, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["r"], "price", [], "any", false, false, false, 54));
                // line 55
                echo "            ";
            }
            // line 56
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Revenue totaux</p>
                    <h2 class=\"card-text\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["totalRevenus"]) || array_key_exists("totalRevenus", $context) ? $context["totalRevenus"] : (function () { throw new RuntimeError('Variable "totalRevenus" does not exist.', 62, $this->source); })()), "html", null, true);
        echo " €</h2>
                </div>
            </div>
        </div>

    </div>

    <div class=\"row\">

        <h1 class=\"h2\">Gérer les utilisateurs</h1>

        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 74
            echo "            <div class=\"alert alert-success\">
                ";
            // line 75
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 79
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 80
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
        <div class=\"col-12\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm\">
                            <thead>
                            <tr>
                                <th scope=\"col\">id</th>
                                <th scope=\"col\">Nom</th>
                                <th scope=\"col\">email</th>
                                <th scope=\"col\">role</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 100
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "</th>
                                    <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                                    <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 105));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 106
                echo "                                            ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                                    </td>
                                    <td>
                                        ";
            // line 110
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 110))) {
                // line 111
                echo "                                            <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_panel");
                echo "\" class=\"btn btn-sm btn-danger disabled\">Supprimer</a>
                                        ";
            } else {
                // line 113
                echo "                                            ";
                if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 113))) {
                    // line 114
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_panel_utilisateur_loueur", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">Définir Loueur</a>
                                            ";
                } elseif (twig_in_filter("ROLE_LOUEUR", twig_get_attribute($this->env, $this->source,                 // line 115
$context["user"], "roles", [], "any", false, false, false, 115))) {
                    // line 116
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_panel_utilisateur_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-secondary\">Définir Utilisateur</a>
                                            ";
                }
                // line 118
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_panel_utilisateur_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 118)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">Supprimer</a>
                                        ";
            }
            // line 120
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
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
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 123,  346 => 120,  340 => 118,  334 => 116,  332 => 115,  327 => 114,  324 => 113,  318 => 111,  316 => 110,  312 => 108,  303 => 106,  299 => 105,  294 => 103,  290 => 102,  286 => 101,  283 => 100,  279 => 99,  261 => 83,  252 => 80,  249 => 79,  244 => 78,  235 => 75,  232 => 74,  228 => 73,  214 => 62,  207 => 57,  201 => 56,  198 => 55,  195 => 54,  192 => 53,  189 => 52,  186 => 51,  181 => 50,  179 => 49,  171 => 44,  159 => 35,  147 => 26,  137 => 18,  127 => 17,  109 => 15,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Panel Administrateur{% endblock %}

{% block sidebard %}
    <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path(\"admin_panel\") }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Administration</span>
        </a>
    </li>
{% endblock %}


{% block dashboard_current %}
{% endblock %}
{% block dashboard_body %}
    <h1 class=\"h2\">Panel Administrateur</h1>

    <div class=\"row equal my-4\">

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Utilisateurs</p>
                    <h2 class=\"card-text\">{{ nbUsers }}</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Locations</p>
                    <h2 class=\"card-text\">{{ nbLocations }}</h2>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Total des véhicules</p>
                    <h2 class=\"card-text\">{{ nbVehicules }}</h2>
                </div>
            </div>
        </div>

        {% set totalRevenus = 0 %}
        {% for r in rent %}
            {% if r.isMonthlyRecurring %}
                {% set totalRevenus = totalRevenus + (r.price * r.paidMonths) %}
            {% elseif r.isPaid %}
                {% set totalRevenus = totalRevenus + r.price %}
            {% endif %}
        {% endfor %}

        <div class=\"col-12 col-md-6 col-lg-3 mb-4 mb-lg-0\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body p-4 text-center\">
                    <p class=\"card-title\">Revenue totaux</p>
                    <h2 class=\"card-text\">{{ totalRevenus }} €</h2>
                </div>
            </div>
        </div>

    </div>

    <div class=\"row\">

        <h1 class=\"h2\">Gérer les utilisateurs</h1>

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"col-12\">
            <div class=\"card rounded shadow-sm border-0\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm\">
                            <thead>
                            <tr>
                                <th scope=\"col\">id</th>
                                <th scope=\"col\">Nom</th>
                                <th scope=\"col\">email</th>
                                <th scope=\"col\">role</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for user in users %}
                                <tr>
                                    <th scope=\"row\">{{ user.id }}</th>
                                    <td>{{ user.name }}</td>
                                    <td>{{ user.email }}</td>
                                    <td>
                                        {% for role in user.roles %}
                                            {{ role }}
                                        {% endfor %}
                                    </td>
                                    <td>
                                        {% if \"ROLE_ADMIN\" in user.roles %}
                                            <a href=\"{{ path('admin_panel') }}\" class=\"btn btn-sm btn-danger disabled\">Supprimer</a>
                                        {% else %}
                                            {% if \"ROLE_USER\" in user.roles %}
                                                <a href=\"{{ path('admin_panel_utilisateur_loueur', {id: user.id}) }}\" class=\"btn btn-sm btn-primary\">Définir Loueur</a>
                                            {% elseif \"ROLE_LOUEUR\" in user.roles %}
                                                <a href=\"{{ path('admin_panel_utilisateur_utilisateur', {id: user.id}) }}\" class=\"btn btn-sm btn-secondary\">Définir Utilisateur</a>
                                            {% endif %}
                                            <a href=\"{{ path('admin_panel_utilisateur_supprimer', {id: user.id}) }}\" class=\"btn btn-sm btn-danger\">Supprimer</a>
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
", "admin/index.html.twig", "/Users/user/SITE/CarApp/templates/admin/index.html.twig");
    }
}
