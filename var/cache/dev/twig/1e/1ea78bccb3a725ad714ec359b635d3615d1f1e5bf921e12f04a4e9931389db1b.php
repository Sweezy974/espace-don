<?php

/* @Donation/Default/index.html.twig */
class __TwigTemplate_a660af17a16a3abbd338271ce87b4667090e8f80c082f299ae78818dde728a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Donation/Default/index.html.twig", 1);
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
        $__internal_00d515d45321963b59a4d580105a3b9243eb298bca9d03db0faaf528a9c0a6c6 = $this->env->getExtension("native_profiler");
        $__internal_00d515d45321963b59a4d580105a3b9243eb298bca9d03db0faaf528a9c0a6c6->enter($__internal_00d515d45321963b59a4d580105a3b9243eb298bca9d03db0faaf528a9c0a6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Donation/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00d515d45321963b59a4d580105a3b9243eb298bca9d03db0faaf528a9c0a6c6->leave($__internal_00d515d45321963b59a4d580105a3b9243eb298bca9d03db0faaf528a9c0a6c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ba94a229af135f8e6ef5278813dcc55001e00897eb9c656bba1d6bea6659020 = $this->env->getExtension("native_profiler");
        $__internal_7ba94a229af135f8e6ef5278813dcc55001e00897eb9c656bba1d6bea6659020->enter($__internal_7ba94a229af135f8e6ef5278813dcc55001e00897eb9c656bba1d6bea6659020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-3\">

                    <div class=\"wrapper\">
                        <h3 class=\"text-center\">Inscription</h3>
                        <button type=\"submit\" class=\"btn btn-primary btn1\"><a href=\"\">Vous etes un particulier ? </a></button>
                        <button type=\"submit\" class=\"btn btn-primary btn2\"><a href=\"\">Ou une association ? </a></button>
                    </div>

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p class=\"no-compte text-center\"><em>Vous possedez deja un compte ? </em><a href=\"../form.html\"><em>Connectez-vous</em></a></p>
                </div>
            </div>
        </div>

";
        
        $__internal_7ba94a229af135f8e6ef5278813dcc55001e00897eb9c656bba1d6bea6659020->leave($__internal_7ba94a229af135f8e6ef5278813dcc55001e00897eb9c656bba1d6bea6659020_prof);

    }

    public function getTemplateName()
    {
        return "@Donation/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-10 col-md-offset-3">*/
/* */
/*                     <div class="wrapper">*/
/*                         <h3 class="text-center">Inscription</h3>*/
/*                         <button type="submit" class="btn btn-primary btn1"><a href="">Vous etes un particulier ? </a></button>*/
/*                         <button type="submit" class="btn btn-primary btn2"><a href="">Ou une association ? </a></button>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <p class="no-compte text-center"><em>Vous possedez deja un compte ? </em><a href="../form.html"><em>Connectez-vous</em></a></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
/* */
