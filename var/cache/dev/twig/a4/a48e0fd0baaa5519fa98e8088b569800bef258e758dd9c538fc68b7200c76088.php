<?php

/* base.html.twig */
class __TwigTemplate_9750fba82ca75624f50aac20f99252677f22e19a856012d13bf373d98d2c917f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a673fdba3361a8a924bf041391c820df33b981e92316993425242a0f4f3a4af = $this->env->getExtension("native_profiler");
        $__internal_4a673fdba3361a8a924bf041391c820df33b981e92316993425242a0f4f3a4af->enter($__internal_4a673fdba3361a8a924bf041391c820df33b981e92316993425242a0f4f3a4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_4a673fdba3361a8a924bf041391c820df33b981e92316993425242a0f4f3a4af->leave($__internal_4a673fdba3361a8a924bf041391c820df33b981e92316993425242a0f4f3a4af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1922b7761646fdbf1465c83a8aa485453e6b344df8dae82c49d3b73ffd10de0f = $this->env->getExtension("native_profiler");
        $__internal_1922b7761646fdbf1465c83a8aa485453e6b344df8dae82c49d3b73ffd10de0f->enter($__internal_1922b7761646fdbf1465c83a8aa485453e6b344df8dae82c49d3b73ffd10de0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1922b7761646fdbf1465c83a8aa485453e6b344df8dae82c49d3b73ffd10de0f->leave($__internal_1922b7761646fdbf1465c83a8aa485453e6b344df8dae82c49d3b73ffd10de0f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e07af0b04295602e93f92d7f0d27e88b608fdf6c2b77e8cbfdf289774dac4fa = $this->env->getExtension("native_profiler");
        $__internal_6e07af0b04295602e93f92d7f0d27e88b608fdf6c2b77e8cbfdf289774dac4fa->enter($__internal_6e07af0b04295602e93f92d7f0d27e88b608fdf6c2b77e8cbfdf289774dac4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6e07af0b04295602e93f92d7f0d27e88b608fdf6c2b77e8cbfdf289774dac4fa->leave($__internal_6e07af0b04295602e93f92d7f0d27e88b608fdf6c2b77e8cbfdf289774dac4fa_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9c15f3197d3cdba31e8b7523d887056aafc89a071b138d7474ee33e4cbc842d = $this->env->getExtension("native_profiler");
        $__internal_d9c15f3197d3cdba31e8b7523d887056aafc89a071b138d7474ee33e4cbc842d->enter($__internal_d9c15f3197d3cdba31e8b7523d887056aafc89a071b138d7474ee33e4cbc842d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d9c15f3197d3cdba31e8b7523d887056aafc89a071b138d7474ee33e4cbc842d->leave($__internal_d9c15f3197d3cdba31e8b7523d887056aafc89a071b138d7474ee33e4cbc842d_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86c8778740fd7331403c4ce7dc115e23931814474d26171d490f23e6d28d9fc9 = $this->env->getExtension("native_profiler");
        $__internal_86c8778740fd7331403c4ce7dc115e23931814474d26171d490f23e6d28d9fc9->enter($__internal_86c8778740fd7331403c4ce7dc115e23931814474d26171d490f23e6d28d9fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_86c8778740fd7331403c4ce7dc115e23931814474d26171d490f23e6d28d9fc9->leave($__internal_86c8778740fd7331403c4ce7dc115e23931814474d26171d490f23e6d28d9fc9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 17,  110 => 16,  104 => 15,  93 => 14,  84 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 19,  49 => 15,  47 => 14,  41 => 11,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/*         <script src="{{asset('js/script.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
