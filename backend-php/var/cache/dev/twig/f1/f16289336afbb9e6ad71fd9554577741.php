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

/* client/upload.html.twig */
class __TwigTemplate_80b510c8064ce9f8575a69d3944e92cd extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/upload.html.twig"));

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

        yield "Upload Document - MindAudit";
        
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
        yield "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Ajouter un document pour ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield "</h6>
                </div>
                <div class=\"card-body\" id=\"upload-container\">
                    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["id" => "upload-form", "novalidate" => "novalidate"]]);
        yield "
                        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'widget');
        yield "
                        <hr>
                        
                        <!-- Progress Bar (Hidden by default) -->
                        <div id=\"progress-container\" class=\"mb-4\" style=\"display: none;\">
                            <div class=\"d-flex justify-content-between mb-1\">
                                <span class=\"text-xs font-weight-bold text-primary text-uppercase\">Analyse IA en cours...</span>
                                <span id=\"progress-percent\" class=\"text-xs font-weight-bold text-primary\">0%</span>
                            </div>
                            <div class=\"progress progress-sm\">
                                <div id=\"progress-bar\" class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 0%\"></div>
                            </div>
                        </div>

                        <!-- Result Area (Hidden by default) -->
                        <div id=\"result-area\" class=\"alert alert-success shadow-sm mb-4\" style=\"display: none;\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-success text-white\">
                                        <i class=\"fas fa-brain\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\" id=\"result-date\"></div>
                                    <span class=\"font-weight-bold\" id=\"result-message\"></span>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800 mt-1\">Score IA : <span id=\"result-score\"></span>/100</div>
                                </div>
                            </div>
                        </div>

                        <div id=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-success btn-icon-split border-0 shadow-sm\" id=\"submit-btn\" style=\"border-radius: 30px; padding: 0.5rem 1.5rem;\">
                                <span class=\"text\">LANCER L'ANALYSE IA</span>
                            </button>
                            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_dashboard");
        yield "\" class=\"btn btn-light btn-icon-split ml-2 border-0 shadow-sm\" style=\"border-radius: 30px; padding: 0.5rem 1.5rem;\">
                                 <span class=\"text\">Retour</span>
                            </a>
                        </div>
                    ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 60
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('upload-form');
    const progressContainer = document.getElementById('progress-container');
    const progressBar = document.getElementById('progress-bar');
    const progressPercent = document.getElementById('progress-percent');
    const resultArea = document.getElementById('result-area');
    const submitBtn = document.getElementById('submit-btn');
    const formActions = document.getElementById('form-actions');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();

        // Show progress UI
        submitBtn.disabled = true;
        progressContainer.style.display = 'block';
        resultArea.style.display = 'none';

        xhr.open('POST', '";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_document_upload");
        yield "', true);

        xhr.upload.onprogress = function(e) {
            if (e.lengthComputable) {
                const percent = Math.round((e.loaded / e.total) * 100);
                progressBar.style.width = percent + '%';
                progressPercent.innerText = percent + '%';
            }
        };

        xhr.onload = function() {
            if (xhr.status === 200) {
                const res = JSON.parse(xhr.responseText);
                
                // Update result UI
                document.getElementById('result-message').innerText = res.message;
                document.getElementById('result-score').innerText = res.score;
                document.getElementById('result-date').innerText = res.date;
                
                resultArea.style.display = 'block';
                progressContainer.style.display = 'none';
                
                // Reset form optionally or redirect
                setTimeout(() => {
                    window.location.href = '";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_dashboard");
        yield "';
                }, 3000);
            } else {
                alert('Erreur lors de l\\'upload : ' + xhr.statusText);
                submitBtn.disabled = false;
            }
        };

        xhr.onerror = function() {
            alert('Erreur réseau.');
            submitBtn.disabled = false;
        };

        xhr.send(formData);
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
        return "client/upload.html.twig";
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
        return array (  224 => 106,  197 => 82,  174 => 61,  157 => 60,  147 => 53,  140 => 49,  103 => 15,  99 => 14,  93 => 11,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Upload Document - MindAudit{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Ajouter un document pour {{ entreprise.nom }}</h6>
                </div>
                <div class=\"card-body\" id=\"upload-container\">
                    {{ form_start(form, {'attr': {'id': 'upload-form', 'novalidate': 'novalidate'}}) }}
                        {{ form_widget(form) }}
                        <hr>
                        
                        <!-- Progress Bar (Hidden by default) -->
                        <div id=\"progress-container\" class=\"mb-4\" style=\"display: none;\">
                            <div class=\"d-flex justify-content-between mb-1\">
                                <span class=\"text-xs font-weight-bold text-primary text-uppercase\">Analyse IA en cours...</span>
                                <span id=\"progress-percent\" class=\"text-xs font-weight-bold text-primary\">0%</span>
                            </div>
                            <div class=\"progress progress-sm\">
                                <div id=\"progress-bar\" class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 0%\"></div>
                            </div>
                        </div>

                        <!-- Result Area (Hidden by default) -->
                        <div id=\"result-area\" class=\"alert alert-success shadow-sm mb-4\" style=\"display: none;\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-success text-white\">
                                        <i class=\"fas fa-brain\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\" id=\"result-date\"></div>
                                    <span class=\"font-weight-bold\" id=\"result-message\"></span>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800 mt-1\">Score IA : <span id=\"result-score\"></span>/100</div>
                                </div>
                            </div>
                        </div>

                        <div id=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-success btn-icon-split border-0 shadow-sm\" id=\"submit-btn\" style=\"border-radius: 30px; padding: 0.5rem 1.5rem;\">
                                <span class=\"text\">LANCER L'ANALYSE IA</span>
                            </button>
                            <a href=\"{{ path('app_employee_dashboard') }}\" class=\"btn btn-light btn-icon-split ml-2 border-0 shadow-sm\" style=\"border-radius: 30px; padding: 0.5rem 1.5rem;\">
                                 <span class=\"text\">Retour</span>
                            </a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('upload-form');
    const progressContainer = document.getElementById('progress-container');
    const progressBar = document.getElementById('progress-bar');
    const progressPercent = document.getElementById('progress-percent');
    const resultArea = document.getElementById('result-area');
    const submitBtn = document.getElementById('submit-btn');
    const formActions = document.getElementById('form-actions');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();

        // Show progress UI
        submitBtn.disabled = true;
        progressContainer.style.display = 'block';
        resultArea.style.display = 'none';

        xhr.open('POST', '{{ path(\"api_document_upload\") }}', true);

        xhr.upload.onprogress = function(e) {
            if (e.lengthComputable) {
                const percent = Math.round((e.loaded / e.total) * 100);
                progressBar.style.width = percent + '%';
                progressPercent.innerText = percent + '%';
            }
        };

        xhr.onload = function() {
            if (xhr.status === 200) {
                const res = JSON.parse(xhr.responseText);
                
                // Update result UI
                document.getElementById('result-message').innerText = res.message;
                document.getElementById('result-score').innerText = res.score;
                document.getElementById('result-date').innerText = res.date;
                
                resultArea.style.display = 'block';
                progressContainer.style.display = 'none';
                
                // Reset form optionally or redirect
                setTimeout(() => {
                    window.location.href = '{{ path(\"app_employee_dashboard\") }}';
                }, 3000);
            } else {
                alert('Erreur lors de l\\'upload : ' + xhr.statusText);
                submitBtn.disabled = false;
            }
        };

        xhr.onerror = function() {
            alert('Erreur réseau.');
            submitBtn.disabled = false;
        };

        xhr.send(formData);
    });
});
</script>
{% endblock %}
{% endblock %}
", "client/upload.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\client\\upload.html.twig");
    }
}
