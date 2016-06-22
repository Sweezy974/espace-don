<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ba6a2a776adc0f5fcc5ecf17af21693e5e86ccde5c4e9421477eb7da6019cd19 extends Twig_Template
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
        $__internal_98754a8c3cf484ac2d6a13904accbe679f452fac04f40defabaad12877dd9097 = $this->env->getExtension("native_profiler");
        $__internal_98754a8c3cf484ac2d6a13904accbe679f452fac04f40defabaad12877dd9097->enter($__internal_98754a8c3cf484ac2d6a13904accbe679f452fac04f40defabaad12877dd9097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_98754a8c3cf484ac2d6a13904accbe679f452fac04f40defabaad12877dd9097->leave($__internal_98754a8c3cf484ac2d6a13904accbe679f452fac04f40defabaad12877dd9097_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
