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

/* pages/category/new.html.twig */
class __TwigTemplate_de70da19d324f47de785a0cccec29204 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/category/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/category/new.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "pages/category/new.html.twig", 1);
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
\t<!-- Page Header Start -->
\t<div class=\"container-fluid bg-secondary mb-5\">
\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Add category</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Add category</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Page Header End -->
\t<div class=\"container\">


\t\t";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "

\t\t<div class=\"form-group\">
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'label');
        echo "
\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), 'widget');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), 'errors');
        echo "
\t\t\t</div>
\t\t</div>


\t\t<div class=\"form-group\">
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "_token", [], "any", false, false, false, 34), 'row');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "submit", [], "any", false, false, false, 38), 'row');
        echo "
\t\t</div>

\t</div>
\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
\t</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  117 => 38,  110 => 34,  101 => 28,  96 => 26,  92 => 25,  86 => 22,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}



{% block body %}

\t<!-- Page Header Start -->
\t<div class=\"container-fluid bg-secondary mb-5\">
\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Add category</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Add category</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Page Header End -->
\t<div class=\"container\">


\t\t{{ form_start(form) }}

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.name) }}
\t\t\t{{ form_widget(form.name) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.name) }}
\t\t\t</div>
\t\t</div>


\t\t<div class=\"form-group\">
\t\t\t{{ form_row(form._token) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_row(form.submit) }}
\t\t</div>

\t</div>
\t{{ form_end(form) }}
\t</div>{% endblock %}

", "pages/category/new.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\pages\\category\\new.html.twig");
    }
}
