<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6c378da2fba9a84a010601916c0bcab5f7634677a6e67cb4cfb66ce14dc45b39 extends Twig_Template
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
        $__internal_961e93bd4fd465f84d13f5ef3113b72b6fb4cfc10b52b8aa0cd7cddc04d2f479 = $this->env->getExtension("native_profiler");
        $__internal_961e93bd4fd465f84d13f5ef3113b72b6fb4cfc10b52b8aa0cd7cddc04d2f479->enter($__internal_961e93bd4fd465f84d13f5ef3113b72b6fb4cfc10b52b8aa0cd7cddc04d2f479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_961e93bd4fd465f84d13f5ef3113b72b6fb4cfc10b52b8aa0cd7cddc04d2f479->leave($__internal_961e93bd4fd465f84d13f5ef3113b72b6fb4cfc10b52b8aa0cd7cddc04d2f479_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
