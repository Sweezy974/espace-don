<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_589a5c08cec25ec6704947b0ebd265ecfc5ae3cbd880e55641ac7bccf045bf4b extends Twig_Template
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
        $__internal_1e3d2d8a7fd0c281ec644d8e41140c9a0e8b9455e7b801d44802a84cc630d9b7 = $this->env->getExtension("native_profiler");
        $__internal_1e3d2d8a7fd0c281ec644d8e41140c9a0e8b9455e7b801d44802a84cc630d9b7->enter($__internal_1e3d2d8a7fd0c281ec644d8e41140c9a0e8b9455e7b801d44802a84cc630d9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1e3d2d8a7fd0c281ec644d8e41140c9a0e8b9455e7b801d44802a84cc630d9b7->leave($__internal_1e3d2d8a7fd0c281ec644d8e41140c9a0e8b9455e7b801d44802a84cc630d9b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
