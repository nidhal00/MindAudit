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

/* front/espace_entreprise.html.twig */
class __TwigTemplate_3d9d7c5b45026db92878497c6241648b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/espace_entreprise.html.twig"));

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

        yield "Espace Entreprise - MindAudit";
        
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
        yield "    <!-- Hero Section -->
    <section class=\"hero-area\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 100px 0;\">
        <div class=\"container\">
            <div class=\"row justify-content-center text-center\">
                <div class=\"col-lg-8\">
                    <div class=\"hero-content\" style=\"color: white;\">
                        <h1 class=\"mb-4\" style=\"font-size: 48px; font-weight: bold;\">
                            <i class=\"lni lni-briefcase\"></i> Espace Entreprise
                        </h1>
                        <p style=\"font-size: 20px; opacity: 0.9;\">
                            Gérez vos documents d'audit et suivez votre conformité en temps réel avec notre plateforme intelligente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Choice Cards Section -->
    <section style=\"padding: 80px 0; background-color: #f8f9fc;\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <!-- New Enterprise Card -->
                <div class=\"col-lg-5 col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-lg h-100\" style=\"border-radius: 20px; transition: transform 0.3s ease, box-shadow 0.3s ease;\">
                        <div class=\"card-body text-center p-5\">
                            <div class=\"mb-4\" style=\"font-size: 80px; color: #667eea;\">
                                <i class=\"lni lni-write\"></i>
                            </div>
                            <h3 class=\"mb-3\" style=\"color: #2c3e50; font-weight: bold;\">Nouvelle Entreprise</h3>
                            <p class=\"text-muted mb-4\" style=\"font-size: 16px; line-height: 1.8;\">
                                Vous n'avez pas encore de compte ? Inscrivez-vous gratuitement et commencez à gérer vos documents d'audit dès maintenant.
                            </p>
                            
                            <div class=\"benefits mb-4 text-start\">
                                <div class=\"benefit-item mb-3\">
                                    <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a; font-size: 20px;\"></i>
                                    <span class=\"ms-2\">Analyse IA automatique</span>
                                </div>
                                <div class=\"benefit-item mb-3\">
                                    <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a; font-size: 20px;\"></i>
                                    <span class=\"ms-2\">Tableau de bord personnalisé</span>
                                </div>
                                <div class=\"benefit-item mb-3\">
                                    <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a; font-size: 20px;\"></i>
                                    <span class=\"ms-2\">Notifications en temps réel</span>
                                </div>
                                <div class=\"benefit-item\">
                                    <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a; font-size: 20px;\"></i>
                                    <span class=\"ms-2\">Support dédié</span>
                                </div>
                            </div>

                            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register");
        yield "\" class=\"btn btn-primary btn-lg w-100\" 
                               style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; border-radius: 50px; padding: 15px; font-weight: bold; transition: transform 0.2s;\">
                                <i class=\"lni lni-rocket\"></i> S'inscrire Gratuitement
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Existing Client Card -->
                <div class=\"col-lg-5 col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-lg h-100\" style=\"border-radius: 20px; transition: transform 0.3s ease, box-shadow 0.3s ease;\">
                        <div class=\"card-body text-center p-5\">
                            <div class=\"mb-4\" style=\"font-size: 80px; color: #1cc88a;\">
                                <i class=\"lni lni-lock-alt\"></i>
                            </div>
                            <h3 class=\"mb-3\" style=\"color: #2c3e50; font-weight: bold;\">Déjà Client</h3>
                            <p class=\"text-muted mb-4\" style=\"font-size: 16px; line-height: 1.8;\">
                                Vous avez déjà un compte ? Connectez-vous avec votre code d'accès pour accéder à votre espace personnel.
                            </p>
                            
                            <div class=\"access-info mb-4 p-4\" style=\"background-color: #e7f3ff; border-radius: 12px; border-left: 4px solid #4e73df;\">
                                <p class=\"mb-2\" style=\"font-size: 14px; color: #5a5c69;\">
                                    <strong>Votre code d'accès :</strong>
                                </p>
                                <p class=\"mb-0\" style=\"font-size: 12px; color: #858796;\">
                                    Format : <code>ENT-XXXXXXXX</code>
                                </p>
                            </div>

                            <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_login");
        yield "\" class=\"btn btn-success btn-lg w-100 mb-3\" 
                               style=\"background: linear-gradient(135deg, #1cc88a 0%, #17a673 100%); border: none; border-radius: 50px; padding: 15px; font-weight: bold; transition: transform 0.2s;\">
                                <i class=\"lni lni-enter\"></i> Se Connecter
                            </a>

                            <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_status");
        yield "\" class=\"btn btn-outline-secondary w-100\" 
                               style=\"border-radius: 50px; padding: 12px; font-weight: 600;\">
                                <i class=\"lni lni-search\"></i> Suivre ma Demande
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section style=\"padding: 80px 0; background: white;\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-5\">
                <div class=\"col-lg-8 text-center\">
                    <h2 class=\"mb-3\" style=\"font-weight: bold; color: #2c3e50;\">Pourquoi Choisir MindAudit ?</h2>
                    <p class=\"text-muted\" style=\"font-size: 18px;\">
                        Une plateforme complète pour simplifier la gestion de vos audits et documents de conformité.
                    </p>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"feature-card text-center p-4\">
                        <div class=\"icon mb-3\" style=\"font-size: 50px; color: #4e73df;\">
                            <i class=\"lni lni-brain\"></i>
                        </div>
                        <h4 class=\"mb-3\" style=\"color: #2c3e50;\">Intelligence Artificielle</h4>
                        <p class=\"text-muted\">
                            Notre IA analyse automatiquement vos documents et détecte les anomalies en temps réel.
                        </p>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"feature-card text-center p-4\">
                        <div class=\"icon mb-3\" style=\"font-size: 50px; color: #1cc88a;\">
                            <i class=\"lni lni-dashboard\"></i>
                        </div>
                        <h4 class=\"mb-3\" style=\"color: #2c3e50;\">Tableau de Bord Intuitif</h4>
                        <p class=\"text-muted\">
                            Visualisez vos statistiques, scores de conformité et documents en un seul endroit.
                        </p>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"feature-card text-center p-4\">
                        <div class=\"icon mb-3\" style=\"font-size: 50px; color: #f6c23e;\">
                            <i class=\"lni lni-alarm-clock\"></i>
                        </div>
                        <h4 class=\"mb-3\" style=\"color: #2c3e50;\">Notifications Instantanées</h4>
                        <p class=\"text-muted\">
                            Recevez des alertes par email dès qu'un document est validé ou nécessite votre attention.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section style=\"padding: 60px 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"stat-item\">
                        <h2 class=\"mb-2\" style=\"font-size: 48px; font-weight: bold;\">50+</h2>
                        <p style=\"font-size: 18px; opacity: 0.9;\">Entreprises Partenaires</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"stat-item\">
                        <h2 class=\"mb-2\" style=\"font-size: 48px; font-weight: bold;\">500+</h2>
                        <p style=\"font-size: 18px; opacity: 0.9;\">Documents Analysés</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"stat-item\">
                        <h2 class=\"mb-2\" style=\"font-size: 48px; font-weight: bold;\">95%</h2>
                        <p style=\"font-size: 18px; opacity: 0.9;\">Taux de Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .benefit-item {
            display: flex;
            align-items: center;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/espace_entreprise.html.twig";
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
        return array (  180 => 93,  172 => 88,  140 => 59,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Espace Entreprise - MindAudit{% endblock %}

{% block body %}
    <!-- Hero Section -->
    <section class=\"hero-area\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 100px 0;\">
        <div class=\"container\">
            <div class=\"row justify-content-center text-center\">
                <div class=\"col-lg-8\">
                    <div class=\"hero-content\" style=\"color: white;\">
                        <h1 class=\"mb-4\" style=\"font-size: 48px; font-weight: bold;\">
                            <i class=\"lni lni-briefcase\"></i> Espace Entreprise
                        </h1>
                        <p style=\"font-size: 20px; opacity: 0.9;\">
                            Gérez vos documents d'audit et suivez votre conformité en temps réel avec notre plateforme intelligente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Choice Cards Section -->
    <section style=\"padding: 80px 0; background-color: #f8f9fc;\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <!-- New Enterprise Card -->
                <div class=\"col-lg-5 col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-lg h-100\" style=\"border-radius: 20px; transition: transform 0.3s ease, box-shadow 0.3s ease;\">
                        <div class=\"card-body text-center p-5\">
                            <div class=\"mb-4\" style=\"font-size: 80px; color: #667eea;\">
                                <i class=\"lni lni-write\"></i>
                            </div>
                            <h3 class=\"mb-3\" style=\"color: #2c3e50; font-weight: bold;\">Nouvelle Entreprise</h3>
                            <p class=\"text-muted mb-4\" style=\"font-size: 16px; line-height: 1.8;\">
                                Vous n'avez pas encore de compte ? Inscrivez-vous gratuitement et commencez à gérer vos documents d'audit dès maintenant.
                            </p>
                            
                            <div class=\"benefits mb-4 text-start\">
                                <div class=\"benefit-item mb-3\">
                                    <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a; font-size: 20px;\"></i>
                                    <span class=\"ms-2\">Analyse IA automatique</span>
                                </div>
                                <div class=\"benefit-item mb-3\">
                                    <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a; font-size: 20px;\"></i>
                                    <span class=\"ms-2\">Tableau de bord personnalisé</span>
                                </div>
                                <div class=\"benefit-item mb-3\">
                                    <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a; font-size: 20px;\"></i>
                                    <span class=\"ms-2\">Notifications en temps réel</span>
                                </div>
                                <div class=\"benefit-item\">
                                    <i class=\"lni lni-checkmark-circle\" style=\"color: #1cc88a; font-size: 20px;\"></i>
                                    <span class=\"ms-2\">Support dédié</span>
                                </div>
                            </div>

                            <a href=\"{{ path('app_front_register') }}\" class=\"btn btn-primary btn-lg w-100\" 
                               style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; border-radius: 50px; padding: 15px; font-weight: bold; transition: transform 0.2s;\">
                                <i class=\"lni lni-rocket\"></i> S'inscrire Gratuitement
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Existing Client Card -->
                <div class=\"col-lg-5 col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-lg h-100\" style=\"border-radius: 20px; transition: transform 0.3s ease, box-shadow 0.3s ease;\">
                        <div class=\"card-body text-center p-5\">
                            <div class=\"mb-4\" style=\"font-size: 80px; color: #1cc88a;\">
                                <i class=\"lni lni-lock-alt\"></i>
                            </div>
                            <h3 class=\"mb-3\" style=\"color: #2c3e50; font-weight: bold;\">Déjà Client</h3>
                            <p class=\"text-muted mb-4\" style=\"font-size: 16px; line-height: 1.8;\">
                                Vous avez déjà un compte ? Connectez-vous avec votre code d'accès pour accéder à votre espace personnel.
                            </p>
                            
                            <div class=\"access-info mb-4 p-4\" style=\"background-color: #e7f3ff; border-radius: 12px; border-left: 4px solid #4e73df;\">
                                <p class=\"mb-2\" style=\"font-size: 14px; color: #5a5c69;\">
                                    <strong>Votre code d'accès :</strong>
                                </p>
                                <p class=\"mb-0\" style=\"font-size: 12px; color: #858796;\">
                                    Format : <code>ENT-XXXXXXXX</code>
                                </p>
                            </div>

                            <a href=\"{{ path('app_employee_login') }}\" class=\"btn btn-success btn-lg w-100 mb-3\" 
                               style=\"background: linear-gradient(135deg, #1cc88a 0%, #17a673 100%); border: none; border-radius: 50px; padding: 15px; font-weight: bold; transition: transform 0.2s;\">
                                <i class=\"lni lni-enter\"></i> Se Connecter
                            </a>

                            <a href=\"{{ path('app_front_status') }}\" class=\"btn btn-outline-secondary w-100\" 
                               style=\"border-radius: 50px; padding: 12px; font-weight: 600;\">
                                <i class=\"lni lni-search\"></i> Suivre ma Demande
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section style=\"padding: 80px 0; background: white;\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-5\">
                <div class=\"col-lg-8 text-center\">
                    <h2 class=\"mb-3\" style=\"font-weight: bold; color: #2c3e50;\">Pourquoi Choisir MindAudit ?</h2>
                    <p class=\"text-muted\" style=\"font-size: 18px;\">
                        Une plateforme complète pour simplifier la gestion de vos audits et documents de conformité.
                    </p>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"feature-card text-center p-4\">
                        <div class=\"icon mb-3\" style=\"font-size: 50px; color: #4e73df;\">
                            <i class=\"lni lni-brain\"></i>
                        </div>
                        <h4 class=\"mb-3\" style=\"color: #2c3e50;\">Intelligence Artificielle</h4>
                        <p class=\"text-muted\">
                            Notre IA analyse automatiquement vos documents et détecte les anomalies en temps réel.
                        </p>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"feature-card text-center p-4\">
                        <div class=\"icon mb-3\" style=\"font-size: 50px; color: #1cc88a;\">
                            <i class=\"lni lni-dashboard\"></i>
                        </div>
                        <h4 class=\"mb-3\" style=\"color: #2c3e50;\">Tableau de Bord Intuitif</h4>
                        <p class=\"text-muted\">
                            Visualisez vos statistiques, scores de conformité et documents en un seul endroit.
                        </p>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"feature-card text-center p-4\">
                        <div class=\"icon mb-3\" style=\"font-size: 50px; color: #f6c23e;\">
                            <i class=\"lni lni-alarm-clock\"></i>
                        </div>
                        <h4 class=\"mb-3\" style=\"color: #2c3e50;\">Notifications Instantanées</h4>
                        <p class=\"text-muted\">
                            Recevez des alertes par email dès qu'un document est validé ou nécessite votre attention.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section style=\"padding: 60px 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"stat-item\">
                        <h2 class=\"mb-2\" style=\"font-size: 48px; font-weight: bold;\">50+</h2>
                        <p style=\"font-size: 18px; opacity: 0.9;\">Entreprises Partenaires</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"stat-item\">
                        <h2 class=\"mb-2\" style=\"font-size: 48px; font-weight: bold;\">500+</h2>
                        <p style=\"font-size: 18px; opacity: 0.9;\">Documents Analysés</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"stat-item\">
                        <h2 class=\"mb-2\" style=\"font-size: 48px; font-weight: bold;\">95%</h2>
                        <p style=\"font-size: 18px; opacity: 0.9;\">Taux de Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .benefit-item {
            display: flex;
            align-items: center;
        }
    </style>
{% endblock %}
", "front/espace_entreprise.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\front\\espace_entreprise.html.twig");
    }
}
