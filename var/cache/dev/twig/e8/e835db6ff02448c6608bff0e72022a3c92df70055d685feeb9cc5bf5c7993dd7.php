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

/* visiteur/renseigner.html.twig */
class __TwigTemplate_b410a2afc25464af42933aad1fd4b1f9de57fa32bed0270a3512ac05c3e8320f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/renseigner.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/renseigner.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/renseigner.html.twig", 1);
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

        echo "Galaxy-Swiss-Bourdin";
        
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
 <!-- Barre de menu  -->
<nav class=\"navbar shadow-1 airforce dark-2\">
  <a href=\"#\" class=\"navbar-brand\">GSB</a>
    <div class=\"navbar-menu ml-auto hover-bg-dark\">
  <a class=\"navbar-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_frais_new");
        echo "\">Créer Fiche Frais</a>
  <a class=\"navbar-link \" href=\"";
        // line 12
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
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "prenom", [], "any", false, false, false, 21), "html", null, true);
        echo " </a>

  </div>
    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visiteur");
        echo "\" class=\"sidenav-link \">Accueil</a>
    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renseigner");
        echo "\" class=\"sidenav-link \">Renseigner</a>
    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulter");
        echo "\" class=\"sidenav-link\">Consulter</a>
  <div class=\"sidenav-footer  airforce dark-2\">
   @Copyright GSB
  </div>
</div>
 <!---->

 <!-- Liste -->
<center><h1>Renseignement de vos fiches </h1></center>

<br>
<br>

<br>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Mois</th>
                <th>Nombre <br>Justificatifs</th>
                <th>Montant Validé</th>
                <th>Date Modifiée</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiche_frais"]) || array_key_exists("fiche_frais", $context) ? $context["fiche_frais"] : (function () { throw new RuntimeError('Variable "fiche_frais" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fiche_frai"]) {
            // line 55
            echo "            <tr>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "mois", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "mois", [], "any", false, false, false, 57), ", "), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "nbJustificatifs", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "montantValide", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            ((twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "dateModif", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "dateModif", [], "any", false, false, false, 60), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_frais_show", ["id" => twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo " class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\">Détails</a>
                  
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <tr>
                <td colspan=\"6\">Aucune information <B><a href=\"app_fiche_frais_new\">Créer une fiche frais</B></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche_frai'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>
 <!-- -->
    




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/renseigner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 71,  197 => 67,  187 => 62,  182 => 60,  178 => 59,  174 => 58,  170 => 57,  166 => 56,  163 => 55,  158 => 54,  127 => 26,  123 => 25,  119 => 24,  111 => 21,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Galaxy-Swiss-Bourdin{% endblock %}

{% block body %}

 <!-- Barre de menu  -->
<nav class=\"navbar shadow-1 airforce dark-2\">
  <a href=\"#\" class=\"navbar-brand\">GSB</a>
    <div class=\"navbar-menu ml-auto hover-bg-dark\">
  <a class=\"navbar-link\" href=\"{{path('app_fiche_frais_new')}}\">Créer Fiche Frais</a>
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

 <!-- Liste -->
<center><h1>Renseignement de vos fiches </h1></center>

<br>
<br>

<br>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Mois</th>
                <th>Nombre <br>Justificatifs</th>
                <th>Montant Validé</th>
                <th>Date Modifiée</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
        {% for fiche_frai in fiche_frais %}
            <tr>
                <td>{{ fiche_frai.id }}</td>
                <td>{{ fiche_frai.mois ? fiche_frai.mois|join(', ') : '' }}</td>
                <td>{{ fiche_frai.nbJustificatifs }}</td>
                <td>{{ fiche_frai.montantValide }}</td>
                <td>{{ fiche_frai.dateModif ? fiche_frai.dateModif|date('d-m-Y') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_fiche_frais_show', {'id': fiche_frai.id}) }} class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\">Détails</a>
                  
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">Aucune information <B><a href=\"app_fiche_frais_new\">Créer une fiche frais</B></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
 <!-- -->
    




{% endblock %}
", "visiteur/renseigner.html.twig", "/var/www/html/gsb/templates/visiteur/renseigner.html.twig");
    }
}
