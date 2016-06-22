<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_aaf7f744884832c82f989ea5f912cad152493e0781ef4ec1a82ba77686188048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_34bc8b9f5f8955587b841dc4eecf189fad8e31df781e20fb689cf0573b9ee64a = $this->env->getExtension("native_profiler");
        $__internal_34bc8b9f5f8955587b841dc4eecf189fad8e31df781e20fb689cf0573b9ee64a->enter($__internal_34bc8b9f5f8955587b841dc4eecf189fad8e31df781e20fb689cf0573b9ee64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34bc8b9f5f8955587b841dc4eecf189fad8e31df781e20fb689cf0573b9ee64a->leave($__internal_34bc8b9f5f8955587b841dc4eecf189fad8e31df781e20fb689cf0573b9ee64a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b6c1924d202c6617e07ac2edd6dec3d6487bda776ddca1913e6dd9ec4ed10da = $this->env->getExtension("native_profiler");
        $__internal_1b6c1924d202c6617e07ac2edd6dec3d6487bda776ddca1913e6dd9ec4ed10da->enter($__internal_1b6c1924d202c6617e07ac2edd6dec3d6487bda776ddca1913e6dd9ec4ed10da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1b6c1924d202c6617e07ac2edd6dec3d6487bda776ddca1913e6dd9ec4ed10da->leave($__internal_1b6c1924d202c6617e07ac2edd6dec3d6487bda776ddca1913e6dd9ec4ed10da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
