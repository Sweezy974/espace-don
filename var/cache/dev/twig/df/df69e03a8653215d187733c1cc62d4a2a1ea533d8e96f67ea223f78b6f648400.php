<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_543a6331adece837b3d1159c30c8c41a512e1d05ad3129308c6dd63bd97fa96f extends Twig_Template
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
        $__internal_d515c32757e364f0dfe17570535b6888b831f9bb8c606b692359e791487282b3 = $this->env->getExtension("native_profiler");
        $__internal_d515c32757e364f0dfe17570535b6888b831f9bb8c606b692359e791487282b3->enter($__internal_d515c32757e364f0dfe17570535b6888b831f9bb8c606b692359e791487282b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d515c32757e364f0dfe17570535b6888b831f9bb8c606b692359e791487282b3->leave($__internal_d515c32757e364f0dfe17570535b6888b831f9bb8c606b692359e791487282b3_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea8e0de5191b2baada84ec4a2acabe3b03b7a7b6121aad6183f593b02fe2a703 = $this->env->getExtension("native_profiler");
        $__internal_ea8e0de5191b2baada84ec4a2acabe3b03b7a7b6121aad6183f593b02fe2a703->enter($__internal_ea8e0de5191b2baada84ec4a2acabe3b03b7a7b6121aad6183f593b02fe2a703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "<style>html body{
    background-color: #333;

}
.wrapper{
    margin-top: 170px;

    background-color: #fff;
    padding: 15px 50px 25px;
    width: 60%;
    height: 300px;
    border-radius: 5px;
    border-top: 6px solid #CE2347;

    font-weight: bold;
    font-family: \"arial black\",;
    /*Animation fenetre*/
    transition: all .3s ease-in;
}
.wrapper:hover{
    /*Animation formulaire*/
    transition: all .9s ease-in-out;
    border: 2px solid dodgerblue;
    border-top: 6px solid dodgerblue;
}
.wrapper h3{
    font-weight: bold;
    font-family: \"arial black\";
    color:#337ab7;
}
html body form .btn-primary{
    background-color: red;
    border-color: red;
}
body form label{
    margin-bottom: 10px;
}
html body form .btn-primary:hover{
    /*background-color:darkslategray;*/
    background-color:dodgerblue;
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
    color: white;
    border-bottom: 1px solid #FF0000;
}</style>
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-10 col-md-offset-3\">
<div class=\"wrapper\">
<h3 class=\"text-center\">Connexion</h3>
<form action=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
<div class=\"form-group\">
    <input class=\"form-control\" type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"form-group\">
    <label for=\"username\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <div class=\"form-group\">
    <label for=\"password\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <div class=\"form-group\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"form-group\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    </div>
</form>
</div>
</div>
</div>



";
        
        $__internal_ea8e0de5191b2baada84ec4a2acabe3b03b7a7b6121aad6183f593b02fe2a703->leave($__internal_ea8e0de5191b2baada84ec4a2acabe3b03b7a7b6121aad6183f593b02fe2a703_prof);

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
        return array (  144 => 84,  138 => 81,  130 => 76,  124 => 73,  120 => 72,  115 => 70,  110 => 68,  48 => 8,  42 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <style>html body{*/
/*     background-color: #333;*/
/* */
/* }*/
/* .wrapper{*/
/*     margin-top: 170px;*/
/* */
/*     background-color: #fff;*/
/*     padding: 15px 50px 25px;*/
/*     width: 60%;*/
/*     height: 300px;*/
/*     border-radius: 5px;*/
/*     border-top: 6px solid #CE2347;*/
/* */
/*     font-weight: bold;*/
/*     font-family: "arial black",;*/
/*     /*Animation fenetre*//* */
/*     transition: all .3s ease-in;*/
/* }*/
/* .wrapper:hover{*/
/*     /*Animation formulaire*//* */
/*     transition: all .9s ease-in-out;*/
/*     border: 2px solid dodgerblue;*/
/*     border-top: 6px solid dodgerblue;*/
/* }*/
/* .wrapper h3{*/
/*     font-weight: bold;*/
/*     font-family: "arial black";*/
/*     color:#337ab7;*/
/* }*/
/* html body form .btn-primary{*/
/*     background-color: red;*/
/*     border-color: red;*/
/* }*/
/* body form label{*/
/*     margin-bottom: 10px;*/
/* }*/
/* html body form .btn-primary:hover{*/
/*     /*background-color:darkslategray;*//* */
/*     background-color:dodgerblue;*/
/* }*/
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
/*     color: white;*/
/*     border-bottom: 1px solid #FF0000;*/
/* }</style>*/
/* <div class="container">*/
/* <div class="row">*/
/* <div class="col-md-10 col-md-offset-3">*/
/* <div class="wrapper">*/
/* <h3 class="text-center">Connexion</h3>*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/* <div class="form-group">*/
/*     <input class="form-control" type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     <div class="form-group">*/
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input class="form-control" type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*     </div>*/
/*     <div class="form-group">*/
/*     <input class="btn btn-primary" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*     </div>*/
/*     </div>*/
/* </form>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
