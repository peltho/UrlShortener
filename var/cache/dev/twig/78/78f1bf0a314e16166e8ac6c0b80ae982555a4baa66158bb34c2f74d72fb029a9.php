<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_25c65161d004ec50794a849170338c34132a0bb32e472a9a6fdca51f023bbad2 extends Twig_Template
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
        $__internal_bd64d6e051347d7a8610d26c21f0b1f33a81510adfd5787804ccb5765c665bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd64d6e051347d7a8610d26c21f0b1f33a81510adfd5787804ccb5765c665bca->enter($__internal_bd64d6e051347d7a8610d26c21f0b1f33a81510adfd5787804ccb5765c665bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9cba6c0d4f10207fd111a24d2ef2950fa07a78a029af7044be6b873beeaf6999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cba6c0d4f10207fd111a24d2ef2950fa07a78a029af7044be6b873beeaf6999->enter($__internal_9cba6c0d4f10207fd111a24d2ef2950fa07a78a029af7044be6b873beeaf6999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bd64d6e051347d7a8610d26c21f0b1f33a81510adfd5787804ccb5765c665bca->leave($__internal_bd64d6e051347d7a8610d26c21f0b1f33a81510adfd5787804ccb5765c665bca_prof);

        
        $__internal_9cba6c0d4f10207fd111a24d2ef2950fa07a78a029af7044be6b873beeaf6999->leave($__internal_9cba6c0d4f10207fd111a24d2ef2950fa07a78a029af7044be6b873beeaf6999_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
