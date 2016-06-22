<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_07f375418cfd27a4bc087c0f9571af35ee734a65f496228e4d37615d4b85a5a3 extends Twig_Template
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
        $__internal_48a2f2b09279d4d4a7b24c33e8536b62aeab2ebc4237b8b5fdd1eeec838356e6 = $this->env->getExtension("native_profiler");
        $__internal_48a2f2b09279d4d4a7b24c33e8536b62aeab2ebc4237b8b5fdd1eeec838356e6->enter($__internal_48a2f2b09279d4d4a7b24c33e8536b62aeab2ebc4237b8b5fdd1eeec838356e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_48a2f2b09279d4d4a7b24c33e8536b62aeab2ebc4237b8b5fdd1eeec838356e6->leave($__internal_48a2f2b09279d4d4a7b24c33e8536b62aeab2ebc4237b8b5fdd1eeec838356e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
