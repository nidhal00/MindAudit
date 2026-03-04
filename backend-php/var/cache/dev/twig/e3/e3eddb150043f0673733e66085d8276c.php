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

/* admin/entreprise/_form.html.twig */
class __TwigTemplate_8ff4cfcff03f520738c6730da2ef43e0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/entreprise/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group font-weight-bold text-primary mb-3\">
                <i class=\"fas fa-info-circle mr-1\"></i> Informations de base
            </div>
            <div class=\"form-group\">
                ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Nom de l'entreprise"]);
        yield "
                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: MindAudit Corp"]]);
        yield "
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Matricule Fiscale"]);
        yield "
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "1234567/A/B/C/000"]]);
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 15), 'errors');
        yield "
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "secteur", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Secteur"]);
        yield "
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "secteur", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "taille", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Taille"]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "taille", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Email professionnel"]);
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Téléphone"]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "telephone", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"form-group font-weight-bold text-primary mb-3\">
                <i class=\"fas fa-map-marker-alt mr-1\"></i> Localisation
            </div>
            <div class=\"form-group\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "adresse", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Adresse complète"]);
        yield "
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "adresse", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "rows" => 2, "placeholder" => "Rue, Ville, CP..."]]);
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "pays", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Pays"]);
        yield "
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "pays", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>
            
            <div class=\"form-group\">
                <label class=\"small mb-1 font-weight-bold\">Position sur la carte (Cliquez pour placer le marqueur)</label>
                <div id=\"map-picker\" style=\"height: 250px; border-radius: 0.35rem;\" class=\"border shadow-sm mb-2\"></div>
                <div class=\"row mt-2\">
                    <div class=\"col-6\">
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "latitude", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control form-control-sm", "readonly" => "readonly", "placeholder" => "Lat"]]);
        yield "
                    </div>
                    <div class=\"col-6\">
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "longitude", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control form-control-sm", "readonly" => "readonly", "placeholder" => "Lng"]]);
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
             <div class=\"form-group\">
                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "dateCreation", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Date de création"]);
        yield "
                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "dateCreation", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>
        </div>
        <div class=\"col-md-6\">
             <div class=\"form-group\">
                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "statut", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "small mb-1 font-weight-bold"], "label" => "Statut initial"]);
        yield "
                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "statut", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>
        </div>
    </div>

    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'rest');
        yield "

    <hr>
    <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg shadow-sm\" id=\"btn-submit-entreprise\">
        <i class=\"fas fa-save mr-2\"></i>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 88, $this->source); })()), "Enregistrer les modifications")) : ("Enregistrer les modifications")), "html", null, true);
        yield "
    </button>
";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        yield "

<style>
    .form-control.is-invalid, .form-control.is-invalid:focus { border-color: #e74a3b !important; box-shadow: 0 0 0 0.2rem rgba(231,74,59,.25) !important; }
    .form-control.is-valid, .form-control.is-valid:focus { border-color: #1cc88a !important; box-shadow: 0 0 0 0.2rem rgba(28,200,138,.25) !important; }
    .invalid-feedback-js { color: #e74a3b; font-size: 0.8rem; margin-top: 2px; display: block; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // --- Client-side validation rules ---
    var rules = {
        'nom': {
            required: true,
            minLength: 2,
            maxLength: 150,
            pattern: /^[a-zA-ZÀ-ÿ0-9\\s\\-'.&]+\$/,
            messages: {
                required: 'Le nom est obligatoire.',
                minLength: 'Le nom doit contenir au moins 2 caractères.',
                pattern: 'Le nom contient des caractères non autorisés.'
            }
        },
        'matriculeFiscale': {
            required: true,
            pattern: /^[0-9]{7}\\/[A-Z]\\/[A-Z]\\/[A-Z]\\/[0-9]{3}\$/,
            messages: {
                required: 'La matricule fiscale est obligatoire.',
                pattern: 'Format: 1234567/A/B/C/000'
            }
        },
        'email': {
            required: true,
            pattern: /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/,
            messages: {
                required: \"L'email est obligatoire.\",
                pattern: 'Email invalide (ex: nom@domaine.com).'
            }
        },
        'telephone': {
            required: true,
            pattern: /^[+]?[0-9\\s\\-]{8,20}\$/,
            messages: {
                required: 'Le téléphone est obligatoire.',
                pattern: 'Format invalide (8-20 chiffres, ex: +216 12 345 678).'
            }
        },
        'pays': {
            required: true,
            minLength: 2,
            pattern: /^[a-zA-ZÀ-ÿ\\s\\-]+\$/,
            messages: {
                required: 'Le pays est obligatoire.',
                minLength: 'Minimum 2 caractères.',
                pattern: 'Le pays ne doit contenir que des lettres.'
            }
        },
        'adresse': {
            required: true,
            minLength: 5,
            messages: {
                required: \"L'adresse est obligatoire.\",
                minLength: \"L'adresse doit contenir au moins 5 caractères.\"
            }
        },
        'secteur': {
            required: true,
            messages: { required: 'Le secteur est obligatoire.' }
        },
        'taille': {
            required: true,
            messages: { required: 'La taille est obligatoire.' }
        }
    };

    function findField(name) {
        return document.querySelector('[name*=\"[' + name + ']\"]');
    }

    function showError(field, msg) {
        field.classList.remove('is-valid');
        field.classList.add('is-invalid');
        var fb = field.parentElement.querySelector('.invalid-feedback-js');
        if (!fb) {
            fb = document.createElement('div');
            fb.className = 'invalid-feedback-js';
            field.parentElement.appendChild(fb);
        }
        fb.textContent = msg;
    }

    function showValid(field) {
        field.classList.remove('is-invalid');
        field.classList.add('is-valid');
        var fb = field.parentElement.querySelector('.invalid-feedback-js');
        if (fb) fb.remove();
    }

    function validateField(name, rule) {
        var field = findField(name);
        if (!field) return true;
        var val = field.value.trim();

        if (rule.required && !val) {
            showError(field, rule.messages.required);
            return false;
        }
        if (val && rule.minLength && val.length < rule.minLength) {
            showError(field, rule.messages.minLength);
            return false;
        }
        if (val && rule.maxLength && val.length > rule.maxLength) {
            showError(field, rule.messages.maxLength || 'Trop long.');
            return false;
        }
        if (val && rule.pattern && !rule.pattern.test(val)) {
            showError(field, rule.messages.pattern);
            return false;
        }
        if (val || !rule.required) {
            showValid(field);
        }
        return true;
    }

    // Real-time validation on blur/change
    Object.keys(rules).forEach(function(name) {
        var field = findField(name);
        if (field) {
            field.addEventListener('blur', function() { validateField(name, rules[name]); });
            field.addEventListener('change', function() { validateField(name, rules[name]); });
            field.addEventListener('input', function() {
                if (field.classList.contains('is-invalid')) {
                    validateField(name, rules[name]);
                }
            });
        }
    });

    // Validate all on submit
    var form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            var allValid = true;
            Object.keys(rules).forEach(function(name) {
                if (!validateField(name, rules[name])) {
                    allValid = false;
                }
            });
            if (!allValid) {
                e.preventDefault();
                // Scroll to first error
                var firstError = document.querySelector('.is-invalid');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                }
            }
        });
    }
});
</script>

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var latInput = document.querySelector('[name*=\"[latitude]\"]');
        var lngInput = document.querySelector('[name*=\"[longitude]\"]');
        
        var initialLat = latInput.value || 36.8065; // Tunis par défaut
        var initialLng = lngInput.value || 10.1815;
        
        var map = L.map('map-picker').setView([initialLat, initialLng], 13);
        
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        var marker;
        if (latInput.value && lngInput.value) {
            marker = L.marker([initialLat, initialLng]).addTo(map);
        }

        map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(6);
            var lng = e.latlng.lng.toFixed(6);
            
            latInput.value = lat;
            lngInput.value = lng;
            
            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }
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
        return "admin/entreprise/_form.html.twig";
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
        return array (  215 => 90,  210 => 88,  203 => 84,  195 => 79,  191 => 78,  183 => 73,  179 => 72,  166 => 62,  160 => 59,  149 => 51,  145 => 50,  139 => 47,  135 => 46,  123 => 37,  119 => 36,  113 => 33,  109 => 32,  101 => 27,  97 => 26,  89 => 21,  85 => 20,  77 => 15,  73 => 14,  69 => 13,  63 => 10,  59 => 9,  55 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group font-weight-bold text-primary mb-3\">
                <i class=\"fas fa-info-circle mr-1\"></i> Informations de base
            </div>
            <div class=\"form-group\">
                {{ form_label(form.nom, 'Nom de l\\'entreprise', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Ex: MindAudit Corp'}}) }}
                {{ form_errors(form.nom) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.matriculeFiscale, 'Matricule Fiscale', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                {{ form_widget(form.matriculeFiscale, {'attr': {'class': 'form-control', 'placeholder': '1234567/A/B/C/000'}}) }}
                {{ form_errors(form.matriculeFiscale) }}
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        {{ form_label(form.secteur, 'Secteur', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                        {{ form_widget(form.secteur, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        {{ form_label(form.taille, 'Taille', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                        {{ form_widget(form.taille, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.email, 'Email professionnel', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.telephone, 'Téléphone', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"form-group font-weight-bold text-primary mb-3\">
                <i class=\"fas fa-map-marker-alt mr-1\"></i> Localisation
            </div>
            <div class=\"form-group\">
                {{ form_label(form.adresse, 'Adresse complète', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'rows': 2, 'placeholder': 'Rue, Ville, CP...'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.pays, 'Pays', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                {{ form_widget(form.pays, {'attr': {'class': 'form-control'}}) }}
            </div>
            
            <div class=\"form-group\">
                <label class=\"small mb-1 font-weight-bold\">Position sur la carte (Cliquez pour placer le marqueur)</label>
                <div id=\"map-picker\" style=\"height: 250px; border-radius: 0.35rem;\" class=\"border shadow-sm mb-2\"></div>
                <div class=\"row mt-2\">
                    <div class=\"col-6\">
                        {{ form_widget(form.latitude, {'attr': {'class': 'form-control form-control-sm', 'readonly': 'readonly', 'placeholder': 'Lat'}}) }}
                    </div>
                    <div class=\"col-6\">
                        {{ form_widget(form.longitude, {'attr': {'class': 'form-control form-control-sm', 'readonly': 'readonly', 'placeholder': 'Lng'}}) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
             <div class=\"form-group\">
                {{ form_label(form.dateCreation, 'Date de création', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                {{ form_widget(form.dateCreation, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"col-md-6\">
             <div class=\"form-group\">
                {{ form_label(form.statut, 'Statut initial', {'label_attr': {'class': 'small mb-1 font-weight-bold'}}) }}
                {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
    </div>

    {{ form_rest(form) }}

    <hr>
    <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg shadow-sm\" id=\"btn-submit-entreprise\">
        <i class=\"fas fa-save mr-2\"></i>{{ button_label|default('Enregistrer les modifications') }}
    </button>
{{ form_end(form) }}

<style>
    .form-control.is-invalid, .form-control.is-invalid:focus { border-color: #e74a3b !important; box-shadow: 0 0 0 0.2rem rgba(231,74,59,.25) !important; }
    .form-control.is-valid, .form-control.is-valid:focus { border-color: #1cc88a !important; box-shadow: 0 0 0 0.2rem rgba(28,200,138,.25) !important; }
    .invalid-feedback-js { color: #e74a3b; font-size: 0.8rem; margin-top: 2px; display: block; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // --- Client-side validation rules ---
    var rules = {
        'nom': {
            required: true,
            minLength: 2,
            maxLength: 150,
            pattern: /^[a-zA-ZÀ-ÿ0-9\\s\\-'.&]+\$/,
            messages: {
                required: 'Le nom est obligatoire.',
                minLength: 'Le nom doit contenir au moins 2 caractères.',
                pattern: 'Le nom contient des caractères non autorisés.'
            }
        },
        'matriculeFiscale': {
            required: true,
            pattern: /^[0-9]{7}\\/[A-Z]\\/[A-Z]\\/[A-Z]\\/[0-9]{3}\$/,
            messages: {
                required: 'La matricule fiscale est obligatoire.',
                pattern: 'Format: 1234567/A/B/C/000'
            }
        },
        'email': {
            required: true,
            pattern: /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/,
            messages: {
                required: \"L'email est obligatoire.\",
                pattern: 'Email invalide (ex: nom@domaine.com).'
            }
        },
        'telephone': {
            required: true,
            pattern: /^[+]?[0-9\\s\\-]{8,20}\$/,
            messages: {
                required: 'Le téléphone est obligatoire.',
                pattern: 'Format invalide (8-20 chiffres, ex: +216 12 345 678).'
            }
        },
        'pays': {
            required: true,
            minLength: 2,
            pattern: /^[a-zA-ZÀ-ÿ\\s\\-]+\$/,
            messages: {
                required: 'Le pays est obligatoire.',
                minLength: 'Minimum 2 caractères.',
                pattern: 'Le pays ne doit contenir que des lettres.'
            }
        },
        'adresse': {
            required: true,
            minLength: 5,
            messages: {
                required: \"L'adresse est obligatoire.\",
                minLength: \"L'adresse doit contenir au moins 5 caractères.\"
            }
        },
        'secteur': {
            required: true,
            messages: { required: 'Le secteur est obligatoire.' }
        },
        'taille': {
            required: true,
            messages: { required: 'La taille est obligatoire.' }
        }
    };

    function findField(name) {
        return document.querySelector('[name*=\"[' + name + ']\"]');
    }

    function showError(field, msg) {
        field.classList.remove('is-valid');
        field.classList.add('is-invalid');
        var fb = field.parentElement.querySelector('.invalid-feedback-js');
        if (!fb) {
            fb = document.createElement('div');
            fb.className = 'invalid-feedback-js';
            field.parentElement.appendChild(fb);
        }
        fb.textContent = msg;
    }

    function showValid(field) {
        field.classList.remove('is-invalid');
        field.classList.add('is-valid');
        var fb = field.parentElement.querySelector('.invalid-feedback-js');
        if (fb) fb.remove();
    }

    function validateField(name, rule) {
        var field = findField(name);
        if (!field) return true;
        var val = field.value.trim();

        if (rule.required && !val) {
            showError(field, rule.messages.required);
            return false;
        }
        if (val && rule.minLength && val.length < rule.minLength) {
            showError(field, rule.messages.minLength);
            return false;
        }
        if (val && rule.maxLength && val.length > rule.maxLength) {
            showError(field, rule.messages.maxLength || 'Trop long.');
            return false;
        }
        if (val && rule.pattern && !rule.pattern.test(val)) {
            showError(field, rule.messages.pattern);
            return false;
        }
        if (val || !rule.required) {
            showValid(field);
        }
        return true;
    }

    // Real-time validation on blur/change
    Object.keys(rules).forEach(function(name) {
        var field = findField(name);
        if (field) {
            field.addEventListener('blur', function() { validateField(name, rules[name]); });
            field.addEventListener('change', function() { validateField(name, rules[name]); });
            field.addEventListener('input', function() {
                if (field.classList.contains('is-invalid')) {
                    validateField(name, rules[name]);
                }
            });
        }
    });

    // Validate all on submit
    var form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            var allValid = true;
            Object.keys(rules).forEach(function(name) {
                if (!validateField(name, rules[name])) {
                    allValid = false;
                }
            });
            if (!allValid) {
                e.preventDefault();
                // Scroll to first error
                var firstError = document.querySelector('.is-invalid');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                }
            }
        });
    }
});
</script>

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var latInput = document.querySelector('[name*=\"[latitude]\"]');
        var lngInput = document.querySelector('[name*=\"[longitude]\"]');
        
        var initialLat = latInput.value || 36.8065; // Tunis par défaut
        var initialLng = lngInput.value || 10.1815;
        
        var map = L.map('map-picker').setView([initialLat, initialLng], 13);
        
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        var marker;
        if (latInput.value && lngInput.value) {
            marker = L.marker([initialLat, initialLng]).addTo(map);
        }

        map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(6);
            var lng = e.latlng.lng.toFixed(6);
            
            latInput.value = lat;
            lngInput.value = lng;
            
            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }
        });
    });
</script>
", "admin/entreprise/_form.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\entreprise\\_form.html.twig");
    }
}
