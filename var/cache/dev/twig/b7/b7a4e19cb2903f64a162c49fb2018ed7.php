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

/* pages/product/index.html.twig */
class __TwigTemplate_2fccc5e420921d2475209b004bec62ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/product/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "pages/product/index.html.twig", 1);
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
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Details product</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Details Product</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Page Header End -->


\t<div class=\"container-fluid pt-8\" >

\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.new");
        echo "\" class=\"btn btn-primary\">
\t\t\t\tAdd product
\t\t\t</a>
\t\t</div>

\t</div>
\t<div class=\"container-fluid pt-5\">
\t\t<div class=\"row px-xl-8\">
\t\t\t<div class=\"col-lg-8 table-responsive mb-5\">
\t\t\t\t<table class=\"table table-bordered text-center mb-0\">
\t\t\t\t\t<thead class=\"bg-secondary text-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t<th>Category name</th>
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t<th>UpdatedAT</th>
\t\t\t\t\t\t<th>CreatedAT</th>
\t\t\t\t\t\t<th>Edit</th>
\t\t\t\t\t\t<th>Delete</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody class=\"align-middle\">


\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 50, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"align-middle\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 57)) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 58))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t width=\"70\" height=\"70\"
\t\t\t\t\t\t\t\t\t\t alt=\"";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60), "html", null, true);
                echo "\" class=\"fluid my-2 rounded\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("uploads/pc.png"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t width=\"70\" height=\"70\"
\t\t\t\t\t\t\t\t\t\t alt=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\" class=\"fluid my-2 rounded\">
\t\t\t\t\t\t\t\t";
            }
            // line 65
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "updatedAt", [], "any", false, false, false, 66), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 67), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
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
            // line 80
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">
\t\t\t\t\t\t\t\t<h6 class=\"font-weight-medium\">No Product</h6>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t</div>
\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 86,  221 => 80,  202 => 74,  194 => 69,  189 => 67,  185 => 66,  182 => 65,  177 => 64,  171 => 62,  166 => 60,  160 => 58,  158 => 57,  154 => 56,  150 => 55,  146 => 54,  142 => 53,  138 => 52,  135 => 51,  117 => 50,  87 => 23,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}



{% block body %}

\t<!-- Page Header Start -->
\t<div class=\"container-fluid bg-secondary mb-5\">
\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Details product</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Details Product</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Page Header End -->


\t<div class=\"container-fluid pt-8\" >

\t\t\t<a href=\"{{ path('product.new') }}\" class=\"btn btn-primary\">
\t\t\t\tAdd product
\t\t\t</a>
\t\t</div>

\t</div>
\t<div class=\"container-fluid pt-5\">
\t\t<div class=\"row px-xl-8\">
\t\t\t<div class=\"col-lg-8 table-responsive mb-5\">
\t\t\t\t<table class=\"table table-bordered text-center mb-0\">
\t\t\t\t\t<thead class=\"bg-secondary text-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t<th>Category name</th>
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t<th>UpdatedAT</th>
\t\t\t\t\t\t<th>CreatedAT</th>
\t\t\t\t\t\t<th>Edit</th>
\t\t\t\t\t\t<th>Delete</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody class=\"align-middle\">


\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"align-middle\">{{loop.index}}</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">{{ product.category }}</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">{{ product.name }}</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">{{ product.description }}</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">{{ product.price }}</td>
\t\t\t\t\t\t\t<td>{% if product.image%}
\t\t\t\t\t\t\t\t\t<img src=\"{{ absolute_url('uploads/'~product.image) }}\"
\t\t\t\t\t\t\t\t\t\t width=\"70\" height=\"70\"
\t\t\t\t\t\t\t\t\t\t alt=\"{{ product.name }}\" class=\"fluid my-2 rounded\">
\t\t\t\t\t\t\t\t{% else%}
\t\t\t\t\t\t\t\t\t<img src=\"{{ absolute_url('uploads/pc.png') }}\"
\t\t\t\t\t\t\t\t\t\t width=\"70\" height=\"70\"
\t\t\t\t\t\t\t\t\t\t alt=\"{{ product.name }}\" class=\"fluid my-2 rounded\">
\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t<td>{{ product.updatedAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t<td>{{ product.createdAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('product.edit', { id: product.id }) }}\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('product.delete', { id: product.id }) }}\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">
\t\t\t\t\t\t\t\t<h6 class=\"font-weight-medium\">No Product</h6>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t</div>
\t</div>
\t</div>

{% endblock %}", "pages/product/index.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\pages\\product\\index.html.twig");
    }
}
