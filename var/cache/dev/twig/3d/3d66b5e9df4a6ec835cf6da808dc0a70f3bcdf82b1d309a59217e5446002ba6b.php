<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_dbbcdcce29ce7c925f7700f679b45936da36fedb49c63b842a8164b290eff244 extends Twig_Template
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
        $__internal_774267c331b83460ea2640fa047435e528db0d6ebcd19810a87f888eef1d8f3b = $this->env->getExtension("native_profiler");
        $__internal_774267c331b83460ea2640fa047435e528db0d6ebcd19810a87f888eef1d8f3b->enter($__internal_774267c331b83460ea2640fa047435e528db0d6ebcd19810a87f888eef1d8f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_774267c331b83460ea2640fa047435e528db0d6ebcd19810a87f888eef1d8f3b->leave($__internal_774267c331b83460ea2640fa047435e528db0d6ebcd19810a87f888eef1d8f3b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1f7eb0eafdbe5e369aa6a84cd2d49a56e5c55b7347d654f1e3f121cc101edf0 = $this->env->getExtension("native_profiler");
        $__internal_a1f7eb0eafdbe5e369aa6a84cd2d49a56e5c55b7347d654f1e3f121cc101edf0->enter($__internal_a1f7eb0eafdbe5e369aa6a84cd2d49a56e5c55b7347d654f1e3f121cc101edf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a1f7eb0eafdbe5e369aa6a84cd2d49a56e5c55b7347d654f1e3f121cc101edf0->leave($__internal_a1f7eb0eafdbe5e369aa6a84cd2d49a56e5c55b7347d654f1e3f121cc101edf0_prof);

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
