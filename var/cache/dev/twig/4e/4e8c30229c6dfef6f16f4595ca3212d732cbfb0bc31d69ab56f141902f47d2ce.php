<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dc6c134dbcd5f256d914fe323d5b27195e997782e74fdf40d12efa5c5c2e1092 extends Twig_Template
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
        $__internal_12c789c96b59fb43fb452f1e3edc56ad85eee14ec76c5e8d2d6d02fc206da614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c789c96b59fb43fb452f1e3edc56ad85eee14ec76c5e8d2d6d02fc206da614->enter($__internal_12c789c96b59fb43fb452f1e3edc56ad85eee14ec76c5e8d2d6d02fc206da614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c8eb90ac04ae6082b4dd542b7cb8a79572ecf0cf9a0f30cafae24d15fc9bcc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8eb90ac04ae6082b4dd542b7cb8a79572ecf0cf9a0f30cafae24d15fc9bcc98->enter($__internal_c8eb90ac04ae6082b4dd542b7cb8a79572ecf0cf9a0f30cafae24d15fc9bcc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_12c789c96b59fb43fb452f1e3edc56ad85eee14ec76c5e8d2d6d02fc206da614->leave($__internal_12c789c96b59fb43fb452f1e3edc56ad85eee14ec76c5e8d2d6d02fc206da614_prof);

        
        $__internal_c8eb90ac04ae6082b4dd542b7cb8a79572ecf0cf9a0f30cafae24d15fc9bcc98->leave($__internal_c8eb90ac04ae6082b4dd542b7cb8a79572ecf0cf9a0f30cafae24d15fc9bcc98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
