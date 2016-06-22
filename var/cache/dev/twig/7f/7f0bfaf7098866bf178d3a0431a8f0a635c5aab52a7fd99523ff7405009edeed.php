<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4141a08e00cfff2212484e48179b8ec54cc931cd5d77ca323803ba39a584f409 extends Twig_Template
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
        $__internal_29c4a361644b7736aad3b24ce7519e524e6276a6be9aa7984024441d2a3ae76e = $this->env->getExtension("native_profiler");
        $__internal_29c4a361644b7736aad3b24ce7519e524e6276a6be9aa7984024441d2a3ae76e->enter($__internal_29c4a361644b7736aad3b24ce7519e524e6276a6be9aa7984024441d2a3ae76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_29c4a361644b7736aad3b24ce7519e524e6276a6be9aa7984024441d2a3ae76e->leave($__internal_29c4a361644b7736aad3b24ce7519e524e6276a6be9aa7984024441d2a3ae76e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
