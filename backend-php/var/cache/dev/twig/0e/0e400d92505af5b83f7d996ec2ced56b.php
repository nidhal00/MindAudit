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

/* front/register.html.twig */
class __TwigTemplate_5942f1b3c028aaf44ffe8b003b5aa38f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/register.html.twig"));

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

        yield "Inscription Entreprise - MindAudit";
        
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
        yield "
<style>
/* ===== WIZARD GLOBAL ===== */
.wizard-wrapper {
    min-height: 100vh;
    display: flex;
    background: #f7f8fc;
    font-family: 'Inter', 'Segoe UI', sans-serif;
}

/* ===== SIDEBAR ===== */
.wizard-sidebar {
    width: 300px;
    min-width: 300px;
    background: linear-gradient(160deg, #1a1a2e 0%, #16213e 60%, #0f3460 100%);
    color: white;
    padding: 40px 32px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
.sidebar-logo {
    font-size: 22px;
    font-weight: 800;
    letter-spacing: -0.5px;
    margin-bottom: 40px;
    color: #fff;
}
.sidebar-logo span { color: #667eea; }
.why-box {
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 16px;
    padding: 24px;
    margin-bottom: 24px;
}
.why-box h5 {
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #a78bfa;
    margin-bottom: 12px;
}
.why-box p {
    font-size: 14px;
    color: rgba(255,255,255,0.8);
    line-height: 1.7;
    margin: 0;
}
.sidebar-benefits { margin-top: auto; padding-top: 32px; }
.sidebar-benefits .item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    color: rgba(255,255,255,0.75);
    margin-bottom: 12px;
}
.sidebar-benefits .item i { color: #1cc88a; font-size: 15px; flex-shrink: 0; }

/* ===== MAIN CONTENT ===== */
.wizard-main {
    flex: 1;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

/* Progress Bar */
.wizard-progress-bar {
    background: white;
    border-bottom: 1px solid #e9ecef;
    padding: 20px 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
}
.progress-step {
    display: flex;
    align-items: center;
    gap: 10px;
    flex: 1;
}
.progress-step .step-number {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #e9ecef;
    color: #aaa;
    font-size: 13px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s;
    flex-shrink: 0;
}
.progress-step.active .step-number {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    box-shadow: 0 4px 12px rgba(102,126,234,0.4);
}
.progress-step.done .step-number {
    background: #1cc88a;
    color: white;
}
.progress-step .step-label {
    font-size: 13px;
    color: #aaa;
    font-weight: 500;
    white-space: nowrap;
}
.progress-step.active .step-label { color: #667eea; font-weight: 700; }
.progress-step.done .step-label { color: #1cc88a; }
.progress-connector {
    height: 2px;
    flex: 1;
    background: #e9ecef;
    border-radius: 2px;
    margin: 0 8px;
    transition: background 0.3s;
}
.progress-connector.done { background: #1cc88a; }

/* ===== STEPS ===== */
.wizard-body {
    flex: 1;
    overflow-y: auto;
    padding: 48px;
    display: flex;
    flex-direction: column;
}
.wizard-step { display: none; animation: fadeSlide 0.35s ease; }
.wizard-step.active { display: flex; flex-direction: column; flex: 1; }

@keyframes fadeSlide {
    from { opacity: 0; transform: translateX(24px); }
    to   { opacity: 1; transform: translateX(0); }
}
.step-title {
    font-size: 28px;
    font-weight: 800;
    color: #1a1a2e;
    margin-bottom: 8px;
    letter-spacing: -0.5px;
}
.step-subtitle {
    font-size: 15px;
    color: #6c757d;
    margin-bottom: 36px;
}

/* ===== CARDS GRID ===== */
.cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    max-width: 700px;
}
.choice-card {
    border: 2px solid #e9ecef;
    border-radius: 16px;
    background: white;
    padding: 24px 16px;
    text-align: center;
    cursor: pointer;
    transition: all 0.25s ease;
    user-select: none;
}
.choice-card:hover {
    border-color: #667eea;
    background: #f8f5ff;
    transform: translateY(-3px);
    box-shadow: 0 8px 24px rgba(102,126,234,0.15);
}
.choice-card.selected {
    border-color: #667eea;
    background: linear-gradient(135deg, rgba(102,126,234,0.1), rgba(118,75,162,0.1));
    box-shadow: 0 4px 20px rgba(102,126,234,0.25);
}
.choice-card .card-icon {
    font-size: 36px;
    margin-bottom: 10px;
    display: block;
}
.choice-card .card-label {
    font-size: 13px;
    font-weight: 600;
    color: #2c3e50;
    line-height: 1.3;
}
.choice-card.selected .card-label { color: #667eea; }

/* Large (2-col) cards */
.cards-grid-2 { grid-template-columns: repeat(2, 1fr); max-width: 480px; }
.cards-grid-2 .choice-card { padding: 32px 20px; }
.cards-grid-2 .choice-card .card-icon { font-size: 48px; }
.cards-grid-2 .choice-card .card-label { font-size: 15px; }

/* ===== FORM FIELDS ===== */
.form-section {
    max-width: 620px;
}
.form-row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.field-group { margin-bottom: 20px; }
.field-group label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: #4a4a6a;
    margin-bottom: 6px;
}
.field-group input, .field-group textarea, .field-group select {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid #e9ecef;
    border-radius: 10px;
    font-size: 14px;
    color: #2c3e50;
    transition: border-color 0.2s;
    background: white;
    box-sizing: border-box;
}
.field-group input:focus, .field-group textarea:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102,126,234,0.1);
}

/* ===== RECAP ===== */
.recap-card {
    background: white;
    border: 2px solid #e9ecef;
    border-radius: 16px;
    padding: 28px;
    max-width: 580px;
    margin-bottom: 24px;
}
.recap-card h6 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #667eea;
    font-weight: 700;
    margin-bottom: 16px;
}
.recap-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #f0f0f0;
    font-size: 14px;
}
.recap-row:last-child { border-bottom: none; }
.recap-row .label { color: #888; }
.recap-row .value { font-weight: 600; color: #2c3e50; }

/* ===== NAVIGATION ===== */
.wizard-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: auto;
    padding-top: 32px;
    max-width: 700px;
}
.btn-prev {
    background: none;
    border: 2px solid #e9ecef;
    border-radius: 50px;
    padding: 12px 28px;
    font-size: 14px;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s;
}
.btn-prev:hover { border-color: #667eea; color: #667eea; }
.btn-next {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 50px;
    padding: 14px 36px;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 16px rgba(102,126,234,0.35);
    transition: all 0.2s;
}
.btn-next:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(102,126,234,0.45); }
.btn-next:disabled { opacity: 0.5; cursor: not-allowed; transform: none !important; }

/* Hide Symfony's form fields that are replaced by cards */
.hidden-sf-field { display: none !important; }

/* Errors */
.sf-errors { color: #e74c3c; font-size: 12px; margin-top: 4px; }

/* Mobile */
@media (max-width: 768px) {
    .wizard-sidebar { display: none; }
    .wizard-body { padding: 24px; }
    .wizard-progress-bar { padding: 16px 24px; overflow-x: auto; }
    .cards-grid { grid-template-columns: repeat(2, 1fr); }
    .form-row-2 { grid-template-columns: 1fr; }
    .step-label { display: none; }
}
/* Map */
#map-register {
    height: 300px;
    width: 100%;
    border-radius: 12px;
    margin-top: 16px;
    border: 2px solid #e9ecef;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
}
.map-controls {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}
</style>

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>

<div class=\"wizard-wrapper\">

    <!-- ===== SIDEBAR ===== -->
    <aside class=\"wizard-sidebar\">
        <div class=\"sidebar-logo\">Mind<span>Audit</span></div>

        <div class=\"why-box\">
            <h5>Pourquoi cette question ?</h5>
            <p id=\"why-text\">Sélectionnez votre secteur d'activité pour que notre IA adapte son analyse de conformité à votre domaine spécifique.</p>
        </div>

        <div class=\"sidebar-benefits\">
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Analyse IA automatique de vos documents</div>
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Tableau de bord personnalisé</div>
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Notifications en temps réel</div>
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Rapport de conformité certifié PDF</div>
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Support expert dédié</div>
        </div>
    </aside>

    <!-- ===== MAIN ===== -->
    <div class=\"wizard-main\">

        <!-- Progress Bar -->
        <div class=\"wizard-progress-bar\">
            <div class=\"progress-step active\" id=\"ps-1\">
                <div class=\"step-number\">1</div>
                <div class=\"step-label\">Secteur</div>
            </div>
            <div class=\"progress-connector\" id=\"pc-1\"></div>
            <div class=\"progress-step\" id=\"ps-2\">
                <div class=\"step-number\">2</div>
                <div class=\"step-label\">Taille</div>
            </div>
            <div class=\"progress-connector\" id=\"pc-2\"></div>
            <div class=\"progress-step\" id=\"ps-3\">
                <div class=\"step-number\">3</div>
                <div class=\"step-label\">Identité</div>
            </div>
            <div class=\"progress-connector\" id=\"pc-3\"></div>
            <div class=\"progress-step\" id=\"ps-4\">
                <div class=\"step-number\">4</div>
                <div class=\"step-label\">Contact</div>
            </div>
            <div class=\"progress-connector\" id=\"pc-4\"></div>
            <div class=\"progress-step\" id=\"ps-5\">
                <div class=\"step-number\"><i class=\"fas fa-check\" style=\"font-size:12px\"></i></div>
                <div class=\"step-label\">Confirmation</div>
            </div>
        </div>

        <!-- Symfony Form -->
        ";
        // line 394
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), 'form_start', ["attr" => ["id" => "registerForm", "novalidate" => "novalidate"]]);
        yield "

        <div class=\"wizard-body\">

            ";
        // line 399
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 399), "valid", [], "any", true, true, false, 399) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "vars", [], "any", false, false, false, 399), "valid", [], "any", false, false, false, 399))) {
            // line 400
            yield "            <div style=\"max-width:620px; background:#fde8e8; border:2px solid #e74a3b; border-radius:12px; padding:16px 20px; margin-bottom:24px;\">
                <div style=\"font-weight:700; color:#e74a3b; margin-bottom:8px;\"><i class=\"fas fa-exclamation-triangle\"></i> Erreurs de validation</div>
                <ul style=\"color:#c0392b; font-size:13px; margin:0; padding-left:20px;\">
                ";
            // line 403
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 403, $this->source); })()), 'errors');
            yield "
                ";
            // line 404
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "children", [], "any", false, false, false, 404), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 404, $this->source); })()), "vars", [], "any", false, false, false, 404), "errors", [], "any", false, false, false, 404)) > 0); }));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 405
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 405), "errors", [], "any", false, false, false, 405));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 406
                    yield "                    <li><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 406), "label", [], "any", true, true, false, 406)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 406), "label", [], "any", false, false, false, 406), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 406), "name", [], "any", false, false, false, 406))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 406), "name", [], "any", false, false, false, 406))), "html", null, true);
                    yield "</strong> : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 406), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 408
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            yield "                </ul>
            </div>
            ";
        }
        // line 412
        yield "
            <!-- ======================== STEP 1 : SECTEUR ======================== -->
            <div class=\"wizard-step active\" id=\"step-1\">
                <div class=\"step-title\">Quel est votre secteur d'activité ?</div>
                <div class=\"step-subtitle\">Cette information permet à notre IA de personnaliser l'analyse de conformité.</div>

                <div class=\"cards-grid\">
                    <div class=\"choice-card\" data-value=\"Finance\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🏦</span>
                        <div class=\"card-label\">Finance &amp; Banque</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Conseil\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">💼</span>
                        <div class=\"card-label\">Conseil &amp; Service</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Commerce\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🛒</span>
                        <div class=\"card-label\">Commerce / E-commerce</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Industrie\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🏭</span>
                        <div class=\"card-label\">Industrie &amp; BTP</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Technologie\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">💻</span>
                        <div class=\"card-label\">Technologie &amp; IT</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Santé\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🏥</span>
                        <div class=\"card-label\">Santé &amp; Pharma</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Immobilier\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🏠</span>
                        <div class=\"card-label\">Immobilier</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Transport\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🚛</span>
                        <div class=\"card-label\">Transport &amp; Logistique</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Autre\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">📦</span>
                        <div class=\"card-label\">Autre</div>
                    </div>
                </div>

                <!-- Hidden Symfony field -->
                <div class=\"hidden-sf-field\">";
        // line 458
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 458, $this->source); })()), "secteur", [], "any", false, false, false, 458), 'widget');
        yield "</div>

                <div class=\"wizard-nav\" style=\"max-width:700px\">
                    <a href=\"";
        // line 461
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_espace_entreprise");
        yield "\" class=\"btn-prev\">
                        <i class=\"fas fa-times\"></i> Fermer
                    </a>
                    <button type=\"button\" class=\"btn-next\" id=\"btn-1\" onclick=\"goTo(2)\" disabled>
                        Suivant <i class=\"fas fa-arrow-right\"></i>
                    </button>
                </div>
            </div>

            <!-- ======================== STEP 2 : TAILLE ======================== -->
            <div class=\"wizard-step\" id=\"step-2\">
                <div class=\"step-title\">Quelle est la taille de votre entreprise ?</div>
                <div class=\"step-subtitle\">Notre système adapte les référentiels d'audit selon votre structure.</div>

                <div class=\"cards-grid cards-grid-2\" style=\"max-width:500px; grid-template-columns:repeat(3,1fr)\">
                    <div class=\"choice-card\" data-value=\"small\" onclick=\"selectTaille(this)\" style=\"padding:28px 12px\">
                        <span class=\"card-icon\">🏪</span>
                        <div class=\"card-label\">Petite<br><small style=\"color:#aaa;font-weight:400\">1–49 employés</small></div>
                    </div>
                    <div class=\"choice-card\" data-value=\"medium\" onclick=\"selectTaille(this)\" style=\"padding:28px 12px\">
                        <span class=\"card-icon\">🏢</span>
                        <div class=\"card-label\">Moyenne<br><small style=\"color:#aaa;font-weight:400\">50–249 employés</small></div>
                    </div>
                    <div class=\"choice-card\" data-value=\"large\" onclick=\"selectTaille(this)\" style=\"padding:28px 12px\">
                        <span class=\"card-icon\">🏙️</span>
                        <div class=\"card-label\">Grande<br><small style=\"color:#aaa;font-weight:400\">250+ employés</small></div>
                    </div>
                </div>

                <!-- Hidden Symfony field -->
                <div class=\"hidden-sf-field\">";
        // line 491
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 491, $this->source); })()), "taille", [], "any", false, false, false, 491), 'widget');
        yield "</div>

                <div class=\"wizard-nav\">
                    <button type=\"button\" class=\"btn-prev\" onclick=\"goTo(1)\">
                        <i class=\"fas fa-arrow-left\"></i> Précédent
                    </button>
                    <button type=\"button\" class=\"btn-next\" id=\"btn-2\" onclick=\"goTo(3)\" disabled>
                        Suivant <i class=\"fas fa-arrow-right\"></i>
                    </button>
                </div>
            </div>

            <!-- ======================== STEP 3 : IDENTITÉ ======================== -->
            <div class=\"wizard-step\" id=\"step-3\">
                <div class=\"step-title\">Identité de votre entreprise</div>
                <div class=\"step-subtitle\">Ces informations nous permettent de vérifier l'existence légale de votre entreprise.</div>

                <div class=\"form-section\">
                    <div class=\"form-row-2\">
                        <div class=\"field-group\">
                            ";
        // line 511
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 511, $this->source); })()), "nom", [], "any", false, false, false, 511), 'label', ["label" => "Nom de l'entreprise *"]);
        yield "
                            ";
        // line 512
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "nom", [], "any", false, false, false, 512), 'widget', ["attr" => ["class" => "", "placeholder" => "Ex: MindAudit SARL"]]);
        yield "
                            ";
        // line 513
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 513, $this->source); })()), "nom", [], "any", false, false, false, 513), 'errors');
        yield "
                        </div>
                        <div class=\"field-group\">
                            ";
        // line 516
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 516, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 516), 'label', ["label" => "Matricule Fiscal *"]);
        yield "
                            ";
        // line 517
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 517, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 517), 'widget', ["attr" => ["class" => "", "placeholder" => "1234567/A/B/C/000"]]);
        yield "
                            ";
        // line 518
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 518, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 518), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"form-row-2\">
                        <div class=\"field-group\">
                            ";
        // line 523
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 523, $this->source); })()), "pays", [], "any", false, false, false, 523), 'label', ["label" => "Pays"]);
        yield "
                            ";
        // line 524
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 524, $this->source); })()), "pays", [], "any", false, false, false, 524), 'widget', ["attr" => ["class" => "", "placeholder" => "Tunisie"]]);
        yield "
                            ";
        // line 525
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 525, $this->source); })()), "pays", [], "any", false, false, false, 525), 'errors');
        yield "
                        </div>
                        <div class=\"field-group\">
                            ";
        // line 528
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 528, $this->source); })()), "dateCreation", [], "any", false, false, false, 528), 'label', ["label" => "Date de création"]);
        yield "
                            ";
        // line 529
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 529, $this->source); })()), "dateCreation", [], "any", false, false, false, 529), 'widget', ["attr" => ["class" => ""]]);
        yield "
                            ";
        // line 530
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 530, $this->source); })()), "dateCreation", [], "any", false, false, false, 530), 'errors');
        yield "
                        </div>
                    </div>
                </div>

                <div class=\"wizard-nav\">
                    <button type=\"button\" class=\"btn-prev\" onclick=\"goTo(2)\">
                        <i class=\"fas fa-arrow-left\"></i> Précédent
                    </button>
                    <button type=\"button\" class=\"btn-next\" onclick=\"validateStep3()\">
                        Suivant <i class=\"fas fa-arrow-right\"></i>
                    </button>
                </div>
            </div>

            <!-- ======================== STEP 4 : CONTACT ======================== -->
            <div class=\"wizard-step\" id=\"step-4\">
                <div class=\"step-title\">Informations de contact</div>
                <div class=\"step-subtitle\">Nous utiliserons ces coordonnées pour vous envoyer votre code d'accès après validation.</div>

                <div class=\"form-section\">
                    <div class=\"form-row-2\">
                        <div class=\"field-group\">
                            ";
        // line 553
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 553, $this->source); })()), "email", [], "any", false, false, false, 553), 'label', ["label" => "Email professionnel *"]);
        yield "
                            ";
        // line 554
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 554, $this->source); })()), "email", [], "any", false, false, false, 554), 'widget', ["attr" => ["class" => "", "placeholder" => "contact@entreprise.com"]]);
        yield "
                            ";
        // line 555
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 555, $this->source); })()), "email", [], "any", false, false, false, 555), 'errors');
        yield "
                        </div>
                        <div class=\"field-group\">
                            ";
        // line 558
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 558, $this->source); })()), "telephone", [], "any", false, false, false, 558), 'label', ["label" => "Téléphone"]);
        yield "
                            ";
        // line 559
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 559, $this->source); })()), "telephone", [], "any", false, false, false, 559), 'widget', ["attr" => ["class" => "", "placeholder" => "+216 XX XXX XXX"]]);
        yield "
                            ";
        // line 560
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 560, $this->source); })()), "telephone", [], "any", false, false, false, 560), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"field-group\">
                        ";
        // line 564
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 564, $this->source); })()), "adresse", [], "any", false, false, false, 564), 'label', ["label" => "Adresse complète"]);
        yield "
                        <div class=\"input-group\">
                            ";
        // line 566
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "adresse", [], "any", false, false, false, 566), 'widget', ["attr" => ["class" => "", "placeholder" => "Rue, Ville, Code Postal", "rows" => "2"]]);
        yield "
                            <div class=\"input-group-append\" style=\"display:flex; margin-top:10px;\">
                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" onclick=\"locateAddress()\" style=\"border-radius:10px; padding:10px 15px; font-weight:600;\">
                                    <i class=\"fas fa-map-marker-alt mr-2\"></i>Localiser mon adresse
                                </button>
                            </div>
                        </div>
                        <div id=\"map-register\"></div>
                        ";
        // line 574
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 574, $this->source); })()), "adresse", [], "any", false, false, false, 574), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"wizard-nav\">
                    <button type=\"button\" class=\"btn-prev\" onclick=\"goTo(3)\">
                        <i class=\"fas fa-arrow-left\"></i> Précédent
                    </button>
                    <button type=\"button\" class=\"btn-next\" onclick=\"validateStep4()\">
                        Vérifier ma demande <i class=\"fas fa-arrow-right\"></i>
                    </button>
                </div>
            </div>

            <!-- ======================== STEP 5 : CONFIRMATION ======================== -->
            <div class=\"wizard-step\" id=\"step-5\">
                <div class=\"step-title\">✅ Vérifiez votre demande</div>
                <div class=\"step-subtitle\">Vérifiez les informations avant de soumettre. Vous recevrez une réponse sous 24–48h.</div>

                <div class=\"recap-card\">
                    <h6>📋 Profil Entreprise</h6>
                    <div class=\"recap-row\">
                        <span class=\"label\">Secteur d'activité</span>
                        <span class=\"value\" id=\"recap-secteur\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Taille</span>
                        <span class=\"value\" id=\"recap-taille\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Nom de l'entreprise</span>
                        <span class=\"value\" id=\"recap-nom\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Matricule Fiscal</span>
                        <span class=\"value\" id=\"recap-matricule\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Pays</span>
                        <span class=\"value\" id=\"recap-pays\">—</span>
                    </div>
                </div>

                <div class=\"recap-card\">
                    <h6>📞 Contact</h6>
                    <div class=\"recap-row\">
                        <span class=\"label\">Email</span>
                        <span class=\"value\" id=\"recap-email\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Téléphone</span>
                        <span class=\"value\" id=\"recap-tel\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Adresse</span>
                        <span class=\"value\" id=\"recap-adresse\">—</span>
                    </div>
                </div>

                <div style=\"max-width:580px; background:#e8f5e9; border-radius:12px; padding:16px 20px; font-size:13px; color:#2e7d32; display:flex; gap:10px; margin-bottom:8px;\">
                    <i class=\"fas fa-lock\" style=\"margin-top:2px; flex-shrink:0\"></i>
                    <span>Vos données sont protégées et ne seront utilisées qu'à des fins d'audit de conformité.</span>
                </div>

                <div class=\"wizard-nav\">
                    <button type=\"button\" class=\"btn-prev\" onclick=\"goTo(4)\">
                        <i class=\"fas fa-arrow-left\"></i> Modifier
                    </button>
                    <button type=\"submit\" class=\"btn-next\" style=\"background: linear-gradient(135deg, #1cc88a, #17a673); box-shadow: 0 4px 16px rgba(28,200,138,0.4);\">
                        <i class=\"fas fa-rocket\"></i> Soumettre ma demande
                    </button>
                </div>
            </div>

        </div><!-- wizard-body -->
        ";
        // line 649
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 649, $this->source); })()), 'form_end');
        yield "

    </div><!-- wizard-main -->
</div><!-- wizard-wrapper -->

<script>
let currentStep = 1;
const totalSteps = 5;

// ===== WHY TEXT per step =====
const whyTexts = {
    1: \"Votre secteur d'activité permet à notre IA de sélectionner les référentiels de conformité appropriés (ISO, RH, Fiscal, etc.) et de personnaliser chaque analyse.\",
    2: \"La taille de l'entreprise détermine le niveau de complexité de l'audit. Les grandes entreprises ont des obligations légales spécifiques différentes des PME.\",
    3: \"Le nom et le matricule fiscal permettent de vérifier l'existence légale de votre entreprise et d'uniciser votre dossier dans notre système.\",
    4: \"Votre email sera utilisé exclusivement pour vous envoyer votre code d'accès unique après validation de votre demande par notre équipe.\",
    5: \"Vérifiez attentivement vos informations avant de soumettre. Votre demande sera traitée sous 24 à 48 heures ouvrées.\"
};

// ===== FIELD HELPERS =====
function getSecteurField() { return document.getElementById('registration_entreprise_secteur'); }
function getTailleField()  { return document.getElementById('registration_entreprise_taille'); }

// ===== MAP STATE =====
let regMap = null, regMarker = null;

// ===== NAVIGATE =====
function goTo(step) {
    document.getElementById('step-' + currentStep).classList.remove('active');
    const ps = document.getElementById('ps-' + currentStep);
    ps.classList.remove('active');
    ps.classList.add('done');
    ps.querySelector('.step-number').innerHTML = '<i class=\"fas fa-check\" style=\"font-size:11px\"></i>';
    if (currentStep < totalSteps) {
        const pc = document.getElementById('pc-' + currentStep);
        if (pc) pc.classList.add('done');
    }
    currentStep = step;
    document.getElementById('step-' + currentStep).classList.add('active');
    const newPs = document.getElementById('ps-' + currentStep);
    newPs.classList.remove('done');
    newPs.classList.add('active');
    newPs.querySelector('.step-number').textContent = currentStep;
    document.getElementById('why-text').textContent = whyTexts[currentStep];
    if (currentStep === 5) buildRecap();
    if (currentStep === 4) setTimeout(initMap, 350);
    window.scrollTo(0, 0);
}

// ===== SECTEUR CARD =====
function selectSecteur(card) {
    document.querySelectorAll('#step-1 .choice-card').forEach(c => c.classList.remove('selected'));
    card.classList.add('selected');
    const sf = getSecteurField();
    if (sf) { sf.value = card.dataset.value; }
    document.getElementById('btn-1').disabled = false;
}

// ===== TAILLE CARD =====
function selectTaille(card) {
    document.querySelectorAll('#step-2 .choice-card').forEach(c => c.classList.remove('selected'));
    card.classList.add('selected');
    const sf = getTailleField();
    if (sf) { sf.value = card.dataset.value; }
    document.getElementById('btn-2').disabled = false;
}

// ===== SYNC VISUALS ON LOAD (after server-side re-render) =====
function syncVisuals() {
    const sfS = getSecteurField();
    if (sfS && sfS.value) {
        const c = document.querySelector('#step-1 .choice-card[data-value=\"' + sfS.value + '\"]');
        if (c) { c.classList.add('selected'); document.getElementById('btn-1').disabled = false; }
    }
    const sfT = getTailleField();
    if (sfT && sfT.value) {
        const c = document.querySelector('#step-2 .choice-card[data-value=\"' + sfT.value + '\"]');
        if (c) { c.classList.add('selected'); document.getElementById('btn-2').disabled = false; }
    }
}

// ===== FIELD VALIDATION HELPERS =====
function showFieldError(field, msg) {
    if (!field) return;
    field.style.borderColor = '#e74a3b';
    field.style.boxShadow = '0 0 0 3px rgba(231,74,59,0.15)';
    const container = field.closest('.field-group') || field.parentElement;
    let fb = container.querySelector('.wizard-field-error');
    if (!fb) {
        fb = document.createElement('div');
        fb.className = 'wizard-field-error';
        fb.style.cssText = 'color:#e74a3b;font-size:12px;margin-top:6px;font-weight:500;';
        container.appendChild(fb);
    }
    fb.textContent = '⚠ ' + msg;
}
function clearFieldError(field) {
    if (!field) return;
    field.style.borderColor = '#1cc88a';
    field.style.boxShadow = '0 0 0 3px rgba(28,200,138,0.1)';
    const container = field.closest('.field-group') || field.parentElement;
    const fb = container.querySelector('.wizard-field-error');
    if (fb) fb.remove();
}


// ===== STEP 3 VALIDATION =====
function validateStep3() {
    const nom  = document.getElementById('registration_entreprise_nom');
    const mat  = document.getElementById('registration_entreprise_matriculeFiscale');
    const pays = document.getElementById('registration_entreprise_pays');
    let ok = true, firstErr = null;

    if (!nom || !nom.value.trim()) {
        showFieldError(nom, 'Le nom est obligatoire.'); ok = false; if (!firstErr) firstErr = nom;
    } else if (nom.value.trim().length < 2) {
        showFieldError(nom, 'Le nom doit contenir au moins 2 caractères.'); ok = false; if (!firstErr) firstErr = nom;
    } else { clearFieldError(nom); }

    const matRe = /^[0-9]{7}\\/[A-Z]\\/[A-Z]\\/[A-Z]\\/[0-9]{3}\$/;
    if (!mat || !mat.value.trim()) {
        showFieldError(mat, 'La matricule fiscale est obligatoire.'); ok = false; if (!firstErr) firstErr = mat;
    } else if (!matRe.test(mat.value.trim())) {
        showFieldError(mat, 'Format invalide. Ex: 1234567/A/B/C/000'); ok = false; if (!firstErr) firstErr = mat;
    } else { clearFieldError(mat); }

    if (pays && pays.value.trim() && pays.value.trim().length < 2) {
        showFieldError(pays, 'Le pays doit contenir au moins 2 caractères.'); ok = false; if (!firstErr) firstErr = pays;
    } else if (pays && pays.value.trim()) { clearFieldError(pays); }

    if (!ok && firstErr) { firstErr.focus(); firstErr.scrollIntoView({behavior:'smooth', block:'center'}); }
    if (ok) goTo(4);
}

// ===== STEP 4 VALIDATION =====
function validateStep4() {
    const email = document.getElementById('registration_entreprise_email');
    const tel   = document.getElementById('registration_entreprise_telephone');
    const addr  = document.getElementById('registration_entreprise_adresse');
    let ok = true, firstErr = null;

    const emailRe = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
    if (!email || !email.value.trim()) {
        showFieldError(email, 'L\\'email est obligatoire.'); ok = false; if (!firstErr) firstErr = email;
    } else if (!emailRe.test(email.value.trim())) {
        showFieldError(email, 'Email invalide.'); ok = false; if (!firstErr) firstErr = email;
    } else { clearFieldError(email); }

    const telRe = /^[+]?[0-9\\s\\-]{8,20}\$/;
    if (tel && tel.value.trim() && !telRe.test(tel.value.trim())) {
        showFieldError(tel, 'Format de téléphone invalide (8 à 20 chiffres).'); ok = false; if (!firstErr) firstErr = tel;
    } else if (tel && tel.value.trim()) { clearFieldError(tel); }

    if (!addr || !addr.value.trim()) {
        showFieldError(addr, 'L\\'adresse est obligatoire.'); ok = false; if (!firstErr) firstErr = addr;
    } else if (addr.value.trim().length < 5) {
        showFieldError(addr, 'L\\'adresse doit contenir au moins 5 caractères.'); ok = false; if (!firstErr) firstErr = addr;
    } else { clearFieldError(addr); }

    if (!ok && firstErr) { firstErr.focus(); firstErr.scrollIntoView({behavior:'smooth', block:'center'}); }
    if (ok) goTo(5);
}

// ===== REAL-TIME ERROR CLEARING =====
document.addEventListener('input', function(e) {
    const el = e.target;
    if (el.style && (el.style.borderColor === 'rgb(231, 74, 59)' || el.style.borderColor === '#e74a3b')) {
        el.style.borderColor = '#667eea';
        el.style.boxShadow = '0 0 0 4px rgba(102,126,234,0.1)';
        const container = el.closest('.field-group') || el.parentElement;
        const fb = container.querySelector('.wizard-field-error');
        if (fb) fb.remove();
    }
});

// ===== MAP INTEGRATION =====
function initMap() {
    if (regMap) { regMap.invalidateSize(); return; }
    if (typeof L === 'undefined') { console.warn('Leaflet not loaded'); return; }
    regMap = L.map('map-register').setView([36.8065, 10.1815], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
    }).addTo(regMap);
    regMarker = L.marker([36.8065, 10.1815], { draggable: true }).addTo(regMap);
    regMarker.on('dragend', function() {
        const pos = regMarker.getLatLng();
        updateCoords(pos.lat, pos.lng);
        revGeocode(pos.lat, pos.lng);
    });
    regMap.on('click', function(e) {
        regMarker.setLatLng(e.latlng);
        updateCoords(e.latlng.lat, e.latlng.lng);
        revGeocode(e.latlng.lat, e.latlng.lng);
    });
}

function updateCoords(lat, lng) {
    const latEl = document.getElementById('registration_entreprise_latitude');
    const lngEl = document.getElementById('registration_entreprise_longitude');
    if (latEl) latEl.value = lat;
    if (lngEl) lngEl.value = lng;
}

function locateAddress() {
    if (!regMap) initMap();
    const addrEl = document.getElementById('registration_entreprise_adresse');
    const addr = addrEl ? addrEl.value.trim() : '';
    if (!addr) { showFieldError(addrEl, \"Veuillez d'abord saisir une adresse.\"); return; }
    const btn = event.currentTarget;
    btn.innerHTML = '<i class=\"fas fa-spinner fa-spin mr-2\"></i>Localisation…';
    btn.disabled = true;
    fetch(`/api/geo/geocode?adresse=\${encodeURIComponent(addr)}`)
        .then(r => r.json())
        .then(data => {
            if (data.lat && data.lng) {
                const pos = [parseFloat(data.lat), parseFloat(data.lng)];
                regMap.setView(pos, 16);
                regMarker.setLatLng(pos);
                updateCoords(data.lat, data.lng);
                clearFieldError(addrEl);
            } else {
                showFieldError(addrEl, \"Adresse introuvable. Essayez d'être plus précis.\");
            }
        })
        .catch(() => showFieldError(addrEl, \"Erreur réseau lors de la localisation.\"))
        .finally(() => {
            btn.innerHTML = '<i class=\"fas fa-map-marker-alt mr-2\"></i>Localiser mon adresse';
            btn.disabled = false;
        });
}

function revGeocode(lat, lng) {
    fetch(`/api/geo/geocode?lat=\${lat}&lng=\${lng}`)
        .then(r => r.json())
        .then(data => {
            const addrEl = document.getElementById('registration_entreprise_adresse');
            if (data.display_name && addrEl) addrEl.value = data.display_name;
        })
        .catch(() => {});
}

// ===== BUILD RECAP =====
function buildRecap() {
    const sfS = getSecteurField();
    let secteurLabel = '—';
    if (sfS && sfS.value) {
        const card = document.querySelector(`#step-1 .choice-card[data-value=\"\${sfS.value}\"]`);
        secteurLabel = card ? card.querySelector('.card-label').textContent.trim() : sfS.value;
    }
    document.getElementById('recap-secteur').textContent = secteurLabel;

    const sfT = getTailleField();
    let tailleLabel = '—';
    if (sfT && sfT.value) {
        const tm = { small: 'Petite (1–49)', medium: 'Moyenne (50–249)', large: 'Grande (250+)' };
        tailleLabel = tm[sfT.value] || sfT.value;
    }
    document.getElementById('recap-taille').textContent = tailleLabel;

    const v = sel => { const el = document.querySelector(sel); return el ? (el.value || '—') : '—'; };
    document.getElementById('recap-nom').textContent       = v('#registration_entreprise_nom');
    document.getElementById('recap-matricule').textContent = v('#registration_entreprise_matriculeFiscale');
    document.getElementById('recap-pays').textContent      = v('#registration_entreprise_pays');
    document.getElementById('recap-email').textContent     = v('#registration_entreprise_email');
    document.getElementById('recap-tel').textContent       = v('#registration_entreprise_telephone') || '—';
    const addr = document.getElementById('registration_entreprise_adresse');
    document.getElementById('recap-adresse').textContent   = addr ? (addr.value || '—') : '—';
}

// ===== INIT =====
(function() {
    try { syncVisuals(); } catch(e) {}
    const why = document.getElementById('why-text');
    if (why) why.textContent = whyTexts[1];
})();

";
        // line 924
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 924), "valid", [], "any", true, true, false, 924) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 924, $this->source); })()), "vars", [], "any", false, false, false, 924), "valid", [], "any", false, false, false, 924))) {
            // line 925
            yield "try {
    setTimeout(function() {
        goTo(5);
        const errBox = document.querySelector('.wizard-body div[style*=\"background:#fde8e8\"]');
        if (errBox) errBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 400);
} catch(e) { console.warn('Error jumping to errors:', e); }
";
        }
        // line 933
        yield "</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/register.html.twig";
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
        return array (  1126 => 933,  1116 => 925,  1114 => 924,  836 => 649,  758 => 574,  747 => 566,  742 => 564,  735 => 560,  731 => 559,  727 => 558,  721 => 555,  717 => 554,  713 => 553,  687 => 530,  683 => 529,  679 => 528,  673 => 525,  669 => 524,  665 => 523,  657 => 518,  653 => 517,  649 => 516,  643 => 513,  639 => 512,  635 => 511,  612 => 491,  579 => 461,  573 => 458,  525 => 412,  520 => 409,  514 => 408,  503 => 406,  498 => 405,  494 => 404,  490 => 403,  485 => 400,  482 => 399,  475 => 394,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Inscription Entreprise - MindAudit{% endblock %}

{% block body %}

<style>
/* ===== WIZARD GLOBAL ===== */
.wizard-wrapper {
    min-height: 100vh;
    display: flex;
    background: #f7f8fc;
    font-family: 'Inter', 'Segoe UI', sans-serif;
}

/* ===== SIDEBAR ===== */
.wizard-sidebar {
    width: 300px;
    min-width: 300px;
    background: linear-gradient(160deg, #1a1a2e 0%, #16213e 60%, #0f3460 100%);
    color: white;
    padding: 40px 32px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
.sidebar-logo {
    font-size: 22px;
    font-weight: 800;
    letter-spacing: -0.5px;
    margin-bottom: 40px;
    color: #fff;
}
.sidebar-logo span { color: #667eea; }
.why-box {
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 16px;
    padding: 24px;
    margin-bottom: 24px;
}
.why-box h5 {
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #a78bfa;
    margin-bottom: 12px;
}
.why-box p {
    font-size: 14px;
    color: rgba(255,255,255,0.8);
    line-height: 1.7;
    margin: 0;
}
.sidebar-benefits { margin-top: auto; padding-top: 32px; }
.sidebar-benefits .item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    color: rgba(255,255,255,0.75);
    margin-bottom: 12px;
}
.sidebar-benefits .item i { color: #1cc88a; font-size: 15px; flex-shrink: 0; }

/* ===== MAIN CONTENT ===== */
.wizard-main {
    flex: 1;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

/* Progress Bar */
.wizard-progress-bar {
    background: white;
    border-bottom: 1px solid #e9ecef;
    padding: 20px 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
}
.progress-step {
    display: flex;
    align-items: center;
    gap: 10px;
    flex: 1;
}
.progress-step .step-number {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #e9ecef;
    color: #aaa;
    font-size: 13px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s;
    flex-shrink: 0;
}
.progress-step.active .step-number {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    box-shadow: 0 4px 12px rgba(102,126,234,0.4);
}
.progress-step.done .step-number {
    background: #1cc88a;
    color: white;
}
.progress-step .step-label {
    font-size: 13px;
    color: #aaa;
    font-weight: 500;
    white-space: nowrap;
}
.progress-step.active .step-label { color: #667eea; font-weight: 700; }
.progress-step.done .step-label { color: #1cc88a; }
.progress-connector {
    height: 2px;
    flex: 1;
    background: #e9ecef;
    border-radius: 2px;
    margin: 0 8px;
    transition: background 0.3s;
}
.progress-connector.done { background: #1cc88a; }

/* ===== STEPS ===== */
.wizard-body {
    flex: 1;
    overflow-y: auto;
    padding: 48px;
    display: flex;
    flex-direction: column;
}
.wizard-step { display: none; animation: fadeSlide 0.35s ease; }
.wizard-step.active { display: flex; flex-direction: column; flex: 1; }

@keyframes fadeSlide {
    from { opacity: 0; transform: translateX(24px); }
    to   { opacity: 1; transform: translateX(0); }
}
.step-title {
    font-size: 28px;
    font-weight: 800;
    color: #1a1a2e;
    margin-bottom: 8px;
    letter-spacing: -0.5px;
}
.step-subtitle {
    font-size: 15px;
    color: #6c757d;
    margin-bottom: 36px;
}

/* ===== CARDS GRID ===== */
.cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    max-width: 700px;
}
.choice-card {
    border: 2px solid #e9ecef;
    border-radius: 16px;
    background: white;
    padding: 24px 16px;
    text-align: center;
    cursor: pointer;
    transition: all 0.25s ease;
    user-select: none;
}
.choice-card:hover {
    border-color: #667eea;
    background: #f8f5ff;
    transform: translateY(-3px);
    box-shadow: 0 8px 24px rgba(102,126,234,0.15);
}
.choice-card.selected {
    border-color: #667eea;
    background: linear-gradient(135deg, rgba(102,126,234,0.1), rgba(118,75,162,0.1));
    box-shadow: 0 4px 20px rgba(102,126,234,0.25);
}
.choice-card .card-icon {
    font-size: 36px;
    margin-bottom: 10px;
    display: block;
}
.choice-card .card-label {
    font-size: 13px;
    font-weight: 600;
    color: #2c3e50;
    line-height: 1.3;
}
.choice-card.selected .card-label { color: #667eea; }

/* Large (2-col) cards */
.cards-grid-2 { grid-template-columns: repeat(2, 1fr); max-width: 480px; }
.cards-grid-2 .choice-card { padding: 32px 20px; }
.cards-grid-2 .choice-card .card-icon { font-size: 48px; }
.cards-grid-2 .choice-card .card-label { font-size: 15px; }

/* ===== FORM FIELDS ===== */
.form-section {
    max-width: 620px;
}
.form-row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.field-group { margin-bottom: 20px; }
.field-group label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: #4a4a6a;
    margin-bottom: 6px;
}
.field-group input, .field-group textarea, .field-group select {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid #e9ecef;
    border-radius: 10px;
    font-size: 14px;
    color: #2c3e50;
    transition: border-color 0.2s;
    background: white;
    box-sizing: border-box;
}
.field-group input:focus, .field-group textarea:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102,126,234,0.1);
}

/* ===== RECAP ===== */
.recap-card {
    background: white;
    border: 2px solid #e9ecef;
    border-radius: 16px;
    padding: 28px;
    max-width: 580px;
    margin-bottom: 24px;
}
.recap-card h6 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #667eea;
    font-weight: 700;
    margin-bottom: 16px;
}
.recap-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #f0f0f0;
    font-size: 14px;
}
.recap-row:last-child { border-bottom: none; }
.recap-row .label { color: #888; }
.recap-row .value { font-weight: 600; color: #2c3e50; }

/* ===== NAVIGATION ===== */
.wizard-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: auto;
    padding-top: 32px;
    max-width: 700px;
}
.btn-prev {
    background: none;
    border: 2px solid #e9ecef;
    border-radius: 50px;
    padding: 12px 28px;
    font-size: 14px;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s;
}
.btn-prev:hover { border-color: #667eea; color: #667eea; }
.btn-next {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 50px;
    padding: 14px 36px;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 16px rgba(102,126,234,0.35);
    transition: all 0.2s;
}
.btn-next:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(102,126,234,0.45); }
.btn-next:disabled { opacity: 0.5; cursor: not-allowed; transform: none !important; }

/* Hide Symfony's form fields that are replaced by cards */
.hidden-sf-field { display: none !important; }

/* Errors */
.sf-errors { color: #e74c3c; font-size: 12px; margin-top: 4px; }

/* Mobile */
@media (max-width: 768px) {
    .wizard-sidebar { display: none; }
    .wizard-body { padding: 24px; }
    .wizard-progress-bar { padding: 16px 24px; overflow-x: auto; }
    .cards-grid { grid-template-columns: repeat(2, 1fr); }
    .form-row-2 { grid-template-columns: 1fr; }
    .step-label { display: none; }
}
/* Map */
#map-register {
    height: 300px;
    width: 100%;
    border-radius: 12px;
    margin-top: 16px;
    border: 2px solid #e9ecef;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
}
.map-controls {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}
</style>

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>

<div class=\"wizard-wrapper\">

    <!-- ===== SIDEBAR ===== -->
    <aside class=\"wizard-sidebar\">
        <div class=\"sidebar-logo\">Mind<span>Audit</span></div>

        <div class=\"why-box\">
            <h5>Pourquoi cette question ?</h5>
            <p id=\"why-text\">Sélectionnez votre secteur d'activité pour que notre IA adapte son analyse de conformité à votre domaine spécifique.</p>
        </div>

        <div class=\"sidebar-benefits\">
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Analyse IA automatique de vos documents</div>
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Tableau de bord personnalisé</div>
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Notifications en temps réel</div>
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Rapport de conformité certifié PDF</div>
            <div class=\"item\"><i class=\"fas fa-check-circle\"></i> Support expert dédié</div>
        </div>
    </aside>

    <!-- ===== MAIN ===== -->
    <div class=\"wizard-main\">

        <!-- Progress Bar -->
        <div class=\"wizard-progress-bar\">
            <div class=\"progress-step active\" id=\"ps-1\">
                <div class=\"step-number\">1</div>
                <div class=\"step-label\">Secteur</div>
            </div>
            <div class=\"progress-connector\" id=\"pc-1\"></div>
            <div class=\"progress-step\" id=\"ps-2\">
                <div class=\"step-number\">2</div>
                <div class=\"step-label\">Taille</div>
            </div>
            <div class=\"progress-connector\" id=\"pc-2\"></div>
            <div class=\"progress-step\" id=\"ps-3\">
                <div class=\"step-number\">3</div>
                <div class=\"step-label\">Identité</div>
            </div>
            <div class=\"progress-connector\" id=\"pc-3\"></div>
            <div class=\"progress-step\" id=\"ps-4\">
                <div class=\"step-number\">4</div>
                <div class=\"step-label\">Contact</div>
            </div>
            <div class=\"progress-connector\" id=\"pc-4\"></div>
            <div class=\"progress-step\" id=\"ps-5\">
                <div class=\"step-number\"><i class=\"fas fa-check\" style=\"font-size:12px\"></i></div>
                <div class=\"step-label\">Confirmation</div>
            </div>
        </div>

        <!-- Symfony Form -->
        {{ form_start(form, {'attr': {'id': 'registerForm', 'novalidate': 'novalidate'}}) }}

        <div class=\"wizard-body\">

            {# Display Symfony server-side validation errors #}
            {% if form.vars.valid is defined and not form.vars.valid %}
            <div style=\"max-width:620px; background:#fde8e8; border:2px solid #e74a3b; border-radius:12px; padding:16px 20px; margin-bottom:24px;\">
                <div style=\"font-weight:700; color:#e74a3b; margin-bottom:8px;\"><i class=\"fas fa-exclamation-triangle\"></i> Erreurs de validation</div>
                <ul style=\"color:#c0392b; font-size:13px; margin:0; padding-left:20px;\">
                {{ form_errors(form) }}
                {% for child in form.children|filter(c => c.vars.errors|length > 0) %}
                    {% for error in child.vars.errors %}
                    <li><strong>{{ child.vars.label|default(child.vars.name) }}</strong> : {{ error.message }}</li>
                    {% endfor %}
                {% endfor %}
                </ul>
            </div>
            {% endif %}

            <!-- ======================== STEP 1 : SECTEUR ======================== -->
            <div class=\"wizard-step active\" id=\"step-1\">
                <div class=\"step-title\">Quel est votre secteur d'activité ?</div>
                <div class=\"step-subtitle\">Cette information permet à notre IA de personnaliser l'analyse de conformité.</div>

                <div class=\"cards-grid\">
                    <div class=\"choice-card\" data-value=\"Finance\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🏦</span>
                        <div class=\"card-label\">Finance &amp; Banque</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Conseil\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">💼</span>
                        <div class=\"card-label\">Conseil &amp; Service</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Commerce\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🛒</span>
                        <div class=\"card-label\">Commerce / E-commerce</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Industrie\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🏭</span>
                        <div class=\"card-label\">Industrie &amp; BTP</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Technologie\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">💻</span>
                        <div class=\"card-label\">Technologie &amp; IT</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Santé\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🏥</span>
                        <div class=\"card-label\">Santé &amp; Pharma</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Immobilier\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🏠</span>
                        <div class=\"card-label\">Immobilier</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Transport\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">🚛</span>
                        <div class=\"card-label\">Transport &amp; Logistique</div>
                    </div>
                    <div class=\"choice-card\" data-value=\"Autre\" onclick=\"selectSecteur(this)\">
                        <span class=\"card-icon\">📦</span>
                        <div class=\"card-label\">Autre</div>
                    </div>
                </div>

                <!-- Hidden Symfony field -->
                <div class=\"hidden-sf-field\">{{ form_widget(form.secteur) }}</div>

                <div class=\"wizard-nav\" style=\"max-width:700px\">
                    <a href=\"{{ path('app_front_espace_entreprise') }}\" class=\"btn-prev\">
                        <i class=\"fas fa-times\"></i> Fermer
                    </a>
                    <button type=\"button\" class=\"btn-next\" id=\"btn-1\" onclick=\"goTo(2)\" disabled>
                        Suivant <i class=\"fas fa-arrow-right\"></i>
                    </button>
                </div>
            </div>

            <!-- ======================== STEP 2 : TAILLE ======================== -->
            <div class=\"wizard-step\" id=\"step-2\">
                <div class=\"step-title\">Quelle est la taille de votre entreprise ?</div>
                <div class=\"step-subtitle\">Notre système adapte les référentiels d'audit selon votre structure.</div>

                <div class=\"cards-grid cards-grid-2\" style=\"max-width:500px; grid-template-columns:repeat(3,1fr)\">
                    <div class=\"choice-card\" data-value=\"small\" onclick=\"selectTaille(this)\" style=\"padding:28px 12px\">
                        <span class=\"card-icon\">🏪</span>
                        <div class=\"card-label\">Petite<br><small style=\"color:#aaa;font-weight:400\">1–49 employés</small></div>
                    </div>
                    <div class=\"choice-card\" data-value=\"medium\" onclick=\"selectTaille(this)\" style=\"padding:28px 12px\">
                        <span class=\"card-icon\">🏢</span>
                        <div class=\"card-label\">Moyenne<br><small style=\"color:#aaa;font-weight:400\">50–249 employés</small></div>
                    </div>
                    <div class=\"choice-card\" data-value=\"large\" onclick=\"selectTaille(this)\" style=\"padding:28px 12px\">
                        <span class=\"card-icon\">🏙️</span>
                        <div class=\"card-label\">Grande<br><small style=\"color:#aaa;font-weight:400\">250+ employés</small></div>
                    </div>
                </div>

                <!-- Hidden Symfony field -->
                <div class=\"hidden-sf-field\">{{ form_widget(form.taille) }}</div>

                <div class=\"wizard-nav\">
                    <button type=\"button\" class=\"btn-prev\" onclick=\"goTo(1)\">
                        <i class=\"fas fa-arrow-left\"></i> Précédent
                    </button>
                    <button type=\"button\" class=\"btn-next\" id=\"btn-2\" onclick=\"goTo(3)\" disabled>
                        Suivant <i class=\"fas fa-arrow-right\"></i>
                    </button>
                </div>
            </div>

            <!-- ======================== STEP 3 : IDENTITÉ ======================== -->
            <div class=\"wizard-step\" id=\"step-3\">
                <div class=\"step-title\">Identité de votre entreprise</div>
                <div class=\"step-subtitle\">Ces informations nous permettent de vérifier l'existence légale de votre entreprise.</div>

                <div class=\"form-section\">
                    <div class=\"form-row-2\">
                        <div class=\"field-group\">
                            {{ form_label(form.nom, 'Nom de l\\'entreprise *') }}
                            {{ form_widget(form.nom, {'attr': {'class': '', 'placeholder': 'Ex: MindAudit SARL'}}) }}
                            {{ form_errors(form.nom) }}
                        </div>
                        <div class=\"field-group\">
                            {{ form_label(form.matriculeFiscale, 'Matricule Fiscal *') }}
                            {{ form_widget(form.matriculeFiscale, {'attr': {'class': '', 'placeholder': '1234567/A/B/C/000'}}) }}
                            {{ form_errors(form.matriculeFiscale) }}
                        </div>
                    </div>
                    <div class=\"form-row-2\">
                        <div class=\"field-group\">
                            {{ form_label(form.pays, 'Pays') }}
                            {{ form_widget(form.pays, {'attr': {'class': '', 'placeholder': 'Tunisie'}}) }}
                            {{ form_errors(form.pays) }}
                        </div>
                        <div class=\"field-group\">
                            {{ form_label(form.dateCreation, 'Date de création') }}
                            {{ form_widget(form.dateCreation, {'attr': {'class': ''}}) }}
                            {{ form_errors(form.dateCreation) }}
                        </div>
                    </div>
                </div>

                <div class=\"wizard-nav\">
                    <button type=\"button\" class=\"btn-prev\" onclick=\"goTo(2)\">
                        <i class=\"fas fa-arrow-left\"></i> Précédent
                    </button>
                    <button type=\"button\" class=\"btn-next\" onclick=\"validateStep3()\">
                        Suivant <i class=\"fas fa-arrow-right\"></i>
                    </button>
                </div>
            </div>

            <!-- ======================== STEP 4 : CONTACT ======================== -->
            <div class=\"wizard-step\" id=\"step-4\">
                <div class=\"step-title\">Informations de contact</div>
                <div class=\"step-subtitle\">Nous utiliserons ces coordonnées pour vous envoyer votre code d'accès après validation.</div>

                <div class=\"form-section\">
                    <div class=\"form-row-2\">
                        <div class=\"field-group\">
                            {{ form_label(form.email, 'Email professionnel *') }}
                            {{ form_widget(form.email, {'attr': {'class': '', 'placeholder': 'contact@entreprise.com'}}) }}
                            {{ form_errors(form.email) }}
                        </div>
                        <div class=\"field-group\">
                            {{ form_label(form.telephone, 'Téléphone') }}
                            {{ form_widget(form.telephone, {'attr': {'class': '', 'placeholder': '+216 XX XXX XXX'}}) }}
                            {{ form_errors(form.telephone) }}
                        </div>
                    </div>
                    <div class=\"field-group\">
                        {{ form_label(form.adresse, 'Adresse complète') }}
                        <div class=\"input-group\">
                            {{ form_widget(form.adresse, {'attr': {'class': '', 'placeholder': 'Rue, Ville, Code Postal', 'rows': '2'}}) }}
                            <div class=\"input-group-append\" style=\"display:flex; margin-top:10px;\">
                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" onclick=\"locateAddress()\" style=\"border-radius:10px; padding:10px 15px; font-weight:600;\">
                                    <i class=\"fas fa-map-marker-alt mr-2\"></i>Localiser mon adresse
                                </button>
                            </div>
                        </div>
                        <div id=\"map-register\"></div>
                        {{ form_errors(form.adresse) }}
                    </div>
                </div>

                <div class=\"wizard-nav\">
                    <button type=\"button\" class=\"btn-prev\" onclick=\"goTo(3)\">
                        <i class=\"fas fa-arrow-left\"></i> Précédent
                    </button>
                    <button type=\"button\" class=\"btn-next\" onclick=\"validateStep4()\">
                        Vérifier ma demande <i class=\"fas fa-arrow-right\"></i>
                    </button>
                </div>
            </div>

            <!-- ======================== STEP 5 : CONFIRMATION ======================== -->
            <div class=\"wizard-step\" id=\"step-5\">
                <div class=\"step-title\">✅ Vérifiez votre demande</div>
                <div class=\"step-subtitle\">Vérifiez les informations avant de soumettre. Vous recevrez une réponse sous 24–48h.</div>

                <div class=\"recap-card\">
                    <h6>📋 Profil Entreprise</h6>
                    <div class=\"recap-row\">
                        <span class=\"label\">Secteur d'activité</span>
                        <span class=\"value\" id=\"recap-secteur\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Taille</span>
                        <span class=\"value\" id=\"recap-taille\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Nom de l'entreprise</span>
                        <span class=\"value\" id=\"recap-nom\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Matricule Fiscal</span>
                        <span class=\"value\" id=\"recap-matricule\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Pays</span>
                        <span class=\"value\" id=\"recap-pays\">—</span>
                    </div>
                </div>

                <div class=\"recap-card\">
                    <h6>📞 Contact</h6>
                    <div class=\"recap-row\">
                        <span class=\"label\">Email</span>
                        <span class=\"value\" id=\"recap-email\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Téléphone</span>
                        <span class=\"value\" id=\"recap-tel\">—</span>
                    </div>
                    <div class=\"recap-row\">
                        <span class=\"label\">Adresse</span>
                        <span class=\"value\" id=\"recap-adresse\">—</span>
                    </div>
                </div>

                <div style=\"max-width:580px; background:#e8f5e9; border-radius:12px; padding:16px 20px; font-size:13px; color:#2e7d32; display:flex; gap:10px; margin-bottom:8px;\">
                    <i class=\"fas fa-lock\" style=\"margin-top:2px; flex-shrink:0\"></i>
                    <span>Vos données sont protégées et ne seront utilisées qu'à des fins d'audit de conformité.</span>
                </div>

                <div class=\"wizard-nav\">
                    <button type=\"button\" class=\"btn-prev\" onclick=\"goTo(4)\">
                        <i class=\"fas fa-arrow-left\"></i> Modifier
                    </button>
                    <button type=\"submit\" class=\"btn-next\" style=\"background: linear-gradient(135deg, #1cc88a, #17a673); box-shadow: 0 4px 16px rgba(28,200,138,0.4);\">
                        <i class=\"fas fa-rocket\"></i> Soumettre ma demande
                    </button>
                </div>
            </div>

        </div><!-- wizard-body -->
        {{ form_end(form) }}

    </div><!-- wizard-main -->
</div><!-- wizard-wrapper -->

<script>
let currentStep = 1;
const totalSteps = 5;

// ===== WHY TEXT per step =====
const whyTexts = {
    1: \"Votre secteur d'activité permet à notre IA de sélectionner les référentiels de conformité appropriés (ISO, RH, Fiscal, etc.) et de personnaliser chaque analyse.\",
    2: \"La taille de l'entreprise détermine le niveau de complexité de l'audit. Les grandes entreprises ont des obligations légales spécifiques différentes des PME.\",
    3: \"Le nom et le matricule fiscal permettent de vérifier l'existence légale de votre entreprise et d'uniciser votre dossier dans notre système.\",
    4: \"Votre email sera utilisé exclusivement pour vous envoyer votre code d'accès unique après validation de votre demande par notre équipe.\",
    5: \"Vérifiez attentivement vos informations avant de soumettre. Votre demande sera traitée sous 24 à 48 heures ouvrées.\"
};

// ===== FIELD HELPERS =====
function getSecteurField() { return document.getElementById('registration_entreprise_secteur'); }
function getTailleField()  { return document.getElementById('registration_entreprise_taille'); }

// ===== MAP STATE =====
let regMap = null, regMarker = null;

// ===== NAVIGATE =====
function goTo(step) {
    document.getElementById('step-' + currentStep).classList.remove('active');
    const ps = document.getElementById('ps-' + currentStep);
    ps.classList.remove('active');
    ps.classList.add('done');
    ps.querySelector('.step-number').innerHTML = '<i class=\"fas fa-check\" style=\"font-size:11px\"></i>';
    if (currentStep < totalSteps) {
        const pc = document.getElementById('pc-' + currentStep);
        if (pc) pc.classList.add('done');
    }
    currentStep = step;
    document.getElementById('step-' + currentStep).classList.add('active');
    const newPs = document.getElementById('ps-' + currentStep);
    newPs.classList.remove('done');
    newPs.classList.add('active');
    newPs.querySelector('.step-number').textContent = currentStep;
    document.getElementById('why-text').textContent = whyTexts[currentStep];
    if (currentStep === 5) buildRecap();
    if (currentStep === 4) setTimeout(initMap, 350);
    window.scrollTo(0, 0);
}

// ===== SECTEUR CARD =====
function selectSecteur(card) {
    document.querySelectorAll('#step-1 .choice-card').forEach(c => c.classList.remove('selected'));
    card.classList.add('selected');
    const sf = getSecteurField();
    if (sf) { sf.value = card.dataset.value; }
    document.getElementById('btn-1').disabled = false;
}

// ===== TAILLE CARD =====
function selectTaille(card) {
    document.querySelectorAll('#step-2 .choice-card').forEach(c => c.classList.remove('selected'));
    card.classList.add('selected');
    const sf = getTailleField();
    if (sf) { sf.value = card.dataset.value; }
    document.getElementById('btn-2').disabled = false;
}

// ===== SYNC VISUALS ON LOAD (after server-side re-render) =====
function syncVisuals() {
    const sfS = getSecteurField();
    if (sfS && sfS.value) {
        const c = document.querySelector('#step-1 .choice-card[data-value=\"' + sfS.value + '\"]');
        if (c) { c.classList.add('selected'); document.getElementById('btn-1').disabled = false; }
    }
    const sfT = getTailleField();
    if (sfT && sfT.value) {
        const c = document.querySelector('#step-2 .choice-card[data-value=\"' + sfT.value + '\"]');
        if (c) { c.classList.add('selected'); document.getElementById('btn-2').disabled = false; }
    }
}

// ===== FIELD VALIDATION HELPERS =====
function showFieldError(field, msg) {
    if (!field) return;
    field.style.borderColor = '#e74a3b';
    field.style.boxShadow = '0 0 0 3px rgba(231,74,59,0.15)';
    const container = field.closest('.field-group') || field.parentElement;
    let fb = container.querySelector('.wizard-field-error');
    if (!fb) {
        fb = document.createElement('div');
        fb.className = 'wizard-field-error';
        fb.style.cssText = 'color:#e74a3b;font-size:12px;margin-top:6px;font-weight:500;';
        container.appendChild(fb);
    }
    fb.textContent = '⚠ ' + msg;
}
function clearFieldError(field) {
    if (!field) return;
    field.style.borderColor = '#1cc88a';
    field.style.boxShadow = '0 0 0 3px rgba(28,200,138,0.1)';
    const container = field.closest('.field-group') || field.parentElement;
    const fb = container.querySelector('.wizard-field-error');
    if (fb) fb.remove();
}


// ===== STEP 3 VALIDATION =====
function validateStep3() {
    const nom  = document.getElementById('registration_entreprise_nom');
    const mat  = document.getElementById('registration_entreprise_matriculeFiscale');
    const pays = document.getElementById('registration_entreprise_pays');
    let ok = true, firstErr = null;

    if (!nom || !nom.value.trim()) {
        showFieldError(nom, 'Le nom est obligatoire.'); ok = false; if (!firstErr) firstErr = nom;
    } else if (nom.value.trim().length < 2) {
        showFieldError(nom, 'Le nom doit contenir au moins 2 caractères.'); ok = false; if (!firstErr) firstErr = nom;
    } else { clearFieldError(nom); }

    const matRe = /^[0-9]{7}\\/[A-Z]\\/[A-Z]\\/[A-Z]\\/[0-9]{3}\$/;
    if (!mat || !mat.value.trim()) {
        showFieldError(mat, 'La matricule fiscale est obligatoire.'); ok = false; if (!firstErr) firstErr = mat;
    } else if (!matRe.test(mat.value.trim())) {
        showFieldError(mat, 'Format invalide. Ex: 1234567/A/B/C/000'); ok = false; if (!firstErr) firstErr = mat;
    } else { clearFieldError(mat); }

    if (pays && pays.value.trim() && pays.value.trim().length < 2) {
        showFieldError(pays, 'Le pays doit contenir au moins 2 caractères.'); ok = false; if (!firstErr) firstErr = pays;
    } else if (pays && pays.value.trim()) { clearFieldError(pays); }

    if (!ok && firstErr) { firstErr.focus(); firstErr.scrollIntoView({behavior:'smooth', block:'center'}); }
    if (ok) goTo(4);
}

// ===== STEP 4 VALIDATION =====
function validateStep4() {
    const email = document.getElementById('registration_entreprise_email');
    const tel   = document.getElementById('registration_entreprise_telephone');
    const addr  = document.getElementById('registration_entreprise_adresse');
    let ok = true, firstErr = null;

    const emailRe = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
    if (!email || !email.value.trim()) {
        showFieldError(email, 'L\\'email est obligatoire.'); ok = false; if (!firstErr) firstErr = email;
    } else if (!emailRe.test(email.value.trim())) {
        showFieldError(email, 'Email invalide.'); ok = false; if (!firstErr) firstErr = email;
    } else { clearFieldError(email); }

    const telRe = /^[+]?[0-9\\s\\-]{8,20}\$/;
    if (tel && tel.value.trim() && !telRe.test(tel.value.trim())) {
        showFieldError(tel, 'Format de téléphone invalide (8 à 20 chiffres).'); ok = false; if (!firstErr) firstErr = tel;
    } else if (tel && tel.value.trim()) { clearFieldError(tel); }

    if (!addr || !addr.value.trim()) {
        showFieldError(addr, 'L\\'adresse est obligatoire.'); ok = false; if (!firstErr) firstErr = addr;
    } else if (addr.value.trim().length < 5) {
        showFieldError(addr, 'L\\'adresse doit contenir au moins 5 caractères.'); ok = false; if (!firstErr) firstErr = addr;
    } else { clearFieldError(addr); }

    if (!ok && firstErr) { firstErr.focus(); firstErr.scrollIntoView({behavior:'smooth', block:'center'}); }
    if (ok) goTo(5);
}

// ===== REAL-TIME ERROR CLEARING =====
document.addEventListener('input', function(e) {
    const el = e.target;
    if (el.style && (el.style.borderColor === 'rgb(231, 74, 59)' || el.style.borderColor === '#e74a3b')) {
        el.style.borderColor = '#667eea';
        el.style.boxShadow = '0 0 0 4px rgba(102,126,234,0.1)';
        const container = el.closest('.field-group') || el.parentElement;
        const fb = container.querySelector('.wizard-field-error');
        if (fb) fb.remove();
    }
});

// ===== MAP INTEGRATION =====
function initMap() {
    if (regMap) { regMap.invalidateSize(); return; }
    if (typeof L === 'undefined') { console.warn('Leaflet not loaded'); return; }
    regMap = L.map('map-register').setView([36.8065, 10.1815], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
    }).addTo(regMap);
    regMarker = L.marker([36.8065, 10.1815], { draggable: true }).addTo(regMap);
    regMarker.on('dragend', function() {
        const pos = regMarker.getLatLng();
        updateCoords(pos.lat, pos.lng);
        revGeocode(pos.lat, pos.lng);
    });
    regMap.on('click', function(e) {
        regMarker.setLatLng(e.latlng);
        updateCoords(e.latlng.lat, e.latlng.lng);
        revGeocode(e.latlng.lat, e.latlng.lng);
    });
}

function updateCoords(lat, lng) {
    const latEl = document.getElementById('registration_entreprise_latitude');
    const lngEl = document.getElementById('registration_entreprise_longitude');
    if (latEl) latEl.value = lat;
    if (lngEl) lngEl.value = lng;
}

function locateAddress() {
    if (!regMap) initMap();
    const addrEl = document.getElementById('registration_entreprise_adresse');
    const addr = addrEl ? addrEl.value.trim() : '';
    if (!addr) { showFieldError(addrEl, \"Veuillez d'abord saisir une adresse.\"); return; }
    const btn = event.currentTarget;
    btn.innerHTML = '<i class=\"fas fa-spinner fa-spin mr-2\"></i>Localisation…';
    btn.disabled = true;
    fetch(`/api/geo/geocode?adresse=\${encodeURIComponent(addr)}`)
        .then(r => r.json())
        .then(data => {
            if (data.lat && data.lng) {
                const pos = [parseFloat(data.lat), parseFloat(data.lng)];
                regMap.setView(pos, 16);
                regMarker.setLatLng(pos);
                updateCoords(data.lat, data.lng);
                clearFieldError(addrEl);
            } else {
                showFieldError(addrEl, \"Adresse introuvable. Essayez d'être plus précis.\");
            }
        })
        .catch(() => showFieldError(addrEl, \"Erreur réseau lors de la localisation.\"))
        .finally(() => {
            btn.innerHTML = '<i class=\"fas fa-map-marker-alt mr-2\"></i>Localiser mon adresse';
            btn.disabled = false;
        });
}

function revGeocode(lat, lng) {
    fetch(`/api/geo/geocode?lat=\${lat}&lng=\${lng}`)
        .then(r => r.json())
        .then(data => {
            const addrEl = document.getElementById('registration_entreprise_adresse');
            if (data.display_name && addrEl) addrEl.value = data.display_name;
        })
        .catch(() => {});
}

// ===== BUILD RECAP =====
function buildRecap() {
    const sfS = getSecteurField();
    let secteurLabel = '—';
    if (sfS && sfS.value) {
        const card = document.querySelector(`#step-1 .choice-card[data-value=\"\${sfS.value}\"]`);
        secteurLabel = card ? card.querySelector('.card-label').textContent.trim() : sfS.value;
    }
    document.getElementById('recap-secteur').textContent = secteurLabel;

    const sfT = getTailleField();
    let tailleLabel = '—';
    if (sfT && sfT.value) {
        const tm = { small: 'Petite (1–49)', medium: 'Moyenne (50–249)', large: 'Grande (250+)' };
        tailleLabel = tm[sfT.value] || sfT.value;
    }
    document.getElementById('recap-taille').textContent = tailleLabel;

    const v = sel => { const el = document.querySelector(sel); return el ? (el.value || '—') : '—'; };
    document.getElementById('recap-nom').textContent       = v('#registration_entreprise_nom');
    document.getElementById('recap-matricule').textContent = v('#registration_entreprise_matriculeFiscale');
    document.getElementById('recap-pays').textContent      = v('#registration_entreprise_pays');
    document.getElementById('recap-email').textContent     = v('#registration_entreprise_email');
    document.getElementById('recap-tel').textContent       = v('#registration_entreprise_telephone') || '—';
    const addr = document.getElementById('registration_entreprise_adresse');
    document.getElementById('recap-adresse').textContent   = addr ? (addr.value || '—') : '—';
}

// ===== INIT =====
(function() {
    try { syncVisuals(); } catch(e) {}
    const why = document.getElementById('why-text');
    if (why) why.textContent = whyTexts[1];
})();

{% if form.vars.valid is defined and not form.vars.valid %}
try {
    setTimeout(function() {
        goTo(5);
        const errBox = document.querySelector('.wizard-body div[style*=\"background:#fde8e8\"]');
        if (errBox) errBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 400);
} catch(e) { console.warn('Error jumping to errors:', e); }
{% endif %}
</script>
{% endblock %}

", "front/register.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\front\\register.html.twig");
    }
}
