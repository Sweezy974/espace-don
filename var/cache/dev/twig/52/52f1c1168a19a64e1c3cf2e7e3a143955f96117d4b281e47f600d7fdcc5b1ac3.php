<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d9b1ac497d0f76700145fa372929c84c353f696c27c0ca1fc91c7e344f67344e extends Twig_Template
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
        $__internal_d3c61b15924133e0f1f1c14fa8bda21b6a2a3eb54ca6d1c53eac15c66f500b70 = $this->env->getExtension("native_profiler");
        $__internal_d3c61b15924133e0f1f1c14fa8bda21b6a2a3eb54ca6d1c53eac15c66f500b70->enter($__internal_d3c61b15924133e0f1f1c14fa8bda21b6a2a3eb54ca6d1c53eac15c66f500b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d3c61b15924133e0f1f1c14fa8bda21b6a2a3eb54ca6d1c53eac15c66f500b70->leave($__internal_d3c61b15924133e0f1f1c14fa8bda21b6a2a3eb54ca6d1c53eac15c66f500b70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
