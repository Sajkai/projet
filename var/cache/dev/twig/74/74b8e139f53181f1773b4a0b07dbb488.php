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

/* renter/editCar.html.twig */
class __TwigTemplate_d0ae3521d4d78c90698439c5288295a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/editCar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "renter/editCar.html.twig"));

        $this->parent = $this->loadTemplate("renter/index.html.twig", "renter/editCar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_dashboard_current($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_current"));

        // line 4
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_panel");
        echo "\">Panel</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_cars");
        echo "\">Véhicules</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
        </ol>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_dashboard_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_body"));

        // line 14
        echo "    <h1 class=\"h2\">Modification du véhicule</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-10\">
            <div class=\"card rounded shadow-sm border-0 mr-2\">
                <div class=\"card-body\">
                    <a class=\"fa_icon\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_cars");
        echo "\" >
                        <span class=\"fa fa-angle-left\"></span>
                    </a>
                    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "

                    <div class=\"my-custom-class-for-errors\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'errors');
        echo "
                    </div>

                    <div class=\"form-row\">
                        <div class=\"col\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "type", [], "any", false, false, false, 30), 'row');
        echo "
                            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_editType", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 31, $this->source); })()), "type", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">Modifier <i class=\"fas fa-edit\"></i></a>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), 'row');
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
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "boite", [], "any", false, false, false, 57), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "moteur", [], "any", false, false, false, 62), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "carburant", [], "any", false, false, false, 67), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <div class=\"text-center\">
                                <div class=\"form-group\">
                                    <label>Photo du véhicule</label>

                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "imageFile", [], "any", false, false, false, 76), 'widget');
        echo "

                                    <small>";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "imageFile", [], "any", false, false, false, 78), 'help');
        echo "</small>

                                    <div class=\"form-error\">
                                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "imageFile", [], "any", false, false, false, 81), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <div class=\"text-center\">
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "save", [], "any", false, false, false, 90), 'row', ["label" => "Confirmer les modifications"]);
        echo "
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "available", [], "any", false, false, false, 91), 'row', ["label" => "Disponible à la location"]);
        echo "
                            </div>
                            <div class=\"text-center\">
                                <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#deleteModal\">
                                    Retirer le véhicule
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmation</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    Le véhicule sera définitivement supprimé et ne pourra plus être mis en location
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">Annuler</button>
                                    <a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renter_deleteCar", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'form_end');
        echo "

            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 128
    public function block_panel_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel_scripts"));

        // line 129
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("form");
        echo "
    <script>
        \$(\".numberpicker\").val(";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 131, $this->source); })()), "price", [], "any", false, false, false, 131), "html", null, true);
        echo ");
        var \$inputPrix = \$(\".numberpicker\");
        var \$1semaine = \$(\"#1semaine\");
        var \$1mois = \$(\"#1mois\");
        var \$1an = \$(\"#1an\");
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
        // line 151
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
        return "renter/editCar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 151,  290 => 131,  284 => 129,  274 => 128,  257 => 121,  248 => 115,  221 => 91,  217 => 90,  205 => 81,  199 => 78,  194 => 76,  182 => 67,  174 => 62,  166 => 57,  142 => 36,  134 => 31,  130 => 30,  122 => 25,  116 => 22,  110 => 19,  103 => 14,  93 => 13,  78 => 7,  74 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'renter/index.html.twig' %}

{% block dashboard_current %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('renter_panel') }}\">Panel</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('renter_cars') }}\">Véhicules</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
        </ol>
    </nav>
{% endblock %}

{% block dashboard_body %}
    <h1 class=\"h2\">Modification du véhicule</h1>
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
                            <a href=\"{{ path('renter_editType', {'id': car.type.id}) }}\">Modifier <i class=\"fas fa-edit\"></i></a>
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
                            <div class=\"text-center\">
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
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <div class=\"text-center\">
                                {{ form_row(form.save, {'label': 'Confirmer les modifications'}) }}
                                {{ form_row(form.available, {'label': 'Disponible à la location'}) }}
                            </div>
                            <div class=\"text-center\">
                                <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#deleteModal\">
                                    Retirer le véhicule
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmation</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    Le véhicule sera définitivement supprimé et ne pourra plus être mis en location
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">Annuler</button>
                                    <a href=\"{{ path('renter_deleteCar', {'id': car.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                                </div>
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
        \$(\".numberpicker\").val({{ car.price }});
        var \$inputPrix = \$(\".numberpicker\");
        var \$1semaine = \$(\"#1semaine\");
        var \$1mois = \$(\"#1mois\");
        var \$1an = \$(\"#1an\");
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
{% endblock %}

", "renter/editCar.html.twig", "/Users/user/SITE/CarApp/templates/renter/editCar.html.twig");
    }
}
