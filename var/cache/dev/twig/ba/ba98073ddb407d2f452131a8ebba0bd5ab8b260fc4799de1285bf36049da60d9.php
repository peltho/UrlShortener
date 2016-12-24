<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8c647dc3fe76bc6399839bfa0f6da327a8ed977d04d3757ac7ca5a7a6ae90a51 extends Twig_Template
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
        $__internal_d09e5d38c9783cd660025c475de68151f7057569f30ad164cafa7c94fca0162a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09e5d38c9783cd660025c475de68151f7057569f30ad164cafa7c94fca0162a->enter($__internal_d09e5d38c9783cd660025c475de68151f7057569f30ad164cafa7c94fca0162a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d4b727a22312e1dd4b2ccf051a6c0ec9047cfac028c8e724317d5d50f62e7205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b727a22312e1dd4b2ccf051a6c0ec9047cfac028c8e724317d5d50f62e7205->enter($__internal_d4b727a22312e1dd4b2ccf051a6c0ec9047cfac028c8e724317d5d50f62e7205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d09e5d38c9783cd660025c475de68151f7057569f30ad164cafa7c94fca0162a->leave($__internal_d09e5d38c9783cd660025c475de68151f7057569f30ad164cafa7c94fca0162a_prof);

        
        $__internal_d4b727a22312e1dd4b2ccf051a6c0ec9047cfac028c8e724317d5d50f62e7205->leave($__internal_d4b727a22312e1dd4b2ccf051a6c0ec9047cfac028c8e724317d5d50f62e7205_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
