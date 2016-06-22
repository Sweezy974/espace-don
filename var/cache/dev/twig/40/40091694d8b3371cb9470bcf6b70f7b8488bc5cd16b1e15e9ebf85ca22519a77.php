<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_984c209aa24e82ddd5b153670876248f9fd527fcaf4c7073367c7bff5cfdc8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_b97bf215ca03d026bce8b4d07d2c829744395c4958c3beee5402ab8e1c8077a5 = $this->env->getExtension("native_profiler");
        $__internal_b97bf215ca03d026bce8b4d07d2c829744395c4958c3beee5402ab8e1c8077a5->enter($__internal_b97bf215ca03d026bce8b4d07d2c829744395c4958c3beee5402ab8e1c8077a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b97bf215ca03d026bce8b4d07d2c829744395c4958c3beee5402ab8e1c8077a5->leave($__internal_b97bf215ca03d026bce8b4d07d2c829744395c4958c3beee5402ab8e1c8077a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bddc6441bfa67281fc8278a5a609aab0c899b34aececac1b357b7b306825e52 = $this->env->getExtension("native_profiler");
        $__internal_7bddc6441bfa67281fc8278a5a609aab0c899b34aececac1b357b7b306825e52->enter($__internal_7bddc6441bfa67281fc8278a5a609aab0c899b34aececac1b357b7b306825e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_7bddc6441bfa67281fc8278a5a609aab0c899b34aececac1b357b7b306825e52->leave($__internal_7bddc6441bfa67281fc8278a5a609aab0c899b34aececac1b357b7b306825e52_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
