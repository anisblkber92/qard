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

/* search/index.html.twig */
class __TwigTemplate_b665e754902f710770465d56478f508e9471fbb4eaaf086ce692f9863ced67f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
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

        echo "Hello SearchController!";
        
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
        echo "
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
    <div id=\"comparePlayers\">
    <form method=\"POST\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
       <select v-for=\"(player, index) in nbPlayers\"  :name=\"'joueur'+index\" class=\"form-select\" aria-label=\"Default select example\">
        <option selected >Open this select player</option>
        
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 26, $this->source); })()), "data", [], "array", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["players"]) {
            // line 27
            echo "            ";
            if ($context["players"]) {
                // line 28
                echo "            <option value=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["players"], "id", [], "array", false, false, false, 28), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["players"], "first_name", [], "array", false, false, false, 28) . " ") . twig_get_attribute($this->env, $this->source, $context["players"], "last_name", [], "array", false, false, false, 28)), "html", null, true);
                echo "</option>
            ";
            }
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['players'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </select>
        <div >
            <span v-if= \"nbPlayers > 2\" @click=\" nbPlayers--\" >Supprimer joueur</span>
        </div>
        <div >
            <span @click=\"nbPlayers++\" >Ajouter joueur</span>
        </div>
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary\">Comparer</button>
        </div>
    </form>
   </div>
</div>
<script>
new Vue({
        el: '#comparePlayers',
        data: () => ({ 
            nbPlayers: 2,

        }),
    })
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 31,  128 => 30,  120 => 28,  117 => 27,  113 => 26,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <div id=\"comparePlayers\">
    <form method=\"POST\" action=\"{{path('search')}}\">
       <select v-for=\"(player, index) in nbPlayers\"  :name=\"'joueur'+index\" class=\"form-select\" aria-label=\"Default select example\">
        <option selected >Open this select player</option>
        
        {% for players in contents['data'] %}
            {% if players %}
            <option value={{players['id']}}>{{players['first_name'] ~ ' '~ players['last_name']}}</option>
            {% endif %}
        {% endfor %}
        </select>
        <div >
            <span v-if= \"nbPlayers > 2\" @click=\" nbPlayers--\" >Supprimer joueur</span>
        </div>
        <div >
            <span @click=\"nbPlayers++\" >Ajouter joueur</span>
        </div>
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary\">Comparer</button>
        </div>
    </form>
   </div>
</div>
<script>
new Vue({
        el: '#comparePlayers',
        data: () => ({ 
            nbPlayers: 2,

        }),
    })
</script>
{% endblock %}
", "search/index.html.twig", "/home/belkebir/Bureau/qard/templates/search/index.html.twig");
    }
}
