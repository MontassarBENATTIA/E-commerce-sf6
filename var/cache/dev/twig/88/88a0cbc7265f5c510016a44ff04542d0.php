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

/* cart/admin.html.twig */
class __TwigTemplate_eb9a36d56523db124d32fa333ae1f48c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/admin.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "cart/admin.html.twig", 1);
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
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Orders Of Clients</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Orders Of Clients</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-8 table-responsive mb-5\">
                <table class=\"table table-bordered text-center mb-0\">
                    <thead class=\"bg-secondary text-dark\">
                    <tr>
                        <th>Id Commande</th>
                        <th>Date</th>
                        <th>Email Client</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody class=\"align-middle\">


                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 36, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 37
            echo "                        <tr>

                            <td class=\"align-middle\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdat", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"nav-item dropdown\">
                                    <a href=\"\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
                                    <div class=\"dropdown-menu rounded-0 m-0\">
                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_status_update", ["order" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 46), "status" => "Shipped"]), "html", null, true);
            echo "\" class=\"dropdown-item\">Shipped</a>
                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_status_update", ["order" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 47), "status" => "Rejected"]), "html", null, true);
            echo "\" class=\"dropdown-item\">Rejected</a>
                                    </div>
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_commandadmin");
            echo "\" class=\"btn btn-sm btn-primary\">show</a>
                            </td>
                        </tr>
                    ";
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
            // line 56
            echo "                        <tr>
                            <td colspan=\"5\" class=\"text-center\">
                                <h6 class=\"font-weight-medium\">No Order</h6>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Cart End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 62,  172 => 56,  155 => 52,  147 => 47,  143 => 46,  138 => 44,  132 => 41,  128 => 40,  124 => 39,  120 => 37,  102 => 36,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}

    <!-- Page Header Start -->
    <div class=\"container-fluid bg-secondary mb-5\">
        <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Orders Of Clients</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Orders Of Clients</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-8 table-responsive mb-5\">
                <table class=\"table table-bordered text-center mb-0\">
                    <thead class=\"bg-secondary text-dark\">
                    <tr>
                        <th>Id Commande</th>
                        <th>Date</th>
                        <th>Email Client</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody class=\"align-middle\">


                    {% for order in orders %}
                        <tr>

                            <td class=\"align-middle\">{{loop.index}}</td>
                            <td class=\"align-middle\">{{order.createdat|date('d/m/Y')}}</td>
                            <td class=\"align-middle\">{{order.user.email}}</td>
                            <td>
                                <div class=\"nav-item dropdown\">
                                    <a href=\"\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">{{order.status}}</a>
                                    <div class=\"dropdown-menu rounded-0 m-0\">
                                        <a href=\"{{path('order_status_update',{order: order.id, status: 'Shipped'})}}\" class=\"dropdown-item\">Shipped</a>
                                        <a href=\"{{path('order_status_update',{order: order.id, status: 'Rejected'})}}\" class=\"dropdown-item\">Rejected</a>
                                    </div>
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <a href=\"{{ path('detail_commandadmin') }}\" class=\"btn btn-sm btn-primary\">show</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center\">
                                <h6 class=\"font-weight-medium\">No Order</h6>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Cart End -->
{% endblock %}
", "cart/admin.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\cart\\admin.html.twig");
    }
}
