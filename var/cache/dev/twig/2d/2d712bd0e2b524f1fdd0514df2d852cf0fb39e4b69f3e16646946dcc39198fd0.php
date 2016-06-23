<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_dcefc66b582970dcb64954ad53a4f4789ef83f6dbf72678e664d61267a89248f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_598f0ba31c88fbce1d58fe8cf926f77e44d61edb29571de4ae80b41139ec8dd8 = $this->env->getExtension("native_profiler");
        $__internal_598f0ba31c88fbce1d58fe8cf926f77e44d61edb29571de4ae80b41139ec8dd8->enter($__internal_598f0ba31c88fbce1d58fe8cf926f77e44d61edb29571de4ae80b41139ec8dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598f0ba31c88fbce1d58fe8cf926f77e44d61edb29571de4ae80b41139ec8dd8->leave($__internal_598f0ba31c88fbce1d58fe8cf926f77e44d61edb29571de4ae80b41139ec8dd8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8587d33c805dc533c713e75e5bef374d3b802705e524f6100863594cb52d27b5 = $this->env->getExtension("native_profiler");
        $__internal_8587d33c805dc533c713e75e5bef374d3b802705e524f6100863594cb52d27b5->enter($__internal_8587d33c805dc533c713e75e5bef374d3b802705e524f6100863594cb52d27b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8587d33c805dc533c713e75e5bef374d3b802705e524f6100863594cb52d27b5->leave($__internal_8587d33c805dc533c713e75e5bef374d3b802705e524f6100863594cb52d27b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
