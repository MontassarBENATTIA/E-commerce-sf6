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

/* details/index.html.twig */
class __TwigTemplate_95d4d3a4bab9860b02104fc720a0dfc9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "details/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "details/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "details/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DetailController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
        <!-- Page Header Start -->
        <div class=\"container-fluid bg-secondary mb-5\">
            <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
                <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Details Order</h1>
                <div class=\"d-inline-flex\">
                    <p class=\"m-0\"><a href=\"\">Home</a></p>
                    <p class=\"m-0 px-2\">-</p>
                    <p class=\"m-0\">Details Order</p>
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
                            <th>Product</th>
                            <th>Price</th>
                            <th>Qunatity</th>
                            <th>Total Product</th>
                        </tr>
                        </thead>
                        <tbody class=\"align-middle\">
                        ";
        // line 35
        $context["total"] = null;
        // line 36
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 37
            echo "                            <tr>
                                <td class=\"align-middle\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td class=\"align-middle\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "price", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td class=\"align-middle\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "quantite", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td class=\"align-middle\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            </tr>
                            ";
            // line 43
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 43, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["order"], "price", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, $context["order"], "quantite", [], "any", false, false, false, 43)));
            // line 44
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </tbody>
                    </table>

                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card border-secondary mb-5\">
                        <div class=\"card-header bg-secondary border-0\">
                            <h4 class=\"font-weight-semi-bold m-0\">Total Order</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between mb-3 pt-1\">
                                <h6 class=\"font-weight-medium\">Subtotal</h6>
                                <h6 class=\"font-weight-medium\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 57, $this->source); })()), "html", null, true);
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
        // line 67
        echo twig_escape_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 67, $this->source); })()) + 8), "html", null, true);
        echo " Dt</h5>
                            </div>
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
        return "details/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  168 => 57,  154 => 45,  148 => 44,  146 => 43,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  126 => 37,  121 => 36,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Hello DetailController!{% endblock %}

{% block body %}

        <!-- Page Header Start -->
        <div class=\"container-fluid bg-secondary mb-5\">
            <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
                <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Details Order</h1>
                <div class=\"d-inline-flex\">
                    <p class=\"m-0\"><a href=\"\">Home</a></p>
                    <p class=\"m-0 px-2\">-</p>
                    <p class=\"m-0\">Details Order</p>
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
                            <th>Product</th>
                            <th>Price</th>
                            <th>Qunatity</th>
                            <th>Total Product</th>
                        </tr>
                        </thead>
                        <tbody class=\"align-middle\">
                        {% set total = null %}
                        {% for order in detail %}
                            <tr>
                                <td class=\"align-middle\">{{order.product}}</td>
                                <td class=\"align-middle\">{{order.price}}</td>
                                <td class=\"align-middle\">{{order.quantite}}</td>
                                <td class=\"align-middle\">{{order.total}}</td>
                            </tr>
                            {% set total = total + (order.price * order.quantite) %}
                        {% endfor %}
                        </tbody>
                    </table>

                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card border-secondary mb-5\">
                        <div class=\"card-header bg-secondary border-0\">
                            <h4 class=\"font-weight-semi-bold m-0\">Total Order</h4>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->

{% endblock %}
", "details/index.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\details\\index.html.twig");
    }
}
