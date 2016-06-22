<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2f68f35c27ebd470ae431f9f29e216b4911809eaf3a5c2989dd61fca20aba6da extends Twig_Template
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
        $__internal_1c42aaca89e2890851100a85d23028bc8e927e68e1e6a6a0c63c2af92e277766 = $this->env->getExtension("native_profiler");
        $__internal_1c42aaca89e2890851100a85d23028bc8e927e68e1e6a6a0c63c2af92e277766->enter($__internal_1c42aaca89e2890851100a85d23028bc8e927e68e1e6a6a0c63c2af92e277766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_1c42aaca89e2890851100a85d23028bc8e927e68e1e6a6a0c63c2af92e277766->leave($__internal_1c42aaca89e2890851100a85d23028bc8e927e68e1e6a6a0c63c2af92e277766_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc5093a90627ebe23294ba89d1c6b53967c578998c0b19d85fe3c0c0b89ae1e8 = $this->env->getExtension("native_profiler");
        $__internal_fc5093a90627ebe23294ba89d1c6b53967c578998c0b19d85fe3c0c0b89ae1e8->enter($__internal_fc5093a90627ebe23294ba89d1c6b53967c578998c0b19d85fe3c0c0b89ae1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        echo "              ";
        
        $__internal_fc5093a90627ebe23294ba89d1c6b53967c578998c0b19d85fe3c0c0b89ae1e8->leave($__internal_fc5093a90627ebe23294ba89d1c6b53967c578998c0b19d85fe3c0c0b89ae1e8_prof);

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
