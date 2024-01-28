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

/* security/reset_password.html.twig */
class __TwigTemplate_517943b76b55e5f5110496e47a7266f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

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
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">New Password</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">login</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">New Password</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class=\"row px-xl-5\">
    <div class=\"col-lg-7 mb-5\">

    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 45, $this->source); })()), 'form_start');
        echo "
    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-primary\">send</button>
    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 48, $this->source); })()), 'form_end');
        echo "

    </div>
</div>


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

<!-- Contact Javascript File -->
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mail/jqBootstrapValidation.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mail/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->

</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 67,  140 => 66,  136 => 65,  130 => 62,  126 => 61,  110 => 48,  105 => 46,  101 => 45,  88 => 35,  76 => 26,  70 => 23,  56 => 12,  43 => 1,);
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
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">New Password</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"{{ path('app_login') }}\">login</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">New Password</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class=\"row px-xl-5\">
    <div class=\"col-lg-7 mb-5\">

    {{ form_start(passForm) }}
    {{ form_row(passForm.password) }}
    <button type=\"submit\" class=\"btn btn-primary\">send</button>
    {{ form_end(passForm) }}

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

</html>
", "security/reset_password.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\security\\reset_password.html.twig");
    }
}
