<?php

/* ::base.html.twig */
class __TwigTemplate_4de893eb816c5fa115f5c9bdc08eea2bdf45806038bf59194f5cc42c651a5830 extends Twig_Template
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
        $__internal_477e9deca7e1cbe61077df0bb19140ff021e766fdced8c278b1ce5a6029cee62 = $this->env->getExtension("native_profiler");
        $__internal_477e9deca7e1cbe61077df0bb19140ff021e766fdced8c278b1ce5a6029cee62->enter($__internal_477e9deca7e1cbe61077df0bb19140ff021e766fdced8c278b1ce5a6029cee62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

    body{background: url(http://www.magic4walls.com/wp-content/uploads/2013/11/Love-Tree.jpg);background-repeat: no-repeat;background-size: cover;}

    .navbar{background-color: black;}
    .navbar-default{border-radius: 0px; border-color: transparent;}
    .navbar-default .navbar-nav>li>a:hover {color: white;background-color: #337ab7;}
    .navbar-default .navbar-nav>li>a {
    color: #fff;
}
    body{background-color: blue;}
    img{width : 50px ; height : auto;}

    .navbar-brand {
    float: left;
    height: 50px;
    padding: 0px 0px;
    font-size: 18px;
    line-height: 20px;
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #337ab7;
}

body .btn-primary, btn1 {
    padding-bottom: 0px;
    margin-left: 0px; */
    margin-top: 0vh; */
    background-color: red;
    border-color: red;
}

.wrapper{background-color: #5791c1;}
.wrapper h3 {
    font-weight: bold;
    font-family: \"arial black\",;
    color: white;
   padding-top: 0px; 
}
    </style>
    <body>
      <nav class=\"navbar navbar-default col-md-12\">
<div class=\"container-fluid\">
  <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>

    <div class=\"row\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\">
        <img class=\"img-responsive\" alt=\"Brand\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("espace-don.png"), "html", null, true);
        echo "\">
      </a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li class=\"active\"><a href=\"#\">ESPAce DON <3 <span class=\"sr-only\">(current)</span></a></li>
    </ul>
    </div>
  </div>
<!-- Brand and toggle get grouped for better mobile display -->



<!-- Collect the nav links, forms, and other content for toggling -->
<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">


<ul class=\"nav navbar-nav navbar-right\" >
  <li class=\"nav-item\">
           ";
        // line 87
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 88
            echo "               <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">
                   Connecté en tant que: ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>

           ";
        } else {
            // line 92
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
           ";
        }
        // line 95
        echo "       </li>
       <li class=\"nav-item\">
           ";
        // line 97
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 98
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                   ";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se deconnecter", array(), "FOSUserBundle"), "html", null, true);
            echo "
               </a>
           ";
        } else {
            // line 103
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
           ";
        }
        // line 106
        echo "       </li>

</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

        ";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 116
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "    </body>
</html>
";
        
        $__internal_477e9deca7e1cbe61077df0bb19140ff021e766fdced8c278b1ce5a6029cee62->leave($__internal_477e9deca7e1cbe61077df0bb19140ff021e766fdced8c278b1ce5a6029cee62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_05b3caf27804fe1267479d2062e12e2f1d77e9241b32b70aa6d49d0057923131 = $this->env->getExtension("native_profiler");
        $__internal_05b3caf27804fe1267479d2062e12e2f1d77e9241b32b70aa6d49d0057923131->enter($__internal_05b3caf27804fe1267479d2062e12e2f1d77e9241b32b70aa6d49d0057923131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_05b3caf27804fe1267479d2062e12e2f1d77e9241b32b70aa6d49d0057923131->leave($__internal_05b3caf27804fe1267479d2062e12e2f1d77e9241b32b70aa6d49d0057923131_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_120667b6aa16e6d38e213874eb6aac5fd50f981f4b385262007c6f39c31b9bf6 = $this->env->getExtension("native_profiler");
        $__internal_120667b6aa16e6d38e213874eb6aac5fd50f981f4b385262007c6f39c31b9bf6->enter($__internal_120667b6aa16e6d38e213874eb6aac5fd50f981f4b385262007c6f39c31b9bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_120667b6aa16e6d38e213874eb6aac5fd50f981f4b385262007c6f39c31b9bf6->leave($__internal_120667b6aa16e6d38e213874eb6aac5fd50f981f4b385262007c6f39c31b9bf6_prof);

    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        $__internal_04b1cca47efcea70e301cd10b808541825359d142fa64ceda9e975bb8ddb61dc = $this->env->getExtension("native_profiler");
        $__internal_04b1cca47efcea70e301cd10b808541825359d142fa64ceda9e975bb8ddb61dc->enter($__internal_04b1cca47efcea70e301cd10b808541825359d142fa64ceda9e975bb8ddb61dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04b1cca47efcea70e301cd10b808541825359d142fa64ceda9e975bb8ddb61dc->leave($__internal_04b1cca47efcea70e301cd10b808541825359d142fa64ceda9e975bb8ddb61dc_prof);

    }

    // line 114
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de23a1c21f66c45f96fadb994dfd9b7db3b4faedf2c90c205dd8ab73fe178b42 = $this->env->getExtension("native_profiler");
        $__internal_de23a1c21f66c45f96fadb994dfd9b7db3b4faedf2c90c205dd8ab73fe178b42->enter($__internal_de23a1c21f66c45f96fadb994dfd9b7db3b4faedf2c90c205dd8ab73fe178b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 115
        echo "        ";
        
        $__internal_de23a1c21f66c45f96fadb994dfd9b7db3b4faedf2c90c205dd8ab73fe178b42->leave($__internal_de23a1c21f66c45f96fadb994dfd9b7db3b4faedf2c90c205dd8ab73fe178b42_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b2d1fd8fcbf485d4608a7b60f8e4e4e6cd1eb3291cdbacdb77e835839b24503 = $this->env->getExtension("native_profiler");
        $__internal_4b2d1fd8fcbf485d4608a7b60f8e4e4e6cd1eb3291cdbacdb77e835839b24503->enter($__internal_4b2d1fd8fcbf485d4608a7b60f8e4e4e6cd1eb3291cdbacdb77e835839b24503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4b2d1fd8fcbf485d4608a7b60f8e4e4e6cd1eb3291cdbacdb77e835839b24503->leave($__internal_4b2d1fd8fcbf485d4608a7b60f8e4e4e6cd1eb3291cdbacdb77e835839b24503_prof);

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
        return array (  267 => 118,  264 => 117,  258 => 116,  251 => 115,  245 => 114,  234 => 113,  225 => 8,  220 => 7,  214 => 6,  202 => 5,  193 => 120,  190 => 116,  187 => 114,  185 => 113,  176 => 106,  169 => 104,  166 => 103,  160 => 100,  156 => 99,  153 => 98,  151 => 97,  147 => 95,  140 => 93,  137 => 92,  131 => 89,  126 => 88,  124 => 87,  103 => 69,  42 => 11,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
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
/*     body{background: url(http://www.magic4walls.com/wp-content/uploads/2013/11/Love-Tree.jpg);background-repeat: no-repeat;background-size: cover;}*/
/* */
/*     .navbar{background-color: black;}*/
/*     .navbar-default{border-radius: 0px; border-color: transparent;}*/
/*     .navbar-default .navbar-nav>li>a:hover {color: white;background-color: #337ab7;}*/
/*     .navbar-default .navbar-nav>li>a {*/
/*     color: #fff;*/
/* }*/
/*     body{background-color: blue;}*/
/*     img{width : 50px ; height : auto;}*/
/* */
/*     .navbar-brand {*/
/*     float: left;*/
/*     height: 50px;*/
/*     padding: 0px 0px;*/
/*     font-size: 18px;*/
/*     line-height: 20px;*/
/* }*/
/* */
/* .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {*/
/*     color: #fff;*/
/*     background-color: #337ab7;*/
/* }*/
/* */
/* body .btn-primary, btn1 {*/
/*     padding-bottom: 0px;*/
/*     margin-left: 0px; *//* */
/*     margin-top: 0vh; *//* */
/*     background-color: red;*/
/*     border-color: red;*/
/* }*/
/* */
/* .wrapper{background-color: #5791c1;}*/
/* .wrapper h3 {*/
/*     font-weight: bold;*/
/*     font-family: "arial black",;*/
/*     color: white;*/
/*    padding-top: 0px; */
/* }*/
/*     </style>*/
/*     <body>*/
/*       <nav class="navbar navbar-default col-md-12">*/
/* <div class="container-fluid">*/
/*   <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/* */
/*     <div class="row">*/
/*     <div class="navbar-header">*/
/*       <a class="navbar-brand" href="#">*/
/*         <img class="img-responsive" alt="Brand" src="{{asset('espace-don.png')}}">*/
/*       </a>*/
/*     </div>*/
/*     <ul class="nav navbar-nav">*/
/*       <li class="active"><a href="#">ESPAce DON <3 <span class="sr-only">(current)</span></a></li>*/
/*     </ul>*/
/*     </div>*/
/*   </div>*/
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
