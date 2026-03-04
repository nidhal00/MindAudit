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

/* admin/base.html.twig */
class __TwigTemplate_75a4c0ac567d9e40e1fa85405792d2cc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"MindAudit Admin Dashboard\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/sb-admin-2/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/sb-admin-2/css/sb-admin-2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <style>
        :root {
            --primary-gradient: linear-gradient(180deg, #1a237e 0%, #0d47a1 100%);
            --glass-bg: rgba(255, 255, 255, 0.95);
            --glass-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            --sidebar-width: 260px;
        }

        body { font-family: 'Inter', 'Nunito', sans-serif; background-color: #f4f7fe; color: #334155; }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: white;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--glass-shadow);
        }

        .sidebar {
            width: var(--sidebar-width) !important;
            background: var(--primary-gradient) !important;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .sidebar-brand {
            height: 4.375rem;
            text-transform: none !important;
            font-size: 1.2rem !important;
            letter-spacing: -0.02em;
        }

        .sidebar .nav-item .nav-link {
            padding: 1rem 1.5rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-item .nav-link i {
            font-size: 1.1rem;
            margin-right: 0.75rem;
            width: 20px;
            text-align: center;
        }

        .sidebar .nav-item.active .nav-link,
        .sidebar .nav-item .nav-link:hover {
            color: #fff !important;
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar .nav-item.active .nav-link {
            font-weight: 700;
            border-left: 4px solid #fff;
        }

        .btn {
            border-radius: 10px;
            font-weight: 600;
            letter-spacing: -0.01em;
        }

        .btn-primary { 
            background: #4e73df; 
            border: none; 
            box-shadow: 0 4px 14px rgba(78, 115, 223, 0.25);
        }
        
        .btn-primary:hover { 
            background: #224abe; 
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(78, 115, 223, 0.35);
        }

        .topbar {
            background: white !important;
            border-bottom: 1px solid #eef2f6;
        }
    </style>
    ";
        // line 110
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 111
        yield "
</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">MindAudit <sup>AI</sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Gestion
            </div>

            <!-- Nav Item - Entreprises -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_index");
        yield "\">
                    <i class=\"fas fa-fw fa-building\"></i>
                    <span>Entreprises</span></a>
            </li>

            <!-- Nav Item - Documents -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_index");
        yield "\">
                    <i class=\"fas fa-fw fa-file-alt\"></i>
                    <span>Documents</span></a>
            </li>

            <!-- Nav Item - Calendar -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_calendar");
        yield "\">
                    <i class=\"fas fa-fw fa-calendar\"></i>
                    <span>Calendrier Entreprises</span></a>
            </li>

            <!-- Nav Item - History -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_history_index");
        yield "\">
                    <i class=\"fas fa-fw fa-history\"></i>
                    <span>Historique</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Administration
            </div>

            <!-- Nav Item - Utilisateurs -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_utilisateur_index");
        yield "\">
                    <i class=\"fas fa-fw fa-users\"></i>
                    <span>Utilisateurs</span></a>
            </li>

            <!-- Nav Item - Rôles -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_role_index");
        yield "\">
                    <i class=\"fas fa-fw fa-user-shield\"></i>
                    <span>Rôles & Permissions</span></a>
            </li>

             <!-- Divider -->
            <hr class=\"sidebar-divider\">
            
             <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">
                    <i class=\"fas fa-fw fa-home\"></i>
                    <span>Retour Site Public</span></a>
            </li>


            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 240
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "user", [], "any", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "user", [], "any", false, false, false, 240), "email", [], "any", false, false, false, 240), "html", null, true)) : ("Admin"));
        yield "</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/sb-admin-2/img/undraw_profile.svg"), "html", null, true);
        yield "\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profil
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "flashes", [], "any", false, false, false, 268));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 269
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 270
                yield "                            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                                ";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        yield "
                    ";
        // line 279
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 280
        yield "
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; MindAudit ";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/sb-admin-2/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/sb-admin-2/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 318
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 319
        yield "
    <!-- Chatbot Widget -->
    <div id=\"chatbot-container\" class=\"shadow\">
        <div id=\"chatbot-header\" class=\"d-flex justify-content-between align-items-center\">
            <span><i class=\"fas fa-robot mr-2\"></i>MindAudit AI Assistant</span>
            <button id=\"chatbot-close\" class=\"btn btn-sm btn-link text-white\"><i class=\"fas fa-times\"></i></button>
        </div>
        <div id=\"chatbot-messages\">
            <div class=\"message bot\">Bonjour ! Je suis votre assistant MindAudit AI. Comment puis-je vous aider aujourd'hui ?</div>
        </div>
        <div id=\"chatbot-input-area\" class=\"input-group\">
            <input type=\"text\" id=\"chatbot-input\" class=\"form-control\" placeholder=\"Posez une question...\">
            <div class=\"input-group-append\">
                <button id=\"chatbot-send\" class=\"btn btn-primary\"><i class=\"fas fa-paper-plane\"></i></button>
            </div>
        </div>
    </div>
    <button id=\"chatbot-toggle\" class=\"btn btn-primary shadow-lg\">
        <i class=\"fas fa-comments\"></i>
    </button>

    <style>
        #chatbot-toggle {
            position: fixed;
            bottom: 30px;
            right: 90px; /* Decalage pour ne pas superposer le bouton Scroll Top */
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            font-size: 28px;
            box-shadow: 0 5px 20px rgba(78, 115, 223, 0.5);
            border: 3px solid white;
            transition: all 0.3s ease;
        }

        #chatbot-toggle:hover {
            transform: scale(1.1) rotate(5deg);
        }

        #chatbot-container {
            position: fixed;
            bottom: 110px;
            right: 30px;
            width: 380px;
            height: 500px;
            background: white;
            border-radius: 16px;
            display: none;
            flex-direction: column;
            z-index: 2000;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.2);
            animation: slideUp 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        #chatbot-header {
            background: var(--primary-gradient);
            color: white;
            padding: 15px;
            font-weight: 700;
        }

        #chatbot-messages {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            background: #f8f9fc;
        }

        .message {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            max-width: 80%;
            font-size: 14px;
        }

        .message.bot {
            background: white;
            align-self: flex-start;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .message.user {
            background: #4e73df;
            color: white;
            align-self: flex-end;
            margin-left: auto;
        }

        #chatbot-input-area {
            padding: 10px;
            border-top: 1px solid #e3e6f0;
        }

        #chatbot-input {
            border-radius: 20px !important;
            border: 1px solid #e3e6f0;
            padding-left: 15px;
        }

        #chatbot-send {
            border-radius: 50% !important;
            width: 38px;
            height: 38px;
            padding: 0;
            margin-left: 5px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('chatbot-toggle');
            const container = document.getElementById('chatbot-container');
            const close = document.getElementById('chatbot-close');
            const send = document.getElementById('chatbot-send');
            const input = document.getElementById('chatbot-input');
            const messages = document.getElementById('chatbot-messages');
            let lastQuestion = '';

            toggle.addEventListener('click', () => {
                const isHidden = container.style.display === 'none' || !container.style.display;
                container.style.display = isHidden ? 'flex' : 'none';
            });

            close.addEventListener('click', () => {
                container.style.display = 'none';
            });

            function addMessage(text, type, withRetry = false) {
                const div = document.createElement('div');
                div.className = `message \${type}`;
                div.innerHTML = text.replace(/\\n/g, '<br>');

                if (withRetry) {
                    const retryBtn = document.createElement('button');
                    retryBtn.textContent = '🔄 Réessayer';
                    retryBtn.style.cssText = 'display:block;margin-top:8px;font-size:11px;padding:3px 10px;border:1px solid #4e73df;color:#4e73df;background:white;border-radius:10px;cursor:pointer;';
                    retryBtn.onclick = () => {
                        div.remove();
                        askAI(lastQuestion);
                    };
                    div.appendChild(retryBtn);
                }

                messages.appendChild(div);
                messages.scrollTop = messages.scrollHeight;
                return div;
            }

            function addTypingIndicator() {
                const div = document.createElement('div');
                div.className = 'message bot';
                div.id = 'typing-indicator';
                div.innerHTML = '<span style=\"display:flex;gap:4px;align-items:center;padding:4px 0\">' +
                    '<span style=\"width:8px;height:8px;border-radius:50%;background:#4e73df;animation:bounce 0.8s infinite alternate\"></span>' +
                    '<span style=\"width:8px;height:8px;border-radius:50%;background:#4e73df;animation:bounce 0.8s 0.2s infinite alternate\"></span>' +
                    '<span style=\"width:8px;height:8px;border-radius:50%;background:#4e73df;animation:bounce 0.8s 0.4s infinite alternate\"></span>' +
                    '</span>';
                messages.appendChild(div);
                messages.scrollTop = messages.scrollHeight;
                return div;
            }

            async function askAI(question) {
                lastQuestion = question;
                addMessage(question, 'user');
                input.value = '';
                send.disabled = true;

                const typing = addTypingIndicator();

                try {
                    const response = await fetch('";
        // line 501
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_chatbot_ask");
        yield "', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ question: question })
                    });
                    const data = await response.json();
                    typing.remove();

                    const hasRateLimit = data.response && (
                        data.response.includes('surchargé') || 
                        data.response.includes('Réessayez')
                    );
                    addMessage(data.response, 'bot', hasRateLimit);
                } catch (e) {
                    typing.remove();
                    addMessage(\"⚠️ Erreur de connexion. Vérifiez que le serveur est actif.\", 'bot', true);
                } finally {
                    send.disabled = false;
                }
            }

            send.addEventListener('click', () => {
                if (input.value.trim()) askAI(input.value.trim());
            });

            input.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && input.value.trim()) askAI(input.value.trim());
            });
        });
    </script>
    <style>
        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-6px); }
        }
    </style>
</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "MindAudit Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 110
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

    // line 279
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

    // line 318
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
        return "admin/base.html.twig";
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
        return array (  741 => 318,  725 => 279,  709 => 110,  692 => 12,  644 => 501,  460 => 319,  458 => 318,  453 => 316,  447 => 313,  441 => 310,  437 => 309,  416 => 291,  403 => 280,  401 => 279,  398 => 278,  392 => 277,  380 => 271,  375 => 270,  370 => 269,  366 => 268,  347 => 252,  334 => 242,  329 => 240,  288 => 202,  276 => 193,  266 => 186,  248 => 171,  238 => 164,  228 => 157,  218 => 150,  200 => 135,  185 => 123,  171 => 111,  169 => 110,  77 => 21,  68 => 15,  62 => 12,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"MindAudit Admin Dashboard\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}MindAudit Admin{% endblock %}</title>

    <!-- Custom fonts for this template-->
    <link href=\"{{ asset('assets/sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('assets/sb-admin-2/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <style>
        :root {
            --primary-gradient: linear-gradient(180deg, #1a237e 0%, #0d47a1 100%);
            --glass-bg: rgba(255, 255, 255, 0.95);
            --glass-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            --sidebar-width: 260px;
        }

        body { font-family: 'Inter', 'Nunito', sans-serif; background-color: #f4f7fe; color: #334155; }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: white;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--glass-shadow);
        }

        .sidebar {
            width: var(--sidebar-width) !important;
            background: var(--primary-gradient) !important;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .sidebar-brand {
            height: 4.375rem;
            text-transform: none !important;
            font-size: 1.2rem !important;
            letter-spacing: -0.02em;
        }

        .sidebar .nav-item .nav-link {
            padding: 1rem 1.5rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-item .nav-link i {
            font-size: 1.1rem;
            margin-right: 0.75rem;
            width: 20px;
            text-align: center;
        }

        .sidebar .nav-item.active .nav-link,
        .sidebar .nav-item .nav-link:hover {
            color: #fff !important;
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar .nav-item.active .nav-link {
            font-weight: 700;
            border-left: 4px solid #fff;
        }

        .btn {
            border-radius: 10px;
            font-weight: 600;
            letter-spacing: -0.01em;
        }

        .btn-primary { 
            background: #4e73df; 
            border: none; 
            box-shadow: 0 4px 14px rgba(78, 115, 223, 0.25);
        }
        
        .btn-primary:hover { 
            background: #224abe; 
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(78, 115, 223, 0.35);
        }

        .topbar {
            background: white !important;
            border-bottom: 1px solid #eef2f6;
        }
    </style>
    {% block stylesheets %}{% endblock %}

</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{ path('app_admin_dashboard') }}\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">MindAudit <sup>AI</sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('app_admin_dashboard') }}\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Gestion
            </div>

            <!-- Nav Item - Entreprises -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_entreprise_index') }}\">
                    <i class=\"fas fa-fw fa-building\"></i>
                    <span>Entreprises</span></a>
            </li>

            <!-- Nav Item - Documents -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_document_index') }}\">
                    <i class=\"fas fa-fw fa-file-alt\"></i>
                    <span>Documents</span></a>
            </li>

            <!-- Nav Item - Calendar -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_admin_calendar') }}\">
                    <i class=\"fas fa-fw fa-calendar\"></i>
                    <span>Calendrier Entreprises</span></a>
            </li>

            <!-- Nav Item - History -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_admin_history_index') }}\">
                    <i class=\"fas fa-fw fa-history\"></i>
                    <span>Historique</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Administration
            </div>

            <!-- Nav Item - Utilisateurs -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_admin_utilisateur_index') }}\">
                    <i class=\"fas fa-fw fa-users\"></i>
                    <span>Utilisateurs</span></a>
            </li>

            <!-- Nav Item - Rôles -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_admin_role_index') }}\">
                    <i class=\"fas fa-fw fa-user-shield\"></i>
                    <span>Rôles & Permissions</span></a>
            </li>

             <!-- Divider -->
            <hr class=\"sidebar-divider\">
            
             <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_front_home') }}\">
                    <i class=\"fas fa-fw fa-home\"></i>
                    <span>Retour Site Public</span></a>
            </li>


            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user ? app.user.email : 'Admin' }}</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"{{ asset('assets/sb-admin-2/img/undraw_profile.svg') }}\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profil
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    {% block body %}{% endblock %}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; MindAudit {{ \"now\"|date(\"Y\") }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src=\"{{ asset('assets/sb-admin-2/vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"{{ asset('assets/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"{{ asset('assets/sb-admin-2/js/sb-admin-2.min.js') }}\"></script>

    {% block javascripts %}{% endblock %}

    <!-- Chatbot Widget -->
    <div id=\"chatbot-container\" class=\"shadow\">
        <div id=\"chatbot-header\" class=\"d-flex justify-content-between align-items-center\">
            <span><i class=\"fas fa-robot mr-2\"></i>MindAudit AI Assistant</span>
            <button id=\"chatbot-close\" class=\"btn btn-sm btn-link text-white\"><i class=\"fas fa-times\"></i></button>
        </div>
        <div id=\"chatbot-messages\">
            <div class=\"message bot\">Bonjour ! Je suis votre assistant MindAudit AI. Comment puis-je vous aider aujourd'hui ?</div>
        </div>
        <div id=\"chatbot-input-area\" class=\"input-group\">
            <input type=\"text\" id=\"chatbot-input\" class=\"form-control\" placeholder=\"Posez une question...\">
            <div class=\"input-group-append\">
                <button id=\"chatbot-send\" class=\"btn btn-primary\"><i class=\"fas fa-paper-plane\"></i></button>
            </div>
        </div>
    </div>
    <button id=\"chatbot-toggle\" class=\"btn btn-primary shadow-lg\">
        <i class=\"fas fa-comments\"></i>
    </button>

    <style>
        #chatbot-toggle {
            position: fixed;
            bottom: 30px;
            right: 90px; /* Decalage pour ne pas superposer le bouton Scroll Top */
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            font-size: 28px;
            box-shadow: 0 5px 20px rgba(78, 115, 223, 0.5);
            border: 3px solid white;
            transition: all 0.3s ease;
        }

        #chatbot-toggle:hover {
            transform: scale(1.1) rotate(5deg);
        }

        #chatbot-container {
            position: fixed;
            bottom: 110px;
            right: 30px;
            width: 380px;
            height: 500px;
            background: white;
            border-radius: 16px;
            display: none;
            flex-direction: column;
            z-index: 2000;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.2);
            animation: slideUp 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        #chatbot-header {
            background: var(--primary-gradient);
            color: white;
            padding: 15px;
            font-weight: 700;
        }

        #chatbot-messages {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            background: #f8f9fc;
        }

        .message {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            max-width: 80%;
            font-size: 14px;
        }

        .message.bot {
            background: white;
            align-self: flex-start;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .message.user {
            background: #4e73df;
            color: white;
            align-self: flex-end;
            margin-left: auto;
        }

        #chatbot-input-area {
            padding: 10px;
            border-top: 1px solid #e3e6f0;
        }

        #chatbot-input {
            border-radius: 20px !important;
            border: 1px solid #e3e6f0;
            padding-left: 15px;
        }

        #chatbot-send {
            border-radius: 50% !important;
            width: 38px;
            height: 38px;
            padding: 0;
            margin-left: 5px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('chatbot-toggle');
            const container = document.getElementById('chatbot-container');
            const close = document.getElementById('chatbot-close');
            const send = document.getElementById('chatbot-send');
            const input = document.getElementById('chatbot-input');
            const messages = document.getElementById('chatbot-messages');
            let lastQuestion = '';

            toggle.addEventListener('click', () => {
                const isHidden = container.style.display === 'none' || !container.style.display;
                container.style.display = isHidden ? 'flex' : 'none';
            });

            close.addEventListener('click', () => {
                container.style.display = 'none';
            });

            function addMessage(text, type, withRetry = false) {
                const div = document.createElement('div');
                div.className = `message \${type}`;
                div.innerHTML = text.replace(/\\n/g, '<br>');

                if (withRetry) {
                    const retryBtn = document.createElement('button');
                    retryBtn.textContent = '🔄 Réessayer';
                    retryBtn.style.cssText = 'display:block;margin-top:8px;font-size:11px;padding:3px 10px;border:1px solid #4e73df;color:#4e73df;background:white;border-radius:10px;cursor:pointer;';
                    retryBtn.onclick = () => {
                        div.remove();
                        askAI(lastQuestion);
                    };
                    div.appendChild(retryBtn);
                }

                messages.appendChild(div);
                messages.scrollTop = messages.scrollHeight;
                return div;
            }

            function addTypingIndicator() {
                const div = document.createElement('div');
                div.className = 'message bot';
                div.id = 'typing-indicator';
                div.innerHTML = '<span style=\"display:flex;gap:4px;align-items:center;padding:4px 0\">' +
                    '<span style=\"width:8px;height:8px;border-radius:50%;background:#4e73df;animation:bounce 0.8s infinite alternate\"></span>' +
                    '<span style=\"width:8px;height:8px;border-radius:50%;background:#4e73df;animation:bounce 0.8s 0.2s infinite alternate\"></span>' +
                    '<span style=\"width:8px;height:8px;border-radius:50%;background:#4e73df;animation:bounce 0.8s 0.4s infinite alternate\"></span>' +
                    '</span>';
                messages.appendChild(div);
                messages.scrollTop = messages.scrollHeight;
                return div;
            }

            async function askAI(question) {
                lastQuestion = question;
                addMessage(question, 'user');
                input.value = '';
                send.disabled = true;

                const typing = addTypingIndicator();

                try {
                    const response = await fetch('{{ path('api_chatbot_ask') }}', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ question: question })
                    });
                    const data = await response.json();
                    typing.remove();

                    const hasRateLimit = data.response && (
                        data.response.includes('surchargé') || 
                        data.response.includes('Réessayez')
                    );
                    addMessage(data.response, 'bot', hasRateLimit);
                } catch (e) {
                    typing.remove();
                    addMessage(\"⚠️ Erreur de connexion. Vérifiez que le serveur est actif.\", 'bot', true);
                } finally {
                    send.disabled = false;
                }
            }

            send.addEventListener('click', () => {
                if (input.value.trim()) askAI(input.value.trim());
            });

            input.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && input.value.trim()) askAI(input.value.trim());
            });
        });
    </script>
    <style>
        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-6px); }
        }
    </style>
</body>

</html>
", "admin/base.html.twig", "C:\\Users\\gouad\\Mindaudit\\backend-php\\templates\\admin\\base.html.twig");
    }
}
