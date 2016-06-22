<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_c72721d3702a4d2e1a6ce3e51ef7b1dceb731420af27cc115f7e81fb832213d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_fa64ba55e51a7a3bcbb9a73cfd66e1d0cf8744b70d18b005452a5667f341d6b8 = $this->env->getExtension("native_profiler");
        $__internal_fa64ba55e51a7a3bcbb9a73cfd66e1d0cf8744b70d18b005452a5667f341d6b8->enter($__internal_fa64ba55e51a7a3bcbb9a73cfd66e1d0cf8744b70d18b005452a5667f341d6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa64ba55e51a7a3bcbb9a73cfd66e1d0cf8744b70d18b005452a5667f341d6b8->leave($__internal_fa64ba55e51a7a3bcbb9a73cfd66e1d0cf8744b70d18b005452a5667f341d6b8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1713ea16ee2d392dd7a0e72a5e4cbb9dcbd61a753508e82536e38b5c0bf2209 = $this->env->getExtension("native_profiler");
        $__internal_d1713ea16ee2d392dd7a0e72a5e4cbb9dcbd61a753508e82536e38b5c0bf2209->enter($__internal_d1713ea16ee2d392dd7a0e72a5e4cbb9dcbd61a753508e82536e38b5c0bf2209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d1713ea16ee2d392dd7a0e72a5e4cbb9dcbd61a753508e82536e38b5c0bf2209->leave($__internal_d1713ea16ee2d392dd7a0e72a5e4cbb9dcbd61a753508e82536e38b5c0bf2209_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
