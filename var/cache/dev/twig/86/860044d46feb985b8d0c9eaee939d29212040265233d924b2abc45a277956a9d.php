<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_136cc3094685caa2f80954bbbad11fce9db4861149cd3dd72039fe724334e7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_118e51bf34bf8960d402c6b930cb340a559861906328dcf39637288d163dd497 = $this->env->getExtension("native_profiler");
        $__internal_118e51bf34bf8960d402c6b930cb340a559861906328dcf39637288d163dd497->enter($__internal_118e51bf34bf8960d402c6b930cb340a559861906328dcf39637288d163dd497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_118e51bf34bf8960d402c6b930cb340a559861906328dcf39637288d163dd497->leave($__internal_118e51bf34bf8960d402c6b930cb340a559861906328dcf39637288d163dd497_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd285c74ce5171556eff7b7c7af7829ff701d262fb394fa4e3fb97a42967e6e6 = $this->env->getExtension("native_profiler");
        $__internal_dd285c74ce5171556eff7b7c7af7829ff701d262fb394fa4e3fb97a42967e6e6->enter($__internal_dd285c74ce5171556eff7b7c7af7829ff701d262fb394fa4e3fb97a42967e6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_dd285c74ce5171556eff7b7c7af7829ff701d262fb394fa4e3fb97a42967e6e6->leave($__internal_dd285c74ce5171556eff7b7c7af7829ff701d262fb394fa4e3fb97a42967e6e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
