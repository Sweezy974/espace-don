<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c57834236505ba23f1eb785b0c9c86c2fbf55aa54a36eac59e8997f8cac18233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_434475833b9e85d63fb0ea606314e81b1c77c217dbbc3abaea8f6fc9978dbc69 = $this->env->getExtension("native_profiler");
        $__internal_434475833b9e85d63fb0ea606314e81b1c77c217dbbc3abaea8f6fc9978dbc69->enter($__internal_434475833b9e85d63fb0ea606314e81b1c77c217dbbc3abaea8f6fc9978dbc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_434475833b9e85d63fb0ea606314e81b1c77c217dbbc3abaea8f6fc9978dbc69->leave($__internal_434475833b9e85d63fb0ea606314e81b1c77c217dbbc3abaea8f6fc9978dbc69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a736d13dc07c35a8e7e7ecc9361d49aa7c48f4459996d400a543db61c4824133 = $this->env->getExtension("native_profiler");
        $__internal_a736d13dc07c35a8e7e7ecc9361d49aa7c48f4459996d400a543db61c4824133->enter($__internal_a736d13dc07c35a8e7e7ecc9361d49aa7c48f4459996d400a543db61c4824133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a736d13dc07c35a8e7e7ecc9361d49aa7c48f4459996d400a543db61c4824133->leave($__internal_a736d13dc07c35a8e7e7ecc9361d49aa7c48f4459996d400a543db61c4824133_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
