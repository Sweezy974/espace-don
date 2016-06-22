<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_65a84e4cb6145e255be1a3c70bfd86e69410742031133be0ee35db66839d53ef extends Twig_Template
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
        $__internal_a19b8e1fe699e5bd140acd261a5f47b7e09eb2e7c1d1cfe33eb8e757f33fe51a = $this->env->getExtension("native_profiler");
        $__internal_a19b8e1fe699e5bd140acd261a5f47b7e09eb2e7c1d1cfe33eb8e757f33fe51a->enter($__internal_a19b8e1fe699e5bd140acd261a5f47b7e09eb2e7c1d1cfe33eb8e757f33fe51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a19b8e1fe699e5bd140acd261a5f47b7e09eb2e7c1d1cfe33eb8e757f33fe51a->leave($__internal_a19b8e1fe699e5bd140acd261a5f47b7e09eb2e7c1d1cfe33eb8e757f33fe51a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
