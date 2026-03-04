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

/* admin/document/index.html.twig */
class __TwigTemplate_92029335a026da53ca9c3b9eb6c6f20f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/document/index.html.twig"));

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

        yield "Documents";
        
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
        yield "    <!-- Page Heading -->
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Gestion des Documents</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_export_documents");
        yield "\" class=\"d-none d-sm-inline-block btn btn-sm btn-success shadow-sm\" title=\"Exporter en CSV (Excel)\">
            <i class=\"fas fa-file-excel fa-sm text-white-50\"></i> Export CSV
        </a>
    </div>

    <!-- Search Form -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Filtres de recherche</h6>
            <div class=\"d-flex align-items-center\">
                <label for=\"limitSelector\" class=\"mr-2 mb-0 small\">Afficher :</label>
                <select id=\"limitSelector\" class=\"form-control form-control-sm\" style=\"width: auto;\">
                    <option value=\"3\" ";
        // line 21
        yield ((((isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 21, $this->source); })()) == 3)) ? ("selected") : (""));
        yield ">3</option>
                    <option value=\"5\" ";
        // line 22
        yield ((((isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 22, $this->source); })()) == 5)) ? ("selected") : (""));
        yield ">5</option>
                    <option value=\"10\" ";
        // line 23
        yield (((((isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 23, $this->source); })()) == 10) ||  !array_key_exists("currentLimit", $context))) ? ("selected") : (""));
        yield ">10</option>
                    <option value=\"25\" ";
        // line 24
        yield ((((isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 24, $this->source); })()) == 25)) ? ("selected") : (""));
        yield ">25</option>
                    <option value=\"50\" ";
        // line 25
        yield ((((isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 25, $this->source); })()) == 50)) ? ("selected") : (""));
        yield ">50</option>
                </select>
            </div>
        </div>
        <div class=\"card-body\">
            <form id=\"searchForm\" class=\"form-row\">
                <input type=\"hidden\" name=\"limit\" id=\"hiddenLimit\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("currentLimit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 31, $this->source); })()), 10)) : (10)), "html", null, true);
        yield "\">
                <div class=\"col-md-3 mb-2\">
                    <input type=\"text\" id=\"Nom\" name=\"nom\" class=\"form-control\" placeholder=\"Nom du document...\">
                </div>
                <div class=\"col-md-3 mb-2\">
                    <input type=\"text\" id=\"Entreprise\" name=\"entreprise\" class=\"form-control\" placeholder=\"Entreprise...\">
                </div>
                <div class=\"col-md-2 mb-2\">
                     <select id=\"Type\" name=\"type\" class=\"form-control\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"ISO\">ISO</option>
                        <option value=\"fiscal\">Fiscal</option>
                        <option value=\"RH\">RH</option>
                        <option value=\"financier\">Financier</option>
                    </select>
                </div>
                <div class=\"col-md-2 mb-2\">
                    <select id=\"Statut\" name=\"statut\" class=\"form-control\">
                        <option value=\"\">Tous statuts</option>
                        <option value=\"en_attente\">En attente</option>
                        <option value=\"valide\">Validé</option>
                        <option value=\"rejete\">Rejeté</option>
                    </select>
                </div>
                <div class=\"col-md-2 mb-2\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"fas fa-star\"></i></span></div>
                        <input type=\"number\" id=\"ScoreMin\" name=\"scoreMin\" class=\"form-control\" placeholder=\"Score min %\" min=\"0\" max=\"100\">
                    </div>
                </div>
                <div class=\"col-md-2 mb-2\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">à</span></div>
                        <input type=\"number\" id=\"ScoreMax\" name=\"scoreMax\" class=\"form-control\" placeholder=\"Score max %\" min=\"0\" max=\"100\">
                    </div>
                </div>
                <div class=\"col-md-2 mb-2\">
                    <button type=\"button\" id=\"resetBtn\" class=\"btn btn-secondary btn-block\" title=\"Réinitialiser\">
                        <i class=\"fas fa-undo\"></i> Reset
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Bibliothèque de fichiers</h6>
            <div id=\"loadingSpinner\" style=\"display: none;\" class=\"text-primary\">
                <i class=\"fas fa-spinner fa-spin\"></i> Chargement...
            </div>
        </div>
        <div class=\"card-body\">
            <div id=\"resultsContainer\" class=\"table-responsive\">
                ";
        // line 86
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/document/_table.html.twig");
        yield "
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('searchForm');
            const inputs = form.querySelectorAll('input, select');
            const container = document.getElementById('resultsContainer');
            const spinner = document.getElementById('loadingSpinner');
            const resetBtn = document.getElementById('resetBtn');
            const limitSelector = document.getElementById('limitSelector');
            const hiddenLimit = document.getElementById('hiddenLimit');

            function performSearch(url = null) {
                spinner.style.display = 'block';
                
                let fetchUrl;
                if (url) {
                    const urlObj = new URL(url);
                    urlObj.searchParams.set('limit', limitSelector.value);
                    fetchUrl = urlObj.toString();
                } else {
                    const params = new URLSearchParams(new FormData(form));
                    params.set('limit', limitSelector.value);
                    fetchUrl = `";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_search");
        yield "?\${params.toString()}`;
                }
                
                fetch(fetchUrl, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => response.text())
                .then(html => {
                    container.innerHTML = html;
                    spinner.style.display = 'none';
                    attachPaginationHandlers();
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    spinner.style.display = 'none';
                });
            }

            function attachPaginationHandlers() {
                container.querySelectorAll('.pagination a').forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        performSearch(this.href);
                    });
                });
            }

            limitSelector.addEventListener('change', function() {
                hiddenLimit.value = this.value;
                performSearch();
            });

            let timeout = null;
            inputs.forEach(input => {
                input.addEventListener('input', () => {
                    clearTimeout(timeout);
                    timeout = setTimeout(performSearch, 300);
                });
            });

            resetBtn.addEventListener('click', () => {
                form.reset();
                limitSelector.value = 10;
                hiddenLimit.value = 10;
                performSearch();
            });

            attachPaginationHandlers();
        });
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
        return "admin/document/index.html.twig";
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
        return array (  217 => 112,  188 => 86,  130 => 31,  121 => 25,  117 => 24,  113 => 23,  109 => 22,  105 => 21,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Documents{% endblock %}

{% block body %}
    <!-- Page Heading -->
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Gestion des Documents</h1>
        <a href=\"{{ path('app_export_documents') }}\" class=\"d-none d-sm-inline-block btn btn-sm btn-success shadow-sm\" title=\"Exporter en CSV (Excel)\">
            <i class=\"fas fa-file-excel fa-sm text-white-50\"></i> Export CSV
        </a>
    </div>

    <!-- Search Form -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Filtres de recherche</h6>
            <div class=\"d-flex align-items-center\">
                <label for=\"limitSelector\" class=\"mr-2 mb-0 small\">Afficher :</label>
                <select id=\"limitSelector\" class=\"form-control form-control-sm\" style=\"width: auto;\">
                    <option value=\"3\" {{ currentLimit == 3 ? 'selected' : '' }}>3</option>
                    <option value=\"5\" {{ currentLimit == 5 ? 'selected' : '' }}>5</option>
                    <option value=\"10\" {{ currentLimit == 10 or currentLimit is not defined ? 'selected' : '' }}>10</option>
                    <option value=\"25\" {{ currentLimit == 25 ? 'selected' : '' }}>25</option>
                    <option value=\"50\" {{ currentLimit == 50 ? 'selected' : '' }}>50</option>
                </select>
            </div>
        </div>
        <div class=\"card-body\">
            <form id=\"searchForm\" class=\"form-row\">
                <input type=\"hidden\" name=\"limit\" id=\"hiddenLimit\" value=\"{{ currentLimit|default(10) }}\">
                <div class=\"col-md-3 mb-2\">
                    <input type=\"text\" id=\"Nom\" name=\"nom\" class=\"form-control\" placeholder=\"Nom du document...\">
                </div>
                <div class=\"col-md-3 mb-2\">
                    <input type=\"text\" id=\"Entreprise\" name=\"entreprise\" class=\"form-control\" placeholder=\"Entreprise...\">
                </div>
                <div class=\"col-md-2 mb-2\">
                     <select id=\"Type\" name=\"type\" class=\"form-control\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"ISO\">ISO</option>
                        <option value=\"fiscal\">Fiscal</option>
                        <option value=\"RH\">RH</option>
                        <option value=\"financier\">Financier</option>
                    </select>
                </div>
                <div class=\"col-md-2 mb-2\">
                    <select id=\"Statut\" name=\"statut\" class=\"form-control\">
                        <option value=\"\">Tous statuts</option>
                        <option value=\"en_attente\">En attente</option>
                        <option value=\"valide\">Validé</option>
                        <option value=\"rejete\">Rejeté</option>
                    </select>
                </div>
                <div class=\"col-md-2 mb-2\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"fas fa-star\"></i></span></div>
                        <input type=\"number\" id=\"ScoreMin\" name=\"scoreMin\" class=\"form-control\" placeholder=\"Score min %\" min=\"0\" max=\"100\">
                    </div>
                </div>
                <div class=\"col-md-2 mb-2\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">à</span></div>
                        <input type=\"number\" id=\"ScoreMax\" name=\"scoreMax\" class=\"form-control\" placeholder=\"Score max %\" min=\"0\" max=\"100\">
                    </div>
                </div>
                <div class=\"col-md-2 mb-2\">
                    <button type=\"button\" id=\"resetBtn\" class=\"btn btn-secondary btn-block\" title=\"Réinitialiser\">
                        <i class=\"fas fa-undo\"></i> Reset
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Bibliothèque de fichiers</h6>
            <div id=\"loadingSpinner\" style=\"display: none;\" class=\"text-primary\">
                <i class=\"fas fa-spinner fa-spin\"></i> Chargement...
            </div>
        </div>
        <div class=\"card-body\">
            <div id=\"resultsContainer\" class=\"table-responsive\">
                {{ include('admin/document/_table.html.twig') }}
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('searchForm');
            const inputs = form.querySelectorAll('input, select');
            const container = document.getElementById('resultsContainer');
            const spinner = document.getElementById('loadingSpinner');
            const resetBtn = document.getElementById('resetBtn');
            const limitSelector = document.getElementById('limitSelector');
            const hiddenLimit = document.getElementById('hiddenLimit');

            function performSearch(url = null) {
                spinner.style.display = 'block';
                
                let fetchUrl;
                if (url) {
                    const urlObj = new URL(url);
                    urlObj.searchParams.set('limit', limitSelector.value);
                    fetchUrl = urlObj.toString();
                } else {
                    const params = new URLSearchParams(new FormData(form));
                    params.set('limit', limitSelector.value);
                    fetchUrl = `{{ path('app_document_search') }}?\${params.toString()}`;
                }
                
                fetch(fetchUrl, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => response.text())
                .then(html => {
                    container.innerHTML = html;
                    spinner.style.display = 'none';
                    attachPaginationHandlers();
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    spinner.style.display = 'none';
                });
            }

            function attachPaginationHandlers() {
                container.querySelectorAll('.pagination a').forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        performSearch(this.href);
                    });
                });
            }

            limitSelector.addEventListener('change', function() {
                hiddenLimit.value = this.value;
                performSearch();
            });

            let timeout = null;
            inputs.forEach(input => {
                input.addEventListener('input', () => {
                    clearTimeout(timeout);
                    timeout = setTimeout(performSearch, 300);
                });
            });

            resetBtn.addEventListener('click', () => {
                form.reset();
                limitSelector.value = 10;
                hiddenLimit.value = 10;
                performSearch();
            });

            attachPaginationHandlers();
        });
    </script>
{% endblock %}

", "admin/document/index.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\document\\index.html.twig");
    }
}
