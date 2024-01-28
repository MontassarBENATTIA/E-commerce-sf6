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

/* checkout/index.html.twig */
class __TwigTemplate_e461cdfefe7841fce45e75631f0f93c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "checkout/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
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


    <!-- Checkout Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-8\">
                <div class=\"mb-4\">
                    <h4 class=\"font-weight-semi-bold mb-4\">Billing Address</h4>
                    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["CoordinateType"]) || array_key_exists("CoordinateType", $context) ? $context["CoordinateType"] : (function () { throw new RuntimeError('Variable "CoordinateType" does not exist.', 25, $this->source); })()), 'form');
        echo "
                    <div class=\"row\">

                    </div>
                </div>

                <div class=\"collapse mb-4\" id=\"shipping-address\">
                    <h4 class=\"font-weight-semi-bold mb-4\">Shipping Address</h4>
                    <div class=\"row\">
                        <div class=\"col-md-6 form-group\">
                            <label>First Name</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"John\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Last Name</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"Doe\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>E-mail</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"example@email.com\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Mobile No</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"+123 456 789\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Address Line 1</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"123 Street\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Address Line 2</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"123 Street\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Country</label>
                            <select class=\"custom-select\">
                                <option selected>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>City</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"New York\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>State</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"New York\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>ZIP Code</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"123\">
                        </div>
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
                        <div class=\"d-flex justify-content-between\">
                            <p>Colorful Stylish Shirt 1</p>
                            <p>\$150</p>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <p>Colorful Stylish Shirt 2</p>
                            <p>\$150</p>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <p>Colorful Stylish Shirt 3</p>
                            <p>\$150</p>
                        </div>
                        <hr class=\"mt-0\">
                        <div class=\"d-flex justify-content-between mb-3 pt-1\">
                            <h6 class=\"font-weight-medium\">Subtotal</h6>
                            <h6 class=\"font-weight-medium\">\$150</h6>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <h6 class=\"font-weight-medium\">Shipping</h6>
                            <h6 class=\"font-weight-medium\">\$10</h6>
                        </div>
                    </div>
                    <div class=\"card-footer border-secondary bg-transparent\">
                        <div class=\"d-flex justify-content-between mt-2\">
                            <h5 class=\"font-weight-bold\">Total</h5>
                            <h5 class=\"font-weight-bold\">\$160</h5>
                        </div>
                    </div>
                </div>

                <div class=\"card border-secondary mb-5\">
                    <div class=\"card-header bg-secondary border-0\">
                        <h4 class=\"font-weight-semi-bold m-0\">Payment</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            <div class=\"custom-control custom-radio\">
                                <input type=\"radio\" class=\"custom-control-input\" name=\"payment\" id=\"paypal\">
                                <label class=\"custom-control-label\" for=\"paypal\">Paypal</label>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"custom-control custom-radio\">
                                <input type=\"radio\" class=\"custom-control-input\" name=\"payment\" id=\"directcheck\">
                                <label class=\"custom-control-label\" for=\"directcheck\">Direct Check</label>
                            </div>
                        </div>
                        <div class=\"\">
                            <div class=\"custom-control custom-radio\">
                                <input type=\"radio\" class=\"custom-control-input\" name=\"payment\" id=\"banktransfer\">
                                <label class=\"custom-control-label\" for=\"banktransfer\">Bank Transfer</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer border-secondary bg-transparent\">
                        <form action=\"/checkout\" method=\"POST\">
                            <button  type=\"submit\" class=\"btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3\">Place Order</button>
                        </form>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <!-- Checkout End -->


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "checkout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}

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


    <!-- Checkout Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-8\">
                <div class=\"mb-4\">
                    <h4 class=\"font-weight-semi-bold mb-4\">Billing Address</h4>
                    {{ form(CoordinateType) }}
                    <div class=\"row\">

                    </div>
                </div>

                <div class=\"collapse mb-4\" id=\"shipping-address\">
                    <h4 class=\"font-weight-semi-bold mb-4\">Shipping Address</h4>
                    <div class=\"row\">
                        <div class=\"col-md-6 form-group\">
                            <label>First Name</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"John\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Last Name</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"Doe\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>E-mail</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"example@email.com\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Mobile No</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"+123 456 789\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Address Line 1</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"123 Street\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Address Line 2</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"123 Street\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>Country</label>
                            <select class=\"custom-select\">
                                <option selected>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>City</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"New York\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>State</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"New York\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <label>ZIP Code</label>
                            <input class=\"form-control\" type=\"text\" placeholder=\"123\">
                        </div>
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
                        <div class=\"d-flex justify-content-between\">
                            <p>Colorful Stylish Shirt 1</p>
                            <p>\$150</p>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <p>Colorful Stylish Shirt 2</p>
                            <p>\$150</p>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <p>Colorful Stylish Shirt 3</p>
                            <p>\$150</p>
                        </div>
                        <hr class=\"mt-0\">
                        <div class=\"d-flex justify-content-between mb-3 pt-1\">
                            <h6 class=\"font-weight-medium\">Subtotal</h6>
                            <h6 class=\"font-weight-medium\">\$150</h6>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <h6 class=\"font-weight-medium\">Shipping</h6>
                            <h6 class=\"font-weight-medium\">\$10</h6>
                        </div>
                    </div>
                    <div class=\"card-footer border-secondary bg-transparent\">
                        <div class=\"d-flex justify-content-between mt-2\">
                            <h5 class=\"font-weight-bold\">Total</h5>
                            <h5 class=\"font-weight-bold\">\$160</h5>
                        </div>
                    </div>
                </div>

                <div class=\"card border-secondary mb-5\">
                    <div class=\"card-header bg-secondary border-0\">
                        <h4 class=\"font-weight-semi-bold m-0\">Payment</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            <div class=\"custom-control custom-radio\">
                                <input type=\"radio\" class=\"custom-control-input\" name=\"payment\" id=\"paypal\">
                                <label class=\"custom-control-label\" for=\"paypal\">Paypal</label>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"custom-control custom-radio\">
                                <input type=\"radio\" class=\"custom-control-input\" name=\"payment\" id=\"directcheck\">
                                <label class=\"custom-control-label\" for=\"directcheck\">Direct Check</label>
                            </div>
                        </div>
                        <div class=\"\">
                            <div class=\"custom-control custom-radio\">
                                <input type=\"radio\" class=\"custom-control-input\" name=\"payment\" id=\"banktransfer\">
                                <label class=\"custom-control-label\" for=\"banktransfer\">Bank Transfer</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer border-secondary bg-transparent\">
                        <form action=\"/checkout\" method=\"POST\">
                            <button  type=\"submit\" class=\"btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3\">Place Order</button>
                        </form>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <!-- Checkout End -->


{% endblock %}", "checkout/index.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\checkout\\index.html.twig");
    }
}
