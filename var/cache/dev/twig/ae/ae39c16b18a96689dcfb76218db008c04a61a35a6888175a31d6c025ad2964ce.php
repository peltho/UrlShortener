<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1ef9711d5812e446bdf8ddc16ec977eb826d3ab3cb26507456c9b09b7c4aa358 extends Twig_Template
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
        $__internal_8d4e68e6590633e998e5c59e42aa9a1b16a065dcd6c565dac5f71e2252765568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4e68e6590633e998e5c59e42aa9a1b16a065dcd6c565dac5f71e2252765568->enter($__internal_8d4e68e6590633e998e5c59e42aa9a1b16a065dcd6c565dac5f71e2252765568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0ff4be7af9289e69a0af1d8868252b51c69ad7015c3cde807623b0c1c462adbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff4be7af9289e69a0af1d8868252b51c69ad7015c3cde807623b0c1c462adbc->enter($__internal_0ff4be7af9289e69a0af1d8868252b51c69ad7015c3cde807623b0c1c462adbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8d4e68e6590633e998e5c59e42aa9a1b16a065dcd6c565dac5f71e2252765568->leave($__internal_8d4e68e6590633e998e5c59e42aa9a1b16a065dcd6c565dac5f71e2252765568_prof);

        
        $__internal_0ff4be7af9289e69a0af1d8868252b51c69ad7015c3cde807623b0c1c462adbc->leave($__internal_0ff4be7af9289e69a0af1d8868252b51c69ad7015c3cde807623b0c1c462adbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
