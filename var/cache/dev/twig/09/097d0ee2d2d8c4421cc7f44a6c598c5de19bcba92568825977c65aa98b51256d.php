<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_cceb737a2ae9450e18628b7f29eebd0fa36ff449f807176e49cfde2bb18c301a extends Twig_Template
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
        $__internal_f6145c4af0bb0ddc2a30526ea999f0d1f10a1c33ef8c36b30136b95efd07058b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6145c4af0bb0ddc2a30526ea999f0d1f10a1c33ef8c36b30136b95efd07058b->enter($__internal_f6145c4af0bb0ddc2a30526ea999f0d1f10a1c33ef8c36b30136b95efd07058b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_77f7600e2e2856d486550bb27e1481ef938eaa07d009cc9f260f8790b6a50f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f7600e2e2856d486550bb27e1481ef938eaa07d009cc9f260f8790b6a50f16->enter($__internal_77f7600e2e2856d486550bb27e1481ef938eaa07d009cc9f260f8790b6a50f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f6145c4af0bb0ddc2a30526ea999f0d1f10a1c33ef8c36b30136b95efd07058b->leave($__internal_f6145c4af0bb0ddc2a30526ea999f0d1f10a1c33ef8c36b30136b95efd07058b_prof);

        
        $__internal_77f7600e2e2856d486550bb27e1481ef938eaa07d009cc9f260f8790b6a50f16->leave($__internal_77f7600e2e2856d486550bb27e1481ef938eaa07d009cc9f260f8790b6a50f16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
