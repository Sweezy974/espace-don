<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_36c3575c3e4d9698a58e8948dd7009c962939e2f5c452c8ba7ef997d2b98644c extends Twig_Template
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
        $__internal_7658bfff32ff5300c7484833de51c0c03ae14eed1b5c26419f0fd7b06845c0eb = $this->env->getExtension("native_profiler");
        $__internal_7658bfff32ff5300c7484833de51c0c03ae14eed1b5c26419f0fd7b06845c0eb->enter($__internal_7658bfff32ff5300c7484833de51c0c03ae14eed1b5c26419f0fd7b06845c0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7658bfff32ff5300c7484833de51c0c03ae14eed1b5c26419f0fd7b06845c0eb->leave($__internal_7658bfff32ff5300c7484833de51c0c03ae14eed1b5c26419f0fd7b06845c0eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
