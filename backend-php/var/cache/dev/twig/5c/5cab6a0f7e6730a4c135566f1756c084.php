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

/* admin/report.html.twig */
class __TwigTemplate_c4c031f1cc34ca892f08b2a6ff12a7ba extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/report.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Rapport d'Activité MindAudit</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; color: #333; }
        .header { text-align: center; margin-bottom: 30px; border-bottom: 2px solid #4e73df; padding-bottom: 10px; }
        .logo { max-width: 150px; margin-bottom: 10px; }
        h1 { color: #4e73df; margin: 0; }
        .info-card { background: #f8f9fc; padding: 15px; margin-bottom: 20px; border-left: 4px solid #4e73df; }
        .section-title { font-size: 14px; font-weight: bold; color: #2e59d9; margin-bottom: 10px; margin-top: 20px; border-bottom: 1px solid #ddd; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f8f9fc; color: #4e73df; }
        .badge { padding: 3px 6px; border-radius: 4px; color: white; font-weight: bold; font-size: 10px; }
        .badge-success { background-color: #1cc88a; }
        .badge-warning { background-color: #f6c23e; }
        .badge-danger { background-color: #e74a3b; }
        .badge-secondary { background-color: #858796; }
        .footer { position: fixed; bottom: 0; left: 0; right: 0; text-align: center; font-size: 10px; color: #858796; padding: 10px; border-top: 1px solid #ddd; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Rapport d'Activité MindAudit</h1>
        <p>Généré le ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 27, $this->source); })()), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
    </div>

    <div class=\"info-card\">
        <h3>Vue d'ensemble</h3>
        <table style=\"border: none;\">
            <tr style=\"border: none;\">
                <td style=\"border: none;\"><strong>Total Entreprises :</strong> ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_entreprises"]) || array_key_exists("total_entreprises", $context) ? $context["total_entreprises"] : (function () { throw new RuntimeError('Variable "total_entreprises" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</td>
                <td style=\"border: none;\"><strong>Total Documents :</strong> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_documents"]) || array_key_exists("total_documents", $context) ? $context["total_documents"] : (function () { throw new RuntimeError('Variable "total_documents" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "</td>
            </tr>
        </table>
    </div>

    <div class=\"section-title\">Répartition des Documents</div>
    <table>
        <thead>
            <tr>
                <th>Statut</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["status_stats"]) || array_key_exists("status_stats", $context) ? $context["status_stats"] : (function () { throw new RuntimeError('Variable "status_stats" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 50
            yield "            <tr>
                <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "statut", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "statut", [], "any", false, false, false, 51), "Inconnu")) : ("Inconnu"))), "html", null, true);
            yield "</td>
                <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 54
        if (!$context['_iterated']) {
            // line 55
            yield "            <tr><td colspan=\"2\">Aucune donnée disponible</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "        </tbody>
    </table>

    <div class=\"section-title\">Dernières Entreprises Inscrites</div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Date d'inscription</th>
                <th>Matricule</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_entreprises"]) || array_key_exists("recent_entreprises", $context) ? $context["recent_entreprises"] : (function () { throw new RuntimeError('Variable "recent_entreprises" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entr"]) {
            // line 72
            yield "            <tr>
                <td>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entr"], "nom", [], "any", false, false, false, 73), "html", null, true);
            yield "</td>
                <td>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entr"], "email", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entr"], "dateCreation", [], "any", false, false, false, 75), "d/m/Y"), "html", null, true);
            yield "</td>
                <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entr"], "matriculeFiscale", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entr'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </tbody>
    </table>

    <div class=\"footer\">
        Document généré automatiquement par la plateforme MindAudit.
    </div>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/report.html.twig";
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
        return array (  176 => 79,  167 => 76,  163 => 75,  159 => 74,  155 => 73,  152 => 72,  148 => 71,  132 => 57,  125 => 55,  123 => 54,  116 => 52,  112 => 51,  109 => 50,  104 => 49,  87 => 35,  83 => 34,  73 => 27,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Rapport d'Activité MindAudit</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; color: #333; }
        .header { text-align: center; margin-bottom: 30px; border-bottom: 2px solid #4e73df; padding-bottom: 10px; }
        .logo { max-width: 150px; margin-bottom: 10px; }
        h1 { color: #4e73df; margin: 0; }
        .info-card { background: #f8f9fc; padding: 15px; margin-bottom: 20px; border-left: 4px solid #4e73df; }
        .section-title { font-size: 14px; font-weight: bold; color: #2e59d9; margin-bottom: 10px; margin-top: 20px; border-bottom: 1px solid #ddd; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f8f9fc; color: #4e73df; }
        .badge { padding: 3px 6px; border-radius: 4px; color: white; font-weight: bold; font-size: 10px; }
        .badge-success { background-color: #1cc88a; }
        .badge-warning { background-color: #f6c23e; }
        .badge-danger { background-color: #e74a3b; }
        .badge-secondary { background-color: #858796; }
        .footer { position: fixed; bottom: 0; left: 0; right: 0; text-align: center; font-size: 10px; color: #858796; padding: 10px; border-top: 1px solid #ddd; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Rapport d'Activité MindAudit</h1>
        <p>Généré le {{ date|date('d/m/Y à H:i') }}</p>
    </div>

    <div class=\"info-card\">
        <h3>Vue d'ensemble</h3>
        <table style=\"border: none;\">
            <tr style=\"border: none;\">
                <td style=\"border: none;\"><strong>Total Entreprises :</strong> {{ total_entreprises }}</td>
                <td style=\"border: none;\"><strong>Total Documents :</strong> {{ total_documents }}</td>
            </tr>
        </table>
    </div>

    <div class=\"section-title\">Répartition des Documents</div>
    <table>
        <thead>
            <tr>
                <th>Statut</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            {% for stat in status_stats %}
            <tr>
                <td>{{ stat.statut|default('Inconnu')|capitalize }}</td>
                <td>{{ stat.count }}</td>
            </tr>
            {% else %}
            <tr><td colspan=\"2\">Aucune donnée disponible</td></tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"section-title\">Dernières Entreprises Inscrites</div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Date d'inscription</th>
                <th>Matricule</th>
            </tr>
        </thead>
        <tbody>
            {% for entr in recent_entreprises %}
            <tr>
                <td>{{ entr.nom }}</td>
                <td>{{ entr.email }}</td>
                <td>{{ entr.dateCreation|date('d/m/Y') }}</td>
                <td>{{ entr.matriculeFiscale }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"footer\">
        Document généré automatiquement par la plateforme MindAudit.
    </div>
</body>
</html>
", "admin/report.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\report.html.twig");
    }
}
