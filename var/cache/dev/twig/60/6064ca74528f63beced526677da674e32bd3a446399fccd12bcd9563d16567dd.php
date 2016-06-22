<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ea75878ed16d91c168aa3c1b350ec80f59df7d9afe6947511760481deb4526d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_567031a812a00d69ea4fbd93b5d7931a9a10f77d2b55e4578ef2db90884858c5 = $this->env->getExtension("native_profiler");
        $__internal_567031a812a00d69ea4fbd93b5d7931a9a10f77d2b55e4578ef2db90884858c5->enter($__internal_567031a812a00d69ea4fbd93b5d7931a9a10f77d2b55e4578ef2db90884858c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_567031a812a00d69ea4fbd93b5d7931a9a10f77d2b55e4578ef2db90884858c5->leave($__internal_567031a812a00d69ea4fbd93b5d7931a9a10f77d2b55e4578ef2db90884858c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f71940781f48b1a4bde5c775caf45213fab48b361a6347f0dfcd4099398e7f22 = $this->env->getExtension("native_profiler");
        $__internal_f71940781f48b1a4bde5c775caf45213fab48b361a6347f0dfcd4099398e7f22->enter($__internal_f71940781f48b1a4bde5c775caf45213fab48b361a6347f0dfcd4099398e7f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f71940781f48b1a4bde5c775caf45213fab48b361a6347f0dfcd4099398e7f22->leave($__internal_f71940781f48b1a4bde5c775caf45213fab48b361a6347f0dfcd4099398e7f22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d506a38c9692d69a892261f752a72f29420b496ace90d8bb0f6f54eaaa386704 = $this->env->getExtension("native_profiler");
        $__internal_d506a38c9692d69a892261f752a72f29420b496ace90d8bb0f6f54eaaa386704->enter($__internal_d506a38c9692d69a892261f752a72f29420b496ace90d8bb0f6f54eaaa386704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d506a38c9692d69a892261f752a72f29420b496ace90d8bb0f6f54eaaa386704->leave($__internal_d506a38c9692d69a892261f752a72f29420b496ace90d8bb0f6f54eaaa386704_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeb928f3bc976ccf34fee8d2802f824c68b6862b604a405c75b58ae9ca5b64d6 = $this->env->getExtension("native_profiler");
        $__internal_eeb928f3bc976ccf34fee8d2802f824c68b6862b604a405c75b58ae9ca5b64d6->enter($__internal_eeb928f3bc976ccf34fee8d2802f824c68b6862b604a405c75b58ae9ca5b64d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_eeb928f3bc976ccf34fee8d2802f824c68b6862b604a405c75b58ae9ca5b64d6->leave($__internal_eeb928f3bc976ccf34fee8d2802f824c68b6862b604a405c75b58ae9ca5b64d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
