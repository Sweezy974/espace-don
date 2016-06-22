<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b7ea74c81f9c0f63c4227fe62590865e915b75dc2039a08081e131f21319ddcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_e329cb5e7d5604ca6777d9a69fab5c15ed56613d61936de7ccc29a2948c4a521 = $this->env->getExtension("native_profiler");
        $__internal_e329cb5e7d5604ca6777d9a69fab5c15ed56613d61936de7ccc29a2948c4a521->enter($__internal_e329cb5e7d5604ca6777d9a69fab5c15ed56613d61936de7ccc29a2948c4a521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e329cb5e7d5604ca6777d9a69fab5c15ed56613d61936de7ccc29a2948c4a521->leave($__internal_e329cb5e7d5604ca6777d9a69fab5c15ed56613d61936de7ccc29a2948c4a521_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3852aca145eb7ebdbba1ac4bb65e83e52c3c146269d3be3a583414b04038c5b3 = $this->env->getExtension("native_profiler");
        $__internal_3852aca145eb7ebdbba1ac4bb65e83e52c3c146269d3be3a583414b04038c5b3->enter($__internal_3852aca145eb7ebdbba1ac4bb65e83e52c3c146269d3be3a583414b04038c5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3852aca145eb7ebdbba1ac4bb65e83e52c3c146269d3be3a583414b04038c5b3->leave($__internal_3852aca145eb7ebdbba1ac4bb65e83e52c3c146269d3be3a583414b04038c5b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5596c9bfb3de624202b1376958b3a38f482dfa36146e3d0e7ee16e3d37e5fca1 = $this->env->getExtension("native_profiler");
        $__internal_5596c9bfb3de624202b1376958b3a38f482dfa36146e3d0e7ee16e3d37e5fca1->enter($__internal_5596c9bfb3de624202b1376958b3a38f482dfa36146e3d0e7ee16e3d37e5fca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5596c9bfb3de624202b1376958b3a38f482dfa36146e3d0e7ee16e3d37e5fca1->leave($__internal_5596c9bfb3de624202b1376958b3a38f482dfa36146e3d0e7ee16e3d37e5fca1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
