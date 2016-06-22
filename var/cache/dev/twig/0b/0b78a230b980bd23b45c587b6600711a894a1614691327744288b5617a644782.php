<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_68a6f025fd1c1b0860fdd3099fe2f40cb20871b13c2b00c910eedc5d50fd183f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a9bb6c4f89e3c364cd79c9f3a603887301994a23fdd384c0e49f30939ea9e5b = $this->env->getExtension("native_profiler");
        $__internal_7a9bb6c4f89e3c364cd79c9f3a603887301994a23fdd384c0e49f30939ea9e5b->enter($__internal_7a9bb6c4f89e3c364cd79c9f3a603887301994a23fdd384c0e49f30939ea9e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7a9bb6c4f89e3c364cd79c9f3a603887301994a23fdd384c0e49f30939ea9e5b->leave($__internal_7a9bb6c4f89e3c364cd79c9f3a603887301994a23fdd384c0e49f30939ea9e5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
