<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e340f742e57460ee693cb26b1d4f2c90a713796ea08694fa9c637c1b5eae8485 extends Twig_Template
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
        $__internal_ca9fdc70defe26e8fe2e45398d1a26c83015c30004caf7cc04598bcc84916762 = $this->env->getExtension("native_profiler");
        $__internal_ca9fdc70defe26e8fe2e45398d1a26c83015c30004caf7cc04598bcc84916762->enter($__internal_ca9fdc70defe26e8fe2e45398d1a26c83015c30004caf7cc04598bcc84916762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ca9fdc70defe26e8fe2e45398d1a26c83015c30004caf7cc04598bcc84916762->leave($__internal_ca9fdc70defe26e8fe2e45398d1a26c83015c30004caf7cc04598bcc84916762_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
