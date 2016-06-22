<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_da5cb178b345948681dc9d1656247426c155890d6650e803bd941154ac9c55f1 extends Twig_Template
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
        $__internal_e0666afb21de377ad2e552d3f7c8c9c40ef3d445c14c8bbde0dc8ef0694227c8 = $this->env->getExtension("native_profiler");
        $__internal_e0666afb21de377ad2e552d3f7c8c9c40ef3d445c14c8bbde0dc8ef0694227c8->enter($__internal_e0666afb21de377ad2e552d3f7c8c9c40ef3d445c14c8bbde0dc8ef0694227c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e0666afb21de377ad2e552d3f7c8c9c40ef3d445c14c8bbde0dc8ef0694227c8->leave($__internal_e0666afb21de377ad2e552d3f7c8c9c40ef3d445c14c8bbde0dc8ef0694227c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
