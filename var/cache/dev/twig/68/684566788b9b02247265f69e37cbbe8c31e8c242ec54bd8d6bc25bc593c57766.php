<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_3f471648b8dab72aa4dca0ac8014bf2dede2586188a3ddffa6b6558ed0eca304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_9e94c27d65fe76830d1e8e76ae844b90b7e4d254a43aa4dbecd6994a04721483 = $this->env->getExtension("native_profiler");
        $__internal_9e94c27d65fe76830d1e8e76ae844b90b7e4d254a43aa4dbecd6994a04721483->enter($__internal_9e94c27d65fe76830d1e8e76ae844b90b7e4d254a43aa4dbecd6994a04721483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e94c27d65fe76830d1e8e76ae844b90b7e4d254a43aa4dbecd6994a04721483->leave($__internal_9e94c27d65fe76830d1e8e76ae844b90b7e4d254a43aa4dbecd6994a04721483_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a97bd4107167d41cb9e14185210f6c7dec6be3c84c0c1929eb8f2d25682d56c4 = $this->env->getExtension("native_profiler");
        $__internal_a97bd4107167d41cb9e14185210f6c7dec6be3c84c0c1929eb8f2d25682d56c4->enter($__internal_a97bd4107167d41cb9e14185210f6c7dec6be3c84c0c1929eb8f2d25682d56c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a97bd4107167d41cb9e14185210f6c7dec6be3c84c0c1929eb8f2d25682d56c4->leave($__internal_a97bd4107167d41cb9e14185210f6c7dec6be3c84c0c1929eb8f2d25682d56c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
