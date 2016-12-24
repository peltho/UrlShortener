<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b9bc5e6949cf687e112dc306ab9355c199d7cd7d89ea38462bc9381124e8050e extends Twig_Template
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
        $__internal_af95471e3bc0bad9fb33ffe8d06b258212885e22eadbbdce2955bee36a36a9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af95471e3bc0bad9fb33ffe8d06b258212885e22eadbbdce2955bee36a36a9f5->enter($__internal_af95471e3bc0bad9fb33ffe8d06b258212885e22eadbbdce2955bee36a36a9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9d4fc23e64ab371819eb078b70d0c595129a06a61af06b05298ceae1e6a631e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4fc23e64ab371819eb078b70d0c595129a06a61af06b05298ceae1e6a631e9->enter($__internal_9d4fc23e64ab371819eb078b70d0c595129a06a61af06b05298ceae1e6a631e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_af95471e3bc0bad9fb33ffe8d06b258212885e22eadbbdce2955bee36a36a9f5->leave($__internal_af95471e3bc0bad9fb33ffe8d06b258212885e22eadbbdce2955bee36a36a9f5_prof);

        
        $__internal_9d4fc23e64ab371819eb078b70d0c595129a06a61af06b05298ceae1e6a631e9->leave($__internal_9d4fc23e64ab371819eb078b70d0c595129a06a61af06b05298ceae1e6a631e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
