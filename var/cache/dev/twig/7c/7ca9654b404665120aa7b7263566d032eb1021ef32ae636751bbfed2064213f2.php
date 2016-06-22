<?php

/* DonationBundle:Default:index.html.twig */
class __TwigTemplate_87b77e3a6b1a24178b0365ca366d79d74c0532689dd1fc080299c4075934fe43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DonationBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a37524dd4075134bd04e60f112b00429d65b65401cb9d30538a69a964ae799a9 = $this->env->getExtension("native_profiler");
        $__internal_a37524dd4075134bd04e60f112b00429d65b65401cb9d30538a69a964ae799a9->enter($__internal_a37524dd4075134bd04e60f112b00429d65b65401cb9d30538a69a964ae799a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DonationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a37524dd4075134bd04e60f112b00429d65b65401cb9d30538a69a964ae799a9->leave($__internal_a37524dd4075134bd04e60f112b00429d65b65401cb9d30538a69a964ae799a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9add5a2bb7c3433a43511acf748fa56903a58794375d631a2e39eec35449879c = $this->env->getExtension("native_profiler");
        $__internal_9add5a2bb7c3433a43511acf748fa56903a58794375d631a2e39eec35449879c->enter($__internal_9add5a2bb7c3433a43511acf748fa56903a58794375d631a2e39eec35449879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-3\">

                    <div class=\"wrapper\">
                        <h3 class=\"text-center\">Inscription</h3>
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><button type=\"submit\" class=\"btn btn-primary btn1\">Vous etes un particulier ?</button></a>
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><button type=\"submit\" class=\"btn btn-primary btn2\">Ou une association ? </button></a>
                    </div>

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p class=\"no-compte text-center\"><em>Vous possedez deja un compte ? </em><a href=\"../form.html\"><em>Connectez-vous</em></a></p>
                </div>
            </div>
        </div>

";
        
        $__internal_9add5a2bb7c3433a43511acf748fa56903a58794375d631a2e39eec35449879c->leave($__internal_9add5a2bb7c3433a43511acf748fa56903a58794375d631a2e39eec35449879c_prof);

    }

    public function getTemplateName()
    {
        return "DonationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-10 col-md-offset-3">*/
/* */
/*                     <div class="wrapper">*/
/*                         <h3 class="text-center">Inscription</h3>*/
/*                         <a href="{{ path('fos_user_registration_register')}}"><button type="submit" class="btn btn-primary btn1">Vous etes un particulier ?</button></a>*/
/*                         <a href="{{ path('fos_user_registration_register')}}"><button type="submit" class="btn btn-primary btn2">Ou une association ? </button></a>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <p class="no-compte text-center"><em>Vous possedez deja un compte ? </em><a href="../form.html"><em>Connectez-vous</em></a></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
/* */
