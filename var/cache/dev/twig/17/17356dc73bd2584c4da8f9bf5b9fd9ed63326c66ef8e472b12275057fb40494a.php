<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_15c1154de07935c45de8bd536d4aa16db8bba7c06651db1a2fbf1bb1e91a8de5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9713d9e6b1ab7017bac931d4b844e3b9e54c726190d35eba6e61fc5ba4bf0b8 = $this->env->getExtension("native_profiler");
        $__internal_d9713d9e6b1ab7017bac931d4b844e3b9e54c726190d35eba6e61fc5ba4bf0b8->enter($__internal_d9713d9e6b1ab7017bac931d4b844e3b9e54c726190d35eba6e61fc5ba4bf0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9713d9e6b1ab7017bac931d4b844e3b9e54c726190d35eba6e61fc5ba4bf0b8->leave($__internal_d9713d9e6b1ab7017bac931d4b844e3b9e54c726190d35eba6e61fc5ba4bf0b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c4e6170e201a3e0297623f6a5dadbb7133dfc92d769950ab3e7f737924824b9 = $this->env->getExtension("native_profiler");
        $__internal_5c4e6170e201a3e0297623f6a5dadbb7133dfc92d769950ab3e7f737924824b9->enter($__internal_5c4e6170e201a3e0297623f6a5dadbb7133dfc92d769950ab3e7f737924824b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_5c4e6170e201a3e0297623f6a5dadbb7133dfc92d769950ab3e7f737924824b9->leave($__internal_5c4e6170e201a3e0297623f6a5dadbb7133dfc92d769950ab3e7f737924824b9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
