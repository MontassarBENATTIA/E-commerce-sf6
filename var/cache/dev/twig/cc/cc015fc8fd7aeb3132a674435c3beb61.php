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

/* pages/category/index.html.twig */
class __TwigTemplate_c1e38c38a1070f9f84e6f9dc30fc741a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/category/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "pages/category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<!-- Page Header Start -->
\t<div class=\"container-fluid bg-secondary mb-5\">
\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Details category</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Details category</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Page Header End -->
\t<div class=\"container mt-4\">

\t<div class=\"container-fluid pt-8\">
\t\t<div>
\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.new");
        echo "\" class=\"btn btn-primary\">
\t\t\t\tAdd category
\t\t\t</a>
\t\t</div>

\t\t<div class=\"container-fluid pt-5\">
\t\t\t<div class=\"row px-xl-8\">
\t\t\t\t<div class=\"col-lg-8 table-responsive mb-5\">
\t\t\t\t\t<table class=\"table table-bordered text-center mb-0\">
\t\t\t\t\t\t<thead class=\"bg-secondary text-dark\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t<th>Category name</th>
\t\t\t\t\t\t\t<th>UpdatedAT</th>
\t\t\t\t\t\t\t<th>CreatedAT</th>
\t\t\t\t\t\t\t<th>Edit</th>
\t\t\t\t\t\t\t<th>Delete</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"align-middle\">


\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) || array_key_exists("categorys", $context) ? $context["categorys"] : (function () { throw new RuntimeError('Variable "categorys" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 47
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"align-middle\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"align-middle\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "updatedAt", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "createdAt", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 64
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-weight-medium\">No category</h6>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t</div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 70,  176 => 64,  157 => 58,  149 => 53,  144 => 51,  140 => 50,  136 => 49,  132 => 48,  129 => 47,  111 => 46,  86 => 24,  68 => 8,  58 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}





{% block body %}
\t<!-- Page Header Start -->
\t<div class=\"container-fluid bg-secondary mb-5\">
\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Details category</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Details category</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Page Header End -->
\t<div class=\"container mt-4\">

\t<div class=\"container-fluid pt-8\">
\t\t<div>
\t\t\t<a href=\"{{ path('category.new') }}\" class=\"btn btn-primary\">
\t\t\t\tAdd category
\t\t\t</a>
\t\t</div>

\t\t<div class=\"container-fluid pt-5\">
\t\t\t<div class=\"row px-xl-8\">
\t\t\t\t<div class=\"col-lg-8 table-responsive mb-5\">
\t\t\t\t\t<table class=\"table table-bordered text-center mb-0\">
\t\t\t\t\t\t<thead class=\"bg-secondary text-dark\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t<th>Category name</th>
\t\t\t\t\t\t\t<th>UpdatedAT</th>
\t\t\t\t\t\t\t<th>CreatedAT</th>
\t\t\t\t\t\t\t<th>Edit</th>
\t\t\t\t\t\t\t<th>Delete</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"align-middle\">


\t\t\t\t\t\t{% for category in categorys %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"align-middle\">{{loop.index}}</td>
\t\t\t\t\t\t\t\t<td class=\"align-middle\">{{ category.name }}</td>
\t\t\t\t\t\t\t\t<td>{{ category.updatedAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t\t<td>{{ category.createdAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('category.edit', { id: category.id }) }}\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('category.delete', { id: category.id }) }}\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-weight-medium\">No category</h6>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t</div>
</div>

{% endblock %}", "pages/category/index.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\pages\\category\\index.html.twig");
    }
}
