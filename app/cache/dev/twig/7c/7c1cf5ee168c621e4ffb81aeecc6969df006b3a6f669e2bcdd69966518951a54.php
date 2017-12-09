<?php

/* frontofficefrontBundle:Security:login.html.twig */
class __TwigTemplate_dcc97d6afa4a097f30a6213c3624c648554ccd44aeb7f9ef9c88e9bcfbf70d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Security:login.html.twig", 1);
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

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "

</section>
<section class=\"drawer\">
    <div class=\"col-md-12 size-img back-img\">
        <div class=\"effect-cover\">
            <h3 class=\"txt-advert animated\">ATP World Tour Fan Credential</h3>
            <p class=\"txt-advert-sub animated\">Your all-access pass to experience the action on tour</p>
        </div>
    </div>

    <section id=\"login\" class=\"container secondary-page\">  
";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 18
        echo "
        <div class=\"general general-results players\">
            <div class=\"top-score-title right-score col-md-6\">
                <h3>Welcome<span class=\"point-int\"> !</span></h3>
                <div class=\"col-md-12 login-page login-w-page\">
                    <p class=\"logiin-w-title\">The Tennis Club Tour is proud to present the Fan Credential, FTTs free membership program for fans of Men s Professional Tennis.</p>
                    <p>With 61 exciting venues in 30 countries, we understand how busy life can get, so tell us your preferences and we ll create an 
                        experience specifically designed for you. 
                    </p>
                    <h3><img class=\"ball-tennis\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/ball.png"), "html", null, true);
        echo "\" alt=\"\"/>FTT World Tour Insider</h3>
                    <p>Get off-court and go behind the scenes of the tour each week.</p>
                    <h3><img class=\"ball-tennis\" src=\" ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/ball.png"), "html", null, true);
        echo " \" alt=\"\"/>FTT World Tour Weekly</h3>
                    <p>Official report and schedule including results</p>
                </div>
            </div><!--Close welcome-->
            <!-- LOGIN BOX -->
            
            <div class=\"top-score-title right-score col-md-6\">
                <h3>Login<span> Now</span><span class=\"point-int\"> !</span></h3>
                
                <div class=\"col-md-12 login-page\">
                    <form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"login-form\" >            
                        <div class=\"name\">
                            <label for=\"name_login\">Email:</label><div class=\"clear\"></div>
                            <input id=\"name_login\" id=\"username\" name=\"_username\" type=\"text\" placeholder=\"example@domain.com ou nomUtilisateur \" required=\"\"/>
                        </div>
                        <div class=\"pwd\">
                            <label for=\"password_login\">Password:</label><div class=\"clear\"></div>
                            <input id=\"password_login\" id=\"password\" name=\"_password\" type=\"password\" placeholder=\"********\" required=\"\"/>
                        </div>
                        <div id=\"login-submit\">
                            <input type=\"submit\" value=\"Submit\" value=\"Login\" />
                        </div>
                    </form>
                </div>

            </div><!--Close Login-->
           
    </section>
    <section id=\"sponsor\" class=\"container\">
        <!--SECTION SPONSOR-->
        <div class=\"client-sport client-sport-nomargin\">
            <div class=\"content-banner\">
                <ul class=\"sponsor second\">
                    <li><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/3.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/5.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/6.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                </ul>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 67,  124 => 66,  120 => 65,  116 => 64,  112 => 63,  108 => 62,  82 => 39,  69 => 29,  64 => 27,  53 => 18,  47 => 16,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "frontofficefrontBundle::MainLayout.html.twig" %}*/
/* {% block main %}*/
/* */
/* */
/* </section>*/
/* <section class="drawer">*/
/*     <div class="col-md-12 size-img back-img">*/
/*         <div class="effect-cover">*/
/*             <h3 class="txt-advert animated">ATP World Tour Fan Credential</h3>*/
/*             <p class="txt-advert-sub animated">Your all-access pass to experience the action on tour</p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <section id="login" class="container secondary-page">  */
/* {% if error %}*/
/*         <div class="alert alert-danger">{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*         <div class="general general-results players">*/
/*             <div class="top-score-title right-score col-md-6">*/
/*                 <h3>Welcome<span class="point-int"> !</span></h3>*/
/*                 <div class="col-md-12 login-page login-w-page">*/
/*                     <p class="logiin-w-title">The Tennis Club Tour is proud to present the Fan Credential, FTTs free membership program for fans of Men s Professional Tennis.</p>*/
/*                     <p>With 61 exciting venues in 30 countries, we understand how busy life can get, so tell us your preferences and we ll create an */
/*                         experience specifically designed for you. */
/*                     </p>*/
/*                     <h3><img class="ball-tennis" src="{{ asset('frontoffice/images/ball.png') }}" alt=""/>FTT World Tour Insider</h3>*/
/*                     <p>Get off-court and go behind the scenes of the tour each week.</p>*/
/*                     <h3><img class="ball-tennis" src=" {{ asset('frontoffice/images/ball.png') }} " alt=""/>FTT World Tour Weekly</h3>*/
/*                     <p>Official report and schedule including results</p>*/
/*                 </div>*/
/*             </div><!--Close welcome-->*/
/*             <!-- LOGIN BOX -->*/
/*             */
/*             <div class="top-score-title right-score col-md-6">*/
/*                 <h3>Login<span> Now</span><span class="point-int"> !</span></h3>*/
/*                 */
/*                 <div class="col-md-12 login-page">*/
/*                     <form action="{{ path('login_check') }}" method="post" class="login-form" >            */
/*                         <div class="name">*/
/*                             <label for="name_login">Email:</label><div class="clear"></div>*/
/*                             <input id="name_login" id="username" name="_username" type="text" placeholder="example@domain.com ou nomUtilisateur " required=""/>*/
/*                         </div>*/
/*                         <div class="pwd">*/
/*                             <label for="password_login">Password:</label><div class="clear"></div>*/
/*                             <input id="password_login" id="password" name="_password" type="password" placeholder="********" required=""/>*/
/*                         </div>*/
/*                         <div id="login-submit">*/
/*                             <input type="submit" value="Submit" value="Login" />*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/* */
/*             </div><!--Close Login-->*/
/*            */
/*     </section>*/
/*     <section id="sponsor" class="container">*/
/*         <!--SECTION SPONSOR-->*/
/*         <div class="client-sport client-sport-nomargin">*/
/*             <div class="content-banner">*/
/*                 <ul class="sponsor second">*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/1.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/2.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/3.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/4.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/5.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/6.jpg') }}" alt="" /></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
