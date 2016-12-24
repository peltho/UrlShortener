<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6cd10f34d057a0beab98497d9511feeb7d5b8677a85ca60a7dd8f273a21fc extends Twig_Template
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
        $__internal_f3a0b1dc63b7cf388ee2595d865facf0dda7117cb06b9e7677f5ed1993cebbed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a0b1dc63b7cf388ee2595d865facf0dda7117cb06b9e7677f5ed1993cebbed->enter($__internal_f3a0b1dc63b7cf388ee2595d865facf0dda7117cb06b9e7677f5ed1993cebbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_73c09b2a9eb6292136a674b5cf1900941e7bfe05fdc629b7eaf808d810ffbf51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c09b2a9eb6292136a674b5cf1900941e7bfe05fdc629b7eaf808d810ffbf51->enter($__internal_73c09b2a9eb6292136a674b5cf1900941e7bfe05fdc629b7eaf808d810ffbf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f3a0b1dc63b7cf388ee2595d865facf0dda7117cb06b9e7677f5ed1993cebbed->leave($__internal_f3a0b1dc63b7cf388ee2595d865facf0dda7117cb06b9e7677f5ed1993cebbed_prof);

        
        $__internal_73c09b2a9eb6292136a674b5cf1900941e7bfe05fdc629b7eaf808d810ffbf51->leave($__internal_73c09b2a9eb6292136a674b5cf1900941e7bfe05fdc629b7eaf808d810ffbf51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
