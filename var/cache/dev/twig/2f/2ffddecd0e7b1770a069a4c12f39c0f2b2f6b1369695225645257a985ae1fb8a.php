<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fa0951799f5325e0ff8d2335bf83b35ce5b444625c89fbacd7176767e7b89e37 extends Twig_Template
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
        $__internal_40ab92d5c7ed5e8ca211db621e2307845c57adb41fbc2eb861e23e4a81b2378b = $this->env->getExtension("native_profiler");
        $__internal_40ab92d5c7ed5e8ca211db621e2307845c57adb41fbc2eb861e23e4a81b2378b->enter($__internal_40ab92d5c7ed5e8ca211db621e2307845c57adb41fbc2eb861e23e4a81b2378b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_40ab92d5c7ed5e8ca211db621e2307845c57adb41fbc2eb861e23e4a81b2378b->leave($__internal_40ab92d5c7ed5e8ca211db621e2307845c57adb41fbc2eb861e23e4a81b2378b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
