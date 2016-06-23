<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f3540355939d904387ad47dbeccb03cce35c287763d075d4f3a282062543aeca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b6dfb1ee606f2250dd070637404bd96fcc53c95352a5fb253ac95cf963ca5f1 = $this->env->getExtension("native_profiler");
        $__internal_3b6dfb1ee606f2250dd070637404bd96fcc53c95352a5fb253ac95cf963ca5f1->enter($__internal_3b6dfb1ee606f2250dd070637404bd96fcc53c95352a5fb253ac95cf963ca5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b6dfb1ee606f2250dd070637404bd96fcc53c95352a5fb253ac95cf963ca5f1->leave($__internal_3b6dfb1ee606f2250dd070637404bd96fcc53c95352a5fb253ac95cf963ca5f1_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a42ab703b2dff6ee36ea05aa62e6ad26da921fd60825ca5252474394572dd86 = $this->env->getExtension("native_profiler");
        $__internal_8a42ab703b2dff6ee36ea05aa62e6ad26da921fd60825ca5252474394572dd86->enter($__internal_8a42ab703b2dff6ee36ea05aa62e6ad26da921fd60825ca5252474394572dd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "

<style>html body{

}
/*BARRE DE NAVIGATION*/
body .navbar-default{
    background-color:darkcyan;
    border-color: darkslategrey;
    border-radius: 0;
}
body .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{
    margin: 0;
}
body .navbar-default .navbar-brand{
    color: white;
}
body .navbar-default .navbar-nav>li>a{
    color: white;
}
body .navbar-default .navbar-nav>li>a:hover{
    background-color:crimson;
    color: white;
}
body .navbar-default a.navbar-brand:hover{
    color: white;
    background-color: crimson;
}
/* FIN BARRE DE NAVIGATION*/
/*CADRE WRAPPER*/
.wrapper{
    margin-top: 180px;
    height: 350px;
    border-radius: 5px;
    background-color:darkcyan;
    padding: 15px 50px 25px;
    color: white;
    border-top: 6px solid darkcyan;
    /*animation fenetre*/
    transition: all .3s ease-in;
}
.wrapper:hover{
    border-top: 6px solid CRIMSON;
    /*Animation formulaire*/
    transition: all .9s ease-in-out;
}
.wrapper h3{
    font-weight: bold;
    font-family: \"arial black\",;
}
html body form .btn-primary{
    background-color: crimson;
    border-color: white;
    margin-top: 20px;
}
body form label{
    margin-bottom: 10px;
}

.no-compte{
    color: white;
    text-decoration: none;
    padding-top: 15px;
}
.no-compte>a{
    text-decoration: none;
    color: white;
}
.no-compte a:hover{
    text-decoration:underline;
    color: crimson;
    border-bottom: 1px solid white;
}
.btn-primary{
    margin-top: 20px;
}
html body form .btn-primary:hover{
    border-color: white;
    background-color: darkcyan;
}
.form-control{
    border:2px solid white;
}
.form-control:hover{
    border:1px solid red;
}
/*FIN CADRE WRAPPER */</style>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"wrapper\">
                <h3 class=\"text-center\">Connexion</h3>
                <form action=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <div class=\"form-group\">
                    <label for=\"username\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                    <div class=\"form-group\">
                    <label for=\"password\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                    <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-group\">
                    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <p class=\"no-compte text-center\"><em>Vous n'avez pas de compte ? </em><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><em>Créer un compte</em></a> • <a href=\"\"><em>Mot de passe oublié ?.</em></a></p>
        </div>
    </div>
</div>



";
        
        $__internal_8a42ab703b2dff6ee36ea05aa62e6ad26da921fd60825ca5252474394572dd86->leave($__internal_8a42ab703b2dff6ee36ea05aa62e6ad26da921fd60825ca5252474394572dd86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 125,  176 => 116,  170 => 113,  162 => 108,  156 => 105,  152 => 104,  147 => 102,  142 => 100,  48 => 8,  42 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* <style>html body{*/
/* */
/* }*/
/* /*BARRE DE NAVIGATION*//* */
/* body .navbar-default{*/
/*     background-color:darkcyan;*/
/*     border-color: darkslategrey;*/
/*     border-radius: 0;*/
/* }*/
/* body .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{*/
/*     margin: 0;*/
/* }*/
/* body .navbar-default .navbar-brand{*/
/*     color: white;*/
/* }*/
/* body .navbar-default .navbar-nav>li>a{*/
/*     color: white;*/
/* }*/
/* body .navbar-default .navbar-nav>li>a:hover{*/
/*     background-color:crimson;*/
/*     color: white;*/
/* }*/
/* body .navbar-default a.navbar-brand:hover{*/
/*     color: white;*/
/*     background-color: crimson;*/
/* }*/
/* /* FIN BARRE DE NAVIGATION*//* */
/* /*CADRE WRAPPER*//* */
/* .wrapper{*/
/*     margin-top: 180px;*/
/*     height: 350px;*/
/*     border-radius: 5px;*/
/*     background-color:darkcyan;*/
/*     padding: 15px 50px 25px;*/
/*     color: white;*/
/*     border-top: 6px solid darkcyan;*/
/*     /*animation fenetre*//* */
/*     transition: all .3s ease-in;*/
/* }*/
/* .wrapper:hover{*/
/*     border-top: 6px solid CRIMSON;*/
/*     /*Animation formulaire*//* */
/*     transition: all .9s ease-in-out;*/
/* }*/
/* .wrapper h3{*/
/*     font-weight: bold;*/
/*     font-family: "arial black",;*/
/* }*/
/* html body form .btn-primary{*/
/*     background-color: crimson;*/
/*     border-color: white;*/
/*     margin-top: 20px;*/
/* }*/
/* body form label{*/
/*     margin-bottom: 10px;*/
/* }*/
/* */
/* .no-compte{*/
/*     color: white;*/
/*     text-decoration: none;*/
/*     padding-top: 15px;*/
/* }*/
/* .no-compte>a{*/
/*     text-decoration: none;*/
/*     color: white;*/
/* }*/
/* .no-compte a:hover{*/
/*     text-decoration:underline;*/
/*     color: crimson;*/
/*     border-bottom: 1px solid white;*/
/* }*/
/* .btn-primary{*/
/*     margin-top: 20px;*/
/* }*/
/* html body form .btn-primary:hover{*/
/*     border-color: white;*/
/*     background-color: darkcyan;*/
/* }*/
/* .form-control{*/
/*     border:2px solid white;*/
/* }*/
/* .form-control:hover{*/
/*     border:1px solid red;*/
/* }*/
/* /*FIN CADRE WRAPPER *//* </style>*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-6 col-md-offset-3">*/
/*             <div class="wrapper">*/
/*                 <h3 class="text-center">Connexion</h3>*/
/*                 <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <div class="form-group">*/
/*                     <input class="form-control" type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                     <div class="form-group">*/
/*                     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                     <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                     <input class="form-control" type="password" id="password" name="_password" required="required" />*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <input class="btn btn-primary" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*                     </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-6 col-md-offset-3">*/
/*             <p class="no-compte text-center"><em>Vous n'avez pas de compte ? </em><a href="{{ path('fos_user_registration_register') }}"><em>Créer un compte</em></a> • <a href=""><em>Mot de passe oublié ?.</em></a></p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
