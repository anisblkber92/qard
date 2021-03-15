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

/* search/history.html.twig */
class __TwigTemplate_e46ae31291af4a0e12597f2e1b36e37d291c22aa9c1b385a418a1900384415b5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/history.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/history.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello SearchController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .footer {
        background-color: #F1F1F1;
        text-align: center;
        padding: 10px;
        }
</style>

</br>
</br>
</br>
<div class=\"d-flex flex-column min-vh-100\" style=\"padding-top=100px;\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
            // line 21
            echo "        
        <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>id</th>
            <th>Lastname</th>
            <th> Game </th>
            <th>Team</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["history"], "joueurs", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 33
                echo "            ";
                if ($context["player"]) {
                    // line 34
                    echo "        <tr>
            <td>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["history"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "</td>
            <td>";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getFirstName", [], "method", false, false, false, 36), "html", null, true);
                    echo "</td>
            <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getNbgame", [], "method", false, false, false, 37), "html", null, true);
                    echo "</td>
            <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getTeam", [], "method", false, false, false, 38), "html", null, true);
                    echo "</td>
        </tr>
            ";
                }
                // line 41
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </tbody>
  </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "search/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 45,  140 => 42,  134 => 41,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  113 => 34,  110 => 33,  106 => 32,  93 => 21,  89 => 20,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SearchController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .footer {
        background-color: #F1F1F1;
        text-align: center;
        padding: 10px;
        }
</style>

</br>
</br>
</br>
<div class=\"d-flex flex-column min-vh-100\" style=\"padding-top=100px;\">
    {% for history in contents %}
        
        <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>id</th>
            <th>Lastname</th>
            <th> Game </th>
            <th>Team</th>
        </tr>
        </thead>
        <tbody>
        {% for player in history.joueurs %}
            {% if player %}
        <tr>
            <td>{{history.id}}</td>
            <td>{{player.getFirstName()}}</td>
            <td>{{player.getNbgame()}}</td>
            <td>{{player.getTeam()}}</td>
        </tr>
            {% endif %}
        {% endfor %}
        </tbody>
  </table>
    {% endfor %}
</div>
{% endblock %}
", "search/history.html.twig", "/home/belkebir/Bureau/qard/templates/search/history.html.twig");
    }
}
