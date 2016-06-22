<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_47f39507e5f756ec85bcb2e7c77833ca39680b882420a4a7df790f6e0660092d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2be268c44e4988295196b9451a517c0e2b7f3f487e443c4baac7c13c137d07e8 = $this->env->getExtension("native_profiler");
        $__internal_2be268c44e4988295196b9451a517c0e2b7f3f487e443c4baac7c13c137d07e8->enter($__internal_2be268c44e4988295196b9451a517c0e2b7f3f487e443c4baac7c13c137d07e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be268c44e4988295196b9451a517c0e2b7f3f487e443c4baac7c13c137d07e8->leave($__internal_2be268c44e4988295196b9451a517c0e2b7f3f487e443c4baac7c13c137d07e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa780a82bb23791cd958cfc9da6b0e32086c45b15b58809803121082c6075a38 = $this->env->getExtension("native_profiler");
        $__internal_aa780a82bb23791cd958cfc9da6b0e32086c45b15b58809803121082c6075a38->enter($__internal_aa780a82bb23791cd958cfc9da6b0e32086c45b15b58809803121082c6075a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_aa780a82bb23791cd958cfc9da6b0e32086c45b15b58809803121082c6075a38->leave($__internal_aa780a82bb23791cd958cfc9da6b0e32086c45b15b58809803121082c6075a38_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ddf36f3bd5ff82c624f6fbb0974688a0cce65d486742a9af96ba00609f6d13c3 = $this->env->getExtension("native_profiler");
        $__internal_ddf36f3bd5ff82c624f6fbb0974688a0cce65d486742a9af96ba00609f6d13c3->enter($__internal_ddf36f3bd5ff82c624f6fbb0974688a0cce65d486742a9af96ba00609f6d13c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ddf36f3bd5ff82c624f6fbb0974688a0cce65d486742a9af96ba00609f6d13c3->leave($__internal_ddf36f3bd5ff82c624f6fbb0974688a0cce65d486742a9af96ba00609f6d13c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e62dc1881e56eda21214f4ead67ded79e3cab17fe50f481b2c84100bfa24f2f = $this->env->getExtension("native_profiler");
        $__internal_8e62dc1881e56eda21214f4ead67ded79e3cab17fe50f481b2c84100bfa24f2f->enter($__internal_8e62dc1881e56eda21214f4ead67ded79e3cab17fe50f481b2c84100bfa24f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8e62dc1881e56eda21214f4ead67ded79e3cab17fe50f481b2c84100bfa24f2f->leave($__internal_8e62dc1881e56eda21214f4ead67ded79e3cab17fe50f481b2c84100bfa24f2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
