<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9c9bd69330c4ba18542a20da0a76b754dee7aaaebdcd9dce011cc4e1b6a20f3f extends Twig_Template
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
        $__internal_62c0151d03085a0b5b944195a47077a4a9da65c7291458db5522b80483499044 = $this->env->getExtension("native_profiler");
        $__internal_62c0151d03085a0b5b944195a47077a4a9da65c7291458db5522b80483499044->enter($__internal_62c0151d03085a0b5b944195a47077a4a9da65c7291458db5522b80483499044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c0151d03085a0b5b944195a47077a4a9da65c7291458db5522b80483499044->leave($__internal_62c0151d03085a0b5b944195a47077a4a9da65c7291458db5522b80483499044_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_542d16d53107bb7c97220b3a6df89e6a146ce23e213d123acacd08e32beeb38b = $this->env->getExtension("native_profiler");
        $__internal_542d16d53107bb7c97220b3a6df89e6a146ce23e213d123acacd08e32beeb38b->enter($__internal_542d16d53107bb7c97220b3a6df89e6a146ce23e213d123acacd08e32beeb38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_542d16d53107bb7c97220b3a6df89e6a146ce23e213d123acacd08e32beeb38b->leave($__internal_542d16d53107bb7c97220b3a6df89e6a146ce23e213d123acacd08e32beeb38b_prof);

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
