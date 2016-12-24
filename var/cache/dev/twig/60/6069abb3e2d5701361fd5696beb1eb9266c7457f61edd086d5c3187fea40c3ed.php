<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_71bebd6b020a05f151cf140392e2b64f00c0c93947f29cc03338ff170739e2b4 extends Twig_Template
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
        $__internal_ef21e344a4cccaf995d3fb316a89106986ce8367115e6a1acad8c8f5049a2fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef21e344a4cccaf995d3fb316a89106986ce8367115e6a1acad8c8f5049a2fcd->enter($__internal_ef21e344a4cccaf995d3fb316a89106986ce8367115e6a1acad8c8f5049a2fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_30de1303a5a4650a240f2486800caee7b6ee2267af25adf7b0a856eb9cc4bbab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30de1303a5a4650a240f2486800caee7b6ee2267af25adf7b0a856eb9cc4bbab->enter($__internal_30de1303a5a4650a240f2486800caee7b6ee2267af25adf7b0a856eb9cc4bbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ef21e344a4cccaf995d3fb316a89106986ce8367115e6a1acad8c8f5049a2fcd->leave($__internal_ef21e344a4cccaf995d3fb316a89106986ce8367115e6a1acad8c8f5049a2fcd_prof);

        
        $__internal_30de1303a5a4650a240f2486800caee7b6ee2267af25adf7b0a856eb9cc4bbab->leave($__internal_30de1303a5a4650a240f2486800caee7b6ee2267af25adf7b0a856eb9cc4bbab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
