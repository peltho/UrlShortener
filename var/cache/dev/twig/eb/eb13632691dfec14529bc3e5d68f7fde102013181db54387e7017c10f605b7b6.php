<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_49aaf657b4e6121cc0f23b5f80df065fffb78a7157693ad836bbf18fdde96ba5 extends Twig_Template
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
        $__internal_928a0572eb6ec3ca5ddad428ebf9380716768c4890fda95dd69714d0c8cbe6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928a0572eb6ec3ca5ddad428ebf9380716768c4890fda95dd69714d0c8cbe6c6->enter($__internal_928a0572eb6ec3ca5ddad428ebf9380716768c4890fda95dd69714d0c8cbe6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b6882ae932bcd08e922ad6606057dc0722f1ce569d097bcee8803a9672a52782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6882ae932bcd08e922ad6606057dc0722f1ce569d097bcee8803a9672a52782->enter($__internal_b6882ae932bcd08e922ad6606057dc0722f1ce569d097bcee8803a9672a52782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_928a0572eb6ec3ca5ddad428ebf9380716768c4890fda95dd69714d0c8cbe6c6->leave($__internal_928a0572eb6ec3ca5ddad428ebf9380716768c4890fda95dd69714d0c8cbe6c6_prof);

        
        $__internal_b6882ae932bcd08e922ad6606057dc0722f1ce569d097bcee8803a9672a52782->leave($__internal_b6882ae932bcd08e922ad6606057dc0722f1ce569d097bcee8803a9672a52782_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
