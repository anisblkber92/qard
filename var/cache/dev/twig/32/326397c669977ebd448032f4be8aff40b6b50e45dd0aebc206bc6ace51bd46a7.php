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
class __TwigTemplate_e3f5632639d798daa1e93f044946389b55d78cb501139a23c49724e96d23e5be extends Template
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

      <tr v-for=\"p in players\">
        <td>";
        // line 32
        echo "{{ p.first_name }}";
        echo " </td>
        <td>";
        // line 33
        echo "{{ p.last_name }}";
        echo " </td>
        <td>";
        // line 34
        echo "{{ p.team.name }}";
        echo " </td>
      </tr>
    </tbody>
  </table>

    <nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
        <li v-if='this.previous_page > 0' @click=\"showPlayers('previous')\" class=\"page-item\"><a class=\"page-link\">Previous</a></li>
        <li v-if='this.next_page > 0' class=\"page-item\"><span @click=\"showPlayers('next')\" class=\"page-link\" data-page=";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 42, $this->source); })()), "meta", [], "array", false, false, false, 42), "next_page", [], "array", false, false, false, 42), "html", null, true);
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
        // line 58
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 58, $this->source); })()), "data", [], "array", false, false, false, 58));
        echo "',
    listPlayers: [],
    next_page: parseInt('";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 60, $this->source); })()), "meta", [], "array", false, false, false, 60), "next_page", [], "array", false, false, false, 60), "html", null, true);
        echo "'),
    previous_page: -1
  },
  // Définissez les méthodes de l'objet
  methods: {
    showPlayers: function (type) {
        
        var pageToDisplay = type == 'previous' ? this.previous_page : this.next_page
         axios.get('https://www.balldontlie.io/api/v1/players?page=' + pageToDisplay, {
     
                }).then(response =>  {
                        if (response.status == 200) {
                            console.log(response.data)
                            this.listPlayers = response.data.data
                            this.next_page = response.data.meta.next_page
                            this.previous_page = response.data.meta.next_page - 2
                        } else {
                            console.log(response)
                        }
                        
                    }            
                );
    } 
  },
  computed: {
      players() {

          return this.listPlayers.length > 0 ? this.listPlayers : JSON.parse(this.joueurs)
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
        return array (  159 => 60,  154 => 58,  135 => 42,  124 => 34,  120 => 33,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

      <tr v-for=\"p in players\">
        <td>{{\"{{ p.first_name }}\"}} </td>
        <td>{{\"{{ p.last_name }}\"}} </td>
        <td>{{\"{{ p.team.name }}\"}} </td>
      </tr>
    </tbody>
  </table>

    <nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
        <li v-if='this.previous_page > 0' @click=\"showPlayers('previous')\" class=\"page-item\"><a class=\"page-link\">Previous</a></li>
        <li v-if='this.next_page > 0' class=\"page-item\"><span @click=\"showPlayers('next')\" class=\"page-link\" data-page={{contents['meta']['next_page']}}>Next</span></li>
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
    joueurs: '{{ contents[\"data\"] | json_encode()| raw }}',
    listPlayers: [],
    next_page: parseInt('{{contents[\"meta\"][\"next_page\"]}}'),
    previous_page: -1
  },
  // Définissez les méthodes de l'objet
  methods: {
    showPlayers: function (type) {
        
        var pageToDisplay = type == 'previous' ? this.previous_page : this.next_page
         axios.get('https://www.balldontlie.io/api/v1/players?page=' + pageToDisplay, {
     
                }).then(response =>  {
                        if (response.status == 200) {
                            console.log(response.data)
                            this.listPlayers = response.data.data
                            this.next_page = response.data.meta.next_page
                            this.previous_page = response.data.meta.next_page - 2
                        } else {
                            console.log(response)
                        }
                        
                    }            
                );
    } 
  },
  computed: {
      players() {

          return this.listPlayers.length > 0 ? this.listPlayers : JSON.parse(this.joueurs)
      }
  }
})
</script>
{% endblock %}
", "liste/index.html.twig", "/home/belkebir/Bureau/project/qard/templates/liste/index.html.twig");
    }
}
