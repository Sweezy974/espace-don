<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_42c9fa520c49e33eaba3dfa6c04e95b5c0e2eaabbf019bc9daf0dde5620bdf4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_fb34e8c79e8318e50009e3f3a55cf1e9ee3bd7ca16cee5cb82957fb55576fa83 = $this->env->getExtension("native_profiler");
        $__internal_fb34e8c79e8318e50009e3f3a55cf1e9ee3bd7ca16cee5cb82957fb55576fa83->enter($__internal_fb34e8c79e8318e50009e3f3a55cf1e9ee3bd7ca16cee5cb82957fb55576fa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb34e8c79e8318e50009e3f3a55cf1e9ee3bd7ca16cee5cb82957fb55576fa83->leave($__internal_fb34e8c79e8318e50009e3f3a55cf1e9ee3bd7ca16cee5cb82957fb55576fa83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71c4b43ec2a3e17b523accf91a330ce84529879053754227f2c13601a1a81a2e = $this->env->getExtension("native_profiler");
        $__internal_71c4b43ec2a3e17b523accf91a330ce84529879053754227f2c13601a1a81a2e->enter($__internal_71c4b43ec2a3e17b523accf91a330ce84529879053754227f2c13601a1a81a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_71c4b43ec2a3e17b523accf91a330ce84529879053754227f2c13601a1a81a2e->leave($__internal_71c4b43ec2a3e17b523accf91a330ce84529879053754227f2c13601a1a81a2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */