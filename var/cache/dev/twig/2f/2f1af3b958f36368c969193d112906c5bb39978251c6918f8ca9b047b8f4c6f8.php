<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_26992a52dacf718d78ae17d7a5117e035f9550facee4003dcd5a2cd77174b4ee extends Twig_Template
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
        $__internal_d0d1ead001aa8223e31c646b0a194bfef9324a801c43480482ca20519e81db26 = $this->env->getExtension("native_profiler");
        $__internal_d0d1ead001aa8223e31c646b0a194bfef9324a801c43480482ca20519e81db26->enter($__internal_d0d1ead001aa8223e31c646b0a194bfef9324a801c43480482ca20519e81db26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d0d1ead001aa8223e31c646b0a194bfef9324a801c43480482ca20519e81db26->leave($__internal_d0d1ead001aa8223e31c646b0a194bfef9324a801c43480482ca20519e81db26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
