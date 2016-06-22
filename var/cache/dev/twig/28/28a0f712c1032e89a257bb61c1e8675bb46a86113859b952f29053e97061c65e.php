<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2a6fda1fc8010a6331c7dacb23451a2ad70620c18227454ff03b344cea2c47f2 extends Twig_Template
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
        $__internal_33b97ab2b2fae4c641f4b817f40ff216f06d0fbd40d9191138f62a1b6f7b437a = $this->env->getExtension("native_profiler");
        $__internal_33b97ab2b2fae4c641f4b817f40ff216f06d0fbd40d9191138f62a1b6f7b437a->enter($__internal_33b97ab2b2fae4c641f4b817f40ff216f06d0fbd40d9191138f62a1b6f7b437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_33b97ab2b2fae4c641f4b817f40ff216f06d0fbd40d9191138f62a1b6f7b437a->leave($__internal_33b97ab2b2fae4c641f4b817f40ff216f06d0fbd40d9191138f62a1b6f7b437a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
