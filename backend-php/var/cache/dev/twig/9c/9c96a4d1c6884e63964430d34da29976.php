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

/* admin/entreprise/edit.html.twig */
class __TwigTemplate_e1d3a6c39fd4419cc3458b3053aed8fe extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/entreprise/edit.html.twig"));

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

        yield "Modifier Entreprise";
        
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
        <h1 class=\"h3 mb-0 text-gray-800\">Modifier Entreprise</h1>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Édition des informations</h6>
                    ";
        // line 15
        yield Twig\Extension\CoreExtension::include($this->env, $context, "entreprise/_delete_form.html.twig");
        yield "
                </div>
                <div class=\"card-body\">
                    ";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/entreprise/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "
                </div>
            </div>
            
            <div class=\"text-center\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_index");
        yield "\" class=\"btn btn-secondary btn-icon-split\">
                    <span class=\"icon text-white-50\">
                        <i class=\"fas fa-arrow-left\"></i>
                    </span>
                    <span class=\"text\">Retour à la liste</span>
                </a>
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
        return "admin/entreprise/edit.html.twig";
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
        return array (  110 => 23,  102 => 18,  96 => 15,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Modifier Entreprise{% endblock %}

{% block body %}
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Modifier Entreprise</h1>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Édition des informations</h6>
                    {{ include('entreprise/_delete_form.html.twig') }}
                </div>
                <div class=\"card-body\">
                    {{ include('admin/entreprise/_form.html.twig', {'button_label': 'Mettre à jour'}) }}
                </div>
            </div>
            
            <div class=\"text-center\">
                <a href=\"{{ path('app_entreprise_index') }}\" class=\"btn btn-secondary btn-icon-split\">
                    <span class=\"icon text-white-50\">
                        <i class=\"fas fa-arrow-left\"></i>
                    </span>
                    <span class=\"text\">Retour à la liste</span>
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/entreprise/edit.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\entreprise\\edit.html.twig");
    }
}
