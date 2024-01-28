<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_9096477f930c7cbfa3969c41fd44541b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>EShop</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">

    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap\" rel=\"stylesheet\">

    <!-- Font Awesome -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
<!-- Page Header Start -->
<div class=\"container-fluid bg-secondary mb-5\">
    <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Login</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">registration</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">Login</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class=\"row px-xl-5\">
    <div class=\"col-lg-7 mb-5\">
        <form method=\"post\">
            ";
        // line 46
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageKey", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageData", [], "any", false, false, false, 47), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 49
        echo "
            ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "userIdentifier", [], "any", false, false, false, 52), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                </div>
            ";
        }
        // line 55
        echo "
            <h1 class=\"h3 mb-3 font-weight-normal\">      </h1>
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">


            ";
        // line 65
        echo "            ";
        // line 66
        echo "
            <div class=\"form-group d-md-flex\">
                <div class=\"w-50\">
                    <label class=\"checkbox-wrap checkbox-primary\">Remember Me
                        <input type=\"checkbox\" checked>
                        <span class=\"checkmark\"></span>
                    </label>
                </div>
                <div class=\"w-50 text-md-right\">
                    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgotten_password");
        echo "\" style=\"color: #7b7d85\">Forgot Password</a>
                </div>
            </div>

            <button class=\"btn btn-lg btn-primary mt-2\" type=\"submit\">
                Sign in
            </button>
        </form>
    </div>
</div>


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

<!-- Contact Javascript File -->
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mail/jqBootstrapValidation.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mail/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 100,  192 => 99,  188 => 98,  182 => 95,  178 => 94,  156 => 75,  145 => 66,  143 => 65,  137 => 61,  131 => 58,  126 => 55,  118 => 52,  115 => 51,  113 => 50,  110 => 49,  104 => 47,  102 => 46,  88 => 35,  76 => 26,  70 => 23,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>EShop</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{ asset('assets/img/favicon.ico')}}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">

    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap\" rel=\"stylesheet\">

    <!-- Font Awesome -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('assets/css/style.css')}}\" rel=\"stylesheet\">
</head>

<body>
<!-- Page Header Start -->
<div class=\"container-fluid bg-secondary mb-5\">
    <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Login</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"{{ path('app_register') }}\">registration</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">Login</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class=\"row px-xl-5\">
    <div class=\"col-lg-7 mb-5\">
        <form method=\"post\">
            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            {% endif %}

            <h1 class=\"h3 mb-3 font-weight-normal\">      </h1>
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">


            {#        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.#}
            {#        See https://symfony.com/doc/current/security/remember_me.html#}

            <div class=\"form-group d-md-flex\">
                <div class=\"w-50\">
                    <label class=\"checkbox-wrap checkbox-primary\">Remember Me
                        <input type=\"checkbox\" checked>
                        <span class=\"checkmark\"></span>
                    </label>
                </div>
                <div class=\"w-50 text-md-right\">
                    <a href=\"{{ path('forgotten_password') }}\" style=\"color: #7b7d85\">Forgot Password</a>
                </div>
            </div>

            <button class=\"btn btn-lg btn-primary mt-2\" type=\"submit\">
                Sign in
            </button>
        </form>
    </div>
</div>


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('assets/lib/easing/easing.min.js')}}\"></script>
<script src=\"{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}\"></script>

<!-- Contact Javascript File -->
<script src=\"{{ asset('assets/mail/jqBootstrapValidation.min.js')}}\"></script>
<script src=\"{{ asset('assets/mail/contact.js')}}\"></script>
<script src=\"{{ asset('assets/js/main.js') }}\"></script>

<!-- Template Javascript -->

</body>

</html>", "security/login.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\security\\login.html.twig");
    }
}
