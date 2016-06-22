<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_6d17572cc41817e644d0dfddb0ae293709e70532e313ec16ba7847998e400c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_5cc5eb4b56c8ab0675acc80840b0fb3630c0f4d5a8c7f9e2e3fcd2d7591efd86 = $this->env->getExtension("native_profiler");
        $__internal_5cc5eb4b56c8ab0675acc80840b0fb3630c0f4d5a8c7f9e2e3fcd2d7591efd86->enter($__internal_5cc5eb4b56c8ab0675acc80840b0fb3630c0f4d5a8c7f9e2e3fcd2d7591efd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cc5eb4b56c8ab0675acc80840b0fb3630c0f4d5a8c7f9e2e3fcd2d7591efd86->leave($__internal_5cc5eb4b56c8ab0675acc80840b0fb3630c0f4d5a8c7f9e2e3fcd2d7591efd86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b2671320c2dc6ee76b504e16e392793d808b9c298e6293057dc06d41fa338c9 = $this->env->getExtension("native_profiler");
        $__internal_0b2671320c2dc6ee76b504e16e392793d808b9c298e6293057dc06d41fa338c9->enter($__internal_0b2671320c2dc6ee76b504e16e392793d808b9c298e6293057dc06d41fa338c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_0b2671320c2dc6ee76b504e16e392793d808b9c298e6293057dc06d41fa338c9->leave($__internal_0b2671320c2dc6ee76b504e16e392793d808b9c298e6293057dc06d41fa338c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
