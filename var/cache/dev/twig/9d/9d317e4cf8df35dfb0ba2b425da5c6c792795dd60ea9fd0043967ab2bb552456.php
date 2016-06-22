<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_aa4bd6048b6552bba50054246dd441123b321e8af2e8de0d379240bdd7cd8368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3477512f2ef692d90ec818d36d728e64a51e54d7cadfe8bf007bba06d3b85ed = $this->env->getExtension("native_profiler");
        $__internal_b3477512f2ef692d90ec818d36d728e64a51e54d7cadfe8bf007bba06d3b85ed->enter($__internal_b3477512f2ef692d90ec818d36d728e64a51e54d7cadfe8bf007bba06d3b85ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b3477512f2ef692d90ec818d36d728e64a51e54d7cadfe8bf007bba06d3b85ed->leave($__internal_b3477512f2ef692d90ec818d36d728e64a51e54d7cadfe8bf007bba06d3b85ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
