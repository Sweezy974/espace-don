<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9f207561f0f04075fc58bb68bef65d386da6be148d3b6b627404c1afecd28b0f extends Twig_Template
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
        $__internal_5576447d26c5cf2d55bd7efbf2dffe2fd8eab449a00cadc77b58569165b2f44a = $this->env->getExtension("native_profiler");
        $__internal_5576447d26c5cf2d55bd7efbf2dffe2fd8eab449a00cadc77b58569165b2f44a->enter($__internal_5576447d26c5cf2d55bd7efbf2dffe2fd8eab449a00cadc77b58569165b2f44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5576447d26c5cf2d55bd7efbf2dffe2fd8eab449a00cadc77b58569165b2f44a->leave($__internal_5576447d26c5cf2d55bd7efbf2dffe2fd8eab449a00cadc77b58569165b2f44a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
