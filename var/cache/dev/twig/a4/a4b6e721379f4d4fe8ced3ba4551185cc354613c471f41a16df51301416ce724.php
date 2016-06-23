<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d2c5d4f36e73c09c5b0d762512224941327faa2792eb905521666108fa2aa192 extends Twig_Template
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
        $__internal_e696e3daf52dc966fa2816001266528ede59833c3950b4d813d563a0fe5e86c2 = $this->env->getExtension("native_profiler");
        $__internal_e696e3daf52dc966fa2816001266528ede59833c3950b4d813d563a0fe5e86c2->enter($__internal_e696e3daf52dc966fa2816001266528ede59833c3950b4d813d563a0fe5e86c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e696e3daf52dc966fa2816001266528ede59833c3950b4d813d563a0fe5e86c2->leave($__internal_e696e3daf52dc966fa2816001266528ede59833c3950b4d813d563a0fe5e86c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0f895df5fab5b7fa0b6c9b1b282eb2007f1295dcd34f8d2d2f3279c8ee23fcc = $this->env->getExtension("native_profiler");
        $__internal_f0f895df5fab5b7fa0b6c9b1b282eb2007f1295dcd34f8d2d2f3279c8ee23fcc->enter($__internal_f0f895df5fab5b7fa0b6c9b1b282eb2007f1295dcd34f8d2d2f3279c8ee23fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0f895df5fab5b7fa0b6c9b1b282eb2007f1295dcd34f8d2d2f3279c8ee23fcc->leave($__internal_f0f895df5fab5b7fa0b6c9b1b282eb2007f1295dcd34f8d2d2f3279c8ee23fcc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5c753077f72d9bb7a16011b750dc84c1ee2fdae2ccbcec602b60e0053f30bcd = $this->env->getExtension("native_profiler");
        $__internal_d5c753077f72d9bb7a16011b750dc84c1ee2fdae2ccbcec602b60e0053f30bcd->enter($__internal_d5c753077f72d9bb7a16011b750dc84c1ee2fdae2ccbcec602b60e0053f30bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5c753077f72d9bb7a16011b750dc84c1ee2fdae2ccbcec602b60e0053f30bcd->leave($__internal_d5c753077f72d9bb7a16011b750dc84c1ee2fdae2ccbcec602b60e0053f30bcd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ba6a84203e2d4d432257f24aabc0a8b81fa2e681a146e993c757580c70fa9a4 = $this->env->getExtension("native_profiler");
        $__internal_4ba6a84203e2d4d432257f24aabc0a8b81fa2e681a146e993c757580c70fa9a4->enter($__internal_4ba6a84203e2d4d432257f24aabc0a8b81fa2e681a146e993c757580c70fa9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ba6a84203e2d4d432257f24aabc0a8b81fa2e681a146e993c757580c70fa9a4->leave($__internal_4ba6a84203e2d4d432257f24aabc0a8b81fa2e681a146e993c757580c70fa9a4_prof);

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
