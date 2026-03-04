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

/* client/dashboard.html.twig */
class __TwigTemplate_2a9f1d17e40cd6f1bacc028429801aaf extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dashboard.html.twig"));

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

        yield "Tableau de bord – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
:root {
    --brand: #5b6aeb;
    --brand-2: #7c3aed;
    --success: #10b981;
    --warning: #f59e0b;
    --danger: #ef4444;
    --dark: #0f172a;
    --card-bg: rgba(255,255,255,.95);
    --border: rgba(99,102,241,.12);
}

/* ── HERO ─────────────────────────────────────── */
.db-hero {
    background: linear-gradient(135deg,#1e1b4b 0%,#312e81 40%,#4338ca 70%,#7c3aed 100%);
    border-radius: 24px;
    padding: 36px 40px;
    color: #fff;
    margin-bottom: 28px;
    position: relative;
    overflow: hidden;
}
.db-hero::before {
    content:'';
    position:absolute;top:-80px;right:-80px;
    width:300px;height:300px;border-radius:50%;
    background:rgba(255,255,255,.06);
}
.db-hero::after {
    content:'';
    position:absolute;bottom:-60px;left:40%;
    width:200px;height:200px;border-radius:50%;
    background:rgba(255,255,255,.04);
}
.db-hero-avatar {
    width: 64px; height: 64px; border-radius: 18px;
    background: rgba(255,255,255,.2);
    display: flex; align-items: center; justify-content: center;
    font-size: 28px; margin-bottom: 14px;
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255,255,255,.25);
}
.db-hero h1 { font-size: 1.8rem; font-weight: 800; margin:0; }
.db-hero .sub { opacity:.75; font-size:.9rem; margin-top:4px; }

.status-chip {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 5px 14px; border-radius: 99px; font-size: .78rem; font-weight: 700;
    border: 1px solid rgba(255,255,255,.3);
    background: rgba(255,255,255,.15); backdrop-filter: blur(4px);
}
.status-chip.valide { background: rgba(16,185,129,.2); border-color:rgba(16,185,129,.5); }
.status-chip.en_attente { background: rgba(245,158,11,.2); border-color:rgba(245,158,11,.5); }
.status-chip.rejete { background: rgba(239,68,68,.2); border-color:rgba(239,68,68,.5); }

/* ── ACTION BUTTONS ────────────────────────────── */
.hero-actions { display:flex; gap:10px; flex-wrap:wrap; margin-top:20px; }
.btn-glass {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 10px 20px; border-radius: 12px; font-weight: 600; font-size: .85rem;
    border: 1px solid rgba(255,255,255,.3);
    background: rgba(255,255,255,.15); backdrop-filter: blur(8px);
    color: #fff; cursor: pointer; transition: .2s;
    text-decoration: none;
}
.btn-glass:hover { background: rgba(255,255,255,.28); color:#fff; transform: translateY(-2px); }
.btn-glass.accent { background: rgba(255,255,255,.95); color: #312e81; }
.btn-glass.accent:hover { background: #fff; }
.btn-glass.danger { background: rgba(239,68,68,.25); border-color:rgba(239,68,68,.5); }
.btn-glass.danger:hover { background: rgba(239,68,68,.4); }

/* ── KPI CARDS ─────────────────────────────────── */
.kpi-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; margin-bottom: 28px; }
@media(max-width:992px){ .kpi-grid{grid-template-columns:repeat(2,1fr);} }
@media(max-width:576px){ .kpi-grid{grid-template-columns:1fr;} }

.kpi-card {
    background: var(--card-bg);
    border-radius: 18px;
    padding: 22px 24px;
    border: 1px solid var(--border);
    box-shadow: 0 2px 12px rgba(91,106,235,.07);
    display: flex; align-items: center; gap: 16px;
    transition: transform .2s, box-shadow .2s;
}
.kpi-card:hover { transform: translateY(-4px); box-shadow: 0 12px 28px rgba(91,106,235,.13); }
.kpi-icon {
    width: 52px; height: 52px; border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 22px; flex-shrink: 0;
}
.kpi-val { font-size: 1.6rem; font-weight: 800; color: var(--dark); line-height:1; }
.kpi-label { font-size: .78rem; color: #64748b; margin-top:3px; font-weight: 500; text-transform: uppercase; letter-spacing:.04em; }

/* ── CONTENT CARDS ─────────────────────────────── */
.db-card {
    background: var(--card-bg);
    border-radius: 20px;
    border: 1px solid var(--border);
    box-shadow: 0 2px 12px rgba(0,0,0,.05);
    margin-bottom: 24px;
    overflow: hidden;
}
.db-card-header {
    padding: 18px 24px;
    border-bottom: 1px solid var(--border);
    display: flex; align-items: center; justify-content: space-between;
}
.db-card-header h3 {
    font-size: .95rem; font-weight: 700; color: var(--dark);
    margin: 0; display: flex; align-items: center; gap: 10px;
}
.db-card-header .icon-badge {
    width: 32px; height: 32px; border-radius: 8px;
    display: flex; align-items: center; justify-content: center; font-size: 14px;
}
.db-card-body { padding: 24px; }

/* ── INFO GRID ─────────────────────────────────── */
.info-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 16px; }
@media(max-width:576px){ .info-grid{grid-template-columns:1fr;} }
.info-item label { font-size:.72rem; text-transform:uppercase; letter-spacing:.06em; color:#94a3b8; font-weight:600; display:block; margin-bottom:4px; }
.info-item span { font-size:.95rem; color:#1e293b; font-weight:500; }

/* ── DOC TABLE ─────────────────────────────────── */
.doc-table { width:100%; border-collapse:collapse; }
.doc-table th { font-size:.72rem; text-transform:uppercase; letter-spacing:.06em; color:#94a3b8; font-weight:700; padding:10px 16px; border-bottom: 1px solid var(--border); text-align:left; }
.doc-table td { padding:14px 16px; border-bottom: 1px solid rgba(0,0,0,.04); vertical-align:middle; font-size:.9rem; }
.doc-table tr:last-child td { border-bottom:none; }
.doc-table tbody tr { transition: background .15s; }
.doc-table tbody tr:hover { background: #f8f7ff; }

.badge-pill {
    display: inline-flex; align-items: center; gap: 5px;
    padding: 4px 12px; border-radius: 99px; font-size:.75rem; font-weight:700;
}
.badge-pill.success { background:#d1fae5; color:#065f46; }
.badge-pill.warning { background:#fef3c7; color:#92400e; }
.badge-pill.danger  { background:#fee2e2; color:#991b1b; }
.badge-pill.secondary { background:#f1f5f9; color:#475569; }

.score-bar { height:6px; border-radius:99px; background:#e2e8f0; width:80px; overflow:hidden; }
.score-bar-fill { height:100%; border-radius:99px; transition: width .6s ease; }

.btn-icon-sm {
    width:30px; height:30px; border-radius:8px; border:none; cursor:pointer;
    display:inline-flex; align-items:center; justify-content:center; font-size:13px;
    transition:.15s;
}
.btn-icon-sm:hover { filter: brightness(1.15); transform:scale(1.1); }

/* ── AUDIT TIMELINE ────────────────────────────── */
.audit-bar-wrap { background: #f1f5f9; border-radius: 99px; height: 10px; overflow:hidden; }
.audit-bar-fill { height: 100%; border-radius:99px; background: linear-gradient(90deg,#10b981,#34d399); transition: width .7s ease; }

/* ── STAR RATING ───────────────────────────────── */
.stars { color:#f59e0b; letter-spacing:2px; }
.stars .empty { color:#cbd5e1; }

/* ── CHATBOT ───────────────────────────────────── */
.chatbot-fab {
    position:fixed;bottom:28px;right:28px;z-index:9999;
    width:58px;height:58px;border-radius:50%;
    background:linear-gradient(135deg,#5b6aeb,#7c3aed);
    color:white;border:none;font-size:22px;
    box-shadow:0 6px 24px rgba(91,106,235,.5);
    cursor:pointer;transition:.2s;
}
.chatbot-fab:hover { transform:scale(1.12); }
.chatbot-panel {
    position:fixed;bottom:100px;right:28px;z-index:9998;
    width:350px;max-height:500px;
    background:#fff;border-radius:20px;
    box-shadow:0 16px 48px rgba(0,0,0,.18);
    display:none;flex-direction:column;overflow:hidden;
}
.chatbot-panel.open { display:flex; }
.chatbot-header {
    background:linear-gradient(135deg,#5b6aeb,#7c3aed);
    color:white;padding:16px 20px;
    font-weight:700;font-size:14px;
    display:flex;align-items:center;justify-content:space-between;
}
.chatbot-body { flex:1;overflow-y:auto;padding:16px;font-size:13px;background:#fafafa; }
.chatbot-footer { padding:10px 14px;border-top:1px solid #f0f0f0;display:flex;gap:8px;background:#fff; }
.chatbot-footer input {
    flex:1;border:2px solid #e9ecef;border-radius:20px;
    padding:9px 16px;font-size:13px;outline:none;
}
.chatbot-footer input:focus { border-color:#5b6aeb; }
.chatbot-footer button {
    background:linear-gradient(135deg,#5b6aeb,#7c3aed);
    color:white;border:none;border-radius:50%;
    width:38px;height:38px;cursor:pointer;font-size:14px;
}
.msg-bot { background:#eef0ff;border-radius:14px 14px 14px 3px;padding:10px 14px;margin-bottom:8px;color:#1e293b;line-height:1.5; }
.msg-user { background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:white;border-radius:14px 14px 3px 14px;padding:10px 14px;margin-bottom:8px;text-align:right; }
.msg-loader { color:#94a3b8;font-style:italic; }

/* ── MODALS ────────────────────────────────────── */
.modal-content { border-radius: 20px; border: none; box-shadow: 0 24px 64px rgba(0,0,0,.18); }
.modal-header { border-radius: 20px 20px 0 0; border-bottom: 1px solid var(--border); }
.form-control-modern {
    border: 1.5px solid #e2e8f0; border-radius: 10px; padding: 10px 14px;
    font-size: .9rem; transition: border-color .2s;
    width: 100%; margin-bottom: 14px;
}
.form-control-modern:focus { border-color: var(--brand); outline: none; box-shadow: 0 0 0 3px rgba(91,106,235,.12); }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 217
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 218
        yield "<div style=\"max-width:1200px;margin:0 auto;padding:24px 20px;\">

    ";
        // line 221
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "flashes", [], "any", false, false, false, 221));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 222
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 223
                yield "            <div class=\"alert alert-";
                yield ((($context["type"] == "success")) ? ("success") : ("danger"));
                yield " mb-3\" style=\"border-radius:12px;\">
                <i class=\"fas fa-";
                // line 224
                yield ((($context["type"] == "success")) ? ("check-circle") : ("exclamation-circle"));
                yield " mr-2\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        yield "
    ";
        // line 230
        yield "    <div class=\"db-hero\">
        <div style=\"display:flex;align-items:flex-start;justify-content:space-between;flex-wrap:wrap;gap:16px;\">
            <div>
                <div class=\"db-hero-avatar\">🏢</div>
                <h1>";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 234, $this->source); })()), "nom", [], "any", false, false, false, 234), "html", null, true);
        yield "</h1>
                <div class=\"sub\">
                    <i class=\"fas fa-hashtag mr-1\"></i>";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 236, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 236), "html", null, true);
        yield "
                    &nbsp;·&nbsp;
                    <i class=\"fas fa-map-marker-alt mr-1\"></i>";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "pays", [], "any", true, true, false, 238)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 238, $this->source); })()), "pays", [], "any", false, false, false, 238), "Tunisie")) : ("Tunisie")), "html", null, true);
        yield "
                </div>
                <div style=\"margin-top:12px;\">
                    ";
        // line 241
        $context["st"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 241, $this->source); })()), "statut", [], "any", false, false, false, 241);
        // line 242
        yield "                    <span class=\"status-chip ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 242, $this->source); })()), "html", null, true);
        yield "\">
                        <i class=\"fas fa-";
        // line 243
        yield ((((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 243, $this->source); })()) == "valide")) ? ("check-circle") : (((((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 243, $this->source); })()) == "rejete")) ? ("times-circle") : ("clock"))));
        yield "\"></i>
                        ";
        // line 244
        yield ((((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 244, $this->source); })()) == "valide")) ? ("Validée") : (((((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 244, $this->source); })()) == "rejete")) ? ("Rejetée") : ("En attente"))));
        yield "
                    </span>
                </div>
            </div>
            <div class=\"hero-actions\">
                <a href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_download_pdf");
        yield "\" class=\"btn-glass accent\">
                    <i class=\"fas fa-file-pdf\"></i> PDF
                </a>
                <button class=\"btn-glass\" data-bs-toggle=\"modal\" data-bs-target=\"#qrCodeModal\">
                    <i class=\"fas fa-qrcode\"></i> QR Code
                </button>
                <button class=\"btn-glass\" data-bs-toggle=\"modal\" data-bs-target=\"#editModal\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </button>
                <button class=\"btn-glass danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                    <i class=\"fas fa-trash\"></i>
                </button>
                <a href=\"";
        // line 261
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_logout");
        yield "\" class=\"btn-glass danger\">
                    <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                </a>
            </div>
        </div>
    </div>

    ";
        // line 269
        yield "    <div class=\"kpi-grid\">
        <div class=\"kpi-card\">
            <div class=\"kpi-icon\" style=\"background:#eef0ff;color:#5b6aeb;\">
                <i class=\"fas fa-file-alt\"></i>
            </div>
            <div>
                <div class=\"kpi-val\">";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 275, $this->source); })())), "html", null, true);
        yield "</div>
                <div class=\"kpi-label\">Documents</div>
            </div>
        </div>
        <div class=\"kpi-card\">
            <div class=\"kpi-icon\" style=\"background:#d1fae5;color:#059669;\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            <div>
                <div class=\"kpi-val\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 284, $this->source); })()), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 284, $this->source); })()), "statut", [], "any", false, false, false, 284) == "valide"); })), "html", null, true);
        yield "</div>
                <div class=\"kpi-label\">Validés</div>
            </div>
        </div>
        <div class=\"kpi-card\">
            <div class=\"kpi-icon\" style=\"background:#fef3c7;color:#d97706;\">
                <i class=\"fas fa-hourglass-half\"></i>
            </div>
            <div>
                <div class=\"kpi-val\">";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 293, $this->source); })()), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 293, $this->source); })()), "statut", [], "any", false, false, false, 293) == "en_attente"); })), "html", null, true);
        yield "</div>
                <div class=\"kpi-label\">En attente</div>
            </div>
        </div>
        <div class=\"kpi-card\">
            <div class=\"kpi-icon\" style=\"background:#fce7f3;color:#db2777;\">
                <i class=\"fas fa-star\"></i>
            </div>
            <div>
                <div class=\"kpi-val\">";
        // line 302
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 302, $this->source); })()), "rating", [], "any", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 302, $this->source); })()), "rating", [], "any", false, false, false, 302) . "/5"), "html", null, true)) : ("—"));
        yield "</div>
                <div class=\"kpi-label\">Rating</div>
            </div>
        </div>
    </div>

    ";
        // line 309
        yield "    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:24px;\" class=\"info-section\">
        ";
        // line 311
        yield "        <div class=\"db-card\">
            <div class=\"db-card-header\">
                <h3>
                    <span class=\"icon-badge\" style=\"background:#eef0ff;color:#5b6aeb;\"><i class=\"fas fa-building\"></i></span>
                    Informations
                </h3>
            </div>
            <div class=\"db-card-body\">
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <label>Email</label>
                        <span>";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 322, $this->source); })()), "email", [], "any", false, false, false, 322), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <label>Téléphone</label>
                        <span>";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "telephone", [], "any", true, true, false, 326)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 326, $this->source); })()), "telephone", [], "any", false, false, false, 326), "—")) : ("—")), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\" style=\"grid-column:1/-1;\">
                        <label>Adresse</label>
                        <span>";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "adresse", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 330, $this->source); })()), "adresse", [], "any", false, false, false, 330), "—")) : ("—")), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <label>Secteur</label>
                        <span>";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "secteur", [], "any", true, true, false, 334)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 334, $this->source); })()), "secteur", [], "any", false, false, false, 334), "—")) : ("—")), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <label>Taille</label>
                        <span>";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "taille", [], "any", true, true, false, 338)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 338, $this->source); })()), "taille", [], "any", false, false, false, 338), "—")) : ("—")), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 345
        yield "        <div class=\"db-card\">
            <div class=\"db-card-header\">
                <h3>
                    <span class=\"icon-badge\" style=\"background:#fef3c7;color:#d97706;\"><i class=\"fas fa-chart-line\"></i></span>
                    Évaluation & Audit
                </h3>
            </div>
            <div class=\"db-card-body\">
                <div style=\"margin-bottom:20px;\">
                    <label style=\"font-size:.72rem;text-transform:uppercase;letter-spacing:.06em;color:#94a3b8;font-weight:600;\">Note globale</label>
                    <div class=\"stars\" style=\"font-size:22px;margin-top:6px;\">
                        ";
        // line 356
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 356, $this->source); })()), "rating", [], "any", false, false, false, 356)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 357
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 358
                yield "                                <i class=\"fas fa-star";
                if (($context["i"] > CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 358, $this->source); })()), "rating", [], "any", false, false, false, 358))) {
                    yield " empty";
                }
                yield "\"></i>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            yield "                            <span style=\"font-size:.85rem;color:#475569;margin-left:8px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 360, $this->source); })()), "rating", [], "any", false, false, false, 360), "html", null, true);
            yield "/5</span>
                        ";
        } else {
            // line 362
            yield "                            <span style=\"color:#94a3b8;font-size:.9rem;\">Pas encore évalué</span>
                        ";
        }
        // line 364
        yield "                    </div>
                </div>
                ";
        // line 366
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 366, $this->source); })()), "dateAuditDebut", [], "any", false, false, false, 366) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 366, $this->source); })()), "dateAuditFin", [], "any", false, false, false, 366))) {
            // line 367
            yield "                    ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U");
            // line 368
            yield "                    ";
            $context["fin"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 368, $this->source); })()), "dateAuditFin", [], "any", false, false, false, 368), "U");
            // line 369
            yield "                    ";
            $context["debut"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 369, $this->source); })()), "dateAuditDebut", [], "any", false, false, false, 369), "U");
            // line 370
            yield "                    ";
            $context["daysTotal"] = Twig\Extension\CoreExtension::round((((isset($context["fin"]) || array_key_exists("fin", $context) ? $context["fin"] : (function () { throw new RuntimeError('Variable "fin" does not exist.', 370, $this->source); })()) - (isset($context["debut"]) || array_key_exists("debut", $context) ? $context["debut"] : (function () { throw new RuntimeError('Variable "debut" does not exist.', 370, $this->source); })())) / 86400));
            // line 371
            yield "                    ";
            $context["daysLeft"] = Twig\Extension\CoreExtension::round((((isset($context["fin"]) || array_key_exists("fin", $context) ? $context["fin"] : (function () { throw new RuntimeError('Variable "fin" does not exist.', 371, $this->source); })()) - (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 371, $this->source); })())) / 86400));
            // line 372
            yield "                    ";
            $context["daysLeft"] = ((((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 372, $this->source); })()) < 0)) ? (0) : ((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 372, $this->source); })())));
            // line 373
            yield "                    ";
            $context["pct"] = Twig\Extension\CoreExtension::round(((((isset($context["daysTotal"]) || array_key_exists("daysTotal", $context) ? $context["daysTotal"] : (function () { throw new RuntimeError('Variable "daysTotal" does not exist.', 373, $this->source); })()) - (isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 373, $this->source); })())) / (isset($context["daysTotal"]) || array_key_exists("daysTotal", $context) ? $context["daysTotal"] : (function () { throw new RuntimeError('Variable "daysTotal" does not exist.', 373, $this->source); })())) * 100));
            // line 374
            yield "                    <div>
                        <label style=\"font-size:.72rem;text-transform:uppercase;letter-spacing:.06em;color:#94a3b8;font-weight:600;\">Période d'audit</label>
                        <div style=\"display:flex;justify-content:space-between;font-size:.78rem;color:#64748b;margin:8px 0 5px;\">
                            <span>";
            // line 377
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 377, $this->source); })()), "dateAuditDebut", [], "any", false, false, false, 377), "d/m/Y"), "html", null, true);
            yield "</span>
                            <span class=\"badge-pill ";
            // line 378
            yield ((((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 378, $this->source); })()) > 30)) ? ("success") : (((((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 378, $this->source); })()) > 7)) ? ("warning") : ("danger"))));
            yield "\">
                                ";
            // line 379
            yield ((((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 379, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 379, $this->source); })()) . " j restants"), "html", null, true)) : ("Expiré"));
            yield "
                            </span>
                            <span>";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 381, $this->source); })()), "dateAuditFin", [], "any", false, false, false, 381), "d/m/Y"), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"audit-bar-wrap\">
                            <div class=\"audit-bar-fill\" style=\"width:";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 384, $this->source); })()), "html", null, true);
            yield "%;\"></div>
                        </div>
                        <div style=\"text-align:center;font-size:.75rem;color:#94a3b8;margin-top:4px;\">";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 386, $this->source); })()), "html", null, true);
            yield "% écoulé</div>
                    </div>
                ";
        } else {
            // line 389
            yield "                    <div style=\"background:#f8fafc;border-radius:12px;padding:14px;font-size:.85rem;color:#64748b;text-align:center;\">
                        <i class=\"fas fa-calendar-plus\" style=\"font-size:1.4rem;color:#c7d2fe;display:block;margin-bottom:6px;\"></i>
                        La période d'audit sera affichée après validation.
                    </div>
                ";
        }
        // line 394
        yield "            </div>
        </div>
    </div>

    ";
        // line 399
        yield "    <div class=\"db-card\">
        <div class=\"db-card-header\">
            <h3>
                <span class=\"icon-badge\" style=\"background:#d1fae5;color:#059669;\"><i class=\"fas fa-folder-open\"></i></span>
                Vos Documents
            </h3>
            <a href=\"";
        // line 405
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_upload");
        yield "\" style=\"display:inline-flex;align-items:center;gap:8px;padding:9px 18px;border-radius:10px;background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:#fff;font-weight:700;font-size:.82rem;text-decoration:none;transition:.2s;\" onmouseover=\"this.style.opacity='.85'\" onmouseout=\"this.style.opacity='1'\">
                <i class=\"fas fa-plus\"></i> Ajouter
            </a>
        </div>
        <div style=\"overflow-x:auto;\">
            ";
        // line 410
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 410, $this->source); })())) > 0)) {
            // line 411
            yield "            <table class=\"doc-table\">
                <thead>
                    <tr>
                        <th>Document</th>
                        <th>Type</th>
                        <th>Ajouté le</th>
                        <th>Score IA</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 423
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 423, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                // line 424
                yield "                    <tr>
                        <td>
                            <div style=\"display:flex;align-items:center;gap:10px;\">
                                <div style=\"width:36px;height:36px;border-radius:9px;background:#eef0ff;display:flex;align-items:center;justify-content:center;font-size:15px;flex-shrink:0;\">
                                    📄
                                </div>
                                <span style=\"font-weight:600;color:#1e293b;\">";
                // line 430
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "nom", [], "any", false, false, false, 430), "html", null, true);
                yield "</span>
                            </div>
                        </td>
                        <td><span style=\"color:#64748b;\">";
                // line 433
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "type", [], "any", false, false, false, 433), "html", null, true);
                yield "</span></td>
                        <td><span style=\"color:#64748b;font-size:.82rem;\">";
                // line 434
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "dateUpload", [], "any", false, false, false, 434), "d/m/Y"), "html", null, true);
                yield "<br><small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "dateUpload", [], "any", false, false, false, 434), "H:i"), "html", null, true);
                yield "</small></span></td>
                        <td>
                            ";
                // line 436
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 436))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 437
                    yield "                                <div style=\"display:flex;align-items:center;gap:8px;\">
                                    <div>
                                        <div style=\"font-weight:700;color:";
                    // line 439
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 439) >= 70)) ? ("#059669") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 439) >= 40)) ? ("#d97706") : ("#dc2626"))));
                    yield ";font-size:.95rem;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 439), "html", null, true);
                    yield "%</div>
                                        <div class=\"score-bar\">
                                            <div class=\"score-bar-fill\" style=\"width:";
                    // line 441
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 441), "html", null, true);
                    yield "%;background:";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 441) >= 70)) ? ("#10b981") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 441) >= 40)) ? ("#f59e0b") : ("#ef4444"))));
                    yield ";\"></div>
                                        </div>
                                    </div>
                                </div>
                            ";
                } else {
                    // line 446
                    yield "                                <span style=\"color:#94a3b8;font-size:.82rem;font-style:italic;\">Analyse…</span>
                            ";
                }
                // line 448
                yield "                        </td>
                        <td>
                            ";
                // line 450
                $context["st"] = CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "statut", [], "any", false, false, false, 450);
                // line 451
                yield "                            <span class=\"badge-pill ";
                yield ((((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 451, $this->source); })()) == "valide")) ? ("success") : (((((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 451, $this->source); })()) == "rejete")) ? ("danger") : (((((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 451, $this->source); })()) == "en_attente")) ? ("warning") : ("secondary"))))));
                yield "\">
                                <i class=\"fas fa-";
                // line 452
                yield ((((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 452, $this->source); })()) == "valide")) ? ("check") : (((((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 452, $this->source); })()) == "rejete")) ? ("times") : ("clock"))));
                yield "\"></i>
                                ";
                // line 453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 453, $this->source); })())), "html", null, true);
                yield "
                            </span>
                        </td>
                        <td>
                            <div style=\"display:flex;gap:6px;align-items:center;\">
                                <a href=\"";
                // line 458
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_document_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 458)]), "html", null, true);
                yield "\"
                                   class=\"btn-icon-sm\"
                                   style=\"background:#e0f2fe;color:#0369a1;text-decoration:none;\"
                                   target=\"_blank\" title=\"Voir le document\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                
                                ";
                // line 465
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 465))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 466
                    yield "                                <button class=\"btn-icon-sm ai-details-btn\"
                                    style=\"background:#eef0ff;color:#5b6aeb;border:none;\"
                                    data-bs-toggle=\"modal\" data-bs-target=\"#aiModal\"
                                    data-nom=\"";
                    // line 469
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "nom", [], "any", false, false, false, 469), "html", null, true);
                    yield "\"
                                    data-score=\"";
                    // line 470
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 470), "html", null, true);
                    yield "\"
                                    data-details=\"";
                    // line 471
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "analysisReport", [], "any", false, true, false, 471), "details", [], "any", true, true, false, 471)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "analysisReport", [], "any", false, false, false, 471), "details", [], "any", false, false, false, 471), [])) : ([]))), "html", null, true);
                    yield "\"
                                    title=\"Détails IA\">
                                    <i class=\"fas fa-brain\"></i>
                                </button>
                                <a href=\"";
                    // line 475
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_audit_report", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 475)]), "html", null, true);
                    yield "\"
                                   class=\"btn-icon-sm\"
                                   style=\"background:#fef3c7;color:#d97706;text-decoration:none;\"
                                   target=\"_blank\" title=\"Rapport PDF\">
                                    <i class=\"fas fa-file-pdf\"></i>
                                </a>
                                ";
                }
                // line 482
                yield "
                                <button class=\"btn-icon-sm delete-doc-btn\"
                                    style=\"background:#fee2e2;color:#dc2626;border:none;\"
                                    data-bs-toggle=\"modal\" data-bs-target=\"#deleteDocModal\"
                                    data-id=\"";
                // line 486
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 486), "html", null, true);
                yield "\"
                                    data-nom=\"";
                // line 487
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "nom", [], "any", false, false, false, 487), "html", null, true);
                yield "\"
                                    title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['doc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 495
            yield "                </tbody>
            </table>
            ";
        } else {
            // line 498
            yield "            <div style=\"text-align:center;padding:48px 24px;color:#94a3b8;\">
                <div style=\"font-size:48px;margin-bottom:12px;\">📂</div>
                <div style=\"font-weight:600;font-size:1rem;color:#64748b;margin-bottom:4px;\">Aucun document</div>
                <div style=\"font-size:.85rem;\">Commencez par ajouter votre premier document.</div>
            </div>
            ";
        }
        // line 504
        yield "        </div>
    </div>

</div>

";
        // line 510
        yield "<button class=\"chatbot-fab\" onclick=\"toggleChat()\" title=\"Assistant IA\"><i class=\"fas fa-robot\"></i></button>
<div class=\"chatbot-panel\" id=\"chatPanel\">
    <div class=\"chatbot-header\">
        <span><i class=\"fas fa-robot mr-2\"></i>Assistant MindAudit</span>
        <button onclick=\"toggleChat()\" style=\"background:none;border:none;color:white;font-size:18px;cursor:pointer;\">&times;</button>
    </div>
    <div class=\"chatbot-body\" id=\"chatBody\">
        <div class=\"msg-bot\">Bonjour ! Je suis votre assistant d'audit IA. Je connais votre dossier <strong>";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 517, $this->source); })()), "nom", [], "any", false, false, false, 517), "html", null, true);
        yield "</strong> avec ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 517, $this->source); })())), "html", null, true);
        yield " document(s). Posez-moi n'importe quelle question !</div>
    </div>
    <div class=\"chatbot-footer\">
        <input type=\"text\" id=\"chatInput\" placeholder=\"Posez votre question…\" onkeydown=\"if(event.key==='Enter') sendChat()\">
        <button onclick=\"sendChat()\"><i class=\"fas fa-paper-plane\"></i></button>
    </div>
</div>

";
        // line 526
        yield "<div class=\"modal fade\" id=\"editModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-edit mr-2\"></i>Modifier les Informations</h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <form method=\"POST\" action=\"";
        // line 533
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_edit_entreprise");
        yield "\">
                <div class=\"modal-body\" style=\"padding:24px;\">
                    <div style=\"background:#eef0ff;border-radius:12px;padding:12px 16px;font-size:.83rem;color:#3730a3;margin-bottom:16px;\">
                        <i class=\"fas fa-info-circle mr-1\"></i> Vous pouvez modifier uniquement votre email, téléphone et adresse.
                    </div>
                    <label style=\"font-size:.78rem;font-weight:700;color:#374151;\">Email *</label>
                    <input type=\"email\" class=\"form-control-modern\" name=\"email\" value=\"";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 539, $this->source); })()), "email", [], "any", false, false, false, 539), "html", null, true);
        yield "\" required>
                    <label style=\"font-size:.78rem;font-weight:700;color:#374151;\">Téléphone</label>
                    <input type=\"text\" class=\"form-control-modern\" name=\"telephone\" value=\"";
        // line 541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 541, $this->source); })()), "telephone", [], "any", false, false, false, 541), "html", null, true);
        yield "\" placeholder=\"+216 XX XXX XXX\">
                    <label style=\"font-size:.78rem;font-weight:700;color:#374151;\">Adresse</label>
                    <textarea class=\"form-control-modern\" name=\"adresse\" rows=\"3\">";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 543, $this->source); })()), "adresse", [], "any", false, false, false, 543), "html", null, true);
        yield "</textarea>
                    <div style=\"background:#fef3c7;border-radius:10px;padding:10px 14px;font-size:.8rem;color:#92400e;\">
                        <strong>Non modifiable :</strong> ";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 545, $this->source); })()), "nom", [], "any", false, false, false, 545), "html", null, true);
        yield " · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 545, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 545), "html", null, true);
        yield "
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"background:linear-gradient(135deg,#5b6aeb,#7c3aed);border:none;border-radius:10px;padding:9px 22px;\">
                        <i class=\"fas fa-save mr-1\"></i> Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        // line 560
        yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:#ef4444;color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle mr-2\"></i>Confirmation de suppression</h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <form method=\"POST\" action=\"";
        // line 567
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_delete_entreprise");
        yield "\">
                <div class=\"modal-body\" style=\"padding:24px;\">
                    <div style=\"text-align:center;margin-bottom:20px;\">
                        <div style=\"font-size:48px;\">⚠️</div>
                        <p style=\"font-weight:600;color:#dc2626;margin-top:8px;\">Cette action est irréversible !</p>
                    </div>
                    <p style=\"font-size:.9rem;color:#475569;\">Vous êtes sur le point de supprimer :</p>
                    <ul style=\"font-size:.9rem;color:#1e293b;background:#fef2f2;border-radius:10px;padding:14px 20px;list-style:disc inside;\">
                        <li><strong>";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 575, $this->source); })()), "nom", [], "any", false, false, false, 575), "html", null, true);
        yield "</strong></li>
                        <li>";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 576, $this->source); })())), "html", null, true);
        yield " document(s) associé(s)</li>
                    </ul>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-danger\" style=\"border-radius:10px;padding:9px 22px;\">
                        <i class=\"fas fa-trash mr-1\"></i> Supprimer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        // line 591
        yield "<div class=\"modal fade\" id=\"aiModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-brain mr-2\"></i>Analyse IA : <span id=\"aiModalTitle\"></span></h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <div class=\"modal-body\" style=\"padding:28px;\">
                <div style=\"text-align:center;margin-bottom:20px;\">
                    <div class=\"h1 font-weight-bold\" id=\"aiModalScore\"></div>
                    <div style=\"color:#64748b;font-size:.85rem;\">Score de Conformité</div>
                </div>
                <ul id=\"aiModalDetails\" class=\"list-group list-group-flush\"></ul>
            </div>
            <div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>

";
        // line 611
        yield "<div class=\"modal fade\" id=\"qrCodeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-qrcode mr-2\"></i>Mon QR Code</h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <div class=\"modal-body text-center\" style=\"padding:32px;\">
                ";
        // line 619
        if ((($tmp = (isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 619, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 620
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 620, $this->source); })()), "html", null, true);
            yield "\" alt=\"QR Code\" style=\"max-width:200px;border-radius:16px;padding:12px;background:#f8fafc;border:2px solid #e2e8f0;margin-bottom:16px;\">
                ";
        } else {
            // line 622
            yield "                    <div class=\"alert alert-warning\">QR Code indisponible</div>
                ";
        }
        // line 624
        yield "                <p style=\"color:#64748b;font-size:.85rem;margin-bottom:12px;\">Code d'accès de votre entreprise</p>
                <div style=\"background:#f1f5f9;border-radius:12px;padding:12px 20px;display:inline-block;\">
                    <code style=\"font-size:1.3rem;font-weight:800;color:#4338ca;letter-spacing:.1em;\">";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 626, $this->source); })()), "accessCode", [], "any", false, false, false, 626), "html", null, true);
        yield "</code>
                </div>
            </div>
            <div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>

";
        // line 635
        yield "<div class=\"modal fade\" id=\"deleteDocModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:#ef4444;color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-trash-alt mr-2\"></i>Supprimer le document</h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <form id=\"deleteDocForm\" method=\"POST\" action=\"\">
                <div class=\"modal-body\" style=\"padding:24px;text-align:center;\">
                    <div style=\"font-size:42px;color:#ef4444;margin-bottom:12px;\">🗑️</div>
                    <p style=\"font-size:.95rem;color:#1e293b;\">Êtes-vous sûr de vouloir supprimer le document <strong id=\"deleteDocName\"></strong> ?</p>
                    <p style=\"font-size:.82rem;color:#64748b;\">Cette action supprimera également le rapport d'audit associé.</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-danger\" style=\"border-radius:10px;padding:9px 22px;\">Confirmer la suppression</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
@media(max-width:768px){
    .info-section { grid-template-columns:1fr !important; }
    .db-hero h1 { font-size:1.4rem; }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 665
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 666
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // AI Modal
    document.querySelectorAll('.ai-details-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const nom = this.dataset.nom, score = this.dataset.score;
            let details = [];
            try { details = JSON.parse(this.dataset.details || '[]'); } catch(e) {}
            document.getElementById('aiModalTitle').textContent = nom;
            const scoreEl = document.getElementById('aiModalScore');
            scoreEl.textContent = score + '%';
            scoreEl.className = 'h1 font-weight-bold ' + (score >= 70 ? 'text-success' : (score >= 40 ? 'text-warning' : 'text-danger'));
            const list = document.getElementById('aiModalDetails');
            list.innerHTML = details.length === 0
                ? '<li class=\"list-group-item text-muted\">Aucun détail disponible.</li>'
                : details.map(d => `<li class=\"list-group-item\"><i class=\"fas fa-check text-success mr-2\"></i>\${d}</li>`).join('');
        });
    });

    // Document Delete Modal
    document.querySelectorAll('.delete-doc-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const nom = this.dataset.nom;
            document.getElementById('deleteDocName').textContent = nom;
            document.getElementById('deleteDocForm').action = `/employee/document/delete/\${id}`;
        });
    });
});

function toggleChat() { document.getElementById('chatPanel').classList.toggle('open'); }

function sendChat() {
    const input = document.getElementById('chatInput');
    const body = document.getElementById('chatBody');
    const text = input.value.trim();
    if (!text) return;
    body.innerHTML += `<div class=\"msg-user\">\${text}</div>`;
    input.value = '';
    body.scrollTop = body.scrollHeight;
    const loader = document.createElement('div');
    loader.className = 'msg-bot msg-loader';
    loader.innerHTML = '<i class=\"fas fa-spinner fa-spin mr-1\"></i>Analyse en cours...';
    body.appendChild(loader);
    body.scrollTop = body.scrollHeight;
    fetch('";
        // line 711
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_chatbot_ask");
        yield "', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ question: text, entreprise_id: ";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 714, $this->source); })()), "id", [], "any", false, false, false, 714), "html", null, true);
        yield " })
    })
    .then(r => r.json())
    .then(data => {
        loader.remove();
        body.innerHTML += `<div class=\"msg-bot\">\${data.response || data.answer || 'Désolé, je n\\'ai pas pu répondre.'}</div>`;
        body.scrollTop = body.scrollHeight;
    })
    .catch(() => {
        loader.remove();
        body.innerHTML += '<div class=\"msg-bot text-danger\">Erreur de connexion.</div>';
        body.scrollTop = body.scrollHeight;
    });
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/dashboard.html.twig";
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
        return array (  1111 => 714,  1105 => 711,  1058 => 666,  1048 => 665,  1012 => 635,  1001 => 626,  997 => 624,  993 => 622,  987 => 620,  985 => 619,  975 => 611,  954 => 591,  937 => 576,  933 => 575,  922 => 567,  913 => 560,  894 => 545,  889 => 543,  884 => 541,  879 => 539,  870 => 533,  861 => 526,  848 => 517,  839 => 510,  832 => 504,  824 => 498,  819 => 495,  805 => 487,  801 => 486,  795 => 482,  785 => 475,  778 => 471,  774 => 470,  770 => 469,  765 => 466,  763 => 465,  753 => 458,  745 => 453,  741 => 452,  736 => 451,  734 => 450,  730 => 448,  726 => 446,  716 => 441,  709 => 439,  705 => 437,  703 => 436,  696 => 434,  692 => 433,  686 => 430,  678 => 424,  674 => 423,  660 => 411,  658 => 410,  650 => 405,  642 => 399,  636 => 394,  629 => 389,  623 => 386,  618 => 384,  612 => 381,  607 => 379,  603 => 378,  599 => 377,  594 => 374,  591 => 373,  588 => 372,  585 => 371,  582 => 370,  579 => 369,  576 => 368,  573 => 367,  571 => 366,  567 => 364,  563 => 362,  557 => 360,  546 => 358,  541 => 357,  539 => 356,  526 => 345,  517 => 338,  510 => 334,  503 => 330,  496 => 326,  489 => 322,  476 => 311,  473 => 309,  464 => 302,  452 => 293,  440 => 284,  428 => 275,  420 => 269,  410 => 261,  395 => 249,  387 => 244,  383 => 243,  378 => 242,  376 => 241,  370 => 238,  365 => 236,  360 => 234,  354 => 230,  351 => 228,  345 => 227,  334 => 224,  329 => 223,  324 => 222,  319 => 221,  315 => 218,  305 => 217,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Tableau de bord – {{ entreprise.nom }}{% endblock %}

{% block stylesheets %}
<style>
:root {
    --brand: #5b6aeb;
    --brand-2: #7c3aed;
    --success: #10b981;
    --warning: #f59e0b;
    --danger: #ef4444;
    --dark: #0f172a;
    --card-bg: rgba(255,255,255,.95);
    --border: rgba(99,102,241,.12);
}

/* ── HERO ─────────────────────────────────────── */
.db-hero {
    background: linear-gradient(135deg,#1e1b4b 0%,#312e81 40%,#4338ca 70%,#7c3aed 100%);
    border-radius: 24px;
    padding: 36px 40px;
    color: #fff;
    margin-bottom: 28px;
    position: relative;
    overflow: hidden;
}
.db-hero::before {
    content:'';
    position:absolute;top:-80px;right:-80px;
    width:300px;height:300px;border-radius:50%;
    background:rgba(255,255,255,.06);
}
.db-hero::after {
    content:'';
    position:absolute;bottom:-60px;left:40%;
    width:200px;height:200px;border-radius:50%;
    background:rgba(255,255,255,.04);
}
.db-hero-avatar {
    width: 64px; height: 64px; border-radius: 18px;
    background: rgba(255,255,255,.2);
    display: flex; align-items: center; justify-content: center;
    font-size: 28px; margin-bottom: 14px;
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255,255,255,.25);
}
.db-hero h1 { font-size: 1.8rem; font-weight: 800; margin:0; }
.db-hero .sub { opacity:.75; font-size:.9rem; margin-top:4px; }

.status-chip {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 5px 14px; border-radius: 99px; font-size: .78rem; font-weight: 700;
    border: 1px solid rgba(255,255,255,.3);
    background: rgba(255,255,255,.15); backdrop-filter: blur(4px);
}
.status-chip.valide { background: rgba(16,185,129,.2); border-color:rgba(16,185,129,.5); }
.status-chip.en_attente { background: rgba(245,158,11,.2); border-color:rgba(245,158,11,.5); }
.status-chip.rejete { background: rgba(239,68,68,.2); border-color:rgba(239,68,68,.5); }

/* ── ACTION BUTTONS ────────────────────────────── */
.hero-actions { display:flex; gap:10px; flex-wrap:wrap; margin-top:20px; }
.btn-glass {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 10px 20px; border-radius: 12px; font-weight: 600; font-size: .85rem;
    border: 1px solid rgba(255,255,255,.3);
    background: rgba(255,255,255,.15); backdrop-filter: blur(8px);
    color: #fff; cursor: pointer; transition: .2s;
    text-decoration: none;
}
.btn-glass:hover { background: rgba(255,255,255,.28); color:#fff; transform: translateY(-2px); }
.btn-glass.accent { background: rgba(255,255,255,.95); color: #312e81; }
.btn-glass.accent:hover { background: #fff; }
.btn-glass.danger { background: rgba(239,68,68,.25); border-color:rgba(239,68,68,.5); }
.btn-glass.danger:hover { background: rgba(239,68,68,.4); }

/* ── KPI CARDS ─────────────────────────────────── */
.kpi-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; margin-bottom: 28px; }
@media(max-width:992px){ .kpi-grid{grid-template-columns:repeat(2,1fr);} }
@media(max-width:576px){ .kpi-grid{grid-template-columns:1fr;} }

.kpi-card {
    background: var(--card-bg);
    border-radius: 18px;
    padding: 22px 24px;
    border: 1px solid var(--border);
    box-shadow: 0 2px 12px rgba(91,106,235,.07);
    display: flex; align-items: center; gap: 16px;
    transition: transform .2s, box-shadow .2s;
}
.kpi-card:hover { transform: translateY(-4px); box-shadow: 0 12px 28px rgba(91,106,235,.13); }
.kpi-icon {
    width: 52px; height: 52px; border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 22px; flex-shrink: 0;
}
.kpi-val { font-size: 1.6rem; font-weight: 800; color: var(--dark); line-height:1; }
.kpi-label { font-size: .78rem; color: #64748b; margin-top:3px; font-weight: 500; text-transform: uppercase; letter-spacing:.04em; }

/* ── CONTENT CARDS ─────────────────────────────── */
.db-card {
    background: var(--card-bg);
    border-radius: 20px;
    border: 1px solid var(--border);
    box-shadow: 0 2px 12px rgba(0,0,0,.05);
    margin-bottom: 24px;
    overflow: hidden;
}
.db-card-header {
    padding: 18px 24px;
    border-bottom: 1px solid var(--border);
    display: flex; align-items: center; justify-content: space-between;
}
.db-card-header h3 {
    font-size: .95rem; font-weight: 700; color: var(--dark);
    margin: 0; display: flex; align-items: center; gap: 10px;
}
.db-card-header .icon-badge {
    width: 32px; height: 32px; border-radius: 8px;
    display: flex; align-items: center; justify-content: center; font-size: 14px;
}
.db-card-body { padding: 24px; }

/* ── INFO GRID ─────────────────────────────────── */
.info-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 16px; }
@media(max-width:576px){ .info-grid{grid-template-columns:1fr;} }
.info-item label { font-size:.72rem; text-transform:uppercase; letter-spacing:.06em; color:#94a3b8; font-weight:600; display:block; margin-bottom:4px; }
.info-item span { font-size:.95rem; color:#1e293b; font-weight:500; }

/* ── DOC TABLE ─────────────────────────────────── */
.doc-table { width:100%; border-collapse:collapse; }
.doc-table th { font-size:.72rem; text-transform:uppercase; letter-spacing:.06em; color:#94a3b8; font-weight:700; padding:10px 16px; border-bottom: 1px solid var(--border); text-align:left; }
.doc-table td { padding:14px 16px; border-bottom: 1px solid rgba(0,0,0,.04); vertical-align:middle; font-size:.9rem; }
.doc-table tr:last-child td { border-bottom:none; }
.doc-table tbody tr { transition: background .15s; }
.doc-table tbody tr:hover { background: #f8f7ff; }

.badge-pill {
    display: inline-flex; align-items: center; gap: 5px;
    padding: 4px 12px; border-radius: 99px; font-size:.75rem; font-weight:700;
}
.badge-pill.success { background:#d1fae5; color:#065f46; }
.badge-pill.warning { background:#fef3c7; color:#92400e; }
.badge-pill.danger  { background:#fee2e2; color:#991b1b; }
.badge-pill.secondary { background:#f1f5f9; color:#475569; }

.score-bar { height:6px; border-radius:99px; background:#e2e8f0; width:80px; overflow:hidden; }
.score-bar-fill { height:100%; border-radius:99px; transition: width .6s ease; }

.btn-icon-sm {
    width:30px; height:30px; border-radius:8px; border:none; cursor:pointer;
    display:inline-flex; align-items:center; justify-content:center; font-size:13px;
    transition:.15s;
}
.btn-icon-sm:hover { filter: brightness(1.15); transform:scale(1.1); }

/* ── AUDIT TIMELINE ────────────────────────────── */
.audit-bar-wrap { background: #f1f5f9; border-radius: 99px; height: 10px; overflow:hidden; }
.audit-bar-fill { height: 100%; border-radius:99px; background: linear-gradient(90deg,#10b981,#34d399); transition: width .7s ease; }

/* ── STAR RATING ───────────────────────────────── */
.stars { color:#f59e0b; letter-spacing:2px; }
.stars .empty { color:#cbd5e1; }

/* ── CHATBOT ───────────────────────────────────── */
.chatbot-fab {
    position:fixed;bottom:28px;right:28px;z-index:9999;
    width:58px;height:58px;border-radius:50%;
    background:linear-gradient(135deg,#5b6aeb,#7c3aed);
    color:white;border:none;font-size:22px;
    box-shadow:0 6px 24px rgba(91,106,235,.5);
    cursor:pointer;transition:.2s;
}
.chatbot-fab:hover { transform:scale(1.12); }
.chatbot-panel {
    position:fixed;bottom:100px;right:28px;z-index:9998;
    width:350px;max-height:500px;
    background:#fff;border-radius:20px;
    box-shadow:0 16px 48px rgba(0,0,0,.18);
    display:none;flex-direction:column;overflow:hidden;
}
.chatbot-panel.open { display:flex; }
.chatbot-header {
    background:linear-gradient(135deg,#5b6aeb,#7c3aed);
    color:white;padding:16px 20px;
    font-weight:700;font-size:14px;
    display:flex;align-items:center;justify-content:space-between;
}
.chatbot-body { flex:1;overflow-y:auto;padding:16px;font-size:13px;background:#fafafa; }
.chatbot-footer { padding:10px 14px;border-top:1px solid #f0f0f0;display:flex;gap:8px;background:#fff; }
.chatbot-footer input {
    flex:1;border:2px solid #e9ecef;border-radius:20px;
    padding:9px 16px;font-size:13px;outline:none;
}
.chatbot-footer input:focus { border-color:#5b6aeb; }
.chatbot-footer button {
    background:linear-gradient(135deg,#5b6aeb,#7c3aed);
    color:white;border:none;border-radius:50%;
    width:38px;height:38px;cursor:pointer;font-size:14px;
}
.msg-bot { background:#eef0ff;border-radius:14px 14px 14px 3px;padding:10px 14px;margin-bottom:8px;color:#1e293b;line-height:1.5; }
.msg-user { background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:white;border-radius:14px 14px 3px 14px;padding:10px 14px;margin-bottom:8px;text-align:right; }
.msg-loader { color:#94a3b8;font-style:italic; }

/* ── MODALS ────────────────────────────────────── */
.modal-content { border-radius: 20px; border: none; box-shadow: 0 24px 64px rgba(0,0,0,.18); }
.modal-header { border-radius: 20px 20px 0 0; border-bottom: 1px solid var(--border); }
.form-control-modern {
    border: 1.5px solid #e2e8f0; border-radius: 10px; padding: 10px 14px;
    font-size: .9rem; transition: border-color .2s;
    width: 100%; margin-bottom: 14px;
}
.form-control-modern:focus { border-color: var(--brand); outline: none; box-shadow: 0 0 0 3px rgba(91,106,235,.12); }
</style>
{% endblock %}

{% block body %}
<div style=\"max-width:1200px;margin:0 auto;padding:24px 20px;\">

    {# ── FLASH MESSAGES ── #}
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type == 'success' ? 'success' : 'danger' }} mb-3\" style=\"border-radius:12px;\">
                <i class=\"fas fa-{{ type == 'success' ? 'check-circle' : 'exclamation-circle' }} mr-2\"></i>{{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    {# ── HERO ── #}
    <div class=\"db-hero\">
        <div style=\"display:flex;align-items:flex-start;justify-content:space-between;flex-wrap:wrap;gap:16px;\">
            <div>
                <div class=\"db-hero-avatar\">🏢</div>
                <h1>{{ entreprise.nom }}</h1>
                <div class=\"sub\">
                    <i class=\"fas fa-hashtag mr-1\"></i>{{ entreprise.matriculeFiscale }}
                    &nbsp;·&nbsp;
                    <i class=\"fas fa-map-marker-alt mr-1\"></i>{{ entreprise.pays|default('Tunisie') }}
                </div>
                <div style=\"margin-top:12px;\">
                    {% set st = entreprise.statut %}
                    <span class=\"status-chip {{ st }}\">
                        <i class=\"fas fa-{{ st == 'valide' ? 'check-circle' : (st == 'rejete' ? 'times-circle' : 'clock') }}\"></i>
                        {{ st == 'valide' ? 'Validée' : (st == 'rejete' ? 'Rejetée' : 'En attente') }}
                    </span>
                </div>
            </div>
            <div class=\"hero-actions\">
                <a href=\"{{ path('app_employee_download_pdf') }}\" class=\"btn-glass accent\">
                    <i class=\"fas fa-file-pdf\"></i> PDF
                </a>
                <button class=\"btn-glass\" data-bs-toggle=\"modal\" data-bs-target=\"#qrCodeModal\">
                    <i class=\"fas fa-qrcode\"></i> QR Code
                </button>
                <button class=\"btn-glass\" data-bs-toggle=\"modal\" data-bs-target=\"#editModal\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </button>
                <button class=\"btn-glass danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                    <i class=\"fas fa-trash\"></i>
                </button>
                <a href=\"{{ path('app_employee_logout') }}\" class=\"btn-glass danger\">
                    <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                </a>
            </div>
        </div>
    </div>

    {# ── KPI CARDS ── #}
    <div class=\"kpi-grid\">
        <div class=\"kpi-card\">
            <div class=\"kpi-icon\" style=\"background:#eef0ff;color:#5b6aeb;\">
                <i class=\"fas fa-file-alt\"></i>
            </div>
            <div>
                <div class=\"kpi-val\">{{ documents|length }}</div>
                <div class=\"kpi-label\">Documents</div>
            </div>
        </div>
        <div class=\"kpi-card\">
            <div class=\"kpi-icon\" style=\"background:#d1fae5;color:#059669;\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            <div>
                <div class=\"kpi-val\">{{ documents|filter(d => d.statut == 'valide')|length }}</div>
                <div class=\"kpi-label\">Validés</div>
            </div>
        </div>
        <div class=\"kpi-card\">
            <div class=\"kpi-icon\" style=\"background:#fef3c7;color:#d97706;\">
                <i class=\"fas fa-hourglass-half\"></i>
            </div>
            <div>
                <div class=\"kpi-val\">{{ documents|filter(d => d.statut == 'en_attente')|length }}</div>
                <div class=\"kpi-label\">En attente</div>
            </div>
        </div>
        <div class=\"kpi-card\">
            <div class=\"kpi-icon\" style=\"background:#fce7f3;color:#db2777;\">
                <i class=\"fas fa-star\"></i>
            </div>
            <div>
                <div class=\"kpi-val\">{{ entreprise.rating ? entreprise.rating ~ '/5' : '—' }}</div>
                <div class=\"kpi-label\">Rating</div>
            </div>
        </div>
    </div>

    {# ── TWO-COLUMN LAYOUT ── #}
    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:24px;\" class=\"info-section\">
        {# Company Info #}
        <div class=\"db-card\">
            <div class=\"db-card-header\">
                <h3>
                    <span class=\"icon-badge\" style=\"background:#eef0ff;color:#5b6aeb;\"><i class=\"fas fa-building\"></i></span>
                    Informations
                </h3>
            </div>
            <div class=\"db-card-body\">
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <label>Email</label>
                        <span>{{ entreprise.email }}</span>
                    </div>
                    <div class=\"info-item\">
                        <label>Téléphone</label>
                        <span>{{ entreprise.telephone|default('—') }}</span>
                    </div>
                    <div class=\"info-item\" style=\"grid-column:1/-1;\">
                        <label>Adresse</label>
                        <span>{{ entreprise.adresse|default('—') }}</span>
                    </div>
                    <div class=\"info-item\">
                        <label>Secteur</label>
                        <span>{{ entreprise.secteur|default('—') }}</span>
                    </div>
                    <div class=\"info-item\">
                        <label>Taille</label>
                        <span>{{ entreprise.taille|default('—') }}</span>
                    </div>
                </div>
            </div>
        </div>

        {# Rating & Audit Period #}
        <div class=\"db-card\">
            <div class=\"db-card-header\">
                <h3>
                    <span class=\"icon-badge\" style=\"background:#fef3c7;color:#d97706;\"><i class=\"fas fa-chart-line\"></i></span>
                    Évaluation & Audit
                </h3>
            </div>
            <div class=\"db-card-body\">
                <div style=\"margin-bottom:20px;\">
                    <label style=\"font-size:.72rem;text-transform:uppercase;letter-spacing:.06em;color:#94a3b8;font-weight:600;\">Note globale</label>
                    <div class=\"stars\" style=\"font-size:22px;margin-top:6px;\">
                        {% if entreprise.rating %}
                            {% for i in 1..5 %}
                                <i class=\"fas fa-star{% if i > entreprise.rating %} empty{% endif %}\"></i>
                            {% endfor %}
                            <span style=\"font-size:.85rem;color:#475569;margin-left:8px;\">{{ entreprise.rating }}/5</span>
                        {% else %}
                            <span style=\"color:#94a3b8;font-size:.9rem;\">Pas encore évalué</span>
                        {% endif %}
                    </div>
                </div>
                {% if entreprise.dateAuditDebut and entreprise.dateAuditFin %}
                    {% set now = \"now\"|date('U') %}
                    {% set fin = entreprise.dateAuditFin|date('U') %}
                    {% set debut = entreprise.dateAuditDebut|date('U') %}
                    {% set daysTotal = ((fin - debut) / 86400)|round %}
                    {% set daysLeft = ((fin - now) / 86400)|round %}
                    {% set daysLeft = daysLeft < 0 ? 0 : daysLeft %}
                    {% set pct = ((daysTotal - daysLeft) / daysTotal * 100)|round %}
                    <div>
                        <label style=\"font-size:.72rem;text-transform:uppercase;letter-spacing:.06em;color:#94a3b8;font-weight:600;\">Période d'audit</label>
                        <div style=\"display:flex;justify-content:space-between;font-size:.78rem;color:#64748b;margin:8px 0 5px;\">
                            <span>{{ entreprise.dateAuditDebut|date('d/m/Y') }}</span>
                            <span class=\"badge-pill {{ daysLeft > 30 ? 'success' : (daysLeft > 7 ? 'warning' : 'danger') }}\">
                                {{ daysLeft > 0 ? daysLeft ~ ' j restants' : 'Expiré' }}
                            </span>
                            <span>{{ entreprise.dateAuditFin|date('d/m/Y') }}</span>
                        </div>
                        <div class=\"audit-bar-wrap\">
                            <div class=\"audit-bar-fill\" style=\"width:{{ pct }}%;\"></div>
                        </div>
                        <div style=\"text-align:center;font-size:.75rem;color:#94a3b8;margin-top:4px;\">{{ pct }}% écoulé</div>
                    </div>
                {% else %}
                    <div style=\"background:#f8fafc;border-radius:12px;padding:14px;font-size:.85rem;color:#64748b;text-align:center;\">
                        <i class=\"fas fa-calendar-plus\" style=\"font-size:1.4rem;color:#c7d2fe;display:block;margin-bottom:6px;\"></i>
                        La période d'audit sera affichée après validation.
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

    {# ── DOCUMENTS ── #}
    <div class=\"db-card\">
        <div class=\"db-card-header\">
            <h3>
                <span class=\"icon-badge\" style=\"background:#d1fae5;color:#059669;\"><i class=\"fas fa-folder-open\"></i></span>
                Vos Documents
            </h3>
            <a href=\"{{ path('app_employee_upload') }}\" style=\"display:inline-flex;align-items:center;gap:8px;padding:9px 18px;border-radius:10px;background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:#fff;font-weight:700;font-size:.82rem;text-decoration:none;transition:.2s;\" onmouseover=\"this.style.opacity='.85'\" onmouseout=\"this.style.opacity='1'\">
                <i class=\"fas fa-plus\"></i> Ajouter
            </a>
        </div>
        <div style=\"overflow-x:auto;\">
            {% if documents|length > 0 %}
            <table class=\"doc-table\">
                <thead>
                    <tr>
                        <th>Document</th>
                        <th>Type</th>
                        <th>Ajouté le</th>
                        <th>Score IA</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for doc in documents %}
                    <tr>
                        <td>
                            <div style=\"display:flex;align-items:center;gap:10px;\">
                                <div style=\"width:36px;height:36px;border-radius:9px;background:#eef0ff;display:flex;align-items:center;justify-content:center;font-size:15px;flex-shrink:0;\">
                                    📄
                                </div>
                                <span style=\"font-weight:600;color:#1e293b;\">{{ doc.nom }}</span>
                            </div>
                        </td>
                        <td><span style=\"color:#64748b;\">{{ doc.type }}</span></td>
                        <td><span style=\"color:#64748b;font-size:.82rem;\">{{ doc.dateUpload|date('d/m/Y') }}<br><small>{{ doc.dateUpload|date('H:i') }}</small></span></td>
                        <td>
                            {% if doc.noteIA is not null %}
                                <div style=\"display:flex;align-items:center;gap:8px;\">
                                    <div>
                                        <div style=\"font-weight:700;color:{{ doc.noteIA >= 70 ? '#059669' : (doc.noteIA >= 40 ? '#d97706' : '#dc2626') }};font-size:.95rem;\">{{ doc.noteIA }}%</div>
                                        <div class=\"score-bar\">
                                            <div class=\"score-bar-fill\" style=\"width:{{ doc.noteIA }}%;background:{{ doc.noteIA >= 70 ? '#10b981' : (doc.noteIA >= 40 ? '#f59e0b' : '#ef4444') }};\"></div>
                                        </div>
                                    </div>
                                </div>
                            {% else %}
                                <span style=\"color:#94a3b8;font-size:.82rem;font-style:italic;\">Analyse…</span>
                            {% endif %}
                        </td>
                        <td>
                            {% set st = doc.statut %}
                            <span class=\"badge-pill {{ st == 'valide' ? 'success' : (st == 'rejete' ? 'danger' : (st == 'en_attente' ? 'warning' : 'secondary')) }}\">
                                <i class=\"fas fa-{{ st == 'valide' ? 'check' : (st == 'rejete' ? 'times' : 'clock') }}\"></i>
                                {{ st|capitalize }}
                            </span>
                        </td>
                        <td>
                            <div style=\"display:flex;gap:6px;align-items:center;\">
                                <a href=\"{{ path('app_employee_document_view', {'id': doc.id}) }}\"
                                   class=\"btn-icon-sm\"
                                   style=\"background:#e0f2fe;color:#0369a1;text-decoration:none;\"
                                   target=\"_blank\" title=\"Voir le document\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                
                                {% if doc.noteIA is not null %}
                                <button class=\"btn-icon-sm ai-details-btn\"
                                    style=\"background:#eef0ff;color:#5b6aeb;border:none;\"
                                    data-bs-toggle=\"modal\" data-bs-target=\"#aiModal\"
                                    data-nom=\"{{ doc.nom }}\"
                                    data-score=\"{{ doc.noteIA }}\"
                                    data-details=\"{{ doc.analysisReport.details|default([])|json_encode }}\"
                                    title=\"Détails IA\">
                                    <i class=\"fas fa-brain\"></i>
                                </button>
                                <a href=\"{{ path('app_employee_audit_report', {'id': doc.id}) }}\"
                                   class=\"btn-icon-sm\"
                                   style=\"background:#fef3c7;color:#d97706;text-decoration:none;\"
                                   target=\"_blank\" title=\"Rapport PDF\">
                                    <i class=\"fas fa-file-pdf\"></i>
                                </a>
                                {% endif %}

                                <button class=\"btn-icon-sm delete-doc-btn\"
                                    style=\"background:#fee2e2;color:#dc2626;border:none;\"
                                    data-bs-toggle=\"modal\" data-bs-target=\"#deleteDocModal\"
                                    data-id=\"{{ doc.id }}\"
                                    data-nom=\"{{ doc.nom }}\"
                                    title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% else %}
            <div style=\"text-align:center;padding:48px 24px;color:#94a3b8;\">
                <div style=\"font-size:48px;margin-bottom:12px;\">📂</div>
                <div style=\"font-weight:600;font-size:1rem;color:#64748b;margin-bottom:4px;\">Aucun document</div>
                <div style=\"font-size:.85rem;\">Commencez par ajouter votre premier document.</div>
            </div>
            {% endif %}
        </div>
    </div>

</div>

{# ── CHATBOT ── #}
<button class=\"chatbot-fab\" onclick=\"toggleChat()\" title=\"Assistant IA\"><i class=\"fas fa-robot\"></i></button>
<div class=\"chatbot-panel\" id=\"chatPanel\">
    <div class=\"chatbot-header\">
        <span><i class=\"fas fa-robot mr-2\"></i>Assistant MindAudit</span>
        <button onclick=\"toggleChat()\" style=\"background:none;border:none;color:white;font-size:18px;cursor:pointer;\">&times;</button>
    </div>
    <div class=\"chatbot-body\" id=\"chatBody\">
        <div class=\"msg-bot\">Bonjour ! Je suis votre assistant d'audit IA. Je connais votre dossier <strong>{{ entreprise.nom }}</strong> avec {{ documents|length }} document(s). Posez-moi n'importe quelle question !</div>
    </div>
    <div class=\"chatbot-footer\">
        <input type=\"text\" id=\"chatInput\" placeholder=\"Posez votre question…\" onkeydown=\"if(event.key==='Enter') sendChat()\">
        <button onclick=\"sendChat()\"><i class=\"fas fa-paper-plane\"></i></button>
    </div>
</div>

{# ── EDIT MODAL ── #}
<div class=\"modal fade\" id=\"editModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-edit mr-2\"></i>Modifier les Informations</h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <form method=\"POST\" action=\"{{ path('app_employee_edit_entreprise') }}\">
                <div class=\"modal-body\" style=\"padding:24px;\">
                    <div style=\"background:#eef0ff;border-radius:12px;padding:12px 16px;font-size:.83rem;color:#3730a3;margin-bottom:16px;\">
                        <i class=\"fas fa-info-circle mr-1\"></i> Vous pouvez modifier uniquement votre email, téléphone et adresse.
                    </div>
                    <label style=\"font-size:.78rem;font-weight:700;color:#374151;\">Email *</label>
                    <input type=\"email\" class=\"form-control-modern\" name=\"email\" value=\"{{ entreprise.email }}\" required>
                    <label style=\"font-size:.78rem;font-weight:700;color:#374151;\">Téléphone</label>
                    <input type=\"text\" class=\"form-control-modern\" name=\"telephone\" value=\"{{ entreprise.telephone }}\" placeholder=\"+216 XX XXX XXX\">
                    <label style=\"font-size:.78rem;font-weight:700;color:#374151;\">Adresse</label>
                    <textarea class=\"form-control-modern\" name=\"adresse\" rows=\"3\">{{ entreprise.adresse }}</textarea>
                    <div style=\"background:#fef3c7;border-radius:10px;padding:10px 14px;font-size:.8rem;color:#92400e;\">
                        <strong>Non modifiable :</strong> {{ entreprise.nom }} · {{ entreprise.matriculeFiscale }}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"background:linear-gradient(135deg,#5b6aeb,#7c3aed);border:none;border-radius:10px;padding:9px 22px;\">
                        <i class=\"fas fa-save mr-1\"></i> Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{# ── DELETE MODAL ── #}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:#ef4444;color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle mr-2\"></i>Confirmation de suppression</h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <form method=\"POST\" action=\"{{ path('app_employee_delete_entreprise') }}\">
                <div class=\"modal-body\" style=\"padding:24px;\">
                    <div style=\"text-align:center;margin-bottom:20px;\">
                        <div style=\"font-size:48px;\">⚠️</div>
                        <p style=\"font-weight:600;color:#dc2626;margin-top:8px;\">Cette action est irréversible !</p>
                    </div>
                    <p style=\"font-size:.9rem;color:#475569;\">Vous êtes sur le point de supprimer :</p>
                    <ul style=\"font-size:.9rem;color:#1e293b;background:#fef2f2;border-radius:10px;padding:14px 20px;list-style:disc inside;\">
                        <li><strong>{{ entreprise.nom }}</strong></li>
                        <li>{{ documents|length }} document(s) associé(s)</li>
                    </ul>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-danger\" style=\"border-radius:10px;padding:9px 22px;\">
                        <i class=\"fas fa-trash mr-1\"></i> Supprimer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{# ── AI MODAL ── #}
<div class=\"modal fade\" id=\"aiModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-brain mr-2\"></i>Analyse IA : <span id=\"aiModalTitle\"></span></h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <div class=\"modal-body\" style=\"padding:28px;\">
                <div style=\"text-align:center;margin-bottom:20px;\">
                    <div class=\"h1 font-weight-bold\" id=\"aiModalScore\"></div>
                    <div style=\"color:#64748b;font-size:.85rem;\">Score de Conformité</div>
                </div>
                <ul id=\"aiModalDetails\" class=\"list-group list-group-flush\"></ul>
            </div>
            <div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>

{# ── QR MODAL ── #}
<div class=\"modal fade\" id=\"qrCodeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:linear-gradient(135deg,#5b6aeb,#7c3aed);color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-qrcode mr-2\"></i>Mon QR Code</h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <div class=\"modal-body text-center\" style=\"padding:32px;\">
                {% if qrCode %}
                    <img src=\"{{ qrCode }}\" alt=\"QR Code\" style=\"max-width:200px;border-radius:16px;padding:12px;background:#f8fafc;border:2px solid #e2e8f0;margin-bottom:16px;\">
                {% else %}
                    <div class=\"alert alert-warning\">QR Code indisponible</div>
                {% endif %}
                <p style=\"color:#64748b;font-size:.85rem;margin-bottom:12px;\">Code d'accès de votre entreprise</p>
                <div style=\"background:#f1f5f9;border-radius:12px;padding:12px 20px;display:inline-block;\">
                    <code style=\"font-size:1.3rem;font-weight:800;color:#4338ca;letter-spacing:.1em;\">{{ entreprise.accessCode }}</code>
                </div>
            </div>
            <div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>

{# ── DELETE DOCUMENT MODAL ── #}
<div class=\"modal fade\" id=\"deleteDocModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background:#ef4444;color:#fff;border-radius:20px 20px 0 0;\">
                <h5 class=\"modal-title\"><i class=\"fas fa-trash-alt mr-2\"></i>Supprimer le document</h5>
                <button type=\"button\" class=\"close text-white\" data-bs-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <form id=\"deleteDocForm\" method=\"POST\" action=\"\">
                <div class=\"modal-body\" style=\"padding:24px;text-align:center;\">
                    <div style=\"font-size:42px;color:#ef4444;margin-bottom:12px;\">🗑️</div>
                    <p style=\"font-size:.95rem;color:#1e293b;\">Êtes-vous sûr de vouloir supprimer le document <strong id=\"deleteDocName\"></strong> ?</p>
                    <p style=\"font-size:.82rem;color:#64748b;\">Cette action supprimera également le rapport d'audit associé.</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-danger\" style=\"border-radius:10px;padding:9px 22px;\">Confirmer la suppression</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
@media(max-width:768px){
    .info-section { grid-template-columns:1fr !important; }
    .db-hero h1 { font-size:1.4rem; }
}
</style>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // AI Modal
    document.querySelectorAll('.ai-details-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const nom = this.dataset.nom, score = this.dataset.score;
            let details = [];
            try { details = JSON.parse(this.dataset.details || '[]'); } catch(e) {}
            document.getElementById('aiModalTitle').textContent = nom;
            const scoreEl = document.getElementById('aiModalScore');
            scoreEl.textContent = score + '%';
            scoreEl.className = 'h1 font-weight-bold ' + (score >= 70 ? 'text-success' : (score >= 40 ? 'text-warning' : 'text-danger'));
            const list = document.getElementById('aiModalDetails');
            list.innerHTML = details.length === 0
                ? '<li class=\"list-group-item text-muted\">Aucun détail disponible.</li>'
                : details.map(d => `<li class=\"list-group-item\"><i class=\"fas fa-check text-success mr-2\"></i>\${d}</li>`).join('');
        });
    });

    // Document Delete Modal
    document.querySelectorAll('.delete-doc-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const nom = this.dataset.nom;
            document.getElementById('deleteDocName').textContent = nom;
            document.getElementById('deleteDocForm').action = `/employee/document/delete/\${id}`;
        });
    });
});

function toggleChat() { document.getElementById('chatPanel').classList.toggle('open'); }

function sendChat() {
    const input = document.getElementById('chatInput');
    const body = document.getElementById('chatBody');
    const text = input.value.trim();
    if (!text) return;
    body.innerHTML += `<div class=\"msg-user\">\${text}</div>`;
    input.value = '';
    body.scrollTop = body.scrollHeight;
    const loader = document.createElement('div');
    loader.className = 'msg-bot msg-loader';
    loader.innerHTML = '<i class=\"fas fa-spinner fa-spin mr-1\"></i>Analyse en cours...';
    body.appendChild(loader);
    body.scrollTop = body.scrollHeight;
    fetch('{{ path('api_chatbot_ask') }}', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ question: text, entreprise_id: {{ entreprise.id }} })
    })
    .then(r => r.json())
    .then(data => {
        loader.remove();
        body.innerHTML += `<div class=\"msg-bot\">\${data.response || data.answer || 'Désolé, je n\\'ai pas pu répondre.'}</div>`;
        body.scrollTop = body.scrollHeight;
    })
    .catch(() => {
        loader.remove();
        body.innerHTML += '<div class=\"msg-bot text-danger\">Erreur de connexion.</div>';
        body.scrollTop = body.scrollHeight;
    });
}
</script>
{% endblock %}
", "client/dashboard.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\client\\dashboard.html.twig");
    }
}
