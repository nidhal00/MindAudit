<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* front/status.html.twig */
class __TwigTemplate_1af9a6d6e9070556fda9d9597fe580bd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/status.html.twig"));

        $this->parent = $this->load("front/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Suivi de Demande - MindAudit";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-6 col-lg-8 col-md-9\">
            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <div class=\"p-5\">
                        <div class=\"text-center\">
                            <h1 class=\"h4 text-gray-900 mb-4\">Suivi de Demande</h1>
                            <p class=\"mb-4\">Entrez votre Matricule Fiscale pour vérifier le statut de votre inscription.</p>
                        </div>

                        ";
        // line 17
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "</div>
                        ";
        }
        // line 20
        yield "
                        <form method=\"post\" class=\"user mb-4\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"matricule\" class=\"form-control form-control-user text-center\"
                                       placeholder=\"Matricule Fiscale (ex: 1234567/A/B/C/000)\"
                                       value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matricule"]) || array_key_exists("matricule", $context) ? $context["matricule"] : (function () { throw new RuntimeError('Variable "matricule" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                Vérifier le statut
                            </button>
                        </form>

                        ";
        // line 32
        if ((($tmp = (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                            <div class=\"card border-left-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 33, $this->source); })()), "statut", [], "any", false, false, false, 33) == "valide")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 33, $this->source); })()), "statut", [], "any", false, false, false, 33) == "rejete")) ? ("danger") : ("warning"))));
            yield " shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-uppercase mb-1\">
                                                ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "
                                            </div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                                ";
            // line 41
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 41, $this->source); })()), "statut", [], "any", false, false, false, 41) == "valide")) {
                // line 42
                yield "                                                    <span class=\"text-success\">VALIDÉE <i class=\"fas fa-check-circle\"></i></span>
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 43
(isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 43, $this->source); })()), "statut", [], "any", false, false, false, 43) == "rejete")) {
                // line 44
                yield "                                                    <span class=\"text-danger\">REJETÉE <i class=\"fas fa-times-circle\"></i></span>
                                                ";
            } else {
                // line 46
                yield "                                                    <span class=\"text-warning\">EN ATTENTE <i class=\"fas fa-hourglass-half\"></i></span>
                                                ";
            }
            // line 48
            yield "                                            </div>
                                            
                                            ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50) == "valide")) {
                // line 51
                yield "                                                <div class=\"mt-3 p-3 bg-gray-200 rounded\">
                                                    <p class=\"mb-1 text-xs font-weight-bold text-gray-800\">CODE D'ACCÈS :</p>
                                                    <h3 class=\"text-primary font-weight-bold\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 53, $this->source); })()), "accessCode", [], "any", false, false, false, 53), "html", null, true);
                yield "</h3>
                                                    <a href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_login", ["code" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 54, $this->source); })()), "accessCode", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success mt-2\">
                                                        Accéder à l'espace
                                                    </a>
                                                </div>
                                            ";
            }
            // line 59
            yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 64
        yield "                        
                        <div class=\"text-center mt-3\">
                            <a class=\"small\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register");
        yield "\">Pas encore inscrit ? Créer un compte !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/status.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  188 => 66,  184 => 64,  177 => 59,  169 => 54,  165 => 53,  161 => 51,  159 => 50,  155 => 48,  151 => 46,  147 => 44,  145 => 43,  142 => 42,  140 => 41,  134 => 38,  125 => 33,  123 => 32,  113 => 25,  106 => 20,  100 => 18,  98 => 17,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Suivi de Demande - MindAudit{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-6 col-lg-8 col-md-9\">
            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <div class=\"p-5\">
                        <div class=\"text-center\">
                            <h1 class=\"h4 text-gray-900 mb-4\">Suivi de Demande</h1>
                            <p class=\"mb-4\">Entrez votre Matricule Fiscale pour vérifier le statut de votre inscription.</p>
                        </div>

                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error }}</div>
                        {% endif %}

                        <form method=\"post\" class=\"user mb-4\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"matricule\" class=\"form-control form-control-user text-center\"
                                       placeholder=\"Matricule Fiscale (ex: 1234567/A/B/C/000)\"
                                       value=\"{{ matricule }}\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                Vérifier le statut
                            </button>
                        </form>

                        {% if entreprise %}
                            <div class=\"card border-left-{{ entreprise.statut == 'valide' ? 'success' : (entreprise.statut == 'rejete' ? 'danger' : 'warning') }} shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-uppercase mb-1\">
                                                {{ entreprise.nom }}
                                            </div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                                {% if entreprise.statut == 'valide' %}
                                                    <span class=\"text-success\">VALIDÉE <i class=\"fas fa-check-circle\"></i></span>
                                                {% elseif entreprise.statut == 'rejete' %}
                                                    <span class=\"text-danger\">REJETÉE <i class=\"fas fa-times-circle\"></i></span>
                                                {% else %}
                                                    <span class=\"text-warning\">EN ATTENTE <i class=\"fas fa-hourglass-half\"></i></span>
                                                {% endif %}
                                            </div>
                                            
                                            {% if entreprise.statut == 'valide' %}
                                                <div class=\"mt-3 p-3 bg-gray-200 rounded\">
                                                    <p class=\"mb-1 text-xs font-weight-bold text-gray-800\">CODE D'ACCÈS :</p>
                                                    <h3 class=\"text-primary font-weight-bold\">{{ entreprise.accessCode }}</h3>
                                                    <a href=\"{{ path('app_employee_login', {'code': entreprise.accessCode}) }}\" class=\"btn btn-sm btn-success mt-2\">
                                                        Accéder à l'espace
                                                    </a>
                                                </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                        
                        <div class=\"text-center mt-3\">
                            <a class=\"small\" href=\"{{ path('app_front_register') }}\">Pas encore inscrit ? Créer un compte !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "front/status.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\front\\status.html.twig");
    }
}
