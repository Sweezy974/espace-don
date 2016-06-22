<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_26bb768a544b4751efb0908f4e7817d4ddfce36bf8f8f156a22590c94adad555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_065ec0d3bdd3de4bd65f36ea8b170d9676904f346c4a936358202b67bff29a3b = $this->env->getExtension("native_profiler");
        $__internal_065ec0d3bdd3de4bd65f36ea8b170d9676904f346c4a936358202b67bff29a3b->enter($__internal_065ec0d3bdd3de4bd65f36ea8b170d9676904f346c4a936358202b67bff29a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_065ec0d3bdd3de4bd65f36ea8b170d9676904f346c4a936358202b67bff29a3b->leave($__internal_065ec0d3bdd3de4bd65f36ea8b170d9676904f346c4a936358202b67bff29a3b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac4a32f3d6fd87a086f1b767c322494fc6f1ab6b6049fdfa8fb23215629cbfec = $this->env->getExtension("native_profiler");
        $__internal_ac4a32f3d6fd87a086f1b767c322494fc6f1ab6b6049fdfa8fb23215629cbfec->enter($__internal_ac4a32f3d6fd87a086f1b767c322494fc6f1ab6b6049fdfa8fb23215629cbfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_ac4a32f3d6fd87a086f1b767c322494fc6f1ab6b6049fdfa8fb23215629cbfec->leave($__internal_ac4a32f3d6fd87a086f1b767c322494fc6f1ab6b6049fdfa8fb23215629cbfec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
