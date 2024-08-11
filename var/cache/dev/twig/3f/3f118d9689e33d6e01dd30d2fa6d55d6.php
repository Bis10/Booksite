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

/* booklist/new.html.twig */
class __TwigTemplate_1306807b916d51856431609ed2e56889 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booklist/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booklist/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Add New Book";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<style>
\t\t/* Simple styling for the form container */
\t\t.form-container {
\t\t\tbackground-color: #f5f5f5;
\t\t\tpadding: 20px;
\t\t\tborder-radius: 10px;
\t\t\tmax-width: 500px;
\t\t\tmargin: auto;
\t\t}

\t\t/* Simple styling for form elements */
\t\t.form-container .form-control {
\t\t\twidth: 100%;
\t\t\tpadding: 10px;
\t\t\tmargin-bottom: 15px;
\t\t\tborder: 1px solid #ccc;
\t\t\tborder-radius: 5px;
\t\t\tfont-size: 20px;
\t\t}

\t\t/* Styling for the Save button */
\t\t.form-container .btn {
\t\t\tbackground-color: #007bff;
\t\t\tcolor: white;
\t\t\tpadding: 10px 20px;
\t\t\tborder: none;
\t\t\tborder-radius: 5px;
\t\t\tcursor: pointer;
\t\t\tfont-size: 20px;
\t\t}

\t\t/* Button hover effect */
\t\t.form-container .btn:hover {
\t\t\tbackground-color: #0056b3;
\t\t}

\t\t/* Styling for the back link */
\t\t.back-link {
\t\t\tdisplay: inline-block;
\t\t\tmargin-top: 20px;
\t\t\tcolor: #007bff;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 20px;
\t\t}

\t\t/* Hover effect for back link */
\t\t.back-link:hover {
\t\t\ttext-decoration: underline;
\t\t}
\t</style>

\t<div class=\"form-container\">
\t\t<h1>Add New Book</h1>

\t\t";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_start');
        yield "
\t\t";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t<button class=\"btn\">Save</button>
\t\t";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        yield "

\t\t<a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_index");
        yield "\" class=\"back-link\">Back to Book List</a>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "booklist/new.html.twig";
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
        return array (  146 => 66,  141 => 64,  136 => 62,  132 => 61,  76 => 7,  69 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add New Book
{% endblock %}

{% block body %}
\t<style>
\t\t/* Simple styling for the form container */
\t\t.form-container {
\t\t\tbackground-color: #f5f5f5;
\t\t\tpadding: 20px;
\t\t\tborder-radius: 10px;
\t\t\tmax-width: 500px;
\t\t\tmargin: auto;
\t\t}

\t\t/* Simple styling for form elements */
\t\t.form-container .form-control {
\t\t\twidth: 100%;
\t\t\tpadding: 10px;
\t\t\tmargin-bottom: 15px;
\t\t\tborder: 1px solid #ccc;
\t\t\tborder-radius: 5px;
\t\t\tfont-size: 20px;
\t\t}

\t\t/* Styling for the Save button */
\t\t.form-container .btn {
\t\t\tbackground-color: #007bff;
\t\t\tcolor: white;
\t\t\tpadding: 10px 20px;
\t\t\tborder: none;
\t\t\tborder-radius: 5px;
\t\t\tcursor: pointer;
\t\t\tfont-size: 20px;
\t\t}

\t\t/* Button hover effect */
\t\t.form-container .btn:hover {
\t\t\tbackground-color: #0056b3;
\t\t}

\t\t/* Styling for the back link */
\t\t.back-link {
\t\t\tdisplay: inline-block;
\t\t\tmargin-top: 20px;
\t\t\tcolor: #007bff;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 20px;
\t\t}

\t\t/* Hover effect for back link */
\t\t.back-link:hover {
\t\t\ttext-decoration: underline;
\t\t}
\t</style>

\t<div class=\"form-container\">
\t\t<h1>Add New Book</h1>

\t\t{{ form_start(form) }}
\t\t{{ form_widget(form, {'attr': {'class': 'form-control'}}) }}
\t\t<button class=\"btn\">Save</button>
\t\t{{ form_end(form) }}

\t\t<a href=\"{{ path('book_index') }}\" class=\"back-link\">Back to Book List</a>
\t</div>
{% endblock %}

", "booklist/new.html.twig", "/var/www/web/templates/booklist/new.html.twig");
    }
}
