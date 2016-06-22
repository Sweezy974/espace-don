<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_85a053499537bc51d16350d52e3a06bced81bfa61d0453eb834877df817703a6 extends Twig_Template
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
        $__internal_db99b119ec2a829cad96f8cc151fa1e6f32c5af44fe53f350d78acf507d72fb6 = $this->env->getExtension("native_profiler");
        $__internal_db99b119ec2a829cad96f8cc151fa1e6f32c5af44fe53f350d78acf507d72fb6->enter($__internal_db99b119ec2a829cad96f8cc151fa1e6f32c5af44fe53f350d78acf507d72fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_db99b119ec2a829cad96f8cc151fa1e6f32c5af44fe53f350d78acf507d72fb6->leave($__internal_db99b119ec2a829cad96f8cc151fa1e6f32c5af44fe53f350d78acf507d72fb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
