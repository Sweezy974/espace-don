<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8c63204acf37a5a8baf538b6682c287f207478a67bd2777df15f36f5063c2ea7 extends Twig_Template
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
        $__internal_58771e7038d310651a99e5694b23aa708aa5d32435e5b8a83c9d4481b0863d08 = $this->env->getExtension("native_profiler");
        $__internal_58771e7038d310651a99e5694b23aa708aa5d32435e5b8a83c9d4481b0863d08->enter($__internal_58771e7038d310651a99e5694b23aa708aa5d32435e5b8a83c9d4481b0863d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_58771e7038d310651a99e5694b23aa708aa5d32435e5b8a83c9d4481b0863d08->leave($__internal_58771e7038d310651a99e5694b23aa708aa5d32435e5b8a83c9d4481b0863d08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
