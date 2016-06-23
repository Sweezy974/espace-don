<?php

/* ::base.html.twig */
class __TwigTemplate_0f3603fcc59013918b4a6526aeb79e7b95518bc39436490af259d2b292cc2829 extends Twig_Template
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
        $__internal_9718d31de86189ce36f65bb239a73f3b83ccb54a42131ee3a7f6e8fd29a5ba02 = $this->env->getExtension("native_profiler");
        $__internal_9718d31de86189ce36f65bb239a73f3b83ccb54a42131ee3a7f6e8fd29a5ba02->enter($__internal_9718d31de86189ce36f65bb239a73f3b83ccb54a42131ee3a7f6e8fd29a5ba02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

    body{background-image: url(https://pixabay.com/static/uploads/photo/2016/05/28/00/06/gift-1420830_960_720.jpg);background-repeat: no-repeat;background-size: cover;}

    .navbar-brand>img {display: block;background-color: crimson;}

    .navbar{background-color: darkcyan;}
    .navbar-default{border-radius: 0px; border-color: crimson;}
    .navbar-default .navbar-nav>li>a:hover {color: white;background-color: crimson;}
    .navbar-default .navbar-nav>li>a {
    color: #fff;
}
    body{}
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
    background-color: crimson;
}

body .btn-primary, btn1 {
    padding-bottom: 0px;
    margin-left: 0px; */
    margin-top: 0vh; */
    background-color: red;
    border-color: red;
}

.wrapper {
    background-color: #008b8b;
}
.wrapper h3 {
    font-weight: bold;
    font-family: \"arial black\",;
    color: white;
   padding-top: 0px;
}
    </style>
    <body>
      <nav class=\"navbar navbar-default navbar-fixed-top col-md-12\">
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
        // line 73
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
        // line 91
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 92
            echo "               <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">
                   Connecté en tant que: ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>

           ";
        } else {
            // line 96
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
           ";
        }
        // line 99
        echo "       </li>
       <li class=\"nav-item\">
           ";
        // line 101
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 102
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                   ";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se deconnecter", array(), "FOSUserBundle"), "html", null, true);
            echo "
               </a>
           ";
        } else {
            // line 107
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
           ";
        }
        // line 110
        echo "       </li>

</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

        ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 120
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "    </body>
</html>
";
        
        $__internal_9718d31de86189ce36f65bb239a73f3b83ccb54a42131ee3a7f6e8fd29a5ba02->leave($__internal_9718d31de86189ce36f65bb239a73f3b83ccb54a42131ee3a7f6e8fd29a5ba02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eac5bb9418c48faaf0ebc17f74ef103cff5b2503eef7629f9d418dac154463ce = $this->env->getExtension("native_profiler");
        $__internal_eac5bb9418c48faaf0ebc17f74ef103cff5b2503eef7629f9d418dac154463ce->enter($__internal_eac5bb9418c48faaf0ebc17f74ef103cff5b2503eef7629f9d418dac154463ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eac5bb9418c48faaf0ebc17f74ef103cff5b2503eef7629f9d418dac154463ce->leave($__internal_eac5bb9418c48faaf0ebc17f74ef103cff5b2503eef7629f9d418dac154463ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb1cf13d09e689b1eeb63d4dc5d90e7b6d228f118176b01971fa3293b26b3a19 = $this->env->getExtension("native_profiler");
        $__internal_cb1cf13d09e689b1eeb63d4dc5d90e7b6d228f118176b01971fa3293b26b3a19->enter($__internal_cb1cf13d09e689b1eeb63d4dc5d90e7b6d228f118176b01971fa3293b26b3a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <!--<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">-->
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_cb1cf13d09e689b1eeb63d4dc5d90e7b6d228f118176b01971fa3293b26b3a19->leave($__internal_cb1cf13d09e689b1eeb63d4dc5d90e7b6d228f118176b01971fa3293b26b3a19_prof);

    }

    // line 117
    public function block_body($context, array $blocks = array())
    {
        $__internal_57ce1a020b6976cd9c40ef20c9c6f4a5521b8cb665cbc590d754d7790001678b = $this->env->getExtension("native_profiler");
        $__internal_57ce1a020b6976cd9c40ef20c9c6f4a5521b8cb665cbc590d754d7790001678b->enter($__internal_57ce1a020b6976cd9c40ef20c9c6f4a5521b8cb665cbc590d754d7790001678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_57ce1a020b6976cd9c40ef20c9c6f4a5521b8cb665cbc590d754d7790001678b->leave($__internal_57ce1a020b6976cd9c40ef20c9c6f4a5521b8cb665cbc590d754d7790001678b_prof);

    }

    // line 118
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_349143a635a2ded7d56d7fe5de294a8ef6866be0dd2c27371797a42711ce41db = $this->env->getExtension("native_profiler");
        $__internal_349143a635a2ded7d56d7fe5de294a8ef6866be0dd2c27371797a42711ce41db->enter($__internal_349143a635a2ded7d56d7fe5de294a8ef6866be0dd2c27371797a42711ce41db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 119
        echo "        ";
        
        $__internal_349143a635a2ded7d56d7fe5de294a8ef6866be0dd2c27371797a42711ce41db->leave($__internal_349143a635a2ded7d56d7fe5de294a8ef6866be0dd2c27371797a42711ce41db_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4d6464ae57c4a32240f25ed3ad7a7bbaab8bd090cc4436b26490adbfba14e67 = $this->env->getExtension("native_profiler");
        $__internal_c4d6464ae57c4a32240f25ed3ad7a7bbaab8bd090cc4436b26490adbfba14e67->enter($__internal_c4d6464ae57c4a32240f25ed3ad7a7bbaab8bd090cc4436b26490adbfba14e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        echo "        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c4d6464ae57c4a32240f25ed3ad7a7bbaab8bd090cc4436b26490adbfba14e67->leave($__internal_c4d6464ae57c4a32240f25ed3ad7a7bbaab8bd090cc4436b26490adbfba14e67_prof);

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
        return array (  271 => 122,  268 => 121,  262 => 120,  255 => 119,  249 => 118,  238 => 117,  229 => 8,  224 => 7,  218 => 6,  206 => 5,  197 => 124,  194 => 120,  191 => 118,  189 => 117,  180 => 110,  173 => 108,  170 => 107,  164 => 104,  160 => 103,  157 => 102,  155 => 101,  151 => 99,  144 => 97,  141 => 96,  135 => 93,  130 => 92,  128 => 91,  107 => 73,  42 => 11,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <!--<link rel="stylesheet" href="{{asset('css/styles.css')}}">-->*/
/*         <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <style>*/
/* */
/*     body{background-image: url(https://pixabay.com/static/uploads/photo/2016/05/28/00/06/gift-1420830_960_720.jpg);background-repeat: no-repeat;background-size: cover;}*/
/* */
/*     .navbar-brand>img {display: block;background-color: crimson;}*/
/* */
/*     .navbar{background-color: darkcyan;}*/
/*     .navbar-default{border-radius: 0px; border-color: crimson;}*/
/*     .navbar-default .navbar-nav>li>a:hover {color: white;background-color: crimson;}*/
/*     .navbar-default .navbar-nav>li>a {*/
/*     color: #fff;*/
/* }*/
/*     body{}*/
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
/*     background-color: crimson;*/
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
/* .wrapper {*/
/*     background-color: #008b8b;*/
/* }*/
/* .wrapper h3 {*/
/*     font-weight: bold;*/
/*     font-family: "arial black",;*/
/*     color: white;*/
/*    padding-top: 0px;*/
/* }*/
/*     </style>*/
/*     <body>*/
/*       <nav class="navbar navbar-default navbar-fixed-top col-md-12">*/
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
