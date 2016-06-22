<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_943f863c623fc5f16a3b489f0ccf9572d79c8bbc14bde403970795ed89c6a062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1331a1aaad46a969e306764c7bd280f4b55fcbf7188e84209c75d8f54cdfca2e = $this->env->getExtension("native_profiler");
        $__internal_1331a1aaad46a969e306764c7bd280f4b55fcbf7188e84209c75d8f54cdfca2e->enter($__internal_1331a1aaad46a969e306764c7bd280f4b55fcbf7188e84209c75d8f54cdfca2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1331a1aaad46a969e306764c7bd280f4b55fcbf7188e84209c75d8f54cdfca2e->leave($__internal_1331a1aaad46a969e306764c7bd280f4b55fcbf7188e84209c75d8f54cdfca2e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_080930219ea5682f863390fd89d590db1a69106b5231334bb08221e7a3c25d2f = $this->env->getExtension("native_profiler");
        $__internal_080930219ea5682f863390fd89d590db1a69106b5231334bb08221e7a3c25d2f->enter($__internal_080930219ea5682f863390fd89d590db1a69106b5231334bb08221e7a3c25d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_080930219ea5682f863390fd89d590db1a69106b5231334bb08221e7a3c25d2f->leave($__internal_080930219ea5682f863390fd89d590db1a69106b5231334bb08221e7a3c25d2f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d65f5ff6a7223bad2e99bb511b9b5437611d4b0e63a4d151c15f3f1f6472f144 = $this->env->getExtension("native_profiler");
        $__internal_d65f5ff6a7223bad2e99bb511b9b5437611d4b0e63a4d151c15f3f1f6472f144->enter($__internal_d65f5ff6a7223bad2e99bb511b9b5437611d4b0e63a4d151c15f3f1f6472f144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d65f5ff6a7223bad2e99bb511b9b5437611d4b0e63a4d151c15f3f1f6472f144->leave($__internal_d65f5ff6a7223bad2e99bb511b9b5437611d4b0e63a4d151c15f3f1f6472f144_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dce9eca368e7a3c0217231cf8b2c12813c413219dbd1ea860de1761eac8cad01 = $this->env->getExtension("native_profiler");
        $__internal_dce9eca368e7a3c0217231cf8b2c12813c413219dbd1ea860de1761eac8cad01->enter($__internal_dce9eca368e7a3c0217231cf8b2c12813c413219dbd1ea860de1761eac8cad01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dce9eca368e7a3c0217231cf8b2c12813c413219dbd1ea860de1761eac8cad01->leave($__internal_dce9eca368e7a3c0217231cf8b2c12813c413219dbd1ea860de1761eac8cad01_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
