<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_a6c82914c490d1e9ac49126af713299d19e3dc87ac7ddbe9149d181fe510834b extends Twig_Template
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
        $__internal_b3ee34538c9a36ab1df9640af5561044964007dd6790344b6b556a3906c8e685 = $this->env->getExtension("native_profiler");
        $__internal_b3ee34538c9a36ab1df9640af5561044964007dd6790344b6b556a3906c8e685->enter($__internal_b3ee34538c9a36ab1df9640af5561044964007dd6790344b6b556a3906c8e685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_b3ee34538c9a36ab1df9640af5561044964007dd6790344b6b556a3906c8e685->leave($__internal_b3ee34538c9a36ab1df9640af5561044964007dd6790344b6b556a3906c8e685_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
