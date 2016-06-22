<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_03d2e7c2b6c2d409f0d7040d2a878b26195cf84b016c1b20ddef7e90b3db208f extends Twig_Template
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
        $__internal_6174f42e0ff75df747c3336d2d96ba64f93044794919d84a98ad23abe9fed26f = $this->env->getExtension("native_profiler");
        $__internal_6174f42e0ff75df747c3336d2d96ba64f93044794919d84a98ad23abe9fed26f->enter($__internal_6174f42e0ff75df747c3336d2d96ba64f93044794919d84a98ad23abe9fed26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6174f42e0ff75df747c3336d2d96ba64f93044794919d84a98ad23abe9fed26f->leave($__internal_6174f42e0ff75df747c3336d2d96ba64f93044794919d84a98ad23abe9fed26f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
