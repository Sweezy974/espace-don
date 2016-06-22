<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6c19abfd987a26875e3723d3fc63320b189e33c8ded35b3319bac0839c787b6c extends Twig_Template
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
        $__internal_ce71a181302ac6033ad05b12ebed3612d61765f19209aaa06e7d8e43393e3b5f = $this->env->getExtension("native_profiler");
        $__internal_ce71a181302ac6033ad05b12ebed3612d61765f19209aaa06e7d8e43393e3b5f->enter($__internal_ce71a181302ac6033ad05b12ebed3612d61765f19209aaa06e7d8e43393e3b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ce71a181302ac6033ad05b12ebed3612d61765f19209aaa06e7d8e43393e3b5f->leave($__internal_ce71a181302ac6033ad05b12ebed3612d61765f19209aaa06e7d8e43393e3b5f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_453d9d083384c18724d1ad25e093e7858706da12a74a151e4c1ad55ea4ee834a = $this->env->getExtension("native_profiler");
        $__internal_453d9d083384c18724d1ad25e093e7858706da12a74a151e4c1ad55ea4ee834a->enter($__internal_453d9d083384c18724d1ad25e093e7858706da12a74a151e4c1ad55ea4ee834a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_453d9d083384c18724d1ad25e093e7858706da12a74a151e4c1ad55ea4ee834a->leave($__internal_453d9d083384c18724d1ad25e093e7858706da12a74a151e4c1ad55ea4ee834a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a1e5a4e3f1394aa2920938cafca54235483c9c6da5cfcbc9cd4db1320e3c6d51 = $this->env->getExtension("native_profiler");
        $__internal_a1e5a4e3f1394aa2920938cafca54235483c9c6da5cfcbc9cd4db1320e3c6d51->enter($__internal_a1e5a4e3f1394aa2920938cafca54235483c9c6da5cfcbc9cd4db1320e3c6d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a1e5a4e3f1394aa2920938cafca54235483c9c6da5cfcbc9cd4db1320e3c6d51->leave($__internal_a1e5a4e3f1394aa2920938cafca54235483c9c6da5cfcbc9cd4db1320e3c6d51_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5bfc3091223ac2a1d762adc0c782cbf9cc400c9c0d86da69e62beda0e5304eeb = $this->env->getExtension("native_profiler");
        $__internal_5bfc3091223ac2a1d762adc0c782cbf9cc400c9c0d86da69e62beda0e5304eeb->enter($__internal_5bfc3091223ac2a1d762adc0c782cbf9cc400c9c0d86da69e62beda0e5304eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5bfc3091223ac2a1d762adc0c782cbf9cc400c9c0d86da69e62beda0e5304eeb->leave($__internal_5bfc3091223ac2a1d762adc0c782cbf9cc400c9c0d86da69e62beda0e5304eeb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
