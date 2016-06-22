<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2e47dd730505f9c8204dce46943475cad95d504cda9eb02e36d0b609b7e8df10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_10d5e64f8252436ac9dff705b4f40d1c876b54cd9a12fd0d5a38fc4b6f74c342 = $this->env->getExtension("native_profiler");
        $__internal_10d5e64f8252436ac9dff705b4f40d1c876b54cd9a12fd0d5a38fc4b6f74c342->enter($__internal_10d5e64f8252436ac9dff705b4f40d1c876b54cd9a12fd0d5a38fc4b6f74c342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d5e64f8252436ac9dff705b4f40d1c876b54cd9a12fd0d5a38fc4b6f74c342->leave($__internal_10d5e64f8252436ac9dff705b4f40d1c876b54cd9a12fd0d5a38fc4b6f74c342_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc693ac694700b45cec8d94ef064515ad7de0f5fd0e7a7bef74faf0fc077bf74 = $this->env->getExtension("native_profiler");
        $__internal_cc693ac694700b45cec8d94ef064515ad7de0f5fd0e7a7bef74faf0fc077bf74->enter($__internal_cc693ac694700b45cec8d94ef064515ad7de0f5fd0e7a7bef74faf0fc077bf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_cc693ac694700b45cec8d94ef064515ad7de0f5fd0e7a7bef74faf0fc077bf74->leave($__internal_cc693ac694700b45cec8d94ef064515ad7de0f5fd0e7a7bef74faf0fc077bf74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
