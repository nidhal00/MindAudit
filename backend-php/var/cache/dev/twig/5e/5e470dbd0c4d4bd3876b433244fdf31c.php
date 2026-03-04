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

/* admin/index.html.twig */
class __TwigTemplate_fb85a4d3b7c48082a2940d14c7f12a84 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

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

        yield "Tableau de Bord - MindAudit Admin";
        
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
        yield "<!-- Page Heading -->
<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">Tableau de Bord</h1>
    <div class=\"d-flex gap-2\">
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_export_pdf");
        yield "\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
            <i class=\"fas fa-download fa-sm text-white-50\"></i> Générer Rapport PDF
        </a>
        <button id=\"aiReportBtn\" class=\"d-none d-sm-inline-block btn btn-sm btn-success shadow-sm\" style=\"margin-left:8px;\">
            <i class=\"fas fa-robot fa-sm text-white-50\"></i> Rapport IA Global
        </button>
    </div>
</div>

<!-- AI Report Modal -->
<div class=\"modal fade\" id=\"aiReportModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-robot mr-2\"></i> Rapport IA Global — MindAudit</h5>
                <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <div class=\"modal-body\" id=\"aiReportContent\">
                <div class=\"text-center py-5\">
                    <i class=\"fas fa-spinner fa-spin fa-3x text-success mb-3\"></i>
                    <p class=\"text-muted\">L'IA analyse votre portefeuille... Veuillez patienter.</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class=\"row\">

    <!-- Total Entreprises Card -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Entreprises Inscrites</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_entreprises"]) || array_key_exists("total_entreprises", $context) ? $context["total_entreprises"] : (function () { throw new RuntimeError('Variable "total_entreprises" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-building fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Documents Card -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-success shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                            Documents Analysés</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_documents"]) || array_key_exists("total_documents", $context) ? $context["total_documents"] : (function () { throw new RuntimeError('Variable "total_documents" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-file-alt fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-warning shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                            En Attente</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_pending"]) || array_key_exists("total_pending", $context) ? $context["total_pending"] : (function () { throw new RuntimeError('Variable "total_pending" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Avg Score Card -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-info shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Confiance IA Moyenne
                        </div>
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col-auto\">
                                <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg_ia_score"]) || array_key_exists("avg_ia_score", $context) ? $context["avg_ia_score"] : (function () { throw new RuntimeError('Variable "avg_ia_score" does not exist.', 107, $this->source); })()), "html", null, true);
        yield "%</div>
                            </div>
                            <div class=\"col\">
                                <div class=\"progress progress-sm mr-2\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                        style=\"width: ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg_ia_score"]) || array_key_exists("avg_ia_score", $context) ? $context["avg_ia_score"] : (function () { throw new RuntimeError('Variable "avg_ia_score" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "%\" aria-valuenow=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg_ia_score"]) || array_key_exists("avg_ia_score", $context) ? $context["avg_ia_score"] : (function () { throw new RuntimeError('Variable "avg_ia_score" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "\" aria-valuemin=\"0\"
                                        aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class=\"row\">

    <!-- Last Entreprises -->
    <div class=\"col-lg-6 mb-4\">
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Dernières Inscriptions</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_entreprises"]) || array_key_exists("recent_entreprises", $context) ? $context["recent_entreprises"] : (function () { throw new RuntimeError('Variable "recent_entreprises" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 148
            yield "                            <tr>
                                <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "nom", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                                <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "email", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                                <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "dateCreation", [], "any", false, false, false, 151), "d/m/Y"), "html", null, true);
            yield "</td>
                            </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 153
        if (!$context['_iterated']) {
            // line 154
            yield "                            <tr><td colspan=\"3\">Aucune entreprise trouvée</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entreprise'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Last Documents -->
    <div class=\"col-lg-6 mb-4\">
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Derniers Documents</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Score IA</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_documents"]) || array_key_exists("recent_documents", $context) ? $context["recent_documents"] : (function () { throw new RuntimeError('Variable "recent_documents" does not exist.', 180, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 181
            yield "                            <tr>
                                <td>";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "nom", [], "any", false, false, false, 182), "html", null, true);
            yield "</td>
                                <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "type", [], "any", false, false, false, 183), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 185
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 185))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 186
                yield "                                        <span class=\"badge badge-";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 186) >= 80)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 186) >= 50)) ? ("warning") : ("danger"))));
                yield "\">
                                            ";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "noteIA", [], "any", false, false, false, 187), "html", null, true);
                yield "%
                                        </span>
                                    ";
            } else {
                // line 190
                yield "                                        <span class=\"badge badge-secondary\">N/A</span>
                                    ";
            }
            // line 192
            yield "                                </td>
                            </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 194
        if (!$context['_iterated']) {
            // line 195
            yield "                             <tr><td colspan=\"3\">Aucun document trouvé</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['doc'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class=\"row\">

    <!-- Area Chart -->
    <div class=\"col-xl-8 col-lg-7\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Répartition des Documents par Statut</h6>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-area\">
                    <canvas id=\"myAreaChart\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class=\"col-xl-4 col-lg-5\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Entreprises par Secteur</h6>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-pie pt-4 pb-2\">
                    <canvas id=\"myPieChart\"></canvas>
                </div>
                <div class=\"mt-4 text-center small\" id=\"pie-legend\">
                    ";
        // line 237
        $context["chart_colors"] = ["#4e73df", "#1cc88a", "#36b9cc", "#f6c23e", "#e74a3b", "#858796", "#5a5c69"];
        // line 238
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sector_stats"]) || array_key_exists("sector_stats", $context) ? $context["sector_stats"] : (function () { throw new RuntimeError('Variable "sector_stats" does not exist.', 238, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 239
            yield "                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle\" style=\"color: ";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chart_colors"]) || array_key_exists("chart_colors", $context) ? $context["chart_colors"] : (function () { throw new RuntimeError('Variable "chart_colors" does not exist.', 240, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 240) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["chart_colors"]) || array_key_exists("chart_colors", $context) ? $context["chart_colors"] : (function () { throw new RuntimeError('Variable "chart_colors" does not exist.', 240, $this->source); })()))), [], "array", false, false, false, 240), "html", null, true);
            yield ";\"></i>
                        ";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "secteur", [], "any", true, true, false, 241)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "secteur", [], "any", false, false, false, 241), "Autre")) : ("Autre")), "html", null, true);
            yield "
                    </span>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        yield "                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 252
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 253
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Page level plugins -->
    <script src=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/sb-admin-2/vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Page level custom scripts -->
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Example
        var ctx = document.getElementById(\"myPieChart\");
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sector_stats"]) || array_key_exists("sector_stats", $context) ? $context["sector_stats"] : (function () { throw new RuntimeError('Variable "sector_stats" does not exist.', 268, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "secteur", [], "any", true, true, false, 268)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "secteur", [], "any", false, false, false, 268), "Autre")) : ("Autre")), "html", null, true);
            yield "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                datasets: [{
                    data: [";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sector_stats"]) || array_key_exists("sector_stats", $context) ? $context["sector_stats"] : (function () { throw new RuntimeError('Variable "sector_stats" does not exist.', 270, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 270), "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796', '#5a5c69'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#dda20a', '#be2617', '#60616f', '#373840'],
                    hoverBorderColor: \"rgba(234, 236, 244, 1)\",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: \"rgb(255,255,255)\",
                    bodyFontColor: \"#858796\",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });

        // Bar Chart (Documents by Status)
        var ctxBar = document.getElementById(\"myAreaChart\");
        var myBarChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: [";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["status_stats"]) || array_key_exists("status_stats", $context) ? $context["status_stats"] : (function () { throw new RuntimeError('Variable "status_stats" does not exist.', 300, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "statut", [], "any", true, true, false, 300)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "statut", [], "any", false, false, false, 300), "Inconnu")) : ("Inconnu"))), "html", null, true);
            yield "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                datasets: [{
                    label: \"Nombre de documents\",
                    backgroundColor: \"#4e73df\",
                    hoverBackgroundColor: \"#2e59d9\",
                    borderColor: \"#4e73df\",
                    data: [";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["status_stats"]) || array_key_exists("status_stats", $context) ? $context["status_stats"] : (function () { throw new RuntimeError('Variable "status_stats" does not exist.', 306, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 306), "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        },
                        maxBarThickness: 25,
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            maxTicksLimit: 5,
                            padding: 10,
                        },
                        gridLines: {
                            color: \"rgb(234, 236, 244)\",
                            zeroLineColor: \"rgb(234, 236, 244)\",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    backgroundColor: \"rgb(255,255,255)\",
                    bodyFontColor: \"#858796\",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
            }
        });
    </script>
    <script>
        document.getElementById('aiReportBtn').addEventListener('click', function() {
            // Réinitialiser le contenu du loader
            document.getElementById('aiReportContent').innerHTML = `
                <div class=\"text-center py-5\">
                    <i class=\"fas fa-spinner fa-spin fa-3x text-success mb-3\"></i>
                    <p class=\"text-muted\">L'IA analyse votre portefeuille... Veuillez patienter (10-20 secondes).</p>
                </div>`;

            // Bootstrap 4 (jQuery) - SB Admin 2
            \$('#aiReportModal').modal('show');

            fetch('";
        // line 376
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_rapport_generer");
        yield "')
                .then(r => r.json())
                .then(data => {
                    document.getElementById('aiReportContent').innerHTML =
                        `<div class=\"small text-muted mb-3\"><i class=\"fas fa-clock mr-1\"></i>Généré le \${data.date}</div>` +
                        data.report;
                })
                .catch(err => {
                    document.getElementById('aiReportContent').innerHTML =
                        '<p class=\"text-danger\"><i class=\"fas fa-exclamation-triangle mr-1\"></i>Erreur lors de la génération du rapport. Vérifiez la connexion au serveur.</p>';
                    console.error('AI Report error:', err);
                });
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
        return "admin/index.html.twig";
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
        return array (  642 => 376,  561 => 306,  543 => 300,  502 => 270,  488 => 268,  472 => 255,  466 => 253,  456 => 252,  442 => 244,  425 => 241,  421 => 240,  418 => 239,  400 => 238,  398 => 237,  356 => 197,  349 => 195,  347 => 194,  341 => 192,  337 => 190,  331 => 187,  326 => 186,  324 => 185,  319 => 183,  315 => 182,  312 => 181,  307 => 180,  281 => 156,  274 => 154,  272 => 153,  265 => 151,  261 => 150,  257 => 149,  254 => 148,  249 => 147,  209 => 112,  201 => 107,  178 => 87,  157 => 69,  136 => 51,  92 => 10,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Tableau de Bord - MindAudit Admin{% endblock %}

{% block body %}
<!-- Page Heading -->
<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">Tableau de Bord</h1>
    <div class=\"d-flex gap-2\">
        <a href=\"{{ path('app_admin_export_pdf') }}\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
            <i class=\"fas fa-download fa-sm text-white-50\"></i> Générer Rapport PDF
        </a>
        <button id=\"aiReportBtn\" class=\"d-none d-sm-inline-block btn btn-sm btn-success shadow-sm\" style=\"margin-left:8px;\">
            <i class=\"fas fa-robot fa-sm text-white-50\"></i> Rapport IA Global
        </button>
    </div>
</div>

<!-- AI Report Modal -->
<div class=\"modal fade\" id=\"aiReportModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-robot mr-2\"></i> Rapport IA Global — MindAudit</h5>
                <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\"><span>&times;</span></button>
            </div>
            <div class=\"modal-body\" id=\"aiReportContent\">
                <div class=\"text-center py-5\">
                    <i class=\"fas fa-spinner fa-spin fa-3x text-success mb-3\"></i>
                    <p class=\"text-muted\">L'IA analyse votre portefeuille... Veuillez patienter.</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class=\"row\">

    <!-- Total Entreprises Card -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Entreprises Inscrites</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ total_entreprises }}</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-building fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Documents Card -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-success shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                            Documents Analysés</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ total_documents }}</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-file-alt fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-warning shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                            En Attente</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ total_pending }}</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Avg Score Card -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-info shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Confiance IA Moyenne
                        </div>
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col-auto\">
                                <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{ avg_ia_score }}%</div>
                            </div>
                            <div class=\"col\">
                                <div class=\"progress progress-sm mr-2\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                        style=\"width: {{ avg_ia_score }}%\" aria-valuenow=\"{{ avg_ia_score }}\" aria-valuemin=\"0\"
                                        aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class=\"row\">

    <!-- Last Entreprises -->
    <div class=\"col-lg-6 mb-4\">
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Dernières Inscriptions</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for entreprise in recent_entreprises %}
                            <tr>
                                <td>{{ entreprise.nom }}</td>
                                <td>{{ entreprise.email }}</td>
                                <td>{{ entreprise.dateCreation|date('d/m/Y') }}</td>
                            </tr>
                            {% else %}
                            <tr><td colspan=\"3\">Aucune entreprise trouvée</td></tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Last Documents -->
    <div class=\"col-lg-6 mb-4\">
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Derniers Documents</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Score IA</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for doc in recent_documents %}
                            <tr>
                                <td>{{ doc.nom }}</td>
                                <td>{{ doc.type }}</td>
                                <td>
                                    {% if doc.noteIA is not null %}
                                        <span class=\"badge badge-{{ doc.noteIA >= 80 ? 'success' : (doc.noteIA >= 50 ? 'warning' : 'danger') }}\">
                                            {{ doc.noteIA }}%
                                        </span>
                                    {% else %}
                                        <span class=\"badge badge-secondary\">N/A</span>
                                    {% endif %}
                                </td>
                            </tr>
                            {% else %}
                             <tr><td colspan=\"3\">Aucun document trouvé</td></tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class=\"row\">

    <!-- Area Chart -->
    <div class=\"col-xl-8 col-lg-7\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Répartition des Documents par Statut</h6>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-area\">
                    <canvas id=\"myAreaChart\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class=\"col-xl-4 col-lg-5\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Entreprises par Secteur</h6>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-pie pt-4 pb-2\">
                    <canvas id=\"myPieChart\"></canvas>
                </div>
                <div class=\"mt-4 text-center small\" id=\"pie-legend\">
                    {% set chart_colors = ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796', '#5a5c69'] %}
                    {% for stat in sector_stats %}
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle\" style=\"color: {{ chart_colors[loop.index0 % chart_colors|length] }};\"></i>
                        {{ stat.secteur|default('Autre') }}
                    </span>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Page level plugins -->
    <script src=\"{{ asset('assets/sb-admin-2/vendor/chart.js/Chart.min.js') }}\"></script>

    <!-- Page level custom scripts -->
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Example
        var ctx = document.getElementById(\"myPieChart\");
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [{% for stat in sector_stats %}\"{{ stat.secteur|default('Autre') }}\",{% endfor %}],
                datasets: [{
                    data: [{% for stat in sector_stats %}{{ stat.count }},{% endfor %}],
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796', '#5a5c69'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#dda20a', '#be2617', '#60616f', '#373840'],
                    hoverBorderColor: \"rgba(234, 236, 244, 1)\",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: \"rgb(255,255,255)\",
                    bodyFontColor: \"#858796\",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });

        // Bar Chart (Documents by Status)
        var ctxBar = document.getElementById(\"myAreaChart\");
        var myBarChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: [{% for stat in status_stats %}\"{{ stat.statut|default('Inconnu')|capitalize }}\",{% endfor %}],
                datasets: [{
                    label: \"Nombre de documents\",
                    backgroundColor: \"#4e73df\",
                    hoverBackgroundColor: \"#2e59d9\",
                    borderColor: \"#4e73df\",
                    data: [{% for stat in status_stats %}{{ stat.count }},{% endfor %}],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        },
                        maxBarThickness: 25,
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            maxTicksLimit: 5,
                            padding: 10,
                        },
                        gridLines: {
                            color: \"rgb(234, 236, 244)\",
                            zeroLineColor: \"rgb(234, 236, 244)\",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    backgroundColor: \"rgb(255,255,255)\",
                    bodyFontColor: \"#858796\",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
            }
        });
    </script>
    <script>
        document.getElementById('aiReportBtn').addEventListener('click', function() {
            // Réinitialiser le contenu du loader
            document.getElementById('aiReportContent').innerHTML = `
                <div class=\"text-center py-5\">
                    <i class=\"fas fa-spinner fa-spin fa-3x text-success mb-3\"></i>
                    <p class=\"text-muted\">L'IA analyse votre portefeuille... Veuillez patienter (10-20 secondes).</p>
                </div>`;

            // Bootstrap 4 (jQuery) - SB Admin 2
            \$('#aiReportModal').modal('show');

            fetch('{{ path('api_rapport_generer') }}')
                .then(r => r.json())
                .then(data => {
                    document.getElementById('aiReportContent').innerHTML =
                        `<div class=\"small text-muted mb-3\"><i class=\"fas fa-clock mr-1\"></i>Généré le \${data.date}</div>` +
                        data.report;
                })
                .catch(err => {
                    document.getElementById('aiReportContent').innerHTML =
                        '<p class=\"text-danger\"><i class=\"fas fa-exclamation-triangle mr-1\"></i>Erreur lors de la génération du rapport. Vérifiez la connexion au serveur.</p>';
                    console.error('AI Report error:', err);
                });
        });
    </script>
{% endblock %}
", "admin/index.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\index.html.twig");
    }
}
