<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_10c67225977212377c903f87a2d4c26d9e5a17e37019e5cd86fa6649616a4f7f extends Twig_Template
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
        $__internal_ef73114a9f6227c5137a9465db652220e87d0953168b513163fcb1a47cfa437e = $this->env->getExtension("native_profiler");
        $__internal_ef73114a9f6227c5137a9465db652220e87d0953168b513163fcb1a47cfa437e->enter($__internal_ef73114a9f6227c5137a9465db652220e87d0953168b513163fcb1a47cfa437e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ef73114a9f6227c5137a9465db652220e87d0953168b513163fcb1a47cfa437e->leave($__internal_ef73114a9f6227c5137a9465db652220e87d0953168b513163fcb1a47cfa437e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
