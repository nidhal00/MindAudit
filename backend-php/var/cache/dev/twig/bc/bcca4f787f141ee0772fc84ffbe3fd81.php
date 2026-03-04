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

/* admin/entreprise/_table.html.twig */
class __TwigTemplate_e3a9296a28eaccec5c3dc746c445e2d7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/entreprise/_table.html.twig"));

        // line 1
        yield "<table class=\"table table-bordered table-hover\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
    <thead class=\"thead-light\">
        <tr>
            <th class=\"sortable-header\" data-sort=\"nom\">Nom <i class=\"fas fa-sort-alpha-down small text-muted\"></i></th>
            <th class=\"sortable-header\" data-sort=\"secteur\">Secteur</th>
            <th class=\"sortable-header\" data-sort=\"taille\">Taille</th>
            <th class=\"sortable-header\" data-sort=\"pays\">Pays</th>
            <th class=\"sortable-header\" data-sort=\"statut\">Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entreprises"]) || array_key_exists("entreprises", $context) ? $context["entreprises"] : (function () { throw new RuntimeError('Variable "entreprises" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 14
            yield "        <tr>
            <td class=\"font-weight-bold text-gray-800\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "nom", [], "any", false, false, false, 15), "html", null, true);
            yield "</td>
            <td>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "secteur", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 18
            $context["sizeBadge"] = "secondary";
            // line 19
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "taille", [], "any", false, false, false, 19) == "large")) {
                $context["sizeBadge"] = "primary";
                // line 20
                yield "                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "taille", [], "any", false, false, false, 20) == "medium")) {
                $context["sizeBadge"] = "info";
            }
            // line 21
            yield "                <span class=\"badge badge-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sizeBadge"]) || array_key_exists("sizeBadge", $context) ? $context["sizeBadge"] : (function () { throw new RuntimeError('Variable "sizeBadge" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "taille", [], "any", false, false, false, 21)), "html", null, true);
            yield "</span>
            </td>
            <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "pays", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
            <td>
                <span class=\"badge badge-";
            // line 25
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "statut", [], "any", false, false, false, 25) == "valide")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "statut", [], "any", false, false, false, 25) == "rejete")) ? ("danger") : ("warning"))));
            yield "\">
                    ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "statut", [], "any", false, false, false, 26), ["_" => " "])), "html", null, true);
            yield "
                </span>
            </td>
            <td>
                <div class=\"d-flex gap-1\">
                    <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-circle btn-sm\" title=\"Voir\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-circle btn-sm\" title=\"Modifier\">
                        <i class=\"fas fa-edit\"></i>
                    </a>
                    ";
            // line 37
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/entreprise/_delete_form.html.twig");
            yield "
                </div>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "        <tr>
            <td colspan=\"6\" class=\"text-center py-4 text-muted\">
                <i class=\"fas fa-search fa-2x mb-3 d-block\"></i>
                Aucune entreprise trouvée
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entreprise'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    </tbody>
</table>

<div class=\"navigation d-flex justify-content-between align-items-center mt-4 p-3 bg-light rounded shadow-sm\">
    <div class=\"text-muted small\">
        Affichage de <strong>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entreprises"]) || array_key_exists("entreprises", $context) ? $context["entreprises"] : (function () { throw new RuntimeError('Variable "entreprises" does not exist.', 54, $this->source); })())), "html", null, true);
        yield "</strong> entreprises sur cette page (Total: <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprises"]) || array_key_exists("entreprises", $context) ? $context["entreprises"] : (function () { throw new RuntimeError('Variable "entreprises" does not exist.', 54, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 54), "html", null, true);
        yield "</strong>)
    </div>
    <div class=\"knp-pagination-modern\">
        ";
        // line 57
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["entreprises"]) || array_key_exists("entreprises", $context) ? $context["entreprises"] : (function () { throw new RuntimeError('Variable "entreprises" does not exist.', 57, $this->source); })()));
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
        return "admin/entreprise/_table.html.twig";
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
        return array (  183 => 57,  175 => 54,  168 => 49,  156 => 42,  154 => 41,  137 => 37,  131 => 34,  125 => 31,  117 => 26,  113 => 25,  108 => 23,  100 => 21,  95 => 20,  91 => 19,  89 => 18,  84 => 16,  80 => 15,  77 => 14,  59 => 13,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-bordered table-hover\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
    <thead class=\"thead-light\">
        <tr>
            <th class=\"sortable-header\" data-sort=\"nom\">Nom <i class=\"fas fa-sort-alpha-down small text-muted\"></i></th>
            <th class=\"sortable-header\" data-sort=\"secteur\">Secteur</th>
            <th class=\"sortable-header\" data-sort=\"taille\">Taille</th>
            <th class=\"sortable-header\" data-sort=\"pays\">Pays</th>
            <th class=\"sortable-header\" data-sort=\"statut\">Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for entreprise in entreprises %}
        <tr>
            <td class=\"font-weight-bold text-gray-800\">{{ entreprise.nom }}</td>
            <td>{{ entreprise.secteur }}</td>
            <td>
                {% set sizeBadge = 'secondary' %}
                {% if entreprise.taille == 'large' %}{% set sizeBadge = 'primary' %}
                {% elseif entreprise.taille == 'medium' %}{% set sizeBadge = 'info' %}{% endif %}
                <span class=\"badge badge-{{ sizeBadge }}\">{{ entreprise.taille|capitalize }}</span>
            </td>
            <td>{{ entreprise.pays }}</td>
            <td>
                <span class=\"badge badge-{{ entreprise.statut == 'valide' ? 'success' : (entreprise.statut == 'rejete' ? 'danger' : 'warning') }}\">
                    {{ entreprise.statut|replace({'_': ' '})|capitalize }}
                </span>
            </td>
            <td>
                <div class=\"d-flex gap-1\">
                    <a href=\"{{ path('app_entreprise_show', {'id': entreprise.id}) }}\" class=\"btn btn-info btn-circle btn-sm\" title=\"Voir\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <a href=\"{{ path('app_entreprise_edit', {'id': entreprise.id}) }}\" class=\"btn btn-primary btn-circle btn-sm\" title=\"Modifier\">
                        <i class=\"fas fa-edit\"></i>
                    </a>
                    {{ include('admin/entreprise/_delete_form.html.twig') }}
                </div>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"6\" class=\"text-center py-4 text-muted\">
                <i class=\"fas fa-search fa-2x mb-3 d-block\"></i>
                Aucune entreprise trouvée
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<div class=\"navigation d-flex justify-content-between align-items-center mt-4 p-3 bg-light rounded shadow-sm\">
    <div class=\"text-muted small\">
        Affichage de <strong>{{ entreprises|length }}</strong> entreprises sur cette page (Total: <strong>{{ entreprises.getTotalItemCount }}</strong>)
    </div>
    <div class=\"knp-pagination-modern\">
        {{ knp_pagination_render(entreprises) }}
    </div>
</div>
", "admin/entreprise/_table.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\entreprise\\_table.html.twig");
    }
}
