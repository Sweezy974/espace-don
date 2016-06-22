<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1813ff768bdd43c71244becfa2a4f5481890d0b9af5981833265fd88f657b394 extends Twig_Template
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
        $__internal_82d7c4d1ab3af4182f6582c0182ae006e5e6846545c8d2c720f518915079344f = $this->env->getExtension("native_profiler");
        $__internal_82d7c4d1ab3af4182f6582c0182ae006e5e6846545c8d2c720f518915079344f->enter($__internal_82d7c4d1ab3af4182f6582c0182ae006e5e6846545c8d2c720f518915079344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_82d7c4d1ab3af4182f6582c0182ae006e5e6846545c8d2c720f518915079344f->leave($__internal_82d7c4d1ab3af4182f6582c0182ae006e5e6846545c8d2c720f518915079344f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
