<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9896bb7e37814e13bc9e6f5f207e2badebbff3e9f18b87e08ed76a4c149b7b9a extends Twig_Template
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
        $__internal_0b5e222dc4d91b50ff6c26f7a885d9353a66af632558babb9335babfbe9a4ddf = $this->env->getExtension("native_profiler");
        $__internal_0b5e222dc4d91b50ff6c26f7a885d9353a66af632558babb9335babfbe9a4ddf->enter($__internal_0b5e222dc4d91b50ff6c26f7a885d9353a66af632558babb9335babfbe9a4ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0b5e222dc4d91b50ff6c26f7a885d9353a66af632558babb9335babfbe9a4ddf->leave($__internal_0b5e222dc4d91b50ff6c26f7a885d9353a66af632558babb9335babfbe9a4ddf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
