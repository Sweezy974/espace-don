<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8448a573e1232616829d9ae0c83dd5c88c65c96a12afd6d54406628f88671325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eac2fed7285cb0a19e2a6e0009ce00d8e599ae4d173301460e6376d33a70cfd5 = $this->env->getExtension("native_profiler");
        $__internal_eac2fed7285cb0a19e2a6e0009ce00d8e599ae4d173301460e6376d33a70cfd5->enter($__internal_eac2fed7285cb0a19e2a6e0009ce00d8e599ae4d173301460e6376d33a70cfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eac2fed7285cb0a19e2a6e0009ce00d8e599ae4d173301460e6376d33a70cfd5->leave($__internal_eac2fed7285cb0a19e2a6e0009ce00d8e599ae4d173301460e6376d33a70cfd5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2dd644f5876a5000db83b6cc11323eb0516e6b9faf5f00f749f0110002282580 = $this->env->getExtension("native_profiler");
        $__internal_2dd644f5876a5000db83b6cc11323eb0516e6b9faf5f00f749f0110002282580->enter($__internal_2dd644f5876a5000db83b6cc11323eb0516e6b9faf5f00f749f0110002282580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2dd644f5876a5000db83b6cc11323eb0516e6b9faf5f00f749f0110002282580->leave($__internal_2dd644f5876a5000db83b6cc11323eb0516e6b9faf5f00f749f0110002282580_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
