<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_d8b51b10dea69a6b8940d2591e075b532bc7ed7ad3e49a686a87deeadfbeaba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_d6ea1641e9eb5e95bab088725b3ea46df455787fc5cc39df929e78bd15bff2bb = $this->env->getExtension("native_profiler");
        $__internal_d6ea1641e9eb5e95bab088725b3ea46df455787fc5cc39df929e78bd15bff2bb->enter($__internal_d6ea1641e9eb5e95bab088725b3ea46df455787fc5cc39df929e78bd15bff2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ea1641e9eb5e95bab088725b3ea46df455787fc5cc39df929e78bd15bff2bb->leave($__internal_d6ea1641e9eb5e95bab088725b3ea46df455787fc5cc39df929e78bd15bff2bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed07d4ebab8e6eb7a89e917e29dccc48042a6a0942462a06f68477b199860f0a = $this->env->getExtension("native_profiler");
        $__internal_ed07d4ebab8e6eb7a89e917e29dccc48042a6a0942462a06f68477b199860f0a->enter($__internal_ed07d4ebab8e6eb7a89e917e29dccc48042a6a0942462a06f68477b199860f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_ed07d4ebab8e6eb7a89e917e29dccc48042a6a0942462a06f68477b199860f0a->leave($__internal_ed07d4ebab8e6eb7a89e917e29dccc48042a6a0942462a06f68477b199860f0a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
