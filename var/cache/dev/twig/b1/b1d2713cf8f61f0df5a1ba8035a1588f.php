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

/* homePrincipale/homePrincipale.html.twig */
class __TwigTemplate_dbfb26bf955c4d5d1306eed27e5b74c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homePrincipale/homePrincipale.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homePrincipale/homePrincipale.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "homePrincipale/homePrincipale.html.twig", 1);
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
        echo "<div id=\"header-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\" style=\"height: 410px;\">
            <img class=\"img-fluid\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("uploads/Capture.png"), "html", null, true);
        echo "\" alt=\"Image\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                <div class=\"p-3\" style=\"max-width: 700px;\">
                </div>
            </div>
        </div>
        <div class=\"carousel-item\" style=\"height: 410px;\">
            <img class=\"img-fluid\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("uploads/Capture2.png"), "html", null, true);
        echo "\" alt=\"Image\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                <div class=\"p-3\" style=\"max-width: 700px;\">

                </div>
            </div>
        </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#header-carousel\" data-slide=\"prev\">
        <div class=\"btn btn-dark\" style=\"width: 45px; height: 45px;\">
            <span class=\"carousel-control-prev-icon mb-n2\"></span>
        </div>
    </a>
    <a class=\"carousel-control-next\" href=\"#header-carousel\" data-slide=\"next\">
        <div class=\"btn btn-dark\" style=\"width: 45px; height: 45px;\">
            <span class=\"carousel-control-next-icon mb-n2\"></span>
        </div>
    </a>
</div>

<br><br><br><br><br>



    <!-- Categories Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-5 pb-3\">
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 280px\">
                        <img class=\"img-fluid\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("uploads/cat-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Laptop</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 350px\">
                        <img class=\"img-fluid\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("uploads/cat-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Desktop computer</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img  overflow-hidden mb-3\" style=\"width: 390px\">
                        <img class=\"img-fluid\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("uploads/cat-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Tablets</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 350px\">
                        <img class=\"img-fluid\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("uploads/cat-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Storage</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 265px\">
                        <img class=\"img-fluid\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("uploads/cat-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Smartphone</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 335px\">
                        <img class=\"img-fluid\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("uploads/cat-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Peripherals & Accessories</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->

    <!-- Featured Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-5 pb-3\">
            <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
                <div class=\"d-flex align-items-center border mb-4\" style=\"padding: 30px;\">
                    <h1 class=\"fa fa-check text-primary m-0 mr-3\"></h1>
                    <h5 class=\"font-weight-semi-bold m-0\">Quality Product</h5>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
                <div class=\"d-flex align-items-center border mb-4\" style=\"padding: 30px;\">
                    <h1 class=\"fa fa-shipping-fast text-primary m-0 mr-2\"></h1>
                    <h5 class=\"font-weight-semi-bold m-0\">Free Shipping</h5>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
                <div class=\"d-flex align-items-center border mb-4\" style=\"padding: 30px;\">
                    <h1 class=\"fas fa-exchange-alt text-primary m-0 mr-3\"></h1>
                    <h5 class=\"font-weight-semi-bold m-0\">14-Day Return</h5>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
                <div class=\"d-flex align-items-center border mb-4\" style=\"padding: 30px;\">
                    <h1 class=\"fa fa-phone-volume text-primary m-0 mr-3\"></h1>
                    <h5 class=\"font-weight-semi-bold m-0\">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "homePrincipale/homePrincipale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 91,  165 => 82,  153 => 73,  141 => 64,  129 => 55,  117 => 46,  83 => 15,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}


{% block body %}
<div id=\"header-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\" style=\"height: 410px;\">
            <img class=\"img-fluid\" src=\"{{ absolute_url('uploads/Capture.png')}}\" alt=\"Image\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                <div class=\"p-3\" style=\"max-width: 700px;\">
                </div>
            </div>
        </div>
        <div class=\"carousel-item\" style=\"height: 410px;\">
            <img class=\"img-fluid\" src=\"{{ absolute_url('uploads/Capture2.png') }}\" alt=\"Image\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                <div class=\"p-3\" style=\"max-width: 700px;\">

                </div>
            </div>
        </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#header-carousel\" data-slide=\"prev\">
        <div class=\"btn btn-dark\" style=\"width: 45px; height: 45px;\">
            <span class=\"carousel-control-prev-icon mb-n2\"></span>
        </div>
    </a>
    <a class=\"carousel-control-next\" href=\"#header-carousel\" data-slide=\"next\">
        <div class=\"btn btn-dark\" style=\"width: 45px; height: 45px;\">
            <span class=\"carousel-control-next-icon mb-n2\"></span>
        </div>
    </a>
</div>

<br><br><br><br><br>



    <!-- Categories Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-5 pb-3\">
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 280px\">
                        <img class=\"img-fluid\" src=\"{{ absolute_url('uploads/cat-1.jpg') }}\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Laptop</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 350px\">
                        <img class=\"img-fluid\" src=\"{{ absolute_url('uploads/cat-2.jpg') }}\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Desktop computer</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img  overflow-hidden mb-3\" style=\"width: 390px\">
                        <img class=\"img-fluid\" src=\"{{ absolute_url('uploads/cat-3.jpg') }}\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Tablets</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 350px\">
                        <img class=\"img-fluid\" src=\"{{ absolute_url('uploads/cat-4.jpg') }}\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Storage</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 265px\">
                        <img class=\"img-fluid\" src=\"{{ absolute_url('uploads/cat-5.jpg') }}\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Smartphone</h5>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 pb-1\">
                <div class=\"cat-item d-flex flex-column border mb-4\" style=\"padding: 30px;\">
                    <p class=\"text-right\">15 Products</p>
                    <a href=\"\" class=\"cat-img overflow-hidden mb-3\" style=\"width: 335px\">
                        <img class=\"img-fluid\" src=\"{{ absolute_url('uploads/cat-6.jpg') }}\" alt=\"\">
                    </a>
                    <h5 class=\"font-weight-semi-bold m-0\">Peripherals & Accessories</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->

    <!-- Featured Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-5 pb-3\">
            <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
                <div class=\"d-flex align-items-center border mb-4\" style=\"padding: 30px;\">
                    <h1 class=\"fa fa-check text-primary m-0 mr-3\"></h1>
                    <h5 class=\"font-weight-semi-bold m-0\">Quality Product</h5>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
                <div class=\"d-flex align-items-center border mb-4\" style=\"padding: 30px;\">
                    <h1 class=\"fa fa-shipping-fast text-primary m-0 mr-2\"></h1>
                    <h5 class=\"font-weight-semi-bold m-0\">Free Shipping</h5>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
                <div class=\"d-flex align-items-center border mb-4\" style=\"padding: 30px;\">
                    <h1 class=\"fas fa-exchange-alt text-primary m-0 mr-3\"></h1>
                    <h5 class=\"font-weight-semi-bold m-0\">14-Day Return</h5>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
                <div class=\"d-flex align-items-center border mb-4\" style=\"padding: 30px;\">
                    <h1 class=\"fa fa-phone-volume text-primary m-0 mr-3\"></h1>
                    <h5 class=\"font-weight-semi-bold m-0\">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->



{% endblock %}", "homePrincipale/homePrincipale.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\homePrincipale\\homePrincipale.html.twig");
    }
}
