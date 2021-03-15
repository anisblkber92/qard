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

/* liste/index.html.twig */
class __TwigTemplate_40573e243a31b87191c4c8758858784d16540a39feaf7f1fc0dc9962409c26a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ListeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

    <main role=\"main\" class=\"container\" style=\"padding-top: 100px;\">
    <div class=\"jumbotron\" id=\"liste\">
     
    </div>
    <div class=\"container\">
    <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Team</th>
      </tr>
    </thead>
    <tbody>

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 26, $this->source); })()), "data", [], "array", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["players"]) {
            // line 27
            echo "        ";
            if ($context["players"]) {
                // line 28
                echo "      <tr>
        <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["players"], "first_name", [], "array", false, false, false, 29), "html", null, true);
                echo "</td>
        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["players"], "last_name", [], "array", false, false, false, 30), "html", null, true);
                echo "</td>
        <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["players"], "team", [], "array", false, false, false, 31), "name", [], "array", false, false, false, 31), "html", null, true);
                echo "</td>
      </tr>
        ";
            }
            // line 34
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['players'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    
    </tbody>
  </table>
  <div id=\"list\">

  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Team</th>
      </tr>
    </thead>
    <tbody>

    <tbody>

      <tr v-for=\"p in 1\">
        <td>";
        // line 53
        echo "{{ joueurs}}";
        echo " </td>
      </tr>
    </tbody>
  </table>

    <nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Previous</a></li>
        <li class=\"page-item\"><span @click=\"showPlayers\" class=\"page-link\" data-page=";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 61, $this->source); })()), "meta", [], "array", false, false, false, 61), "next_page", [], "array", false, false, false, 61), "html", null, true);
        echo ">Next</span></li>
    </ul>
  
    </nav>
    </div> 
    </div>
    </main>

<footer>
  
</footer>
<script>

new Vue({
  el: '#list',
  data: {
    joueurs: '";
        // line 77
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 77, $this->source); })()), "data", [], "array", false, false, false, 77));
        echo "'
  },
  // Définissez les méthodes de l'objet
  methods: {
    showPlayers: function () {
        console.log(this.joueurs) 
    }
  }
})
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "liste/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 77,  171 => 61,  160 => 53,  140 => 35,  134 => 34,  128 => 31,  124 => 30,  120 => 29,  117 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ListeController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

    <main role=\"main\" class=\"container\" style=\"padding-top: 100px;\">
    <div class=\"jumbotron\" id=\"liste\">
     
    </div>
    <div class=\"container\">
    <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Team</th>
      </tr>
    </thead>
    <tbody>

    {% for players in contents['data'] %}
        {% if players %}
      <tr>
        <td>{{players['first_name']}}</td>
        <td>{{players['last_name']}}</td>
        <td>{{players['team']['name']}}</td>
      </tr>
        {% endif %}
    {% endfor %}
    
    </tbody>
  </table>
  <div id=\"list\">

  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Team</th>
      </tr>
    </thead>
    <tbody>

    <tbody>

      <tr v-for=\"p in 1\">
        <td>{{\"{{ joueurs}}\"}} </td>
      </tr>
    </tbody>
  </table>

    <nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Previous</a></li>
        <li class=\"page-item\"><span @click=\"showPlayers\" class=\"page-link\" data-page={{contents['meta']['next_page']}}>Next</span></li>
    </ul>
  
    </nav>
    </div> 
    </div>
    </main>

<footer>
  
</footer>
<script>

new Vue({
  el: '#list',
  data: {
    joueurs: '{{ contents[\"data\"] | json_encode | raw }}'
  },
  // Définissez les méthodes de l'objet
  methods: {
    showPlayers: function () {
        console.log(this.joueurs) 
    }
  }
})
</script>
{% endblock %}
", "liste/index.html.twig", "/home/belkebir/Bureau/qard/templates/liste/index.html.twig");
    }
}
