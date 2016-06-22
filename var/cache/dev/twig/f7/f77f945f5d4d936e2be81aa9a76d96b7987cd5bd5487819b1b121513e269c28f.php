<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_aa909054b1d30005d997ea9ee0f49a488d50b28e15449019d30dc5a9e70962d5 extends Twig_Template
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
        $__internal_f9469a22ccd37017b7ab4077ec99e6673e01442a1e969f9a6cf3c204f7832c23 = $this->env->getExtension("native_profiler");
        $__internal_f9469a22ccd37017b7ab4077ec99e6673e01442a1e969f9a6cf3c204f7832c23->enter($__internal_f9469a22ccd37017b7ab4077ec99e6673e01442a1e969f9a6cf3c204f7832c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f9469a22ccd37017b7ab4077ec99e6673e01442a1e969f9a6cf3c204f7832c23->leave($__internal_f9469a22ccd37017b7ab4077ec99e6673e01442a1e969f9a6cf3c204f7832c23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
