<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1be9b2db6bf28b09cbebd7287838805c83ceea85e17c5a64559d428ac4da1f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d973bb5198780c45ab9763d02c78090a807960f094150f4bc003f19f2e765a9 = $this->env->getExtension("native_profiler");
        $__internal_3d973bb5198780c45ab9763d02c78090a807960f094150f4bc003f19f2e765a9->enter($__internal_3d973bb5198780c45ab9763d02c78090a807960f094150f4bc003f19f2e765a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "  ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 2
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 3
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 4
                    echo "                      <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                          ";
                    // line 5
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                      </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "          ";
        }
        // line 10
        echo "
          <div>
              ";
        // line 12
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "          </div>
";
        
        $__internal_3d973bb5198780c45ab9763d02c78090a807960f094150f4bc003f19f2e765a9->leave($__internal_3d973bb5198780c45ab9763d02c78090a807960f094150f4bc003f19f2e765a9_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_365bde34c454b51b01c24507c8f641d130cbdb5200ccf89b1199646b0a7cff35 = $this->env->getExtension("native_profiler");
        $__internal_365bde34c454b51b01c24507c8f641d130cbdb5200ccf89b1199646b0a7cff35->enter($__internal_365bde34c454b51b01c24507c8f641d130cbdb5200ccf89b1199646b0a7cff35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        echo "              ";
        
        $__internal_365bde34c454b51b01c24507c8f641d130cbdb5200ccf89b1199646b0a7cff35->leave($__internal_365bde34c454b51b01c24507c8f641d130cbdb5200ccf89b1199646b0a7cff35_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  73 => 12,  65 => 14,  63 => 12,  59 => 10,  56 => 9,  50 => 8,  41 => 5,  36 => 4,  31 => 3,  26 => 2,  23 => 1,);
    }
}
/*   {% if app.request.hasPreviousSession %}*/
/*               {% for type, messages in app.session.flashbag.all() %}*/
/*                   {% for message in messages %}*/
/*                       <div class="flash-{{ type }}">*/
/*                           {{ message }}*/
/*                       </div>*/
/*                   {% endfor %}*/
/*               {% endfor %}*/
/*           {% endif %}*/
/* */
/*           <div>*/
/*               {% block fos_user_content %}*/
/*               {% endblock fos_user_content %}*/
/*           </div>*/
/* */
