<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3d83cc7f4a67640cf4366d51d8c47dccbb3ab825c9be740072656ff100b56b62 extends Twig_Template
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
        $__internal_3c198d78c197b53d9aa9f654982a299ae562d6e3640a5a0273ae434e85054592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c198d78c197b53d9aa9f654982a299ae562d6e3640a5a0273ae434e85054592->enter($__internal_3c198d78c197b53d9aa9f654982a299ae562d6e3640a5a0273ae434e85054592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_778367c490ed3d495f98ff2c8ec865154b1bf8e07dd5a08d952ed62e1125454c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778367c490ed3d495f98ff2c8ec865154b1bf8e07dd5a08d952ed62e1125454c->enter($__internal_778367c490ed3d495f98ff2c8ec865154b1bf8e07dd5a08d952ed62e1125454c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3c198d78c197b53d9aa9f654982a299ae562d6e3640a5a0273ae434e85054592->leave($__internal_3c198d78c197b53d9aa9f654982a299ae562d6e3640a5a0273ae434e85054592_prof);

        
        $__internal_778367c490ed3d495f98ff2c8ec865154b1bf8e07dd5a08d952ed62e1125454c->leave($__internal_778367c490ed3d495f98ff2c8ec865154b1bf8e07dd5a08d952ed62e1125454c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
