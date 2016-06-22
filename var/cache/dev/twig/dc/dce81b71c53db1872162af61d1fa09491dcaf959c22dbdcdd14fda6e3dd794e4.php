<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_a6b8cd034136fb4c129c58c78f2650c9a1b874fd45406266fe4e0898b221d3cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_ddadaddb1335be1e8ce0472bd436a2ffd0251622f945eb54922dbdaf051d24c1 = $this->env->getExtension("native_profiler");
        $__internal_ddadaddb1335be1e8ce0472bd436a2ffd0251622f945eb54922dbdaf051d24c1->enter($__internal_ddadaddb1335be1e8ce0472bd436a2ffd0251622f945eb54922dbdaf051d24c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddadaddb1335be1e8ce0472bd436a2ffd0251622f945eb54922dbdaf051d24c1->leave($__internal_ddadaddb1335be1e8ce0472bd436a2ffd0251622f945eb54922dbdaf051d24c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0d0420da8965eb5f206a7e01a38ba655e2abe2eec0f5bbd8ebd9c6a0f299ebe = $this->env->getExtension("native_profiler");
        $__internal_d0d0420da8965eb5f206a7e01a38ba655e2abe2eec0f5bbd8ebd9c6a0f299ebe->enter($__internal_d0d0420da8965eb5f206a7e01a38ba655e2abe2eec0f5bbd8ebd9c6a0f299ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d0d0420da8965eb5f206a7e01a38ba655e2abe2eec0f5bbd8ebd9c6a0f299ebe->leave($__internal_d0d0420da8965eb5f206a7e01a38ba655e2abe2eec0f5bbd8ebd9c6a0f299ebe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
