<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_4743ed966de3fe5b1d8bf9964dd708678e96a34b77544b9ebaed098edaafbd40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc2195712c4ea37505780d86e54ce4583b217b515c15574709bbda9eb836902e = $this->env->getExtension("native_profiler");
        $__internal_dc2195712c4ea37505780d86e54ce4583b217b515c15574709bbda9eb836902e->enter($__internal_dc2195712c4ea37505780d86e54ce4583b217b515c15574709bbda9eb836902e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_dc2195712c4ea37505780d86e54ce4583b217b515c15574709bbda9eb836902e->leave($__internal_dc2195712c4ea37505780d86e54ce4583b217b515c15574709bbda9eb836902e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
