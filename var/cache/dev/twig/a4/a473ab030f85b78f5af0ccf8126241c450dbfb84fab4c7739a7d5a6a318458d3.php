<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e095fab495918bf08ae7c7bc94561bbb08c3a2ee4371529d222f2fa9eb410952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43b44a9c6d82c661b4f159537353db26c051c20b88fb8184dde253478dcaaa58 = $this->env->getExtension("native_profiler");
        $__internal_43b44a9c6d82c661b4f159537353db26c051c20b88fb8184dde253478dcaaa58->enter($__internal_43b44a9c6d82c661b4f159537353db26c051c20b88fb8184dde253478dcaaa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43b44a9c6d82c661b4f159537353db26c051c20b88fb8184dde253478dcaaa58->leave($__internal_43b44a9c6d82c661b4f159537353db26c051c20b88fb8184dde253478dcaaa58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20d745ea12cb93efc578bcfe4da59082e7a8646d55f27a62f752e5386ec12b7b = $this->env->getExtension("native_profiler");
        $__internal_20d745ea12cb93efc578bcfe4da59082e7a8646d55f27a62f752e5386ec12b7b->enter($__internal_20d745ea12cb93efc578bcfe4da59082e7a8646d55f27a62f752e5386ec12b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_20d745ea12cb93efc578bcfe4da59082e7a8646d55f27a62f752e5386ec12b7b->leave($__internal_20d745ea12cb93efc578bcfe4da59082e7a8646d55f27a62f752e5386ec12b7b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_264c8610bb80caf4d6339fb125e152dba68a3e24248e2c98790e84e7bdb289ec = $this->env->getExtension("native_profiler");
        $__internal_264c8610bb80caf4d6339fb125e152dba68a3e24248e2c98790e84e7bdb289ec->enter($__internal_264c8610bb80caf4d6339fb125e152dba68a3e24248e2c98790e84e7bdb289ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_264c8610bb80caf4d6339fb125e152dba68a3e24248e2c98790e84e7bdb289ec->leave($__internal_264c8610bb80caf4d6339fb125e152dba68a3e24248e2c98790e84e7bdb289ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
