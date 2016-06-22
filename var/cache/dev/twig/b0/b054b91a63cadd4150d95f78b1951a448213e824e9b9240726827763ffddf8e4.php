<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_eee257b9175ce926375d436f0b68669d8aa7ef3fd33cc5af3332c84f1c25888a extends Twig_Template
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
        $__internal_001ffc0dcf6a9eb0bf1af930da4f8872b4188b7a74fb417d9cce5210d864ed37 = $this->env->getExtension("native_profiler");
        $__internal_001ffc0dcf6a9eb0bf1af930da4f8872b4188b7a74fb417d9cce5210d864ed37->enter($__internal_001ffc0dcf6a9eb0bf1af930da4f8872b4188b7a74fb417d9cce5210d864ed37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_001ffc0dcf6a9eb0bf1af930da4f8872b4188b7a74fb417d9cce5210d864ed37->leave($__internal_001ffc0dcf6a9eb0bf1af930da4f8872b4188b7a74fb417d9cce5210d864ed37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
