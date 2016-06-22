<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d46e59ef4823e379de4eab19c4e4c09ebf1dce4a3560b48f35633c56b3e0acd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b69970707d9d81f2f0a280ef9be917c622b62676f8275aa0fba44f47477c8677 = $this->env->getExtension("native_profiler");
        $__internal_b69970707d9d81f2f0a280ef9be917c622b62676f8275aa0fba44f47477c8677->enter($__internal_b69970707d9d81f2f0a280ef9be917c622b62676f8275aa0fba44f47477c8677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b69970707d9d81f2f0a280ef9be917c622b62676f8275aa0fba44f47477c8677->leave($__internal_b69970707d9d81f2f0a280ef9be917c622b62676f8275aa0fba44f47477c8677_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df7c6918aa50b43553d2adbef21774750c59b2ecbc90f3d19e07d9d05f083242 = $this->env->getExtension("native_profiler");
        $__internal_df7c6918aa50b43553d2adbef21774750c59b2ecbc90f3d19e07d9d05f083242->enter($__internal_df7c6918aa50b43553d2adbef21774750c59b2ecbc90f3d19e07d9d05f083242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_df7c6918aa50b43553d2adbef21774750c59b2ecbc90f3d19e07d9d05f083242->leave($__internal_df7c6918aa50b43553d2adbef21774750c59b2ecbc90f3d19e07d9d05f083242_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
