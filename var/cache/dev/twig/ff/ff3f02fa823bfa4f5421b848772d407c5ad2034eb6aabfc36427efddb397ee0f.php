<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8f4edfd7c699a67ca1a7ebdecae963e1b29b917bee72d01b01dfe291ad6477c1 extends Twig_Template
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
        $__internal_4210cdb544bb0acfbe02d347a0aa74c89ecce9aa17dc385e148b21231c511f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4210cdb544bb0acfbe02d347a0aa74c89ecce9aa17dc385e148b21231c511f3c->enter($__internal_4210cdb544bb0acfbe02d347a0aa74c89ecce9aa17dc385e148b21231c511f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9e542dc8a164208fb0a90f19593b642bcd447b51298b4cd4661e365e9aff3556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e542dc8a164208fb0a90f19593b642bcd447b51298b4cd4661e365e9aff3556->enter($__internal_9e542dc8a164208fb0a90f19593b642bcd447b51298b4cd4661e365e9aff3556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4210cdb544bb0acfbe02d347a0aa74c89ecce9aa17dc385e148b21231c511f3c->leave($__internal_4210cdb544bb0acfbe02d347a0aa74c89ecce9aa17dc385e148b21231c511f3c_prof);

        
        $__internal_9e542dc8a164208fb0a90f19593b642bcd447b51298b4cd4661e365e9aff3556->leave($__internal_9e542dc8a164208fb0a90f19593b642bcd447b51298b4cd4661e365e9aff3556_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
