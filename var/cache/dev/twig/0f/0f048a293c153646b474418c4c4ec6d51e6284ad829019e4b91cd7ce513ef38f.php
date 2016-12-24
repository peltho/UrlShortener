<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b5fa16348afc5b8545b052f0bf678f4e5e9b262b5c2282a9c02546ca5f0965c2 extends Twig_Template
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
        $__internal_6b4fdd116c7be3a10b7a1caaae2772950f96c5541cebfcf0f6a7d7306ecb83b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4fdd116c7be3a10b7a1caaae2772950f96c5541cebfcf0f6a7d7306ecb83b4->enter($__internal_6b4fdd116c7be3a10b7a1caaae2772950f96c5541cebfcf0f6a7d7306ecb83b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_53ddcedc0b2ff7ca6d9a7a42d58a92ded0bc3add00b3f2c89a421198641d1582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ddcedc0b2ff7ca6d9a7a42d58a92ded0bc3add00b3f2c89a421198641d1582->enter($__internal_53ddcedc0b2ff7ca6d9a7a42d58a92ded0bc3add00b3f2c89a421198641d1582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6b4fdd116c7be3a10b7a1caaae2772950f96c5541cebfcf0f6a7d7306ecb83b4->leave($__internal_6b4fdd116c7be3a10b7a1caaae2772950f96c5541cebfcf0f6a7d7306ecb83b4_prof);

        
        $__internal_53ddcedc0b2ff7ca6d9a7a42d58a92ded0bc3add00b3f2c89a421198641d1582->leave($__internal_53ddcedc0b2ff7ca6d9a7a42d58a92ded0bc3add00b3f2c89a421198641d1582_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
