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

/* products/show.html.twig */
class __TwigTemplate_44de1ec7e3c9766a1dae5db7680cce8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "products/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- Page Header Start -->
    <div class=\"container-fluid bg-secondary mb-5\">
        <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Shop Detail</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Shop Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-5 pb-5\">
                <div id=\"product-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <div class=\"carousel-inner border\">
                        <div class=\"carousel-item active\">
                            <img class=\"w-100 h-100\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26)), "html", null, true);
        echo "\" alt=\"Image\">
                        </div>
                        <div class=\"carousel-item\">
                            <img class=\"w-100 h-100\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29)), "html", null, true);
        echo "\" alt=\"Image\">
                        </div>
                        <div class=\"carousel-item\">
                            <img class=\"w-100 h-100\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32)), "html", null, true);
        echo "\" alt=\"Image\">
                        </div>
                        <div class=\"carousel-item\">
                            <img class=\"w-100 h-100\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35)), "html", null, true);
        echo "\" alt=\"Image\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#product-carousel\" data-slide=\"prev\">
                        <i class=\"fa fa-2x fa-angle-left text-dark\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#product-carousel\" data-slide=\"next\">
                        <i class=\"fa fa-2x fa-angle-right text-dark\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-lg-7 pb-5\">
                ";
        // line 48
        if ((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 48, $this->source); })())) {
            // line 49
            echo "                <h3 class=\"font-weight-semi-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</h3>
                <div class=\"d-flex mb-3\">
                    <div class=\"text-primary mr-2\">
                        <small class=\"fas fa-star\"></small>
                        <small class=\"fas fa-star\"></small>
                        <small class=\"fas fa-star\"></small>
                        <small class=\"fas fa-star-half-alt\"></small>
                        <small class=\"far fa-star\"></small>
                    </div>
                    <small class=\"pt-1\">(50 Reviews)</small>
                </div>
                <h3 class=\"font-weight-semi-bold mb-4\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "price", [], "any", false, false, false, 60), "html", null, true);
            echo " dt</h3>
                <p class=\"mb-4\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>

                <div class=\"d-flex align-items-center mb-4 pt-2\">
                    <div class=\"input-group quantity mr-3\" style=\"width: 130px;\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-primary btn-minus\" >
                                <i class=\"fa fa-minus\"></i>
                            </button>
                        </div>
                        <input type=\"text\" class=\"form-control bg-secondary text-center\" value=\"1\">
                        <div class=\"input-group-btn\">
                            <a href=\"\" class=\"btn btn-primary btn-plus\">
                                <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                    </div>
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" class=\"btn btn-primary px-3\">
                        <i class=\"fa fa-shopping-cart mr-1\"></i>
                        Add To Cart
                    </a>
                    ";
        } else {
            // line 82
            echo "                        <div class=\"alert alert-info\">
                            No product found!
                        </div>
                    ";
        }
        // line 86
        echo "                </div>
                <div class=\"d-flex pt-2\">
                    <p class=\"text-dark font-weight-medium mb-0 mr-2\">Share on:</p>
                    <div class=\"d-inline-flex\">
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
                            <i class=\"fab fa-pinterest\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"text-center mb-4\">
            <h2 class=\"section-title px-5\"><span class=\"px-2\">You May Also Like</span></h2>
        </div>
        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"owl-carousel related-carousel\">
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 120, $this->source); })()), "image", [], "any", false, false, false, 120)), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 135, $this->source); })()), "image", [], "any", false, false, false, 135)), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 150, $this->source); })()), "image", [], "any", false, false, false, 150)), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 165, $this->source); })()), "image", [], "any", false, false, false, 165)), "html", null, true);
        echo "\" alt=\"\">

                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 176, $this->source); })()), "id", [], "any", false, false, false, 176)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 181, $this->source); })()), "image", [], "any", false, false, false, 181)), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191)]), "html", null, true);
        echo "\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "products/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 191,  324 => 190,  312 => 181,  304 => 176,  300 => 175,  287 => 165,  279 => 160,  275 => 159,  263 => 150,  255 => 145,  251 => 144,  239 => 135,  231 => 130,  227 => 129,  215 => 120,  179 => 86,  173 => 82,  165 => 77,  146 => 61,  142 => 60,  127 => 49,  125 => 48,  109 => 35,  103 => 32,  97 => 29,  91 => 26,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}


{% block body %}
    <!-- Page Header Start -->
    <div class=\"container-fluid bg-secondary mb-5\">
        <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Shop Detail</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Shop Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-5 pb-5\">
                <div id=\"product-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <div class=\"carousel-inner border\">
                        <div class=\"carousel-item active\">
                            <img class=\"w-100 h-100\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"Image\">
                        </div>
                        <div class=\"carousel-item\">
                            <img class=\"w-100 h-100\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"Image\">
                        </div>
                        <div class=\"carousel-item\">
                            <img class=\"w-100 h-100\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"Image\">
                        </div>
                        <div class=\"carousel-item\">
                            <img class=\"w-100 h-100\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"Image\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#product-carousel\" data-slide=\"prev\">
                        <i class=\"fa fa-2x fa-angle-left text-dark\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#product-carousel\" data-slide=\"next\">
                        <i class=\"fa fa-2x fa-angle-right text-dark\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-lg-7 pb-5\">
                {% if product %}
                <h3 class=\"font-weight-semi-bold\">{{product.name}}</h3>
                <div class=\"d-flex mb-3\">
                    <div class=\"text-primary mr-2\">
                        <small class=\"fas fa-star\"></small>
                        <small class=\"fas fa-star\"></small>
                        <small class=\"fas fa-star\"></small>
                        <small class=\"fas fa-star-half-alt\"></small>
                        <small class=\"far fa-star\"></small>
                    </div>
                    <small class=\"pt-1\">(50 Reviews)</small>
                </div>
                <h3 class=\"font-weight-semi-bold mb-4\">{{product.price}} dt</h3>
                <p class=\"mb-4\">{{product.description}}</p>

                <div class=\"d-flex align-items-center mb-4 pt-2\">
                    <div class=\"input-group quantity mr-3\" style=\"width: 130px;\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-primary btn-minus\" >
                                <i class=\"fa fa-minus\"></i>
                            </button>
                        </div>
                        <input type=\"text\" class=\"form-control bg-secondary text-center\" value=\"1\">
                        <div class=\"input-group-btn\">
                            <a href=\"\" class=\"btn btn-primary btn-plus\">
                                <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                    </div>
                    <a href=\"{{ path('cart_add', {id: product.id}) }}\" class=\"btn btn-primary px-3\">
                        <i class=\"fa fa-shopping-cart mr-1\"></i>
                        Add To Cart
                    </a>
                    {% else %}
                        <div class=\"alert alert-info\">
                            No product found!
                        </div>
                    {% endif %}
                </div>
                <div class=\"d-flex pt-2\">
                    <p class=\"text-dark font-weight-medium mb-0 mr-2\">Share on:</p>
                    <div class=\"d-inline-flex\">
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
                            <i class=\"fab fa-pinterest\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"text-center mb-4\">
            <h2 class=\"section-title px-5\"><span class=\"px-2\">You May Also Like</span></h2>
        </div>
        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"owl-carousel related-carousel\">
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"\">
                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"{{path(\"product_show\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"{{path(\"cart_add\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"\">
                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"{{path(\"product_show\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"{{path(\"cart_add\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"\">
                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"{{path(\"product_show\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"{{path(\"cart_add\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"\">

                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"{{path(\"product_show\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"{{path(\"cart_add\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class=\"card product-item border-0\">
                        <div class=\"card-header product-img position-relative overflow-hidden bg-transparent border p-0\">
                            <img class=\"img-fluid w-100\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"\">
                        </div>
                        <div class=\"card-body border-left border-right text-center p-0 pt-4 pb-3\">
                            <h6 class=\"text-truncate mb-3\">Colorful Stylish Shirt</h6>
                            <div class=\"d-flex justify-content-center\">
                                <h6>\$123.00</h6><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                            </div>
                        </div>
                        <div class=\"card-footer d-flex justify-content-between bg-light border\">
                            <a href=\"{{path(\"product_show\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
                            <a href=\"{{path(\"cart_add\", {id: product.id})}}\" class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
{% endblock %}
", "products/show.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\products\\show.html.twig");
    }
}
