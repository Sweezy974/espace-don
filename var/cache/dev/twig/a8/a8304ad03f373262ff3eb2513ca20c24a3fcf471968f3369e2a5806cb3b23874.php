<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_331520be850428f0caad1a4fe42f1afa7b0540f2c7cb1d4dab44eada37b43386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_23ba83cf5a7c15314aca2e9093cdb05726f2845a76dfd72219c6ebb2d98143d8 = $this->env->getExtension("native_profiler");
        $__internal_23ba83cf5a7c15314aca2e9093cdb05726f2845a76dfd72219c6ebb2d98143d8->enter($__internal_23ba83cf5a7c15314aca2e9093cdb05726f2845a76dfd72219c6ebb2d98143d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23ba83cf5a7c15314aca2e9093cdb05726f2845a76dfd72219c6ebb2d98143d8->leave($__internal_23ba83cf5a7c15314aca2e9093cdb05726f2845a76dfd72219c6ebb2d98143d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0cf99bbe406c237992a69084f9e660063322997a81a74503e140f5ff657cb10 = $this->env->getExtension("native_profiler");
        $__internal_d0cf99bbe406c237992a69084f9e660063322997a81a74503e140f5ff657cb10->enter($__internal_d0cf99bbe406c237992a69084f9e660063322997a81a74503e140f5ff657cb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d0cf99bbe406c237992a69084f9e660063322997a81a74503e140f5ff657cb10->leave($__internal_d0cf99bbe406c237992a69084f9e660063322997a81a74503e140f5ff657cb10_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
