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

/* cart/index.html.twig */
class __TwigTemplate_f68fbe8e686fa3ad7ca4ef1df6c85fd2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "cart/index.html.twig", 1);
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
        echo "

    <!-- Page Header Start -->
<div class=\"container-fluid bg-secondary mb-5\">
    <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Shopping Cart</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"\">Home</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">Shopping Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

    <!-- Cart Start -->
<div class=\"container-fluid pt-5\">
    <div class=\"row px-xl-5\">
        <div class=\"col-lg-8 table-responsive mb-5\">
            <table class=\"table table-bordered text-center mb-0\">
                <thead class=\"bg-secondary text-dark\">
                <tr>
                    <th>Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Quantity</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody class=\"align-middle\">

                ";
        // line 37
        $context["total"] = null;
        // line 38
        echo "
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 40
            echo "                <tr>
                    <td class=\"align-middle\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td class=\"align-middle\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 42), "price", [], "any", false, false, false, 42), "html", null, true);
            echo " dt</td>
                    <td class=\"align-middle\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td class=\"align-middle\">";
            // line 44
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 44) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 44), "price", [], "any", false, false, false, 44)), "html", null, true);
            echo " dt</td>

                    <td class=\"align-middle\">
                        <div class=\"input-group quantity mx-auto\" style=\"width: 100px;\">
                            <div class=\"input-group-btn\">
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary btn-minus\">
                                    <i class=\"fa fa-minus\"></i>
                                </a>
                            </div>
                            <input type=\"text\" class=\"form-control form-control-sm bg-secondary text-center\" value=\"1\">
                            <div class=\"input-group-btn\">
                                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary btn-plus\">
                                    <i class=\"fa fa-plus\"></i>
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-times\"></i>
                        </a>
                    </td>

                </tr>
                    ";
            // line 68
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 68, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 68), "price", [], "any", false, false, false, 68) * twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 68)));
            // line 69
            echo "
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">
                            <h6 class=\"font-weight-medium\">Votre panier est vide</h6>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </tbody>
            </table>
        </div>

        <div class=\"col-lg-4\">
            <form action=\"#\">
                <button class=\"btn btn-block btn-primary my-3 py-3\">Thank you for your trust
                    <i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
                </button>
            </form>

            <div class=\"card border-secondary mb-5\">
                <div class=\"card-header bg-secondary border-0\">
                    <h4 class=\"font-weight-semi-bold m-0\">Cart Summary</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between mb-3 pt-1\">
                        <h6 class=\"font-weight-medium\">Subtotal</h6>
                        <h6 class=\"font-weight-medium\">";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 95, $this->source); })()), "html", null, true);
        echo " dt</h6>
                    </div>
                    <div class=\"d-flex justify-content-between\">
                        <h6 class=\"font-weight-medium\">Shipping</h6>
                        <h6 class=\"font-weight-medium\">8 dt</h6>
                    </div>
                </div>
                <div class=\"card-footer border-secondary bg-transparent\">
                    <div class=\"d-flex justify-content-between mt-2\">
                        <h5 class=\"font-weight-bold\">Total</h5>
                        <h5 class=\"font-weight-bold\">";
        // line 105
        echo twig_escape_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 105, $this->source); })()) + 8), "html", null, true);
        echo " Dt</h5>
                    </div>
                    <form action=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all");
        echo "\">
                    <button class=\"btn btn-block btn-primary my-3 py-3\">Delete Cart</button>
                    </form>
                    <form action=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "\">
                        <button class=\"btn btn-block btn-primary my-3 py-3\">Proceed To Checkout</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 110,  220 => 107,  215 => 105,  202 => 95,  182 => 77,  171 => 71,  165 => 69,  163 => 68,  154 => 62,  144 => 55,  135 => 49,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  112 => 40,  107 => 39,  104 => 38,  102 => 37,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}


{% block body %}


    <!-- Page Header Start -->
<div class=\"container-fluid bg-secondary mb-5\">
    <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Shopping Cart</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"\">Home</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">Shopping Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

    <!-- Cart Start -->
<div class=\"container-fluid pt-5\">
    <div class=\"row px-xl-5\">
        <div class=\"col-lg-8 table-responsive mb-5\">
            <table class=\"table table-bordered text-center mb-0\">
                <thead class=\"bg-secondary text-dark\">
                <tr>
                    <th>Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Quantity</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody class=\"align-middle\">

                {% set total = null %}

                {% for element in cart %}
                <tr>
                    <td class=\"align-middle\">{{ element.product.name }}</td>
                    <td class=\"align-middle\">{{ element.product.price }} dt</td>
                    <td class=\"align-middle\">{{ element.quantity }}</td>
                    <td class=\"align-middle\">{{ element.quantity * element.product.price }} dt</td>

                    <td class=\"align-middle\">
                        <div class=\"input-group quantity mx-auto\" style=\"width: 100px;\">
                            <div class=\"input-group-btn\">
                                <a href=\"{{path(\"cart_remove\", {id: element.product.id})}}\" class=\"btn btn-sm btn-primary btn-minus\">
                                    <i class=\"fa fa-minus\"></i>
                                </a>
                            </div>
                            <input type=\"text\" class=\"form-control form-control-sm bg-secondary text-center\" value=\"1\">
                            <div class=\"input-group-btn\">
                                <a href=\"{{path(\"cart_add\", {id: element.product.id})}}\" class=\"btn btn-sm btn-primary btn-plus\">
                                    <i class=\"fa fa-plus\"></i>
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <a href=\"{{path(\"cart_delete\", {id: element.product.id})}}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-times\"></i>
                        </a>
                    </td>

                </tr>
                    {% set total = total + (element.product.price * element.quantity) %}

                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\">
                            <h6 class=\"font-weight-medium\">Votre panier est vide</h6>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"col-lg-4\">
            <form action=\"#\">
                <button class=\"btn btn-block btn-primary my-3 py-3\">Thank you for your trust
                    <i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
                </button>
            </form>

            <div class=\"card border-secondary mb-5\">
                <div class=\"card-header bg-secondary border-0\">
                    <h4 class=\"font-weight-semi-bold m-0\">Cart Summary</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between mb-3 pt-1\">
                        <h6 class=\"font-weight-medium\">Subtotal</h6>
                        <h6 class=\"font-weight-medium\">{{ total }} dt</h6>
                    </div>
                    <div class=\"d-flex justify-content-between\">
                        <h6 class=\"font-weight-medium\">Shipping</h6>
                        <h6 class=\"font-weight-medium\">8 dt</h6>
                    </div>
                </div>
                <div class=\"card-footer border-secondary bg-transparent\">
                    <div class=\"d-flex justify-content-between mt-2\">
                        <h5 class=\"font-weight-bold\">Total</h5>
                        <h5 class=\"font-weight-bold\">{{ total + 8 }} Dt</h5>
                    </div>
                    <form action=\"{{path(\"cart_delete_all\")}}\">
                    <button class=\"btn btn-block btn-primary my-3 py-3\">Delete Cart</button>
                    </form>
                    <form action=\"{{ path('order') }}\">
                        <button class=\"btn btn-block btn-primary my-3 py-3\">Proceed To Checkout</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->

{% endblock %}", "cart/index.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\cart\\index.html.twig");
    }
}
