<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_76e61b315397e6bbaa5a08fe26fbd4b0f52c5d35e281c2cec8ce42034285cc22 extends Twig_Template
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
        $__internal_7edaf80f16d0311f085009068d2496ef89cec14623d065f1682d5838f39dc108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edaf80f16d0311f085009068d2496ef89cec14623d065f1682d5838f39dc108->enter($__internal_7edaf80f16d0311f085009068d2496ef89cec14623d065f1682d5838f39dc108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d799d425e372862cdc75c5d1f42c8a5e6176e91b09c2efeccc1062cfef05c1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d799d425e372862cdc75c5d1f42c8a5e6176e91b09c2efeccc1062cfef05c1e9->enter($__internal_d799d425e372862cdc75c5d1f42c8a5e6176e91b09c2efeccc1062cfef05c1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7edaf80f16d0311f085009068d2496ef89cec14623d065f1682d5838f39dc108->leave($__internal_7edaf80f16d0311f085009068d2496ef89cec14623d065f1682d5838f39dc108_prof);

        
        $__internal_d799d425e372862cdc75c5d1f42c8a5e6176e91b09c2efeccc1062cfef05c1e9->leave($__internal_d799d425e372862cdc75c5d1f42c8a5e6176e91b09c2efeccc1062cfef05c1e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
