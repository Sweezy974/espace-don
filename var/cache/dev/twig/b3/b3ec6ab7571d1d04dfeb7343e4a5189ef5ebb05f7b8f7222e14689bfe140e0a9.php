<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a5e2514faf2e7c2415243e2a7f5d112150deb7eb9d457ff70781499a61ea38bb extends Twig_Template
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
        $__internal_b57f91450874f2d5442d2b8be9c643ad698408202abbe35aa35003d81aaefd32 = $this->env->getExtension("native_profiler");
        $__internal_b57f91450874f2d5442d2b8be9c643ad698408202abbe35aa35003d81aaefd32->enter($__internal_b57f91450874f2d5442d2b8be9c643ad698408202abbe35aa35003d81aaefd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_b57f91450874f2d5442d2b8be9c643ad698408202abbe35aa35003d81aaefd32->leave($__internal_b57f91450874f2d5442d2b8be9c643ad698408202abbe35aa35003d81aaefd32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
