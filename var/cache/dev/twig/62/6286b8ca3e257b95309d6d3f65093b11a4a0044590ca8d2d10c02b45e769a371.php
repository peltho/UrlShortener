<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7523740042894085c30d6fd3c3108f26c2220b12406f79b342f40bc78e4baad extends Twig_Template
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
        $__internal_dab5eb59b5eef5d98554bab69e12035f0345c74f495a496200ca1275ba1ca570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab5eb59b5eef5d98554bab69e12035f0345c74f495a496200ca1275ba1ca570->enter($__internal_dab5eb59b5eef5d98554bab69e12035f0345c74f495a496200ca1275ba1ca570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_bdd2ed87a2b1ad109723451a2c6d216684a956e612c7a92615dfa8d3aa61c019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd2ed87a2b1ad109723451a2c6d216684a956e612c7a92615dfa8d3aa61c019->enter($__internal_bdd2ed87a2b1ad109723451a2c6d216684a956e612c7a92615dfa8d3aa61c019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dab5eb59b5eef5d98554bab69e12035f0345c74f495a496200ca1275ba1ca570->leave($__internal_dab5eb59b5eef5d98554bab69e12035f0345c74f495a496200ca1275ba1ca570_prof);

        
        $__internal_bdd2ed87a2b1ad109723451a2c6d216684a956e612c7a92615dfa8d3aa61c019->leave($__internal_bdd2ed87a2b1ad109723451a2c6d216684a956e612c7a92615dfa8d3aa61c019_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
