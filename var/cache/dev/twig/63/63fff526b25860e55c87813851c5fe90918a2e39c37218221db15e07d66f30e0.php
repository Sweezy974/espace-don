<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_4034e2d0921b738650b4a6af4dba6e9cbea83d0e4b01dd6945db1ac70dddb369 extends Twig_Template
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
        $__internal_258f8dc9cdf03bebc4d7b60bff13c1f9110567f597684aa0d6042ec13d4dd615 = $this->env->getExtension("native_profiler");
        $__internal_258f8dc9cdf03bebc4d7b60bff13c1f9110567f597684aa0d6042ec13d4dd615->enter($__internal_258f8dc9cdf03bebc4d7b60bff13c1f9110567f597684aa0d6042ec13d4dd615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_258f8dc9cdf03bebc4d7b60bff13c1f9110567f597684aa0d6042ec13d4dd615->leave($__internal_258f8dc9cdf03bebc4d7b60bff13c1f9110567f597684aa0d6042ec13d4dd615_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d0a7889a70558bb758e7872929015a6c29d3d811863fa53572fb0d4a0927f28 = $this->env->getExtension("native_profiler");
        $__internal_3d0a7889a70558bb758e7872929015a6c29d3d811863fa53572fb0d4a0927f28->enter($__internal_3d0a7889a70558bb758e7872929015a6c29d3d811863fa53572fb0d4a0927f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "



    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-3\">
                    <div class=\"wrapper\">
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
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                                </div>
                            </div>


                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                                </div>
                            </div>

                               <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                     ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                                </div>
                            </div>










    <div class=\"col-md-12 text-center\">
        <input type=\"submit\" class=\" btn-primary\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_3d0a7889a70558bb758e7872929015a6c29d3d811863fa53572fb0d4a0927f28->leave($__internal_3d0a7889a70558bb758e7872929015a6c29d3d811863fa53572fb0d4a0927f28_prof);

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
        return array (  111 => 59,  105 => 56,  88 => 42,  79 => 36,  69 => 29,  58 => 21,  40 => 6,  34 => 5,  11 => 1,);
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
/*                     <div class="wrapper">*/
/*                         <h3 class="text-center">Inscription Association</h3>*/
/* */
/* */
/* */
/*                             <div class="col-md-6">*/
/*                                 <div class="form-group">*/
/* */
/*                                     {{form_row(form.email)}}*/
/*                                     */
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
/*     <div class="col-md-12 text-center">*/
/*         <input type="submit" class=" btn-primary" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
