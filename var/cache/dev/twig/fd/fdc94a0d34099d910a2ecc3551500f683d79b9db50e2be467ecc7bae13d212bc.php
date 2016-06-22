<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1ccfcadc0a8b3a42c22ccd2b95b3fc7a701c2e4b9d3a5e3bb8e4919dc1c8450e extends Twig_Template
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
        $__internal_7daf1ba588caa236cd22e5a8dc663db59623f119af6788bae891ab136a99c72c = $this->env->getExtension("native_profiler");
        $__internal_7daf1ba588caa236cd22e5a8dc663db59623f119af6788bae891ab136a99c72c->enter($__internal_7daf1ba588caa236cd22e5a8dc663db59623f119af6788bae891ab136a99c72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7daf1ba588caa236cd22e5a8dc663db59623f119af6788bae891ab136a99c72c->leave($__internal_7daf1ba588caa236cd22e5a8dc663db59623f119af6788bae891ab136a99c72c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
