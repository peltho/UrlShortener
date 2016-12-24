<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7a6ed0459933bd6095be2233ce5695b0ea2d616467c02e7cd24d66def159b9a0 extends Twig_Template
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
        $__internal_caaa3c43f38556918e7a7f22ff7029de151b6a861fb598b31fb8387147ade0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caaa3c43f38556918e7a7f22ff7029de151b6a861fb598b31fb8387147ade0fb->enter($__internal_caaa3c43f38556918e7a7f22ff7029de151b6a861fb598b31fb8387147ade0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c88df69d735d1f254670af84882d91af0fcacc6eadff63271161aeea7396472e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88df69d735d1f254670af84882d91af0fcacc6eadff63271161aeea7396472e->enter($__internal_c88df69d735d1f254670af84882d91af0fcacc6eadff63271161aeea7396472e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_caaa3c43f38556918e7a7f22ff7029de151b6a861fb598b31fb8387147ade0fb->leave($__internal_caaa3c43f38556918e7a7f22ff7029de151b6a861fb598b31fb8387147ade0fb_prof);

        
        $__internal_c88df69d735d1f254670af84882d91af0fcacc6eadff63271161aeea7396472e->leave($__internal_c88df69d735d1f254670af84882d91af0fcacc6eadff63271161aeea7396472e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
