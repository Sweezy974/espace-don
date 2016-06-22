<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_da75b2bc4e7c00fcdab8fbcaeabcdaf3c4de737acfda1f3c219d79c0891b4877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ec03d1efc711403ed79a9ea360f8844f7cbad9e6c09a258a5ec32141075ee5a = $this->env->getExtension("native_profiler");
        $__internal_1ec03d1efc711403ed79a9ea360f8844f7cbad9e6c09a258a5ec32141075ee5a->enter($__internal_1ec03d1efc711403ed79a9ea360f8844f7cbad9e6c09a258a5ec32141075ee5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec03d1efc711403ed79a9ea360f8844f7cbad9e6c09a258a5ec32141075ee5a->leave($__internal_1ec03d1efc711403ed79a9ea360f8844f7cbad9e6c09a258a5ec32141075ee5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f0ad39a93d2adeff454777eb5c6a6798677ffb992c5c0a3f178558f1a9735da = $this->env->getExtension("native_profiler");
        $__internal_2f0ad39a93d2adeff454777eb5c6a6798677ffb992c5c0a3f178558f1a9735da->enter($__internal_2f0ad39a93d2adeff454777eb5c6a6798677ffb992c5c0a3f178558f1a9735da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f0ad39a93d2adeff454777eb5c6a6798677ffb992c5c0a3f178558f1a9735da->leave($__internal_2f0ad39a93d2adeff454777eb5c6a6798677ffb992c5c0a3f178558f1a9735da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a0c7cef8c848c33e937c4d49d26e0a417e04cc7bfa42128d455f56c6eefc430 = $this->env->getExtension("native_profiler");
        $__internal_3a0c7cef8c848c33e937c4d49d26e0a417e04cc7bfa42128d455f56c6eefc430->enter($__internal_3a0c7cef8c848c33e937c4d49d26e0a417e04cc7bfa42128d455f56c6eefc430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a0c7cef8c848c33e937c4d49d26e0a417e04cc7bfa42128d455f56c6eefc430->leave($__internal_3a0c7cef8c848c33e937c4d49d26e0a417e04cc7bfa42128d455f56c6eefc430_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7aea9223c3f737472b4d08d32162532c0377703c6deba45f5ba6b7383906da0 = $this->env->getExtension("native_profiler");
        $__internal_e7aea9223c3f737472b4d08d32162532c0377703c6deba45f5ba6b7383906da0->enter($__internal_e7aea9223c3f737472b4d08d32162532c0377703c6deba45f5ba6b7383906da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e7aea9223c3f737472b4d08d32162532c0377703c6deba45f5ba6b7383906da0->leave($__internal_e7aea9223c3f737472b4d08d32162532c0377703c6deba45f5ba6b7383906da0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
