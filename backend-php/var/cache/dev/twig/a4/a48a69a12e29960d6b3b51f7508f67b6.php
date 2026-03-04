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

/* client/login.html.twig */
class __TwigTemplate_27f46543d489987ce10b4feb97e30027 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/login.html.twig"));

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

        yield "Accès Employé - MindAudit";
        
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
        <div class=\"col-xl-6 col-lg-8 col-md-9\">
            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <div class=\"p-5\">
                        <div class=\"text-center\">
                            <h1 class=\"h4 text-gray-900 mb-4\">Espace Employé</h1>
                            <p class=\"mb-4\">Entrez le code d'accès de votre entreprise pour gérer vos documents.</p>
                        </div>

                        ";
        // line 17
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "</div>
                        ";
        }
        // line 20
        yield "
                        <form method=\"post\" class=\"user\" id=\"loginForm\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"access_code\" class=\"form-control form-control-user text-center\"
                                       id=\"accessCode\" aria-describedby=\"emailHelp\"
                                       placeholder=\"Code d'accès (ex: ENT-123456)\"
                                       value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" required style=\"font-size: 1.2rem; letter-spacing: 2px;\">
                            </div>

                            <!-- CAPTCHA Math -->
                            <div class=\"card bg-light border mb-3 p-3\">
                                <div class=\"text-center mb-2\">
                                    <small class=\"text-muted font-weight-bold\"><i class=\"fas fa-shield-alt mr-1\"></i> Vérification de sécurité</small>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-center\">
                                    <span class=\"h5 mb-0 font-weight-bold\" id=\"captchaQuestion\">...</span>
                                    <span class=\"h5 mb-0 mx-2\">=</span>
                                    <input type=\"number\" id=\"captchaAnswer\" class=\"form-control text-center\" 
                                           style=\"width: 80px; font-size: 1.1rem;\" placeholder=\"?\" required>
                                </div>
                                <div class=\"text-center mt-2\" id=\"captchaFeedback\"></div>
                            </div>

                            <button type=\"submit\" id=\"loginBtn\" class=\"btn btn-primary btn-user btn-block\" disabled>
                                <i class=\"fas fa-lock mr-1\"></i> Accéder au tableau de bord
                            </button>
                        </form>
                        <hr>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_recover");
        yield "\">Code d'accès oublié ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    const a = Math.floor(Math.random() * 10) + 1;
    const b = Math.floor(Math.random() * 10) + 1;
    const correct = a + b;

    document.getElementById('captchaQuestion').textContent = a + ' + ' + b;

    const answerInput = document.getElementById('captchaAnswer');
    const submitBtn   = document.getElementById('loginBtn');
    const feedback    = document.getElementById('captchaFeedback');

    answerInput.addEventListener('input', function() {
        const val = parseInt(this.value, 10);
        if (val === correct) {
            submitBtn.disabled = false;
            feedback.innerHTML = '<span class=\"text-success small\"><i class=\"fas fa-check-circle\"></i> Correct !</span>';
        } else if (this.value !== '') {
            submitBtn.disabled = true;
            feedback.innerHTML = '<span class=\"text-danger small\"><i class=\"fas fa-times-circle\"></i> Réponse incorrecte</span>';
        } else {
            submitBtn.disabled = true;
            feedback.innerHTML = '';
        }
    });
})();
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
        return "client/login.html.twig";
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
        return array (  140 => 49,  114 => 26,  106 => 20,  100 => 18,  98 => 17,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Accès Employé - MindAudit{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-6 col-lg-8 col-md-9\">
            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <div class=\"p-5\">
                        <div class=\"text-center\">
                            <h1 class=\"h4 text-gray-900 mb-4\">Espace Employé</h1>
                            <p class=\"mb-4\">Entrez le code d'accès de votre entreprise pour gérer vos documents.</p>
                        </div>

                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error }}</div>
                        {% endif %}

                        <form method=\"post\" class=\"user\" id=\"loginForm\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"access_code\" class=\"form-control form-control-user text-center\"
                                       id=\"accessCode\" aria-describedby=\"emailHelp\"
                                       placeholder=\"Code d'accès (ex: ENT-123456)\"
                                       value=\"{{ code }}\" required style=\"font-size: 1.2rem; letter-spacing: 2px;\">
                            </div>

                            <!-- CAPTCHA Math -->
                            <div class=\"card bg-light border mb-3 p-3\">
                                <div class=\"text-center mb-2\">
                                    <small class=\"text-muted font-weight-bold\"><i class=\"fas fa-shield-alt mr-1\"></i> Vérification de sécurité</small>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-center\">
                                    <span class=\"h5 mb-0 font-weight-bold\" id=\"captchaQuestion\">...</span>
                                    <span class=\"h5 mb-0 mx-2\">=</span>
                                    <input type=\"number\" id=\"captchaAnswer\" class=\"form-control text-center\" 
                                           style=\"width: 80px; font-size: 1.1rem;\" placeholder=\"?\" required>
                                </div>
                                <div class=\"text-center mt-2\" id=\"captchaFeedback\"></div>
                            </div>

                            <button type=\"submit\" id=\"loginBtn\" class=\"btn btn-primary btn-user btn-block\" disabled>
                                <i class=\"fas fa-lock mr-1\"></i> Accéder au tableau de bord
                            </button>
                        </form>
                        <hr>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"{{ path('app_employee_recover') }}\">Code d'accès oublié ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    const a = Math.floor(Math.random() * 10) + 1;
    const b = Math.floor(Math.random() * 10) + 1;
    const correct = a + b;

    document.getElementById('captchaQuestion').textContent = a + ' + ' + b;

    const answerInput = document.getElementById('captchaAnswer');
    const submitBtn   = document.getElementById('loginBtn');
    const feedback    = document.getElementById('captchaFeedback');

    answerInput.addEventListener('input', function() {
        const val = parseInt(this.value, 10);
        if (val === correct) {
            submitBtn.disabled = false;
            feedback.innerHTML = '<span class=\"text-success small\"><i class=\"fas fa-check-circle\"></i> Correct !</span>';
        } else if (this.value !== '') {
            submitBtn.disabled = true;
            feedback.innerHTML = '<span class=\"text-danger small\"><i class=\"fas fa-times-circle\"></i> Réponse incorrecte</span>';
        } else {
            submitBtn.disabled = true;
            feedback.innerHTML = '';
        }
    });
})();
</script>
{% endblock %}
", "client/login.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\client\\login.html.twig");
    }
}
