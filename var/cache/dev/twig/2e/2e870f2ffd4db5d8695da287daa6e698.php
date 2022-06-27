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

/* user/rent_details.html.twig */
class __TwigTemplate_5f64c2090f8857f52f8c5da1731f73fb extends Template
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
        return "dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/rent_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/rent_details.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "user/rent_details.html.twig", 1);
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
        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_panel");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
            <span class=\"ml-2\">Accueil</span>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
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

    // line 24
    public function block_dashboard_current($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        // line 25
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_panel");
        echo "\">Panel</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rents");
        echo "\">Locations</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">#";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rent"]) || array_key_exists("rent", $context) ? $context["rent"] : (function () { throw new RuntimeError('Variable "rent" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "</li>
        </ol>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_dashboard_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        // line 35
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("details");
        echo "
    <div class=\"container\">
        <div class=\"container px-1 px-md-4 py-5 mx-auto\">
            <div class=\"card\">
                <a class=\"fa_icon\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rents");
        echo "\" style=\"margin-left: 10px;\">
                    <span class=\"fa fa-angle-left\"></span>
                </a>
                <div class=\"row d-flex justify-content-between px-3 top\">
                    <div class=\"d-flex\">
                        <h5>Réservation <span class=\"text-primary font-weight-bold\">#";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rent"]) || array_key_exists("rent", $context) ? $context["rent"] : (function () { throw new RuntimeError('Variable "rent" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
        echo "</span></h5>
                    </div>
                    <div class=\"d-flex flex-column text-sm-right\">
                        <p class=\"mb-0\">Loueur <span>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rent"]) || array_key_exists("rent", $context) ? $context["rent"] : (function () { throw new RuntimeError('Variable "rent" does not exist.', 47, $this->source); })()), "car", [], "any", false, false, false, 47), "renter", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "</span></p>
                        <p>Contact <span class=\"font-weight-bold\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rent"]) || array_key_exists("rent", $context) ? $context["rent"] : (function () { throw new RuntimeError('Variable "rent" does not exist.', 48, $this->source); })()), "car", [], "any", false, false, false, 48), "renter", [], "any", false, false, false, 48), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "</span></p>
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-12\">
                        <ul id=\"progressbar\" class=\"text-center\">
                            <li class=\"active step0\"></li>
                            <li class=\"";
        // line 55
        if (twig_get_attribute($this->env, $this->source, (isset($context["rent"]) || array_key_exists("rent", $context) ? $context["rent"] : (function () { throw new RuntimeError('Variable "rent" does not exist.', 55, $this->source); })()), "isPaid", [], "any", false, false, false, 55)) {
            echo "active";
        }
        echo " step0\"></li>
                            <li class=\"";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["rent"]) || array_key_exists("rent", $context) ? $context["rent"] : (function () { throw new RuntimeError('Variable "rent" does not exist.', 56, $this->source); })()), "isPaid", [], "any", false, false, false, 56)) {
            echo "active";
        }
        echo " step0\"></li>
                        </ul>
                    </div>
                </div>
                <div class=\"row justify-content-between top\">
                    <div class=\"row d-flex icon-content\">
                        <img class=\"icon\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/1.PNG"), "html", null, true);
        echo "\">
                        <div class=\"d-flex flex-column\">
                            <p class=\"font-weight-bold\">Réservation <br>Enregistrée</p>
                        </div>
                    </div>
                    <div class=\"row d-flex icon-content\">
                        <img class=\"icon\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/2.PNG"), "html", null, true);
        echo "\">
                        <div class=\"d-flex flex-column\">
                            ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["rent"]) || array_key_exists("rent", $context) ? $context["rent"] : (function () { throw new RuntimeError('Variable "rent" does not exist.', 70, $this->source); })()), "isPaid", [], "any", false, false, false, 70)) {
            // line 71
            echo "                                <p class=\"font-weight-bold\">Réservation<br>Payée</p>
                            ";
        } else {
            // line 73
            echo "                                <p class=\"font-weight-bold\">Réservation<br>en attente de paiement</p>
                            ";
        }
        // line 75
        echo "                        </div>
                    </div>
                    <div class=\"row d-flex icon-content\">
                        <img class=\"icon\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/3.PNG"), "html", null, true);
        echo "\">
                        <div class=\"d-flex flex-column\">
                            <p class=\"font-weight-bold\">Véhicule<br>Prêt</p>
                        </div>
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
        return "user/rent_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 78,  230 => 75,  226 => 73,  222 => 71,  220 => 70,  215 => 68,  206 => 62,  195 => 56,  189 => 55,  179 => 48,  175 => 47,  169 => 44,  161 => 39,  153 => 35,  143 => 34,  129 => 29,  125 => 28,  121 => 27,  117 => 25,  107 => 24,  91 => 17,  82 => 11,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard.html.twig' %}

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
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('user_panel') }}\">Panel</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('user_rents') }}\">Locations</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">#{{ rent.id }}</li>
        </ol>
    </nav>
{% endblock %}

{% block dashboard_body %}
    {{ encore_entry_script_tags('details') }}
    <div class=\"container\">
        <div class=\"container px-1 px-md-4 py-5 mx-auto\">
            <div class=\"card\">
                <a class=\"fa_icon\" href=\"{{ path('user_rents') }}\" style=\"margin-left: 10px;\">
                    <span class=\"fa fa-angle-left\"></span>
                </a>
                <div class=\"row d-flex justify-content-between px-3 top\">
                    <div class=\"d-flex\">
                        <h5>Réservation <span class=\"text-primary font-weight-bold\">#{{ rent.id }}</span></h5>
                    </div>
                    <div class=\"d-flex flex-column text-sm-right\">
                        <p class=\"mb-0\">Loueur <span>{{ rent.car.renter.name }}</span></p>
                        <p>Contact <span class=\"font-weight-bold\">{{ rent.car.renter.email }}</span></p>
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-12\">
                        <ul id=\"progressbar\" class=\"text-center\">
                            <li class=\"active step0\"></li>
                            <li class=\"{% if rent.isPaid %}active{% endif %} step0\"></li>
                            <li class=\"{% if rent.isPaid %}active{% endif %} step0\"></li>
                        </ul>
                    </div>
                </div>
                <div class=\"row justify-content-between top\">
                    <div class=\"row d-flex icon-content\">
                        <img class=\"icon\" src=\"{{ asset('media/img/1.PNG') }}\">
                        <div class=\"d-flex flex-column\">
                            <p class=\"font-weight-bold\">Réservation <br>Enregistrée</p>
                        </div>
                    </div>
                    <div class=\"row d-flex icon-content\">
                        <img class=\"icon\" src=\"{{ asset('media/img/2.PNG') }}\">
                        <div class=\"d-flex flex-column\">
                            {% if rent.isPaid %}
                                <p class=\"font-weight-bold\">Réservation<br>Payée</p>
                            {% else %}
                                <p class=\"font-weight-bold\">Réservation<br>en attente de paiement</p>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"row d-flex icon-content\">
                        <img class=\"icon\" src=\"{{ asset('media/img/3.PNG') }}\">
                        <div class=\"d-flex flex-column\">
                            <p class=\"font-weight-bold\">Véhicule<br>Prêt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "user/rent_details.html.twig", "/Users/user/SITE/CarApp/templates/user/rent_details.html.twig");
    }
}
