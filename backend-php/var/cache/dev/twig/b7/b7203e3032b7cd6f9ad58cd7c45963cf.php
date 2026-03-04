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

/* admin/entreprise/show.html.twig */
class __TwigTemplate_8f00617b37fd5a5ab45df3c3393e1970 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/entreprise/show.html.twig"));

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

        yield "Détails Entreprise";
        
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
        <h1 class=\"h3 mb-0 text-gray-800\">🏢 ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_index");
        yield "\" class=\"btn btn-secondary btn-icon-split btn-sm\">
            <span class=\"icon text-white-50\">
                <i class=\"fas fa-arrow-left\"></i>
            </span>
            <span class=\"text\">Retour à la liste</span>
        </a>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <!-- General Info Card -->
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Informations Générales</h6>
                    ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 22, $this->source); })()), "rating", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                        <div class=\"rating-display\">
                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 25
                yield "                                <i class=\"fas fa-star";
                if (($context["i"] > CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 25, $this->source); })()), "rating", [], "any", false, false, false, 25))) {
                    yield "-o text-muted";
                } else {
                    yield " text-warning";
                }
                yield "\"></i>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "                            <span class=\"ml-2 text-muted\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 27, $this->source); })()), "rating", [], "any", false, false, false, 27), "html", null, true);
            yield "/5)</span>
                        </div>
                    ";
        }
        // line 30
        yield "                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" width=\"100%\" cellspacing=\"0\">
                            <tbody>
                                <tr>
                                    <th class=\"bg-light w-25\">Matricule</th>
                                    <td><code>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 37, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 37), "html", null, true);
        yield "</code></td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Secteur</th>
                                    <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 41, $this->source); })()), "secteur", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Taille</th>
                                    <td>
                                        ";
        // line 46
        $context["badgeClass"] = "secondary";
        // line 47
        yield "                                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 47, $this->source); })()), "taille", [], "any", false, false, false, 47) == "large")) {
            // line 48
            yield "                                            ";
            $context["badgeClass"] = "primary";
            // line 49
            yield "                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 49, $this->source); })()), "taille", [], "any", false, false, false, 49) == "medium")) {
            // line 50
            yield "                                            ";
            $context["badgeClass"] = "info";
            // line 51
            yield "                                        ";
        }
        // line 52
        yield "                                        <span class=\"badge badge-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 52, $this->source); })()), "taille", [], "any", false, false, false, 52), "html", null, true);
        yield "</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Statut</th>
                                    <td>
                                        ";
        // line 58
        $context["statusClass"] = "secondary";
        // line 59
        yield "                                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 59, $this->source); })()), "statut", [], "any", false, false, false, 59) == "valide")) {
            // line 60
            yield "                                            ";
            $context["statusClass"] = "success";
            // line 61
            yield "                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 61, $this->source); })()), "statut", [], "any", false, false, false, 61) == "rejete")) {
            // line 62
            yield "                                            ";
            $context["statusClass"] = "danger";
            // line 63
            yield "                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 63, $this->source); })()), "statut", [], "any", false, false, false, 63) == "en_attente")) {
            // line 64
            yield "                                            ";
            $context["statusClass"] = "warning";
            // line 65
            yield "                                        ";
        }
        // line 66
        yield "                                        <span class=\"badge badge-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "\">
                                            ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 67, $this->source); })()), "statut", [], "any", false, false, false, 67), ["_" => " "])), "html", null, true);
        yield "
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Date Création</th>
                                    <td>";
        // line 73
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 73, $this->source); })()), "dateCreation", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 73, $this->source); })()), "dateCreation", [], "any", false, false, false, 73), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Documents Card -->
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">
                        <i class=\"fas fa-file-alt mr-2\"></i>Documents (";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 85, $this->source); })())), "html", null, true);
        yield ")
                    </h6>
                </div>
                <div class=\"card-body\">
                    ";
        // line 89
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 89, $this->source); })())) > 0)) {
            // line 90
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Type</th>
                                        <th>Score IA</th>
                                        <th>Évaluation</th>
                                        <th>Statut</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                // line 105
                yield "                                        <tr>
                                            <td>";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "nom", [], "any", false, false, false, 106), "html", null, true);
                yield "</td>
                                            <td><span class=\"badge badge-info\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "type", [], "any", false, false, false, 107), "html", null, true);
                yield "</span></td>
                                            <td>
                                                ";
                // line 109
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 110
                    yield "                                                    <div class=\"progress\" style=\"height: 20px;\">
                                                        <div class=\"progress-bar ";
                    // line 111
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 111) >= 70)) {
                        yield "bg-success";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 111) >= 40)) {
                        yield "bg-warning";
                    } else {
                        yield "bg-danger";
                    }
                    yield "\" 
                                                             role=\"progressbar\" 
                                                             style=\"width: ";
                    // line 113
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 113), "html", null, true);
                    yield "%\">
                                                            ";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 114), "html", null, true);
                    yield "%
                                                        </div>
                                                    </div>
                                                ";
                } else {
                    // line 118
                    yield "                                                    <span class=\"text-muted\">-</span>
                                                ";
                }
                // line 120
                yield "                                            </td>
                                            <td>
                                                ";
                // line 122
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "rating", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 123
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 124
                        yield "                                                        <i class=\"fas fa-star";
                        if (($context["i"] > CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "rating", [], "any", false, false, false, 124))) {
                            yield "-o text-muted";
                        } else {
                            yield " text-warning";
                        }
                        yield "\" style=\"font-size: 0.8rem;\"></i>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    yield "                                                ";
                } else {
                    // line 127
                    yield "                                                    <span class=\"text-muted\">-</span>
                                                ";
                }
                // line 129
                yield "                                            </td>
                                            <td>
                                                ";
                // line 131
                $context["docStatusClass"] = "secondary";
                // line 132
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "statut", [], "any", false, false, false, 132) == "valide")) {
                    // line 133
                    yield "                                                    ";
                    $context["docStatusClass"] = "success";
                    // line 134
                    yield "                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "statut", [], "any", false, false, false, 134) == "rejete")) {
                    // line 135
                    yield "                                                    ";
                    $context["docStatusClass"] = "danger";
                    // line 136
                    yield "                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "statut", [], "any", false, false, false, 136) == "en_attente")) {
                    // line 137
                    yield "                                                    ";
                    $context["docStatusClass"] = "warning";
                    // line 138
                    yield "                                                ";
                }
                // line 139
                yield "                                                <span class=\"badge badge-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["docStatusClass"]) || array_key_exists("docStatusClass", $context) ? $context["docStatusClass"] : (function () { throw new RuntimeError('Variable "docStatusClass" does not exist.', 139, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "statut", [], "any", false, false, false, 139), ["_" => " "]), "html", null, true);
                yield "</span>
                                            </td>
                                            <td>";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "dateUpload", [], "any", false, false, false, 141), "d/m/Y"), "html", null, true);
                yield "</td>
                                            <td>
                                                <a href=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 143)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-primary\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['doc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 153
            yield "                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle mr-2\"></i>
                            Aucun document n'a encore été ajouté pour cette entreprise.
                        </div>
                    ";
        }
        // line 158
        yield "
                    <!-- Upload Form -->
                    ";
        // line 160
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 160, $this->source); })()), "statut", [], "any", false, false, false, 160) == "valide")) {
            // line 161
            yield "                        <hr>
                        <h6 class=\"font-weight-bold text-gray-800 mb-3\">
                            <i class=\"fas fa-upload mr-2\"></i>Ajouter un Document
                        </h6>
                        <a href=\"";
            // line 165
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_index");
            yield "\" class=\"btn btn-success btn-icon-split\">
                             <span class=\"icon text-white-50\">
                                 <i class=\"fas fa-plus\"></i>
                             </span>
                             <span class=\"text\">Voir les documents</span>
                         </a>
                    ";
        }
        // line 172
        yield "                </div>
            </div>

            <!-- Contact & Map Card -->
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Coordonnées & Localisation</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <p><strong><i class=\"fas fa-envelope mr-2 text-gray-400\"></i> Email:</strong><br> ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 183, $this->source); })()), "email", [], "any", false, false, false, 183), "html", null, true);
        yield "</p>
                            <p><strong><i class=\"fas fa-phone mr-2 text-gray-400\"></i> Téléphone:</strong><br> ";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 184, $this->source); })()), "telephone", [], "any", false, false, false, 184), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <p><strong><i class=\"fas fa-map-marker-alt mr-2 text-gray-400\"></i> Adresse:</strong><br>
                            ";
        // line 188
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 188, $this->source); })()), "adresse", [], "any", false, false, false, 188), "html", null, true));
        yield "</p>
                            <p><strong><i class=\"fas fa-globe mr-2 text-gray-400\"></i> Pays:</strong> ";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 189, $this->source); })()), "pays", [], "any", false, false, false, 189), "html", null, true);
        yield "</p>
                        </div>
                    </div>

                    ";
        // line 193
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 193, $this->source); })()), "latitude", [], "any", false, false, false, 193) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 193, $this->source); })()), "longitude", [], "any", false, false, false, 193))) {
            // line 194
            yield "                        <p class=\"mb-0 small text-muted\">
                            <i class=\"fas fa-crosshairs mr-1 text-success\"></i>
                            GPS : <code>";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 196, $this->source); })()), "latitude", [], "any", false, false, false, 196), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 196, $this->source); })()), "longitude", [], "any", false, false, false, 196), "html", null, true);
            yield "</code>
                            <span class=\"badge badge-success ml-2\">Coordonnées enregistrées</span>
                        </p>
                    ";
        } else {
            // line 200
            yield "                        <div class=\"alert alert-warning mb-0\">
                            <i class=\"fas fa-exclamation-triangle mr-2\"></i>
                            Coordonnées GPS non renseignées — la carte utilise le géocodage par adresse.
                        </div>
                    ";
        }
        // line 205
        yield "
                </div>
            </div>
        </div>

        <div class=\"col-lg-4\">
            <!-- Actions Card -->
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Actions</h6>
                </div>
                <div class=\"card-body\">
                    
                    ";
        // line 218
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 218, $this->source); })()), "statut", [], "any", false, false, false, 218) == "en_attente")) {
            // line 219
            yield "                        <!-- Analyse IA Prédictive -->
                        <div class=\"card bg-gray-100 border-0 shadow-sm mb-4\">
                            <div class=\"card-header bg-dark text-white py-2 d-flex align-items-center\">
                                <i class=\"fas fa-brain mr-2\"></i>
                                <span class=\"font-weight-bold small\">Audit Prédictif IA</span>
                            </div>
                            <div class=\"card-body p-3\">
                                <div class=\"row no-gutters align-items-center mb-3\">
                                    <div class=\"col-6\">
                                        <div class=\"text-xs font-weight-bold text-uppercase mb-1\">Score Actuel</div>
                                        <div class=\"h4 font-weight-bold mb-0 text-primary\">";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["avg_compliance"]) || array_key_exists("avg_compliance", $context) ? $context["avg_compliance"] : (function () { throw new RuntimeError('Variable "avg_compliance" does not exist.', 229, $this->source); })()), 1), "html", null, true);
            yield "%</div>
                                    </div>
                                    <div class=\"col-6 border-left pl-3\">
                                        <div class=\"text-xs font-weight-bold text-uppercase mb-1\">Projection (6m)</div>
                                        ";
            // line 233
            if (array_key_exists("prediction", $context)) {
                // line 234
                yield "                                        <div class=\"h4 font-weight-bold mb-0\" style=\"color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 234, $this->source); })()), "color", [], "any", false, false, false, 234), "html", null, true);
                yield "\">
                                            ";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 235, $this->source); })()), "score", [], "any", false, false, false, 235), "html", null, true);
                yield "%
                                            ";
                // line 236
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 236, $this->source); })()), "trend", [], "any", false, false, false, 236) == "HAUSSE")) {
                    // line 237
                    yield "                                                <i class=\"fas fa-arrow-up fa-xs\"></i>
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 238
(isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 238, $this->source); })()), "trend", [], "any", false, false, false, 238) == "BAISSE")) {
                    // line 239
                    yield "                                                <i class=\"fas fa-arrow-down fa-xs\"></i>
                                            ";
                } else {
                    // line 241
                    yield "                                                <i class=\"fas fa-minus fa-xs\"></i>
                                            ";
                }
                // line 243
                yield "                                        </div>
                                        ";
            } else {
                // line 245
                yield "                                        <div class=\"h4 font-weight-bold mb-0 text-muted\">N/A</div>
                                        ";
            }
            // line 247
            yield "                                    </div>
                                </div>

                                ";
            // line 250
            if (array_key_exists("prediction", $context)) {
                // line 251
                yield "                                <div class=\"alert mb-0 pt-2 pb-2 pl-3 pr-3\" style=\"background-color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 251, $this->source); })()), "color", [], "any", false, false, false, 251), "html", null, true);
                yield "20; border-left: 4px solid ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 251, $this->source); })()), "color", [], "any", false, false, false, 251), "html", null, true);
                yield "\">
                                    <div class=\"font-weight-bold small text-uppercase\" style=\"color: ";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 252, $this->source); })()), "color", [], "any", false, false, false, 252), "html", null, true);
                yield "\">
                                        Statut : ";
                // line 253
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 253, $this->source); })()), "status", [], "any", false, false, false, 253), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"small text-gray-800\">";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 255, $this->source); })()), "message", [], "any", false, false, false, 255), "html", null, true);
                yield "</div>
                                </div>
                                
                                <div class=\"mt-3\">
                                    <div class=\"text-xs text-muted\">Tendance : <strong>";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 259, $this->source); })()), "trend", [], "any", false, false, false, 259), "html", null, true);
                yield "</strong></div>
                                    <div class=\"progress mt-1\" style=\"height: 4px;\">
                                        <div class=\"progress-bar\" role=\"progressbar\" 
                                             style=\"width: ";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 262, $this->source); })()), "score", [], "any", false, false, false, 262), "html", null, true);
                yield "%; background-color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prediction"]) || array_key_exists("prediction", $context) ? $context["prediction"] : (function () { throw new RuntimeError('Variable "prediction" does not exist.', 262, $this->source); })()), "color", [], "any", false, false, false, 262), "html", null, true);
                yield "\"></div>
                                    </div>
                                </div>
                                ";
            }
            // line 266
            yield "                            </div>
                        </div>

                        <div class=\"mb-4\">
                             <h6 class=\"font-weight-bold text-gray-800 mb-2\">Décision</h6>
                             
                            <form method=\"post\" action=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_validate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 272, $this->source); })()), "id", [], "any", false, false, false, 272)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Valider cette entreprise ?');\" class=\"mb-2\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("validate" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 273, $this->source); })()), "id", [], "any", false, false, false, 273))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-success btn-block icon-split align-items-center justify-content-start p-0\">
                                    <span class=\"icon text-white-50\"><i class=\"fas fa-check\"></i></span>
                                    <span class=\"text\">Valider l'Entreprise</span>
                                </button>
                            </form>
                            
                            <form method=\"post\" action=\"";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Rejeter cette entreprise ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 281, $this->source); })()), "id", [], "any", false, false, false, 281))), "html", null, true);
            yield "\">
                                <div class=\"form-group mb-2\">
                                    <textarea name=\"commentaire\" class=\"form-control form-control-sm\" rows=\"2\" required placeholder=\"Motif du rejet...\"></textarea>
                                </div>
                                <button class=\"btn btn-danger btn-block icon-split align-items-center justify-content-start p-0\">
                                    <span class=\"icon text-white-50\"><i class=\"fas fa-times\"></i></span>
                                    <span class=\"text\">Rejeter le dossier</span>
                                </button>
                            </form>
                        </div>
                        <hr>
                    ";
        }
        // line 293
        yield "
                    ";
        // line 294
        if ((($tmp = (isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 294, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 295
            yield "                        <div class=\"text-center mb-4 p-3 border rounded bg-light shadow-sm\">
                            <h6 class=\"font-weight-bold text-gray-800 small mb-2\"><i class=\"fas fa-qrcode mr-1\"></i> Badge de Conformité</h6>
                            <img src=\"";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 297, $this->source); })()), "html", null, true);
            yield "\" alt=\"QR Code\" class=\"img-fluid mb-2\" style=\"max-height: 150px;\">
                            <p class=\"small text-muted mb-0\">Code: <code>";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 298, $this->source); })()), "accessCode", [], "any", false, false, false, 298), "html", null, true);
            yield "</code></p>
                        </div>
                    ";
        }
        // line 301
        yield "
                    <div class=\"d-flex flex-column gap-2\">
                        <a href=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 303, $this->source); })()), "id", [], "any", false, false, false, 303)]), "html", null, true);
        yield "\" class=\"btn btn-info btn-icon-split mb-2\" target=\"_blank\">
                             <span class=\"icon text-white-50\"><i class=\"fas fa-file-pdf\"></i></span>
                             <span class=\"text text-left w-100\">Exporter Rapport PDF</span>
                        </a>
                        
                        <a href=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 308, $this->source); })()), "id", [], "any", false, false, false, 308)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-icon-split mb-2\">
                            <span class=\"icon text-white-50\"><i class=\"fas fa-pen\"></i></span>
                             <span class=\"text text-left w-100\">Modifier les Infos</span>
                        </a>

                        <div class=\"dropdown-divider\"></div>

                        ";
        // line 315
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/entreprise/_delete_form.html.twig");
        yield "
                    </div>

                </div>
            </div>
        </div>
    </div>

    ";
        // line 324
        yield "    ";
        $context["adresse"] = (((((CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "adresse", [], "any", true, true, false, 324) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 324, $this->source); })()), "adresse", [], "any", false, false, false, 324)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 324, $this->source); })()), "adresse", [], "any", false, false, false, 324)) : ("")) . ", ") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "pays", [], "any", true, true, false, 324) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 324, $this->source); })()), "pays", [], "any", false, false, false, 324)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 324, $this->source); })()), "pays", [], "any", false, false, false, 324)) : ("")));
        // line 325
        yield "    ";
        if ((Twig\Extension\CoreExtension::trim((isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new RuntimeError('Variable "adresse" does not exist.', 325, $this->source); })()), ", ") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 325, $this->source); })()), "latitude", [], "any", false, false, false, 325) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 325, $this->source); })()), "longitude", [], "any", false, false, false, 325)))) {
            // line 326
            yield "
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"/>
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>

    <style>
        #mapCard { transform: none !important; transition: none !important; }
        #mapCard:hover { transform: none !important; box-shadow: 0 4px 20px rgba(0,0,0,0.05) !important; }
        #entrepriseMap .leaflet-tile { border: none !important; }
        .leaflet-container { font-family: inherit; }
    </style>

    <div class=\"row mt-2\">
        <div class=\"col-12\">
            <div class=\"card shadow mb-4\" id=\"mapCard\">
                <div class=\"card-header py-3 d-flex align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">
                        <i class=\"fas fa-map-marker-alt mr-1\"></i> Localisation
                    </h6>
                    <span class=\"small text-muted\" id=\"mapAddressLabel\">
                        ";
            // line 345
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 345, $this->source); })()), "latitude", [], "any", false, false, false, 345) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 345, $this->source); })()), "longitude", [], "any", false, false, false, 345))) {
                // line 346
                yield "                            <span class=\"badge badge-success\"><i class=\"fas fa-crosshairs mr-1\"></i>GPS précis</span>
                        ";
            } else {
                // line 348
                yield "                            <span class=\"badge badge-info\"><i class=\"fas fa-search-location mr-1\"></i>Géocodage par adresse</span>
                        ";
            }
            // line 350
            yield "                    </span>
                </div>
                <div class=\"card-body p-0\">
                    <div id=\"entrepriseMap\" style=\"height: 380px; width: 100%; border-radius: 0 0 .35rem .35rem; z-index:1;\"></div>
                    <div id=\"mapStatus\" class=\"text-center text-muted py-5\" style=\"display:none\">
                        <i class=\"fas fa-spinner fa-spin fa-2x mb-3\"></i>
                        <p>Chargement de la carte...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mapDiv    = document.getElementById('entrepriseMap');
        const statusDiv = document.getElementById('mapStatus');
        if (!mapDiv || typeof L === 'undefined') return;

        // Initialise Leaflet
        const map = L.map('entrepriseMap', { zoomControl: true }).setView([36.8, 10.2], 6);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\">OpenStreetMap</a> contributors',
            maxZoom: 19
        }).addTo(map);
        setTimeout(function() { map.invalidateSize(); }, 200);

        // Custom pin
        const icon = L.divIcon({
            className: '',
            html: '<div style=\"background:#4e73df;width:34px;height:34px;border-radius:50% 50% 50% 0;transform:rotate(-45deg);border:3px solid #fff;box-shadow:0 3px 10px rgba(0,0,0,.35)\"><i class=\"fas fa-building\" style=\"transform:rotate(45deg);display:block;text-align:center;line-height:28px;color:#fff;font-size:13px\"></i></div>',
            iconSize: [34, 34], iconAnchor: [17, 34], popupAnchor: [0, -38]
        });

        function placeMarker(lat, lng, label) {
            map.setView([lat, lng], 14);
            setTimeout(function() { map.invalidateSize(); }, 100);
            L.marker([lat, lng], { icon: icon }).addTo(map)
                .bindPopup('<div style=\"min-width:180px\"><strong style=\"font-size:14px\">";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 388, $this->source); })()), "nom", [], "any", false, false, false, 388), "js"), "html", null, true);
            yield "</strong><br><span style=\"color:#888;font-size:12px\">' + label + '</span></div>')
                .openPopup();
        }

        ";
            // line 392
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 392, $this->source); })()), "latitude", [], "any", false, false, false, 392) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 392, $this->source); })()), "longitude", [], "any", false, false, false, 392))) {
                // line 393
                yield "        // === GPS DIRECT — no API call needed ===
        placeMarker(";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 394, $this->source); })()), "latitude", [], "any", false, false, false, 394), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 394, $this->source); })()), "longitude", [], "any", false, false, false, 394), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 394, $this->source); })()), "adresse", [], "any", false, false, false, 394), "js"), "html", null, true);
                yield "');
        ";
            } else {
                // line 396
                yield "        // === GEOCODING via Nominatim proxy ===
        const adresse = ";
                // line 397
                yield json_encode((isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new RuntimeError('Variable "adresse" does not exist.', 397, $this->source); })()));
                yield ";
        fetch('";
                // line 398
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_geo_geocode");
                yield "?adresse=' + encodeURIComponent(adresse))
            .then(r => r.json())
            .then(function(data) {
                if (data.lat && data.lng) {
                    placeMarker(data.lat, data.lng, data.display_name || adresse);
                } else {
                    mapDiv.style.display = 'none';
                    statusDiv.style.display = 'block';
                    statusDiv.innerHTML = '<i class=\"fas fa-map-marked-alt fa-2x mb-2 text-muted\"></i><p class=\"mb-0\">Localisation non disponible pour : <em>' + adresse + '</em></p>';
                }
            })
            .catch(function() {
                mapDiv.style.display = 'none';
                statusDiv.style.display = 'block';
                statusDiv.innerHTML = '<i class=\"fas fa-exclamation-triangle fa-2x mb-2 text-danger\"></i><p class=\"mb-0\">Impossible de charger la carte.</p>';
            });
        ";
            }
            // line 415
            yield "    });
    </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/entreprise/show.html.twig";
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
        return array (  823 => 415,  803 => 398,  799 => 397,  796 => 396,  787 => 394,  784 => 393,  782 => 392,  775 => 388,  735 => 350,  731 => 348,  727 => 346,  725 => 345,  704 => 326,  701 => 325,  698 => 324,  687 => 315,  677 => 308,  669 => 303,  665 => 301,  659 => 298,  655 => 297,  651 => 295,  649 => 294,  646 => 293,  631 => 281,  627 => 280,  617 => 273,  613 => 272,  605 => 266,  596 => 262,  590 => 259,  583 => 255,  578 => 253,  574 => 252,  567 => 251,  565 => 250,  560 => 247,  556 => 245,  552 => 243,  548 => 241,  544 => 239,  542 => 238,  539 => 237,  537 => 236,  533 => 235,  528 => 234,  526 => 233,  519 => 229,  507 => 219,  505 => 218,  490 => 205,  483 => 200,  474 => 196,  470 => 194,  468 => 193,  461 => 189,  457 => 188,  450 => 184,  446 => 183,  433 => 172,  423 => 165,  417 => 161,  415 => 160,  411 => 158,  404 => 153,  398 => 149,  386 => 143,  381 => 141,  373 => 139,  370 => 138,  367 => 137,  364 => 136,  361 => 135,  358 => 134,  355 => 133,  352 => 132,  350 => 131,  346 => 129,  342 => 127,  339 => 126,  326 => 124,  321 => 123,  319 => 122,  315 => 120,  311 => 118,  304 => 114,  300 => 113,  289 => 111,  286 => 110,  284 => 109,  279 => 107,  275 => 106,  272 => 105,  268 => 104,  252 => 90,  250 => 89,  243 => 85,  228 => 73,  219 => 67,  214 => 66,  211 => 65,  208 => 64,  205 => 63,  202 => 62,  199 => 61,  196 => 60,  193 => 59,  191 => 58,  179 => 52,  176 => 51,  173 => 50,  170 => 49,  167 => 48,  164 => 47,  162 => 46,  154 => 41,  147 => 37,  138 => 30,  131 => 27,  118 => 25,  114 => 24,  111 => 23,  109 => 22,  92 => 8,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Détails Entreprise{% endblock %}

{% block body %}
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">🏢 {{ entreprise.nom }}</h1>
        <a href=\"{{ path('app_entreprise_index') }}\" class=\"btn btn-secondary btn-icon-split btn-sm\">
            <span class=\"icon text-white-50\">
                <i class=\"fas fa-arrow-left\"></i>
            </span>
            <span class=\"text\">Retour à la liste</span>
        </a>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <!-- General Info Card -->
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Informations Générales</h6>
                    {% if entreprise.rating %}
                        <div class=\"rating-display\">
                            {% for i in 1..5 %}
                                <i class=\"fas fa-star{% if i > entreprise.rating %}-o text-muted{% else %} text-warning{% endif %}\"></i>
                            {% endfor %}
                            <span class=\"ml-2 text-muted\">({{ entreprise.rating }}/5)</span>
                        </div>
                    {% endif %}
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" width=\"100%\" cellspacing=\"0\">
                            <tbody>
                                <tr>
                                    <th class=\"bg-light w-25\">Matricule</th>
                                    <td><code>{{ entreprise.matriculeFiscale }}</code></td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Secteur</th>
                                    <td>{{ entreprise.secteur }}</td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Taille</th>
                                    <td>
                                        {% set badgeClass = 'secondary' %}
                                        {% if entreprise.taille == 'large' %}
                                            {% set badgeClass = 'primary' %}
                                        {% elseif entreprise.taille == 'medium' %}
                                            {% set badgeClass = 'info' %}
                                        {% endif %}
                                        <span class=\"badge badge-{{ badgeClass }}\">{{ entreprise.taille }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Statut</th>
                                    <td>
                                        {% set statusClass = 'secondary' %}
                                        {% if entreprise.statut == 'valide' %}
                                            {% set statusClass = 'success' %}
                                        {% elseif entreprise.statut == 'rejete' %}
                                            {% set statusClass = 'danger' %}
                                        {% elseif entreprise.statut == 'en_attente' %}
                                            {% set statusClass = 'warning' %}
                                        {% endif %}
                                        <span class=\"badge badge-{{ statusClass }}\">
                                            {{ entreprise.statut|replace({'_': ' '})|capitalize }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"bg-light\">Date Création</th>
                                    <td>{{ entreprise.dateCreation ? entreprise.dateCreation|date('d/m/Y') : '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Documents Card -->
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">
                        <i class=\"fas fa-file-alt mr-2\"></i>Documents ({{ documents|length }})
                    </h6>
                </div>
                <div class=\"card-body\">
                    {% if documents|length > 0 %}
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Type</th>
                                        <th>Score IA</th>
                                        <th>Évaluation</th>
                                        <th>Statut</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for doc in documents %}
                                        <tr>
                                            <td>{{ doc.nom }}</td>
                                            <td><span class=\"badge badge-info\">{{ doc.type }}</span></td>
                                            <td>
                                                {% if doc.noteIA %}
                                                    <div class=\"progress\" style=\"height: 20px;\">
                                                        <div class=\"progress-bar {% if doc.noteIA >= 70 %}bg-success{% elseif doc.noteIA >= 40 %}bg-warning{% else %}bg-danger{% endif %}\" 
                                                             role=\"progressbar\" 
                                                             style=\"width: {{ doc.noteIA }}%\">
                                                            {{ doc.noteIA }}%
                                                        </div>
                                                    </div>
                                                {% else %}
                                                    <span class=\"text-muted\">-</span>
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if doc.rating %}
                                                    {% for i in 1..5 %}
                                                        <i class=\"fas fa-star{% if i > doc.rating %}-o text-muted{% else %} text-warning{% endif %}\" style=\"font-size: 0.8rem;\"></i>
                                                    {% endfor %}
                                                {% else %}
                                                    <span class=\"text-muted\">-</span>
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% set docStatusClass = 'secondary' %}
                                                {% if doc.statut == 'valide' %}
                                                    {% set docStatusClass = 'success' %}
                                                {% elseif doc.statut == 'rejete' %}
                                                    {% set docStatusClass = 'danger' %}
                                                {% elseif doc.statut == 'en_attente' %}
                                                    {% set docStatusClass = 'warning' %}
                                                {% endif %}
                                                <span class=\"badge badge-{{ docStatusClass }}\">{{ doc.statut|replace({'_': ' '}) }}</span>
                                            </td>
                                            <td>{{ doc.dateUpload|date('d/m/Y') }}</td>
                                            <td>
                                                <a href=\"{{ path('app_document_show', {'id': doc.id}) }}\" class=\"btn btn-sm btn-primary\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle mr-2\"></i>
                            Aucun document n'a encore été ajouté pour cette entreprise.
                        </div>
                    {% endif %}

                    <!-- Upload Form -->
                    {% if entreprise.statut == 'valide' %}
                        <hr>
                        <h6 class=\"font-weight-bold text-gray-800 mb-3\">
                            <i class=\"fas fa-upload mr-2\"></i>Ajouter un Document
                        </h6>
                        <a href=\"{{ path('app_document_index') }}\" class=\"btn btn-success btn-icon-split\">
                             <span class=\"icon text-white-50\">
                                 <i class=\"fas fa-plus\"></i>
                             </span>
                             <span class=\"text\">Voir les documents</span>
                         </a>
                    {% endif %}
                </div>
            </div>

            <!-- Contact & Map Card -->
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Coordonnées & Localisation</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <p><strong><i class=\"fas fa-envelope mr-2 text-gray-400\"></i> Email:</strong><br> {{ entreprise.email }}</p>
                            <p><strong><i class=\"fas fa-phone mr-2 text-gray-400\"></i> Téléphone:</strong><br> {{ entreprise.telephone }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <p><strong><i class=\"fas fa-map-marker-alt mr-2 text-gray-400\"></i> Adresse:</strong><br>
                            {{ entreprise.adresse|nl2br }}</p>
                            <p><strong><i class=\"fas fa-globe mr-2 text-gray-400\"></i> Pays:</strong> {{ entreprise.pays }}</p>
                        </div>
                    </div>

                    {% if entreprise.latitude and entreprise.longitude %}
                        <p class=\"mb-0 small text-muted\">
                            <i class=\"fas fa-crosshairs mr-1 text-success\"></i>
                            GPS : <code>{{ entreprise.latitude }}, {{ entreprise.longitude }}</code>
                            <span class=\"badge badge-success ml-2\">Coordonnées enregistrées</span>
                        </p>
                    {% else %}
                        <div class=\"alert alert-warning mb-0\">
                            <i class=\"fas fa-exclamation-triangle mr-2\"></i>
                            Coordonnées GPS non renseignées — la carte utilise le géocodage par adresse.
                        </div>
                    {% endif %}

                </div>
            </div>
        </div>

        <div class=\"col-lg-4\">
            <!-- Actions Card -->
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Actions</h6>
                </div>
                <div class=\"card-body\">
                    
                    {% if entreprise.statut == 'en_attente' %}
                        <!-- Analyse IA Prédictive -->
                        <div class=\"card bg-gray-100 border-0 shadow-sm mb-4\">
                            <div class=\"card-header bg-dark text-white py-2 d-flex align-items-center\">
                                <i class=\"fas fa-brain mr-2\"></i>
                                <span class=\"font-weight-bold small\">Audit Prédictif IA</span>
                            </div>
                            <div class=\"card-body p-3\">
                                <div class=\"row no-gutters align-items-center mb-3\">
                                    <div class=\"col-6\">
                                        <div class=\"text-xs font-weight-bold text-uppercase mb-1\">Score Actuel</div>
                                        <div class=\"h4 font-weight-bold mb-0 text-primary\">{{ avg_compliance|round(1) }}%</div>
                                    </div>
                                    <div class=\"col-6 border-left pl-3\">
                                        <div class=\"text-xs font-weight-bold text-uppercase mb-1\">Projection (6m)</div>
                                        {% if prediction is defined %}
                                        <div class=\"h4 font-weight-bold mb-0\" style=\"color: {{ prediction.color }}\">
                                            {{ prediction.score }}%
                                            {% if prediction.trend == 'HAUSSE' %}
                                                <i class=\"fas fa-arrow-up fa-xs\"></i>
                                            {% elseif prediction.trend == 'BAISSE' %}
                                                <i class=\"fas fa-arrow-down fa-xs\"></i>
                                            {% else %}
                                                <i class=\"fas fa-minus fa-xs\"></i>
                                            {% endif %}
                                        </div>
                                        {% else %}
                                        <div class=\"h4 font-weight-bold mb-0 text-muted\">N/A</div>
                                        {% endif %}
                                    </div>
                                </div>

                                {% if prediction is defined %}
                                <div class=\"alert mb-0 pt-2 pb-2 pl-3 pr-3\" style=\"background-color: {{ prediction.color }}20; border-left: 4px solid {{ prediction.color }}\">
                                    <div class=\"font-weight-bold small text-uppercase\" style=\"color: {{ prediction.color }}\">
                                        Statut : {{ prediction.status }}
                                    </div>
                                    <div class=\"small text-gray-800\">{{ prediction.message }}</div>
                                </div>
                                
                                <div class=\"mt-3\">
                                    <div class=\"text-xs text-muted\">Tendance : <strong>{{ prediction.trend }}</strong></div>
                                    <div class=\"progress mt-1\" style=\"height: 4px;\">
                                        <div class=\"progress-bar\" role=\"progressbar\" 
                                             style=\"width: {{ prediction.score }}%; background-color: {{ prediction.color }}\"></div>
                                    </div>
                                </div>
                                {% endif %}
                            </div>
                        </div>

                        <div class=\"mb-4\">
                             <h6 class=\"font-weight-bold text-gray-800 mb-2\">Décision</h6>
                             
                            <form method=\"post\" action=\"{{ path('app_entreprise_validate', {'id': entreprise.id}) }}\" onsubmit=\"return confirm('Valider cette entreprise ?');\" class=\"mb-2\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('validate' ~ entreprise.id) }}\">
                                <button class=\"btn btn-success btn-block icon-split align-items-center justify-content-start p-0\">
                                    <span class=\"icon text-white-50\"><i class=\"fas fa-check\"></i></span>
                                    <span class=\"text\">Valider l'Entreprise</span>
                                </button>
                            </form>
                            
                            <form method=\"post\" action=\"{{ path('app_entreprise_reject', {'id': entreprise.id}) }}\" onsubmit=\"return confirm('Rejeter cette entreprise ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reject' ~ entreprise.id) }}\">
                                <div class=\"form-group mb-2\">
                                    <textarea name=\"commentaire\" class=\"form-control form-control-sm\" rows=\"2\" required placeholder=\"Motif du rejet...\"></textarea>
                                </div>
                                <button class=\"btn btn-danger btn-block icon-split align-items-center justify-content-start p-0\">
                                    <span class=\"icon text-white-50\"><i class=\"fas fa-times\"></i></span>
                                    <span class=\"text\">Rejeter le dossier</span>
                                </button>
                            </form>
                        </div>
                        <hr>
                    {% endif %}

                    {% if qrCode %}
                        <div class=\"text-center mb-4 p-3 border rounded bg-light shadow-sm\">
                            <h6 class=\"font-weight-bold text-gray-800 small mb-2\"><i class=\"fas fa-qrcode mr-1\"></i> Badge de Conformité</h6>
                            <img src=\"{{ qrCode }}\" alt=\"QR Code\" class=\"img-fluid mb-2\" style=\"max-height: 150px;\">
                            <p class=\"small text-muted mb-0\">Code: <code>{{ entreprise.accessCode }}</code></p>
                        </div>
                    {% endif %}

                    <div class=\"d-flex flex-column gap-2\">
                        <a href=\"{{ path('app_entreprise_pdf', {'id': entreprise.id}) }}\" class=\"btn btn-info btn-icon-split mb-2\" target=\"_blank\">
                             <span class=\"icon text-white-50\"><i class=\"fas fa-file-pdf\"></i></span>
                             <span class=\"text text-left w-100\">Exporter Rapport PDF</span>
                        </a>
                        
                        <a href=\"{{ path('app_entreprise_edit', {'id': entreprise.id}) }}\" class=\"btn btn-primary btn-icon-split mb-2\">
                            <span class=\"icon text-white-50\"><i class=\"fas fa-pen\"></i></span>
                             <span class=\"text text-left w-100\">Modifier les Infos</span>
                        </a>

                        <div class=\"dropdown-divider\"></div>

                        {{ include('admin/entreprise/_delete_form.html.twig') }}
                    </div>

                </div>
            </div>
        </div>
    </div>

    {# Always show map — but only if we have address OR GPS coords #}
    {% set adresse = (entreprise.adresse ?? '') ~ ', ' ~ (entreprise.pays ?? '') %}
    {% if adresse|trim(', ') or (entreprise.latitude and entreprise.longitude) %}

    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"/>
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>

    <style>
        #mapCard { transform: none !important; transition: none !important; }
        #mapCard:hover { transform: none !important; box-shadow: 0 4px 20px rgba(0,0,0,0.05) !important; }
        #entrepriseMap .leaflet-tile { border: none !important; }
        .leaflet-container { font-family: inherit; }
    </style>

    <div class=\"row mt-2\">
        <div class=\"col-12\">
            <div class=\"card shadow mb-4\" id=\"mapCard\">
                <div class=\"card-header py-3 d-flex align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">
                        <i class=\"fas fa-map-marker-alt mr-1\"></i> Localisation
                    </h6>
                    <span class=\"small text-muted\" id=\"mapAddressLabel\">
                        {% if entreprise.latitude and entreprise.longitude %}
                            <span class=\"badge badge-success\"><i class=\"fas fa-crosshairs mr-1\"></i>GPS précis</span>
                        {% else %}
                            <span class=\"badge badge-info\"><i class=\"fas fa-search-location mr-1\"></i>Géocodage par adresse</span>
                        {% endif %}
                    </span>
                </div>
                <div class=\"card-body p-0\">
                    <div id=\"entrepriseMap\" style=\"height: 380px; width: 100%; border-radius: 0 0 .35rem .35rem; z-index:1;\"></div>
                    <div id=\"mapStatus\" class=\"text-center text-muted py-5\" style=\"display:none\">
                        <i class=\"fas fa-spinner fa-spin fa-2x mb-3\"></i>
                        <p>Chargement de la carte...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mapDiv    = document.getElementById('entrepriseMap');
        const statusDiv = document.getElementById('mapStatus');
        if (!mapDiv || typeof L === 'undefined') return;

        // Initialise Leaflet
        const map = L.map('entrepriseMap', { zoomControl: true }).setView([36.8, 10.2], 6);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\">OpenStreetMap</a> contributors',
            maxZoom: 19
        }).addTo(map);
        setTimeout(function() { map.invalidateSize(); }, 200);

        // Custom pin
        const icon = L.divIcon({
            className: '',
            html: '<div style=\"background:#4e73df;width:34px;height:34px;border-radius:50% 50% 50% 0;transform:rotate(-45deg);border:3px solid #fff;box-shadow:0 3px 10px rgba(0,0,0,.35)\"><i class=\"fas fa-building\" style=\"transform:rotate(45deg);display:block;text-align:center;line-height:28px;color:#fff;font-size:13px\"></i></div>',
            iconSize: [34, 34], iconAnchor: [17, 34], popupAnchor: [0, -38]
        });

        function placeMarker(lat, lng, label) {
            map.setView([lat, lng], 14);
            setTimeout(function() { map.invalidateSize(); }, 100);
            L.marker([lat, lng], { icon: icon }).addTo(map)
                .bindPopup('<div style=\"min-width:180px\"><strong style=\"font-size:14px\">{{ entreprise.nom|e('js') }}</strong><br><span style=\"color:#888;font-size:12px\">' + label + '</span></div>')
                .openPopup();
        }

        {% if entreprise.latitude and entreprise.longitude %}
        // === GPS DIRECT — no API call needed ===
        placeMarker({{ entreprise.latitude }}, {{ entreprise.longitude }}, '{{ entreprise.adresse|e('js') }}');
        {% else %}
        // === GEOCODING via Nominatim proxy ===
        const adresse = {{ adresse|json_encode|raw }};
        fetch('{{ path('api_geo_geocode') }}?adresse=' + encodeURIComponent(adresse))
            .then(r => r.json())
            .then(function(data) {
                if (data.lat && data.lng) {
                    placeMarker(data.lat, data.lng, data.display_name || adresse);
                } else {
                    mapDiv.style.display = 'none';
                    statusDiv.style.display = 'block';
                    statusDiv.innerHTML = '<i class=\"fas fa-map-marked-alt fa-2x mb-2 text-muted\"></i><p class=\"mb-0\">Localisation non disponible pour : <em>' + adresse + '</em></p>';
                }
            })
            .catch(function() {
                mapDiv.style.display = 'none';
                statusDiv.style.display = 'block';
                statusDiv.innerHTML = '<i class=\"fas fa-exclamation-triangle fa-2x mb-2 text-danger\"></i><p class=\"mb-0\">Impossible de charger la carte.</p>';
            });
        {% endif %}
    });
    </script>
    {% endif %}
{% endblock %}
", "admin/entreprise/show.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\entreprise\\show.html.twig");
    }
}
