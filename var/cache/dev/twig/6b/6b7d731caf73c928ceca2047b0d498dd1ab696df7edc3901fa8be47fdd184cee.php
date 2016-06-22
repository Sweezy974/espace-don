<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_b62c467afc8994769581e78e8c5e38572aebb79f201ba71736e27d05743e3d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_333268bfff987dfb8f9994e3bcc20749302e8eaa0be78f335978e10a016e9c73 = $this->env->getExtension("native_profiler");
        $__internal_333268bfff987dfb8f9994e3bcc20749302e8eaa0be78f335978e10a016e9c73->enter($__internal_333268bfff987dfb8f9994e3bcc20749302e8eaa0be78f335978e10a016e9c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_333268bfff987dfb8f9994e3bcc20749302e8eaa0be78f335978e10a016e9c73->leave($__internal_333268bfff987dfb8f9994e3bcc20749302e8eaa0be78f335978e10a016e9c73_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0362b040a2843385f98aae71809b9e7a2b540e40a28d12a4bbc71b72ee6db9e = $this->env->getExtension("native_profiler");
        $__internal_c0362b040a2843385f98aae71809b9e7a2b540e40a28d12a4bbc71b72ee6db9e->enter($__internal_c0362b040a2843385f98aae71809b9e7a2b540e40a28d12a4bbc71b72ee6db9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c0362b040a2843385f98aae71809b9e7a2b540e40a28d12a4bbc71b72ee6db9e->leave($__internal_c0362b040a2843385f98aae71809b9e7a2b540e40a28d12a4bbc71b72ee6db9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
