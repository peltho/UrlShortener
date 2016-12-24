<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_853970894709f4efb6a2dccdc14ee7b6c2ac01b45ae1cd916547413d4fecd609 extends Twig_Template
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
        $__internal_ab639149e8c19711a44412aefc855db3e4953942ec2d53526c70c96efa1616a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab639149e8c19711a44412aefc855db3e4953942ec2d53526c70c96efa1616a9->enter($__internal_ab639149e8c19711a44412aefc855db3e4953942ec2d53526c70c96efa1616a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ef266f0c926d84b0e0b6ea80f79f0cf56c63404bc9a7b1202da333cf550ed7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef266f0c926d84b0e0b6ea80f79f0cf56c63404bc9a7b1202da333cf550ed7d4->enter($__internal_ef266f0c926d84b0e0b6ea80f79f0cf56c63404bc9a7b1202da333cf550ed7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ab639149e8c19711a44412aefc855db3e4953942ec2d53526c70c96efa1616a9->leave($__internal_ab639149e8c19711a44412aefc855db3e4953942ec2d53526c70c96efa1616a9_prof);

        
        $__internal_ef266f0c926d84b0e0b6ea80f79f0cf56c63404bc9a7b1202da333cf550ed7d4->leave($__internal_ef266f0c926d84b0e0b6ea80f79f0cf56c63404bc9a7b1202da333cf550ed7d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
