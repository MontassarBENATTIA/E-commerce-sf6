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

/* cart/user.html.twig */
class __TwigTemplate_20002b2058c5e0e4f03c14436c2a03d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/user.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "cart/user.html.twig", 1);
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
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Orders</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Orders</p>
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
                        <th>Email Client</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody class=\"align-middle\">


                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "commandes", [], "any", false, false, false, 35));
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
            // line 36
            echo "                        <tr>
                            <td class=\"align-middle\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 38), "email", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">
                                ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 40) == "processing...")) {
                // line 41
                echo "                                    <span class=\"btn btn-sm btn-primary\">
                                                ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 42), "html", null, true);
                echo "
                                            </span>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 44
$context["order"], "status", [], "any", false, false, false, 44) == "shipped")) {
                // line 45
                echo "                                    <span class=\"btn btn-sm btn-primary\">
                                                ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 46), "html", null, true);
                echo "
                                            </span>
                                ";
            } else {
                // line 49
                echo "                                    <span class=\"btn btn-sm btn-primary\">
                                                ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 50), "html", null, true);
                echo "
                                            </span>
                                ";
            }
            // line 53
            echo "                            </td>
                            <td class=\"align-middle\">
                                <a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_command");
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
            // line 59
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
        // line 65
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
        return "cart/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 65,  182 => 59,  165 => 55,  161 => 53,  155 => 50,  152 => 49,  146 => 46,  143 => 45,  141 => 44,  136 => 42,  133 => 41,  131 => 40,  126 => 38,  122 => 37,  119 => 36,  101 => 35,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}

    <!-- Page Header Start -->
    <div class=\"container-fluid bg-secondary mb-5\">
        <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
            <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Orders</h1>
            <div class=\"d-inline-flex\">
                <p class=\"m-0\"><a href=\"\">Home</a></p>
                <p class=\"m-0 px-2\">-</p>
                <p class=\"m-0\">Orders</p>
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
                        <th>Email Client</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody class=\"align-middle\">


                    {% for order in user.commandes %}
                        <tr>
                            <td class=\"align-middle\">{{loop.index}}</td>
                            <td class=\"align-middle\">{{order.user.email}}</td>
                            <td class=\"align-middle\">
                                {% if order.status == 'processing...' %}
                                    <span class=\"btn btn-sm btn-primary\">
                                                {{order.status}}
                                            </span>
                                {% elseif order.status == 'shipped' %}
                                    <span class=\"btn btn-sm btn-primary\">
                                                {{order.status}}
                                            </span>
                                {% else %}
                                    <span class=\"btn btn-sm btn-primary\">
                                                {{order.status}}
                                            </span>
                                {% endif %}
                            </td>
                            <td class=\"align-middle\">
                                <a href=\"{{ path(\"detail_command\") }}\" class=\"btn btn-sm btn-primary\">show</a>
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
", "cart/user.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\cart\\user.html.twig");
    }
}
