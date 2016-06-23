<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_300b8be3e98a3cb955b0b1d9801b6e13587a6de25a93ddc94fcda232969bf8ed extends Twig_Template
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
        $__internal_ced806dec3979a7b7536dd3ea70c279c80d6e0e0dc61ab335d7b9c809a605c30 = $this->env->getExtension("native_profiler");
        $__internal_ced806dec3979a7b7536dd3ea70c279c80d6e0e0dc61ab335d7b9c809a605c30->enter($__internal_ced806dec3979a7b7536dd3ea70c279c80d6e0e0dc61ab335d7b9c809a605c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ced806dec3979a7b7536dd3ea70c279c80d6e0e0dc61ab335d7b9c809a605c30->leave($__internal_ced806dec3979a7b7536dd3ea70c279c80d6e0e0dc61ab335d7b9c809a605c30_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2210eaf33a85c1d150f34bbaa584f9a2f27fbe6718d65e2eb925104c74170cbf = $this->env->getExtension("native_profiler");
        $__internal_2210eaf33a85c1d150f34bbaa584f9a2f27fbe6718d65e2eb925104c74170cbf->enter($__internal_2210eaf33a85c1d150f34bbaa584f9a2f27fbe6718d65e2eb925104c74170cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2210eaf33a85c1d150f34bbaa584f9a2f27fbe6718d65e2eb925104c74170cbf->leave($__internal_2210eaf33a85c1d150f34bbaa584f9a2f27fbe6718d65e2eb925104c74170cbf_prof);

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
