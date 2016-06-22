<?php

/* DonationBundle:Default:index.html.twig */
class __TwigTemplate_bf5ae15d3ce1567c316aeb282aa851a36c72127e7a6465c7d40374240a456538 extends Twig_Template
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
        $__internal_8edd0df732664bcbdd80d252d2ff68afa91424cb1cea940fd62d7263d30aea0e = $this->env->getExtension("native_profiler");
        $__internal_8edd0df732664bcbdd80d252d2ff68afa91424cb1cea940fd62d7263d30aea0e->enter($__internal_8edd0df732664bcbdd80d252d2ff68afa91424cb1cea940fd62d7263d30aea0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DonationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8edd0df732664bcbdd80d252d2ff68afa91424cb1cea940fd62d7263d30aea0e->leave($__internal_8edd0df732664bcbdd80d252d2ff68afa91424cb1cea940fd62d7263d30aea0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3af2a780032b9324232de5e4956a5d3163ff0156e3e7ac4228dda0f5ba236b63 = $this->env->getExtension("native_profiler");
        $__internal_3af2a780032b9324232de5e4956a5d3163ff0156e3e7ac4228dda0f5ba236b63->enter($__internal_3af2a780032b9324232de5e4956a5d3163ff0156e3e7ac4228dda0f5ba236b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3af2a780032b9324232de5e4956a5d3163ff0156e3e7ac4228dda0f5ba236b63->leave($__internal_3af2a780032b9324232de5e4956a5d3163ff0156e3e7ac4228dda0f5ba236b63_prof);

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
