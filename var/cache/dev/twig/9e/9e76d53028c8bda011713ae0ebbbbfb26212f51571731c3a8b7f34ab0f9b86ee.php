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

/* fiche_frais/new.html.twig */
class __TwigTemplate_60b0987c9be0d83c10e3230f25ff7f29cc08195d546d2cf018ab88f8be1af911 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_frais/new.html.twig", 1);
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

        echo "New FicheFrais";
        
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
  <a class=\"navbar-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_frais_new");
        echo "\">Créer Fiche Frais</a>
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
    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visiteur");
        echo "\" class=\"sidenav-link \">GSB</a>
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

<div class=\"grix xs6\">
  <div class=\"pos-xs3\">
<div class=\"card shadow-1 white\" style=\"width: 260%;\">
  <div class=\"card-content\">
<!--Créer fiche frais-->
  <center><h1>Créer un nouveau Fiche Frais</h1></center>

    ";
        // line 41
        echo twig_include($this->env, $context, "fiche_frais/_form.html.twig");
        echo "
    <!---->

    </div>
</div>
</div>
</div>
<!--Retour a la liste-->
 <center> <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulter");
        echo "\" class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\">Retour à la Liste</a></center>
  <!---->

  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fiche_frais/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 49,  143 => 41,  125 => 26,  121 => 25,  117 => 24,  112 => 22,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New FicheFrais{% endblock %}

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
    <a href=\"{{path('visiteur')}}\" class=\"sidenav-link \">GSB</a>
  </div>
    <a href=\"{{path('visiteur')}}\" class=\"sidenav-link \">Accueil</a>
    <a href=\"{{path('renseigner')}}\" class=\"sidenav-link \">Renseigner</a>
    <a href=\"{{path('consulter')}}\" class=\"sidenav-link\">Consulter</a>
    
  <div class=\"sidenav-footer  airforce dark-2\">
   @Copyright GSB
  </div>
</div>
 <!---->

<div class=\"grix xs6\">
  <div class=\"pos-xs3\">
<div class=\"card shadow-1 white\" style=\"width: 260%;\">
  <div class=\"card-content\">
<!--Créer fiche frais-->
  <center><h1>Créer un nouveau Fiche Frais</h1></center>

    {{ include('fiche_frais/_form.html.twig') }}
    <!---->

    </div>
</div>
</div>
</div>
<!--Retour a la liste-->
 <center> <a href=\"{{ path('consulter') }}\" class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\">Retour à la Liste</a></center>
  <!---->

  
{% endblock %}
", "fiche_frais/new.html.twig", "/var/www/html/gsb/templates/fiche_frais/new.html.twig");
    }
}
