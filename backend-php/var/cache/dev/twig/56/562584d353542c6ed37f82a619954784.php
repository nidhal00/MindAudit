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

/* admin/document/_table.html.twig */
class __TwigTemplate_9eddb9d22c381d179d4d533a21b524ab extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/document/_table.html.twig"));

        // line 1
        yield "<table class=\"table table-bordered table-hover\" id=\"documentTable\" width=\"100%\" cellspacing=\"0\">
    <thead class=\"thead-light\">
        <tr>
            <th>Nom</th>
            <th>Entreprise</th>
            <th>Type</th>
            <th>Note IA</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 14
            yield "        <tr>
            <td class=\"font-weight-bold\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "nom", [], "any", false, false, false, 15), "html", null, true);
            yield "</td>
            <td><span class=\"text-primary\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["document"], "entreprise", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
            yield "</span></td>
            <td><span class=\"badge badge-info\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type", [], "any", false, false, false, 17), "html", null, true);
            yield "</span></td>
            <td>
                ";
            // line 19
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["document"], "noteIA", [], "any", false, false, false, 19))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "                    <div class=\"d-flex align-items-center\">
                        <div class=\"progress flex-grow-1 mr-2\" style=\"height: 10px;\">
                            <div class=\"progress-bar ";
                // line 22
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["document"], "noteIA", [], "any", false, false, false, 22) >= 70)) {
                    yield "bg-success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["document"], "noteIA", [], "any", false, false, false, 22) >= 40)) {
                    yield "bg-warning";
                } else {
                    yield "bg-danger";
                }
                yield "\" 
                                 role=\"progressbar\" 
                                 style=\"width: ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "noteIA", [], "any", false, false, false, 24), "html", null, true);
                yield "%\"></div>
                        </div>
                        <span class=\"small font-weight-bold\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "noteIA", [], "any", false, false, false, 26), "html", null, true);
                yield "%</span>
                    </div>
                ";
            } else {
                // line 29
                yield "                    <span class=\"text-muted italic small\">Non analysé</span>
                ";
            }
            // line 31
            yield "            </td>
            <td>
                <span class=\"badge badge-";
            // line 33
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["document"], "statut", [], "any", false, false, false, 33) == "valide")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["document"], "statut", [], "any", false, false, false, 33) == "rejete")) ? ("danger") : ("warning"))));
            yield "\">
                    ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["document"], "statut", [], "any", false, false, false, 34)), "html", null, true);
            yield "
                </span>
            </td>
            <td>
                <div class=\"d-flex gap-1\">
                    <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-circle btn-sm\" title=\"Voir\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <form method=\"post\" action=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce document ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 43))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-danger btn-circle btn-sm\" title=\"Supprimer\">
                            <i class=\"fas fa-trash\"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 52
            yield "        <tr>
            <td colspan=\"6\" class=\"text-center py-4 text-muted font-italic\">Aucun document trouvé</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['document'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "    </tbody>
</table>

<div class=\"navigation d-flex justify-content-between align-items-center mt-4 p-3 bg-light rounded shadow-sm\">
    <div class=\"text-muted small\">
        Affichage de <strong>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 61, $this->source); })())), "html", null, true);
        yield "</strong> documents sur cette page (Total: <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 61, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 61), "html", null, true);
        yield "</strong>)
    </div>
    <div class=\"knp-pagination-modern\">
        ";
        // line 64
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 64, $this->source); })()));
        yield "
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
        return "admin/document/_table.html.twig";
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
        return array (  177 => 64,  169 => 61,  162 => 56,  153 => 52,  151 => 51,  138 => 43,  134 => 42,  128 => 39,  120 => 34,  116 => 33,  112 => 31,  108 => 29,  102 => 26,  97 => 24,  86 => 22,  82 => 20,  80 => 19,  75 => 17,  71 => 16,  67 => 15,  64 => 14,  59 => 13,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-bordered table-hover\" id=\"documentTable\" width=\"100%\" cellspacing=\"0\">
    <thead class=\"thead-light\">
        <tr>
            <th>Nom</th>
            <th>Entreprise</th>
            <th>Type</th>
            <th>Note IA</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for document in documents %}
        <tr>
            <td class=\"font-weight-bold\">{{ document.nom }}</td>
            <td><span class=\"text-primary\">{{ document.entreprise.nom }}</span></td>
            <td><span class=\"badge badge-info\">{{ document.type }}</span></td>
            <td>
                {% if document.noteIA is not null %}
                    <div class=\"d-flex align-items-center\">
                        <div class=\"progress flex-grow-1 mr-2\" style=\"height: 10px;\">
                            <div class=\"progress-bar {% if document.noteIA >= 70 %}bg-success{% elseif document.noteIA >= 40 %}bg-warning{% else %}bg-danger{% endif %}\" 
                                 role=\"progressbar\" 
                                 style=\"width: {{ document.noteIA }}%\"></div>
                        </div>
                        <span class=\"small font-weight-bold\">{{ document.noteIA }}%</span>
                    </div>
                {% else %}
                    <span class=\"text-muted italic small\">Non analysé</span>
                {% endif %}
            </td>
            <td>
                <span class=\"badge badge-{{ document.statut == 'valide' ? 'success' : (document.statut == 'rejete' ? 'danger' : 'warning') }}\">
                    {{ document.statut|capitalize }}
                </span>
            </td>
            <td>
                <div class=\"d-flex gap-1\">
                    <a href=\"{{ path('app_document_show', {id: document.id}) }}\" class=\"btn btn-info btn-circle btn-sm\" title=\"Voir\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <form method=\"post\" action=\"{{ path('app_document_delete', {id: document.id}) }}\" onsubmit=\"return confirm('Supprimer ce document ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ document.id) }}\">
                        <button class=\"btn btn-danger btn-circle btn-sm\" title=\"Supprimer\">
                            <i class=\"fas fa-trash\"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"6\" class=\"text-center py-4 text-muted font-italic\">Aucun document trouvé</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<div class=\"navigation d-flex justify-content-between align-items-center mt-4 p-3 bg-light rounded shadow-sm\">
    <div class=\"text-muted small\">
        Affichage de <strong>{{ documents|length }}</strong> documents sur cette page (Total: <strong>{{ documents.getTotalItemCount }}</strong>)
    </div>
    <div class=\"knp-pagination-modern\">
        {{ knp_pagination_render(documents) }}
    </div>
</div>
", "admin/document/_table.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\document\\_table.html.twig");
    }
}
