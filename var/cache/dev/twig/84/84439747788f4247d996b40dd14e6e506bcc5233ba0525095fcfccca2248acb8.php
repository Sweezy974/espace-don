<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_439b935547c780989f43fedfddd38f9f456db392a9bad7edaa38fd5d6cd00796 extends Twig_Template
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
        $__internal_9a439726279b137f4a1a9acd60d3923b41dbbee85151ac372f9b22c8dfa58ff6 = $this->env->getExtension("native_profiler");
        $__internal_9a439726279b137f4a1a9acd60d3923b41dbbee85151ac372f9b22c8dfa58ff6->enter($__internal_9a439726279b137f4a1a9acd60d3923b41dbbee85151ac372f9b22c8dfa58ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9a439726279b137f4a1a9acd60d3923b41dbbee85151ac372f9b22c8dfa58ff6->leave($__internal_9a439726279b137f4a1a9acd60d3923b41dbbee85151ac372f9b22c8dfa58ff6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
