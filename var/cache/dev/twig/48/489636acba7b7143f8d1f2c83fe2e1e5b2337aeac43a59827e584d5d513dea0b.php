<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_3618be76c75d0670ca2b726c4680be2fd4965c988f56068dc0b32fb1a84c07c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_666de3d8ccadb5c0dcfc665067d41dff4b30fb63aeca133eaff0b1026a8b51fc = $this->env->getExtension("native_profiler");
        $__internal_666de3d8ccadb5c0dcfc665067d41dff4b30fb63aeca133eaff0b1026a8b51fc->enter($__internal_666de3d8ccadb5c0dcfc665067d41dff4b30fb63aeca133eaff0b1026a8b51fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_666de3d8ccadb5c0dcfc665067d41dff4b30fb63aeca133eaff0b1026a8b51fc->leave($__internal_666de3d8ccadb5c0dcfc665067d41dff4b30fb63aeca133eaff0b1026a8b51fc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57790ddf88ddc1e74830c95c0a6d101eb4e34974462f830128f2d5014bca7e8a = $this->env->getExtension("native_profiler");
        $__internal_57790ddf88ddc1e74830c95c0a6d101eb4e34974462f830128f2d5014bca7e8a->enter($__internal_57790ddf88ddc1e74830c95c0a6d101eb4e34974462f830128f2d5014bca7e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_57790ddf88ddc1e74830c95c0a6d101eb4e34974462f830128f2d5014bca7e8a->leave($__internal_57790ddf88ddc1e74830c95c0a6d101eb4e34974462f830128f2d5014bca7e8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
