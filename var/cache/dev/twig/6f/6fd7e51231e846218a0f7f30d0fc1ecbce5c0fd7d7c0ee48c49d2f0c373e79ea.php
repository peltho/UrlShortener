<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e71d51fc44277dcd08ec3b48cc56d59e0557e681eb126acb8cbe472937f3ed9d extends Twig_Template
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
        $__internal_b7fbd503c4c3a9883e70571cf7fb30f91beea185a56df3b18c5f4582a671e476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7fbd503c4c3a9883e70571cf7fb30f91beea185a56df3b18c5f4582a671e476->enter($__internal_b7fbd503c4c3a9883e70571cf7fb30f91beea185a56df3b18c5f4582a671e476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_201444463269841c41a523328b1f5c54d4fafda15e5c9b15fd36d41a0282f374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201444463269841c41a523328b1f5c54d4fafda15e5c9b15fd36d41a0282f374->enter($__internal_201444463269841c41a523328b1f5c54d4fafda15e5c9b15fd36d41a0282f374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b7fbd503c4c3a9883e70571cf7fb30f91beea185a56df3b18c5f4582a671e476->leave($__internal_b7fbd503c4c3a9883e70571cf7fb30f91beea185a56df3b18c5f4582a671e476_prof);

        
        $__internal_201444463269841c41a523328b1f5c54d4fafda15e5c9b15fd36d41a0282f374->leave($__internal_201444463269841c41a523328b1f5c54d4fafda15e5c9b15fd36d41a0282f374_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
