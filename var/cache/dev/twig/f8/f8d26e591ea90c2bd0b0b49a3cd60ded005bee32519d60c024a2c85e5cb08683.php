<?php

/* DonationBundle:Default:index.html.twig */
class __TwigTemplate_787e33ddd6d49f56a5efd4214e2b5835ba61a418ae7837b7e115766246c35ba3 extends Twig_Template
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
        $__internal_e37b3f986b0d1126695d5a9f7dc145110efe8a9bf5704355e38d35e959ca4539 = $this->env->getExtension("native_profiler");
        $__internal_e37b3f986b0d1126695d5a9f7dc145110efe8a9bf5704355e38d35e959ca4539->enter($__internal_e37b3f986b0d1126695d5a9f7dc145110efe8a9bf5704355e38d35e959ca4539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DonationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37b3f986b0d1126695d5a9f7dc145110efe8a9bf5704355e38d35e959ca4539->leave($__internal_e37b3f986b0d1126695d5a9f7dc145110efe8a9bf5704355e38d35e959ca4539_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b893f73d1b01c3d65dda8621dedb19b2ffbb9216a390cbb40b171072633edd3c = $this->env->getExtension("native_profiler");
        $__internal_b893f73d1b01c3d65dda8621dedb19b2ffbb9216a390cbb40b171072633edd3c->enter($__internal_b893f73d1b01c3d65dda8621dedb19b2ffbb9216a390cbb40b171072633edd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b893f73d1b01c3d65dda8621dedb19b2ffbb9216a390cbb40b171072633edd3c->leave($__internal_b893f73d1b01c3d65dda8621dedb19b2ffbb9216a390cbb40b171072633edd3c_prof);

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
