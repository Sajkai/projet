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

/* renter/addCar.html.twig */
class __TwigTemplate_13238820a5cd4a9b3b94652c7fc3ceb2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'panel_style' => [$this, 'block_panel_style'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/addCar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/addCar.html.twig"));

        $this->parent = $this->loadTemplate("renter/index.html.twig", "renter/addCar.html.twig", 1);
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

        // line 4
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("form");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_dashboard_current($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        // line 8
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_panel");
        echo "\">Panel</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_cars");
        echo "\">Véhicules</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Nouveau</li>
        </ol>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_dashboard_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        // line 17
        echo "    <h1 class=\"h2\">Ajouter un nouveau véhicule</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-10\">
            <div class=\"card rounded shadow-sm border-0 mr-2\">
                <div class=\"card-body\">
                    <a class=\"fa_icon\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_cars");
        echo "\" >
                        <span class=\"fa fa-angle-left\"></span>
                    </a>

                    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "

                    <div class=\"my-custom-class-for-errors\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'errors');
        echo "
                    </div>

                    <div class=\"form-row\">
                        <div class=\"col\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "price", [], "any", false, false, false, 39), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <p>
                                <a class=\"btn btn-secondary\" data-toggle=\"collapse\" href=\"#Prixcollapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"Prixcollapse\">
                                    Estimation des revenus
                                </a>
                            </p>
                            <div class=\"collapse\" id=\"Prixcollapse\">
                                <div class=\"card card-body\">
                                    <p>1 semaine : <span id=\"1semaine\"></span></p>
                                    <p>1 mois : <span id=\"1mois\"></span></p>
                                    <p>1 an: <span id=\"1an\"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "boite", [], "any", false, false, false, 60), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "moteur", [], "any", false, false, false, 65), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "carburant", [], "any", false, false, false, 70), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>Photo du véhicule</label>

                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "imageFile", [], "any", false, false, false, 78), 'widget');
        echo "

                                <small>";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "imageFile", [], "any", false, false, false, 80), 'help');
        echo "</small>

                                <div class=\"form-error\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "imageFile", [], "any", false, false, false, 83), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <div class=\"text-center\">
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "save", [], "any", false, false, false, 91), 'row');
        echo "
                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "available", [], "any", false, false, false, 92), 'row');
        echo "
                            </div>
                        </div>
                    </div>
                    </div>
                    ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_panel_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        // line 106
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("form");
        echo "
    <script>
        var \$inputPrix = \$(\".numberpicker\")
        var \$1semaine = \$(\"#1semaine\")
        var \$1mois = \$(\"#1mois\")
        var \$1an = \$(\"#1an\")
        \$inputPrix.on(\"input\", function (event) {
            \$1semaine.html((\$inputPrix.val() * 7).toFixed(2) + \" €\");
            \$1mois.html((\$inputPrix.val() * 7 * 4 * 0.9).toFixed(2) + \" €\");
            \$1an.html((\$inputPrix.val() * 7 * 4 * 12 * 0.9).toFixed(2) + \" €\");
        })

        var checkExist = setInterval(function() {
            if (\$('.no-results').length) {
                var ajoutMod = document.querySelector('.no-results');
                ajoutMod.addEventListener('click', function() {
                    // AJOUT MODELE
                    searchValue = document.querySelector('.bs-searchbox input').value;
                    var form = document.createElement('form');
                    document.body.appendChild(form);
                    form.method = 'post';
                    form.action = \"";
        // line 127
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_addType"), "js"), "html", null, true);
        echo "\";
                        var input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'default_name';
                        input.value = searchValue;
                        form.appendChild(input);
                    form.submit();
                });
                clearInterval(checkExist);
            }
        }, 100); // check every 100ms

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "renter/addCar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 127,  274 => 106,  264 => 105,  247 => 97,  239 => 92,  235 => 91,  224 => 83,  218 => 80,  213 => 78,  202 => 70,  194 => 65,  186 => 60,  162 => 39,  154 => 34,  146 => 29,  140 => 26,  133 => 22,  126 => 17,  116 => 16,  101 => 11,  97 => 10,  93 => 8,  83 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'renter/index.html.twig' %}

{% block panel_style %}
{{ encore_entry_link_tags('form') }}
{% endblock %}

{% block dashboard_current %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('renter_panel') }}\">Panel</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('renter_cars') }}\">Véhicules</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Nouveau</li>
        </ol>
    </nav>
{% endblock %}
{% block dashboard_body %}
    <h1 class=\"h2\">Ajouter un nouveau véhicule</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-10\">
            <div class=\"card rounded shadow-sm border-0 mr-2\">
                <div class=\"card-body\">
                    <a class=\"fa_icon\" href=\"{{ path('renter_cars') }}\" >
                        <span class=\"fa fa-angle-left\"></span>
                    </a>

                    {{ form_start(form) }}

                    <div class=\"my-custom-class-for-errors\">
                        {{ form_errors(form) }}
                    </div>

                    <div class=\"form-row\">
                        <div class=\"col\">
                            {{ form_row(form.type) }}
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            {{ form_row(form.price) }}
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <p>
                                <a class=\"btn btn-secondary\" data-toggle=\"collapse\" href=\"#Prixcollapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"Prixcollapse\">
                                    Estimation des revenus
                                </a>
                            </p>
                            <div class=\"collapse\" id=\"Prixcollapse\">
                                <div class=\"card card-body\">
                                    <p>1 semaine : <span id=\"1semaine\"></span></p>
                                    <p>1 mois : <span id=\"1mois\"></span></p>
                                    <p>1 an: <span id=\"1an\"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            {{ form_row(form.boite) }}
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            {{ form_row(form.moteur) }}
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            {{ form_row(form.carburant) }}
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>Photo du véhicule</label>

                                {{ form_widget(form.imageFile) }}

                                <small>{{ form_help(form.imageFile) }}</small>

                                <div class=\"form-error\">
                                    {{ form_errors(form.imageFile) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <div class=\"text-center\">
                                {{ form_row(form.save) }}
                                {{ form_row(form.available) }}
                            </div>
                        </div>
                    </div>
                    </div>
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block panel_scripts %}
    {{ encore_entry_script_tags('form') }}
    <script>
        var \$inputPrix = \$(\".numberpicker\")
        var \$1semaine = \$(\"#1semaine\")
        var \$1mois = \$(\"#1mois\")
        var \$1an = \$(\"#1an\")
        \$inputPrix.on(\"input\", function (event) {
            \$1semaine.html((\$inputPrix.val() * 7).toFixed(2) + \" €\");
            \$1mois.html((\$inputPrix.val() * 7 * 4 * 0.9).toFixed(2) + \" €\");
            \$1an.html((\$inputPrix.val() * 7 * 4 * 12 * 0.9).toFixed(2) + \" €\");
        })

        var checkExist = setInterval(function() {
            if (\$('.no-results').length) {
                var ajoutMod = document.querySelector('.no-results');
                ajoutMod.addEventListener('click', function() {
                    // AJOUT MODELE
                    searchValue = document.querySelector('.bs-searchbox input').value;
                    var form = document.createElement('form');
                    document.body.appendChild(form);
                    form.method = 'post';
                    form.action = \"{{ path('renter_addType')|escape('js') }}\";
                        var input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'default_name';
                        input.value = searchValue;
                        form.appendChild(input);
                    form.submit();
                });
                clearInterval(checkExist);
            }
        }, 100); // check every 100ms

    </script>
{% endblock %}", "renter/addCar.html.twig", "/Users/user/SITE/CarApp/templates/renter/addCar.html.twig");
    }
}
