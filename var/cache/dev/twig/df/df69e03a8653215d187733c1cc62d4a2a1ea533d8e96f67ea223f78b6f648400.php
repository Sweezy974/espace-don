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
        $__internal_1fb95781ed6e73fc53a2ed64f8e1cb572235fc09ffee6881fe85da8e1e6368c3 = $this->env->getExtension("native_profiler");
        $__internal_1fb95781ed6e73fc53a2ed64f8e1cb572235fc09ffee6881fe85da8e1e6368c3->enter($__internal_1fb95781ed6e73fc53a2ed64f8e1cb572235fc09ffee6881fe85da8e1e6368c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb95781ed6e73fc53a2ed64f8e1cb572235fc09ffee6881fe85da8e1e6368c3->leave($__internal_1fb95781ed6e73fc53a2ed64f8e1cb572235fc09ffee6881fe85da8e1e6368c3_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e7baea0d90fc4e93e3e8a63eacab50cc96250f089909f93cc85589b23befdaa = $this->env->getExtension("native_profiler");
        $__internal_1e7baea0d90fc4e93e3e8a63eacab50cc96250f089909f93cc85589b23befdaa->enter($__internal_1e7baea0d90fc4e93e3e8a63eacab50cc96250f089909f93cc85589b23befdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
    font-family: \"arial black\",;
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
        // line 67
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
</div>
</div>
</div>



";
        
        $__internal_1e7baea0d90fc4e93e3e8a63eacab50cc96250f089909f93cc85589b23befdaa->leave($__internal_1e7baea0d90fc4e93e3e8a63eacab50cc96250f089909f93cc85589b23befdaa_prof);

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
        return array (  139 => 79,  134 => 77,  127 => 73,  122 => 71,  118 => 70,  113 => 68,  109 => 67,  48 => 8,  42 => 6,  40 => 5,  34 => 4,  11 => 1,);
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
/*     font-family: "arial black",;*/
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
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
