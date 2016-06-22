<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_282721893b6f250f75ccfb975ee5331fc063982185335da2a6264553a5f30f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0f1d2536bfd562733041927ba7d1a8ba0e7fa7a88e657b5ee8ba2e07d954f60f = $this->env->getExtension("native_profiler");
        $__internal_0f1d2536bfd562733041927ba7d1a8ba0e7fa7a88e657b5ee8ba2e07d954f60f->enter($__internal_0f1d2536bfd562733041927ba7d1a8ba0e7fa7a88e657b5ee8ba2e07d954f60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f1d2536bfd562733041927ba7d1a8ba0e7fa7a88e657b5ee8ba2e07d954f60f->leave($__internal_0f1d2536bfd562733041927ba7d1a8ba0e7fa7a88e657b5ee8ba2e07d954f60f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_275d7aefd8c9bae53431ecc05bbd77f629d8166e4b81ec225ae14210916a6cb8 = $this->env->getExtension("native_profiler");
        $__internal_275d7aefd8c9bae53431ecc05bbd77f629d8166e4b81ec225ae14210916a6cb8->enter($__internal_275d7aefd8c9bae53431ecc05bbd77f629d8166e4b81ec225ae14210916a6cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_275d7aefd8c9bae53431ecc05bbd77f629d8166e4b81ec225ae14210916a6cb8->leave($__internal_275d7aefd8c9bae53431ecc05bbd77f629d8166e4b81ec225ae14210916a6cb8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
