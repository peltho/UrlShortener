<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_083c5e26d3c15ab56bdcedf83a767c6a394074d8726cb70eb68955acbfe30803 extends Twig_Template
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
        $__internal_c6941d475afa7655e93bd207df7622725e2df3be9577a84f399bf4efddb6200b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6941d475afa7655e93bd207df7622725e2df3be9577a84f399bf4efddb6200b->enter($__internal_c6941d475afa7655e93bd207df7622725e2df3be9577a84f399bf4efddb6200b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_df189c8f7b495b218497ad6ed32e0411d6b9b44093dc086368ec2006cdb7eb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df189c8f7b495b218497ad6ed32e0411d6b9b44093dc086368ec2006cdb7eb8d->enter($__internal_df189c8f7b495b218497ad6ed32e0411d6b9b44093dc086368ec2006cdb7eb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c6941d475afa7655e93bd207df7622725e2df3be9577a84f399bf4efddb6200b->leave($__internal_c6941d475afa7655e93bd207df7622725e2df3be9577a84f399bf4efddb6200b_prof);

        
        $__internal_df189c8f7b495b218497ad6ed32e0411d6b9b44093dc086368ec2006cdb7eb8d->leave($__internal_df189c8f7b495b218497ad6ed32e0411d6b9b44093dc086368ec2006cdb7eb8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
