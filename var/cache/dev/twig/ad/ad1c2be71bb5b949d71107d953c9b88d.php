<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* booklist/index.html.twig */
class __TwigTemplate_3792b563c6a3178a5526312fe4ec6b86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booklist/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booklist/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "\tBook index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        yield "\t<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
document.querySelectorAll('.delete-btn').forEach(function (button) {
button.addEventListener('click', function (event) {
event.preventDefault();
const form = button.closest('form');

Swal.fire({
title: 'Are you sure?',
text: \"You won't be able to revert this!\",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!',
cancelButtonText: 'No, cancel!'
}).then((result) => {
if (result.isConfirmed) {
form.submit();
}
});
});
});
});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        yield "\t<h1>Book Index</h1>
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Author</th>
\t\t\t\t<th>Year</th>
\t\t\t\t<th>Genre</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 55
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 56
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 57
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 58
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "publishingYear", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 59
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "genre", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 60
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t<a href=\"";
            // line 63
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\">edit</a>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<form action=\"";
            // line 66
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 67
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 67))), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"delete-btn\">delete</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "\t\t</tbody>
\t</table>

\t<p>
\t\t<a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_new");
        yield "\" id=\"create-new-link\">Add New Book</a>
\t</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "booklist/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  209 => 78,  203 => 74,  190 => 67,  186 => 66,  180 => 63,  174 => 60,  170 => 59,  166 => 58,  162 => 57,  158 => 56,  155 => 55,  151 => 54,  136 => 41,  129 => 40,  95 => 12,  88 => 11,  79 => 8,  72 => 7,  63 => 4,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tBook index
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css\">
{% endblock %}

{% block javascripts %}
\t<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
document.querySelectorAll('.delete-btn').forEach(function (button) {
button.addEventListener('click', function (event) {
event.preventDefault();
const form = button.closest('form');

Swal.fire({
title: 'Are you sure?',
text: \"You won't be able to revert this!\",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!',
cancelButtonText: 'No, cancel!'
}).then((result) => {
if (result.isConfirmed) {
form.submit();
}
});
});
});
});
\t</script>
{% endblock %}

{% block body %}
\t<h1>Book Index</h1>
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Author</th>
\t\t\t\t<th>Year</th>
\t\t\t\t<th>Genre</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for book in books %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ book.title }}</td>
\t\t\t\t\t<td>{{ book.author }}</td>
\t\t\t\t\t<td>{{ book.publishingYear }}</td>
\t\t\t\t\t<td>{{ book.genre }}</td>
\t\t\t\t\t<td>{{ book.description }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t<a href=\"{{ path('book_edit', {'id': book.id}) }}\">edit</a>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<form action=\"{{ path('book_delete', {'id': book.id}) }}\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ book.id) }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"delete-btn\">delete</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<p>
\t\t<a href=\"{{ path('book_new') }}\" id=\"create-new-link\">Add New Book</a>
\t</p>
{% endblock %}

", "booklist/index.html.twig", "/var/www/web/templates/booklist/index.html.twig");
    }
}
