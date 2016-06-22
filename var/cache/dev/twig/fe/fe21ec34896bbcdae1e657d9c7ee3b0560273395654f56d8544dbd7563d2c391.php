<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7c3dd872375bc508b389f32d302111e3a6a827d7bb8a4af2c805d3ef16878378 extends Twig_Template
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
        $__internal_9b8f9a76ad56d23d32cb21aeed9ab64a10a9033d78d1166803a0ba4628d23b55 = $this->env->getExtension("native_profiler");
        $__internal_9b8f9a76ad56d23d32cb21aeed9ab64a10a9033d78d1166803a0ba4628d23b55->enter($__internal_9b8f9a76ad56d23d32cb21aeed9ab64a10a9033d78d1166803a0ba4628d23b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9b8f9a76ad56d23d32cb21aeed9ab64a10a9033d78d1166803a0ba4628d23b55->leave($__internal_9b8f9a76ad56d23d32cb21aeed9ab64a10a9033d78d1166803a0ba4628d23b55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
