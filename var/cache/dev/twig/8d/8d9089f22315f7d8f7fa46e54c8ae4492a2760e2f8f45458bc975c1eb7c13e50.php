<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_867dcf95f9ea0c3c8d611e5006a945ecc1f3d9cfcd95300443bd2c6667829590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ff2c1372343218e2d0d21b40a35d1306b5f3a0f736e46917ce43df0e1595580 = $this->env->getExtension("native_profiler");
        $__internal_7ff2c1372343218e2d0d21b40a35d1306b5f3a0f736e46917ce43df0e1595580->enter($__internal_7ff2c1372343218e2d0d21b40a35d1306b5f3a0f736e46917ce43df0e1595580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff2c1372343218e2d0d21b40a35d1306b5f3a0f736e46917ce43df0e1595580->leave($__internal_7ff2c1372343218e2d0d21b40a35d1306b5f3a0f736e46917ce43df0e1595580_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_788569985587b25b0799290c5e0004324ce84e5cb61347a315a3e97c7c005f68 = $this->env->getExtension("native_profiler");
        $__internal_788569985587b25b0799290c5e0004324ce84e5cb61347a315a3e97c7c005f68->enter($__internal_788569985587b25b0799290c5e0004324ce84e5cb61347a315a3e97c7c005f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "



    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-3\">
                    <div class=\"wrapper\" style=\"background-color:#34536d;\">
                        <h3 class=\"text-center\">Inscription Association</h3>



                            <div class=\"col-md-6\">
                                <div class=\"form-group\">

                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"form-group\">

                                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                                </div>
                            </div>


                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                                </div>
                            </div>

                               <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                     ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                                </div>
                            </div>










    <div class=\"col-md-6\">
        <input type=\"submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_788569985587b25b0799290c5e0004324ce84e5cb61347a315a3e97c7c005f68->leave($__internal_788569985587b25b0799290c5e0004324ce84e5cb61347a315a3e97c7c005f68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 58,  104 => 55,  87 => 41,  78 => 35,  68 => 28,  58 => 21,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     {% block body %}*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/* */
/* */
/*     <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-10 col-md-offset-3">*/
/*                     <div class="wrapper" style="background-color:#34536d;">*/
/*                         <h3 class="text-center">Inscription Association</h3>*/
/* */
/* */
/* */
/*                             <div class="col-md-6">*/
/*                                 <div class="form-group">*/
/* */
/*                                     {{form_row(form.email)}}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="col-md-6">*/
/*                                 <div class="form-group">*/
/* */
/*                                     {{form_row(form.username)}}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                             <div class="col-md-6">*/
/*                                 <div class="form-group">*/
/*                                     {{form_row(form.plainPassword.first)}}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                                <div class="col-md-6">*/
/*                                 <div class="form-group">*/
/*                                      {{form_row(form.plainPassword.second)}}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     <div class="col-md-6">*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
