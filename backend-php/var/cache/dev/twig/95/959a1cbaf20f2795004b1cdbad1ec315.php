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

/* admin/entreprise/pdf.html.twig */
class __TwigTemplate_22cb4e80c7c4d6e4da8928527a45bc04 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/entreprise/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Fiche Entreprise - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #4e73df;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 15px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #4e73df;
            margin: 0;
        }
        .subtitle {
            font-size: 14px;
            color: #858796;
            margin-top: 5px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            border-bottom: 1px solid #e3e6f0;
            padding-bottom: 10px;
            margin-bottom: 15px;
            color: #4e73df;
        }
        .row {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            width: 150px;
            display: inline-block;
        }
        .value {
            display: inline-block;
        }
        .qr-code {
            text-align: center;
            margin-top: 40px;
            border: 1px solid #e3e6f0;
            padding: 20px;
            width: 320px;
            margin-left: auto;
            margin-right: auto;
            background: #f8f9fc;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #858796;
            border-top: 1px solid #e3e6f0;
            padding-top: 20px;
        }
        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
            color: #fff;
            background-color: #6c757d;
        }
        .badge-success { background-color: #1cc88a; }
        .badge-warning { background-color: #f6c23e; }
        .badge-danger { background-color: #e74a3b; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1 class=\"title\">Fiche Entreprise</h1>
        <div class=\"subtitle\">Généré le ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</div>
    </div>

    <div class=\"section\">
        <div class=\"section-title\">Informations Générales</div>
        <div class=\"row\">
            <span class=\"label\">Nom:</span>
            <span class=\"value\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 102, $this->source); })()), "nom", [], "any", false, false, false, 102), "html", null, true);
        yield "</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Matricule Fiscal:</span>
            <span class=\"value\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 106, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 106), "html", null, true);
        yield "</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Secteur:</span>
            <span class=\"value\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 110, $this->source); })()), "secteur", [], "any", false, false, false, 110), "html", null, true);
        yield "</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Taille:</span>
            <span class=\"value\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 114, $this->source); })()), "taille", [], "any", false, false, false, 114), "html", null, true);
        yield "</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Téléphone:</span>
            <span class=\"value\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 118, $this->source); })()), "telephone", [], "any", false, false, false, 118), "html", null, true);
        yield "</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Email:</span>
            <span class=\"value\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 122, $this->source); })()), "email", [], "any", false, false, false, 122), "html", null, true);
        yield "</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Statut:</span>
            <span class=\"value\">
                ";
        // line 127
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 127, $this->source); })()), "statut", [], "any", false, false, false, 127) == "valide")) {
            // line 128
            yield "                    <span class=\"badge badge-success\">Validé</span>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 129
(isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 129, $this->source); })()), "statut", [], "any", false, false, false, 129) == "en_attente")) {
            // line 130
            yield "                    <span class=\"badge badge-warning\">En attente</span>
                ";
        } else {
            // line 132
            yield "                    <span class=\"badge badge-danger\">Rejeté</span>
                ";
        }
        // line 134
        yield "            </span>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"section-title\">Adresse</div>
        <div class=\"row\">
            <span class=\"label\">Adresse:</span>
            <span class=\"value\">";
        // line 142
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 142, $this->source); })()), "adresse", [], "any", false, false, false, 142), "html", null, true));
        yield "</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Pays:</span>
            <span class=\"value\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 146, $this->source); })()), "pays", [], "any", false, false, false, 146), "html", null, true);
        yield "</span>
        </div>
    </div>

    ";
        // line 150
        if ((array_key_exists("documents", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 150, $this->source); })())))) {
            // line 151
            yield "    <div class=\"section\">
        <div class=\"section-title\">Documents Associés</div>
        <table style=\"width: 100%; border-collapse: collapse; margin-top: 10px;\">
            <thead>
                <tr style=\"background-color: #f8f9fc;\">
                    <th style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: left;\">Nom</th>
                    <th style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: left;\">Type</th>
                    <th style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: center;\">Date</th>
                    <th style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: center;\">Statut</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 163, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                // line 164
                yield "                <tr>
                    <td style=\"border: 1px solid #e3e6f0; padding: 8px;\">";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "nom", [], "any", false, false, false, 165), "html", null, true);
                yield "</td>
                    <td style=\"border: 1px solid #e3e6f0; padding: 8px;\">";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "type", [], "any", false, false, false, 166), "html", null, true);
                yield "</td>
                    <td style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: center;\">";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "dateUpload", [], "any", false, false, false, 167), "d/m/Y"), "html", null, true);
                yield "</td>
                    <td style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: center;\">
                        ";
                // line 169
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "statut", [], "any", false, false, false, 169) == "valide")) {
                    // line 170
                    yield "                            <span style=\"color: #1cc88a; font-weight: bold;\">Validé</span>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 171
$context["doc"], "statut", [], "any", false, false, false, 171) == "rejete")) {
                    // line 172
                    yield "                            <span style=\"color: #e74a3b; font-weight: bold;\">Rejeté</span>
                        ";
                } else {
                    // line 174
                    yield "                            <span style=\"color: #f6c23e; font-weight: bold;\">En attente</span>
                        ";
                }
                // line 176
                yield "                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['doc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "            </tbody>
        </table>
    </div>
    ";
        }
        // line 183
        yield "
    ";
        // line 184
        if ((($tmp = (isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 184, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "    <div class=\"qr-code\">
        <img src=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 186, $this->source); })()), "html", null, true);
            yield "\" alt=\"QR Code\" width=\"200\">
        <div style=\"margin-top: 10px; font-weight: bold; color: #4e73df;\">
            Code d'accès: ";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 188, $this->source); })()), "accessCode", [], "any", false, false, false, 188), "html", null, true);
            yield "
        </div>
        <div style=\"font-size: 12px; color: #858796;\">
            Scannez pour vérifier l'authenticité
        </div>
    </div>
    ";
        }
        // line 195
        yield "
    <div class=\"footer\">
        <p>MindAudit - Plateforme d'Audit et de Conformité</p>
        <p>&copy; ";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Tous droits réservés.</p>
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
        return "admin/entreprise/pdf.html.twig";
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
        return array (  329 => 198,  324 => 195,  314 => 188,  309 => 186,  306 => 185,  304 => 184,  301 => 183,  295 => 179,  287 => 176,  283 => 174,  279 => 172,  277 => 171,  274 => 170,  272 => 169,  267 => 167,  263 => 166,  259 => 165,  256 => 164,  252 => 163,  238 => 151,  236 => 150,  229 => 146,  222 => 142,  212 => 134,  208 => 132,  204 => 130,  202 => 129,  199 => 128,  197 => 127,  189 => 122,  182 => 118,  175 => 114,  168 => 110,  161 => 106,  154 => 102,  144 => 95,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Fiche Entreprise - {{ entreprise.nom }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #4e73df;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 15px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #4e73df;
            margin: 0;
        }
        .subtitle {
            font-size: 14px;
            color: #858796;
            margin-top: 5px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            border-bottom: 1px solid #e3e6f0;
            padding-bottom: 10px;
            margin-bottom: 15px;
            color: #4e73df;
        }
        .row {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            width: 150px;
            display: inline-block;
        }
        .value {
            display: inline-block;
        }
        .qr-code {
            text-align: center;
            margin-top: 40px;
            border: 1px solid #e3e6f0;
            padding: 20px;
            width: 320px;
            margin-left: auto;
            margin-right: auto;
            background: #f8f9fc;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #858796;
            border-top: 1px solid #e3e6f0;
            padding-top: 20px;
        }
        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
            color: #fff;
            background-color: #6c757d;
        }
        .badge-success { background-color: #1cc88a; }
        .badge-warning { background-color: #f6c23e; }
        .badge-danger { background-color: #e74a3b; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1 class=\"title\">Fiche Entreprise</h1>
        <div class=\"subtitle\">Généré le {{ \"now\"|date(\"d/m/Y à H:i\") }}</div>
    </div>

    <div class=\"section\">
        <div class=\"section-title\">Informations Générales</div>
        <div class=\"row\">
            <span class=\"label\">Nom:</span>
            <span class=\"value\">{{ entreprise.nom }}</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Matricule Fiscal:</span>
            <span class=\"value\">{{ entreprise.matriculeFiscale }}</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Secteur:</span>
            <span class=\"value\">{{ entreprise.secteur }}</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Taille:</span>
            <span class=\"value\">{{ entreprise.taille }}</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Téléphone:</span>
            <span class=\"value\">{{ entreprise.telephone }}</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Email:</span>
            <span class=\"value\">{{ entreprise.email }}</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Statut:</span>
            <span class=\"value\">
                {% if entreprise.statut == 'valide' %}
                    <span class=\"badge badge-success\">Validé</span>
                {% elseif entreprise.statut == 'en_attente' %}
                    <span class=\"badge badge-warning\">En attente</span>
                {% else %}
                    <span class=\"badge badge-danger\">Rejeté</span>
                {% endif %}
            </span>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"section-title\">Adresse</div>
        <div class=\"row\">
            <span class=\"label\">Adresse:</span>
            <span class=\"value\">{{ entreprise.adresse|nl2br }}</span>
        </div>
        <div class=\"row\">
            <span class=\"label\">Pays:</span>
            <span class=\"value\">{{ entreprise.pays }}</span>
        </div>
    </div>

    {% if documents is defined and documents is not empty %}
    <div class=\"section\">
        <div class=\"section-title\">Documents Associés</div>
        <table style=\"width: 100%; border-collapse: collapse; margin-top: 10px;\">
            <thead>
                <tr style=\"background-color: #f8f9fc;\">
                    <th style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: left;\">Nom</th>
                    <th style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: left;\">Type</th>
                    <th style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: center;\">Date</th>
                    <th style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: center;\">Statut</th>
                </tr>
            </thead>
            <tbody>
                {% for doc in documents %}
                <tr>
                    <td style=\"border: 1px solid #e3e6f0; padding: 8px;\">{{ doc.nom }}</td>
                    <td style=\"border: 1px solid #e3e6f0; padding: 8px;\">{{ doc.type }}</td>
                    <td style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: center;\">{{ doc.dateUpload|date('d/m/Y') }}</td>
                    <td style=\"border: 1px solid #e3e6f0; padding: 8px; text-align: center;\">
                        {% if doc.statut == 'valide' %}
                            <span style=\"color: #1cc88a; font-weight: bold;\">Validé</span>
                        {% elseif doc.statut == 'rejete' %}
                            <span style=\"color: #e74a3b; font-weight: bold;\">Rejeté</span>
                        {% else %}
                            <span style=\"color: #f6c23e; font-weight: bold;\">En attente</span>
                        {% endif %}
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    {% endif %}

    {% if qrCode %}
    <div class=\"qr-code\">
        <img src=\"{{ qrCode }}\" alt=\"QR Code\" width=\"200\">
        <div style=\"margin-top: 10px; font-weight: bold; color: #4e73df;\">
            Code d'accès: {{ entreprise.accessCode }}
        </div>
        <div style=\"font-size: 12px; color: #858796;\">
            Scannez pour vérifier l'authenticité
        </div>
    </div>
    {% endif %}

    <div class=\"footer\">
        <p>MindAudit - Plateforme d'Audit et de Conformité</p>
        <p>&copy; {{ \"now\"|date(\"Y\") }} Tous droits réservés.</p>
    </div>
</body>
</html>
", "admin/entreprise/pdf.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\entreprise\\pdf.html.twig");
    }
}
