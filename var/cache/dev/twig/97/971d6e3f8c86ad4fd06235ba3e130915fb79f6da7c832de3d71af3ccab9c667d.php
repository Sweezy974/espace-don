<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3e9788ed103648853f27fd406bc1b1593f9efe7db2e27281920ba1ae169d6b9a extends Twig_Template
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
        $__internal_d4729336942ad61779f3ac7ffe30dff1ff16e9661dbd3e0765324aac4ce1c784 = $this->env->getExtension("native_profiler");
        $__internal_d4729336942ad61779f3ac7ffe30dff1ff16e9661dbd3e0765324aac4ce1c784->enter($__internal_d4729336942ad61779f3ac7ffe30dff1ff16e9661dbd3e0765324aac4ce1c784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d4729336942ad61779f3ac7ffe30dff1ff16e9661dbd3e0765324aac4ce1c784->leave($__internal_d4729336942ad61779f3ac7ffe30dff1ff16e9661dbd3e0765324aac4ce1c784_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
