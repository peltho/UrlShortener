<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8a33f8f647c8cdf7d8d757c18b5ca06db587ee49b8e44288c872530fa87d1ed9 extends Twig_Template
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
        $__internal_197c5b3198eff44a358801ff9c357543ac86962f5843a398e78467bd18100796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197c5b3198eff44a358801ff9c357543ac86962f5843a398e78467bd18100796->enter($__internal_197c5b3198eff44a358801ff9c357543ac86962f5843a398e78467bd18100796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6618eae4d6230b29c558a0cc5076c389cfda4df03cda4766cced6ab7bbf41172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6618eae4d6230b29c558a0cc5076c389cfda4df03cda4766cced6ab7bbf41172->enter($__internal_6618eae4d6230b29c558a0cc5076c389cfda4df03cda4766cced6ab7bbf41172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_197c5b3198eff44a358801ff9c357543ac86962f5843a398e78467bd18100796->leave($__internal_197c5b3198eff44a358801ff9c357543ac86962f5843a398e78467bd18100796_prof);

        
        $__internal_6618eae4d6230b29c558a0cc5076c389cfda4df03cda4766cced6ab7bbf41172->leave($__internal_6618eae4d6230b29c558a0cc5076c389cfda4df03cda4766cced6ab7bbf41172_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
