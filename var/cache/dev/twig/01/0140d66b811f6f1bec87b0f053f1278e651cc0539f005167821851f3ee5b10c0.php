<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_be7cd7c38763dd9ecc98298083f73e07e2c605eade2853471f53d7fcf9314309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_013bbfedb65017d3fd0b884ae5c0faccf4678fd1ed8c1c741d70911c9e934110 = $this->env->getExtension("native_profiler");
        $__internal_013bbfedb65017d3fd0b884ae5c0faccf4678fd1ed8c1c741d70911c9e934110->enter($__internal_013bbfedb65017d3fd0b884ae5c0faccf4678fd1ed8c1c741d70911c9e934110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_013bbfedb65017d3fd0b884ae5c0faccf4678fd1ed8c1c741d70911c9e934110->leave($__internal_013bbfedb65017d3fd0b884ae5c0faccf4678fd1ed8c1c741d70911c9e934110_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ef9ea0aa7faab3e2d0364c9bb8c59a94e04d62d4cc2b4eaec0d833d1b6b1636 = $this->env->getExtension("native_profiler");
        $__internal_3ef9ea0aa7faab3e2d0364c9bb8c59a94e04d62d4cc2b4eaec0d833d1b6b1636->enter($__internal_3ef9ea0aa7faab3e2d0364c9bb8c59a94e04d62d4cc2b4eaec0d833d1b6b1636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-10 col-md-offset-3\">
<div class=\"wrapper\">
<h3 class=\"text-center\">Connexion</h3>
<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
<div class=\"form-group\">
    <input class=\"form-control\" type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"form-group\">
    <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <div class=\"form-group\">
    <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <div class=\"form-group\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"form-group\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    </div>
</form>
</div>
</div>
</div>



";
        
        $__internal_3ef9ea0aa7faab3e2d0364c9bb8c59a94e04d62d4cc2b4eaec0d833d1b6b1636->leave($__internal_3ef9ea0aa7faab3e2d0364c9bb8c59a94e04d62d4cc2b4eaec0d833d1b6b1636_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  84 => 27,  76 => 22,  70 => 19,  66 => 18,  61 => 16,  56 => 14,  48 => 8,  42 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="container">*/
/* <div class="row">*/
/* <div class="col-md-10 col-md-offset-3">*/
/* <div class="wrapper">*/
/* <h3 class="text-center">Connexion</h3>*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/* <div class="form-group">*/
/*     <input class="form-control" type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     <div class="form-group">*/
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input class="form-control" type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*     </div>*/
/*     <div class="form-group">*/
/*     <input class="btn btn-primary" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*     </div>*/
/*     </div>*/
/* </form>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
