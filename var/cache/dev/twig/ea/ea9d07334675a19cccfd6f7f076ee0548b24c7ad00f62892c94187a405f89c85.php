<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9f27efe099e208b15944180c7a7691bd224dd6296e3d5701272724c34f3ec70b extends Twig_Template
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
        $__internal_3bfe6e449e2ec8ec099d5bde663d487dee3851e1441bc90435eaa2b6bbb94899 = $this->env->getExtension("native_profiler");
        $__internal_3bfe6e449e2ec8ec099d5bde663d487dee3851e1441bc90435eaa2b6bbb94899->enter($__internal_3bfe6e449e2ec8ec099d5bde663d487dee3851e1441bc90435eaa2b6bbb94899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3bfe6e449e2ec8ec099d5bde663d487dee3851e1441bc90435eaa2b6bbb94899->leave($__internal_3bfe6e449e2ec8ec099d5bde663d487dee3851e1441bc90435eaa2b6bbb94899_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
