<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7646e5605ee8b2734be7fcc659c5729ab49c4c93ae264978ae127a8e7c89f622 extends Twig_Template
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
        $__internal_c5dc579b16058d5091e4deec66de2dd82552d51df99c133508a883bd06261ad5 = $this->env->getExtension("native_profiler");
        $__internal_c5dc579b16058d5091e4deec66de2dd82552d51df99c133508a883bd06261ad5->enter($__internal_c5dc579b16058d5091e4deec66de2dd82552d51df99c133508a883bd06261ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c5dc579b16058d5091e4deec66de2dd82552d51df99c133508a883bd06261ad5->leave($__internal_c5dc579b16058d5091e4deec66de2dd82552d51df99c133508a883bd06261ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
