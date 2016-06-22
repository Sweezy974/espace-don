<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_a9f92dd91a53aece56188c5b4a85a9b98c6adbc2cc97766bdb9908df4afbf84f extends Twig_Template
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
        $__internal_c6ae82159e164c15de8345bc8b47854ae778a386b6c3cd496fe5e1c30249b5de = $this->env->getExtension("native_profiler");
        $__internal_c6ae82159e164c15de8345bc8b47854ae778a386b6c3cd496fe5e1c30249b5de->enter($__internal_c6ae82159e164c15de8345bc8b47854ae778a386b6c3cd496fe5e1c30249b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_c6ae82159e164c15de8345bc8b47854ae778a386b6c3cd496fe5e1c30249b5de->leave($__internal_c6ae82159e164c15de8345bc8b47854ae778a386b6c3cd496fe5e1c30249b5de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
