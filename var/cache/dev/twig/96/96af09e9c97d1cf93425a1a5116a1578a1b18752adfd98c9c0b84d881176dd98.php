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
        $__internal_86985ec95f95c03dea3699a911e101f350dbcf900da3542308c940460d0664d1 = $this->env->getExtension("native_profiler");
        $__internal_86985ec95f95c03dea3699a911e101f350dbcf900da3542308c940460d0664d1->enter($__internal_86985ec95f95c03dea3699a911e101f350dbcf900da3542308c940460d0664d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 53
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
        // line 71
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 72
            echo "               <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">
                   Connecté en tant que: ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>

           ";
        } else {
            // line 76
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
           ";
        }
        // line 79
        echo "       </li>
       <li class=\"nav-item\">
           ";
        // line 81
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 82
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                   ";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se deconnecter", array(), "FOSUserBundle"), "html", null, true);
            echo "
               </a>
           ";
        } else {
            // line 87
            echo "               <a class=\"nav-link\"
                  href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
           ";
        }
        // line 90
        echo "       </li>

</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

        ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 100
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "    </body>
</html>
";
        
        $__internal_86985ec95f95c03dea3699a911e101f350dbcf900da3542308c940460d0664d1->leave($__internal_86985ec95f95c03dea3699a911e101f350dbcf900da3542308c940460d0664d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d30d745129849f86aa8ab74daad9bd09994a0fa7ce8ffa1a720a877acb40b56 = $this->env->getExtension("native_profiler");
        $__internal_5d30d745129849f86aa8ab74daad9bd09994a0fa7ce8ffa1a720a877acb40b56->enter($__internal_5d30d745129849f86aa8ab74daad9bd09994a0fa7ce8ffa1a720a877acb40b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5d30d745129849f86aa8ab74daad9bd09994a0fa7ce8ffa1a720a877acb40b56->leave($__internal_5d30d745129849f86aa8ab74daad9bd09994a0fa7ce8ffa1a720a877acb40b56_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a27545b88bb10ff5b94df23925f508ddf40f24990ca3fd4f61682c8776d56af = $this->env->getExtension("native_profiler");
        $__internal_6a27545b88bb10ff5b94df23925f508ddf40f24990ca3fd4f61682c8776d56af->enter($__internal_6a27545b88bb10ff5b94df23925f508ddf40f24990ca3fd4f61682c8776d56af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6a27545b88bb10ff5b94df23925f508ddf40f24990ca3fd4f61682c8776d56af->leave($__internal_6a27545b88bb10ff5b94df23925f508ddf40f24990ca3fd4f61682c8776d56af_prof);

    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed091b51b04d80031ee7d6e88a9717c358646792823209d78ea52c67da5c55ab = $this->env->getExtension("native_profiler");
        $__internal_ed091b51b04d80031ee7d6e88a9717c358646792823209d78ea52c67da5c55ab->enter($__internal_ed091b51b04d80031ee7d6e88a9717c358646792823209d78ea52c67da5c55ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed091b51b04d80031ee7d6e88a9717c358646792823209d78ea52c67da5c55ab->leave($__internal_ed091b51b04d80031ee7d6e88a9717c358646792823209d78ea52c67da5c55ab_prof);

    }

    // line 98
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12ad451de776cc1d3b5b96f4795bb18049f503036ab8c7fbe07bd5fa7334edb0 = $this->env->getExtension("native_profiler");
        $__internal_12ad451de776cc1d3b5b96f4795bb18049f503036ab8c7fbe07bd5fa7334edb0->enter($__internal_12ad451de776cc1d3b5b96f4795bb18049f503036ab8c7fbe07bd5fa7334edb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 99
        echo "        ";
        
        $__internal_12ad451de776cc1d3b5b96f4795bb18049f503036ab8c7fbe07bd5fa7334edb0->leave($__internal_12ad451de776cc1d3b5b96f4795bb18049f503036ab8c7fbe07bd5fa7334edb0_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68a758e04590ac164048da2b9646e9d8cfd4333ca5354232d307b4f097040bee = $this->env->getExtension("native_profiler");
        $__internal_68a758e04590ac164048da2b9646e9d8cfd4333ca5354232d307b4f097040bee->enter($__internal_68a758e04590ac164048da2b9646e9d8cfd4333ca5354232d307b4f097040bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_68a758e04590ac164048da2b9646e9d8cfd4333ca5354232d307b4f097040bee->leave($__internal_68a758e04590ac164048da2b9646e9d8cfd4333ca5354232d307b4f097040bee_prof);

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
        return array (  251 => 102,  248 => 101,  242 => 100,  235 => 99,  229 => 98,  218 => 97,  209 => 8,  204 => 7,  198 => 6,  186 => 5,  177 => 104,  174 => 100,  171 => 98,  169 => 97,  160 => 90,  153 => 88,  150 => 87,  144 => 84,  140 => 83,  137 => 82,  135 => 81,  131 => 79,  124 => 77,  121 => 76,  115 => 73,  110 => 72,  108 => 71,  87 => 53,  42 => 11,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
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
