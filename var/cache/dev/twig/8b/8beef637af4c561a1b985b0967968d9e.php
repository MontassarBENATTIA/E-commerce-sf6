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

/* order/index.html.twig */
class __TwigTemplate_e204d1d4b1c508b5a0dff7d3b9e6b8f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Checkout</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class=\"container-fluid pt-5\">
    <div class=\"row px-xl-5\">
    <div class=\"col-lg-8\">
        <div class=\"mb-4\">
        <h4 class=\"font-weight-semi-bold mb-4\"> Billing Address</h4>
        ";
        // line 26
        ob_start();
        // line 27
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_recap")]);
        echo "
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
        ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "        ";
        echo twig_replace_filter((isset($context["formHtml"]) || array_key_exists("formHtml", $context) ? $context["formHtml"] : (function () { throw new RuntimeError('Variable "formHtml" does not exist.', 30, $this->source); })()), ["[br]" => "<br/>"]);
        echo "
            <div class=\"row\">

            </div>
        </div>
    </div>
            <div class=\"col-lg-4\">
                <div class=\"card border-secondary mb-5\">
                    <div class=\"card-header bg-secondary border-0\">
                        <h4 class=\"font-weight-semi-bold m-0\">Order Total</h4>
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"font-weight-medium mb-3\">Products</h5>



                        ";
        // line 46
        $context["total"] = null;
        // line 47
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 48
            echo "                        <div class=\"d-flex justify-content-between\" ";
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo ">
                            <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                            <p>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 50), "price", [], "any", false, false, false, 50), "html", null, true);
            echo " x";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                        </div>
                            ";
            // line 52
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 52)));
            // line 53
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        <hr class=\"mt-0\">
                        <div class=\"d-flex justify-content-between mb-3 pt-1\">
                            <h6 class=\"font-weight-medium\">Subtotal</h6>
                            <h6 class=\"font-weight-medium\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "</h6>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <h6 class=\"font-weight-medium\">Shipping</h6>
                            <h6 class=\"font-weight-medium\">8 Dt</h6>
                        </div>
                    </div>
                    <div class=\"card-footer border-secondary bg-transparent\">
                        <div class=\"d-flex justify-content-between mt-2\">
                            <h5 class=\"font-weight-bold\">Total</h5>
                            <h5 class=\"font-weight-bold\">";
        // line 68
        echo twig_escape_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 68, $this->source); })()) + 8), "html", null, true);
        echo " Dt</h5>
                        </div>
                    </div>
                </div>



                </div>
            </div>
                    </div>

                </div>
                </div>
            </div>
    </div>
    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 83,  174 => 68,  161 => 58,  156 => 55,  149 => 53,  147 => 52,  140 => 50,  136 => 49,  129 => 48,  124 => 47,  122 => 46,  102 => 30,  97 => 28,  92 => 27,  90 => 26,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}



{% block body %}

    <!-- Page Header Start -->
    <div class=\"container-fluid bg-secondary mb-5\">
        <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Checkout</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class=\"container-fluid pt-5\">
    <div class=\"row px-xl-5\">
    <div class=\"col-lg-8\">
        <div class=\"mb-4\">
        <h4 class=\"font-weight-semi-bold mb-4\"> Billing Address</h4>
        {% set formHtml %}
            {{ form_start(form, {action:path('order_recap')}) }}
            {{ form_end(form) }}
        {% endset %}
        {{ formHtml|replace({'[br]' : '<br/>'})|raw }}
            <div class=\"row\">

            </div>
        </div>
    </div>
            <div class=\"col-lg-4\">
                <div class=\"card border-secondary mb-5\">
                    <div class=\"card-header bg-secondary border-0\">
                        <h4 class=\"font-weight-semi-bold m-0\">Order Total</h4>
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"font-weight-medium mb-3\">Products</h5>



                        {% set total = null %}
                        {% for key,product in cart %}
                        <div class=\"d-flex justify-content-between\" {% if key > 0 %}mt-2{% endif %}>
                            <p>{{ product.product.name }}</p>
                            <p>{{ product.product.price }} x{{ product.quantity }}</p>
                        </div>
                            {% set total = total + (product.product.price * product.quantity) %}

                        {% endfor %}
                        <hr class=\"mt-0\">
                        <div class=\"d-flex justify-content-between mb-3 pt-1\">
                            <h6 class=\"font-weight-medium\">Subtotal</h6>
                            <h6 class=\"font-weight-medium\">{{ total }}</h6>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <h6 class=\"font-weight-medium\">Shipping</h6>
                            <h6 class=\"font-weight-medium\">8 Dt</h6>
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

                </div>
                </div>
            </div>
    </div>
    {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "order/index.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\order\\index.html.twig");
    }
}
