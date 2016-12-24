<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a203b291527326c7fbf58d4af097aa24c14f5dc0e684414584f92be6c4abc691 extends Twig_Template
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
        $__internal_1614f113e4f1ea1ffb75bb289581e72978f1abf89ad2414a76c4f26eb6e174ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1614f113e4f1ea1ffb75bb289581e72978f1abf89ad2414a76c4f26eb6e174ed->enter($__internal_1614f113e4f1ea1ffb75bb289581e72978f1abf89ad2414a76c4f26eb6e174ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_8e2ad8fd99b37d950e66f50ecc078e6d5e2647bef7578395209f3cf694ad679f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2ad8fd99b37d950e66f50ecc078e6d5e2647bef7578395209f3cf694ad679f->enter($__internal_8e2ad8fd99b37d950e66f50ecc078e6d5e2647bef7578395209f3cf694ad679f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1614f113e4f1ea1ffb75bb289581e72978f1abf89ad2414a76c4f26eb6e174ed->leave($__internal_1614f113e4f1ea1ffb75bb289581e72978f1abf89ad2414a76c4f26eb6e174ed_prof);

        
        $__internal_8e2ad8fd99b37d950e66f50ecc078e6d5e2647bef7578395209f3cf694ad679f->leave($__internal_8e2ad8fd99b37d950e66f50ecc078e6d5e2647bef7578395209f3cf694ad679f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
