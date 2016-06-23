<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_818a59d075ee2b45b48586a1ce9f09041d77882021ca0d9fc8f4f47abb1fc7b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_fa49e36297973f52fec3d5bd57b740db4bdbeb98969a2892fa859f2cd5bdda2b = $this->env->getExtension("native_profiler");
        $__internal_fa49e36297973f52fec3d5bd57b740db4bdbeb98969a2892fa859f2cd5bdda2b->enter($__internal_fa49e36297973f52fec3d5bd57b740db4bdbeb98969a2892fa859f2cd5bdda2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa49e36297973f52fec3d5bd57b740db4bdbeb98969a2892fa859f2cd5bdda2b->leave($__internal_fa49e36297973f52fec3d5bd57b740db4bdbeb98969a2892fa859f2cd5bdda2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af597582ce2b83664b669f81e28bf82b44c4023d8da4489c65becab718be02a2 = $this->env->getExtension("native_profiler");
        $__internal_af597582ce2b83664b669f81e28bf82b44c4023d8da4489c65becab718be02a2->enter($__internal_af597582ce2b83664b669f81e28bf82b44c4023d8da4489c65becab718be02a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_af597582ce2b83664b669f81e28bf82b44c4023d8da4489c65becab718be02a2->leave($__internal_af597582ce2b83664b669f81e28bf82b44c4023d8da4489c65becab718be02a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
