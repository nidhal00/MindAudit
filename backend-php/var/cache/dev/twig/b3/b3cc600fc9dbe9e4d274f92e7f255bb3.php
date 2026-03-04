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

/* front/base.html.twig */
class __TwigTemplate_c43e368a30be275e055b2f8caf0b471b extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
    <meta name=\"description\" content=\"MindAudit - Plateforme d'Audit et de Gestion de Conformité\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

    <title>";
        // line 10
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <link rel=\"shortcut icon\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/images/favicon.svg"), "html", null, true);
        yield "\" type=\"image/svg\" />

    <!-- Bootstrap css -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" />
    <!-- Line Icons css -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/css/lineicons.css"), "html", null, true);
        yield "\" />
    <!-- Tiny Slider css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/css/tiny-slider.css"), "html", null, true);
        yield "\" />
    <!-- gLightBox css -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/css/glightbox.min.css"), "html", null, true);
        yield "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/style.css"), "html", null, true);
        yield "\" />
    ";
        // line 24
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "</head>

<body>

    <!-- NAVBAR NINE PART START -->
    <section class=\"navbar-area navbar-nine\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg\">
                        <a class=\"navbar-brand\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">
                            <img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/images/white-logo.svg"), "html", null, true);
        yield "\" alt=\"Logo\" />
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNine\"
                            aria-controls=\"navbarNine\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"toggler-icon\"></span>
                            <span class=\"toggler-icon\"></span>
                            <span class=\"toggler-icon\"></span>
                        </button>

                        <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarNine\">
                            <ul class=\"navbar-nav me-auto\">
                                <li class=\"nav-item\">
                                    <a class=\"";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "get", ["_route"], "method", false, false, false, 48) == "app_front_home")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Accueil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"";
        // line 51
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "get", ["_route"], "method", false, false, false, 51) == "app_front_annuaire")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_annuaire");
        yield "\">Annuaire</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"";
        // line 54
        yield (((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "get", ["_route"], "method", false, false, false, 54)) && is_string($_v1 = "app_employee") && str_starts_with($_v0, $_v1)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "get", ["_route"], "method", false, false, false, 54) == "app_front_register")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "get", ["_route"], "method", false, false, false, 54) == "app_front_espace_entreprise"))) ? ("active") : (""));
        yield "\" 
                                       href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_espace_entreprise");
        yield "\">
                                        <i class=\"lni lni-user\"></i> Espace Entreprise
                                    </a>
                                </li>
                                ";
        // line 59
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                                    <li class=\"nav-item\">
                                        <a href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
            yield "\" class=\"";
            yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "get", ["_route"], "method", false, false, false, 61)) && is_string($_v3 = "app_admin") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
            yield "\">
                                            <i class=\"lni lni-dashboard\"></i> Admin (";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "prenom", [], "any", false, false, false, 62), "html", null, true);
            yield ")
                                        </a>
                                    </li>
                                ";
        } else {
            // line 66
            yield "                                    <li class=\"nav-item\">
                                        <a href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "get", ["_route"], "method", false, false, false, 67) == "app_login")) ? ("active") : (""));
            yield "\">
                                            <i class=\"lni lni-lock\"></i> Connexion
                                        </a>
                                    </li>
                                ";
        }
        // line 72
        yield "                            </ul>
                        </div>

                        <div class=\"navbar-btn d-none d-lg-inline-block\">
                            <a class=\"menu-bar\" href=\"#side-menu-left\"><i class=\"lni lni-menu\"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- NAVBAR NINE PART ENDS -->

    <!-- SIDEBAR PART START -->
    <div class=\"sidebar-left\">
        <div class=\"sidebar-close\">
            <a class=\"close\" href=\"#close\"><i class=\"lni lni-close\"></i></a>
        </div>
        <div class=\"sidebar-content\">
            <div class=\"sidebar-logo\">
                <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"Logo\" /></a>
            </div>
            <p class=\"text\">MindAudit : Votre partenaire pour une conformité simplifiée et des audits performants.</p>
            <div class=\"sidebar-menu\">
                <h5 class=\"menu-title\">Connexion</h5>
                <ul>
                    <li><a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register");
        yield "\">Inscription Entreprise</a></li>
                    <li><a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_login");
        yield "\">Espace Entreprise</a></li>
                    <li><a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Déconnexion</a></li>
                </ul>
            </div>
            <div class=\"sidebar-social align-items-center justify-content-center\">
                <h5 class=\"social-title\">Suivez-nous</h5>
                <ul>
                    <li><a href=\"javascript:void(0)\"><i class=\"lni lni-facebook-filled\"></i></a></li>
                    <li><a href=\"javascript:void(0)\"><i class=\"lni lni-twitter-original\"></i></a></li>
                    <li><a href=\"javascript:void(0)\"><i class=\"lni lni-linkedin-original\"></i></a></li>
                    <li><a href=\"javascript:void(0)\"><i class=\"lni lni-youtube\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"overlay-left\"></div>
    <!-- SIDEBAR PART ENDS -->

    <div class=\"container mt-4\">
        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "flashes", [], "any", false, false, false, 118));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 119
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 120
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "    </div>

    ";
        // line 128
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 129
        yield "
    <!-- Start Footer Area -->
    <footer class=\"footer-area footer-eleven\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 col-12\">
                        <div class=\"footer-widget f-about\">
                            <div class=\"logo\">
                                <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">
                                    <img src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"#\" class=\"img-fluid\" />
                                </a>
                            </div>
                            <p class=\"text\">Simplifiez vos audits et garantissez la conformité de vos documents avec l'IA.</p>
                            <p class=\"copyright-text\">
                                <span>© ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " MindAudit. Conçu par Ayro UI & Adapté.</span>
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-6 col-12\">
                        <div class=\"footer-widget f-link\">
                            <h5>Navigation</h5>
                            <ul>
                                <li><a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Accueil</a></li>
                                <li><a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_login");
        yield "\">Connexion Entreprise</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-6 col-12\">
                        <div class=\"footer-widget f-link\">
                            <h5>Portail</h5>
                            <ul>
                                <li><a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register");
        yield "\">Inscription</a></li>
                                <li><a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">Espace Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End Footer Area -->

    <!-- Bootstrap js -->
    <script src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/js/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend-php/assets/js/tiny-slider.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 178
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 179
        yield "
</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Business | MindAudit";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/base.html.twig";
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
        return array (  431 => 178,  415 => 128,  399 => 24,  382 => 10,  370 => 179,  368 => 178,  363 => 176,  359 => 175,  355 => 174,  351 => 173,  337 => 162,  333 => 161,  322 => 153,  318 => 152,  307 => 144,  299 => 139,  295 => 138,  284 => 129,  282 => 128,  278 => 126,  272 => 125,  262 => 121,  257 => 120,  252 => 119,  248 => 118,  227 => 100,  223 => 99,  219 => 98,  208 => 92,  186 => 72,  176 => 67,  173 => 66,  166 => 62,  160 => 61,  157 => 60,  155 => 59,  148 => 55,  144 => 54,  136 => 51,  128 => 48,  113 => 36,  109 => 35,  97 => 25,  95 => 24,  91 => 23,  86 => 21,  81 => 19,  76 => 17,  71 => 15,  65 => 12,  60 => 10,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
    <meta name=\"description\" content=\"MindAudit - Plateforme d'Audit et de Gestion de Conformité\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

    <title>{% block title %}Business | MindAudit{% endblock %}</title>

    <link rel=\"shortcut icon\" href=\"{{ asset('assets/frontend-php/assets/images/favicon.svg') }}\" type=\"image/svg\" />

    <!-- Bootstrap css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/frontend-php/assets/css/bootstrap.min.css') }}\" />
    <!-- Line Icons css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/frontend-php/assets/css/lineicons.css') }}\" />
    <!-- Tiny Slider css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/frontend-php/assets/css/tiny-slider.css') }}\" />
    <!-- gLightBox css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/frontend-php/assets/css/glightbox.min.css') }}\" />

    <link rel=\"stylesheet\" href=\"{{ asset('assets/frontend-php/style.css') }}\" />
    {% block stylesheets %}{% endblock %}
</head>

<body>

    <!-- NAVBAR NINE PART START -->
    <section class=\"navbar-area navbar-nine\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg\">
                        <a class=\"navbar-brand\" href=\"{{ path('app_front_home') }}\">
                            <img src=\"{{ asset('assets/frontend-php/assets/images/white-logo.svg') }}\" alt=\"Logo\" />
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNine\"
                            aria-controls=\"navbarNine\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"toggler-icon\"></span>
                            <span class=\"toggler-icon\"></span>
                            <span class=\"toggler-icon\"></span>
                        </button>

                        <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarNine\">
                            <ul class=\"navbar-nav me-auto\">
                                <li class=\"nav-item\">
                                    <a class=\"{{ app.request.get('_route') == 'app_front_home' ? 'active' : '' }}\" href=\"{{ path('app_front_home') }}\">Accueil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"{{ app.request.get('_route') == 'app_front_annuaire' ? 'active' : '' }}\" href=\"{{ path('app_front_annuaire') }}\">Annuaire</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"{{ app.request.get('_route') starts with 'app_employee' or app.request.get('_route') == 'app_front_register' or app.request.get('_route') == 'app_front_espace_entreprise' ? 'active' : '' }}\" 
                                       href=\"{{ path('app_front_espace_entreprise') }}\">
                                        <i class=\"lni lni-user\"></i> Espace Entreprise
                                    </a>
                                </li>
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('app_admin_dashboard') }}\" class=\"{{ app.request.get('_route') starts with 'app_admin' ? 'active' : '' }}\">
                                            <i class=\"lni lni-dashboard\"></i> Admin ({{ app.user.prenom }})
                                        </a>
                                    </li>
                                {% else %}
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('app_login') }}\" class=\"{{ app.request.get('_route') == 'app_login' ? 'active' : '' }}\">
                                            <i class=\"lni lni-lock\"></i> Connexion
                                        </a>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>

                        <div class=\"navbar-btn d-none d-lg-inline-block\">
                            <a class=\"menu-bar\" href=\"#side-menu-left\"><i class=\"lni lni-menu\"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- NAVBAR NINE PART ENDS -->

    <!-- SIDEBAR PART START -->
    <div class=\"sidebar-left\">
        <div class=\"sidebar-close\">
            <a class=\"close\" href=\"#close\"><i class=\"lni lni-close\"></i></a>
        </div>
        <div class=\"sidebar-content\">
            <div class=\"sidebar-logo\">
                <a href=\"{{ path('app_front_home') }}\"><img src=\"{{ asset('assets/frontend-php/assets/images/logo.svg') }}\" alt=\"Logo\" /></a>
            </div>
            <p class=\"text\">MindAudit : Votre partenaire pour une conformité simplifiée et des audits performants.</p>
            <div class=\"sidebar-menu\">
                <h5 class=\"menu-title\">Connexion</h5>
                <ul>
                    <li><a href=\"{{ path('app_front_register') }}\">Inscription Entreprise</a></li>
                    <li><a href=\"{{ path('app_employee_login') }}\">Espace Entreprise</a></li>
                    <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                </ul>
            </div>
            <div class=\"sidebar-social align-items-center justify-content-center\">
                <h5 class=\"social-title\">Suivez-nous</h5>
                <ul>
                    <li><a href=\"javascript:void(0)\"><i class=\"lni lni-facebook-filled\"></i></a></li>
                    <li><a href=\"javascript:void(0)\"><i class=\"lni lni-twitter-original\"></i></a></li>
                    <li><a href=\"javascript:void(0)\"><i class=\"lni lni-linkedin-original\"></i></a></li>
                    <li><a href=\"javascript:void(0)\"><i class=\"lni lni-youtube\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"overlay-left\"></div>
    <!-- SIDEBAR PART ENDS -->

    <div class=\"container mt-4\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    {% block body %}{% endblock %}

    <!-- Start Footer Area -->
    <footer class=\"footer-area footer-eleven\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 col-12\">
                        <div class=\"footer-widget f-about\">
                            <div class=\"logo\">
                                <a href=\"{{ path('app_front_home') }}\">
                                    <img src=\"{{ asset('assets/frontend-php/assets/images/logo.svg') }}\" alt=\"#\" class=\"img-fluid\" />
                                </a>
                            </div>
                            <p class=\"text\">Simplifiez vos audits et garantissez la conformité de vos documents avec l'IA.</p>
                            <p class=\"copyright-text\">
                                <span>© {{ \"now\"|date(\"Y\") }} MindAudit. Conçu par Ayro UI & Adapté.</span>
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-6 col-12\">
                        <div class=\"footer-widget f-link\">
                            <h5>Navigation</h5>
                            <ul>
                                <li><a href=\"{{ path('app_front_home') }}\">Accueil</a></li>
                                <li><a href=\"{{ path('app_employee_login') }}\">Connexion Entreprise</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-6 col-12\">
                        <div class=\"footer-widget f-link\">
                            <h5>Portail</h5>
                            <ul>
                                <li><a href=\"{{ path('app_front_register') }}\">Inscription</a></li>
                                <li><a href=\"{{ path('app_admin_dashboard') }}\">Espace Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End Footer Area -->

    <!-- Bootstrap js -->
    <script src=\"{{ asset('assets/frontend-php/assets/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/frontend-php/assets/js/glightbox.min.js') }}\"></script>
    <script src=\"{{ asset('assets/frontend-php/assets/js/main.js') }}\"></script>
    <script src=\"{{ asset('assets/frontend-php/assets/js/tiny-slider.js') }}\"></script>

    {% block javascripts %}{% endblock %}

</body>

</html>
", "front/base.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\front\\base.html.twig");
    }
}
