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

/* admin/document/show.html.twig */
class __TwigTemplate_49a69147c02aa790e6f7f80ff5e0d6e0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/document/show.html.twig"));

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

        yield "Détails Document";
        
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
        <h1 class=\"h3 mb-0 text-gray-800\">📄 ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_index");
        yield "\" class=\"btn btn-secondary btn-icon-split btn-sm\">
            <span class=\"icon text-white-50\">
                <i class=\"fas fa-arrow-left\"></i>
            </span>
            <span class=\"text\">Retour à la liste</span>
        </a>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Informations Fichier</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" width=\"100%\" cellspacing=\"0\">
                            <tbody>
                                <tr>
                                    <th class=\"bg-light w-25\">Nom du fichier</th>
                                    <td>
                                        ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield "
                                        ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 30, $this->source); })()), "url", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 31, $this->source); })()), "url", [], "any", false, false, false, 31))), "html", null, true);
            yield "\" target=\"_blank\" class=\"ml-2 btn btn-sm btn-primary btn-icon-split\">
                                                <span class=\"icon text-white-50\"><i class=\"fas fa-download\"></i></span>
                                                <span class=\"text\">Télécharger</span>
                                            </a>
                                        ";
        }
        // line 36
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Type Document</th>
                                    <td><code>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40), "html", null, true);
        yield "</code></td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Statut</th>
                                    <td>
                                        ";
        // line 45
        $context["statusClass"] = "secondary";
        // line 46
        yield "                                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46) == "valide")) {
            // line 47
            yield "                                            ";
            $context["statusClass"] = "success";
            // line 48
            yield "                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 48, $this->source); })()), "statut", [], "any", false, false, false, 48) == "rejete")) {
            // line 49
            yield "                                            ";
            $context["statusClass"] = "danger";
            // line 50
            yield "                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50) == "en_attente")) {
            // line 51
            yield "                                            ";
            $context["statusClass"] = "warning";
            // line 52
            yield "                                        ";
        }
        // line 53
        yield "                                        <span class=\"badge badge-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "\">
                                            ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 54, $this->source); })()), "statut", [], "any", false, false, false, 54), ["_" => " "])), "html", null, true);
        yield "
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Date Upload</th>
                                    <td>";
        // line 60
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 60, $this->source); })()), "dateUpload", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 60, $this->source); })()), "dateUpload", [], "any", false, false, false, 60), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Conformité IA</th>
                                    <td>
                                        ";
        // line 65
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 65, $this->source); })()), "noteIA", [], "any", false, false, false, 65))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                                             ";
            $context["barClass"] = "success";
            // line 67
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 67, $this->source); })()), "noteIA", [], "any", false, false, false, 67) < 50)) {
                // line 68
                yield "                                                ";
                $context["barClass"] = "danger";
                // line 69
                yield "                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 69, $this->source); })()), "noteIA", [], "any", false, false, false, 69) < 75)) {
                // line 70
                yield "                                                ";
                $context["barClass"] = "warning";
                // line 71
                yield "                                            ";
            }
            // line 72
            yield "                                            
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 75, $this->source); })()), "noteIA", [], "any", false, false, false, 75), "html", null, true);
            yield "%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\" style=\"width: 200px;\">
                                                        <div class=\"progress-bar bg-";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["barClass"]) || array_key_exists("barClass", $context) ? $context["barClass"] : (function () { throw new RuntimeError('Variable "barClass" does not exist.', 79, $this->source); })()), "html", null, true);
            yield "\" role=\"progressbar\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 79, $this->source); })()), "noteIA", [], "any", false, false, false, 79), "html", null, true);
            yield "%\" aria-valuenow=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 79, $this->source); })()), "noteIA", [], "any", false, false, false, 79), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        } else {
            // line 84
            yield "                                            <span class=\"text-muted font-italic\">Non analysé</span>
                                        ";
        }
        // line 86
        yield "                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-4\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Actions</h6>
                </div>
                <div class=\"card-body\">

                    ";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 102, $this->source); })()), "statut", [], "any", false, false, false, 102) == "en_attente")) {
            // line 103
            yield "                        <!-- AI Recommendation -->
                        <div class=\"alert alert-info border-left-info shadow-sm mb-4\">
                             <h6 class=\"font-weight-bold\"><i class=\"fas fa-robot mr-2\"></i> Avis IA</h6>
                             <hr>
                             <p class=\"small mb-0\">
                                ";
            // line 108
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 108, $this->source); })()), "noteIA", [], "any", false, false, false, 108) < 50)) {
                // line 109
                yield "                                    <i class=\"fas fa-exclamation-triangle mr-1\"></i> Risque élevé. Rejet conseillé.
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 110
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 110, $this->source); })()), "noteIA", [], "any", false, false, false, 110) < 75)) {
                // line 111
                yield "                                    <i class=\"fas fa-info-circle mr-1\"></i> Conformité moyenne. À vérifier.
                                ";
            } else {
                // line 113
                yield "                                    <i class=\"fas fa-check-circle mr-1\"></i> Conforme. Validation conseillée.
                                ";
            }
            // line 115
            yield "                             </p>
                        </div>

                        <div class=\"mb-4\">
                            <form method=\"post\" action=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_validate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Valider ce document ?');\" class=\"mb-2\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("validate" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-success btn-block icon-split align-items-center justify-content-start p-0\">
                                    <span class=\"icon text-white-50\"><i class=\"fas fa-check\"></i></span>
                                    <span class=\"text\">Valider</span>
                                </button>
                            </form>
                            
                            <form method=\"post\" action=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Rejeter ce document ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128))), "html", null, true);
            yield "\">
                                <div class=\"form-group mb-2\">
                                    <textarea name=\"commentaire\" class=\"form-control form-control-sm\" rows=\"2\" required placeholder=\"Motif du rejet...\"></textarea>
                                </div>
                                <button class=\"btn btn-danger btn-block icon-split align-items-center justify-content-start p-0\">
                                    <span class=\"icon text-white-50\"><i class=\"fas fa-times\"></i></span>
                                    <span class=\"text\">Rejeter</span>
                                </button>
                            </form>
                        </div>
                        <hr>
                    ";
        }
        // line 140
        yield "
                    <div class=\"d-flex flex-column gap-2\">
                         <a href=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142)]), "html", null, true);
        yield "\" class=\"btn btn-info btn-icon-split mb-2\" target=\"_blank\">
                             <span class=\"icon text-white-50\"><i class=\"fas fa-file-pdf\"></i></span>
                             <span class=\"text text-left w-100\">Générer PDF</span>
                        </a>

                        <a href=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-icon-split mb-2\">
                            <span class=\"icon text-white-50\"><i class=\"fas fa-pen\"></i></span>
                            <span class=\"text text-left w-100\">Modifier</span>
                        </a>
                        
                        ";
        // line 152
        yield Twig\Extension\CoreExtension::include($this->env, $context, "document/_delete_form.html.twig");
        yield "
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
        return "admin/document/show.html.twig";
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
        return array (  339 => 152,  331 => 147,  323 => 142,  319 => 140,  304 => 128,  300 => 127,  290 => 120,  286 => 119,  280 => 115,  276 => 113,  272 => 111,  270 => 110,  267 => 109,  265 => 108,  258 => 103,  256 => 102,  238 => 86,  234 => 84,  222 => 79,  215 => 75,  210 => 72,  207 => 71,  204 => 70,  201 => 69,  198 => 68,  195 => 67,  192 => 66,  190 => 65,  182 => 60,  173 => 54,  168 => 53,  165 => 52,  162 => 51,  159 => 50,  156 => 49,  153 => 48,  150 => 47,  147 => 46,  145 => 45,  137 => 40,  131 => 36,  122 => 31,  120 => 30,  116 => 29,  92 => 8,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Détails Document{% endblock %}

{% block body %}
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">📄 {{ document.nom }}</h1>
        <a href=\"{{ path('app_document_index') }}\" class=\"btn btn-secondary btn-icon-split btn-sm\">
            <span class=\"icon text-white-50\">
                <i class=\"fas fa-arrow-left\"></i>
            </span>
            <span class=\"text\">Retour à la liste</span>
        </a>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Informations Fichier</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" width=\"100%\" cellspacing=\"0\">
                            <tbody>
                                <tr>
                                    <th class=\"bg-light w-25\">Nom du fichier</th>
                                    <td>
                                        {{ document.nom }}
                                        {% if document.url %}
                                            <a href=\"{{ asset('uploads/documents/' ~ document.url) }}\" target=\"_blank\" class=\"ml-2 btn btn-sm btn-primary btn-icon-split\">
                                                <span class=\"icon text-white-50\"><i class=\"fas fa-download\"></i></span>
                                                <span class=\"text\">Télécharger</span>
                                            </a>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Type Document</th>
                                    <td><code>{{ document.type }}</code></td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Statut</th>
                                    <td>
                                        {% set statusClass = 'secondary' %}
                                        {% if document.statut == 'valide' %}
                                            {% set statusClass = 'success' %}
                                        {% elseif document.statut == 'rejete' %}
                                            {% set statusClass = 'danger' %}
                                        {% elseif document.statut == 'en_attente' %}
                                            {% set statusClass = 'warning' %}
                                        {% endif %}
                                        <span class=\"badge badge-{{ statusClass }}\">
                                            {{ document.statut|replace({'_': ' '})|capitalize }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Date Upload</th>
                                    <td>{{ document.dateUpload ? document.dateUpload|date('d/m/Y H:i') : '-' }}</td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Conformité IA</th>
                                    <td>
                                        {% if document.noteIA is not null %}
                                             {% set barClass = 'success' %}
                                            {% if document.noteIA < 50 %}
                                                {% set barClass = 'danger' %}
                                            {% elseif document.noteIA < 75 %}
                                                {% set barClass = 'warning' %}
                                            {% endif %}
                                            
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{ document.noteIA }}%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\" style=\"width: 200px;\">
                                                        <div class=\"progress-bar bg-{{ barClass }}\" role=\"progressbar\" style=\"width: {{ document.noteIA }}%\" aria-valuenow=\"{{ document.noteIA }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% else %}
                                            <span class=\"text-muted font-italic\">Non analysé</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-4\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Actions</h6>
                </div>
                <div class=\"card-body\">

                    {% if document.statut == 'en_attente' %}
                        <!-- AI Recommendation -->
                        <div class=\"alert alert-info border-left-info shadow-sm mb-4\">
                             <h6 class=\"font-weight-bold\"><i class=\"fas fa-robot mr-2\"></i> Avis IA</h6>
                             <hr>
                             <p class=\"small mb-0\">
                                {% if document.noteIA < 50 %}
                                    <i class=\"fas fa-exclamation-triangle mr-1\"></i> Risque élevé. Rejet conseillé.
                                {% elseif document.noteIA < 75 %}
                                    <i class=\"fas fa-info-circle mr-1\"></i> Conformité moyenne. À vérifier.
                                {% else %}
                                    <i class=\"fas fa-check-circle mr-1\"></i> Conforme. Validation conseillée.
                                {% endif %}
                             </p>
                        </div>

                        <div class=\"mb-4\">
                            <form method=\"post\" action=\"{{ path('app_document_validate', {'id': document.id}) }}\" onsubmit=\"return confirm('Valider ce document ?');\" class=\"mb-2\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('validate' ~ document.id) }}\">
                                <button class=\"btn btn-success btn-block icon-split align-items-center justify-content-start p-0\">
                                    <span class=\"icon text-white-50\"><i class=\"fas fa-check\"></i></span>
                                    <span class=\"text\">Valider</span>
                                </button>
                            </form>
                            
                            <form method=\"post\" action=\"{{ path('app_document_reject', {'id': document.id}) }}\" onsubmit=\"return confirm('Rejeter ce document ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reject' ~ document.id) }}\">
                                <div class=\"form-group mb-2\">
                                    <textarea name=\"commentaire\" class=\"form-control form-control-sm\" rows=\"2\" required placeholder=\"Motif du rejet...\"></textarea>
                                </div>
                                <button class=\"btn btn-danger btn-block icon-split align-items-center justify-content-start p-0\">
                                    <span class=\"icon text-white-50\"><i class=\"fas fa-times\"></i></span>
                                    <span class=\"text\">Rejeter</span>
                                </button>
                            </form>
                        </div>
                        <hr>
                    {% endif %}

                    <div class=\"d-flex flex-column gap-2\">
                         <a href=\"{{ path('app_document_pdf', {'id': document.id}) }}\" class=\"btn btn-info btn-icon-split mb-2\" target=\"_blank\">
                             <span class=\"icon text-white-50\"><i class=\"fas fa-file-pdf\"></i></span>
                             <span class=\"text text-left w-100\">Générer PDF</span>
                        </a>

                        <a href=\"{{ path('app_document_edit', {'id': document.id}) }}\" class=\"btn btn-primary btn-icon-split mb-2\">
                            <span class=\"icon text-white-50\"><i class=\"fas fa-pen\"></i></span>
                            <span class=\"text text-left w-100\">Modifier</span>
                        </a>
                        
                        {{ include('document/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/document/show.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\document\\show.html.twig");
    }
}
