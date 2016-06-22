<?php

/* ::base.html.twig */
class __TwigTemplate_66be35e583a10a9fb12ea59be52758f39b7c51d891a62a3bccf455acfadbe6a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29cb820f1638fd7d1a9115ba9c0b0ba0ba0dec534282dc121ccb0aa4e056d5ba = $this->env->getExtension("native_profiler");
        $__internal_29cb820f1638fd7d1a9115ba9c0b0ba0ba0dec534282dc121ccb0aa4e056d5ba->enter($__internal_29cb820f1638fd7d1a9115ba9c0b0ba0ba0dec534282dc121ccb0aa4e056d5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <style>

    .navbar{background-color: black;}
    .navbar-default{border-radius: 0px; border-color: transparent;}
    .navbar-default .navbar-nav>li>a:hover {color: white;background-color: #337ab7;}
    .navbar-default .navbar-nav>li>a {
    color: #fff;
}
    body{background-color: blue;}

    </style>
    <body>
      <nav class=\"navbar navbar-default\">
<div class=\"container-fluid\">
  <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>

      <a class=\"navbar-brand \" href=\"#\" style=\"background-color:#337ab7;color:white;\"><i class=\"fa fa-hand-spock-o\"></i>ESPAce-DONS</a>
    </div>
<!-- Brand and toggle get grouped for better mobile display -->



<!-- Collect the nav links, forms, and other content for toggling -->
<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">


<ul class=\"nav navbar-nav navbar-right\" >
  <li class=\"nav-item\">
           ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 48
            echo "               <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">
                   Connecté en tant que: ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>

           ";
        } else {
            // line 52
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
           ";
        }
        // line 55
        echo "       </li>
       <li class=\"nav-item\">
           ";
        // line 57
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 58
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                   ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se deconnecter", array(), "FOSUserBundle"), "html", null, true);
            echo "
               </a>
           ";
        } else {
            // line 63
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
           ";
        }
        // line 66
        echo "       </li>

</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

        ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 76
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "    </body>
</html>
";
        
        $__internal_29cb820f1638fd7d1a9115ba9c0b0ba0ba0dec534282dc121ccb0aa4e056d5ba->leave($__internal_29cb820f1638fd7d1a9115ba9c0b0ba0ba0dec534282dc121ccb0aa4e056d5ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_adb95e85bd6259f54b80336baa5eb9f43429b8b820d2b47457a057b607478cce = $this->env->getExtension("native_profiler");
        $__internal_adb95e85bd6259f54b80336baa5eb9f43429b8b820d2b47457a057b607478cce->enter($__internal_adb95e85bd6259f54b80336baa5eb9f43429b8b820d2b47457a057b607478cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_adb95e85bd6259f54b80336baa5eb9f43429b8b820d2b47457a057b607478cce->leave($__internal_adb95e85bd6259f54b80336baa5eb9f43429b8b820d2b47457a057b607478cce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_693bf8a26b63a88397ac4303a498a8ec5469b3c542a1217588e8bcc121224578 = $this->env->getExtension("native_profiler");
        $__internal_693bf8a26b63a88397ac4303a498a8ec5469b3c542a1217588e8bcc121224578->enter($__internal_693bf8a26b63a88397ac4303a498a8ec5469b3c542a1217588e8bcc121224578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_693bf8a26b63a88397ac4303a498a8ec5469b3c542a1217588e8bcc121224578->leave($__internal_693bf8a26b63a88397ac4303a498a8ec5469b3c542a1217588e8bcc121224578_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5aac8127532da70a371e8c59f3c66dec73622ae13439ec484832539947d21a = $this->env->getExtension("native_profiler");
        $__internal_3d5aac8127532da70a371e8c59f3c66dec73622ae13439ec484832539947d21a->enter($__internal_3d5aac8127532da70a371e8c59f3c66dec73622ae13439ec484832539947d21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d5aac8127532da70a371e8c59f3c66dec73622ae13439ec484832539947d21a->leave($__internal_3d5aac8127532da70a371e8c59f3c66dec73622ae13439ec484832539947d21a_prof);

    }

    // line 74
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a09f20b7c411c5f679b6bd58b73945d6a7a6d7a18d7eced809c5ffc549e49ad7 = $this->env->getExtension("native_profiler");
        $__internal_a09f20b7c411c5f679b6bd58b73945d6a7a6d7a18d7eced809c5ffc549e49ad7->enter($__internal_a09f20b7c411c5f679b6bd58b73945d6a7a6d7a18d7eced809c5ffc549e49ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 75
        echo "        ";
        
        $__internal_a09f20b7c411c5f679b6bd58b73945d6a7a6d7a18d7eced809c5ffc549e49ad7->leave($__internal_a09f20b7c411c5f679b6bd58b73945d6a7a6d7a18d7eced809c5ffc549e49ad7_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_577e35656245bca8814d99cecf5424abc5de1a8b6a9bace51fd5062083995123 = $this->env->getExtension("native_profiler");
        $__internal_577e35656245bca8814d99cecf5424abc5de1a8b6a9bace51fd5062083995123->enter($__internal_577e35656245bca8814d99cecf5424abc5de1a8b6a9bace51fd5062083995123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_577e35656245bca8814d99cecf5424abc5de1a8b6a9bace51fd5062083995123->leave($__internal_577e35656245bca8814d99cecf5424abc5de1a8b6a9bace51fd5062083995123_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 78,  221 => 77,  215 => 76,  208 => 75,  202 => 74,  191 => 73,  182 => 8,  177 => 7,  171 => 6,  159 => 5,  150 => 80,  147 => 76,  144 => 74,  142 => 73,  133 => 66,  126 => 64,  123 => 63,  117 => 60,  113 => 59,  110 => 58,  108 => 57,  104 => 55,  97 => 53,  94 => 52,  88 => 49,  83 => 48,  81 => 47,  42 => 11,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{asset('css/styles.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <style>*/
/* */
/*     .navbar{background-color: black;}*/
/*     .navbar-default{border-radius: 0px; border-color: transparent;}*/
/*     .navbar-default .navbar-nav>li>a:hover {color: white;background-color: #337ab7;}*/
/*     .navbar-default .navbar-nav>li>a {*/
/*     color: #fff;*/
/* }*/
/*     body{background-color: blue;}*/
/* */
/*     </style>*/
/*     <body>*/
/*       <nav class="navbar navbar-default">*/
/* <div class="container-fluid">*/
/*   <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/* */
/*       <a class="navbar-brand " href="#" style="background-color:#337ab7;color:white;"><i class="fa fa-hand-spock-o"></i>ESPAce-DONS</a>*/
/*     </div>*/
/* <!-- Brand and toggle get grouped for better mobile display -->*/
/* */
/* */
/* */
/* <!-- Collect the nav links, forms, and other content for toggling -->*/
/* <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* */
/* */
/* <ul class="nav navbar-nav navbar-right" >*/
/*   <li class="nav-item">*/
/*            {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                <a class="nav-link" href="{{ path('fos_user_profile_edit') }}">*/
/*                    Connecté en tant que: {{ app.user.username }}</a>*/
/* */
/*            {% else %}*/
/*                <a class="nav-link"*/
/*                   href="{{ path('fos_user_security_login') }}">{{ 'Connexion'|trans({}, 'FOSUserBundle') }}</a>*/
/*            {% endif %}*/
/*        </li>*/
/*        <li class="nav-item">*/
/*            {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                <a class="nav-link"*/
/*                   href="{{ path('fos_user_security_logout') }}">*/
/*                    {{ 'Se deconnecter'|trans({}, 'FOSUserBundle') }}*/
/*                </a>*/
/*            {% else %}*/
/*                <a class="nav-link"*/
/*                   href="{{ path('fos_user_registration_register') }}">{{ 'Inscription'|trans({}, 'FOSUserBundle') }}</a>*/
/*            {% endif %}*/
/*        </li>*/
/* */
/* </ul>*/
/* </div><!-- /.navbar-collapse -->*/
/* </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block fos_user_content %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*         <script src="{{asset('js/script.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
