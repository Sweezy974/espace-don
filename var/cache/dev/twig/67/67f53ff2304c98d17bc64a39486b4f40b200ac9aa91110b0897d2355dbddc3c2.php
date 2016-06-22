<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_b3d165d5904f08e5aa770983b2a55a8e4a1540db3c0e4f56262f5e72c166428b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d2ab434997b54172aabebbae96d47dc96f7c27cc0a6479d18c3ec90d1e18f9dd = $this->env->getExtension("native_profiler");
        $__internal_d2ab434997b54172aabebbae96d47dc96f7c27cc0a6479d18c3ec90d1e18f9dd->enter($__internal_d2ab434997b54172aabebbae96d47dc96f7c27cc0a6479d18c3ec90d1e18f9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2ab434997b54172aabebbae96d47dc96f7c27cc0a6479d18c3ec90d1e18f9dd->leave($__internal_d2ab434997b54172aabebbae96d47dc96f7c27cc0a6479d18c3ec90d1e18f9dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95cbe7236dfe3e94e0087d1a81785beab02a01e2a3f9030f969069e7e7db6334 = $this->env->getExtension("native_profiler");
        $__internal_95cbe7236dfe3e94e0087d1a81785beab02a01e2a3f9030f969069e7e7db6334->enter($__internal_95cbe7236dfe3e94e0087d1a81785beab02a01e2a3f9030f969069e7e7db6334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_95cbe7236dfe3e94e0087d1a81785beab02a01e2a3f9030f969069e7e7db6334->leave($__internal_95cbe7236dfe3e94e0087d1a81785beab02a01e2a3f9030f969069e7e7db6334_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
