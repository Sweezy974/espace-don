<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0793337a1efcd9c18d19f617cc118c6db0c6eb3f05a525481b32001e0d4e76d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_76a6d8d3e7c5670454faaa3c5ee9f8aa158e16903569c694b073a834f4501af1 = $this->env->getExtension("native_profiler");
        $__internal_76a6d8d3e7c5670454faaa3c5ee9f8aa158e16903569c694b073a834f4501af1->enter($__internal_76a6d8d3e7c5670454faaa3c5ee9f8aa158e16903569c694b073a834f4501af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76a6d8d3e7c5670454faaa3c5ee9f8aa158e16903569c694b073a834f4501af1->leave($__internal_76a6d8d3e7c5670454faaa3c5ee9f8aa158e16903569c694b073a834f4501af1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_771a7d635bc4d5adb996fd64b8a49dfd83f510f58ed4cf286afbdb9fc614c6df = $this->env->getExtension("native_profiler");
        $__internal_771a7d635bc4d5adb996fd64b8a49dfd83f510f58ed4cf286afbdb9fc614c6df->enter($__internal_771a7d635bc4d5adb996fd64b8a49dfd83f510f58ed4cf286afbdb9fc614c6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_771a7d635bc4d5adb996fd64b8a49dfd83f510f58ed4cf286afbdb9fc614c6df->leave($__internal_771a7d635bc4d5adb996fd64b8a49dfd83f510f58ed4cf286afbdb9fc614c6df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6ca825d63f7c68ec03dba5a8ef27c01a627c92a8860605f5d6f1761eff7e8b5 = $this->env->getExtension("native_profiler");
        $__internal_e6ca825d63f7c68ec03dba5a8ef27c01a627c92a8860605f5d6f1761eff7e8b5->enter($__internal_e6ca825d63f7c68ec03dba5a8ef27c01a627c92a8860605f5d6f1761eff7e8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6ca825d63f7c68ec03dba5a8ef27c01a627c92a8860605f5d6f1761eff7e8b5->leave($__internal_e6ca825d63f7c68ec03dba5a8ef27c01a627c92a8860605f5d6f1761eff7e8b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4992955df6f4a13fb8d159bf77c69917a69a493112dd56836a9016e10d0a8e0b = $this->env->getExtension("native_profiler");
        $__internal_4992955df6f4a13fb8d159bf77c69917a69a493112dd56836a9016e10d0a8e0b->enter($__internal_4992955df6f4a13fb8d159bf77c69917a69a493112dd56836a9016e10d0a8e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4992955df6f4a13fb8d159bf77c69917a69a493112dd56836a9016e10d0a8e0b->leave($__internal_4992955df6f4a13fb8d159bf77c69917a69a493112dd56836a9016e10d0a8e0b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
