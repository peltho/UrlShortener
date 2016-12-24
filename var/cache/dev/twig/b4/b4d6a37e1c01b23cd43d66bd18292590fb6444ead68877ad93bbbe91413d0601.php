<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2aa716c7c5f78d18a10af468fe600236bcbe59dafe84dc54d04f2cbbb09188e extends Twig_Template
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
        $__internal_31f5a573ed8f846ac6b32f791bd0f1e230ced6f70e753c92510f54d87fa06052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f5a573ed8f846ac6b32f791bd0f1e230ced6f70e753c92510f54d87fa06052->enter($__internal_31f5a573ed8f846ac6b32f791bd0f1e230ced6f70e753c92510f54d87fa06052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ec6d3d4e2eebacdd5f07130f387f3a218f82f79b016c66aa31a53058ee7b302b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6d3d4e2eebacdd5f07130f387f3a218f82f79b016c66aa31a53058ee7b302b->enter($__internal_ec6d3d4e2eebacdd5f07130f387f3a218f82f79b016c66aa31a53058ee7b302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_31f5a573ed8f846ac6b32f791bd0f1e230ced6f70e753c92510f54d87fa06052->leave($__internal_31f5a573ed8f846ac6b32f791bd0f1e230ced6f70e753c92510f54d87fa06052_prof);

        
        $__internal_ec6d3d4e2eebacdd5f07130f387f3a218f82f79b016c66aa31a53058ee7b302b->leave($__internal_ec6d3d4e2eebacdd5f07130f387f3a218f82f79b016c66aa31a53058ee7b302b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
