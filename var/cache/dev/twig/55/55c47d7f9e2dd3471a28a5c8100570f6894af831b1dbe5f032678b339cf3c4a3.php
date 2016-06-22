<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_59da718951de7e3c1bc690addd4f58b45d0a1e9da9eb89a47e9cba35637617f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_41edbefb7b0e8462117a74ed9b6a6601a337340dc2de7ca9e17e620ea85d2626 = $this->env->getExtension("native_profiler");
        $__internal_41edbefb7b0e8462117a74ed9b6a6601a337340dc2de7ca9e17e620ea85d2626->enter($__internal_41edbefb7b0e8462117a74ed9b6a6601a337340dc2de7ca9e17e620ea85d2626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41edbefb7b0e8462117a74ed9b6a6601a337340dc2de7ca9e17e620ea85d2626->leave($__internal_41edbefb7b0e8462117a74ed9b6a6601a337340dc2de7ca9e17e620ea85d2626_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c30a52b3290895d44a42bb2523d0685ea7701c3f2a1d6da2448299b7efe71af4 = $this->env->getExtension("native_profiler");
        $__internal_c30a52b3290895d44a42bb2523d0685ea7701c3f2a1d6da2448299b7efe71af4->enter($__internal_c30a52b3290895d44a42bb2523d0685ea7701c3f2a1d6da2448299b7efe71af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c30a52b3290895d44a42bb2523d0685ea7701c3f2a1d6da2448299b7efe71af4->leave($__internal_c30a52b3290895d44a42bb2523d0685ea7701c3f2a1d6da2448299b7efe71af4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
