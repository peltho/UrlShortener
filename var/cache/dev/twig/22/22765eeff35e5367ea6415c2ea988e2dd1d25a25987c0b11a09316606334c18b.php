<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5384edb8598d17273cbf36f28612cfe512bfe2a1a85dec4ef41b12ad37761e93 extends Twig_Template
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
        $__internal_8f7e764eef9f373c4929ab1b1e2211a54c19550db9256ce80c5a8f1d440a4550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7e764eef9f373c4929ab1b1e2211a54c19550db9256ce80c5a8f1d440a4550->enter($__internal_8f7e764eef9f373c4929ab1b1e2211a54c19550db9256ce80c5a8f1d440a4550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b8ca9ce8551c59aec042bca4ea1175d64b3ee7d6a62bd9ade278025d59f51587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ca9ce8551c59aec042bca4ea1175d64b3ee7d6a62bd9ade278025d59f51587->enter($__internal_b8ca9ce8551c59aec042bca4ea1175d64b3ee7d6a62bd9ade278025d59f51587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8f7e764eef9f373c4929ab1b1e2211a54c19550db9256ce80c5a8f1d440a4550->leave($__internal_8f7e764eef9f373c4929ab1b1e2211a54c19550db9256ce80c5a8f1d440a4550_prof);

        
        $__internal_b8ca9ce8551c59aec042bca4ea1175d64b3ee7d6a62bd9ade278025d59f51587->leave($__internal_b8ca9ce8551c59aec042bca4ea1175d64b3ee7d6a62bd9ade278025d59f51587_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
