<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_854d129487b5e79bf0d8bfe4f254c3bc90039084c7ba62ff2d9a28ac8b5ffbf0 extends Twig_Template
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
        $__internal_51cb90e5d8c65fb29e0468eed3825b8275d588768c98fa4528d0e322aa805541 = $this->env->getExtension("native_profiler");
        $__internal_51cb90e5d8c65fb29e0468eed3825b8275d588768c98fa4528d0e322aa805541->enter($__internal_51cb90e5d8c65fb29e0468eed3825b8275d588768c98fa4528d0e322aa805541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_51cb90e5d8c65fb29e0468eed3825b8275d588768c98fa4528d0e322aa805541->leave($__internal_51cb90e5d8c65fb29e0468eed3825b8275d588768c98fa4528d0e322aa805541_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
