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

/* fiche_frais/show.html.twig */
class __TwigTemplate_6e460e89778c83a663d5790523419090fdbf9bd08ebb05aae4b6f1751e2016ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_frais/show.html.twig", 1);
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

        echo "FicheFrais";
        
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
        echo " <!-- Barre de menu  -->
<nav class=\"navbar shadow-1 airforce dark-2\">
  <a href=\"#\" class=\"navbar-brand\">GSB</a>
    <div class=\"navbar-menu ml-auto hover-bg-dark\">
 
  <a class=\"navbar-link \" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
        echo "\">Déconnexion</a>
  <a data-target=\"slidebar\" class=\"navbar-link\" >Plus </a>
    </div>
</nav>
 <!--  -->

               
           
 <!-- Slidebar -->
<div class=\"sidenav shadow-1 white\" id=\"slidebar\" data-ax=\"sidenav\">
  <div class=\"sidenav-header airforce dark-2\">
  <a class=\"navbar-link navbar-centered\" href=\"\"> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "prenom", [], "any", false, false, false, 22), "html", null, true);
        echo " </a>

  </div>
    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visiteur");
        echo "\" class=\"sidenav-link \">Accueil</a>
    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renseigner");
        echo "\" class=\"sidenav-link \">Renseigner</a>
    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulter");
        echo "\" class=\"sidenav-link\">Consulter</a>
    
  <div class=\"sidenav-footer  airforce dark-2\">
   @Copyright GSB
  </div>
</div>
 <!---->

<br>
<br>
<div class=\"grix xs6\">
  <div class=\"pos-xs3\">
<div class=\"card shadow-1 white\" style=\"width: 260%;\">
  <div class=\"card-content\">
<!--Afficher fiche frais-->


    <h1>FicheFrais</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mois</th>
                <td>";
        // line 54
        ((twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 54, $this->source); })()), "mois", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 54, $this->source); })()), "mois", [], "any", false, false, false, 54), ", "), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>NbJustificatifs</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 58, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>MontantValide</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 62, $this->source); })()), "montantValide", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateModif</th>
                <td>";
        // line 66
        ((twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 66, $this->source); })()), "dateModif", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 66, $this->source); })()), "dateModif", [], "any", false, false, false, 66), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>DateModif</th>
                <td>";
        // line 70
        ((twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 70, $this->source); })()), "dateModif", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 70, $this->source); })()), "dateModif", [], "any", false, false, false, 70), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Ligne Frais Forfait</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 74, $this->source); })()), "ligneFraisForfait", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ligne Frais Hors Forfait</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 78, $this->source); })()), "ligneFraisHorsForfait", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Etat</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 82, $this->source); })()), "etat", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
<br>
 
 <!---->

    </div>
</div>
</div>
</div>

  <!--Modifier-->
 <center> <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_frais_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\"class=\"btn rounded-1 blue btn-press meadow dark-4\">Modifier</a></center>
  <!---->
<br>


    <!--Retour a la liste-->
 <center> <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visiteur");
        echo "\" class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\">Retour à la Liste</a></center>
  <!---->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fiche_frais/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 102,  224 => 96,  207 => 82,  200 => 78,  193 => 74,  186 => 70,  179 => 66,  172 => 62,  165 => 58,  158 => 54,  151 => 50,  125 => 27,  121 => 26,  117 => 25,  109 => 22,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FicheFrais{% endblock %}

{% block body %}
 <!-- Barre de menu  -->
<nav class=\"navbar shadow-1 airforce dark-2\">
  <a href=\"#\" class=\"navbar-brand\">GSB</a>
    <div class=\"navbar-menu ml-auto hover-bg-dark\">
 
  <a class=\"navbar-link \" href=\"{{path('deconnexion')}}\">Déconnexion</a>
  <a data-target=\"slidebar\" class=\"navbar-link\" >Plus </a>
    </div>
</nav>
 <!--  -->

               
           
 <!-- Slidebar -->
<div class=\"sidenav shadow-1 white\" id=\"slidebar\" data-ax=\"sidenav\">
  <div class=\"sidenav-header airforce dark-2\">
  <a class=\"navbar-link navbar-centered\" href=\"\"> {{app.user.nom}} {{app.user.prenom}} </a>

  </div>
    <a href=\"{{path('visiteur')}}\" class=\"sidenav-link \">Accueil</a>
    <a href=\"{{path('renseigner')}}\" class=\"sidenav-link \">Renseigner</a>
    <a href=\"{{path('consulter')}}\" class=\"sidenav-link\">Consulter</a>
    
  <div class=\"sidenav-footer  airforce dark-2\">
   @Copyright GSB
  </div>
</div>
 <!---->

<br>
<br>
<div class=\"grix xs6\">
  <div class=\"pos-xs3\">
<div class=\"card shadow-1 white\" style=\"width: 260%;\">
  <div class=\"card-content\">
<!--Afficher fiche frais-->


    <h1>FicheFrais</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fiche_frai.id }}</td>
            </tr>
            <tr>
                <th>Mois</th>
                <td>{{ fiche_frai.mois ? fiche_frai.mois|join(', ') : '' }}</td>
            </tr>
            <tr>
                <th>NbJustificatifs</th>
                <td>{{ fiche_frai.nbJustificatifs }}</td>
            </tr>
            <tr>
                <th>MontantValide</th>
                <td>{{ fiche_frai.montantValide }}</td>
            </tr>
            <tr>
                <th>DateModif</th>
                <td>{{ fiche_frai.dateModif ? fiche_frai.dateModif|date('d-m-Y') : '' }}</td>
            </tr>
            <tr>
                <th>DateModif</th>
                <td>{{ fiche_frai.dateModif ? fiche_frai.dateModif|date('d-m-Y') : '' }}</td>
            </tr>
            <tr>
                <th>Ligne Frais Forfait</th>
                <td>{{ fiche_frai.ligneFraisForfait }}</td>
            </tr>
            <tr>
                <th>Ligne Frais Hors Forfait</th>
                <td>{{ fiche_frai.ligneFraisHorsForfait }}</td>
            </tr>
             <tr>
                <th>Etat</th>
                <td>{{ fiche_frai.etat}}</td>
            </tr>
        </tbody>
    </table>
<br>
 
 <!---->

    </div>
</div>
</div>
</div>

  <!--Modifier-->
 <center> <a href=\"{{ path('app_fiche_frais_edit', {'id': fiche_frai.id}) }}\"class=\"btn rounded-1 blue btn-press meadow dark-4\">Modifier</a></center>
  <!---->
<br>


    <!--Retour a la liste-->
 <center> <a href=\"{{ path('visiteur') }}\" class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\">Retour à la Liste</a></center>
  <!---->
{% endblock %}
", "fiche_frais/show.html.twig", "/var/www/html/gsb/templates/fiche_frais/show.html.twig");
    }
}
