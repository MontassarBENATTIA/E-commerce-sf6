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

/* pages/product/new.html.twig */
class __TwigTemplate_f16fa1e9269f1f65bcf8f89152e29ee3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/product/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/product/new.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "pages/product/new.html.twig", 1);
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
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Add product</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Add product</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Page Header End -->

\t<div class=\"container\">



\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "

\t\t<div class=\"form-group\">
\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), 'label');
        echo "
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), 'widget');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), 'errors');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "category", [], "any", false, false, false, 35), 'label');
        echo "
\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "category", [], "any", false, false, false, 36), 'widget');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "category", [], "any", false, false, false, 38), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'label');
        echo "
\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'widget');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "price", [], "any", false, false, false, 51), 'label');
        echo "
\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "price", [], "any", false, false, false, 52), 'widget');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "price", [], "any", false, false, false, 54), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "image", [], "any", false, false, false, 59), 'label');
        echo "
\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60), 'widget');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "image", [], "any", false, false, false, 62), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "_token", [], "any", false, false, false, 67), 'row');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "submit", [], "any", false, false, false, 71), 'row');
        echo "
\t\t</div>

\t</div>
\t";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 75,  186 => 71,  179 => 67,  171 => 62,  166 => 60,  162 => 59,  154 => 54,  149 => 52,  145 => 51,  137 => 46,  132 => 44,  128 => 43,  120 => 38,  115 => 36,  111 => 35,  103 => 30,  98 => 28,  94 => 27,  88 => 24,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}



{% block body %}

\t<!-- Page Header Start -->
\t<div class=\"container-fluid bg-secondary mb-5\">
\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Add product</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Add product</p>
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
\t\t<br>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.category) }}
\t\t\t{{ form_widget(form.category) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.category) }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.description) }}
\t\t\t{{ form_widget(form.description) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.description) }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.price) }}
\t\t\t{{ form_widget(form.price) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.price) }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.image) }}
\t\t\t{{ form_widget(form.image) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.image) }}
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
</div>{% endblock %}
", "pages/product/new.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\pages\\product\\new.html.twig");
    }
}
