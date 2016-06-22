<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_7057d6a9c6b20aa7dba8655c53fdd89e564e4066beb9ea54ad579032facf22fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0a6c922fd9a5385ef6a8a6f105c1ddc36d66e28a4189cd3efd98173e2637fa88 = $this->env->getExtension("native_profiler");
        $__internal_0a6c922fd9a5385ef6a8a6f105c1ddc36d66e28a4189cd3efd98173e2637fa88->enter($__internal_0a6c922fd9a5385ef6a8a6f105c1ddc36d66e28a4189cd3efd98173e2637fa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6c922fd9a5385ef6a8a6f105c1ddc36d66e28a4189cd3efd98173e2637fa88->leave($__internal_0a6c922fd9a5385ef6a8a6f105c1ddc36d66e28a4189cd3efd98173e2637fa88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82f2e01da059626f4ab4fe0b07e25ee45aa892bcfa0fbd35f9a51668b710745f = $this->env->getExtension("native_profiler");
        $__internal_82f2e01da059626f4ab4fe0b07e25ee45aa892bcfa0fbd35f9a51668b710745f->enter($__internal_82f2e01da059626f4ab4fe0b07e25ee45aa892bcfa0fbd35f9a51668b710745f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_82f2e01da059626f4ab4fe0b07e25ee45aa892bcfa0fbd35f9a51668b710745f->leave($__internal_82f2e01da059626f4ab4fe0b07e25ee45aa892bcfa0fbd35f9a51668b710745f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
