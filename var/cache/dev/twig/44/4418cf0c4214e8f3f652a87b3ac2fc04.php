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

/* editors/add-editor.html.twig */
class __TwigTemplate_73afb160e19f199d9f005681e06268ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editors/add-editor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editors/add-editor.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "editors/add-editor.html.twig", 1);
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
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Add-Edit Admin</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"\">Home</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">Add-Edit Admin</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-8\">
            <div class=\"col-lg-8 table-responsive mb-5\">
    <div class=\"form-group\">
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    </div>
</div>
    </div></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "editors/add-editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}


{% block body %}

<!-- Page Header Start -->
<div class=\"container-fluid bg-secondary mb-5\">
    <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Add-Edit Admin</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"\">Home</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">Add-Edit Admin</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-8\">
            <div class=\"col-lg-8 table-responsive mb-5\">
    <div class=\"form-group\">
    {{ form(form, {'attr': {'novalidate': 'novalidate'}}) }}
    </div>
</div>
    </div></div>

{% endblock %}

", "editors/add-editor.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\editors\\add-editor.html.twig");
    }
}
