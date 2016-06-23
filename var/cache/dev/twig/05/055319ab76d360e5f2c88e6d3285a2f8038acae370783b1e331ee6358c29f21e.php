<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c694efb34de33c45f7df85d171b4e08c5644c24a6475ea3035b304fa2d1c2d65 extends Twig_Template
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
        $__internal_fc84aaa74b8851cfd9aac4e05f5dbfe097e753f710a7895576ef4210b9ca183e = $this->env->getExtension("native_profiler");
        $__internal_fc84aaa74b8851cfd9aac4e05f5dbfe097e753f710a7895576ef4210b9ca183e->enter($__internal_fc84aaa74b8851cfd9aac4e05f5dbfe097e753f710a7895576ef4210b9ca183e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc84aaa74b8851cfd9aac4e05f5dbfe097e753f710a7895576ef4210b9ca183e->leave($__internal_fc84aaa74b8851cfd9aac4e05f5dbfe097e753f710a7895576ef4210b9ca183e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dca2498ce80577cf62f21e127bc9f2d3e9858b141c3c68fa9fd6910794a728d = $this->env->getExtension("native_profiler");
        $__internal_7dca2498ce80577cf62f21e127bc9f2d3e9858b141c3c68fa9fd6910794a728d->enter($__internal_7dca2498ce80577cf62f21e127bc9f2d3e9858b141c3c68fa9fd6910794a728d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


<style>

.wrapper{
    margin-top: 100px;
    background-color: #fff;
    height: 475px;
    border-radius: 5px;
    padding: 15px 50px 25px;
    border-top: 6px solid #CE2347;

    font-weight: bold;
    font-family: \"arial black\",;
    /*Animation fenetre*/
    transition: all .3s ease-in;
}
.wrapper:hover{
    /*Animation formulaire*/
    transition: all .9s ease-in-out;

    border-top: 6px solid dodgerblue;
}
.wrapper h3{
    font-weight: bold;
    font-family: \"arial black\",;
}
html body form .btn-primary{
    background-color: crimson;
    border-color: white;
}
body form label{
    margin-bottom: 10px;
}
html body form .btn-primary:hover{
    /*background-color:darkslategray;*/
    background-color:darkcyan;
}
.no-compte{
    color: white;
    text-decoration: none;
    padding-top: 15px;
}
.no-compte>a{
    text-decoration: none;
    color: white;
}
.no-compte a:hover{
    text-decoration:underline;
    color: white;
    border-bottom: 1px solid #FF0000;
}
.btn-primary a:hover{
    text-decoration: none;
    color: white;
}
.btn-primary a{
    text-decoration: none;
    color: white;
}
.oblig{
    font-size: 10px;
}




</style>
<!--<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"wrapper\">
                <h3 class=\"text-center\">Inscription Particulier</h3>


                <form action=\"form\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">

                            <label for=\"exampleInputEmail1\">Nom *</label>
                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer votre nom\" >
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">

                            <label for=\"exampleInputEmail1\">Prenom *</label>
                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer vottre prenom\" >
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                    <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Numero de telephone *</label>
                    <input type=\"number\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer votre numero tel\" >
                    </div>
                    </div>

                    <div class=\"col-md-6\">
                    <div class=\"form-group\">

                    <label for=\"exampleInputEmail1\">Adresse *</label>
                    <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer vottre adresse\"  value=\"";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "\">
                    </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">

                            <label for=\"exampleInputEmail1\">Pseudo *</label>
                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer un pseudo\" required value=\"";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "\">
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\">Adresse Email *</label>
                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer vottre email\" required>
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputPassword1\">Mot de passe *</label>
                            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"mot de passe\" required value=\"";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "\">
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputPassword1\">Confirmer mot de passe *</label>
                            <input type=\"password\" class=\"form-control\" id=\"inputPasswordConfirm\" data-match=\"#inputPassword\" data-match-error=\"Votre mot de pass ne corespond pas\" placeholder=\"Confirm\" required value=\"";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "\">

                        </div>
                    </div>


                    <div class=\"col-md-12\">
                        <em class=\"oblig\">(*)Obligatoire</em>
                    </div>

                    <div class=\"col-md-6\">
                        <button type=\"submit\" class=\"btn btn-primary btn1\">S'inscrire</button>
                        <button type=\"submit\" class=\"btn btn-primary\"><a href=\"../pages/page_selected.html\">Annuler</a></button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>-->


<div class=\"col-md-12 text-center\">
<input type=\"submit\" class=\" btn-primary\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>








";
        // line 211
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_7dca2498ce80577cf62f21e127bc9f2d3e9858b141c3c68fa9fd6910794a728d->leave($__internal_7dca2498ce80577cf62f21e127bc9f2d3e9858b141c3c68fa9fd6910794a728d_prof);

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
        return array (  275 => 211,  262 => 201,  235 => 177,  225 => 170,  208 => 156,  197 => 148,  88 => 42,  79 => 36,  69 => 29,  58 => 21,  40 => 6,  34 => 5,  11 => 1,);
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
/* */
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
/* <style>*/
/* */
/* .wrapper{*/
/*     margin-top: 100px;*/
/*     background-color: #fff;*/
/*     height: 475px;*/
/*     border-radius: 5px;*/
/*     padding: 15px 50px 25px;*/
/*     border-top: 6px solid #CE2347;*/
/* */
/*     font-weight: bold;*/
/*     font-family: "arial black",;*/
/*     /*Animation fenetre*//* */
/*     transition: all .3s ease-in;*/
/* }*/
/* .wrapper:hover{*/
/*     /*Animation formulaire*//* */
/*     transition: all .9s ease-in-out;*/
/* */
/*     border-top: 6px solid dodgerblue;*/
/* }*/
/* .wrapper h3{*/
/*     font-weight: bold;*/
/*     font-family: "arial black",;*/
/* }*/
/* html body form .btn-primary{*/
/*     background-color: crimson;*/
/*     border-color: white;*/
/* }*/
/* body form label{*/
/*     margin-bottom: 10px;*/
/* }*/
/* html body form .btn-primary:hover{*/
/*     /*background-color:darkslategray;*//* */
/*     background-color:darkcyan;*/
/* }*/
/* .no-compte{*/
/*     color: white;*/
/*     text-decoration: none;*/
/*     padding-top: 15px;*/
/* }*/
/* .no-compte>a{*/
/*     text-decoration: none;*/
/*     color: white;*/
/* }*/
/* .no-compte a:hover{*/
/*     text-decoration:underline;*/
/*     color: white;*/
/*     border-bottom: 1px solid #FF0000;*/
/* }*/
/* .btn-primary a:hover{*/
/*     text-decoration: none;*/
/*     color: white;*/
/* }*/
/* .btn-primary a{*/
/*     text-decoration: none;*/
/*     color: white;*/
/* }*/
/* .oblig{*/
/*     font-size: 10px;*/
/* }*/
/* */
/* */
/* */
/* */
/* </style>*/
/* <!--<div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-6 col-md-offset-3">*/
/*             <div class="wrapper">*/
/*                 <h3 class="text-center">Inscription Particulier</h3>*/
/* */
/* */
/*                 <form action="form">*/
/*                     <div class="col-md-6">*/
/*                         <div class="form-group">*/
/* */
/*                             <label for="exampleInputEmail1">Nom *</label>*/
/*                             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre nom" >*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6">*/
/*                         <div class="form-group">*/
/* */
/*                             <label for="exampleInputEmail1">Prenom *</label>*/
/*                             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer vottre prenom" >*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6">*/
/*                     <div class="form-group">*/
/*                     <label for="exampleInputEmail1">Numero de telephone *</label>*/
/*                     <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre numero tel" >*/
/*                     </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6">*/
/*                     <div class="form-group">*/
/* */
/*                     <label for="exampleInputEmail1">Adresse *</label>*/
/*                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer vottre adresse"  value="{{form_row(form.email)}}">*/
/*                     </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6">*/
/*                         <div class="form-group">*/
/* */
/*                             <label for="exampleInputEmail1">Pseudo *</label>*/
/*                             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer un pseudo" required value="{{form_row(form.username)}}">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6">*/
/*                         <div class="form-group">*/
/*                             <label for="exampleInputEmail1">Adresse Email *</label>*/
/*                             <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer vottre email" required>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6">*/
/*                         <div class="form-group">*/
/*                             <label for="exampleInputPassword1">Mot de passe *</label>*/
/*                             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="mot de passe" required value="{{form_row(form.plainPassword.first)}}">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6">*/
/*                         <div class="form-group">*/
/*                             <label for="exampleInputPassword1">Confirmer mot de passe *</label>*/
/*                             <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Votre mot de pass ne corespond pas" placeholder="Confirm" required value="{{form_row(form.plainPassword.second)}}">*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="col-md-12">*/
/*                         <em class="oblig">(*)Obligatoire</em>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6">*/
/*                         <button type="submit" class="btn btn-primary btn1">S'inscrire</button>*/
/*                         <button type="submit" class="btn btn-primary"><a href="../pages/page_selected.html">Annuler</a></button>*/
/*                     </div>*/
/* */
/* */
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>-->*/
/* */
/* */
/* <div class="col-md-12 text-center">*/
/* <input type="submit" class=" btn-primary" value="{{ 'registration.submit'|trans }}" />*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
