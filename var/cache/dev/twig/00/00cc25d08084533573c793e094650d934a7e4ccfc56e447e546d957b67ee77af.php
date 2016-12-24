<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_05df047184e4785d4cd18dc0cd190470ac7181e2abe31e0e8bb84410d5831618 extends Twig_Template
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
        $__internal_948ad6e1fb166ce463ef9432491b9ce5af758f060c5562461fd42c920f7aae7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948ad6e1fb166ce463ef9432491b9ce5af758f060c5562461fd42c920f7aae7b->enter($__internal_948ad6e1fb166ce463ef9432491b9ce5af758f060c5562461fd42c920f7aae7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_69909e38e5070614c32350b5a7b1660fcd55bdb31e92bbd890106899c6f042f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69909e38e5070614c32350b5a7b1660fcd55bdb31e92bbd890106899c6f042f6->enter($__internal_69909e38e5070614c32350b5a7b1660fcd55bdb31e92bbd890106899c6f042f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_948ad6e1fb166ce463ef9432491b9ce5af758f060c5562461fd42c920f7aae7b->leave($__internal_948ad6e1fb166ce463ef9432491b9ce5af758f060c5562461fd42c920f7aae7b_prof);

        
        $__internal_69909e38e5070614c32350b5a7b1660fcd55bdb31e92bbd890106899c6f042f6->leave($__internal_69909e38e5070614c32350b5a7b1660fcd55bdb31e92bbd890106899c6f042f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
