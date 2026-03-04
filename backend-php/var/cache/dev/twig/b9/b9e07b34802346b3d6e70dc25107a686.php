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

/* front/registration_success.html.twig */
class __TwigTemplate_b651f839d583c9c8f90129e8cdcdc7c2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/registration_success.html.twig"));

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

        yield "Confirmation - MindAudit";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow border-0 rounded-4 text-center p-5\">
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        ";
        // line 12
        if (((isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 12, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 12, $this->source); })()), "statut", [], "any", false, false, false, 12) == "valide"))) {
            // line 13
            yield "                             <i class=\"lni lni-thumbs-up text-primary\" style=\"font-size: 5rem;\"></i>
                        ";
        } else {
            // line 15
            yield "                             <i class=\"lni lni-check-mark-circle text-success\" style=\"font-size: 5rem;\"></i>
                        ";
        }
        // line 17
        yield "                    </div>
                    
                    ";
        // line 19
        if (((isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 19, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 19, $this->source); })()), "statut", [], "any", false, false, false, 19) == "valide"))) {
            // line 20
            yield "                        <h2 class=\"fw-bold mb-3 text-primary\">Félicitations ! Dossier Validé !</h2>
                        <p class=\"text-muted fs-5 mb-4\">
                            L'IA a validé votre dossier automatiquement (Score de Confiance Élevé).
                        </p>
                        
                        <div class=\"alert alert-success border-0 rounded-3 p-4 mb-4\">
                            <h5><i class=\"lni lni-unlock\"></i> Votre Code d'Accès :</h5>
                            <h2 class=\"fw-bold my-3\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 27, $this->source); })()), "accessCode", [], "any", false, false, false, 27), "html", null, true);
            yield "</h2>
                            <p class=\"mb-0\">
                                Notez ce code précieusement. Il vous sert à vous connecter.
                            </p>
                        </div>
                        
                        <div class=\"d-grid gap-2 col-md-8 mx-auto\">
                            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_login", ["code" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 34, $this->source); })()), "accessCode", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-lg rounded-pill shadow-sm\">
                                <i class=\"lni lni-rocket me-2\"></i> Accéder à mon Espace
                            </a>
                        </div>
                    ";
        } else {
            // line 39
            yield "                        <h2 class=\"fw-bold mb-3 text-success\">Demande Enregistrée avec Succès !</h2>
                        <p class=\"text-muted fs-5 mb-4\">
                            Votre demande d'inscription a bien été transmise à notre équipe d'audit.
                            <br>Votre matricule fiscale est : <strong class=\"text-dark\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matricule"]) || array_key_exists("matricule", $context) ? $context["matricule"] : (function () { throw new RuntimeError('Variable "matricule" does not exist.', 42, $this->source); })()), "html", null, true);
            yield "</strong>
                        </p>

                        <div class=\"alert alert-info border-0 rounded-3 p-4 mb-4\">
                            <h5><i class=\"lni lni-envelope\"></i> Vérifiez votre Email</h5>
                            <p class=\"mb-0\">
                                Un auditeur va examiner votre dossier. Une réponse (Code d'Accès ou Motif de Rejet) vous sera envoyée <strong>par email</strong>.
                                <br>Veuillez vérifier votre boîte de réception (et vos spams) régulièrement.
                            </p>
                        </div>

                        <div class=\"d-grid gap-2 col-md-8 mx-auto\">
                            <a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
            yield "\" class=\"btn btn-outline-secondary btn-lg rounded-pill\">
                                Retour à l'accueil
                            </a>
                        </div>
                    ";
        }
        // line 59
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
        return "front/registration_success.html.twig";
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
        return array (  164 => 59,  156 => 54,  141 => 42,  136 => 39,  128 => 34,  118 => 27,  109 => 20,  107 => 19,  103 => 17,  99 => 15,  95 => 13,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Confirmation - MindAudit{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow border-0 rounded-4 text-center p-5\">
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        {% if entreprise and entreprise.statut == 'valide' %}
                             <i class=\"lni lni-thumbs-up text-primary\" style=\"font-size: 5rem;\"></i>
                        {% else %}
                             <i class=\"lni lni-check-mark-circle text-success\" style=\"font-size: 5rem;\"></i>
                        {% endif %}
                    </div>
                    
                    {% if entreprise and entreprise.statut == 'valide' %}
                        <h2 class=\"fw-bold mb-3 text-primary\">Félicitations ! Dossier Validé !</h2>
                        <p class=\"text-muted fs-5 mb-4\">
                            L'IA a validé votre dossier automatiquement (Score de Confiance Élevé).
                        </p>
                        
                        <div class=\"alert alert-success border-0 rounded-3 p-4 mb-4\">
                            <h5><i class=\"lni lni-unlock\"></i> Votre Code d'Accès :</h5>
                            <h2 class=\"fw-bold my-3\">{{ entreprise.accessCode }}</h2>
                            <p class=\"mb-0\">
                                Notez ce code précieusement. Il vous sert à vous connecter.
                            </p>
                        </div>
                        
                        <div class=\"d-grid gap-2 col-md-8 mx-auto\">
                            <a href=\"{{ path('app_employee_login', {'code': entreprise.accessCode}) }}\" class=\"btn btn-primary btn-lg rounded-pill shadow-sm\">
                                <i class=\"lni lni-rocket me-2\"></i> Accéder à mon Espace
                            </a>
                        </div>
                    {% else %}
                        <h2 class=\"fw-bold mb-3 text-success\">Demande Enregistrée avec Succès !</h2>
                        <p class=\"text-muted fs-5 mb-4\">
                            Votre demande d'inscription a bien été transmise à notre équipe d'audit.
                            <br>Votre matricule fiscale est : <strong class=\"text-dark\">{{ matricule }}</strong>
                        </p>

                        <div class=\"alert alert-info border-0 rounded-3 p-4 mb-4\">
                            <h5><i class=\"lni lni-envelope\"></i> Vérifiez votre Email</h5>
                            <p class=\"mb-0\">
                                Un auditeur va examiner votre dossier. Une réponse (Code d'Accès ou Motif de Rejet) vous sera envoyée <strong>par email</strong>.
                                <br>Veuillez vérifier votre boîte de réception (et vos spams) régulièrement.
                            </p>
                        </div>

                        <div class=\"d-grid gap-2 col-md-8 mx-auto\">
                            <a href=\"{{ path('app_front_home') }}\" class=\"btn btn-outline-secondary btn-lg rounded-pill\">
                                Retour à l'accueil
                            </a>
                        </div>
                    {% endif %}

                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "front/registration_success.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\front\\registration_success.html.twig");
    }
}
