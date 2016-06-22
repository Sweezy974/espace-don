<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_370ff6ff389b76c6e5a6b6dc1b86cd57287310d0960d244e0371dedefe92c6bd extends Twig_Template
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
        $__internal_e69dd26b2773a76f7c7a5ce363632b1064fa8ae8507795c20bf98a51532adaaf = $this->env->getExtension("native_profiler");
        $__internal_e69dd26b2773a76f7c7a5ce363632b1064fa8ae8507795c20bf98a51532adaaf->enter($__internal_e69dd26b2773a76f7c7a5ce363632b1064fa8ae8507795c20bf98a51532adaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e69dd26b2773a76f7c7a5ce363632b1064fa8ae8507795c20bf98a51532adaaf->leave($__internal_e69dd26b2773a76f7c7a5ce363632b1064fa8ae8507795c20bf98a51532adaaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_458b2d513c5c06763cab2883e5566d0c52137c807369c3d25c1a8a230fd82ad2 = $this->env->getExtension("native_profiler");
        $__internal_458b2d513c5c06763cab2883e5566d0c52137c807369c3d25c1a8a230fd82ad2->enter($__internal_458b2d513c5c06763cab2883e5566d0c52137c807369c3d25c1a8a230fd82ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_458b2d513c5c06763cab2883e5566d0c52137c807369c3d25c1a8a230fd82ad2->leave($__internal_458b2d513c5c06763cab2883e5566d0c52137c807369c3d25c1a8a230fd82ad2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_85251872160ebcb0e70121b6bc1daace3a424cf82ebbc72932316b9263493219 = $this->env->getExtension("native_profiler");
        $__internal_85251872160ebcb0e70121b6bc1daace3a424cf82ebbc72932316b9263493219->enter($__internal_85251872160ebcb0e70121b6bc1daace3a424cf82ebbc72932316b9263493219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_85251872160ebcb0e70121b6bc1daace3a424cf82ebbc72932316b9263493219->leave($__internal_85251872160ebcb0e70121b6bc1daace3a424cf82ebbc72932316b9263493219_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3a06aaec07f4b8edf8a0c5571983598c4f56721d5440f445b1f5f6e9d544f32 = $this->env->getExtension("native_profiler");
        $__internal_d3a06aaec07f4b8edf8a0c5571983598c4f56721d5440f445b1f5f6e9d544f32->enter($__internal_d3a06aaec07f4b8edf8a0c5571983598c4f56721d5440f445b1f5f6e9d544f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d3a06aaec07f4b8edf8a0c5571983598c4f56721d5440f445b1f5f6e9d544f32->leave($__internal_d3a06aaec07f4b8edf8a0c5571983598c4f56721d5440f445b1f5f6e9d544f32_prof);

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
