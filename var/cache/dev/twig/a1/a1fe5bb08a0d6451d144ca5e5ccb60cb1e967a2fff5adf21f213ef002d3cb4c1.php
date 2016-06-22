<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_137423f8960399a2b9af39608adc495421944ef52b40cba9062280a744d4bd90 extends Twig_Template
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
        $__internal_28094f3a70e8e7d26abdf53bfce4e98b22f0c8ff0f3b0cae4c62c055a48404fc = $this->env->getExtension("native_profiler");
        $__internal_28094f3a70e8e7d26abdf53bfce4e98b22f0c8ff0f3b0cae4c62c055a48404fc->enter($__internal_28094f3a70e8e7d26abdf53bfce4e98b22f0c8ff0f3b0cae4c62c055a48404fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_28094f3a70e8e7d26abdf53bfce4e98b22f0c8ff0f3b0cae4c62c055a48404fc->leave($__internal_28094f3a70e8e7d26abdf53bfce4e98b22f0c8ff0f3b0cae4c62c055a48404fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
