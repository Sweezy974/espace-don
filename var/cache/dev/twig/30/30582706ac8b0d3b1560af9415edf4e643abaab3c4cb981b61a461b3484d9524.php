<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_003fb9de6ce69c61dddfc0aa4c39bfd95e808e34edfcdb9c25dfa844c8ed785a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Registration/register_content.html.twig", 1);
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
        $__internal_135ecc086bde96db7eeee6999a31391f2550b01879734b31edba0eee63206e99 = $this->env->getExtension("native_profiler");
        $__internal_135ecc086bde96db7eeee6999a31391f2550b01879734b31edba0eee63206e99->enter($__internal_135ecc086bde96db7eeee6999a31391f2550b01879734b31edba0eee63206e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_135ecc086bde96db7eeee6999a31391f2550b01879734b31edba0eee63206e99->leave($__internal_135ecc086bde96db7eeee6999a31391f2550b01879734b31edba0eee63206e99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c815b736e106ba334e6764cee9cd31539ae5d539143714c3db5fa4a138c7c261 = $this->env->getExtension("native_profiler");
        $__internal_c815b736e106ba334e6764cee9cd31539ae5d539143714c3db5fa4a138c7c261->enter($__internal_c815b736e106ba334e6764cee9cd31539ae5d539143714c3db5fa4a138c7c261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
   
    
    
    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-3\">
                    <div class=\"wrapper\">
                        <h3 class=\"text-center\">Inscription Association</h3>


                       
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">

                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                                </div>
                            </div> 

                            <div class=\"col-md-12\">
                                <div class=\"form-group\">

                                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                                </div>
                            </div> 


                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                                </div>
                            </div> 
                            
                               <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                     ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                                </div>
                            </div>

                            

                          



                           
    <div class=\"col-md-6\">
        <input type=\"submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    
    </div>
                </div>
        </div>
</div>
";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_c815b736e106ba334e6764cee9cd31539ae5d539143714c3db5fa4a138c7c261->leave($__internal_c815b736e106ba334e6764cee9cd31539ae5d539143714c3db5fa4a138c7c261_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 60,  102 => 53,  87 => 41,  78 => 35,  68 => 28,  58 => 21,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     {% block body %}*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*    */
/*     */
/*     */
/*     <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-10 col-md-offset-3">*/
/*                     <div class="wrapper">*/
/*                         <h3 class="text-center">Inscription Association</h3>*/
/* */
/* */
/*                        */
/*                             <div class="col-md-12">*/
/*                                 <div class="form-group">*/
/* */
/*                                     {{form_row(form.email)}}*/
/*                                 </div>*/
/*                             </div> */
/* */
/*                             <div class="col-md-12">*/
/*                                 <div class="form-group">*/
/* */
/*                                     {{form_row(form.username)}}*/
/*                                 </div>*/
/*                             </div> */
/* */
/* */
/*                             <div class="col-md-12">*/
/*                                 <div class="form-group">*/
/*                                     {{form_row(form.plainPassword.first)}}*/
/*                                 </div>*/
/*                             </div> */
/*                             */
/*                                <div class="col-md-12">*/
/*                                 <div class="form-group">*/
/*                                      {{form_row(form.plainPassword.second)}}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             */
/* */
/*                           */
/* */
/* */
/* */
/*                            */
/*     <div class="col-md-6">*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/*     */
/*     </div>*/
/*                 </div>*/
/*         </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
