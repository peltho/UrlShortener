<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b9d171de1fc17f7d7a699aaf9f4dd5e018eac2e452701ac05e85df0aaceb2885 extends Twig_Template
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
        $__internal_e29077e97b632ac5b9c9836356c1f22dd1e0aeceb7b0ca29f16659ad8c5cca3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29077e97b632ac5b9c9836356c1f22dd1e0aeceb7b0ca29f16659ad8c5cca3e->enter($__internal_e29077e97b632ac5b9c9836356c1f22dd1e0aeceb7b0ca29f16659ad8c5cca3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_fad25cc5824921435a7e9fcbd32c690f8a1197328f9a7b5a0159c9b180042c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad25cc5824921435a7e9fcbd32c690f8a1197328f9a7b5a0159c9b180042c89->enter($__internal_fad25cc5824921435a7e9fcbd32c690f8a1197328f9a7b5a0159c9b180042c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e29077e97b632ac5b9c9836356c1f22dd1e0aeceb7b0ca29f16659ad8c5cca3e->leave($__internal_e29077e97b632ac5b9c9836356c1f22dd1e0aeceb7b0ca29f16659ad8c5cca3e_prof);

        
        $__internal_fad25cc5824921435a7e9fcbd32c690f8a1197328f9a7b5a0159c9b180042c89->leave($__internal_fad25cc5824921435a7e9fcbd32c690f8a1197328f9a7b5a0159c9b180042c89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
