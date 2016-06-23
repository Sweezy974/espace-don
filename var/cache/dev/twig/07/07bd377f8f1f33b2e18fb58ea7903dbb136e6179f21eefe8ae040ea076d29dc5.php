<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b83df30e8ff5e7512df03280c448be63bb4df6d10096782fc182e727330744d4 extends Twig_Template
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
        $__internal_027d9702c9c2f138a6cda81bf7ed87c485957deb22ea996fd8e58a08df645582 = $this->env->getExtension("native_profiler");
        $__internal_027d9702c9c2f138a6cda81bf7ed87c485957deb22ea996fd8e58a08df645582->enter($__internal_027d9702c9c2f138a6cda81bf7ed87c485957deb22ea996fd8e58a08df645582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027d9702c9c2f138a6cda81bf7ed87c485957deb22ea996fd8e58a08df645582->leave($__internal_027d9702c9c2f138a6cda81bf7ed87c485957deb22ea996fd8e58a08df645582_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6f9abd0989adc5edc048a2372a3288cb9dac96ed9af2d9f23ed1fea541906e0 = $this->env->getExtension("native_profiler");
        $__internal_e6f9abd0989adc5edc048a2372a3288cb9dac96ed9af2d9f23ed1fea541906e0->enter($__internal_e6f9abd0989adc5edc048a2372a3288cb9dac96ed9af2d9f23ed1fea541906e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e6f9abd0989adc5edc048a2372a3288cb9dac96ed9af2d9f23ed1fea541906e0->leave($__internal_e6f9abd0989adc5edc048a2372a3288cb9dac96ed9af2d9f23ed1fea541906e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7447d91f45b754edc98f1ede70cefca56c85d6a2c359b5355b0ce679e950000 = $this->env->getExtension("native_profiler");
        $__internal_d7447d91f45b754edc98f1ede70cefca56c85d6a2c359b5355b0ce679e950000->enter($__internal_d7447d91f45b754edc98f1ede70cefca56c85d6a2c359b5355b0ce679e950000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7447d91f45b754edc98f1ede70cefca56c85d6a2c359b5355b0ce679e950000->leave($__internal_d7447d91f45b754edc98f1ede70cefca56c85d6a2c359b5355b0ce679e950000_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_98db6d4b107797bcf94920eabd4e62972a9aea10e676ae80318d7f049d48f95d = $this->env->getExtension("native_profiler");
        $__internal_98db6d4b107797bcf94920eabd4e62972a9aea10e676ae80318d7f049d48f95d->enter($__internal_98db6d4b107797bcf94920eabd4e62972a9aea10e676ae80318d7f049d48f95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_98db6d4b107797bcf94920eabd4e62972a9aea10e676ae80318d7f049d48f95d->leave($__internal_98db6d4b107797bcf94920eabd4e62972a9aea10e676ae80318d7f049d48f95d_prof);

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
