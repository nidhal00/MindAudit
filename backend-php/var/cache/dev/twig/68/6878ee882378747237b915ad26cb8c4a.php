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

/* front/index.html.twig */
class __TwigTemplate_045ee090381e969589b04288d85fa6fe extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

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

        yield "MindAudit - Audit & Conformité IA";
        
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
        yield "    <!-- Hero Area -->
    <section id=\"hero-area\" class=\"header-area header-eight\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-12 col-12\">
                    <div class=\"header-content\">
                        <h1>Simplifiez la conformité de vos documents avec l'IA.</h1>
                        <p>
                            MindAudit aide les entreprises à gérer leurs audits, valider leurs documents fiscaux et RH, 
                            et suivre leur score de conformité grâce à une analyse intelligente.
                        </p>
                        <div class=\"button\">
                            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register");
        yield "\" class=\"btn primary-btn\">Commencer</a>
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_espace_entreprise");
        yield "\" class=\"btn primary-btn-outline\" style=\"margin-left: 10px; color: white; border-color: white;\">
                                <i class=\"lni lni-user\"></i> Espace Entreprise
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 col-12\">
                    <div class=\"header-image\">
                        <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/images/header/hero-image.jpg"), "html", null, true);
        yield "\" alt=\"Hero Image\" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Espace Entreprise Highlight Section -->
    <section style=\"padding: 60px 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8 col-md-7\">
                    <div style=\"color: white;\">
                        <h2 class=\"mb-3\" style=\"font-weight: bold; font-size: 32px;\">
                            <i class=\"lni lni-briefcase\"></i> Espace Entreprise
                        </h2>
                        <p style=\"font-size: 18px; opacity: 0.95; line-height: 1.6;\">
                            Gérez vos documents d'audit, suivez votre score de conformité en temps réel, 
                            et bénéficiez d'une analyse IA automatique de vos documents fiscaux et RH.
                        </p>
                        <div class=\"mt-4\">
                            <span class=\"badge bg-light text-dark me-2 mb-2\" style=\"padding: 10px 15px; font-size: 14px;\">
                                <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a;\"></i> Analyse IA
                            </span>
                            <span class=\"badge bg-light text-dark me-2 mb-2\" style=\"padding: 10px 15px; font-size: 14px;\">
                                <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a;\"></i> Dashboard Personnalisé
                            </span>
                            <span class=\"badge bg-light text-dark mb-2\" style=\"padding: 10px 15px; font-size: 14px;\">
                                <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a;\"></i> Notifications Email
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5 text-center\">
                    <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_espace_entreprise");
        yield "\" 
                       class=\"btn btn-light btn-lg\" 
                       style=\"padding: 18px 40px; border-radius: 50px; font-weight: bold; font-size: 18px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); transition: transform 0.3s;\">
                        Découvrir <i class=\"lni lni-arrow-right\"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id=\"services\" class=\"services-area services-eight\">
        <div class=\"section-title-five\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"content\">
                            <h6>Nos Services</h6>
                            <h2 class=\"fw-bold\">Pourquoi choisir MindAudit ?</h2>
                            <p>Une solution complète pour la gestion documentaire et l'audit d'entreprise.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-services\">
                        <div class=\"service-icon\"><i class=\"lni lni-robot\"></i></div>
                        <div class=\"service-content\">
                            <h4>Analyse IA</h4>
                            <p>Scoring automatique de la conformité de vos documents financiers et RH.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-services\">
                        <div class=\"service-icon\"><i class=\"lni lni-shield\"></i></div>
                        <div class=\"service-content\">
                            <h4>Sécurité Totale</h4>
                            <p>Stockage sécurisé et chiffré de vos données sensibles d'entreprise.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-services\">
                        <div class=\"service-icon\"><i class=\"lni lni-dashboard\"></i></div>
                        <div class=\"service-content\">
                            <h4>Dashboard Admin</h4>
                            <p>Suivi en temps réel des statistiques et des validations d'audits.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id=\"call-action\" class=\"call-action\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xxl-6 col-xl-7 col-lg-8 col-md-9\">
                    <div class=\"inner-content\">
                        <h2>Prêt à digitaliser vos audits ?</h2>
                        <p>Rejoignez MindAudit et facilitez les échanges de documents entre votre entreprise et les auditeurs.</p>
                        <div class=\"light-rounded-buttons\">
                            <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register");
        yield "\" class=\"btn primary-btn-outline\">S'inscrire Maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/index.html.twig";
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
        return array (  222 => 129,  152 => 62,  115 => 28,  103 => 19,  99 => 18,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}MindAudit - Audit & Conformité IA{% endblock %}

{% block body %}
    <!-- Hero Area -->
    <section id=\"hero-area\" class=\"header-area header-eight\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-12 col-12\">
                    <div class=\"header-content\">
                        <h1>Simplifiez la conformité de vos documents avec l'IA.</h1>
                        <p>
                            MindAudit aide les entreprises à gérer leurs audits, valider leurs documents fiscaux et RH, 
                            et suivre leur score de conformité grâce à une analyse intelligente.
                        </p>
                        <div class=\"button\">
                            <a href=\"{{ path('app_front_register') }}\" class=\"btn primary-btn\">Commencer</a>
                            <a href=\"{{ path('app_front_espace_entreprise') }}\" class=\"btn primary-btn-outline\" style=\"margin-left: 10px; color: white; border-color: white;\">
                                <i class=\"lni lni-user\"></i> Espace Entreprise
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 col-12\">
                    <div class=\"header-image\">
                        <img src=\"{{ asset('assets/frontend-php/assets/images/header/hero-image.jpg') }}\" alt=\"Hero Image\" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Espace Entreprise Highlight Section -->
    <section style=\"padding: 60px 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8 col-md-7\">
                    <div style=\"color: white;\">
                        <h2 class=\"mb-3\" style=\"font-weight: bold; font-size: 32px;\">
                            <i class=\"lni lni-briefcase\"></i> Espace Entreprise
                        </h2>
                        <p style=\"font-size: 18px; opacity: 0.95; line-height: 1.6;\">
                            Gérez vos documents d'audit, suivez votre score de conformité en temps réel, 
                            et bénéficiez d'une analyse IA automatique de vos documents fiscaux et RH.
                        </p>
                        <div class=\"mt-4\">
                            <span class=\"badge bg-light text-dark me-2 mb-2\" style=\"padding: 10px 15px; font-size: 14px;\">
                                <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a;\"></i> Analyse IA
                            </span>
                            <span class=\"badge bg-light text-dark me-2 mb-2\" style=\"padding: 10px 15px; font-size: 14px;\">
                                <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a;\"></i> Dashboard Personnalisé
                            </span>
                            <span class=\"badge bg-light text-dark mb-2\" style=\"padding: 10px 15px; font-size: 14px;\">
                                <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a;\"></i> Notifications Email
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5 text-center\">
                    <a href=\"{{ path('app_front_espace_entreprise') }}\" 
                       class=\"btn btn-light btn-lg\" 
                       style=\"padding: 18px 40px; border-radius: 50px; font-weight: bold; font-size: 18px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); transition: transform 0.3s;\">
                        Découvrir <i class=\"lni lni-arrow-right\"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id=\"services\" class=\"services-area services-eight\">
        <div class=\"section-title-five\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"content\">
                            <h6>Nos Services</h6>
                            <h2 class=\"fw-bold\">Pourquoi choisir MindAudit ?</h2>
                            <p>Une solution complète pour la gestion documentaire et l'audit d'entreprise.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-services\">
                        <div class=\"service-icon\"><i class=\"lni lni-robot\"></i></div>
                        <div class=\"service-content\">
                            <h4>Analyse IA</h4>
                            <p>Scoring automatique de la conformité de vos documents financiers et RH.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-services\">
                        <div class=\"service-icon\"><i class=\"lni lni-shield\"></i></div>
                        <div class=\"service-content\">
                            <h4>Sécurité Totale</h4>
                            <p>Stockage sécurisé et chiffré de vos données sensibles d'entreprise.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-services\">
                        <div class=\"service-icon\"><i class=\"lni lni-dashboard\"></i></div>
                        <div class=\"service-content\">
                            <h4>Dashboard Admin</h4>
                            <p>Suivi en temps réel des statistiques et des validations d'audits.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id=\"call-action\" class=\"call-action\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xxl-6 col-xl-7 col-lg-8 col-md-9\">
                    <div class=\"inner-content\">
                        <h2>Prêt à digitaliser vos audits ?</h2>
                        <p>Rejoignez MindAudit et facilitez les échanges de documents entre votre entreprise et les auditeurs.</p>
                        <div class=\"light-rounded-buttons\">
                            <a href=\"{{ path('app_front_register') }}\" class=\"btn primary-btn-outline\">S'inscrire Maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "front/index.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\front\\index.html.twig");
    }
}
