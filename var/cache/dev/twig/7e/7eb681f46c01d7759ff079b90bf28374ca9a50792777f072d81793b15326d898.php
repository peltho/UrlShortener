<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fb119405b368fa8247cecef5b9b88ae299d02e96ae115f1fe7e136e453c08792 extends Twig_Template
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
        $__internal_fe1747f60db6ee39ec291a51dca0480160f10e2f0a1ae05c9f88c4a496faa366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1747f60db6ee39ec291a51dca0480160f10e2f0a1ae05c9f88c4a496faa366->enter($__internal_fe1747f60db6ee39ec291a51dca0480160f10e2f0a1ae05c9f88c4a496faa366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_234b8cbdabe8dc8c12234a123e2d8d209f7a693de463d15603f628389285f918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234b8cbdabe8dc8c12234a123e2d8d209f7a693de463d15603f628389285f918->enter($__internal_234b8cbdabe8dc8c12234a123e2d8d209f7a693de463d15603f628389285f918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fe1747f60db6ee39ec291a51dca0480160f10e2f0a1ae05c9f88c4a496faa366->leave($__internal_fe1747f60db6ee39ec291a51dca0480160f10e2f0a1ae05c9f88c4a496faa366_prof);

        
        $__internal_234b8cbdabe8dc8c12234a123e2d8d209f7a693de463d15603f628389285f918->leave($__internal_234b8cbdabe8dc8c12234a123e2d8d209f7a693de463d15603f628389285f918_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
