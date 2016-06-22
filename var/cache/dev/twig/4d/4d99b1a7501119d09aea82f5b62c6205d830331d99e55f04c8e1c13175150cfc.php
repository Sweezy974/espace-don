<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_01f80e474cf90bf6f5bafb07205611cc98ba504f4694a3dab5660ce10aa5626b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_506216b99939196f8a64a4132e4d8936f36de0de3b6e2692b81ac88f513c4474 = $this->env->getExtension("native_profiler");
        $__internal_506216b99939196f8a64a4132e4d8936f36de0de3b6e2692b81ac88f513c4474->enter($__internal_506216b99939196f8a64a4132e4d8936f36de0de3b6e2692b81ac88f513c4474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_506216b99939196f8a64a4132e4d8936f36de0de3b6e2692b81ac88f513c4474->leave($__internal_506216b99939196f8a64a4132e4d8936f36de0de3b6e2692b81ac88f513c4474_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99ca4bc58da9b4f6cc6aa45648f78e0bd53f1fc911bdfd9132b3f64ec20367b3 = $this->env->getExtension("native_profiler");
        $__internal_99ca4bc58da9b4f6cc6aa45648f78e0bd53f1fc911bdfd9132b3f64ec20367b3->enter($__internal_99ca4bc58da9b4f6cc6aa45648f78e0bd53f1fc911bdfd9132b3f64ec20367b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_99ca4bc58da9b4f6cc6aa45648f78e0bd53f1fc911bdfd9132b3f64ec20367b3->leave($__internal_99ca4bc58da9b4f6cc6aa45648f78e0bd53f1fc911bdfd9132b3f64ec20367b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
