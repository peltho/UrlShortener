<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_171717644e7a301d325108976286d53aebb33aec152d92a608afbffc7a177153 extends Twig_Template
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
        $__internal_8d7934fb1dcef1ae07a8881c7a6772a24e7dc3ec10e682b6eb6007b8d53103d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7934fb1dcef1ae07a8881c7a6772a24e7dc3ec10e682b6eb6007b8d53103d6->enter($__internal_8d7934fb1dcef1ae07a8881c7a6772a24e7dc3ec10e682b6eb6007b8d53103d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2064192810bbac57c127a2ffee59ddbe009096f1538cce7b8087decdd8d6c78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2064192810bbac57c127a2ffee59ddbe009096f1538cce7b8087decdd8d6c78c->enter($__internal_2064192810bbac57c127a2ffee59ddbe009096f1538cce7b8087decdd8d6c78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8d7934fb1dcef1ae07a8881c7a6772a24e7dc3ec10e682b6eb6007b8d53103d6->leave($__internal_8d7934fb1dcef1ae07a8881c7a6772a24e7dc3ec10e682b6eb6007b8d53103d6_prof);

        
        $__internal_2064192810bbac57c127a2ffee59ddbe009096f1538cce7b8087decdd8d6c78c->leave($__internal_2064192810bbac57c127a2ffee59ddbe009096f1538cce7b8087decdd8d6c78c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
