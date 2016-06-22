<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_60870390d4cf14fa9c928819c68499af04f4361fce6943387fcd1f7f6691472f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_56128a1661e32fd039d5ab27f561f58aff2696403b536e06cb8d0e533254bdc1 = $this->env->getExtension("native_profiler");
        $__internal_56128a1661e32fd039d5ab27f561f58aff2696403b536e06cb8d0e533254bdc1->enter($__internal_56128a1661e32fd039d5ab27f561f58aff2696403b536e06cb8d0e533254bdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56128a1661e32fd039d5ab27f561f58aff2696403b536e06cb8d0e533254bdc1->leave($__internal_56128a1661e32fd039d5ab27f561f58aff2696403b536e06cb8d0e533254bdc1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e9370c1287f813759146a98990350a84bc062d323f0b0f4d7b66b179f76e876 = $this->env->getExtension("native_profiler");
        $__internal_5e9370c1287f813759146a98990350a84bc062d323f0b0f4d7b66b179f76e876->enter($__internal_5e9370c1287f813759146a98990350a84bc062d323f0b0f4d7b66b179f76e876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_5e9370c1287f813759146a98990350a84bc062d323f0b0f4d7b66b179f76e876->leave($__internal_5e9370c1287f813759146a98990350a84bc062d323f0b0f4d7b66b179f76e876_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
