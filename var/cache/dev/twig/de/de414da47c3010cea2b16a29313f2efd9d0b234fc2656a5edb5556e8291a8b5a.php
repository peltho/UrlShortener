<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_59ad285c96328f8c24e063c3e3a9c14e02f3bac9cfe79e2ee508a0e6cc50f161 extends Twig_Template
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
        $__internal_4b1fc930de7d74ef685ae23264634a1fefd28879ab2793a6074fb1ccff331a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1fc930de7d74ef685ae23264634a1fefd28879ab2793a6074fb1ccff331a33->enter($__internal_4b1fc930de7d74ef685ae23264634a1fefd28879ab2793a6074fb1ccff331a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f09e9970a63f2756265cadcb60a18c2a79c28ce6c0c29d7184c79e6ec6cefca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09e9970a63f2756265cadcb60a18c2a79c28ce6c0c29d7184c79e6ec6cefca9->enter($__internal_f09e9970a63f2756265cadcb60a18c2a79c28ce6c0c29d7184c79e6ec6cefca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4b1fc930de7d74ef685ae23264634a1fefd28879ab2793a6074fb1ccff331a33->leave($__internal_4b1fc930de7d74ef685ae23264634a1fefd28879ab2793a6074fb1ccff331a33_prof);

        
        $__internal_f09e9970a63f2756265cadcb60a18c2a79c28ce6c0c29d7184c79e6ec6cefca9->leave($__internal_f09e9970a63f2756265cadcb60a18c2a79c28ce6c0c29d7184c79e6ec6cefca9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
