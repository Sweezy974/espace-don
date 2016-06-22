<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_1947387fa62302d9e0fde5e1e164f27ce13ee9c7c654358b2ce792359c3849ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_a9167b4d7c5ce0dbc73dfd71f94e62e9382b7fe98aed75b3d83d06088ae4b3d1 = $this->env->getExtension("native_profiler");
        $__internal_a9167b4d7c5ce0dbc73dfd71f94e62e9382b7fe98aed75b3d83d06088ae4b3d1->enter($__internal_a9167b4d7c5ce0dbc73dfd71f94e62e9382b7fe98aed75b3d83d06088ae4b3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9167b4d7c5ce0dbc73dfd71f94e62e9382b7fe98aed75b3d83d06088ae4b3d1->leave($__internal_a9167b4d7c5ce0dbc73dfd71f94e62e9382b7fe98aed75b3d83d06088ae4b3d1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b7a0c8a1d8d056e007cedf8cc508ee51a8d595784bbae849c0c55ceae1324a8 = $this->env->getExtension("native_profiler");
        $__internal_1b7a0c8a1d8d056e007cedf8cc508ee51a8d595784bbae849c0c55ceae1324a8->enter($__internal_1b7a0c8a1d8d056e007cedf8cc508ee51a8d595784bbae849c0c55ceae1324a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1b7a0c8a1d8d056e007cedf8cc508ee51a8d595784bbae849c0c55ceae1324a8->leave($__internal_1b7a0c8a1d8d056e007cedf8cc508ee51a8d595784bbae849c0c55ceae1324a8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
