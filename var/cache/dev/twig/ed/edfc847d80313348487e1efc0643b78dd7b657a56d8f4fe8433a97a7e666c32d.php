<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9568fadf43677f0fbb632a777c25c22ed94fdabb8acc7d9a1fe10d203f360920 extends Twig_Template
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
        $__internal_e653aaa17b375023068a642cb08b5884abf2f942d930050081501ec80d82b7bb = $this->env->getExtension("native_profiler");
        $__internal_e653aaa17b375023068a642cb08b5884abf2f942d930050081501ec80d82b7bb->enter($__internal_e653aaa17b375023068a642cb08b5884abf2f942d930050081501ec80d82b7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e653aaa17b375023068a642cb08b5884abf2f942d930050081501ec80d82b7bb->leave($__internal_e653aaa17b375023068a642cb08b5884abf2f942d930050081501ec80d82b7bb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_73b2f2b7a539343caea88fd442276a9eecc6f7330c632e14044da0b3e5e72153 = $this->env->getExtension("native_profiler");
        $__internal_73b2f2b7a539343caea88fd442276a9eecc6f7330c632e14044da0b3e5e72153->enter($__internal_73b2f2b7a539343caea88fd442276a9eecc6f7330c632e14044da0b3e5e72153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_73b2f2b7a539343caea88fd442276a9eecc6f7330c632e14044da0b3e5e72153->leave($__internal_73b2f2b7a539343caea88fd442276a9eecc6f7330c632e14044da0b3e5e72153_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_201a44302d83b7c6f32de179d7e018c306a865aeacd8c2acb997844d726afb6f = $this->env->getExtension("native_profiler");
        $__internal_201a44302d83b7c6f32de179d7e018c306a865aeacd8c2acb997844d726afb6f->enter($__internal_201a44302d83b7c6f32de179d7e018c306a865aeacd8c2acb997844d726afb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_201a44302d83b7c6f32de179d7e018c306a865aeacd8c2acb997844d726afb6f->leave($__internal_201a44302d83b7c6f32de179d7e018c306a865aeacd8c2acb997844d726afb6f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f0008c2e09ce81cd8d2528c3f343f377976fd2398b98e91c06e830b357db23df = $this->env->getExtension("native_profiler");
        $__internal_f0008c2e09ce81cd8d2528c3f343f377976fd2398b98e91c06e830b357db23df->enter($__internal_f0008c2e09ce81cd8d2528c3f343f377976fd2398b98e91c06e830b357db23df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f0008c2e09ce81cd8d2528c3f343f377976fd2398b98e91c06e830b357db23df->leave($__internal_f0008c2e09ce81cd8d2528c3f343f377976fd2398b98e91c06e830b357db23df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
