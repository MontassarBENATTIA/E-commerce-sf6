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

/* reclamation/index.html.twig */
class __TwigTemplate_c59493dac4858354d68bfee6fdc2465a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "reclamation/index.html.twig", 1);
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
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Show Contact</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Show Contact</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Page Header End -->


\t<div class=\"container mt-4\">


\t\t";
        // line 24
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 24, $this->source); })()), "items", [], "any", false, false, false, 24) === [])) {
            // line 25
            echo "
\t\t\t\t<div class=\"container-fluid pt-5\">
\t\t\t\t<div class=\"row px-xl-8\">
\t\t\t\t\t<div class=\"col-lg-8 table-responsive mb-5\">
\t\t\t\t\t\t<table class=\"table table-bordered text-center mb-0\">
\t\t\t\t\t\t\t<thead class=\"bg-secondary text-dark\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th >Id</th>
\t\t\t\t\t\t\t\t<th >Email</th>
\t\t\t\t\t\t\t\t<th >Subject</th>
\t\t\t\t\t\t\t\t<th >Message</th>
\t\t\t\t\t\t\t\t<th >CreatedAT</th>
\t\t\t\t\t\t\t\t<th >Delete</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody class=\"align-middle\">
\t\t\t\t\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 41, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 42
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "subject", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "message", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "createdAt", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
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
                // line 55
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"font-weight-medium\">No contact</h6>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t



\t\t";
        }
        // line 75
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 75,  180 => 61,  169 => 55,  150 => 49,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  126 => 42,  108 => 41,  90 => 25,  88 => 24,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}



{% block body %}

\t<!-- Page Header Start -->
\t<div class=\"container-fluid bg-secondary mb-5\">
\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
\t\t\t<h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Show Contact</h1>
\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t<p class=\"m-0\"><a href=\"\">Home</a></p>
\t\t\t\t<p class=\"m-0 px-2\">-</p>
\t\t\t\t<p class=\"m-0\">Show Contact</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Page Header End -->


\t<div class=\"container mt-4\">


\t\t{% if not contacts.items is same as([]) %}

\t\t\t\t<div class=\"container-fluid pt-5\">
\t\t\t\t<div class=\"row px-xl-8\">
\t\t\t\t\t<div class=\"col-lg-8 table-responsive mb-5\">
\t\t\t\t\t\t<table class=\"table table-bordered text-center mb-0\">
\t\t\t\t\t\t\t<thead class=\"bg-secondary text-dark\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th >Id</th>
\t\t\t\t\t\t\t\t<th >Email</th>
\t\t\t\t\t\t\t\t<th >Subject</th>
\t\t\t\t\t\t\t\t<th >Message</th>
\t\t\t\t\t\t\t\t<th >CreatedAT</th>
\t\t\t\t\t\t\t\t<th >Delete</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody class=\"align-middle\">
\t\t\t\t\t\t\t{% for contact in contacts %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">{{loop.index}}</td>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">{{ contact.email }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">{{ contact.subject }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">{{ contact.message }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ contact.createdAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('reclamation.delete', { id: contact.id }) }}\" class=\"btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"font-weight-medium\">No contact</h6>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t



\t\t{% endif %}
\t</div>
{% endblock %}", "reclamation/index.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\reclamation\\index.html.twig");
    }
}
