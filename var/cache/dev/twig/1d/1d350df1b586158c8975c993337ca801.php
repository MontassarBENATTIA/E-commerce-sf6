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

/* template.html.twig */
class __TwigTemplate_7ef2530e887bd411977feb648561b3ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

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
<!-- Topbar Start -->
<div class=\"container-fluid\">
    <div class=\"row bg-secondary py-2 px-xl-5\">
        <div class=\"col-lg-6 d-none d-lg-block\">

        </div>
        <div class=\"col-lg-6 text-center text-lg-right\">
            <div class=\"d-inline-flex align-items-center\">
                <a class=\"text-dark px-2\" href=\"\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a class=\"text-dark px-2\" href=\"\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a class=\"text-dark px-2\" href=\"\">
                    <i class=\"fab fa-linkedin-in\"></i>
                </a>
                <a class=\"text-dark px-2\" href=\"\">
                    <i class=\"fab fa-instagram\"></i>
                </a>
                <a class=\"text-dark pl-2\" href=\"\">
                    <i class=\"fab fa-youtube\"></i>
                </a>
            </div>
        </div>
    </div>
    <div class=\"row align-items-center py-3 px-xl-5\">
        <div class=\"col-lg-3 d-none d-lg-block\">
            <a href=\"\" class=\"text-decoration-none\">
                <h1 class=\"m-0 display-5 font-weight-semi-bold\"><span class=\"text-primary font-weight-bold border px-3 mr-1\">E</span>Shop</h1>
            </a>
        </div>
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\Admin\\ProductController::searchForm"));
        echo "
        <div class=\"col-lg-3 col-6 text-right\">
        </div>
    </div>
</div>
<!-- Topbar End -->






<!-- Navbar Start -->
<div class=\"container-fluid mb-5\">
    <div class=\"row border-top px-xl-5\">



        <div class=\"col-lg-3 d-none d-lg-block\">


            <a class=\"btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; margin-top: -1px; padding: 0 30px;\">
                <h6 class=\"m-0\">Categories</h6>
                <i class=\"fa fa-angle-down text-dark\"></i>
            </a>
            <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 1;\">
                <div class=\"navbar-nav w-100 overflow-hidden\" style=\"height: 410px\">
                    <a href=\"\" class=\"nav-item nav-link\">Laptop</a>
                    <a href=\"\" class=\"nav-item nav-link\">Desktop computer</a>
                    <a href=\"\" class=\"nav-item nav-link\">Tablets</a>
                    <a href=\"\" class=\"nav-item nav-link\">Storage</a>
                    <a href=\"\" class=\"nav-item nav-link\">Smartphone</a>
                    <a href=\"\" class=\"nav-item nav-link\">Peripherals & Accessories</a>
                </div>
            </nav>
        </div>

        <div class=\"col-lg-9\">
            <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0\">
                <a href=\"\" class=\"text-decoration-none d-block d-lg-none\">
                    <h1 class=\"m-0 display-5 font-weight-semi-bold\"><span class=\"text-primary font-weight-bold border px-3 mr-1\">E</span>Shop</h1>
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav mr-auto py-0\">
                        <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\" class=\"nav-item nav-link\">Shop</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\" class=\"dropdown-item\">Shopping Cart</a>
                                <a href=\"/commande\" class=\"dropdown-item\">Checkout</a>
                                <a href=\"/user/orders\" class=\"dropdown-item\">Orders</a>
                            </div>
                        </div>
                        <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact.index");
        echo "\" class=\"nav-item nav-link\">Contact</a>
                        ";
        // line 120
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 121
            echo "                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Products</a>
                                <div class=\"dropdown-menu rounded-0 m-0\">
                                    <a href=\"/product/creation\" class=\"dropdown-item\">Add</a>
                                    <a href=\"/product\" class=\"dropdown-item\">Details</a>
                                </div>
                            </div>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Categories</a>
                                <div class=\"dropdown-menu rounded-0 m-0\">
                                    <a href=\"/category/creation\" class=\"dropdown-item\">Add</a>
                                    <a href=\"/category\" class=\"dropdown-item\">Details</a>
                                </div>
                            </div>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Admin</a>
                                <div class=\"dropdown-menu rounded-0 m-0\">
                                    <a href=\"/editor/add\" class=\"dropdown-item\">Add</a>
                                    <a href=\"/editor/alls\" class=\"dropdown-item\">Details</a>
                                </div>
                            </div>
                            <a href=\"/reclamation\" class=\"nav-item nav-link\">Show contact</a>
                            <a href=\"/commandes\" class=\"nav-item nav-link\">Orders</a>
                        ";
        }
        // line 145
        echo "                    </div>

                    <div class=\"navbar-nav ml-auto py-0\">
                        ";
        // line 148
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 149
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-item nav-link\">Logout</a>
                        ";
        } else {
            // line 151
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-item nav-link\">Login</a>
                            <a href=\"";
            // line 152
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"nav-item nav-link\">Register</a>
                        ";
        }
        // line 154
        echo "                    </div>
                </div>
            </nav>
            <div id=\"header-carousel\" class=\"carousel slide\" data-ride=\"carousel\" >




            </div>
        </div>

    </div>
</div>
<!-- Navbar End -->
";
        // line 168
        $this->displayBlock('body', $context, $blocks);
        // line 171
        echo "




<!-- Footer Start -->
<div class=\"container-fluid bg-secondary text-dark mt-5 pt-5\">
    <div class=\"row px-xl-5 pt-5\">
        <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
            <a href=\"\" class=\"text-decoration-none\">
                <h1 class=\"mb-4 display-5 font-weight-semi-bold\"><span class=\"text-primary font-weight-bold border border-white px-3 mr-1\">E</span>Shop</h1>
            </a>
            <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
        </div>


        <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
            <div class=\"d-flex flex-column justify-content-start\">
                <h5 class=\"font-weight-bold text-dark mb-4\">Informations</h5>
                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary mr-3\"></i>Tunis, Ariana Soghra, TEKUP</p>
                <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary mr-3\"></i>projetsymfony7@gmail.com</p>
                <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary mr-3\"></i>+216 23 814 000</p>
            </div>
        </div>

        <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
            <div class=\"d-flex flex-column justify-content-start\">
                <h5 class=\"font-weight-bold text-dark mb-4\">Quick Links</h5>
                <div class=\"d-flex flex-column justify-content-start\">
                    <a class=\"text-dark mb-2\" href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                    <a class=\"text-dark mb-2\" href=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                    <a class=\"text-dark mb-2\" href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                    <a class=\"text-dark mb-2\" href=\"/commande\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                    <a class=\"text-dark\" href=\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact.index");
        echo "\"><i class=\"fa fa-angle-right mr-2\"></i>Contact</a>
                </div>
            </div>
        </div>



    </div>
    <div class=\"row border-top border-light mx-xl-5 py-4\">
        <div class=\"col-md-6 px-xl-0\">
            <p class=\"mb-md-0 text-center text-md-left text-dark\">
                &copy; <a class=\"text-dark font-weight-semi-bold\" href=\"#\">Project Symfony</a> GLSI-Q

            </p>
        </div>

    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

<!-- Contact Javascript File -->
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mail/jqBootstrapValidation.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mail/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 168
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 169
        echo "    Template Body
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 169,  367 => 168,  350 => 237,  346 => 236,  342 => 235,  336 => 232,  332 => 231,  302 => 204,  297 => 202,  293 => 201,  289 => 200,  258 => 171,  256 => 168,  240 => 154,  235 => 152,  230 => 151,  224 => 149,  222 => 148,  217 => 145,  191 => 121,  189 => 120,  185 => 119,  177 => 114,  170 => 110,  166 => 109,  116 => 62,  77 => 26,  71 => 23,  57 => 12,  44 => 1,);
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
<!-- Topbar Start -->
<div class=\"container-fluid\">
    <div class=\"row bg-secondary py-2 px-xl-5\">
        <div class=\"col-lg-6 d-none d-lg-block\">

        </div>
        <div class=\"col-lg-6 text-center text-lg-right\">
            <div class=\"d-inline-flex align-items-center\">
                <a class=\"text-dark px-2\" href=\"\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a class=\"text-dark px-2\" href=\"\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a class=\"text-dark px-2\" href=\"\">
                    <i class=\"fab fa-linkedin-in\"></i>
                </a>
                <a class=\"text-dark px-2\" href=\"\">
                    <i class=\"fab fa-instagram\"></i>
                </a>
                <a class=\"text-dark pl-2\" href=\"\">
                    <i class=\"fab fa-youtube\"></i>
                </a>
            </div>
        </div>
    </div>
    <div class=\"row align-items-center py-3 px-xl-5\">
        <div class=\"col-lg-3 d-none d-lg-block\">
            <a href=\"\" class=\"text-decoration-none\">
                <h1 class=\"m-0 display-5 font-weight-semi-bold\"><span class=\"text-primary font-weight-bold border px-3 mr-1\">E</span>Shop</h1>
            </a>
        </div>
        {{ render(controller('App\\\\Controller\\\\Admin\\\\ProductController::searchForm')) }}
        <div class=\"col-lg-3 col-6 text-right\">
        </div>
    </div>
</div>
<!-- Topbar End -->






<!-- Navbar Start -->
<div class=\"container-fluid mb-5\">
    <div class=\"row border-top px-xl-5\">



        <div class=\"col-lg-3 d-none d-lg-block\">


            <a class=\"btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; margin-top: -1px; padding: 0 30px;\">
                <h6 class=\"m-0\">Categories</h6>
                <i class=\"fa fa-angle-down text-dark\"></i>
            </a>
            <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 1;\">
                <div class=\"navbar-nav w-100 overflow-hidden\" style=\"height: 410px\">
                    <a href=\"\" class=\"nav-item nav-link\">Laptop</a>
                    <a href=\"\" class=\"nav-item nav-link\">Desktop computer</a>
                    <a href=\"\" class=\"nav-item nav-link\">Tablets</a>
                    <a href=\"\" class=\"nav-item nav-link\">Storage</a>
                    <a href=\"\" class=\"nav-item nav-link\">Smartphone</a>
                    <a href=\"\" class=\"nav-item nav-link\">Peripherals & Accessories</a>
                </div>
            </nav>
        </div>

        <div class=\"col-lg-9\">
            <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0\">
                <a href=\"\" class=\"text-decoration-none d-block d-lg-none\">
                    <h1 class=\"m-0 display-5 font-weight-semi-bold\"><span class=\"text-primary font-weight-bold border px-3 mr-1\">E</span>Shop</h1>
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav mr-auto py-0\">
                        <a href=\"{{path('home')}}\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"{{path('product_index')}}\" class=\"nav-item nav-link\">Shop</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"{{path('cart_index')}}\" class=\"dropdown-item\">Shopping Cart</a>
                                <a href=\"/commande\" class=\"dropdown-item\">Checkout</a>
                                <a href=\"/user/orders\" class=\"dropdown-item\">Orders</a>
                            </div>
                        </div>
                        <a href=\"{{path('contact.index')}}\" class=\"nav-item nav-link\">Contact</a>
                        {% if is_granted('ROLE_ADMIN') %}
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Products</a>
                                <div class=\"dropdown-menu rounded-0 m-0\">
                                    <a href=\"/product/creation\" class=\"dropdown-item\">Add</a>
                                    <a href=\"/product\" class=\"dropdown-item\">Details</a>
                                </div>
                            </div>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Categories</a>
                                <div class=\"dropdown-menu rounded-0 m-0\">
                                    <a href=\"/category/creation\" class=\"dropdown-item\">Add</a>
                                    <a href=\"/category\" class=\"dropdown-item\">Details</a>
                                </div>
                            </div>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Admin</a>
                                <div class=\"dropdown-menu rounded-0 m-0\">
                                    <a href=\"/editor/add\" class=\"dropdown-item\">Add</a>
                                    <a href=\"/editor/alls\" class=\"dropdown-item\">Details</a>
                                </div>
                            </div>
                            <a href=\"/reclamation\" class=\"nav-item nav-link\">Show contact</a>
                            <a href=\"/commandes\" class=\"nav-item nav-link\">Orders</a>
                        {% endif %}
                    </div>

                    <div class=\"navbar-nav ml-auto py-0\">
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <a href=\"{{ path('app_logout') }}\" class=\"nav-item nav-link\">Logout</a>
                        {% else %}
                            <a href=\"{{ path('app_login') }}\" class=\"nav-item nav-link\">Login</a>
                            <a href=\"{{ path('app_register') }}\" class=\"nav-item nav-link\">Register</a>
                        {% endif %}
                    </div>
                </div>
            </nav>
            <div id=\"header-carousel\" class=\"carousel slide\" data-ride=\"carousel\" >




            </div>
        </div>

    </div>
</div>
<!-- Navbar End -->
{% block body %}
    Template Body
{% endblock %}





<!-- Footer Start -->
<div class=\"container-fluid bg-secondary text-dark mt-5 pt-5\">
    <div class=\"row px-xl-5 pt-5\">
        <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
            <a href=\"\" class=\"text-decoration-none\">
                <h1 class=\"mb-4 display-5 font-weight-semi-bold\"><span class=\"text-primary font-weight-bold border border-white px-3 mr-1\">E</span>Shop</h1>
            </a>
            <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
        </div>


        <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
            <div class=\"d-flex flex-column justify-content-start\">
                <h5 class=\"font-weight-bold text-dark mb-4\">Informations</h5>
                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary mr-3\"></i>Tunis, Ariana Soghra, TEKUP</p>
                <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary mr-3\"></i>projetsymfony7@gmail.com</p>
                <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary mr-3\"></i>+216 23 814 000</p>
            </div>
        </div>

        <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
            <div class=\"d-flex flex-column justify-content-start\">
                <h5 class=\"font-weight-bold text-dark mb-4\">Quick Links</h5>
                <div class=\"d-flex flex-column justify-content-start\">
                    <a class=\"text-dark mb-2\" href=\"{{path('home')}}\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                    <a class=\"text-dark mb-2\" href=\"{{path('product_index')}}\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                    <a class=\"text-dark mb-2\" href=\"{{path('cart_index')}}\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                    <a class=\"text-dark mb-2\" href=\"/commande\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                    <a class=\"text-dark\" href=\"{{path('contact.index')}}\"><i class=\"fa fa-angle-right mr-2\"></i>Contact</a>
                </div>
            </div>
        </div>



    </div>
    <div class=\"row border-top border-light mx-xl-5 py-4\">
        <div class=\"col-md-6 px-xl-0\">
            <p class=\"mb-md-0 text-center text-md-left text-dark\">
                &copy; <a class=\"text-dark font-weight-semi-bold\" href=\"#\">Project Symfony</a> GLSI-Q

            </p>
        </div>

    </div>
</div>
<!-- Footer End -->

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

</html>", "template.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\template.html.twig");
    }
}
