<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e7625e1d0c46b755475b48a9eed1016722c801ec49a36af6e36b19817446716f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4757987a79afa8c8afef103f834a32e0736b8dd7197681cd110eec150a232576 = $this->env->getExtension("native_profiler");
        $__internal_4757987a79afa8c8afef103f834a32e0736b8dd7197681cd110eec150a232576->enter($__internal_4757987a79afa8c8afef103f834a32e0736b8dd7197681cd110eec150a232576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4757987a79afa8c8afef103f834a32e0736b8dd7197681cd110eec150a232576->leave($__internal_4757987a79afa8c8afef103f834a32e0736b8dd7197681cd110eec150a232576_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b68f836b9b6e168bbe36fa23d4e4fbdf4a1131e51ee8665d320c72c7c446ec1a = $this->env->getExtension("native_profiler");
        $__internal_b68f836b9b6e168bbe36fa23d4e4fbdf4a1131e51ee8665d320c72c7c446ec1a->enter($__internal_b68f836b9b6e168bbe36fa23d4e4fbdf4a1131e51ee8665d320c72c7c446ec1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b68f836b9b6e168bbe36fa23d4e4fbdf4a1131e51ee8665d320c72c7c446ec1a->leave($__internal_b68f836b9b6e168bbe36fa23d4e4fbdf4a1131e51ee8665d320c72c7c446ec1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
