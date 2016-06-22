<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e20a1a96df11fa0e41cb372c6533ddc5a1c4227168f06c5388c9c88ca239d191 extends Twig_Template
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
        $__internal_936838a3b1a6fdc73a00c6a1d9a437945644abdf83fe3ad112a99eac100cc0bc = $this->env->getExtension("native_profiler");
        $__internal_936838a3b1a6fdc73a00c6a1d9a437945644abdf83fe3ad112a99eac100cc0bc->enter($__internal_936838a3b1a6fdc73a00c6a1d9a437945644abdf83fe3ad112a99eac100cc0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_936838a3b1a6fdc73a00c6a1d9a437945644abdf83fe3ad112a99eac100cc0bc->leave($__internal_936838a3b1a6fdc73a00c6a1d9a437945644abdf83fe3ad112a99eac100cc0bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
