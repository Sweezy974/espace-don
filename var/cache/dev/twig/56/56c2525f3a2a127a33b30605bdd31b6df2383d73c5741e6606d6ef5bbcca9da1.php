<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_49b3800dcd5bf96bc586d91a24114aa89e50f935a709ecef03b027d3a4f13235 extends Twig_Template
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
        $__internal_5b3eab3e3bb0e0146db5cff2da5880cb39c36142a20772c628d20f24e4947634 = $this->env->getExtension("native_profiler");
        $__internal_5b3eab3e3bb0e0146db5cff2da5880cb39c36142a20772c628d20f24e4947634->enter($__internal_5b3eab3e3bb0e0146db5cff2da5880cb39c36142a20772c628d20f24e4947634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5b3eab3e3bb0e0146db5cff2da5880cb39c36142a20772c628d20f24e4947634->leave($__internal_5b3eab3e3bb0e0146db5cff2da5880cb39c36142a20772c628d20f24e4947634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
