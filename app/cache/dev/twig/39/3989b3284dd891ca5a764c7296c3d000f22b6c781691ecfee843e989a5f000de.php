<?php

/* SquadFttBundle:Default:evenement.html.twig */
class __TwigTemplate_eedc00fd54a29e95ed43c47271899db9970ec0c4e9927c052ae92477b20e912c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Default:evenement.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SquadFttBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        // line 4
        echo "Evenement
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav menu\">
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li class=\"active\" ><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
         </ul>  
";
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Default:evenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "SquadFttBundle::layout.html.twig" %}*/
/* */
/* {% block titre %}*/
/* Evenement*/
/* {% endblock%}*/
/* */
/* {% block menu %}*/
/* <ul class="nav menu">*/
/*             <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*             <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*             <li class="active" ><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*             <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*             <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*             <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*             <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*             <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*             <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*          </ul>  */
/* {% endblock %}       */
/* */
