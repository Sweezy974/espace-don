<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7c8fbb746287eceb26172f972ef7f597aba3660f895da9dbc2d80920f5e4259f extends Twig_Template
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
        $__internal_6209fb2a4f0b257ee5a33e66db2114d6885df269686afd0f3605e2582d8c52bd = $this->env->getExtension("native_profiler");
        $__internal_6209fb2a4f0b257ee5a33e66db2114d6885df269686afd0f3605e2582d8c52bd->enter($__internal_6209fb2a4f0b257ee5a33e66db2114d6885df269686afd0f3605e2582d8c52bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6209fb2a4f0b257ee5a33e66db2114d6885df269686afd0f3605e2582d8c52bd->leave($__internal_6209fb2a4f0b257ee5a33e66db2114d6885df269686afd0f3605e2582d8c52bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
