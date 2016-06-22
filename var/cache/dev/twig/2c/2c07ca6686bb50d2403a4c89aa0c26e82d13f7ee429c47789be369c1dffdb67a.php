<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_bf9ccc1b654acb5688e765c5e765f257f4d48ab840aeb665e060423868660f2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_377a858a9ae7dd46a250e3fd6f93d3efe742e6e8a298479c3e7b7c0fa1827352 = $this->env->getExtension("native_profiler");
        $__internal_377a858a9ae7dd46a250e3fd6f93d3efe742e6e8a298479c3e7b7c0fa1827352->enter($__internal_377a858a9ae7dd46a250e3fd6f93d3efe742e6e8a298479c3e7b7c0fa1827352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_377a858a9ae7dd46a250e3fd6f93d3efe742e6e8a298479c3e7b7c0fa1827352->leave($__internal_377a858a9ae7dd46a250e3fd6f93d3efe742e6e8a298479c3e7b7c0fa1827352_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36a3a43865ba7590ab4856752ca7df7ffb92202d92ebf1e0ab2bc19f02860496 = $this->env->getExtension("native_profiler");
        $__internal_36a3a43865ba7590ab4856752ca7df7ffb92202d92ebf1e0ab2bc19f02860496->enter($__internal_36a3a43865ba7590ab4856752ca7df7ffb92202d92ebf1e0ab2bc19f02860496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_36a3a43865ba7590ab4856752ca7df7ffb92202d92ebf1e0ab2bc19f02860496->leave($__internal_36a3a43865ba7590ab4856752ca7df7ffb92202d92ebf1e0ab2bc19f02860496_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
