<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8779b5285e931c9b866fdbb1fe5e59d28f8b92598b5bdedb2736ba0a9c59250e extends Twig_Template
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
        $__internal_7a004d4bdc154af9aa296711eb78f867970ab6e55fb83f530bc0ea09b5e65696 = $this->env->getExtension("native_profiler");
        $__internal_7a004d4bdc154af9aa296711eb78f867970ab6e55fb83f530bc0ea09b5e65696->enter($__internal_7a004d4bdc154af9aa296711eb78f867970ab6e55fb83f530bc0ea09b5e65696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7a004d4bdc154af9aa296711eb78f867970ab6e55fb83f530bc0ea09b5e65696->leave($__internal_7a004d4bdc154af9aa296711eb78f867970ab6e55fb83f530bc0ea09b5e65696_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
