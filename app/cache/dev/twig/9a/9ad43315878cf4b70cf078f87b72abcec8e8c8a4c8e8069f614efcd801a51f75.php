<?php

/* frontofficefrontBundle:Default:video3.html.twig */
class __TwigTemplate_4a86aadfa42f2f561721ea659962dba136ffba2f0954efdadd5e24430c16e162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Default:video3.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontofficefrontBundle::MainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <section id=\"video\" class=\"container secondary-page\">
        <div class=\"general general-results\" style=\"margin-bottom: 50px\">
            <div class=\"top-score-title col-md-9\">
                <h3>Novak Djokovic vs. Rafael Nadal</h3>
                <div class=\"col-md-12 news-video\">
                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/uWDZvOOaWIk\" frameborder=\"0\" allowfullscreen></iframe>
                  
                </div>
                <div class=\"video-desc\">
                    <h3 class=\"video-other-old\">Other <span>Videos</span><span class=\"point-little\">.</span></h3>
                    <div class=\"col-md-4 other-videotitle\">
                        <p class=\"othervideo-date\">Australian Open 2014</p>
                        <p>Best video ever</p>
                    </div>
                    <div class=\"col-md-4 other-videotitle\">
                        <p class=\"othervideo-date\">09.01.2016</p>
                        <p>Nadal VS Federer</p>
                    </div>
                    <div class=\"col-md-4 other-videotitle otv-last\">
                        <p class=\"othervideo-date\">2016-01-31</p>
                        <p>Novak Djokovic vs Andy Murray</p>
                    </div>
                    <div class=\"col-md-4 other-video\">
                       <iframe  width=\"280\" height=\"190\" src=\"https://www.youtube.com/embed/HF10CTQyyxs\" frameborder=\"0\" allowfullscreen></iframe>
                       <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("video1");
        echo "\"><i class=\"fa fa-video-camera\"></i></a>
                    </div>
                    <div class=\"col-md-4 other-video\">
                        <iframe  width=\"280\" height=\"190\" a href=\"video1.html.twig\" src=\"https://www.youtube.com/embed/q7AiwWwiF_k\" frameborder=\"0\" allowfullscreen></iframe>
                        <i class=\"fa fa-video-camera\"></i>
                    </div>
                    <div class=\"col-md-4 other-video otv-last\">
                        <iframe   width=\"280\" height=\"190\" src=\"https://www.youtube.com/embed/csxlEwvM44E\" frameborder=\"0\" allowfullscreen></iframe>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("video3");
        echo "\"><i class=\"fa fa-video-camera\"></i></a>
                        
                    </div>
                </div>
            </div>
        </div><div></div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Default:video3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 36,  57 => 28,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'frontofficefrontBundle::MainLayout.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <section id="video" class="container secondary-page">*/
/*         <div class="general general-results" style="margin-bottom: 50px">*/
/*             <div class="top-score-title col-md-9">*/
/*                 <h3>Novak Djokovic vs. Rafael Nadal</h3>*/
/*                 <div class="col-md-12 news-video">*/
/*                     <iframe width="560" height="315" src="https://www.youtube.com/embed/uWDZvOOaWIk" frameborder="0" allowfullscreen></iframe>*/
/*                   */
/*                 </div>*/
/*                 <div class="video-desc">*/
/*                     <h3 class="video-other-old">Other <span>Videos</span><span class="point-little">.</span></h3>*/
/*                     <div class="col-md-4 other-videotitle">*/
/*                         <p class="othervideo-date">Australian Open 2014</p>*/
/*                         <p>Best video ever</p>*/
/*                     </div>*/
/*                     <div class="col-md-4 other-videotitle">*/
/*                         <p class="othervideo-date">09.01.2016</p>*/
/*                         <p>Nadal VS Federer</p>*/
/*                     </div>*/
/*                     <div class="col-md-4 other-videotitle otv-last">*/
/*                         <p class="othervideo-date">2016-01-31</p>*/
/*                         <p>Novak Djokovic vs Andy Murray</p>*/
/*                     </div>*/
/*                     <div class="col-md-4 other-video">*/
/*                        <iframe  width="280" height="190" src="https://www.youtube.com/embed/HF10CTQyyxs" frameborder="0" allowfullscreen></iframe>*/
/*                        <a href="{{path('video1')}}"><i class="fa fa-video-camera"></i></a>*/
/*                     </div>*/
/*                     <div class="col-md-4 other-video">*/
/*                         <iframe  width="280" height="190" a href="video1.html.twig" src="https://www.youtube.com/embed/q7AiwWwiF_k" frameborder="0" allowfullscreen></iframe>*/
/*                         <i class="fa fa-video-camera"></i>*/
/*                     </div>*/
/*                     <div class="col-md-4 other-video otv-last">*/
/*                         <iframe   width="280" height="190" src="https://www.youtube.com/embed/csxlEwvM44E" frameborder="0" allowfullscreen></iframe>*/
/*                         <a href="{{path('video3')}}"><i class="fa fa-video-camera"></i></a>*/
/*                         */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div><div></div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
/* */
