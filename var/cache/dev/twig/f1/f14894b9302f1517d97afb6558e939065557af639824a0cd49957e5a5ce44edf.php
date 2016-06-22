<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_49531836455a4d3e26eff83cb232aaa7c275e832937ae8b1818928c52c10ec0c extends Twig_Template
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
        $__internal_e574a2ab017036ec55026c0644106fbefe588d36c799958dbcbc16111bf2a3b3 = $this->env->getExtension("native_profiler");
        $__internal_e574a2ab017036ec55026c0644106fbefe588d36c799958dbcbc16111bf2a3b3->enter($__internal_e574a2ab017036ec55026c0644106fbefe588d36c799958dbcbc16111bf2a3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e574a2ab017036ec55026c0644106fbefe588d36c799958dbcbc16111bf2a3b3->leave($__internal_e574a2ab017036ec55026c0644106fbefe588d36c799958dbcbc16111bf2a3b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
