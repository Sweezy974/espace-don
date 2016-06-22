<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2070b95e4cf71418f738ba4ef968148b313647fd2a7269852b76247ef889d3c8 extends Twig_Template
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
        $__internal_c7c6b9fe3db23b7d71a06b27bffa77afe454ed68ef22499a5afb96824742213c = $this->env->getExtension("native_profiler");
        $__internal_c7c6b9fe3db23b7d71a06b27bffa77afe454ed68ef22499a5afb96824742213c->enter($__internal_c7c6b9fe3db23b7d71a06b27bffa77afe454ed68ef22499a5afb96824742213c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c7c6b9fe3db23b7d71a06b27bffa77afe454ed68ef22499a5afb96824742213c->leave($__internal_c7c6b9fe3db23b7d71a06b27bffa77afe454ed68ef22499a5afb96824742213c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
