<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_7437965f8bf28dfa4edd5a08625be073d098e70cbcb868a3914bd27b6ccc93ad extends Twig_Template
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
        $__internal_41a4e8fbb6c69801e5ea4e4591246e414e7f285f8250e9e9ce6026c4e9b02445 = $this->env->getExtension("native_profiler");
        $__internal_41a4e8fbb6c69801e5ea4e4591246e414e7f285f8250e9e9ce6026c4e9b02445->enter($__internal_41a4e8fbb6c69801e5ea4e4591246e414e7f285f8250e9e9ce6026c4e9b02445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_41a4e8fbb6c69801e5ea4e4591246e414e7f285f8250e9e9ce6026c4e9b02445->leave($__internal_41a4e8fbb6c69801e5ea4e4591246e414e7f285f8250e9e9ce6026c4e9b02445_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (false !== $label): ?>*/
/* <?php if ($required) { $label_attr['class'] = trim((isset($label_attr['class']) ? $label_attr['class'] : '').' required'); } ?>*/
/* <?php if (!$compound) { $label_attr['for'] = $id; } ?>*/
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <label <?php foreach ($label_attr as $k => $v) { printf('%s="%s" ', $view->escape($k), $view->escape($v)); } ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></label>*/
/* <?php endif ?>*/
/* */
