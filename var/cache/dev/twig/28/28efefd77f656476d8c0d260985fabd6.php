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

/* editors/index.html.twig */
class __TwigTemplate_3ef197cd48d67f4a65df84abccf00282 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editors/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editors/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "editors/index.html.twig", 1);
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
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Show Admin</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"\">Home</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">Show Admin</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class=\"container-fluid pt-5\">
    <div class=\"text-center mb-4\">
<div class=\"container mt-4\">

            <div class=\"card\">


                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Id</th>
                            <th scope=\"col\">Email</th>
                            <th scope=\"col\">Action</th>
                            <th scope=\"col\"></th>
                            <th scope=\"col\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["editors"]) || array_key_exists("editors", $context) ? $context["editors"] : (function () { throw new RuntimeError('Variable "editors" does not exist.', 37, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["editor"]) {
            // line 38
            echo "                            <tr class=\"table-primary\">
                                <th scope=\"row\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39), "html", null, true);
            echo "</th>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["editor"], "email", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["editor"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Edit</a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor.detail", ["id" => twig_get_attribute($this->env, $this->source, $context["editor"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-info\">View</a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["editor"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Delete</a>
                                </td>
                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['editor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </tbody>
                    </table>
                </div>

            </div>
    <div class=\"col-12 pb-1 pagination justify-content-center mb-3\">
        ";
        // line 58
        if ((isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "            <div class=\"row mt-2\">
                <nav aria-label=\"col Page navigation example\">
                    <ul class=\"pagination\">
                        ";
            // line 62
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 62, $this->source); })()) != 1)) {
                // line 63
                echo "                            <li class=\"page-item\">
                                <a
                                        class=\"page-link\"
                                        href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor.list.alls", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 66, $this->source); })()) - 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 66, $this->source); })())]), "html", null, true);
                echo "\">Previous</a></li>
                        ";
            }
            // line 68
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 68, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                echo "                            <li class=\"page-item\">
                                <a class=\"page-link\"
                                   href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor.list.alls", ["page" => $context["i"], "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 71, $this->source); })())]), "html", null, true);
                echo "\"
                                >";
                // line 72
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                        ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 76, $this->source); })()) != (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 76, $this->source); })()))) {
                // line 77
                echo "                            <li class=\"page-item\">
                                <a
                                        class=\"page-link\"
                                        href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor.list.alls", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()) + 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 80, $this->source); })())]), "html", null, true);
                echo "\">Next</a></li>
                        ";
            }
            // line 82
            echo "                    </ul>
                </nav>
            </div>

        ";
        }
        // line 87
        echo "    </div>
</div></div></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "editors/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 87,  225 => 82,  220 => 80,  215 => 77,  212 => 76,  202 => 72,  198 => 71,  194 => 69,  189 => 68,  184 => 66,  179 => 63,  177 => 62,  172 => 59,  170 => 58,  162 => 52,  144 => 48,  138 => 45,  132 => 42,  127 => 40,  123 => 39,  120 => 38,  103 => 37,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}

<!-- Page Header Start -->
<div class=\"container-fluid bg-secondary mb-5\">
    <div class=\"d-flex flex-column align-items-center justify-content-center\" style=\"min-height: 300px\">
        <h1 class=\"font-weight-semi-bold text-uppercase mb-3\">Show Admin</h1>
        <div class=\"d-inline-flex\">
            <p class=\"m-0\"><a href=\"\">Home</a></p>
            <p class=\"m-0 px-2\">-</p>
            <p class=\"m-0\">Show Admin</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class=\"container-fluid pt-5\">
    <div class=\"text-center mb-4\">
<div class=\"container mt-4\">

            <div class=\"card\">


                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Id</th>
                            <th scope=\"col\">Email</th>
                            <th scope=\"col\">Action</th>
                            <th scope=\"col\"></th>
                            <th scope=\"col\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for editor in editors %}
                            <tr class=\"table-primary\">
                                <th scope=\"row\">{{loop.index}}</th>
                                <td>{{ editor.email }}</td>
                                <td>
                                    <a href=\"{{ path('editor.edit', { id: editor.id }) }}\" class=\"btn btn-info\">Edit</a>
                                </td>
                                <td>
                                    <a href=\"{{ path('editor.detail', { id: editor.id }) }}\" class=\"btn btn-info\">View</a>
                                </td>
                                <td>
                                    <a href=\"{{ path('editor.delete', { id: editor.id }) }}\" class=\"btn btn-warning\">Delete</a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>

            </div>
    <div class=\"col-12 pb-1 pagination justify-content-center mb-3\">
        {% if isPaginated %}
            <div class=\"row mt-2\">
                <nav aria-label=\"col Page navigation example\">
                    <ul class=\"pagination\">
                        {% if page != 1 %}
                            <li class=\"page-item\">
                                <a
                                        class=\"page-link\"
                                        href=\"{{path('editor.list.alls', {page: page-1, nbre: nbre})}}\">Previous</a></li>
                        {% endif %}
                        {%  for i in range(1, nbrePage) %}
                            <li class=\"page-item\">
                                <a class=\"page-link\"
                                   href=\"{{path('editor.list.alls', {page: i, nbre: nbre})}}\"
                                >{{ i }}
                                </a>
                            </li>
                        {% endfor %}
                        {% if page != nbrePage %}
                            <li class=\"page-item\">
                                <a
                                        class=\"page-link\"
                                        href=\"{{path('editor.list.alls', {page: page+1, nbre: nbre})}}\">Next</a></li>
                        {% endif %}
                    </ul>
                </nav>
            </div>

        {% endif %}
    </div>
</div></div></div>

{% endblock %}




", "editors/index.html.twig", "C:\\workspace\\E-commerce-project-main\\templates\\editors\\index.html.twig");
    }
}
