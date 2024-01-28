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

/* contact/index.html.twig */
class __TwigTemplate_979a38d2458ff6430db847bb4989a367 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "contact/index.html.twig", 1);
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
        echo "    <!-- Page Header Start -->
    <div class=\"container-fluid bg-secondary mb-5\">
        <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Contact Us</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"text-center mb-4\">
            <h2 class=\"section-title px-5\"><span class=\"px-2\">Contact For Any Queries</span></h2>
        </div>
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-7 mb-5\">
                <div class=\"contact-form\">
                    <div id=\"success\"></div>
                    <div class=\"container\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "                            <div class=\"alert alert-success mt-4\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "                            <div class=\"alert alert-success mt-4\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "


                        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 mb-5\">
                <h5 class=\"font-weight-semi-bold mb-3\">Get In Touch</h5>
                <p>Justo sed diam ut sed amet duo amet lorem amet stet sea ipsum, sed duo amet et. Est elitr dolor elitr erat sit sit. Dolor diam et erat clita ipsum justo sed.</p>
                <div class=\"d-flex flex-column mb-3\">
                    <h5 class=\"font-weight-semi-bold mb-3\">Store 1</h5>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary mr-3\"></i>Ariana, ghazela Tek-Up</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary mr-3\"></i>shop@example.com</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt text-primary mr-3\"></i>+216 23 814 000</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  128 => 38,  119 => 35,  116 => 34,  112 => 33,  109 => 32,  100 => 29,  97 => 28,  93 => 27,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}
    <!-- Page Header Start -->
    <div class=\"container-fluid bg-secondary mb-5\">
        <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Contact Us</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"text-center mb-4\">
            <h2 class=\"section-title px-5\"><span class=\"px-2\">Contact For Any Queries</span></h2>
        </div>
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-7 mb-5\">
                <div class=\"contact-form\">
                    <div id=\"success\"></div>
                    <div class=\"container\">
                        {% for message in app.flashes('success') %}
                            <div class=\"alert alert-success mt-4\">
                                {{ message }}
                            </div>
                        {% endfor %}

                        {% for message in app.flashes('danger') %}
                            <div class=\"alert alert-success mt-4\">
                                {{ message }}
                            </div>
                        {% endfor %}



                        {{ form(form) }}
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 mb-5\">
                <h5 class=\"font-weight-semi-bold mb-3\">Get In Touch</h5>
                <p>Justo sed diam ut sed amet duo amet lorem amet stet sea ipsum, sed duo amet et. Est elitr dolor elitr erat sit sit. Dolor diam et erat clita ipsum justo sed.</p>
                <div class=\"d-flex flex-column mb-3\">
                    <h5 class=\"font-weight-semi-bold mb-3\">Store 1</h5>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary mr-3\"></i>Ariana, ghazela Tek-Up</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary mr-3\"></i>shop@example.com</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt text-primary mr-3\"></i>+216 23 814 000</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->



{% endblock %}
", "contact/index.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\contact\\index.html.twig");
    }
}
