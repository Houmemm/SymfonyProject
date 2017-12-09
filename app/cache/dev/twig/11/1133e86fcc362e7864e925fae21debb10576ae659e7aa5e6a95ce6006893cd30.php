<?php

/* SquadFttBundle:Actualites:index.html.twig */
class __TwigTemplate_71d08092cad08b462f433cc963a250f8ea2bc0d74ae71e3caeb2757c4ae6b07a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Actualites:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'menu' => array($this, 'block_menu'),
            'first1' => array($this, 'block_first1'),
            'first2' => array($this, 'block_first2'),
            'first3' => array($this, 'block_first3'),
            'first4' => array($this, 'block_first4'),
            'second1' => array($this, 'block_second1'),
            'third1' => array($this, 'block_third1'),
            'third2' => array($this, 'block_third2'),
            'third3' => array($this, 'block_third3'),
            'third4' => array($this, 'block_third4'),
            'fourth1' => array($this, 'block_fourth1'),
            'fourth2' => array($this, 'block_fourth2'),
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

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        echo "LISTE DES ACTUALITES ";
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
        <li class=\"active\" ><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Actualites</a></li>    
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Evenements</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
    </ul>  
";
    }

    // line 18
    public function block_first1($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">


                <table class=\"table table-striped\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">

                    <thead>
                        <tr class=\"info\">   

                            <th>Titre</th>
                            
                            <th>Date Redaction</th>
                           
                            <th>Photo</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "                            <tr >

                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                               
                                <td>";
            // line 45
            if ($this->getAttribute($context["entity"], "dateredaction", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateredaction", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>

                                
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "photo", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actualite_show", array("idactualite" => $this->getAttribute($context["entity"], "idactualite", array()))), "html", null, true);
            echo "\" class=\"label label-success\" >Afficher</a>
                                    
                                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actualite_edit", array("idactualite" => $this->getAttribute($context["entity"], "idactualite", array()))), "html", null, true);
            echo "\" class=\"label label-warning\">Modifier</a>
                                    

                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </tbody>
                </table>
                
                        <a 
                           href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("actualite_new");
        echo "\" class=\"label label-primary\"> Rediger une nouvelle actualite 
                        <span class=\"glyphicon btn-glyphicon glyphicon-plus img-circle text-success\"></span>
                        </a>
          
            ";
    }

    // line 67
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 68
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 69
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 70
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 71
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 72
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 73
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 74
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 75
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 76
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Actualites:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 76,  222 => 75,  217 => 74,  212 => 73,  207 => 72,  202 => 71,  197 => 70,  192 => 69,  187 => 68,  182 => 67,  173 => 62,  167 => 58,  155 => 52,  150 => 50,  145 => 48,  137 => 45,  132 => 43,  128 => 41,  124 => 40,  102 => 20,  99 => 18,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}LISTE DES ACTUALITES {% endblock %}*/
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li class="active" ><a href="{{ path('actualite')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Actualites</a></li>    */
/*         <li><a href="{{ path('evenement')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*     </ul>  */
/* {% endblock %}    */
/* {% block first1 -%}*/
/* */
/*     <div class="col-lg-12">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-body">*/
/* */
/* */
/*                 <table class="table table-striped" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/* */
/*                     <thead>*/
/*                         <tr class="info">   */
/* */
/*                             <th>Titre</th>*/
/*                             */
/*                             <th>Date Redaction</th>*/
/*                            */
/*                             <th>Photo</th>*/
/* */
/*                             <th>Actions</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for entity in entities %}*/
/*                             <tr >*/
/* */
/*                                 <td>{{ entity.titre }}</td>*/
/*                                */
/*                                 <td>{% if entity.dateredaction %}{{ entity.dateredaction|date('Y-m-d') }}{% endif %}</td>*/
/* */
/*                                 */
/*                                 <td>{{ entity.photo }}</td>*/
/*                                 <td>*/
/*                                     <a href="{{ path('actualite_show', { 'idactualite': entity.idactualite }) }}" class="label label-success" >Afficher</a>*/
/*                                     */
/*                                     <a href="{{ path('actualite_edit', { 'idactualite': entity.idactualite }) }}" class="label label-warning">Modifier</a>*/
/*                                     */
/* */
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                 */
/*                         <a */
/*                            href="{{ path('actualite_new') }}" class="label label-primary"> Rediger une nouvelle actualite */
/*                         <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>*/
/*                         </a>*/
/*           */
/*             {% endblock %}*/
/*         {% block first2 %}{% endblock %}    */
/*     {% block first3 %}{% endblock %}    */
/* {% block first4 %}{% endblock %}    */
/* {% block second1 %}{% endblock %}    */
/* {% block third1 %}{% endblock %}    */
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
