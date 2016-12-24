<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_928b65361d976b567f694af5f7337a0c3a855e3669ed393679b0f7fb05e6f7d3 extends Twig_Template
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
        $__internal_6198b7d7cc4b38229d18c80b4ba76df6d9527cc1615c23a3174adce594add59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6198b7d7cc4b38229d18c80b4ba76df6d9527cc1615c23a3174adce594add59b->enter($__internal_6198b7d7cc4b38229d18c80b4ba76df6d9527cc1615c23a3174adce594add59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b071aa223fc7a80bb1fd316d310fc078bb4386125cbea0e489b1c67cdd6c27b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b071aa223fc7a80bb1fd316d310fc078bb4386125cbea0e489b1c67cdd6c27b6->enter($__internal_b071aa223fc7a80bb1fd316d310fc078bb4386125cbea0e489b1c67cdd6c27b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6198b7d7cc4b38229d18c80b4ba76df6d9527cc1615c23a3174adce594add59b->leave($__internal_6198b7d7cc4b38229d18c80b4ba76df6d9527cc1615c23a3174adce594add59b_prof);

        
        $__internal_b071aa223fc7a80bb1fd316d310fc078bb4386125cbea0e489b1c67cdd6c27b6->leave($__internal_b071aa223fc7a80bb1fd316d310fc078bb4386125cbea0e489b1c67cdd6c27b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
