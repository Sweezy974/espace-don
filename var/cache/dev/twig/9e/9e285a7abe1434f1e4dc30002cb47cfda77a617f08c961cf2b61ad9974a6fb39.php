<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_43a65384372030c0d0165b22f4bb958215ab4d99df5124f02381ebfbba356d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d6084edb79da14b15971fd4557e90fe2190fdc893aabb32a6053e1c5181572e4 = $this->env->getExtension("native_profiler");
        $__internal_d6084edb79da14b15971fd4557e90fe2190fdc893aabb32a6053e1c5181572e4->enter($__internal_d6084edb79da14b15971fd4557e90fe2190fdc893aabb32a6053e1c5181572e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6084edb79da14b15971fd4557e90fe2190fdc893aabb32a6053e1c5181572e4->leave($__internal_d6084edb79da14b15971fd4557e90fe2190fdc893aabb32a6053e1c5181572e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28b6fcb8b1cf29e280bafcd00107c42e6b92d50417f70f7f5054e5357a4b675f = $this->env->getExtension("native_profiler");
        $__internal_28b6fcb8b1cf29e280bafcd00107c42e6b92d50417f70f7f5054e5357a4b675f->enter($__internal_28b6fcb8b1cf29e280bafcd00107c42e6b92d50417f70f7f5054e5357a4b675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_28b6fcb8b1cf29e280bafcd00107c42e6b92d50417f70f7f5054e5357a4b675f->leave($__internal_28b6fcb8b1cf29e280bafcd00107c42e6b92d50417f70f7f5054e5357a4b675f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
