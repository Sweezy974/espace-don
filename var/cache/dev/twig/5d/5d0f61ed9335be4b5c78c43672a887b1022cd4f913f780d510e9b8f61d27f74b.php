<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b711ce52cfa54139e08c94f77b8e1eaa23d01e1bd0fb9b929bf8da2a7003b7ff extends Twig_Template
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
        $__internal_43f4e1daaded74584f684bbb50a49f2a42aef0a20fee4afe953cbae5c600ff45 = $this->env->getExtension("native_profiler");
        $__internal_43f4e1daaded74584f684bbb50a49f2a42aef0a20fee4afe953cbae5c600ff45->enter($__internal_43f4e1daaded74584f684bbb50a49f2a42aef0a20fee4afe953cbae5c600ff45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_43f4e1daaded74584f684bbb50a49f2a42aef0a20fee4afe953cbae5c600ff45->leave($__internal_43f4e1daaded74584f684bbb50a49f2a42aef0a20fee4afe953cbae5c600ff45_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6098e5ef423ed21481f37a82b95308aed1f0fecc6627342a0bd23218d0d6b1a5 = $this->env->getExtension("native_profiler");
        $__internal_6098e5ef423ed21481f37a82b95308aed1f0fecc6627342a0bd23218d0d6b1a5->enter($__internal_6098e5ef423ed21481f37a82b95308aed1f0fecc6627342a0bd23218d0d6b1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6098e5ef423ed21481f37a82b95308aed1f0fecc6627342a0bd23218d0d6b1a5->leave($__internal_6098e5ef423ed21481f37a82b95308aed1f0fecc6627342a0bd23218d0d6b1a5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f430f926001f1bb3a5cff500df4d436d0d580e60c610d4e30821fedbecd19cb4 = $this->env->getExtension("native_profiler");
        $__internal_f430f926001f1bb3a5cff500df4d436d0d580e60c610d4e30821fedbecd19cb4->enter($__internal_f430f926001f1bb3a5cff500df4d436d0d580e60c610d4e30821fedbecd19cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f430f926001f1bb3a5cff500df4d436d0d580e60c610d4e30821fedbecd19cb4->leave($__internal_f430f926001f1bb3a5cff500df4d436d0d580e60c610d4e30821fedbecd19cb4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1f0e554da6d7167e628782c0412998488d18e7a1a2c2329f7e296bc16b67b891 = $this->env->getExtension("native_profiler");
        $__internal_1f0e554da6d7167e628782c0412998488d18e7a1a2c2329f7e296bc16b67b891->enter($__internal_1f0e554da6d7167e628782c0412998488d18e7a1a2c2329f7e296bc16b67b891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1f0e554da6d7167e628782c0412998488d18e7a1a2c2329f7e296bc16b67b891->leave($__internal_1f0e554da6d7167e628782c0412998488d18e7a1a2c2329f7e296bc16b67b891_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
