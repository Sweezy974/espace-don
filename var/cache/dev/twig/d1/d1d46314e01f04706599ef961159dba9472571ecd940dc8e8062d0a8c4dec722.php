<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_10e54b2057a446586123a728f207c2d776cbf27b17184c6b5556dddfa45ab115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_25f35556a7b8b69a000bfebc4f712dddc5b1bf75f510e7e3d5cbb047576b89b7 = $this->env->getExtension("native_profiler");
        $__internal_25f35556a7b8b69a000bfebc4f712dddc5b1bf75f510e7e3d5cbb047576b89b7->enter($__internal_25f35556a7b8b69a000bfebc4f712dddc5b1bf75f510e7e3d5cbb047576b89b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25f35556a7b8b69a000bfebc4f712dddc5b1bf75f510e7e3d5cbb047576b89b7->leave($__internal_25f35556a7b8b69a000bfebc4f712dddc5b1bf75f510e7e3d5cbb047576b89b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a02e359fc758d3b331ad67ea3fa09c7915a578e90af7eab4231bbcdbabf460a3 = $this->env->getExtension("native_profiler");
        $__internal_a02e359fc758d3b331ad67ea3fa09c7915a578e90af7eab4231bbcdbabf460a3->enter($__internal_a02e359fc758d3b331ad67ea3fa09c7915a578e90af7eab4231bbcdbabf460a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a02e359fc758d3b331ad67ea3fa09c7915a578e90af7eab4231bbcdbabf460a3->leave($__internal_a02e359fc758d3b331ad67ea3fa09c7915a578e90af7eab4231bbcdbabf460a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b3adbff6765c2e72916416f4aa1f42096c4784319a195aace5281cbd9ce8da9 = $this->env->getExtension("native_profiler");
        $__internal_2b3adbff6765c2e72916416f4aa1f42096c4784319a195aace5281cbd9ce8da9->enter($__internal_2b3adbff6765c2e72916416f4aa1f42096c4784319a195aace5281cbd9ce8da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b3adbff6765c2e72916416f4aa1f42096c4784319a195aace5281cbd9ce8da9->leave($__internal_2b3adbff6765c2e72916416f4aa1f42096c4784319a195aace5281cbd9ce8da9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e303b1f2d8f7b1c36da76a74e6a90412aeda2221beafd42b15936515ae695ef1 = $this->env->getExtension("native_profiler");
        $__internal_e303b1f2d8f7b1c36da76a74e6a90412aeda2221beafd42b15936515ae695ef1->enter($__internal_e303b1f2d8f7b1c36da76a74e6a90412aeda2221beafd42b15936515ae695ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e303b1f2d8f7b1c36da76a74e6a90412aeda2221beafd42b15936515ae695ef1->leave($__internal_e303b1f2d8f7b1c36da76a74e6a90412aeda2221beafd42b15936515ae695ef1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
