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

/* admin/history/index.html.twig */
class __TwigTemplate_ac9e348d3d5d7b455f94f83fe3812396 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/history/index.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Historique des Activités - MindAudit";
        
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
        yield "    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">📜 Historique des Activités</h1>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Journal des événements</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Action</th>
                            <th>Description</th>
                            <th>Entreprise</th>
                            <th>Auteur / IP</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["historiques"]) || array_key_exists("historiques", $context) ? $context["historiques"] : (function () { throw new RuntimeError('Variable "historiques" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 28
            yield "                        <tr>
                            <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "dateAction", [], "any", false, false, false, 29), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"badge badge-";
            // line 31
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "typeAction", [], "any", false, false, false, 31) == "VALIDATION")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "typeAction", [], "any", false, false, false, 31) == "REJET")) ? ("danger") : ("info"))));
            yield "\">
                                    ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "typeAction", [], "any", false, false, false, 32), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "description", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 37
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "entreprise", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "entreprise", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                yield "\">
                                        ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "entreprise", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
                yield "
                                    </a>
                                ";
            } else {
                // line 42
                yield "                                    -
                                ";
            }
            // line 44
            yield "                            </td>
                            <td>
                                <small>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "auteur", [], "any", false, false, false, 46), "html", null, true);
            yield "<br>IP: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "ipAddress", [], "any", false, false, false, 46), "html", null, true);
            yield "</small>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 49
        if (!$context['_iterated']) {
            // line 50
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucun historique trouvé.</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['historique'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                    </tbody>
                </table>
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
        return "admin/history/index.html.twig";
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
        return array (  178 => 54,  169 => 50,  167 => 49,  157 => 46,  153 => 44,  149 => 42,  143 => 39,  138 => 38,  136 => 37,  131 => 35,  125 => 32,  121 => 31,  116 => 29,  113 => 28,  108 => 27,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Historique des Activités - MindAudit{% endblock %}

{% block body %}
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">📜 Historique des Activités</h1>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Journal des événements</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Action</th>
                            <th>Description</th>
                            <th>Entreprise</th>
                            <th>Auteur / IP</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for historique in historiques %}
                        <tr>
                            <td>{{ historique.dateAction|date('d/m/Y H:i') }}</td>
                            <td>
                                <span class=\"badge badge-{{ historique.typeAction == 'VALIDATION' ? 'success' : (historique.typeAction == 'REJET' ? 'danger' : 'info') }}\">
                                    {{ historique.typeAction }}
                                </span>
                            </td>
                            <td>{{ historique.description }}</td>
                            <td>
                                {% if historique.entreprise %}
                                    <a href=\"{{ path('app_entreprise_show', {'id': historique.entreprise.id}) }}\">
                                        {{ historique.entreprise.nom }}
                                    </a>
                                {% else %}
                                    -
                                {% endif %}
                            </td>
                            <td>
                                <small>{{ historique.auteur }}<br>IP: {{ historique.ipAddress }}</small>
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucun historique trouvé.</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/history/index.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\history\\index.html.twig");
    }
}
